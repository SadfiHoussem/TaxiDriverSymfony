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
            if ($pathinfo === '/profile/show') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }

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

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        // esprit_taxidriver_client_homepage
        if ($pathinfo === '/client/accueil') {
            return array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\DefaultController::accueilClientAction',  '_route' => 'esprit_taxidriver_client_homepage',);
        }

        // esprit_taxidriver_resp_agence_homepage
        if ($pathinfo === '/respAgence/accueil') {
            return array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\DefaultController::accueilRespAgenceAction',  '_route' => 'esprit_taxidriver_resp_agence_homepage',);
        }

        // esprit_taxidriver_chauffeur_homepage
        if ($pathinfo === '/chauffeur/accueil') {
            return array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\DefaultController::accueilChauffeurAction',  '_route' => 'esprit_taxidriver_chauffeur_homepage',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            // esprit_taxidriver_admin_homepage
            if ($pathinfo === '/admin/accueil') {
                return array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\DefaultController::accueilAdminAction',  '_route' => 'esprit_taxidriver_admin_homepage',);
            }

            // esprit_taxidriver_a_propos
            if ($pathinfo === '/apropos') {
                return array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\DefaultController::aproposAction',  '_route' => 'esprit_taxidriver_a_propos',);
            }

        }

        // esprit_taxidriver_contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\DefaultController::contactAction',  '_route' => 'esprit_taxidriver_contact',);
        }

        // esprit_taxidriver_affi_agence
        if ($pathinfo === '/agence') {
            return array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\AgenceController::affAgenceAction',  '_route' => 'esprit_taxidriver_affi_agence',);
        }

        // esprit_taxidriver_affi_offre
        if ($pathinfo === '/offre') {
            return array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\OffreController::affOffreAction',  '_route' => 'esprit_taxidriver_affi_offre',);
        }

        // esprit_taxidriver_affi_chauffeur
        if ($pathinfo === '/chauffeur') {
            return array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\ChauffeurController::affChauffeurAction',  '_route' => 'esprit_taxidriver_affi_chauffeur',);
        }

        // esprit_taxidriver_affi_vehicule
        if ($pathinfo === '/voiture') {
            return array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\VoitureController::affVehiculeAction',  '_route' => 'esprit_taxidriver_affi_vehicule',);
        }

        if (0 === strpos($pathinfo, '/client')) {
            // esprit_taxidriver_client_reservation_taxi
            if ($pathinfo === '/client/resTaxi') {
                return array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\ReservationController::reserverAction',  '_route' => 'esprit_taxidriver_client_reservation_taxi',);
            }

            // esprit_taxidriver_client_consul_conf_res
            if ($pathinfo === '/client/consulConfRes') {
                return array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\ReservationController::consulterConfResAction',  '_route' => 'esprit_taxidriver_client_consul_conf_res',);
            }

            // esprit_taxidriver_client_detail_offre
            if (0 === strpos($pathinfo, '/client/detailoffre') && preg_match('#^/client/detailoffre/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_taxidriver_client_detail_offre')), array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\OffreController::detailoffreAction',));
            }

        }

        // esprit_taxidriver_client_bestchauffeurs
        if ($pathinfo === '/bestchauffeurs') {
            return array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\OffreController::bestchauffeursAction',  '_route' => 'esprit_taxidriver_client_bestchauffeurs',);
        }

        if (0 === strpos($pathinfo, '/respAgence')) {
            if (0 === strpos($pathinfo, '/respAgence/list')) {
                // esprit_taxidriver_resp_agence_listRNCreclamation
                if ($pathinfo === '/respAgence/listreclamationNC') {
                    return array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\ReclamationController::listRecNonConfAction',  '_route' => 'esprit_taxidriver_resp_agence_listRNCreclamation',);
                }

                // esprit_taxidriver_resp_agence_listReclamation
                if ($pathinfo === '/respAgence/listReclamation') {
                    return array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\ReclamationController::listReclamationAction',  '_route' => 'esprit_taxidriver_resp_agence_listReclamation',);
                }

            }

            // esprit_taxidriver_resp_agence_AffichReclamation
            if ($pathinfo === '/respAgence/AffichReclamation') {
                return array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\ReclamationController::AffichReclamationAction',  '_route' => 'esprit_taxidriver_resp_agence_AffichReclamation',);
            }

            // esprit_taxidriver_resp_agence_affichageRec
            if (0 === strpos($pathinfo, '/respAgence/affichageRec') && preg_match('#^/respAgence/affichageRec/(?P<idreclamation>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_taxidriver_resp_agence_affichageRec')), array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\ReclamationController::affichageAction',));
            }

            // esprit_taxidriver_resp_agence_historiqueRec
            if ($pathinfo === '/respAgence/historique') {
                return array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\ReclamationController::historiqueAction',  '_route' => 'esprit_taxidriver_resp_agence_historiqueRec',);
            }

            // esprit_taxidriver_resp_agence_confirmationRec
            if (0 === strpos($pathinfo, '/respAgence/confirmation') && preg_match('#^/respAgence/confirmation/(?P<idreclamation>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_taxidriver_resp_agence_confirmationRec')), array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\ReclamationController::confirmationAction',));
            }

            // esprit_taxidriver_resp_agence_affichagehistRec
            if (0 === strpos($pathinfo, '/respAgence/affichagehist') && preg_match('#^/respAgence/affichagehist/(?P<idreclamation>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_taxidriver_resp_agence_affichagehistRec')), array ());
            }

            // esprit_taxidriver_resp_agence_listChauffeur
            if ($pathinfo === '/respAgence/listChauffeur') {
                return array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\ChauffeurController::listChauffeurAction',  '_route' => 'esprit_taxidriver_resp_agence_listChauffeur',);
            }

            // esprit_taxidriver_resp_agence_updateChauffeur
            if (0 === strpos($pathinfo, '/respAgence/updateChauffeur') && preg_match('#^/respAgence/updateChauffeur/(?P<idchauffeur>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_taxidriver_resp_agence_updateChauffeur')), array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\ChauffeurController::updateChauffeurAction',));
            }

            // esprit_taxidriver_resp_agence_deleteChauffeur
            if (0 === strpos($pathinfo, '/respAgence/deleteChauffeur') && preg_match('#^/respAgence/deleteChauffeur/(?P<idchauffeur>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_taxidriver_resp_agence_deleteChauffeur')), array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\ChauffeurController::deleteChauffeurAction',));
            }

            // esprit_taxidriver_resp_agence_ajoutChauffeur
            if ($pathinfo === '/respAgence/ajoutChauffeur') {
                return array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\ChauffeurController::ajoutChauffeurAction',  '_route' => 'esprit_taxidriver_resp_agence_ajoutChauffeur',);
            }

            // esprit_taxidriver_resp_agence_listVoiture
            if ($pathinfo === '/respAgence/listVoiture') {
                return array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\VoitureController::listVoitureAction',  '_route' => 'esprit_taxidriver_resp_agence_listVoiture',);
            }

            // esprit_taxidriver_resp_agence_updateVoiture
            if (0 === strpos($pathinfo, '/respAgence/updateVoiture') && preg_match('#^/respAgence/updateVoiture/(?P<matricule>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_taxidriver_resp_agence_updateVoiture')), array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\VoitureController::updateVoitureAction',));
            }

            // esprit_taxidriver_resp_agence_deleteVoiture
            if (0 === strpos($pathinfo, '/respAgence/deleteVoiture') && preg_match('#^/respAgence/deleteVoiture/(?P<matricule>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_taxidriver_resp_agence_deleteVoiture')), array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\VoitureController::deleteVoitureAction',));
            }

            // esprit_taxidriver_resp_agence_ajoutVoiture
            if ($pathinfo === '/respAgence/ajoutVoiture') {
                return array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\VoitureController::ajoutVoitureAction',  '_route' => 'esprit_taxidriver_resp_agence_ajoutVoiture',);
            }

            // esprit_taxidriver_resp_agence_listTrajet
            if ($pathinfo === '/respAgence/trajet') {
                return array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\TrajetController::listTrajetAction',  '_route' => 'esprit_taxidriver_resp_agence_listTrajet',);
            }

            // esprit_taxidriver_resp_agence_confirmationtrajet
            if (0 === strpos($pathinfo, '/respAgence/confirmationtrajet') && preg_match('#^/respAgence/confirmationtrajet/(?P<idtrajet>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_taxidriver_resp_agence_confirmationtrajet')), array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\TrajetController::confirmationtrajetAction',));
            }

            // esprit_taxidriver_resp_agence_deleteTrajet
            if (0 === strpos($pathinfo, '/respAgence/deleteTrajet') && preg_match('#^/respAgence/deleteTrajet/(?P<idtrajet>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_taxidriver_resp_agence_deleteTrajet')), array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\TrajetController::deleteTrajetAction',));
            }

            // esprit_taxidriver_resp_agence_listOffre
            if ($pathinfo === '/respAgence/listOffre') {
                return array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\OffreController::listOffreAction',  '_route' => 'esprit_taxidriver_resp_agence_listOffre',);
            }

            // esprit_taxidriver_resp_agence_updateOffre
            if (0 === strpos($pathinfo, '/respAgence/updateOffre') && preg_match('#^/respAgence/updateOffre/(?P<idOffre>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_taxidriver_resp_agence_updateOffre')), array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\OffreController::updateOffreAction',));
            }

            // esprit_taxidriver_resp_agence_deleteOffre
            if (0 === strpos($pathinfo, '/respAgence/deleteOffre') && preg_match('#^/respAgence/deleteOffre/(?P<idoffre>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_taxidriver_resp_agence_deleteOffre')), array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\OffreController::deleteOffreAction',));
            }

            // esprit_taxidriver_resp_agence_ajoutOffre
            if ($pathinfo === '/respAgence/ajoutOffre') {
                return array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\OffreController::ajoutOffreAction',  '_route' => 'esprit_taxidriver_resp_agence_ajoutOffre',);
            }

        }

