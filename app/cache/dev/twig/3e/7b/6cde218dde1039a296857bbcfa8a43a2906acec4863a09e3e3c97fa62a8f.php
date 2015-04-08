<?php

/* EspritTaxiDriverBundle:ResponsableAgence:test.html.twig */
class __TwigTemplate_3e7b6cde218dde1039a296857bbcfa8a43a2906acec4863a09e3e3c97fa62a8f extends Twig_Template
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
        // line 1
        echo twig_escape_filter($this->env, (isset($context["req"]) ? $context["req"] : $this->getContext($context, "req")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "EspritTaxiDriverBundle:ResponsableAgence:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
