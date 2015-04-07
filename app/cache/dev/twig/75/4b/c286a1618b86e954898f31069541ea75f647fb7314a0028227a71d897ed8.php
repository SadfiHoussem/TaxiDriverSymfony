<?php

/* EspritTaxiDriverBundle:ResponsableAgence:updateOffre.html.twig */
class __TwigTemplate_754bc286a1618b86e954898f31069541ea75f647fb7314a0028227a71d897ed8 extends Twig_Template
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
        // line 22
        echo "  
  
   
  <h1> Mise à jour d'une Offre </h1>
<form method=\"post\" ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'enctype');
        echo ">
<table>
    
    
    
    <tr>
        <td>
        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "sujetoffre"), 'label');
        echo "
        </td>
        <td>
            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "sujetoffre"), 'widget');
        echo "
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "sujetoffre"), 'errors');
        echo "
        </td>
    </tr>
    
    
    <tr>
        <td>
            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "contenu"), 'label');
        echo "
        </td>
        <td>
           ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "contenu"), 'widget');
        echo "
           ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "contenu"), 'errors');
        echo "
        </td>
    </tr>
   
    
     <tr>
        <td>
            ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "date"), 'label');
        echo "
        </td>
        <td>
           ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "date"), 'widget');
        echo "
           ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "date"), 'errors');
        echo "
        </td>
    </tr>
    
    
    <tr>
        <td>
        ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "idAgence"), 'label');
        echo "
        </td>
        <td>
            ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "idAgence"), 'widget');
        echo "
            ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "idAgence"), 'errors');
        echo "
        </td>
    </tr>
    
    
        
   
    
    
    <tr>
        <td>
            <input type=\"submit\" value=\"Valider\"/>
        </td>
        <td>
             <input type=\"reset\" value=\"Annuler\"/>
        </td>
    </tr>

   
</table>
   ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'rest');
        echo "     
</form>
   
   ";
    }

    public function getTemplateName()
    {
        return "EspritTaxiDriverBundle:ResponsableAgence:updateOffre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 90,  105 => 70,  101 => 69,  95 => 66,  85 => 59,  81 => 58,  75 => 55,  65 => 48,  61 => 47,  55 => 44,  45 => 37,  41 => 36,  35 => 33,  25 => 26,  19 => 22,);
    }
}
