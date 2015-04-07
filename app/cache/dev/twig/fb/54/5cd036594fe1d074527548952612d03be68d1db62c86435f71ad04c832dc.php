<?php

/* EspritTaxiDriverBundle:ResponsableAgence:historique.html.twig */
class __TwigTemplate_fb545cd036594fe1d074527548952612d03be68d1db62c86435f71ad04c832dc extends Twig_Template
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

    // line 8
    public function block_navbar($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"top-nav\">
\t\t\t\t\t\t<ul>
                                                    <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_homepage");
        echo "\">Accueil</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_a_propos");
        echo "\">A propos</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_affi_agence");
        echo "\">Nos agences</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_affi_offre");
        echo "\">Offres</a></li>
                                                        <li class=\"active\"><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listRNCreclamation");
        echo "\"> Reclamations  </a></li>
                                                        <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listChauffeur");
        echo "\">Chauffeurs</a></li>
                                                        <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listVoiture");
        echo "\">Vehicules</a></li>
                                                        <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listTrajet");
        echo "\"> Trajet </a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_contact");
        echo "\">Contact</a></li>
\t\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
";
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        // line 29
        echo "


  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css1/bootstrap2.css"), "html", null, true);
        echo "\" >
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css1/dataTables.bootstrap.css"), "html", null, true);
        echo "\">
    <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js1/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js1/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js1/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 37
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
<body>

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
        // line 73
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 74
            echo "    
    ";
            // line 75
            if (($this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), "etat") == 1)) {
                // line 76
                echo "        <tr>
            <td>";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), "idreclamation"), "html", null, true);
                echo "</td>
            <td>";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), "sujetreclamation"), "html", null, true);
                echo "</td>
            
            <td>    ";
                // line 80
                if (($this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), "etat") == 1)) {
                    // line 81
                    echo "\tConfirmé
\t";
                } else {
                    // line 83
                    echo "\tNon encore Confirmé
\t";
                }
                // line 85
                echo "        </td>
               <td>     <a href=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_historiqueRec", array("idreclamation" => $this->getAttribute((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")), "idreclamation"))), "html", null, true);
                echo "\">ReadMore</a> </td>
                     
            ";
            }
            // line 88
            echo "        
            

        
   
        </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo " 

</tbody>
</table>
    
  
           <a class=\"btn btn-primary\" role=\"btn\" href=\"";
        // line 100
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listRNCreclamation");
        echo "\">   retour  </a></button>
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
        return "EspritTaxiDriverBundle:ResponsableAgence:historique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 100,  196 => 94,  184 => 88,  178 => 86,  175 => 85,  171 => 83,  167 => 81,  165 => 80,  160 => 78,  156 => 77,  153 => 76,  151 => 75,  148 => 74,  144 => 73,  105 => 37,  101 => 36,  97 => 35,  93 => 34,  89 => 33,  85 => 32,  80 => 29,  77 => 28,  68 => 19,  64 => 18,  60 => 17,  56 => 16,  52 => 15,  48 => 14,  44 => 13,  40 => 12,  36 => 11,  32 => 9,  29 => 8,);
    }
}
