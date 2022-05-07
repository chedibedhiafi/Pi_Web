<?php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Form\CommentaireType;
use App\Repository\CommentaireRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

/**
 * @Route("/commentaire")
 */
class CommentaireController extends AbstractController
{
    /**
     * @Route("/", name="app_commentaire_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $commentaires = $entityManager
            ->getRepository(Commentaire::class)
            ->findAll();

        return $this->render('commentaire/index.html.twig', [
            'commentaires' => $commentaires,
        ]);
    }



    /**
     * @Route("/AfficheCmntFront", name="AfficheCmntFront", methods={"GET"})
     */
    public function indexFront(EntityManagerInterface $entityManager): Response
    {
        $commentaires = $entityManager
            ->getRepository(Commentaire::class)
            ->findAll();

        return $this->render('commentaire/indexFront.html.twig', [
            'commentaires' => $commentaires,
        ]);
    }


    /**
     * @Route("/CommentairesList",name="CommentairesList")
     */
    public function getCommentairesJson(NormalizerInterface $Normalizer, CommentaireRepository $commentaireRepository)
    {
        $repository = $this->getDoctrine()->getRepository(Commentaire::class);
        $commentaires = $commentaireRepository->findAll();
        $jsonCommentaires = $Normalizer->normalize($commentaires,'json',['groups'=>'post:read']);

        return new Response(json_encode($jsonCommentaires));
    }


    /**
     * @Route("/new", name="app_commentaire_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $commentaire = new Commentaire();
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($commentaire);
            $entityManager->flush();
            $entityManager->flush();
            $this->addFlash(
                'info',
                'Ajouté avec succès !'
            );

            return $this->redirectToRoute('app_commentaire_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('commentaire/new.html.twig', [
            'commentaire' => $commentaire,
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/AddCommentaireJSON/new", name="AddCommentaireJSON")
     */
    public function AddCommentaireJSON(Request $request,NormalizerInterface $Normalizer)
    {
        $em= $this->getDoctrine()->getManager();
        $Commentaire = new Commentaire();
        $Commentaire->setContenu($request->get('contenu'));
        $Commentaire->setIdBlog($request->get('idBlog'));
        $Commentaire->setIdUser($request->get('idUser'));
//        $Commentaire->setDate(new \DateTime('@'.strtotime('Now')));
        $Commentaire->setDate($request->get('date'));

        $em->persist($Commentaire);
        $em->flush();
        $jsonContent = $Normalizer->normalize($Commentaire,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }


    /**
     * @Route("/{id}", name="app_commentaire_show", methods={"GET"})
     */
    public function show(Commentaire $commentaire): Response
    {
        return $this->render('commentaire/show.html.twig', [
            'commentaire' => $commentaire,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_commentaire_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Commentaire $commentaire, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $entityManager->flush();
            $this->addFlash(
                'info',
                'Modifié avec succès !'
            );

            return $this->redirectToRoute('app_commentaire_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('commentaire/edit.html.twig', [
            'commentaire' => $commentaire,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_commentaire_delete", methods={"POST"})
     */
    public function delete(Request $request, Commentaire $commentaire, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$commentaire->getId(), $request->request->get('_token'))) {
            $entityManager->remove($commentaire);
            $entityManager->flush();
            $entityManager->flush();
            $this->addFlash(
                'info',
                'Supprimé avec succès !'
            );
        }

        return $this->redirectToRoute('app_commentaire_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @param Request $request
     * @param NormalizerInterface $normalizer
     * @param $id
     * @return Response
     * @throws ExceptionInterface
     * @Route("/deleteCommentaireJson/{id}", name="deleteCommentaireJson")
     */
    public function deleteCommentaireJson(Request $request,NormalizerInterface $normalizer,$id){
        $em = $this->getDoctrine()->getManager();
        $commentaire = $em->getRepository(Commentaire::class)->find($id);
        $em->remove($commentaire);
        $em->flush();
        $jsonContent =$normalizer->normalize($commentaire,'json',['groups'=>'commentaires']);
        return new Response("Le Commentaire a été supprimé avec succées!".json_encode($jsonContent));
    }
}
