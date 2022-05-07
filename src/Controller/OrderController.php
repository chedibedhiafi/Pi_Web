<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Form\CommandeType;
use App\Entity\LigneCommande;
use App\Repository\ProduitsRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\CommandeRepository;
use App\Repository\LigneCommandeRepository;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

use Symfony\Component\Serializer\Serializer;


class OrderController extends AbstractController
{
    /**
     * @Route("/commande", name="commande")
     */
    public function order(Request $request, ProduitsRepository $repo)
    {
        // Build oder form    
        $commande = new Commande();
        $form = $this->createForm(CommandeType::class, $commande);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $commande->setDateCreation(new \DateTime());
            $em=$this->getDoctrine()->getManager();
            $em->persist($commande);

            $session = new Session();
            $cart = $session->get('session_cart');

            foreach ($cart as $prd_id => $qty) {
                $ligneCommande = new LigneCommande();
                $ligneCommande->setQuantity($qty);
                $prd = $repo->find($prd_id);
                $ligneCommande->setPrix($prd->getPrixFinale());
                $ligneCommande->setProduit($prd);
                $ligneCommande->setCommande($commande);

                $em->persist($ligneCommande);
            }
            $em->flush();

            $num_cmd = $commande->getId();

            return $this->redirectToRoute('success', [
                'order_id' => $num_cmd
            ]);
        }

        return $this->render("commande/commande.html.twig", [
            'form' => $form->createView()
        ]);
    }


    /**
     * @Route("/success/{order_id}", name="success")
     */
    public function success($order_id)
    {

        return $this->render('commande/success.html.twig', [
            'num_cmd' => $order_id
        ]);
    }

    /**
     * @param CommandeRepository $repository
     * @return Response
     * @Route ("/affichercommande", name="affichercommande")
     */
    function AfficheC(CommandeRepository $repository){
        $Commande =$repository->findAll();
        return $this->render('back/commande/AfficherCommande.html.twig',
            ['commande'=>$Commande]);
    }

    /**
     * @param $id
     * @param CommandeRepository $repository
     * @return Response
     * @Route ("/supprimercommande/{id}", name="supprimercommande")
     */
    function Supprimer ($id, CommandeRepository $repository) :Response{
        $commande =$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($commande);
        $em->flush();
        return $this->redirectToRoute('affichercommande');
    }


    /**
     * @param CommandeRepository $repository
     * @param $id
     * @param \App\Controller\Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route ("/modifiercommande/{id}", name="modifiercommande")
     */
    function Update(CommandeRepository $repository,$id,Request $request)
    {
        $commande = $repository->find($id);
        $form = $this->createForm(CommandeType::class, $commande);
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
            return $this->redirectToRoute("affichercommande");
        }
        return $this->render('/back/commande/ModifierCommande.html.twig',
            [
                'f' => $form->createView(),
                "form_title" => "Modifier"
            ]);
    }
    /**
     * @Route("/store/commande", name="admin_order")
     */
    public function ordersAction(CommandeRepository $repo)
    {

        $currentUser = $this->getUser();

        $commandes = $repo->createQueryBuilder('c')
            ->innerJoin('c.ligneCommandes', 'lgc')
            ->innerJoin('lgc.produit', 'p')
            ->where('p.utilisateur =:id')
            ->setParameter('id', $currentUser)
            ->getQuery()
            ->getResult();

        return $this->render('commande/index.html.twig', array(
            'commandes' => $commandes,
        ));
    }

    /**
     * @Route("/store/commande/{id}", name="admin_order_show")
     */
    public function detailsAction(Commande $commande, LigneCommandeRepository $repo)
    {

        $currentUser = $this->getUser();

        $ligneCommande = $repo->createQueryBuilder('l')
            ->innerJoin('l.produit', 'p')
            ->where('p.utilisateur =:id and l.commande =:commande')
            ->setParameter('id', $currentUser)
            ->setParameter('commande', $commande)
            ->getQuery()
            ->getResult();

        return $this->render('commande/show.html.twig', array(
            'commande' => $commande,
            'ligneCommande' => $ligneCommande
        ));
    }
}
