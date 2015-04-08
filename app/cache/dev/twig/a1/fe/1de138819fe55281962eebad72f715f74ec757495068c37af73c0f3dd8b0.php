<?php

/* EspritTaxiDriverBundle:Graphe:histogramme.html.twig */
class __TwigTemplate_a1fe1de138819fe55281962eebad72f715f74ec757495068c37af73c0f3dd8b0 extends Twig_Template
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
        echo "
<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"
type=\"text/javascript\"></script>

<script src=\"//code.highcharts.com/4.0.1/highcharts.js\"></script>
<script src=\"//code.highcharts.com/4.0.1/modules/exporting.js\"></script>
<script type=\"text/javascript\">
    ";
        // line 8
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")));
        echo "
</script>

<div id=\"container\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>";
    }

    public function getTemplateName()
    {
        return "EspritTaxiDriverBundle:Graphe:histogramme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 8,  19 => 1,);
    }
}
