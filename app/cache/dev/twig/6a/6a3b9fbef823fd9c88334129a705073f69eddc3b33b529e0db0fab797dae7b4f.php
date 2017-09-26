<?php

/* mainBundle:Offre:ajoutsucc.html.twig */
class __TwigTemplate_130020c0fe76e4bcc250823e4ed4f58284fdcfcb054b845f9ef2fdd6d21f3ad1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("mainBundle::layout.html.twig", "mainBundle:Offre:ajoutsucc.html.twig", 2);
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
                            <ul>
                                <li><a class=\"active\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("afficherProduit");
        echo "\"><i class=\"icon-chevron-right\"></i>Afficher</a></li>
                                <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("ajouterProduit");
        echo "\"><i class=\"icon-chevron-right\"></i>Ajouter</a></li>
                                <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("modifierProduit");
        echo "\"><i class=\"icon-chevron-right\"></i>Modifier</a></li>
                                <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("supprimerProduit");
        echo "\"><i class=\"icon-chevron-right\"></i>Supprimer</a></li>
                            </ul>
                        </li>
                        <li class=\"subMenu\"><a> Gestion Services </a>
                            <ul style=\"display:none\">
                                <li><a class=\"active\" href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("afficherService");
        echo "\"><i class=\"icon-chevron-right\"></i>Afficher</a></li>
                                <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("ajouterService");
        echo "\"><i class=\"icon-chevron-right\"></i>Ajouter</a></li>
                                <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("modifierService");
        echo "\"><i class=\"icon-chevron-right\"></i>Modifier</a></li>
                                <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("supprimerService");
        echo "\"><i class=\"icon-chevron-right\"></i>Supprimer</a></li>\t\t\t\t\t\t\t\t\t\t\t\t
                            </ul>
                        </li>
                    </ul>
                </div>



                <div class=\"span9\">
                    <ul class=\"breadcrumb\">
                        <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("success");
        echo "\">Home</a> <span class=\"divider\">/</span></li>
                        <li class=\"active\">Succés</li>
                    </ul>
                    ";
        // line 38
        if (((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")) == 1)) {
            // line 39
            echo "                        <h2> Produit Ajouté</h2>\t
                    ";
        } elseif ((        // line 40
(isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")) == 2)) {
            // line 41
            echo "                        <h2> Produit Modifié</h2>
                    ";
        } elseif ((        // line 42
(isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")) == 3)) {
            // line 43
            echo "                        <h2> Produit Supprimé</h2> 
                    ";
        } elseif ((        // line 44
(isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")) == 4)) {
            // line 45
            echo "                        <h2> Service Ajouté</h2>
                    ";
        } elseif ((        // line 46
(isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")) == 5)) {
            // line 47
            echo "                        <h2> Service Modifié</h2>
                    ";
        } elseif ((        // line 48
(isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")) == 6)) {
            // line 49
            echo "                        <h2> Service Supprimé</h2>
                    ";
        }
        // line 51
        echo "                    <div class=\"well\">
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
                        ";
        // line 65
        if (((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")) == 1)) {
            // line 66
            echo "                            <h4>Votre produit a été ajouté avec succés ! </h4>\t
                        ";
        } elseif ((        // line 67
(isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")) == 2)) {
            // line 68
            echo "                            <h4>Votre produit a été modifié avec succés ! </h4>
                        ";
        } elseif ((        // line 69
(isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")) == 3)) {
            // line 70
            echo "                            <h4>Votre produit a été supprimé avec succés ! </h4>
                        ";
        } elseif ((        // line 71
(isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")) == 4)) {
            // line 72
            echo "                            <h4>Votre service a été ajouté avec succés ! </h4>
                        ";
        } elseif ((        // line 73
(isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")) == 5)) {
            // line 74
            echo "                            <h4>Votre service a été modifié avec succés ! </h4>
                        ";
        } elseif ((        // line 75
(isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")) == 6)) {
            // line 76
            echo "                            <h4>Votre service a été supprimé avec succés ! </h4>
                        ";
        }
        // line 78
        echo "


                    </div>

                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "mainBundle:Offre:ajoutsucc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 78,  168 => 76,  166 => 75,  163 => 74,  161 => 73,  158 => 72,  156 => 71,  153 => 70,  151 => 69,  148 => 68,  146 => 67,  143 => 66,  141 => 65,  125 => 51,  121 => 49,  119 => 48,  116 => 47,  114 => 46,  111 => 45,  109 => 44,  106 => 43,  104 => 42,  101 => 41,  99 => 40,  96 => 39,  94 => 38,  88 => 35,  75 => 25,  71 => 24,  67 => 23,  63 => 22,  55 => 17,  51 => 16,  47 => 15,  43 => 14,  31 => 4,  28 => 3,  11 => 2,);
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
/*                 <div id="sidebar" class="span3">*/
/* */
/*                     <ul id="sideManu" class="nav nav-tabs nav-stacked">*/
/*                         <li class="subMenu open"><a> Gestion Produits </a>*/
/*                             <ul>*/
/*                                 <li><a class="active" href="{{ path('afficherProduit') }}"><i class="icon-chevron-right"></i>Afficher</a></li>*/
/*                                 <li><a href="{{ path('ajouterProduit') }}"><i class="icon-chevron-right"></i>Ajouter</a></li>*/
/*                                 <li><a href="{{ path('modifierProduit') }}"><i class="icon-chevron-right"></i>Modifier</a></li>*/
/*                                 <li><a href="{{ path('supprimerProduit') }}"><i class="icon-chevron-right"></i>Supprimer</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li class="subMenu"><a> Gestion Services </a>*/
/*                             <ul style="display:none">*/
/*                                 <li><a class="active" href="{{ path('afficherService') }}"><i class="icon-chevron-right"></i>Afficher</a></li>*/
/*                                 <li><a href="{{ path('ajouterService') }}"><i class="icon-chevron-right"></i>Ajouter</a></li>*/
/*                                 <li><a href="{{ path('modifierService') }}"><i class="icon-chevron-right"></i>Modifier</a></li>*/
/*                                 <li><a href="{{ path('supprimerService') }}"><i class="icon-chevron-right"></i>Supprimer</a></li>												*/
/*                             </ul>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/* */
/* */
/* */
/*                 <div class="span9">*/
/*                     <ul class="breadcrumb">*/
/*                         <li><a href="{{ path('success') }}">Home</a> <span class="divider">/</span></li>*/
/*                         <li class="active">Succés</li>*/
/*                     </ul>*/
/*                     {% if r==1 %}*/
/*                         <h2> Produit Ajouté</h2>	*/
/*                     {% elseif r==2 %}*/
/*                         <h2> Produit Modifié</h2>*/
/*                     {% elseif r==3 %}*/
/*                         <h2> Produit Supprimé</h2> */
/*                     {% elseif r==4 %}*/
/*                         <h2> Service Ajouté</h2>*/
/*                     {% elseif r==5 %}*/
/*                         <h2> Service Modifié</h2>*/
/*                     {% elseif r==6 %}*/
/*                         <h2> Service Supprimé</h2>*/
/*                     {%  endif %}*/
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
/*                         {% if r==1 %}*/
/*                             <h4>Votre produit a été ajouté avec succés ! </h4>	*/
/*                         {% elseif r==2 %}*/
/*                             <h4>Votre produit a été modifié avec succés ! </h4>*/
/*                         {% elseif r==3 %}*/
/*                             <h4>Votre produit a été supprimé avec succés ! </h4>*/
/*                         {% elseif r==4 %}*/
/*                             <h4>Votre service a été ajouté avec succés ! </h4>*/
/*                         {% elseif r==5 %}*/
/*                             <h4>Votre service a été modifié avec succés ! </h4>*/
/*                         {% elseif r==6 %}*/
/*                             <h4>Votre service a été supprimé avec succés ! </h4>*/
/*                         {%  endif %}*/
/* */
/* */
/* */
/*                     </div>*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
