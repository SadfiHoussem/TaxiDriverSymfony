<?php

namespace Esprit\TaxiDriverBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Esprit\TaxiDriverBundle\Form\ClientType;
use Esprit\TaxiDriverBundle\Form\ClientAddType;
use Esprit\TaxiDriverBundle\Entity\Client;

class ClientController  extends Controller {
    
   public function listClientAction() {

        $em = $this->container->get('doctrine')->getEntityManager();

        $Request = $this->getRequest();

        if ($Request->getMethod() == 'POST') 
            {
            $nom = $Request->get('nom');

            $client = $em->getRepository('TaxiBundle:Client')->findByNom($nom);
            return $this->render('EspritTaxiDriverBundle:Client:Client.html.twig', array('client' => $client));
        }

        $client = $em->getRepository('EspritTaxiDriverBundle:Client')->findAll();

        return $this->render('EspritTaxiDriverBundle:Client:Client.html.twig', array('client' => $client));
}

 public function updateClientAction($idclient) {
        $em = $this->container->get('doctrine')->getEntityManager();
        $client = $em->getRepository('PidevTaxiBundle:Client')->find($idclient);

        $form = $this->container->get('form.factory')->create(new ClientType(),$client);


        $Request = $this->getRequest();
        if ($Request->getMethod() == 'POST') {
            $form->bind($Request);
            if ($form->isValid()) {

                $em->persist($client);
                $em->flush();
                return $this->redirect($this->generateUrl("listClient"));
            }
        }
        return $this->render('PidevTaxiBundle:Client:updateClient.html.twig', array('Form' => $form->createView()));


}

  public function deleteClientAction($idclient) {
      
        $em = $this->container->get('doctrine')->getEntityManager();
        $client = $em->getRepository('PidevTaxiBundle:Client')->find($idclient);
        $em->remove($client);
        $em->flush();
        return $this->redirect($this->generateUrl("listClient"));
    }
    
    
     public function ajoutClientAction()
    {
        $client = new Client();
        $form = $this->createForm(new ClientAddType(), $client);
        $request = $this->get('request');
        $form->handleRequest($request);
        if ($form->isValid())
        {
           $em = $this->getDoctrine()->getManager();
           $em->persist($client);
           $em->flush();
           return $this->redirect($this->generateUrl("listClient"));
         
        }
        return $this -> render('PidevTaxiBundle:Client:ajoutClient.html.twig',
                array('Form'=> $form->createView() ));
    }
            
                        

}