<?php

/* VoyageBundle:Default:confirmReservation.html.twig */
class __TwigTemplate_d06572b62c52d6b32ee2978dd1eeeedcd07ceef626b9330625fb1a816c2e85bb extends Twig_Template
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
  
\t\t\t
                <!-- Crum -->
                <div class=\"crum-wrapper\">
                \t<div class=\"container\">
                    \t<div class=\"row\">
                        \t<div class=\"span12\">
                            \t<a href=\"#\">Home</a>
                                <span class=\"crum\">Confirm</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Crum-->


                
                <!-- Grid page -->
                <div class=\"content booking_wrap\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"span12 booking confrm clearfix\">
                                <div class=\"top\">
                                    <h3><span>Merci ,</span> Votre reservation est presque compléte!</h3>
                                    <h4>Votre code de confirmation est  <span>996746</span></h4>
                                </div>

                                <div class=\"bottom clearfix\">
                                    <div class=\"span6 booking_form\">
                                        <div class=\"row\">
                                            <div class=\"span5 form\">
                                                <h2>Information du Voyage</h2>
                                                <h3>Informations du Client</h3>
                                                <ul>
                                                    <li><span>Nom:</span>Kavin</li>
                                                    <li><span>Prenom:</span>Hieu</li>
                                                    <li><span>e-Mail:</span>Kavinhieu@gmail.com</li>
                                                </ul>
                                                <h3>Payment</h3>
                                                <p>Lorem ipsum venenatis donec sociosqu porta tempor, aptent augue leo dictum nam, senectus dapibus potenti metus velit litora sollicitudin pulvinar pharetra taciti aenean nunc aenean, feugiat scelerisque leo duis netus consequat</p>
                                                <h3>special request</h3>
                                                <p>Lorem ipsum venenatis donec sociosqu porta tempor, aptent augue leo dictum nam, senectus dapibus potenti metus velit litora sollicitudin pulvinar </p>

                                                <div class=\"total\">
                                                    <p>
                                                        <label>Grand Total:</label>
                                                        <span>138<small>\$</small></span>
                                                    </p>
                                                    <a href=\"#\">reservation</a>
                                                    <a href=\"#\">print recept</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"span5\">
                                        <div class=\"row\">
                                            <div class=\"span1\"></div>
                                            <div class=\"span4\">
                                                <div class=\"summery\">
                                                    <h2>Hotel Sammary</h2>

                                                    <div class=\"top\">
                                                        <h2>Kavin hotel</h2>
                                                        <h3>Greece</h3>
                                                        <div class=\"stars\">
                                                            <a href=\"#\" class=\"active\"></a>
                                                            <a href=\"#\" class=\"active\"></a>
                                                            <a href=\"#\" class=\"active\"></a>
                                                            <a href=\"#\"></a>
                                                            <a href=\"#\"></a>
                                                        </div>
                                                    </div>

                                                    <h3>Summary</h3>
                                                    <ul>
                                                        <li><span>Room:</span>Single Room</li>
                                                        <li><span>Price p night:</span>138\$</li>
                                                        <li><span>Check in:</span>15 / Feb / 2113</li>
                                                        <li><span>Check out:</span>16 / Feb / 2113</li>
                                                    </ul>

                                                    <h3>Charges</h3>
                                                    <ul>
                                                        <li><span>2 Night:</span>Single Room</li>
                                                        <li><span>VAT:</span>138\$</li>
                                                        <li><span>Fees:</span>15 / Feb / 2113</li>
                                                        <li><span>Total:</span>16 / Feb / 2113</li>
                                                    </ul>
                                                </div>
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
        return "VoyageBundle:Default:confirmReservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
