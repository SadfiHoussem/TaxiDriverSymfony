<?php

/* EspritTaxiDriverBundle::layout2.html.twig */
class __TwigTemplate_50dc6797469041a37341a56ed0ef8578308b605243b07594664277b3816a80f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'navbar' => array($this, 'block_navbar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

<html>
\t<head>
\t\t<title>CITY TAXI Website Template | whatwedo :: W3layouts</title>
\t\t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"  media=\"all\" />
\t\t<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Open+Sans"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css'>
\t\t  <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t  <script type=\"text/javascript\">
\t\t\tjQuery(document).ready(function(\$) {
\t\t\t\t\$(\".scroll\").click(function(event){\t\t
\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\$('html,body').animate({scrollTop:\$(this.hash).offset().top},1200);
\t\t\t\t});
\t\t\t});
\t\t</script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.lightbox.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/lightbox.css"), "html", null, true);
        echo "\" media=\"screen\">
\t\t\t\t  \t<script type=\"text/javascript\">
\t\t\t\t    \$(function() {
\t\t\t\t        \$('.gallery-grid a').lightBox();
\t\t\t\t    });
\t\t\t\t    </script>
                                    
                                    ";
        // line 25
        $this->displayBlock('head', $context, $blocks);
        // line 27
        echo "\t</head>
        
\t<body>
\t\t<!---strat-wrap----->
\t\t
\t\t\t<!---strat-header----->
\t\t\t<div class=\"header\"  id=\"top\">
\t\t\t\t<div class=\"wrap\">
\t\t\t\t\t<!---start-logo---->
\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t<a href=\"index.html\"><img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo1.png"), "html", null, true);
        echo "\"title=\"logo\" /></a>
\t\t\t\t\t</div>
\t\t\t\t\t<!---End-logo---->
\t\t\t\t\t<!---start-top-nav---->
                                         
                                        ";
        // line 42
        $this->displayBlock('navbar', $context, $blocks);
        // line 44
        echo "\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t<!---End-top-nav---->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!---End-header----->
\t";
        // line 49
        $this->displayBlock('content', $context, $blocks);
        // line 51
        echo "    
\t\t</div>
\t\t<!---End-wrap----->
                
                 \t<div class=\"bottom-grids\">
                            
\t\t \t\t<div class=\"wrap\">
\t\t \t\t<div class=\"social-links\">
\t\t \t\t\t<ul>
\t\t \t\t\t\t<li><a href=\"#\">Facebook</a></li>
\t\t \t\t\t\t<li><a href=\"#\">Twitter</a></li>
\t\t \t\t\t\t<li><a href=\"#\">Google+</a></li>
\t\t \t\t\t\t<li><a href=\"#\">Linkedin</a></li>
\t\t \t\t\t</ul>
\t\t \t\t</div>
\t\t \t\t<div class=\"mobile-no\">
\t\t \t\t\t <span>+216 22 540 763</span>
\t\t \t\t</div>
\t\t \t\t<div class=\"footer-logo\">
\t\t \t\t\t<a href=\"#\">TaxiDriver</a>
\t\t \t\t</div>
\t\t \t\t<div class=\"copy-right\">
\t\t \t\t\t<p>Devstars</p>
\t\t \t\t</div>
\t\t \t\t<div class=\"top-to-page\">
\t\t\t\t\t\t<a href=\"#top\" class=\"scroll\"> </a>
\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t</div>
\t\t \t</div>
                           
\t\t \t</div>
\t</body>
</html>

";
    }

    // line 25
    public function block_head($context, array $blocks = array())
    {
        // line 26
        echo "                                        ";
    }

    // line 42
    public function block_navbar($context, array $blocks = array())
    {
        // line 43
        echo "                                        ";
    }

    // line 49
    public function block_content($context, array $blocks = array())
    {
        // line 50
        echo "            
        ";
    }

    public function getTemplateName()
    {
        return "EspritTaxiDriverBundle::layout2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 50,  148 => 49,  144 => 43,  141 => 42,  137 => 26,  134 => 25,  96 => 51,  94 => 49,  85 => 42,  65 => 27,  63 => 25,  53 => 18,  49 => 17,  37 => 8,  33 => 7,  22 => 1,  199 => 90,  192 => 85,  181 => 81,  177 => 80,  171 => 77,  167 => 76,  164 => 75,  160 => 73,  156 => 71,  154 => 70,  150 => 69,  146 => 68,  143 => 67,  139 => 66,  103 => 33,  99 => 32,  95 => 31,  91 => 30,  87 => 44,  83 => 28,  80 => 27,  77 => 37,  68 => 17,  64 => 16,  60 => 15,  56 => 14,  52 => 13,  48 => 12,  44 => 11,  40 => 10,  36 => 9,  32 => 7,  29 => 6,);
    }
}
