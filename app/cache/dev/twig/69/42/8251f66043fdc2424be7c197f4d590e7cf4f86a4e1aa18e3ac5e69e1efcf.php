<?php

/* EspritTaxiDriverBundle:Client:chauffeurs.html.twig */
class __TwigTemplate_69428251f66043fdc2424be7c197f4d590e7cf4f86a4e1aa18e3ac5e69e1efcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EspritTaxiDriverBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
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

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "
<title>TaxiDriver</title>
\t\t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"  media=\"all\" />
\t\t<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
\t\t  <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js\"></script>
\t\t  <script type=\"text/javascript\">
\t\t\tjQuery(document).ready(function(\$) {
\t\t\t\t\$(\".scroll\").click(function(event){\t\t
\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\$('html,body').animate({scrollTop:\$(this.hash).offset().top},1200);
\t\t\t\t});
\t\t\t});
\t\t</script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.lightbox.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t    <link rel=\"stylesheenkt\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/lightbox.css"), "html", null, true);
        echo "\" media=\"screen\">
\t\t\t\t  \t<script type=\"text/javascript\">
\t\t\t\t    \$(function() {
\t\t\t\t        \$('.gallery-grid a').lightBox();
\t\t\t\t    });
\t\t\t\t    </script>    

";
    }

    // line 28
    public function block_navbar($context, array $blocks = array())
    {
        // line 29
        echo "<div class=\"top-nav\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_client_homepage");
        echo "\">Accueil</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_a_propos");
        echo "\">A propos</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_affi_agence");
        echo "\">Nos agences</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_affi_offre");
        echo "\">Offres</a></li>
                                                        <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_client_reservation_taxi");
        echo "\">Reserver</a></li>
                                                        <li class=\"active\"><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_affi_chauffeur");
        echo "\">Chauffeurs</a></li>
                                                        <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_affi_vehicule");
        echo "\">Vehicules</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_contact");
        echo "\">Contact</a></li>
\t\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t\t</ul>
                                            
\t\t\t\t\t</div>
";
    }

    // line 46
    public function block_content($context, array $blocks = array())
    {
        // line 47
        echo "<div class=\"gallery-grids\">
\t\t\t\t\t\t<div class=\"gallery-grid\">
\t\t\t\t\t\t\t<a href=";
        // line 49
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
        // line 55
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
        // line 61
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
        // line 71
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
        // line 77
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
        // line 83
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
        return "EspritTaxiDriverBundle:Client:chauffeurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 83,  167 => 77,  156 => 71,  141 => 61,  130 => 55,  119 => 49,  115 => 47,  112 => 46,  102 => 38,  98 => 37,  94 => 36,  90 => 35,  86 => 34,  82 => 33,  78 => 32,  74 => 31,  70 => 29,  67 => 28,  55 => 18,  51 => 17,  37 => 6,  33 => 4,  30 => 3,);
    }
}
