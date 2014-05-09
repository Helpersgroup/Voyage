<?php

/* VoyageBundle::layout.html.twig */
class __TwigTemplate_52f3e37afa3f46274b875a291bd8516f0841b7911a5c44e78e8d40fc6556e5d1 extends Twig_Template
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
        
<head>
                <!-- META TAGS -->
                <meta charset=\"UTF-8\" />
                <meta name=\"viewport\" content=\"width=device-width\" />
                
                <!-- Title -->
                <title>Voyage à la Carte</title>
                
               <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/css/bootstrap.css"), "html", null, true);
        echo "\">
                <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/css/style.css"), "html", null, true);
        echo "\">
                <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/css/responsive.css"), "html", null, true);
        echo "\">
                <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/css/flexslider.css"), "html", null, true);
        echo "\">
                
               <!-- favicon -->
                <link rel=\"shortcut icon\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/favicon.png"), "html", null, true);
        echo "\">
                
                <!--[if lt IE 9]>
                        <script src=\"js/html5shiv.js\"></script>
                        <link rel=\"stylesheet\" href=\"css/ie.css\">
                <![endif]-->
        </head>
        <body>
                <!-- HEADER -->
                <div id=\"top\"></div>
                <div class=\"header-wrapper header_two\">
                    <div class=\"container\">
                        <div class=\"row\">

                            <!-- Logo -->
                            <div class=\"span2\">
                                <div class=\"logo\">
                                    <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("voyage_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\"></a>
                                </div>
                            </div>
                            <!-- Logo -->

                            <!--top Menu -->
                            <div class=\"span7\">
                                <div class=\"top-menu\">
                                    <ul>
                                        <li><a href=\"#\">Qui sommes nous ?</a></li>
                                        <li><a href=\"#\">Nouvelles</a></li>
                                        <li><a href=\"#\">Services</a></li>
                                        
                                        <li><a href=\"#\" class=\"last\">aide</a></li>
                                    </ul>
                                </div>
                                <form class=\"serch\">
                                    <input type=\"text\" placeholder=\"Search\"/>
                                    <input type=\"submit\" value=\"\"/>
                                </form>
                            </div>
                            <!--top Menu -->

                            <div class=\"span3 login_btn\">
                                <div class=\"lan\">
                                    <p><a href=\"#\">En</a><span>|</span><a href=\"#\">Fr</a></p>
                                </div>
                                <div class=\"btns\">
                                    <a href=\"#\" id=\"login-link\">Login</a>
                                    <a href=\"#\" id=\"signon-link\">Inscription</a>
                                </div>

                                        <div class=\"social-nav\">
                                            <a href=\"#\" class=\"facebook \"></a>
                                            <a href=\"#\" class=\"twitter\" ></a>
                                            <a href=\"#\" class=\"google\"></a>
                                            <a href=\"#\" class=\"rss\"></a>
                                        </div>

                            </div>

                        </div>
                    </div>
                </div>
                <!-- HEADER -->
                
                
                
                
                
                
                
                
                
              <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
  
                
             <script type=\"application/x-javascript\"> 
\t\t addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
\t\t</script>
\t\t <!--hatha ili bih il feyda fil design --> <link rel=\"stylesheet\" href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/css2/style.css"), "html", null, true);
        echo "\">
\t\t<!-- hatha  mta3 il login --> <script type=\"text/javascript\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/js/login.js"), "html", null, true);
        echo "\"></script>
\t\t 
\t                 
                                        
                                        
                                        
                                        
                <div class=\"nav-wrapper nav-two\" id=\"fixed\" >
                    <div class=\"container\" >

                                <nav class=\"nav frist-top-nav\"  >
                                    <ul>
                                        <li><a href=\"";
        // line 112
        echo $this->env->getExtension('routing')->getPath("voyage_homepage");
        echo "\">accueil <label>6</label></a>
                                          <!--  <ul class=\"clearfix\">
                                                <li><a href=\"index2.html\">Home 2</a></li>
                                                <li><a href=\"index3.html\">Home 3 </a></li>
                                            </ul>-->
                                        </li>
                                        
                                        <li><a href=\"";
        // line 119
        echo $this->env->getExtension('routing')->getPath("voyage_list_annonces");
        echo "\">Annonces</a>
                                            <ul class=\"clearfix\">
                                                <li><a href=\"";
        // line 121
        echo $this->env->getExtension('routing')->getPath("annonce_ajout");
        echo "\">Ajout Annonce</a>
                                                <li><a href=\"";
        // line 122
        echo $this->env->getExtension('routing')->getPath("voyage_list_annoncesl");
        echo "\">List Annonce</a></li>
                                                <li><a href=\"";
        // line 123
        echo $this->env->getExtension('routing')->getPath("voyage_details");
        echo "\">Detail Annonce</a></li>
                                            </ul>
                                        </li>
                                        
                                   
                                        <li><a href=\"";
        // line 128
        echo $this->env->getExtension('routing')->getPath("reservation");
        echo "\">Reservation</a></li>
                                         
                                        <li  class=\"last\"><a href=\"";
        // line 130
        echo $this->env->getExtension('routing')->getPath("voyage_contact");
        echo "\">Contact</a></li>
                                   
                                          <a id=\"loginButton\" class=\"\"><span>Me</span></a>   
