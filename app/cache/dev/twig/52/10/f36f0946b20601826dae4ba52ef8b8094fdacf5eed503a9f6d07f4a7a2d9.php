<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5210f36f0946b20601826dae4ba52ef8b8094fdacf5eed503a9f6d07f4a7a2d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  54 => 11,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  327 => 165,  319 => 162,  313 => 160,  306 => 157,  304 => 156,  298 => 153,  292 => 150,  286 => 147,  279 => 143,  273 => 140,  269 => 138,  265 => 137,  234 => 108,  223 => 103,  198 => 81,  194 => 80,  187 => 75,  183 => 74,  181 => 73,  173 => 72,  170 => 71,  168 => 70,  165 => 69,  163 => 68,  160 => 67,  155 => 66,  149 => 65,  146 => 64,  144 => 63,  141 => 62,  139 => 61,  136 => 60,  131 => 59,  125 => 58,  121 => 56,  119 => 55,  116 => 54,  113 => 53,  109 => 52,  106 => 51,  100 => 50,  97 => 49,  95 => 48,  92 => 47,  90 => 46,  87 => 45,  82 => 44,  80 => 43,  74 => 42,  61 => 32,  31 => 4,  28 => 3,);
    }
}
