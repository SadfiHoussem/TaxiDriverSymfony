<?php

namespace Esprit\TaxiDriverBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Esprit\TaxiDriverBundle\Entity\Reservation;
use Esprit\TaxiDriverBundle\Form\ReservationForm;

class ReservationController extends Controller
{
    
    public function reserverAction()
    {
               
        $Request=$this->getRequest();
        
        $res=new Reservation();
        $ress=new Reservation();
        $form = $this->createForm(new ReservationForm(), $ress);
        
        if($Request->getMethod()=='POST')
        {
            
            $Adressesrc= $Request->get('Adressesrc');
            $Adressedest= $Request->get('Adressedest');
            $idTaxi= $Request->get('selectionCourante');
            
            
            $request = $this->get('request');
            $form->handleRequest($request);
        
            if ($form->isValid())
            {
                $em = $this->getDoctrine()->getManager();
                $res->setDate($ress->getDate());
            }
            $em=$this->getDoctrine()->getManager();
            
            // Client

            $client=$em->getRepository('EspritTaxiDriverBundle:Client')->findOneBy(array('idclient' => 1));
            
            // Taxi

            $Taxi=$em->getRepository('EspritTaxiDriverBundle:Taxi')->findOneBy(array('idtaxi' => $idTaxi));
            
            // Trajet

            $idTrajet=$em->getRepository('EspritTaxiDriverBundle:Trajet')->findBySrcDestDQL(1,$Adressesrc,$Adressedest);
            
            $Trajet=$em->getRepository('EspritTaxiDriverBundle:Trajet')->findOneBy(array('idtrajet' => $idTrajet['idtrajet']));
            
            // Agence

            $agence=$em->getRepository('EspritTaxiDriverBundle:Agence')->findOneBy(array('idagence' => 1));
            
            $res->setIdclient($client);
            $res->setIdtaxi($Taxi);
            $res->setIdtrajet($Trajet);
            $res->setIdagence($agence);
            $res->setConfirme(0);
            $res->setDone(0);
            
            $em->persist($res);
            $em->flush();
            
                
           // return $this->redirect($this->generateUrl("examen_tunivision_culture_listEvenement"));
//            if (!$entity) {
//            throw $this->createNotFoundException('Unable to find Agence entity.');
//            }
           
       }
        
        $em=$this->getDoctrine()->getManager();
        
        $taxi=$em->getRepository('EspritTaxiDriverBundle:Taxi')->findByTaxiDQL(1);
        $dest=$em->getRepository('EspritTaxiDriverBundle:Destination')->findByIdagence(1);
        
        return $this->render('EspritTaxiDriverBundle:Client:reserver.html.twig', array('taxi' => $taxi,'dest'=>$dest,'form'=>$form->createView()));
    }
    
    public function consulterConfResAction()
    {
        $em=$this->get('doctrine')->getEntityManager();
        
        $res=$em->getRepository('EspritTaxiDriverBundle:Reservation')->findByClientConfDQL(1,1);
        
        return $this->render('EspritTaxiDriverBundle:Client:consulterConfRes.html.twig', array('res' => $res)); 
    }
    
}

