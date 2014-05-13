<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_c2092e3e8c30343130931b69bdb9bfab441c6feb18762444ea094cbe3a1e4275 extends Twig_Template
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
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace"))));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 14,  38 => 13,  35 => 4,  26 => 5,  55 => 13,  25 => 3,  21 => 2,  94 => 22,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  72 => 16,  68 => 14,  64 => 12,  56 => 9,  50 => 8,  41 => 9,  24 => 4,  201 => 92,  199 => 91,  196 => 90,  171 => 73,  166 => 71,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  133 => 55,  123 => 47,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  101 => 24,  91 => 31,  86 => 28,  69 => 25,  66 => 15,  62 => 23,  51 => 15,  49 => 19,  39 => 6,  19 => 1,  98 => 40,  93 => 9,  88 => 6,  78 => 40,  46 => 7,  44 => 10,  36 => 7,  32 => 12,  27 => 4,  22 => 2,  57 => 16,  54 => 21,  43 => 8,  40 => 8,  33 => 10,  30 => 3,  327 => 165,  319 => 162,  313 => 160,  306 => 157,  304 => 156,  298 => 153,  292 => 150,  286 => 147,  279 => 143,  273 => 140,  269 => 138,  265 => 137,  234 => 108,  223 => 103,  198 => 81,  194 => 80,  187 => 84,  183 => 82,  181 => 73,  173 => 74,  170 => 71,  168 => 72,  165 => 69,  163 => 70,  160 => 67,  155 => 66,  149 => 65,  146 => 64,  144 => 63,  141 => 62,  139 => 61,  136 => 56,  131 => 59,  125 => 58,  121 => 46,  119 => 55,  116 => 54,  113 => 53,  109 => 52,  106 => 51,  100 => 50,  97 => 49,  95 => 48,  92 => 21,  90 => 46,  87 => 20,  82 => 44,  80 => 19,  74 => 42,  61 => 32,  31 => 5,  28 => 3,);
    }
}
