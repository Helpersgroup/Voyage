<?php

/* VoyageBundle:Annonce:edit.html.twig */
class __TwigTemplate_584d93cf89d68229d1aeaa6d3896c2b7387ce2e11cd8e0692452e426f2c3a271 extends Twig_Template
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
  

\t\t\t\t<!-- Crum -->
                <div class=\"crum-wrapper\">
                \t<div class=\"container\">
                    \t<div class=\"row\">
                        \t<div class=\"span12\">
                            \t<a href=\"#\">Accueil</a>
                                <span class=\"crum\">Booking</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Crum-->

                
                <!-- Grid page -->
                <div class=\"content booking_wrap\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"span12 booking clearfix\">
                                <div class=\"top\">
                                    <h2>Ajouter Annonce</h2>
                                    <h3>!!!!!!!</h3>
                                    <div class=\"stars\">
                                        <a href=\"#\" class=\"active\"></a>
                                        <a href=\"#\" class=\"active\"></a>
                                        <a href=\"#\" class=\"active\"></a>
                                        <a href=\"#\"></a>
                                        <a href=\"#\"></a>
                                    </div>
                                </div>

                                <div class=\"bottom clearfix\">
                                    <div class=\"span6 booking_form\">
                                        <div class=\"row\">
                                            <div class=\"span5 form\">
                                                <h2>Information sur le voyage</h2>
                                                <form>
                                                    <h3>Traveller Infomation</h3>
                                                    <div class=\"clearfix\"></div>
                                                    <label>First Name: </label>
                                                    <input type=\"text\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom"), "html", null, true);
        echo "\" />
                                                    <label>Last Name: </label>
                                                    <input type=\"text\"/>
                                                    <label>Your Name: </label>
                                                    <input type=\"text\"/>

                                                    <h3>Credit cart infomation</h3>
                                                    <label>Name on Card: </label>
                                                    <input type=\"text\"/>
                                                    <label>Card Number: </label>
                                                    <input type=\"text\"/>
                                                    <label>Your Email: </label>
                                                    <input type=\"text\"/>

                                                    <fieldset>
                                                        <label>Expiration Date: </label>
                                                        <input type=\"text\"/>
                                                        <input type=\"text\"/>
                                                    </fieldset>

                                                    <fieldset>
                                                        <label>Security Code: </label>
                                                        <input type=\"text\"/>
                                                    </fieldset>

                                                    <h3>Credit cart infomation</h3>
                                                    <div class=\"cards\">
                                                        <a href=\"#\"></a>
                                                        <a href=\"#\"></a>
                                                        <a href=\"#\"></a>
                                                        <a href=\"#\"></a>
                                                    </div>
                                                    <label>Country: </label>
                                                    <input type=\"text\"/>
                                                    <label>City: </label>
                                                    <input type=\"text\"/>
                                                    <label>Address: </label>
                                                    <input type=\"text\"/>

                                                    <fieldset>
                                                        <label>State </label>
                                                        <input type=\"text\"/>
                                                    </fieldset>

                                                    <fieldset>
                                                        <label>Zip Code: </label>
                                                        <input type=\"text\"/>
                                                    </fieldset>
                                                     <div class=\"summery\">
                                                    <form>
                                                        <input type=\"checkbox\"/>
                                                        <p>I agree to theconditions.</p>
                                                        <div class=\"clearfix\"></div>
                                                        <label>Grand Total:</label>
                                                        <span>138<small>\$</small></span>
                                                        <div class=\"clearfix\"></div>
                                                        <input type=\"submit\" value=\"Ajouter\"/>
                                                    </form>
                                                             </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"span5\">
                                        <div class=\"row\">
                                            <div class=\"span1\"></div>
                                            <div class=\"span4\">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


    ";
    }

    public function getTemplateName()
    {
        return "VoyageBundle:Annonce:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 47,  31 => 4,  28 => 3,);
    }
}
