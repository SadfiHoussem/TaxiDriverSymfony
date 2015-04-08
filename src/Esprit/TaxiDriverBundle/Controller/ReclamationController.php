<?php

namespace Esprit\TaxiDriverBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ReclamationController  extends Controller {


    
   public function listRecNonConfAction() {

        $em = $this->container->get('doctrine')->getEntityManager();

        $reclamation = $em->getRepository('EspritTaxiDriverBundle:Reclamation')->findAll();

        return $this->render('EspritTaxiDriverBundle:ResponsableAgence:listRecNonConf.html.twig', array('reclamation' => $reclamation));
        
}

    
    public function affichageAction($idreclamation)
    {
         $em = $this->getDoctrine()->getManager();
        $reclamation = $em->getRepository('EspritTaxiDriverBundle:Reclamation')->find($idreclamation);
       return $this->render('EspritTaxiDriverBundle:ResponsableAgence:affichage.html.twig', array('reclamation' => $reclamation));
        
    }
    
       public function historiqueAction() {

        $em = $this->container->get('doctrine')->getEntityManager();

        $reclamation = $em->getRepository('EspritTaxiDriverBundle:Reclamation')->findAll();

        return $this->render('EspritTaxiDriverBundle:ResponsableAgence:historique.html.twig', array('reclamation' => $reclamation));

}

  public function confirmationAction($idreclamation) {
      
        $em = $this->container->get('doctrine')->getEntityManager();
        $reclamation = $em->getRepository('EspritTaxiDriverBundle:Reclamation')->find($idreclamation);
        $reclamation->setEtat(1);
                $em->persist($reclamation);
                $em->flush();

       
        return $this->render('EspritTaxiDriverBundle:ResponsableAgence:listRecNonConf.html.twig', array('reclamation' => $reclamation));


}

 public function affichagehistAction($idreclamation)
    {
         $em = $this->getDoctrine()->getManager();
        $reclamation = $em->getRepository('EspritTaxiDriverBundle:Reclamation')->find($idreclamation);
       return $this->render('EspritTaxiDriverBundle:Reclamation:affichagehist.html.twig', array('reclamation' => $reclamation));
        
    }
}