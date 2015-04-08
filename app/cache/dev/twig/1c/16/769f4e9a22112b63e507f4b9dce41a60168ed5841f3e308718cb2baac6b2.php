<?php

/* EspritTaxiDriverBundle:ResponsableAgence:ajoutChauffeur.html.twig */
class __TwigTemplate_1c16769f4e9a22112b63e507f4b9dce41a60168ed5841f3e308718cb2baac6b2 extends Twig_Template
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

    // line 6
    public function block_navbar($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"top-nav\">
\t\t\t\t\t\t<ul>
                                                    <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_homepage");
        echo "\">Accueil</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_a_propos");
        echo "\">A propos</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Profile</a></li>
                                                        <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_affi_agence");
        echo "\">Nos agences</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listOffre");
        echo "\">Offres</a></li>
                                                        <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listRNCreclamation");
        echo "\"> Reclamations  </a></li>
                                                        <li class=\"active\"><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listChauffeur");
        echo "\">Chauffeurs</a></li>
                                                        <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listVoiture");
        echo "\">Vehicules</a></li>
                                                        <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listTrajet");
        echo "\"> Trajet </a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_contact");
        echo "\">Contact</a></li>
\t\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
";
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        // line 28
        echo "          
             <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css1/bootstrap2.css"), "html", null, true);
        echo "\" >
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css1/dataTables.bootstrap.css"), "html", null, true);
        echo "\">
            <center>
   
  <h1>  Ajouter un Chauffeur </h1>
  <br> 
  <br>
  
  
  
<form method=\"post\" ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["FormC"]) ? $context["FormC"] : $this->getContext($context, "FormC")), 'enctype');
        echo " action=\"\">
<table>
    
    
    ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["FormR"]) ? $context["FormR"] : $this->getContext($context, "FormR")), 'widget');
        echo "
    
    <tr>
        <td>
        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["FormC"]) ? $context["FormC"] : $this->getContext($context, "FormC")), "numpermis"), 'label');
        echo "
        </td>
        <td>
            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["FormC"]) ? $context["FormC"] : $this->getContext($context, "FormC")), "numpermis"), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["FormC"]) ? $context["FormC"] : $this->getContext($context, "FormC")), "numpermis"), 'errors');
        echo "
        </td>
    </tr>
    
    
    <tr>
        <td>
            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["FormC"]) ? $context["FormC"] : $this->getContext($context, "FormC")), "nom"), 'label');
        echo "
        </td>
        <td>
           ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["FormC"]) ? $context["FormC"] : $this->getContext($context, "FormC")), "nom"), 'widget');
        echo "
           ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["FormC"]) ? $context["FormC"] : $this->getContext($context, "FormC")), "nom"), 'errors');
        echo "
        </td>
    </tr>
   
    
     <tr>
        <td>
            ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["FormC"]) ? $context["FormC"] : $this->getContext($context, "FormC")), "prenom"), 'label');
        echo "
        </td>
        <td>
           ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["FormC"]) ? $context["FormC"] : $this->getContext($context, "FormC")), "prenom"), 'widget');
        echo "
           ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["FormC"]) ? $context["FormC"] : $this->getContext($context, "FormC")), "prenom"), 'errors');
        echo "
        </td>
    </tr>
    
    
    <tr>
        <td>
        ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["FormC"]) ? $context["FormC"] : $this->getContext($context, "FormC")), "idAgence"), 'label');
        echo "
        </td>
        <td>
            ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["FormC"]) ? $context["FormC"] : $this->getContext($context, "FormC")), "idAgence"), 'widget');
        echo "
            ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["FormC"]) ? $context["FormC"] : $this->getContext($context, "FormC")), "idAgence"), 'errors');
        echo "
        </td>
    </tr>
    
     
    <tr>
        <td>
        ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["FormC"]) ? $context["FormC"] : $this->getContext($context, "FormC")), "etat"), 'label');
        echo "
        </td>
        <td>
            ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["FormC"]) ? $context["FormC"] : $this->getContext($context, "FormC")), "etat"), 'widget');
        echo "
            ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["FormC"]) ? $context["FormC"] : $this->getContext($context, "FormC")), "etat"), 'errors');
        echo "
        </td>
    </tr>
    
    
       <tr>
        <td>
        ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["FormC"]) ? $context["FormC"] : $this->getContext($context, "FormC")), "note"), 'label');
        echo "
        </td>
        <td>
            ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["FormC"]) ? $context["FormC"] : $this->getContext($context, "FormC")), "note"), 'widget');
        echo "
            ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["FormC"]) ? $context["FormC"] : $this->getContext($context, "FormC")), "note"), 'errors');
        echo "
        </td>
    </tr>
    
    
       <tr>
        <td>
        ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["FormC"]) ? $context["FormC"] : $this->getContext($context, "FormC")), "telephone"), 'label');
        echo "
        </td>
        <td>
            ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["FormC"]) ? $context["FormC"] : $this->getContext($context, "FormC")), "telephone"), 'widget');
        echo "
            ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["FormC"]) ? $context["FormC"] : $this->getContext($context, "FormC")), "telephone"), 'errors');
        echo "
        </td>
    </tr>
    
    
       <tr>
        <td>
        ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["FormC"]) ? $context["FormC"] : $this->getContext($context, "FormC")), "adresse"), 'label');
        echo "
        </td>
        <td>
            ";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["FormC"]) ? $context["FormC"] : $this->getContext($context, "FormC")), "adresse"), 'widget');
        echo "
            ";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["FormC"]) ? $context["FormC"] : $this->getContext($context, "FormC")), "adresse"), 'errors');
        echo "
        </td>
    </tr>
    
    
         <tr>
        <td>
        ";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["FormC"]) ? $context["FormC"] : $this->getContext($context, "FormC")), "cin"), 'label');
        echo "
        </td>
        <td>
            ";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["FormC"]) ? $context["FormC"] : $this->getContext($context, "FormC")), "cin"), 'widget');
        echo "
            ";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["FormC"]) ? $context["FormC"] : $this->getContext($context, "FormC")), "cin"), 'errors');
        echo "
        </td>
    </tr>
    
    
    
    <tr>
        <td>
            <input type=\"submit\" value=\"Valider\"/>
        </td>
        <td>
             <input type=\"reset\" value=\"Annuler\"/>
        </td>
    </tr>

   
</table>
        
</form>
            </center>
  
";
    }

    public function getTemplateName()
    {
        return "EspritTaxiDriverBundle:ResponsableAgence:ajoutChauffeur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 139,  283 => 138,  277 => 135,  267 => 128,  263 => 127,  257 => 124,  247 => 117,  243 => 116,  237 => 113,  227 => 106,  223 => 105,  217 => 102,  207 => 95,  203 => 94,  197 => 91,  187 => 84,  183 => 83,  177 => 80,  167 => 73,  163 => 72,  157 => 69,  147 => 62,  143 => 61,  137 => 58,  127 => 51,  123 => 50,  117 => 47,  110 => 43,  103 => 39,  91 => 30,  87 => 29,  84 => 28,  81 => 27,  72 => 18,  68 => 17,  64 => 16,  60 => 15,  56 => 14,  52 => 13,  48 => 12,  44 => 11,  40 => 10,  36 => 9,  32 => 7,  29 => 6,);
    }
}
