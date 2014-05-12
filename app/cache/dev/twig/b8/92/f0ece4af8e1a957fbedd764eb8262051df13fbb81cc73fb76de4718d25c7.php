<?php

/* VoyageBundle:Annonce:index2.html.twig */
class __TwigTemplate_b892f0ece4af8e1a957fbedd764eb8262051df13fbb81cc73fb76de4718d25c7 extends Twig_Template
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
                                        <strong>Tri par:</strong>
                                        <ul class=\"option-set clearfix\" data-option-key=\"filter\">
                                            <li><a href=\"#filter\" data-option-value=\"*\"  class=\"selected\">Defaul</a></li>
                                            <li><a href=\"#filter\" data-option-value=\".branding\" >Heberegement </a></li>
                                            <li><a href=\"#filter\" data-option-value=\".price\" >Prix</a></li>
                                            <li><a href=\"#filter\" data-option-value=\".star\" >Stars</a></li>
                                            <li><a href=\"#filter\" data-option-value=\".rate\" >Commenter</a></li>
                                        </ul>
                                        
                                        <div class=\"grid_btn\">
                                            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("annonce");
        echo "\" class=\"grid\"></a>
                                            <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("annonce2");
        echo "\" class=\"list active\"></a>
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
                if ((($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id_Annonce") == $this->getAttribute((isset($context["pp"]) ? $context["pp"] : $this->getContext($context, "pp")), "id_Annonce")) && ((isset($context["verif"]) ? $context["verif"] : $this->getContext($context, "verif")) != 1))) {
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
                if ((($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id_Annonce") == $this->getAttribute((isset($context["nn"]) ? $context["nn"] : $this->getContext($context, "nn")), "id_Annonce")) && ((isset($context["verif"]) ? $context["verif"] : $this->getContext($context, "verif")) != 1))) {
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
                if ((($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id_Annonce") == $this->getAttribute((isset($context["cc"]) ? $context["cc"] : $this->getContext($context, "cc")), "id_Annonce")) && ((isset($context["verif"]) ? $context["verif"] : $this->getContext($context, "verif")) != 1))) {
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
                                            ";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image"), "html", null, true);
            echo "
                                            <img src=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image")), "html", null, true);
            echo "\"  alt=\"Offer Image\">
                                            <div class=\"overlay\">
                                                <a href=\"#\" class=\"like\"></a>
                                            </div>
                                        </figure>
                                        <article>
                                            <h3>Blue beach</h3>
                                            <h4>thailand</h4>
                                            <div>
                                                <p>
                                                    <a href=\"#\" class=\"active\"></a>
                                                    <a href=\"#\" class=\"active\"></a>
                                                    <a href=\"#\" class=\"active\"></a>
                                                    <a href=\"#\"></a>
                                                    <a href=\"#\"></a>
                                                </p>
                                                <span>Read 8 Reviews</span>
                                            </div>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                        </article>
                                        <div class=\"price\">
                                            <h3>138\$</h3>
                                            <a href=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annonce_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id_Annonce"))), "html", null, true);
            echo "\"></a>
                                        </div>
                                    </div>

                                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
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
        return "VoyageBundle:Annonce:index2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 115,  233 => 110,  248 => 113,  231 => 105,  218 => 95,  205 => 88,  197 => 82,  191 => 80,  180 => 78,  178 => 77,  175 => 76,  170 => 74,  165 => 73,  146 => 67,  129 => 62,  126 => 61,  110 => 57,  100 => 53,  97 => 52,  90 => 50,  84 => 49,  70 => 38,  538 => 221,  530 => 379,  504 => 356,  500 => 355,  496 => 354,  492 => 353,  488 => 352,  484 => 351,  476 => 349,  472 => 348,  468 => 347,  464 => 346,  460 => 345,  456 => 344,  344 => 238,  326 => 222,  324 => 221,  239 => 145,  228 => 142,  215 => 132,  195 => 121,  174 => 112,  20 => 1,  76 => 47,  480 => 350,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 326,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 147,  241 => 77,  229 => 73,  220 => 70,  214 => 94,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 56,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 146,  240 => 86,  238 => 85,  235 => 106,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 88,  204 => 87,  179 => 114,  159 => 72,  143 => 56,  135 => 65,  119 => 59,  102 => 54,  71 => 39,  67 => 38,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 39,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 79,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 71,  151 => 69,  142 => 59,  138 => 54,  136 => 86,  121 => 46,  117 => 44,  105 => 55,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 16,  22 => 2,  246 => 90,  157 => 56,  145 => 92,  139 => 45,  131 => 63,  123 => 60,  120 => 40,  115 => 68,  111 => 67,  108 => 36,  101 => 32,  98 => 31,  96 => 55,  83 => 25,  74 => 14,  66 => 37,  55 => 22,  52 => 21,  50 => 10,  43 => 8,  41 => 17,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 123,  199 => 122,  193 => 81,  189 => 71,  187 => 116,  182 => 66,  176 => 64,  173 => 75,  168 => 72,  164 => 105,  162 => 57,  154 => 70,  149 => 68,  147 => 58,  144 => 49,  141 => 66,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 58,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 51,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 18,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
