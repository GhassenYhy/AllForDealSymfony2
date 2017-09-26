<?php

/* BackOfficeBundle:Default:gestionServices.html.twig */
class __TwigTemplate_8da20b6582e7ffd8ec607534805f003498858fb16032542a1d816d15a8de5c93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle::layout.html.twig", "BackOfficeBundle:Default:gestionServices.html.twig", 1);
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
                Gestion Services
                <small>tout les services</small>
            </h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
                <li class=\"active\">Gestion Services</li>
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
                                    <th>Libelle</th>
                                    <th>membre</th>
                                    <th>categorie</th>
                                    <th>date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Libelle</th>
                                    <th>membre</th>
                                    <th>categorie</th>
                                    <th>date</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) ? $context["services"] : $this->getContext($context, "services")));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 42
            echo "                                    <tr class=\"table-row\">

                                        <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "libelle", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "idmembre", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "idcategorie", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["service"], "date", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                                        <td>
                                            <div class=\"btn-group\">
                                                <a type=\"button\" class=\"btn btn-danger\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("efface_service", array("id" => $this->getAttribute($context["service"], "id", array()))), "html", null, true);
            echo "\">Effacer</a>
                                            </div>

                                        </td>

                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
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

    // line 69
    public function block_javascript($context, array $blocks = array())
    {
        // line 70
        echo "    <script>
        \$(document).ready(function () {

            \$('#myTable').DataTable();
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Default:gestionServices.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 70,  126 => 69,  111 => 57,  98 => 50,  92 => 47,  88 => 46,  84 => 45,  80 => 44,  76 => 42,  72 => 41,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'BackOfficeBundle::layout.html.twig' %}*/
/* {% block content %}*/
/*     <!-- Content Wrapper. Contains page content -->*/
/*     <div class="content-wrapper">*/
/*         <!-- Content Header (Page header) -->*/
/*         <section class="content-header">*/
/*             <h1>*/
/*                 Gestion Services*/
/*                 <small>tout les services</small>*/
/*             </h1>*/
/*             <ol class="breadcrumb">*/
/*                 <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>*/
/*                 <li class="active">Gestion Services</li>*/
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
/*                                     <th>Libelle</th>*/
/*                                     <th>membre</th>*/
/*                                     <th>categorie</th>*/
/*                                     <th>date</th>*/
/*                                     <th>Action</th>*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tfoot>*/
/*                                 <tr>*/
/*                                     <th>Libelle</th>*/
/*                                     <th>membre</th>*/
/*                                     <th>categorie</th>*/
/*                                     <th>date</th>*/
/*                                     <th>Action</th>*/
/*                                 </tr>*/
/*                             </tfoot>*/
/*                             <tbody>*/
/*                                 {% for service in services %}*/
/*                                     <tr class="table-row">*/
/* */
/*                                         <td>{{ service.libelle }}</td>*/
/*                                         <td>{{ service.idmembre }}</td>*/
/*                                         <td>{{service.idcategorie}}</td>*/
/*                                         <td>{{service.date|date("d-m-Y")}}</td>*/
/*                                         <td>*/
/*                                             <div class="btn-group">*/
/*                                                 <a type="button" class="btn btn-danger" href="{{path('efface_service',{'id':service.id})}}">Effacer</a>*/
/*                                             </div>*/
/* */
/*                                         </td>*/
/* */
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
/* */
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
