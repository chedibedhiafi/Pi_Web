<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'app_blog_index' => [[], ['_controller' => 'App\\Controller\\BlogController::index'], [], [['text', '/blog/']], [], []],
    'AfficheFrontBlog' => [[], ['_controller' => 'App\\Controller\\BlogController::indexFront'], [], [['text', '/blog/AfficheFront']], [], []],
    'BlogsList' => [[], ['_controller' => 'App\\Controller\\BlogController::getBlogsJson'], [], [['text', '/blog/BlogsList']], [], []],
    'app_blog_new' => [[], ['_controller' => 'App\\Controller\\BlogController::new'], [], [['text', '/blog/new']], [], []],
    'AddBlogJSON' => [[], ['_controller' => 'App\\Controller\\BlogController::AddBlogJSON'], [], [['text', '/blog/AddBlogJSON/new']], [], []],
    'app_blog_show' => [['id'], ['_controller' => 'App\\Controller\\BlogController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/blog']], [], []],
    'app_blog_edit' => [['id'], ['_controller' => 'App\\Controller\\BlogController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/blog']], [], []],
    'UpdateBlogJSON' => [['id'], ['_controller' => 'App\\Controller\\BlogController::UpdateBlogJSON'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/blog/UpdateBlogJSON']], [], []],
    'app_blog_delete' => [['id'], ['_controller' => 'App\\Controller\\BlogController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/blog']], [], []],
    'deleteBlogJson' => [['id'], ['_controller' => 'App\\Controller\\BlogController::deleteBlogJson'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/blog/deleteBlogJson']], [], []],
    'cart' => [[], ['_controller' => 'App\\Controller\\CartController::cart'], [], [['text', '/cart']], [], []],
    'add_to_cart' => [['id'], ['_controller' => 'App\\Controller\\CartController::addToCart'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/cart/add']], [], []],
    'remove_from_cart' => [['id'], ['_controller' => 'App\\Controller\\CartController::removeFromCart'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/cart/remove']], [], []],
    'clear_cart' => [[], ['_controller' => 'App\\Controller\\CartController::cleancart'], [], [['text', '/cleancart']], [], []],
    'add_one_to_cart' => [['id'], ['_controller' => 'App\\Controller\\CartController::addOneToCart'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/cart/add/one']], [], []],
    'remove_one_to_cart' => [['id'], ['_controller' => 'App\\Controller\\CartController::removeOneToCart'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/cart/remove/one']], [], []],
    'app_categorie' => [[], ['_controller' => 'App\\Controller\\CategorieController::index'], [], [['text', '/categorie']], [], []],
    'A' => [[], ['_controller' => 'App\\Controller\\CategorieController::Affiche'], [], [['text', '/Affiche']], [], []],
    'DD' => [['id'], ['_controller' => 'App\\Controller\\CategorieController::Delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/Delete']], [], []],
    'ajoutCategorie' => [[], ['_controller' => 'App\\Controller\\CategorieController::Ajout'], [], [['text', '/Ajout']], [], []],
    'U' => [['id'], ['_controller' => 'App\\Controller\\CategorieController::Update'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/Update']], [], []],
    'DE' => [['id'], ['_controller' => 'App\\Controller\\CategorieController::Detail'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/Detail']], [], []],
    'RechercheCategorie' => [[], ['_controller' => 'App\\Controller\\CategorieController::Recherche'], [], [['text', '/RechercheCategorie']], [], []],
    'app_client' => [[], ['_controller' => 'App\\Controller\\ClientController::index'], [], [['text', '/client']], [], []],
    'app_commentaire_index' => [[], ['_controller' => 'App\\Controller\\CommentaireController::index'], [], [['text', '/commentaire/']], [], []],
    'AfficheCmntFront' => [['blogID'], ['_controller' => 'App\\Controller\\CommentaireController::indexFront'], [], [['variable', '/', '[^/]++', 'blogID'], ['text', '/commentaire/AfficheCmntFront']], [], []],
    'CommentairesList' => [[], ['_controller' => 'App\\Controller\\CommentaireController::getCommentairesJson'], [], [['text', '/commentaire/CommentairesList']], [], []],
    'app_commentaire_new' => [['blogID', 'userID'], ['_controller' => 'App\\Controller\\CommentaireController::new'], [], [['variable', '/', '[^/]++', 'userID'], ['variable', '/', '[^/]++', 'blogID'], ['text', '/commentaire/new']], [], []],
    'AddCommentaireJSON' => [[], ['_controller' => 'App\\Controller\\CommentaireController::AddCommentaireJSON'], [], [['text', '/commentaire/AddCommentaireJSON/new']], [], []],
    'app_commentaire_show' => [['id'], ['_controller' => 'App\\Controller\\CommentaireController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/commentaire']], [], []],
    'app_commentaire_edit' => [['id'], ['_controller' => 'App\\Controller\\CommentaireController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/commentaire']], [], []],
    'app_commentaire_delete' => [['id'], ['_controller' => 'App\\Controller\\CommentaireController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/commentaire']], [], []],
    'deleteCommentaireJson' => [['id'], ['_controller' => 'App\\Controller\\CommentaireController::deleteCommentaireJson'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/commentaire/deleteCommentaireJson']], [], []],
    'app_employe_index' => [[], ['_controller' => 'App\\Controller\\EmployeController::index'], [], [['text', '/employe/']], [], []],
    'app_employe_new' => [[], ['_controller' => 'App\\Controller\\EmployeController::new'], [], [['text', '/employe/new']], [], []],
    'app_employe_show' => [['id'], ['_controller' => 'App\\Controller\\EmployeController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/employe']], [], []],
    'app_employe_edit' => [['id'], ['_controller' => 'App\\Controller\\EmployeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/employe']], [], []],
    'app_employe_delete' => [['id'], ['_controller' => 'App\\Controller\\EmployeController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/employe']], [], []],
    'app_event_index' => [[], ['_controller' => 'App\\Controller\\EventController::index'], [], [['text', '/event/']], [], []],
    'app_event_indexf' => [[], ['_controller' => 'App\\Controller\\EventController::indexf'], [], [['text', '/event/front']], [], []],
    'app_event_new' => [[], ['_controller' => 'App\\Controller\\EventController::new'], [], [['text', '/event/new']], [], []],
    'app_event_show' => [['eventId'], ['_controller' => 'App\\Controller\\EventController::show'], [], [['variable', '/', '[^/]++', 'eventId'], ['text', '/event']], [], []],
    'app_event_edit' => [['eventId'], ['_controller' => 'App\\Controller\\EventController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'eventId'], ['text', '/event']], [], []],
    'app_event_delete' => [['eventId'], ['_controller' => 'App\\Controller\\EventController::delete'], [], [['variable', '/', '[^/]++', 'eventId'], ['text', '/event']], [], []],
    'app_historiquestock_index' => [[], ['_controller' => 'App\\Controller\\HistoriquestockController::index'], [], [['text', '/historiquestock/']], [], []],
    'app_historiquestock_new' => [['reference'], ['_controller' => 'App\\Controller\\HistoriquestockController::new'], [], [['variable', '/', '[^/]++', 'reference'], ['text', '/historiquestock/new']], [], []],
    'app_historiquestock_show' => [['reference'], ['_controller' => 'App\\Controller\\HistoriquestockController::show'], [], [['variable', '/', '[^/]++', 'reference'], ['text', '/historiquestock']], [], []],
    'app_historiquestock_edit' => [['reference'], ['_controller' => 'App\\Controller\\HistoriquestockController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'reference'], ['text', '/historiquestock']], [], []],
    'app_historiquestock_delete' => [['reference'], ['_controller' => 'App\\Controller\\HistoriquestockController::delete'], [], [['variable', '/', '[^/]++', 'reference'], ['text', '/historiquestock']], [], []],
    'generatePDF' => [['reference', 'date'], ['_controller' => 'App\\Controller\\HistoriquestockController::generatePDF'], [], [['variable', '/', '[^/]++', 'date'], ['variable', '/', '[^/]++', 'reference'], ['text', '/historiquestock/generatePDF']], [], []],
    'livraison' => [[], ['_controller' => 'App\\Controller\\LivraisonController::index'], [], [['text', '/livraison']], [], []],
    'afficherlivraison' => [[], ['_controller' => 'App\\Controller\\LivraisonController::AfficheC'], [], [['text', '/afficherlivraison']], [], []],
    'searchResajax' => [[], ['_controller' => 'App\\Controller\\LivraisonController::searchEventAjax'], [], [['text', '/afficherlivraison/searchResajax']], [], []],
    'supprimerlivraison' => [['id'], ['_controller' => 'App\\Controller\\LivraisonController::Supprimer'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/supprimerlivraison']], [], []],
    'supprimerlivraisonfront' => [['id'], ['_controller' => 'App\\Controller\\LivraisonController::SupprimerFront'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/supprimerlivraisonfront']], [], []],
    'ajouterlivraison' => [[], ['_controller' => 'App\\Controller\\LivraisonController::ajouter'], [], [['text', '/ajouterlivraison']], [], []],
    'modifierlivraison' => [['id'], ['_controller' => 'App\\Controller\\LivraisonController::Update'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/modifierlivraison']], [], []],
    'pdf' => [[], ['_controller' => 'App\\Controller\\LivraisonController::generate_pdf'], [], [['text', '/pdf']], [], []],
    'commande' => [[], ['_controller' => 'App\\Controller\\OrderController::order'], [], [['text', '/commande']], [], []],
    'success' => [['order_id'], ['_controller' => 'App\\Controller\\OrderController::success'], [], [['variable', '/', '[^/]++', 'order_id'], ['text', '/success']], [], []],
    'affichercommande' => [[], ['_controller' => 'App\\Controller\\OrderController::AfficheC'], [], [['text', '/affichercommande']], [], []],
    'supprimercommande' => [['id'], ['_controller' => 'App\\Controller\\OrderController::Supprimer'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/supprimercommande']], [], []],
    'modifiercommande' => [['id'], ['_controller' => 'App\\Controller\\OrderController::Update'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/modifiercommande']], [], []],
    'admin_order' => [[], ['_controller' => 'App\\Controller\\OrderController::ordersAction'], [], [['text', '/store/commande']], [], []],
    'admin_order_show' => [['id'], ['_controller' => 'App\\Controller\\OrderController::detailsAction'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/store/commande']], [], []],
    'app_paiement_index' => [[], ['_controller' => 'App\\Controller\\PaiementController::index'], [], [['text', '/paiement']], [], []],
    'app_paiement_show' => [['idPayment'], ['_controller' => 'App\\Controller\\PaiementController::show'], ['idPayment' => '\\d+'], [['variable', '/', '\\d+', 'idPayment']], [], []],
    'app_paiement_new' => [[], ['_controller' => 'App\\Controller\\PaiementController::new'], [], [['text', '/new']], [], []],
    'app_paiement' => [[], ['_controller' => 'App\\Controller\\PaiementController::checkout'], [], [['text', '/checkout']], [], []],
    'success_url' => [[], ['_controller' => 'App\\Controller\\PaiementController::successUrl'], [], [['text', '/success-url']], [], []],
    'cancel_url' => [[], ['_controller' => 'App\\Controller\\PaiementController::cancelUrl'], [], [['text', '/cancel-url']], [], []],
    'app_pointdevente_index' => [[], ['_controller' => 'App\\Controller\\PointdeventeController::index'], [], [['text', '/pointdevente/']], [], []],
    'app_pointdevente_aboutus' => [[], ['_controller' => 'App\\Controller\\PointdeventeController::aboutus'], [], [['text', '/pointdevente/aboutus']], [], []],
    'app_pointdevente_new' => [[], ['_controller' => 'App\\Controller\\PointdeventeController::new'], [], [['text', '/pointdevente/new']], [], []],
    'app_pointdevente_show' => [['reference'], ['_controller' => 'App\\Controller\\PointdeventeController::show'], [], [['variable', '/', '[^/]++', 'reference'], ['text', '/pointdevente']], [], []],
    'app_pointdevente_edit' => [['reference'], ['_controller' => 'App\\Controller\\PointdeventeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'reference'], ['text', '/pointdevente']], [], []],
    'app_pointdevente_delete' => [['reference'], ['_controller' => 'App\\Controller\\PointdeventeController::delete'], [], [['variable', '/', '[^/]++', 'reference'], ['text', '/pointdevente']], [], []],
    'AllProduit' => [[], ['_controller' => 'App\\Controller\\ProduitController::AllProduit'], [], [['text', '/produit/AllProduit']], [], []],
    'ProduitId' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::ProduitId'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/produit/produit']], [], []],
    'addProduitjson' => [['idPromotion', 'idCategorie'], ['_controller' => 'App\\Controller\\ProduitController::addProduitJson'], [], [['variable', '/', '[^/]++', 'idCategorie'], ['variable', '/', '[^/]++', 'idPromotion'], ['text', '/produit/addProduitJson/add']], [], []],
    'editProduitJSON' => [['id', 'idPromotion', 'idCategorie'], ['_controller' => 'App\\Controller\\ProduitController::editProduitJSON'], [], [['variable', '/', '[^/]++', 'idCategorie'], ['variable', '/', '[^/]++', 'idPromotion'], ['variable', '/', '[^/]++', 'id'], ['text', '/produit/editProduitJSON/add']], [], []],
    'supprimerproduit' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::deleteproduitjson'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/produit/supprimerproduit']], [], []],
    'ajax_search' => [[], ['_controller' => 'App\\Controller\\ProduitController::searchAction'], [], [['text', '/produit/recherche/']], [], []],
    'listp' => [[], ['_controller' => 'App\\Controller\\ProduitController::listp'], [], [['text', '/produit/listp']], [], []],
    'qr_function' => [[], ['_controller' => 'App\\Controller\\ProduitController::genQrCode'], [], [['text', '/produit/qrCode']], [], []],
    'stats' => [[], ['_controller' => 'App\\Controller\\ProduitController::stat'], [], [['text', '/produit/stats']], [], []],
    'AA' => [[], ['_controller' => 'App\\Controller\\ProduitController::Affiche'], [], [['text', '/produit/AfficheP']], [], []],
    'AfficheFront' => [[], ['_controller' => 'App\\Controller\\ProduitController::AfficheFront'], [], [['text', '/produit/AfficheFront']], [], []],
    'excel' => [[], ['_controller' => 'App\\Controller\\ProduitController::generateExcel'], [], [['text', '/produit/generateExcel']], [], []],
    'ajout' => [[], ['_controller' => 'App\\Controller\\ProduitController::Ajout'], [], [['text', '/produit/AjoutP']], [], []],
    'DeleteProduit' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::Delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/produit/DeleteProduit']], [], []],
    'UU' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::Update'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/produit/UpdateProduit']], [], []],
    'DEE' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::Detail'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/produit/DetailProduit']], [], []],
    'Recherche' => [[], ['_controller' => 'App\\Controller\\ProduitController::Recherche'], [], [['text', '/produit/Recherche']], [], []],
    'RechercheFront' => [[], ['_controller' => 'App\\Controller\\ProduitController::RechercheFront'], [], [['text', '/produit/RechercheFront']], [], []],
    'details' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/produit']], [], []],
    'app_promotion' => [[], ['_controller' => 'App\\Controller\\PromotionController::index'], [], [['text', '/promotion']], [], []],
    'AAA' => [[], ['_controller' => 'App\\Controller\\PromotionController::Affiche'], [], [['text', '/AffichePromotion']], [], []],
    'AjoutPromotion' => [[], ['_controller' => 'App\\Controller\\PromotionController::Ajout'], [], [['text', '/AjoutPromotion']], [], []],
    'UUU' => [['id'], ['_controller' => 'App\\Controller\\PromotionController::Update'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/UpdatePromotion']], [], []],
    'DeletePromotion' => [['id'], ['_controller' => 'App\\Controller\\PromotionController::Delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/DeletePromotion']], [], []],
    'app_reservation_index' => [[], ['_controller' => 'App\\Controller\\ReservationController::index'], [], [['text', '/reservation/']], [], []],
    'app_reservation_new' => [['prix', 'eventId'], ['_controller' => 'App\\Controller\\ReservationController::new'], [], [['variable', '/', '[^/]++', 'eventId'], ['variable', '/', '[^/]++', 'prix'], ['text', '/reservation/new']], [], []],
    'app_reservation_indexp' => [[], ['_controller' => 'App\\Controller\\ReservationController::index2'], [], [['text', '/reservation/listp']], [], []],
    'app_reservation_show' => [['reservId'], ['_controller' => 'App\\Controller\\ReservationController::show'], [], [['variable', '/', '[^/]++', 'reservId'], ['text', '/reservation']], [], []],
    'app_reservation_edit' => [['reservId'], ['_controller' => 'App\\Controller\\ReservationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'reservId'], ['text', '/reservation']], [], []],
    'app_reservation_delete' => [['reservId'], ['_controller' => 'App\\Controller\\ReservationController::delete'], [], [['variable', '/', '[^/]++', 'reservId'], ['text', '/reservation']], [], []],
    'app_stock_index' => [[], ['_controller' => 'App\\Controller\\StockController::index'], [], [['text', '/stock/']], [], []],
    'app_stock_new' => [[], ['_controller' => 'App\\Controller\\StockController::new'], [], [['text', '/stock/new']], [], []],
    'app_stock_show' => [['id'], ['_controller' => 'App\\Controller\\StockController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/stock']], [], []],
    'app_stock_edit' => [['id'], ['_controller' => 'App\\Controller\\StockController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/stock']], [], []],
    'app_stock_delete' => [['id'], ['_controller' => 'App\\Controller\\StockController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/stock']], [], []],
    'app_stock_showStock' => [['reference'], ['_controller' => 'App\\Controller\\StockController::showStock'], [], [['variable', '/', '[^/]++', 'reference'], ['text', '/stock/showAll']], [], []],
    'app_utilisateur_indexfront' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::indexFront'], [], [['text', '/utilisateur/']], [], []],
    'AllUsers' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::AllUsers'], [], [['text', '/utilisateur/AllUsers']], [], []],
    'app_utilisateur_index' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::index'], [], [['text', '/utilisateur/back']], [], []],
    'supprimeruser' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurController::deleteuserjson'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/utilisateur/supprimeruser']], [], []],
    'AddUserJson' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::AddUserJson'], [], [['text', '/utilisateur/AddUserJson/new']], [], []],
    'UpdateUserJSON' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurController::UpdateUserJSON'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/utilisateur/UpdateUserJSON']], [], []],
    'app_utilisateur_new' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::new'], [], [['text', '/utilisateur/new']], [], []],
    'app_utilisateur_signup' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::signup'], [], [['text', '/utilisateur/signup']], [], []],
    'app_utilisateur_login' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::login'], [], [['text', '/utilisateur/login']], [], []],
    'app_utilisateur_logout' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::logout'], [], [['text', '/utilisateur/logout']], [], []],
    'app_utilisateur_editprofil' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurController::editProfil'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/utilisateur/editprofil']], [], []],
    'activation' => [['token'], ['_controller' => 'App\\Controller\\UtilisateurController::activation'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/utilisateur/activation']], [], []],
    'forgotpwd' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::forgotpwd'], [], [['text', '/utilisateur/forgotpwd']], [], []],
    'resetpwd' => [['token'], ['_controller' => 'App\\Controller\\UtilisateurController::resetpwd'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/utilisateur/resetpwd']], [], []],
    'app_utilisateur_show' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/utilisateur']], [], []],
    'app_utilisateur_edit' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/utilisateur']], [], []],
    'app_utilisateur_delete' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/utilisateur']], [], []],
    'app_vote_index' => [[], ['_controller' => 'App\\Controller\\VoteController::index'], [], [['text', '/vote/']], [], []],
    'app_vote_new' => [[], ['_controller' => 'App\\Controller\\VoteController::new'], [], [['text', '/vote/new']], [], []],
    'app_vote_show' => [['id'], ['_controller' => 'App\\Controller\\VoteController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/vote']], [], []],
    'app_vote_edit' => [['id'], ['_controller' => 'App\\Controller\\VoteController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/vote']], [], []],
    'app_vote_delete' => [['id'], ['_controller' => 'App\\Controller\\VoteController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/vote']], [], []],
    'qr_code_generate' => [['builder', 'data'], ['_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['data' => '[\\w\\W]+'], [['variable', '/', '[\\w\\W]+', 'data'], ['variable', '/', '[^/]++', 'builder'], ['text', '/qr-code']], [], []],
    'captcha_handler' => [[], ['_controller' => 'CaptchaBundle:CaptchaHandler:index'], [], [['text', '/captcha-handler']], [], []],
    'simple_captcha_handler' => [[], ['_controller' => 'CaptchaBundle:SimpleCaptchaHandler:index'], [], [['text', '/simple-captcha-handler']], [], []],
];