\t\t\t\t                    <div id=\"loginBox\" style=\"display: none;\">                
\t\t\t\t                      <form id=\"loginForm\">
\t\t\t\t                        <fieldset id=\"body\">
\t\t\t\t                            <div class=\"user-info\">
\t\t\t\t\t\t\t        \t\t\t<h4>Hello,<a href=\"#\"> Username</a></h4>
\t\t\t\t\t\t\t        \t\t\t<ul>
\t\t\t\t\t\t\t        \t\t\t\t<li class=\"profile active\"><a href=\"#\">Profile </a></li>
\t\t\t\t\t\t\t        \t\t\t\t<li class=\"logout\"><a href=\"#\"> Logout</a></li>
\t\t\t\t\t\t\t        \t\t\t\t<div class=\"clear\"></div>\t\t
\t\t\t\t\t\t\t        \t\t\t</ul>
\t\t\t\t\t\t\t    </div>\t\t\t                            
\t\t\t\t                        </fieldset>
\t\t\t\t                    </form>
\t\t\t\t                </div>
\t\t\t\t            
                                                        <ul class=\"menu profile_img\">
                                                            <li><a class=\"active-icon c1\" id=\"7ell\" href=\"#\" > <img src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/profile-pic.png"), "html", null, true);
        echo "\" /></a>
\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/supr.png"), "html", null, true);
        echo "\" alt=\"\" />Profile</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/start.png"), "html", null, true);
        echo "\" alt=\"\" />Favourites</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/gar.png"), "html", null, true);
        echo "\" alt=\"\" />Settings</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/logout.png"), "html", null, true);
        echo "\" alt=\"\" />Logout</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
                                                    
                                         </ul>
                                </nav>

                                </div>       
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
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
                
                <!-- Main Navigation -->
                  
                
                
                
";
        // line 227
        $this->displayBlock('contains', $context, $blocks);
        // line 228
        echo "                
                
                
                
                
                
                
                
                
                
                <!-- Footer widget -->
                <div class=\"footer-widget-wrapper\">
                \t<div class=\"container\">
                    \t<div class=\"row\">
                        \t
                            <div class=\"span3 f-widget copy-right\">
                            \t<a href=\"#\" class=\"f-logo\"><img src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\"></a>
                            \t<p>© 2014 <a href=\"#\">Helpers-Team</a>. All rights reserved</p>
                            \t<p>Designed by Helpers</p>
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
                            \t\t<h4>Team Contact</h4>
                            \t\t<h2>00 216 95 215 234</h2>
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
                    \t<h2>authentification</h2>
                        <form method=\"get\" action=\"#\">
                            <input type=\"text\" value=\"\" id=\"username\" placeholder=\"kimo@gmail.com\" />
                            <input type=\"text\" value=\"\" id=\"password\" placeholder=\"Password\" />
                            
                            <input type=\"submit\" value=\"sıgn ın\" id=\"login-button\"/>
                        </form>
                        <a href=\"#\" class=\"close\">Close</a>
                    </div>
                </div>
                <div class=\"signon-popup-wrapper\">
                    <div id=\"signon-popup\">
                    \t<h2>Inscription</h2>
                        <form method=\"get\" action=\"#\">
                            <input type=\"text\" value=\"\" id=\"name\" placeholder=\"Nom\" />
                            <input type=\"email\" value=\"\" id=\"username\" placeholder=\"email@email.exemple\" />
                            
                            <input type=\"password\" value=\"\" id=\"password\" placeholder=\"Password\" />
                            <input type=\"password\" value=\"\" id=\"password\" placeholder=\"verif Password\" />
                            
                            <input type=\"submit\" value=\"s'inscrir\" id=\"login-button\"/>
                        </form>
                        <a href=\"#\" class=\"close2\">Close</a>
                    </div>
                </div>



                <!-- Scripts -->
\t\t<script src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/js/jquery-1.7.1.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/js/jquery.flexslider-min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/js/jquery.elastislide.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/js/jquery.carouFredSel-6.0.4-packed.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/js/jcarousellite_1.0.1.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/js/jquery.zweatherfeed.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/js/jquery.simpleWeather-2.3.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/js/jquery.cycle.all.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/js/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 358
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
                    
                    
                    
                    \$(window).scroll(function () {  
                        \$('#fixed').css({\"position\":\"fixed\", \"top\":\"160px\", \"left\":\"0px\", \"right\":\"0px\"});

                        if (\$(window).scrollTop() > 1)
                        {
                            \$('#fixed').css({\"position\":\"fixed\", \"top\":\"0px\", \"left\":\"0px\", \"right\":\"0px\"});
                        }
    });
                </script>
                <script src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/js/custom.js"), "html", null, true);
        echo "\"></script>\t\t
\t\t</body>

</html>";
    }

    // line 227
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
        return array (  520 => 227,  512 => 381,  486 => 358,  482 => 357,  478 => 356,  474 => 355,  470 => 354,  466 => 353,  462 => 352,  458 => 351,  454 => 350,  450 => 349,  446 => 348,  442 => 347,  438 => 346,  333 => 244,  315 => 228,  313 => 227,  237 => 154,  233 => 153,  229 => 152,  225 => 151,  220 => 149,  198 => 130,  193 => 128,  185 => 123,  181 => 122,  177 => 121,  172 => 119,  162 => 112,  147 => 100,  143 => 99,  134 => 93,  75 => 39,  55 => 22,  49 => 19,  45 => 18,  41 => 17,  37 => 16,  20 => 1,);
    }
}