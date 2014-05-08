<?php

/* VoyageBundle:Default:index.html.twig */
class __TwigTemplate_52e9645179559cf1b858ee2bdfea4f9a4976827992a564dcd51569d4c6eb65e1 extends Twig_Template
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

<div class=contains>

                <!-- Slider -->
\t\t\t\t<div class=\"flexslider\">
                \t<ul class=\"slides\">
                        <li>
                          <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/USA_Street_Chicago.png"), "html", null, true);
        echo "\" alt=\"Slider Image\">
                          <div class=\"detail-one\">
                            <h3>USA</h3>
                            <h2>Chicago Night street</h2>
                           \t<span>\$ 2.400</span>
                          \t<a href=\"#\"></a> \t
                          </div>
                        </li>
                        <li>
                          <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/Brazil-citybeach.png"), "html", null, true);
        echo "\" alt=\"Slider Image\">
                          <div class=\"detail-one\">
                            <h3>Brazil</h3>
                            <h2>Brazil Night City Beach</h2>
                           \t<span>\$ 1.400</span>
                          \t<a href=\"#\"></a> \t
                          </div>
                        </li>
                    </ul>
                    
                    
                    <!-- Reservation box -->
                    <div id=\"accordion\">

                      <h3> <span class=\"flight\">Flights</span> <a href=\"#\"></a> </h3>
                      <div class=\"detail\">
                         <form action=\"#\" method=\"post\">
                            <div class=\"trip\">
                                <input type=\"radio\" name=\"trip\" value=\"Round-trip\"><span>Roud-Trip</span>
                                <input type=\"radio\" name=\"trip\" value=\"onw-way\"><span>One-way</span>
                            </div>

                            <div class=\"location clearfix\">
                                <div class=\"pull-left\">
                                    <label>Your Locatıon</label>
                                    <input type=\"input\" name=\"Location\" value=\"England\">
                                </div>
                                <div class=\"pull-right\">
                                    <label class=\"dst\">Destination</label>
                                    <input type=\"text\" name=\"Destination\" value=\"Turkey\">
                                </div>
                            </div>

                            <div class=\"location clearfix\">

                                <div class=\"pull-left\">
                                    <div class=\"date clearfix\">
                                        <div class=\"Depart-Date\">
                                            <label>Depart Date</label>
                                            <input type=\"text\" name=\"Location\" value=\"30.01.2013\" id=\"datepicker\">
                                        </div>
                                        <div>
                                            <label>Return Date</label>
                                            <input type=\"text\" name=\"Location\" value=\"30.01.2013\" id=\"clender\">
                                        </div>
                                    </div>
                                </div>
                                <div class=\"pull-right\">
                                    <div class=\"persons\">
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

                            <div class=\"search\">
                                <input type=\"submit\" name=\"search\" value=\"SEARCH\" >
                            </div>
                        </form>
                      </div>
                      
                      <h3> <span class=\"hotel\">Hotel</span> <a href=\"#\"></a></h3>
                      <div class=\"detail\">
                         <form action=\"#\" method=\"post\">
                            <div class=\"trip\">
                                <input type=\"radio\" name=\"trip\" value=\"Round-trip\"><span>Roud-Trip</span>
                                <input type=\"radio\" name=\"trip\" value=\"onw-way\"><span>One-way</span>
                            </div>
                         </form>
                      </div>

                      <h3> <span class=\"car\">CAR</span> <a href=\"#\"></a></h3>
                      <div class=\"detail\">
                         <form action=\"#\" method=\"post\">
                            <div class=\"trip\">
                                <input type=\"radio\" name=\"trip\" value=\"Round-trip\"><span>Roud-Trip</span>
                                <input type=\"radio\" name=\"trip\" value=\"onw-way\"><span>One-way</span>
                            </div>
                         </form>
                      </div>
                      <h3> <span class=\"vacation\">Vacation</span> <a href=\"#\"></a></h3>
                      <div class=\"detail\">
                         <form action=\"#\" method=\"post\">
                            <div class=\"trip\">
                                <input type=\"radio\" name=\"trip\" value=\"Round-trip\"><span>Roud-Trip</span>
                                <input type=\"radio\" name=\"trip\" value=\"onw-way\"><span>One-way</span>
                            </div>
                         </form>
                      </div>
                   </div>
                    <!-- Reservation box -->
                    
                </div>
                <!-- Slider -->

                <!-- Special Offer -->
               \t<div class=\"specialoffer-wrapper\">
                \t<div class=\"container\">
                    \t
                        <!-- Heading -->
                        <div class=\"row\">
                        \t<div class=\"span12\">
                            \t<div class=\"heading\">
                                \t<h2>special <span>offer</span></h2>
                                </div>
                            </div>
                        </div>
                        <!-- Heading -->
                         
                        <div class=\"row offer-sec\">
                        <ul class=\"elastislide-list clearfix\" id=\"carousel\">

                            <li class=\"span3\">
                            \t<div class=\"offer\">
                                \t<figure>
                                \t\t<img src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/offerpic-1.png"), "html", null, true);
        echo "\"  alt=\"Offer Image\">
                                \t\t<div class=\"overlay\">
                                \t\t\t<a href=\"#\" class=\"like\"></a>
                                \t\t</div>
                                    </figure>
                                    <article>
                                    \t<h3>Blue beach</h3>
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
                                    \t<h3>138\$</h3>
                                        <a href=\"#\"></a>
                                    </div>
                                </div>
                            </li>
                            
                            <li class=\"span3\">
                            \t<div class=\"offer\">
                                \t<figure>
                                \t\t<img src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/offerpic-2.png"), "html", null, true);
        echo "\"  alt=\"Offer Image\">
                                \t\t<div class=\"overlay\">
                                \t\t\t<a href=\"#\" class=\"like\"></a>
                                \t\t</div>
                                    </figure>
                                    <article>
                                    \t<h3>Blue heaven</h3>
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
                                    \t<h3>138\$</h3>
                                        <a href=\"#\"></a>
                                    </div>
                                </div>
                            </li> 
                            
                             <li class=\"span3\">
                            \t<div class=\"offer\">
                                \t<figure>
                                \t\t<img src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/offerpic-3.png"), "html", null, true);
        echo "\"  alt=\"Offer Image\">
                                \t\t<div class=\"overlay\">
                                \t\t\t<a href=\"#\" class=\"like\"></a>
                                \t\t</div>
                                    </figure>
                                    <article>
                                    \t<h3>Venice Canal</h3>
                                        <h4>italy</h4>
                                        <p><a href=\"#\" class=\"active\"></a>
                                            <a href=\"#\" class=\"active\"></a>
                                            <a href=\"#\" class=\"active\"></a>
                                            <a href=\"#\"></a>
                                            <a href=\"#\"></a>
                                        </p>
                                        <span>Read 8 Reviews</span>
                                    </article>
                                    <div class=\"price\">
                                    \t<h3>138\$</h3>
                                        <a href=\"#\"></a>
                                    </div>
                                </div>
                            </li>
                            
                             <li class=\"span3\">
                            \t<div class=\"offer\">
                                \t<figure>
                                \t\t<img src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/offerpic-4.png"), "html", null, true);
        echo "\"  alt=\"Offer Image\">
                                \t\t<div class=\"overlay\">
                                        \t<a href=\"#\" class=\"like\"></a>
                                        </div>
                                    </figure>
                                    <article>
                                    \t<h3>Monte Rosa</h3>
                                        <h4>italy</h4>
                                        <p><a href=\"#\" class=\"active\"></a>
                                            <a href=\"#\" class=\"active\"></a>
                                            <a href=\"#\" class=\"active\"></a>
                                            <a href=\"#\"></a>
                                            <a href=\"#\"></a>
                                        </p>
                                        <span>Read 8 Reviews</span>
                                    </article>
                                    <div class=\"price\">
                                    \t<h3>138\$</h3>
                                        <a href=\"#\"></a>
                                    </div>
                                </div>
                            </li>
                            <li class=\"span3\">
                            \t<div class=\"offer\">
                                \t<figure>
                                \t\t<img src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/offerpic-4.png"), "html", null, true);
        echo "\"  alt=\"Offer Image\">
                                \t\t<div class=\"overlay\">
                                        \t<a href=\"#\" class=\"like\"></a>
                                        </div>
                                    </figure>
                                    <article>
                                    \t<h3>Monte Rosa</h3>
                                        <h4>italy</h4>
                                        <p><a href=\"#\" class=\"active\"></a>
                                            <a href=\"#\" class=\"active\"></a>
                                            <a href=\"#\" class=\"active\"></a>
                                            <a href=\"#\"></a>
                                            <a href=\"#\"></a>
                                        </p>
                                        <span>Read 8 Reviews</span>
                                    </article>
                                    <div class=\"price\">
                                    \t<h3>138\$</h3>
                                        <a href=\"#\"></a>
                                    </div>
                                </div>
                            </li> 
                            
                        </ul>
                        <div class=\"crousal-btn\">
                        \t<a href=\"#\" class=\"prev\"></a>
                            <a href=\"#\" class=\"next\"></a>
                        </div>

                    </div>
                
                \t</div>
                </div>
                <!-- Special Offer -->
                
              
</div>

";
    }

    public function getTemplateName()
    {
        return "VoyageBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 249,  268 => 224,  239 => 198,  210 => 172,  181 => 146,  53 => 21,  41 => 12,  31 => 4,  28 => 3,);
    }
}
