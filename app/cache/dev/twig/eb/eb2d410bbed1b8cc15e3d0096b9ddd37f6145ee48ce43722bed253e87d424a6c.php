<?php

/* mainBundle:Default:cart.html.twig */
class __TwigTemplate_d6cc3123031e701fbcbf68310bc479c7d3ff3405fdb4b2f8d894e95915bc2e40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("mainBundle::layout.html.twig", "mainBundle:Default:cart.html.twig", 2);
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
                    ";
        // line 9
        $context["tot"] = 0;
        // line 10
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 11
            echo "                        ";
            $context["tot"] = ((isset($context["tot"]) ? $context["tot"] : $this->getContext($context, "tot")) + $this->getAttribute($context["produit"], "prix", array()));
            // line 12
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "                    <div class=\"well well-small\"><a id=\"myCart\" href=\"";
        echo $this->env->getExtension('routing')->getPath("cart");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/ico-cart.png"), "html", null, true);
        echo "\" alt=\"cart\">Panier : ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))), "html", null, true);
        echo " Produits<span class=\"badge badge-warning pull-right\">";
        echo twig_escape_filter($this->env, (isset($context["tot"]) ? $context["tot"] : $this->getContext($context, "tot")), "html", null, true);
        echo " DT</span></a></div>
                    
              
                    <br/>
                    <div class=\"thumbnail\">
                        <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/products/panasonic.jpg"), "html", null, true);
        echo "\" alt=\"Bootshop panasonoc New camera\"/>
                        <div class=\"caption\">
                            <h5>Panasonic</h5>
                            <h4 style=\"text-align:center\"><a class=\"btn\" href=\"product_details.html\"> <i class=\"icon-zoom-in\"></i></a> <a class=\"btn\" href=\"#\">Add to <i class=\"icon-shopping-cart\"></i></a> <a class=\"btn btn-primary\" href=\"#\">\$222.00</a></h4>
                        </div>
                    </div><br/>
                    <div class=\"thumbnail\">
                        <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/products/kindle.png"), "html", null, true);
        echo "\" title=\"Bootshop New Kindel\" alt=\"Bootshop Kindel\">
                        <div class=\"caption\">
                            <h5>Kindle</h5>
                            <h4 style=\"text-align:center\"><a class=\"btn\" href=\"product_details.html\"> <i class=\"icon-zoom-in\"></i></a> <a class=\"btn\" href=\"#\">Add to <i class=\"icon-shopping-cart\"></i></a> <a class=\"btn btn-primary\" href=\"#\">\$222.00</a></h4>
                        </div>
                    </div><br/>
                    <div class=\"thumbnail\">
                        <img src=\"";
        // line 32
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
        // line 41
        echo $this->env->getExtension('routing')->getPath("main_homepage");
        echo "\">Home</a> <span class=\"divider\">/</span></li>
                        <li class=\"active\"> PANIER</li>
                    </ul>
                    <h3>  PANIER [ <small>";
        // line 44
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))), "html", null, true);
        echo " produits </small>]<a href=\"";
        echo $this->env->getExtension('routing')->getPath("main_homepage");
        echo "\" class=\"btn btn-large pull-right\"><i class=\"icon-arrow-left\"></i> Continuer l'achat </a></h3>\t
                    <hr class=\"soft\"/>


                    <table class=\"table table-bordered\">
                        <thead>
                            <tr>
                                <th>Produit</th>
                                <th>Description</th>
                                <th>Quantité / Modifier</th>
                                <th>Prix unitaire</th>
                                <th>Prix total</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 59
        $context["i"] = 0;
        // line 60
        echo "
                            ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 62
            echo "
                                <tr class='prod'>
                                    <td> <img width=\"60\" src=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/products/8.jpg"), "html", null, true);
            echo "\" alt=\"\"/></td>
                                    <td>
                                        <h4>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "libelle", array()), "html", null, true);
            echo "</h4>
                                        ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "description", array()), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        <div class=\"input-append\">
                                            <input class=\"span1\" style=\"max-width:34px\" value=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["paniers"]) ? $context["paniers"] : $this->getContext($context, "paniers")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "quantite", array()), "html", null, true);
            echo "\" min='1' type=\"number\">
                                            <button  class=\"btn\" type=\"button\"><i class=\"icon-minus\"></i></button>
                                            <button  class=\"btn\" type=\"button\"><i class=\"icon-plus\"></i></button>
                                            <a class=\"btn btn-danger\" href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("remove_product_panier", array("idmembre" => 1, "idproduit" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\" ><i class=\"icon-remove icon-white\"></i></a>\t\t\t\t
                                        </div>
                                    </td>                                    
                                    <td><p class=\"prixUnitaire\">";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo "</p></td>
                                    <td><p class=\"prixTotal\">";
            // line 78
            echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute($this->getAttribute((isset($context["paniers"]) ? $context["paniers"] : $this->getContext($context, "paniers")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "quantite", array())), "html", null, true);
            echo "</p></td>
                                </tr>
                                ";
            // line 80
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 81
            echo "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "
                            <tr>
                                <td colspan=\"6\" style=\"text-align:right\"><strong>TOTAL </strong> </td>
                                <td class=\"label label-important\" style=\"display:block\"><strong id=\"total\">";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["tot"]) ? $context["tot"] : $this->getContext($context, "tot")), "html", null, true);
        echo " DT</strong></td>
                            </tr>
                        </tbody>
                    </table>
                    <a href=\"\" class=\"btn btn-large\"><i class=\"icon-arrow-left\"></i> Continuer l'achat </a>
                    <a id='pay' href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("payer");
        echo "\" class=\"btn btn-large pull-right\">Suivant <i class=\"icon-arrow-right\"></i></a>

                </div>
            </div></div>
    </div>
