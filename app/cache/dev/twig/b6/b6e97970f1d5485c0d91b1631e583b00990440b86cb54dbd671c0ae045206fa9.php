<?php

/* mainBundle:Default:register.html.twig */
class __TwigTemplate_332e9392185e6acfad52434274145a398f2e0ee8b0c4c0e93192f75eb18d592c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("mainBundle::layout.html.twig", "mainBundle:Default:register.html.twig", 2);
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
\t<div class=\"container\">
\t<div class=\"row\">
<!-- Sidebar ================================================== -->
                <div id=\"sidebar\" class=\"span3\">
                    <div class=\"well well-small\"><a id=\"myCart\" href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("cart");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/ico-cart.png"), "html", null, true);
        echo "\" alt=\"cart\">3 Items in your cart  <span class=\"badge badge-warning pull-right\">\$155.00</span></a></div>
                    
                   
                    <div class=\"thumbnail\">
                        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/images/payment_methods.png"), "html", null, true);
        echo "\" title=\"Bootshop Payment Methods\" alt=\"Payments Methods\">
                        <div class=\"caption\">
                            <h5>Payment Methods</h5>
                        </div>
                    </div>
                </div>
                <!-- Sidebar end=============================================== -->
\t<div class=\"span9\">
    <ul class=\"breadcrumb\">
\t\t<li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("main_homepage");
        echo "\">Home</a> <span class=\"divider\">/</span></li>
\t\t<li class=\"active\">Registration</li>
    </ul>
\t<h3> Registration</h3>\t
\t<div class=\"well\">
\t<!--
\t<div class=\"alert alert-info fade in\">
\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
\t\t<strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
\t </div>
\t<div class=\"alert fade in\">
\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
\t\t<strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
\t </div>
\t <div class=\"alert alert-block alert-error fade in\">
\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
\t\t<strong>Lorem Ipsum is simply</strong> dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
\t </div> -->
        <form class=\"form-horizontal\" action=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("ajout_membre");
        echo "\" method=\"post\">
\t\t<h4>Your personal information</h4>
\t\t<div class=\"control-group\">
\t\t<label class=\"control-label\">Type <sup>*</sup></label>
\t\t<div class=\"controls\">
\t\t<select class=\"span2\" name=\"type\">
\t\t\t<option value=\"Particulier\">Particulier</option>
\t\t\t<option value=\"Entreprise\">Entreprise</option>
\t\t\t
\t\t</select>
\t\t</div>
\t\t</div>
                <div class=\"control-group\">
\t\t\t<label   class=\"control-label\" for=\"inputFname1\">Login <sup>*</sup></label>
\t\t\t<div class=\"controls\">
\t\t\t  <input name=\"login\" type=\"text\" id=\"inputFname1\" placeholder=\"Login\">
\t\t\t</div>
\t\t </div>
\t\t<div class=\"control-group\">
\t\t\t<label   class=\"control-label\" for=\"inputFname1\">First name <sup>*</sup></label>
\t\t\t<div class=\"controls\">
\t\t\t  <input name=\"prenom\" type=\"text\" id=\"inputFname1\" placeholder=\"First Name\">
\t\t\t</div>
\t\t </div>
\t\t <div class=\"control-group\">
\t\t\t<label class=\"control-label\" for=\"inputLnam\">Last name <sup>*</sup></label>
\t\t\t<div class=\"controls\">
\t\t\t  <input name=\"nom\" type=\"text\" id=\"inputLnam\" placeholder=\"Last Name\">
\t\t\t</div>
\t\t </div>
\t\t<div class=\"control-group\">
\t\t<label class=\"control-label\" for=\"input_email\">Email <sup>*</sup></label>
\t\t<div class=\"controls\">
\t\t  <input name=\"email\" type=\"text\" id=\"input_email\" placeholder=\"Email\">
\t\t</div>
\t  </div>
                
                <div class=\"control-group\">
\t\t<label class=\"control-label\">Age <sup>*</sup></label>
\t\t<div class=\"controls\">
\t\t  <input name=\"age\" type=\"text\" id=\"inputPassword1\" placeholder=\"Age\">
\t\t
\t\t</div>
\t  </div>
                
\t<div class=\"control-group\">
\t\t<label class=\"control-label\" for=\"inputPassword1\">Password <sup>*</sup></label>
\t\t<div class=\"controls\">
\t\t  <input name=\"pass\" type=\"password\" id=\"inputPassword1\" placeholder=\"Password\">
\t\t</div>
\t  </div>\t  
\t\t
                       <div class=\"control-group\">
\t\t<label class=\"control-label\">Adresse <sup>*</sup></label>
\t\t<div class=\"controls\">
\t\t  <input name=\"adresse\" type=\"text\" id=\"inputPassword1\" placeholder=\"Adresse\">
\t\t
\t\t</div>
\t  </div>
                       <div class=\"control-group\">
\t\t<label class=\"control-label\">Numero de téléphone <sup>*</sup></label>
\t\t<div class=\"controls\">
\t\t  <input name=\"numero\" type=\"text\" id=\"inputPassword1\" placeholder=\"Numero\">
\t\t
\t\t</div>
\t  </div>

  
\t
\t<div class=\"control-group\">
\t\t\t<div class=\"controls\">
\t\t\t\t<input type=\"hidden\" name=\"email_create\" value=\"1\">
\t\t\t\t<input type=\"hidden\" name=\"is_new_customer\" value=\"1\">
\t\t\t\t<input class=\"btn btn-large btn-success\" type=\"submit\" value=\"Register\" />
\t\t\t</div>
\t\t</div>\t\t
\t</form>
</div>

