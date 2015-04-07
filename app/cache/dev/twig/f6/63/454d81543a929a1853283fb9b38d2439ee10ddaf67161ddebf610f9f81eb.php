<?php

/* FOSUserBundle:Profile:show_content_client.html.twig */
class __TwigTemplate_f663454d81543a929a1853283fb9b38d2439ee10ddaf67161ddebf610f9f81eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<form method=\"POST\" action=\"\">
<div class=\"fos_user_user_show\">
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": <input type=\"text\" name=\"username\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
        echo "\"></p>
    <p>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": <input type=\"text\" name=\"email\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo "\"></p>
    <p> Nom : <input type=\"text\" name=\"nom\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "nom"), "html", null, true);
        echo "\"></p>
    <p> Prenom : <input type=\"text\" name=\"prenom\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "prenom"), "html", null, true);
        echo "\"></p>
    <p> Telephone : <input type=\"text\" name=\"telephone\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "telephone"), "html", null, true);
        echo "\"></p>
    <p> CIN : <input type=\"text\" name=\"cin\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "cin"), "html", null, true);
        echo "\"></p>
    <p> Adresse : <input type=\"text\" name=\"adresse\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "adresse"), "html", null, true);
        echo "\"></p>
</div>
    <input type=\"submit\" value=\"Valider\">
</form>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content_client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  30 => 6,  24 => 5,  19 => 2,);
    }
}