<<<<<<< HEAD
        // esprit_taxidriver_graphePie
        if ($pathinfo === '/pie') {
            return array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\GrapheController::chartPieAction',  '_route' => 'esprit_taxidriver_graphePie',);
        }

        // esprit_taxidriver_grapheHistogramme
        if ($pathinfo === '/histogramme') {
            return array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\GrapheController::chartHistogrammeAction',  '_route' => 'esprit_taxidriver_grapheHistogramme',);
        }

        // esprit_taxidriver_mail_redirection
        if ($pathinfo === '/redirection') {
            return array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\MailController::redirectionAction',  '_route' => 'esprit_taxidriver_mail_redirection',);
        }

        // esprit_taxidriver_mail_sendMail
        if ($pathinfo === '/sendMail') {
            return array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\MailController::sendMailAction',  '_route' => 'esprit_taxidriver_mail_sendMail',);
=======
        if (0 === strpos($pathinfo, '/admin')) {
            // esprit_taxidriver_admin_mail_sendMail
            if ($pathinfo === '/admin/sendMail') {
                return array (  '_controller' => 'EspritTaxiDriverBundle:Mail:sendMail',  '_route' => 'esprit_taxidriver_admin_mail_sendMail',);
            }

            // esprit_taxidriver_admin_taxi_voit
            if ($pathinfo === '/admin/voiture') {
                return array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\VoitureController::listVAction',  '_route' => 'esprit_taxidriver_admin_taxi_voit',);
            }

            // esprit_taxidriver_admin_listClient
            if ($pathinfo === '/admin/client') {
                return array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\ClientController::listClientAction',  '_route' => 'esprit_taxidriver_admin_listClient',);
            }

            // esprit_taxidriver_admin_listResp
            if ($pathinfo === '/admin/resp') {
                return array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\ResponsableController::listRespAction',  '_route' => 'esprit_taxidriver_admin_listResp',);
            }

            // esprit_taxidriver_admin_updateResp
            if (0 === strpos($pathinfo, '/admin/updateResp') && preg_match('#^/admin/updateResp/(?P<idresp>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_taxidriver_admin_updateResp')), array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\ResponsableController::updateRespAction',));
            }

            // esprit_taxidriver_admin_deleteResp
            if (0 === strpos($pathinfo, '/admin/deleteResp') && preg_match('#^/admin/deleteResp/(?P<idresp>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_taxidriver_admin_deleteResp')), array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\ResponsableController::deleteRespAction',));
            }

            // esprit_taxidriver_admin_ajoutResp
            if ($pathinfo === '/admin/ajoutResp') {
                return array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\ResponsableController::ajoutRespAction',  '_route' => 'esprit_taxidriver_admin_ajoutResp',);
            }

            // esprit_taxidriver_admin_listAgence
            if ($pathinfo === '/admin/Agence') {
                return array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\AgenceController::listAgenceAction',  '_route' => 'esprit_taxidriver_admin_listAgence',);
            }

            // esprit_taxidriver_admin_updateAgence
            if (0 === strpos($pathinfo, '/admin/updateAgence') && preg_match('#^/admin/updateAgence/(?P<idagence>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_taxidriver_admin_updateAgence')), array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\AgenceController::updateAgenceAction',));
            }

            // esprit_taxidriver_admin_deleteAgence
            if (0 === strpos($pathinfo, '/admin/deleteAgence') && preg_match('#^/admin/deleteAgence/(?P<idagence>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_taxidriver_admin_deleteAgence')), array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\AgenceController::deleteAgenceAction',));
            }

            // esprit_taxidriver_admin_ajoutAgence
            if ($pathinfo === '/admin/ajoutAgence') {
                return array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\AgenceController::ajoutAgenceAction',  '_route' => 'esprit_taxidriver_admin_ajoutAgence',);
            }

            // esprit_taxidriver_admin_stat
            if ($pathinfo === '/admin/taxiStat') {
                return array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\StatistiqueController::statAction',  '_route' => 'esprit_taxidriver_admin_stat',);
            }

            // esprit_taxidriver_admin_com
            if ($pathinfo === '/admin/com') {
                return array (  '_controller' => 'EspritTaxiDriverBundle:Commentaire:listC',  '_route' => 'esprit_taxidriver_admin_com',);
            }

            // esprit_taxidriver_admin_suppCom
            if (0 === strpos($pathinfo, '/admin/suppCom') && preg_match('#^/admin/suppCom/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esprit_taxidriver_admin_suppCom')), array (  '_controller' => 'EspritTaxiDriverBundle:Commentaire:deleteCom',));
            }

            // esprit_taxidriver_admin_offre
            if ($pathinfo === '/admin/offre') {
                return array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\OffreController::listOAction',  '_route' => 'esprit_taxidriver_admin_offre',);
            }

            // esprit_taxidriver_admin_hist
            if ($pathinfo === '/admin/hist') {
                return array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\StatistiqueController::chartHistogrammeAction',  '_route' => 'esprit_taxidriver_admin_hist',);
            }

            // esprit_taxidriver_admin_calendrier
            if ($pathinfo === '/admin/calendrier') {
                return array (  '_controller' => 'Esprit\\TaxiDriverBundle\\Controller\\CalendrierController::calendrierAction',  '_route' => 'esprit_taxidriver_admin_calendrier',);
            }

>>>>>>> origin/master
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
