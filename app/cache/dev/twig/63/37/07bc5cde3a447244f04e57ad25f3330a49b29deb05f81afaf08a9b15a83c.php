<?php

/* voyageUsersBundle:Default:login.html.twig */
class __TwigTemplate_633707bc5cde3a447244f04e57ad25f3330a49b29deb05f81afaf08a9b15a83c extends Twig_Template
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
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
<label for=\"username\">Username :</label>
<input type=\"text\" id=\"username\"  name=\"nom\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
<label for=\"password\">Password :</label>
<input type=\"password\" id=\"password\" name=\"mdp\" />
<input style=\"width:100px; position:relative ; right:38%;\"  type=\"submit\" value=\"Log In\"/>
</form>
";
        // line 8
        if (((isset($context["register"]) ? $context["register"] : $this->getContext($context, "register")) == "1")) {
            echo " <a href=\"";
            echo $this->env->getExtension('routing')->getPath("register");
            echo "\">Register here </a> ";
        }
    }

    public function getTemplateName()
    {
        return "voyageUsersBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 8,  25 => 3,  19 => 1,);
    }
}
