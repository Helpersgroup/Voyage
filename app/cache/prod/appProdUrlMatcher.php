<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // user_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_homepage')), array (  '_controller' => 'voyage\\UserBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/facebook/log')) {
            // _security_check_facebook
            if ($pathinfo === '/facebook/login_check') {
                return array (  '_controller' => 'voyage\\UserBundle\\Controller\\UserController::loginFbAction',  '_route' => '_security_check_facebook',);
            }

            // _security_facebook_logout
            if ($pathinfo === '/facebook/logout') {
                return array('_route' => '_security_facebook_logout');
            }

        }

        // user_couple_fb_with_account
        if ($pathinfo === '/user/couple/facebook') {
            return array (  '_controller' => 'voyage\\UserBundle\\Controller\\UserController::connectFacebookWithAccountAction',  '_route' => 'user_couple_fb_with_account',);
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

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            // _security_check
            if ($pathinfo === '/login_check') {
                return array('_route' => '_security_check');
            }

            // _security_logout
            if ($pathinfo === '/logout') {
                return array('_route' => '_security_logout');
            }

        }

        // fos_facebook_channel
        if ($pathinfo === '/channel.html') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_facebook_channel;
            }

            return array (  '_controller' => 'FOS\\FacebookBundle\\Controller\\FacebookController::channelAction',  '_route' => 'fos_facebook_channel',);
        }
        not_fos_facebook_channel:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
