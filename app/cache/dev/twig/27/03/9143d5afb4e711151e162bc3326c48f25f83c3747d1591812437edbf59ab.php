<?php

/* VoyageBundle:users:inscription.html.twig */
class __TwigTemplate_27039143d5afb4e711151e162bc3326c48f25f83c3747d1591812437edbf59ab extends Twig_Template
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
  
\t


<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/css2/st.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />

<br> <br>

<div class=\"payment-prices\">
\t\t\t\t<div class=\"payment-online-product-filter\">
\t\t\t\t\t<div class=\"payment-online-form-left\">
\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t<h4><span class=\"shipping\"> </span>Inscription</h4>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><input class=\"text-box-dark\" type=\"text\" value=\"Frist Name\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Frist Name';}\"></li>
\t\t\t\t\t\t\t\t<li><input class=\"text-box-dark\" type=\"text\" value=\"Last Name\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Last Name';}\"></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><input class=\"text-box-dark\" type=\"text\" value=\"Email\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Email';}\"></li>
\t\t\t\t\t\t\t\t<li><input class=\"text-box-dark\" type=\"text\" value=\"Company Name\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Company Name';}\"></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><input class=\"text-box-dark\" type=\"text\" value=\"Phone\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Phone';}\"></li>
\t\t\t\t\t\t\t\t<li><input class=\"text-box-dark\" type=\"text\" value=\"Address\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Address';}\"></li>
\t\t\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t\t<ul class=\"payment-type\">
\t\t\t\t\t\t\t<h4><span class=\"payment\"> </span> Agence</h4>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><input class=\"text-box-dark\" type=\"text\" value=\"Card Number\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Card Number';}\"></li>
\t\t\t\t\t\t\t\t<li><input class=\"text-box-dark\" type=\"text\" value=\"Name on card\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Name on card';}\"></li>
\t\t\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><input class=\"text-box-light\" type=\"text\" id=\"datepicker\" value=\"Expiration Date\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Expiration Date';}\"><em class=\"pay-date\"> </em></li>
\t\t\t\t\t\t\t\t<li><input class=\"text-box-dark\" type=\"text\" value=\"Security Code\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Security Code';}\"></li>
\t\t\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul class=\"payment-sendbtns\">
\t\t\t\t\t\t\t\t<li><input type=\"reset\" value=\"Cancel\" /></li>
\t\t\t\t\t\t\t\t<li><input type=\"submit\" value=\"Process order\" /></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t
 ";
    }

    public function getTemplateName()
    {
        return "VoyageBundle:users:inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 9,  31 => 4,  28 => 3,);
    }
}
