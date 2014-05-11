<?php

/* VoyageBundle:Annonce:show.html.twig */
class __TwigTemplate_a7ddd1dbd83fac85d5af676a1859ce7610c8a3ad4391d09ce6c020312f82d00d extends Twig_Template
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
                                <span class=\"crum\">Detail</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Crum-->


                <!-- Grid page -->
                <div class=\"content trave_detail\">
                    <div class=\"container\">
                        <div class=\"row\">

                            <div class=\"span3\" id=\"sidebar\">
                                <div class=\"widget checking_form clearfix\">
                                    <form action=\"#\" method=\"post\" class=\"clearfixc\">

                                        <div class=\"check_detail\">
                                            <h4>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom"), "html", null, true);
        echo "</h4>
                                            <h5>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "depart"), "html", null, true);
        echo "</h5>
                                            <div class=\"stars\">
                                                <a href=\"#\" class=\"active\"></a>
                                                <a href=\"#\" class=\"active\"></a>
                                                <a href=\"#\" class=\"active\"></a>
                                                <a href=\"#\"></a>
                                                <a href=\"#\"></a>
                                            </div>
                                        </div>

                                        <div class=\"location clearfix\">
                                            <div class=\"pull-left clearfix\">
                                                <div class=\"date clearfix\">
                                                    <div class=\"Depart-Date\">
                                                        <label>Check in</label>
                                                        <input type=\"text\" name=\"Location\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateDeb"), "Y-m-d"), "html", null, true);
        echo "\" id=\"datepicker\" readonly>
                                                    </div>
                                                    <div>
                                                        <label>Check Out</label>
                                                        <input type=\"text\" name=\"Location\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateFin"), "Y-m-d"), "html", null, true);
        echo "\" id=\"clender\" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"check_detail clearfix\" >
                                                <p class=\"first\">Chambre Simple <span id=p1>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prix"), "html", null, true);
        echo "</span></p>
                                                <p class=\"two\">Double Room <span id=p2>";
        // line 57
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prix") / 100) * 70), "html", null, true);
        echo "</span></p>
                                            </div>

                                            <div class=\"pull-right\">
                                                <div class=\"persons clearfix\">
                                                    <div class=\"ad\">
                                                        <label>Adultes</label>
                                                        <input type=\"text\" name=\"Location\" value=\"1\" id=\"spinner\">
                                                    </div>
                                                    <div class=\"ad\">
                                                        <label>Enfants</label>
                                                        <input type=\"text\" name=\"Location\" value=\"0\" id=\"spinner-two\">
                                                    </div>
                                                  
                                                </div>
                                            </div>
                                        </div>
                                        <p class=\"clearfix\">Total <span>138\$</span></p>
                                        <div class=\"search\">
                                            <input type=\"submit\" name=\"search\" value=\"Reserver Maintenant\" >
                                        </div>
                                    </form>
                                </div>
                                <div id=\"widget_accordion\">
                                    <h3> Select category <a href=\"#\"></a></h3>
                                    <div class=\"widget\">
                                        <div class=\"scrollbar1\">
                                            <div class=\"scrollbar\"><div class=\"track\"><div class=\"thumb\"><div class=\"end\"></div></div></div></div>
                                            <div class=\"viewport\">
                                                <div class=\"overview\">
                                                    
                                          <div class=\"search\">
                                              <div class=\"search\">
                                                  <form action=";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annonce_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idAnnonce"))), "html", null, true);
        echo ">
                                            <input type=\"submit\" name=\"search\" value=\"Modifier \" >
                                            </form>
                                                 </div>
                                                  <br>
                                                  <br>
                                                  <form action=";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annonce_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idAnnonce"))), "html", null, true);
        echo ">
                                            <input type=\"submit\" name=\"search\" value=\"Supprimer\" >
                                                  </form>
                                        </div>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class=\"span9 right_content\">
                                <div class=\"carousel_wrap\">
                                    <div id=\"carousel-wrapper\">
                                        <div id=\"carousel_two\" class=\"cool-carousel\">
                                            <span id=\"image1\"><img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/crosal-img.png"), "html", null, true);
        echo "\" alt=\"\"/></span>
                                            <span id=\"image2\"><img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/crosal-img2.png"), "html", null, true);
        echo "\" alt=\"\" /></span>
                                            <span id=\"image3\"><img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/crosal-img3.png"), "html", null, true);
        echo "\" alt=\"\" /></span>
                                            <span id=\"image4\"><img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/crosal-img4.png"), "html", null, true);
        echo "\" alt=\"\"/></span>
                                            <span id=\"image5\"><img src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/crosal-img5.png"), "html", null, true);
        echo "\" alt=\"\"/></span>
                                            <span id=\"image6\"><img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/crosal-img6.png"), "html", null, true);
        echo "\" alt=\"\" /></span>
                                            <span id=\"image7\"><img src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/crosal-img7.png"), "html", null, true);
        echo "\" alt=\"\" /></span>
                                            <span id=\"image8\"><img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/crosal-img.png"), "html", null, true);
        echo "\" alt=\"\"/></span>
                                        </div>
                                        <a href=\"#\" class=\"prev\"></a><a href=\"#\" class=\"next\"></a>
                                    </div>

                                    <div class=\"carousal-bottom\">
                                        <div id=\"thumbs-wrapper\">
                                            <div id=\"thumbs\">
                                                <a href=\"#image1\" class=\"selected\"><img src=\"images/crosal-img.png\"  alt=\"\" /></a>
                                                <a href=\"#image2\"><img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/crosal-img4.png"), "html", null, true);
        echo "\" alt=\"\" /></a>
                                                <a href=\"#image3\"><img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/crosal-img3.png"), "html", null, true);
        echo "\" alt=\"\"/></a>
                                                <a href=\"#image5\"><img src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/crosal-img5.png"), "html", null, true);
        echo "\"  alt=\"\"/></a>
                                                <a href=\"#image6\"><img src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/crosal-img6.png"), "html", null, true);
        echo "\"  alt=\"\"/></a>
                                                <a href=\"#image7\"><img src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/crosal-img7.png"), "html", null, true);
        echo "\" alt=\"\"/></a>
                                                <a href=\"#image8\"><img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/crosal-img.png"), "html", null, true);
        echo "\" alt=\"\"/></a>
                                            </div>
                                            <a id=\"prev\" href=\"#\"></a>
                                            <a id=\"next\" href=\"#\"></a>
                                        </div>
                                    </div>

                                    <span class=\"border\"></span>
                                </div>

                                <div id=\"tabs_two\">
                                    <ul class=\"clearfix\">
                                        <li><a href=\"#tabs-1\" class=\"one\">Description</a></li>
                                        <li><a href=\"#tabs-4\" class=\"two\">Commeantaire</a></li>
                                        <li><a href=\"#tabs-2\" class=\"three\">Details</a></li>
                                    </ul>
                                    <div id=\"tabs-1\" class=\"tab clearfix\" >
                                        <div class=\"detail clearfix\">
                                            <h2> Description</h2>
                                            <ul>
                                                <li>";
        // line 154
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description"), "html", null, true);
        echo "</li>
                                                
                                            </ul>

                                           

                                        </div>
                                    </div>
                                    <div id=\"tabs-2\" class=\"tab clearfix\" >
                                        <div class=\"detail\">
                                           
                                             <h2>Transport</h2>
                                            <ul>
                                                <li>";
        // line 167
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "transport"), "html", null, true);
        echo "</li>
                                               
                                            </ul>
                                    <div id=\"tabs-3\" class=\"tab clearfix\" >
                                        <div class=\"detail\">
                                            <div class=\"map\">
                                                <iframe width=\"100%\" height=\"360\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Envato+Pty+Ltd,+13%2F2+Elizabeth+Street,+Melbourne+VIC,+Australia&amp;aq=0&amp;oq=envato&amp;sll=37.0625,-95.677068&amp;sspn=39.371738,86.572266&amp;ie=UTF8&amp;hq=Envato+Pty+Ltd,+13%2F2+Elizabeth+Street,&amp;hnear=Melbourne+Victoria,+Australia&amp;t=p&amp;ll=-37.817209,144.961681&amp;spn=0.010849,0.04107&amp;z=15&amp;output=embed\"></iframe>
                                            </div>

                                            <h2>Hotel Location</h2>
                                            <p> ";
        // line 177
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "TypeHebergement"), "html", null, true);
        echo "</p>
                                        </div>
                                    </div>
                                        </div>
                                    </div>
                                    
                                    <div id=\"tabs-4\" class=\"tab clearfix\" >
                                        <div class=\"detail\">
                                            <div class=\"row\">

                                                <div class=\"span4 our_rating\">
                                                    <h2>Comment</h2>

                                                    <ul>
                                                        <li class=\"first\">Nom : </li>
                                                        <li><a href=\"#\" class=\"blue_star\">";
        // line 192
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
        echo "</a></li>
                                                        
                                                    </ul>

                                                    <ul>
                                                        <li class=\"first\">Staff</li>
                                                        <li><a href=\"#\" class=\"blue_star\"></a></li>
                                                        <li><a href=\"#\" class=\"blue_star\"></a></li>
                                                        <li><a href=\"#\" class=\"blue_star\"></a></li>
                                                        <li><a href=\"#\" class=\"blue_star\"></a></li>
                                                        <li><a href=\"#\" class=\"blue_star\"></a></li>
                                                    </ul>

                                                    <ul>
                                                        <li class=\"first\">Service</li>
                                                        <li><a href=\"#\" class=\"blue_star\"></a></li>
                                                        <li><a href=\"#\" class=\"blue_star\"></a></li>
                                                        <li><a href=\"#\" class=\"blue_star\"></a></li>
                                                        <li><a href=\"#\" class=\"blue_star\"></a></li>
                                                        <li><a href=\"#\" class=\"blue_star\"></a></li>
                                                    </ul>

                                                    <ul class=\"last\">
                                                        <input type=button value=comment>
                                                    </ul>
                                                    <p><span>4.5/5</span> Rating based on 5 verified Reviews</p>
                                                </div>


                                                <div class=\"span4\">
                                                    <div class=\"hotdeal\">
                                                        <div class=\"deal-header\">
                                                            <h3>Comments</h3>
                                                        </div>

                                                        <div id=\"\">
                                                            <ul>
                                                                ";
        // line 229
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 230
            echo "                                                                <li>
                                                                    <figure class=\"pull-left\"><img src=\"";
            // line 231
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "logo")), "html", null, true);
            echo "\" alt=\"Pic\"></figure>
                                                                    <article class=\" clearfix\">
                                                                        <div class=\"hot pull-left\">
                                                                            <h5>";
            // line 234
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "nom"), "html", null, true);
            echo "</h5>
                                                                            <span>";
            // line 235
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "date"), "html", null, true);
            echo "</span>
                                                                            <p>";
            // line 236
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "message"), "html", null, true);
            echo "</p>
                                                                        </div>
                                                                    </article>
                                                                </li>
                                                               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 241
        echo "                                                            </ul>
                                                        </div>
                                                        <div class=\"pull-right\">
                                                            <a href=\"#\" class=\"d-down\"></a>
                                                            <a href=\"#\" class=\"d-up\"></a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
        return "VoyageBundle:Annonce:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  368 => 241,  357 => 236,  353 => 235,  349 => 234,  343 => 231,  340 => 230,  336 => 229,  296 => 192,  278 => 177,  265 => 167,  249 => 154,  226 => 134,  222 => 133,  218 => 132,  214 => 131,  210 => 130,  206 => 129,  194 => 120,  190 => 119,  186 => 118,  182 => 117,  178 => 116,  174 => 115,  170 => 114,  166 => 113,  146 => 96,  137 => 90,  101 => 57,  97 => 56,  88 => 50,  81 => 46,  63 => 31,  59 => 30,  31 => 4,  28 => 3,);
    }
}
