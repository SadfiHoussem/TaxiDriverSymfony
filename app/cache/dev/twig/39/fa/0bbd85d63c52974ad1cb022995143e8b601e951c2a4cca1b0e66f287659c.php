<?php

/* EspritTaxiDriverBundle:ResponsableAgence:offres.html.twig */
class __TwigTemplate_39fa0bbd85d63c52974ad1cb022995143e8b601e951c2a4cca1b0e66f287659c extends Twig_Template
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

    // line 5
    public function block_navbar($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"top-nav\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_homepage");
        echo "\">Accueil</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_a_propos");
        echo "\">A propos</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Profile</a></li>
                                                        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_affi_agence");
        echo "\">Nos agences</a></li>
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_affi_offre");
        echo "\">Offres</a></li>
                                                        <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listRNCreclamation");
        echo "\"> Reclamations  </a></li>
                                                        <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listChauffeur");
        echo "\">Chauffeurs</a></li>
                                                        <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listVoiture");
        echo "\">Vehicules</a></li>
                                                        <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listTrajet");
        echo "\"> Trajet </a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_contact");
        echo "\">Contact</a></li>
\t\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t\t</ul>
                                            
\t\t\t\t\t</div>
";
    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
        // line 27
        echo "    

\t\t \t\t<div class=\"wrap\">
\t\t\t \t\t<div class=\"mid-grid\">
\t\t\t \t\t\t<h3>REPAIRS</h3>
\t\t\t \t\t\t<a href=\"#\"><img src=";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/repair.png"), "html", null, true);
        echo " title=\"repair\" /></a>
\t\t\t \t\t\t<h4>It long established</h4>
\t\t\t \t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
\t\t\t \t\t\t<a class=\"button\" href=\"#\">More</a>
\t\t\t \t\t</div>
\t\t\t \t\t<div class=\"mid-grid\">
\t\t\t \t\t\t<h3>SPARES</h3>
\t\t\t \t\t\t<a href=\"#\"><img src=";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/spares.png"), "html", null, true);
        echo " title=\"spares\" /></a>
\t\t\t \t\t\t<h4>It long established</h4>
\t\t\t \t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
\t\t\t \t\t\t<a class=\"button\" href=\"#\">More</a>
\t\t\t \t\t</div>
\t\t\t \t\t<div class=\"mid-grid\">
\t\t\t \t\t\t<h3>SALES</h3>
\t\t\t \t\t\t<a href=\"#\"><img src=";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/sales.png"), "html", null, true);
        echo "  title=\"sales\" /></a>
\t\t\t \t\t\t<h4>It long established</h4>
\t\t\t \t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
\t\t\t \t\t\t<a class=\"button\" href=\"#\">More</a>
\t\t\t \t\t</div>
\t\t\t \t\t<div class=\"clear\"> </div>
                                        
                                        
                                        
                                        
                                        
                                        
                                       <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
  <!-- Indicators -->
  <ol class=\"carousel-indicators\">
    <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
    <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
    <li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class=\"carousel-inner\" role=\"listbox\">
    <div class=\"item active\">
      <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/repair.png"), "html", null, true);
        echo "\" alt=\"Chania\">
    </div>

    <div class=\"item\">
      <img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/spares.png"), "html", null, true);
        echo "\" alt=\"Chania\">
    </div>

    <div class=\"item\">
      <img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/sales.png"), "html", null, true);
        echo "\" alt=\"Flower\">
    </div>

    
  </div>

  <!-- Left and right controls -->
  <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>
                                        
                                        
                                        
                                        
\t\t \t\t</div>
\t\t \t
    
";
    }

    public function getTemplateName()
    {
        return "EspritTaxiDriverBundle:ResponsableAgence:offres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 78,  146 => 74,  139 => 70,  112 => 46,  102 => 39,  92 => 32,  85 => 27,  82 => 26,  72 => 17,  68 => 16,  64 => 15,  60 => 14,  56 => 13,  52 => 12,  48 => 11,  44 => 10,  40 => 9,  36 => 8,  32 => 6,  29 => 5,);
    }
}
