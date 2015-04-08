<?php

/* EspritTaxiDriverBundle:ResponsableAgence:listChauffeur.html.twig */
class __TwigTemplate_8bff85ce5b018e925bf12b95170d5384fd5d43af7ea5deb50a9a9ac9b7fcfe92 extends Twig_Template
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
        <th> Permis </th>
        <th>etat </th>
        <th>nom</th>
     
       <th>prenom</th>
      <th>email</th>
     <th>telephone</th>
       <th> Agence </th>
    <th> Modifier </th>
     <th> Supprimer </th>
       
        
         </tr>
    </thead>
    <tbody>
";
        // line 78
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["chauffeur"]) ? $context["chauffeur"] : $this->getContext($context, "chauffeur")));
        foreach ($context['_seq'] as $context["_key"] => $context["ch"]) {
            // line 79
            echo "        <tr>
            
            <td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ch"]) ? $context["ch"] : $this->getContext($context, "ch")), "numpermis"), "html", null, true);
            echo "</td>
            <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ch"]) ? $context["ch"] : $this->getContext($context, "ch")), "etat"), "html", null, true);
            echo "</td>
             <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ch"]) ? $context["ch"] : $this->getContext($context, "ch")), "nom"), "html", null, true);
            echo "</td>
              <td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ch"]) ? $context["ch"] : $this->getContext($context, "ch")), "prenom"), "html", null, true);
            echo "</td>
               <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ch"]) ? $context["ch"] : $this->getContext($context, "ch")), "email"), "html", null, true);
            echo "</td>
                <td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ch"]) ? $context["ch"] : $this->getContext($context, "ch")), "telephone"), "html", null, true);
            echo "</td>
               <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ch"]) ? $context["ch"] : $this->getContext($context, "ch")), "nomagence"), "html", null, true);
            echo "</td>
            
         
               <td><a href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_updateChauffeur", array("idchauffeur" => $this->getAttribute((isset($context["ch"]) ? $context["ch"] : $this->getContext($context, "ch")), "idchauffeur"))), "html", null, true);
            echo "\">  <center> <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/mod.jpg"), "html", null, true);
            echo "\"/> </center> </a></td>
         <td><a href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_deleteChauffeur", array("idchauffeur" => $this->getAttribute((isset($context["ch"]) ? $context["ch"] : $this->getContext($context, "ch")), "idchauffeur"))), "html", null, true);
            echo "\"> <center> <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/supp.jpg"), "html", null, true);
            echo "\"/> </a></td>   
   
           
        </tr>
      
        
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ch'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo " 

</tbody>
</table>

<center>
       <a class=\"btn btn-primary\" role=\"btn\" href=\"";
        // line 103
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_ajoutChauffeur");
        echo "\"> Ajouter un nouveau Chauffeur <img src=\"";
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
        return "EspritTaxiDriverBundle:ResponsableAgence:listChauffeur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 103,  213 => 97,  198 => 91,  192 => 90,  186 => 87,  182 => 86,  178 => 85,  174 => 84,  170 => 83,  166 => 82,  162 => 81,  158 => 79,  154 => 78,  110 => 37,  106 => 36,  102 => 35,  98 => 34,  94 => 33,  90 => 32,  84 => 28,  81 => 27,  72 => 18,  68 => 17,  64 => 16,  60 => 15,  56 => 14,  52 => 13,  48 => 12,  44 => 11,  40 => 10,  36 => 9,  32 => 7,  29 => 6,);
    }
}
