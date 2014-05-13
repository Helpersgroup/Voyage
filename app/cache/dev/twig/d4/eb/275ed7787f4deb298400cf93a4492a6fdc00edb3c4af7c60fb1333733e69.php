<?php

/* VoyageBundle::layout.html.twig */
class __TwigTemplate_d4eb275ed7787f4deb298400cf93a4492a6fdc00edb3c4af7c60fb1333733e69 extends Twig_Template
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
        <script type=\"text/javascript\">

      window.fbAsyncInit = function() {
    FB.init({
        appId   : 'YOUR_APP_ID',
        oauth   : true,
        status  : true, // check login status
        cookie  : true, // enable cookies to allow the server to access the session
        xfbml   : true // parse XFBML
    });

  };

function fb_login(){
    FB.login(function(response) {

        if (response.authResponse) {
            console.log('Welcome!  Fetching your information.... ');
            //console.log(response); // dump complete info
            access_token = response.authResponse.accessToken; //get access token
            user_id = response.authResponse.userID; //get FB UID

            FB.api('/me', function(response) {
                user_email = response.email; //get user email
          // you can store this data into your database             
            });

        } else {
            //user hit cancel button
            console.log('User cancelled login or did not fully authorize.');

        }
    }, {
        scope: 'publish_stream,email'
    });
}
(function() {
    var e = document.createElement('script');
    e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
    e.async = true;
    document.getElementById('fb-root').appendChild(e);
}());
</script>
                <!-- META TAGS -->
                <meta charset=\"UTF-8\" />
                <meta name=\"viewport\" content=\"width=device-width\" />
                
                <!-- Title -->
                <title>Voyage à la Carte</title>
                
               <link rel=\"stylesheet\" href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/css/bootstrap.css"), "html", null, true);
        echo "\">
                <link rel=\"stylesheet\" href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/css/style.css"), "html", null, true);
        echo "\">
                <link rel=\"stylesheet\" href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/css/responsive.css"), "html", null, true);
        echo "\">
                <link rel=\"stylesheet\" href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/css/flexslider.css"), "html", null, true);
        echo "\">
                
               <!-- favicon -->
                <link rel=\"shortcut icon\" href=\"";
        // line 66
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
        // line 83
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
                                <form class=\"serch\" action=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("recherche");
        echo "\" method=POST >
                                    <input type=\"text\" placeholder=\"search\" name=\"search\" />
                                    <input type=\"submit\" value=\"\" onkeyup=\"\"/>
                                </form>
                            </div>
                            <!--top Menu -->

                            <div class=\"span3 login_btn\">
                                <div class=\"lan\">
                                    <p><a href=\"#\">En</a><span>|</span><a href=\"#\">Fr</a></p>
                                </div>
                                <div class=\"btns\">
                                     <a href=\"";
        // line 111
        echo $this->env->getExtension('routing')->getPath("voyage_homepage");
        echo "logout\" id=\"login-link\">logout</a>
                                   
                                    <a href=\"";
        // line 113
        echo $this->env->getExtension('routing')->getPath("voyage_homepage");
        echo "login\" id=\"login-link\">Login</a>
                                    <a href=\"";
        // line 114
        echo $this->env->getExtension('routing')->getPath("voyage_homepage");
        echo "register\" id=\"signon-link\">Inscription</a>
                                </div>
";
        // line 116
        echo $this->env->getExtension('facebook')->renderInitialize(array("xfbml" => true, "fbAsyncInit" => "onFbInit();"));
        echo "
       ";
        // line 117
        echo $this->env->getExtension('facebook')->renderLoginButton();
        echo "
                                        <div class=\"social-nav\">
                                            <a href=\"#\" class=\"facebook\"  onclick=\"fb_login();\"y></a>
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
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
  
                
             <script type=\"application/x-javascript\"> 
\t\t addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
\t\t</script>
\t\t <!--hatha ili bih il feyda fil design --> <link rel=\"stylesheet\" href=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/css2/style.css"), "html", null, true);
        echo "\">
\t\t<!-- hatha  mta3 il login --> <script type=\"text/javascript\" src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/js/login.js"), "html", null, true);
        echo "\"></script>
