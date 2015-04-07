<?php

/* EspritTaxiDriverBundle::layout.html.twig */
class __TwigTemplate_930e33b8ef8513dbcb5e6bcce801a1007f9b7e02f43bf715be827ba1a506c6bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'navbar' => array($this, 'block_navbar'),
            'slider' => array($this, 'block_slider'),
            'pub' => array($this, 'block_pub'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>

                                        \t
    <head>
        ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 30
        echo "\t</head>
        
        
        <body>
\t\t<!---strat-wrap----->
\t\t
\t\t\t<!---strat-header----->
\t\t\t<div class=\"header\"  id=\"top\">
\t\t\t\t<div class=\"wrap\">
\t\t\t\t\t<!---start-logo---->
\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t<a href=\"index.html\"><img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo1.png"), "html", null, true);
        echo "\" title=\"logo\" /></a>
\t\t\t\t\t</div>
\t\t\t\t\t<!---End-logo---->
\t\t\t\t\t<!---start-top-nav---->
                                        
                                        ";
        // line 46
        $this->displayBlock('navbar', $context, $blocks);
        // line 48
        echo "\t\t\t\t\t
\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t<!---End-top-nav---->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!---End-header----->
\t\t\t<!--start-image-slider---->
\t\t\t\t
                            ";
        // line 56
        $this->displayBlock('slider', $context, $blocks);
        // line 58
        echo "\t\t\t\t\t\t\t\t
\t\t <!--End-image-slider---->
\t\t <!---start-contnet---->
\t\t <div class=\"content\">
                     ";
        // line 62
        $this->displayBlock('pub', $context, $blocks);
        // line 65
        echo "\t\t \t</div>
\t\t \t<div class=\"mid-grids\">
\t\t \t\t<div class=\"wrap\">
                                    ";
        // line 68
        $this->displayBlock('content', $context, $blocks);
        // line 71
        echo "\t\t \t\t</div>
\t\t \t</div>
\t\t \t<div class=\"bottom-grids\">
                            
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
\t\t </div>
\t\t <!---End-contnet---->
\t\t</div>
\t\t<!---End-wrap----->
\t</body>
</html>

";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "\t\t<title>TaxiDriver</title>
\t\t<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"  media=\"all\" />
\t\t<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Open+Sans"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css'>
\t\t<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/slider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"  media=\"all\" />
\t\t  <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t  <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script> 
\t\t    <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/camera.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script type=\"text/javascript\">
\t\t\t   jQuery(function(){
\t\t\t\tjQuery('#camera_wrap_1').camera({
\t\t\t\t\theight: '500px',
\t\t\t\t\tpagination: false,
\t\t\t\t});
\t\t\t});
\t\t  </script>
\t\t  <script type=\"text/javascript\">
\t\t\tjQuery(document).ready(function(\$) {
\t\t\t\t\$(\".scroll\").click(function(event){\t\t
\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\$('html,body').animate({scrollTop:\$(this.hash).offset().top},1200);
\t\t\t\t});
\t\t\t});
\t\t</script>
                ";
    }

    // line 46
    public function block_navbar($context, array $blocks = array())
    {
        // line 47
        echo "                                        ";
    }

    // line 56
    public function block_slider($context, array $blocks = array())
    {
        // line 57
        echo "                            ";
    }

    // line 62
    public function block_pub($context, array $blocks = array())
    {
        // line 63
        echo "\t\t \t
                                ";
    }

    // line 68
    public function block_content($context, array $blocks = array())
    {
        // line 69
        echo "\t\t\t \t\t
                                        ";
    }

    public function getTemplateName()
    {
        return "EspritTaxiDriverBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 69,  192 => 68,  187 => 63,  184 => 62,  180 => 57,  177 => 56,  173 => 47,  170 => 46,  148 => 12,  144 => 11,  140 => 10,  136 => 9,  132 => 8,  128 => 7,  125 => 6,  122 => 5,  80 => 68,  75 => 65,  73 => 62,  67 => 58,  65 => 56,  53 => 46,  45 => 41,  32 => 30,  24 => 1,  118 => 49,  103 => 36,  100 => 35,  90 => 28,  86 => 27,  82 => 71,  78 => 25,  74 => 24,  70 => 23,  66 => 22,  62 => 21,  58 => 19,  55 => 48,  41 => 7,  36 => 5,  33 => 4,  30 => 5,);
    }
}
