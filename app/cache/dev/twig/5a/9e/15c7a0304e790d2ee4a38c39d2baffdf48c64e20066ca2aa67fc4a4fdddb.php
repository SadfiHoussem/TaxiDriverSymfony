<?php

/* EspritTaxiDriverBundle:ResponsableAgence:affichage.html.twig */
class __TwigTemplate_5a9e15c7a0304e790d2ee4a38c39d2baffdf48c64e20066ca2aa67fc4a4fdddb extends Twig_Template
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
                                                        <li class=\"active\"><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listRNCreclamation");
        echo "\"> Reclamations  </a></li>
                                                        <li><a href=\"";
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
                                                        <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listReclamation");
        echo "\"></a>
";
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        // line 29
        echo "



<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css1/bootstrap2.css"), "html", null, true);
        echo "\" >
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css1/dataTables.bootstrap.css"), "html", null, true);
        echo "\">
<style>
.titleprghp {
background:#555;
height: 46px;
color: #000;
font-size: 23px;
height: 46px;
line-height: 40px;
padding: 0 0 0 20px;
margin: 20px 0 20px;
}
</style>
    <div class=\"titleprghp\">
                                                    <span class=\"prg\">   <h3> Reclamation :  ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "sujetreclamation"), "html", null, true);
        echo "</h3></span> 
                                                </div>
 
    <table class=\"table table-hover\">
        <tbody>
         
            <tr>
                <th> Client </th>
                <td>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "idClient"), "nom"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th> Agence</th>
                <td>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "idAgence"), "nomAgence"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contenu </th>
                <td>";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "contenu"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>etat</th>
                
            <td>
\t";
        // line 70
        if (($this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "etat") == 1)) {
            // line 71
            echo "\tConfirmé
\t";
        } else {
            // line 73
            echo "\tNon encore Confirmé
\t";
        }
        // line 75
        echo "            </td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 79
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "date"), "Y,m,d"), "html", null, true);
        echo "</td>
            </tr>
           
        </tbody>
    </table>
     
            
    
      
            <a class=\"btn bg-primary\"  role=\"btn\"  href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listRNCreclamation");
        echo "\">   Retour  </a> 
             &emsp;&emsp;&emsp;&emsp;
     
             <a  class=\"btn bg-primary\"  role=\"btn\" href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_confirmationRec", array("idreclamation" => $this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "idreclamation"))), "html", null, true);
        echo "\"> Confirmation </a>
            
   
       ";
    }

    public function getTemplateName()
    {
        return "EspritTaxiDriverBundle:ResponsableAgence:affichage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 91,  177 => 88,  165 => 79,  159 => 75,  155 => 73,  151 => 71,  149 => 70,  140 => 64,  133 => 60,  126 => 56,  115 => 48,  98 => 34,  94 => 33,  88 => 29,  85 => 28,  79 => 22,  72 => 18,  68 => 17,  64 => 16,  60 => 15,  56 => 14,  52 => 13,  48 => 12,  44 => 11,  40 => 10,  36 => 9,  32 => 7,  29 => 6,);
    }
}
