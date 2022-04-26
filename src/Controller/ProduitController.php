<?php

namespace App\Controller;

use App\Data\SearchData;
use App\Entity\Categorie;
use App\Entity\Produits;
use App\Form\CategorieForumType;
use App\Form\ProduitType;
use App\Form\SearchFormmType;
use App\Form\SearchFormType;
use App\Repository\CategorieRepository;
use App\Repository\ProduitsRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Doctrine\ORM\EntityRepository;
use Dompdf\Dompdf;
use Dompdf\Options;
use Endroid\QrCode\Builder\BuilderInterface;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
use Endroid\QrCode\Label\Alignment\LabelAlignmentCenter;
use Endroid\QrCode\Label\Margin\Margin;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;





class ProduitController extends AbstractController
{
    /**
     * @Route("/produit", name="app_produit")
     */
    public function index(): Response
    {
        return $this->render('produit/index.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }
    /**
     * @param Request $request
     * @param ProduitsRepository $repo
     * @return Response
     * @Route ("/recherche/", name="ajax_search")
     */

    public function searchAction(Request $request, ProduitsRepository $repo)
    {
        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');
        $produits =  $repo->findEntitiesByString($requestString);
        if(!$produits) {
            $result['produits']['error'] = "Produit n'existe pas!";
        } else {
            $result['produits'] = $this->getRealEntities($produits);
        }
        return new Response(json_encode($result));
    }
    public function getRealEntities($produits ){
        foreach ($produits as $produits){
            $realEntities[$produits->getId()] = [$produits->getNom(),$produits->getPrix(),$produits->getDescription(),$produits->getIdPromotion()->getPercentage()
                ,$produits->getImage(),$produits->getPrixFinale(),$produits->getIdCategorie()->getNom()];
        }
        return $realEntities;
    }
    /**
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     * @throws \PhpOffice\PhpSpreadsheet\Writer\Exception
     * @Route ("/generateExcel", name="excel")
     */

    public function generateExcel(ProduitsRepository $prodrepo){

        $produits = $prodrepo->findAll();
        $spreadsheet = new Spreadsheet();

        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'Nom');
        $sheet->setCellValue('C1', 'PrixFinale');
        $sheet->setCellValue('D1', 'Description');
        $sheet->setCellValue('F1', 'Promotion');
        $sheet->setCellValue('H1', 'Profit');
        $sheet->setCellValue('G1', 'Catégorie');
        $sn=1;
        foreach ($produits as $p) {

            $sheet->setCellValue('A'.$sn,$p->getNom());
            $sheet->setCellValue('C'.$sn,$p->getPrixfinale());
            $sheet->setCellValue('H'.$sn,$p->getProfit());
            $sheet->setCellValue('D'.$sn,$p->getDescription());
            $sheet->setCellValue('F'.$sn,$p->getIdPromotion()->getPercentage());
            $sheet->setCellValue('G'.$sn,$p->getIdCategorie()->getNom());
            $sn++;

        }
        $writer = new Xlsx($spreadsheet);
        $fileName = 'produits.xlsx';
        $temp_file = tempnam(sys_get_temp_dir(), $fileName);
        $writer->save($temp_file);
        return $this->file($temp_file, $fileName, ResponseHeaderBag::DISPOSITION_INLINE);
    }

    /**
     * @return void
     * @Route("/qrCode", name="qr_function")
     */
    public function genQrCode(ProduitsRepository $repo){

        return $this->render('produit/qrcode.html.twig');
    }
    /**
     * @Route("/stats", name="stats")
     */
    public function stat(ProduitsRepository $prodrepo){

        $produits = $prodrepo->findAll();
        $prodNom = [];
        $prodPrix= [];

        foreach ($produits as $produit){

            $prodNom[] = $produit->getNom();
            $prodPrix[] = $produit->getProfit();

        }

        return $this->render('produit/stats.html.twig',[
            'prodNom' =>json_encode($prodNom),
            'prodPrix'=>json_encode($prodPrix)
        ]);


    }
    /**
     * @param ProduitsRepository $repo
     * @return Response
     * @Route("AfficheP",name="AA")
     */
    function Affiche(Request $request ,ProduitsRepository $repo,PaginatorInterface $paginator)
    {

        $donnees=$repo->findAll(); //select *
        $rev=array_reverse($donnees);
        $produit= $paginator->paginate(
            $rev,
            $request->query->getInt('page',1),3

        );
        return $this->render('produit/AfficheP.html.twig',['p'=>$produit]);


    }
    /**
     * @param ProduitsRepository $repo
     * @return Response
     * @Route("/listp",name="listp", methods={"GET"})
     */
    function listp( ProduitsRepository $produitsRepository)
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $produit = $produitsRepository->findAll();


        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('produit/listp.html.twig',[
            'p'=>$produit,
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("ListeDesProduits.pdf", [
            "Attachment" => true
        ]);



    }



    /**
     * @param ProduitsRepository $repo
     * @return Response
     * @Route("/AfficheFront",name="AfficheFront")
     */
    function AfficheFront(ProduitsRepository $repo ,Request $request,PaginatorInterface $paginator){

        $data = new SearchData();
        $form = $this->createForm(SearchFormmType::class,$data);
        $form->handleRequest($request);


        $produit=$repo ->findSearch($data);
        $produit = $paginator->paginate(
            $produit,
            $request->query->getInt('page', 1),
            3
        );
        return $this->render('produit/AfficheFront.html.twig',[
            'p'=>$produit,
        'form' => $form->createView()
        ]);


    }
    function sort(ProduitsRepository $repo){
        $produit=$repo->findBy(array(), array('prixfinale' => 'ASC'));
        return $produit;
    }


    /**
     * @param Request $request
     * @return Response
     * @Route("/AjoutP" ,name="ajout")
     */
    function Ajout(Request $request){
        $produit=new Produits();
        $form=$this->createForm(ProduitType::class,$produit);
        $form->add('Ajout',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid() )
        {
            $prix = $produit->getPrix();
            $promo = $produit->getIdPromotion()->getPercentage();
            if ($promo == 0){
                $produit->setPrixfinale($prix);
            }
            else{
                $produit->setPrixfinale($prix - (($prix * $promo)/ 100));
            }
            $em=$this->getDoctrine()->getManager();
            $em->persist($produit);
            $em->flush();
            $this->addFlash(
                'info',
                'Ajouté avec succès !'
            );
            return $this->redirectToRoute('AA');
        }
        return $this->render('produit/AjoutP.html.twig',['ff'=>$form->createView()]);


    }


    /**
     * @param $id
     * @param ProduitsRepository $repository
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route("/DeleteProduit/{id}",name="DeleteProduit")
     */
    function Delete($id,ProduitsRepository $repository)
    {
        $Produits=$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($Produits);
        $em->flush();
        return $this->redirectToRoute('AA');

    }

    /**
     * @param $id
     * @param ProduitsRepository $repository
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route("/UpdateProduit/{id}", name="UU")
     */
    function Update($id,ProduitsRepository $repository,\Symfony\Component\HttpFoundation\Request $request){
        $produit=$repository->find($id);
        $form=$this->createForm(ProduitType::class,$produit);
        $form->add('Update',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid() )
        {
            $prix = $produit->getPrix();
            $promo = $produit->getIdPromotion()->getPercentage();
            if ($promo == 0){
                $produit->setPrixfinale($prix);
            }
            else{
                $produit->setPrixfinale($prix - (($prix * $promo)/ 100));
            }
            $em=$this->getDoctrine()->getManager();
            //$em->persist($classroom);
            $em->flush();
            $this->addFlash(
                'info',
                'Mis à jour avec succés!'
            );
            return $this->redirectToRoute('AA');
        }
        return $this->render('produit/AjoutP.html.twig',['ff'=>$form->createView()]);
    }

    /**
     * @Route ("/DetailProduit/{id}", name="DEE")
     */
    public function Detail($id, Request $request )
    {   $repository = $this->getDoctrine()->getRepository(Produits::class);
        $produit = $repository->find($id);
        return $this->render('produit/details.html.twig',
            ['DEE' => $produit]);


    }
    /**
     * @Route("/Recherche", name="Recherche")
     *
     */
    function Recherche(ProduitsRepository $repository,\Symfony\Component\HttpFoundation\Request $request){
        $nom=$request->get('nom');
        $produit=$repository->findBy(['nom'=>$nom]);
        return $this->render('produit/AfficheP.html.twig',['p'=>$produit]);
    }
    /**
     * @Route("/RechercheFront", name="RechercheFront")
     *
     */
    function RechercheFront(ProduitsRepository $repository,\Symfony\Component\HttpFoundation\Request $request){
        $nom=$request->get('nom');
        $produit=$repository->findBy(['nom'=>$nom]);
        return $this->render('produit/AfficheFront.html.twig',['p'=>$produit]);
    }
    /**
     * @Route("/{id}", name="details")
     */
    public function show(Produits $produits): Response
    {
        return $this->render('produit/details.html.twig', [
            'produit' => $produits,
        ]);
    }












}
