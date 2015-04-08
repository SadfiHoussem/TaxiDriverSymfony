<?php

namespace Esprit\TaxiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Esprit\TaxiBundle\Entity\Mail;
use Esprit\TaxiBundle\Form\MailType;

class MailController extends Controller
{
     public function index1Action()
    {
        return $this->render('EspritTaxiBundle:Mail:mail.html.twig');
    }
    
    
      public function redirectionAction()
    {
        return $this->render('EspritTaxiBundle:Mail:new.html.twig');
    }
    
      public function sendMailAction()
    {
         $Request = $this->getRequest();
        
        if ($Request->getMethod() == "POST") {
                $Subject = $Request->get("Subject");
                $email = $Request->get("email");
                $message = $Request->get("message");
                $mailer = $this->container->get('mailer');
                $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
                             ->setUsername('helaakhouildi@gmail.com')
                        ->setPassword('bibou hela rahma');
                $mailer = \Swift_Mailer::newInstance($transport);
                  $message = \Swift_Message::newInstance('Test')
                        ->setSubject($Subject)
                        ->setFrom('token.jetset@gmail.com')
                        ->setTo($email)
                        ->setBody($message);
        $this->get('mailer')->send($message);
        
          return $this->redirect($this->generateUrl('pidev_mail_succ'));
        }
                
                  return $this->render('EspritTaxiBundle:Mail:new.html.twig');
    
              
     

}
}
