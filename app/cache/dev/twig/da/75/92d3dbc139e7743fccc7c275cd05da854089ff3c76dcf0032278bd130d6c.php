<?php

/* VoyageBundle:Default:travel_grid.html.twig */
class __TwigTemplate_da7592d3dbc139e7743fccc7c275cd05da854089ff3c76dcf0032278bd130d6c extends Twig_Template
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
        return array (  444 => 358,  423 => 340,  414 => 334,  393 => 316,  384 => 310,  363 => 292,  354 => 286,  333 => 268,  324 => 262,  303 => 244,  294 => 238,  273 => 220,  264 => 214,  243 => 196,  234 => 190,  213 => 172,  204 => 166,  183 => 148,  168 => 136,  164 => 135,  31 => 4,  28 => 3,);
    }
}
