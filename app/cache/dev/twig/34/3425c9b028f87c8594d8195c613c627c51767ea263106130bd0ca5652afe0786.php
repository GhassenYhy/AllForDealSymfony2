<?php

/* mainBundle:Offre:supprimerProduit.html.twig */
class __TwigTemplate_04a016a7f71999b8146b7da433ecf88398f4f255122f557825b0ce9925ffba03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("mainBundle::layout.html.twig", "mainBundle:Offre:supprimerProduit.html.twig", 2);
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



                <div id=\"sidebar\" class=\"span3\">
                    
                   <ul id=\"sideManu\" class=\"nav nav-tabs nav-stacked\">
                        <li class=\"subMenu open\"><a> Gestion Produits </a>
                            <ul ";
        // line 14
        if ((((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "x"), "method") == 5) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "x"), "method") == 6)) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "x"), "method") == 7)) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "x"), "method") == 8))) {
            echo "style=\"display:none\"";
        }
        echo ">
                                <li><a class=\"active\" href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("afficherProduit");
        echo "\"><i class=\"icon-chevron-right\"></i>Afficher</a></li>
                                <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("ajouterProduit");
        echo "\"><i class=\"icon-chevron-right\"></i>Ajouter</a></li>
                                <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("modifierProduit");
        echo "\"><i class=\"icon-chevron-right\"></i>Modifier</a></li>
                                <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("supprimerProduit");
        echo "\"><i class=\"icon-chevron-right\"></i>Supprimer</a></li>
                            </ul>
                        </li>
                        <li class=\"subMenu\"><a> Gestion Services </a>
                           <ul ";
        // line 22
        if ((((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "x"), "method") == 1) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "x"), "method") == 2)) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "x"), "method") == 3)) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "x"), "method") == 4))) {
            echo "style=\"display:none\"";
        }
        echo ">
                                <li><a class=\"active\" href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("afficherService");
        echo "\"><i class=\"icon-chevron-right\"></i>Afficher</a></li>
                                <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("ajouterService");
        echo "\"><i class=\"icon-chevron-right\"></i>Ajouter</a></li>
                                <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("modifierService");
        echo "\"><i class=\"icon-chevron-right\"></i>Modifier</a></li>
                                <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("supprimerService");
        echo "\"><i class=\"icon-chevron-right\"></i>Supprimer</a></li>\t\t\t\t\t\t\t\t\t\t\t\t
                            </ul>
                        </li>
                </ul>
                </div>

                <div class=\"span9\">
                    <ul class=\"breadcrumb\">
                        <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("main_homepage");
        echo "\">Home</a> <span class=\"divider\">/</span></li>
                        <li class=\"active\">Supprimer Produit</li>
                    </ul>
                    <h3> Supprimer Produit</h3>\t
                    <div class=\"well\">
                        <!--
                        <div class=\"alert alert-info fade in\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                                <strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                         </div>
                        <div class=\"alert fade in\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                                <strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                         </div>
                         <div class=\"alert alert-block alert-error fade in\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                                <strong>Lorem Ipsum is simply</strong> dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                         </div> -->
                        <form class=\"form-horizontal\" method=\"Post\" action=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("supprimerp");
        echo "\">
                            <h4>Informations du produit : </h4>
                            <br>
                            
                             <div class=\"control-group\">
                                <label class=\"control-label\">Produits : </label>
                            <div class=\"controls\">
                                    <select class=\"span2\" name=\"produits\">
                                        ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 61
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "libelle", array()), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                                        
                                        
                                    </select>
                                </div>
                            </div>   
                            




                            <div class=\"control-group\">
                                <div class=\"controls\">
                                    <input type=\"hidden\" name=\"email_create\" value=\"1\">
                                    <input type=\"hidden\" name=\"is_new_customer\" value=\"1\">
                                    <input class=\"btn btn-large btn-success\" type=\"submit\" value=\"Supprimer\" />
                                </div>
                            </div>\t\t
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "mainBundle:Offre:supprimerProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 63,  133 => 61,  129 => 60,  118 => 52,  97 => 34,  86 => 26,  82 => 25,  78 => 24,  74 => 23,  68 => 22,  61 => 18,  57 => 17,  53 => 16,  49 => 15,  43 => 14,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends 'mainBundle::layout.html.twig' %}*/
/* {% block content %}*/
/*     <div id="mainBody">*/
/*         <div class="container">*/
/*             <div class="row">*/
/* */
/* */
/* */
/*                 <div id="sidebar" class="span3">*/
/*                     */
/*                    <ul id="sideManu" class="nav nav-tabs nav-stacked">*/
/*                         <li class="subMenu open"><a> Gestion Produits </a>*/
/*                             <ul {% if ( app.session.get('x') == 5)or ( app.session.get('x') == 6)or ( app.session.get('x') == 7) or ( app.session.get('x') == 8) %}style="display:none"{% endif %}>*/
/*                                 <li><a class="active" href="{{ path('afficherProduit') }}"><i class="icon-chevron-right"></i>Afficher</a></li>*/
/*                                 <li><a href="{{ path('ajouterProduit') }}"><i class="icon-chevron-right"></i>Ajouter</a></li>*/
/*                                 <li><a href="{{ path('modifierProduit') }}"><i class="icon-chevron-right"></i>Modifier</a></li>*/
/*                                 <li><a href="{{ path('supprimerProduit') }}"><i class="icon-chevron-right"></i>Supprimer</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li class="subMenu"><a> Gestion Services </a>*/
/*                            <ul {% if ( app.session.get('x') == 1)or ( app.session.get('x') == 2)or ( app.session.get('x') == 3) or ( app.session.get('x') == 4) %}style="display:none"{% endif %}>*/
/*                                 <li><a class="active" href="{{ path('afficherService') }}"><i class="icon-chevron-right"></i>Afficher</a></li>*/
/*                                 <li><a href="{{ path('ajouterService') }}"><i class="icon-chevron-right"></i>Ajouter</a></li>*/
/*                                 <li><a href="{{ path('modifierService') }}"><i class="icon-chevron-right"></i>Modifier</a></li>*/
/*                                 <li><a href="{{ path('supprimerService') }}"><i class="icon-chevron-right"></i>Supprimer</a></li>												*/
/*                             </ul>*/
/*                         </li>*/
/*                 </ul>*/
/*                 </div>*/
/* */
/*                 <div class="span9">*/
/*                     <ul class="breadcrumb">*/
/*                         <li><a href="{{ path('main_homepage') }}">Home</a> <span class="divider">/</span></li>*/
/*                         <li class="active">Supprimer Produit</li>*/
/*                     </ul>*/
/*                     <h3> Supprimer Produit</h3>	*/
/*                     <div class="well">*/
/*                         <!--*/
/*                         <div class="alert alert-info fade in">*/
/*                                 <button type="button" class="close" data-dismiss="alert">×</button>*/
/*                                 <strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s*/
/*                          </div>*/
/*                         <div class="alert fade in">*/
/*                                 <button type="button" class="close" data-dismiss="alert">×</button>*/
/*                                 <strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s*/
/*                          </div>*/
/*                          <div class="alert alert-block alert-error fade in">*/
/*                                 <button type="button" class="close" data-dismiss="alert">×</button>*/
/*                                 <strong>Lorem Ipsum is simply</strong> dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s*/
/*                          </div> -->*/
/*                         <form class="form-horizontal" method="Post" action="{{ path("supprimerp") }}">*/
/*                             <h4>Informations du produit : </h4>*/
/*                             <br>*/
/*                             */
/*                              <div class="control-group">*/
/*                                 <label class="control-label">Produits : </label>*/
/*                             <div class="controls">*/
/*                                     <select class="span2" name="produits">*/
/*                                         {% for produit in produits %}*/
/*                                             <option value="{{produit.id}}">{{produit.libelle}}</option>*/
/*                                         {% endfor %}*/
/*                                         */
/*                                         */
/*                                     </select>*/
/*                                 </div>*/
/*                             </div>   */
/*                             */
/* */
/* */
/* */
/* */
/*                             <div class="control-group">*/
/*                                 <div class="controls">*/
/*                                     <input type="hidden" name="email_create" value="1">*/
/*                                     <input type="hidden" name="is_new_customer" value="1">*/
/*                                     <input class="btn btn-large btn-success" type="submit" value="Supprimer" />*/
/*                                 </div>*/
/*                             </div>		*/
/*                         </form>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
