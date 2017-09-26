<?php

/* mainBundle::layout.html.twig */
class __TwigTemplate_11695b6bdae602513f47d33682349cf79101fd5ef02bf3cfb90d310e75aed4b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>Welcome</title>
        <meta charset=\"utf-8\">
        <title>Bootshop online Shopping cart</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <!--Less styles -->
        <!-- Other Less css file //different less files has different color scheam
             <link rel=\"stylesheet/less\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/less/simplex.less"), "html", null, true);
        echo "\">
             <link rel=\"stylesheet/less\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/less/classified.less"), "html", null, true);
        echo "\">
             <link rel=\"stylesheet/less\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/less/amelia.less"), "html", null, true);
        echo "\">  MOVE DOWN TO activate
        -->
        <!--<link rel=\"stylesheet/less\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/less/bootshop.less"), "html", null, true);
        echo "\">
        <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/js/less.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> -->

        <!-- Bootstrap style --> 
        <link id=\"callCss\" rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/bootshop/bootstrap.min.css"), "html", null, true);
        echo "\" media=\"screen\"/>
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/css/base.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\"/>
        <!-- Bootstrap style responsive -->\t
        <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <!-- Google-code-prettify -->\t
        <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/js/google-code-prettify/prettify.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <!-- fav and touch icons -->
        <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/rating.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backoffice/src/rating.css"), "html", null, true);
        echo "\" />
    ";
        // line 32
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 33
        echo "</head>
<body>
    <div id=\"header\">
        <div class=\"container\">
            <div id=\"welcomeLine\" class=\"row\">
                
                <div class=\"span6\">";
        // line 39
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "user"), "method") != null)) {
            echo "Welcome!<strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "user"), "method"), "nom", array()), "html", null, true);
            echo "</strong>";
        }
        echo "</div>
                
                <div class=\"span6\">
                    <div class=\"pull-right\">
            
                       ";
        // line 44
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "user"), "method") != null)) {
            echo " <a href=\"";
            echo $this->env->getExtension('routing')->getPath("cart");
            echo "\"><span class=\"btn btn-mini btn-primary\"><i class=\"icon-shopping-cart icon-white\"></i> Panier </span> </a> ";
        }
        // line 45
        echo "                    </div>
                </div>
            </div>
            <!-- Navbar ================================================== -->
            <div id=\"logoArea\" class=\"navbar\">
                <a id=\"smallScreen\" data-target=\"#topMenu\" data-toggle=\"collapse\" class=\"btn btn-navbar\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </a>
                <div class=\"navbar-inner colorpicker-color\">
                    <a class=\"brand\" href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("main_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/logo1.png"), "html", null, true);
        echo "\" alt=\"Bootsshop\"/></a>
                    ";
        // line 57
        $context["page"] = 1;
        // line 58
        echo "                    
                    <form  class=\"form-inline navbar-search\" method=\"post\" action=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("rechercheproduits");
        echo "\" >
                        <input id=\"srchFld\" name=\"search\" class=\"srchTxt\" type=\"text\" />
                       
                        <select name=\"type\" class=\"srchTxt\">
                            <option value =\"0\">Produit</option>
                            <option value=\"1\">Service </option>
                           
                        </select> 
                        <button type=\"submit\" id=\"submitButton\" class=\"btn btn-primary\">Go</button>
                    </form>
                    <ul id=\"topMenu\" class=\"nav pull-right\">
                        <li class=\"\"><a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("ajouterProduit");
        echo "\">Gestion Offres</a></li>
                        <li class=\"\"><a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("delivery");
        echo "\">Delivery</a></li>
                        <li class=\"\"><a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\">Contact</a></li>
                        <li class=\"\">
                          ";
        // line 74
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "user"), "method") == null)) {
            echo " <a href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\" style=\"padding-right:0\"><span class=\"btn btn-large btn-success\">Login</span></a>
                          ";
        } else {
            // line 75
            echo " <a href=\"";
            echo $this->env->getExtension('routing')->getPath("disconnect");
            echo "\" style=\"padding-right:0\"><span class=\"btn btn-large btn-success\">Log out</span></a>
                          ";
        }
        // line 77
        echo "                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End====================================================================== -->
    
