<?php

/* EspritTaxiDriverBundle:Client:agences.html.twig */
class __TwigTemplate_61f454f460d833e7f5fcb9917eb1790186b85bf599466f187b20ec8f701c4971 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EspritTaxiDriverBundle::layout2.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
                                                        <li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Profile</a></li>
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_affi_agence");
        echo "\">Nos agences</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_affi_offre");
        echo "\">Offres</a></li>
                                                        <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_client_reservation_taxi");
        echo "\">Reservations</a></li>
                                                        <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_affi_chauffeur");
        echo "\">Chauffeurs</a></li>
                                                        <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_affi_vehicule");
        echo "\">Vehicules</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_contact");
        echo "\">Contact</a></li>
\t\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t\t</ul>
                                            
\t\t\t\t\t</div>
";
    }

    // line 47
    public function block_content($context, array $blocks = array())
    {
        // line 48
        echo "</br></br></br>



<div class=\"wrap\">   
    <div class=\"gallery-grids\">
    
   
    ";
        // line 56
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agences"]) ? $context["agences"] : $this->getContext($context, "agences")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 57
            echo "            
\t\t<div class=\"gallery-grid\">
\t        <a href=";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider1.jpg"), "html", null, true);
            echo "><img src=";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider1.jpg"), "html", null, true);
            echo " alt=\"\"></a>
                <h4>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "nomAgence"), "html", null, true);
            echo "</h4>
                <p>n° tel : ";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "telagence"), "html", null, true);
            echo "</br>Adresse : ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "adresseagence"), "html", null, true);
            echo "</br><div class=\"gallery-button\"><a href=\"#\">Plus de détails</a></div><p>
\t\t</div>
                
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "    
        
    <div class=\"clear\"> </div>
    
    <div class=\"clear\"> </div>
</div>
</div>    \t \t
";
    }

    public function getTemplateName()
    {
        return "EspritTaxiDriverBundle:Client:agences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 64,  147 => 61,  143 => 60,  137 => 59,  133 => 57,  129 => 56,  119 => 48,  116 => 47,  106 => 39,  102 => 38,  98 => 37,  94 => 36,  90 => 35,  86 => 34,  82 => 33,  78 => 32,  74 => 31,  70 => 29,  67 => 28,  55 => 18,  51 => 17,  37 => 6,  33 => 4,  30 => 3,);
    }
}
