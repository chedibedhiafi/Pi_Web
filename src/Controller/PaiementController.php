<?php

namespace App\Controller;

use App\Entity\Paiement;
use App\Form\PaiementType;
use App\Repository\PaiementRepository;
use App\Entity\TwilioSMS;
use http\Url;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Twilio\Rest\Client;
use App\Entity\LigneCommande;



class PaiementController extends AbstractController
{
    /**
     * @Route("/paiement", name="app_paiement_index")
     */
    public function index(): Response
    {

        $paiement = $this->getDoctrine()
            ->getRepository(Paiement::class)
            ->findAll();

        return $this->render('paiement/index.html.twig', [
            'paiement' => $paiement,
        ]);
    }

    /**
     * @Route("/{idPayment}", name="app_paiement_show", methods={"GET"},requirements={"idPayment":"\d+"})
     */
    public function show(Paiement $paiement): Response
    {
        return $this->render('paiement/show.html.twig', [
            'paiement' => $paiement,
        ]);
    }

    /**
     * @Route("/new", name="app_paiement_new", methods={"GET", "POST"})
     */
    public function new(Request $request, PaiementRepository $paiementRepository): Response
    {
        $paiement = new Paiement();
        $form = $this->createForm(PaiementType::class, $paiement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $paiementRepository->add($paiement);
            return $this->redirectToRoute('app_paiement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('paiement/new.html.twig', [
            'paiement' => $paiement,
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/checkout", name="app_paiement")
     */
    public function checkout($stripeSK): Response
    {
        Stripe::setApiKey($stripeSK);

        $session = Session::create([
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => 'T-shirt',
                    ],
                    'unit_amount' => 1000,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => $this->generateUrl('success_url', [],
                UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url' => $this->generateUrl('cancel_url', [],
                UrlGeneratorInterface::ABSOLUTE_URL),


        ]);
        return $this->redirect($session->url, 303);


    }


    /**
     * @Route("/success-url", name="success_url")
     */


    public function successUrl(): Response
    {
        $msg = "Votre commande n° a été enregistrer avec succées, vous la receverez dans les prochains délais.\n\nQUANTECH";
        $this->SMS('+19107145409', '+21652009118', $msg);
        return $this->render('paiement/success.html.twig', []);
    }


    /**
     * @Route("/cancel-url", name="cancel_url")
     */

    public function cancelUrl(): Response
    {
        return $this->render('paiement/cancel.html.twig', []);
    }


    public function SMS($twilio_number, $rec, $message)
    {

        $twilio = new TwilioSMS();
        // A Twilio number you own with SMS capabilities


        $client = new Client($twilio->getAccountSid(), $twilio->getAuthToken());
        $client->messages->create(
        // Where to send a text message (your cell phone?)
            $rec,
            array(
                'from' => $twilio_number,
                'body' => $message
            )
        );
    }
}