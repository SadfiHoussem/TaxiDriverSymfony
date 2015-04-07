<?php

/* FOSUserBundle:Profile:show_content_resp_agence.html.twig */
class __TwigTemplate_7b39ccb643382189aeab66b5d07ec1e43e7bf5ea7772700fbdf46daef85968b5 extends Twig_Template
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
        echo "<form method=\"POST\" action=\"\">
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": <input type=\"text\" name=\"username\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
        echo "\"></p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": <input type=\"text\" name=\"email\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo "\"></p>
    <p> Nom : <input type=\"text\" name=\"nom\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resp"]) ? $context["resp"] : $this->getContext($context, "resp")), "nom"), "html", null, true);
        echo "\"></p>
    <p> Prenom : <input type=\"text\" name=\"prenom\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resp"]) ? $context["resp"] : $this->getContext($context, "resp")), "prenom"), "html", null, true);
        echo "\"></p>
    <p> Telephone : <input type=\"text\" name=\"telephone\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resp"]) ? $context["resp"] : $this->getContext($context, "resp")), "telephone"), "html", null, true);
        echo "\"></p>
    <p> CIN : <input type=\"text\" name=\"cin\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resp"]) ? $context["resp"] : $this->getContext($context, "resp")), "cin"), "html", null, true);
        echo "\"></p>
    <p> Adresse : <input type=\"text\" name=\"adresse\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resp"]) ? $context["resp"] : $this->getContext($context, "resp")), "adresse"), "html", null, true);
        echo "\"></p>
</div>
    <input type=\"submit\" value=\"Valider\">
</form>";
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
        return array (  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  29 => 5,  23 => 4,  19 => 2,);
    }
}
