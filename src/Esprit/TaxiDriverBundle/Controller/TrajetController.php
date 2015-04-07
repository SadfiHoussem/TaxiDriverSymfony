<?php

namespace Esprit\TaxiDriverBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TrajetController  extends Controller {
    
     public function listTrajetAction(){
         
        $em = $this->container->get('doctrine')->getEntityManager();

        $trajet = $em->getRepository('EspritTaxiDriverBundle:Trajet')->findAll();

        return $this->render('EspritTaxiDriverBundle:ResponsableAgence:listTrajet.html.twig', array('trajet' => $trajet));
}

  public function confirmationtrajetAction($idtrajet) {
      
    $em = $this->container->get('doctrine')->getEntityManager();
 $trajet  = $em->getRepository('EspritTaxiDriverBundle:Trajet')->find($idtrajet);
 $trajet->setEtat(1);
          $em->persist($trajet);
                $em->flush();

       
        return $this->render('EspritTaxiDriverBundle:ResponsableAgence:listTrajet.html.twig', array('trajet' => $trajet));


}


 public function deleteTrajetAction($idtrajet) {
      
        $em = $this->container->get('doctrine')->getEntityManager();
        $trajet = $em->getRepository('EspritTaxiDriverBundle:Trajet')->find($idtrajet);
        $em->remove($trajet);
        $em->flush();
        return $this->redirect($this->generateUrl("esprit_taxidriver_resp_agence_listTrajet"));
    }
  }
