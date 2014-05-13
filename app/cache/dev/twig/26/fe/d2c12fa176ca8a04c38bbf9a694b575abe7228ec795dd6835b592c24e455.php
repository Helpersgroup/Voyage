<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_26fed2c12fa176ca8a04c38bbf9a694b575abe7228ec795dd6835b592c24e455 extends Twig_Template
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
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : $this->getContext($context, "logs")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priorityName"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "message"), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  26 => 3,  55 => 13,  25 => 4,  21 => 2,  94 => 22,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  72 => 16,  68 => 14,  64 => 12,  56 => 9,  50 => 8,  41 => 9,  24 => 3,  201 => 92,  199 => 91,  196 => 90,  171 => 73,  166 => 71,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  133 => 55,  123 => 47,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  101 => 24,  91 => 31,  86 => 28,  69 => 25,  66 => 15,  62 => 23,  51 => 12,  49 => 19,  39 => 6,  19 => 1,  98 => 40,  93 => 9,  88 => 6,  78 => 40,  46 => 7,  44 => 10,  36 => 7,  32 => 12,  27 => 4,  22 => 2,  57 => 14,  54 => 21,  43 => 8,  40 => 8,  33 => 5,  30 => 3,  327 => 165,  319 => 162,  313 => 160,  306 => 157,  304 => 156,  298 => 153,  292 => 150,  286 => 147,  279 => 143,  273 => 140,  269 => 138,  265 => 137,  234 => 108,  223 => 103,  198 => 81,  194 => 80,  187 => 84,  183 => 82,  181 => 73,  173 => 74,  170 => 71,  168 => 72,  165 => 69,  163 => 70,  160 => 67,  155 => 66,  149 => 65,  146 => 64,  144 => 63,  141 => 62,  139 => 61,  136 => 56,  131 => 59,  125 => 58,  121 => 46,  119 => 55,  116 => 54,  113 => 53,  109 => 52,  106 => 51,  100 => 50,  97 => 49,  95 => 48,  92 => 21,  90 => 46,  87 => 20,  82 => 44,  80 => 19,  74 => 42,  61 => 32,  31 => 5,  28 => 3,);
    }
}
