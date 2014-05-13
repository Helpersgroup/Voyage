<?php

/* TwigBundle:Exception:trace.txt.twig */
class __TwigTemplate_50bcc821bd5d3900098d4113a65965ed540c655a7a4fa9352c81c0c6e6ea3b15 extends Twig_Template
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
        if ($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function")) {
            // line 2
            echo "    at ";
            echo (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "class") . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "type")) . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function"));
            echo "(";
            echo $this->env->getExtension('code')->formatArgsAsText($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "args"));
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array(), "any", true, true) && $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "file");
            echo " line ";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  42 => 14,  38 => 13,  35 => 7,  26 => 5,  55 => 13,  25 => 3,  21 => 2,  94 => 22,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  72 => 16,  68 => 14,  64 => 12,  56 => 9,  50 => 8,  41 => 9,  24 => 4,  201 => 92,  199 => 91,  196 => 90,  171 => 73,  166 => 71,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  133 => 55,  123 => 47,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  101 => 24,  91 => 31,  86 => 28,  69 => 25,  66 => 15,  62 => 23,  51 => 15,  49 => 19,  39 => 6,  19 => 1,  98 => 40,  93 => 9,  88 => 6,  78 => 40,  46 => 7,  44 => 10,  36 => 7,  32 => 12,  27 => 4,  22 => 2,  57 => 16,  54 => 21,  43 => 8,  40 => 8,  33 => 6,  30 => 3,  327 => 165,  319 => 162,  313 => 160,  306 => 157,  304 => 156,  298 => 153,  292 => 150,  286 => 147,  279 => 143,  273 => 140,  269 => 138,  265 => 137,  234 => 108,  223 => 103,  198 => 81,  194 => 80,  187 => 84,  183 => 82,  181 => 73,  173 => 74,  170 => 71,  168 => 72,  165 => 69,  163 => 70,  160 => 67,  155 => 66,  149 => 65,  146 => 64,  144 => 63,  141 => 62,  139 => 61,  136 => 56,  131 => 59,  125 => 58,  121 => 46,  119 => 55,  116 => 54,  113 => 53,  109 => 52,  106 => 51,  100 => 50,  97 => 49,  95 => 48,  92 => 21,  90 => 46,  87 => 20,  82 => 44,  80 => 19,  74 => 42,  61 => 32,  31 => 5,  28 => 3,);
    }
}
