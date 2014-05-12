<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_602342322f667b4b4a7fd4a7aa12680e6811fb2fd5edaf6ae0d86c4cf06a13d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'contains' => array($this, 'block_contains'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('contains', $context, $blocks);
    }

    public function block_contains($context, array $blocks = array())
    {
        // line 3
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/voyage/css2/st.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
<br>
<center>
           <br>   
    \t<h2>Inscription Client</h2>
               <br>   
                        <h4><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("inscription");
        echo "\">Vous etes un Agent </a></h4>
<form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
  
        <div class=\"payment-sendbtns\">
        <input type=\"submit\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>

</form>
        </center>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  52 => 14,  46 => 11,  40 => 10,  36 => 9,  26 => 3,  20 => 2,);
    }
}
