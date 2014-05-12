<?php

/* VoyageBundle:Default:travel_grid.html.twig */
class __TwigTemplate_d4f4d6a321a7e6103f46fe1bee1d36e9cefff88e94ce131991e0670b0cf90fd0 extends Twig_Template
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
\t<!-- Crum -->
                <div class=\"crum-wrapper\">
                \t<div class=\"container\">
                    \t<div class=\"row\">
                        \t<div class=\"span12\">
                            \t<a href=\"#\">Home</a>
                                <span class=\"crum\">Grid Page</span>
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

                                <div id=\"widget_accordion\">
                                    <h3> Select category <a href=\"#\"></a></h3>
                                    <div class=\"widget\">
                                        <div class=\"scrollbar1\">
                                            <div class=\"scrollbar\"><div class=\"track\"><div class=\"thumb\"><div class=\"end\"></div></div></div></div>
                                            <div class=\"viewport\">
                                                <div class=\"overview\">
                                                    <ul>
                                                        <li><a href=\"#\">Camera</a> <span>(9)</span></li>
                                                        <li><a href=\"#\">Notebook </a> <span>(16)</span></li>
                                                        <li><a href=\"#\">Tablet </a> </li>
                                                        <li><a href=\"#\">Television </a> </li>
                                                        <li><a href=\"#\">Smart Phone </a> </li>
                                                        <li><a href=\"#\">Projection </a> </li>
                                                        <li><a href=\"#\">Tablet </a> </li>
                                                        <li><a href=\"#\">Television </a> </li>
                                                        <li><a href=\"#\">Smart Phone </a> </li>
                                                        <li><a href=\"#\">Projection </a> </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <h3> By Price <a href=\"#\"></a></h3>
                                    <div class=\"widget\">
                                        <form>
                                            <select>
                                                <option>\$100 - \$ 500</option>
                                                <option>\$500 - \$ 1000</option>
                                            </select>
                                        </form>
                                    </div>

                                    <h3> Stars reting <a href=\"#\"></a></h3>
                                    <div class=\"widget\">
                                        <div class=\"stars clearfix\">
                                            <a href=\"#\" class=\"blue_star\"></a>
                                            <a href=\"#\" class=\"blue_star\"></a>
                                            <a href=\"#\" class=\"blue_star\"></a>
                                            <a href=\"#\"></a>
                                            <a href=\"#\"></a>
                                            <p>Read 8 Reviews</p>
                                        </div>
                                    </div>

                                    <h3> Hotel facilities <a href=\"#\"></a></h3>
                                    <div class=\"widget facilitie_widget\">
                                        <div class=\"scrollbar1\">
                                            <div class=\"scrollbar\"><div class=\"track\"><div class=\"thumb\"><div class=\"end\"></div></div></div></div>
                                            <div class=\"viewport\">
                                                <div class=\"overview\">
                                                    <ul>
                                                        <li><a href=\"#\">Camera</a> <span>(9)</span></li>
                                                        <li class=\"tick\"><a href=\"#\">Notebook </a> <span>(16)</span></li>
                                                        <li><a href=\"#\">Tablet </a> </li>
                                                        <li><a href=\"#\">Television </a> </li>
                                                        <li><a href=\"#\">Smart Phone </a> </li>
                                                        <li><a href=\"#\">Projection </a> </li>
                                                        <li><a href=\"#\">Tablet </a> </li>
                                                        <li><a href=\"#\">Television </a> </li>
                                                        <li><a href=\"#\">Smart Phone </a> </li>
                                                        <li><a href=\"#\">Projection </a> </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h3> Room facilities <a href=\"#\"></a></h3>
                                    <div class=\"widget facilitie_widget\">
                                        <div class=\"scrollbar1\">
                                            <div class=\"scrollbar\"><div class=\"track\"><div class=\"thumb\"><div class=\"end\"></div></div></div></div>
                                            <div class=\"viewport\">
                                                <div class=\"overview\">
                                                    <ul>
                                                        <li><a href=\"#\">Camera</a> <span>(9)</span></li>
                                                        <li class=\"tick\"><a href=\"#\">Notebook </a> <span>(16)</span></li>
                                                        <li><a href=\"#\">Tablet </a> </li>
                                                        <li><a href=\"#\">Television </a> </li>
                                                        <li><a href=\"#\">Smart Phone </a> </li>
                                                        <li><a href=\"#\">Projection </a> </li>
                                                        <li><a href=\"#\">Tablet </a> </li>
                                                        <li><a href=\"#\">Television </a> </li>
                                                        <li><a href=\"#\">Smart Phone </a> </li>
                                                        <li><a href=\"#\">Projection </a> </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h3> Other <a href=\"#\"></a></h3>

                                </div>
                            </div>

                            <div class=\"span9 right_content\">
                                <div class=\"row\">
                                    <div class=\"portfolio-nav span9 clearfix\">
                                        <strong>By Shot:</strong>
                                        <ul class=\"option-set clearfix\" data-option-key=\"filter\">
                                            <li><a href=\"#filter\" data-option-value=\"*\"  class=\"selected\">Default</a></li>
                                            <li><a href=\"#filter\" data-option-value=\".branding\" >Popularity </a></li>
                                            <li><a href=\"#filter\" data-option-value=\".price\" >Price</a></li>
                                            <li><a href=\"#filter\" data-option-value=\".star\" >Stars</a></li>
                                            <li><a href=\"#filter\" data-option-value=\".rate\" >Rating</a></li>
                                        </ul>
                                        
                                        <div class=\"grid_btn clearfix\">
                                            <a href=\"";
        // line 135
        echo $this->env->getExtension('routing')->getPath("voyage_list_annonces");
        echo "\" class=\"grid active\"></a>
                                            <a href=\"";
        // line 136
        echo $this->env->getExtension('routing')->getPath("voyage_list_annoncesl");
        echo "\" class=\"list\"></a>
                                        </div>
                                        <div class=\"clearfix\"></div>

                                        <span class=\"border\"></span>
                                    </div>
                                </div>


                                <div class=\"row\" id=\"project-container\">
                                    <div class=\" span3 offer element branding\">
                                        <figure>
                                            <img src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/offerpic-1.png"), "html", null, true);
        echo "\"  alt=\"Offer Image\">
                                            <div class=\"overlay\">
                                                <a href=\"#\" class=\"like\"></a>
                                            </div>
                                        </figure>
                                        <article>
                                            <h3>Blue beach</h3>
                                            <h4>thailand</h4>
                                            <p><a href=\"#\" class=\"active\"></a>
                                                <a href=\"#\" class=\"active\"></a>
                                                <a href=\"#\" class=\"active\"></a>
                                                <a href=\"#\"></a>
                                                <a href=\"#\"></a>
                                            </p>
                                            <span>Read 8 Reviews</span>
                                        </article>
                                        <div class=\"price\">
                                            <h3>138\$</h3>
                                            <a href=\"";
        // line 166
        echo $this->env->getExtension('routing')->getPath("voyage_details");
        echo "\"></a>
                                        </div>
                                    </div>

                                    <div class=\"span3 offer element price star\">
                                        <figure>
                                            <img src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/offerpic-2.png"), "html", null, true);
        echo "\"  alt=\"Offer Image\">
                                            <div class=\"overlay\">
                                                <a href=\"#\" class=\"like\"></a>
                                            </div>
                                        </figure>
                                        <article>
                                            <h3>Blue heaven</h3>
                                            <h4>ITALY</h4>
                                            <p><a href=\"#\" class=\"active\"></a>
                                                <a href=\"#\" class=\"active\"></a>
                                                <a href=\"#\" class=\"active\"></a>
                                                <a href=\"#\"></a>
                                                <a href=\"#\"></a>
                                            </p>
                                            <span>Read 8 Reviews</span>
                                        </article>
                                        <div class=\"price\">
                                            <h3>138\$</h3>
                                            <a href=\"";
        // line 190
        echo $this->env->getExtension('routing')->getPath("voyage_details");
        echo "\"></a>
                                        </div>
                                    </div>

                                    <div class=\"span3 offer element rate\">
                                        <figure>
                                            <img src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/offerpic-3.png"), "html", null, true);
        echo "\"  alt=\"Offer Image\">
                                            <div class=\"overlay\">
                                                <a href=\"#\" class=\"like\"></a>
                                            </div>
                                        </figure>
                                        <article>
                                            <h3>Blue heaven</h3>
                                            <h4>Greece</h4>
                                            <p><a href=\"#\" class=\"active\"></a>
                                                <a href=\"#\" class=\"active\"></a>
                                                <a href=\"#\" class=\"active\"></a>
                                                <a href=\"#\"></a>
                                                <a href=\"#\"></a>
                                            </p>
                                            <span>Read 8 Reviews</span>
                                        </article>
                                        <div class=\"price\">
                                            <h3>138\$</h3>
                                            <a href=\"";
        // line 214
        echo $this->env->getExtension('routing')->getPath("voyage_details");
        echo "\"></a>
                                        </div>
                                    </div>

                                    <div class=\" span3 offer element branding\">
                                        <figure>
                                            <img src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/offerpic-4.png"), "html", null, true);
        echo "\"  alt=\"Offer Image\">
                                            <div class=\"overlay\">
                                                <a href=\"#\" class=\"like\"></a>
                                            </div>
                                        </figure>
                                        <article>
                                            <h3>Blue beach</h3>
                                            <h4>thailand</h4>
                                            <p><a href=\"#\" class=\"active\"></a>
                                                <a href=\"#\" class=\"active\"></a>
                                                <a href=\"#\" class=\"active\"></a>
                                                <a href=\"#\"></a>
                                                <a href=\"#\"></a>
                                            </p>
                                            <span>Read 8 Reviews</span>
                                        </article>
                                        <div class=\"price\">
                                            <h3>138\$</h3>
                                            <a href=\"";
        // line 238
        echo $this->env->getExtension('routing')->getPath("voyage_details");
        echo "\"></a>
                                        </div>
                                    </div>

                                    <div class=\"span3 offer element price star\">
                                        <figure>
                                            <img src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/offerpic-1.png"), "html", null, true);
        echo "\"  alt=\"Offer Image\">
                                            <div class=\"overlay\">
                                                <a href=\"#\" class=\"like\"></a>
                                            </div>
                                        </figure>
                                        <article>
                                            <h3>Blue heaven</h3>
                                            <h4>Italy</h4>
                                            <p><a href=\"#\" class=\"active\"></a>
                                                <a href=\"#\" class=\"active\"></a>
                                                <a href=\"#\" class=\"active\"></a>
                                                <a href=\"#\"></a>
                                                <a href=\"#\"></a>
                                            </p>
                                            <span>Read 8 Reviews</span>
                                        </article>
                                        <div class=\"price\">
                                            <h3>138\$</h3>
                                            <a href=\"";
        // line 262
        echo $this->env->getExtension('routing')->getPath("voyage_details");
        echo "\"></a>
                                        </div>
                                    </div>

                                    <div class=\"span3 offer element rate\">
                                        <figure>
                                            <img src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/offerpic-2.png"), "html", null, true);
        echo "\"  alt=\"Offer Image\">
                                            <div class=\"overlay\">
                                                <a href=\"#\" class=\"like\"></a>
                                            </div>
                                        </figure>
                                        <article>
                                            <h3>Blue heaven</h3>
                                            <h4>Greece</h4>
                                            <p><a href=\"#\" class=\"active\"></a>
                                                <a href=\"#\" class=\"active\"></a>
                                                <a href=\"#\" class=\"active\"></a>
                                                <a href=\"#\"></a>
                                                <a href=\"#\"></a>
                                            </p>
                                            <span>Read 8 Reviews</span>
                                        </article>
                                        <div class=\"price\">
                                            <h3>138\$</h3>
                                            <a href=\"";
        // line 286
        echo $this->env->getExtension('routing')->getPath("voyage_details");
        echo "\"></a>
                                        </div>
                                    </div>

                                    <div class=\" span3 offer element branding\">
                                        <figure>
                                            <img src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/offerpic-4.png"), "html", null, true);
        echo "\"  alt=\"Offer Image\">
                                            <div class=\"overlay\">
                                                <a href=\"#\" class=\"like\"></a>
                                            </div>
                                        </figure>
                                        <article>
                                            <h3>Blue beach</h3>
                                            <h4>thailand</h4>
                                            <p><a href=\"#\" class=\"active\"></a>
                                                <a href=\"#\" class=\"active\"></a>
                                                <a href=\"#\" class=\"active\"></a>
                                                <a href=\"#\"></a>
                                                <a href=\"#\"></a>
                                            </p>
                                            <span>Read 8 Reviews</span>
                                        </article>
                                        <div class=\"price\">
                                            <h3>138\$</h3>
                                            <a href=\"";
        // line 310
        echo $this->env->getExtension('routing')->getPath("voyage_details");
        echo "\"></a>
                                        </div>
                                    </div>

                                    <div class=\"span3 offer element price star\">
                                        <figure>
                                            <img src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/offerpic-1.png"), "html", null, true);
        echo "\"  alt=\"Offer Image\">
                                            <div class=\"overlay\">
                                                <a href=\"#\" class=\"like\"></a>
                                            </div>
                                        </figure>
                                        <article>
                                            <h3>Blue heaven</h3>
                                            <h4>Italy</h4>
                                            <p><a href=\"#\" class=\"active\"></a>
                                                <a href=\"#\" class=\"active\"></a>
                                                <a href=\"#\" class=\"active\"></a>
                                                <a href=\"#\"></a>
                                                <a href=\"#\"></a>
                                            </p>
                                            <span>Read 8 Reviews</span>
                                        </article>
                                        <div class=\"price\">
                                            <h3>138\$</h3>
                                            <a href=\"";
        // line 334
        echo $this->env->getExtension('routing')->getPath("voyage_details");
        echo "\"></a>
                                        </div>
                                    </div>

                                    <div class=\"span3 offer element rate star\">
                                        <figure>
                                            <img src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/offerpic-2.png"), "html", null, true);
        echo "\"  alt=\"Offer Image\">
                                            <div class=\"overlay\">
                                                <a href=\"#\" class=\"like\"></a>
                                            </div>
                                        </figure>
                                        <article>
                                            <h3>Blue heaven</h3>
                                            <h4>Greece</h4>
                                            <p><a href=\"#\" class=\"active\"></a>
                                                <a href=\"#\" class=\"active\"></a>
                                                <a href=\"#\" class=\"active\"></a>
                                                <a href=\"#\"></a>
                                                <a href=\"#\"></a>
                                            </p>
                                            <span>Read 8 Reviews</span>
                                        </article>
                                        <div class=\"price\">
                                            <h3>138\$</h3>
                                            <a href=\"";
        // line 358
        echo $this->env->getExtension('routing')->getPath("voyage_details");
        echo "\"></a>
                                        </div>
                                    </div>

                                </div>

                                <span class=\"border\"></span>
                            
                                <div class=\"pagination clearfix\">
                                    <p>Showing<a href=\"#\"> 9 </a>page   <a href=\"#\">45</a></p>
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
        return "VoyageBundle:Default:travel_grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 292,  354 => 286,  333 => 268,  303 => 244,  234 => 190,  216 => 145,  190 => 128,  181 => 124,  487 => 392,  448 => 362,  287 => 204,  279 => 202,  275 => 201,  271 => 200,  267 => 199,  255 => 190,  251 => 189,  192 => 151,  439 => 303,  428 => 298,  424 => 297,  420 => 296,  414 => 334,  411 => 292,  378 => 265,  370 => 260,  356 => 249,  343 => 239,  327 => 226,  323 => 225,  316 => 221,  293 => 201,  289 => 200,  281 => 198,  277 => 197,  261 => 187,  257 => 186,  253 => 185,  249 => 184,  245 => 183,  237 => 181,  213 => 172,  155 => 117,  148 => 113,  244 => 115,  233 => 180,  248 => 113,  231 => 150,  218 => 95,  205 => 88,  197 => 82,  191 => 80,  180 => 78,  178 => 77,  175 => 76,  170 => 74,  165 => 73,  146 => 67,  129 => 62,  126 => 97,  110 => 57,  100 => 53,  97 => 52,  90 => 36,  84 => 49,  70 => 38,  538 => 221,  530 => 379,  504 => 356,  500 => 355,  496 => 354,  492 => 353,  488 => 352,  484 => 351,  476 => 349,  472 => 348,  468 => 347,  464 => 346,  460 => 345,  456 => 344,  344 => 238,  326 => 222,  324 => 262,  239 => 186,  228 => 142,  215 => 132,  195 => 121,  174 => 136,  20 => 1,  76 => 47,  480 => 350,  474 => 382,  469 => 158,  461 => 372,  457 => 153,  453 => 151,  444 => 358,  440 => 148,  437 => 147,  435 => 326,  430 => 144,  427 => 143,  423 => 340,  413 => 134,  409 => 132,  407 => 291,  402 => 130,  398 => 129,  393 => 316,  387 => 122,  384 => 310,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 238,  285 => 199,  283 => 203,  278 => 86,  268 => 85,  264 => 214,  258 => 81,  252 => 80,  247 => 188,  241 => 182,  229 => 73,  220 => 146,  214 => 94,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 56,  61 => 13,  273 => 220,  269 => 94,  254 => 92,  243 => 196,  240 => 86,  238 => 85,  235 => 185,  230 => 82,  227 => 183,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 88,  204 => 166,  179 => 114,  159 => 72,  143 => 56,  135 => 65,  119 => 59,  102 => 54,  71 => 39,  67 => 21,  63 => 20,  59 => 19,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 39,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 26,  46 => 7,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 148,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 121,  151 => 69,  142 => 59,  138 => 106,  136 => 86,  121 => 46,  117 => 44,  105 => 55,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 11,  37 => 16,  22 => 2,  246 => 90,  157 => 56,  145 => 92,  139 => 45,  131 => 63,  123 => 60,  120 => 91,  115 => 68,  111 => 67,  108 => 36,  101 => 32,  98 => 31,  96 => 55,  83 => 25,  74 => 14,  66 => 37,  55 => 18,  52 => 21,  50 => 16,  43 => 14,  41 => 17,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 135,  199 => 134,  193 => 81,  189 => 71,  187 => 116,  182 => 66,  176 => 64,  173 => 75,  168 => 136,  164 => 135,  162 => 57,  154 => 70,  149 => 68,  147 => 58,  144 => 49,  141 => 66,  133 => 55,  130 => 98,  125 => 44,  122 => 43,  116 => 58,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 51,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 18,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
