<?php

/* BackOfficeBundle:Default:index.html.twig */
class __TwigTemplate_6a18726fe867ebd1af70ffc82417475618b1ced43767109dd8b9c9fe0d52aeb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BackOfficeBundle::layout.html.twig", "BackOfficeBundle:Default:index.html.twig", 2);
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
                <li class=\"active\">Dashboard</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class=\"content\">
            <!-- Small boxes (Stat box) -->
            <div class=\"row\">
                <div class=\"col-lg-3 col-xs-6\">
                    <!-- small box -->
                    <div class=\"small-box bg-aqua\">
                        <div class=\"inner\">
                            <h3>150</h3>

                            <p>New Orders</p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"ion ion-bag\"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class=\"col-lg-3 col-xs-6\">
                    <!-- small box -->
                    <div class=\"small-box bg-green\">
                        <div class=\"inner\">
                            <h3>53<sup style=\"font-size: 20px\">%</sup></h3>

                            <p>Bounce Rate</p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"ion ion-stats-bars\"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class=\"col-lg-3 col-xs-6\">
                    <!-- small box -->
                    <div class=\"small-box bg-yellow\">
                        <div class=\"inner\">
                            <h3>44</h3>

                            <p>User Registrations</p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"ion ion-person-add\"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class=\"col-lg-3 col-xs-6\">
                    <!-- small box -->
                    <div class=\"small-box bg-red\">
                        <div class=\"inner\">
                            <h3>65</h3>

                            <p>Unique Visitors</p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"ion ion-pie-graph\"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->

            <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Area Chart</h3>

                    <div class=\"box-tools pull-right\">
                        <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i>
                        </button>
                        <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                    </div>
                </div>
                <div class=\"box-body chart-responsive\">
                    <div class=\"chart\" id=\"myChart\" style=\"height: 300px;\"></div>
                </div>
                <!-- /.box-body -->
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <!-- DONUT CHART -->
                    <div class=\"box box-danger\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">Donut Chart</h3>

                            <div class=\"box-tools pull-right\">
                                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i>
                                </button>
                                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                            </div>
                        </div>
                        <div class=\"box-body chart-responsive\">
                            <div class=\"chart\" id=\"sales-chart\" style=\"height: 300px; position: relative;\"></div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <div class=\"col-md-6\">
                    <div class=\"box box-success\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">Bar Chart</h3>

                            <div class=\"box-tools pull-right\">
                                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i>
                                </button>
                                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                            </div>
                        </div>
                        <div class=\"box-body chart-responsive\">
                            <div class=\"chart\" id=\"bar-chart\" style=\"height: 300px;\"></div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
