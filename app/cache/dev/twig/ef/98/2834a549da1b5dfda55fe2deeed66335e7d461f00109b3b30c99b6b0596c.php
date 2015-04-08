<?php

/* EspritTaxiDriverBundle:ResponsableAgence:listRecNonConf.html.twig */
class __TwigTemplate_ef982834a549da1b5dfda55fe2deeed66335e7d461f00109b3b30c99b6b0596c extends Twig_Template
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
";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "            
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css1/bootstrap2.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css1/dataTables.bootstrap.css"), "html", null, true);
        echo "\">
    <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js1/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js1/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js1/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 31
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
</head>

<br>
<br>
<div class=\"container\">


<table id=\"example\" class=\"display\" cellspacing=\"20\" width=\"100%\">
    <thead>
    <tr>

        <tr><th>ID</th>
      
        <th>Sujet Reclamation</th>
        <th> etat </th>
        <th> Read More</th>



        </tr>
    </thead>
    <tbody>
";
        // line 66
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 67
            echo "    
    ";
            // line 68
            if (($this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), "etat") == 0)) {
                // line 69
                echo "        <tr>
            <td>";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), "idreclamation"), "html", null, true);
                echo "</td>
            <td>";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), "sujetreclamation"), "html", null, true);
                echo "</td>
            
            <td>    ";
                // line 73
                if (($this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), "etat") == 1)) {
                    // line 74
                    echo "\tConfirmé
\t";
                } else {
                    // line 76
                    echo "\tNon encore Confirmé
\t";
                }
                // line 78
                echo "        </td>
               <td>     <a href=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_affichageRec", array("idreclamation" => $this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), "idreclamation"))), "html", null, true);
                echo "\">ReadMore</a> </td>
             
                     
            ";
            }
            // line 82
            echo "        
            

        
   
        </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo " 

</tbody>
</table>
    
    &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;
           <a class=\"btn btn-primary\"   role=\"btn\" href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_historiqueRec");
        echo "\">   Historique </a></button>
     </a>   
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
        return "EspritTaxiDriverBundle:ResponsableAgence:listRecNonConf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 94,  198 => 88,  186 => 82,  179 => 79,  176 => 78,  172 => 76,  168 => 74,  166 => 73,  161 => 71,  157 => 70,  154 => 69,  152 => 68,  149 => 67,  145 => 66,  107 => 31,  103 => 30,  99 => 29,  95 => 28,  91 => 27,  87 => 26,  84 => 25,  81 => 24,  72 => 18,  68 => 17,  64 => 16,  60 => 15,  56 => 14,  52 => 13,  48 => 12,  44 => 11,  40 => 10,  36 => 9,  32 => 7,  29 => 6,);
    }
}
