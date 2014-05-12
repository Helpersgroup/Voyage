<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_94e899c0ab9c74fdd35464a98b0e82ca6d7828659d1d1ffd795780225071e257 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 4,  385 => 317,  351 => 289,  317 => 261,  292 => 239,  172 => 143,  363 => 292,  354 => 286,  333 => 268,  303 => 244,  234 => 190,  216 => 145,  190 => 155,  181 => 124,  487 => 392,  448 => 362,  287 => 204,  279 => 202,  275 => 201,  271 => 200,  267 => 199,  255 => 190,  251 => 189,  192 => 151,  439 => 303,  428 => 298,  424 => 297,  420 => 296,  414 => 334,  411 => 292,  378 => 265,  370 => 260,  356 => 249,  343 => 239,  327 => 226,  323 => 225,  316 => 221,  293 => 201,  289 => 200,  281 => 198,  277 => 197,  261 => 187,  257 => 186,  253 => 185,  249 => 205,  245 => 183,  237 => 181,  213 => 172,  155 => 117,  148 => 113,  244 => 115,  233 => 180,  248 => 113,  231 => 150,  218 => 95,  205 => 88,  197 => 82,  191 => 80,  180 => 78,  178 => 77,  175 => 76,  170 => 74,  165 => 73,  146 => 67,  129 => 62,  126 => 97,  110 => 57,  100 => 53,  97 => 52,  90 => 36,  84 => 49,  70 => 38,  538 => 221,  530 => 379,  504 => 356,  500 => 355,  496 => 354,  492 => 353,  488 => 352,  484 => 351,  476 => 349,  472 => 348,  468 => 347,  464 => 346,  460 => 345,  456 => 344,  344 => 238,  326 => 267,  324 => 262,  239 => 186,  228 => 142,  215 => 177,  195 => 121,  174 => 136,  20 => 1,  76 => 47,  480 => 350,  474 => 382,  469 => 158,  461 => 372,  457 => 153,  453 => 151,  444 => 358,  440 => 148,  437 => 147,  435 => 326,  430 => 144,  427 => 143,  423 => 340,  413 => 134,  409 => 132,  407 => 291,  402 => 130,  398 => 129,  393 => 316,  387 => 122,  384 => 310,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 295,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 238,  285 => 199,  283 => 233,  278 => 86,  268 => 85,  264 => 214,  258 => 211,  252 => 80,  247 => 188,  241 => 182,  229 => 73,  220 => 146,  214 => 94,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 56,  61 => 13,  273 => 220,  269 => 94,  254 => 92,  243 => 196,  240 => 86,  238 => 85,  235 => 185,  230 => 82,  227 => 183,  224 => 183,  221 => 77,  219 => 76,  217 => 75,  208 => 88,  204 => 166,  179 => 114,  159 => 72,  143 => 56,  135 => 65,  119 => 59,  102 => 54,  71 => 39,  67 => 21,  63 => 20,  59 => 19,  38 => 8,  94 => 28,  89 => 20,  85 => 25,  75 => 39,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 12,  93 => 28,  88 => 6,  78 => 26,  46 => 7,  27 => 4,  44 => 12,  31 => 6,  28 => 5,  201 => 92,  196 => 90,  183 => 148,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 121,  151 => 69,  142 => 59,  138 => 106,  136 => 86,  121 => 46,  117 => 44,  105 => 55,  91 => 27,  62 => 23,  49 => 19,  24 => 7,  25 => 3,  19 => 2,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 11,  37 => 16,  22 => 2,  246 => 90,  157 => 56,  145 => 92,  139 => 45,  131 => 63,  123 => 60,  120 => 91,  115 => 68,  111 => 67,  108 => 36,  101 => 32,  98 => 31,  96 => 55,  83 => 25,  74 => 14,  66 => 37,  55 => 18,  52 => 21,  50 => 10,  43 => 14,  41 => 9,  35 => 5,  32 => 4,  29 => 5,  209 => 82,  203 => 135,  199 => 134,  193 => 81,  189 => 71,  187 => 116,  182 => 66,  176 => 144,  173 => 75,  168 => 136,  164 => 135,  162 => 57,  154 => 70,  149 => 68,  147 => 58,  144 => 49,  141 => 66,  133 => 55,  130 => 98,  125 => 44,  122 => 43,  116 => 58,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 51,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 12,  45 => 18,  42 => 9,  39 => 7,  36 => 7,  33 => 4,  30 => 2,);
    }
}
