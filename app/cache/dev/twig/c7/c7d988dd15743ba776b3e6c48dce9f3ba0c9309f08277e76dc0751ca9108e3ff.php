<?php

/* BackOfficeBundle:Default:gestionAdmins.html.twig */
class __TwigTemplate_f0c972df23c6a27d5ef429810d613ce69a9620d7f08a9e1fb539db74d531c539 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle::layout.html.twig", "BackOfficeBundle:Default:gestionAdmins.html.twig", 1);
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
                Gestion des Admins
                ";
        // line 10
        echo "            </h1>
            <button id=\"add\" class=\"btn btn-lg btn-success\"  data-toggle=\"modal\" data-target=\"#myModal2\"><i class=\"fa fa-user-plus\"></i> Ajouter</button>
            <ol class=\"breadcrumb\">

                <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
                <li class=\"active\">Gestion admins</li>
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
                                    <th>id</th>
                                    <th>Login</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>id</th>
                                    <th>Login</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["admins"]) ? $context["admins"] : $this->getContext($context, "admins")));
        foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
            // line 44
            echo "                                    <tr class=\"table-row\">

                                        <td class=\"id-admin\">";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "id", array()), "html", null, true);
            echo "</td>
                                        <td class=\"login-admin\">";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "login", array()), "html", null, true);
            echo "</td>
                                        <td class=\"nom-admin\">";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "nom", array()), "html", null, true);
            echo "</td>
                                        <td class=\"prenom-admin\">";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "prenom", array()), "html", null, true);
            echo "</td>
                                        <td><form method=\"post\" action=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gestion_admin_supp", array("id" => $this->getAttribute($context["admin"], "id", array()))), "html", null, true);
            echo "\">
                                                <div class=\"btn-group\">
                                                    <div class=\"btn-group\">
                                                        <button type=\"button\" class=\"btn btn-warning action\" data-toggle=\"modal\" data-target=\"#myModal\">Modifier</button>
                                                        <button type=\"button\" class=\"btn btn-warning dropdown-toggle change-color\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                            <span class=\"caret\"></span>
                                                            <span class=\"sr-only\">Toggle Dropdown</span>
                                                        </button>
                                                        <ul class=\"dropdown-menu action-menu\" role=\"menu\">
                                                            <li><a href=\"#\">Modifier</a></li>
                                                            <li><a href=\"#\">Supprimer</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                            </tbody>
                        </table>    
                    </div>
                    <!-- /.box -->
                </div>
                <div id =\"myModal\" class=\"modal fade\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">×</span></button>
                                <h4 class=\"modal-title\">Default Modal</h4>
                            </div>
                            <form role=\"form\" method=\"POST\" id=\"myForm\" action=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("gestion_admin_modif");
        echo "\">
                                <div class=\"modal-body\">

                                    <div class=\"box-body\">
                                        <div class=\"form-group\"  >
                                            <label for=\"exampleInputEmail1\">Login</label>
                                            <input type=\"text\" readonly name=\"id\" hidden>
                                            <input  type=\"text\" readonly name=\"login\" class=\"form-control\"  placeholder=\"Entrer login\">
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"exampleInputPassword1\">Mot de passe</label>
                                            <input type=\"password\" name=\"mdp\" class=\"form-control\"  placeholder=\"Entrer Mot de passe\">
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"exampleInputEmail1\">Nom</label>
                                            <input type=\"text\" name=\"nom\" class=\"form-control\"  placeholder=\"Entrer Nom\">
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"exampleInputEmail1\">Prenom</label>
                                            <input type=\"text\" name=\"prenom\" class=\"form-control\"  placeholder=\"Entrer Prenom\">
                                        </div>
                                    </div>
                                    <!-- /.box-body -->



                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-default pull-left\" data-dismiss=\"modal\">Fermer</button>
                                    <button type=\"submit\" class=\"btn btn-warning\">Modifier</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div> 
                <div id =\"myModal2\" class=\"modal fade\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">×</span></button>
                                <h4 class=\"modal-title\">Ajouter Admin</h4>
                            </div>
                            <form role=\"form\" method=\"POST\" id=\"myForm2\" action=\"";
        // line 126
        echo $this->env->getExtension('routing')->getPath("gestion_admin_ajout");
        echo "\">
                                <div class=\"modal-body\">

                                    <div class=\"box-body\">
                                        <div class=\"form-group\"  >
                                            <label for=\"exampleInputEmail1\">Login <i id=\"error\" style=\"color:red\" hidden>Login existant</i></label>
                                            <input id=\"log\" type=\"text\"  name=\"login\" class=\"form-control\"  placeholder=\"Entrer login\" required>
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"exampleInputPassword1\">Mot de passe</label>
                                            <input type=\"password\" name=\"mdp\" class=\"form-control\"  placeholder=\"Entrer Mot de passe\" required>
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"exampleInputEmail1\">Nom</label>
                                            <input type=\"text\" name=\"nom\" class=\"form-control\"  placeholder=\"Entrer Nom\" required>
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"exampleInputEmail1\">Prenom</label>
                                            <input type=\"text\" name=\"prenom\" class=\"form-control\"  placeholder=\"Entrer Prenom\" required>
                                        </div>
                                    </div>
                                    <!-- /.box-body -->



                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-default pull-left\" data-dismiss=\"modal\">Fermer</button>
                                    <button id=\"ajout\" type=\"button\" class=\"btn btn-warning\">Ajouter</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>                
            </div>

        </section>
        <!-- /.content -->
    </div>

    <!-- /.content-wrapper -->
