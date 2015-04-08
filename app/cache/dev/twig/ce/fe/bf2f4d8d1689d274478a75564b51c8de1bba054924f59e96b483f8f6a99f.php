<?php

/* EspritTaxiDriverBundle:Client:detailoffre.html.twig */
class __TwigTemplate_cefebf2f4d8d1689d274478a75564b51c8de1bba054924f59e96b483f8f6a99f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EspritTaxiDriverBundle::layout2.html.twig");

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspritTaxiDriverBundle::layout2.html.twig";
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
\t\t\t\t\t\t\t<li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_client_homepage");
        echo "\">Accueil</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_a_propos");
        echo "\">A propos</a></li>
                                                        <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Profile</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_affi_agence");
        echo "\">Nos agences</a></li>
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_affi_offre");
        echo "\">Offres</a></li>
                                                        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_client_reservation_taxi");
        echo "\">Reservations</a></li>
                                                        <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_affi_chauffeur");
        echo "\">Chauffeurs</a></li>
                                                        <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_affi_vehicule");
        echo "\">Vehicules</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_contact");
        echo "\">Contact</a></li>
\t\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t\t</ul>
                                            
\t\t\t\t\t</div>
";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "</br></br></br>

  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap2.css"), "html", null, true);
        echo "\" >
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/dataTables.bootstrap.css"), "html", null, true);
        echo "\">
    <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    
    <script type=\"text/javascript\" charset=\"utf-8\">
        \$(document).ready(function() {
            \$('#example').dataTable();
        } );
    </script>
    
    ";
        // line 52
        echo "    
    <style type=\"text/css\">
        .bs-example{
            margin: 20px;
        }
    </style>
    
        



\t\t <div class=\"content\">
\t\t \t<!---start-contact----->
\t\t \t<div class=\"contact\">
\t\t \t\t<div class=\"wrap\">
\t\t\t\t<div class=\"section group\">\t\t\t\t
\t\t\t\t<div class=\"col span_1_of_3\">
\t\t\t\t\t<div class=\"contact_info\">
\t\t\t    \t \t
      \t\t\t\t</div>
      \t\t\t<div class=\"company_address\">
                            <img src=";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider1.jpg"), "html", null, true);
        echo " alt=\"\">
                            
\t\t\t\t     \t<h3>";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["o"]) ? $context["o"] : $this->getContext($context, "o")), "sujetOffre"), "html", null, true);
        echo " :</h3>
\t\t\t\t\t\t    \t
\t\t\t\t\t\t   \t\t<p>";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["o"]) ? $context["o"] : $this->getContext($context, "o")), "contenu"), "html", null, true);
        echo "</p>
\t\t\t\t\t\t   \t\t<p>Agence : ";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["o"]) ? $context["o"] : $this->getContext($context, "o")), "idagence"), "nomagence"), "html", null, true);
        echo "</p>
\t\t\t\t   \t\t
\t\t\t\t   </div>
\t\t\t\t</div>\t\t\t\t
\t\t\t\t<div class=\"col span_2_of_3\">
\t\t\t\t  <div class=\"contact-form\">
\t\t\t\t\t    <form method=\"POST\" action=\"\">
\t\t\t\t\t    \t
\t\t\t\t\t\t    <div class=\"contact_info\">
                                                        <h3><span><label>Texte :</label></span></h3>
\t\t\t\t\t\t    \t<span><textarea name=\"userMsg\"> </textarea></span>
                                                        <input name=\"id\" type=\"hidden\" class=\"textbox\" value=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["o"]) ? $context["o"] : $this->getContext($context, "o")), "idoffre"), "html", null, true);
        echo "\">
                                                        
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t   
                                    <input type=\"submit\" value=\"commenter\">
\t\t\t\t\t    </form>
</div>
\t\t\t\t    </div>
  \t\t\t\t</div>\t\t\t\t
\t\t\t  </div>
\t\t\t</div>
\t\t\t</div>
                                                                


 
";
    }

    public function getTemplateName()
    {
        return "EspritTaxiDriverBundle:Client:detailoffre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 89,  153 => 78,  149 => 77,  144 => 75,  139 => 73,  116 => 52,  105 => 31,  101 => 30,  97 => 29,  93 => 28,  89 => 27,  85 => 26,  81 => 24,  78 => 23,  68 => 14,  64 => 13,  60 => 12,  56 => 11,  52 => 10,  48 => 9,  44 => 8,  40 => 7,  36 => 6,  32 => 4,  29 => 3,);
    }
}
