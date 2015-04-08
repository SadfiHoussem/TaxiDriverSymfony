<?php

/* EspritTaxiDriverBundle:ResponsableAgence:updateChauffeur.html.twig */
class __TwigTemplate_fa6e3f8b08e02cdccdc336cced521ad46a145c631a7ba6962d725f3ae834896d extends Twig_Template
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
                                                    <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_homepage");
        echo "\">Accueil</a></li>
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Profile</a></li>
                                                        <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_affi_agence");
        echo "\">Nos agences</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listOffre");
        echo "\">Offres</a></li>
                                                        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listRNCreclamation");
        echo "\"> Reclamations  </a></li>
                                                        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listChauffeur");
        echo "\">Chauffeurs</a></li>
                                                        <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listVoiture");
        echo "\">Vehicules</a></li>
                                                        <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listTrajet");
        echo "\"> Trajet </a></li>
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
        echo "


            <br>
            <br>
            <center>
  
  
   
  <h1> Mise à jour d'un Chauffeur </h1>
<form method=\"post\" ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'enctype');
        echo ">
    
    

<table>
    
    
    <tr>
        <td>
        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "numpermis"), 'label');
        echo "
        </td>
        <td>
            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "numpermis"), 'widget');
        echo "
            ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "numpermis"), 'errors');
        echo "
        </td>
    </tr>
    
    
    <tr>
        <td>
            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "nom"), 'label');
        echo "
        </td>
        <td>
           ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "nom"), 'widget');
        echo "
           ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "nom"), 'errors');
        echo "
        </td>
    </tr>
   
    
     <tr>
        <td>
            ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "prenom"), 'label');
        echo "
        </td>
        <td>
           ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "prenom"), 'widget');
        echo "
           ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "prenom"), 'errors');
        echo "
        </td>
    </tr>
    
    
    <tr>
        <td>
        ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "idAgence"), 'label');
        echo "
        </td>
        <td>
            ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "idAgence"), 'widget');
        echo "
            ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "idAgence"), 'errors');
        echo "
        </td>
    </tr>
    
    
        
    <tr>
        <td>
        ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "email"), 'label');
        echo "
        </td>
        <td>
            ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "email"), 'widget');
        echo "
            ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "email"), 'errors');
        echo "
        </td>
    </tr>
    
    
           <tr>
        <td>
        ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "pwd"), 'label');
        echo "
        </td>
        <td>
            ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "pwd"), 'widget');
        echo "
            ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "pwd"), 'errors');
        echo "
        </td>
    </tr>

    
   
    
    
     
    <tr>
        <td>
        ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "etat"), 'label');
        echo "
        </td>
        <td>
            ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "etat"), 'widget');
        echo "
            ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "etat"), 'errors');
        echo "
        </td>
    </tr>
    
    
       <tr>
        <td>
        ";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "note"), 'label');
        echo "
        </td>
        <td>
            ";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "note"), 'widget');
        echo "
            ";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "note"), 'errors');
        echo "
        </td>
    </tr>
    
    
       <tr>
        <td>
            

        ";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "telephone"), 'label');
        echo "
        </td>
        <td>
            ";
        // line 141
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "telephone"), 'widget');
        echo "
            ";
        // line 142
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "telephone"), 'errors');
        echo "
        </td>
    </tr>
    
    
       <tr>
        <td>
        ";
        // line 149
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "adresse"), 'label');
        echo "
        </td>
        <td>
            ";
        // line 152
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "adresse"), 'widget');
        echo "
            ";
        // line 153
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "adresse"), 'errors');
        echo "
        </td>
    </tr>
    
    
         <tr>
        <td>
        ";
        // line 160
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "cin"), 'label');
        echo "
        </td>
        <td>
            ";
        // line 163
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "cin"), 'widget');
        echo "
            ";
        // line 164
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "cin"), 'errors');
        echo "
        </td>
    </tr>
    
    
    
    <tr>
        <td>
           <button type=\"submit\" class=\"btn btn-primary\"> Valider </button>
        </td>
        <td>
            <input type=\"reset\" class=\"btn btn-Danger\"> </button>
        </td>
    </tr>

   
</table>
         
   ";
        // line 182
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'rest');
        echo "     
</form>
   
<br>
<br>

";
    }

    public function getTemplateName()
    {
        return "EspritTaxiDriverBundle:ResponsableAgence:updateChauffeur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 182,  321 => 164,  317 => 163,  311 => 160,  301 => 153,  297 => 152,  291 => 149,  281 => 142,  277 => 141,  271 => 138,  259 => 129,  255 => 128,  249 => 125,  239 => 118,  235 => 117,  229 => 114,  215 => 103,  211 => 102,  205 => 99,  195 => 92,  191 => 91,  185 => 88,  174 => 80,  170 => 79,  164 => 76,  154 => 69,  150 => 68,  144 => 65,  134 => 58,  130 => 57,  124 => 54,  114 => 47,  110 => 46,  104 => 43,  92 => 34,  80 => 24,  77 => 23,  68 => 14,  64 => 13,  60 => 12,  56 => 11,  52 => 10,  48 => 9,  44 => 8,  40 => 7,  36 => 6,  32 => 4,  29 => 3,);
    }
}
