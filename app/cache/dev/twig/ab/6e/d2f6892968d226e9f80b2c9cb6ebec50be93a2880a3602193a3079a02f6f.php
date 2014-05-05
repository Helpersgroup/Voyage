<?php

/* VoyageBundle::layout.html.twig */
class __TwigTemplate_ab6ed2f6892968d226e9f80b2c9cb6ebec50be93a2880a3602193a3079a02f6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'contains' => array($this, 'block_contains'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<!--[if IE 7]>    <html class=\"ie7\" > <![endif]-->
<!--[if IE 8]>    <html class=\"ie8\" > <![endif]-->
<!--[if IE 9]>    <html class=\"ie9\" > <![endif]-->
<!--[if IE 9]>    <html class=\"ie10\" > <![endif]-->
<!--[if (gt IE 10)|!(IE)]><!--> <html lang=\"en-US\"> <!--<![endif]-->
\t\t
<head>
\t\t\t\t<!-- META TAGS -->
\t\t\t\t<meta charset=\"UTF-8\" />
\t\t\t\t<meta name=\"viewport\" content=\"width=device-width\" />
\t\t\t\t
\t\t\t\t<!-- Title -->
\t\t\t\t<title>Voyage à la Carte</title>
\t\t\t\t
\t\t\t\t<!-- Style Sheet-->
                <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/css/bootstrap.css"), "html", null, true);
        echo "\">
\t\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/css/style.css"), "html", null, true);
        echo "\">
\t\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles//css/responsive.css"), "html", null, true);
        echo "\">
                <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/css/flexslider.css"), "html", null, true);
        echo "\">
\t\t\t\t
               <!-- favicon -->
\t\t\t\t<link rel=\"shortcut icon\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/favicon.png"), "html", null, true);
        echo "\">
\t\t\t\t
\t\t\t\t<!--[if lt IE 9]>
\t\t\t\t\t\t<script src=\"js/html5shiv.js\"></script>
\t\t\t\t\t\t<link rel=\"stylesheet\" href=\"css/ie.css\">
\t\t\t\t<![endif]-->
\t\t</head>
\t\t<body>\t\t\t\t
\t\t\t\t<!-- HEADER TOP -->
                <div id=\"top\"></div>
\t\t\t\t<div class=\"header-one\">
\t\t\t\t\t<div class=\"headertop-wrapper\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t    \t\t
\t\t\t\t\t            <div class=\"row\">
\t\t\t\t\t            \t<div class=\"span5 clearfix\">
\t\t\t\t\t                \t<div class=\"lang pull-right\">
\t\t\t\t\t                    \t<span>Select a language:<a href=\"#\">English</a></span>
\t\t\t\t\t                    </div>
\t\t\t\t\t                </div>
\t\t\t\t\t                <div class=\"span4 srch\">
                                        <form>
                                            <input type=\"submit\" value=\"\">
                                            <input type=\"text\" name=\"search\" placeholder=\"Search\">
                                        </form>
\t\t\t\t\t                </div>
\t\t\t\t\t                <div class=\"span3\">
\t\t\t\t\t                \t<div class=\"social-nav\">
\t\t\t\t\t                    \t<a href=\"#\" class=\"facebook \"></a>
\t\t\t\t\t                    \t<a href=\"#\" class=\"twitter\" ></a>
\t\t\t\t\t                    \t<a href=\"#\" class=\"google\"></a>
\t\t\t\t\t                    \t<a href=\"#\" class=\"rss\"></a>
\t\t\t\t\t                    </div>
                                        <a href=\"#\" class=\"sign-in\" id=\"login-link\">Sign in</a>
\t\t\t\t\t                </div>
\t\t\t\t\t            </div>
\t\t\t\t\t    </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- HEADER IOP -->

