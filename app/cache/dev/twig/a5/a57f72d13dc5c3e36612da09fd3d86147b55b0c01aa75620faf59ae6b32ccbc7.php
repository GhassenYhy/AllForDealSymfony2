<?php

/* BackOfficeBundle::layout.html.twig */
class __TwigTemplate_0a9212af296aa383a3c5f50c36f67e51eec3734e3be5f4d01d3b48e5598c0c09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <title>AdminLTE 2 | Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <!-- Bootstrap 3.3.6 -->
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backoffice/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">
        <!-- Ionicons -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
        <!-- Theme style -->
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backoffice/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backoffice/dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\">
        <!-- iCheck -->
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backoffice/plugins/iCheck/flat/blue.css"), "html", null, true);
        echo "\">
        <!-- Morris chart -->
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backoffice/plugins/morris/morris.css"), "html", null, true);
        echo "\">
        <!-- jvectormap -->
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backoffice/plugins/jvectormap/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\">
        <!-- Date Picker -->
        <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backoffice/plugins/datepicker/datepicker3.css"), "html", null, true);
        echo "\">
        <!-- Daterange picker -->
        <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backoffice/plugins/daterangepicker/daterangepicker-bs3.css"), "html", null, true);
        echo "\">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backoffice/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backoffice/plugins/pace/pace.min.css"), "html", null, true);
        echo "\">
        
        <!-- HTML5 Shim and Respond.js')}} IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js')}}\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}\"></script>
        <![endif]-->
    </head>
    <body class=\"hold-transition skin-blue sidebar-mini\">
        
        <div class=\"wrapper\">

            <header class=\"main-header\">
                <!-- Logo -->
                <a href=\"index2.html\" class=\"logo\">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class=\"logo-mini\"><b>A</b>FD</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class=\"logo-lg\"><b>AllFor</b>DEAL</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class=\"navbar navbar-static-top\">
                    <!-- Sidebar toggle button-->
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">Toggle navigation</span>
                    </a>

                    <div class=\"navbar-custom-menu\">

                        <ul class=\"nav navbar-nav\">

                            <!-- Notifications: style can be found in dropdown.less -->
                            <li class=\"dropdown notifications-menu\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"fa fa-bell-o\"></i>
                                    <span class=\"label label-warning\">10</span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li class=\"header\">You have 10 notifications</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class=\"menu\">
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"fa fa-users text-aqua\"></i> 5 new members joined today
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"fa fa-warning text-yellow\"></i> Very long description here that may not fit into the
                                                    page and may cause design problems
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"fa fa-users text-red\"></i> 5 new members joined
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"fa fa-shopping-cart text-green\"></i> 25 sales made
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <i class=\"fa fa-user text-red\"></i> You changed your username
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=\"footer\"><a href=\"#\">View all</a></li>
                                </ul>
                            </li>

                            <!-- User Account: style can be found in dropdown.less -->
                            <li class=\"dropdown user user-menu\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <img src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backoffice/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
                                    <span class=\"hidden-xs\">Alexander Pierce</span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <!-- User image -->
                                    <li class=\"user-header\">
                                        <img src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backoffice/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">

                                        <p>
                                            Alexander Pierce - Web Developer
                                            <small>Member since Nov. 2012</small>
                                        </p>
                                    </li>

                                    <!-- Menu Footer-->
                                    <li class=\"user-footer\">
                                        <div class=\"pull-left\">
                                            <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
                                        </div>
                                        <div class=\"pull-right\">
                                            <a href=\"#\" class=\"btn btn-default btn-flat\">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                        </ul>

                    </div>

                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class=\"main-sidebar\">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class=\"sidebar\">
                    <!-- Sidebar user panel --> 
                    <div class=\"user-panel\">
                        <div class=\"pull-left image\">
                            <img src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backoffice/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                        </div>
                        <div class=\"pull-left info\">
                            <p>Alexander Pierce</p>
                            <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action=\"#\" method=\"get\" class=\"sidebar-form\">
                        <div class=\"input-group\">
                            <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
                            <span class=\"input-group-btn\">
                                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul id=\"menu\" class=\"sidebar-menu\">
                        <li class=\"header\">MAIN NAVIGATION</li>
                        <li>
                            <a href=\"";
        // line 172
        echo $this->env->getExtension('routing')->getPath("back_office_homepage");
        echo "\">
                                <i class=\"fa fa-dashboard\"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class=\"treeview\">
                            <a href=\"#\">
                                <i class=\"fa fa-dashboard\"></i> <span>Gestion produits</span> <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu menu-open\" style=\"display: block;\">
                                <li><a href=\"";
        // line 181
        echo $this->env->getExtension('routing')->getPath("gestion_produits_enAttente");
        echo "\"><i class=\"fa fa-circle-o\"></i>Produits en attente</a></li>
                                <li><a href=\"";
        // line 182
        echo $this->env->getExtension('routing')->getPath("gestion_produits");
        echo "\"><i class=\"fa fa-circle-o\"></i>tout les produits</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"";
        // line 186
        echo $this->env->getExtension('routing')->getPath("gestion_services");
        echo "\">
                                <i class=\"fa fa-exchange\"></i> <span>Gestion services</span>
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 191
        echo $this->env->getExtension('routing')->getPath("gestion_admins");
        echo "\">
                                <i class=\"fa fa-user\"></i> <span>Gestion des admins</span>
                            </a>
                        </li>
                        <li class=\"treeview\">
                            <a href=\"#\">
                                <i class=\"fa fa-dashboard\"></i> <span>Gestion produits</span> <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu menu-open\" style=\"display: block;\">
                                <li><a href=\"";
        // line 200
        echo $this->env->getExtension('routing')->getPath("gestion_reclamation_inbox");
        echo "\"><i class=\"fa fa-circle-o\"></i>Inbox</a></li>
                                <li><a href=\"";
        // line 201
        echo $this->env->getExtension('routing')->getPath("gestion_reclamation_compose");
        echo "\"><i class=\"fa fa-circle-o\"></i>Compose</a></li>
                                <li><a href=\"";
        // line 202
        echo $this->env->getExtension('routing')->getPath("gestion_reclamation_voir");
        echo "\"><i class=\"fa fa-circle-o\"></i>Voir reclamations</a></li>
                            </ul>
                        </li>
                    </ul>

                </section>
                <!-- /.sidebar -->
            </aside>





            ";
        // line 215
        $this->displayBlock('content', $context, $blocks);
        // line 216
        echo "    






            <footer class=\"main-footer\">
                <div class=\"pull-right hidden-xs\">
                    <b>Version</b> 2.3.3
                </div>
                <strong>Copyright &copy; 2014-2015 <a href=\"http://almsaeedstudio.com\">Almsaeed Studio</a>.</strong> All rights
                reserved.
            </footer>

            <!-- Control Sidebar -->
            <aside class=\"control-sidebar control-sidebar-dark\">
                <!-- Create the tabs -->
                <ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">
                    <li><a href=\"#control-sidebar-home-tab\" data-toggle=\"tab\"><i class=\"fa fa-home\"></i></a></li>
                    <li><a href=\"#control-sidebar-settings-tab\" data-toggle=\"tab\"><i class=\"fa fa-gears\"></i></a></li>
                </ul>
                <!-- Tab panes -->
                <div class=\"tab-content\">
                    <!-- Home tab content -->
                    <div class=\"tab-pane\" id=\"control-sidebar-home-tab\">
                        <h3 class=\"control-sidebar-heading\">Recent Activity</h3>
                        <ul class=\"control-sidebar-menu\">
                            <li>
                                <a href=\"javascript:void(0)\">
                                    <i class=\"menu-icon fa fa-birthday-cake bg-red\"></i>

                                    <div class=\"menu-info\">
                                        <h4 class=\"control-sidebar-subheading\">Langdon's Birthday</h4>

                                        <p>Will be 23 on April 24th</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href=\"javascript:void(0)\">
                                    <i class=\"menu-icon fa fa-user bg-yellow\"></i>

                                    <div class=\"menu-info\">
                                        <h4 class=\"control-sidebar-subheading\">Frodo Updated His Profile</h4>

                                        <p>New phone +1(800)555-1234</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href=\"javascript:void(0)\">
                                    <i class=\"menu-icon fa fa-envelope-o bg-light-blue\"></i>

                                    <div class=\"menu-info\">
                                        <h4 class=\"control-sidebar-subheading\">Nora Joined Mailing List</h4>

                                        <p>nora@example.com</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href=\"javascript:void(0)\">
                                    <i class=\"menu-icon fa fa-file-code-o bg-green\"></i>

                                    <div class=\"menu-info\">
                                        <h4 class=\"control-sidebar-subheading\">Cron Job 254 Executed</h4>

                                        <p>Execution time 5 seconds</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- /.control-sidebar-menu -->

                        <h3 class=\"control-sidebar-heading\">Tasks Progress</h3>
                        <ul class=\"control-sidebar-menu\">
                            <li>
                                <a href=\"javascript:void(0)\">
                                    <h4 class=\"control-sidebar-subheading\">
                                        Custom Template Design
                                        <span class=\"label label-danger pull-right\">70%</span>
                                    </h4>

                                    <div class=\"progress progress-xxs\">
                                        <div class=\"progress-bar progress-bar-danger\" style=\"width: 70%\"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href=\"javascript:void(0)\">
                                    <h4 class=\"control-sidebar-subheading\">
                                        Update Resume
                                        <span class=\"label label-success pull-right\">95%</span>
                                    </h4>

                                    <div class=\"progress progress-xxs\">
                                        <div class=\"progress-bar progress-bar-success\" style=\"width: 95%\"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href=\"javascript:void(0)\">
                                    <h4 class=\"control-sidebar-subheading\">
                                        Laravel Integration
                                        <span class=\"label label-warning pull-right\">50%</span>
                                    </h4>

                                    <div class=\"progress progress-xxs\">
                                        <div class=\"progress-bar progress-bar-warning\" style=\"width: 50%\"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href=\"javascript:void(0)\">
                                    <h4 class=\"control-sidebar-subheading\">
                                        Back End Framework
                                        <span class=\"label label-primary pull-right\">68%</span>
                                    </h4>

                                    <div class=\"progress progress-xxs\">
                                        <div class=\"progress-bar progress-bar-primary\" style=\"width: 68%\"></div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- /.control-sidebar-menu -->

                    </div>
                    <!-- /.tab-pane -->
                    <!-- Stats tab content -->
                    <div class=\"tab-pane\" id=\"control-sidebar-stats-tab\">Stats Tab Content</div>
                    <!-- /.tab-pane -->
                    <!-- Settings tab content -->
                    <div class=\"tab-pane\" id=\"control-sidebar-settings-tab\">
                        <form method=\"post\">
                            <h3 class=\"control-sidebar-heading\">General Settings</h3>

                            <div class=\"form-group\">
                                <label class=\"control-sidebar-subheading\">
                                    Report panel usage
                                    <input type=\"checkbox\" class=\"pull-right\" checked>
                                </label>

                                <p>
                                    Some information about this general settings option
                                </p>
                            </div>
                            <!-- /.form-group -->

                            <div class=\"form-group\">
                                <label class=\"control-sidebar-subheading\">
                                    Allow mail redirect
                                    <input type=\"checkbox\" class=\"pull-right\" checked>
                                </label>

                                <p>
                                    Other sets of options are available
                                </p>
                            </div>
                            <!-- /.form-group -->

                            <div class=\"form-group\">
                                <label class=\"control-sidebar-subheading\">
                                    Expose author name in posts
                                    <input type=\"checkbox\" class=\"pull-right\" checked>
                                </label>

                                <p>
                                    Allow the user to show his name in blog posts
                                </p>
                            </div>
                            <!-- /.form-group -->

                            <h3 class=\"control-sidebar-heading\">Chat Settings</h3>

                            <div class=\"form-group\">
                                <label class=\"control-sidebar-subheading\">
                                    Show me as online
                                    <input type=\"checkbox\" class=\"pull-right\" checked>
                                </label>
                            </div>
                            <!-- /.form-group -->

                            <div class=\"form-group\">
                                <label class=\"control-sidebar-subheading\">
                                    Turn off notifications
                                    <input type=\"checkbox\" class=\"pull-right\">
                                </label>
                            </div>
                            <!-- /.form-group -->

                            <div class=\"form-group\">
                                <label class=\"control-sidebar-subheading\">
                                    Delete chat history
                                    <a href=\"javascript:void(0)\" class=\"text-red pull-right\"><i class=\"fa fa-trash-o\"></i></a>
                                </label>
                            </div>
                            <!-- /.form-group -->
                        </form>
                    </div>
                    <!-- /.tab-pane -->
                </div>
            </aside>
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class=\"control-sidebar-bg\"></div>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery 2.2.0 -->
        <script src=\"";
        // line 428
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backoffice/plugins/jQuery/jQuery-2.2.0.min.js"), "html", null, true);
        echo "\"></script>

        <!-- jQuery UI 1.11.4 -->
        <script src=\"https://code.jquery.com/ui/1.11.4/jquery-ui.min.js\"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

        <script>
            \$.widget.bridge('uibutton', \$.ui.button);
        </script>
        <script src=\"//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js\"></script>
        
        <script>
            \$(document).ajaxStart(function() { Pace.restart(); });
            \$(document).ready(function () {
                \$(\"ul\").children(\"li\").each(function () {
                    var path = location.href;
                    var href = \$(this).find(\"a\").attr(\"href\");
                    if (path.indexOf(href) > -1) {
                        \$(this).parents(\"li\").addClass(\"active\");
                        \$(this).addClass('active');
                    }
                });
            });
        </script>

        <!-- Bootstrap 3.3.6 -->
        <script src=\"";
        // line 454
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backoffice/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src=\"";
        // line 456
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backoffice/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Morris.js charts -->
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js\"></script> 
        <script src=\"";
        // line 459
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backoffice/plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
        
        <script src=\"";
        // line 461
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backoffice/plugins/pace/pace.min.js"), "html", null, true);
        echo "\"></script>
        
        ";
        // line 463
        $this->displayBlock('javascript', $context, $blocks);
        // line 466
        echo "        
        <!-- Sparkline -->
        <script src=\"";
        // line 468
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backoffice/plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
        
        <!-- jvectormap -->
        <script src=\"";
        // line 471
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backoffice/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 472
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backoffice/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
        <!-- jQuery Knob Chart -->
        <script src=\"";
        // line 474
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backoffice/plugins/knob/jquery.knob.js"), "html", null, true);
        echo "\"></script>
        <!-- daterangepicker -->
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js\"></script>
        <script src=\"";
        // line 477
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backoffice/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
        <!-- datepicker -->
        <script src=\"";
        // line 479
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backoffice/plugins/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
        
        <!-- Slimscroll -->
        <script src=\"";
        // line 482
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backoffice/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
        <!-- FastClick -->
        <script src=\"";
        // line 484
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backoffice/plugins/fastclick/fastclick.js"), "html", null, true);
        echo "\"></script>
        <!-- AdminLTE App -->
        <script src=\"";
        // line 486
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backoffice/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>
        
    </body>
</html>
";
    }

    // line 215
    public function block_content($context, array $blocks = array())
    {
        // line 216
        echo "            ";
    }

    // line 463
    public function block_javascript($context, array $blocks = array())
    {
        // line 464
        echo "            
        ";
    }

    public function getTemplateName()
    {
        return "BackOfficeBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  633 => 464,  630 => 463,  626 => 216,  623 => 215,  614 => 486,  609 => 484,  604 => 482,  598 => 479,  593 => 477,  587 => 474,  582 => 472,  578 => 471,  572 => 468,  568 => 466,  566 => 463,  561 => 461,  556 => 459,  550 => 456,  545 => 454,  516 => 428,  302 => 216,  300 => 215,  284 => 202,  280 => 201,  276 => 200,  264 => 191,  256 => 186,  249 => 182,  245 => 181,  233 => 172,  208 => 150,  172 => 117,  163 => 111,  82 => 33,  77 => 31,  72 => 29,  67 => 27,  62 => 25,  57 => 23,  52 => 21,  47 => 19,  41 => 16,  32 => 10,  21 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <title>AdminLTE 2 | Dashboard</title>*/
/*         <!-- Tell the browser to be responsive to screen width -->*/
/*         <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">*/
/*         <!-- Bootstrap 3.3.6 -->*/
/*         <link rel="stylesheet" href="{{ asset('bundles/backoffice/bootstrap/css/bootstrap.min.css')}}">*/
/*         <!-- Font Awesome -->*/
/*         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">*/
/*         <!-- Ionicons -->*/
/*         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">*/
/*         <!-- Theme style -->*/
/*         <link rel="stylesheet" href="{{ asset('bundles/backoffice/dist/css/AdminLTE.min.css')}}">*/
/*         <!-- AdminLTE Skins. Choose a skin from the css/skins*/
/*              folder instead of downloading all of them to reduce the load. -->*/
/*         <link rel="stylesheet" href="{{ asset('bundles/backoffice/dist/css/skins/_all-skins.min.css')}}">*/
/*         <!-- iCheck -->*/
/*         <link rel="stylesheet" href="{{ asset('bundles/backoffice/plugins/iCheck/flat/blue.css')}}">*/
/*         <!-- Morris chart -->*/
/*         <link rel="stylesheet" href="{{ asset('bundles/backoffice/plugins/morris/morris.css')}}">*/
/*         <!-- jvectormap -->*/
/*         <link rel="stylesheet" href="{{ asset('bundles/backoffice/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">*/
/*         <!-- Date Picker -->*/
/*         <link rel="stylesheet" href="{{ asset('bundles/backoffice/plugins/datepicker/datepicker3.css')}}">*/
/*         <!-- Daterange picker -->*/
/*         <link rel="stylesheet" href="{{ asset('bundles/backoffice/plugins/daterangepicker/daterangepicker-bs3.css')}}">*/
/*         <!-- bootstrap wysihtml5 - text editor -->*/
/*         <link rel="stylesheet" href="{{ asset('bundles/backoffice/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">*/
/*         <link rel="stylesheet" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">*/
/*         <link rel="stylesheet" href="{{ asset('bundles/backoffice/plugins/pace/pace.min.css') }}">*/
/*         */
/*         <!-- HTML5 Shim and Respond.js')}} IE8 support of HTML5 elements and media queries -->*/
/*         <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*         <!--[if lt IE 9]>*/
/*         <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js')}}"></script>*/
/*         <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>*/
/*         <![endif]-->*/
/*     </head>*/
/*     <body class="hold-transition skin-blue sidebar-mini">*/
/*         */
/*         <div class="wrapper">*/
/* */
/*             <header class="main-header">*/
/*                 <!-- Logo -->*/
/*                 <a href="index2.html" class="logo">*/
/*                     <!-- mini logo for sidebar mini 50x50 pixels -->*/
/*                     <span class="logo-mini"><b>A</b>FD</span>*/
/*                     <!-- logo for regular state and mobile devices -->*/
/*                     <span class="logo-lg"><b>AllFor</b>DEAL</span>*/
/*                 </a>*/
/*                 <!-- Header Navbar: style can be found in header.less -->*/
/*                 <nav class="navbar navbar-static-top">*/
/*                     <!-- Sidebar toggle button-->*/
/*                     <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">*/
/*                         <span class="sr-only">Toggle navigation</span>*/
/*                     </a>*/
/* */
/*                     <div class="navbar-custom-menu">*/
/* */
/*                         <ul class="nav navbar-nav">*/
/* */
/*                             <!-- Notifications: style can be found in dropdown.less -->*/
/*                             <li class="dropdown notifications-menu">*/
/*                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                                     <i class="fa fa-bell-o"></i>*/
/*                                     <span class="label label-warning">10</span>*/
/*                                 </a>*/
/*                                 <ul class="dropdown-menu">*/
/*                                     <li class="header">You have 10 notifications</li>*/
/*                                     <li>*/
/*                                         <!-- inner menu: contains the actual data -->*/
/*                                         <ul class="menu">*/
/*                                             <li>*/
/*                                                 <a href="#">*/
/*                                                     <i class="fa fa-users text-aqua"></i> 5 new members joined today*/
/*                                                 </a>*/
/*                                             </li>*/
/*                                             <li>*/
/*                                                 <a href="#">*/
/*                                                     <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the*/
/*                                                     page and may cause design problems*/
/*                                                 </a>*/
/*                                             </li>*/
/*                                             <li>*/
/*                                                 <a href="#">*/
/*                                                     <i class="fa fa-users text-red"></i> 5 new members joined*/
/*                                                 </a>*/
/*                                             </li>*/
/*                                             <li>*/
/*                                                 <a href="#">*/
/*                                                     <i class="fa fa-shopping-cart text-green"></i> 25 sales made*/
/*                                                 </a>*/
/*                                             </li>*/
/*                                             <li>*/
/*                                                 <a href="#">*/
/*                                                     <i class="fa fa-user text-red"></i> You changed your username*/
/*                                                 </a>*/
/*                                             </li>*/
/*                                         </ul>*/
/*                                     </li>*/
/*                                     <li class="footer"><a href="#">View all</a></li>*/
/*                                 </ul>*/
/*                             </li>*/
/* */
/*                             <!-- User Account: style can be found in dropdown.less -->*/
/*                             <li class="dropdown user user-menu">*/
/*                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                                     <img src="{{ asset('bundles/backoffice/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">*/
/*                                     <span class="hidden-xs">Alexander Pierce</span>*/
/*                                 </a>*/
/*                                 <ul class="dropdown-menu">*/
/*                                     <!-- User image -->*/
/*                                     <li class="user-header">*/
/*                                         <img src="{{ asset('bundles/backoffice/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">*/
/* */
/*                                         <p>*/
/*                                             Alexander Pierce - Web Developer*/
/*                                             <small>Member since Nov. 2012</small>*/
/*                                         </p>*/
/*                                     </li>*/
/* */
/*                                     <!-- Menu Footer-->*/
/*                                     <li class="user-footer">*/
/*                                         <div class="pull-left">*/
/*                                             <a href="#" class="btn btn-default btn-flat">Profile</a>*/
/*                                         </div>*/
/*                                         <div class="pull-right">*/
/*                                             <a href="#" class="btn btn-default btn-flat">Sign out</a>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </li>*/
/* */
/*                         </ul>*/
/* */
/*                     </div>*/
/* */
/*                 </nav>*/
/*             </header>*/
/*             <!-- Left side column. contains the logo and sidebar -->*/
/*             <aside class="main-sidebar">*/
/*                 <!-- sidebar: style can be found in sidebar.less -->*/
/*                 <section class="sidebar">*/
/*                     <!-- Sidebar user panel --> */
/*                     <div class="user-panel">*/
/*                         <div class="pull-left image">*/
/*                             <img src="{{ asset('bundles/backoffice/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">*/
/*                         </div>*/
/*                         <div class="pull-left info">*/
/*                             <p>Alexander Pierce</p>*/
/*                             <a href="#"><i class="fa fa-circle text-success"></i> Online</a>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- search form -->*/
/*                     <form action="#" method="get" class="sidebar-form">*/
/*                         <div class="input-group">*/
/*                             <input type="text" name="q" class="form-control" placeholder="Search...">*/
/*                             <span class="input-group-btn">*/
/*                                 <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>*/
/*                                 </button>*/
/*                             </span>*/
/*                         </div>*/
/*                     </form>*/
/*                     <!-- /.search form -->*/
/*                     <!-- sidebar menu: : style can be found in sidebar.less -->*/
/*                     <ul id="menu" class="sidebar-menu">*/
/*                         <li class="header">MAIN NAVIGATION</li>*/
/*                         <li>*/
/*                             <a href="{{path('back_office_homepage')}}">*/
/*                                 <i class="fa fa-dashboard"></i> <span>Dashboard</span>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li class="treeview">*/
/*                             <a href="#">*/
/*                                 <i class="fa fa-dashboard"></i> <span>Gestion produits</span> <i class="fa fa-angle-left pull-right"></i>*/
/*                             </a>*/
/*                             <ul class="treeview-menu menu-open" style="display: block;">*/
/*                                 <li><a href="{{path('gestion_produits_enAttente')}}"><i class="fa fa-circle-o"></i>Produits en attente</a></li>*/
/*                                 <li><a href="{{path('gestion_produits')}}"><i class="fa fa-circle-o"></i>tout les produits</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{path('gestion_services')}}">*/
/*                                 <i class="fa fa-exchange"></i> <span>Gestion services</span>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{path('gestion_admins')}}">*/
/*                                 <i class="fa fa-user"></i> <span>Gestion des admins</span>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li class="treeview">*/
/*                             <a href="#">*/
/*                                 <i class="fa fa-dashboard"></i> <span>Gestion produits</span> <i class="fa fa-angle-left pull-right"></i>*/
/*                             </a>*/
/*                             <ul class="treeview-menu menu-open" style="display: block;">*/
/*                                 <li><a href="{{path('gestion_reclamation_inbox')}}"><i class="fa fa-circle-o"></i>Inbox</a></li>*/
/*                                 <li><a href="{{path('gestion_reclamation_compose')}}"><i class="fa fa-circle-o"></i>Compose</a></li>*/
/*                                 <li><a href="{{path('gestion_reclamation_voir')}}"><i class="fa fa-circle-o"></i>Voir reclamations</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                     </ul>*/
/* */
/*                 </section>*/
/*                 <!-- /.sidebar -->*/
/*             </aside>*/
/* */
/* */
/* */
/* */
/* */
/*             {% block content %}*/
/*             {% endblock %}    */
/* */
/* */
/* */
/* */
/* */
/* */
/*             <footer class="main-footer">*/
/*                 <div class="pull-right hidden-xs">*/
/*                     <b>Version</b> 2.3.3*/
/*                 </div>*/
/*                 <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights*/
/*                 reserved.*/
/*             </footer>*/
/* */
/*             <!-- Control Sidebar -->*/
/*             <aside class="control-sidebar control-sidebar-dark">*/
/*                 <!-- Create the tabs -->*/
/*                 <ul class="nav nav-tabs nav-justified control-sidebar-tabs">*/
/*                     <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>*/
/*                     <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>*/
/*                 </ul>*/
/*                 <!-- Tab panes -->*/
/*                 <div class="tab-content">*/
/*                     <!-- Home tab content -->*/
/*                     <div class="tab-pane" id="control-sidebar-home-tab">*/
/*                         <h3 class="control-sidebar-heading">Recent Activity</h3>*/
/*                         <ul class="control-sidebar-menu">*/
/*                             <li>*/
/*                                 <a href="javascript:void(0)">*/
/*                                     <i class="menu-icon fa fa-birthday-cake bg-red"></i>*/
/* */
/*                                     <div class="menu-info">*/
/*                                         <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>*/
/* */
/*                                         <p>Will be 23 on April 24th</p>*/
/*                                     </div>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="javascript:void(0)">*/
/*                                     <i class="menu-icon fa fa-user bg-yellow"></i>*/
/* */
/*                                     <div class="menu-info">*/
/*                                         <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>*/
/* */
/*                                         <p>New phone +1(800)555-1234</p>*/
/*                                     </div>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="javascript:void(0)">*/
/*                                     <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>*/
/* */
/*                                     <div class="menu-info">*/
/*                                         <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>*/
/* */
/*                                         <p>nora@example.com</p>*/
/*                                     </div>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="javascript:void(0)">*/
/*                                     <i class="menu-icon fa fa-file-code-o bg-green"></i>*/
/* */
/*                                     <div class="menu-info">*/
/*                                         <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>*/
/* */
/*                                         <p>Execution time 5 seconds</p>*/
/*                                     </div>*/
/*                                 </a>*/
/*                             </li>*/
/*                         </ul>*/
/*                         <!-- /.control-sidebar-menu -->*/
/* */
/*                         <h3 class="control-sidebar-heading">Tasks Progress</h3>*/
/*                         <ul class="control-sidebar-menu">*/
/*                             <li>*/
/*                                 <a href="javascript:void(0)">*/
/*                                     <h4 class="control-sidebar-subheading">*/
/*                                         Custom Template Design*/
/*                                         <span class="label label-danger pull-right">70%</span>*/
/*                                     </h4>*/
/* */
/*                                     <div class="progress progress-xxs">*/
/*                                         <div class="progress-bar progress-bar-danger" style="width: 70%"></div>*/
/*                                     </div>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="javascript:void(0)">*/
/*                                     <h4 class="control-sidebar-subheading">*/
/*                                         Update Resume*/
/*                                         <span class="label label-success pull-right">95%</span>*/
/*                                     </h4>*/
/* */
/*                                     <div class="progress progress-xxs">*/
/*                                         <div class="progress-bar progress-bar-success" style="width: 95%"></div>*/
/*                                     </div>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="javascript:void(0)">*/
/*                                     <h4 class="control-sidebar-subheading">*/
/*                                         Laravel Integration*/
/*                                         <span class="label label-warning pull-right">50%</span>*/
/*                                     </h4>*/
/* */
/*                                     <div class="progress progress-xxs">*/
/*                                         <div class="progress-bar progress-bar-warning" style="width: 50%"></div>*/
/*                                     </div>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="javascript:void(0)">*/
/*                                     <h4 class="control-sidebar-subheading">*/
/*                                         Back End Framework*/
/*                                         <span class="label label-primary pull-right">68%</span>*/
/*                                     </h4>*/
/* */
/*                                     <div class="progress progress-xxs">*/
/*                                         <div class="progress-bar progress-bar-primary" style="width: 68%"></div>*/
/*                                     </div>*/
/*                                 </a>*/
/*                             </li>*/
/*                         </ul>*/
/*                         <!-- /.control-sidebar-menu -->*/
/* */
/*                     </div>*/
/*                     <!-- /.tab-pane -->*/
/*                     <!-- Stats tab content -->*/
/*                     <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>*/
/*                     <!-- /.tab-pane -->*/
/*                     <!-- Settings tab content -->*/
/*                     <div class="tab-pane" id="control-sidebar-settings-tab">*/
/*                         <form method="post">*/
/*                             <h3 class="control-sidebar-heading">General Settings</h3>*/
/* */
/*                             <div class="form-group">*/
/*                                 <label class="control-sidebar-subheading">*/
/*                                     Report panel usage*/
/*                                     <input type="checkbox" class="pull-right" checked>*/
/*                                 </label>*/
/* */
/*                                 <p>*/
/*                                     Some information about this general settings option*/
/*                                 </p>*/
/*                             </div>*/
/*                             <!-- /.form-group -->*/
/* */
/*                             <div class="form-group">*/
/*                                 <label class="control-sidebar-subheading">*/
/*                                     Allow mail redirect*/
/*                                     <input type="checkbox" class="pull-right" checked>*/
/*                                 </label>*/
/* */
/*                                 <p>*/
/*                                     Other sets of options are available*/
/*                                 </p>*/
/*                             </div>*/
/*                             <!-- /.form-group -->*/
/* */
/*                             <div class="form-group">*/
/*                                 <label class="control-sidebar-subheading">*/
/*                                     Expose author name in posts*/
/*                                     <input type="checkbox" class="pull-right" checked>*/
/*                                 </label>*/
/* */
/*                                 <p>*/
/*                                     Allow the user to show his name in blog posts*/
/*                                 </p>*/
/*                             </div>*/
/*                             <!-- /.form-group -->*/
/* */
/*                             <h3 class="control-sidebar-heading">Chat Settings</h3>*/
/* */
/*                             <div class="form-group">*/
/*                                 <label class="control-sidebar-subheading">*/
/*                                     Show me as online*/
/*                                     <input type="checkbox" class="pull-right" checked>*/
/*                                 </label>*/
/*                             </div>*/
/*                             <!-- /.form-group -->*/
/* */
/*                             <div class="form-group">*/
/*                                 <label class="control-sidebar-subheading">*/
/*                                     Turn off notifications*/
/*                                     <input type="checkbox" class="pull-right">*/
/*                                 </label>*/
/*                             </div>*/
/*                             <!-- /.form-group -->*/
/* */
/*                             <div class="form-group">*/
/*                                 <label class="control-sidebar-subheading">*/
/*                                     Delete chat history*/
/*                                     <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>*/
/*                                 </label>*/
/*                             </div>*/
/*                             <!-- /.form-group -->*/
/*                         </form>*/
/*                     </div>*/
/*                     <!-- /.tab-pane -->*/
/*                 </div>*/
/*             </aside>*/
/*             <!-- /.control-sidebar -->*/
/*             <!-- Add the sidebar's background. This div must be placed*/
/*                  immediately after the control sidebar -->*/
/*             <div class="control-sidebar-bg"></div>*/
/*         </div>*/
/*         <!-- ./wrapper -->*/
/* */
/*         <!-- jQuery 2.2.0 -->*/
/*         <script src="{{ asset('bundles/backoffice/plugins/jQuery/jQuery-2.2.0.min.js')}}"></script>*/
/* */
/*         <!-- jQuery UI 1.11.4 -->*/
/*         <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>*/
/*         <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->*/
/* */
/*         <script>*/
/*             $.widget.bridge('uibutton', $.ui.button);*/
/*         </script>*/
/*         <script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>*/
/*         */
/*         <script>*/
/*             $(document).ajaxStart(function() { Pace.restart(); });*/
/*             $(document).ready(function () {*/
/*                 $("ul").children("li").each(function () {*/
/*                     var path = location.href;*/
/*                     var href = $(this).find("a").attr("href");*/
/*                     if (path.indexOf(href) > -1) {*/
/*                         $(this).parents("li").addClass("active");*/
/*                         $(this).addClass('active');*/
/*                     }*/
/*                 });*/
/*             });*/
/*         </script>*/
/* */
/*         <!-- Bootstrap 3.3.6 -->*/
/*         <script src="{{ asset('bundles/backoffice/bootstrap/js/bootstrap.min.js')}}"></script>*/
/*         <!-- Bootstrap WYSIHTML5 -->*/
/*         <script src="{{ asset('bundles/backoffice/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>*/
/*         <!-- Morris.js charts -->*/
/*         <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script> */
/*         <script src="{{ asset('bundles/backoffice/plugins/morris/morris.min.js')}}"></script>*/
/*         */
/*         <script src="{{ asset('bundles/backoffice/plugins/pace/pace.min.js') }}"></script>*/
/*         */
/*         {% block javascript %}*/
/*             */
/*         {% endblock %}*/
/*         */
/*         <!-- Sparkline -->*/
/*         <script src="{{ asset('bundles/backoffice/plugins/sparkline/jquery.sparkline.min.js')}}"></script>*/
/*         */
/*         <!-- jvectormap -->*/
/*         <script src="{{ asset('bundles/backoffice/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>*/
/*         <script src="{{ asset('bundles/backoffice/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>*/
/*         <!-- jQuery Knob Chart -->*/
/*         <script src="{{ asset('bundles/backoffice/plugins/knob/jquery.knob.js')}}"></script>*/
/*         <!-- daterangepicker -->*/
/*         <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>*/
/*         <script src="{{ asset('bundles/backoffice/plugins/daterangepicker/daterangepicker.js')}}"></script>*/
/*         <!-- datepicker -->*/
/*         <script src="{{ asset('bundles/backoffice/plugins/datepicker/bootstrap-datepicker.js')}}"></script>*/
/*         */
/*         <!-- Slimscroll -->*/
/*         <script src="{{ asset('bundles/backoffice/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>*/
/*         <!-- FastClick -->*/
/*         <script src="{{ asset('bundles/backoffice/plugins/fastclick/fastclick.js')}}"></script>*/
/*         <!-- AdminLTE App -->*/
/*         <script src="{{ asset('bundles/backoffice/dist/js/app.min.js')}}"></script>*/
/*         */
/*     </body>*/
/* </html>*/
/* */
