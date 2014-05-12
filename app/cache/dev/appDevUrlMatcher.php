<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
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

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

        }

        // voyage_users_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'voyage_users_homepage')), array (  '_controller' => 'voyage\\UsersBundle\\Controller\\DefaultController::indexAction',));
        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'voyage\\UsersBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
        }

        // register
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'voyage\\UsersBundle\\Controller\\DefaultController::registerAction',  '_route' => 'register',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // login_check
            if ($pathinfo === '/login_check') {
                return array('_route' => 'login_check');
            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        // voyage_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'voyage_homepage');
            }

            return array (  '_controller' => 'voyage\\FirstBundle\\Controller\\DefaultController::indexAction',  '_route' => 'voyage_homepage',);
        }

        // voyage_contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'voyage\\FirstBundle\\Controller\\DefaultController::contactAction',  '_route' => 'voyage_contact',);
        }

        if (0 === strpos($pathinfo, '/recherche')) {
            // recherche
            if ($pathinfo === '/recherche') {
                return array (  '_controller' => 'voyage\\FirstBundle\\Controller\\RechercheController::rechercheAction',  '_route' => 'recherche',);
            }

            // recherche2
            if ($pathinfo === '/recherche2') {
                return array (  '_controller' => 'voyage\\FirstBundle\\Controller\\RechercheController::recherche2Action',  '_route' => 'recherche2',);
            }

        }

        // proposition
        if ($pathinfo === '/proposition') {
            return array (  '_controller' => 'VoyageBundle:proposition:proposition',  '_route' => 'proposition',);
        }

        // inscription
        if ($pathinfo === '/inscription') {
            return array (  '_controller' => 'voyage\\FirstBundle\\Controller\\UsersController::inscriptionAction',  '_route' => 'inscription',);
        }

        // profil
        if ($pathinfo === '/profil') {
            return array (  '_controller' => 'voyage\\FirstBundle\\Controller\\UsersController::profilAction',  '_route' => 'profil',);
        }

        if (0 === strpos($pathinfo, '/annonce')) {
            // annonce
            if ($pathinfo === '/annonce') {
                return array (  '_controller' => 'voyage\\FirstBundle\\Controller\\AnnonceController::indexAction',  '_route' => 'annonce',);
            }

            // annonce2
            if ($pathinfo === '/annonce/index2') {
                return array (  '_controller' => 'voyage\\FirstBundle\\Controller\\AnnonceController::index2Action',  '_route' => 'annonce2',);
            }

            // annonce_show
            if (0 === strpos($pathinfo, '/annonce/show') && preg_match('#^/annonce/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'annonce_show')), array (  '_controller' => 'voyage\\FirstBundle\\Controller\\AnnonceController::showAction',));
            }

            // annonce_edit
            if (0 === strpos($pathinfo, '/annonce/edit') && preg_match('#^/annonce/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'annonce_edit')), array (  '_controller' => 'voyage\\FirstBundle\\Controller\\AnnonceController::editAction',));
            }

            // annonce_new
            if ($pathinfo === '/annonce/new') {
                return array (  '_controller' => 'voyage\\FirstBundle\\Controller\\AnnonceController::newAction',  '_route' => 'annonce_new',);
            }

            // annonce_create
            if ($pathinfo === '/annonce/create') {
                return array (  '_controller' => 'voyage\\FirstBundle\\Controller\\AnnonceController::createAction',  '_route' => 'annonce_create',);
            }

            // annonce_delete
            if (0 === strpos($pathinfo, '/annonce/delete') && preg_match('#^/annonce/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'annonce_delete')), array (  '_controller' => 'voyage\\FirstBundle\\Controller\\AnnonceController::deleteAction',));
            }

            // annonce_update
            if (0 === strpos($pathinfo, '/annonce/update') && preg_match('#^/annonce/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'annonce_update')), array (  '_controller' => 'voyage\\FirstBundle\\Controller\\AnnonceController::updateAction',));
            }

            // add_comment
            if (0 === strpos($pathinfo, '/annonce/addComment') && preg_match('#^/annonce/addComment/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_comment')), array (  '_controller' => 'voyage\\FirstBundle\\Controller\\EvalController::addAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