\t\t\t\t<!-- HEADER -->
                <div class=\"header-wrapper\">
                \t<div class=\"container\">
                    \t<div class=\"row\">
                        
                        \t<!-- Logo -->
                            <div class=\"span4\">
                            \t<div class=\"logo\">
                                \t<a href=\"index-2.html\"><img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\"></a>
                                </div>
                            </div>
                        \t<!-- Logo -->
                            
                            <!--top Menu -->
                            <div class=\"span8\">
                            \t<div class=\"top-menu\">
                                \t<ul>
                                \t\t<li><a href=\"#\">About US</a></li>
                                \t\t<li><a href=\"#\">News</a></li>
                                \t\t<li><a href=\"#\">Serbice</a></li>
                                \t\t<li><a href=\"#\">Recruiment</a></li>
                                \t\t<li><a href=\"#\">Media</a></li>
                                \t\t<li><a href=\"#\" class=\"last\">Support</a></li>
                                \t</ul>
                                </div>
                            </div>
                            <!--top Menu -->
                        
                        </div>
                    </div>
                </div>
                <!-- HEADER -->

                <!-- Main Navigation -->
                <div class=\"nav-wrapper\">
                \t<div class=\"container\">
                    \t<div class=\"row\">
                        \t<div class=\"span12\">
                            
                            \t<nav>
                                    <ul>
                                        <li><a href=\"./\">Home </a>
                                        \t<ul class=\"clearfix\">
                                                <li><a href=\"index2.html\">Home 2</a></li>
                                                <li><a href=\"index3.html\">Home 3 </a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"annonces\">Travel</a>
                                        \t<ul class=\"clearfix\">
                                                <li><a href=\"travel_grid.html\">Travel Grid</a></li>
                                                <li><a href=\"list_annonces\">Travel list</a></li>
                                                <li><a href=\"details_annonces\">Travel Detail</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"#\">Holidays</a></li>
                                        <li>
                                            <a href=\"#\">Flights</a>
                                            <ul class=\"clearfix\">
                                                <li><a href=\"#\">Camera</a></li>
                                                <li><a href=\"#\">Notebook </a></li>
                                                <li><a href=\"#\">Tablet </a> </li>
                                                <li><a href=\"#\">Television </a> </li>
                                                <li><a href=\"#\">Smart Phone </a> </li>
                                                <li><a href=\"#\">Projection </a> </li>
                                            </ul>
                                        </li>
                                        <li><a href=\"#\">Cars</a></li>
                                        <li><a href=\"#\">Vacations</a></li>
                                        <li><a href=\"#\">Guide Book</a></li>
                                        <li><a href=\"#\">Hot Deal</a></li>
                                        <li><a href=\"booking.html\">Booking</a>
                                        \t<ul class=\"clearfix\">
                                                <li><a href=\"confirm.html\">Confirmation</a></li>
                                            </ul>
                                        </li>
                                        <li  class=\"last\"><a href=\"contact.html\">Contact</a></li>
                                    </ul>
                                </nav>

                                <div class=\"responsive_nav\">
                                    <ul>
                                        <li class=\"open\">
                                            <a href=\"#\">HOME</a>
                                            <ul>
                                                <li><a href=\"#\">Home </a></li>
                                                <li><a href=\"#\">Hotels</a></li>
                                                <li><a href=\"#\">Holidays</a></li>
                                                <li><a href=\"#\">Flights</a> </li>
                                                <li><a href=\"#\">Camera</a></li>
                                                <li><a href=\"#\">Notebook </a></li>
                                                <li><a href=\"#\">Tablet </a> </li>
                                                <li><a href=\"#\">Television </a> </li>
                                                <li><a href=\"#\">Smart Phone </a> </li>
                                                <li><a href=\"#\">Projection </a> </li>
                                                <li><a href=\"#\">Cars</a></li>
                                                <li><a href=\"#\">Vacations</a></li>
                                                <li><a href=\"#\">Guide Book</a></li>
                                                <li><a href=\"#\">Hot Deal</a></li>
                                                <li><a href=\"#\">Cruise</a></li>
                                                <li class=\"last\"><a href=\"#\">Promotion</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Main Navigation -->

                
                
                
                
