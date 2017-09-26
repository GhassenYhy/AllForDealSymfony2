<?php

/* BackOfficeBundle:Default:gestionReclamationInbox.html.twig */
class __TwigTemplate_4f4b9219ff85ed7ef7e4f47321a50f4aebc2d12e08fbe4afbedd2df35646dc6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle::layout.html.twig", "BackOfficeBundle:Default:gestionReclamationInbox.html.twig", 1);
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
                <small>Inbox</small>
            </h1>

            <ol class=\"breadcrumb\">

                <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
                <li class=\"active\">Inbox</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class=\"content\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"box box-primary\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">Inbox</h3>

                            <div class=\"box-tools pull-right\">
                                <div class=\"has-feedback\">
                                    <input id=\"search\" type=\"text\" class=\"form-control input-sm\" placeholder=\"Search Mail\">
                                    <span class=\"glyphicon glyphicon-search form-control-feedback\"></span>
                                </div>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class=\"box-body no-padding\">
                            <form id=\"f1\" method=\"post\" action=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("gestion_reclamation_supp");
        echo "\">
                                <div class=\"mailbox-controls\">
                                    <!-- Check all button -->
                                    <button id=\"checkall\" type=\"button\" class=\"btn btn-default btn-sm checkbox-toggle\"><i class=\"fa fa-square-o\"></i>
                                    </button>
                                    <div class=\"btn-group\">
                                        <button type=\"submit\" class=\"btn btn-default btn-sm supp\"><i class=\"fa fa-trash-o\"></i></button>

                                    </div>
                                    <!-- /.btn-group -->
                                    <button type=\"button\" class=\"btn btn-default btn-sm\"><i class=\"fa fa-refresh\"></i></button>
                                    <div  class=\"pull-right\">
                                        <span class=\"pagin\"></span>
                                        <div class=\"btn-group\">
                                            <button type=\"button\" onClick=\"previous()\" class=\"btn btn-default btn-sm\"><i class=\"fa fa-chevron-left\"></i></button>
                                            <button type=\"button\" onClick=\"next()\" class=\"btn btn-default btn-sm\"><i class=\"fa fa-chevron-right\"></i></button>
                                        </div>

                                        <!-- /.btn-group -->
                                    </div>
                                    <!-- /.pull-right -->
                                </div>
                                <div class=\"table-responsive mailbox-messages\">

                                    <table id=\"myTable\"  class=\"table table-hover table-striped\">

                                        <tbody>
                                            ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) ? $context["reclamations"] : $this->getContext($context, "reclamations")));
        foreach ($context['_seq'] as $context["_key"] => $context["rec"]) {
            // line 64
            echo "                                                <tr>
                                                    <td><div class=\"icheckbox_flat-blue\" aria-checked=\"false\" aria-disabled=\"false\" style=\"position: relative;\"><input value=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["rec"], "id", array()), "html", null, true);
            echo "\" type=\"checkbox\" name=\"check[]\" style=\"position: absolute; opacity: 0;\"><ins class=\"iCheck-helper\" style=\"position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);\"></ins></div></td>
                                                    <td class=\"mailbox-star\"><a href=\"#\"><i class=\"fa fa-star text-yellow\"></i></a></td>
                                                    <td class=\"mailbox-name\"><a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gestion_reclamation_voir_1", array("id" => $this->getAttribute($context["rec"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rec"], "idmembre", array()), "html", null, true);
            echo "</a></td>
                                                    <td class=\"mailbox-subject\"><b>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["rec"], "titre", array()), "html", null, true);
            echo "</b> - ";
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($context["rec"], "description", array())) > 50)) ? ((twig_slice($this->env, $this->getAttribute($context["rec"], "description", array()), 0, 50) . "...")) : ($this->getAttribute($context["rec"], "description", array()))), "html", null, true);
            echo "
                                                    </td>
                                                    <td class=\"mailbox-attachment\"></td>
                                                    <td class=\"mailbox-date\">";
            // line 71
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rec"], "date", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rec'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "
                                        </tbody>

                                    </table>

                                    <!-- /.table -->
                                </div>
                                <!-- /.mail-box-messages -->
                            </form>
                        </div>
                        <!-- /.box-body -->
                        <div class=\"box-footer no-padding\">
                            <div class=\"mailbox-controls\">
                                <!-- Check all button -->
                                <button type=\"button\" class=\"btn btn-default btn-sm checkbox-toggle\"><i class=\"fa fa-square-o\"></i>
                                </button>
                                <div class=\"btn-group\">
                                    <button type=\"submit\" class=\"btn btn-default btn-sm supp\"><i class=\"fa fa-trash-o\"></i></button>

                                </div>
                                <!-- /.btn-group -->
                                <button type=\"button\" class=\"btn btn-default btn-sm\"><i class=\"fa fa-refresh\"></i></button>
                                <div class=\"pull-right\">
                                    <span class=\"pagin\"></span>
                                    <div class=\"btn-group\">
                                        <button type=\"button\" onClick=\"previous()\" class=\"btn btn-default btn-sm\"><i class=\"fa fa-chevron-left\"></i></button>
                                        <button type=\"button\" onClick=\"next()\" class=\"btn btn-default btn-sm\"><i class=\"fa fa-chevron-right\"></i></button>
                                    </div>
                                    <!-- /.btn-group -->
                                </div>
                                <!-- /.pull-right -->
                            </div>
                        </div>
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

    // line 120
    public function block_javascript($context, array $blocks = array())
    {
        // line 121
        echo "    
    <script>
        var show_per_page = 5;
        var current_page = 0;
        var number_of_items;
        var number_of_pages;
        \$(document).ready(function () {
            var \$rows = \$('#myTable tr');
            \$('.icheckbox_flat-blue').click(function () {
                \$(this).toggleClass('checked');
                \$(this).find('input').prop(\"checked\", function (index, attr) {
                    return attr === true ? false : true;
                });
            });
            \$('#search').keyup(function () {

                var val = '^(?=.*\\\\b' + \$.trim(\$(this).val()).split(/\\s+/).join('\\\\b)(?=.*\\\\b') + ').*\$',
                        reg = RegExp(val, 'i'),
                        text;

                \$rows.show().filter(function () {
                    text = \$(this).text().replace(/\\s+/g, ' ');
                    return !reg.test(text);
                }).hide();
                number_of_items = \$(\"#myTable\").find('tbody tr:visible').length;
                number_of_pages = Math.ceil(number_of_items / show_per_page);
                pagination();
            });
            \$('#checkall').click(function () {
                var ch = \$(\"#myTable\").find('.icheckbox_flat-blue');
                \$(this).children('i').toggleClass('fa-check-square-o fa-square-o');
                if (\$(this).children('i').hasClass('fa-check-square-o')) {
                    //check all rows in table
                    ch.each(function () {
                        \$(this).addClass('checked');
                        \$(this).find('input').prop(\"checked\", function (index, attr) {
                            return attr === true ? false : true;
                        });
                    });
                } else {
                    //uncheck all rows in table
                    ch.each(function () {
                        \$(this).removeClass('checked');
                    });
                }
            });
            number_of_items = \$(\"#myTable\").find('tbody tr').length;
            number_of_pages = Math.ceil(number_of_items / show_per_page);
            pagination();
            go_to_page(current_page);
        });
        function pagination() {

            var ends;
            var diff = number_of_items - ((current_page * show_per_page));
            if (diff < show_per_page)
                ends = number_of_items;
            else
                ends = show_per_page;

            if (number_of_items > 0)
                \$('.pagin').text((current_page * show_per_page) + 1 + '-' + ends + '/' + number_of_items);
            else
                \$('.pagin').text('0-0/0');

        }
        function go_to_page(page_num) {
            var start_from = page_num * show_per_page;

            var end_on = start_from + show_per_page;

            \$('#myTable').find('tbody tr').hide().slice(start_from, end_on).show();
        }



        function previous() {
            new_page = current_page - 1;
            //if there is an item before the current active link run the function
            if (new_page >= 0) {
                go_to_page(new_page);
                current_page = current_page - 1;
            }
            pagination();
        }

        function next() {
            new_page = current_page + 1;
            var number_of_items = \$(\"#myTable\").find('tbody tr').length;
            var number_of_pages = Math.ceil(number_of_items / show_per_page);
            //if there is an item after the current active link run the function
            if (new_page < number_of_pages) {
                go_to_page(new_page);
                current_page = current_page + 1;
            }
            pagination();
        }

    </script>

";
    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Default:gestionReclamationInbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 121,  181 => 120,  132 => 74,  123 => 71,  115 => 68,  109 => 67,  104 => 65,  101 => 64,  97 => 63,  67 => 36,  32 => 3,  29 => 2,  11 => 1,);
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
/*                 <small>Inbox</small>*/
/*             </h1>*/
/* */
/*             <ol class="breadcrumb">*/
/* */
/*                 <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>*/
/*                 <li class="active">Inbox</li>*/
/*             </ol>*/
/*         </section>*/
/*         <!-- Main content -->*/
/*         <section class="content">*/
/*             <div class="row">*/
/*                 <div class="col-xs-12">*/
/*                     <div class="box box-primary">*/
/*                         <div class="box-header with-border">*/
/*                             <h3 class="box-title">Inbox</h3>*/
/* */
/*                             <div class="box-tools pull-right">*/
/*                                 <div class="has-feedback">*/
/*                                     <input id="search" type="text" class="form-control input-sm" placeholder="Search Mail">*/
/*                                     <span class="glyphicon glyphicon-search form-control-feedback"></span>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <!-- /.box-tools -->*/
/*                         </div>*/
/*                         <!-- /.box-header -->*/
/*                         <div class="box-body no-padding">*/
/*                             <form id="f1" method="post" action="{{path('gestion_reclamation_supp')}}">*/
/*                                 <div class="mailbox-controls">*/
/*                                     <!-- Check all button -->*/
/*                                     <button id="checkall" type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>*/
/*                                     </button>*/
/*                                     <div class="btn-group">*/
/*                                         <button type="submit" class="btn btn-default btn-sm supp"><i class="fa fa-trash-o"></i></button>*/
/* */
/*                                     </div>*/
/*                                     <!-- /.btn-group -->*/
/*                                     <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>*/
/*                                     <div  class="pull-right">*/
/*                                         <span class="pagin"></span>*/
/*                                         <div class="btn-group">*/
/*                                             <button type="button" onClick="previous()" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>*/
/*                                             <button type="button" onClick="next()" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>*/
/*                                         </div>*/
/* */
/*                                         <!-- /.btn-group -->*/
/*                                     </div>*/
/*                                     <!-- /.pull-right -->*/
/*                                 </div>*/
/*                                 <div class="table-responsive mailbox-messages">*/
/* */
/*                                     <table id="myTable"  class="table table-hover table-striped">*/
/* */
/*                                         <tbody>*/
/*                                             {% for rec in reclamations %}*/
/*                                                 <tr>*/
/*                                                     <td><div class="icheckbox_flat-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input value="{{ rec.id }}" type="checkbox" name="check[]" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div></td>*/
/*                                                     <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>*/
/*                                                     <td class="mailbox-name"><a href="{{path('gestion_reclamation_voir_1',{'id':rec.id})}}">{{ rec.idmembre }}</a></td>*/
/*                                                     <td class="mailbox-subject"><b>{{ rec.titre }}</b> - {{ rec.description|length > 50 ? rec.description|slice(0, 50) ~ '...' : rec.description  }}*/
/*                                                     </td>*/
/*                                                     <td class="mailbox-attachment"></td>*/
/*                                                     <td class="mailbox-date">{{ rec.date|date('d-m-Y')}}</td>*/
/*                                                 </tr>*/
/*                                             {% endfor %}*/
/* */
/*                                         </tbody>*/
/* */
/*                                     </table>*/
/* */
/*                                     <!-- /.table -->*/
/*                                 </div>*/
/*                                 <!-- /.mail-box-messages -->*/
/*                             </form>*/
/*                         </div>*/
/*                         <!-- /.box-body -->*/
/*                         <div class="box-footer no-padding">*/
/*                             <div class="mailbox-controls">*/
/*                                 <!-- Check all button -->*/
/*                                 <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>*/
/*                                 </button>*/
/*                                 <div class="btn-group">*/
/*                                     <button type="submit" class="btn btn-default btn-sm supp"><i class="fa fa-trash-o"></i></button>*/
/* */
/*                                 </div>*/
/*                                 <!-- /.btn-group -->*/
/*                                 <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>*/
/*                                 <div class="pull-right">*/
/*                                     <span class="pagin"></span>*/
/*                                     <div class="btn-group">*/
/*                                         <button type="button" onClick="previous()" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>*/
/*                                         <button type="button" onClick="next()" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>*/
/*                                     </div>*/
/*                                     <!-- /.btn-group -->*/
/*                                 </div>*/
/*                                 <!-- /.pull-right -->*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- /.box -->*/
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
/*     */
/*     <script>*/
/*         var show_per_page = 5;*/
/*         var current_page = 0;*/
/*         var number_of_items;*/
/*         var number_of_pages;*/
/*         $(document).ready(function () {*/
/*             var $rows = $('#myTable tr');*/
/*             $('.icheckbox_flat-blue').click(function () {*/
/*                 $(this).toggleClass('checked');*/
/*                 $(this).find('input').prop("checked", function (index, attr) {*/
/*                     return attr === true ? false : true;*/
/*                 });*/
/*             });*/
/*             $('#search').keyup(function () {*/
/* */
/*                 var val = '^(?=.*\\b' + $.trim($(this).val()).split(/\s+/).join('\\b)(?=.*\\b') + ').*$',*/
/*                         reg = RegExp(val, 'i'),*/
/*                         text;*/
/* */
/*                 $rows.show().filter(function () {*/
/*                     text = $(this).text().replace(/\s+/g, ' ');*/
/*                     return !reg.test(text);*/
/*                 }).hide();*/
/*                 number_of_items = $("#myTable").find('tbody tr:visible').length;*/
/*                 number_of_pages = Math.ceil(number_of_items / show_per_page);*/
/*                 pagination();*/
/*             });*/
/*             $('#checkall').click(function () {*/
/*                 var ch = $("#myTable").find('.icheckbox_flat-blue');*/
/*                 $(this).children('i').toggleClass('fa-check-square-o fa-square-o');*/
/*                 if ($(this).children('i').hasClass('fa-check-square-o')) {*/
/*                     //check all rows in table*/
/*                     ch.each(function () {*/
/*                         $(this).addClass('checked');*/
/*                         $(this).find('input').prop("checked", function (index, attr) {*/
/*                             return attr === true ? false : true;*/
/*                         });*/
/*                     });*/
/*                 } else {*/
/*                     //uncheck all rows in table*/
/*                     ch.each(function () {*/
/*                         $(this).removeClass('checked');*/
/*                     });*/
/*                 }*/
/*             });*/
/*             number_of_items = $("#myTable").find('tbody tr').length;*/
/*             number_of_pages = Math.ceil(number_of_items / show_per_page);*/
/*             pagination();*/
/*             go_to_page(current_page);*/
/*         });*/
/*         function pagination() {*/
/* */
/*             var ends;*/
/*             var diff = number_of_items - ((current_page * show_per_page));*/
/*             if (diff < show_per_page)*/
/*                 ends = number_of_items;*/
/*             else*/
/*                 ends = show_per_page;*/
/* */
/*             if (number_of_items > 0)*/
/*                 $('.pagin').text((current_page * show_per_page) + 1 + '-' + ends + '/' + number_of_items);*/
/*             else*/
/*                 $('.pagin').text('0-0/0');*/
/* */
/*         }*/
/*         function go_to_page(page_num) {*/
/*             var start_from = page_num * show_per_page;*/
/* */
/*             var end_on = start_from + show_per_page;*/
/* */
/*             $('#myTable').find('tbody tr').hide().slice(start_from, end_on).show();*/
/*         }*/
/* */
/* */
/* */
/*         function previous() {*/
/*             new_page = current_page - 1;*/
/*             //if there is an item before the current active link run the function*/
/*             if (new_page >= 0) {*/
/*                 go_to_page(new_page);*/
/*                 current_page = current_page - 1;*/
/*             }*/
/*             pagination();*/
/*         }*/
/* */
/*         function next() {*/
/*             new_page = current_page + 1;*/
/*             var number_of_items = $("#myTable").find('tbody tr').length;*/
/*             var number_of_pages = Math.ceil(number_of_items / show_per_page);*/
/*             //if there is an item after the current active link run the function*/
/*             if (new_page < number_of_pages) {*/
/*                 go_to_page(new_page);*/
/*                 current_page = current_page + 1;*/
/*             }*/
/*             pagination();*/
/*         }*/
/* */
/*     </script>*/
/* */
/* {% endblock %}*/