";
        // line 85
        $this->displayBlock('content', $context, $blocks);
        // line 86
        echo "<!-- Footer ================================================================== -->
<div  id=\"footerSection\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span3\">
                <h5>ACCOUNT</h5>
                <a href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("main_homepage");
        echo "\">YOUR ACCOUNT</a>
                <a href=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("main_homepage");
        echo "\">PERSONAL INFORMATION</a> 
                <a href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("main_homepage");
        echo "\">ADDRESSES</a> 
                <a href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("main_homepage");
        echo "\">DISCOUNT</a>  
                <a href=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("main_homepage");
        echo "\">ORDER HISTORY</a>
            </div>
            <div class=\"span3\">
                <h5>INFORMATION</h5>
                <a href=\"";
        // line 100
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\">CONTACT</a>  
                <a href=\"";
        // line 101
        echo $this->env->getExtension('routing')->getPath("ajout_membre");
        echo "\">REGISTRATION</a>  
                <a href=\"#\">LEGAL NOTICE</a>  
                <a href=\"#\">TERMS AND CONDITIONS</a> 
                <a href=\"#\">FAQ</a>
            </div>
            <div class=\"span3\">
                <h5>OUR OFFERS</h5>
                <a href=\"#\">NEW PRODUCTS</a> 
                <a href=\"#\">TOP SELLERS</a>  
                <a href=\"";
        // line 110
        echo $this->env->getExtension('routing')->getPath("ajouterProduit");
        echo "\">GESTION OFFRES</a>  
                <a href=\"#\">MANUFACTURERS</a> 
                <a href=\"#\">SUPPLIERS</a> 
            </div>
            <div id=\"socialMedia\" class=\"span3 pull-right\">
                <h5>SOCIAL MEDIA </h5>
                <a href=\"#\"><img width=\"60\" height=\"60\" src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/facebook.png"), "html", null, true);
        echo "\" title=\"facebook\" alt=\"facebook\"/></a>
                <a href=\"#\"><img width=\"60\" height=\"60\" src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/twitter.png"), "html", null, true);
        echo "\" title=\"twitter\" alt=\"twitter\"/></a>
                <a href=\"#\"><img width=\"60\" height=\"60\" src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/youtube.png"), "html", null, true);
        echo "\" title=\"youtube\" alt=\"youtube\"/></a>
            </div> 
        </div>
        <p class=\"pull-right\">&copy; Bootshop</p>
    </div><!-- Container End -->
</div>

<!-- Placed at the end of the document so the pages load faster ============================================= -->
<script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/js/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/js/google-code-prettify/prettify.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/js/bootshop.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/js/jquery.lightbox-0.5.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/rating.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.timeago.js"), "html", null, true);
        echo "\"></script>
";
        // line 134
        $this->displayBlock('javascripts', $context, $blocks);
        // line 135
        echo "<span id=\"themesBtn\"></span>
