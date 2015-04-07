<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\UserBundle\Controller;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

/**
 * Controller managing the user profile
 *
 * @author Christophe Coevoet <stof@notk.org>
 */
class ProfileController extends Controller
{
    /**
     * Show the user
     */
    public function showAction()
    {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        
        $Request=$this->getRequest();
        
        
        $em=$this->getDoctrine()->getManager();
        
        $administrateur=$em->getRepository('EspritTaxiDriverBundle:Administrateur')->findOneBy(array('username'=>$user->getUsername()));
        
        if ($administrateur !=NULL){

            if($Request->getMethod()=='POST')
            {
                $email= $Request->get('email');
                $nom= $Request->get('nom');
                $prenom= $Request->get('prenom');
                $telephone= $Request->get('telephone');
                $adresse= $Request->get('adresse');
                $cin= $Request->get('cin');

                $user->setEmail($email);
                
                $administrateur->setEmail($email);
                $administrateur->setNom($nom);
                $administrateur->setPrenom($prenom);
                $administrateur->setTelephone($telephone);
                $administrateur->setAdresse($adresse);
                $administrateur->setCin($cin);
                
                $em->persist($user);
                $em->persist($administrateur);
                $em->flush();

                
                return $this->render('FOSUserBundle:Profile:show_content_administrateur.html.twig', array(
                'user' => $user,'admin'=>$administrateur
        ));
        }
            return $this->render('FOSUserBundle:Profile:show_content_administrateur.html.twig', array(
                'user' => $user,'admin'=>$administrateur
        ));
        }
        
        $client=$em->getRepository('EspritTaxiDriverBundle:Client')->findOneBy(array('username'=>$user->getUsername()));
        
        if ($client !=NULL){
            
            if($Request->getMethod()=='POST')
            {
                $email= $Request->get('email');
                $nom= $Request->get('nom');
                $prenom= $Request->get('prenom');
                $telephone= $Request->get('telephone');
                $adresse= $Request->get('adresse');
                $cin= $Request->get('cin');

                $user->setEmail($email);
                
                $client->setEmail($email);
                $client->setNom($nom);
                $client->setPrenom($prenom);
                $client->setTelephone($telephone);
                $client->setAdresse($adresse);
                $client->setCin($cin);
                
                $em->persist($user);
                $em->persist($client);
                $em->flush();

                
                return $this->render('FOSUserBundle:Profile:show_content_client.html.twig', array(
                    'user' => $user,'client'=>$client
        ));
        }
            
            return $this->render('FOSUserBundle:Profile:show_content_client.html.twig', array(
                'user' => $user,'client'=>$client
        ));
        }
        
        $chauffeur=$em->getRepository('EspritTaxiDriverBundle:Chauffeur')->findOneBy(array('username'=>$user->getUsername()));
        
        if ($chauffeur !=NULL){
            
            if($Request->getMethod()=='POST')
            {
                $numPermis= $Request->get('numPermis');
                $email= $Request->get('email');
                $nom= $Request->get('nom');
                $prenom= $Request->get('prenom');
                $telephone= $Request->get('telephone');
                $adresse= $Request->get('adresse');
                $cin= $Request->get('cin');

                $user->setEmail($email);
                
                $chauffeur->setEmail($numPermis);
                $chauffeur->setEmail($email);
                $chauffeur->setNom($nom);
                $chauffeur->setPrenom($prenom);
                $chauffeur->setTelephone($telephone);
                $chauffeur->setAdresse($adresse);
                $chauffeur->setCin($cin);
                
                $em->persist($user);
                $em->persist($chauffeur);
                $em->flush();
   
                return $this->render('FOSUserBundle:Profile:show_content_chauffeur.html.twig', array(
                    'user' => $user,'chauffeur'=>$chauffeur
            ));
        }
            return $this->render('FOSUserBundle:Profile:show_content_chauffeur.html.twig', array(
                'user' => $user,'chauffeur'=>$chauffeur
        ));
        }
        
        $resp=$em->getRepository('EspritTaxiDriverBundle:Responsableagence')->findOneBy(array('username'=>$user->getUsername()));
        
        if ($resp !=NULL){
            
            if($Request->getMethod()=='POST')
            {
                $email= $Request->get('email');
                $nom= $Request->get('nom');
                $prenom= $Request->get('prenom');
                $telephone= $Request->get('telephone');
                $adresse= $Request->get('adresse');
                $cin= $Request->get('cin');

                $user->setEmail($email);
                
                $resp->setEmail($email);
                $resp->setNom($nom);
                $resp->setPrenom($prenom);
                $resp->setTelephone($telephone);
                $resp->setAdresse($adresse);
                $resp->setCin($cin);
                
                $em->persist($user);
                $em->persist($resp);
                $em->flush();

                
                return $this->render('FOSUserBundle:Profile:show_content_resp_agence.html.twig', array(
                    'user' => $user,'resp'=>$resp
            ));
            }
            
            return $this->render('FOSUserBundle:Profile:show_content_resp_agence.html.twig', array(
                'user' => $user,'resp'=>$resp
        ));
        }
        
        return $this->render('FOSUserBundle:Profile:show.html.twig', array(
            'user' => $user
        ));
    }

    /**
     * Edit the user
     */
    public function editAction(Request $request)
    {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->get('event_dispatcher');

        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }

        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->get('fos_user.profile.form.factory');

        $form = $formFactory->createForm();
        $form->setData($user);

        $form->handleRequest($request);

        if ($form->isValid()) {
            /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
            $userManager = $this->get('fos_user.user_manager');

            $event = new FormEvent($form, $request);
            $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_SUCCESS, $event);

            $userManager->updateUser($user);

            if (null === $response = $event->getResponse()) {
                $url = $this->generateUrl('fos_user_profile_show');
                $response = new RedirectResponse($url);
            }

            $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

            return $response;
        }

        return $this->render('FOSUserBundle:Profile:edit.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
