<?php

/* EspritTaxiDriverBundle:ResponsableAgence:listOffre.html.twig */
class __TwigTemplate_9e4f3450a8a6b5fe2c39d86cd2c9dac121926465cba17fa4f6a1c90bc52e2ec2 extends Twig_Template
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
        echo "         

         
         
<div class=\"top-nav\">
\t\t\t\t\t\t<ul>
                                                    <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_homepage");
        echo "\">Accueil</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_a_propos");
        echo "\">A propos</a></li>
                                                        <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Profile</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_affi_agence");
        echo "\">Nos agences</a></li>
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listOffre");
        echo "\">Offres</a></li>
                                                        <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listRNCreclamation");
        echo "\"> Reclamations  </a></li>
                                                        <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listChauffeur");
        echo "\">Chauffeurs</a></li>
                                                        <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listVoiture");
        echo "\">Vehicules</a></li>
                                                        <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listTrajet");
        echo "\"> Trajet </a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_contact");
        echo "\">Contact</a></li>
\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
";
    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        // line 32
        echo "            
                     

        
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css1/bootstrap2.css"), "html", null, true);
        echo "\" >
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css1/dataTables.bootstrap.css"), "html", null, true);
        echo "\">
    <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js1/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js1/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js1/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 41
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
           
    <tr><th>ID</th>
        <th>Agence  </th>
        <th>Sujet Offre </th>
        <th>Contenu</th>
     
       <th>Date</th>
    <th> Modifier </th>
     <th> Supprimer </th>
        </tr>
        </thead>
    <tbody>
";
        // line 76
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")));
        foreach ($context['_seq'] as $context["_key"] => $context["of"]) {
            // line 77
            echo "        <tr>
            <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["of"]) ? $context["of"] : $this->getContext($context, "of")), "idoffre"), "html", null, true);
            echo "</td>
            <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["of"]) ? $context["of"] : $this->getContext($context, "of")), "nomagence"), "html", null, true);
            echo "</td>
            <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["of"]) ? $context["of"] : $this->getContext($context, "of")), "sujetoffre"), "html", null, true);
            echo "</td>
             <td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["of"]) ? $context["of"] : $this->getContext($context, "of")), "contenu"), "html", null, true);
            echo "</td>
                  <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["of"]) ? $context["of"] : $this->getContext($context, "of")), "date"), "d/m/Y"), "html", null, true);
            echo "</td>
          
            
        
             <td><a href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_updateOffre", array("idOffre" => $this->getAttribute((isset($context["of"]) ? $context["of"] : $this->getContext($context, "of")), "idoffre"))), "html", null, true);
            echo "\"> Modifier </a></td>
          
         <td><a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_deleteOffre", array("idoffre" => $this->getAttribute((isset($context["of"]) ? $context["of"] : $this->getContext($context, "of")), "idoffre"))), "html", null, true);
            echo "\"> Supprimer </a></td>   
   
          
        </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['of'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo " 

</tbody>
</table>
<center>
       <a class=\"btn btn-primary\" role=\"btn\" href=\"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_ajoutOffre");
        echo "\"> Ajouter une Nouvelle Offre <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ajout.png"), "html", null, true);
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
        return "EspritTaxiDriverBundle:ResponsableAgence:listOffre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 97,  198 => 92,  187 => 88,  182 => 86,  175 => 82,  171 => 81,  167 => 80,  163 => 79,  159 => 78,  156 => 77,  152 => 76,  114 => 41,  110 => 40,  106 => 39,  102 => 38,  98 => 37,  94 => 36,  88 => 32,  85 => 31,  76 => 22,  72 => 21,  68 => 20,  64 => 19,  60 => 18,  56 => 17,  52 => 16,  48 => 15,  44 => 14,  40 => 13,  32 => 7,  29 => 6,);
    }
}
