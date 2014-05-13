<?php

/* FOSFacebookBundle::loginButton.html.twig */
class __TwigTemplate_d9aa3066a30306413e5b23a898a0f831a50f2f648d8f1bfee1790b0c68267eed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"fb-login-button\" data-show-faces=\"";
        echo twig_escape_filter($this->env, (isset($context["showFaces"]) ? $context["showFaces"] : $this->getContext($context, "showFaces")), "html", null, true);
        echo "\" data-size=\"";
        echo twig_escape_filter($this->env, (isset($context["size"]) ? $context["size"] : $this->getContext($context, "size")), "html", null, true);
        echo "\" data-scope=\"";
        echo twig_escape_filter($this->env, (isset($context["scope"]) ? $context["scope"] : $this->getContext($context, "scope")), "html", null, true);
        echo "\" data-autologoutlink=\"";
        echo twig_escape_filter($this->env, (isset($context["autologoutlink"]) ? $context["autologoutlink"] : $this->getContext($context, "autologoutlink")), "html", null, true);
        echo "\" data-width=\"";
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")), "html", null, true);
        echo "\" data-max-rows=\"";
        echo twig_escape_filter($this->env, (isset($context["maxRows"]) ? $context["maxRows"] : $this->getContext($context, "maxRows")), "html", null, true);
        echo "\"  data-onlogin=\"";
        echo twig_escape_filter($this->env, (isset($context["onlogin"]) ? $context["onlogin"] : $this->getContext($context, "onlogin")), "html", null, true);
        echo "\">
  ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSFacebookBundle::loginButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 2,  65 => 24,  57 => 18,  48 => 13,  41 => 11,  37 => 9,  35 => 8,  32 => 6,  27 => 4,  24 => 3,  22 => 2,  19 => 1,  571 => 225,  563 => 400,  529 => 369,  517 => 360,  513 => 359,  509 => 358,  505 => 357,  501 => 356,  497 => 355,  493 => 354,  489 => 353,  485 => 352,  481 => 351,  477 => 350,  473 => 349,  469 => 348,  448 => 330,  357 => 242,  339 => 226,  337 => 225,  260 => 151,  256 => 150,  252 => 149,  248 => 148,  241 => 146,  228 => 136,  216 => 127,  212 => 126,  208 => 125,  200 => 120,  196 => 119,  192 => 118,  187 => 116,  177 => 109,  162 => 97,  158 => 96,  149 => 90,  130 => 74,  126 => 73,  121 => 71,  117 => 70,  112 => 68,  97 => 56,  76 => 40,  56 => 23,  50 => 20,  46 => 12,  42 => 18,  38 => 17,  20 => 1,);
    }
}
