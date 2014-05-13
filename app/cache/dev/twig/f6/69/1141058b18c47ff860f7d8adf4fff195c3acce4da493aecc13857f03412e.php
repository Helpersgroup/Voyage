<?php

/* VoyageBundle:Reservations:ReservationsDisplay.html.twig */
class __TwigTemplate_f6691141058b18c47ff860f7d8adf4fff195c3acce4da493aecc13857f03412e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("VoyageBundle::layout.html.twig");

        $this->blocks = array(
            'contains' => array($this, 'block_contains'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VoyageBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contains($context, array $blocks = array())
    {
        // line 4
        echo "
<!-- Crum -->
                <div class=\"crum-wrapper\">
                \t<div class=\"container\">
                    \t<div class=\"row\">
                        \t<div class=\"span12\">
                            \t<a href=\"#\">Accueil</a>
                                <span class=\"crum\">List Annonce</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Crum-->


                <!-- Grid page -->
                <div class=\"content\">
                    <div class=\"container\">
                        <div class=\"row\">

                            <div class=\"span3\" id=\"sidebar\">
                            <div class=\"span9 right_content\">
                                <div class=\"row\">
                                    <div class=\"portfolio-nav span9 clearfix\">                                    
                                        
                                        <div class=\"grid_btn\">
                                        </div>
                                        <div class=\"clearfix\"></div>
                                        <span class=\"border\"></span>
                                    </div>
                                </div>


                                <div class=\"row travel_lest\" id=\"project-container\">
                                   
                                    ";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) ? $context["reservations"] : $this->getContext($context, "reservations")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo " 
                                        
                                        <div class=\"span9 offer element branding\">
                               
                                             
                                        <figure>
                                            <img src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/offerpic-1.png"), "html", null, true);
            echo "\"  alt=\"Offer Image\">
                                            <div class=\"overlay\">
                                                <a href=\"#\" class=\"like\"></a>
                                            </div>
                                        </figure>
                                        <article>
                                            <h3> Nom ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "nom"), "html", null, true);
            echo "</h3>
                                            <h4>Date depart :  ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "date_Deb"), "html", null, true);
            echo "</h4>
                                            <p></p>
                                            <p></p>
                                            <p></p>
                                            <p></p>
                                            <p></p>
                                            <p></p>
                                            <div>
                                                <p>
                                                    <a href=\"#\" class=\"active\"></a>
                                                    <a href=\"#\" class=\"active\"></a>
                                                    <a href=\"#\" class=\"active\"></a>
                                                    <a href=\"#\"></a>
                                                    <a href=\"#\"></a>
                                                </p>
                                                <p>Nombre d'adultes : ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "nb_adultes"), "html", null, true);
            echo "</p>
                  <p>Nombre d'enfants : ";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "nb_enfant"), "html", null, true);
            echo "</p>

                                            </div>
                                            </article>
                                        <div class=\"price\">
                                            <h3>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "prix"), "html", null, true);
            echo "</h3>
                                             ";
            // line 74
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "etat") == 0)) {
                // line 75
                echo "                                                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("confirmer_reservation", array("email" => (isset($context["email1"]) ? $context["email1"] : $this->getContext($context, "email1")), "id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id_Annonceur"), "idannonce" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id_Annonce"))), "html", null, true);
                echo "\"><b>confirmer</b></a>

                    ";
            } elseif (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "etat") == 1)) {
                // line 78
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuler_reservation", array("email" => (isset($context["email1"]) ? $context["email1"] : $this->getContext($context, "email1")), "id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id_Annonceur"), "idannonce" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id_Annonce"))), "html", null, true);
                echo "\"><b>annuler</b></a>

                    ";
            }
            // line 81
            echo "                                        </div>
                                    </div>

                                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "
                                            </div>
                                <span class=\"border\"></span>
                            
                                <div class=\"pagination clearfix\">
                                    <p>Showing<a href=\"#\"> 1 </a>page   <a href=\"#\">10</a></p>
                                    <div class=\"errows\">
                                        <a href=\"#\" class=\"left_errow\"></a>
                                        <a href=\"#\" class=\"right_errow\"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Grid page -->





";
    }

    public function getTemplateName()
    {
        return "VoyageBundle:Reservations:ReservationsDisplay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 85,  142 => 81,  135 => 78,  128 => 75,  126 => 74,  122 => 73,  114 => 68,  110 => 67,  92 => 52,  88 => 51,  79 => 45,  68 => 39,  31 => 4,  28 => 3,);
    }
}
