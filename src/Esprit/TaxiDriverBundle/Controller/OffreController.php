<?php

namespace Esprit\TaxiDriverBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OffreController extends Controller
{
    public function affOffreAction()
    {
        if($this->get('security.context')->isGranted('ROLE_ADMIN')){
            return $this->render('EspritTaxiDriverBundle:administrateur:offres.html.twig');
        }
            
        if($this->get('security.context')->isGranted('ROLE_CLIENT')){
            return $this->render('EspritTaxiDriverBundle:Client:offres.html.twig');
        }
            
        if($this->get('security.context')->isGranted('ROLE_RESP_AGENCE')){
            return $this->render('EspritTaxiDriverBundle:ResponsableAgence:offres.html.twig');
        }
            
        if($this->get('security.context')->isGranted('ROLE_CHAUFFEUR')){
            return $this->render('EspritTaxiDriverBundle:Chauffeur:offres.html.twig');
        }
        return $this->render('EspritTaxiDriverBundle:Client:offres.html.twig');
    }
}