</body>
</html>
";
    }

    // line 32
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 85
    public function block_content($context, array $blocks = array())
    {
    }

    // line 134
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "mainBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 134,  312 => 85,  307 => 32,  300 => 135,  298 => 134,  294 => 133,  290 => 132,  286 => 131,  282 => 130,  277 => 128,  273 => 127,  269 => 126,  258 => 118,  254 => 117,  250 => 116,  241 => 110,  229 => 101,  225 => 100,  218 => 96,  214 => 95,  210 => 94,  206 => 93,  202 => 92,  194 => 86,  192 => 85,  182 => 77,  176 => 75,  169 => 74,  164 => 72,  160 => 71,  156 => 70,  142 => 59,  139 => 58,  137 => 57,  131 => 56,  118 => 45,  112 => 44,  100 => 39,  92 => 33,  90 => 32,  86 => 31,  82 => 30,  77 => 28,  72 => 26,  68 => 25,  63 => 23,  59 => 22,  53 => 19,  49 => 18,  44 => 16,  40 => 15,  36 => 14,  22 => 2,);
    }
}
/* {# empty Twig template #}*/
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>Welcome</title>*/
/*         <meta charset="utf-8">*/
/*         <title>Bootshop online Shopping cart</title>*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <meta name="description" content="">*/
/*         <meta name="author" content="">*/
/*         <!--Less styles -->*/
/*         <!-- Other Less css file //different less files has different color scheam*/
/*              <link rel="stylesheet/less" type="text/css" href="{{ asset('themes/less/simplex.less') }}">*/
/*              <link rel="stylesheet/less" type="text/css" href="{{ asset('themes/less/classified.less') }}">*/
/*              <link rel="stylesheet/less" type="text/css" href="{{ asset('themes/less/amelia.less') }}">  MOVE DOWN TO activate*/
/*         -->*/
/*         <!--<link rel="stylesheet/less" type="text/css" href="{{ asset('themes/less/bootshop.less') }}">*/
/*         <script src="{{ asset('themes/js/less.js') }}" type="text/javascript"></script> -->*/
/* */
/*         <!-- Bootstrap style --> */
/*         <link id="callCss" rel="stylesheet" href="{{ asset('themes/bootshop/bootstrap.min.css') }}" media="screen"/>*/
/*         <link href="{{ asset('themes/css/base.css') }}" rel="stylesheet" media="screen"/>*/
/*         <!-- Bootstrap style responsive -->	*/
/*         <link href="{{ asset('themes/css/bootstrap-responsive.min.css') }}" rel="stylesheet"/>*/
/*         <link href="{{ asset('themes/css/font-awesome.css') }}" rel="stylesheet" type="text/css">*/
/*         <!-- Google-code-prettify -->	*/
/*         <link href="{{ asset('themes/js/google-code-prettify/prettify.css') }}" rel="stylesheet"/>*/
/*         <!-- fav and touch icons -->*/
/*         <link href="{{ asset('css/rating.css') }}" rel="stylesheet"/>*/
/*         <link rel="stylesheet" href="{{ asset('bundles/backoffice/src/rating.css')}}" />*/
/*     {% block stylesheets %}{% endblock %}*/
/* </head>*/
/* <body>*/
/*     <div id="header">*/
/*         <div class="container">*/
/*             <div id="welcomeLine" class="row">*/
/*                 */
/*                 <div class="span6">{% if (app.session.get('user')!= null ) %}Welcome!<strong> {{ app.session.get('user').nom }}</strong>{% endif %}</div>*/
/*                 */
/*                 <div class="span6">*/
/*                     <div class="pull-right">*/
/*             */
/*                        {% if (app.session.get('user')!= null ) %} <a href="{{ path('cart') }}"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> Panier </span> </a> {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- Navbar ================================================== -->*/
/*             <div id="logoArea" class="navbar">*/
/*                 <a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </a>*/
/*                 <div class="navbar-inner colorpicker-color">*/
/*                     <a class="brand" href="{{ path('main_homepage') }}"><img src="{{ asset('themes/images/logo1.png') }}" alt="Bootsshop"/></a>*/
/*                     {% set page = 1 %}*/
/*                     */
/*                     <form  class="form-inline navbar-search" method="post" action="{{ path('rechercheproduits') }}" >*/
/*                         <input id="srchFld" name="search" class="srchTxt" type="text" />*/
/*                        */
/*                         <select name="type" class="srchTxt">*/
/*                             <option value ="0">Produit</option>*/
/*                             <option value="1">Service </option>*/
/*                            */
/*                         </select> */
/*                         <button type="submit" id="submitButton" class="btn btn-primary">Go</button>*/
/*                     </form>*/
/*                     <ul id="topMenu" class="nav pull-right">*/
/*                         <li class=""><a href="{{ path('ajouterProduit') }}">Gestion Offres</a></li>*/
/*                         <li class=""><a href="{{  path('delivery') }}">Delivery</a></li>*/
/*                         <li class=""><a href="{{ path('contact') }}">Contact</a></li>*/
/*                         <li class="">*/
/*                           {% if (app.session.get('user')== null ) %} <a href="{{ path('login') }}" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>*/
/*                           {% else %} <a href="{{ path('disconnect') }}" style="padding-right:0"><span class="btn btn-large btn-success">Log out</span></a>*/
/*                           {% endif %}*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <!-- Header End====================================================================== -->*/
/*     */
/* {% block content %}{% endblock %}*/
/* <!-- Footer ================================================================== -->*/
/* <div  id="footerSection">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="span3">*/
/*                 <h5>ACCOUNT</h5>*/
/*                 <a href="{{ path('main_homepage') }}">YOUR ACCOUNT</a>*/
/*                 <a href="{{ path('main_homepage') }}">PERSONAL INFORMATION</a> */
/*                 <a href="{{ path('main_homepage') }}">ADDRESSES</a> */
/*                 <a href="{{ path('main_homepage') }}">DISCOUNT</a>  */
/*                 <a href="{{ path('main_homepage') }}">ORDER HISTORY</a>*/
/*             </div>*/
/*             <div class="span3">*/
/*                 <h5>INFORMATION</h5>*/
/*                 <a href="{{ path('contact') }}">CONTACT</a>  */
/*                 <a href="{{ path('ajout_membre')}}">REGISTRATION</a>  */
/*                 <a href="#">LEGAL NOTICE</a>  */
/*                 <a href="#">TERMS AND CONDITIONS</a> */
/*                 <a href="#">FAQ</a>*/
/*             </div>*/
/*             <div class="span3">*/
/*                 <h5>OUR OFFERS</h5>*/
/*                 <a href="#">NEW PRODUCTS</a> */
/*                 <a href="#">TOP SELLERS</a>  */
/*                 <a href="{{ path('ajouterProduit')}}">GESTION OFFRES</a>  */
/*                 <a href="#">MANUFACTURERS</a> */
/*                 <a href="#">SUPPLIERS</a> */
/*             </div>*/
/*             <div id="socialMedia" class="span3 pull-right">*/
/*                 <h5>SOCIAL MEDIA </h5>*/
/*                 <a href="#"><img width="60" height="60" src="{{ asset('themes/images/facebook.png') }}" title="facebook" alt="facebook"/></a>*/
/*                 <a href="#"><img width="60" height="60" src="{{ asset('themes/images/twitter.png') }}" title="twitter" alt="twitter"/></a>*/
/*                 <a href="#"><img width="60" height="60" src="{{ asset('themes/images/youtube.png') }}" title="youtube" alt="youtube"/></a>*/
/*             </div> */
/*         </div>*/
/*         <p class="pull-right">&copy; Bootshop</p>*/
/*     </div><!-- Container End -->*/
/* </div>*/
/* */
/* <!-- Placed at the end of the document so the pages load faster ============================================= -->*/
/* <script src="{{ asset('themes/js/jquery.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('themes/js/bootstrap.min.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('themes/js/google-code-prettify/prettify.js') }}"></script>*/
/* */
/* <script src="{{ asset('themes/js/bootshop.js') }}"></script>*/
/* <script src="{{ asset('themes/js/jquery.lightbox-0.5.js') }}"></script>*/
/* <script src="{{ asset('js/rating.js') }}"></script>*/
/* <script src="{{ asset('js/jquery.timeago.js')}}"></script>*/
/* {% block javascripts %}{% endblock %}*/
/* <span id="themesBtn"></span>*/
/* </body>*/
/* </html>*/
/* */
