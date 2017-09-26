<?php

/* mainBundle:Default:productDetails.html.twig */
class __TwigTemplate_c8a4ac2df6a185dbc84350d9528fb71ef6ca02d75a5cc223c68214171f187499 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("mainBundle::layout.html.twig", "mainBundle:Default:productDetails.html.twig", 2);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "
    
    <style>
        .btn-grey{
            background-color:#D8D8D8;
            color:#FFF;
        }
        .rating-block{
            background-color:#FAFAFA;
            border:1px solid #EFEFEF;
            padding:15px 15px 20px 15px;
            border-radius:3px;
        }
        .bold{
            font-weight:700;
        }
        .padding-bottom-7{
            padding-bottom:7px;
        }

        .review-block{
            background-color:#FAFAFA;
            border:1px solid #EFEFEF;
            padding:15px;
            border-radius:3px;
            margin-bottom:15px;
        }
        .review-block-name{
            font-size:12px;
            margin:10px 0;
        }
        .review-block-date{
            font-size:12px;
        }
        .review-block-rate{
            font-size:13px;
            margin-bottom:15px;
            margin-top : 10px;
        }
        .review-block-title{
            font-size:15px;
            font-weight:700;
            margin-bottom:10px;
        }
        .review-block-description{
            font-size:13px;
        }
        
    </style>
