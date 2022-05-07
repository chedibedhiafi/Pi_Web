<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\ResetPassType;
use App\Form\UtilisateurType;
use App\Repository\UtilisateurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;



/**
 * @Route("/utilisateur")
 */
class UtilisateurController extends Controller
{
    /**
     * @Route("/", name="app_utilisateur_indexfront")
     */
    public function indexFront(EntityManagerInterface $entityManager): Response
    {
        return $this->render('utilisateur/indexfront.html.twig');
    }

    /**
     * @Route("/back", name="app_utilisateur_index", methods={"GET"})
     */
    public function index(Request $request): Response
    {   // Méthode findBy qui permet de récupérer les données avec des critères de filtre et de tri
        $utilisateurs = $this->getDoctrine()->getRepository(Utilisateur::class)->findAll();

        $nbrPage=count($utilisateurs);
        $utilisateurs  = $this->get('knp_paginator')->paginate(
            $utilisateurs,
            $request->query->get('page', 1)/*le numéro de la page à afficher*/,
        3/*nbre d'éléments par page*/);
        
        dump($nbrPage);
        if($nbrPage%3==0)
        {
            $nbrPage=$nbrPage/3; 
        }
        else{
            $nbrPage=intval($nbrPage/3)+1;
            
        }
        dump($nbrPage);

        return $this->render('utilisateur/index.html.twig', [
            'utilisateurs' => $utilisateurs,
            'nbrPage'=>$nbrPage
        ]);

    }

