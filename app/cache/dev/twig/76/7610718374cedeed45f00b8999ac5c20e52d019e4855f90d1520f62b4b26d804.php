<?php

/* mainBundle:Default:services.html.twig */
class __TwigTemplate_a347d827103728cbc0f91dc8857de4dfdccc114c398233effd08447adc8dd1ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("mainBundle::layout.html.twig", "mainBundle:Default:services.html.twig", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"mainBody\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- Sidebar ================================================== -->
                <div id=\"sidebar\" class=\"span3\">
                    <div class=\"well well-small\"><a id=\"myCart\" href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("cart");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/ico-cart.png"), "html", null, true);
        echo "\" alt=\"cart\">3 Items in your cart  <span class=\"badge badge-warning pull-right\">\$155.00</span></a></div>
                    <ul id=\"sideManu\" class=\"nav nav-tabs nav-stacked\">
                      <div class=\"thumbnail\">
                        <form class=\"form-horizontal\" action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("filtre");
        echo "\" method=\"post\">
                            <h4>Your personal information</h4>
                            <div class=\"control-group\">
                                Type : 

                                <select id=\"prod\" class=\"span2\" name=\"type\">
                                    <option value=\"1\">Produit</option>
                                    <option value=\"2\">Service</option>

                                </select>
                                <br/>
                                <br/>

                               
                                <div id=\"catp\">
                                    Categorie : 
                                <select class=\"span2\" name=\"catp\">
                                    <option value=\"0\">Tous</option>
                                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["catp"]) ? $context["catp"] : $this->getContext($context, "catp")));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 31
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "libelle", array()), "html", null, true);
            echo "</option>
                                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
                                </select>
                                </div>
                                
                                 <div id=\"cats\" style=\"display: none;\">
                                     Categorie :
                                <select class=\"span2\" name=\"cats\">
                                     <option value=\"0\">Tous</option>
                                      ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cats"]) ? $context["cats"] : $this->getContext($context, "cats")));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 42
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "libelle", array()), "html", null, true);
            echo "</option>
                                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
                                </select>
                                </div>
                                
                                <br/>
                                
                                Libelle : 

                                <input class=\"span2\" name=\"search\" type=\"text\" id=\"inputFname1\" placeholder=\"First Name\">
                                <br/>
                                <br/>
                                Date Min : 
                                <input class=\"span2\" name=\"datemin\" type=\"date\" id=\"inputFname1\" placeholder=\"First Name\">
                                <br/>
                                <br/>
                                Date Max : 
                                <input class=\"span2\" name=\"datemax\" type=\"date\" id=\"inputFname1\" placeholder=\"First Name\">         
                                <br/>
                                <br/>
                                <div id=\"changeProduit\" >Prix Min/Max : 


                                    <input class=\"span1\" name=\"prixmin\" type=\"text\" id=\"inputFname1\" placeholder=\"Min\">
                                    <input class=\"span1\" name=\"prixmax\" type=\"text\" id=\"inputFname1\" placeholder=\"Max\">
                                </div>

                                <div id=\"changeService\" style=\"display: none;\">Gouvernorat : 

                                    <select class=\"span2\" name=\"gouvernorat\">
                                        <option value=\"\">-</option>
                                        <option value=\"1\">Ariana</option>
                                        <option value=\"2\">Beja</option>
                                        <option value=\"3\">Ben Arous</option>
                                        <option value=\"4\">Bizerte</option>
                                        <option value=\"5\">Gabes</option>
                                        <option value=\"6\">Gafsa</option>
                                        <option value=\"7\">Jendouba</option>
                                        <option value=\"8\">Kairouan</option>
                                        <option value=\"9\">Kasserine</option>
                                        <option value=\"10\">Kebili</option>
                                        <option value=\"11\">Le Kef</option>
                                        <option value=\"12\">Mahdia</option>
                                        <option value=\"13\">La Manouba</option>
                                        <option value=\"14\">Médenine</option>
                                        <option value=\"15\">Monastir</option>
                                        <option value=\"16\">Nabeul</option>
                                        <option value=\"17\">Sfax</option>
                                        <option value=\"18\">Sidi Bouzid</option>
                                        <option value=\"19\">Siliana</option>
                                        <option value=\"20\">Sousse</option>
                                        <option value=\"21\">Tataouine</option>
                                        <option value=\"22\">Tozeur</option>
                                        <option value=\"23\">Tunis</option>
                                        <option value=\"24\">Zaghouan</option>
                                    </select>
                                </div>
                                <br/>
                                <br/>
                                <input class=\"btn btn-primary\" type=\"submit\" value=\"Rechercher\" />
                            </div>
                        </form>
                    </div><br/> 
        
                    </ul>
                    <br/>
                    ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nbproduits"]) ? $context["nbproduits"] : $this->getContext($context, "nbproduits")));
        foreach ($context['_seq'] as $context["_key"] => $context["nbproduit"]) {
            // line 110
            echo "                    <div class=\"thumbnail\">
                        <img src=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["nbproduit"], "image", array())), "html", null, true);
            echo "\" alt=\"Bootshop panasonoc New camera\"/>
                        <div class=\"caption\">
                            <h5>";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($context["nbproduit"], "libelle", array()), "html", null, true);
            echo "</h5>
                            <h4 style=\"text-align:center\"><a class=\"btn\" href=\"\"> <i class=\"icon-zoom-in\"></i></a> <a class=\"btn\" href=\"#\">Add to <i class=\"icon-shopping-cart\"></i></a> <a class=\"btn btn-primary\" href=\"#\">";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($context["nbproduit"], "prix", array()), "html", null, true);
            echo " DT</a></h4>
                        </div>
                    </div><br/>
                       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nbproduit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "                    <div class=\"thumbnail\">
                        <img src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/payment_methods.png"), "html", null, true);
        echo "\" title=\"Bootshop Payment Methods\" alt=\"Payments Methods\">
                        <div class=\"caption\">
                            <h5>Payment Methods</h5>
                        </div>
                    </div>
                </div>
                <!-- Sidebar end=============================================== -->
                <div class=\"span9\">
                    <ul class=\"breadcrumb\">
                        <li><a href=\"";
        // line 128
        echo $this->env->getExtension('routing')->getPath("main_homepage");
        echo "\">Home</a> <span class=\"divider\">/</span></li>
                        <li class=\"active\">Services Name</li>
                    </ul>
                    <h3> Services Name <small class=\"pull-right\"> ";
        // line 131
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["servicess"]) ? $context["servicess"] : $this->getContext($context, "servicess"))), "html", null, true);
        echo " services are available </small></h3>\t
                    <hr class=\"soft\"/>
                    <p>
                        Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - that is why our goods are so popular and we have a great number of faithful customers all over the country.
                    </p>
                    <hr class=\"soft\"/>
                    <form class=\"form-horizontal span6\">
                        <div class=\"control-group\">
                            <label class=\"control-label alignL\">Sort By </label>
                            <select>
                                <option>Priduct name A - Z</option>
                                <option>Priduct name Z - A</option>
                                <option>Priduct Stoke</option>
                                <option>Price Lowest first</option>
                            </select>
                        </div>
                    </form>

                    <div id=\"myTab\" class=\"pull-right\">
                        <a href=\"#listView\" data-toggle=\"tab\"><span class=\"btn btn-large\"><i class=\"icon-list\"></i></span></a>
                        <a href=\"#blockView\" data-toggle=\"tab\"><span class=\"btn btn-large btn-primary\"><i class=\"icon-th-large\"></i></span></a>
                    </div>
                    <br class=\"clr\"/>
                    <div class=\"tab-content\">
                        <div class=\"tab-pane\" id=\"listView\">
                           ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) ? $context["services"] : $this->getContext($context, "services")));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 157
            echo "                             <div class=\"row\">\t  
                                <div class=\"span2\">
                                    <img src=\"";
            // line 159
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://localhost/allfordeal/pidev/images/service.png"), "html", null, true);
            echo "\" alt=\"\"/>
                                </div>
                                <div class=\"span4\">
                                    <h3>New | Available</h3>\t\t\t\t
                                    <hr class=\"soft\"/>
                                    <h5>";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "libelle", array()), "html", null, true);
            echo " </h5>
                                    <p>
                                        ";
            // line 166
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "description", array()), "html", null, true);
            echo "
                                    </p>
                                    <a class=\"btn btn-small pull-right\" href=\"\">View Details</a>
                                    <br class=\"clr\"/>
                                </div>
                                <div class=\"span3 alignR\">
                                    <form class=\"form-horizontal qtyFrm\">
                                        <h3> ";
            // line 173
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "libelle", array()), "html", null, true);
            echo "</h3>
                                        <label class=\"checkbox\">
                                            <input type=\"checkbox\">  Adds product to compair
                                        </label><br/>

                                        <a href=\"\" class=\"btn btn-large btn-primary\"> Add to <i class=\" icon-shopping-cart\"></i></a>
                                        <a href=\"\" class=\"btn btn-large\"><i class=\"icon-zoom-in\"></i></a>

                                    </form>
                                </div>
                            </div>
                            <hr class=\"soft\"/>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "                        </div>

                        <div class=\"tab-pane  active\" id=\"blockView\">
                            <ul class=\"thumbnails\">
                                 ";
        // line 190
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) ? $context["services"] : $this->getContext($context, "services")));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 191
            echo "                                <li class=\"span3\">
                                    <div class=\"thumbnail\">
                                        <a href=\"\"><img src=\"";
            // line 193
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://localhost/allfordeal/pidev/images/service.png"), "html", null, true);
            echo "\" alt=\"\"/></a>
                                        <div class=\"caption\">
                                            <h5>";
            // line 195
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "libelle", array()), "html", null, true);
            echo "</h5>
                                            <p> 
                                                ";
            // line 197
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "description", array()), "html", null, true);
            echo "
                                            </p>
                                            <h4 style=\"text-align:center\"><a class=\"btn\" href=\"\"> <i class=\"icon-zoom-in\"></i></a> <a class=\"btn\" href=\"#\">Add to <i class=\"icon-shopping-cart\"></i></a> <a class=\"btn btn-primary\" href=\"#\">Demander</a></h4>
                                        </div>
                                    </div>
                                </li>
                             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        echo "  
                            </ul>
                            <hr class=\"soft\"/>
                        </div>
                    </div>

                    <a href=\"";
        // line 209
        echo $this->env->getExtension('routing')->getPath("compair");
        echo "\" class=\"btn btn-large pull-right\">Compair Product</a>
                    <div class=\"pagination\">
                        <ul>
                            ";
        // line 212
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == 2)) {
            // line 213
            echo "                           ";
            if (((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")) == 1)) {
                // line 214
                echo "                            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("services", array("categorie" => (isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "page" => (isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")))), "html", null, true);
                echo "\">&lsaquo;</a></li>
                            ";
            } else {
                // line 216
                echo "                            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("services", array("categorie" => (isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "page" => ((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")) - 1))), "html", null, true);
                echo "\">&lsaquo;</a></li>
                            ";
            }
            // line 218
            echo "                            ";
            $context["i"] = 1;
            // line 219
            echo "                           
                            ";
            // line 220
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, intval(floor((twig_length_filter($this->env, (isset($context["servicess"]) ? $context["servicess"] : $this->getContext($context, "servicess"))) / 6)))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 221
                echo "                            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("services", array("categorie" => (isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "page" => (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</a></li>
                             ";
                // line 222
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 223
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 224
            echo "                            <li><a href=\"#\">...</a></li>
                            ";
            // line 225
            if (((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")) > intval(floor((twig_length_filter($this->env, (isset($context["servicess"]) ? $context["servicess"] : $this->getContext($context, "servicess"))) / 6))))) {
                // line 226
                echo "                            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("services", array("categorie" => (isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "page" => (isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")))), "html", null, true);
                echo "\">&rsaquo;</a></li>
                             ";
            } else {
                // line 228
                echo "                             <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("services", array("categorie" => (isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "page" => ((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")) + 1))), "html", null, true);
                echo "\">&rsaquo;</a></li>
                               ";
            }
            // line 230
            echo "                            
                            
                               ";
        } elseif ((        // line 232
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == 1)) {
            // line 233
            echo "                               ";
            if (((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")) == 1)) {
                // line 234
                echo "                            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rechercheproduits3", array("page" => (isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")))), "html", null, true);
                echo "\">&lsaquo;</a></li>
                            ";
            } else {
                // line 236
                echo "                            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rechercheproduits3", array("page" => ((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")) - 1))), "html", null, true);
                echo "\">&lsaquo;</a></li>
                            ";
            }
            // line 238
            echo "                            ";
            $context["i"] = 1;
            // line 239
            echo "                           
                            ";
            // line 240
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, intval(floor((twig_length_filter($this->env, (isset($context["servicess"]) ? $context["servicess"] : $this->getContext($context, "servicess"))) / 6)))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 241
                echo "                            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rechercheproduits3", array("page" => (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</a></li>
                             ";
                // line 242
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 243
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 244
            echo "                            <li><a href=\"#\">...</a></li>
                            ";
            // line 245
            if (((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")) > intval(floor((twig_length_filter($this->env, (isset($context["servicess"]) ? $context["servicess"] : $this->getContext($context, "servicess"))) / 6))))) {
                // line 246
                echo "                            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rechercheproduits3", array("page" => (isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")))), "html", null, true);
                echo "\">&rsaquo;</a></li>
                             ";
            } else {
                // line 248
                echo "                             <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rechercheproduits3", array("page" => ((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")) + 1))), "html", null, true);
                echo "\">&rsaquo;</a></li>
                               ";
            }
            // line 250
            echo "                            
                            ";
        }
        // line 252
        echo "                        </ul>
                    </div>
                    <br class=\"clr\"/>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 260
    public function block_javascripts($context, array $blocks = array())
    {
        // line 261
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 262
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
    <script>
        \$(document).ready(function () {

            \$('#prod').change(function () {

                if (\$(this).val() === '1') {
                   
                    \$('#changeService').hide();
                    \$('#changeProduit').show();
                     \$('#cats').hide();
                    \$('#catp').show();

                }

                if (\$('#prod').val() === '2') {
                    \$('#changeService').show();
                    \$('#changeProduit').hide();
                    \$('#cats').show();
                    \$('#catp').hide();

                }


            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "mainBundle:Default:services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  496 => 262,  491 => 261,  488 => 260,  477 => 252,  473 => 250,  467 => 248,  461 => 246,  459 => 245,  456 => 244,  450 => 243,  448 => 242,  441 => 241,  437 => 240,  434 => 239,  431 => 238,  425 => 236,  419 => 234,  416 => 233,  414 => 232,  410 => 230,  404 => 228,  398 => 226,  396 => 225,  393 => 224,  387 => 223,  385 => 222,  378 => 221,  374 => 220,  371 => 219,  368 => 218,  362 => 216,  356 => 214,  353 => 213,  351 => 212,  345 => 209,  337 => 203,  324 => 197,  319 => 195,  314 => 193,  310 => 191,  306 => 190,  300 => 186,  281 => 173,  271 => 166,  266 => 164,  258 => 159,  254 => 157,  250 => 156,  222 => 131,  216 => 128,  204 => 119,  201 => 118,  191 => 114,  187 => 113,  182 => 111,  179 => 110,  175 => 109,  108 => 44,  97 => 42,  93 => 41,  83 => 33,  72 => 31,  68 => 30,  47 => 12,  39 => 9,  32 => 4,  29 => 3,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends 'mainBundle::layout.html.twig' %}*/
/* {% block content %}*/
/*     <div id="mainBody">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <!-- Sidebar ================================================== -->*/
/*                 <div id="sidebar" class="span3">*/
/*                     <div class="well well-small"><a id="myCart" href="{{ path('cart')}}"><img src="{{ asset('themes/images/ico-cart.png') }}" alt="cart">3 Items in your cart  <span class="badge badge-warning pull-right">$155.00</span></a></div>*/
/*                     <ul id="sideManu" class="nav nav-tabs nav-stacked">*/
/*                       <div class="thumbnail">*/
/*                         <form class="form-horizontal" action="{{ path('filtre') }}" method="post">*/
/*                             <h4>Your personal information</h4>*/
/*                             <div class="control-group">*/
/*                                 Type : */
/* */
/*                                 <select id="prod" class="span2" name="type">*/
/*                                     <option value="1">Produit</option>*/
/*                                     <option value="2">Service</option>*/
/* */
/*                                 </select>*/
/*                                 <br/>*/
/*                                 <br/>*/
/* */
/*                                */
/*                                 <div id="catp">*/
/*                                     Categorie : */
/*                                 <select class="span2" name="catp">*/
/*                                     <option value="0">Tous</option>*/
/*                                     {% for cat in catp%}*/
/*                                     <option value="{{cat.id}}">{{cat.libelle}}</option>*/
/*                                    {% endfor %}*/
/* */
/*                                 </select>*/
/*                                 </div>*/
/*                                 */
/*                                  <div id="cats" style="display: none;">*/
/*                                      Categorie :*/
/*                                 <select class="span2" name="cats">*/
/*                                      <option value="0">Tous</option>*/
/*                                       {% for cat in cats%}*/
/*                                     <option value="{{cat.id}}">{{cat.libelle}}</option>*/
/*                                    {% endfor %}*/
/* */
/*                                 </select>*/
/*                                 </div>*/
/*                                 */
/*                                 <br/>*/
/*                                 */
/*                                 Libelle : */
/* */
/*                                 <input class="span2" name="search" type="text" id="inputFname1" placeholder="First Name">*/
/*                                 <br/>*/
/*                                 <br/>*/
/*                                 Date Min : */
/*                                 <input class="span2" name="datemin" type="date" id="inputFname1" placeholder="First Name">*/
/*                                 <br/>*/
/*                                 <br/>*/
/*                                 Date Max : */
/*                                 <input class="span2" name="datemax" type="date" id="inputFname1" placeholder="First Name">         */
/*                                 <br/>*/
/*                                 <br/>*/
/*                                 <div id="changeProduit" >Prix Min/Max : */
/* */
/* */
/*                                     <input class="span1" name="prixmin" type="text" id="inputFname1" placeholder="Min">*/
/*                                     <input class="span1" name="prixmax" type="text" id="inputFname1" placeholder="Max">*/
/*                                 </div>*/
/* */
/*                                 <div id="changeService" style="display: none;">Gouvernorat : */
/* */
/*                                     <select class="span2" name="gouvernorat">*/
/*                                         <option value="">-</option>*/
/*                                         <option value="1">Ariana</option>*/
/*                                         <option value="2">Beja</option>*/
/*                                         <option value="3">Ben Arous</option>*/
/*                                         <option value="4">Bizerte</option>*/
/*                                         <option value="5">Gabes</option>*/
/*                                         <option value="6">Gafsa</option>*/
/*                                         <option value="7">Jendouba</option>*/
/*                                         <option value="8">Kairouan</option>*/
/*                                         <option value="9">Kasserine</option>*/
/*                                         <option value="10">Kebili</option>*/
/*                                         <option value="11">Le Kef</option>*/
/*                                         <option value="12">Mahdia</option>*/
/*                                         <option value="13">La Manouba</option>*/
/*                                         <option value="14">Médenine</option>*/
/*                                         <option value="15">Monastir</option>*/
/*                                         <option value="16">Nabeul</option>*/
/*                                         <option value="17">Sfax</option>*/
/*                                         <option value="18">Sidi Bouzid</option>*/
/*                                         <option value="19">Siliana</option>*/
/*                                         <option value="20">Sousse</option>*/
/*                                         <option value="21">Tataouine</option>*/
/*                                         <option value="22">Tozeur</option>*/
/*                                         <option value="23">Tunis</option>*/
/*                                         <option value="24">Zaghouan</option>*/
/*                                     </select>*/
/*                                 </div>*/
/*                                 <br/>*/
/*                                 <br/>*/
/*                                 <input class="btn btn-primary" type="submit" value="Rechercher" />*/
/*                             </div>*/
/*                         </form>*/
/*                     </div><br/> */
/*         */
/*                     </ul>*/
/*                     <br/>*/
/*                     {% for nbproduit in nbproduits %}*/
/*                     <div class="thumbnail">*/
/*                         <img src="{{ asset(nbproduit.image) }}" alt="Bootshop panasonoc New camera"/>*/
/*                         <div class="caption">*/
/*                             <h5>{{nbproduit.libelle}}</h5>*/
/*                             <h4 style="text-align:center"><a class="btn" href=""> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">{{nbproduit.prix}} DT</a></h4>*/
/*                         </div>*/
/*                     </div><br/>*/
/*                        {% endfor %}*/
/*                     <div class="thumbnail">*/
/*                         <img src="{{ asset('themes/images/payment_methods.png') }}" title="Bootshop Payment Methods" alt="Payments Methods">*/
/*                         <div class="caption">*/
/*                             <h5>Payment Methods</h5>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- Sidebar end=============================================== -->*/
/*                 <div class="span9">*/
/*                     <ul class="breadcrumb">*/
/*                         <li><a href="{{ path('main_homepage') }}">Home</a> <span class="divider">/</span></li>*/
/*                         <li class="active">Services Name</li>*/
/*                     </ul>*/
/*                     <h3> Services Name <small class="pull-right"> {{servicess|length}} services are available </small></h3>	*/
/*                     <hr class="soft"/>*/
/*                     <p>*/
/*                         Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - that is why our goods are so popular and we have a great number of faithful customers all over the country.*/
/*                     </p>*/
/*                     <hr class="soft"/>*/
/*                     <form class="form-horizontal span6">*/
/*                         <div class="control-group">*/
/*                             <label class="control-label alignL">Sort By </label>*/
/*                             <select>*/
/*                                 <option>Priduct name A - Z</option>*/
/*                                 <option>Priduct name Z - A</option>*/
/*                                 <option>Priduct Stoke</option>*/
/*                                 <option>Price Lowest first</option>*/
/*                             </select>*/
/*                         </div>*/
/*                     </form>*/
/* */
/*                     <div id="myTab" class="pull-right">*/
/*                         <a href="#listView" data-toggle="tab"><span class="btn btn-large"><i class="icon-list"></i></span></a>*/
/*                         <a href="#blockView" data-toggle="tab"><span class="btn btn-large btn-primary"><i class="icon-th-large"></i></span></a>*/
/*                     </div>*/
/*                     <br class="clr"/>*/
/*                     <div class="tab-content">*/
/*                         <div class="tab-pane" id="listView">*/
/*                            {% for service in services %}*/
/*                              <div class="row">	  */
/*                                 <div class="span2">*/
/*                                     <img src="{{ asset('http://localhost/allfordeal/pidev/images/service.png') }}" alt=""/>*/
/*                                 </div>*/
/*                                 <div class="span4">*/
/*                                     <h3>New | Available</h3>				*/
/*                                     <hr class="soft"/>*/
/*                                     <h5>{{service.libelle}} </h5>*/
/*                                     <p>*/
/*                                         {{service.description}}*/
/*                                     </p>*/
/*                                     <a class="btn btn-small pull-right" href="">View Details</a>*/
/*                                     <br class="clr"/>*/
/*                                 </div>*/
/*                                 <div class="span3 alignR">*/
/*                                     <form class="form-horizontal qtyFrm">*/
/*                                         <h3> {{service.libelle}}</h3>*/
/*                                         <label class="checkbox">*/
/*                                             <input type="checkbox">  Adds product to compair*/
/*                                         </label><br/>*/
/* */
/*                                         <a href="" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>*/
/*                                         <a href="" class="btn btn-large"><i class="icon-zoom-in"></i></a>*/
/* */
/*                                     </form>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <hr class="soft"/>*/
/*                             {% endfor %}*/
/*                         </div>*/
/* */
/*                         <div class="tab-pane  active" id="blockView">*/
/*                             <ul class="thumbnails">*/
/*                                  {% for service in services %}*/
/*                                 <li class="span3">*/
/*                                     <div class="thumbnail">*/
/*                                         <a href=""><img src="{{ asset('http://localhost/allfordeal/pidev/images/service.png') }}" alt=""/></a>*/
/*                                         <div class="caption">*/
/*                                             <h5>{{service.libelle}}</h5>*/
/*                                             <p> */
/*                                                 {{service.description}}*/
/*                                             </p>*/
/*                                             <h4 style="text-align:center"><a class="btn" href=""> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">Demander</a></h4>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </li>*/
/*                              {% endfor %}  */
/*                             </ul>*/
/*                             <hr class="soft"/>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <a href="{{ path('compair') }}" class="btn btn-large pull-right">Compair Product</a>*/
/*                     <div class="pagination">*/
/*                         <ul>*/
/*                             {% if type ==2 %}*/
/*                            {% if pages == 1%}*/
/*                             <li><a href="{{ path('services',{'categorie':categorie,'page': pages}) }}">&lsaquo;</a></li>*/
/*                             {% else %}*/
/*                             <li><a href="{{ path('services',{'categorie':categorie,'page': pages-1}) }}">&lsaquo;</a></li>*/
/*                             {% endif%}*/
/*                             {% set i=1 %}*/
/*                            */
/*                             {% for p in 0..(servicess|length)//6 %}*/
/*                             <li><a href="{{ path('services',{'categorie':categorie,'page': i}) }}">{{i}}</a></li>*/
/*                              {% set i=i+1 %}*/
/*                             {% endfor %}*/
/*                             <li><a href="#">...</a></li>*/
/*                             {% if pages > (servicess|length)//6 %}*/
/*                             <li><a href="{{ path('services',{'categorie':categorie,'page': pages}) }}">&rsaquo;</a></li>*/
/*                              {% else %}*/
/*                              <li><a href="{{ path('services',{'categorie':categorie,'page': pages+1}) }}">&rsaquo;</a></li>*/
/*                                {% endif%}*/
/*                             */
/*                             */
/*                                {% elseif type ==1%}*/
/*                                {% if pages == 1%}*/
/*                             <li><a href="{{ path('rechercheproduits3',{'page': pages}) }}">&lsaquo;</a></li>*/
/*                             {% else %}*/
/*                             <li><a href="{{ path('rechercheproduits3',{'page': pages-1})}}">&lsaquo;</a></li>*/
/*                             {% endif%}*/
/*                             {% set i=1 %}*/
/*                            */
/*                             {% for p in 0..(servicess|length)//6 %}*/
/*                             <li><a href="{{ path('rechercheproduits3',{'page': i})}}">{{i}}</a></li>*/
/*                              {% set i=i+1 %}*/
/*                             {% endfor %}*/
/*                             <li><a href="#">...</a></li>*/
/*                             {% if pages > (servicess|length)//6 %}*/
/*                             <li><a href="{{path('rechercheproduits3',{'page': pages})}}">&rsaquo;</a></li>*/
/*                              {% else %}*/
/*                              <li><a href="{{ path('rechercheproduits3',{'page': pages+1}) }}">&rsaquo;</a></li>*/
/*                                {% endif%}*/
/*                             */
/*                             {% endif %}*/
/*                         </ul>*/
/*                     </div>*/
/*                     <br class="clr"/>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %} */
/* {% block javascripts %}*/
/*     <script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/*     <script src="{{ path('fos_js_routing_js', {'callback': 'fos.Router.setData'}) }}"></script>*/
/*     <script>*/
/*         $(document).ready(function () {*/
/* */
/*             $('#prod').change(function () {*/
/* */
/*                 if ($(this).val() === '1') {*/
/*                    */
/*                     $('#changeService').hide();*/
/*                     $('#changeProduit').show();*/
/*                      $('#cats').hide();*/
/*                     $('#catp').show();*/
/* */
/*                 }*/
/* */
/*                 if ($('#prod').val() === '2') {*/
/*                     $('#changeService').show();*/
/*                     $('#changeProduit').hide();*/
/*                     $('#cats').show();*/
/*                     $('#catp').hide();*/
/* */
/*                 }*/
/* */
/* */
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
