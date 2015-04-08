<?php

/* EspritTaxiDriverBundle:ResponsableAgence:listVoiture.html.twig */
class __TwigTemplate_b91fb7d5aa9d35346ba68904e6af096ed17ef8e08041b9ed6ed8695ac532708a extends Twig_Template
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
                                                        <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listChauffeur");
        echo "\">Chauffeurs</a></li>
                                                        <li class=\"active\"><a href=\"";
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
    <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js1/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js1/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js1/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 34
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
    <tr><th>Matricule</th>
        <th>Agence</th>
        <th>etat </th>
        <th>Type </th>
        <th>nombre de place </th>
    <th> Modifier </th>
     <th> Supprimer </th>
        </tr>
          </thead>
    <tbody>
";
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["voiture"]) ? $context["voiture"] : $this->getContext($context, "voiture")));
        foreach ($context['_seq'] as $context["_key"] => $context["V"]) {
            // line 68
            echo "        <tr>
            <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["V"]) ? $context["V"] : $this->getContext($context, "V")), "matricule"), "html", null, true);
            echo "</td>
              <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["V"]) ? $context["V"] : $this->getContext($context, "V")), "nomagence"), "html", null, true);
            echo "</td>
             <td>    ";
            // line 71
            if (($this->getAttribute((isset($context["V"]) ? $context["V"] : $this->getContext($context, "V")), "etat") == 1)) {
                // line 72
                echo "\tDisponible
\t";
            } else {
                // line 74
                echo "\tNom Dsiponible
\t";
            }
            // line 76
            echo "        </td>
                    <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["V"]) ? $context["V"] : $this->getContext($context, "V")), "typevoiture"), "html", null, true);
            echo "</td>
             <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["V"]) ? $context["V"] : $this->getContext($context, "V")), "nbrplace"), "html", null, true);
            echo "</td>
        
         
             <td><a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_updateVoiture", array("matricule" => $this->getAttribute((isset($context["V"]) ? $context["V"] : $this->getContext($context, "V")), "matricule"))), "html", null, true);
            echo "\"> Modifier </a></td>
         <td><a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_deleteVoiture", array("matricule" => $this->getAttribute((isset($context["V"]) ? $context["V"] : $this->getContext($context, "V")), "matricule"))), "html", null, true);
            echo "\"> Supprimer </a></td>   
   
           
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['V'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo " 
</tbody>
</table>

<center>
       <a class=\"btn btn-primary\" role=\"btn\" href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_ajoutVoiture");
        echo "\"> Ajouter une voiture  <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/Karhba.png"), "html", null, true);
        echo "\"/> </a></button>
</center>
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
        return "EspritTaxiDriverBundle:ResponsableAgence:listVoiture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 91,  196 => 86,  185 => 82,  181 => 81,  175 => 78,  171 => 77,  168 => 76,  164 => 74,  160 => 72,  158 => 71,  154 => 70,  150 => 69,  147 => 68,  143 => 67,  107 => 34,  103 => 33,  99 => 32,  95 => 31,  91 => 30,  87 => 29,  84 => 28,  81 => 27,  72 => 18,  68 => 17,  64 => 16,  60 => 15,  56 => 14,  52 => 13,  48 => 12,  44 => 11,  40 => 10,  36 => 9,  32 => 7,  29 => 6,);
    }
}
