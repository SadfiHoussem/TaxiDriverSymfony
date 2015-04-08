<?php

/* EspritTaxiDriverBundle:Client:vehicules.html.twig */
class __TwigTemplate_33c84c633b4fa222f0927a0895244456460d9950f71a6b46b66b3f371fb20635 extends Twig_Template
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
\t\t\t\t\t\t\t<li><a href=\"";
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
                                                        <li class=\"active\"><a href=\"";
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

    // line 25
    public function block_content($context, array $blocks = array())
    {
        // line 26
        echo "    
   </br></br></br>



<div class=\"wrap\">   
    <div class=\"gallery-grids\">
    
   
    ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["voitures"]) ? $context["voitures"] : $this->getContext($context, "voitures")));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 36
            echo "            
\t\t<div class=\"gallery-grid\">
\t        <a href=";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider1.jpg"), "html", null, true);
            echo "><img src=";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider1.jpg"), "html", null, true);
            echo " alt=\"\"></a>
                <h4>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : $this->getContext($context, "v")), "typevoiture"), "html", null, true);
            echo "</h4>
                <h3><u>Informations générales :</u></h3>
                <p>Nombres de places :";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : $this->getContext($context, "v")), "nbrplace"), "html", null, true);
            echo "</br>Matricule :";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : $this->getContext($context, "v")), "matricule"), "html", null, true);
            echo "</br></br><div class=\"gallery-button\"></div>
\t\t</div>
                ";
            // line 43
            echo "                 ";
            echo "
            
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "    
        
    <div class=\"clear\"> </div>
    
    <div class=\"clear\"> </div>
</div>
</div>    
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
        return array (  127 => 45,  118 => 43,  111 => 41,  106 => 39,  100 => 38,  96 => 36,  92 => 35,  81 => 26,  78 => 25,  68 => 14,  64 => 13,  60 => 12,  56 => 11,  52 => 10,  48 => 9,  44 => 8,  40 => 7,  36 => 6,  32 => 4,  29 => 3,);
    }
}
