<?php

namespace Esprit\TaxiDriverBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Esprit\TaxiDriverBundle\Entity\Voiture;
use Esprit\TaxiDriverBundle\Form\VoitureType;

class VoitureController extends Controller
{
    public function affVehiculeAction()
    {
        if($this->get('security.context')->isGranted('ROLE_ADMIN')){
            return $this->render('EspritTaxiDriverBundle:administrateur:vehicules.html.twig');
        }
            
        if($this->get('security.context')->isGranted('ROLE_CLIENT')){
            
            $em = $this->container->get('doctrine')->getEntityManager();

            $voitures = $em->getRepository('EspritTaxiDriverBundle:voiture')->findAll();

            return $this->render('EspritTaxiDriverBundle:Client:vehicules.html.twig',array('voitures' => $voitures));
        }
            
        if($this->get('security.context')->isGranted('ROLE_RESP_AGENCE')){
            return $this->render('EspritTaxiDriverBundle:ResponsableAgence:vehicules.html.twig');
        }
            
        if($this->get('security.context')->isGranted('ROLE_CHAUFFEUR')){
            return $this->render('EspritTaxiDriverBundle:Chauffeur:vehicules.html.twig');
        }
        
        $em = $this->container->get('doctrine')->getEntityManager();

            $voitures = $em->getRepository('EspritTaxiDriverBundle:voiture')->findAll();
            
        return $this->render('EspritTaxiDriverBundle:Client:vehicules.html.twig',array('voitures' => $voitures));
    }
    
    public function listVoitureAction() {

         $em = $this->container->get('doctrine')->getEntityManager();

        $voiture = $em->getRepository('EspritTaxiDriverBundle:Voiture')->findByAgenceDQL(1);

        return $this->render('EspritTaxiDriverBundle:ResponsableAgence:listVoiture.html.twig', array('voiture' => $voiture));

}

 public function updateVoitureAction($matricule) {
        $em = $this->container->get('doctrine')->getEntityManager();
        $voiture = $em->getRepository('EspritTaxiDriverBundle:Voiture')->findOneBy(array('matricule'=>$matricule));

        $form = $this->container->get('form.factory')->create(new VoitureType(),$voiture);


        $Request = $this->getRequest();
        if ($Request->getMethod() == 'POST') {
            $form->bind($Request);
            if ($form->isValid()) {

                $em->persist($voiture);
                $em->flush();
                return $this->redirect($this->generateUrl("esprit_taxidriver_resp_agence_listVoiture"));
            }
        }
        return $this->render('EspritTaxiDriverBundle:ResponsableAgence:updateVoiture.html.twig', array('Form' => $form->createView()));

}

  public function deleteVoitureAction($matricule) {
      
        $em = $this->container->get('doctrine')->getEntityManager();
        $voiture = $em->getRepository('EspritTaxiDriverBundle:Voiture')->find($matricule);
        $em->remove($voiture);
        $em->flush();
        return $this->redirect($this->generateUrl("esprit_taxidriver_resp_agence_listVoiture"));
    }
    
    
     public function ajoutVoitureAction()
    {
        $voiture = new Voiture();
        $form = $this->createForm(new VoitureType(), $voiture);
        $request = $this->get('request');
        $form->handleRequest($request);
        if ($form->isValid())
        {
           $em = $this->getDoctrine()->getManager();
           $em->persist($voiture);
           $em->flush();
           return $this->redirect($this->generateUrl("esprit_taxidriver_resp_agence_listVoiture"));
         
        }
        return $this -> render('EspritTaxiDriverBundle:ResponsableAgence:ajoutVoiture.html.twig',
                array('Form'=> $form->createView() ));
    }
    
    public function listVAction() {
       
        $em = $this->container->get('doctrine')->getEntityManager();


        $voiture = $em->getRepository('PidevTaxiBundle:Voiture')->findAll();

        return $this->render('PidevTaxiBundle:Voiture:listV.html.twig', array('voiture' => $voiture));
}
}
