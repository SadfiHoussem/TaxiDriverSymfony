<?php

/* EspritTaxiDriverBundle:ResponsableAgence:contact.html.twig */
class __TwigTemplate_6802741a08ee5df4c0467bc628107b11cf9f384425aace4b5624a07404ad78a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EspritTaxiDriverBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'navbar' => array($this, 'block_navbar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspritTaxiDriverBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "<title>CITY TAXI Website Template | Contact :: W3layouts</title>
\t\t<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"  media=\"all\" />
\t\t<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
\t\t  <script src=\"";
        // line 7
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
";
    }

    // line 18
    public function block_navbar($context, array $blocks = array())
    {
        // line 19
        echo "<div class=\"top-nav\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_homepage");
        echo "\">Accueil</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_a_propos");
        echo "\">A propos</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Profile</a></li>
                                                        <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_affi_agence");
        echo "\">Nos agences</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listOffre");
        echo "\">Offres</a></li>
                                                        <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listRNCreclamation");
        echo "\"> Reclamations  </a></li>
                                                        <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listChauffeur");
        echo "\">Chauffeurs</a></li>
                                                        <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listVoiture");
        echo "\">Vehicules</a></li>
                                                        <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_resp_agence_listTrajet");
        echo "\"> Trajet </a></li>
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("esprit_taxidriver_contact");
        echo "\">Contact</a></li>
\t\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t\t</ul>
                                            
\t\t\t\t\t</div>
";
    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
        // line 38
        echo "
\t\t
\t\t\t
\t\t <!---start-contnet---->
\t\t <div class=\"content\">
\t\t \t<!---start-contact----->
\t\t \t<div class=\"contact\">
\t\t \t\t<div class=\"wrap\">
\t\t\t\t<div class=\"section group\">\t\t\t\t
\t\t\t\t<div class=\"col span_1_of_3\">
\t\t\t\t\t<div class=\"contact_info\">
\t\t\t    \t \t<h3>Find Us Here</h3>
\t\t\t    \t \t\t<div class=\"map\">
\t\t\t\t\t   \t\t\t<iframe width=\"100%\" height=\"175\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://www.google.tn/maps/place/Esprit+Pr%C3%A9pa/@36.898482,10.189762,17z/data=!3m1!4b1!4m2!3m1!1s0x12e2cb7454c6ed51:0xcb5e71cbf91ec526"), "html", null, true);
        echo "\"></iframe><br><small><a href=\"https://www.google.fr/maps/place/ESPRIT/@36.8991406,10.1895187,17z/data=!4m7!1m4!3m3!1s0x12e2cb7454c6ed51:0x683b3ab5565cd357!2sESPRIT!3b1!3m1!1s0x12e2cb7454c6ed51:0x683b3ab5565cd357\" style=\"color:#666;text-align:left;font-size:12px\">View Larger Map</a></small>
\t\t\t\t\t   \t\t</div>
      \t\t\t\t</div>
      \t\t\t<div class=\"company_address\">
\t\t\t\t     \t<h3>Company Information :</h3>
\t\t\t\t\t\t    \t<p>EL-Ghazala,Cebalat,Tunisie</p>
\t\t\t\t\t\t   \t\t<p>22-56-2-9 Sit Amet, Lorem,</p>
\t\t\t\t\t\t   \t\t<p>Tunisie</p>
\t\t\t\t   \t\t<p>Phone:(00) 222 666 444</p>
\t\t\t\t   \t\t<p>Fax: (000) 000 00 00 0</p>
\t\t\t\t \t \t<p>Email: <span>info@taxidriver.com</span></p>
\t\t\t\t   \t\t<p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>
\t\t\t\t   </div>
\t\t\t\t</div>\t\t\t\t
\t\t\t\t<div class=\"col span_2_of_3\">
\t\t\t\t  <div class=\"contact-form\">
\t\t\t\t  \t<h3>Contact Us</h3>
\t\t\t\t\t    <form method=\"post\" action=\"contact-post.html\">
\t\t\t\t\t    \t<div>
\t\t\t\t\t\t    \t<span><label>NOM</label></span>
\t\t\t\t\t\t    \t<span><input name=\"userName\" type=\"text\" class=\"textbox\"></span>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div>
\t\t\t\t\t\t    \t<span><label>E-MAIL</label></span>
\t\t\t\t\t\t    \t<span><input name=\"userEmail\" type=\"text\" class=\"textbox\"></span>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div>
\t\t\t\t\t\t     \t<span><label>MOBILE</label></span>
\t\t\t\t\t\t    \t<span><input name=\"userPhone\" type=\"text\" class=\"textbox\"></span>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div>
\t\t\t\t\t\t    \t<span><label>SUJET</label></span>
\t\t\t\t\t\t    \t<span><textarea name=\"userMsg\"> </textarea></span>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t   <div>
\t\t\t\t\t\t   \t\t<span><input type=\"submit\" value=\"Envoyer\"></span>
\t\t\t\t\t\t  </div>
\t\t\t\t\t    </form>

\t\t\t\t    </div>
  \t\t\t\t</div>\t\t\t\t
\t\t\t  </div>
\t\t\t</div>
\t\t\t</div>

";
    }

    public function getTemplateName()
    {
        return "EspritTaxiDriverBundle:ResponsableAgence:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 51,  111 => 38,  108 => 37,  98 => 30,  94 => 29,  90 => 28,  86 => 27,  82 => 26,  78 => 25,  74 => 24,  70 => 23,  66 => 22,  62 => 21,  58 => 19,  55 => 18,  41 => 7,  36 => 5,  33 => 4,  30 => 3,);
    }
}
