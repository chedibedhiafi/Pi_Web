<?php

namespace App\Controller;


use App\Entity\Produits;
use App\Repository\ProduitsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class CartController extends AbstractController
{

/**
 * @Route("/cart", name="cart")
 */
function cart (ProduitsRepository $repo)
{
    $session = new Session();
    $cart = $session->get('session_cart');
    $produits = array();

    $total = 0;

    // Calcul du total HT, mnt TVA et total TTC
    // On ne doit pas laisser la vue faire le calcul
    if ($cart)
        foreach ($cart as $prd_id => $qty) {
            $prd = $repo->find($prd_id);
            $produits[] = $prd;
            $total += $prd->getPrixfinale() * $qty;

        }


    $mnt_tva = $total * 10 / 100;
    $total_ttc = $total + $mnt_tva;

    return $this->render(
        "cart/cart.html.twig",
        [
            'produits' => $produits,
            'cart' => $cart,
            'total' => $total,
            'mnt_tva' => $mnt_tva,
            'total_ttc' => $total_ttc

        ]
    );
}


/**
 * @Route("/cart/add/{id}", name="add_to_cart")
 */
function addToCart(Produits $produit, Request $request)
{
    $session = new Session();
    @$cart = $session->get('session_cart');
    $quantite = 0;
    if ($request->request->count() > 0) {
        $quantite = $request->request->get('quantite');
    }


    @$cart[$produit->getId()] = $quantite;
    $session->set('session_cart', $cart);

    return $this->redirectToRoute('cart');
}

/**
 * @Route("/cart/remove/{id}", name="remove_from_cart")
 */
function removeFromCart($id)
{
    $session = new Session();
    $cart = $session->get('session_cart');
    unset($cart[$id]); // Remove item from row
    $session->set('session_cart', $cart);

    // Retrouner au panier
    return $this->redirectToRoute('cart');
}


/**
 * @Route("/cleancart" , name="clear_cart")
 */
public function cleancart()
{
    $session = new Session();
    $session->clear();

    return $this->redirectToRoute('cart');
}



public function nbproduit()
{
    // récuprer le panier depuis la session et calculer le nb des prd
    $session = new Session();
    $cart = $session->get('session_cart');
    $n = empty($cart) ? 0 : count($cart);
    // count($cart)
    return $this->render('cart/panier.html.twig', [
        'n' => $n
    ]);
}

/**
 * @Route("/cart/add/one/{id}", name="add_one_to_cart")
 */
function addOneToCart(Produits $prd)
{
    $session = new Session();
    @$cart = $session->get('session_cart');
    @$cart[$prd->getId()]++;
    $session->set('session_cart', $cart);

    return $this->redirectToRoute('cart');
}


/**
 * @Route("/cart/remove/one/{id}", name="remove_one_to_cart")
 */
function removeOneToCart(Produits $prd)
{
    $session = new Session();
    @$cart = $session->get('session_cart');
    @$cart[$prd->getId()]--;
    $session->set('session_cart', $cart);

    return $this->redirectToRoute('cart');
}
}


///**
// * @Route("/cart", name="cart_")
// */
//class CartController extends AbstractController
//{
//    /**
//     * @Route("/", name="index")
//     */
//    public function index(SessionInterface $session, ProduitsRepository $produitsRepository)
//    {
//        $panier = $session->get("panier", []);
//
//        // On "fabrique" les données
//        $dataPanier = [];
//        $total = 0;
//
//        foreach($panier as $id => $quantite){
//            $produit = $produitsRepository->find($id);
//            $dataPanier[] = [
//                "produit" => $produit,
//                "quantite" => $quantite
//            ];
//            $total += $produit->getPrix() * $quantite;
//        }
//
//        return $this->render('cart/cart.html.twig', compact("dataPanier", "total"));
//    }
//
//    /**
//     * @Route("/add/{id}", name="add")
//     */
//    public function add(Produits $produit, SessionInterface $session)
//    {
//        // On récupère le panier actuel
//        $panier = $session->get("panier", []);
//        $id = $produit->getId();
//
//        if(!empty($panier[$id])){
//            $panier[$id]++;
//        }else{
//            $panier[$id] = 1;
//        }
//
//        // On sauvegarde dans la session
//        $session->set("panier", $panier);
//
//        return $this->redirectToRoute("cart_index");
//    }
//
//    /**
//     * @Route("/remove/{id}", name="remove")
//     */
//    public function remove(Produits $produit, SessionInterface $session)
//    {
//        // On récupère le panier actuel
//        $panier = $session->get("panier", []);
//        $id = $produit->getId();
//
//        if(!empty($panier[$id])){
//            if($panier[$id] > 1){
//                $panier[$id]--;
//            }else{
//                unset($panier[$id]);
//            }
//        }
//
//        // On sauvegarde dans la session
//        $session->set("panier", $panier);
//
//        return $this->redirectToRoute("cart_index");
//    }
//
//    /**
//     * @Route("/delete/{id}", name="delete")
//     */
//    public function delete(Produits $produit, SessionInterface $session)
//    {
//        // On récupère le panier actuel
//        $panier = $session->get("panier", []);
//        $id = $produit->getId();
//
//        if(!empty($panier[$id])){
//            unset($panier[$id]);
//        }
//
//        // On sauvegarde dans la session
//        $session->set("panier", $panier);
//
//        return $this->redirectToRoute("cart_index");
//    }
//
//    /**
//     * @Route("/delete", name="delete_all")
//     */
//    public function deleteAll(SessionInterface $session)
//    {
//        $session->remove("panier");
//
//        return $this->redirectToRoute("cart_index");
//    }
//
//}
