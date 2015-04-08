<?php

namespace Esprit\TaxiDriverBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Esprit\TaxiDriverBundle\Form\ResponsableagenceType;
use Esprit\TaxiDriverBundle\Form\RespaddType;
use Esprit\TaxiDriverBundle\Entity\Responsableagence;

class ResponsableController  extends Controller {
    
   public function listRespAction() {

        $em = $this->container->get('doctrine')->getEntityManager();

        $Request = $this->getRequest();

        if ($Request->getMethod() == 'POST') 
            {
            $nom = $Request->get('nom');

            $resp = $em->getRepository('EspritTaxiDriverBundle:Responsableagence')->findByNom($nom);
            return $this->render('EspritTaxiDriverBundle:Responsable:responsable.html.twig', array('resp' => $resp));
        }

        $resp = $em->getRepository('EspritTaxiDriverBundle:Responsableagence')->findAll();

        return $this->render('EspritTaxiDriverBundle:Responsable:responsable.html.twig', array('resp' => $resp));
}

 public function updateRespAction($idresp) {
        $em = $this->container->get('doctrine')->getEntityManager();
        $resp = $em->getRepository('EspritTaxiDriverBundle:Responsableagence')->find($idresp);

        $form = $this->container->get('form.factory')->create(new ResponsableagenceType(),$resp);


        $Request = $this->getRequest();
        if ($Request->getMethod() == 'POST') {
            $form->bind($Request);
            if ($form->isValid()) {

                $em->persist($resp);
                $em->flush();
                return $this->redirect($this->generateUrl("esprit_taxidriver_admin_listResp"));
            }
        }
        return $this->render('EspritTaxiDriverBundle:Responsable:updateResp.html.twig', array('Form' => $form->createView()));


}

  public function deleteRespAction($idresp) {
      
        $em = $this->container->get('doctrine')->getEntityManager();
        $resp = $em->getRepository('PidevTaxiBundle:Responsableagence')->find($idresp);
        $em->remove($resp);
        $em->flush();
        return $this->redirect($this->generateUrl("listResp"));
    }
    
    
     public function ajoutRespAction()
    {
        $resp = new Responsableagence();
        $form = $this->createForm(new RespaddType(), $resp);
        $request = $this->get('request');
        $form->handleRequest($request);
        if ($form->isValid())
        {
           $em = $this->getDoctrine()->getManager();
           $em->persist($resp);
           $em->flush();
           return $this->redirect($this->generateUrl("listResp"));
         
        }
        return $this -> render('PidevTaxiBundle:Responsable:ajoutResp.html.twig',
                array('Form'=> $form->createView() ));
    }
            
                        

}