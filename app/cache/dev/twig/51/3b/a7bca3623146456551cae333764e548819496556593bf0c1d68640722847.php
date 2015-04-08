<?php

/* EspritTaxiDriverBundle::layout.html.twig */
class __TwigTemplate_513ba7bca3623146456551cae333764e548819496556593bf0c1d68640722847 extends Twig_Template
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
        echo "                <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css1/bootstrap2.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css1/dataTables.bootstrap.css"), "html", null, true);
        echo "\">
    
\t</head>
        
        
        <body>
\t\t<!---strat-wrap----->
\t\t
\t\t\t<!---strat-header----->
\t\t\t<div class=\"header\"  id=\"top\">
\t\t\t\t<div class=\"wrap\">
\t\t\t\t\t<!---start-logo---->
\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t<a href=\"index.html\"><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo1.png"), "html", null, true);
        echo "\" title=\"logo\" /></a>
\t\t\t\t\t</div>
\t\t\t\t\t<!---End-logo---->
\t\t\t\t\t<!---start-top-nav---->
                                        
                                        ";
        // line 49
        $this->displayBlock('navbar', $context, $blocks);
        // line 51
        echo "\t\t\t\t\t
\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t<!---End-top-nav---->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!---End-header----->
\t\t\t<!--start-image-slider---->
\t\t\t\t
                            ";
        // line 59
        $this->displayBlock('slider', $context, $blocks);
        // line 61
        echo "\t\t\t\t\t\t\t\t
\t\t <!--End-image-slider---->
\t\t <!---start-contnet---->
\t\t <div class=\"content\">
                     ";
        // line 65
        $this->displayBlock('pub', $context, $blocks);
        // line 68
        echo "\t\t \t</div>
\t\t \t<div class=\"mid-grids\">
\t\t \t\t<div class=\"wrap\">
                                    ";
        // line 71
        $this->displayBlock('content', $context, $blocks);
        // line 74
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

    // line 49
    public function block_navbar($context, array $blocks = array())
    {
        // line 50
        echo "                                        ";
    }

    // line 59
    public function block_slider($context, array $blocks = array())
    {
        // line 60
        echo "                            ";
    }

    // line 65
    public function block_pub($context, array $blocks = array())
    {
        // line 66
        echo "\t\t \t
                                ";
    }

    // line 71
    public function block_content($context, array $blocks = array())
    {
        // line 72
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
        return array (  203 => 72,  200 => 71,  195 => 66,  192 => 65,  188 => 60,  185 => 59,  181 => 50,  178 => 49,  156 => 12,  152 => 11,  148 => 10,  144 => 9,  140 => 8,  136 => 7,  133 => 6,  130 => 5,  90 => 74,  88 => 71,  83 => 68,  81 => 65,  75 => 61,  73 => 59,  63 => 51,  61 => 49,  53 => 44,  37 => 31,  30 => 5,  24 => 1,  97 => 27,  93 => 26,  89 => 25,  85 => 23,  82 => 22,  72 => 15,  68 => 14,  64 => 13,  60 => 12,  56 => 11,  52 => 10,  48 => 9,  44 => 8,  40 => 7,  36 => 6,  32 => 30,  29 => 3,);
    }
}
