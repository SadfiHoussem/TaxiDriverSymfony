<?php


namespace Esprit\TaxiDriverBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MailController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EspritTaxiDriverBundle:Mail:index.html.twig', array('name' => $name));
    }
    
    public function redirectionAction()
    {
        return $this->render('EspritTaxiDriverBundle:Mail:formMail.html.twig');
    }
     public function sendMailAction()
    {
         $Request = $this->getRequest();
         if ($Request->getMethod() == "POST"){
             $Subject = $Request->get("Subject");
             $email = $Request->get("email");
             $message = $Request->get("message");
             
             $mailer = $this->container->get('mailer');
             $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465,'ssl')
                     ->setUsername('samar.abdelkhalek@esprit.tn')
                     ->setPassword('samarab222//');
             $mailer = \Swift_Mailer::newInstance($transport);
             $message = \Swift_Message::newInstance('Test')
                     ->setSubject($Subject)
                     ->setFrom('samar.abdelkhalek@esprit.tn')
                     ->setTo($email)
                     ->setBody($message);
             $this->get('mailer')->send($message);        
             
         }
        return $this->render('EspritTaxiDriverBundle:Mail:formMail.html.twig');
    }

}
