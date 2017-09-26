<?php

/* mainBundle:Default:products.html.twig */
class __TwigTemplate_d9dca1fd021aaeb83a7bd17dd0407c1958071f04ca003d748a5fd9381e675fb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("mainBundle::layout.html.twig", "mainBundle:Default:products.html.twig", 2);
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
                    </div>

                    </ul>
                    <br/>
                    
                    ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nbproduits"]) ? $context["nbproduits"] : $this->getContext($context, "nbproduits")));
        foreach ($context['_seq'] as $context["_key"] => $context["nbproduit"]) {
            // line 111
            echo "                        <div class=\"thumbnail\">
                            <img src=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["nbproduit"], "image", array())), "html", null, true);
            echo "\" alt=\"Bootshop panasonoc New camera\"/>
                            <div class=\"caption\">
                                <h5>";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($context["nbproduit"], "libelle", array()), "html", null, true);
            echo "</h5>
                                <h4 style=\"text-align:center\"><a class=\"btn\" href=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_details", array("id" => $this->getAttribute($context["nbproduit"], "id", array()))), "html", null, true);
            echo "\"> <i class=\"icon-zoom-in\"></i></a> <a class=\"btn\" href=\"#\">Add to <i class=\"icon-shopping-cart\"></i></a> <a class=\"btn btn-primary\" href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["nbproduit"], "prix", array()), "html", null, true);
            echo " DT</a></h4>
                            </div>
                        </div><br/>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nbproduit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "                    <div class=\"thumbnail\">
                        <img src=\"";
        // line 120
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
        // line 129
        echo $this->env->getExtension('routing')->getPath("main_homepage");
        echo "\">Home</a> <span class=\"divider\">/</span></li>
                        <li class=\"active\">Products Name</li>
                    </ul>
                    <h3> Products Name <small class=\"pull-right\"> ";
        // line 132
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["produitss"]) ? $context["produitss"] : $this->getContext($context, "produitss"))), "html", null, true);
        echo " products are available </small></h3>\t
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
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 158
            echo "                                <div class=\"row\">\t  
                                    <div class=\"span2\">
                                        <img src=\"";
            // line 160
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["produit"], "image", array())), "html", null, true);
            echo "\" alt=\"\"/>
                                    </div>
                                    <div class=\"span4\">
                                        <h3>New | Available</h3>\t\t\t\t
                                        <hr class=\"soft\"/>
                                        <h5>";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "libelle", array()), "html", null, true);
            echo " </h5>
                                        <p>
                                            ";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "description", array()), "html", null, true);
            echo "
                                        </p>
                                        <a class=\"btn btn-small pull-right\" href=\"";
            // line 169
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_details", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\">View Details</a>
                                        <br class=\"clr\"/>
                                    </div>
                                    <div class=\"span3 alignR\">
                                        <form class=\"form-horizontal qtyFrm\">
                                            <h3> ";
            // line 174
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo "</h3>
                                            <label class=\"checkbox\">
                                                <input type=\"checkbox\">  Adds product to compair
                                            </label><br/>

                                            <a href=\"";
            // line 179
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_details", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-large btn-primary\"> Add to <i class=\" icon-shopping-cart\"></i></a>
                                            <a href=\"";
            // line 180
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_details", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-large\"><i class=\"icon-zoom-in\"></i></a>

                                        </form>
                                    </div>
                                </div>
                                <hr class=\"soft\"/>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "                        </div>

                        <div class=\"tab-pane  active\" id=\"blockView\">
                            <ul class=\"thumbnails\">
                                ";
        // line 191
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 192
            echo "                                    <li class=\"span3\">
                                        <div class=\"thumbnail\">
                                            <a href=\"";
            // line 194
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_details", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["produit"], "image", array())), "html", null, true);
            echo "\" alt=\"\"/></a>
                                            <div class=\"caption\">
                                                <h5>";
            // line 196
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "libelle", array()), "html", null, true);
            echo "</h5>
                                                <p> 
                                                    ";
            // line 198
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "description", array()), "html", null, true);
            echo "
                                                </p>
                                                <h4 style=\"text-align:center\"><a class=\"btn\" href=\"";
            // line 200
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_details", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\"> <i class=\"icon-zoom-in\"></i></a> <a class=\"btn\" href=\"#\">Add to <i class=\"icon-shopping-cart\"></i></a> <a class=\"btn btn-primary\" href=\"#\">&euro;";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo "</a></h4>
                                            </div>
                                        </div>
                                    </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        echo "  
                            </ul>
                            <hr class=\"soft\"/>
                        </div>
                    </div>

                    <a href=\"";
        // line 210
        echo $this->env->getExtension('routing')->getPath("compair");
        echo "\" class=\"btn btn-large pull-right\">Compair Product</a>
                    <div class=\"pagination\">
                        <ul>
                            ";
        // line 213
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == 2)) {
            // line 214
            echo "                                ";
            if (((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")) == 1)) {
                // line 215
                echo "                                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("products", array("categorie" => (isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "page" => (isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")))), "html", null, true);
                echo "\">&lsaquo;</a></li>
                                    ";
            } else {
                // line 217
                echo "                                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("products", array("categorie" => (isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "page" => ((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")) - 1))), "html", null, true);
                echo "\">&lsaquo;</a></li>
                                    ";
            }
            // line 219
            echo "                                    ";
            $context["i"] = 1;
            // line 220
            echo "
                                ";
            // line 221
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, intval(floor((twig_length_filter($this->env, (isset($context["produitss"]) ? $context["produitss"] : $this->getContext($context, "produitss"))) / 6)))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 222
                echo "                                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("products", array("categorie" => (isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "page" => (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</a></li>
                                        ";
                // line 223
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 224
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 225
            echo "                                <li><a href=\"#\">...</a></li>
                                    ";
            // line 226
            if (((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")) > intval(floor((twig_length_filter($this->env, (isset($context["produitss"]) ? $context["produitss"] : $this->getContext($context, "produitss"))) / 6))))) {
                // line 227
                echo "                                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("products", array("categorie" => (isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "page" => (isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")))), "html", null, true);
                echo "\">&rsaquo;</a></li>
                                    ";
            } else {
                // line 229
                echo "                                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("products", array("categorie" => (isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "page" => ((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")) + 1))), "html", null, true);
                echo "\">&rsaquo;</a></li>
                                    ";
            }
            // line 231
            echo "

                            ";
        } elseif ((        // line 233
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == 1)) {
            // line 234
            echo "                                ";
            if (((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")) == 1)) {
                // line 235
                echo "                                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rechercheproduits2", array("page" => (isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")))), "html", null, true);
                echo "\">&lsaquo;</a></li>
                                    ";
            } else {
                // line 237
                echo "                                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rechercheproduits2", array("page" => ((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")) - 1))), "html", null, true);
                echo "\">&lsaquo;</a></li>
                                    ";
            }
            // line 239
            echo "                                    ";
            $context["i"] = 1;
            // line 240
            echo "
                                ";
            // line 241
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, intval(floor((twig_length_filter($this->env, (isset($context["produitss"]) ? $context["produitss"] : $this->getContext($context, "produitss"))) / 6)))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 242
                echo "                                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rechercheproduits2", array("page" => (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</a></li>
                                        ";
                // line 243
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 244
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 245
            echo "                                <li><a href=\"#\">...</a></li>
                                    ";
            // line 246
            if (((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")) > intval(floor((twig_length_filter($this->env, (isset($context["produitss"]) ? $context["produitss"] : $this->getContext($context, "produitss"))) / 6))))) {
                // line 247
                echo "                                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rechercheproduits2", array("page" => (isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")))), "html", null, true);
                echo "\">&rsaquo;</a></li>
                                    ";
            } else {
                // line 249
                echo "                                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rechercheproduits2", array("page" => ((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")) + 1))), "html", null, true);
                echo "\">&rsaquo;</a></li>
                                    ";
            }
            // line 251
            echo "
                            ";
        }
        // line 253
        echo "                        </ul>
                    </div>
                    <br class=\"clr\"/>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 261
    public function block_javascripts($context, array $blocks = array())
    {
        // line 262
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 263
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
        return "mainBundle:Default:products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  515 => 263,  510 => 262,  507 => 261,  496 => 253,  492 => 251,  486 => 249,  480 => 247,  478 => 246,  475 => 245,  469 => 244,  467 => 243,  460 => 242,  456 => 241,  453 => 240,  450 => 239,  444 => 237,  438 => 235,  435 => 234,  433 => 233,  429 => 231,  423 => 229,  417 => 227,  415 => 226,  412 => 225,  406 => 224,  404 => 223,  397 => 222,  393 => 221,  390 => 220,  387 => 219,  381 => 217,  375 => 215,  372 => 214,  370 => 213,  364 => 210,  356 => 204,  343 => 200,  338 => 198,  333 => 196,  326 => 194,  322 => 192,  318 => 191,  312 => 187,  299 => 180,  295 => 179,  287 => 174,  279 => 169,  274 => 167,  269 => 165,  261 => 160,  257 => 158,  253 => 157,  225 => 132,  219 => 129,  207 => 120,  204 => 119,  192 => 115,  188 => 114,  183 => 112,  180 => 111,  176 => 110,  108 => 44,  97 => 42,  93 => 41,  83 => 33,  72 => 31,  68 => 30,  47 => 12,  39 => 9,  32 => 4,  29 => 3,  11 => 2,);
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
/* <div class="thumbnail">*/
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
/*                     </div>*/
/* */
/*                     </ul>*/
/*                     <br/>*/
/*                     */
/*                     {% for nbproduit in nbproduits %}*/
/*                         <div class="thumbnail">*/
/*                             <img src="{{ asset(nbproduit.image) }}" alt="Bootshop panasonoc New camera"/>*/
/*                             <div class="caption">*/
/*                                 <h5>{{nbproduit.libelle}}</h5>*/
/*                                 <h4 style="text-align:center"><a class="btn" href="{{ path('product_details',{'id':nbproduit.id}) }}"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">{{nbproduit.prix}} DT</a></h4>*/
/*                             </div>*/
/*                         </div><br/>*/
/*                     {% endfor %}*/
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
/*                         <li class="active">Products Name</li>*/
/*                     </ul>*/
/*                     <h3> Products Name <small class="pull-right"> {{produitss|length}} products are available </small></h3>	*/
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
/*                             {% for produit in produits %}*/
/*                                 <div class="row">	  */
/*                                     <div class="span2">*/
/*                                         <img src="{{ asset(produit.image) }}" alt=""/>*/
/*                                     </div>*/
/*                                     <div class="span4">*/
/*                                         <h3>New | Available</h3>				*/
/*                                         <hr class="soft"/>*/
/*                                         <h5>{{produit.libelle}} </h5>*/
/*                                         <p>*/
/*                                             {{produit.description}}*/
/*                                         </p>*/
/*                                         <a class="btn btn-small pull-right" href="{{ path('product_details',{'id':produit.id}) }}">View Details</a>*/
/*                                         <br class="clr"/>*/
/*                                     </div>*/
/*                                     <div class="span3 alignR">*/
/*                                         <form class="form-horizontal qtyFrm">*/
/*                                             <h3> {{produit.prix}}</h3>*/
/*                                             <label class="checkbox">*/
/*                                                 <input type="checkbox">  Adds product to compair*/
/*                                             </label><br/>*/
/* */
/*                                             <a href="{{ path('product_details',{'id':produit.id}) }}" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>*/
/*                                             <a href="{{ path('product_details',{'id':produit.id}) }}" class="btn btn-large"><i class="icon-zoom-in"></i></a>*/
/* */
/*                                         </form>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <hr class="soft"/>*/
/*                             {% endfor %}*/
/*                         </div>*/
/* */
/*                         <div class="tab-pane  active" id="blockView">*/
/*                             <ul class="thumbnails">*/
/*                                 {% for produit in produits %}*/
/*                                     <li class="span3">*/
/*                                         <div class="thumbnail">*/
/*                                             <a href="{{ path('product_details',{'id':produit.id}) }}"><img src="{{ asset(produit.image) }}" alt=""/></a>*/
/*                                             <div class="caption">*/
/*                                                 <h5>{{produit.libelle}}</h5>*/
/*                                                 <p> */
/*                                                     {{produit.description}}*/
/*                                                 </p>*/
/*                                                 <h4 style="text-align:center"><a class="btn" href="{{ path('product_details',{'id':produit.id}) }}"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;{{produit.prix}}</a></h4>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                 {% endfor %}  */
/*                             </ul>*/
/*                             <hr class="soft"/>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <a href="{{ path('compair') }}" class="btn btn-large pull-right">Compair Product</a>*/
/*                     <div class="pagination">*/
/*                         <ul>*/
/*                             {% if type ==2 %}*/
/*                                 {% if pages == 1%}*/
/*                                     <li><a href="{{ path('products',{'categorie':categorie,'page': pages}) }}">&lsaquo;</a></li>*/
/*                                     {% else %}*/
/*                                     <li><a href="{{ path('products',{'categorie':categorie,'page': pages-1}) }}">&lsaquo;</a></li>*/
/*                                     {% endif%}*/
/*                                     {% set i=1 %}*/
/* */
/*                                 {% for p in 0..(produitss|length)//6 %}*/
/*                                     <li><a href="{{ path('products',{'categorie':categorie,'page': i}) }}">{{i}}</a></li>*/
/*                                         {% set i=i+1 %}*/
/*                                     {% endfor %}*/
/*                                 <li><a href="#">...</a></li>*/
/*                                     {% if pages > (produitss|length)//6 %}*/
/*                                     <li><a href="{{ path('products',{'categorie':categorie,'page': pages}) }}">&rsaquo;</a></li>*/
/*                                     {% else %}*/
/*                                     <li><a href="{{ path('products',{'categorie':categorie,'page': pages+1}) }}">&rsaquo;</a></li>*/
/*                                     {% endif%}*/
/* */
/* */
/*                             {% elseif type ==1%}*/
/*                                 {% if pages == 1%}*/
/*                                     <li><a href="{{ path('rechercheproduits2',{'page': pages}) }}">&lsaquo;</a></li>*/
/*                                     {% else %}*/
/*                                     <li><a href="{{ path('rechercheproduits2',{'page': pages-1})}}">&lsaquo;</a></li>*/
/*                                     {% endif%}*/
/*                                     {% set i=1 %}*/
/* */
/*                                 {% for p in 0..(produitss|length)//6 %}*/
/*                                     <li><a href="{{ path('rechercheproduits2',{'page': i})}}">{{i}}</a></li>*/
/*                                         {% set i=i+1 %}*/
/*                                     {% endfor %}*/
/*                                 <li><a href="#">...</a></li>*/
/*                                     {% if pages > (produitss|length)//6 %}*/
/*                                     <li><a href="{{path('rechercheproduits2',{'page': pages})}}">&rsaquo;</a></li>*/
/*                                     {% else %}*/
/*                                     <li><a href="{{ path('rechercheproduits2',{'page': pages+1}) }}">&rsaquo;</a></li>*/
/*                                     {% endif%}*/
/* */
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
