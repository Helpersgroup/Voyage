<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_1c7795b99cd7fbd4b0dfccd5ec0990db2228fcb1a760098ba8fd85249579b52d extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  161 => 63,  118 => 49,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  320 => 127,  315 => 125,  300 => 121,  286 => 112,  270 => 102,  262 => 98,  256 => 96,  226 => 84,  207 => 75,  200 => 72,  194 => 70,  185 => 66,  153 => 56,  150 => 55,  134 => 54,  113 => 48,  81 => 23,  53 => 12,  58 => 18,  34 => 7,  23 => 4,  385 => 317,  351 => 141,  317 => 261,  292 => 239,  172 => 64,  363 => 292,  354 => 286,  333 => 268,  303 => 122,  234 => 190,  216 => 79,  190 => 155,  181 => 65,  487 => 392,  448 => 362,  287 => 204,  279 => 202,  275 => 105,  271 => 200,  267 => 101,  255 => 190,  251 => 189,  192 => 151,  439 => 195,  428 => 298,  424 => 297,  420 => 296,  414 => 334,  411 => 292,  378 => 265,  370 => 260,  356 => 249,  343 => 239,  327 => 226,  323 => 128,  316 => 221,  293 => 201,  289 => 113,  281 => 198,  277 => 197,  261 => 187,  257 => 186,  253 => 185,  249 => 205,  245 => 183,  237 => 181,  213 => 78,  155 => 117,  148 => 113,  244 => 115,  233 => 87,  248 => 94,  231 => 150,  218 => 95,  205 => 88,  197 => 71,  191 => 67,  180 => 78,  178 => 66,  175 => 65,  170 => 74,  165 => 60,  146 => 67,  129 => 62,  126 => 97,  110 => 57,  100 => 39,  97 => 52,  90 => 27,  84 => 24,  70 => 19,  538 => 221,  530 => 379,  504 => 356,  500 => 355,  496 => 354,  492 => 353,  488 => 352,  484 => 351,  476 => 349,  472 => 348,  468 => 347,  464 => 346,  460 => 345,  456 => 344,  344 => 238,  326 => 267,  324 => 262,  239 => 186,  228 => 142,  215 => 177,  195 => 121,  174 => 136,  20 => 2,  76 => 31,  480 => 350,  474 => 382,  469 => 158,  461 => 372,  457 => 153,  453 => 199,  444 => 358,  440 => 148,  437 => 147,  435 => 326,  430 => 144,  427 => 143,  423 => 340,  413 => 134,  409 => 132,  407 => 291,  402 => 130,  398 => 129,  393 => 316,  387 => 164,  384 => 310,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 295,  355 => 143,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 97,  305 => 95,  298 => 120,  294 => 238,  285 => 199,  283 => 233,  278 => 106,  268 => 85,  264 => 214,  258 => 211,  252 => 80,  247 => 188,  241 => 90,  229 => 85,  220 => 81,  214 => 94,  177 => 65,  169 => 60,  140 => 58,  132 => 51,  128 => 49,  107 => 56,  61 => 13,  273 => 220,  269 => 94,  254 => 92,  243 => 196,  240 => 86,  238 => 85,  235 => 185,  230 => 82,  227 => 183,  224 => 183,  221 => 77,  219 => 76,  217 => 75,  208 => 88,  204 => 166,  179 => 114,  159 => 72,  143 => 56,  135 => 65,  119 => 40,  102 => 40,  71 => 39,  67 => 24,  63 => 23,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 39,  68 => 22,  56 => 9,  87 => 34,  21 => 2,  26 => 12,  93 => 28,  88 => 6,  78 => 29,  46 => 13,  27 => 3,  44 => 11,  31 => 5,  28 => 4,  201 => 92,  196 => 90,  183 => 148,  171 => 61,  166 => 71,  163 => 62,  158 => 62,  156 => 58,  151 => 59,  142 => 59,  138 => 106,  136 => 86,  121 => 50,  117 => 44,  105 => 34,  91 => 27,  62 => 19,  49 => 14,  24 => 3,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 10,  37 => 16,  22 => 2,  246 => 93,  157 => 56,  145 => 92,  139 => 45,  131 => 63,  123 => 42,  120 => 91,  115 => 68,  111 => 47,  108 => 36,  101 => 32,  98 => 31,  96 => 37,  83 => 33,  74 => 14,  66 => 37,  55 => 16,  52 => 15,  50 => 10,  43 => 12,  41 => 8,  35 => 6,  32 => 5,  29 => 6,  209 => 82,  203 => 73,  199 => 134,  193 => 81,  189 => 71,  187 => 116,  182 => 66,  176 => 63,  173 => 75,  168 => 61,  164 => 135,  162 => 59,  154 => 60,  149 => 68,  147 => 54,  144 => 49,  141 => 51,  133 => 55,  130 => 46,  125 => 51,  122 => 43,  116 => 39,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 51,  86 => 28,  82 => 22,  80 => 32,  73 => 20,  64 => 23,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 10,  42 => 11,  39 => 10,  36 => 2,  33 => 4,  30 => 3,);
    }
}
