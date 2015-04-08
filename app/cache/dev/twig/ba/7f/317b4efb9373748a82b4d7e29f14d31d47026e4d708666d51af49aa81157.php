<?php

/* EspritTaxiDriverBundle:Administrateur:layout.html.twig */
class __TwigTemplate_ba7f317b4efb9373748a82b4d7e29f14d31d47026e4d708666d51af49aa81157 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'rowfluid' => array($this, 'block_rowfluid'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t
\t<!-- start: Meta -->
\t<meta charset=\"utf-8\">
\t<title>Espace administrateur</title>
\t<meta name=\"description\" content=\"Bootstrap Metro Dashboard\">
\t<meta name=\"author\" content=\"Dennis Ji\">
\t<meta name=\"keyword\" content=\"Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina\">
\t<!-- end: Meta -->
\t
\t<!-- start: Mobile Specific -->
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<!-- end: Mobile Specific -->
\t
\t<!-- start: CSS -->
\t<link id=\"bootstrap-style\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link id=\"base-style\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link id=\"base-style-responsive\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
\t\t<link rel=\"icon\" href=\"img\\car-taxi.png\" type=\"image/png\"></link>
        <!-- end: CSS -->
\t

\t<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
\t<!--[if lt IE 9]>
\t  \t<script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
\t\t<link id=\"ie-style\" href=\"css/ie.css\" rel=\"stylesheet\">
\t<![endif]-->
\t
\t<!--[if IE 9]>
\t\t<link id=\"ie9style\" href=\"css/ie9.css\" rel=\"stylesheet\">
\t<![endif]-->
\t\t
\t<!-- start: Favicon -->
\t<link rel=\"shortcut icon\" href=\"img/favicon.ico\">
\t<!-- end: Favicon -->
\t
\t\t
\t\t
\t\t
</head>

<body>
\t\t<!-- start: Header -->
\t<div class=\"navbar\">
\t\t<div class=\"navbar-inner\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".top-nav.nav-collapse,.sidebar-nav.nav-collapse\">
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t</a>
\t\t\t\t<a class=\"brand\" href=\"index.html\"><span>Administrateur</span></a>
\t\t\t\t\t\t\t\t
\t\t\t\t<!-- start: Header Menu -->
\t\t\t\t<div class=\"nav-no-collapse header-nav\">
\t\t\t\t\t<ul class=\"nav pull-right\">
\t\t\t\t\t\t<li class=\"dropdown hidden-phone\">
\t\t\t\t\t\t\t<a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"halflings-icon white warning-sign\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu notifications\">
\t\t\t\t\t\t\t\t<li class=\"dropdown-menu-title\">
 \t\t\t\t\t\t\t\t\t<span>You have 11 notifications</span>
\t\t\t\t\t\t\t\t\t<a href=\"#refresh\"><i class=\"icon-repeat\"></i></a>
\t\t\t\t\t\t\t\t</li>\t
                            \t<li>
                                    <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon blue\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"message\">New user registration</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"time\">1 min</span> 
                                    </a>
                                </li>
\t\t\t\t\t\t\t\t<li>
                                    <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon green\"><i class=\"icon-comment-alt\"></i></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"message\">New comment</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"time\">7 min</span> 
                                    </a>
                                </li>
\t\t\t\t\t\t\t\t<li>
                                    <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon green\"><i class=\"icon-comment-alt\"></i></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"message\">New comment</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"time\">8 min</span> 
                                    </a>
                                </li>
\t\t\t\t\t\t\t\t<li>
                                    <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon green\"><i class=\"icon-comment-alt\"></i></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"message\">New comment</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"time\">16 min</span> 
                                    </a>
                                </li>
\t\t\t\t\t\t\t\t<li>
                                    <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon blue\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"message\">New user registration</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"time\">36 min</span> 
                                    </a>
                                </li>
\t\t\t\t\t\t\t\t<li>
                                    <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon yellow\"><i class=\"icon-shopping-cart\"></i></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"message\">2 items sold</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"time\">1 hour</span> 
                                    </a>
                                </li>
\t\t\t\t\t\t\t\t<li class=\"warning\">
                                    <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon red\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"message\">User deleted account</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"time\">2 hour</span> 
                                    </a>
                                </li>
\t\t\t\t\t\t\t\t<li class=\"warning\">
                                    <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon red\"><i class=\"icon-shopping-cart\"></i></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"message\">New comment</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"time\">6 hour</span> 
                                    </a>
                                </li>
\t\t\t\t\t\t\t\t<li>
                                    <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon green\"><i class=\"icon-comment-alt\"></i></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"message\">New comment</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"time\">yesterday</span> 
                                    </a>
                                </li>
\t\t\t\t\t\t\t\t<li>
                                    <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon blue\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"message\">New user registration</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"time\">yesterday</span> 
                                    </a>
                                </li>
                                <li class=\"dropdown-menu-sub-footer\">
                            \t\t<a>View all notifications</a>
\t\t\t\t\t\t\t\t</li>\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- start: Notifications Dropdown -->
\t\t\t\t\t\t<li class=\"dropdown hidden-phone\">
\t\t\t\t\t\t\t<a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"halflings-icon white tasks\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu tasks\">
\t\t\t\t\t\t\t\t<li class=\"dropdown-menu-title\">
 \t\t\t\t\t\t\t\t\t<span>You have 17 tasks in progress</span>
\t\t\t\t\t\t\t\t\t<a href=\"#refresh\"><i class=\"icon-repeat\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
                                    <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"header\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">iOS Development</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"percent\"></span>
\t\t\t\t\t\t\t\t\t\t</span>
                                        <div class=\"taskProgress progressSlim red\">80</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"header\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">Android Development</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"percent\"></span>
\t\t\t\t\t\t\t\t\t\t</span>
                                        <div class=\"taskProgress progressSlim green\">47</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"header\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">ARM Development</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"percent\"></span>
\t\t\t\t\t\t\t\t\t\t</span>
                                        <div class=\"taskProgress progressSlim yellow\">32</div> 
                                    </a>
                                </li>
\t\t\t\t\t\t\t\t<li>
                                    <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"header\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">ARM Development</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"percent\"></span>
\t\t\t\t\t\t\t\t\t\t</span>
                                        <div class=\"taskProgress progressSlim greenLight\">63</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"header\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"title\">ARM Development</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"percent\"></span>
\t\t\t\t\t\t\t\t\t\t</span>
                                        <div class=\"taskProgress progressSlim orange\">80</div> 
                                    </a>
                                </li>
\t\t\t\t\t\t\t\t<li>
                            \t\t<a class=\"dropdown-menu-sub-footer\">View all tasks</a>
\t\t\t\t\t\t\t\t</li>\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- end: Notifications Dropdown -->
\t\t\t\t\t\t<!-- start: Message Dropdown -->
\t\t\t\t\t\t<li class=\"dropdown hidden-phone\">
\t\t\t\t\t\t\t<a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"halflings-icon white envelope\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu messages\">
\t\t\t\t\t\t\t\t<li class=\"dropdown-menu-title\">
 \t\t\t\t\t\t\t\t\t<span>You have 9 messages</span>
\t\t\t\t\t\t\t\t\t<a href=\"#refresh\"><i class=\"icon-repeat\"></i></a>
\t\t\t\t\t\t\t\t</li>\t
                            \t<li>
                                    <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"avatar\"><img src=\"img/avatar.jpg\" alt=\"Avatar\"></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"header\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"from\">
\t\t\t\t\t\t\t\t\t\t    \tAdmin
\t\t\t\t\t\t\t\t\t\t     </span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">
\t\t\t\t\t\t\t\t\t\t    \t6 min
\t\t\t\t\t\t\t\t\t\t    </span>
\t\t\t\t\t\t\t\t\t\t</span>
                                        <span class=\"message\">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"avatar\"><img src=\"img/avatar.jpg\" alt=\"Avatar\"></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"header\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"from\">
\t\t\t\t\t\t\t\t\t\t    \tAdmin
\t\t\t\t\t\t\t\t\t\t     </span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">
\t\t\t\t\t\t\t\t\t\t    \t56 min
\t\t\t\t\t\t\t\t\t\t    </span>
\t\t\t\t\t\t\t\t\t\t</span>
                                        <span class=\"message\">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"avatar\"><img src=\"img/avatar.jpg\" alt=\"Avatar\"></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"header\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"from\">
\t\t\t\t\t\t\t\t\t\t    \tAdmin
\t\t\t\t\t\t\t\t\t\t     </span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">
\t\t\t\t\t\t\t\t\t\t    \t3 hours
\t\t\t\t\t\t\t\t\t\t    </span>
\t\t\t\t\t\t\t\t\t\t</span>
                                        <span class=\"message\">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
\t\t\t\t\t\t\t\t<li>
                                    <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"avatar\"><img src=\"img/admin.png\" alt=\"Avatar\"></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"header\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"from\">
\t\t\t\t\t\t\t\t\t\t    \tAdmin
\t\t\t\t\t\t\t\t\t\t     </span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">
\t\t\t\t\t\t\t\t\t\t    \tyesterday
\t\t\t\t\t\t\t\t\t\t    </span>
\t\t\t\t\t\t\t\t\t\t</span>
                                        <span class=\"message\">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<span class=\"avatar\"><img src=\"img/avatar.jpg\" alt=\"Avatar\"></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"header\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"from\">
\t\t\t\t\t\t\t\t\t\t    \tAdmin
\t\t\t\t\t\t\t\t\t\t     </span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">
\t\t\t\t\t\t\t\t\t\t    \tJul 25, 2012
\t\t\t\t\t\t\t\t\t\t    </span>
\t\t\t\t\t\t\t\t\t\t</span>
                                        <span class=\"message\">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
\t\t\t\t\t\t\t\t<li>
                            \t\t<a class=\"dropdown-menu-sub-footer\">View all messages</a>
\t\t\t\t\t\t\t\t</li>\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- end: Message Dropdown -->
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"btn\" href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"halflings-icon white wrench\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- start: User Dropdown -->
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"halflings-icon white user\"></i> Admin
\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li class=\"dropdown-menu-title\">
 \t\t\t\t\t\t\t\t\t<span>Account Settings</span>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"halflings-icon user\"></i> Profil</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"login.html\"><i class=\"halflings-icon off\"></i> Déconnexion</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- end: User Dropdown -->
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<!-- end: Header Menu -->
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- start: Header -->
\t
\t\t<div class=\"container-fluid-full\">
\t\t<div class=\"row-fluid\">
\t\t\t\t
\t\t\t<!-- start: Main Menu -->
\t\t\t<div id=\"sidebar-left\" class=\"span2\">
\t\t\t\t<div class=\"nav-collapse sidebar-nav\">
\t\t\t\t\t<ul class=\"nav nav-tabs nav-stacked main-menu\">
\t\t\t\t\t\t<li><a href=";
        // line 338
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_admin_homepage");
        echo "><i class=\"icon-bar-chart\"></i><span class=\"hidden-tablet\"> Dashboard</span></a></li>\t
\t\t\t\t\t\t<li><a href=";
        // line 339
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_admin_mail_sendMail");
        echo "><i class=\"icon-envelope\"></i><span class=\"hidden-tablet\"> Email</span></a></li>
\t\t\t\t\t\t<li><a href=";
        // line 340
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_admin_listClient");
        echo "><i class=\"icon-tasks\"></i><span class=\"hidden-tablet\"> Gestion clients</span></a></li>
                                                <li><a href=";
        // line 341
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_admin_listResp");
        echo "><i class=\"icon-tasks\"></i><span class=\"hidden-tablet\"> Gestion responsables</span></a></li>
                                                <li><a href=\"";
        // line 342
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_admin_listAgence");
        echo "\"><i class=\"icon-align-justify\"></i><span class=\"hidden-tablet\"> Gestion agences</span></a></li>
                                                <li><a href=\"";
        // line 343
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_admin_com");
        echo "\"><i class=\"icon-font\"></i><span class=\"hidden-tablet\"> Gestion commentaires</span></a></li>
\t\t\t\t\t\t<!--<li><a href=\"ui.html\"><i class=\"icon-eye-open\"></i><span class=\"hidden-tablet\"> UI Features</span></a></li>-->

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<!--<a class=\"dropmenu\" href=\"#\"><i class=\"icon-folder-close-alt\"></i><span class=\"hidden-tablet\"> Dropdown</span><span class=\"label label-important\"> 3 </span></a>-->
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a class=\"submenu\" href=\"submenu.html\"><i class=\"icon-file-alt\"></i><span class=\"hidden-tablet\"> Sub Menu 1</span></a></li>
\t\t\t\t\t\t\t\t<li><a class=\"submenu\" href=\"submenu2.html\"><i class=\"icon-file-alt\"></i><span class=\"hidden-tablet\"> Sub Menu 2</span></a></li>
\t\t\t\t\t\t\t\t<li><a class=\"submenu\" href=\"submenu3.html\"><i class=\"icon-file-alt\"></i><span class=\"hidden-tablet\"> Sub Menu 3</span></a></li>
\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"";
        // line 354
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_admin_taxi_voit");
        echo "\"><i class=\"icon-edit\"></i><span class=\"hidden-tablet\"> Consulter voitures</span></a></li>
                                                <li><a href=\"";
        // line 355
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_admin_offre");
        echo "\"><i class=\"icon-edit\"></i><span class=\"hidden-tablet\"> Consulter offres</span></a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 356
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_admin_hist");
        echo "\"><i class=\"icon-list-alt\"></i><span class=\"hidden-tablet\"> Statistiques</span></a></li>
\t\t\t\t\t\t<!--<li><a href=\"gallery.html\"><i class=\"icon-picture\"></i><span class=\"hidden-tablet\"> Gallery</span></a></li>-->
\t\t\t\t\t\t<li><a href=\"";
        // line 358
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_admin_calendrier");
        echo "\"><i class=\"icon-calendar\"></i><span class=\"hidden-tablet\"> Calendrier</span></a></li>
\t\t\t\t\t\t<!--<li><a href=\"file-manager.html\"><i class=\"icon-folder-open\"></i><span class=\"hidden-tablet\"> File Manager</span></a></li>-->
\t\t\t\t\t\t<!--<li><a href=\"icon.html\"><i class=\"icon-star\"></i><span class=\"hidden-tablet\"> Icons</span></a></li>-->
\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end: Main Menu -->
\t\t\t
\t\t\t<noscript>
\t\t\t\t<div class=\"alert alert-block span10\">
\t\t\t\t\t<h4 class=\"alert-heading\">Warning!</h4>
\t\t\t\t\t<p>You need to have <a href=\"http://en.wikipedia.org/wiki/JavaScript\" target=\"_blank\">JavaScript</a> enabled to use this site.</p>
\t\t\t\t</div>
\t\t\t</noscript>
\t\t\t
\t\t\t<!-- start: Content -->
\t\t\t<div id=\"content\" class=\"span10\">
\t\t\t
\t\t\t
                            ";
        // line 378
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 380
        echo "                        
                       
                        
\t                ";
        // line 383
        $this->displayBlock('rowfluid', $context, $blocks);
        // line 384
        echo "\t\t

\t\t\t
\t\t\t
       

\t</div><!--/.fluid-container-->
\t
\t\t\t<!-- end: Content -->
\t\t</div><!--/#content.span10-->
\t\t</div><!--/fluid-row-->
\t\t
\t<div class=\"modal hide fade\" id=\"myModal\">
\t\t<div class=\"modal-header\">
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
\t\t\t<h3>Settings</h3>
\t\t</div>
\t\t<div class=\"modal-body\">
\t\t\t<p>Here settings can be configured...</p>
\t\t</div>
\t\t<div class=\"modal-footer\">
\t\t\t<a href=\"#\" class=\"btn\" data-dismiss=\"modal\">Close</a>
\t\t\t<a href=\"#\" class=\"btn btn-primary\">Save changes</a>
\t\t</div>
        </div>
\t
\t<div class=\"clearfix\"></div>
\t
\t<footer>

\t\t
\t\t\t<span style=\"text-align:center;float:center\">&copy; 2015 <a href=\"http://jiji262.github.io/Bootstrap_Metro_Dashboard/\" alt=\"Bootstrap_Metro_Dashboard\">DevStars</a></span>
\t\t\t
\t\t

\t</footer>
\t
\t<!-- start: JavaScript-->

\t\t<script src=\"js/jquery-1.9.1.min.js\"></script>
\t<script src=\"js/jquery-migrate-1.0.0.min.js\"></script>
\t
\t\t<script src=\"js/jquery-ui-1.10.0.custom.min.js\"></script>
\t
\t\t<script src=\"js/jquery.ui.touch-punch.js\"></script>
\t
\t\t<script src=\"js/modernizr.js\"></script>
\t
\t\t<script src=\"js/bootstrap.min.js\"></script>
\t
\t\t<script src=\"js/jquery.cookie.js\"></script>
\t
\t\t<script src='js/fullcalendar.min.js'></script>
\t
\t\t<script src='js/jquery.dataTables.min.js'></script>

\t\t<script src=\"js/excanvas.js\"></script>
\t<script src=\"js/jquery.flot.js\"></script>
\t<script src=\"js/jquery.flot.pie.js\"></script>
\t<script src=\"js/jquery.flot.stack.js\"></script>
\t<script src=\"js/jquery.flot.resize.min.js\"></script>
\t
\t\t<script src=\"js/jquery.chosen.min.js\"></script>
\t
\t\t<script src=\"js/jquery.uniform.min.js\"></script>
\t\t
\t\t<script src=\"js/jquery.cleditor.min.js\"></script>
\t
\t\t<script src=\"js/jquery.noty.js\"></script>
\t
\t\t<script src=\"js/jquery.elfinder.min.js\"></script>
\t
\t\t<script src=\"js/jquery.raty.min.js\"></script>
\t
\t\t<script src=\"js/jquery.iphone.toggle.js\"></script>
\t
\t\t<script src=\"js/jquery.uploadify-3.1.min.js\"></script>
\t
\t\t<script src=\"js/jquery.gritter.min.js\"></script>
\t
\t\t<script src=\"js/jquery.imagesloaded.js\"></script>
\t
\t\t<script src=\"js/jquery.masonry.min.js\"></script>
\t
\t\t<script src=\"js/jquery.knob.modified.js\"></script>
\t
\t\t<script src=\"js/jquery.sparkline.min.js\"></script>
\t
\t\t<script src=\"js/counter.js\"></script>
\t
\t\t<script src=\"js/retina.js\"></script>

\t\t<script src=\"js/custom.js\"></script>
\t<!-- end: JavaScript-->
\t
</body>
</html>
";
    }

    // line 378
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 379
        echo "                        ";
    }

    // line 383
    public function block_rowfluid($context, array $blocks = array())
    {
        // line 384
        echo "                        ";
    }

    public function getTemplateName()
    {
        return "EspritTaxiDriverBundle:Administrateur:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  562 => 384,  559 => 383,  555 => 379,  552 => 378,  451 => 384,  449 => 383,  444 => 380,  442 => 378,  419 => 358,  414 => 356,  410 => 355,  406 => 354,  392 => 343,  388 => 342,  384 => 341,  380 => 340,  376 => 339,  372 => 338,  52 => 21,  48 => 20,  44 => 19,  40 => 18,  21 => 1,);
    }
}
