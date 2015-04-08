<?php

namespace Pidev\TaxiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NomayaController extends Controller
{
    public function indexAction()
    {
        return $this->render('PidevTaxiBundle:Nomaya:nomaya.html.twig');
    }
}
