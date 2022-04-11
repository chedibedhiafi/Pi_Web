<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Produits;
use App\Form\CategorieForumType;
use App\Form\ProduitType;
use App\Repository\CategorieRepository;
use App\Repository\ProduitsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Doctrine\ORM\EntityRepository;





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
     * @param ProduitsRepository $repo
     * @return Response
     * @Route("AfficheP",name="AA")
     */
    function Affiche(ProduitsRepository $repo){
        $produit=$repo->findAll(); //select *
        return $this->render('produit/AfficheP.html.twig',['p'=>$produit]);


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
            $em=$this->getDoctrine()->getManager();
            $em->persist($produit);
            $em->flush();
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
            $em=$this->getDoctrine()->getManager();
            //$em->persist($classroom);
            $em->flush();
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
     * @Route("/{id}", name="details")
     */
    public function show(Produits $produits): Response
    {
        return $this->render('produit/details.html.twig', [
            'produit' => $produits,
        ]);
    }









}
