<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Classroom;
use App\Form\CategorieForumType;
use App\Form\ClassroomType;
use App\Repository\CategorieRepository;
use App\Repository\ClassroomRepository;
use App\Repository\EtudiantRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

class CategorieController extends AbstractController
{
    /**
     * @Route("/categorie", name="app_categorie")
     */
    public function index(): Response
    {
        return $this->render('categorie/index.html.twig', [
            'controller_name' => 'CategorieController',
        ]);
    }

    /**
     * @param CategorieRepository $repo
     * @return Response
     * @Route("Affiche",name="A")
     */
    function Affiche(CategorieRepository $repo ,PaginatorInterface $paginator,Request $request){
        $donnees=$repo->findAll(); //select *
        $categorie= $paginator->paginate(
            $donnees,
            $request->query->getInt('page',1),3

        );
        return $this->render('categorie/Affiche.html.twig',['cc'=>$categorie]);


    }

    /**
     * @param $id
     * @param CategorieRepository $repository
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route("/Delete/{id}",name="DD")
     */
    function Delete($id,CategorieRepository $repository){
        $categorie=$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($categorie);
        $em->flush();
        return $this->redirectToRoute('A');

    }
    /**
     * @param Request $request
     * @return Response
     * @Route("/Ajout",name="ajoutCategorie")
     */
    function Ajout(Request $request){
        $categorie=new Categorie();
        $form=$this->createForm(CategorieForumType::class,$categorie);
        $form->add('Ajout',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid() )
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($categorie);
            $em->flush();

            $this->addFlash(
                'info',
                'Added Successfully!'
            );
            return $this->redirectToRoute('A');
        }
        return $this->render('categorie/Ajout.html.twig',['f'=>$form->createView()]);


    }
    /**
     * @param $id
     * @param CategorieRepository $repository
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route("/Update/{id}", name="U")
     */
    function Update($id,CategorieRepository $repository,Request $request){
        $categorie=$repository->find($id);
        $form=$this->createForm(CategorieForumType::class,$categorie);
        $form->add('Update',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid() )
        {
            $em=$this->getDoctrine()->getManager();
            //$em->persist($classroom);
            $em->flush();
            $this->addFlash(
                'info',
                'updated Successfully!'
            );
            return $this->redirectToRoute('A');
        }
        return $this->render('categorie/Ajout.html.twig',['f'=>$form->createView()]);



    }
    /**
     * @Route ("/Detail/{id}", name="DE")
     */
    public function Detail($id, Request $request )
    {   $repository = $this->getDoctrine()->getRepository(Categorie::class);
        $categorie = $repository->find($id);
        return $this->render('categorie/details.html.twig',
            ['DE' => $categorie]);


    }
    /**
     * @Route("/RechercheCategorie", name="RechercheCategorie")
     */
    function Recherche(CategorieRepository $repository,\Symfony\Component\HttpFoundation\Request $request){
        $nom=$request->get('nom');
        $categorie=$repository->findBy(['nom'=>$nom]);
        return $this->render('categorie/Affiche.html.twig',['cc'=>$categorie]);
    }

}
