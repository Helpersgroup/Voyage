<?php

/* VoyageBundle:Default:contact.html.twig */
class __TwigTemplate_60922bc319b839e1aff0854e4e07da96211d2676eecfcf54742088d657a37e4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("VoyageBundle::layout.html.twig");

        $this->blocks = array(
            'contains' => array($this, 'block_contains'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VoyageBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contains($context, array $blocks = array())
    {
        // line 4
        echo "
  



<!-- Contact Img -->
                <div class=\"adress_wrap\">
                    <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/images/contact_img.png"), "html", null, true);
        echo "\" alt=\"\"/>
                    <div class=\"adress\">
                        <h2>Location</h2>
                        <div>
                            <p class=\"first\">Ghazela Esprit Tunis,Tunisia</p>

                            <p>Phone: (00) 216 95 215 234</p>
                            <p>Fax: (00) 216 95 215 234</p>
                            <p>Email: <a href=\"#\">support@voyage.com</a></p>
                            <p>Web: <a href=\"#\">www,voyage.com</a></p>
                        </div>
                    </div>
                </div>
                <!-- Contact Img -->
                
                <!-- Grid page -->
                <div class=\"content\">
                    <div class=\"container\">
                        <div class=\"row contact_wrap\">
                            <div class=\"span5 contact_form\">
                                <h2>CONTACT FORM</h2>
                                <form>
                                    <input type=\"text\" value=\"Nom :\"/>
                                    <input type=\"text\" value=\"Email:\"/>
                                    <input type=\"text\" value=\"Adresse:\"/>
                                    <textarea value=\"Message:\"></textarea>
                                    <input type=\"submit\" value=\"Envoyer \"/>
                                </form>
                            </div>
                            <div class=\"map span7\">
                                <h2>Maps</h2>
                                <iframe width=\"100%\" height=\"360\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Envato+Pty+Ltd,+13%2F2+Elizabeth+Street,+Melbourne+VIC,+Australia&amp;aq=0&amp;oq=envato&amp;sll=37.0625,-95.677068&amp;sspn=39.371738,86.572266&amp;ie=UTF8&amp;hq=Envato+Pty+Ltd,+13%2F2+Elizabeth+Street,&amp;hnear=Melbourne+Victoria,+Australia&amp;t=p&amp;ll=-37.817209,144.961681&amp;spn=0.010849,0.04107&amp;z=15&amp;output=embed\"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Grid page -->
                
                
                
                ";
    }

    public function getTemplateName()
    {
        return "VoyageBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  439 => 303,  428 => 298,  424 => 297,  420 => 296,  414 => 293,  411 => 292,  378 => 265,  370 => 260,  356 => 249,  343 => 239,  327 => 226,  323 => 225,  316 => 221,  293 => 201,  289 => 200,  281 => 198,  277 => 197,  261 => 187,  257 => 186,  253 => 185,  249 => 184,  245 => 183,  237 => 181,  213 => 163,  155 => 117,  148 => 113,  244 => 115,  233 => 180,  248 => 113,  231 => 105,  218 => 95,  205 => 88,  197 => 82,  191 => 80,  180 => 78,  178 => 77,  175 => 76,  170 => 74,  165 => 73,  146 => 67,  129 => 62,  126 => 97,  110 => 57,  100 => 53,  97 => 52,  90 => 50,  84 => 49,  70 => 38,  538 => 221,  530 => 379,  504 => 356,  500 => 355,  496 => 354,  492 => 353,  488 => 352,  484 => 351,  476 => 349,  472 => 348,  468 => 347,  464 => 346,  460 => 345,  456 => 344,  344 => 238,  326 => 222,  324 => 221,  239 => 145,  228 => 142,  215 => 132,  195 => 121,  174 => 112,  20 => 1,  76 => 47,  480 => 350,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 326,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 291,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 199,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 147,  241 => 182,  229 => 73,  220 => 70,  214 => 94,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 56,  61 => 13,  273 => 196,  269 => 94,  254 => 92,  243 => 146,  240 => 86,  238 => 85,  235 => 106,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 88,  204 => 157,  179 => 114,  159 => 72,  143 => 56,  135 => 65,  119 => 59,  102 => 54,  71 => 39,  67 => 38,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 39,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 79,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 71,  151 => 69,  142 => 59,  138 => 54,  136 => 86,  121 => 46,  117 => 44,  105 => 55,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 11,  37 => 16,  22 => 2,  246 => 90,  157 => 56,  145 => 92,  139 => 45,  131 => 63,  123 => 60,  120 => 40,  115 => 68,  111 => 67,  108 => 36,  101 => 32,  98 => 31,  96 => 55,  83 => 25,  74 => 14,  66 => 37,  55 => 22,  52 => 21,  50 => 10,  43 => 8,  41 => 17,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 123,  199 => 122,  193 => 81,  189 => 71,  187 => 116,  182 => 66,  176 => 64,  173 => 75,  168 => 124,  164 => 123,  162 => 57,  154 => 70,  149 => 68,  147 => 58,  144 => 49,  141 => 66,  133 => 55,  130 => 98,  125 => 44,  122 => 43,  116 => 58,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 51,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 18,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
