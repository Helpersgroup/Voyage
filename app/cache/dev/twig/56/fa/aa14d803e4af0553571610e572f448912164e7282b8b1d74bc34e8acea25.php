<?php

/* VoyageBundle:Proposition:index.html.twig */
class __TwigTemplate_56faaa14d803e4af0553571610e572f448912164e7282b8b1d74bc34e8acea25 extends Twig_Template
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
                                <span class=\"crum\">List proposition</span>
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
                                        <strong>Tri par:</strong>
                                        <ul class=\"option-set clearfix\" data-option-key=\"filter\">
                                            <li><a href=\"#filter\" data-option-value=\"*\"  class=\"selected\">Defaul</a></li>
                                            <li><a href=\"#filter\" data-option-value=\".branding\" >Heberegement </a></li>
                                            <li><a href=\"#filter\" data-option-value=\".price\" >Prix</a></li>
                                            <li><a href=\"#filter\" data-option-value=\".star\" >Stars</a></li>
                                            <li><a href=\"#filter\" data-option-value=\".rate\" >Commenter</a></li>
                                        </ul>
                                        
                                        <div class=\"grid_btn\">
                                            <a href=\"#\" class=\"grid\"></a>
                                            <a href=\"#\" class=\"list active\"></a>
                                        </div>
                                        <div class=\"clearfix\"></div>
                                        <span class=\"border\"></span>
                                    </div>
                                </div>


                                <div class=\"row travel_lest\" id=\"project-container\">
                                   
                                    ";
        // line 49
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            echo " 
                                     ";
            // line 50
            $context["verif"] = 0;
            // line 51
            echo "                                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["h"]) ? $context["h"] : $this->getContext($context, "h")));
            foreach ($context['_seq'] as $context["_key"] => $context["hh"]) {
                // line 52
                echo "                                        
                                        ";
                // line 53
                if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id_Annonce") == $this->getAttribute((isset($context["hh"]) ? $context["hh"] : $this->getContext($context, "hh")), "id_Annonce"))) {
                    // line 54
                    echo "                                        <div class=\"span9 offer element branding\">
                                            ";
                    // line 55
                    $context["verif"] = 1;
                    // line 56
                    echo "                                        ";
                }
                // line 57
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hh'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                                                
                                    ";
            // line 59
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")));
            foreach ($context['_seq'] as $context["_key"] => $context["pp"]) {
                // line 60
                echo "                                        ";
                if ((($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idAnnonce") == $this->getAttribute((isset($context["pp"]) ? $context["pp"] : $this->getContext($context, "pp")), "id_Annonce")) && ((isset($context["verif"]) ? $context["verif"] : $this->getContext($context, "verif")) != 1))) {
                    // line 61
                    echo "                                        <div class=\"span9 offer element price\"> 
                                            ";
                    // line 62
                    $context["verif"] = 1;
                    // line 63
                    echo "                                                
                                        ";
                }
                // line 65
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pp'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                                     ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")));
            foreach ($context['_seq'] as $context["_key"] => $context["nn"]) {
                // line 67
                echo "                                        
                                        ";
                // line 68
                if ((($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idAnnonce") == $this->getAttribute((isset($context["nn"]) ? $context["nn"] : $this->getContext($context, "nn")), "id_Annonce")) && ((isset($context["verif"]) ? $context["verif"] : $this->getContext($context, "verif")) != 1))) {
                    // line 69
                    echo "                                        <div class=\"span9 offer element star\"> 
                                            ";
                    // line 70
                    $context["verif"] = 1;
                    // line 71
                    echo "                                        ";
                }
                // line 72
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nn'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "                                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")));
            foreach ($context['_seq'] as $context["_key"] => $context["cc"]) {
                // line 74
                echo "                                        
                                        ";
                // line 75
                if ((($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idAnnonce") == $this->getAttribute((isset($context["cc"]) ? $context["cc"] : $this->getContext($context, "cc")), "id_Annonce")) && ((isset($context["verif"]) ? $context["verif"] : $this->getContext($context, "verif")) != 1))) {
                    // line 76
                    echo "                                        <div class=\"span9 offer element rate\">
                                            ";
                    // line 77
                    $context["verif"] = 1;
                    // line 78
                    echo "                                        ";
                }
                // line 79
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
                                      ";
            // line 80
            if (((isset($context["verif"]) ? $context["verif"] : $this->getContext($context, "verif")) == 0)) {
                // line 81
                echo "                                        <div class=\"span9 offer element\">
                                        ";
            }
            // line 82
            echo "           

                                             
                                             
                                        <figure>
                                            <img src=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/offerpic-1.png"), "html", null, true);
            echo "\"  alt=\"Offer Image\">
                                            <div class=\"overlay\">
                                                <a href=\"#\" class=\"like\"></a>
                                            </div>
                                        </figure>
                                        <article>
                                            <h3>";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom"), "html", null, true);
            echo "</h3>
                                            <h4>";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "depart"), "html", null, true);
            echo "</h4>
                                            <div>
                                                <p>
                                                    <a href=\"#\" class=\"active\"></a>
                                                    <a href=\"#\" class=\"active\"></a>
                                                    <a href=\"#\" ></a>
                                                    <a href=\"#\"></a>
                                                    <a href=\"#\"></a>
                                                </p>
                                                <p>Date depart : ";
            // line 103
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateDeb"), "y/m/d"), "html", null, true);
            echo "</p>
                                            </div>
                                            <p>";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description"), "html", null, true);
            echo "</p>
                                        </article>
                                        <div class=\"price\">
                                            <h3>";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prix"), "html", null, true);
            echo " \$</h3>
                                            <a href=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proposition_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idAnnonce"))), "html", null, true);
            echo "\"></a>
                                        </div>
                                    </div>

                                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "
                                            </div>
                                <span class=\"border\"></span>
                            
                                <div class=\"pagination clearfix\">
                                    <p>Showing<a href=\"#\"> 1 </a>page   <a href=\"#\">30</a></p>
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
        return "VoyageBundle:Proposition:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 114,  238 => 109,  234 => 108,  228 => 105,  223 => 103,  211 => 94,  207 => 93,  198 => 87,  191 => 82,  187 => 81,  185 => 80,  177 => 79,  174 => 78,  172 => 77,  169 => 76,  167 => 75,  164 => 74,  159 => 73,  153 => 72,  150 => 71,  148 => 70,  145 => 69,  143 => 68,  140 => 67,  135 => 66,  129 => 65,  125 => 63,  123 => 62,  120 => 61,  117 => 60,  113 => 59,  110 => 58,  104 => 57,  101 => 56,  99 => 55,  96 => 54,  94 => 53,  91 => 52,  86 => 51,  84 => 50,  78 => 49,  31 => 4,  28 => 3,);
    }
}
