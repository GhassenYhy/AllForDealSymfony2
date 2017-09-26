<?php

/* mainBundle:Default:contact.html.twig */
class __TwigTemplate_00e6b170ae416cebbd8a5e30fec516bcd517bc913f3e47df2d276add1a844e8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("mainBundle::layout.html.twig", "mainBundle:Default:contact.html.twig", 2);
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
            <hr class=\"soften\">
            <h1>Nous Contacter</h1>
            <hr class=\"soften\"/>\t
            <div class=\"row\">
                <div class=\"span4\">
                    <h4>Details</h4>
                    <p>\tZ.I. Chotrana II - B.P. 160 -<br/>2083 Pôle Technologique ,  El Ghazala
                        <br/><br/>
                        contact@esprit.ens.tn<br/>
                        ﻿Tel (+216) 70 68 56 85<br/>
                        Fax (+216) 70 68 54 54<br/>
                        web: www.esprit.ens.tn/
                    </p>
                    <hr>
                    <p>\t 18, rue de l'Usine -<br/>ZI Aéroport Charguia II, 2035 Ariana
                        <br/><br/>
                        contact@esprit.ens.tn<br/>
                        ﻿Tel (+216) 71 94 15 41<br/>
                        Fax (+216) 71 94 18 89<br/>
                        web: www.esprit.ens.tn/
                    </p>
                </div>


                <div class=\"span4\">
                    <h4>Heures De Travail</h4>
                    <h5> Lundi - Vendredi</h5>
                    <p>09:00am - 09:00pm<br/><br/></p>
                      <h5> Samedi</h5>
                    <p>09:00am - 1:00pm<br/><br/></p>
                      <h5> Dimanche</h5>
                    <p>10:00am - 1:00pm<br/><br/></p>
                </div>
                <div class=\"span4\">
                    <h4>Envoyer Réclamation</h4>
                    <form class=\"form-horizontal\" method=\"POST\" action=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("envoie_reclamation");
        echo "\">
                        <fieldset>
                            <div class=\"control-group\">

                                <input type=\"text\" placeholder=\"Titre\" name=\"titre\" class=\"input-xlarge\"/>

                            </div>
                            <div class=\"control-group\">
                                <p>
                                    Description:
                                    <br>
                                    <textarea rows=\"5\" id=\"textarea\" name=\"description\" class=\"input-xlarge\"></textarea>

                            </div>

                            <button class=\"btn btn-large\" type=\"submit\" name=\"submit\">Envoyer</button>

                        </fieldset>
                    </form>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"span12\">
                    <iframe style=\"height:100%;width:100%;border:0;\" frameborder=\"0\" src=\"https://www.google.com/maps/embed/v1/place?q=ESPRIT,+Ariana,+Tunisia&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU\" scrolling=\"no\" src=\"en\"></iframe><br />
                    <small><a href=\"https://www.google.tn/maps/place/ESPRIT/@36.8983963,10.1875433,17z/data=!3m1!4b1!4m2!3m1!1s0x12e2cb7454c6ed51:0x683b3ab5565cd357?hl=en\" style=\"color:#0000FF;text-align:left\">View Larger Map</a></small>
                </div>
            </div>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "mainBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 41,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends 'mainBundle::layout.html.twig' %}*/
/* {% block content %}*/
/*     <div id="mainBody">*/
/*         <div class="container">*/
/*             <hr class="soften">*/
/*             <h1>Nous Contacter</h1>*/
/*             <hr class="soften"/>	*/
/*             <div class="row">*/
/*                 <div class="span4">*/
/*                     <h4>Details</h4>*/
/*                     <p>	Z.I. Chotrana II - B.P. 160 -<br/>2083 Pôle Technologique ,  El Ghazala*/
/*                         <br/><br/>*/
/*                         contact@esprit.ens.tn<br/>*/
/*                         ﻿Tel (+216) 70 68 56 85<br/>*/
/*                         Fax (+216) 70 68 54 54<br/>*/
/*                         web: www.esprit.ens.tn/*/
/*                     </p>*/
/*                     <hr>*/
/*                     <p>	 18, rue de l'Usine -<br/>ZI Aéroport Charguia II, 2035 Ariana*/
/*                         <br/><br/>*/
/*                         contact@esprit.ens.tn<br/>*/
/*                         ﻿Tel (+216) 71 94 15 41<br/>*/
/*                         Fax (+216) 71 94 18 89<br/>*/
/*                         web: www.esprit.ens.tn/*/
/*                     </p>*/
/*                 </div>*/
/* */
/* */
/*                 <div class="span4">*/
/*                     <h4>Heures De Travail</h4>*/
/*                     <h5> Lundi - Vendredi</h5>*/
/*                     <p>09:00am - 09:00pm<br/><br/></p>*/
/*                       <h5> Samedi</h5>*/
/*                     <p>09:00am - 1:00pm<br/><br/></p>*/
/*                       <h5> Dimanche</h5>*/
/*                     <p>10:00am - 1:00pm<br/><br/></p>*/
/*                 </div>*/
/*                 <div class="span4">*/
/*                     <h4>Envoyer Réclamation</h4>*/
/*                     <form class="form-horizontal" method="POST" action="{{path('envoie_reclamation')}}">*/
/*                         <fieldset>*/
/*                             <div class="control-group">*/
/* */
/*                                 <input type="text" placeholder="Titre" name="titre" class="input-xlarge"/>*/
/* */
/*                             </div>*/
/*                             <div class="control-group">*/
/*                                 <p>*/
/*                                     Description:*/
/*                                     <br>*/
/*                                     <textarea rows="5" id="textarea" name="description" class="input-xlarge"></textarea>*/
/* */
/*                             </div>*/
/* */
/*                             <button class="btn btn-large" type="submit" name="submit">Envoyer</button>*/
/* */
/*                         </fieldset>*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="span12">*/
/*                     <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=ESPRIT,+Ariana,+Tunisia&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU" scrolling="no" src="en"></iframe><br />*/
/*                     <small><a href="https://www.google.tn/maps/place/ESPRIT/@36.8983963,10.1875433,17z/data=!3m1!4b1!4m2!3m1!1s0x12e2cb7454c6ed51:0x683b3ab5565cd357?hl=en" style="color:#0000FF;text-align:left">View Larger Map</a></small>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     {% endblock %}    */
