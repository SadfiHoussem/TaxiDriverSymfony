<?php

namespace Esprit\TaxiDriverBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function accueilAction()
    {
        return $this->render('EspritTaxiDriverBundle:Client:accueil.html.twig');
    }
    
    public function accueilClientAction()
    {
        return $this->render('EspritTaxiDriverBundle:Client:accueil.html.twig');
    }
    public function accueilChauffeurAction()
    {
        return $this->render('EspritTaxiDriverBundle:Chauffeur:accueil.html.twig');
    }
    public function accueilRespAgenceAction()
    {
        return $this->render('EspritTaxiDriverBundle:ResponsableAgence:accueil.html.twig');
    }
    public function accueilAdminAction()
    {
        return $this->render('EspritTaxiDriverBundle:Administrateur:accueil.html.twig');
    }
    
    public function aproposAction()
    {
        if($this->get('security.context')->isGranted('ROLE_ADMIN')){
            return $this->render('EspritTaxiDriverBundle:administrateur:apropos.html.twig');
        }
            
        if($this->get('security.context')->isGranted('ROLE_CLIENT')){
            return $this->render('EspritTaxiDriverBundle:Client:apropos.html.twig');
        }
            
        if($this->get('security.context')->isGranted('ROLE_RESP_AGENCE')){
            return $this->render('EspritTaxiDriverBundle:ResponsableAgence:apropos.html.twig');
        }
            
        if($this->get('security.context')->isGranted('ROLE_CHAUFFEUR')){
            return $this->render('EspritTaxiDriverBundle:Chauffeur:apropos.html.twig');
        }
        
        return $this->render('EspritTaxiDriverBundle:Client:apropos.html.twig');
    }
    
    public function contactAction()
    {
        if($this->get('security.context')->isGranted('ROLE_ADMIN')){
            return $this->render('EspritTaxiDriverBundle:administrateur:contact.html.twig');
        }
            
        if($this->get('security.context')->isGranted('ROLE_CLIENT')){
            return $this->render('EspritTaxiDriverBundle:Client:contact.html.twig');
        }
            
        if($this->get('security.context')->isGranted('ROLE_RESP_AGENCE')){
            return $this->render('EspritTaxiDriverBundle:ResponsableAgence:contact.html.twig');
        }
            
        if($this->get('security.context')->isGranted('ROLE_CHAUFFEUR')){
            return $this->render('EspritTaxiDriverBundle:Chauffeur:contact.html.twig');
        }
        
        return $this->render('EspritTaxiDriverBundle:Client:contact.html.twig');
    }
}
