<?php

/* WebProfilerBundle:Router:panel.html.twig */
class __TwigTemplate_1ffcc091e220518bccce271f61b3cc6420b2ad3221d889729fa23805ee76d054 extends Twig_Template
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
        echo "<h2>Routing for \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "pathinfo"), "html", null, true);
        echo "\"</h2>

<ul>
    <li>
        <strong>Route:&nbsp;</strong>
        ";
        // line 6
        if ($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "route")) {
            // line 7
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "route"), "html", null, true);
            echo "
        ";
        } else {
            // line 9
            echo "            <em>No matching route</em>
        ";
        }
        // line 11
        echo "    </li>
    <li>
        <strong>Route parameters:&nbsp;</strong>
        ";
        // line 14
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParams"))) {
            // line 15
            echo "            ";
            $this->env->loadTemplate("@WebProfiler/Profiler/table.html.twig")->display(array("data" => $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParams"), "class" => "inline"));
            // line 16
            echo "        ";
        } else {
            // line 17
            echo "            <em>No parameters</em>
        ";
        }
        // line 19
        echo "    </li>
    ";
        // line 20
        if ($this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "redirect")) {
            // line 21
            echo "    <li>
        <strong>Redirecting to:&nbsp;</strong> \"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetUrl"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetRoute")) {
                echo "(route: \"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetRoute"), "html", null, true);
                echo "\")";
            }
            // line 23
            echo "    <li>
    ";
        }
        // line 25
        echo "    <li>
        <strong>Route matching logs</strong>
        <table class=\"routing inline\">
            <tr>
                <th>Route name</th>
                <th>Pattern</th>
                <th>Log</th>
            </tr>
            ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["traces"]) ? $context["traces"] : $this->getContext($context, "traces")));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 34
            echo "                <tr class=\"";
            echo (((1 == $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "level"))) ? ("almost") : ((((2 == $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "level"))) ? ("matches") : (""))));
            echo "\">
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "name"), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "path"), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "log"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </table>
        <em><small>Note: The above matching is based on the configuration for the current router which might differ from
        the configuration used while routing this request.</small></em>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Router:panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 327,  308 => 287,  65 => 22,  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  649 => 462,  634 => 456,  625 => 453,  620 => 451,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  517 => 404,  389 => 160,  386 => 159,  371 => 156,  358 => 151,  345 => 147,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  307 => 128,  302 => 125,  296 => 121,  290 => 119,  276 => 111,  259 => 103,  232 => 88,  222 => 83,  210 => 77,  152 => 46,  127 => 35,  357 => 123,  332 => 116,  321 => 135,  318 => 111,  306 => 286,  291 => 102,  274 => 110,  265 => 105,  263 => 95,  212 => 78,  202 => 94,  104 => 37,  672 => 345,  668 => 344,  664 => 342,  660 => 464,  651 => 337,  647 => 336,  644 => 335,  640 => 334,  631 => 327,  629 => 454,  626 => 325,  622 => 452,  613 => 320,  609 => 319,  606 => 449,  602 => 317,  593 => 310,  591 => 309,  588 => 308,  585 => 307,  581 => 305,  577 => 303,  569 => 300,  563 => 298,  559 => 296,  557 => 295,  552 => 293,  548 => 292,  545 => 291,  541 => 290,  533 => 284,  531 => 283,  527 => 408,  525 => 280,  522 => 406,  519 => 278,  515 => 276,  509 => 272,  505 => 270,  499 => 268,  497 => 267,  489 => 262,  483 => 258,  479 => 256,  473 => 254,  471 => 253,  465 => 249,  463 => 248,  459 => 246,  454 => 244,  438 => 236,  436 => 235,  418 => 224,  412 => 222,  410 => 221,  400 => 214,  397 => 213,  383 => 207,  376 => 205,  367 => 339,  353 => 328,  347 => 191,  313 => 183,  304 => 181,  297 => 104,  295 => 178,  288 => 118,  188 => 90,  184 => 63,  77 => 25,  161 => 63,  118 => 49,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  431 => 189,  429 => 188,  422 => 226,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 158,  373 => 156,  361 => 152,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 188,  325 => 129,  320 => 127,  315 => 131,  300 => 105,  286 => 112,  270 => 102,  262 => 98,  256 => 96,  226 => 84,  207 => 75,  200 => 72,  194 => 68,  185 => 74,  153 => 77,  150 => 55,  134 => 39,  113 => 40,  81 => 23,  53 => 17,  58 => 18,  34 => 5,  23 => 4,  385 => 317,  351 => 120,  317 => 185,  292 => 239,  172 => 57,  363 => 153,  354 => 286,  333 => 268,  303 => 106,  234 => 190,  216 => 79,  190 => 76,  181 => 65,  487 => 392,  448 => 240,  287 => 204,  279 => 202,  275 => 105,  271 => 200,  267 => 101,  255 => 101,  251 => 189,  192 => 151,  439 => 195,  428 => 230,  424 => 297,  420 => 296,  414 => 334,  411 => 292,  378 => 157,  370 => 260,  356 => 249,  343 => 146,  327 => 114,  323 => 128,  316 => 221,  293 => 120,  289 => 113,  281 => 114,  277 => 197,  261 => 187,  257 => 186,  253 => 100,  249 => 205,  245 => 183,  237 => 181,  213 => 78,  155 => 47,  148 => 113,  244 => 115,  233 => 87,  248 => 97,  231 => 83,  218 => 95,  205 => 108,  197 => 69,  191 => 67,  180 => 78,  178 => 59,  175 => 58,  170 => 84,  165 => 83,  146 => 67,  129 => 62,  126 => 97,  110 => 57,  100 => 36,  97 => 52,  90 => 37,  84 => 27,  70 => 26,  538 => 221,  530 => 379,  504 => 356,  500 => 355,  496 => 354,  492 => 353,  488 => 352,  484 => 351,  476 => 349,  472 => 348,  468 => 347,  464 => 346,  460 => 345,  456 => 344,  344 => 119,  326 => 138,  324 => 113,  239 => 186,  228 => 142,  215 => 177,  195 => 121,  174 => 65,  20 => 1,  76 => 28,  480 => 350,  474 => 382,  469 => 158,  461 => 372,  457 => 245,  453 => 199,  444 => 238,  440 => 148,  437 => 147,  435 => 326,  430 => 144,  427 => 143,  423 => 340,  413 => 134,  409 => 132,  407 => 291,  402 => 215,  398 => 129,  393 => 211,  387 => 164,  384 => 310,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 197,  362 => 110,  360 => 295,  355 => 329,  341 => 118,  337 => 103,  322 => 101,  314 => 99,  312 => 130,  309 => 129,  305 => 95,  298 => 120,  294 => 238,  285 => 175,  283 => 115,  278 => 98,  268 => 85,  264 => 214,  258 => 94,  252 => 80,  247 => 188,  241 => 93,  229 => 87,  220 => 81,  214 => 94,  177 => 65,  169 => 60,  140 => 58,  132 => 51,  128 => 49,  107 => 56,  61 => 23,  273 => 174,  269 => 107,  254 => 92,  243 => 92,  240 => 86,  238 => 85,  235 => 89,  230 => 82,  227 => 86,  224 => 81,  221 => 77,  219 => 76,  217 => 75,  208 => 76,  204 => 166,  179 => 98,  159 => 90,  143 => 51,  135 => 65,  119 => 40,  102 => 33,  71 => 23,  67 => 22,  63 => 21,  59 => 22,  38 => 6,  94 => 21,  89 => 30,  85 => 23,  75 => 28,  68 => 12,  56 => 16,  87 => 33,  21 => 2,  26 => 3,  93 => 38,  88 => 25,  78 => 18,  46 => 14,  27 => 7,  44 => 11,  31 => 8,  28 => 6,  201 => 106,  196 => 92,  183 => 148,  171 => 61,  166 => 54,  163 => 82,  158 => 80,  156 => 62,  151 => 59,  142 => 59,  138 => 106,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 34,  62 => 21,  49 => 14,  24 => 2,  25 => 3,  19 => 1,  79 => 29,  72 => 27,  69 => 26,  47 => 15,  40 => 11,  37 => 7,  22 => 2,  246 => 136,  157 => 89,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 68,  111 => 47,  108 => 47,  101 => 43,  98 => 34,  96 => 35,  83 => 30,  74 => 14,  66 => 25,  55 => 38,  52 => 12,  50 => 16,  43 => 12,  41 => 19,  35 => 5,  32 => 6,  29 => 3,  209 => 82,  203 => 73,  199 => 93,  193 => 81,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 135,  162 => 59,  154 => 60,  149 => 68,  147 => 75,  144 => 42,  141 => 73,  133 => 55,  130 => 46,  125 => 42,  122 => 41,  116 => 57,  112 => 36,  109 => 52,  106 => 51,  103 => 32,  99 => 23,  95 => 39,  92 => 28,  86 => 28,  82 => 19,  80 => 29,  73 => 23,  64 => 24,  60 => 20,  57 => 19,  54 => 19,  51 => 37,  48 => 16,  45 => 14,  42 => 8,  39 => 10,  36 => 9,  33 => 6,  30 => 7,);
    }
}
