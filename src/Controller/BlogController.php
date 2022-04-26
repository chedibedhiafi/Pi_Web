<?php

namespace App\Controller;

use App\Entity\Blog;
use App\Form\BlogType;
use App\Repository\BlogRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;
use Knp\Component\Pager\PaginatorInterface;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

/**
 * @Route("/blog")
 */
class BlogController extends AbstractController
{
    /**
     * @Route("/", name="app_blog_index", methods={"GET"})
     */
    public function index(Request $request, EntityManagerInterface $entityManager, BlogRepository $repo, PaginatorInterface $paginator): Response
    {
        $donnees=$repo->findAll(); //select *
        $rev=array_reverse($donnees);
        $blogs= $paginator->paginate(
            $rev,
            $request->query->getInt('page',1),3);

        return $this->render('blog/index.html.twig', [
            'blogs' => $blogs,
        ]);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     * @throws \PhpOffice\PhpSpreadsheet\Writer\Exception
     * @Route ("/generateExcel", name="excel")
     */

    public function generateExcel(BlogRepository $blogrepo){

        $blogs = $blogrepo->findAll();
        $spreadsheet = new Spreadsheet();

        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'Titre');
        $sheet->setCellValue('C1', 'Sujet');
        $sheet->setCellValue('D1', 'Contenu');
        $sheet->setCellValue('F1', 'Date');
        $sn=1;
        foreach ($blogs as $b) {

            $sheet->setCellValue('A'.$sn,$b->getTitre());
            $sheet->setCellValue('C'.$sn,$b->getSujet());
            $sheet->setCellValue('H'.$sn,$b->getContenu());
            $sheet->setCellValue('D'.$sn,$b->getDate());
            $sn++;

        }
        $writer = new Xlsx($spreadsheet);
        $fileName = 'blogs.xlsx';
        $temp_file = tempnam(sys_get_temp_dir(), $fileName);
        $writer->save($temp_file);
        return $this->file($temp_file, $fileName, ResponseHeaderBag::DISPOSITION_INLINE);
    }

    /**
     * @param BlogRepository $repo
     * @return Response
     * @Route("/listp",name="listp", methods={"GET"})
     */
    function listp( BlogRepository $blogRepository)
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $blog = $blogRepository->findAll();


        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('blog/listp.html.twig',[
            'b'=>$blog,
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("ListeDesBlogs.pdf", [
            "Attachment" => true
        ]);



    }
    /**
     * @Route("/AfficheFront", name="AfficheFront", methods={"GET"})
     */
    public function indexFront(Request $request, EntityManagerInterface $entityManager, BlogRepository $repo, PaginatorInterface $paginator): Response
    {
        $donnees=$repo->findAll(); //select *
        $rev=array_reverse($donnees);
        $blogs= $paginator->paginate(
            $rev,
            $request->query->getInt('page',1),3);

        return $this->render('blog/indexFront.html.twig', [
            'blogs' => $blogs,
        ]);
    }



    /**
     * @Route("/new", name="app_blog_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $blog = new Blog();
        $form = $this->createForm(BlogType::class, $blog);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($blog);
            $entityManager->flush();
            $entityManager->flush();
            $this->addFlash(
                'info',
                'Ajouté avec succès !'
            );
            return $this->redirectToRoute('app_blog_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('blog/new.html.twig', [
            'blog' => $blog,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_blog_show", methods={"GET"})
     */
    public function show(Blog $blog): Response
    {
        return $this->render('blog/show.html.twig', [
            'blog' => $blog,
        ]);

    }

    /**
     * @Route("/{id}/edit", name="app_blog_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Blog $blog, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(BlogType::class, $blog);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $entityManager->flush();
            $this->addFlash(
                'info',
                'Modifié avec succès !'
            );

            return $this->redirectToRoute('app_blog_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('blog/edit.html.twig', [
            'blog' => $blog,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_blog_delete", methods={"POST"})
     */
    public function delete(Request $request, Blog $blog, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$blog->getId(), $request->request->get('_token'))) {
            $entityManager->remove($blog);
            $entityManager->flush();
            $entityManager->flush();
            $this->addFlash(
                'info',
                'Supprimé avec succès !'
            );
        }

        return $this->redirectToRoute('app_blog_index', [], Response::HTTP_SEE_OTHER);
    }
    function sort(BlogRepository $repo){
        $blog=$repo->findBy(array(), array('date' => 'ASC'));
        return $blog;
    }
}
