<?php
namespace Esprit\TaxiDriverBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CalendrierController extends Controller {
    
     public function calendrierAction()
    {
        return $this->render('EspritTaxiDriverBundle:Administrateur:calendar.html.twig');
    }
}
