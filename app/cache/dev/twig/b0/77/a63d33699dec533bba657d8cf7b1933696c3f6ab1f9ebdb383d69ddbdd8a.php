<?php

/* VoyageBundle:Default:index.html.twig */
class __TwigTemplate_b077a63d33699dec533bba657d8cf7b1933696c3f6ab1f9ebdb383d69ddbdd8a extends Twig_Template
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
                            
                            
                            
                         ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) ? $context["annonces"] : $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            echo "    
                        <li>
                          <img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/USA_Street_Chicago.png"), "html", null, true);
            echo "\" alt=\"Slider Image\">
                          <div class=\"detail-one\">
                            <h3>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "nom"), "html", null, true);
            echo "</h3>
                            <h2>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "Destination"), "html", null, true);
            echo "</h2>
                           \t<span>\$ ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "prix"), "html", null, true);
            echo "</span>
                          \t<a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annonce_show", array("id" => $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "idAnnonce"))), "html", null, true);
            echo "\"></a> \t
                          </div>
                        </li>
                       
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                    </ul>
                    
                    
                   
                                        
                                        
                                        <!-- Reservation box -->
                    <div id=\"accordion\">

                      <h3> <span class=\"flight\">Voyage</span> <a href=\"#\"></a> </h3>
                      <form method=\"post\" action=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("recherche2");
        echo "\">
                      <div class=\"detail\">
                         
                            

                            <div class=\"location clearfix\">
                                <div class=\"pull-left\">
                                    <label>Depart</label>
                                    <input type=\"text\" name=\"depart\" placeholder=\"Depart\">
                                </div>
                                <div class=\"pull-right\">
                                    <label class=\"dst\">Destination</label>
                                        <input type=\"text\" name=\"destination\" placeholder=\"Destination\">
                                </div>
                            </div>

                            <div class=\"location clearfix\">

                                <div class=\"pull-left\">
                                    <div class=\"date clearfix\">
                                        <div class=\"Depart-Date\">
                                            <label>Date Depart</label>
                                            <input type=\"text\" name=\"datedep\" value=\"30.01.2014\" id=\"datepicker\">
                                        </div>
                                        <div>
                                            <label>Date Retour</label>
                                            <input type=\"text\" name=\"datefin\" value=\"30.01.2014\" id=\"clender\">
                                        </div>
                                    </div>
                                </div>
                                <div class=\"pull-right\">
                                    <div class=\"persons\">
                                        <div class=\"ad\">
                                            <label>Prix</label>
                                            <input type=\"number\" name=\"prix\" value=\"100\" id=\"spinner\" min=0>
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                            </div>

                            
                      </div>
                      
                      <h3> <span class=\"hotel\">Hotel</span> <a href=\"#\"></a></h3>
                      <div class=\"detail\">
                            <div class=\"trip\">
                                <input type=\"radio\" name=\"trip\" value=\"Residance\"><span>Residance</span>
                                <input type=\"radio\" name=\"trip\" value=\"hotel\"><span>*</span>
                                <input type=\"radio\" name=\"trip\" value=\"hotel 2 *\"><span>2*</span>
                                <input type=\"radio\" name=\"trip\" value=\"hotel 3 *\"><span>3*</span>
                                <input type=\"radio\" name=\"trip\" value=\"hotel 4 *\"><span>4*</span>
                                <input type=\"radio\" name=\"trip\" value=\"hotel 5 *\"><span>5*</span>
                                <br>
                                <br>

                                    <label class=\"dst\">Hotel</label>
                                    <input type=\"text\" name=\"nomhotel\" placeholder=\"Nom Hotel\">
                            </div>
                      </div>

                      <div class=\"search\">
                                <input type=\"submit\" name=\"search\" value=\"SEARCH\" >
                            </div>
                      </form>
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
                                \t<h2>Offre <span>Special</span></h2>
                                </div>
                            </div>
                        </div>
                        <!-- Heading -->
                         
                        <div class=\"row offer-sec\">
                        <ul class=\"elastislide-list clearfix\" id=\"carousel\">
                ";
        // line 124
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) ? $context["annonces"] : $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            echo " 
                            <li class=\"span3\">
                            \t<div class=\"offer\">
                                \t<figure>
                                \t\t<img src=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/offerpic-1.png"), "html", null, true);
            echo "\"  alt=\"Offer Image\">
                                \t\t<div class=\"overlay\">
                                \t\t\t<a href=\"#\" class=\"like\"></a>
                                \t\t</div>
                                    </figure>
                                    <article>
                                    \t<h3>";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "nom"), "html", null, true);
            echo "</h3>
                                        <h4>";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "Destination"), "html", null, true);
            echo "</h4>
                                        <p><a href=\"#\" class=\"active\"></a>
                                            <a href=\"#\" class=\"active\"></a>
                                            <a href=\"#\" class=\"active\"></a>
                                            <a href=\"#\"></a>
                                            <a href=\"#\"></a>
                                        </p>
                                        <span>Read 8 Reviews</span>
                                    </article>
                                    <div class=\"price\">
                                    \t<h3>";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "prix"), "html", null, true);
            echo "\$</h3>
                                        <a href=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annonce_show", array("id" => $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "idAnnonce"))), "html", null, true);
            echo "\"></a>
                                    </div>
                                </div>
                            </li>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "  
                           
                            
                             
                            
                      
                           
                            
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
        return array (  231 => 150,  220 => 146,  216 => 145,  203 => 135,  199 => 134,  190 => 128,  181 => 124,  90 => 36,  78 => 26,  67 => 21,  63 => 20,  59 => 19,  55 => 18,  50 => 16,  43 => 14,  31 => 4,  28 => 3,);
    }
}