";
        // line 178
        $this->displayBlock('contains', $context, $blocks);
        // line 179
        echo "                
                
                
                
                
                
                
                
                
                
                <!-- Footer widget -->
                <div class=\"footer-widget-wrapper\">
                \t<div class=\"container\">
                    \t<div class=\"row\">
                        \t
                            <div class=\"span3 f-widget copy-right\">
                            \t<a href=\"#\" class=\"f-logo\"><img src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/footer-logo.png"), "html", null, true);
        echo "\" alt=\"Logo\"></a>
                            \t<p>© 2013 <a href=\"#\">N-Travel</a>. All rights reserved</p>
                            \t<p>Designed by Kavin</p>
                            </div>
                            <div class=\"span3 f-widget\">
                            \t<h4>Company Infomation</h4>
                                <ul>
                                \t<li><a href=\"#\">About US</a></li>
                                \t<li><a href=\"#\">Team</a></li>
                                \t<li><a href=\"#\">Booking Tips</a></li>
                                \t<li><a href=\"#\">Payment Option</a></li>
                                \t<li class=\"last\"><a href=\"#\">Infomation</a></li>
                                </ul>
                            </div>
                            <div class=\"span3 f-widget\">
                            \t<h4>Customer Care</h4>
                                <ul>
                                \t<li><a href=\"#\">About US</a></li>
                                \t<li><a href=\"#\">Team</a></li>
                                \t<li><a href=\"#\">Booking Tips</a></li>
                                \t<li><a href=\"#\">Payment Option</a></li>
                                \t<li class=\"last\"><a href=\"#\">Infomation</a></li>
                                </ul>
                            </div>
                            <div class=\"span3 f-widget\">
                            \t<div class=\"cc\">
                            \t\t<h4>Customer Support</h4>
                            \t\t<h2>1-669-559-4378</h2>
                            \t\t<span class=\"pull-right\">Support 24/24</span>
                            \t</div>
                            \t<div class=\"f-widget n-letter\">
                                \t<h4>Newsletter</h4>

                                    <form>
                                        <input type=\"text\" name=\"newlatter\" value=\"Enter your email...\">
                                        <input type=\"submit\" name=\"submite-newslatter\" value=\"Send\">
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- Footer widget -->
                
                <!-- Footer -->
                <div class=\"footer-wrapper\">
                \t<div class=\"container\">
                    \t<div class=\"row\">
                        \t<div class=\"span12\">
                            
                            \t<footer>
                                \t<div class=\"footer-nav\">
                                    \t<ul>
                                    \t\t<li><a href=\"#\">About US</a></li>
                                    \t\t<li><a href=\"#\">News</a></li>
                                    \t\t<li><a href=\"#\">Serbice</a></li>
                                    \t\t<li><a href=\"#\">Recruiment </a></li>
                                    \t\t<li><a href=\"#\">Media</a></li>
                                    \t\t<li><a href=\"#\">Support</a></li>
                                    \t</ul>
                                    </div>
                                    <a href=\"javascript:void(0)\" onClick=\"goToByScroll('top')\" class=\"gotop\"></a>
                                </footer>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer -->
                
                <div class=\"login-popup-wrapper\">
                    <div id=\"login-popup\">
                    \t<h2>login Panel</h2>
                        <form method=\"get\" action=\"#\">
                            <input type=\"text\" value=\"\" id=\"username\" placeholder=\"kavinhieu@gmail.com\" />
                            <input type=\"text\" value=\"\" id=\"password\" placeholder=\"Password\" />
                            
                            <input type=\"submit\" value=\"sıgn ın\" id=\"login-button\"/>
                        </form>
                        <a href=\"#\" class=\"close\">Close</a>
                    </div>
                </div>



                <!-- Scripts -->
\t\t\t\t<script src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/js/jquery-1.7.1.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/js/jquery.flexslider-min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/js/jquery.elastislide.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/js/jquery.carouFredSel-6.0.4-packed.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/js/jcarousellite_1.0.1.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/js/jquery.zweatherfeed.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/js/jquery.simpleWeather-2.3.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/js/jquery.cycle.all.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/js/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/js/jquery.tinyscrollbar.min.js"), "html", null, true);
        echo "\"></script>
                <script>
                    function goToByScroll(id){
                        \$ = jQuery;
                        \$('html,body').animate({scrollTop: \$(\"#\"+id).offset().top},3000);
                    }
                </script>
                <script type=\"text/javascript\">
                    \$(document).ready(function(){
                        \$('.scrollbar1').tinyscrollbar();
                    });
                </script>
                <script src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/js/custom.js"), "html", null, true);
        echo "\"></script>\t\t
\t\t</body>

</html>";
    }

    // line 178
    public function block_contains($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "VoyageBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  398 => 178,  390 => 306,  375 => 294,  371 => 293,  367 => 292,  363 => 291,  359 => 290,  355 => 289,  351 => 288,  347 => 287,  343 => 286,  339 => 285,  335 => 284,  331 => 283,  327 => 282,  237 => 195,  219 => 179,  217 => 178,  108 => 72,  56 => 23,  50 => 20,  46 => 19,  42 => 18,  38 => 17,  20 => 1,  357 => 304,  345 => 295,  296 => 249,  268 => 224,  239 => 198,  210 => 172,  181 => 146,  53 => 21,  41 => 12,  31 => 4,  28 => 3,);
    }
}
