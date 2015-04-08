<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_f568162ce97e366a0bc82c02e88b104358805e536a7176d79ac15dc5c2efe828 extends Twig_Template
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
        echo "<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <title>Taxi Driver</title>
\t<!-- BOOTSTRAP STYLES-->
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css5/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
     <!-- FONTAWESOME STYLES-->
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css5/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <!-- CUSTOM STYLES-->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css5/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
     </head>
<body>
    <div class=\"container\">
        <div class=\"row text-center  \">
            <div class=\"col-md-12\">
                <br /><br />
                <h2> Taxi Driver</h2>
               
                <h5>( Register yourself to get access )</h5>
                 <br />
            </div>
        </div>
         <div class=\"row\">
               
                <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                        <strong>  New User ? Register Yourself </strong>  
                            </div>
                            <div class=\"panel-body\">

<form action=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
    <div class=\"form-group input-group\">
                                            <span class=\"input-group-addon\"><i class=\"fa fa-circle-o-notch\"  ></i></span>
                                            <input type=\"text\" class=\"form-control\" placeholder=\"Your Name\" />
                                        </div>
                                     
                                         <div class=\"form-group input-group\">
                                            <span class=\"input-group-addon\">@</span>
                                            <input type=\"text\" class=\"form-control\" placeholder=\"Your Email\" />
                                        </div>
                                      <div class=\"form-group input-group\">
                                            <span class=\"input-group-addon\"><i class=\"fa fa-lock\"  ></i></span>
                                            <input type=\"password\" class=\"form-control\" placeholder=\"Enter Password\" />
                                        </div>
                                     <div class=\"form-group input-group\">
                                            <span class=\"input-group-addon\"><i class=\"fa fa-lock\"  ></i></span>
                                            <input type=\"password\" class=\"form-control\" placeholder=\"Retype Password\" />
                                        </div>
                                   
                                       <div>
        <input type=\"submit\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-warning\"/>
    </div>
                                    <hr />
                                    Already Registered ?  <a href=\"login.html\" >Login here</a>
                                    
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- METISMENU SCRIPTS -->
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.metisMenu.js"), "html", null, true);
        echo "\"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
   
</body>
</html>

    
  
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 82,  122 => 80,  117 => 78,  112 => 76,  91 => 58,  66 => 38,  37 => 12,  32 => 10,  27 => 8,  19 => 2,);
    }
}
