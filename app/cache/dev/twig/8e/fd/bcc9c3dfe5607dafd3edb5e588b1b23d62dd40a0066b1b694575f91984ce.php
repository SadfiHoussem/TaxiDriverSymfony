<?php

/* FOSUserBundle:Profile:show_content_resp_agence.html.twig */
class __TwigTemplate_8efdbcc9c3dfe5607dafd3edb5e588b1b23d62dd40a0066b1b694575f91984ce extends Twig_Template
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
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Profile</a></li>
                                                        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_affi_agence");
        echo "\">Nos agences</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listOffre");
        echo "\">Offres</a></li>
                                                        <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listRNCreclamation");
        echo "\"> Reclamations  </a></li>
                                                        <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listChauffeur");
        echo "\">Chauffeurs</a></li>
                                                        <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listVoiture");
        echo "\">Vehicules</a></li>
                                                        <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listTrajet");
        echo "\"> Trajet </a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_contact");
        echo "\">Contact</a></li>
\t\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
";
    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
        // line 27
        echo "


            <br>
            <br>
            <center>

<form class=\"form-horizontal\" method=\"POST\" action=\"\" >
    <div class=\"fos_user_user_show\">
 <div class=\"form-group\" style=\"
    width: 500px;\">
    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ":</label>
    <div class=\"col-sm-10\">
      <input type=\"text\" class=\"form-control\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
        echo "\">
    </div>
  </div>
    
    
    <form class=\"form-horizontal\">
 <div class=\"form-group\" style=\"
    width: 500px;\">
    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ":</label>
    <div class=\"col-sm-10\">
      <input type=\"email\" class=\"form-control\" id=\"inputEmail3\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo "\" >
    </div>
  </div>
    
    
    
      <form class=\"form-horizontal\">
 <div class=\"form-group\" style=\"
    width: 500px;\">
    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\"> Nom:</label>
    <div class=\"col-sm-10\">
      <input type=\"email\" class=\"form-control\" id=\"inputEmail3\"  value=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resp"]) ? $context["resp"] : $this->getContext($context, "resp")), "nom"), "html", null, true);
        echo "\" >
    </div>
  </div>
    
    
         <form class=\"form-horizontal\">
 <div class=\"form-group\" style=\"
    width: 500px;\">
    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\"> Prenom:</label>
    <div class=\"col-sm-10\">
      <input type=\"email\" class=\"form-control\" id=\"inputEmail3\"  value=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resp"]) ? $context["resp"] : $this->getContext($context, "resp")), "prenom"), "html", null, true);
        echo "\" >
    </div>
  </div>
    
    
        
         <form class=\"form-horizontal\">
 <div class=\"form-group\" style=\"
    width: 500px;\">
    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\"> Telephone:</label>
    <div class=\"col-sm-10\">
      <input type=\"email\" class=\"form-control\" id=\"inputEmail3\"  value=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resp"]) ? $context["resp"] : $this->getContext($context, "resp")), "telephone"), "html", null, true);
        echo "\" >
    </div>
  </div>
    
    
    
        
         <form class=\"form-horizontal\">
 <div class=\"form-group\" style=\"
    width: 500px;\">
    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\"> Cin:</label>
    <div class=\"col-sm-10\">
      <input type=\"email\" class=\"form-control\" id=\"inputEmail3\"  value=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resp"]) ? $context["resp"] : $this->getContext($context, "resp")), "cin"), "html", null, true);
        echo "\" >
    </div>
  </div>
    
        
         <form class=\"form-horizontal\">
 <div class=\"form-group\" style=\"
    width: 500px;\">
    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\"> Adresse:</label>
    <div class=\"col-sm-10\">
      <input type=\"email\" class=\"form-control\" id=\"inputEmail3\"  value=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resp"]) ? $context["resp"] : $this->getContext($context, "resp")), "adresse"), "html", null, true);
        echo "\" >
    </div>
  </div>
    



</div>
    <button type=\"submit\" class=\"btn btn-primary\"> Valider </button>
    
    <br>
    <br>
    
    ";
        // line 118
        echo "</form>

</center>


";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content_resp_agence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 118,  183 => 104,  170 => 94,  155 => 82,  141 => 71,  128 => 61,  114 => 50,  109 => 48,  98 => 40,  93 => 38,  80 => 27,  77 => 26,  68 => 17,  64 => 16,  60 => 15,  56 => 14,  52 => 13,  48 => 12,  44 => 11,  40 => 10,  36 => 9,  32 => 7,  29 => 6,);
    }
}
