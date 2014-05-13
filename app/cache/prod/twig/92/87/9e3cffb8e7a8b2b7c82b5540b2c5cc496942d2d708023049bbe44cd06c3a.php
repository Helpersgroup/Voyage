<?php

/* FOSFacebookBundle::initialize.html.twig */
class __TwigTemplate_92879e3cffb8e7a8b2b7c82b5540b2c5cc496942d2d708023049bbe44cd06c3a extends Twig_Template
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
        echo "<div id=\"fb-root\"></div>
";
        // line 2
        if ((!(isset($context["async"]) ? $context["async"] : $this->getContext($context, "async")))) {
            // line 3
            echo "
<script type=\"text/javascript\" src=\"http://connect.facebook.net/";
            // line 4
            echo twig_escape_filter($this->env, (isset($context["culture"]) ? $context["culture"] : $this->getContext($context, "culture")), "html", null, true);
            echo "/all.js\"></script>
";
        }
        // line 6
        echo "<script type=\"text/javascript\">
";
        // line 8
        if ((isset($context["async"]) ? $context["async"] : $this->getContext($context, "async"))) {
            // line 9
            echo "window.fbAsyncInit = function() {
";
        }
        // line 11
        echo "  FB.init(";
        echo twig_jsonencode_filter(array("appId" => (isset($context["appId"]) ? $context["appId"] : $this->getContext($context, "appId")), "xfbml" => (isset($context["xfbml"]) ? $context["xfbml"] : $this->getContext($context, "xfbml")), "oauth" => (isset($context["oauth"]) ? $context["oauth"] : $this->getContext($context, "oauth")), "status" => (isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "cookie" => (isset($context["cookie"]) ? $context["cookie"] : $this->getContext($context, "cookie")), "logging" => (isset($context["logging"]) ? $context["logging"] : $this->getContext($context, "logging")), "channelUrl" => (isset($context["channelUrl"]) ? $context["channelUrl"] : $this->getContext($context, "channelUrl"))));
        echo ");
";
        // line 12
        if ((isset($context["async"]) ? $context["async"] : $this->getContext($context, "async"))) {
            // line 13
            echo "  ";
            echo (isset($context["fbAsyncInit"]) ? $context["fbAsyncInit"] : $this->getContext($context, "fbAsyncInit"));
            echo "
};

(function() {
  var e = document.createElement('script');
  e.src = document.location.protocol + ";
            // line 18
            echo twig_jsonencode_filter(sprintf("//connect.facebook.net/%s/all.js", (isset($context["culture"]) ? $context["culture"] : $this->getContext($context, "culture"))));
            echo ";
  e.async = true;
  document.getElementById('fb-root').appendChild(e);
}());
";
        }
        // line 24
        echo "</script>
";
    }

    public function getTemplateName()
    {
        return "FOSFacebookBundle::initialize.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 24,  57 => 18,  48 => 13,  46 => 12,  41 => 11,  37 => 9,  35 => 8,  32 => 6,  27 => 4,  24 => 3,  22 => 2,  19 => 1,  643 => 287,  635 => 462,  601 => 431,  589 => 422,  585 => 421,  581 => 420,  577 => 419,  573 => 418,  569 => 417,  565 => 416,  561 => 415,  557 => 414,  553 => 413,  549 => 412,  545 => 411,  541 => 410,  520 => 392,  429 => 304,  411 => 288,  409 => 287,  336 => 217,  329 => 213,  325 => 212,  321 => 211,  317 => 210,  310 => 208,  297 => 198,  292 => 196,  281 => 188,  277 => 187,  273 => 186,  265 => 181,  261 => 180,  257 => 179,  252 => 177,  242 => 170,  227 => 158,  223 => 157,  214 => 151,  205 => 144,  191 => 133,  184 => 128,  170 => 117,  165 => 115,  161 => 114,  152 => 107,  150 => 106,  140 => 99,  119 => 83,  99 => 66,  93 => 63,  89 => 62,  85 => 61,  81 => 60,  20 => 1,  231 => 150,  220 => 146,  216 => 145,  203 => 135,  199 => 134,  190 => 128,  181 => 124,  90 => 36,  78 => 26,  67 => 21,  63 => 20,  59 => 19,  55 => 18,  50 => 16,  43 => 14,  31 => 4,  28 => 3,);
    }
}
