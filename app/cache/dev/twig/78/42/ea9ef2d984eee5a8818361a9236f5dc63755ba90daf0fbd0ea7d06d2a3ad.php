<?php

/* EspritTaxiDriverBundle:ResponsableAgence:accueil.html.twig */
class __TwigTemplate_7842ea9ef2d984eee5a8818361a9236f5dc63755ba90daf0fbd0ea7d06d2a3ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EspritTaxiDriverBundle::Layout.html.twig");

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'slider' => array($this, 'block_slider'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspritTaxiDriverBundle::Layout.html.twig";
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
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_homepage");
        echo "\">Accueil</a></li>
\t\t\t\t\t\t
                                                        <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Profile</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_affi_agence");
        echo "\">Nos agences</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listOffre");
        echo "\">Offres</a></li>
                                                        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listRNCreclamation");
        echo "\"> Reclamations  </a></li>
                                                        <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listChauffeur");
        echo "\">Chauffeurs</a></li>
                                                        <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listVoiture");
        echo "\">Vehicules</a></li>
                                                        <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listTrajet");
        echo "\"> Trajet </a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_contact");
        echo "\">Contact</a></li>
\t\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t\t</ul>
                                            
\t\t\t\t\t</div>
";
    }

    // line 22
    public function block_slider($context, array $blocks = array())
    {
        // line 23
        echo "    <div class=\"slider\">\t\t\t\t\t     
\t\t\t\t\t<div class=\"camera_wrap camera_azure_skin\" id=\"camera_wrap_1\">\t\t\t\t\t\t\t\t\t           
\t\t\t\t\t\t<div data-src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider3.jpg"), "html", null, true);
        echo "\">  </div> 
\t\t\t\t\t\t<div data-src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider2.jpg"), "html", null, true);
        echo "\">  </div>
\t\t\t\t\t\t<div data-src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider1.jpg"), "html", null, true);
        echo "\">  </div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clear\"> </div>\t\t\t\t\t       
\t\t\t</div>\t                        
";
    }

    public function getTemplateName()
    {
        return "EspritTaxiDriverBundle:ResponsableAgence:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 27,  90 => 26,  86 => 25,  82 => 23,  79 => 22,  69 => 15,  65 => 14,  61 => 13,  57 => 12,  53 => 11,  49 => 10,  45 => 9,  41 => 8,  36 => 6,  32 => 4,  29 => 3,);
    }
}