";
    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        // line 98
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
    <script>
        function total() {
            var total = 0;
            \$(\".prixTotal\").each(function () {
                total = total + parseInt(\$(this).text(), 10);
            });
            \$(\"#total\").text(total+\" DT\");
            \$(\".badge\").text(total+\" DT\");
            //\$(\"#pay\").attr(\"href\",url);
        }
        function totalQuantite() {
            var unit = \$(this).parent().parent().siblings().children(\".prixUnitaire\").text();
            \$(this).parent().parent().siblings().children(\".prixTotal\").text(unit * quantite);
        }
        \$(document).ready(function () {
            total();
            \$('.btn:has(> i.icon-minus)').click(function () {
                var quantite = \$(this).siblings('.span1').val() - 1;
                if (quantite > 0) {
                    \$(this).siblings('.span1').val(quantite);
                    var unit = \$(this).parent().parent().siblings().children(\".prixUnitaire\").text();
                    \$(this).parent().parent().siblings().children(\".prixTotal\").text(unit * quantite);
                }
                total();
            });
            \$('.btn:has(> i.icon-plus)').click(function () {
                var quantite = parseInt(\$(this).siblings('.span1').val(), 10) + 1;
                \$(this).siblings('.span1').val(quantite);
                var unit = \$(this).parent().parent().siblings().children(\".prixUnitaire\").text();
                \$(this).parent().parent().siblings().children(\".prixTotal\").text(unit * quantite);
                total();
            });
            \$('.span1').change(function () {
                var unit = \$(this).parent().parent().siblings().children(\".prixUnitaire\").text();
                \$(this).parent().parent().siblings().children(\".prixTotal\").text(unit * \$(this).val());
                total();
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "mainBundle:Default:cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 99,  213 => 98,  210 => 97,  200 => 91,  192 => 86,  187 => 83,  180 => 81,  178 => 80,  173 => 78,  169 => 77,  163 => 74,  157 => 71,  150 => 67,  146 => 66,  141 => 64,  137 => 62,  133 => 61,  130 => 60,  128 => 59,  108 => 44,  102 => 41,  90 => 32,  80 => 25,  70 => 18,  55 => 13,  49 => 12,  46 => 11,  41 => 10,  39 => 9,  32 => 4,  29 => 3,  11 => 2,);
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
/*                     {% set tot=0 %}*/
/*                     {% for produit in produits %}*/
/*                         {% set tot=tot+produit.prix %}*/
/*                     {% endfor %}*/
/*                     <div class="well well-small"><a id="myCart" href="{{ path('cart') }}"><img src="{{ asset('themes/images/ico-cart.png') }}" alt="cart">Panier : {{produits|length}} Produits<span class="badge badge-warning pull-right">{{tot}} DT</span></a></div>*/
/*                     */
/*               */
/*                     <br/>*/
/*                     <div class="thumbnail">*/
/*                         <img src="{{ asset('themes/images/products/panasonic.jpg') }}" alt="Bootshop panasonoc New camera"/>*/
/*                         <div class="caption">*/
/*                             <h5>Panasonic</h5>*/
/*                             <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>*/
/*                         </div>*/
/*                     </div><br/>*/
/*                     <div class="thumbnail">*/
/*                         <img src="{{ asset('themes/images/products/kindle.png') }}" title="Bootshop New Kindel" alt="Bootshop Kindel">*/
/*                         <div class="caption">*/
/*                             <h5>Kindle</h5>*/
/*                             <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>*/
/*                         </div>*/
/*                     </div><br/>*/
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
/*                         <li class="active"> PANIER</li>*/
/*                     </ul>*/
/*                     <h3>  PANIER [ <small>{{produits|length}} produits </small>]<a href="{{ path('main_homepage') }}" class="btn btn-large pull-right"><i class="icon-arrow-left"></i> Continuer l'achat </a></h3>	*/
/*                     <hr class="soft"/>*/
/* */
/* */
/*                     <table class="table table-bordered">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                 <th>Produit</th>*/
/*                                 <th>Description</th>*/
/*                                 <th>Quantité / Modifier</th>*/
/*                                 <th>Prix unitaire</th>*/
/*                                 <th>Prix total</th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                             {% set i=0 %}*/
/* */
/*                             {% for produit in produits %}*/
/* */
/*                                 <tr class='prod'>*/
/*                                     <td> <img width="60" src="{{ asset('themes/images/products/8.jpg') }}" alt=""/></td>*/
/*                                     <td>*/
/*                                         <h4>{{produit.libelle}}</h4>*/
/*                                         {{produit.description}}*/
/*                                     </td>*/
/*                                     <td>*/
/*                                         <div class="input-append">*/
/*                                             <input class="span1" style="max-width:34px" value="{{paniers[i].quantite}}" min='1' type="number">*/
/*                                             <button  class="btn" type="button"><i class="icon-minus"></i></button>*/
/*                                             <button  class="btn" type="button"><i class="icon-plus"></i></button>*/
/*                                             <a class="btn btn-danger" href="{{ path('remove_product_panier',{'idmembre':1,'idproduit':produit.id}) }}" ><i class="icon-remove icon-white"></i></a>				*/
/*                                         </div>*/
/*                                     </td>                                    */
/*                                     <td><p class="prixUnitaire">{{produit.prix}}</p></td>*/
/*                                     <td><p class="prixTotal">{{ produit.prix * paniers[i].quantite }}</p></td>*/
/*                                 </tr>*/
/*                                 {% set i= i+1 %}*/
/* */
/*                             {% endfor %}*/
/* */
/*                             <tr>*/
/*                                 <td colspan="6" style="text-align:right"><strong>TOTAL </strong> </td>*/
/*                                 <td class="label label-important" style="display:block"><strong id="total">{{tot}} DT</strong></td>*/
/*                             </tr>*/
/*                         </tbody>*/
/*                     </table>*/
/*                     <a href="" class="btn btn-large"><i class="icon-arrow-left"></i> Continuer l'achat </a>*/
/*                     <a id='pay' href="{{ path('payer') }}" class="btn btn-large pull-right">Suivant <i class="icon-arrow-right"></i></a>*/
/* */
/*                 </div>*/
/*             </div></div>*/
/*     </div>*/
/* {% endblock %} */
/* {% block javascripts %}*/
/*     <script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/*     <script src="{{ path('fos_js_routing_js', {'callback': 'fos.Router.setData'}) }}"></script>*/
/*     <script>*/
/*         function total() {*/
/*             var total = 0;*/
/*             $(".prixTotal").each(function () {*/
/*                 total = total + parseInt($(this).text(), 10);*/
/*             });*/
/*             $("#total").text(total+" DT");*/
/*             $(".badge").text(total+" DT");*/
/*             //$("#pay").attr("href",url);*/
/*         }*/
/*         function totalQuantite() {*/
/*             var unit = $(this).parent().parent().siblings().children(".prixUnitaire").text();*/
/*             $(this).parent().parent().siblings().children(".prixTotal").text(unit * quantite);*/
/*         }*/
/*         $(document).ready(function () {*/
/*             total();*/
/*             $('.btn:has(> i.icon-minus)').click(function () {*/
/*                 var quantite = $(this).siblings('.span1').val() - 1;*/
/*                 if (quantite > 0) {*/
/*                     $(this).siblings('.span1').val(quantite);*/
/*                     var unit = $(this).parent().parent().siblings().children(".prixUnitaire").text();*/
/*                     $(this).parent().parent().siblings().children(".prixTotal").text(unit * quantite);*/
/*                 }*/
/*                 total();*/
/*             });*/
/*             $('.btn:has(> i.icon-plus)').click(function () {*/
/*                 var quantite = parseInt($(this).siblings('.span1').val(), 10) + 1;*/
/*                 $(this).siblings('.span1').val(quantite);*/
/*                 var unit = $(this).parent().parent().siblings().children(".prixUnitaire").text();*/
/*                 $(this).parent().parent().siblings().children(".prixTotal").text(unit * quantite);*/
/*                 total();*/
/*             });*/
/*             $('.span1').change(function () {*/
/*                 var unit = $(this).parent().parent().siblings().children(".prixUnitaire").text();*/
/*                 $(this).parent().parent().siblings().children(".prixTotal").text(unit * $(this).val());*/
/*                 total();*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}    */
