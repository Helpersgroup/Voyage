<?php

/* FOSFacebookBundle::initialize.html.twig */
class __TwigTemplate_4d87902d27c8ea0462179119728728c168cebb3498715a0d127c510f5b57c308 extends Twig_Template
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
        return array (  65 => 24,  57 => 18,  48 => 13,  41 => 11,  37 => 9,  35 => 8,  32 => 6,  27 => 4,  24 => 3,  22 => 2,  19 => 1,  571 => 225,  563 => 400,  529 => 369,  517 => 360,  513 => 359,  509 => 358,  505 => 357,  501 => 356,  497 => 355,  493 => 354,  489 => 353,  485 => 352,  481 => 351,  477 => 350,  473 => 349,  469 => 348,  448 => 330,  357 => 242,  339 => 226,  337 => 225,  260 => 151,  256 => 150,  252 => 149,  248 => 148,  241 => 146,  228 => 136,  216 => 127,  212 => 126,  208 => 125,  200 => 120,  196 => 119,  192 => 118,  187 => 116,  177 => 109,  162 => 97,  158 => 96,  149 => 90,  130 => 74,  126 => 73,  121 => 71,  117 => 70,  112 => 68,  97 => 56,  76 => 40,  56 => 23,  50 => 20,  46 => 12,  42 => 18,  38 => 17,  20 => 1,);
    }
}
