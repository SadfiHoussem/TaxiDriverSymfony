<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_e9af29ee4f677b244ae472b4f1f918c75e33ddce3af4e7c34e128dde8451b463 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData"), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "

<head>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
\t<meta name=\"viewport\" content=\"width=1,initial-scale=1,user-scalable=1\" />
\t<title>Page login</title>

\t<link href=\"http://fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400italic,400,700italic,700,900italic,900\" rel=\"stylesheet\" type=\"text/css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css5/styles.css"), "html", null, true);
        echo "\" />
\t
\t<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body>
\t<section class=\"container login-form\">
\t\t<section>
\t\t\t
\t\t\t\t<form action=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" role=\"login\">
                                    
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

    
\t\t\t\t<div class=\"form-group\">
                                   <span class=\"glyphicon glyphicon-user\"></span> 
                                   <label for=\"username\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                                    
\t\t\t\t\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" class=\"form-control\" placeholder= \"Enter username\" />
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
                                        
                                        
\t\t\t\t<div class=\"form-group\">
                                     <span class=\"glyphicon glyphicon-lock\"></span>
                                     <label for=\"password\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t\t\t\t   <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" placeholder= \"Entrer password\" />
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t\t\t
                                
                                
                                <!--   <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />-->
    <label for=\"remember_me\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label> 
     <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-warning btn-block\"/>
    
\t\t\t\t<a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">create account</a> 
\t\t\t</form>
\t\t</section>
\t</section>

\t
\t<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
\t<script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js5/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
</body>
</html>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 67,  119 => 60,  114 => 58,  110 => 57,  97 => 47,  86 => 39,  81 => 37,  73 => 32,  68 => 30,  53 => 18,  49 => 17,  39 => 9,  33 => 7,  31 => 6,  28 => 5,);
    }
}
