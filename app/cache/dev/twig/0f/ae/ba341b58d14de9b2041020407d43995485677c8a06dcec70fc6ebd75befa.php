<?php

/* VoyageBundle:Annonce:edit.html.twig */
class __TwigTemplate_0faeba341b58d14de9b2041020407d43995485677c8a06dcec70fc6ebd75befa extends Twig_Template
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
  

\t\t\t\t<!-- Crum -->
                <div class=\"crum-wrapper\">
                \t<div class=\"container\">
                    \t<div class=\"row\">
                        \t<div class=\"span12\">
                            \t<a href=\"#\">Accueil</a>
                                <span class=\"crum\">Booking</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Crum-->

                
                <!-- Grid page -->
                <div class=\"content booking_wrap\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"span12 booking clearfix\">
                                <div class=\"top\">
                                    <h2>Ajouter Annonce</h2>
                                    <h3>!!!!!!!</h3>
                                    <div class=\"stars\">
                                        <a href=\"#\" class=\"active\"></a>
                                        <a href=\"#\" class=\"active\"></a>
                                        <a href=\"#\" class=\"active\"></a>
                                        <a href=\"#\"></a>
                                        <a href=\"#\"></a>
                                    </div>
                                </div>

                                <div class=\"bottom clearfix\">
                                    <div class=\"span6 booking_form\">
                                        <div class=\"row\">
                                            <div class=\"span5 form\">
                                                <h2>Information sur le voyage</h2>
                                                <form>
                                                    <h3>Traveller Infomation</h3>
                                                    <div class=\"clearfix\"></div>
                                                    <label>First Name: </label>
                                                    <input type=\"text\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom"), "html", null, true);
        echo "\" />
                                                    <label>Last Name: </label>
                                                    <input type=\"text\" />
                                                    <label>Your Name: </label>
                                                    <input type=\"text\"/>

                                                    <h3>Credit cart infomation</h3>
                                                    <label>Name on Card: </label>
                                                    <input type=\"text\"/>
                                                    <label>Card Number: </label>
                                                    <input type=\"text\"/>
                                                    <label>Your Email: </label>
                                                    <input type=\"text\"/>

                                                    <fieldset>
                                                        <label>Expiration Date: </label>
                                                        <input type=\"text\"/>
                                                        <input type=\"text\"/>
                                                    </fieldset>

                                                    <fieldset>
                                                        <label>Security Code: </label>
                                                        <input type=\"text\"/>
                                                    </fieldset>

                                                    <h3>Credit cart infomation</h3>
                                                    <div class=\"cards\">
                                                        <a href=\"#\"></a>
                                                        <a href=\"#\"></a>
                                                        <a href=\"#\"></a>
                                                        <a href=\"#\"></a>
                                                    </div>
                                                    <label>Country: </label>
                                                    <input type=\"text\"/>
                                                    <label>City: </label>
                                                    <input type=\"text\"/>
                                                    <label>Address: </label>
                                                    <input type=\"text\"/>

                                                    <fieldset>
                                                        <label>State </label>
                                                        <input type=\"text\"/>
                                                    </fieldset>

                                                    <fieldset>
                                                        <label>Zip Code: </label>
                                                        <input type=\"text\"/>
                                                    </fieldset>
                                                     <div class=\"summery\">
                                                    <form>
                                                        <input type=\"checkbox\"/>
                                                        <p>I agree to theconditions.</p>
                                                        <div class=\"clearfix\"></div>
                                                        <label>Grand Total:</label>
                                                        <span>138<small>\$</small></span>
                                                        <div class=\"clearfix\"></div>
                                                        <input type=\"submit\" value=\"Ajouter\"/>
                                                    </form>
                                                             </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"span5\">
                                        <div class=\"row\">
                                            <div class=\"span1\"></div>
                                            <div class=\"span4\">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


    ";
    }

    public function getTemplateName()
    {
        return "VoyageBundle:Annonce:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 47,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