    /**
     * @Route("/new", name="app_utilisateur_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $utilisateur = new Utilisateur();
        $form = $this->createForm(UtilisateurType::class, $utilisateur);
        $utilisateur->setTentative(0);
        $date = new \DateTime('@'.strtotime('2000-01-01'));
        $utilisateur->setUnlockDate($date);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($utilisateur);
            $entityManager->flush();

            return $this->redirectToRoute('app_utilisateur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('utilisateur/new.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/signup", name="app_utilisateur_signup", methods={"GET", "POST"})
     */
    public function signup(Request $request, EntityManagerInterface $entityManager, UserPasswordEncoderInterface $encoder, MailerInterface $mailer): Response
    {
        $utilisateur = new Utilisateur();
        $form = $this->createForm(UtilisateurType::class, $utilisateur);
        $utilisateur->setTentative(0);
        $date = new \DateTime('@'.strtotime('2000-01-01'));
        $utilisateur->setUnlockDate($date);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $hash = $encoder->encodePassword($utilisateur, $utilisateur->getPassword());
            $utilisateur->setPassword($hash);
            $utilisateur->setActivationToken(md5(uniqid()));
            $entityManager->persist($utilisateur);
            $entityManager->flush();
            $email = (new TemplatedEmail())
            ->from('quantechp@gmail.com')
            ->to($utilisateur->getEmail())
            ->subject('Bienvenue à Quantech! Activation du compte')
            ->htmlTemplate('utilisateur/template.html.twig')
                ->context([
                    'token' => $utilisateur->getActivationToken()
                ]);

        $mailer->send($email);

            return $this->redirectToRoute('app_utilisateur_login', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('utilisateur/inscription.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/login", name="app_utilisateur_login")
     */
    public function login(AuthenticationUtils $authenticationUtils)
    {
        return $this->render('utilisateur/login.html.twig', [
            'error' => $authenticationUtils->getLastAuthenticationError(),
        ]);
    }

    /**
     * @Route("/logout", name="app_utilisateur_logout")
     */
    public function logout()
    {
    
    }

    /**
     * @Route("/editprofil/{id}", name="app_utilisateur_editprofil")
     */
    public function editProfil(Request $request, $id, UtilisateurRepository $rep )
    {
        if($request->isMethod('post'))
        {
            $utilisateur = $rep->findOneBy(['id' => $id]);
            $utilisateur->setNom($request->request->get('nom'));
            $utilisateur->setPrenom($request->request->get('prenom'));
            $em = $this->getDoctrine()->getManager();
            $em->persist($utilisateur);
            $em->flush();
        
        return $this->render('utilisateur/profil.html.twig',['id' => $id]);
        }

        return $this->render('utilisateur/profil.html.twig');
        
    }

    /**
     * @Route("/activation/{token}", name="activation")
     */
    public function activation($token, UtilisateurRepository $rep)
    {
        $utilisateur = $rep->findOneBy(['activation_token'=> $token]);
        if(!$utilisateur)
        {
            throw $this->createNotFoundException('Cet utilisateur n\'existe pas');
        }
        $utilisateur->setActivationToken(null);
        $em = $this->getDoctrine()->getManager();
        $em->persist($utilisateur);
        $em->flush();

        $this->addFlash('message', 'Vous avez bien activé votre compte');

        return $this->redirectToRoute('app_utilisateur_login');
    }

    /**
     * @Route("/forgotpwd", name="forgotpwd")
     */
    public function forgotpwd(Request $request, UtilisateurRepository $rep, MailerInterface $mailer, TokenGeneratorInterface $tokenGeneratorInterface)
    {
        $form = $this->createForm(ResetPassType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $data = $form->getData();
            $utilisateur = $rep->findOneByEmail($data['email']);
            if(!$utilisateur)
            {
                $this->addFlash('danger', 'Cette adresse n\'existe pas');
                $this->redirectToRoute('app_utilisateur_login');
            }
            
            $token = $tokenGeneratorInterface->generateToken();

            try{
                $utilisateur->setResetToken($token);
                $em = $this->getDoctrine()->getManager();
                $em->persist($utilisateur);
                $em->flush();

            }catch(\Exception $e)
            {
                $this->addFlash('warning', 'Une erreur est survenue' . $e->getMessage());
                return $this->redirectToRoute('app_utilisateur_login');
            }

            //$url = $this->generateUrl('resetpwd',['token' => $token]);
            $email = (new TemplatedEmail())
            ->from('quantechp@gmail.com')
            ->to($utilisateur->getEmail())
            ->subject('Réinitialisation du mot de passe')
            ->htmlTemplate('utilisateur/template_resetpwd.html.twig')
                ->context([
                    'token' => $token
                ]);

        $mailer->send($email);

        $this->addFlash('message','Un mail de réinitialisation de mot de passe vous a été envoyé');
        return $this->redirectToRoute('app_utilisateur_login');

        }

        return $this->render('utilisateur/forgotpwd.html.twig' , ['emailForm' => $form->createView()]);
    }

    /**
     * @Route("/resetpwd/{token}", name="resetpwd")
     */
    public function resetpwd($token, Request $request, UserPasswordEncoderInterface $encoder)
    {
        $utilisateur = $this->getDoctrine()->getRepository(Utilisateur::class)->findOneBy(['reset_token' => $token]);

        if(!$utilisateur)
        {
            $this->addFlash('danger', 'Token inconnu');
            return $this->redirectToRoute('app_utilisateur_login');
        }

        if($request->isMethod('POST'))
        {
            $nouveau = $request->request->get('password');
            $confirm = $request->request->get('passwordC');

            if($nouveau == $confirm)
            {
                
                $utilisateur->setResetToken(null);
                $utilisateur->setPassword($encoder->encodePassword($utilisateur, $nouveau));
                $em = $this->getDoctrine()->getManager();
                $em->persist($utilisateur);
                $em->flush();

                $this->addFlash('message','Mot de passe modifié avec succès');
                return $this->redirectToRoute('app_utilisateur_login');
            }
            
            
        }
        else
            {
                return $this->render('utilisateur/resetpwd.html.twig',['token' => $token]);
            } 
            return $this->redirectToRoute('app_utilisateur_login');
    }


    /**
     * @Route("/{id}", name="app_utilisateur_show", methods={"GET"})
     */
    public function show(Utilisateur $utilisateur): Response
    {
        return $this->render('utilisateur/show.html.twig', [
            'utilisateur' => $utilisateur,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_utilisateur_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Utilisateur $utilisateur, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(UtilisateurType::class, $utilisateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_utilisateur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('utilisateur/edit.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_utilisateur_delete", methods={"POST"})
     */
    public function delete(Request $request, Utilisateur $utilisateur, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$utilisateur->getId(), $request->request->get('_token'))) {
            $entityManager->remove($utilisateur);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_utilisateur_index', [], Response::HTTP_SEE_OTHER);
    }

}
