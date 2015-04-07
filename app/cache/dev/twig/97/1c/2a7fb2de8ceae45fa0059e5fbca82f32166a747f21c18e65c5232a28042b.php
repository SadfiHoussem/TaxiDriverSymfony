<?php

/* EspritTaxiDriverBundle:Client:reserver.html.twig */
class __TwigTemplate_971c2a7fb2de8ceae45fa0059e5fbca82f32166a747f21c18e65c5232a28042b extends Twig_Template
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
        $this->displayParentBlock("head", $context, $blocks);
        echo "
<title></title>
<style type=\"text/css\">
<!--

.hide{

visibility: hidden

}

.defaut{
border-style: solid;
border-color: #AAAAAA;
border-width: 2px;
}
 
.selected{
border-style: solid;
border-color: #AAAAAA;
border-width: 2px;
background-color: #8888DD;
}
//-->
</style>
 
<script type=\"text/javascript\">
<!--
oldObj = null;
function SelectLigne(obj)
{
 var idLigne=obj.id;
 obj.className=\"selected\";
 

 
 document.getElementById(\"selectC\").value=obj.cells[5].id;
 
 if (oldObj!==null)
 {
    oldObj.className = \"defaut\";
    oldObj = obj;
 }
 else
 {
    oldObj = obj;
 }
 
 
 
}
 
//-->
</script>
";
    }

    // line 61
    public function block_navbar($context, array $blocks = array())
    {
        // line 62
        echo "<div class=\"top-nav\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_client_homepage");
        echo "\">Accueil</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_a_propos");
        echo "\">A propos</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_affi_agence");
        echo "\">Nos agences</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_affi_offre");
        echo "\">Offres</a></li>
                                                        <li class=\"active\"><a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_client_reservation_taxi");
        echo "\">Reserver</a></li>
                                                        <li><a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_affi_chauffeur");
        echo "\">Chauffeurs</a></li>
                                                        <li><a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_affi_vehicule");
        echo "\">Vehicules</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_contact");
        echo "\">Contact</a></li>
\t\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t\t</ul>
                                            
\t\t\t\t\t</div>
";
    }

    // line 78
    public function block_content($context, array $blocks = array())
    {
        // line 79
        echo "\t\t\t \t\t    
<form method=\"POST\" action=\"\">
<h2>Choix du trajet</h2>

";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date"), 'widget');
        echo "

<br>

Adresse Source :
<select name=\"Adressesrc\">
  ";
        // line 89
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dest"]) ? $context["dest"] : $this->getContext($context, "dest")));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 90
            echo "  <option>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["d"]) ? $context["d"] : $this->getContext($context, "d")), "nom"), "html", null, true);
            echo "</option>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "</select><br>

Adresse Destination :
<select name=\"Adressedest\">
  ";
        // line 96
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dest"]) ? $context["dest"] : $this->getContext($context, "dest")));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 97
            echo "  <option>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["d"]) ? $context["d"] : $this->getContext($context, "d")), "nom"), "html", null, true);
            echo "</option>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "</select><br>

<h1>Liste des taxi</h1>
<table border=\"1\" class=\"defaut\" >
    
    <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Note</th>
        <th>Voiture</th>
        <th>Nombre de Place</th>   
    </tr>
    
    ";
        // line 112
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["taxi"]) ? $context["taxi"] : $this->getContext($context, "taxi")));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 113
            echo "        <tr class=\"defaut\" onclick=\"SelectLigne(this)\">
            <td class=\"defaut\">";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "nom"), "html", null, true);
            echo "</td>
            <td class=\"defaut\">";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "prenom"), "html", null, true);
            echo "</td>
            <td class=\"defaut\">";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "note"), "html", null, true);
            echo "</td>
            <td class=\"defaut\">";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "typevoiture"), "html", null, true);
            echo "</td>
            <td class=\"defaut\">";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "nbrplace"), "html", null, true);
            echo "</td>
            <td class=\"hide\" id=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "idtaxi"), "html", null, true);
            echo "\"></td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "        
    
</table>  
    
<input type=\"hidden\" id=\"selectC\" name=\"selectionCourante\" value=\"\" >
<br>
<input type=\"submit\" value=\"Ajouter\"/>
";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "EspritTaxiDriverBundle:Client:reserver.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 128,  238 => 121,  229 => 119,  225 => 118,  221 => 117,  217 => 116,  213 => 115,  209 => 114,  206 => 113,  202 => 112,  187 => 99,  178 => 97,  174 => 96,  168 => 92,  159 => 90,  155 => 89,  146 => 83,  140 => 79,  137 => 78,  127 => 71,  123 => 70,  119 => 69,  115 => 68,  111 => 67,  107 => 66,  103 => 65,  99 => 64,  95 => 62,  92 => 61,  33 => 4,  30 => 3,);
    }
}
