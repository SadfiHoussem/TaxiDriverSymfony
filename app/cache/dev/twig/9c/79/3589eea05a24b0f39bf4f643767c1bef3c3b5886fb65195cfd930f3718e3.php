<?php

/* EspritTaxiDriverBundle:Client:apropos.html.twig */
class __TwigTemplate_9c793589eea05a24b0f39bf4f643767c1bef3c3b5886fb65195cfd930f3718e3 extends Twig_Template
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
    <link href=";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo " rel=\"stylesheet\" type=\"text/css\"  media=\"all\" />
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
 ";
    }

    // line 18
    public function block_navbar($context, array $blocks = array())
    {
        // line 19
        echo "<div class=\"top-nav\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_client_homepage");
        echo "\">Accueil</a></li>
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_a_propos");
        echo "\">A propos</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_affi_agence");
        echo "\">Nos agences</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_affi_offre");
        echo "\">Offres</a></li>
                                                        <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_client_reservation_taxi");
        echo "\">Reserver</a></li>
                                                        <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_affi_chauffeur");
        echo "\">Chauffeurs</a></li>
                                                        <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_affi_vehicule");
        echo "\">Vehicules</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_contact");
        echo "\">Contact</a></li>
\t\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t\t</ul>
                                            
\t\t\t\t\t</div>
";
    }

    // line 36
    public function block_content($context, array $blocks = array())
    {
        // line 37
        echo "<div class=\"content\">
\t\t \t<!---start-about-us----->
\t\t \t<div class=\"about-us\">
\t\t \t\t\t<div class=\"wrap\">
\t\t\t\t\t\t<div class=\"about-header\">
\t\t\t\t\t\t\t<h3>About City taxi</h3>
\t\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"about-info\">
\t\t\t\t\t\t\t<a href=\"#\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus.</a>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan male</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"specials\">
\t\t\t\t\t<div class=\"specials-heading\">
\t\t\t\t\t\t<h3>Latest-News</h3>
\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t<div class=\"specials-grids\">
\t\t\t\t\t\t<div class=\"special-grid\">
\t\t\t\t\t\t\t<img src=";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider1.jpg"), "html", null, true);
        echo " title=\"image-name\">
\t\t\t\t\t\t\t<a href=\"#\">Latest Plans</a>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adiing elit. In volutpat luctus eros ac placerat. Quisque erat metus facilisis non feu,aliquam hendrerit quam. Donec ut lectus vel dolor adipiscing tincnt.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"special-grid\">
\t\t\t\t\t\t\t<img src=";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider2.jpg"), "html", null, true);
        echo " title=\"image-name\">
\t\t\t\t\t\t\t<a href=\"#\">Pre Plans</a>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adiing elit. In volutpat luctus eros ac placerat. Quisque erat metus facilisis non feu,aliquam hendrerit quam. Donec ut lectus vel dolor adipiscing tincnt.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"special-grid spe-grid\">
\t\t\t\t\t\t\t<img src=";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider4.jpg"), "html", null, true);
        echo " title=\"image-name\">
\t\t\t\t\t\t\t<a href=\"#\">Free Plans</a>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adiing elit. In volutpat luctus eros ac placerat. Quisque erat metus facilisis non feu,aliquam hendrerit quam. Donec ut lectus vel dolor adipiscing tincnt.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"testmonials\">
\t\t\t\t\t\t<div class=\"wrap\">
\t\t\t\t\t\t\t<div class=\"testmonial-grid\">
\t\t\t\t\t\t\t\t<h3>TESTIMONIALS :</h3>
\t\t\t\t\t\t\t\t<p>\" Lorem ipsum dolor sit amet, consectetur adipiscing elit. In volutpat luctus eros ac placerat. Quisque erat metus, facilisis non felis eu, aliquam hendrrit quam. Donec ut lectus vel dolor adipiscing tincidunt. Ut auctor diam at est iaculis, vitae interdum magna sagittis.\"</p>
\t\t\t\t\t\t\t\t<a href=\"#\"> - Lorem ipsum</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t \t<!---End-about---->
\t\t </div>
                        ";
    }

    public function getTemplateName()
    {
        return "EspritTaxiDriverBundle:Client:apropos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 67,  130 => 62,  122 => 57,  100 => 37,  97 => 36,  87 => 28,  83 => 27,  79 => 26,  75 => 25,  71 => 24,  67 => 23,  63 => 22,  59 => 21,  55 => 19,  52 => 18,  36 => 5,  33 => 4,  30 => 3,);
    }
}
