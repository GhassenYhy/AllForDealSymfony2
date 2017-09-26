<?php

/* mainBundle:Default:index.html.twig */
class __TwigTemplate_3648a161554b1a93e5b35569a1bc0c1d525a66abb0c176250ce88a8fad345a86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("mainBundle::layout.html.twig", "mainBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "mainBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <div id=\"carouselBlk\">
        <div id=\"myCarousel\" class=\"carousel slide\">
            <div class=\"carousel-inner\">
                <div class=\"item active\">
                    <div class=\"container\">
                        <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("ajout_membre");
        echo "\"><img style=\"width:100%\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/carousel/1.png"), "html", null, true);
        echo "\" alt=\"special offers\"/></a>
                        <div class=\"carousel-caption\">
                            <h4>Second Thumbnail label</h4>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        </div>
                    </div>
                </div>
                <div class=\"item\">
                    <div class=\"container\">
                        <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("ajout_membre");
        echo "\"><img style=\"width:100%\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/carousel/2.png"), "html", null, true);
        echo "\" alt=\"\"/></a>
                        <div class=\"carousel-caption\">
                            <h4>Second Thumbnail label</h4>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        </div>
                    </div>
                </div>
                <div class=\"item\">
                    <div class=\"container\">
                        <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("ajout_membre");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/carousel/3.png"), "html", null, true);
        echo "\" alt=\"\"/></a>
                        <div class=\"carousel-caption\">
                            <h4>Second Thumbnail label</h4>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        </div>

                    </div>
                </div>
                <div class=\"item\">
                    <div class=\"container\">
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("ajout_membre");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/carousel/4.png"), "html", null, true);
        echo "\" alt=\"\"/></a>
                        <div class=\"carousel-caption\">
                            <h4>Second Thumbnail label</h4>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        </div>

                    </div>
                </div>
                <div class=\"item\">
                    <div class=\"container\">
                        <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("ajout_membre");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/carousel/5.png"), "html", null, true);
        echo "\" alt=\"\"/></a>
                        <div class=\"carousel-caption\">
                            <h4>Second Thumbnail label</h4>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        </div>
                    </div>
                </div>
                <div class=\"item\">
                    <div class=\"container\">
                        <a href=\"register.html\"><img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/carousel/6.png"), "html", null, true);
        echo "\" alt=\"\"/></a>
                        <div class=\"carousel-caption\">
                            <h4>Second Thumbnail label</h4>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        </div>
                    </div>
                </div>
            </div>
            <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">&lsaquo;</a>
            <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">&rsaquo;</a>
        </div> 
    </div>
    <div id=\"mainBody\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- Sidebar ================================================== -->
                <div id=\"sidebar\" class=\"span3\">
                    <div class=\"well well-small\"><a id=\"myCart\" href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("cart");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/ico-cart.png"), "html", null, true);
        echo "\" alt=\"cart\">3 Items in your cart  <span class=\"badge badge-warning pull-right\">\$155.00</span></a></div>
                    <ul id=\"sideManu\" class=\"nav nav-tabs nav-stacked\">
                        <li class=\"subMenu open\"><a> Categories Produits [";
        // line 74
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))), "html", null, true);
        echo "]</a>
                            <ul>
                                ";
        // line 76
        $context["i"] = 0;
        // line 77
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cproduits"]) ? $context["cproduits"] : $this->getContext($context, "cproduits")));
        foreach ($context['_seq'] as $context["_key"] => $context["cproduit"]) {
            // line 78
            echo "                                    ";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 79
            echo "                                    <li><a ";
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 1)) {
                echo "class=\"active\" ";
            }
            echo "href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("products", array("categorie" => $this->getAttribute($context["cproduit"], "libelle", array()), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
            echo "\"><i class=\"icon-chevron-right\"></i>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cproduit"], "libelle", array()), "html", null, true);
            echo " [";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nbcp"]) ? $context["nbcp"] : $this->getContext($context, "nbcp")), ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) - 1), array(), "array"), "html", null, true);
            echo "]</a></li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cproduit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                               
                            </ul>
                        </li>
                        <li class=\"subMenu\"><a> Categories Services [";
        // line 84
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["services"]) ? $context["services"] : $this->getContext($context, "services"))), "html", null, true);
        echo "] </a>
                            <ul style=\"display:none\">
                                 
                                ";
        // line 87
        $context["i"] = 0;
        // line 88
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cservices"]) ? $context["cservices"] : $this->getContext($context, "cservices")));
        foreach ($context['_seq'] as $context["_key"] => $context["cservice"]) {
            // line 89
            echo "                                    ";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 90
            echo "                                    <li><a ";
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 1)) {
                echo "class=\"active\" ";
            }
            echo "href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("services", array("categorie" => $this->getAttribute($context["cservice"], "libelle", array()), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
            echo "\"><i class=\"icon-chevron-right\"></i>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cservice"], "libelle", array()), "html", null, true);
            echo " [";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nbcs"]) ? $context["nbcs"] : $this->getContext($context, "nbcs")), ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) - 1), array(), "array"), "html", null, true);
            echo "]</a></li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cservice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                               
                            </ul>
                        </li>
                     
                    </ul>
                    <br/>
                    ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nbproduits"]) ? $context["nbproduits"] : $this->getContext($context, "nbproduits")));
        foreach ($context['_seq'] as $context["_key"] => $context["nbproduit"]) {
            // line 99
            echo "                    <div class=\"thumbnail\">
                        <img src=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/products/panasonic.jpg"), "html", null, true);
            echo "\" alt=\"Bootshop panasonoc New camera\"/>
                        <div class=\"caption\">
                            <h5>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["nbproduit"], "libelle", array()), "html", null, true);
            echo "</h5>
                            <h4 style=\"text-align:center\"><a class=\"btn\" href=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_details", array("id" => $this->getAttribute($context["nbproduit"], "id", array()))), "html", null, true);
            echo "\"> <i class=\"icon-zoom-in\"></i></a> <a class=\"btn\" href=\"#\">Add to <i class=\"icon-shopping-cart\"></i></a> <a class=\"btn btn-primary\" href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["nbproduit"], "prix", array()), "html", null, true);
            echo " DT</a></h4>
                        </div>
                    </div>
                        <br/>
                       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nbproduit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo " 
                    <div class=\"thumbnail\">
                        <img src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/payment_methods.png"), "html", null, true);
        echo "\" title=\"Bootshop Payment Methods\" alt=\"Payments Methods\">
                        <div class=\"caption\">
                            <h5>Payment Methods</h5>
                        </div>
                    </div>
                </div>
                <!-- Sidebar end=============================================== -->
                <div class=\"span9\">\t\t
                    <div class=\"well well-small\">
                        <h4>Featured Products <small class=\"pull-right\">";
        // line 118
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))), "html", null, true);
        echo "+ featured products</small></h4>
                        <div class=\"row-fluid\">
                            <div id=\"featured\" class=\"carousel slide\">
                                <div class=\"carousel-inner\">
                                    <div class=\"item active \">
                                       
                                        <ul class=\"thumbnails\">
                                    ";
        // line 125
        $context["i"] = 0;
        // line 126
        echo "                                     ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 127
            echo "                                         
                                        ";
            // line 128
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 129
            echo "                                        
                                        
                                            <li class=\"span3\">
                                                <div class=\"thumbnail\">
                                                    <i class=\"tag\"></i>
                                                    <a href=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_details", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["produit"], "image", array())), "html", null, true);
            echo "\" alt=\"\"></a>
                                                    <div class=\"caption\">
                                                        <h5>";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "libelle", array()), "html", null, true);
            echo "</h5>
                                                        <h4><a class=\"btn\" href=\"";
            // line 137
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_details", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\">VIEW</a> <span class=\"pull-right\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo " Dt </span></h4>
                                                    </div>
                                                </div>
                                            </li>
                                           ";
            // line 141
            if ((0 == (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) % 4)) {
                // line 142
                echo "                                                 </ul>
                                    </div>
                                        <div class=\"item  \">
                                       
                                        <ul class=\"thumbnails\">
                                            ";
            }
            // line 147
            echo " 
                                      
                                        
                                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "                                        </ul>
                                     </div> 
                                </div>
                                <a class=\"left carousel-control\" href=\"#featured\" data-slide=\"prev\">‹</a>
                                <a class=\"right carousel-control\" href=\"#featured\" data-slide=\"next\">›</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"well well-small\">
                        <h4>Featured Services <small class=\"pull-right\">";
        // line 160
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["services"]) ? $context["services"] : $this->getContext($context, "services"))), "html", null, true);
        echo "+ featured services</small></h4>
                        <div class=\"row-fluid\">
                            <div id=\"featured2\" class=\"carousel slide\">
                                <div class=\"carousel-inner\">
                                    <div class=\"item active \">
                                       
                                        <ul class=\"thumbnails\">
                                    ";
        // line 167
        $context["i"] = 0;
        // line 168
        echo "                                     ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) ? $context["services"] : $this->getContext($context, "services")));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 169
            echo "                                         
                                        ";
            // line 170
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 171
            echo "                                        
                                        
                                            <li class=\"span3\">
                                                <div class=\"thumbnail\">
                                                    <i class=\"tag\"></i>
                                                    <a href=\"";
            // line 176
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_details", array("id" => $this->getAttribute($context["service"], "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://localhost/allfordeal/pidev/images/service.png"), "html", null, true);
            echo "\" alt=\"\"></a>
                                                    <div class=\"caption\">
                                                        <h5>";
            // line 178
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "libelle", array()), "html", null, true);
            echo "</h5>
                                                        <h4><a class=\"btn\" href=\"";
            // line 179
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_details", array("id" => $this->getAttribute($context["service"], "id", array()))), "html", null, true);
            echo "\">VIEW</a> <span class=\"pull-right\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["service"], "date", array()), "Y/m/d"), "html", null, true);
            echo "  </span></h4>
                                                    </div>
                                                </div>
                                            </li>
                                           ";
            // line 183
            if ((0 == (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) % 4)) {
                // line 184
                echo "                                                 </ul>
                                    </div>
                                        <div class=\"item  \">
                                       
                                        <ul class=\"thumbnails\">
                                            ";
            }
            // line 189
            echo " 
                                      
                                        
                                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "                                        </ul>
                                     </div> 
                                </div>
                                <a class=\"left carousel-control\" href=\"#featured2\" data-slide=\"prev\">‹</a>
                                <a class=\"right carousel-control\" href=\"#featured2\" data-slide=\"next\">›</a>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "mainBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  407 => 193,  398 => 189,  390 => 184,  388 => 183,  379 => 179,  375 => 178,  368 => 176,  361 => 171,  359 => 170,  356 => 169,  351 => 168,  349 => 167,  339 => 160,  328 => 151,  319 => 147,  311 => 142,  309 => 141,  300 => 137,  296 => 136,  289 => 134,  282 => 129,  280 => 128,  277 => 127,  272 => 126,  270 => 125,  260 => 118,  248 => 109,  244 => 107,  231 => 103,  227 => 102,  222 => 100,  219 => 99,  215 => 98,  207 => 92,  190 => 90,  187 => 89,  182 => 88,  180 => 87,  174 => 84,  169 => 81,  152 => 79,  149 => 78,  144 => 77,  142 => 76,  137 => 74,  130 => 72,  110 => 55,  96 => 46,  81 => 36,  66 => 26,  52 => 17,  38 => 8,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'mainBundle::layout.html.twig' %}*/
