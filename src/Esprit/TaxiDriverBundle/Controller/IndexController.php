<?php

namespace Esprit\TaxiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    public function accueilAction()
    {
        return $this->render('EspritClientBundle:Default:index.html.twig');
    }
    
    public function aproposAction()
    {
        return $this->render('EspritClientBundle:Default:apropos.html.twig');
    }
    
    public function contactAction()
    {
        return $this->render('EspritClientBundle:Default:contact.html.twig');
    }
}
