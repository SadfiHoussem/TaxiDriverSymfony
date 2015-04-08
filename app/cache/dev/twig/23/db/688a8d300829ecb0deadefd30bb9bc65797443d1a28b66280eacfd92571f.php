<?php

/* EspritTaxiDriverBundle:Client:accueil.html.twig */
class __TwigTemplate_23db688a8d300829ecb0deadefd30bb9bc65797443d1a28b66280eacfd92571f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EspritTaxiDriverBundle::layout.html.twig");

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'slider' => array($this, 'block_slider'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspritTaxiDriverBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_navbar($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"top-nav\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_client_homepage");
        echo "\">Accueil</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_a_propos");
        echo "\">A propos</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_affi_agence");
        echo "\">Nos agences</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_affi_offre");
        echo "\">Offres</a></li>
                                                        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_client_reservation_taxi");
        echo "\">Reservations</a></li>
                                                        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_affi_chauffeur");
        echo "\">Chauffeurs</a></li>
                                                        <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_affi_vehicule");
        echo "\">Vehicules</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_contact");
        echo "\">Contact</a></li>
\t\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t\t</ul>
                                            
\t\t\t\t\t</div>
";
    }

    // line 20
    public function block_slider($context, array $blocks = array())
    {
        // line 21
        echo "    <div class=\"slider\">\t\t\t\t\t     
\t\t\t\t\t<div class=\"camera_wrap camera_azure_skin\" id=\"camera_wrap_1\">\t\t\t\t\t\t\t\t\t           
\t\t\t\t\t\t<div data-src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider3.jpg"), "html", null, true);
        echo "\">  </div> 
\t\t\t\t\t\t<div data-src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider2.jpg"), "html", null, true);
        echo "\">  </div>
\t\t\t\t\t\t<div data-src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider1.jpg"), "html", null, true);
        echo "\">  </div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clear\"> </div>\t\t\t\t\t       
\t\t\t</div>\t                        
";
    }

    public function getTemplateName()
    {
        return "EspritTaxiDriverBundle:Client:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 25,  85 => 24,  81 => 23,  77 => 21,  74 => 20,  64 => 13,  60 => 12,  56 => 11,  52 => 10,  48 => 9,  44 => 8,  40 => 7,  36 => 6,  32 => 4,  29 => 3,);
    }
}
