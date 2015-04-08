<?php

/* EspritTaxiDriverBundle:Mail:formMail.html.twig */
class __TwigTemplate_3043cce608e395c68f6ecb8c1fb602106036fbd718d1ed7bed9d2f998714edaa extends Twig_Template
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
        echo "<html>
    <head>
    <center>
        <title> Envoyer un mail </title>
    </head>
    <form action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_mail_sendMail");
        echo "\" method=\"Post\" >
        <h1> Contactez Nous </h1>
        </br>
        </br>
        </br>
        <h2> Sujet </h2>
        <input type=\"text\" name =\"Subject\">
        </br>
        <h2> Mail destination </h2>
        <input type=\"text\" name =\"email\">
        </br>
        <h2> Texte Mail </h2>
        <textarea name=\"message\"> </textarea>
        <br>
        <input type=\"submit\" value=\"Send\"/>
        </br>
    </form>
</center>
</html>   ";
    }

    public function getTemplateName()
    {
        return "EspritTaxiDriverBundle:Mail:formMail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 7,  19 => 2,);
    }
}