\t\t 
\t                 
                                        
                                        
                                        
                                        
                <div class=\"nav-wrapper nav-two\" id=\"fixed\" >
                    <div class=\"container\" >

                                <nav class=\"nav frist-top-nav\"  >
                                    <ul>
                                        <li><a href=\"";
        // line 152
        echo $this->env->getExtension('routing')->getPath("voyage_homepage");
        echo "\">accueil </a>
                                          <!--  <ul class=\"clearfix\">
                                                <li><a href=\"index2.html\">Home 2</a></li>
                                                <li><a href=\"index3.html\">Home 3 </a></li>
                                            </ul>-->
                                        </li>
                                        
                                        <li><a href=\"";
        // line 159
        echo $this->env->getExtension('routing')->getPath("annonce");
        echo "\">Annonces</a>
                                            <ul class=\"clearfix\">
                                                <li><a href=\"";
        // line 161
        echo $this->env->getExtension('routing')->getPath("annonce_create");
        echo "\">Ajout Annonce</a>
                                                <li><a href=\"";
        // line 162
        echo $this->env->getExtension('routing')->getPath("annonce2");
        echo "\">List Annonce</a></li>
                                                <li><a href=\"";
        // line 163
        echo $this->env->getExtension('routing')->getPath("annonce_show", array("id" => 1));
        echo "\">Detail Annonce</a></li>
                                            </ul>
                                        </li>
                                        
                                   
                                        <li><a href=\"";
        // line 168
        echo $this->env->getExtension('routing')->getPath("annonce");
        echo "\">Reservation<label>2</label></a></li>
                                         <li><a href=\"";
        // line 169
        echo $this->env->getExtension('routing')->getPath("proposition");
        echo "\">Proposition<label>6</label></a></li>
                                        <li  class=\"last\"><a href=\"";
        // line 170
        echo $this->env->getExtension('routing')->getPath("voyage_contact");
        echo "\">Contact</a></li>
                                   
                                            
\t\t\t\t                    <div id=\"loginBox\" style=\"display: none;\">                
\t\t\t\t                      <form id=\"loginForm\">
\t\t\t\t                        <fieldset id=\"body\">
\t\t\t\t                            <div class=\"user-info\">
\t\t\t\t\t\t\t        \t\t\t<h4>Hello,<a href=\"#\"> admin</a></h4>
\t\t\t\t\t\t\t        \t\t\t<ul>
\t\t\t\t\t\t\t        \t\t\t\t<li class=\"profile active\"><a href=\"";
        // line 179
        echo $this->env->getExtension('routing')->getPath("profil");
        echo "\">Profile </a></li>
\t\t\t\t\t\t\t        \t\t\t\t<li class=\"logout\"><a href=\"#\"> Logout</a></li>
\t\t\t\t\t\t\t        \t\t\t\t<div class=\"clear\"></div>\t\t
\t\t\t\t\t\t\t        \t\t\t</ul>
\t\t\t\t\t\t\t    </div>\t\t\t                            
\t\t\t\t                        </fieldset>
\t\t\t\t                    </form>
\t\t\t\t                </div>
                                                
                                                        <ul class=\"menu profile_img\">
                                                            <li><a class=\"active-icon c1\" id=\"7ell\" href=\"";
        // line 189
        echo $this->env->getExtension('routing')->getPath("profil");
        echo "\" > <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/img/profile-pic.png"), "html", null, true);
        echo "\" /></a>