";
    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
        // line 55
        echo "    <div id=\"mainBody\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- Sidebar ================================================== -->
                <div id=\"sidebar\" class=\"span3\">
                    <div class=\"well well-small\"><a id=\"myCart\" href=\"product_summary.html\"><img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/ico-cart.png"), "html", null, true);
        echo "\" alt=\"cart\">3 Items in your cart  <span class=\"badge badge-warning pull-right\">\$155.00</span></a></div>
                    
                    <br/>
                    <div class=\"thumbnail\">
                        <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/products/panasonic.jpg"), "html", null, true);
        echo "\" alt=\"Bootshop panasonoc New camera\"/>
                        <div class=\"caption\">
                            <h5>Panasonic</h5>
                            <h4 style=\"text-align:center\"><a class=\"btn\" href=\"product_details.html\"> <i class=\"icon-zoom-in\"></i></a> <a class=\"btn\" href=\"#\">Add to <i class=\"icon-shopping-cart\"></i></a> <a class=\"btn btn-primary\" href=\"#\">\$222.00</a></h4>
                        </div>
                    </div><br/>
                    <div class=\"thumbnail\">
                        <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/products/kindle.png"), "html", null, true);
        echo "\" title=\"Bootshop New Kindel\" alt=\"Bootshop Kindel\">
                        <div class=\"caption\">
                            <h5>Kindle</h5>
                            <h4 style=\"text-align:center\"><a class=\"btn\" href=\"product_details.html\"> <i class=\"icon-zoom-in\"></i></a> <a class=\"btn\" href=\"#\">Add to <i class=\"icon-shopping-cart\"></i></a> <a class=\"btn btn-primary\" href=\"#\">\$222.00</a></h4>
                        </div>
                    </div><br/>
                    <div class=\"thumbnail\">
                        <img src=\"";
        // line 78
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
        // line 87
        echo $this->env->getExtension('routing')->getPath("main_homepage");
        echo "\">Home</a> <span class=\"divider\">/</span></li>
                        <li><a href=\"\">Products</a> <span class=\"divider\">/</span></li>
                        <li class=\"active\">product Details</li>
                    </ul>\t
                    <div class=\"row\">\t  
                        <div id=\"gallery\" class=\"span3\">
                            <a href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/products/large/f1.jpg"), "html", null, true);
        echo "\" title=\"Fujifilm FinePix S2950 Digital Camera\">
                                <img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/products/large/3.jpg"), "html", null, true);
        echo "\" style=\"width:100%\" alt=\"Fujifilm FinePix S2950 Digital Camera\"/>
                            </a>
                            <div id=\"differentview\" class=\"moreOptopm carousel slide\">
                                <div class=\"carousel-inner\">
                                    <div class=\"item active\">
                                        <a href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/products/large/f1.jpg"), "html", null, true);
        echo "\"> <img style=\"width:29%\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/products/large/f1.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
                                        <a href=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/products/large/f2.jpg"), "html", null, true);
        echo "\"> <img style=\"width:29%\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/products/large/f2.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
                                        <a href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/products/large/f3.jpg"), "html", null, true);
        echo "\" > <img style=\"width:29%\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/products/large/f3.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
                                    </div>
                                    <div class=\"item\">
                                        <a href=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/products/large/f3.jpg"), "html", null, true);
        echo "\" > <img style=\"width:29%\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/products/large/f3.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
                                        <a href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/products/large/f1.jpg"), "html", null, true);
        echo "\"> <img style=\"width:29%\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/products/large/f1.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
                                        <a href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/products/large/f2.jpg"), "html", null, true);
        echo "\"> <img style=\"width:29%\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/products/large/f2.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
                                    </div>
                                </div>
                                <!--  
                                            <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">‹</a>
                                <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">›</a> 
                                -->
                            </div>
                            <div class=\"divRating\" >";
        // line 114
        echo $this->env->getExtension('star_rating_extension')->rating(4);
        echo "</div>
                            <div class=\"btn-toolbar\">
                                <div class=\"btn-group\">
                                    <span class=\"btn\"><i class=\"icon-envelope\"></i></span>
                                    <span class=\"btn\" ><i class=\"icon-print\"></i></span>
                                    <span class=\"btn\" ><i class=\"icon-zoom-in\"></i></span>
                                    <span class=\"btn\" ><i class=\"icon-star\"></i></span>
                                    <span class=\"btn\" ><i class=\" icon-thumbs-up\"></i></span>
                                    <span class=\"btn\" ><i class=\"icon-thumbs-down\"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class=\"span6\">
                            <h3>";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "libelle", array()), "html", null, true);
        echo " </h3>

                            <hr class=\"soft\"/>
                            <form class=\"form-horizontal qtyFrm\">
                                <div class=\"control-group\">
                                    <label class=\"control-label\"><span>\$";
        // line 132
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "prix", array()), "html", null, true);
        echo "</span></label>
                                    <div class=\"controls\">
                                        <input type=\"number\" class=\"span1\" placeholder=\"Qty.\"/>
                                        <a href=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("add_cart", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-large btn-primary pull-right\"> Add to cart <i class=\" icon-shopping-cart\"></i></a>
                                    </div>
                                </div>
                            </form>

                            <hr class=\"soft\"/>
                            <h4>100 items in stock</h4>
                            <form class=\"form-horizontal qtyFrm pull-right\">
                                <div class=\"control-group\">
                                    <label class=\"control-label\"><span>Color</span></label>
                                    <div class=\"controls\">
                                        <select class=\"span2\">
                                            <option>Black</option>
                                            <option>Red</option>
                                            <option>Blue</option>
                                            <option>Brown</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                            <hr class=\"soft clr\"/>
                            <p>
                                ";
        // line 157
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "description", array()), "html", null, true);
        echo "
                            </p>
                            <a class=\"btn btn-small pull-right\" href=\"#detail\">More Details</a>
                            <br class=\"clr\"/>
                            <a href=\"#\" name=\"detail\"></a>
                            <hr class=\"soft\"/>
                        </div>

                        <div class=\"span9\">
                            <ul id=\"productDetail\" class=\"nav nav-tabs\">
                                <li class=\"active\"><a href=\"#home\" data-toggle=\"tab\">Product Details</a></li>
                                <li><a href=\"#profile\" data-toggle=\"tab\">Related Products</a></li>
                            </ul>
                            <div id=\"myTabContent\" class=\"tab-content\">
                                <div class=\"tab-pane fade active in\" id=\"home\">
                                   <div class=\"tab-content\">
                                        <div class=\"col-sm-7\">
                                            <hr/>
                                            <div class=\"review-block\">

                                                ";
        // line 177
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evaluations"]) ? $context["evaluations"] : $this->getContext($context, "evaluations")));
        foreach ($context['_seq'] as $context["_key"] => $context["eval"]) {
            // line 178
            echo "                                                    <div class=\"tab-content\" >
                                                        <div class=\"span2\">
                                                            <img src=\"http://dummyimage.com/60x60/666/ffffff&text=No+Image\" class=\"img-rounded\">
                                                            <div class=\"review-block-name\"><a href=\"#\">";
            // line 181
            echo twig_escape_filter($this->env, $this->getAttribute($context["eval"], "idmembre", array()), "html", null, true);
            echo "</a></div>
                                                            <div class=\"review-block-date\"><time class=\"date-evaluation\" >";
            // line 182
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["eval"], "date", array()), "F d, Y"), "html", null, true);
            echo "</time><br/><time class=\"togo\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["eval"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</time></div>
                                                        </div>
                                                        <div class=\"span6\">
                                                            <div class=\"review-block-rate\">
                                                                ";
            // line 186
            echo $this->env->getExtension('star_rating_extension')->rating($this->getAttribute($context["eval"], "evaluation", array()));
            echo "
                                                            </div>
                                                            <div class=\"review-block-title\">Review</div>
                                                            <div class=\"review-block-description\">";
            // line 189
            echo twig_escape_filter($this->env, $this->getAttribute($context["eval"], "commentaire", array()), "html", null, true);
            echo "</div>
                                                            
                                                        </div>
                                                    </div>
                                                    <hr/>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eval'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "                                                <div class=\"tab-content\">
                                                    <div class=\"span8\">
                                                        <form id=\"f1\" method=\"post\" action=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("evaluation_submit", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id", array()))), "html", null, true);
        echo "\">
                                                            <textarea required name=\"commentaire\" style=\"width: 98%; height: 120px; margin-right: 10px;\" placeholder=\"ajoutez un commentaire ici !\" ></textarea>

                                                            <div id=\"star-rating\">
                                                                <input type=\"radio\" name=\"rate\" class=\"rating\" value=\"1\" />
                                                                <input type=\"radio\" name=\"rate\" class=\"rating\" value=\"2\" />
                                                                <input type=\"radio\" name=\"rate\" class=\"rating\" value=\"3\" />
                                                                <input type=\"radio\" name=\"rate\" class=\"rating\" value=\"4\" />
                                                                <input type=\"radio\" name=\"rate\" class=\"rating\" value=\"5\" />
                                                            </div>
                                                            <button type=\"submit\" class=\"btn btn-success pull-right\"><i class=\"fa fa-share\"></i>Submit</button>
                                                        </form>

                                                    </div><!-- Status Upload  -->

                                                </div><!-- Widget Area -->
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class=\"tab-pane fade\" id=\"profile\">
                                    <div id=\"myTab\" class=\"pull-right\">
                                        <a href=\"#listView\" data-toggle=\"tab\"><span class=\"btn btn-large\"><i class=\"icon-list\"></i></span></a>
                                        <a href=\"#blockView\" data-toggle=\"tab\"><span class=\"btn btn-large btn-primary\"><i class=\"icon-th-large\"></i></span></a>
                                    </div>
                                    <br class=\"clr\"/>
                                    <hr class=\"soft\"/>
                                    <div class=\"tab-content\">
                                        <div class=\"tab-pane\" id=\"listView\">
                                            <div class=\"row\">\t  
                                                <div class=\"span2\">
                                                    <img src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/products/4.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                                                </div>
                                                <div class=\"span4\">
                                                    <h3>New | Available</h3>\t\t\t\t
                                                    <hr class=\"soft\"/>
                                                    <h5>Product Name </h5>
                                                    <p>
                                                        Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - 
                                                        that is why our goods are so popular..
                                                    </p>
                                                    <a class=\"btn btn-small pull-right\" href=\"product_details.html\">View Details</a>
                                                    <br class=\"clr\"/>
                                                </div>
                                                <div class=\"span3 alignR\">
                                                    <form class=\"form-horizontal qtyFrm\">
                                                        <h3> \$222.00</h3>
                                                        <label class=\"checkbox\">
                                                            <input type=\"checkbox\">  Adds product to compair
                                                        </label><br/>
                                                        <div class=\"btn-group\">
                                                            <a href=\"product_details.html\" class=\"btn btn-large btn-primary\"> Add to <i class=\" icon-shopping-cart\"></i></a>
                                                            <a href=\"product_details.html\" class=\"btn btn-large\"><i class=\"icon-zoom-in\"></i></a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <hr class=\"soft\"/>
                                            <div class=\"row\">\t  
                                                <div class=\"span2\">
                                                    <img src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/products/5.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                                                </div>
                                                <div class=\"span4\">
                                                    <h3>New | Available</h3>\t\t\t\t
                                                    <hr class=\"soft\"/>
                                                    <h5>Product Name </h5>
                                                    <p>
                                                        Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - 
                                                        that is why our goods are so popular..
                                                    </p>
                                                    <a class=\"btn btn-small pull-right\" href=\"product_details.html\">View Details</a>
                                                    <br class=\"clr\"/>
                                                </div>
                                                <div class=\"span3 alignR\">
                                                    <form class=\"form-horizontal qtyFrm\">
                                                        <h3> \$222.00</h3>
                                                        <label class=\"checkbox\">
                                                            <input type=\"checkbox\">  Adds product to compair
                                                        </label><br/>
                                                        <div class=\"btn-group\">
                                                            <a href=\"product_details.html\" class=\"btn btn-large btn-primary\"> Add to <i class=\" icon-shopping-cart\"></i></a>
                                                            <a href=\"product_details.html\" class=\"btn btn-large\"><i class=\"icon-zoom-in\"></i></a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <hr class=\"soft\"/>
                                            <div class=\"row\">\t  
                                                <div class=\"span2\">
                                                    <img src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/products/6.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                                                </div>
                                                <div class=\"span4\">
                                                    <h3>New | Available</h3>\t\t\t\t
                                                    <hr class=\"soft\"/>
                                                    <h5>Product Name </h5>
                                                    <p>
                                                        Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - 
                                                        that is why our goods are so popular..
                                                    </p>
                                                    <a class=\"btn btn-small pull-right\" href=\"product_details.html\">View Details</a>
                                                    <br class=\"clr\"/>
                                                </div>
                                                <div class=\"span3 alignR\">
                                                    <form class=\"form-horizontal qtyFrm\">
                                                        <h3> \$222.00</h3>
                                                        <label class=\"checkbox\">
                                                            <input type=\"checkbox\">  Adds product to compair
                                                        </label><br/>
                                                        <div class=\"btn-group\">
                                                            <a href=\"product_details.html\" class=\"btn btn-large btn-primary\"> Add to <i class=\" icon-shopping-cart\"></i></a>
                                                            <a href=\"product_details.html\" class=\"btn btn-large\"><i class=\"icon-zoom-in\"></i></a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <hr class=\"soft\"/>
                                            <div class=\"row\">\t  
                                                <div class=\"span2\">
                                                    <img src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/products/7.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                                                </div>
                                                <div class=\"span4\">
                                                    <h3>New | Available</h3>\t\t\t\t
                                                    <hr class=\"soft\"/>
                                                    <h5>Product Name </h5>
                                                    <p>
                                                        Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - 
                                                        that is why our goods are so popular..
                                                    </p>
                                                    <a class=\"btn btn-small pull-right\" href=\"product_details.html\">View Details</a>
                                                    <br class=\"clr\"/>
                                                </div>
                                                <div class=\"span3 alignR\">
                                                    <form class=\"form-horizontal qtyFrm\">
                                                        <h3> \$222.00</h3>
                                                        <label class=\"checkbox\">
                                                            <input type=\"checkbox\">  Adds product to compair
                                                        </label><br/>
                                                        <div class=\"btn-group\">
                                                            <a href=\"product_details.html\" class=\"btn btn-large btn-primary\"> Add to <i class=\" icon-shopping-cart\"></i></a>
                                                            <a href=\"product_details.html\" class=\"btn btn-large\"><i class=\"icon-zoom-in\"></i></a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                            <hr class=\"soft\"/>
                                            <div class=\"row\">\t  
                                                <div class=\"span2\">
                                                    <img src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/products/8.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                                                </div>
                                                <div class=\"span4\">
                                                    <h3>New | Available</h3>\t\t\t\t
                                                    <hr class=\"soft\"/>
                                                    <h5>Product Name </h5>
                                                    <p>
                                                        Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - 
                                                        that is why our goods are so popular..
                                                    </p>
                                                    <a class=\"btn btn-small pull-right\" href=\"product_details.html\">View Details</a>
                                                    <br class=\"clr\"/>
                                                </div>
                                                <div class=\"span3 alignR\">
                                                    <form class=\"form-horizontal qtyFrm\">
                                                        <h3> \$222.00</h3>
                                                        <label class=\"checkbox\">
                                                            <input type=\"checkbox\">  Adds product to compair
                                                        </label><br/>
                                                        <div class=\"btn-group\">
                                                            <a href=\"product_details.html\" class=\"btn btn-large btn-primary\"> Add to <i class=\" icon-shopping-cart\"></i></a>
                                                            <a href=\"product_details.html\" class=\"btn btn-large\"><i class=\"icon-zoom-in\"></i></a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <hr class=\"soft\"/>
                                            <div class=\"row\">\t  
                                                <div class=\"span2\">
                                                    <img src=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/products/9.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                                                </div>
                                                <div class=\"span4\">
                                                    <h3>New | Available</h3>\t\t\t\t
                                                    <hr class=\"soft\"/>
                                                    <h5>Product Name </h5>
                                                    <p>
                                                        Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - 
                                                        that is why our goods are so popular..
                                                    </p>
                                                    <a class=\"btn btn-small pull-right\" href=\"product_details.html\">View Details</a>
                                                    <br class=\"clr\"/>
                                                </div>
                                                <div class=\"span3 alignR\">
                                                    <form class=\"form-horizontal qtyFrm\">
                                                        <h3> \$222.00</h3>
                                                        <label class=\"checkbox\">
                                                            <input type=\"checkbox\">  Adds product to compair
                                                        </label><br/>
                                                        <div class=\"btn-group\">
                                                            <a href=\"product_details.html\" class=\"btn btn-large btn-primary\"> Add to <i class=\" icon-shopping-cart\"></i></a>
                                                            <a href=\"product_details.html\" class=\"btn btn-large\"><i class=\"icon-zoom-in\"></i></a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <hr class=\"soft\"/>
                                        </div>
                                        <div class=\"tab-pane active\" id=\"blockView\">
                                            <ul class=\"thumbnails\">
                                                <li class=\"span3\">
                                                    <div class=\"thumbnail\">
                                                        <a href=\"product_details.html\"><img src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/products/10.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
                                                        <div class=\"caption\">
                                                            <h5>Manicure &amp; Pedicure</h5>
                                                            <p> 
                                                                Lorem Ipsum is simply dummy text. 
                                                            </p>
                                                            <h4 style=\"text-align:center\"><a class=\"btn\" href=\"product_details.html\"> <i class=\"icon-zoom-in\"></i></a> <a class=\"btn\" href=\"#\">Add to <i class=\"icon-shopping-cart\"></i></a> <a class=\"btn btn-primary\" href=\"#\">&euro;222.00</a></h4>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"span3\">
                                                    <div class=\"thumbnail\">
                                                        <a href=\"product_details.html\"><img src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/products/11.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
                                                        <div class=\"caption\">
                                                            <h5>Manicure &amp; Pedicure</h5>
                                                            <p> 
                                                                Lorem Ipsum is simply dummy text. 
                                                            </p>
                                                            <h4 style=\"text-align:center\"><a class=\"btn\" href=\"product_details.html\"> <i class=\"icon-zoom-in\"></i></a> <a class=\"btn\" href=\"#\">Add to <i class=\"icon-shopping-cart\"></i></a> <a class=\"btn btn-primary\" href=\"#\">&euro;222.00</a></h4>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"span3\">
                                                    <div class=\"thumbnail\">
                                                        <a href=\"product_details.html\"><img src=\"";
        // line 431
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/products/12.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
                                                        <div class=\"caption\">
                                                            <h5>Manicure &amp; Pedicure</h5>
                                                            <p> 
                                                                Lorem Ipsum is simply dummy text. 
                                                            </p>
                                                            <h4 style=\"text-align:center\"><a class=\"btn\" href=\"product_details.html\"> <i class=\"icon-zoom-in\"></i></a> <a class=\"btn\" href=\"#\">Add to <i class=\"icon-shopping-cart\"></i></a> <a class=\"btn btn-primary\" href=\"#\">&euro;222.00</a></h4>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"span3\">
                                                    <div class=\"thumbnail\">
                                                        <a href=\"product_details.html\"><img src=\"";
        // line 443
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/products/13.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
                                                        <div class=\"caption\">
                                                            <h5>Manicure &amp; Pedicure</h5>
                                                            <p> 
                                                                Lorem Ipsum is simply dummy text. 
                                                            </p>
                                                            <h4 style=\"text-align:center\"><a class=\"btn\" href=\"product_details.html\"> <i class=\"icon-zoom-in\"></i></a> <a class=\"btn\" href=\"#\">Add to <i class=\"icon-shopping-cart\"></i></a> <a class=\"btn btn-primary\" href=\"#\">&euro;222.00</a></h4>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"span3\">
                                                    <div class=\"thumbnail\">
                                                        <a href=\"product_details.html\"><img src=\"";
        // line 455
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/products/1.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
                                                        <div class=\"caption\">
                                                            <h5>Manicure &amp; Pedicure</h5>
                                                            <p> 
                                                                Lorem Ipsum is simply dummy text. 
                                                            </p>
                                                            <h4 style=\"text-align:center\"><a class=\"btn\" href=\"product_details.html\"> <i class=\"icon-zoom-in\"></i></a> <a class=\"btn\" href=\"#\">Add to <i class=\"icon-shopping-cart\"></i></a> <a class=\"btn btn-primary\" href=\"#\">&euro;222.00</a></h4>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"span3\">
                                                    <div class=\"thumbnail\">
                                                        <a href=\"product_details.html\"><img src=\"";
        // line 467
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/products/2.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
                                                        <div class=\"caption\">
                                                            <h5>Manicure &amp; Pedicure</h5>
                                                            <p> 
                                                                Lorem Ipsum is simply dummy text. 
                                                            </p>
                                                            <h4 style=\"text-align:center\"><a class=\"btn\" href=\"product_details.html\"> <i class=\"icon-zoom-in\"></i></a> <a class=\"btn\" href=\"#\">Add to <i class=\"icon-shopping-cart\"></i></a> <a class=\"btn btn-primary\" href=\"#\">&euro;222.00</a></h4>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <hr class=\"soft\"/>
                                        </div>
                                    </div>
                                    <br class=\"clr\">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div> </div>
    </div>
