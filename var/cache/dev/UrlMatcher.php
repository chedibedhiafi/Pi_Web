<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/blog' => [[['_route' => 'app_blog_index', '_controller' => 'App\\Controller\\BlogController::index'], null, ['GET' => 0], null, true, false, null]],
        '/blog/AfficheFront' => [[['_route' => 'AfficheFrontBlog', '_controller' => 'App\\Controller\\BlogController::indexFront'], null, ['GET' => 0], null, false, false, null]],
        '/blog/BlogsList' => [[['_route' => 'BlogsList', '_controller' => 'App\\Controller\\BlogController::getBlogsJson'], null, null, null, false, false, null]],
        '/blog/new' => [[['_route' => 'app_blog_new', '_controller' => 'App\\Controller\\BlogController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/blog/AddBlogJSON/new' => [[['_route' => 'AddBlogJSON', '_controller' => 'App\\Controller\\BlogController::AddBlogJSON'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'cart', '_controller' => 'App\\Controller\\CartController::cart'], null, null, null, false, false, null]],
        '/cleancart' => [[['_route' => 'clear_cart', '_controller' => 'App\\Controller\\CartController::cleancart'], null, null, null, false, false, null]],
        '/categorie' => [[['_route' => 'app_categorie', '_controller' => 'App\\Controller\\CategorieController::index'], null, null, null, false, false, null]],
        '/Affiche' => [[['_route' => 'A', '_controller' => 'App\\Controller\\CategorieController::Affiche'], null, null, null, false, false, null]],
        '/Ajout' => [[['_route' => 'ajoutCategorie', '_controller' => 'App\\Controller\\CategorieController::Ajout'], null, null, null, false, false, null]],
        '/RechercheCategorie' => [[['_route' => 'RechercheCategorie', '_controller' => 'App\\Controller\\CategorieController::Recherche'], null, null, null, false, false, null]],
        '/client' => [[['_route' => 'app_client', '_controller' => 'App\\Controller\\ClientController::index'], null, null, null, false, false, null]],
        '/commentaire' => [[['_route' => 'app_commentaire_index', '_controller' => 'App\\Controller\\CommentaireController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commentaire/CommentairesList' => [[['_route' => 'CommentairesList', '_controller' => 'App\\Controller\\CommentaireController::getCommentairesJson'], null, null, null, false, false, null]],
        '/commentaire/AddCommentaireJSON/new' => [[['_route' => 'AddCommentaireJSON', '_controller' => 'App\\Controller\\CommentaireController::AddCommentaireJSON'], null, null, null, false, false, null]],
        '/employe' => [[['_route' => 'app_employe_index', '_controller' => 'App\\Controller\\EmployeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/employe/new' => [[['_route' => 'app_employe_new', '_controller' => 'App\\Controller\\EmployeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/event' => [[['_route' => 'app_event_index', '_controller' => 'App\\Controller\\EventController::index'], null, ['GET' => 0], null, true, false, null]],
        '/event/front' => [[['_route' => 'app_event_indexf', '_controller' => 'App\\Controller\\EventController::indexf'], null, ['GET' => 0], null, false, false, null]],
        '/event/new' => [[['_route' => 'app_event_new', '_controller' => 'App\\Controller\\EventController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/historiquestock' => [[['_route' => 'app_historiquestock_index', '_controller' => 'App\\Controller\\HistoriquestockController::index'], null, ['GET' => 0], null, true, false, null]],
        '/livraison' => [[['_route' => 'livraison', '_controller' => 'App\\Controller\\LivraisonController::index'], null, null, null, false, false, null]],
        '/afficherlivraison' => [[['_route' => 'afficherlivraison', '_controller' => 'App\\Controller\\LivraisonController::AfficheC'], null, null, null, false, false, null]],
        '/afficherlivraison/searchResajax' => [[['_route' => 'searchResajax', '_controller' => 'App\\Controller\\LivraisonController::searchEventAjax'], null, null, null, false, false, null]],
        '/ajouterlivraison' => [[['_route' => 'ajouterlivraison', '_controller' => 'App\\Controller\\LivraisonController::ajouter'], null, null, null, false, false, null]],
        '/pdf' => [[['_route' => 'pdf', '_controller' => 'App\\Controller\\LivraisonController::generate_pdf'], null, null, null, false, false, null]],
        '/commande' => [[['_route' => 'commande', '_controller' => 'App\\Controller\\OrderController::order'], null, null, null, false, false, null]],
        '/affichercommande' => [[['_route' => 'affichercommande', '_controller' => 'App\\Controller\\OrderController::AfficheC'], null, null, null, false, false, null]],
        '/store/commande' => [[['_route' => 'admin_order', '_controller' => 'App\\Controller\\OrderController::ordersAction'], null, null, null, false, false, null]],
        '/paiement' => [[['_route' => 'app_paiement_index', '_controller' => 'App\\Controller\\PaiementController::index'], null, null, null, false, false, null]],
        '/new' => [[['_route' => 'app_paiement_new', '_controller' => 'App\\Controller\\PaiementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/checkout' => [[['_route' => 'app_paiement', '_controller' => 'App\\Controller\\PaiementController::checkout'], null, null, null, false, false, null]],
        '/success-url' => [[['_route' => 'success_url', '_controller' => 'App\\Controller\\PaiementController::successUrl'], null, null, null, false, false, null]],
        '/cancel-url' => [[['_route' => 'cancel_url', '_controller' => 'App\\Controller\\PaiementController::cancelUrl'], null, null, null, false, false, null]],
        '/pointdevente' => [[['_route' => 'app_pointdevente_index', '_controller' => 'App\\Controller\\PointdeventeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/pointdevente/aboutus' => [[['_route' => 'app_pointdevente_aboutus', '_controller' => 'App\\Controller\\PointdeventeController::aboutus'], null, ['GET' => 0], null, false, false, null]],
        '/pointdevente/new' => [[['_route' => 'app_pointdevente_new', '_controller' => 'App\\Controller\\PointdeventeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/produit/AllProduit' => [[['_route' => 'AllProduit', '_controller' => 'App\\Controller\\ProduitController::AllProduit'], null, null, null, false, false, null]],
        '/produit/recherche' => [[['_route' => 'ajax_search', '_controller' => 'App\\Controller\\ProduitController::searchAction'], null, null, null, true, false, null]],
        '/produit/listp' => [[['_route' => 'listp', '_controller' => 'App\\Controller\\ProduitController::listp'], null, ['GET' => 0], null, false, false, null]],
        '/produit/qrCode' => [[['_route' => 'qr_function', '_controller' => 'App\\Controller\\ProduitController::genQrCode'], null, null, null, false, false, null]],
        '/produit/stats' => [[['_route' => 'stats', '_controller' => 'App\\Controller\\ProduitController::stat'], null, null, null, false, false, null]],
        '/produit/AfficheP' => [[['_route' => 'AA', '_controller' => 'App\\Controller\\ProduitController::Affiche'], null, null, null, false, false, null]],
        '/produit/AfficheFront' => [[['_route' => 'AfficheFront', '_controller' => 'App\\Controller\\ProduitController::AfficheFront'], null, null, null, false, false, null]],
        '/produit/generateExcel' => [[['_route' => 'excel', '_controller' => 'App\\Controller\\ProduitController::generateExcel'], null, null, null, false, false, null]],
        '/produit/AjoutP' => [[['_route' => 'ajout', '_controller' => 'App\\Controller\\ProduitController::Ajout'], null, null, null, false, false, null]],
        '/produit/Recherche' => [[['_route' => 'Recherche', '_controller' => 'App\\Controller\\ProduitController::Recherche'], null, null, null, false, false, null]],
        '/produit/RechercheFront' => [[['_route' => 'RechercheFront', '_controller' => 'App\\Controller\\ProduitController::RechercheFront'], null, null, null, false, false, null]],
        '/promotion' => [[['_route' => 'app_promotion', '_controller' => 'App\\Controller\\PromotionController::index'], null, null, null, false, false, null]],
        '/AffichePromotion' => [[['_route' => 'AAA', '_controller' => 'App\\Controller\\PromotionController::Affiche'], null, null, null, false, false, null]],
        '/AjoutPromotion' => [[['_route' => 'AjoutPromotion', '_controller' => 'App\\Controller\\PromotionController::Ajout'], null, null, null, false, false, null]],
        '/reservation' => [[['_route' => 'app_reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation/listp' => [[['_route' => 'app_reservation_indexp', '_controller' => 'App\\Controller\\ReservationController::index2'], null, ['GET' => 0], null, false, false, null]],
        '/stock' => [[['_route' => 'app_stock_index', '_controller' => 'App\\Controller\\StockController::index'], null, ['GET' => 0], null, true, false, null]],
        '/stock/new' => [[['_route' => 'app_stock_new', '_controller' => 'App\\Controller\\StockController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/utilisateur' => [[['_route' => 'app_utilisateur_indexfront', '_controller' => 'App\\Controller\\UtilisateurController::indexFront'], null, null, null, true, false, null]],
        '/utilisateur/AllUsers' => [[['_route' => 'AllUsers', '_controller' => 'App\\Controller\\UtilisateurController::AllUsers'], null, null, null, false, false, null]],
        '/utilisateur/back' => [[['_route' => 'app_utilisateur_index', '_controller' => 'App\\Controller\\UtilisateurController::index'], null, ['GET' => 0], null, false, false, null]],
        '/utilisateur/AddUserJson/new' => [[['_route' => 'AddUserJson', '_controller' => 'App\\Controller\\UtilisateurController::AddUserJson'], null, null, null, false, false, null]],
        '/utilisateur/new' => [[['_route' => 'app_utilisateur_new', '_controller' => 'App\\Controller\\UtilisateurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/utilisateur/signup' => [[['_route' => 'app_utilisateur_signup', '_controller' => 'App\\Controller\\UtilisateurController::signup'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/utilisateur/login' => [[['_route' => 'app_utilisateur_login', '_controller' => 'App\\Controller\\UtilisateurController::login'], null, null, null, false, false, null]],
        '/utilisateur/logout' => [[['_route' => 'app_utilisateur_logout', '_controller' => 'App\\Controller\\UtilisateurController::logout'], null, null, null, false, false, null]],
        '/utilisateur/forgotpwd' => [[['_route' => 'forgotpwd', '_controller' => 'App\\Controller\\UtilisateurController::forgotpwd'], null, null, null, false, false, null]],
        '/vote' => [[['_route' => 'app_vote_index', '_controller' => 'App\\Controller\\VoteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/vote/new' => [[['_route' => 'app_vote_new', '_controller' => 'App\\Controller\\VoteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/captcha-handler' => [[['_route' => 'captcha_handler', '_controller' => 'CaptchaBundle:CaptchaHandler:index'], null, ['GET' => 0], null, false, false, null]],
        '/simple-captcha-handler' => [[['_route' => 'simple_captcha_handler', '_controller' => 'CaptchaBundle:SimpleCaptchaHandler:index'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/blog/(?'
                    .'|([^/]++)(?'
                        .'|(*:189)'
                        .'|/edit(*:202)'
                    .')'
                    .'|UpdateBlogJSON/([^/]++)(*:234)'
                    .'|([^/]++)(*:250)'
                    .'|deleteBlogJson/([^/]++)(*:281)'
                .')'
                .'|/c(?'
                    .'|art/(?'
                        .'|add/(?'
                            .'|([^/]++)(*:317)'
                            .'|one/([^/]++)(*:337)'
                        .')'
                        .'|remove/(?'
                            .'|([^/]++)(*:364)'
                            .'|one/([^/]++)(*:384)'
                        .')'
                    .')'
                    .'|ommentaire/(?'
                        .'|AfficheCmntFront/([^/]++)(*:433)'
                        .'|new/([^/]++)/([^/]++)(*:462)'
                        .'|([^/]++)(?'
                            .'|(*:481)'
                            .'|/edit(*:494)'
                            .'|(*:502)'
                        .')'
                        .'|deleteCommentaireJson/([^/]++)(*:541)'
                    .')'
                .')'
                .'|/De(?'
                    .'|lete/([^/]++)(*:570)'
                    .'|tail/([^/]++)(*:591)'
                .')'
                .'|/Update/([^/]++)(*:616)'
                .'|/e(?'
                    .'|mploye/([^/]++)(?'
                        .'|(*:647)'
                        .'|/edit(*:660)'
                        .'|(*:668)'
                    .')'
                    .'|vent/([^/]++)(?'
                        .'|(*:693)'
                        .'|/edit(*:706)'
                        .'|(*:714)'
                    .')'
                .')'
                .'|/historiquestock/(?'
                    .'|new/([^/]++)(*:756)'
                    .'|([^/]++)(?'
                        .'|(*:775)'
                        .'|/edit(*:788)'
                        .'|(*:796)'
                    .')'
                    .'|generatePDF/([^/]++)/([^/]++)(*:834)'
                .')'
                .'|/s(?'
                    .'|u(?'
                        .'|pprimer(?'
                            .'|livraison(?'
                                .'|/([^/]++)(*:883)'
                                .'|front/([^/]++)(*:905)'
                            .')'
                            .'|commande/([^/]++)(*:931)'
                        .')'
                        .'|ccess/([^/]++)(*:954)'
                    .')'
                    .'|tore/commande/([^/]++)(*:985)'
                .')'
                .'|/modifier(?'
                    .'|livraison/([^/]++)(*:1024)'
                    .'|commande/([^/]++)(*:1050)'
                .')'
                .'|/(\\d+)(*:1066)'
                .'|/p(?'
                    .'|ointdevente/([^/]++)(?'
                        .'|(*:1103)'
                        .'|/edit(*:1117)'
                        .'|(*:1126)'
                    .')'
                    .'|roduit/(?'
                        .'|produit/([^/]++)(*:1162)'
                        .'|addProduitJson/add/([^/]++)/([^/]++)(*:1207)'
                        .'|editProduitJSON/add/([^/]++)/([^/]++)/([^/]++)(*:1262)'
                        .'|supprimerproduit/([^/]++)(*:1296)'
                        .'|De(?'
                            .'|leteProduit/([^/]++)(*:1330)'
                            .'|tailProduit/([^/]++)(*:1359)'
                        .')'
                        .'|UpdateProduit/([^/]++)(*:1391)'
                        .'|([^/]++)(*:1408)'
                    .')'
                .')'
                .'|/UpdatePromotion/([^/]++)(*:1444)'
                .'|/DeletePromotion/([^/]++)(*:1478)'
                .'|/reservation/(?'
                    .'|new/([^/]++)/([^/]++)(*:1524)'
                    .'|([^/]++)(?'
                        .'|(*:1544)'
                        .'|/edit(*:1558)'
                        .'|(*:1567)'
                    .')'
                .')'
                .'|/stock/(?'
                    .'|([^/]++)(?'
                        .'|(*:1599)'
                        .'|/edit(*:1613)'
                        .'|(*:1622)'
                    .')'
                    .'|showAll/([^/]++)(*:1648)'
                .')'
                .'|/utilisateur/(?'
                    .'|supprimeruser/([^/]++)(*:1696)'
                    .'|UpdateUserJSON/([^/]++)(*:1728)'
                    .'|editprofil/([^/]++)(*:1756)'
                    .'|activation/([^/]++)(*:1784)'
                    .'|resetpwd/([^/]++)(*:1810)'
                    .'|([^/]++)(?'
                        .'|(*:1830)'
                        .'|/edit(*:1844)'
                        .'|(*:1853)'
                    .')'
                .')'
                .'|/vote/([^/]++)(?'
                    .'|(*:1881)'
                    .'|/edit(*:1895)'
                    .'|(*:1904)'
                .')'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:1942)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        189 => [[['_route' => 'app_blog_show', '_controller' => 'App\\Controller\\BlogController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        202 => [[['_route' => 'app_blog_edit', '_controller' => 'App\\Controller\\BlogController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        234 => [[['_route' => 'UpdateBlogJSON', '_controller' => 'App\\Controller\\BlogController::UpdateBlogJSON'], ['id'], null, null, false, true, null]],
        250 => [[['_route' => 'app_blog_delete', '_controller' => 'App\\Controller\\BlogController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        281 => [[['_route' => 'deleteBlogJson', '_controller' => 'App\\Controller\\BlogController::deleteBlogJson'], ['id'], null, null, false, true, null]],
        317 => [[['_route' => 'add_to_cart', '_controller' => 'App\\Controller\\CartController::addToCart'], ['id'], null, null, false, true, null]],
        337 => [[['_route' => 'add_one_to_cart', '_controller' => 'App\\Controller\\CartController::addOneToCart'], ['id'], null, null, false, true, null]],
        364 => [[['_route' => 'remove_from_cart', '_controller' => 'App\\Controller\\CartController::removeFromCart'], ['id'], null, null, false, true, null]],
        384 => [[['_route' => 'remove_one_to_cart', '_controller' => 'App\\Controller\\CartController::removeOneToCart'], ['id'], null, null, false, true, null]],
        433 => [[['_route' => 'AfficheCmntFront', '_controller' => 'App\\Controller\\CommentaireController::indexFront'], ['blogID'], ['GET' => 0], null, false, true, null]],
        462 => [[['_route' => 'app_commentaire_new', '_controller' => 'App\\Controller\\CommentaireController::new'], ['blogID', 'userID'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        481 => [[['_route' => 'app_commentaire_show', '_controller' => 'App\\Controller\\CommentaireController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        494 => [[['_route' => 'app_commentaire_edit', '_controller' => 'App\\Controller\\CommentaireController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        502 => [[['_route' => 'app_commentaire_delete', '_controller' => 'App\\Controller\\CommentaireController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        541 => [[['_route' => 'deleteCommentaireJson', '_controller' => 'App\\Controller\\CommentaireController::deleteCommentaireJson'], ['id'], null, null, false, true, null]],
        570 => [[['_route' => 'DD', '_controller' => 'App\\Controller\\CategorieController::Delete'], ['id'], null, null, false, true, null]],
        591 => [[['_route' => 'DE', '_controller' => 'App\\Controller\\CategorieController::Detail'], ['id'], null, null, false, true, null]],
        616 => [[['_route' => 'U', '_controller' => 'App\\Controller\\CategorieController::Update'], ['id'], null, null, false, true, null]],
        647 => [[['_route' => 'app_employe_show', '_controller' => 'App\\Controller\\EmployeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        660 => [[['_route' => 'app_employe_edit', '_controller' => 'App\\Controller\\EmployeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        668 => [[['_route' => 'app_employe_delete', '_controller' => 'App\\Controller\\EmployeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        693 => [[['_route' => 'app_event_show', '_controller' => 'App\\Controller\\EventController::show'], ['eventId'], ['GET' => 0], null, false, true, null]],
        706 => [[['_route' => 'app_event_edit', '_controller' => 'App\\Controller\\EventController::edit'], ['eventId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        714 => [[['_route' => 'app_event_delete', '_controller' => 'App\\Controller\\EventController::delete'], ['eventId'], ['POST' => 0], null, false, true, null]],
        756 => [[['_route' => 'app_historiquestock_new', '_controller' => 'App\\Controller\\HistoriquestockController::new'], ['reference'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        775 => [[['_route' => 'app_historiquestock_show', '_controller' => 'App\\Controller\\HistoriquestockController::show'], ['reference'], ['GET' => 0], null, false, true, null]],
        788 => [[['_route' => 'app_historiquestock_edit', '_controller' => 'App\\Controller\\HistoriquestockController::edit'], ['reference'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        796 => [[['_route' => 'app_historiquestock_delete', '_controller' => 'App\\Controller\\HistoriquestockController::delete'], ['reference'], ['POST' => 0], null, false, true, null]],
        834 => [[['_route' => 'generatePDF', '_controller' => 'App\\Controller\\HistoriquestockController::generatePDF'], ['reference', 'date'], null, null, false, true, null]],
        883 => [[['_route' => 'supprimerlivraison', '_controller' => 'App\\Controller\\LivraisonController::Supprimer'], ['id'], null, null, false, true, null]],
        905 => [[['_route' => 'supprimerlivraisonfront', '_controller' => 'App\\Controller\\LivraisonController::SupprimerFront'], ['id'], null, null, false, true, null]],
        931 => [[['_route' => 'supprimercommande', '_controller' => 'App\\Controller\\OrderController::Supprimer'], ['id'], null, null, false, true, null]],
        954 => [[['_route' => 'success', '_controller' => 'App\\Controller\\OrderController::success'], ['order_id'], null, null, false, true, null]],
        985 => [[['_route' => 'admin_order_show', '_controller' => 'App\\Controller\\OrderController::detailsAction'], ['id'], null, null, false, true, null]],
        1024 => [[['_route' => 'modifierlivraison', '_controller' => 'App\\Controller\\LivraisonController::Update'], ['id'], null, null, false, true, null]],
        1050 => [[['_route' => 'modifiercommande', '_controller' => 'App\\Controller\\OrderController::Update'], ['id'], null, null, false, true, null]],
        1066 => [[['_route' => 'app_paiement_show', '_controller' => 'App\\Controller\\PaiementController::show'], ['idPayment'], ['GET' => 0], null, false, true, null]],
        1103 => [[['_route' => 'app_pointdevente_show', '_controller' => 'App\\Controller\\PointdeventeController::show'], ['reference'], ['GET' => 0], null, false, true, null]],
        1117 => [[['_route' => 'app_pointdevente_edit', '_controller' => 'App\\Controller\\PointdeventeController::edit'], ['reference'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1126 => [[['_route' => 'app_pointdevente_delete', '_controller' => 'App\\Controller\\PointdeventeController::delete'], ['reference'], ['POST' => 0], null, false, true, null]],
        1162 => [[['_route' => 'ProduitId', '_controller' => 'App\\Controller\\ProduitController::ProduitId'], ['id'], null, null, false, true, null]],
        1207 => [[['_route' => 'addProduitjson', '_controller' => 'App\\Controller\\ProduitController::addProduitJson'], ['idPromotion', 'idCategorie'], null, null, false, true, null]],
        1262 => [[['_route' => 'editProduitJSON', '_controller' => 'App\\Controller\\ProduitController::editProduitJSON'], ['id', 'idPromotion', 'idCategorie'], null, null, false, true, null]],
        1296 => [[['_route' => 'supprimerproduit', '_controller' => 'App\\Controller\\ProduitController::deleteproduitjson'], ['id'], null, null, false, true, null]],
        1330 => [[['_route' => 'DeleteProduit', '_controller' => 'App\\Controller\\ProduitController::Delete'], ['id'], null, null, false, true, null]],
        1359 => [[['_route' => 'DEE', '_controller' => 'App\\Controller\\ProduitController::Detail'], ['id'], null, null, false, true, null]],
        1391 => [[['_route' => 'UU', '_controller' => 'App\\Controller\\ProduitController::Update'], ['id'], null, null, false, true, null]],
        1408 => [[['_route' => 'details', '_controller' => 'App\\Controller\\ProduitController::show'], ['id'], null, null, false, true, null]],
        1444 => [[['_route' => 'UUU', '_controller' => 'App\\Controller\\PromotionController::Update'], ['id'], null, null, false, true, null]],
        1478 => [[['_route' => 'DeletePromotion', '_controller' => 'App\\Controller\\PromotionController::Delete'], ['id'], null, null, false, true, null]],
        1524 => [[['_route' => 'app_reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], ['prix', 'eventId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1544 => [[['_route' => 'app_reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['reservId'], ['GET' => 0], null, false, true, null]],
        1558 => [[['_route' => 'app_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['reservId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1567 => [[['_route' => 'app_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['reservId'], ['POST' => 0], null, false, true, null]],
        1599 => [[['_route' => 'app_stock_show', '_controller' => 'App\\Controller\\StockController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1613 => [[['_route' => 'app_stock_edit', '_controller' => 'App\\Controller\\StockController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1622 => [[['_route' => 'app_stock_delete', '_controller' => 'App\\Controller\\StockController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1648 => [[['_route' => 'app_stock_showStock', '_controller' => 'App\\Controller\\StockController::showStock'], ['reference'], ['GET' => 0], null, false, true, null]],
        1696 => [[['_route' => 'supprimeruser', '_controller' => 'App\\Controller\\UtilisateurController::deleteuserjson'], ['id'], null, null, false, true, null]],
        1728 => [[['_route' => 'UpdateUserJSON', '_controller' => 'App\\Controller\\UtilisateurController::UpdateUserJSON'], ['id'], null, null, false, true, null]],
        1756 => [[['_route' => 'app_utilisateur_editprofil', '_controller' => 'App\\Controller\\UtilisateurController::editProfil'], ['id'], null, null, false, true, null]],
        1784 => [[['_route' => 'activation', '_controller' => 'App\\Controller\\UtilisateurController::activation'], ['token'], null, null, false, true, null]],
        1810 => [[['_route' => 'resetpwd', '_controller' => 'App\\Controller\\UtilisateurController::resetpwd'], ['token'], null, null, false, true, null]],
        1830 => [[['_route' => 'app_utilisateur_show', '_controller' => 'App\\Controller\\UtilisateurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1844 => [[['_route' => 'app_utilisateur_edit', '_controller' => 'App\\Controller\\UtilisateurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1853 => [[['_route' => 'app_utilisateur_delete', '_controller' => 'App\\Controller\\UtilisateurController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1881 => [[['_route' => 'app_vote_show', '_controller' => 'App\\Controller\\VoteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1895 => [[['_route' => 'app_vote_edit', '_controller' => 'App\\Controller\\VoteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1904 => [[['_route' => 'app_vote_delete', '_controller' => 'App\\Controller\\VoteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1942 => [
            [['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
