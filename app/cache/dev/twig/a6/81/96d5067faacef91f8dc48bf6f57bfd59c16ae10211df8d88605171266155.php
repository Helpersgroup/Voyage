<?php

/* VoyageBundle:Default:details.html.twig */
class __TwigTemplate_a68196d5067faacef91f8dc48bf6f57bfd59c16ae10211df8d88605171266155 extends Twig_Template
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
                            \t<a href=\"#\">Home</a>
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
                                            <h4>Kavin hotel</h4>
                                            <h5>Greece</h5>
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
                                                        <input type=\"text\" name=\"Location\" value=\"30.01.2013\" id=\"datepicker\">
                                                    </div>
                                                    <div>
                                                        <label>Check Out</label>
                                                        <input type=\"text\" name=\"Location\" value=\"30.01.2013\" id=\"clender\">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"check_detail clearfix\" >
                                                <p class=\"first\">Singel Room <span>138\$</span></p>
                                                <p class=\"two\">Double Room <span>250\$</span></p>
                                            </div>

                                            <div class=\"pull-right\">
                                                <div class=\"persons clearfix\">
                                                    <div class=\"ad\">
                                                        <label>Adults</label>
                                                        <input type=\"text\" name=\"Location\" value=\"1\" id=\"spinner\">
                                                    </div>
                                                    <div class=\"ad\">
                                                        <label>Children</label>
                                                        <input type=\"text\" name=\"Location\" value=\"1\" id=\"spinner-two\">
                                                    </div>
                                                    <div>
                                                        <label>Senior</label>
                                                        <input type=\"text\" name=\"Location\" value=\"1\" id=\"spinner-three\">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p class=\"clearfix\">Total Booking <span>138\$</span></p>
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
                                                    <div class=\"deals clearfix\">
                                                        <figure class=\"pull-left\"><img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/hotdeal-pic.png"), "html", null, true);
        echo "\" alt=\"Pic\"></figure>
                                                        <article class=\"  pull-left clearfix\">
                                                            <div class=\"hot\">
                                                                <p>Kavin hotel</p>
                                                                <p class=\"stars\">
                                                                    <a href=\"#\" class=\"blue_star\"></a>
                                                                    <a href=\"#\" class=\"blue_star\"></a>
                                                                    <a href=\"#\" class=\"blue_star\"></a>
                                                                    <a href=\"#\"></a>
                                                                    <a href=\"#\"></a>
                                                                </p>
                                                            </div>
                                                        </article>
                                                    </div>
                                                    <div class=\"deals clearfix\">
                                                        <figure class=\"pull-left\"><img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/hotdeal-pic.png"), "html", null, true);
        echo "\" alt=\"Pic\"></figure>
                                                        <article class=\"  pull-left clearfix\">
                                                            <div class=\"hot\">
                                                                <p>Kavin hotel</p>
                                                                <p class=\"stars\">
                                                                    <a href=\"#\" class=\"blue_star\"></a>
                                                                    <a href=\"#\" class=\"blue_star\"></a>
                                                                    <a href=\"#\" class=\"blue_star\"></a>
                                                                    <a href=\"#\"></a>
                                                                    <a href=\"#\"></a>
                                                                </p>
                                                            </div>
                                                        </article>
                                                    </div>
                                                    <div class=\"deals clearfix\">
                                                        <figure class=\"pull-left\"><img src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/hotdeal-pic.png"), "html", null, true);
        echo "\" alt=\"Pic\"></figure>
                                                        <article class=\"  pull-left clearfix\">
                                                            <div class=\"hot\">
                                                                <p>Kavin hotel</p>
                                                                <p class=\"stars\">
                                                                    <a href=\"#\" class=\"blue_star\"></a>
                                                                    <a href=\"#\" class=\"blue_star\"></a>
                                                                    <a href=\"#\" class=\"blue_star\"></a>
                                                                    <a href=\"#\"></a>
                                                                    <a href=\"#\"></a>
                                                                </p>
                                                            </div>
                                                        </article>
                                                    </div>
                                                    <div class=\"deals clearfix\">
                                                        <figure class=\"pull-left\"><img src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/hotdeal-pic.png"), "html", null, true);
        echo "\" alt=\"Pic\"></figure>
                                                        <article class=\"  pull-left clearfix\">
                                                            <div class=\"hot\">
                                                                <p>Kavin hotel</p>
                                                                <p class=\"stars\">
                                                                    <a href=\"#\" class=\"blue_star\"></a>
                                                                    <a href=\"#\" class=\"blue_star\"></a>
                                                                    <a href=\"#\" class=\"blue_star\"></a>
                                                                    <a href=\"#\"></a>
                                                                    <a href=\"#\"></a>
                                                                </p>
                                                            </div>
                                                        </article>
                                                    </div>
                                                    <div class=\"deals clearfix\">
                                                        <figure class=\"pull-left\"><img src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/hotdeal-pic.png"), "html", null, true);
        echo "\" alt=\"Pic\"></figure>
                                                        <article class=\"  pull-left clearfix\">
                                                            <div class=\"hot\">
                                                                <p>Kavin hotel</p>
                                                                <p class=\"stars\">
                                                                    <a href=\"#\" class=\"blue_star\"></a>
                                                                    <a href=\"#\" class=\"blue_star\"></a>
                                                                    <a href=\"#\" class=\"blue_star\"></a>
                                                                    <a href=\"#\"></a>
                                                                    <a href=\"#\"></a>
                                                                </p>
                                                            </div>
                                                        </article>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h3> need help booking <a href=\"#\"></a></h3>
                                    <div class=\"widget\">
                                        <p>Pri ut minim fierent voluptatum, ea pro erat postea option</p>
                                        <p class=\"call\">1-669-559-4378</p>
                                    </div>

                                </div>
                            </div>

                            <div class=\"span9 right_content\">
                                <div class=\"carousel_wrap\">
                                    <div id=\"carousel-wrapper\">
                                        <div id=\"carousel_two\" class=\"cool-carousel\">
                                            <span id=\"image1\"><img src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/crosal-img.png"), "html", null, true);
        echo "\" alt=\"\"/></span>
                                            <span id=\"image2\"><img src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/crosal-img2.png"), "html", null, true);
        echo "\" alt=\"\" /></span>
                                            <span id=\"image3\"><img src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/crosal-img3.png"), "html", null, true);
        echo "\" alt=\"\" /></span>
                                            <span id=\"image4\"><img src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/crosal-img4.png"), "html", null, true);
        echo "\" alt=\"\"/></span>
                                            <span id=\"image5\"><img src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/crosal-img5.png"), "html", null, true);
        echo "\" alt=\"\"/></span>
                                            <span id=\"image6\"><img src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/crosal-img6.png"), "html", null, true);
        echo "\" alt=\"\" /></span>
                                            <span id=\"image7\"><img src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/crosal-img7.png"), "html", null, true);
        echo "\" alt=\"\" /></span>
                                            <span id=\"image8\"><img src=\"";
        // line 190
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
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/crosal-img4.png"), "html", null, true);
        echo "\" alt=\"\" /></a>
                                                <a href=\"#image3\"><img src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/crosal-img3.png"), "html", null, true);
        echo "\" alt=\"\"/></a>
                                                <a href=\"#image5\"><img src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/crosal-img5.png"), "html", null, true);
        echo "\"  alt=\"\"/></a>
                                                <a href=\"#image6\"><img src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/crosal-img6.png"), "html", null, true);
        echo "\"  alt=\"\"/></a>
                                                <a href=\"#image7\"><img src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/crosal-img7.png"), "html", null, true);
        echo "\" alt=\"\"/></a>
                                                <a href=\"#image8\"><img src=\"";
        // line 204
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
                                        <li><a href=\"#tabs-1\" class=\"one\">Summary</a></li>
                                        <li><a href=\"#tabs-2\" class=\"two\">Preferences</a></li>
                                        <li><a href=\"#tabs-3\" class=\"three\">location</a></li>
                                        <li><a href=\"#tabs-4\" class=\"four\">Reviews</a></li>
                                    </ul>
                                    <div id=\"tabs-1\" class=\"tab clearfix\" >
                                        <div class=\"detail clearfix\">
                                            <p>Lorem ipsum venenatis donec sociosqu porta tempor, aptent augue leo dictum nam, senectus dapibus potenti metus velit litora sollicitudin pulvinar pharetra taciti aenean nunc aenean, feugiat scelerisque leo duis netus consequat, lobortis malesuada eleifend ad lacus quisque ut curabitur bibendum laoreet erat nisi malesuada, dictumst arcu platea consequat rutrum purus malesuada, nibh etiam eleifend quis lectus lacinia semper suscipit potenti tellus orci class vivamus nibh taciti, vestibulum justo tristique volutpat praesent scelerisque phasellus eleifend, taciti est taciti consequat donec et class lobortis.</p>
                                            <p>Feugiat consequat augue pulvinar fusce quis dui diam leo dictumst, fringilla quisque nulla nec blandit lectus aenean lobortis ultrices, fames dolor accumsan ultrices eleifend convallis himenaeos etiam.</p>
                                            <h2>Room Amenities</h2>
                                            <ul>
                                                <li>Restaurants</li>
                                                <li>Complimenttary Wi-Fi</li>
                                                <li>Internet</li>
                                                <li>Parking</li>
                                            </ul>

                                            <ul>
                                                <li>Restaurants</li>
                                                <li>Complimenttary Wi-Fi</li>
                                                <li>Internet</li>
                                                <li>Parking</li>
                                            </ul>

                                            <ul>
                                                <li>Restaurants</li>
                                                <li>Complimenttary Wi-Fi</li>
                                                <li>Internet</li>
                                                <li>Parking</li>
                                            </ul>

                                            <ul>
                                                <li>Restaurants</li>
                                                <li>Complimenttary Wi-Fi</li>
                                                <li>Internet</li>
                                                <li>Parking</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id=\"tabs-2\" class=\"tab clearfix\" >
                                        <div class=\"detail\">
                                            <h2>Room Facilities</h2>
                                            <ul>
                                                <li>Restaurants</li>
                                                <li>Complimenttary Wi-Fi</li>
                                                <li>Internet</li>
                                                <li>Parking</li>
                                            </ul>

                                            <ul>
                                                <li>Restaurants</li>
                                                <li>Complimenttary Wi-Fi</li>
                                                <li>Internet</li>
                                                <li>Parking</li>
                                            </ul>

                                            <ul>
                                                <li>Restaurants</li>
                                                <li>Complimenttary Wi-Fi</li>
                                                <li>Internet</li>
                                                <li>Parking</li>
                                            </ul>

                                            <ul>
                                                <li>Restaurants</li>
                                                <li>Complimenttary Wi-Fi</li>
                                                <li>Internet</li>
                                                <li>Parking</li>
                                            </ul>

                                            <p>Feugiat consequat augue pulvinar fusce quis dui diam leo dictumst, fringilla quisque nulla nec blandit lectus aenean lobortis ultrices, fames dolor accumsan ultrices eleifend convallis himenaeos etiam.</p>
                                        </div>
                                    </div>
                                    <div id=\"tabs-3\" class=\"tab clearfix\" >
                                        <div class=\"detail\">
                                            <div class=\"map\">
                                                <iframe width=\"100%\" height=\"360\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Envato+Pty+Ltd,+13%2F2+Elizabeth+Street,+Melbourne+VIC,+Australia&amp;aq=0&amp;oq=envato&amp;sll=37.0625,-95.677068&amp;sspn=39.371738,86.572266&amp;ie=UTF8&amp;hq=Envato+Pty+Ltd,+13%2F2+Elizabeth+Street,&amp;hnear=Melbourne+Victoria,+Australia&amp;t=p&amp;ll=-37.817209,144.961681&amp;spn=0.010849,0.04107&amp;z=15&amp;output=embed\"></iframe>
                                            </div>

                                            <h2>Hotel Location</h2>
                                            <p>Feugiat consequat augue pulvinar fusce quis dui diam leo dictumst, fringilla quisque nulla nec blandit lectus aenean lobortis ultrices, fames dolor accumsan ultrices eleifend convallis himenaeos etiam.</p>
                                        </div>
                                    </div>
                                    <div id=\"tabs-4\" class=\"tab clearfix\" >
                                        <div class=\"detail\">
                                            <div class=\"row\">

                                                <div class=\"span4 our_rating\">
                                                    <h2>Your Rating</h2>
                                                    <ul>
                                                        <li class=\"first\">Clear</li>
                                                        <li><a href=\"#\" class=\"blue_star\"></a></li>
                                                        <li><a href=\"#\" class=\"blue_star\"></a></li>
                                                        <li><a href=\"#\" class=\"blue_star\"></a></li>
                                                        <li><a href=\"#\" class=\"blue_star\"></a></li>
                                                        <li><a href=\"#\" class=\"star\"></a></li>
                                                    </ul>

                                                    <ul>
                                                        <li class=\"first\">CLocation</li>
                                                        <li><a href=\"#\" class=\"blue_star\"></a></li>
                                                        <li><a href=\"#\" class=\"blue_star\"></a></li>
                                                        <li><a href=\"#\" class=\"blue_star\"></a></li>
                                                        <li><a href=\"#\" class=\"star\"></a></li>
                                                        <li><a href=\"#\" class=\"star\"></a></li>
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
                                                        <li class=\"first\">Comfort</li>
                                                        <li><a href=\"#\" class=\"blue_star\"></a></li>
                                                        <li><a href=\"#\" class=\"blue_star\"></a></li>
                                                        <li><a href=\"#\" class=\"blue_star\"></a></li>
                                                        <li><a href=\"#\" class=\"blue_star\"></a></li>
                                                        <li><a href=\"#\" class=\"star\"></a></li>
                                                    </ul>
                                                    <p><span>4.5/5</span> Rating based on 5 verified Reviews</p>
                                                </div>


                                                <div class=\"span4\">
                                                    <div class=\"hotdeal\">
                                                        <div class=\"deal-header\">
                                                            <h3>Comments</h3>
                                                        </div>

                                                        <div id=\"vcarousel\">
                                                            <ul>
                                                                <li>
                                                                    <figure class=\"pull-left\"><img src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/hotdeal-pic.png"), "html", null, true);
        echo "\" alt=\"Pic\"></figure>
                                                                    <article class=\" clearfix\">
                                                                        <div class=\"hot pull-left\">
                                                                            <h5>Emma Thomson</h5>
                                                                            <span>12 minutes ago.</span>
                                                                            <p>Lorem ipsum venenatis donec sociosqu porta </p>
                                                                        </div>
                                                                    </article>
                                                                </li>
                                                                <li>
                                                                    <figure class=\"pull-left\"><img src=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/hotdeal-pic.png"), "html", null, true);
        echo "\" alt=\"Pic\"></figure>
                                                                    <article class=\" clearfix\">
                                                                        <div class=\"hot pull-left\">
                                                                            <h5>Emma Thomson</h5>
                                                                            <span>12 minutes ago.</span>
                                                                            <p>Lorem ipsum venenatis donec sociosqu porta </p>
                                                                        </div>
                                                                    </article>
                                                                </li>
                                                                <li>
                                                                    <figure class=\"pull-left\"><img src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/hotdeal-pic.png"), "html", null, true);
        echo "\" alt=\"Pic\"></figure>
                                                                    <article class=\" clearfix\">
                                                                        <div class=\"hot pull-left\">
                                                                            <h5>Emma Thomson</h5>
                                                                            <span>12 minutes ago.</span>
                                                                            <p>Lorem ipsum venenatis donec sociosqu porta </p>
                                                                        </div>
                                                                    </article>
                                                                </li>
                                                                <li>
                                                                    <figure class=\"pull-left\"><img src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/hotdeal-pic.png"), "html", null, true);
        echo "\" alt=\"Pic\"></figure>
                                                                    <article class=\" clearfix\">
                                                                        <div class=\"hot pull-left\">
                                                                            <h5>Emma Thomson</h5>
                                                                            <span>12 minutes ago.</span>
                                                                            <p>Lorem ipsum venenatis donec sociosqu porta </p>
                                                                        </div>
                                                                    </article>
                                                                </li>
                                                            </ul>
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
        return "VoyageBundle:Default:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  487 => 392,  474 => 382,  461 => 372,  448 => 362,  287 => 204,  283 => 203,  279 => 202,  275 => 201,  271 => 200,  267 => 199,  255 => 190,  251 => 189,  247 => 188,  243 => 187,  239 => 186,  235 => 185,  231 => 184,  227 => 183,  192 => 151,  174 => 136,  156 => 121,  138 => 106,  120 => 91,  31 => 4,  28 => 3,);
    }
}
