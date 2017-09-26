<?php

/* mainBundle:Default:compair.html.twig */
class __TwigTemplate_5b4fc0c3fe88384041135706764a9787f2ea52b8b6b03f23b2581f1f020ba73f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("mainBundle::layout.html.twig", "mainBundle:Default:compair.html.twig", 2);
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
                        <li class=\"subMenu open\"><a> ELECTRONICS [230]</a>
                            <ul>
                                <li><a class=\"active\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("products");
        echo "\"><i class=\"icon-chevron-right\"></i>Cameras (100) </a></li>
                                <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("products");
        echo "\"><i class=\"icon-chevron-right\"></i>Computers, Tablets & laptop (30)</a></li>
                                <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("products");
        echo "\"><i class=\"icon-chevron-right\"></i>Mobile Phone (80)</a></li>
                                <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("products");
        echo "\"><i class=\"icon-chevron-right\"></i>Sound & Vision (15)</a></li>
                            </ul>
                        </li>
                        <li class=\"subMenu\"><a> CLOTHES [840] </a>
                            <ul style=\"display:none\">
                                <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("products");
        echo "\"><i class=\"icon-chevron-right\"></i>Women's Clothing (45)</a></li>
                                <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("products");
        echo "\"><i class=\"icon-chevron-right\"></i>Women's Shoes (8)</a></li>\t\t\t\t\t\t\t\t\t\t\t\t
                                <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("products");
        echo "\"><i class=\"icon-chevron-right\"></i>Women's Hand Bags (5)</a></li>\t
                                <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("products");
        echo "\"><i class=\"icon-chevron-right\"></i>Men's Clothings  (45)</a></li>
                                <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("products");
        echo "\"><i class=\"icon-chevron-right\"></i>Men's Shoes (6)</a></li>\t\t\t\t\t\t\t\t\t\t\t\t
                                <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("products");
        echo "\"><i class=\"icon-chevron-right\"></i>Kids Clothing (5)</a></li>\t\t\t\t\t\t\t\t\t\t\t\t
                                <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("products");
        echo "\"><i class=\"icon-chevron-right\"></i>Kids Shoes (3)</a></li>\t\t\t\t\t\t\t\t\t\t\t\t
                            </ul>
                        </li>
                        <li class=\"subMenu\"><a>FOOD AND BEVERAGES [1000]</a>
                            <ul style=\"display:none\">
                                <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("products");
        echo "\"><i class=\"icon-chevron-right\"></i>Angoves  (35)</a></li>
                                <li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("products");
        echo "\"><i class=\"icon-chevron-right\"></i>Bouchard Aine & Fils (8)</a></li>\t\t\t\t\t\t\t\t\t\t\t\t
                                <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("products");
        echo "\"><i class=\"icon-chevron-right\"></i>French Rabbit (5)</a></li>\t
                                <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("products");
        echo "\"><i class=\"icon-chevron-right\"></i>Louis Bernard  (45)</a></li>
                                <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("products");
        echo "\"><i class=\"icon-chevron-right\"></i>BIB Wine (Bag in Box) (8)</a></li>\t\t\t\t\t\t\t\t\t\t\t\t
                                <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("products");
        echo "\"><i class=\"icon-chevron-right\"></i>Other Liquors & Wine (5)</a></li>\t\t\t\t\t\t\t\t\t\t\t\t
                                <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("products");
        echo "\"><i class=\"icon-chevron-right\"></i>Garden (3)</a></li>\t\t\t\t\t\t\t\t\t\t\t\t
                                <li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("products");
        echo "\"><i class=\"icon-chevron-right\"></i>Khao Shong (11)</a></li>\t\t\t\t\t\t\t\t\t\t\t\t
                            </ul>
                        </li>
                        <li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("products");
        echo "\">HEALTH & BEAUTY [18]</a></li>
                        <li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("products");
        echo "\">SPORTS & LEISURE [58]</a></li>
                        <li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("products");
        echo "\">BOOKS & ENTERTAINMENTS [14]</a></li>
                    </ul>
                    <br/>
                    <div class=\"thumbnail\">
                        <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/products/panasonic.jpg"), "html", null, true);
        echo "\" alt=\"Bootshop panasonoc New camera\"/>
                        <div class=\"caption\">
                            <h5>Panasonic</h5>
                            <h4 style=\"text-align:center\"><a class=\"btn\" href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("product_details");
        echo "\"> <i class=\"icon-zoom-in\"></i></a> <a class=\"btn\" href=\"#\">Add to <i class=\"icon-shopping-cart\"></i></a> <a class=\"btn btn-primary\" href=\"#\">\$222.00</a></h4>
                        </div>
                    </div><br/>
                    <div class=\"thumbnail\">
                        <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/products/kindle.png"), "html", null, true);
        echo "\" title=\"Bootshop New Kindel\" alt=\"Bootshop Kindel\">
                        <div class=\"caption\">
                            <h5>Kindle</h5>
                            <h4 style=\"text-align:center\"><a class=\"btn\" href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("product_details");
        echo "\"> <i class=\"icon-zoom-in\"></i></a> <a class=\"btn\" href=\"#\">Add to <i class=\"icon-shopping-cart\"></i></a> <a class=\"btn btn-primary\" href=\"#\">\$222.00</a></h4>
                        </div>
                    </div><br/>
                    <div class=\"thumbnail\">
                        <img src=\"";
        // line 62
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
        // line 71
        echo $this->env->getExtension('routing')->getPath("main_homepage");
        echo "\">Home</a> <span class=\"divider\">/</span></li>
                        <li class=\"active\">Products Compairsition</li>
                    </ul>
                    <h3> Products Compairsition <small class=\"pull-right\"> 2 products are compaired </small></h3>\t
                    <hr class=\"soft\"/>

                    <table id=\"compairTbl\" class=\"table table-bordered\">
                        <thead>
                            <tr>
                                <th>Features</th>
                                <th>Product1 name here </th>
                                <th>Product2 name here</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>&nbsp;</td>
                                <td style=\"text-align:center\">
                                    <p class=\"justify\">
                                        Nowadays the lingerie industry is one of the most successful business spheres.
                                        We always stay in touch with the latest fashion tendencies - that is why our 
                                        goods are so popular and we have a great number of faithful customers all over the country.
                                    </p>
                                    <img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/products/1.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                                    <form class=\"form-horizontal qtyFrm\">
                                        <h3> \$222.00</h3><br/>
                                        <a href=\"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("product_details");
        echo "\" class=\"btn btn-large btn-primary\"> Add to <i class=\" icon-shopping-cart\"></i></a>
                                        <a href=\"";
        // line 98
        echo $this->env->getExtension('routing')->getPath("product_details");
        echo "\" class=\"btn btn-large\"><i class=\"icon-zoom-in\"></i></a>
                                    </form>
                                </td>
                                <td>
                                    <p class=\"justify\">
                                        Nowadays the lingerie industry is one of the most successful business spheres.
                                        We always stay in touch with the latest fashion tendencies - that is why our 
                                        goods are so popular and we have a great number of faithful customers all over the country.
                                    </p>
                                    <img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/products/3.jpg"), "html", null, true);
        echo "\" alt=\"\"/>

                                    <form class=\"form-horizontal qtyFrm\">
                                        <h3> \$190.00</h3>
                                        <br/>
                                        <a href=\"";
        // line 112
        echo $this->env->getExtension('routing')->getPath("product_details");
        echo "\" class=\"btn btn-large btn-primary\"> Add to <i class=\" icon-shopping-cart\"></i></a>
                                        <a href=\"";
        // line 113
        echo $this->env->getExtension('routing')->getPath("product_details");
        echo "\" class=\"btn btn-large\"><i class=\"icon-zoom-in\"></i></a>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td>Height</td>
                                <td>2\"</td>
                                <td>2\"</td>
                            </tr>
                            <tr>
                                <td>Deepth</td>
                                <td>5\"</td>
                                <td>5\"</td>
                            </tr>
                            <tr>
                                <td>Dimension</td>
                                <td>--</td>
                                <td>--</td>
                            </tr>
                            <tr>
                                <td>Width</td>
                                <td>6.5\"</td>
                                <td>6.5\"</td>
                            </tr>
                            <tr>
                                <td>Weight</td>
                                <td>0.5kg</td>
                                <td>0.5kg</td>
                            </tr>
                        </tbody>
                    </table>\t\t
                    <a href=\"";
        // line 144
        echo $this->env->getExtension('routing')->getPath("products");
        echo "\" class=\"btn btn-large pull-right\">Back Products Page</a>


                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "mainBundle:Default:compair.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 144,  246 => 113,  242 => 112,  234 => 107,  222 => 98,  218 => 97,  212 => 94,  186 => 71,  174 => 62,  167 => 58,  161 => 55,  154 => 51,  148 => 48,  141 => 44,  137 => 43,  133 => 42,  127 => 39,  123 => 38,  119 => 37,  115 => 36,  111 => 35,  107 => 34,  103 => 33,  99 => 32,  91 => 27,  87 => 26,  83 => 25,  79 => 24,  75 => 23,  71 => 22,  67 => 21,  59 => 16,  55 => 15,  51 => 14,  47 => 13,  38 => 9,  31 => 4,  28 => 3,  11 => 2,);
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
/*                     <div class="well well-small"><a id="myCart" href="{{ path('cart') }}"><img src="{{ asset('themes/images/ico-cart.png') }}" alt="cart">3 Items in your cart  <span class="badge badge-warning pull-right">$155.00</span></a></div>*/
/*                     <ul id="sideManu" class="nav nav-tabs nav-stacked">*/
/*                         <li class="subMenu open"><a> ELECTRONICS [230]</a>*/
/*                             <ul>*/
/*                                 <li><a class="active" href="{{ path('products') }}"><i class="icon-chevron-right"></i>Cameras (100) </a></li>*/
/*                                 <li><a href="{{ path('products') }}"><i class="icon-chevron-right"></i>Computers, Tablets & laptop (30)</a></li>*/
/*                                 <li><a href="{{ path('products') }}"><i class="icon-chevron-right"></i>Mobile Phone (80)</a></li>*/
/*                                 <li><a href="{{ path('products') }}"><i class="icon-chevron-right"></i>Sound & Vision (15)</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li class="subMenu"><a> CLOTHES [840] </a>*/
/*                             <ul style="display:none">*/
/*                                 <li><a href="{{ path('products') }}"><i class="icon-chevron-right"></i>Women's Clothing (45)</a></li>*/
/*                                 <li><a href="{{ path('products') }}"><i class="icon-chevron-right"></i>Women's Shoes (8)</a></li>												*/
/*                                 <li><a href="{{ path('products') }}"><i class="icon-chevron-right"></i>Women's Hand Bags (5)</a></li>	*/
/*                                 <li><a href="{{ path('products') }}"><i class="icon-chevron-right"></i>Men's Clothings  (45)</a></li>*/
/*                                 <li><a href="{{ path('products') }}"><i class="icon-chevron-right"></i>Men's Shoes (6)</a></li>												*/
/*                                 <li><a href="{{ path('products') }}"><i class="icon-chevron-right"></i>Kids Clothing (5)</a></li>												*/
/*                                 <li><a href="{{ path('products') }}"><i class="icon-chevron-right"></i>Kids Shoes (3)</a></li>												*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li class="subMenu"><a>FOOD AND BEVERAGES [1000]</a>*/
/*                             <ul style="display:none">*/
/*                                 <li><a href="{{ path('products') }}"><i class="icon-chevron-right"></i>Angoves  (35)</a></li>*/
/*                                 <li><a href="{{ path('products') }}"><i class="icon-chevron-right"></i>Bouchard Aine & Fils (8)</a></li>												*/
/*                                 <li><a href="{{ path('products') }}"><i class="icon-chevron-right"></i>French Rabbit (5)</a></li>	*/
/*                                 <li><a href="{{ path('products') }}"><i class="icon-chevron-right"></i>Louis Bernard  (45)</a></li>*/
/*                                 <li><a href="{{ path('products') }}"><i class="icon-chevron-right"></i>BIB Wine (Bag in Box) (8)</a></li>												*/
/*                                 <li><a href="{{ path('products') }}"><i class="icon-chevron-right"></i>Other Liquors & Wine (5)</a></li>												*/
/*                                 <li><a href="{{ path('products') }}"><i class="icon-chevron-right"></i>Garden (3)</a></li>												*/
/*                                 <li><a href="{{ path('products') }}"><i class="icon-chevron-right"></i>Khao Shong (11)</a></li>												*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li><a href="{{ path('products') }}">HEALTH & BEAUTY [18]</a></li>*/
/*                         <li><a href="{{ path('products') }}">SPORTS & LEISURE [58]</a></li>*/
/*                         <li><a href="{{ path('products') }}">BOOKS & ENTERTAINMENTS [14]</a></li>*/
/*                     </ul>*/
/*                     <br/>*/
/*                     <div class="thumbnail">*/
/*                         <img src="{{ asset('themes/images/products/panasonic.jpg') }}" alt="Bootshop panasonoc New camera"/>*/
/*                         <div class="caption">*/
/*                             <h5>Panasonic</h5>*/
/*                             <h4 style="text-align:center"><a class="btn" href="{{ path('product_details') }}"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>*/
/*                         </div>*/
/*                     </div><br/>*/
/*                     <div class="thumbnail">*/
/*                         <img src="{{ asset('themes/images/products/kindle.png') }}" title="Bootshop New Kindel" alt="Bootshop Kindel">*/
/*                         <div class="caption">*/
/*                             <h5>Kindle</h5>*/
/*                             <h4 style="text-align:center"><a class="btn" href="{{ path('product_details') }}"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>*/
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
/*                         <li class="active">Products Compairsition</li>*/
/*                     </ul>*/
/*                     <h3> Products Compairsition <small class="pull-right"> 2 products are compaired </small></h3>	*/
/*                     <hr class="soft"/>*/
/* */
/*                     <table id="compairTbl" class="table table-bordered">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                 <th>Features</th>*/
/*                                 <th>Product1 name here </th>*/
/*                                 <th>Product2 name here</th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                             <tr>*/
/*                                 <td>&nbsp;</td>*/
/*                                 <td style="text-align:center">*/
/*                                     <p class="justify">*/
/*                                         Nowadays the lingerie industry is one of the most successful business spheres.*/
/*                                         We always stay in touch with the latest fashion tendencies - that is why our */
/*                                         goods are so popular and we have a great number of faithful customers all over the country.*/
/*                                     </p>*/
/*                                     <img src="{{ asset('themes/images/products/1.jpg') }}" alt=""/>*/
/*                                     <form class="form-horizontal qtyFrm">*/
/*                                         <h3> $222.00</h3><br/>*/
/*                                         <a href="{{ path('product_details') }}" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>*/
/*                                         <a href="{{ path('product_details') }}" class="btn btn-large"><i class="icon-zoom-in"></i></a>*/
/*                                     </form>*/
/*                                 </td>*/
/*                                 <td>*/
/*                                     <p class="justify">*/
/*                                         Nowadays the lingerie industry is one of the most successful business spheres.*/
/*                                         We always stay in touch with the latest fashion tendencies - that is why our */
/*                                         goods are so popular and we have a great number of faithful customers all over the country.*/
/*                                     </p>*/
/*                                     <img src="{{ asset('themes/images/products/3.jpg') }}" alt=""/>*/
/* */
/*                                     <form class="form-horizontal qtyFrm">*/
/*                                         <h3> $190.00</h3>*/
/*                                         <br/>*/
/*                                         <a href="{{ path('product_details') }}" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>*/
/*                                         <a href="{{ path('product_details') }}" class="btn btn-large"><i class="icon-zoom-in"></i></a>*/
/*                                     </form>*/
/*                                 </td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td>Height</td>*/
/*                                 <td>2"</td>*/
/*                                 <td>2"</td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td>Deepth</td>*/
/*                                 <td>5"</td>*/
/*                                 <td>5"</td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td>Dimension</td>*/
/*                                 <td>--</td>*/
/*                                 <td>--</td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td>Width</td>*/
/*                                 <td>6.5"</td>*/
/*                                 <td>6.5"</td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td>Weight</td>*/
/*                                 <td>0.5kg</td>*/
/*                                 <td>0.5kg</td>*/
/*                             </tr>*/
/*                         </tbody>*/
/*                     </table>		*/
/*                     <a href="{{ path('products') }}" class="btn btn-large pull-right">Back Products Page</a>*/
/* */
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %} */
