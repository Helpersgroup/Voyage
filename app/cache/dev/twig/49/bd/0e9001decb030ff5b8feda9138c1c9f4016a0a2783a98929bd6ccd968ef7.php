<?php

/* VoyageBundle:Annonce:show.html.twig */
class __TwigTemplate_49bd0e9001decb030ff5b8feda9138c1c9f4016a0a2783a98929bd6ccd968ef7 extends Twig_Template
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


<head><script
src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false\">
</script>
    <script>
            function initialize()
            {
                var lat = document.getElementById('lat').value;
                var lon = document.getElementById('lon').value;
                var myCenter = new google.maps.LatLng(lat, lon);
                var mapProp = {
                    center: new google.maps.LatLng(lat, lon),
                    zoom: 14,
                    panControl: true,
                    zoomControl: true,
                    mapTypeControl: true,
                    scaleControl: true,
                    streetViewControl: true,
                    overviewMapControl: true,
                    rotateControl: true,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                var map = new google.maps.Map(document.getElementById(\"googleMap\")
                        , mapProp);



                marker = new google.maps.Marker({
                    position: myCenter,
                    animation: google.maps.Animation.BOUNCE
                });

                marker.setMap(map);

                google.maps.event.addListener(marker, 'click', function() {
                    map.setZoom(9);
                    map.setCenter(marker.getPosition());
                });
                var infowindow = new google.maps.InfoWindow({
                    content: \"Le Medecin à chercher!\"
                });

                google.maps.event.addListener(marker, 'click', function() {
                    infowindow.open(map, marker);
                });
            }
            google.maps.event.addDomListener(window, 'load', initialize);
  
        </script>
</head>




   



             
                           







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
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom"), "html", null, true);
        echo "</h4>
                                            <h5>";
        // line 98
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
        // line 113
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateDeb"), "Y-m-d"), "html", null, true);
        echo "\" id=\"datepicker\" readonly>
                                                    </div>
                                                    <div>
                                                        <label>Check Out</label>
                                                        <input type=\"text\" name=\"Location\" value=\"";
        // line 117
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateFin"), "Y-m-d"), "html", null, true);
        echo "\" id=\"clender\" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                            <div class=\"check_detail clearfix\" >
                                                <p class=\"first\">Chambre Simple <span id=p1>";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prix"), "html", null, true);
        echo "</span></p>
                                                <p class=\"two\">Double Room <span id=p2>";
        // line 124
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
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annonce_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idAnnonce"))), "html", null, true);
        echo ">
                                            <input type=\"submit\" name=\"search\" value=\"Modifier \" >
                                            </form>
                                                 </div>
                                                  <br>
                                                  <br>
                                                  <form action=";
        // line 163
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
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/crosal-img.png"), "html", null, true);
        echo "\" alt=\"\"/></span>
                                            <span id=\"image2\"><img src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/crosal-img2.png"), "html", null, true);
        echo "\" alt=\"\" /></span>
                                            <span id=\"image3\"><img src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/crosal-img3.png"), "html", null, true);
        echo "\" alt=\"\" /></span>
                                            <span id=\"image4\"><img src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/crosal-img4.png"), "html", null, true);
        echo "\" alt=\"\"/></span>
                                            <span id=\"image5\"><img src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/crosal-img5.png"), "html", null, true);
        echo "\" alt=\"\"/></span>
                                            <span id=\"image6\"><img src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/crosal-img6.png"), "html", null, true);
        echo "\" alt=\"\" /></span>
                                            <span id=\"image7\"><img src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/crosal-img7.png"), "html", null, true);
        echo "\" alt=\"\" /></span>
                                            <span id=\"image8\"><img src=\"";
        // line 187
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
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/crosal-img4.png"), "html", null, true);
        echo "\" alt=\"\" /></a>
                                                <a href=\"#image3\"><img src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/crosal-img3.png"), "html", null, true);
        echo "\" alt=\"\"/></a>
                                                <a href=\"#image5\"><img src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/crosal-img5.png"), "html", null, true);
        echo "\"  alt=\"\"/></a>
                                                <a href=\"#image6\"><img src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/crosal-img6.png"), "html", null, true);
        echo "\"  alt=\"\"/></a>
                                                <a href=\"#image7\"><img src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/crosal-img7.png"), "html", null, true);
        echo "\" alt=\"\"/></a>
                                                <a href=\"#image8\"><img src=\"";
        // line 201
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
                                        <li><a href=\"#tabs-4\" class=\"two\">Commentaire</a></li>
                                        <li><a href=\"#tabs-2\" class=\"three\">Details</a></li>
                                    </ul>
                                    <div id=\"tabs-1\" class=\"tab clearfix\" >
                                        <div class=\"detail clearfix\">
                                            <h2> Description</h2>
                                            <ul>
                                                <li>";
        // line 221
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description"), "html", null, true);
        echo "</li>

                                            </ul>

                                            <input id=\"lat\" name=\"lat\" type=\"hidden\" value=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "att"), "html", null, true);
        echo "\"/>
                            <input id=\"lon\" name=\"lon\" type=\"hidden\" value=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "long"), "html", null, true);
        echo "\"/>
           
                           
                            
                            <div id=\"googleMap\" style=\"width:650px;height:340px;\"></div>

                                        </div>
                                    </div>
                                    <div id=\"tabs-2\" class=\"tab clearfix\" >
                                        <div class=\"detail\">
                                           
                                             <h2>Transport</h2>
                                            <ul>
                                                <li>";
        // line 239
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "transport"), "html", null, true);
        echo "</li>
                                               
                                            </ul>
                                    <div id=\"tabs-3\" class=\"tab clearfix\" >
                                        <div class=\"detail\">
                                            <div class=\"map\">
                                                
                                            </div>

                                            <h2>Hotel Location</h2>
                                            <p> ";
        // line 249
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
                                                    <form action=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("add_comment", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idAnnonce"))), "html", null, true);
        echo "\" method=post >
                                                    <h2>Comment</h2>

                                                    <ul>
                                                        <li class=\"first\">Nom : </li>
                                                        <li><a href=\"#\" class=\"blue_star\">";
        // line 265
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
        echo "</a></li>
                                                        
                                                    </ul>

                                                    <ul>
                                                        <li class=\"first\">Message</li>
                                                        <textarea name=\"message\" id=\"comment\" cols=\"50%\" rows=\"10\" tabindex=\"4\"></textarea>
                                                    </ul>

                                                  

                                                    <ul class=\"last\">
                                                        <input name=\"submit\" type=\"submit\" id=\"submit\" tabindex=\"5\" value=\"Publiez le commentaire\">
                                                    </ul>
                                                    </form>
                                                </div>


                                                <div class=\"span4\">
                                                    <div class=\"hotdeal\">
                                                        <div class=\"deal-header\">
                                                            <h3>Comments</h3>
                                                        </div>

                                                        <div id=\"\">
                                                            <ul>
                                                                ";
        // line 291
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 292
            echo "                                                                <li>
                                                                    <figure class=\"pull-left\"><img src=\"";
            // line 293
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "logo")), "html", null, true);
            echo "\" alt=\"Pic\"></figure>
                                                                    <article class=\" clearfix\">
                                                                        <div class=\"hot pull-left\">
                                                                            <h5>";
            // line 296
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "nom"), "html", null, true);
            echo "</h5>
                                                                            <span>";
            // line 297
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "date"), "html", null, true);
            echo "</span>
                                                                            <p>";
            // line 298
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
        // line 303
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
        return array (  439 => 303,  428 => 298,  424 => 297,  420 => 296,  414 => 293,  411 => 292,  378 => 265,  370 => 260,  356 => 249,  343 => 239,  327 => 226,  323 => 225,  316 => 221,  293 => 201,  289 => 200,  281 => 198,  277 => 197,  261 => 187,  257 => 186,  253 => 185,  249 => 184,  245 => 183,  237 => 181,  213 => 163,  155 => 117,  148 => 113,  244 => 115,  233 => 180,  248 => 113,  231 => 105,  218 => 95,  205 => 88,  197 => 82,  191 => 80,  180 => 78,  178 => 77,  175 => 76,  170 => 74,  165 => 73,  146 => 67,  129 => 62,  126 => 97,  110 => 57,  100 => 53,  97 => 52,  90 => 50,  84 => 49,  70 => 38,  538 => 221,  530 => 379,  504 => 356,  500 => 355,  496 => 354,  492 => 353,  488 => 352,  484 => 351,  476 => 349,  472 => 348,  468 => 347,  464 => 346,  460 => 345,  456 => 344,  344 => 238,  326 => 222,  324 => 221,  239 => 145,  228 => 142,  215 => 132,  195 => 121,  174 => 112,  20 => 1,  76 => 47,  480 => 350,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 326,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 291,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 199,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 147,  241 => 182,  229 => 73,  220 => 70,  214 => 94,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 56,  61 => 13,  273 => 196,  269 => 94,  254 => 92,  243 => 146,  240 => 86,  238 => 85,  235 => 106,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 88,  204 => 157,  179 => 114,  159 => 72,  143 => 56,  135 => 65,  119 => 59,  102 => 54,  71 => 39,  67 => 38,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 39,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 79,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 71,  151 => 69,  142 => 59,  138 => 54,  136 => 86,  121 => 46,  117 => 44,  105 => 55,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 16,  22 => 2,  246 => 90,  157 => 56,  145 => 92,  139 => 45,  131 => 63,  123 => 60,  120 => 40,  115 => 68,  111 => 67,  108 => 36,  101 => 32,  98 => 31,  96 => 55,  83 => 25,  74 => 14,  66 => 37,  55 => 22,  52 => 21,  50 => 10,  43 => 8,  41 => 17,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 123,  199 => 122,  193 => 81,  189 => 71,  187 => 116,  182 => 66,  176 => 64,  173 => 75,  168 => 124,  164 => 123,  162 => 57,  154 => 70,  149 => 68,  147 => 58,  144 => 49,  141 => 66,  133 => 55,  130 => 98,  125 => 44,  122 => 43,  116 => 58,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 51,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 18,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
