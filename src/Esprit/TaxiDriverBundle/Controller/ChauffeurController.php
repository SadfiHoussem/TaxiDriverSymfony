<?php

namespace Esprit\TaxiDriverBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Esprit\TaxiDriverBundle\Form\ChauffeurType;
use Esprit\TaxiDriverBundle\Form\ChauffeurAddType;
use Esprit\TaxiDriverBundle\Entity\Chauffeur;

class ChauffeurController extends Controller
{
    public function affChauffeurAction()
    {
        if($this->get('security.context')->isGranted('ROLE_ADMIN')){
            return $this->render('EspritTaxiDriverBundle:administrateur:chauffeurs.html.twig');
        }
            
        if($this->get('security.context')->isGranted('ROLE_CLIENT')){
            return $this->render('EspritTaxiDriverBundle:Client:chauffeurs.html.twig');
        }
            
        if($this->get('security.context')->isGranted('ROLE_RESP_AGENCE')){
            return $this->render('EspritTaxiDriverBundle:ResponsableAgence:chauffeurs.html.twig');
        }
            
        if($this->get('security.context')->isGranted('ROLE_CHAUFFEUR')){
            return $this->render('EspritTaxiDriverBundle:Chauffeur:chauffeurs.html.twig');
        }
        
        return $this->render('EspritTaxiDriverBundle:Client:chauffeurs.html.twig');
    }

    public function listChauffeurAction() {

        $em = $this->container->get('doctrine')->getEntityManager();

        $chauffeur = $em->getRepository('EspritTaxiDriverBundle:Chauffeur')->findByAgenceDQL(2);

        return $this->render('EspritTaxiDriverBundle:ResponsableAgence:listChauffeur.html.twig', array('chauffeur' => $chauffeur));
}

 public function updateChauffeurAction($idchauffeur) {
        $em = $this->container->get('doctrine')->getEntityManager();
        $chauffeur = $em->getRepository('EspritTaxiDriverBundle:Chauffeur')->find($idchauffeur);

        $form = $this->container->get('form.factory')->create(new ChauffeurType(),$chauffeur);


        $Request = $this->getRequest();
        if ($Request->getMethod() == 'POST') {
            $form->bind($Request);
            if ($form->isValid()) {

                $em->persist($chauffeur);
                $em->flush();
                return $this->redirect($this->generateUrl("listChauffeur"));
            }
        }
        return $this->render('EspritTaxiDriverBundle:ResponsableAgence:updateChauffeur.html.twig', array('Form' => $form->createView()));


}

  public function deleteChauffeurAction($idchauffeur) {
      
        $em = $this->container->get('doctrine')->getEntityManager();
        $chauffeur = $em->getRepository('EspritTaxiDriverBundle:Chauffeur')->find($idchauffeur);
        $em->remove($chauffeur);
        $em->flush();
        return $this->redirect($this->generateUrl("listChauffeur"));
    }
    
    
     public function ajoutChauffeurAction()
    {
        $chauffeur = new Chauffeur();
        $form = $this->createForm(new ChauffeurAddType(), $chauffeur);
        $request = $this->get('request');
        $form->handleRequest($request);
        if ($form->isValid())
        {
           $em = $this->getDoctrine()->getManager();
           $em->persist($chauffeur);
           $em->flush();
           return $this->redirect($this->generateUrl("listChauffeur"));
         
        }
        return $this -> render('EspritTaxiDriverBundle:ResponsableAgence:ajoutChauffeur.html.twig',
                array('Form'=> $form->createView() ));
    }

    
        }
