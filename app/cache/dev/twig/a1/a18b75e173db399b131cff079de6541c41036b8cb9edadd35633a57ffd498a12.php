<?php

/* mainBundle:Default:login.html.twig */
class __TwigTemplate_3f61dadc98cd84857aa9b586410ef8696820c3ff0584cbb507a4990f35f931c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("mainBundle::layout.html.twig", "mainBundle:Default:login.html.twig", 1);
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
        echo "    <div id=\"mainBody\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- Sidebar ================================================== -->
        
                <!-- Sidebar end=============================================== -->
                <div class=\"span9\">
                    <ul class=\"breadcrumb\">
                        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("main_homepage");
        echo "\">Home</a> <span class=\"divider\">/</span></li>
                        <li class=\"active\">Login</li>
                    </ul>
                    <h3> Login</h3>\t
                    <hr class=\"soft\"/>

                    <div class=\"row\">
                        <div class=\"span4\">
                            <div class=\"well\">
                                <h5>CREATE YOUR ACCOUNT</h5><br/>
                                Enter your e-mail address to create an account.<br/><br/><br/>
                                <form action=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("ajout_membre");
        echo "\">
                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"inputEmail0\">E-mail address</label>
                                        <div class=\"controls\">
                                            <input class=\"span3\"  type=\"text\" id=\"inputEmail0\" placeholder=\"Email\">
                                        </div>
                                    </div>
                                    <div class=\"controls\">
                                        <button type=\"submit\" class=\"btn block\">Create Your Account</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class=\"span1\"> &nbsp;</div>
                        <div class=\"span4\">
                            <div class=\"well\">
                                <h5>ALREADY REGISTERED ?</h5>
                                <form method=\"POST\" action=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("sign_in");
        echo "\">
                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"inputLogin1\">Login</label>
                                        <div class=\"controls\">
                                            <input class=\"span3\" name=\"login\"  type=\"text\" id=\"inputEmail1\" placeholder=\"Login\">
                                        </div>
                                    </div>
                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"inputPassword1\">Password</label>
                                        <div class=\"controls\">
                                            <input type=\"password\" class=\"span3\" name=\"password\"  id=\"inputPassword1\" placeholder=\"Password\">
                                        </div>
                                    </div>
                                    <div class=\"control-group\">
                                        <div class=\"controls\">
                                            <button type=\"submit\" name=\"submit\" class=\"btn\">Sign in</button> <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("forget_pass");
        echo "\">Forget password?</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>\t

                </div>
            </div></div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "mainBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 54,  75 => 39,  55 => 22,  41 => 11,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'mainBundle::layout.html.twig' %}*/
/* {% block content %}*/
/*     <div id="mainBody">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <!-- Sidebar ================================================== -->*/
/*         */
/*                 <!-- Sidebar end=============================================== -->*/
/*                 <div class="span9">*/
/*                     <ul class="breadcrumb">*/
/*                         <li><a href="{{ path('main_homepage') }}">Home</a> <span class="divider">/</span></li>*/
/*                         <li class="active">Login</li>*/
/*                     </ul>*/
/*                     <h3> Login</h3>	*/
/*                     <hr class="soft"/>*/
/* */
/*                     <div class="row">*/
/*                         <div class="span4">*/
/*                             <div class="well">*/
/*                                 <h5>CREATE YOUR ACCOUNT</h5><br/>*/
/*                                 Enter your e-mail address to create an account.<br/><br/><br/>*/
/*                                 <form action="{{ path('ajout_membre') }}">*/
/*                                     <div class="control-group">*/
/*                                         <label class="control-label" for="inputEmail0">E-mail address</label>*/
/*                                         <div class="controls">*/
/*                                             <input class="span3"  type="text" id="inputEmail0" placeholder="Email">*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="controls">*/
/*                                         <button type="submit" class="btn block">Create Your Account</button>*/
/*                                     </div>*/
/*                                 </form>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="span1"> &nbsp;</div>*/
/*                         <div class="span4">*/
/*                             <div class="well">*/
/*                                 <h5>ALREADY REGISTERED ?</h5>*/
/*                                 <form method="POST" action="{{ path('sign_in') }}">*/
/*                                     <div class="control-group">*/
/*                                         <label class="control-label" for="inputLogin1">Login</label>*/
/*                                         <div class="controls">*/
/*                                             <input class="span3" name="login"  type="text" id="inputEmail1" placeholder="Login">*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="control-group">*/
/*                                         <label class="control-label" for="inputPassword1">Password</label>*/
/*                                         <div class="controls">*/
/*                                             <input type="password" class="span3" name="password"  id="inputPassword1" placeholder="Password">*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="control-group">*/
/*                                         <div class="controls">*/
/*                                             <button type="submit" name="submit" class="btn">Sign in</button> <a href="{{ path('forget_pass') }}">Forget password?</a>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </form>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>	*/
/* */
/*                 </div>*/
/*             </div></div>*/
/*     </div>*/
/* {% endblock %} */