";
    }

    // line 139
    public function block_javascript($context, array $blocks = array())
    {
        // line 140
        echo "    <script>
        \$(document).ready(function () {
            var area = new Morris.Area({
                element: 'myChart',
                resize: true,
                data: [
                    {y: '2011 Q1', item1: 500, item2: 2666},
                    {y: '2011 Q2', item1: 778, item2: 2294},
                    {y: '2011 Q3', item1: 912, item2: 1969},
                    {y: '2011 Q4', item1: 767, item2: 3597},
                    {y: '2012 Q1', item1: 810, item2: 1914},
                    {y: '2012 Q2', item1: 670, item2: 4293},
                    {y: '2012 Q3', item1: 820, item2: 3795},
                    {y: '2012 Q4', item1: 5073, item2: 5967},
                    {y: '2013 Q1', item1: 1687, item2: 4460},
                    {y: '2013 Q2', item1: 432, item2: 5713}
                ],
                xkey: 'y',
                ykeys: ['item1', 'item2'],
                labels: ['Item 1', 'Item 2'],
                lineColors: ['#a0d0e0', '#3c8dbc'],
                hideHover: 'auto'
            });
            var donut = new Morris.Donut({
                element: 'sales-chart',
                resize: true,
                colors: [\"#3c8dbc\", \"#f56954\", \"#00a65a\", \"#CCC\"],
                data: [
                    {label: \"Download Sales\", value: 12},
                    {label: \"In-Store Sales\", value: 30},
                    {label: \"Mail-Order Sales\", value: 20},
                    {label: \"sel3a jdida\", value: 50}
                ],
                hideHover: 'auto'
            });
            //BAR CHART
            var bar = new Morris.Bar({
                element: 'bar-chart',
                resize: true,
                data: [
                    {y: '2006', a: 100, b: 90},
                    {y: '2007', a: 75, b: 65},
                    {y: '2008', a: 50, b: 40},
                    {y: '2009', a: 75, b: 65},
                    {y: '2010', a: 50, b: 40},
                    {y: '2011', a: 75, b: 65},
                    {y: '2012', a: 100, b: 90}
                ],
                barColors: ['#00a65a', '#f56954'],
                xkey: 'y',
                ykeys: ['a', 'b'],
                labels: ['CPU', 'DISK'],
                hideHover: 'auto'
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 140,  169 => 139,  32 => 5,  29 => 4,  11 => 2,);
    }
}
/* */
/* {% extends 'BackOfficeBundle::layout.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <!-- Content Wrapper. Contains page content -->*/
/*     <div class="content-wrapper">*/
/*         <!-- Content Header (Page header) -->*/
/*         <section class="content-header">*/
/*             <h1>*/
/*                 Dashboard*/
/*                 <small>Control panel</small>*/
/*             </h1>*/
/*             <ol class="breadcrumb">*/
/*                 <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>*/
/*                 <li class="active">Dashboard</li>*/
/*             </ol>*/
/*         </section>*/
/*         <!-- Main content -->*/
/*         <section class="content">*/
/*             <!-- Small boxes (Stat box) -->*/
/*             <div class="row">*/
/*                 <div class="col-lg-3 col-xs-6">*/
/*                     <!-- small box -->*/
/*                     <div class="small-box bg-aqua">*/
/*                         <div class="inner">*/
/*                             <h3>150</h3>*/
/* */
/*                             <p>New Orders</p>*/
/*                         </div>*/
/*                         <div class="icon">*/
/*                             <i class="ion ion-bag"></i>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- ./col -->*/
/*                 <div class="col-lg-3 col-xs-6">*/
/*                     <!-- small box -->*/
/*                     <div class="small-box bg-green">*/
/*                         <div class="inner">*/
/*                             <h3>53<sup style="font-size: 20px">%</sup></h3>*/
/* */
/*                             <p>Bounce Rate</p>*/
/*                         </div>*/
/*                         <div class="icon">*/
/*                             <i class="ion ion-stats-bars"></i>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- ./col -->*/
/*                 <div class="col-lg-3 col-xs-6">*/
/*                     <!-- small box -->*/
/*                     <div class="small-box bg-yellow">*/
/*                         <div class="inner">*/
/*                             <h3>44</h3>*/
/* */
/*                             <p>User Registrations</p>*/
/*                         </div>*/
/*                         <div class="icon">*/
/*                             <i class="ion ion-person-add"></i>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- ./col -->*/
/*                 <div class="col-lg-3 col-xs-6">*/
/*                     <!-- small box -->*/
/*                     <div class="small-box bg-red">*/
/*                         <div class="inner">*/
/*                             <h3>65</h3>*/
/* */
/*                             <p>Unique Visitors</p>*/
/*                         </div>*/
/*                         <div class="icon">*/
/*                             <i class="ion ion-pie-graph"></i>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- ./col -->*/
/*             </div>*/
/*             <!-- /.row -->*/
/* */
/*             <div class="box box-primary">*/
/*                 <div class="box-header with-border">*/
/*                     <h3 class="box-title">Area Chart</h3>*/
/* */
/*                     <div class="box-tools pull-right">*/
/*                         <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>*/
/*                         </button>*/
/*                         <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="box-body chart-responsive">*/
/*                     <div class="chart" id="myChart" style="height: 300px;"></div>*/
/*                 </div>*/
/*                 <!-- /.box-body -->*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-md-6">*/
/*                     <!-- DONUT CHART -->*/
/*                     <div class="box box-danger">*/
/*                         <div class="box-header with-border">*/
/*                             <h3 class="box-title">Donut Chart</h3>*/
/* */
/*                             <div class="box-tools pull-right">*/
/*                                 <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>*/
/*                                 </button>*/
/*                                 <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="box-body chart-responsive">*/
/*                             <div class="chart" id="sales-chart" style="height: 300px; position: relative;"></div>*/
/*                         </div>*/
/*                         <!-- /.box-body -->*/
/*                     </div>*/
/*                     <!-- /.box -->*/
/*                 </div>*/
/*                 <div class="col-md-6">*/
/*                     <div class="box box-success">*/
/*                         <div class="box-header with-border">*/
/*                             <h3 class="box-title">Bar Chart</h3>*/
/* */
/*                             <div class="box-tools pull-right">*/
/*                                 <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>*/
/*                                 </button>*/
/*                                 <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="box-body chart-responsive">*/
/*                             <div class="chart" id="bar-chart" style="height: 300px;"></div>*/
/*                         </div>*/
/*                         <!-- /.box-body -->*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </section>*/
/*         <!-- /.content -->*/
/*     </div>*/
/*     <!-- /.content-wrapper -->*/
/* {% endblock %}   */
/* {% block javascript %}*/
/*     <script>*/
/*         $(document).ready(function () {*/
/*             var area = new Morris.Area({*/
/*                 element: 'myChart',*/
/*                 resize: true,*/
/*                 data: [*/
/*                     {y: '2011 Q1', item1: 500, item2: 2666},*/
/*                     {y: '2011 Q2', item1: 778, item2: 2294},*/
/*                     {y: '2011 Q3', item1: 912, item2: 1969},*/
/*                     {y: '2011 Q4', item1: 767, item2: 3597},*/
/*                     {y: '2012 Q1', item1: 810, item2: 1914},*/
/*                     {y: '2012 Q2', item1: 670, item2: 4293},*/
/*                     {y: '2012 Q3', item1: 820, item2: 3795},*/
/*                     {y: '2012 Q4', item1: 5073, item2: 5967},*/
/*                     {y: '2013 Q1', item1: 1687, item2: 4460},*/
/*                     {y: '2013 Q2', item1: 432, item2: 5713}*/
/*                 ],*/
/*                 xkey: 'y',*/
/*                 ykeys: ['item1', 'item2'],*/
/*                 labels: ['Item 1', 'Item 2'],*/
/*                 lineColors: ['#a0d0e0', '#3c8dbc'],*/
/*                 hideHover: 'auto'*/
/*             });*/
/*             var donut = new Morris.Donut({*/
/*                 element: 'sales-chart',*/
/*                 resize: true,*/
/*                 colors: ["#3c8dbc", "#f56954", "#00a65a", "#CCC"],*/
/*                 data: [*/
/*                     {label: "Download Sales", value: 12},*/
/*                     {label: "In-Store Sales", value: 30},*/
/*                     {label: "Mail-Order Sales", value: 20},*/
/*                     {label: "sel3a jdida", value: 50}*/
/*                 ],*/
/*                 hideHover: 'auto'*/
/*             });*/
/*             //BAR CHART*/
/*             var bar = new Morris.Bar({*/
/*                 element: 'bar-chart',*/
/*                 resize: true,*/
/*                 data: [*/
/*                     {y: '2006', a: 100, b: 90},*/
/*                     {y: '2007', a: 75, b: 65},*/
/*                     {y: '2008', a: 50, b: 40},*/
/*                     {y: '2009', a: 75, b: 65},*/
/*                     {y: '2010', a: 50, b: 40},*/
/*                     {y: '2011', a: 75, b: 65},*/
/*                     {y: '2012', a: 100, b: 90}*/
/*                 ],*/
/*                 barColors: ['#00a65a', '#f56954'],*/
/*                 xkey: 'y',*/
/*                 ykeys: ['a', 'b'],*/
/*                 labels: ['CPU', 'DISK'],*/
/*                 hideHover: 'auto'*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}    */
