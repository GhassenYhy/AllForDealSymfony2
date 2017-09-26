<?php

/* BackOfficeBundle:Default:gestionReclamationVoir.html.twig */
class __TwigTemplate_0297652a4126c718d98eaf1d62001ce884ed61b5cc509d0e4d54b33043e8701a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle::layout.html.twig", "BackOfficeBundle:Default:gestionReclamationVoir.html.twig", 1);
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
                Gestion des Reclamations
                <small>voir reclamations</small>
            </h1>

            <ol class=\"breadcrumb\">

                <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
                <li class=\"active\">voir Recalamations</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class=\"content\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div id=\"slide\" class=\"box box-primary\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">Lire Reclamation</h3>

                            <div class=\"box-tools pull-right\">
                                <a id=\"previous\" href=\"#\" class=\"btn btn-box-tool\" data-toggle=\"tooltip\" title=\"Previous\"><i class=\"fa fa-chevron-left\"></i></a>
                                <a id=\"next\" href=\"#\" class=\"btn btn-box-tool\" data-toggle=\"tooltip\" title=\"Next\"><i class=\"fa fa-chevron-right\"></i></a>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class=\"box-body no-padding\">
                            <div class=\"mailbox-read-info\">
                                <h3 id=\"titre\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "titre", array()), "html", null, true);
        echo "</h3>
                                <h5 id=\"email\">From: ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "idmembre", array()), "email", array()), "html", null, true);
        echo "
                                    <span id=\"date\" class=\"mailbox-read-time pull-right\">";
        // line 36
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "date", array()), "d-m-Y"), "html", null, true);
        echo "</span></h5>
                            </div>
                            <!-- /.mailbox-read-info -->


                            <div id=\"desc\" class=\"mailbox-read-message\">
                                ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "description", array()), "html", null, true);
        echo "
                            </div>
                            <!-- /.mailbox-read-message -->
                        </div>
                        <!-- /.box-body -->

                        <form method=\"post\" action=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("gestion_reclamation");
        echo "\">
                        <div class=\"box-footer\">
                            <div class=\"pull-right\">
                                
                                <button type=\"submit\" name=\"repond\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i> Repond</button>
                                <input id=\"id\" name=\"id\" hidden type=\"text\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "id", array()), "html", null, true);
        echo "\" >
                                <input id=\"mail\" name=\"mail\" type=\"text\" hidden value=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "idmembre", array()), "email", array()), "html", null, true);
        echo "\">
                                <input id=\"subject\" name=\"subject\" type=\"text\" hidden value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reclamation"]) ? $context["reclamation"] : $this->getContext($context, "reclamation")), "titre", array()), "html", null, true);
        echo "\">
                            </div>
                            <button id=\"supp\" type=\"submit\" name=\"supp\" class=\"btn btn-default\"><i class=\"fa fa-trash-o\"></i> effacer</button>
                            <button type=\"submit\" class=\"btn btn-default\"><i class=\"fa fa-print\"></i> Print</button>
                        </div>
                        <!-- /.box-footer -->
                        </form>
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

    // line 76
    public function block_javascript($context, array $blocks = array())
    {
        // line 77
        echo "    <script>
        \$(document).ready(function () {
            \$(\"#next\").click(function () {
                \$.ajax({type: \"POST\", url: \"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("ajax_reclamation1");
        echo "\", data: {id: \$(\"#id\").val()}, success: function (result) {
                        change(result);
                    }, error: function () {
                    }});
            });
            \$(\"#previous\").click(function () {
                \$.ajax({type: \"POST\", url: \"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("ajax_reclamation2");
        echo "\", data: {id: \$(\"#id\").val()}, success: function (result) {
                        change(result);
                    }, error: function () {
                    }});
            });
           
        });
        function toggleDiv() {
            var \$div = \$(\"#slide\");
            \$div.animate({
                left: \"-\" + \$div.width() + \"px\"
            }, function () {
                \$div.animate({left: \"0px\"});
            });
        }
        function change(result) {
            toggleDiv();
            var o = result[0];
            \$(\"#titre\").text(o.titre);
            \$(\"#subject\").text(o.titre);
            \$(\"#date\").text(o.date);
            \$(\"#email\").text(o.idmembre.email);
            \$(\"#mail\").val(o.idmembre.email);
            \$(\"#desc\").text(o.description);
            \$(\"#id\").val(o.id);
        }
    </script>

";
    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Default:gestionReclamationVoir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 86,  140 => 80,  135 => 77,  132 => 76,  107 => 55,  103 => 54,  99 => 53,  91 => 48,  82 => 42,  73 => 36,  69 => 35,  65 => 34,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'BackOfficeBundle::layout.html.twig' %}*/
/* {% block content %}*/
/*     <!-- Content Wrapper. Contains page content -->*/
/*     <div class="content-wrapper">*/
/*         <!-- Content Header (Page header) -->*/
/*         <section class="content-header">*/
/*             <h1>*/
/*                 Gestion des Reclamations*/
/*                 <small>voir reclamations</small>*/
/*             </h1>*/
/* */
/*             <ol class="breadcrumb">*/
/* */
/*                 <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>*/
/*                 <li class="active">voir Recalamations</li>*/
/*             </ol>*/
/*         </section>*/
/*         <!-- Main content -->*/
/*         <section class="content">*/
/*             <div class="row">*/
/*                 <div class="col-xs-12">*/
/*                     <div id="slide" class="box box-primary">*/
/*                         <div class="box-header with-border">*/
/*                             <h3 class="box-title">Lire Reclamation</h3>*/
/* */
/*                             <div class="box-tools pull-right">*/
/*                                 <a id="previous" href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>*/
/*                                 <a id="next" href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>*/
/*                             </div>*/
/*                         </div>*/
/*                         <!-- /.box-header -->*/
/*                         <div class="box-body no-padding">*/
/*                             <div class="mailbox-read-info">*/
/*                                 <h3 id="titre">{{reclamation.titre}}</h3>*/
/*                                 <h5 id="email">From: {{reclamation.idmembre.email}}*/
/*                                     <span id="date" class="mailbox-read-time pull-right">{{ reclamation.date|date('d-m-Y')}}</span></h5>*/
/*                             </div>*/
/*                             <!-- /.mailbox-read-info -->*/
/* */
/* */
/*                             <div id="desc" class="mailbox-read-message">*/
/*                                 {{ reclamation.description }}*/
/*                             </div>*/
/*                             <!-- /.mailbox-read-message -->*/
/*                         </div>*/
/*                         <!-- /.box-body -->*/
/* */
/*                         <form method="post" action="{{path('gestion_reclamation')}}">*/
/*                         <div class="box-footer">*/
/*                             <div class="pull-right">*/
/*                                 */
/*                                 <button type="submit" name="repond" class="btn btn-default"><i class="fa fa-reply"></i> Repond</button>*/
/*                                 <input id="id" name="id" hidden type="text" value="{{reclamation.id}}" >*/
/*                                 <input id="mail" name="mail" type="text" hidden value="{{reclamation.idmembre.email}}">*/
/*                                 <input id="subject" name="subject" type="text" hidden value="{{reclamation.titre}}">*/
/*                             </div>*/
/*                             <button id="supp" type="submit" name="supp" class="btn btn-default"><i class="fa fa-trash-o"></i> effacer</button>*/
/*                             <button type="submit" class="btn btn-default"><i class="fa fa-print"></i> Print</button>*/
/*                         </div>*/
/*                         <!-- /.box-footer -->*/
/*                         </form>*/
/*                     </div>*/
/*                     <!-- /.box -->*/
/* */
/*                 </div>*/
/* */
/* */
/*             </div>*/
/* */
/*         </section>*/
/*         <!-- /.content -->*/
/*     </div>*/
/* */
/*     <!-- /.content-wrapper -->*/
/* {% endblock %}*/
/* {% block javascript %}*/
/*     <script>*/
/*         $(document).ready(function () {*/
/*             $("#next").click(function () {*/
/*                 $.ajax({type: "POST", url: "{{path('ajax_reclamation1')}}", data: {id: $("#id").val()}, success: function (result) {*/
/*                         change(result);*/
/*                     }, error: function () {*/
/*                     }});*/
/*             });*/
/*             $("#previous").click(function () {*/
/*                 $.ajax({type: "POST", url: "{{path('ajax_reclamation2')}}", data: {id: $("#id").val()}, success: function (result) {*/
/*                         change(result);*/
/*                     }, error: function () {*/
/*                     }});*/
/*             });*/
/*            */
/*         });*/
/*         function toggleDiv() {*/
/*             var $div = $("#slide");*/
/*             $div.animate({*/
/*                 left: "-" + $div.width() + "px"*/
/*             }, function () {*/
/*                 $div.animate({left: "0px"});*/
/*             });*/
/*         }*/
/*         function change(result) {*/
/*             toggleDiv();*/
/*             var o = result[0];*/
/*             $("#titre").text(o.titre);*/
/*             $("#subject").text(o.titre);*/
/*             $("#date").text(o.date);*/
/*             $("#email").text(o.idmembre.email);*/
/*             $("#mail").val(o.idmembre.email);*/
/*             $("#desc").text(o.description);*/
/*             $("#id").val(o.id);*/
/*         }*/
/*     </script>*/
/* */
/* {% endblock %}*/