";
    }

    // line 170
    public function block_javascript($context, array $blocks = array())
    {
        // line 171
        echo "    <script>
        \$(document).ajaxStart(function() { 
            Pace.restart(); }); 
        \$(document).ready(function () {
            
            \$('.action-menu').find('a').click(function () {
                var text = \$(this).text();
                var css1;
                var css2;
                var type;
                var data;
                if (text === 'Modifier') {
                    css1 = 'btn btn-warning action';
                    css2 = 'btn btn-warning dropdown-toggle change-color';
                    type = 'button';
                    data = 'modal';
                }
                else {
                    css1 = 'btn btn-danger action';
                    css2 = 'btn btn-danger dropdown-toggle change-color';
                    type = 'submit';
                    data = '';
                }
                \$(this).parent().parent().siblings('.action').text(text).attr('class', css1).attr('type', type).attr('data-toggle', data);

                \$(this).parent().parent().siblings('.change-color').attr('class', css2);
            });
            \$('#myTable').DataTable();
            \$('.action').click(function () {
                var id = \$(this).parent().parent().parent().parent().siblings('.id-admin').text();
                var login = \$(this).parent().parent().parent().parent().siblings('.login-admin').text();
                var nom = \$(this).parent().parent().parent().parent().siblings('.nom-admin').text();
                var prenom = \$(this).parent().parent().parent().parent().siblings('.prenom-admin').text();

                \$(\"input[name='id']\").val(id);
                \$(\"input[name='login']\").val(login);
                \$(\"input[name='nom']\").val(nom);
                \$(\"input[name='prenom']\").val(prenom);
            });
            \$(\"#add\").click(function () {
                \$(\"input[name='id']\").val('');
                \$(\"input[name='login']\").val('');
                \$(\"input[name='nom']\").val('');
                \$(\"input[name='prenom']\").val('');
            });
            var verif = false;
            \$(\"#log\").keyup(function () {
                \$.ajax({type : \"POST\" , url: \"";
        // line 218
        echo $this->env->getExtension('routing')->getPath("ajax");
        echo "\", data:{ login : \$(this).val() }, success: function () {
                        \$(\"#log\").css(\"border-color\",\"red\");
                        \$(\"#error\").show();
                        verif = true;
                    }, error: function () {
                        \$(\"#log\").css(\"border-color\",\"#d2d6de\");
                        \$(\"#error\").hide();
                        verif = false;
                    }});
            });
            \$(\"#ajout\").click(function(){
                if (verif === false)
                    \$(\"#myForm2\").submit();
                
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Default:gestionAdmins.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 218,  237 => 171,  234 => 170,  186 => 126,  138 => 81,  123 => 68,  99 => 50,  95 => 49,  91 => 48,  87 => 47,  83 => 46,  79 => 44,  75 => 43,  40 => 10,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'BackOfficeBundle::layout.html.twig' %}*/
/* {% block content %}*/
/*     <!-- Content Wrapper. Contains page content -->*/
/*     <div class="content-wrapper">*/
/*         <!-- Content Header (Page header) -->*/
/*         <section class="content-header">*/
/*             <h1>*/
/*                 Gestion des Admins*/
/*                 {#<small>tout les services</small>#}*/
/*             </h1>*/
/*             <button id="add" class="btn btn-lg btn-success"  data-toggle="modal" data-target="#myModal2"><i class="fa fa-user-plus"></i> Ajouter</button>*/
/*             <ol class="breadcrumb">*/
/* */
/*                 <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>*/
/*                 <li class="active">Gestion admins</li>*/
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
/*                                     <th>id</th>*/
/*                                     <th>Login</th>*/
/*                                     <th>Nom</th>*/
/*                                     <th>Prenom</th>*/
/*                                     <th>Action</th>*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tfoot>*/
/*                                 <tr>*/
/*                                     <th>id</th>*/
/*                                     <th>Login</th>*/
/*                                     <th>Nom</th>*/
/*                                     <th>Prenom</th>*/
/*                                     <th>Action</th>*/
/*                                 </tr>*/
/*                             </tfoot>*/
/*                             <tbody>*/
/*                                 {% for admin in admins %}*/
/*                                     <tr class="table-row">*/
/* */
/*                                         <td class="id-admin">{{ admin.id }}</td>*/
/*                                         <td class="login-admin">{{ admin.login }}</td>*/
/*                                         <td class="nom-admin">{{admin.nom}}</td>*/
/*                                         <td class="prenom-admin">{{admin.prenom}}</td>*/
/*                                         <td><form method="post" action="{{ path('gestion_admin_supp',{'id':admin.id})}}">*/
/*                                                 <div class="btn-group">*/
/*                                                     <div class="btn-group">*/
/*                                                         <button type="button" class="btn btn-warning action" data-toggle="modal" data-target="#myModal">Modifier</button>*/
/*                                                         <button type="button" class="btn btn-warning dropdown-toggle change-color" data-toggle="dropdown" aria-expanded="false">*/
/*                                                             <span class="caret"></span>*/
/*                                                             <span class="sr-only">Toggle Dropdown</span>*/
/*                                                         </button>*/
/*                                                         <ul class="dropdown-menu action-menu" role="menu">*/
/*                                                             <li><a href="#">Modifier</a></li>*/
/*                                                             <li><a href="#">Supprimer</a></li>*/
/*                                                         </ul>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </form>*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                 {% endfor %}*/
/*                             </tbody>*/
/*                         </table>    */
/*                     </div>*/
/*                     <!-- /.box -->*/
/*                 </div>*/
/*                 <div id ="myModal" class="modal fade">*/
/*                     <div class="modal-dialog">*/
/*                         <div class="modal-content">*/
/*                             <div class="modal-header">*/
/*                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">*/
/*                                     <span aria-hidden="true">×</span></button>*/
/*                                 <h4 class="modal-title">Default Modal</h4>*/
/*                             </div>*/
/*                             <form role="form" method="POST" id="myForm" action="{{path('gestion_admin_modif')}}">*/
/*                                 <div class="modal-body">*/
/* */
/*                                     <div class="box-body">*/
/*                                         <div class="form-group"  >*/
/*                                             <label for="exampleInputEmail1">Login</label>*/
/*                                             <input type="text" readonly name="id" hidden>*/
/*                                             <input  type="text" readonly name="login" class="form-control"  placeholder="Entrer login">*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label for="exampleInputPassword1">Mot de passe</label>*/
/*                                             <input type="password" name="mdp" class="form-control"  placeholder="Entrer Mot de passe">*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label for="exampleInputEmail1">Nom</label>*/
/*                                             <input type="text" name="nom" class="form-control"  placeholder="Entrer Nom">*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label for="exampleInputEmail1">Prenom</label>*/
/*                                             <input type="text" name="prenom" class="form-control"  placeholder="Entrer Prenom">*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <!-- /.box-body -->*/
/* */
/* */
/* */
/*                                 </div>*/
/*                                 <div class="modal-footer">*/
/*                                     <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Fermer</button>*/
/*                                     <button type="submit" class="btn btn-warning">Modifier</button>*/
/*                                 </div>*/
/*                             </form>*/
/*                         </div>*/
/*                         <!-- /.modal-content -->*/
/*                     </div>*/
/*                     <!-- /.modal-dialog -->*/
/*                 </div> */
/*                 <div id ="myModal2" class="modal fade">*/
/*                     <div class="modal-dialog">*/
/*                         <div class="modal-content">*/
/*                             <div class="modal-header">*/
/*                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">*/
/*                                     <span aria-hidden="true">×</span></button>*/
/*                                 <h4 class="modal-title">Ajouter Admin</h4>*/
/*                             </div>*/
/*                             <form role="form" method="POST" id="myForm2" action="{{path('gestion_admin_ajout')}}">*/
/*                                 <div class="modal-body">*/
/* */
/*                                     <div class="box-body">*/
/*                                         <div class="form-group"  >*/
/*                                             <label for="exampleInputEmail1">Login <i id="error" style="color:red" hidden>Login existant</i></label>*/
/*                                             <input id="log" type="text"  name="login" class="form-control"  placeholder="Entrer login" required>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label for="exampleInputPassword1">Mot de passe</label>*/
/*                                             <input type="password" name="mdp" class="form-control"  placeholder="Entrer Mot de passe" required>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label for="exampleInputEmail1">Nom</label>*/
/*                                             <input type="text" name="nom" class="form-control"  placeholder="Entrer Nom" required>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label for="exampleInputEmail1">Prenom</label>*/
/*                                             <input type="text" name="prenom" class="form-control"  placeholder="Entrer Prenom" required>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <!-- /.box-body -->*/
/* */
/* */
/* */
/*                                 </div>*/
/*                                 <div class="modal-footer">*/
/*                                     <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Fermer</button>*/
/*                                     <button id="ajout" type="button" class="btn btn-warning">Ajouter</button>*/
/*                                 </div>*/
/*                             </form>*/
/*                         </div>*/
/*                         <!-- /.modal-content -->*/
/*                     </div>*/
/*                     <!-- /.modal-dialog -->*/
/*                 </div>                */
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
/*         $(document).ajaxStart(function() { */
/*             Pace.restart(); }); */
/*         $(document).ready(function () {*/
/*             */
/*             $('.action-menu').find('a').click(function () {*/
/*                 var text = $(this).text();*/
/*                 var css1;*/
/*                 var css2;*/
/*                 var type;*/
/*                 var data;*/
/*                 if (text === 'Modifier') {*/
/*                     css1 = 'btn btn-warning action';*/
/*                     css2 = 'btn btn-warning dropdown-toggle change-color';*/
/*                     type = 'button';*/
/*                     data = 'modal';*/
/*                 }*/
/*                 else {*/
/*                     css1 = 'btn btn-danger action';*/
/*                     css2 = 'btn btn-danger dropdown-toggle change-color';*/
/*                     type = 'submit';*/
/*                     data = '';*/
/*                 }*/
/*                 $(this).parent().parent().siblings('.action').text(text).attr('class', css1).attr('type', type).attr('data-toggle', data);*/
/* */
/*                 $(this).parent().parent().siblings('.change-color').attr('class', css2);*/
/*             });*/
/*             $('#myTable').DataTable();*/
/*             $('.action').click(function () {*/
/*                 var id = $(this).parent().parent().parent().parent().siblings('.id-admin').text();*/
/*                 var login = $(this).parent().parent().parent().parent().siblings('.login-admin').text();*/
/*                 var nom = $(this).parent().parent().parent().parent().siblings('.nom-admin').text();*/
/*                 var prenom = $(this).parent().parent().parent().parent().siblings('.prenom-admin').text();*/
/* */
/*                 $("input[name='id']").val(id);*/
/*                 $("input[name='login']").val(login);*/
/*                 $("input[name='nom']").val(nom);*/
/*                 $("input[name='prenom']").val(prenom);*/
/*             });*/
/*             $("#add").click(function () {*/
/*                 $("input[name='id']").val('');*/
/*                 $("input[name='login']").val('');*/
/*                 $("input[name='nom']").val('');*/
/*                 $("input[name='prenom']").val('');*/
/*             });*/
/*             var verif = false;*/
/*             $("#log").keyup(function () {*/
/*                 $.ajax({type : "POST" , url: "{{path('ajax')}}", data:{ login : $(this).val() }, success: function () {*/
/*                         $("#log").css("border-color","red");*/
/*                         $("#error").show();*/
/*                         verif = true;*/
/*                     }, error: function () {*/
/*                         $("#log").css("border-color","#d2d6de");*/
/*                         $("#error").hide();*/
/*                         verif = false;*/
/*                     }});*/
/*             });*/
/*             $("#ajout").click(function(){*/
/*                 if (verif === false)*/
/*                     $("#myForm2").submit();*/
/*                 */
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
