<?php

/* VoyageBundle:Default:details.html.twig */
class __TwigTemplate_e45f5475e42e0893d26fcd374bdddd63e3ab23a2a7467d265af7e75aade3b863 extends Twig_Template
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
        return array (  487 => 392,  448 => 362,  287 => 204,  279 => 202,  275 => 201,  271 => 200,  267 => 199,  255 => 190,  251 => 189,  192 => 151,  439 => 303,  428 => 298,  424 => 297,  420 => 296,  414 => 293,  411 => 292,  378 => 265,  370 => 260,  356 => 249,  343 => 239,  327 => 226,  323 => 225,  316 => 221,  293 => 201,  289 => 200,  281 => 198,  277 => 197,  261 => 187,  257 => 186,  253 => 185,  249 => 184,  245 => 183,  237 => 181,  213 => 163,  155 => 117,  148 => 113,  244 => 115,  233 => 180,  248 => 113,  231 => 184,  218 => 95,  205 => 88,  197 => 82,  191 => 80,  180 => 78,  178 => 77,  175 => 76,  170 => 74,  165 => 73,  146 => 67,  129 => 62,  126 => 97,  110 => 57,  100 => 53,  97 => 52,  90 => 50,  84 => 49,  70 => 38,  538 => 221,  530 => 379,  504 => 356,  500 => 355,  496 => 354,  492 => 353,  488 => 352,  484 => 351,  476 => 349,  472 => 348,  468 => 347,  464 => 346,  460 => 345,  456 => 344,  344 => 238,  326 => 222,  324 => 221,  239 => 186,  228 => 142,  215 => 132,  195 => 121,  174 => 136,  20 => 1,  76 => 47,  480 => 350,  474 => 382,  469 => 158,  461 => 372,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 326,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 291,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 199,  283 => 203,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 188,  241 => 182,  229 => 73,  220 => 70,  214 => 94,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 56,  61 => 13,  273 => 196,  269 => 94,  254 => 92,  243 => 187,  240 => 86,  238 => 85,  235 => 185,  230 => 82,  227 => 183,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 88,  204 => 157,  179 => 114,  159 => 72,  143 => 56,  135 => 65,  119 => 59,  102 => 54,  71 => 39,  67 => 38,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 39,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 79,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 121,  151 => 69,  142 => 59,  138 => 106,  136 => 86,  121 => 46,  117 => 44,  105 => 55,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 11,  37 => 16,  22 => 2,  246 => 90,  157 => 56,  145 => 92,  139 => 45,  131 => 63,  123 => 60,  120 => 91,  115 => 68,  111 => 67,  108 => 36,  101 => 32,  98 => 31,  96 => 55,  83 => 25,  74 => 14,  66 => 37,  55 => 22,  52 => 21,  50 => 10,  43 => 8,  41 => 17,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 123,  199 => 122,  193 => 81,  189 => 71,  187 => 116,  182 => 66,  176 => 64,  173 => 75,  168 => 124,  164 => 123,  162 => 57,  154 => 70,  149 => 68,  147 => 58,  144 => 49,  141 => 66,  133 => 55,  130 => 98,  125 => 44,  122 => 43,  116 => 58,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 51,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 18,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
