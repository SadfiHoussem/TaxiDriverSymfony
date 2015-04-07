<?php

namespace Esprit\TaxiDriverBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\UserBundle\Model\UserInterface;
use Esprit\TaxiDriverBundle\Form\OffreType;
use Esprit\TaxiDriverBundle\Entity\Offre;

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
    
    public function listOffreAction() {

        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        
        
        $em = $this->container->get('doctrine')->getEntityManager();

        $resp=$em->getRepository('EspritTaxiDriverBundle:ResponsableAgence')->findOneBy(array('username'=>$user->getUsername()));
        $agence=$em->getRepository('EspritTaxiDriverBundle:Agence')->findOneBy(array('idrespagence'=>$resp->getIdrespagence()));
        
        
        $offre = $em->getRepository('EspritTaxiDriverBundle:Offre')->findByAgenceDQL($agence->getIdagence());

        return $this->render('EspritTaxiDriverBundle:ResponsableAgence:listOffre.html.twig', array('offre' => $offre));
}

    public function updateOffreAction($idOffre) {
           $em = $this->container->get('doctrine')->getEntityManager();
           $offre = $em->getRepository('EspritTaxiDriverBundle:Offre')->find($idOffre);

           $form = $this->container->get('form.factory')->create(new OffreType(),$offre);


           $Request = $this->getRequest();
           if ($Request->getMethod() == 'POST') {
               $form->bind($Request);
               if ($form->isValid()) {

                   $em->persist($offre);
                   $em->flush();
                   return $this->redirect($this->generateUrl("esprit_taxidriver_resp_agence_listOffre"));
               }
           }
           return $this->render('EspritTaxiDriverBundle:ResponsableAgence:updateOffre.html.twig', array('Form' => $form->createView()));


}

  public function deleteOffreAction($idoffre) {
      
        $em = $this->container->get('doctrine')->getEntityManager();
        $offre = $em->getRepository('EspritTaxiDriverBundle:Offre')->find($idoffre);
        $em->remove($offre);
        $em->flush();
        return $this->redirect($this->generateUrl("esprit_taxidriver_resp_agence_listOffre"));
    }
    
    
     public function ajoutOffreAction()
    {
        $offre = new Offre();
        $form = $this->createForm(new OffreType(), $offre);
        
        $request = $this->getRequest();
        $form->handleRequest($request);
       
        if ($request->getMethod() == 'POST')
        {
           $em = $this->getDoctrine()->getManager();
           $offre->setDate(new \DateTime());
           $em->persist($offre);
           $em->flush();
           return $this->redirect($this->generateUrl("esprit_taxidriver_resp_agence_listOffre"));
         
        }
        return $this -> render('EspritTaxiDriverBundle:ResponsableAgence:ajoutOffre.html.twig',
                array('Form'=> $form->createView() ));
    }
   
}
