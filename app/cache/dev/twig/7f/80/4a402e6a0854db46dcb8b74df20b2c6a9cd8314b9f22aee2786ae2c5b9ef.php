<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_7f804a402e6a0854db46dcb8b74df20b2c6a9cd8314b9f22aee2786ae2c5b9ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("VoyageBundle::layout.html.twig");

        $this->blocks = array(
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

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 29,  68 => 22,  62 => 19,  58 => 18,  52 => 15,  48 => 13,  42 => 11,  40 => 10,  31 => 5,  28 => 4,);
    }
}
