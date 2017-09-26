<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // back_office_homepage
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'back_office_homepage',);
        }

        if (0 === strpos($pathinfo, '/gestion-produit')) {
            // gestion_produits
            if ($pathinfo === '/gestion-produits') {
                return array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::gestionProdAction',  '_route' => 'gestion_produits',);
            }

            // gestion_produits_enAttente
            if ($pathinfo === '/gestion-produit/enAttente') {
                return array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::gestionProdEnAttenteAction',  '_route' => 'gestion_produits_enAttente',);
            }

        }

        // accepte_produit
        if (0 === strpos($pathinfo, '/accepte') && preg_match('#^/accepte/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'accepte_produit')), array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::accepteAction',));
        }

        // refuse_produit
        if (0 === strpos($pathinfo, '/refuse') && preg_match('#^/refuse/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'refuse_produit')), array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::refuseAction',));
        }

        // efface_produit
        if (0 === strpos($pathinfo, '/efface-produit') && preg_match('#^/efface\\-produit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'efface_produit')), array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::effaceProdAction',));
        }

        // gestion_services
        if ($pathinfo === '/gestion-services') {
            return array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::gestionServiceAction',  '_route' => 'gestion_services',);
        }

        // efface_service
        if (0 === strpos($pathinfo, '/efface-service') && preg_match('#^/efface\\-service/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'efface_service')), array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::effaceServAction',));
        }

        if (0 === strpos($pathinfo, '/gestion-admin')) {
            // gestion_admins
            if ($pathinfo === '/gestion-admin') {
                return array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::gestionAdminAction',  '_route' => 'gestion_admins',);
            }

            // gestion_admin_ajout
            if ($pathinfo === '/gestion-admin/ajout') {
                return array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::ajoutAdminAction',  '_route' => 'gestion_admin_ajout',);
            }

            // gestion_admin_modif
            if ($pathinfo === '/gestion-admin/modifier') {
                return array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::modifAdminAction',  '_route' => 'gestion_admin_modif',);
            }

            // gestion_admin_supp
            if (0 === strpos($pathinfo, '/gestion-admin/supprimer') && preg_match('#^/gestion\\-admin/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gestion_admin_supp')), array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::suppAdminAction',));
            }

        }

        // ajax
        if ($pathinfo === '/ajax') {
            return array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::ajaxAction',  '_route' => 'ajax',);
        }

        if (0 === strpos($pathinfo, '/gestion-reclamation')) {
            // gestion_reclamation_inbox
            if ($pathinfo === '/gestion-reclamation/inbox') {
                return array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::inboxAction',  '_route' => 'gestion_reclamation_inbox',);
            }

            // gestion_reclamation_compose
            if ($pathinfo === '/gestion-reclamation/compose') {
                return array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::composeAction',  '_route' => 'gestion_reclamation_compose',);
            }

            if (0 === strpos($pathinfo, '/gestion-reclamation/voir')) {
                // gestion_reclamation_voir
                if ($pathinfo === '/gestion-reclamation/voir') {
                    return array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::voirRecAction',  '_route' => 'gestion_reclamation_voir',);
                }

                // gestion_reclamation_voir_1
                if (preg_match('#^/gestion\\-reclamation/voir/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gestion_reclamation_voir_1')), array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::voirReclamationAction',));
                }

            }

            // gestion_reclamation_repond
            if ($pathinfo === '/gestion-reclamation/repond') {
                return array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::repondRecAction',  '_route' => 'gestion_reclamation_repond',);
            }

            // gestion_reclamation_supp
            if ($pathinfo === '/gestion-reclamation/supp') {
                return array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::suppRecAction',  '_route' => 'gestion_reclamation_supp',);
            }

        }

        if (0 === strpos($pathinfo, '/ajax-rec')) {
            // ajax_reclamation1
            if ($pathinfo === '/ajax-rec1') {
                return array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::ajaxRec1Action',  '_route' => 'ajax_reclamation1',);
            }

            // ajax_reclamation2
            if ($pathinfo === '/ajax-rec2') {
                return array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::ajaxRec2Action',  '_route' => 'ajax_reclamation2',);
            }

        }

        // gestion_reclamation
        if ($pathinfo === '/gestion-reclamation') {
            return array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::gestRecAction',  '_route' => 'gestion_reclamation',);
        }

        // envoi_mail
        if ($pathinfo === '/envoi-mail') {
            return array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::envoiMailAction',  '_route' => 'envoi_mail',);
        }

        // login_admin
        if ($pathinfo === '/login-admin') {
            return array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login_admin',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            // admin_signIn
            if ($pathinfo === '/admin-sign-in') {
                return array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::signInAction',  '_route' => 'admin_signIn',);
            }

            // ajax_login
            if ($pathinfo === '/ajax-login') {
                return array (  '_controller' => 'BackOfficeBundle\\Controller\\DefaultController::ajaxLoginAction',  '_route' => 'ajax_login',);
            }

            // main_homepage
            if ($pathinfo === '/acceuil') {
                return array (  '_controller' => 'mainBundle\\Controller\\AccueilController::accueilAction',  '_route' => 'main_homepage',);
            }

        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'mainBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
        }

        if (0 === strpos($pathinfo, '/membre')) {
            // membre
            if ($pathinfo === '/membres') {
                return array (  '_controller' => 'mainBundle\\Controller\\MembreController::indexAction',  '_route' => 'membre',);
            }

            // membre_show
            if (0 === strpos($pathinfo, '/membre_show') && preg_match('#^/membre_show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'membre_show')), array (  '_controller' => 'mainBundle\\Controller\\MembreController::showAction',));
            }

        }

        // gestion_offer
        if ($pathinfo === '/gestion-offer') {
            return array (  '_controller' => 'mainBundle\\Controller\\AccueilController::gestionAction',  '_route' => 'gestion_offer',);
        }

        // contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'mainBundle\\Controller\\DefaultController::contactAction',  '_route' => 'contact',);
        }

        // delivery
        if ($pathinfo === '/delivery') {
            return array (  '_controller' => 'mainBundle\\Controller\\DefaultController::deliveryAction',  '_route' => 'delivery',);
        }

        // products
        if (0 === strpos($pathinfo, '/products') && preg_match('#^/products/(?P<categorie>[^/]++)/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'products')), array (  '_controller' => 'mainBundle\\Controller\\AccueilController::productsAction',));
        }

        // services
        if (0 === strpos($pathinfo, '/services') && preg_match('#^/services/(?P<categorie>[^/]++)/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'services')), array (  '_controller' => 'mainBundle\\Controller\\AccueilController::servicesAction',));
        }

        // product_details
        if (0 === strpos($pathinfo, '/product-details') && preg_match('#^/product\\-details/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_details')), array (  '_controller' => 'mainBundle\\Controller\\DefaultController::productDetailsAction',));
        }

        // cart
        if ($pathinfo === '/cart') {
            return array (  '_controller' => 'mainBundle\\Controller\\PanierController::cartAction',  '_route' => 'cart',);
        }

        // forget_pass
        if ($pathinfo === '/forget-pass') {
            return array (  '_controller' => 'mainBundle\\Controller\\DefaultController::forgetPassAction',  '_route' => 'forget_pass',);
        }

        // compair
        if ($pathinfo === '/compair') {
            return array (  '_controller' => 'mainBundle\\Controller\\DefaultController::compairAction',  '_route' => 'compair',);
        }

        // sign_in
        if ($pathinfo === '/sign-in') {
            return array (  '_controller' => 'mainBundle\\Controller\\DefaultController::signInAction',  '_route' => 'sign_in',);
        }

        if (0 === strpos($pathinfo, '/recherche')) {
            // rechercheproduits
            if ($pathinfo === '/recherche') {
                return array (  '_controller' => 'mainBundle\\Controller\\AccueilController::rechercheNameProduitAction',  '_route' => 'rechercheproduits',);
            }

            // rechercheproduits2
            if (0 === strpos($pathinfo, '/recherchep') && preg_match('#^/recherchep/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rechercheproduits2')), array (  '_controller' => 'mainBundle\\Controller\\AccueilController::rechercheNameProduit2Action',));
            }

            // rechercheproduits3
            if (0 === strpos($pathinfo, '/recherches') && preg_match('#^/recherches/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rechercheproduits3')), array (  '_controller' => 'mainBundle\\Controller\\AccueilController::rechercheNameProduit3Action',));
            }

        }

        // filtre
        if ($pathinfo === '/filtre') {
            return array (  '_controller' => 'mainBundle\\Controller\\AccueilController::filtreAction',  '_route' => 'filtre',);
        }

        if (0 === strpos($pathinfo, '/ajouter')) {
            // ajouterProduit
            if ($pathinfo === '/ajouterproduit') {
                return array (  '_controller' => 'mainBundle\\Controller\\OffreController::ajouterProduitAction',  '_route' => 'ajouterProduit',);
            }

            // ajouterService
            if ($pathinfo === '/ajouterservice') {
                return array (  '_controller' => 'mainBundle\\Controller\\OffreController::ajouterServiceAction',  '_route' => 'ajouterService',);
            }

            // ajouterp
            if ($pathinfo === '/ajouterp') {
                return array (  '_controller' => 'mainBundle\\Controller\\OffreController::ajouterPAction',  '_route' => 'ajouterp',);
            }

            // ajouters
            if ($pathinfo === '/ajouters') {
                return array (  '_controller' => 'mainBundle\\Controller\\OffreController::ajouterSAction',  '_route' => 'ajouters',);
            }

        }

        // success
        if ($pathinfo === '/success') {
            return array (  '_controller' => 'mainBundle\\Controller\\OffreController::retourAction',  '_route' => 'success',);
        }

        if (0 === strpos($pathinfo, '/modifierp')) {
            // modifierProduit
            if ($pathinfo === '/modifierproduit') {
                return array (  '_controller' => 'mainBundle\\Controller\\OffreController::modifierProduitAction',  '_route' => 'modifierProduit',);
            }

            // modifierp
            if ($pathinfo === '/modifierp') {
                return array (  '_controller' => 'mainBundle\\Controller\\OffreController::modifierPAction',  '_route' => 'modifierp',);
            }

        }

        // afficherProduit
        if ($pathinfo === '/afficherproduit') {
            return array (  '_controller' => 'mainBundle\\Controller\\OffreController::afficherProduitAction',  '_route' => 'afficherProduit',);
        }

        if (0 === strpos($pathinfo, '/supprimerp')) {
            // supprimerProduit
            if ($pathinfo === '/supprimerproduit') {
                return array (  '_controller' => 'mainBundle\\Controller\\OffreController::supprimerProduitAction',  '_route' => 'supprimerProduit',);
            }

            // supprimerp
            if ($pathinfo === '/supprimerp') {
                return array (  '_controller' => 'mainBundle\\Controller\\OffreController::supprimerPAction',  '_route' => 'supprimerp',);
            }

        }

        if (0 === strpos($pathinfo, '/modifiers')) {
            // modifierService
            if ($pathinfo === '/modifierservice') {
                return array (  '_controller' => 'mainBundle\\Controller\\OffreController::modifierServiceAction',  '_route' => 'modifierService',);
            }

            // modifiers
            if ($pathinfo === '/modifiers') {
                return array (  '_controller' => 'mainBundle\\Controller\\OffreController::modifierSAction',  '_route' => 'modifiers',);
            }

        }

        // afficherService
        if ($pathinfo === '/afficherservice') {
            return array (  '_controller' => 'mainBundle\\Controller\\OffreController::afficherServiceAction',  '_route' => 'afficherService',);
        }

        if (0 === strpos($pathinfo, '/supprimers')) {
            // supprimerService
            if ($pathinfo === '/supprimerservice') {
                return array (  '_controller' => 'mainBundle\\Controller\\OffreController::supprimerServiceAction',  '_route' => 'supprimerService',);
            }

            // supprimers
            if ($pathinfo === '/supprimers') {
                return array (  '_controller' => 'mainBundle\\Controller\\OffreController::supprimerSAction',  '_route' => 'supprimers',);
            }

        }

        // ajout_membre
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'mainBundle\\Controller\\MembreController::ajout_membreAction',  '_route' => 'ajout_membre',);
        }

        // remove_product_panier
        if (0 === strpos($pathinfo, '/panier-remove') && preg_match('#^/panier\\-remove/(?P<idmembre>[^/]++)/(?P<idproduit>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_product_panier')), array (  '_controller' => 'mainBundle\\Controller\\PanierController::panierRemoveAction',));
        }

        // envoie_reclamation
        if ($pathinfo === '/envoie_reclamation') {
            return array (  '_controller' => 'mainBundle\\Controller\\DefaultController::envoieReclamationAction',  '_route' => 'envoie_reclamation',);
        }

        // payer
        if ($pathinfo === '/payement') {
            return array (  '_controller' => 'mainBundle\\Controller\\DefaultController::payerAction',  '_route' => 'payer',);
        }

        // execute
        if ($pathinfo === '/execute') {
            return array (  '_controller' => 'mainBundle\\Controller\\DefaultController::executeAction',  '_route' => 'execute',);
        }

        // add_cart
        if (0 === strpos($pathinfo, '/add-cart') && preg_match('#^/add\\-cart/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_cart')), array (  '_controller' => 'mainBundle\\Controller\\DefaultController::addCartAction',));
        }

        // disconnect
        if ($pathinfo === '/disconnect') {
            return array (  '_controller' => 'mainBundle\\Controller\\DefaultController::disconnectAction',  '_route' => 'disconnect',);
        }

        // evaluation_submit
        if (0 === strpos($pathinfo, '/evaluation-submit/produit') && preg_match('#^/evaluation\\-submit/produit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'evaluation_submit')), array (  '_controller' => 'mainBundle\\Controller\\DefaultController::submitEvalProdAction',));
        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
