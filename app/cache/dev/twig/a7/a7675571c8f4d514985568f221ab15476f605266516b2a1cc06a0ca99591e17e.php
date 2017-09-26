<?php

/* mainBundle:Offre:modifierProduit.html.twig */
class __TwigTemplate_b6e2c10b25f70860ab76032063ec1d6584fdda5b5aa62836769e38c9fa8ef5a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("mainBundle::layout.html.twig", "mainBundle:Offre:modifierProduit.html.twig", 2);
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
                        <li class=\"active\">Modifier Produit</li>
                    </ul>
                    <h3> Modifier Produit</h3>\t
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
        echo $this->env->getExtension('routing')->getPath("modifierp");
        echo "\">
                            <h4>Informations du produit : </h4>
                            <br>

                            <div class=\"control-group\">
                                <label class=\"control-label\">Produits : </label>
                                <div class=\"controls\">
                                    <select id=\"prod\" class=\"span2\" name=\"produits\">
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
                                <label class=\"control-label\">Catégorie : </label>
                                <div class=\"controls\">
                                    <select id=\"prod2\" class=\"span2\" name=\"categorie\">
                                        ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 73
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "libelle", array()), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "

                                    </select>
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputFname1\">Nom : </label>
                                <div class=\"controls\">
                                    <input id=\"nom\" name=\"nom\" type=\"text\" id=\"inputFname1\" placeholder=\"Nom Produit\">
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputFname1\">Prix : </label>
                                <div class=\"controls\">
                                    <input id=\"prix\" name=\"prix\" type=\"text\" id=\"inputFname1\" >
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" for=\"inputLnam\">Description : </label>
                                <div class=\"controls\">
                                    <textarea id=\"desc\" name=\"description\" rows=\"4\" cols=\"200\"> </textarea>
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label  class=\"control-label\" for=\"input_email\">Image : </label>
                                <div class=\"controls\">
                                    <input id=\"img\" name=\"image\" type=\"file\" name=\"file\" size=\"50\" />

                                </div>
                            </div>\t  




                            <div class=\"control-group\">
                                <div class=\"controls\">
                                    
                                    <input class=\"btn btn-large btn-success\" type=\"submit\" value=\"Modifier\" />
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

    // line 123
    public function block_javascripts($context, array $blocks = array())
    {
        // line 124
        echo "    <script>
        \$(document).ready(function () {
            \$('#prod').change(function(){
                ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
            // line 128
            echo "                        
                        if (\$('#prod').val() == ";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "id", array()), "html", null, true);
            echo "){
                            \$('#nom').val('";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "libelle", array()), "html", null, true);
            echo "');
                            \$('#prix').val(";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "prix", array()), "html", null, true);
            echo ");
                            \$('#desc').val('";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "description", array()), "html", null, true);
            echo "');
                        }
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "        
                
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "mainBundle:Offre:modifierProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 134,  249 => 132,  245 => 131,  241 => 130,  237 => 129,  234 => 128,  230 => 127,  225 => 124,  222 => 123,  171 => 75,  160 => 73,  156 => 72,  145 => 63,  134 => 61,  130 => 60,  119 => 52,  98 => 34,  87 => 26,  83 => 25,  79 => 24,  75 => 23,  69 => 22,  62 => 18,  58 => 17,  54 => 16,  50 => 15,  44 => 14,  32 => 4,  29 => 3,  11 => 2,);
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
/* */
/*                        <ul id="sideManu" class="nav nav-tabs nav-stacked">*/
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
/*                         <li class="active">Modifier Produit</li>*/
/*                     </ul>*/
/*                     <h3> Modifier Produit</h3>	*/
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
/*                         <form class="form-horizontal" method="Post" action="{{ path("modifierp") }}">*/
/*                             <h4>Informations du produit : </h4>*/
/*                             <br>*/
/* */
/*                             <div class="control-group">*/
/*                                 <label class="control-label">Produits : </label>*/
/*                                 <div class="controls">*/
/*                                     <select id="prod" class="span2" name="produits">*/
/*                                         {% for produit in produits %}*/
/*                                             <option value="{{produit.id}}">{{produit.libelle}}</option>*/
/*                                         {% endfor %}*/
/* */
/* */
/*                                     </select>*/
/*                                 </div>*/
/*                             </div>   */
/*                             <div class="control-group">*/
/*                                 <label class="control-label">Catégorie : </label>*/
/*                                 <div class="controls">*/
/*                                     <select id="prod2" class="span2" name="categorie">*/
/*                                         {% for categorie in categories %}*/
/*                                             <option value="{{categorie.id}}">{{categorie.libelle}}</option>*/
/*                                         {% endfor %}*/
/* */
/* */
/*                                     </select>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="control-group">*/
/*                                 <label class="control-label" for="inputFname1">Nom : </label>*/
/*                                 <div class="controls">*/
/*                                     <input id="nom" name="nom" type="text" id="inputFname1" placeholder="Nom Produit">*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="control-group">*/
/*                                 <label class="control-label" for="inputFname1">Prix : </label>*/
/*                                 <div class="controls">*/
/*                                     <input id="prix" name="prix" type="text" id="inputFname1" >*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="control-group">*/
/*                                 <label class="control-label" for="inputLnam">Description : </label>*/
/*                                 <div class="controls">*/
/*                                     <textarea id="desc" name="description" rows="4" cols="200"> </textarea>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="control-group">*/
/*                                 <label  class="control-label" for="input_email">Image : </label>*/
/*                                 <div class="controls">*/
/*                                     <input id="img" name="image" type="file" name="file" size="50" />*/
/* */
/*                                 </div>*/
/*                             </div>	  */
/* */
/* */
/* */
/* */
/*                             <div class="control-group">*/
/*                                 <div class="controls">*/
/*                                     */
/*                                     <input class="btn btn-large btn-success" type="submit" value="Modifier" />*/
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
/* {% block javascripts %}*/
/*     <script>*/
/*         $(document).ready(function () {*/
/*             $('#prod').change(function(){*/
/*                 {% for prod in produits %}*/
/*                         */
/*                         if ($('#prod').val() == {{prod.id}}){*/
/*                             $('#nom').val('{{ prod.libelle }}');*/
/*                             $('#prix').val({{ prod.prix }});*/
/*                             $('#desc').val('{{ prod.description }}');*/
/*                         }*/
/*                         {% endfor %}        */
/*                 */
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}    */
