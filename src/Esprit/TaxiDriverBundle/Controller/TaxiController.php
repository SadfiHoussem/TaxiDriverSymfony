<?php

namespace Esprit\TaxiDriverBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Esprit\TaxiDriverBundle\Entity\Reservation;

class TaxiController extends Controller
{
    public function getTaxiByAgence($agence){
        
        $em=$this->container->get('doctrine')->getEntityManager();
        
        $taxi=$em->getRepository('EspritTaxiDriverBundle:Taxi')->findByTaxiDQL($agence);
        
        return $taxi;
    }
    
    public function findByTaxiAction($agence)
    {

        $res=new Reservation();
               
        $Request=$this->getRequest();
        
        if($Request->getMethod()=='POST')
        {
            $Adressesrc= $Request->get('Adressesrc');
            $Adressedest= $Request->get('Adressedest');
            $idTaxi= $Request->get('selectionCourante');
            $date= $Request->get('choixdate');
            
            $em=$this->container->get('doctrine')->getEntityManager();
            
            $idTrajet=$em->getRepository('EspritTaxiDriverBundle:Trajet')->findByIdagence($agence);
            
            
            $res->setIdclient(1);
            $res->setIdtaxi($idTaxi);
            $res->setIdtrajet($idTrajet);
            $res->setIdagence($agence);
            $res->setDate($date);
            
            $em=$this->get('doctrine')->getEntityManager();
            $em->persist($res);
            $em->flush();
                
           // return $this->redirect($this->generateUrl("examen_tunivision_culture_listEvenement"));
           
       }
        
        $em=$this->container->get('doctrine')->getEntityManager();
        
        
        $dest=$em->getRepository('EspritTaxiDriverBundle:Destination')->findByIdagence($agence);
        
        return $this->render('EspritTaxiDriverBundle:Reservation:reserver.html.twig', array('taxi' => $this->getTaxiByAgence($agence),'dest'=>$dest));
    }
}
