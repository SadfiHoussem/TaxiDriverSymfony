<?php

/* EspritTaxiDriverBundle:Client:vehicules.html.twig */
class __TwigTemplate_33c84c633b4fa222f0927a0895244456460d9950f71a6b46b66b3f371fb20635 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EspritTaxiDriverBundle::layout.html.twig");

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'content' => array($this, 'block_content'),
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

    // line 6
    public function block_navbar($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"top-nav\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_client_homepage");
        echo "\">Accueil</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_a_propos");
        echo "\">A propos</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_affi_agence");
        echo "\">Nos agences</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_affi_offre");
        echo "\">Offres</a></li>
                                                        <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_client_reservation_taxi");
        echo "\">Reserver</a></li>
                                                        <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_affi_chauffeur");
        echo "\">Chauffeurs</a></li>
                                                        <li class=\"active\"><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_affi_vehicule");
        echo "\">Vehicules</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_contact");
        echo "\">Contact</a></li>
\t\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t\t</ul>
                                            
\t\t\t\t\t</div>
";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "<div class=\"gallery-grids\">
\t\t\t\t\t\t<div class=\"gallery-grid\">
\t\t\t\t\t\t\t<a href=";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider1.jpg"), "html", null, true);
        echo "><img src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider1.jpg"), "html", null, true);
        echo " alt=\"\"></a>
\t\t\t\t\t\t\t<h4>Aenean nonummy hendrerit</h4>
\t\t\t\t\t\t\t<p>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
\t\t\t\t\t\t\t<div class=\"gallery-button\"><a href=\"#\">Read More</a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"gallery-grid grid2\">
\t\t\t\t\t\t\t<a href=";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider3.jpg"), "html", null, true);
        echo "><img src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider3.jpg"), "html", null, true);
        echo " alt=\"\"></a>
\t\t\t\t\t\t\t<h4>nonummy hendrerit mauris</h4>
\t\t\t\t\t\t\t<p>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
\t\t\t\t\t\t\t<div class=\"gallery-button\"><a href=\"#\">Read More</a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"gallery-grid\">
\t\t\t\t\t\t\t<a href=";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider2.jpg"), "html", null, true);
        echo "><img src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider2.jpg"), "html", null, true);
        echo " alt=\"\"></a>
\t\t\t\t\t\t\t<h4>hendrerit mauris. Phasellus</h4>
\t\t\t\t\t\t\t<p>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
\t\t\t\t\t\t\t<div class=\"gallery-button\"><a href=\"#\">Read More</a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t<div class=\"gallery-grids\">
\t\t\t\t\t\t<div class=\"gallery-grid\">
\t\t\t\t\t\t\t<a href=";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider3.jpg"), "html", null, true);
        echo "><img src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider3.jpg"), "html", null, true);
        echo " alt=\"\"></a>
\t\t\t\t\t\t\t<h4>Fusce suscipit varius mi. Cum</h4>
\t\t\t\t\t\t\t<p>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
\t\t\t\t\t\t\t<div class=\"gallery-button\"><a href=\"#\">Read More</a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"gallery-grid grid2\">
\t\t\t\t\t\t\t<a href=";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider1.jpg"), "html", null, true);
        echo "><img src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider1.jpg"), "html", null, true);
        echo " alt=\"\"></a>
\t\t\t\t\t\t\t<h4>sociis natoque penatibus et</h4>
\t\t\t\t\t\t\t<p>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
\t\t\t\t\t\t\t<div class=\"gallery-button\"><a href=\"#\">Read More</a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"gallery-grid\">
\t\t\t\t\t\t\t<a href=";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider2.jpg"), "html", null, true);
        echo "><img src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider2.jpg"), "html", null, true);
        echo " alt=\"\"></a>
\t\t\t\t\t\t\t<h4>hendrerit mauris. Phasellus</h4>
\t\t\t\t\t\t\t<p>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
\t\t\t\t\t\t\t<div class=\"gallery-button\"><a href=\"#\">Read More</a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t    <div class=\"clear\"> </div>
\t\t\t\t    <div class=\"projects-bottom-paination\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#\">1</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">2</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>\t\t \t
";
    }

    public function getTemplateName()
    {
        return "EspritTaxiDriverBundle:Client:vehicules.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 61,  129 => 55,  118 => 49,  103 => 39,  92 => 33,  81 => 27,  77 => 25,  74 => 24,  64 => 16,  60 => 15,  56 => 14,  52 => 13,  48 => 12,  44 => 11,  40 => 10,  36 => 9,  32 => 7,  29 => 6,);
    }
}
