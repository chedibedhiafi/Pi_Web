<?php

namespace App\Controller;

namespace App\Controller;

use App\Entity\Livraison;
use App\Form\CommandeType;
use App\Form\LivraisonType;
use App\Repository\ProduitsRepository;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use App\Repository\LivraisonRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Dompdf\Dompdf as Dompdf;
use Dompdf\Options;


class LivraisonController extends AbstractController
{
    /**
     * @param LivraisonRepository $repository
     * @Route("/livraison", name="livraison")
     */
    public function index(LivraisonRepository $repository): Response
    {
        $Livraison = $repository->findAll();
        return $this->render('livraison/livraison.html.twig',
            ['livraison'=>$Livraison]
        );
    }
    /**
     * @param LivraisonRepository $repository
     * @return Response
     * @Route ("/afficherlivraison", name="afficherlivraison")
     */
    function AfficheC(LivraisonRepository $repository){
        $Livraison =$repository->findAll();
        return $this->render('back/livraison/livraison.html.twig',
            ['livraison'=>$Livraison]);
    }

    /**
     * @Route("/afficherlivraison/searchResajax", name="searchResajax")
     */
    public function searchEventAjax(LivraisonRepository $repo,Request $request)
    {
        $requestString=$request->get('searchValue');
        $events = $repo->findLivrasionByEmail($requestString);

        return $this->render('back/livraison/ajax.html.twig', [
            "livraison"=>$events
        ]);
    }

    /**
     * @param $id
     * @param LivraisonRepository $repository
     * @return Response
     * @Route ("/supprimerlivraison/{id}", name="supprimerlivraison")
     */
    function Supprimer ($id, LivraisonRepository $repository) :Response{
        $livraison =$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($livraison);
        $em->flush();
        return $this->redirectToRoute('afficherlivraison');
    }
    /**
     * @param $id
     * @param LivraisonRepository $repository
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route ("/supprimerlivraisonfront/{id}", name="supprimerlivraisonfront")
     */
    function SupprimerFront($id, LivraisonRepository $repository){
        $livraison =$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($livraison);
        $em->flush();
        return $this->redirectToRoute('livraison');
    }

    /**
     * @param Request $request
     * @return Response
     * @Route ("/ajouterlivraison", name="ajouterlivraison")
     */
    public function ajouter(Request $request, SessionInterface $session, ProduitsRepository $repo){


        $cart = $session->get('session_cart',[]);
        $produits = [];


        $total = 0;

        foreach ($cart as $prd_id => $qty) {
            $prd = $repo->find($prd_id);
            $produits[] = $prd;
            $total += $prd->getPrixfinale() * $qty;

        }


        $livraison = new Livraison();
        $form=$this->createForm(LivraisonType::class,$livraison);
        $form->handleRequest($request);
        if ($form->isSubmitted()&& $form->isValid()){

            $em=$this->getDoctrine()->getManager();



            $em->persist($livraison);
            $em->flush();
            $this->redirectToRoute('app_paiement_new');

        }
        $mnt_tva = $total * 10 / 100;
        $total_ttc = $total + $mnt_tva;


        return $this->render('livraison/AjouterLivraison.html.twig',['form'=>$form->createView(

        ), 'livraison' => $livraison,
            'produits' => $produits,
            'cart' => $cart,
            'total' => $total,
            'mnt_tva' => $mnt_tva,
            'total_ttc' => $total_ttc


        ]);
    }

    /**
     * @param LivraisonRepository $repository
     * @param $id
     * @param \App\Controller\Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route ("/modifierlivraison/{id}", name="modifierlivraison")
     */
    function Update(LivraisonRepository $repository,$id,Request $request)
    {
        $livraison = $repository->find($id);
        $form = $this->createForm(LivraisonType::class,$livraison);
        //$form->add('Modifer', SubmitType::class);
        $form->add('etat',
            ChoiceType::class, [
                'choices'  => [
                    'Non Traité' => 1,
                    'Traité' => 0
                ],
            ] );
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("afficherlivraison");
        }
        return $this->render('/back/livraison/ModifierLivraison.html.twig',
            [
                'form' => $form->createView(),
                "form_title" => "Modifier"
            ]);
    }

    /**
     * @Route ("/Ajouterlivraison")
     * @Method ("POST")
     */
    public function ajoutermobile(Request $request){

        $livraison = new Livraison();

        $em=$this->getDoctrine()->getManager();

        $details=$request->query->get("details");
        $livraison->setDetails($details);

        $adresse=$request->query->get("addresse");
        $livraison->setAddresse($adresse);

        $codepostal=$request->query->get("codepostal");
        $livraison->setCodepostal($codepostal);

        $ville=$request->query->get("ville");
        $livraison->setVille($ville);

        $tel=$request->query->get("tel");
        $livraison->setTel($tel);

        $commentaire=$request->query->get("commenatire");
        $livraison->setCommentaire($commentaire);

        $em->persist($livraison);
        $em->flush();


        $serializer = new Serializer([new ObjectNormalizer()]);
        $aj = $serializer->normalize($livraison);
        return new JsonResponse($aj);

    }


    /**
     * @param LivraisonRepository $repository
     * @return Response
     * @Route("/livraisons")
     */
    public function indexmobile()
    {
        $livraison =$this->getDoctrine()->getManager()->getRepository(Livraison::class)->findAll();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $aj = $serializer->normalize($livraison);
        return new JsonResponse($aj);

    }


    /**
     * @Route ("/Deletelivraison")
     * @Method("DELETE")
     */
    function SupprimerFrontmoibile(Request $request , LivraisonRepository $repository){
        $id=$request->get("id");
        $em=$this->getDoctrine()->getManager();

        $livraison =$em->getRepository(Livraison::class)->find($id);
        $em->remove($livraison);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $aj = $serializer->normalize($livraison);
        return new JsonResponse($aj);
    }


    /**
     * @param LivraisonRepository $repository
     * @return Response
     * @Route ("livraisontrieb")
     */
    function OrderByMailDQL(LivraisonRepository $repository){

        $livraison = $repository->OrderByMail();
        return $this->render('back/livraison/livraison.html.twig',
            ['livraison'=>$livraison]);
    }





    /**
     * @Route("/pdf", name="pdf")
     */


    public function generate_pdf()
    {
        $livraison=$this->getDoctrine()->getRepository(Livraison::class)->findAll();

        $options = new Options();
        $options->set('defaultFont', 'Arial');

        $dompdf = new Dompdf($options);

        $html = $this->renderView('back/livraison/pdf.html.twig', [
            'livraison'=>$livraison
        ]);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream("Livraison.pdf", [
            "Attachment" => false
        ]);
    }

}
