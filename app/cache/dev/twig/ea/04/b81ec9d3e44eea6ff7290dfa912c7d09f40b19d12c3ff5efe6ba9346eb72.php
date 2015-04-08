<?php

/* EspritTaxiDriverBundle:administrateur:accueil.html.twig */
class __TwigTemplate_ea04b81ec9d3e44eea6ff7290dfa912c7d09f40b19d12c3ff5efe6ba9346eb72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EspritTaxiDriverBundle:Administrateur:layout.html.twig");

        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'rowfluid' => array($this, 'block_rowfluid'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspritTaxiDriverBundle:Administrateur:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 3
        echo "    
<ul class=\"breadcrumb\">
\t\t\t\t<li>
\t\t\t\t\t<i class=\"icon-home\"></i>
\t\t\t\t\t<a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_admin_homepage");
        echo "\">Accueil</a> 
\t\t\t\t\t<i class=\"icon-angle-right\"></i>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"#\">Dashboard</a></li>
\t\t\t</ul>    
";
    }

    // line 14
    public function block_rowfluid($context, array $blocks = array())
    {
        // line 15
        echo "
 <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
  <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 120%;
      margin: auto;
      
    height: 50%;
  }


  </style>
       <div class=\"container\">
  
    <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
    <!-- Indicators -->
    <ol class=\"carousel-indicators\">
      <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class=\"carousel-inner\" role=\"listbox\">
      <div class=\"item active\">
        <img src=\"img\\taxi1.JPG\" alt=\"Chania\" width=\"400\" height=\"50\">
      </div>

      <div class=\"item\">
        <img src=\"img\\taxi1.jpg\" alt=\"Chania\" width=\"400\" height=\"50\">
      </div>
    
      <div class=\"item\">
        <img src=\"img\\taxi1.jpg\" alt=\"Flower\" width=\"400\" height=\"50\">
      </div>

      <div class=\"item\">
        <img src=\"img\\taxi1.jpg\" alt=\"Flower\" width=\"400\" height=\"50\">
      </div>
    </div>

    <!-- Left and right controls -->





<div class=\"row\">
    <div class=\"box1\"   margin-top=\"50px\">
                                 <a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_admin_taxi_voit");
        echo "\" class=\"quick-button metro black span8\">
\t\t\t\t\t<i class=\"icon-envelope\"></i>
\t\t\t\t\t<p>Email</p>
\t\t\t\t\t<span class=\"badge\"></span>
\t\t\t\t</a>

    </div>
  
            <div class=\"box1\">                           
\t\t\t\t<a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("listClient");
        echo "\" class=\"quick-button metro yellow span8\">
                                    <i class=\"icon-group\"></i>
\t\t\t\t\t<p>Clients</p>
\t\t\t\t\t<span class=\"badge\"></span>
\t\t\t\t</a>
                                        </div>
                                      
                                    
                                  <div class=\"box1\">
                                    
                                 <a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("listAgence");
        echo "\" class=\"quick-button metro black span8\">
\t\t\t\t\t<i class=\"icon-shopping-cart\"></i>
\t\t\t\t\t<p>Agences</p>
\t\t\t\t\t<span class=\"badge\"></span>
\t\t\t\t</a>
                                  </div>
                                    

                                  <div class=\"box1\">
\t\t\t\t<a href=\"";
        // line 98
        echo $this->env->getExtension('routing')->getPath("pidev_taxi_com");
        echo "\" class=\"quick-button metro yellow span8\">
\t\t\t\t\t<i class=\"icon-comments-alt\"></i>
\t\t\t\t\t<p>Commentaires</p>
\t\t\t\t\t<span class=\"badge\"></span>
\t\t\t\t</a>
                                  </div>
                                        <div class=\"box1\">
                                    
                                     <a href=\"";
        // line 106
        echo $this->env->getExtension('routing')->getPath("pidev_taxi_voit");
        echo "\" class=\"quick-button metro yellow span8\">
\t\t\t\t\t<i class=\"icon-shopping-cart\"></i>
                                        
\t\t\t\t\t<p>Voitures</p>
\t\t\t\t</a>
                                        </div>
                                        
                                        <div class=\"box1\">
\t\t\t\t<a href=\"";
        // line 114
        echo $this->env->getExtension('routing')->getPath("pidev_taxi_offre");
        echo "\" class=\"quick-button metro black span8\">
\t\t\t\t\t<i class=\"icon-barcode\"></i>
\t\t\t\t\t<p>Offres</p>
\t\t\t\t</a>
                                          
                                        </div>
                                        <div class=\"box1\">
\t\t\t\t<a href=\"";
        // line 121
        echo $this->env->getExtension('routing')->getPath("pidev_taxi_voit");
        echo "\" class=\"quick-button metro yellow span8\">
\t\t\t\t\t<i class=\"icon-calendar\"></i>
\t\t\t\t\t<p>Statistiques</p>
\t\t\t\t</a>
                                        </div>
                                        
                                        <div class=\"box1\">
                                          
                                    <a href=\"";
        // line 129
        echo $this->env->getExtension('routing')->getPath("pidev_taxi_cal");
        echo "\" class=\"quick-button metro black span8\">
\t\t\t\t\t<i class=\"icon-calendar\"></i>
\t\t\t\t\t<p>Calendrier</p>
\t\t\t\t</a>
                                        </div>
                                         
                                    
                                   
\t\t\t\t
\t\t\t\t<div class=\"clearfix\"></div>
                                
\t\t\t\t\t\t\t\t
\t\t\t</div><!--/row-->
                   
                        
  <br>

                     
                        
                        ";
    }

    public function getTemplateName()
    {
        return "EspritTaxiDriverBundle:administrateur:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 129,  177 => 121,  167 => 114,  156 => 106,  145 => 98,  133 => 89,  120 => 79,  108 => 70,  51 => 15,  48 => 14,  38 => 7,  32 => 3,  29 => 2,);
    }
}