/* {% block content %}*/
/*     <div id="carouselBlk">*/
/*         <div id="myCarousel" class="carousel slide">*/
/*             <div class="carousel-inner">*/
/*                 <div class="item active">*/
/*                     <div class="container">*/
/*                         <a href="{{ path('ajout_membre') }}"><img style="width:100%" src="{{ asset('themes/images/carousel/1.png') }}" alt="special offers"/></a>*/
/*                         <div class="carousel-caption">*/
/*                             <h4>Second Thumbnail label</h4>*/
/*                             <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="item">*/
/*                     <div class="container">*/
/*                         <a href="{{ path('ajout_membre') }}"><img style="width:100%" src="{{ asset('themes/images/carousel/2.png') }}" alt=""/></a>*/
/*                         <div class="carousel-caption">*/
/*                             <h4>Second Thumbnail label</h4>*/
/*                             <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="item">*/
/*                     <div class="container">*/
/*                         <a href="{{ path('ajout_membre') }}"><img src="{{ asset('themes/images/carousel/3.png') }}" alt=""/></a>*/
/*                         <div class="carousel-caption">*/
/*                             <h4>Second Thumbnail label</h4>*/
/*                             <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                 </div>*/
/*                 <div class="item">*/
/*                     <div class="container">*/
/*                         <a href="{{ path('ajout_membre') }}"><img src="{{ asset('themes/images/carousel/4.png') }}" alt=""/></a>*/
/*                         <div class="carousel-caption">*/
/*                             <h4>Second Thumbnail label</h4>*/
/*                             <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                 </div>*/
/*                 <div class="item">*/
/*                     <div class="container">*/
/*                         <a href="{{ path('ajout_membre') }}"><img src="{{ asset('themes/images/carousel/5.png') }}" alt=""/></a>*/
/*                         <div class="carousel-caption">*/
/*                             <h4>Second Thumbnail label</h4>*/
/*                             <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="item">*/
/*                     <div class="container">*/
/*                         <a href="register.html"><img src="{{ asset('themes/images/carousel/6.png') }}" alt=""/></a>*/
/*                         <div class="carousel-caption">*/
/*                             <h4>Second Thumbnail label</h4>*/
/*                             <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>*/
/*             <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>*/
/*         </div> */
/*     </div>*/
/*     <div id="mainBody">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <!-- Sidebar ================================================== -->*/
/*                 <div id="sidebar" class="span3">*/
/*                     <div class="well well-small"><a id="myCart" href="{{ path('cart') }}"><img src="{{ asset('themes/images/ico-cart.png') }}" alt="cart">3 Items in your cart  <span class="badge badge-warning pull-right">$155.00</span></a></div>*/
/*                     <ul id="sideManu" class="nav nav-tabs nav-stacked">*/
/*                         <li class="subMenu open"><a> Categories Produits [{{produits|length}}]</a>*/
/*                             <ul>*/
/*                                 {% set i = 0 %}*/
/*                                 {% for cproduit in cproduits %}*/
/*                                     {% set i = i+1 %}*/
/*                                     <li><a {% if i==1 %}class="active" {% endif %}href="{{ path('products',{'categorie':cproduit.libelle,'page':page}) }}"><i class="icon-chevron-right"></i>{{cproduit.libelle }} [{{nbcp[i-1]}}]</a></li>*/
/*                                     {% endfor %}*/
/*                                */
/*                             </ul>*/
/*                         </li>*/
/*                         <li class="subMenu"><a> Categories Services [{{services|length}}] </a>*/
/*                             <ul style="display:none">*/
/*                                  */
/*                                 {% set i = 0 %}*/
/*                                 {% for cservice in cservices %}*/
/*                                     {% set i = i+1 %}*/
/*                                     <li><a {% if i==1 %}class="active" {% endif %}href="{{ path('services',{'categorie':cservice.libelle,'page':page}) }}"><i class="icon-chevron-right"></i>{{cservice.libelle }} [{{nbcs[i-1]}}]</a></li>*/
/*                                     {% endfor %}*/
/*                                */
/*                             </ul>*/
/*                         </li>*/
/*                      */
/*                     </ul>*/
/*                     <br/>*/
/*                     {% for nbproduit in nbproduits %}*/
/*                     <div class="thumbnail">*/
/*                         <img src="{{ asset('themes/images/products/panasonic.jpg') }}" alt="Bootshop panasonoc New camera"/>*/
/*                         <div class="caption">*/
/*                             <h5>{{nbproduit.libelle}}</h5>*/
/*                             <h4 style="text-align:center"><a class="btn" href="{{ path('product_details',{'id':nbproduit.id}) }}"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">{{nbproduit.prix}} DT</a></h4>*/
/*                         </div>*/
/*                     </div>*/
/*                         <br/>*/
/*                        {% endfor %} */
/*                     <div class="thumbnail">*/
/*                         <img src="{{ asset('themes/images/payment_methods.png') }}" title="Bootshop Payment Methods" alt="Payments Methods">*/
/*                         <div class="caption">*/
/*                             <h5>Payment Methods</h5>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- Sidebar end=============================================== -->*/
/*                 <div class="span9">		*/
/*                     <div class="well well-small">*/
/*                         <h4>Featured Products <small class="pull-right">{{produits|length}}+ featured products</small></h4>*/
/*                         <div class="row-fluid">*/
/*                             <div id="featured" class="carousel slide">*/
/*                                 <div class="carousel-inner">*/
/*                                     <div class="item active ">*/
/*                                        */
/*                                         <ul class="thumbnails">*/
/*                                     {% set i = 0 %}*/
/*                                      {% for produit in produits %}*/
/*                                          */
/*                                         {% set i = i+1 %}*/
/*                                         */
/*                                         */
/*                                             <li class="span3">*/
/*                                                 <div class="thumbnail">*/
/*                                                     <i class="tag"></i>*/
/*                                                     <a href="{{ path('product_details',{'id':produit.id}) }}"><img src="{{ asset(produit.image) }}" alt=""></a>*/
/*                                                     <div class="caption">*/
/*                                                         <h5>{{ produit.libelle }}</h5>*/
/*                                                         <h4><a class="btn" href="{{ path('product_details',{'id':produit.id}) }}">VIEW</a> <span class="pull-right">{{produit.prix }} Dt </span></h4>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </li>*/
/*                                            {% if   i is divisible by(4)  %}*/
/*                                                  </ul>*/
/*                                     </div>*/
/*                                         <div class="item  ">*/
/*                                        */
/*                                         <ul class="thumbnails">*/
/*                                             {% endif %} */
/*                                       */
/*                                         */
/*                                          {% endfor %}*/
/*                                         </ul>*/
/*                                      </div> */
/*                                 </div>*/
/*                                 <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>*/
/*                                 <a class="right carousel-control" href="#featured" data-slide="next">›</a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="well well-small">*/
/*                         <h4>Featured Services <small class="pull-right">{{services|length}}+ featured services</small></h4>*/
/*                         <div class="row-fluid">*/
/*                             <div id="featured2" class="carousel slide">*/
/*                                 <div class="carousel-inner">*/
/*                                     <div class="item active ">*/
/*                                        */
/*                                         <ul class="thumbnails">*/
/*                                     {% set i = 0 %}*/
/*                                      {% for service in services %}*/
/*                                          */
/*                                         {% set i = i+1 %}*/
/*                                         */
/*                                         */
/*                                             <li class="span3">*/
/*                                                 <div class="thumbnail">*/
/*                                                     <i class="tag"></i>*/
/*                                                     <a href="{{ path('product_details',{'id':service.id}) }}"><img src="{{ asset('http://localhost/allfordeal/pidev/images/service.png') }}" alt=""></a>*/
/*                                                     <div class="caption">*/
/*                                                         <h5>{{ service.libelle }}</h5>*/
/*                                                         <h4><a class="btn" href="{{ path('product_details',{'id':service.id}) }}">VIEW</a> <span class="pull-right">{{service.date|date('Y/m/d') }}  </span></h4>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </li>*/
/*                                            {% if   i is divisible by(4)  %}*/
/*                                                  </ul>*/
/*                                     </div>*/
/*                                         <div class="item  ">*/
/*                                        */
/*                                         <ul class="thumbnails">*/
/*                                             {% endif %} */
/*                                       */
/*                                         */
/*                                          {% endfor %}*/
/*                                         </ul>*/
/*                                      </div> */
/*                                 </div>*/
/*                                 <a class="left carousel-control" href="#featured2" data-slide="prev">‹</a>*/
/*                                 <a class="right carousel-control" href="#featured2" data-slide="next">›</a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     */
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
