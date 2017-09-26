<?php

/* BackOfficeBundle:Default:gestionProduitsEnAttente.html.twig */
class __TwigTemplate_059b152875ae8e8d4bbe1f7b808bbe1048f436e436c902cf1db3a6c98d823d98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle::layout.html.twig", "BackOfficeBundle:Default:gestionProduitsEnAttente.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BackOfficeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <h1>
                Gestion produits
                <small>Produits en attente</small>
            </h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
                <li class=\"active\">Gestion produits</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class=\"content\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"box\">
                        <table id=\"myTable\">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Libelle</th>
                                    <th>membre</th>
                                    <th>prix</th>
                                    <th>stock</th>
                                    <th>categorie</th>
                                    <th>date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Image</th>
                                    <th>Libelle</th>
                                    <th>membre</th>
                                    <th>prix</th>
                                    <th>stock</th>
                                    <th>categorie</th>
                                    <th>date</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 48
            echo "                                    <tr>
                                        <td><img src=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "image", array()), "html", null, true);
            echo "\" height=\"50\" width=\"50\"></td>
                                        <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "libelle", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "idmembre", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "prix", array()), "html", null, true);
            echo " - <b>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "reduction", array()), "html", null, true);
            echo "%</b> = ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "prixNew", array()), "html", null, true);
            echo " DT</td>
                                        <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "stock", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "idcategorie", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["product"], "date", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                                        <td>
                                            <div class=\"btn-group\">
                                                <a type=\"button\" class=\"btn btn-success\" href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("accepte_produit", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">Accepte</a>
                                                <a type=\"button\" class=\"btn btn-danger\" href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("refuse_produit", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">Refuse</a>
                                            </div>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                            </tbody>
                        </table>    
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
";
    }

    // line 75
    public function block_javascript($context, array $blocks = array())
    {
        // line 76
        echo "    <script>
        \$(document).ready(function () {

            \$('#myTable').DataTable();
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Default:gestionProduitsEnAttente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 76,  148 => 75,  134 => 64,  123 => 59,  119 => 58,  113 => 55,  109 => 54,  105 => 53,  97 => 52,  93 => 51,  89 => 50,  85 => 49,  82 => 48,  78 => 47,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'BackOfficeBundle::layout.html.twig' %}*/
/* {% block content %}*/
/*     <!-- Content Wrapper. Contains page content -->*/
/*     <div class="content-wrapper">*/
/*         <!-- Content Header (Page header) -->*/
/*         <section class="content-header">*/
/*             <h1>*/
/*                 Gestion produits*/
/*                 <small>Produits en attente</small>*/
/*             </h1>*/
/*             <ol class="breadcrumb">*/
/*                 <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>*/
/*                 <li class="active">Gestion produits</li>*/
/*             </ol>*/
/*         </section>*/
/*         <!-- Main content -->*/
/*         <section class="content">*/
/*             <div class="row">*/
/*                 <div class="col-xs-12">*/
/*                     <div class="box">*/
/*                         <table id="myTable">*/
/*                             <thead>*/
/*                                 <tr>*/
/*                                     <th>Image</th>*/
/*                                     <th>Libelle</th>*/
/*                                     <th>membre</th>*/
/*                                     <th>prix</th>*/
/*                                     <th>stock</th>*/
/*                                     <th>categorie</th>*/
/*                                     <th>date</th>*/
/*                                     <th>Action</th>*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tfoot>*/
/*                                 <tr>*/
/*                                     <th>Image</th>*/
/*                                     <th>Libelle</th>*/
/*                                     <th>membre</th>*/
/*                                     <th>prix</th>*/
/*                                     <th>stock</th>*/
/*                                     <th>categorie</th>*/
/*                                     <th>date</th>*/
/*                                     <th>Action</th>*/
/*                                 </tr>*/
/*                             </tfoot>*/
/*                             <tbody>*/
/*                                 {% for product in products %}*/
/*                                     <tr>*/
/*                                         <td><img src="{{ product.image }}" height="50" width="50"></td>*/
/*                                         <td>{{ product.libelle }}</td>*/
/*                                         <td>{{ product.idmembre }}</td>*/
/*                                         <td>{{product.prix}} - <b>{{product.reduction}}%</b> = {{product.prixNew}} DT</td>*/
/*                                         <td>{{product.stock }}</td>*/
/*                                         <td>{{product.idcategorie}}</td>*/
/*                                         <td>{{product.date|date("d-m-Y")}}</td>*/
/*                                         <td>*/
/*                                             <div class="btn-group">*/
/*                                                 <a type="button" class="btn btn-success" href="{{path('accepte_produit',{'id':product.id})}}">Accepte</a>*/
/*                                                 <a type="button" class="btn btn-danger" href="{{path('refuse_produit',{'id':product.id})}}">Refuse</a>*/
/*                                             </div>*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                 {% endfor %}*/
/*                             </tbody>*/
/*                         </table>    */
/*                     </div>*/
/*                     <!-- /.box -->*/
/*                 </div>*/
/*             </div>*/
/*         </section>*/
/*         <!-- /.content -->*/
/*     </div>*/
/*     <!-- /.content-wrapper -->*/
/* {% endblock %}*/
/* {% block javascript %}*/
/*     <script>*/
/*         $(document).ready(function () {*/
/* */
/*             $('#myTable').DataTable();*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
