<?php

/* EspritTaxiDriverBundle:ResponsableAgence:listTrajet.html.twig */
class __TwigTemplate_edaf1e694a5e3f547cb0346084f34b26ece9901bbecab86297df103a28c02f06 extends Twig_Template
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

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css1/bootstrap2.css"), "html", null, true);
        echo "\" >
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css1/dataTables.bootstrap.css"), "html", null, true);
        echo "\">
    <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js1/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js1/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js1/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js1/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" charset=\"utf-8\">


        \$(document).ready(function() {
            \$('#example').dataTable();
        } );
    </script>
    <style type=\"text/css\">
        .bs-example{
            margin: 20px;
        }
    </style>
    
";
    }

    // line 28
    public function block_navbar($context, array $blocks = array())
    {
        // line 29
        echo "<div class=\"top-nav\">
\t\t\t\t\t\t<ul>
                                                    <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_homepage");
        echo "\">Accueil</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_a_propos");
        echo "\">A propos</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Profile</a></li>
                                                        <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_affi_agence");
        echo "\">Nos agences</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listOffre");
        echo "\">Offres</a></li>
                                                        <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listRNCreclamation");
        echo "\"> Reclamations  </a></li>
                                                        <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listChauffeur");
        echo "\">Chauffeurs</a></li>
                                                        <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listVoiture");
        echo "\">Vehicules</a></li>
                                                        <li class=\"active\"><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listTrajet");
        echo "\"> Trajet </a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_contact");
        echo "\">Contact</a></li>
\t\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
";
    }

    // line 49
    public function block_content($context, array $blocks = array())
    {
        // line 50
        echo "            

<br>
<br>
<div class=\"container\">


<table id=\"example\" class=\"display\" cellspacing=\"20\" width=\"100%\">
    <thead>
    <tr>

        <tr><th>ID</th>
      
      
        <th> Adresse Depart</th>

      <th> Adresse Destionation </th>
      <th> cout </th>
        <th>Agence</th>
        <th> etat </th>
       <th> confirmation </th>
       <th> supprimer </th>
        </tr>
    </thead>
    <tbody>
";
        // line 75
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trajet"]) ? $context["trajet"] : $this->getContext($context, "trajet")));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 76
            echo "    
    ";
            // line 77
            if (($this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "etat") == 0)) {
                // line 78
                echo "        <tr>
            <td>";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "idtrajet"), "html", null, true);
                echo "</td>
            <td>";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "idagence"), "nomagence"), "html", null, true);
                echo "</td>
               <td>";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "adressedep"), "html", null, true);
                echo "</td>
                  <td>";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "adressedest"), "html", null, true);
                echo "</td>
                     <td>";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "cout"), "html", null, true);
                echo "</td>
                     
                     
            
            <td>    ";
                // line 87
                if (($this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "etat") == 1)) {
                    // line 88
                    echo "\tConfirmé
\t";
                } else {
                    // line 90
                    echo "\tNon encore Confirmé
\t";
                }
                // line 92
                echo "        </td>
    
        
               <td>    <a  class=\"btn bg-primary\"  role=\"btn\" href=\"";
                // line 95
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_confirmationtrajet", array("idtrajet" => $this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "idtrajet"))), "html", null, true);
                echo "\"> Confirmation </a> </td>
   
         <td>    <a  class=\"btn bg-primary\"  role=\"btn\" href=\"";
                // line 97
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_deleteTrajet", array("idtrajet" => $this->getAttribute((isset($context["t"]) ? $context["t"] : $this->getContext($context, "t")), "idtrajet"))), "html", null, true);
                echo "\"> Supprimer </a> </td>   
            ";
            }
            // line 98
            echo "        
            

        
   
        </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo " 

</tbody>
</table>
    
    &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
        
      
</div>
<script type=\"text/javascript\">

    \$('#example')
            .removeClass( 'display' )
            .addClass('table table-striped table-bordered');
</script>
";
    }

    public function getTemplateName()
    {
        return "EspritTaxiDriverBundle:ResponsableAgence:listTrajet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 104,  215 => 98,  210 => 97,  205 => 95,  200 => 92,  196 => 90,  192 => 88,  190 => 87,  183 => 83,  179 => 82,  175 => 81,  171 => 80,  167 => 79,  164 => 78,  162 => 77,  159 => 76,  155 => 75,  128 => 50,  125 => 49,  116 => 40,  112 => 39,  108 => 38,  104 => 37,  100 => 36,  96 => 35,  92 => 34,  88 => 33,  84 => 32,  80 => 31,  76 => 29,  73 => 28,  54 => 12,  50 => 11,  46 => 10,  42 => 9,  38 => 8,  33 => 7,  30 => 6,);
    }
}