";
    }

    // line 491
    public function block_javascripts($context, array $blocks = array())
    {
        // line 492
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 493
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backoffice/src/rating.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function () {
            // Start when document ready
            \$('#star-rating').rating(); // Call the rating plugin
            \$(\".togo\").each(function(){
               var date = \$(this).text();
               \$(this).text(\$.timeago(date));
            });
        });
    </script>    
";
    }

    public function getTemplateName()
    {
        return "mainBundle:Default:productDetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  663 => 493,  660 => 492,  657 => 491,  629 => 467,  614 => 455,  599 => 443,  584 => 431,  569 => 419,  554 => 407,  519 => 375,  487 => 346,  454 => 316,  422 => 287,  390 => 258,  358 => 229,  323 => 197,  319 => 195,  307 => 189,  301 => 186,  292 => 182,  288 => 181,  283 => 178,  279 => 177,  256 => 157,  231 => 135,  225 => 132,  217 => 127,  201 => 114,  188 => 106,  182 => 105,  176 => 104,  168 => 101,  162 => 100,  156 => 99,  148 => 94,  144 => 93,  135 => 87,  123 => 78,  113 => 71,  103 => 64,  96 => 60,  89 => 55,  86 => 54,  33 => 4,  30 => 3,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends 'mainBundle::layout.html.twig' %}*/
/* {% block stylesheets %}*/
/* */
/*     */
/*     <style>*/
/*         .btn-grey{*/
/*             background-color:#D8D8D8;*/
/*             color:#FFF;*/
/*         }*/
/*         .rating-block{*/
/*             background-color:#FAFAFA;*/
/*             border:1px solid #EFEFEF;*/
/*             padding:15px 15px 20px 15px;*/
/*             border-radius:3px;*/
/*         }*/
/*         .bold{*/
/*             font-weight:700;*/
/*         }*/
/*         .padding-bottom-7{*/
/*             padding-bottom:7px;*/
/*         }*/
/* */
/*         .review-block{*/
/*             background-color:#FAFAFA;*/
/*             border:1px solid #EFEFEF;*/
/*             padding:15px;*/
/*             border-radius:3px;*/
/*             margin-bottom:15px;*/
/*         }*/
/*         .review-block-name{*/
/*             font-size:12px;*/
/*             margin:10px 0;*/
/*         }*/
/*         .review-block-date{*/
/*             font-size:12px;*/
/*         }*/
/*         .review-block-rate{*/
/*             font-size:13px;*/
/*             margin-bottom:15px;*/
/*             margin-top : 10px;*/
/*         }*/
/*         .review-block-title{*/
/*             font-size:15px;*/
/*             font-weight:700;*/
/*             margin-bottom:10px;*/
/*         }*/
/*         .review-block-description{*/
/*             font-size:13px;*/
/*         }*/
/*         */
/*     </style>*/
/* {% endblock %}*/
/* {% block content %}*/
/*     <div id="mainBody">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <!-- Sidebar ================================================== -->*/
/*                 <div id="sidebar" class="span3">*/
/*                     <div class="well well-small"><a id="myCart" href="product_summary.html"><img src="{{ asset('themes/images/ico-cart.png') }}" alt="cart">3 Items in your cart  <span class="badge badge-warning pull-right">$155.00</span></a></div>*/
/*                     */
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
/*                         <li><a href="">Products</a> <span class="divider">/</span></li>*/
/*                         <li class="active">product Details</li>*/
/*                     </ul>	*/
/*                     <div class="row">	  */
/*                         <div id="gallery" class="span3">*/
/*                             <a href="{{ asset('themes/images/products/large/f1.jpg') }}" title="Fujifilm FinePix S2950 Digital Camera">*/
/*                                 <img src="{{ asset('themes/images/products/large/3.jpg') }}" style="width:100%" alt="Fujifilm FinePix S2950 Digital Camera"/>*/
/*                             </a>*/
/*                             <div id="differentview" class="moreOptopm carousel slide">*/
/*                                 <div class="carousel-inner">*/
/*                                     <div class="item active">*/
/*                                         <a href="{{ asset('themes/images/products/large/f1.jpg') }}"> <img style="width:29%" src="{{ asset('themes/images/products/large/f1.jpg') }}" alt=""/></a>*/
/*                                         <a href="{{ asset('themes/images/products/large/f2.jpg') }}"> <img style="width:29%" src="{{ asset('themes/images/products/large/f2.jpg') }}" alt=""/></a>*/
/*                                         <a href="{{ asset('themes/images/products/large/f3.jpg') }}" > <img style="width:29%" src="{{ asset('themes/images/products/large/f3.jpg') }}" alt=""/></a>*/
/*                                     </div>*/
/*                                     <div class="item">*/
/*                                         <a href="{{ asset('themes/images/products/large/f3.jpg') }}" > <img style="width:29%" src="{{ asset('themes/images/products/large/f3.jpg') }}" alt=""/></a>*/
/*                                         <a href="{{ asset('themes/images/products/large/f1.jpg') }}"> <img style="width:29%" src="{{ asset('themes/images/products/large/f1.jpg') }}" alt=""/></a>*/
/*                                         <a href="{{ asset('themes/images/products/large/f2.jpg') }}"> <img style="width:29%" src="{{ asset('themes/images/products/large/f2.jpg') }}" alt=""/></a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <!--  */
/*                                             <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>*/
/*                                 <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a> */
/*                                 -->*/
/*                             </div>*/
/*                             <div class="divRating" >{{ 4|rating }}</div>*/
/*                             <div class="btn-toolbar">*/
/*                                 <div class="btn-group">*/
/*                                     <span class="btn"><i class="icon-envelope"></i></span>*/
/*                                     <span class="btn" ><i class="icon-print"></i></span>*/
/*                                     <span class="btn" ><i class="icon-zoom-in"></i></span>*/
/*                                     <span class="btn" ><i class="icon-star"></i></span>*/
/*                                     <span class="btn" ><i class=" icon-thumbs-up"></i></span>*/
/*                                     <span class="btn" ><i class="icon-thumbs-down"></i></span>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="span6">*/
/*                             <h3>{{ product.libelle }} </h3>*/
/* */
/*                             <hr class="soft"/>*/
/*                             <form class="form-horizontal qtyFrm">*/
/*                                 <div class="control-group">*/
/*                                     <label class="control-label"><span>${{product.prix}}</span></label>*/
/*                                     <div class="controls">*/
/*                                         <input type="number" class="span1" placeholder="Qty."/>*/
/*                                         <a href="{{ path('add_cart',{'id':product.id}) }}" class="btn btn-large btn-primary pull-right"> Add to cart <i class=" icon-shopping-cart"></i></a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </form>*/
/* */
/*                             <hr class="soft"/>*/
/*                             <h4>100 items in stock</h4>*/
/*                             <form class="form-horizontal qtyFrm pull-right">*/
/*                                 <div class="control-group">*/
/*                                     <label class="control-label"><span>Color</span></label>*/
/*                                     <div class="controls">*/
/*                                         <select class="span2">*/
/*                                             <option>Black</option>*/
/*                                             <option>Red</option>*/
/*                                             <option>Blue</option>*/
/*                                             <option>Brown</option>*/
/*                                         </select>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </form>*/
/*                             <hr class="soft clr"/>*/
/*                             <p>*/
/*                                 {{ product.description }}*/
/*                             </p>*/
/*                             <a class="btn btn-small pull-right" href="#detail">More Details</a>*/
/*                             <br class="clr"/>*/
/*                             <a href="#" name="detail"></a>*/
/*                             <hr class="soft"/>*/
/*                         </div>*/
/* */
/*                         <div class="span9">*/
/*                             <ul id="productDetail" class="nav nav-tabs">*/
/*                                 <li class="active"><a href="#home" data-toggle="tab">Product Details</a></li>*/
/*                                 <li><a href="#profile" data-toggle="tab">Related Products</a></li>*/
/*                             </ul>*/
/*                             <div id="myTabContent" class="tab-content">*/
/*                                 <div class="tab-pane fade active in" id="home">*/
/*                                    <div class="tab-content">*/
/*                                         <div class="col-sm-7">*/
/*                                             <hr/>*/
/*                                             <div class="review-block">*/
/* */
/*                                                 {% for eval in evaluations %}*/
/*                                                     <div class="tab-content" >*/
/*                                                         <div class="span2">*/
/*                                                             <img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">*/
/*                                                             <div class="review-block-name"><a href="#">{{ eval.idmembre }}</a></div>*/
/*                                                             <div class="review-block-date"><time class="date-evaluation" >{{eval.date|date("F d, Y")}}</time><br/><time class="togo">{{eval.date|date('Y-m-d H:i:s')}}</time></div>*/
/*                                                         </div>*/
/*                                                         <div class="span6">*/
/*                                                             <div class="review-block-rate">*/
/*                                                                 {{ eval.evaluation|rating }}*/
/*                                                             </div>*/
/*                                                             <div class="review-block-title">Review</div>*/
/*                                                             <div class="review-block-description">{{ eval.commentaire }}</div>*/
/*                                                             */
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <hr/>*/
/*                                                 {% endfor %}*/
/*                                                 <div class="tab-content">*/
/*                                                     <div class="span8">*/
/*                                                         <form id="f1" method="post" action="{{path('evaluation_submit',{'id':product.id})}}">*/
/*                                                             <textarea required name="commentaire" style="width: 98%; height: 120px; margin-right: 10px;" placeholder="ajoutez un commentaire ici !" ></textarea>*/
/* */
/*                                                             <div id="star-rating">*/
/*                                                                 <input type="radio" name="rate" class="rating" value="1" />*/
/*                                                                 <input type="radio" name="rate" class="rating" value="2" />*/
/*                                                                 <input type="radio" name="rate" class="rating" value="3" />*/
/*                                                                 <input type="radio" name="rate" class="rating" value="4" />*/
/*                                                                 <input type="radio" name="rate" class="rating" value="5" />*/
/*                                                             </div>*/
/*                                                             <button type="submit" class="btn btn-success pull-right"><i class="fa fa-share"></i>Submit</button>*/
/*                                                         </form>*/
/* */
/*                                                     </div><!-- Status Upload  -->*/
/* */
/*                                                 </div><!-- Widget Area -->*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     */
/*                                 </div>*/
/*                                 <div class="tab-pane fade" id="profile">*/
/*                                     <div id="myTab" class="pull-right">*/
/*                                         <a href="#listView" data-toggle="tab"><span class="btn btn-large"><i class="icon-list"></i></span></a>*/
/*                                         <a href="#blockView" data-toggle="tab"><span class="btn btn-large btn-primary"><i class="icon-th-large"></i></span></a>*/
/*                                     </div>*/
/*                                     <br class="clr"/>*/
/*                                     <hr class="soft"/>*/
/*                                     <div class="tab-content">*/
/*                                         <div class="tab-pane" id="listView">*/
/*                                             <div class="row">	  */
/*                                                 <div class="span2">*/
/*                                                     <img src="{{ asset('themes/images/products/4.jpg') }}" alt=""/>*/
/*                                                 </div>*/
/*                                                 <div class="span4">*/
/*                                                     <h3>New | Available</h3>				*/
/*                                                     <hr class="soft"/>*/
/*                                                     <h5>Product Name </h5>*/
/*                                                     <p>*/
/*                                                         Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - */
/*                                                         that is why our goods are so popular..*/
/*                                                     </p>*/
/*                                                     <a class="btn btn-small pull-right" href="product_details.html">View Details</a>*/
/*                                                     <br class="clr"/>*/
/*                                                 </div>*/
/*                                                 <div class="span3 alignR">*/
/*                                                     <form class="form-horizontal qtyFrm">*/
/*                                                         <h3> $222.00</h3>*/
/*                                                         <label class="checkbox">*/
/*                                                             <input type="checkbox">  Adds product to compair*/
/*                                                         </label><br/>*/
/*                                                         <div class="btn-group">*/
/*                                                             <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>*/
/*                                                             <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>*/
/*                                                         </div>*/
/*                                                     </form>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <hr class="soft"/>*/
/*                                             <div class="row">	  */
/*                                                 <div class="span2">*/
/*                                                     <img src="{{ asset('themes/images/products/5.jpg') }}" alt=""/>*/
/*                                                 </div>*/
/*                                                 <div class="span4">*/
/*                                                     <h3>New | Available</h3>				*/
/*                                                     <hr class="soft"/>*/
/*                                                     <h5>Product Name </h5>*/
/*                                                     <p>*/
/*                                                         Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - */
/*                                                         that is why our goods are so popular..*/
/*                                                     </p>*/
/*                                                     <a class="btn btn-small pull-right" href="product_details.html">View Details</a>*/
/*                                                     <br class="clr"/>*/
/*                                                 </div>*/
/*                                                 <div class="span3 alignR">*/
/*                                                     <form class="form-horizontal qtyFrm">*/
/*                                                         <h3> $222.00</h3>*/
/*                                                         <label class="checkbox">*/
/*                                                             <input type="checkbox">  Adds product to compair*/
/*                                                         </label><br/>*/
/*                                                         <div class="btn-group">*/
/*                                                             <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>*/
/*                                                             <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>*/
/*                                                         </div>*/
/*                                                     </form>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <hr class="soft"/>*/
/*                                             <div class="row">	  */
/*                                                 <div class="span2">*/
/*                                                     <img src="{{ asset('themes/images/products/6.jpg') }}" alt=""/>*/
/*                                                 </div>*/
/*                                                 <div class="span4">*/
/*                                                     <h3>New | Available</h3>				*/
/*                                                     <hr class="soft"/>*/
/*                                                     <h5>Product Name </h5>*/
/*                                                     <p>*/
/*                                                         Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - */
/*                                                         that is why our goods are so popular..*/
/*                                                     </p>*/
/*                                                     <a class="btn btn-small pull-right" href="product_details.html">View Details</a>*/
/*                                                     <br class="clr"/>*/
/*                                                 </div>*/
/*                                                 <div class="span3 alignR">*/
/*                                                     <form class="form-horizontal qtyFrm">*/
/*                                                         <h3> $222.00</h3>*/
/*                                                         <label class="checkbox">*/
/*                                                             <input type="checkbox">  Adds product to compair*/
/*                                                         </label><br/>*/
/*                                                         <div class="btn-group">*/
/*                                                             <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>*/
/*                                                             <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>*/
/*                                                         </div>*/
/*                                                     </form>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <hr class="soft"/>*/
/*                                             <div class="row">	  */
/*                                                 <div class="span2">*/
/*                                                     <img src="{{ asset('themes/images/products/7.jpg') }}" alt=""/>*/
/*                                                 </div>*/
/*                                                 <div class="span4">*/
/*                                                     <h3>New | Available</h3>				*/
/*                                                     <hr class="soft"/>*/
/*                                                     <h5>Product Name </h5>*/
/*                                                     <p>*/
/*                                                         Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - */
/*                                                         that is why our goods are so popular..*/
/*                                                     </p>*/
/*                                                     <a class="btn btn-small pull-right" href="product_details.html">View Details</a>*/
/*                                                     <br class="clr"/>*/
/*                                                 </div>*/
/*                                                 <div class="span3 alignR">*/
/*                                                     <form class="form-horizontal qtyFrm">*/
/*                                                         <h3> $222.00</h3>*/
/*                                                         <label class="checkbox">*/
/*                                                             <input type="checkbox">  Adds product to compair*/
/*                                                         </label><br/>*/
/*                                                         <div class="btn-group">*/
/*                                                             <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>*/
/*                                                             <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>*/
/*                                                         </div>*/
/*                                                     </form>*/
/*                                                 </div>*/
/*                                             </div>*/
/* */
/*                                             <hr class="soft"/>*/
/*                                             <div class="row">	  */
/*                                                 <div class="span2">*/
/*                                                     <img src="{{ asset('themes/images/products/8.jpg') }}" alt=""/>*/
/*                                                 </div>*/
/*                                                 <div class="span4">*/
/*                                                     <h3>New | Available</h3>				*/
/*                                                     <hr class="soft"/>*/
/*                                                     <h5>Product Name </h5>*/
/*                                                     <p>*/
/*                                                         Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - */
/*                                                         that is why our goods are so popular..*/
/*                                                     </p>*/
/*                                                     <a class="btn btn-small pull-right" href="product_details.html">View Details</a>*/
/*                                                     <br class="clr"/>*/
/*                                                 </div>*/
/*                                                 <div class="span3 alignR">*/
/*                                                     <form class="form-horizontal qtyFrm">*/
/*                                                         <h3> $222.00</h3>*/
/*                                                         <label class="checkbox">*/
/*                                                             <input type="checkbox">  Adds product to compair*/
/*                                                         </label><br/>*/
/*                                                         <div class="btn-group">*/
/*                                                             <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>*/
/*                                                             <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>*/
/*                                                         </div>*/
/*                                                     </form>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <hr class="soft"/>*/
/*                                             <div class="row">	  */
/*                                                 <div class="span2">*/
/*                                                     <img src="{{ asset('themes/images/products/9.jpg') }}" alt=""/>*/
/*                                                 </div>*/
/*                                                 <div class="span4">*/
/*                                                     <h3>New | Available</h3>				*/
/*                                                     <hr class="soft"/>*/
/*                                                     <h5>Product Name </h5>*/
/*                                                     <p>*/
/*                                                         Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - */
/*                                                         that is why our goods are so popular..*/
/*                                                     </p>*/
/*                                                     <a class="btn btn-small pull-right" href="product_details.html">View Details</a>*/
/*                                                     <br class="clr"/>*/
/*                                                 </div>*/
/*                                                 <div class="span3 alignR">*/
/*                                                     <form class="form-horizontal qtyFrm">*/
/*                                                         <h3> $222.00</h3>*/
/*                                                         <label class="checkbox">*/
/*                                                             <input type="checkbox">  Adds product to compair*/
/*                                                         </label><br/>*/
/*                                                         <div class="btn-group">*/
/*                                                             <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>*/
/*                                                             <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>*/
/*                                                         </div>*/
/*                                                     </form>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <hr class="soft"/>*/
/*                                         </div>*/
/*                                         <div class="tab-pane active" id="blockView">*/
/*                                             <ul class="thumbnails">*/
/*                                                 <li class="span3">*/
/*                                                     <div class="thumbnail">*/
/*                                                         <a href="product_details.html"><img src="{{ asset('themes/images/products/10.jpg') }}" alt=""/></a>*/
/*                                                         <div class="caption">*/
/*                                                             <h5>Manicure &amp; Pedicure</h5>*/
/*                                                             <p> */
/*                                                                 Lorem Ipsum is simply dummy text. */
/*                                                             </p>*/
/*                                                             <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 </li>*/
/*                                                 <li class="span3">*/
/*                                                     <div class="thumbnail">*/
/*                                                         <a href="product_details.html"><img src="{{ asset('themes/images/products/11.jpg') }}" alt=""/></a>*/
/*                                                         <div class="caption">*/
/*                                                             <h5>Manicure &amp; Pedicure</h5>*/
/*                                                             <p> */
/*                                                                 Lorem Ipsum is simply dummy text. */
/*                                                             </p>*/
/*                                                             <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 </li>*/
/*                                                 <li class="span3">*/
/*                                                     <div class="thumbnail">*/
/*                                                         <a href="product_details.html"><img src="{{ asset('themes/images/products/12.jpg') }}" alt=""/></a>*/
/*                                                         <div class="caption">*/
/*                                                             <h5>Manicure &amp; Pedicure</h5>*/
/*                                                             <p> */
/*                                                                 Lorem Ipsum is simply dummy text. */
/*                                                             </p>*/
/*                                                             <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 </li>*/
/*                                                 <li class="span3">*/
/*                                                     <div class="thumbnail">*/
/*                                                         <a href="product_details.html"><img src="{{ asset('themes/images/products/13.jpg') }}" alt=""/></a>*/
/*                                                         <div class="caption">*/
/*                                                             <h5>Manicure &amp; Pedicure</h5>*/
/*                                                             <p> */
/*                                                                 Lorem Ipsum is simply dummy text. */
/*                                                             </p>*/
/*                                                             <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 </li>*/
/*                                                 <li class="span3">*/
/*                                                     <div class="thumbnail">*/
/*                                                         <a href="product_details.html"><img src="{{ asset('themes/images/products/1.jpg') }}" alt=""/></a>*/
/*                                                         <div class="caption">*/
/*                                                             <h5>Manicure &amp; Pedicure</h5>*/
/*                                                             <p> */
/*                                                                 Lorem Ipsum is simply dummy text. */
/*                                                             </p>*/
/*                                                             <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 </li>*/
/*                                                 <li class="span3">*/
/*                                                     <div class="thumbnail">*/
/*                                                         <a href="product_details.html"><img src="{{ asset('themes/images/products/2.jpg') }}" alt=""/></a>*/
/*                                                         <div class="caption">*/
/*                                                             <h5>Manicure &amp; Pedicure</h5>*/
/*                                                             <p> */
/*                                                                 Lorem Ipsum is simply dummy text. */
/*                                                             </p>*/
/*                                                             <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a></h4>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 </li>*/
/*                                             </ul>*/
/*                                             <hr class="soft"/>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <br class="clr">*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div> </div>*/
/*     </div>*/
/* {% endblock %} */
/* {% block javascripts %}*/
/* */
/*     <script type="text/javascript" src="{{ asset('bundles/backoffice/src/rating.js')}}"></script>*/
/*     <script>*/
/*         $(document).ready(function () {*/
/*             // Start when document ready*/
/*             $('#star-rating').rating(); // Call the rating plugin*/
/*             $(".togo").each(function(){*/
/*                var date = $(this).text();*/
/*                $(this).text($.timeago(date));*/
/*             });*/
/*         });*/
/*     </script>    */
/* {% endblock %}  */
