<?php

namespace App\Controller;

use App\Entity\Promotion;
use App\Form\PromotionType;
use App\Repository\PromotionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PromotionController extends AbstractController
{
    /**
     * @Route("/promotion", name="app_promotion")
     */
    public function index(): Response
    {
        return $this->render('promotion/index.html.twig', [
            'controller_name' => 'PromotionController',
        ]);
    }

    /**
     * @param PromotionRepository $repo
     * @return Response
     * @Route("AffichePromotion",name="AAA")
     */
    function Affiche(PromotionRepository $repo){
        $promotion=$repo->findAll(); //select *
        return $this->render('promotion/AffichePromotion.html.twig',['pro'=>$promotion]);


    }

    /**
     * @param Request $request
     * @return Response
     * @Route("/AjoutPromotion" , name="AjoutPromotion")
     */
    function Ajout(Request $request){
        $promotion=new Promotion();
        $form=$this->createForm(PromotionType::class,$promotion);
        $form->add('Ajout',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid() )
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($promotion);
            $em->flush();
            return $this->redirectToRoute('AAA');
        }
        return $this->render('promotion/AjoutPromotion.html.twig',['f'=>$form->createView()]);


    }
    /**
     * @param $id
     * @param PromotionRepository $repository
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route("/UpdatePromotion/{id}", name="UUU")
     */
    function Update($id,PromotionRepository $repository,\Symfony\Component\HttpFoundation\Request $request){
        $promotion=$repository->find($id);
        $form=$this->createForm(PromotionType::class,$promotion);
        $form->add('Update',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid() )
        {
            $em=$this->getDoctrine()->getManager();
            //$em->persist($classroom);
            $em->flush();
            return $this->redirectToRoute('AAA');
        }
        return $this->render('promotion/AjoutPromotion.html.twig',['f'=>$form->createView()]);
    }

    /**
     * @param $id
     * @param PromotionRepository $repository
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route("/DeletePromotion/{id}",name="DeletePromotion")
     */
    function Delete($id,PromotionRepository $repository)
    {
        $promotion=$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($promotion);
        $em->flush();
        return $this->redirectToRoute('AAA');

    }
}