\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/supr.png"), "html", null, true);
        echo "\" alt=\"\" />Profile</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/start.png"), "html", null, true);
        echo "\" alt=\"\" />Favourites</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/gar.png"), "html", null, true);
        echo "\" alt=\"\" />Settings</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/logout.png"), "html", null, true);
        echo "\" alt=\"\" />Logout</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
                                         <a id=\"loginButton\" class=\"\"><span> admin </span></a>
                                                    
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
        // line 268
        $this->displayBlock('contains', $context, $blocks);
        // line 269
        echo "                
                
                
                
                
                
                
                
                
                
                <!-- Footer widget -->
                <div class=\"footer-widget-wrapper\">
                \t<div class=\"container\">
                    \t<div class=\"row\">
                        \t
                            <div class=\"span3 f-widget copy-right\">
                            \t<a href=\"#\" class=\"f-logo\"><img src=\"";
        // line 285
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
                
               <!-- <div class=\"login-popup-wrapper\">
                    <div id=\"login-popup\">
                         <a href=\"#\" class=\"close\">Close</a>
                    \t<h2>authentification</h2>
                        <form method=\"get\" action=\"#\">
                            <input type=\"text\" value=\"\" id=\"username\" placeholder=\"kimo@gmail.com\" />
                            <input type=\"text\" value=\"\" id=\"password\" placeholder=\"Password\" />
                            
                            <input type=\"submit\" value=\"sıgn ın\" id=\"login-button\"/>
                        </form>
                       
                    </div>
                </div>
                <div class=\"signon-popup-wrapper\">
                    <div id=\"signon-popup\">
                        <a href=\"#\" class=\"close2\">Close</a>
                    \t<h2>Inscription Client</h2>
                        <h5><a href=\"";
        // line 373
        echo $this->env->getExtension('routing')->getPath("inscription");
        echo "\">Vous etes un Agent </a></h5>
                        <form method=\"get\" action=\"#\">
                            <input type=\"text\" value=\"\" id=\"username\" placeholder=\"Nom\" />
                            <input type=\"email\" value=\"\" id=\"username\" placeholder=\"email@email.exemple\" />
                            
                            <input type=\"password\" value=\"\" id=\"password\" placeholder=\"Password\" />
                            <input type=\"password\" value=\"\" id=\"password\" placeholder=\"verif Password\" />
                            
                            <input type=\"submit\" value=\"S'inscrir\" id=\"login-button\"/>
                        </form>
                        
                    </div>
                </div>
                 -->



                <!-- Scripts -->
\t\t<script src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/js/jquery-1.7.1.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/js/jquery.flexslider-min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/js/jquery.elastislide.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/js/jquery.carouFredSel-6.0.4-packed.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/js/jcarousellite_1.0.1.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/js/jquery.zweatherfeed.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/js/jquery.simpleWeather-2.3.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/js/jquery.cycle.all.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/js/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/js/jquery.tinyscrollbar.min.js"), "html", null, true);
        echo "\"></script>
                <script>
                    function goToByScroll(id){
                        \$ = jQuery;
                        \$('html,body').animate({scrollTop: \$(\"#\"+id).offset().top},3000);
                    }
                </script>
                <script type=\"text/javascript\">

        var authurl = '";
        // line 412
        echo $this->env->getExtension('routing')->getPath("_security_check_facebook");
        echo "';

        function goLogIn(){
            window.location = authurl;
        }

        function onFbInit() {
            if (typeof(FB) != 'undefined' && FB != null ) {
                FB.Event.subscribe('auth.statusChange', function(response) {
                    setTimeout(goLogIn, 500);
                });
            }
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
        // line 443
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/js/custom.js"), "html", null, true);
        echo "\"></script>\t\t
\t\t</body>

</html>";
    }

    // line 268
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
        return array (  614 => 268,  606 => 443,  572 => 412,  560 => 403,  556 => 402,  552 => 401,  548 => 400,  544 => 399,  540 => 398,  536 => 397,  532 => 396,  528 => 395,  524 => 394,  520 => 393,  516 => 392,  512 => 391,  491 => 373,  400 => 285,  382 => 269,  380 => 268,  303 => 194,  299 => 193,  295 => 192,  291 => 191,  284 => 189,  271 => 179,  259 => 170,  255 => 169,  251 => 168,  243 => 163,  239 => 162,  235 => 161,  230 => 159,  220 => 152,  205 => 140,  201 => 139,  192 => 133,  173 => 117,  169 => 116,  164 => 114,  160 => 113,  155 => 111,  140 => 99,  119 => 83,  99 => 66,  93 => 63,  89 => 62,  85 => 61,  81 => 60,  20 => 1,);
    }
}