</div>
</div>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "mainBundle:Default:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 40,  59 => 22,  47 => 13,  38 => 9,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends 'mainBundle::layout.html.twig' %}*/
/* {% block content %}*/
/*     <div id="mainBody">*/
/* 	<div class="container">*/
/* 	<div class="row">*/
/* <!-- Sidebar ================================================== -->*/
/*                 <div id="sidebar" class="span3">*/
/*                     <div class="well well-small"><a id="myCart" href="{{ path('cart') }}"><img src="{{ asset('themes/images/ico-cart.png') }}" alt="cart">3 Items in your cart  <span class="badge badge-warning pull-right">$155.00</span></a></div>*/
/*                     */
/*                    */
/*                     <div class="thumbnail">*/
/*                         <img src="{{ asset('themes/images/payment_methods.png') }}" title="Bootshop Payment Methods" alt="Payments Methods">*/
/*                         <div class="caption">*/
/*                             <h5>Payment Methods</h5>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- Sidebar end=============================================== -->*/
/* 	<div class="span9">*/
/*     <ul class="breadcrumb">*/
/* 		<li><a href="{{ path('main_homepage') }}">Home</a> <span class="divider">/</span></li>*/
/* 		<li class="active">Registration</li>*/
/*     </ul>*/
/* 	<h3> Registration</h3>	*/
/* 	<div class="well">*/
/* 	<!--*/
/* 	<div class="alert alert-info fade in">*/
/* 		<button type="button" class="close" data-dismiss="alert">×</button>*/
/* 		<strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s*/
/* 	 </div>*/
/* 	<div class="alert fade in">*/
/* 		<button type="button" class="close" data-dismiss="alert">×</button>*/
/* 		<strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s*/
/* 	 </div>*/
/* 	 <div class="alert alert-block alert-error fade in">*/
/* 		<button type="button" class="close" data-dismiss="alert">×</button>*/
/* 		<strong>Lorem Ipsum is simply</strong> dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s*/
/* 	 </div> -->*/
/*         <form class="form-horizontal" action="{{ path('ajout_membre') }}" method="post">*/
/* 		<h4>Your personal information</h4>*/
/* 		<div class="control-group">*/
/* 		<label class="control-label">Type <sup>*</sup></label>*/
/* 		<div class="controls">*/
/* 		<select class="span2" name="type">*/
/* 			<option value="Particulier">Particulier</option>*/
/* 			<option value="Entreprise">Entreprise</option>*/
/* 			*/
/* 		</select>*/
/* 		</div>*/
/* 		</div>*/
/*                 <div class="control-group">*/
/* 			<label   class="control-label" for="inputFname1">Login <sup>*</sup></label>*/
/* 			<div class="controls">*/
/* 			  <input name="login" type="text" id="inputFname1" placeholder="Login">*/
/* 			</div>*/
/* 		 </div>*/
/* 		<div class="control-group">*/
/* 			<label   class="control-label" for="inputFname1">First name <sup>*</sup></label>*/
/* 			<div class="controls">*/
/* 			  <input name="prenom" type="text" id="inputFname1" placeholder="First Name">*/
/* 			</div>*/
/* 		 </div>*/
/* 		 <div class="control-group">*/
/* 			<label class="control-label" for="inputLnam">Last name <sup>*</sup></label>*/
/* 			<div class="controls">*/
/* 			  <input name="nom" type="text" id="inputLnam" placeholder="Last Name">*/
/* 			</div>*/
/* 		 </div>*/
/* 		<div class="control-group">*/
/* 		<label class="control-label" for="input_email">Email <sup>*</sup></label>*/
/* 		<div class="controls">*/
/* 		  <input name="email" type="text" id="input_email" placeholder="Email">*/
/* 		</div>*/
/* 	  </div>*/
/*                 */
/*                 <div class="control-group">*/
/* 		<label class="control-label">Age <sup>*</sup></label>*/
/* 		<div class="controls">*/
/* 		  <input name="age" type="text" id="inputPassword1" placeholder="Age">*/
/* 		*/
/* 		</div>*/
/* 	  </div>*/
/*                 */
/* 	<div class="control-group">*/
/* 		<label class="control-label" for="inputPassword1">Password <sup>*</sup></label>*/
/* 		<div class="controls">*/
/* 		  <input name="pass" type="password" id="inputPassword1" placeholder="Password">*/
/* 		</div>*/
/* 	  </div>	  */
/* 		*/
/*                        <div class="control-group">*/
/* 		<label class="control-label">Adresse <sup>*</sup></label>*/
/* 		<div class="controls">*/
/* 		  <input name="adresse" type="text" id="inputPassword1" placeholder="Adresse">*/
/* 		*/
/* 		</div>*/
/* 	  </div>*/
/*                        <div class="control-group">*/
/* 		<label class="control-label">Numero de téléphone <sup>*</sup></label>*/
/* 		<div class="controls">*/
/* 		  <input name="numero" type="text" id="inputPassword1" placeholder="Numero">*/
/* 		*/
/* 		</div>*/
/* 	  </div>*/
/* */
/*   */
/* 	*/
/* 	<div class="control-group">*/
/* 			<div class="controls">*/
/* 				<input type="hidden" name="email_create" value="1">*/
/* 				<input type="hidden" name="is_new_customer" value="1">*/
/* 				<input class="btn btn-large btn-success" type="submit" value="Register" />*/
/* 			</div>*/
/* 		</div>		*/
/* 	</form>*/
/* </div>*/
/* */
/* </div>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* {% endblock %}*/
