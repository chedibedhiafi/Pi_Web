<?php

namespace App\Controller;

use App\Entity\Historiquestock;
use App\Entity\Pointdevente;
use App\Entity\Produits;
use App\Entity\Stock ;
use App\Form\HistoriquestockType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;


/**
 * @Route("/historiquestock")
 */
class HistoriquestockController extends AbstractController
{
    /**
     * @Route("/", name="app_historiquestock_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $historiquestocks = $entityManager
            ->getRepository(Historiquestock::class)
            ->findAll();

        return $this->render('historiquestock/index.html.twig', [
            'historiquestocks' => $historiquestocks,
        ]);
    }

    /**
     * @Route("/new/{reference}", name="app_historiquestock_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager, int $reference): Response
    {
        $historiquestock = new Historiquestock();
        $newStock = new Stock();
        

        $em = $entityManager->getRepository(Produits::class);
        $prods = $em->findAll();
        
        $em = $entityManager->getRepository(Pointdevente::class);
        $pt = $em->findOneBy(
            ['reference' => $reference]);
        $historiquestock->setIdPointdevente($pt);
        $newStock->setIdPointdevente($pt);
        $newStock->setQuantite(0);
        
        $historiquestock->setDate(new \DateTime());
        

        $em = $entityManager->getRepository(Historiquestock::class);
        $historiquestocks = $em->findBy(
            ['idPointdevente' => $reference]);
        
        if ($request->isMethod('post')) {
            $em = $entityManager->getRepository(Stock::class);
            $searchStock = $em->findBy(
            ['idPointdevente' => $reference,
            'idProduit' => $prods[$request->request->get('produit')]]);
            if(!$searchStock){
                $newStock->setIdProduit($prods[$request->request->get('produit')]);
                $entityManager->persist($newStock);
                $entityManager->flush();
            }

            $historiquestock->setQuantite($request->request->get('quantite'));
            $historiquestock->setIdProduit($prods[$request->request->get('produit')]);

            $historiquestock->setReason($request->request->get('reason'));
         
            $entityManager->persist($historiquestock);
            $entityManager->flush();

            return $this->redirectToRoute('app_stock_showStock', ['reference' => $reference], Response::HTTP_SEE_OTHER);
        }

        return $this->render('historiquestock/new.html.twig', [
            'produits' => $prods,
            'historiquestocks' => $historiquestocks,
            'historiquestock' => $historiquestock,
           
        ]);
    }

    /**
     * @Route("/{reference}", name="app_historiquestock_show", methods={"GET"})
     */
    public function show(Historiquestock $historiquestock): Response
    {
        return $this->render('historiquestock/show.html.twig', [
            'historiquestock' => $historiquestock,
        ]);
    }

    /**
     * @Route("/{reference}/edit", name="app_historiquestock_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Historiquestock $historiquestock, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(HistoriquestockType::class, $historiquestock);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_historiquestock_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('historiquestock/edit.html.twig', [
            'historiquestock' => $historiquestock,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{reference}", name="app_historiquestock_delete", methods={"POST"})
     */
    public function delete(Request $request, Historiquestock $historiquestock, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$historiquestock->getReference(), $request->request->get('_token'))) {
            $entityManager->remove($historiquestock);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_historiquestock_index', [], Response::HTTP_SEE_OTHER);
    }


    /**
     * @Route("/generatePDF/{reference}/{date}", name="generatePDF")
     */
    public function generatePDF(Request $request, EntityManagerInterface $entityManager, string $date, int $reference): Response
    {
        //GETTING DATA 
        
        $datee = explode("-", $date);
        //dd( "01-0".(intval($datee[0])+1)."-".$datee[1]);

        $em = $entityManager->getRepository(Pointdevente::class);
        $pt = $em->findOneBy(
            ['reference' => $reference]);

            $startDate = \DateTime::createFromFormat('Y-m-d', $datee[1]."-".$datee[0]."-01");
           
            $endDate = \DateTime::createFromFormat('Y-m-d', $datee[1]."-0".intval($datee[0]+1)."-01");
            
        //    dd($startDate,$endDate);
            $historiquestocks = $entityManager->getRepository('App:Historiquestock')->createQueryBuilder('h')->where('h.idPointdevente = :ptdevente AND h.date BETWEEN :start AND :end')->setParameter('ptdevente', $reference)->setParameter('start', $startDate)->setParameter('end', $endDate)->getQuery()->getResult();
           


        $inputFileName = '../public/template.xlsx';
        
        /** Load $inputFileName to a Spreadsheet Object  **/
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileName);
   
        
        /* @var $sheet \PhpOffice\PhpSpreadsheet\Writer\Xlsx\Worksheet */
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle("Month Resume");


        //DATE AUJOURDHUI
        $sheet->setCellValue('B37', date('d-m-Y'));
        //PointDeVente
        $sheet->setCellValue('C8', $pt);
        //OPERATION EFFECTE AU
        $sheet->setCellValue('C5', $date);

        $line = 13;
        foreach ($historiquestocks as $hist) {
       
            $sheet->setCellValue('A'.$line, $hist->getIdProduit());
            $sheet->setCellValue('B'.$line, $hist->getDate()->format('d-m-Y'));
            $sheet->setCellValue('C'.$line, $hist->getReason());
            $sheet->setCellValue('D'.$line, $hist->getQuantite());
        
            $line = $line+1;
        }
        
        
        
        // Create your Office 2007 Excel (XLSX Format)
        $writer = new Xlsx($spreadsheet);
        
        // Create a Temporary file in the system
        $fileName = $pt.' '.$date.'.xlsx';
        $temp_file = tempnam(sys_get_temp_dir(), $fileName);
        
        // Create the excel file in the tmp directory of the system
        $writer->save($temp_file);
        
        // Return the excel file as an attachment
        return $this->file($temp_file, $fileName, ResponseHeaderBag::DISPOSITION_INLINE);
 
    }
}
