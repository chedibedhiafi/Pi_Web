<?php

namespace App\Controller;

use App\Entity\Event;
use App\Form\Event1Type;
use App\Repository\EventRepository;
use Knp\Component\Pager\PaginatorInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

/**
 * @Route("/event")
 */
class EventController extends AbstractController
{
    /**
     * @Route("/", name="app_event_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $events = $entityManager
            ->getRepository(Event::class)
            ->findAll();

        return $this->render('event/index.html.twig', [
            'events' => $events,
        ]);
    }
//    /**
//     * @Route("/AllEventJSON", name="AllEventJSON")
//
//     */
//    public function AllEventJSON(NormalizerInterface $Normalizer, EventRepository $eventRepository)
//    {
//        $repository= $this->getDoctrine()->getRepository(Event::class);
//        $News = $eventRepository->findAll();
//        $jsonContent = $Normalizer->normalize($News,'json',['groups'=>'post:read']);
//        return new Response(json_encode($jsonContent));
//    }
//
//    /**
//     * @Route("/AddEventJSON", name="AddEventJSON")
//     */
//    public function AddEventJSON(Request $request,NormalizerInterface $Normalizer)
//    {
//        $em= $this->getDoctrine()->getManager();
//        $event = new Event();
//        $event->setTitre($request->get('titre'));
//        $event->setPrix($request->get('prix'));
//        $event->setDescription($request->get('description'));
//        $event->setNbPlaces($request->get('NbPlaces'));
//        $event->setImage($request->get('image'));
//        $event->setDateEvent(new \DateTime('@'.strtotime('Now')));
//        $em->persist($event);
//        $em->flush();
//        $jsonContent = $Normalizer->normalize($event,'json',['groups'=>'post:read']);
//        return new Response(json_encode($jsonContent));
//    }
//
//    /**
//     * @Route("/UpdateEventJSON/{id}", name="UpdateEventJSON")
//     */
//    public function UpdateEventJSON($id,Request $request,NormalizerInterface $Normalizer)
//    {
//        // $id = $request->get("id");
//        $em = $this->getDoctrine()->getManager();
//        $event = $this->getDoctrine()->getRepository(Event::class)->find($id);
//        $event->setTitre($request->get('titre'));
//        $event->setPrix($request->get('prix'));
//        $event->setDescription($request->get('description'));
//        $event->setNbPlaces($request->get('NbPlaces'));
//        $event->setImage($request->get('image'));
//        $event->setDateEvent(new \DateTime('@'.strtotime('Now')));
//        $em->flush();
//        $jsonContent = $Normalizer->normalize($event,'json',['groups'=>'post:read']);
//        return new Response("l'evenement a été modifiée avec succes".json_encode($jsonContent));
//    }
//    /**
//     * @param Request $request
//     * @param NormalizerInterface $normalizer
//     * @param $id
//     * @return Response
//     * @throws \Symfony\Component\Serializer\Exception\ExceptionInterface
//     * @Route("/deleteEventJson/{id}", name="deleteEventJson")
//     */
//    public function deleteEventJson(Request $request,NormalizerInterface $normalizer,$id){
//        $em = $this->getDoctrine()->getManager();
//        $event = $em->getRepository(Event::class)->find($id);
//        $em->remove($event);
//        $em->flush();
//        $jsonContent =$normalizer->normalize($event,'json',['groups'=>'event']);
//        return new Response("L'evenement a été supprimée avec succées!".json_encode($jsonContent));
//    }
    /**
     * @Route("/front", name="app_event_indexf", methods={"GET"})
     */
    public function indexf(PaginatorInterface $paginator,EntityManagerInterface $entityManager , Request $request): Response
    {
        $events = $entityManager
            ->getRepository(Event::class)
            ->findAll();
        $events= $paginator->paginate(
            $events,
            $request->query->getInt('page', 1),
            4);
        return $this->render('event/indexf.html.twig', [
            'events' => $events,
        ]);
    }

    /**
     * @Route("/new", name="app_event_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $event = new Event();
        $form = $this->createForm(Event1Type::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($event);
            $entityManager->flush();

            return $this->redirectToRoute('app_event_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('event/new.html.twig', [
            'event' => $event,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{eventId}", name="app_event_show", methods={"GET"})
     */
    public function show(Event $event): Response
    {
        return $this->render('event/show.html.twig', [
            'event' => $event,
        ]);
    }

    /**
     * @Route("/{eventId}/edit", name="app_event_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Event $event, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Event1Type::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_event_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('event/edit.html.twig', [
            'event' => $event,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{eventId}", name="app_event_delete", methods={"POST"})
     */
    public function delete(Request $request, Event $event, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$event->getEventId(), $request->request->get('_token'))) {
            $entityManager->remove($event);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_event_index', [], Response::HTTP_SEE_OTHER);
    }
}
