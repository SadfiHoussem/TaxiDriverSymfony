<?php

namespace Esprit\TaxiDriverBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AgenceController extends Controller
{
    public function affAgenceAction()
    {
        if($this->get('security.context')->isGranted('ROLE_ADMIN')){
            $em = $this->container->get('doctrine')->getEntityManager();

            $agences = $em->getRepository('EspritTaxiDriverBundle:Agence')->findAll();

            return $this->render('EspritTaxiDriverBundle:administrateur:agences.html.twig' ,  array('agences' => $agences));
        }
            
        if($this->get('security.context')->isGranted('ROLE_CLIENT')){
            
            $em = $this->container->get('doctrine')->getEntityManager();

            $agences = $em->getRepository('EspritTaxiDriverBundle:Agence')->findAll();

            return $this->render('EspritTaxiDriverBundle:Client:agences.html.twig' ,  array('agences' => $agences));
        }
            
        if($this->get('security.context')->isGranted('ROLE_RESP_AGENCE')){
            
            $em = $this->container->get('doctrine')->getEntityManager();

            $agences = $em->getRepository('EspritTaxiDriverBundle:Agence')->findAll();

            return $this->render('EspritTaxiDriverBundle:ResponsableAgence:agences.html.twig' ,  array('agences' => $agences));
        }
            
        if($this->get('security.context')->isGranted('ROLE_CHAUFFEUR')){
            
            $em = $this->container->get('doctrine')->getEntityManager();

            $agences = $em->getRepository('EspritTaxiDriverBundle:Agence')->findAll();

            return $this->render('EspritTaxiDriverBundle:Chauffeur:agences.html.twig' ,  array('agences' => $agences));
        }
        
            $em = $this->container->get('doctrine')->getEntityManager();

            $agences = $em->getRepository('EspritTaxiDriverBundle:Agence')->findAll();

            return $this->render('EspritTaxiDriverBundle:Client:agences.html.twig' ,  array('agences' => $agences));
    }
}
