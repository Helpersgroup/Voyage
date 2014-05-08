<?php

/* VoyageBundle:Default:contact.html.twig */
class __TwigTemplate_4eddbe7d8b48fd4ec1260138c833997a9a0eda3b958797e836c11950fb5d4610 extends Twig_Template
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
        return array (  40 => 11,  31 => 4,  28 => 3,);
    }
}
