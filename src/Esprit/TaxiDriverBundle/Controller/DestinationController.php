<?php

namespace Esprit\TaxiDriverBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DestinationController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EspritTaxiDriverBundle:Default:index.html.twig', array('name' => $name));
    }
}

