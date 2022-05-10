<?php

namespace App\Controller;

use App\Entity\Pointdevente;
use App\Form\PointdeventeType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/pointdevente")
 */
class PointdeventeController extends AbstractController
{
    /**
     * @Route("/", name="app_pointdevente_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $pointdeventes = $entityManager
            ->getRepository(Pointdevente::class)
            ->findAll();

        return $this->render('pointdevente/index.html.twig', [
            'pointdeventes' => $pointdeventes,
        ]);
    }

    /**
     * @Route("/aboutus", name="app_pointdevente_aboutus", methods={"GET"})
     */
    public function aboutus(EntityManagerInterface $entityManager): Response
    {
        $pointdeventes = $entityManager
            ->getRepository(Pointdevente::class)
            ->findAll();

        return $this->render('pointdevente/aboutUs.html.twig', [
            'pointdeventes' => $pointdeventes,
        ]);
    }

    /**
     * @Route("/new", name="app_pointdevente_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $pointdevente = new Pointdevente();
        $form = $this->createForm(PointdeventeType::class, $pointdevente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($pointdevente);
            $entityManager->flush();

            return $this->redirectToRoute('app_pointdevente_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('pointdevente/new.html.twig', [
            'pointdevente' => $pointdevente,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{reference}", name="app_pointdevente_show", methods={"GET"})
     */
    public function show(Pointdevente $pointdevente): Response
    {
        return $this->render('pointdevente/show.html.twig', [
            'pointdevente' => $pointdevente,
        ]);
    }

    /**
     * @Route("/{reference}/edit", name="app_pointdevente_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Pointdevente $pointdevente, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PointdeventeType::class, $pointdevente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_pointdevente_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('pointdevente/edit.html.twig', [
            'pointdevente' => $pointdevente,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{reference}", name="app_pointdevente_delete", methods={"POST"})
     */
    public function delete(Request $request, Pointdevente $pointdevente, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pointdevente->getReference(), $request->request->get('_token'))) {
            $entityManager->remove($pointdevente);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_pointdevente_index', [], Response::HTTP_SEE_OTHER);
    }

    
}
