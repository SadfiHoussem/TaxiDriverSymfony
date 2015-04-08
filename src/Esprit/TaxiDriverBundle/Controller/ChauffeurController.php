<?php

namespace Esprit\TaxiDriverBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Esprit\TaxiDriverBundle\Form\ChauffeurType;
use Esprit\TaxiDriverBundle\Form\ChauffeurAddType;
use Esprit\TaxiDriverBundle\Entity\Chauffeur;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

class ChauffeurController extends Controller
{
    public function affChauffeurAction()
    {
        if($this->get('security.context')->isGranted('ROLE_ADMIN')){
            return $this->render('EspritTaxiDriverBundle:administrateur:chauffeurs.html.twig');
        }
            
        if($this->get('security.context')->isGranted('ROLE_CLIENT')){
            
            
         $em = $this->container->get('doctrine')->getEntityManager();

        $chauffeurs = $em->getRepository('EspritTaxiDriverBundle:Chauffeur')->findAll();

                
            return $this->render('EspritTaxiDriverBundle:Client:chauffeurs.html.twig', array('chauffeurs' => $chauffeurs));
        }
            
        if($this->get('security.context')->isGranted('ROLE_RESP_AGENCE')){
            return $this->render('EspritTaxiDriverBundle:ResponsableAgence:chauffeurs.html.twig');
        }
            
        if($this->get('security.context')->isGranted('ROLE_CHAUFFEUR')){
            return $this->render('EspritTaxiDriverBundle:Chauffeur:chauffeurs.html.twig');
        }
        $em = $this->container->get('doctrine')->getEntityManager();

        $chauffeurs = $em->getRepository('EspritTaxiDriverBundle:Chauffeur')->findAll();

        
        return $this->render('EspritTaxiDriverBundle:Client:chauffeurs.html.twig', array('chauffeurs' => $chauffeurs));
    }

    public function listChauffeurAction() {

        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        
        $em = $this->container->get('doctrine')->getEntityManager();

        $resp=$em->getRepository('EspritTaxiDriverBundle:ResponsableAgence')->findOneBy(array('username'=>$user->getUsername()));
        $agence=$em->getRepository('EspritTaxiDriverBundle:Agence')->findOneBy(array('idrespagence'=>$resp->getIdrespagence()));
        
        $chauffeur = $em->getRepository('EspritTaxiDriverBundle:Chauffeur')->findByAgenceDQL($agence->getIdagence());

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
                return $this->redirect($this->generateUrl("esprit_taxidriver_resp_agence_listChauffeur"));
            }
        }
        return $this->render('EspritTaxiDriverBundle:ResponsableAgence:updateChauffeur.html.twig', array('Form' => $form->createView()));


}

  public function deleteChauffeurAction($idchauffeur) {
      
        $em = $this->container->get('doctrine')->getEntityManager();
        $userManager = $this->get('fos_user.user_manager');
        
        $chauffeur = $em->getRepository('EspritTaxiDriverBundle:Chauffeur')->findOneBy(array('idchauffeur'=>$idchauffeur));
        $user=$userManager->findUserByUsername($chauffeur->getUsername());
        
        $em->remove($user);
        $em->remove($chauffeur);
        $em->flush();
        return $this->redirect($this->generateUrl("esprit_taxidriver_resp_agence_listChauffeur"));
    }
    
    
     public function ajoutChauffeurAction()
    {
        
        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->get('fos_user.registration.form.factory');
        /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
        $userManager = $this->get('fos_user.user_manager');
        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->get('event_dispatcher');

        $request = $this->get('request');
        
        $user = $userManager->createUser();
        $user->setEnabled(true);

        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::REGISTRATION_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }

        $formR = $formFactory->createForm();
        $formR->setData($user);

        $formR->handleRequest($request);

        
         $chauffeur = new Chauffeur();
         $chauffeur->setNom("");
            $chauffeur->setPrenom("");
            $chauffeur->setTelephone(0);
            $chauffeur->setAdresse("");
            $chauffeur->setCin(0);
            $chauffeur->setEtat(false);
        $formChauffeur = $this->createForm(new ChauffeurAddType(), $chauffeur);
        
        $formChauffeur->handleRequest($request);
        
        
            
        
        
        if ($formR->isValid()) {
            $event = new FormEvent($formR, $request);
            $dispatcher->dispatch(FOSUserEvents::REGISTRATION_SUCCESS, $event);

            $user->addRole('ROLE_CHAUFFEUR');
            
            $userManager->updateUser($user);
            
            if (null === $response = $event->getResponse()) {
                $url = $this->generateUrl('fos_user_registration_confirmed');
                $response = new RedirectResponse($url);
            }

  //          $dispatcher->dispatch(FOSUserEvents::REGISTRATION_COMPLETED, new FilterUserResponseEvent($user, $request, $response));
            
            
                $chauffeur->setUsername($user->getUsername());
                $chauffeur->setLogin($user->getUsername());
                $chauffeur->setPwd(0);
                $chauffeur->setEmail($user->getEmail());
                
                $em = $this->getDoctrine()->getManager();
                $em->persist($chauffeur);
                $em->flush();

            
            return $this->redirect($this->generateUrl("esprit_taxidriver_resp_agence_listChauffeur"));
        
        }
        return $this -> render('EspritTaxiDriverBundle:ResponsableAgence:ajoutChauffeur.html.twig',
                array('FormC'=> $formChauffeur->createView(),'FormR' => $formR->createView() ));
        
        
        }

    
    public function bestChauffeursAction()
    {        
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
                "SELECT * 
                 FROM BundlesTestBundle:Chauffeur c 
                 ORDER by c.note DESC"
                );
        $chauffeurs = $query->getSingleScalarResult();
        
                
        return $this->render('EspritTaxiDriverBundle:Chauffeur:bestchauffeurs.html.twig' ,array('chauffeurs' => $chauffeurs ) );
    }
        
        }
