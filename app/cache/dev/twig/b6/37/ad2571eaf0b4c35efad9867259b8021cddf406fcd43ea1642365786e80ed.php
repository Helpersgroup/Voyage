<?php

/* VoyageBundle:Default:confirmReservation.html.twig */
class __TwigTemplate_b637ad2571eaf0b4c35efad9867259b8021cddf406fcd43ea1642365786e80ed extends Twig_Template
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
  
\t\t\t
                <!-- Crum -->
                <div class=\"crum-wrapper\">
                \t<div class=\"container\">
                    \t<div class=\"row\">
                        \t<div class=\"span12\">
                            \t<a href=\"#\">Home</a>
                                <span class=\"crum\">Confirm</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Crum-->


                
                <!-- Grid page -->
                <div class=\"content booking_wrap\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"span12 booking confrm clearfix\">
                                <div class=\"top\">
                                    <h3><span>Merci ,</span> Votre reservation est presque compléte!</h3>
                                    <h4>Votre code de confirmation est  <span>996746</span></h4>
                                </div>

                                <div class=\"bottom clearfix\">
                                    <div class=\"span6 booking_form\">
                                        <div class=\"row\">
                                            <div class=\"span5 form\">
                                                <h2>Information du Voyage</h2>
                                                <h3>Informations du Client</h3>
                                                <ul>
                                                    <li><span>Nom:</span>Kavin</li>
                                                    <li><span>Prenom:</span>Hieu</li>
                                                    <li><span>e-Mail:</span>Kavinhieu@gmail.com</li>
                                                </ul>
                                                <h3>Payment</h3>
                                                <p>Lorem ipsum venenatis donec sociosqu porta tempor, aptent augue leo dictum nam, senectus dapibus potenti metus velit litora sollicitudin pulvinar pharetra taciti aenean nunc aenean, feugiat scelerisque leo duis netus consequat</p>
                                                <h3>special request</h3>
                                                <p>Lorem ipsum venenatis donec sociosqu porta tempor, aptent augue leo dictum nam, senectus dapibus potenti metus velit litora sollicitudin pulvinar </p>

                                                <div class=\"total\">
                                                    <p>
                                                        <label>Grand Total:</label>
                                                        <span>138<small>\$</small></span>
                                                    </p>
                                                    <a href=\"#\">reservation</a>
                                                    <a href=\"#\">print recept</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"span5\">
                                        <div class=\"row\">
                                            <div class=\"span1\"></div>
                                            <div class=\"span4\">
                                                <div class=\"summery\">
                                                    <h2>Hotel Sammary</h2>

                                                    <div class=\"top\">
                                                        <h2>Kavin hotel</h2>
                                                        <h3>Greece</h3>
                                                        <div class=\"stars\">
                                                            <a href=\"#\" class=\"active\"></a>
                                                            <a href=\"#\" class=\"active\"></a>
                                                            <a href=\"#\" class=\"active\"></a>
                                                            <a href=\"#\"></a>
                                                            <a href=\"#\"></a>
                                                        </div>
                                                    </div>

                                                    <h3>Summary</h3>
                                                    <ul>
                                                        <li><span>Room:</span>Single Room</li>
                                                        <li><span>Price p night:</span>138\$</li>
                                                        <li><span>Check in:</span>15 / Feb / 2113</li>
                                                        <li><span>Check out:</span>16 / Feb / 2113</li>
                                                    </ul>

                                                    <h3>Charges</h3>
                                                    <ul>
                                                        <li><span>2 Night:</span>Single Room</li>
                                                        <li><span>VAT:</span>138\$</li>
                                                        <li><span>Fees:</span>15 / Feb / 2113</li>
                                                        <li><span>Total:</span>16 / Feb / 2113</li>
                                                    </ul>
                                                </div>
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
        return "VoyageBundle:Default:confirmReservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  439 => 303,  428 => 298,  424 => 297,  420 => 296,  414 => 293,  411 => 292,  378 => 265,  370 => 260,  356 => 249,  343 => 239,  327 => 226,  323 => 225,  316 => 221,  293 => 201,  289 => 200,  281 => 198,  277 => 197,  261 => 187,  257 => 186,  253 => 185,  249 => 184,  245 => 183,  237 => 181,  213 => 163,  155 => 117,  148 => 113,  244 => 115,  233 => 180,  248 => 113,  231 => 105,  218 => 95,  205 => 88,  197 => 82,  191 => 80,  180 => 78,  178 => 77,  175 => 76,  170 => 74,  165 => 73,  146 => 67,  129 => 62,  126 => 97,  110 => 57,  100 => 53,  97 => 52,  90 => 50,  84 => 49,  70 => 38,  538 => 221,  530 => 379,  504 => 356,  500 => 355,  496 => 354,  492 => 353,  488 => 352,  484 => 351,  476 => 349,  472 => 348,  468 => 347,  464 => 346,  460 => 345,  456 => 344,  344 => 238,  326 => 222,  324 => 221,  239 => 145,  228 => 142,  215 => 132,  195 => 121,  174 => 112,  20 => 1,  76 => 47,  480 => 350,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 326,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 291,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 199,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 147,  241 => 182,  229 => 73,  220 => 70,  214 => 94,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 56,  61 => 13,  273 => 196,  269 => 94,  254 => 92,  243 => 146,  240 => 86,  238 => 85,  235 => 106,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 88,  204 => 157,  179 => 114,  159 => 72,  143 => 56,  135 => 65,  119 => 59,  102 => 54,  71 => 39,  67 => 38,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 39,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 79,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 71,  151 => 69,  142 => 59,  138 => 54,  136 => 86,  121 => 46,  117 => 44,  105 => 55,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 16,  22 => 2,  246 => 90,  157 => 56,  145 => 92,  139 => 45,  131 => 63,  123 => 60,  120 => 40,  115 => 68,  111 => 67,  108 => 36,  101 => 32,  98 => 31,  96 => 55,  83 => 25,  74 => 14,  66 => 37,  55 => 22,  52 => 21,  50 => 10,  43 => 8,  41 => 17,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 123,  199 => 122,  193 => 81,  189 => 71,  187 => 116,  182 => 66,  176 => 64,  173 => 75,  168 => 124,  164 => 123,  162 => 57,  154 => 70,  149 => 68,  147 => 58,  144 => 49,  141 => 66,  133 => 55,  130 => 98,  125 => 44,  122 => 43,  116 => 58,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 51,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 18,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
