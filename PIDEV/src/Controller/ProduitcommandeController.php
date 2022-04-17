<?php

namespace App\Controller;

use App\Entity\Produitcommande;
use App\Form\ProduitcommandeType;
use App\Repository\ProduitcommandeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/produitcommande")
 */
class ProduitcommandeController extends AbstractController
{
    /**
     * @Route("/", name="app_produitcommande_index", methods={"GET"})
     */
    public function index(ProduitcommandeRepository $produitcommandeRepository): Response
    {
        return $this->render('produitcommande/index.html.twig', [
            'produitcommandes' => $produitcommandeRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_produitcommande_new", methods={"GET", "POST"})
     */
    public function new(Request $request, ProduitcommandeRepository $produitcommandeRepository): Response
    {
        $produitcommande = new Produitcommande();
        $form = $this->createForm(ProduitcommandeType::class, $produitcommande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $produitcommandeRepository->add($produitcommande);
            return $this->redirectToRoute('app_produitcommande_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('produitcommande/new.html.twig', [
            'produitcommande' => $produitcommande,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_produitcommande_show", methods={"GET"})
     */
    public function show(Produitcommande $produitcommande): Response
    {
        return $this->render('produitcommande/show.html.twig', [
            'produitcommande' => $produitcommande,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_produitcommande_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Produitcommande $produitcommande, ProduitcommandeRepository $produitcommandeRepository): Response
    {
        $form = $this->createForm(ProduitcommandeType::class, $produitcommande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $produitcommandeRepository->add($produitcommande);
            return $this->redirectToRoute('app_produitcommande_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('produitcommande/edit.html.twig', [
            'produitcommande' => $produitcommande,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_produitcommande_delete", methods={"POST"})
     */
    public function delete(Request $request, Produitcommande $produitcommande, ProduitcommandeRepository $produitcommandeRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$produitcommande->getId(), $request->request->get('_token'))) {
            $produitcommandeRepository->remove($produitcommande);
        }

        return $this->redirectToRoute('app_produitcommande_index', [], Response::HTTP_SEE_OTHER);
    }
}
