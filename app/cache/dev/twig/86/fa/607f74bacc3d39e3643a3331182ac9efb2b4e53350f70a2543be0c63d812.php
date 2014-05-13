<?php

/* VoyageBundle:Annonce:edit.html.twig */
class __TwigTemplate_86fa607f74bacc3d39e3643a3331182ac9efb2b4e53350f70a2543be0c63d812 extends Twig_Template
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


<!-- Crum -->
<div class=\"crum-wrapper\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span12\">
                <a href=\"#\">accueil</a>
                <span class=\"crum\">Booking</span>
            </div>
        </div>
    </div>
</div>
<!-- Crum-->


<!-- Grid page -->
<div class=\"content booking_wrap\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span12 booking clearfix\">
                <div class=\"top\">
                    <h2>Modifer Annonce</h2>
                    
                    
                </div>

                <div class=\"bottom clearfix\">
                    <div class=\"span6 booking_form\">
                        <div class=\"row\">
                            <div class=\"span5 form\">
                                <h2>Information sur le voyage</h2>
                                <h3>Infomations Annonce</h3>
                                <div class=\"clearfix\"></div>

                                <form action=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("annonce_create");
        echo "\" method=\"post\">

                                    <div id=\"voyage_firstbundle_annonce\">
                                        <div>
                                            <label for=\"voyage_firstbundle_annonce_nom\" class=\"required\">Nom</label>
                                            <input type=\"text\" autofocus  placeholder=\"nom annonce\" required id=\"voyage_firstbundle_annonce_nom\" name=\"nom\"  maxlength=\"45\" value=";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom"), "html", null, true);
        echo " />
                                        </div>

                                        <div>
                                            <label for=\"voyage_firstbundle_annonce_typeAnnonce\">Type annonce</label>
                                            <select required id=\"voyage_firstbundle_annonce_typeAnnonce\" name=\"typeAnnonce\" >
                                                <option value=\"\" selected=\"selected\">Choisissez le type d'annonce</option><option>Camping</option><option>Camping car</option><option>Randonnée</option><option>Voyage de noce</option><option>Voyage de noce</option><option>Voyage de découverte</option><option>Voyage de détente</option>
                                            </select>
                                        </div>
                                        
                                        <div>
                                            <label for=\"voyage_firstbundle_annonce_destination\" class=\"required\">Destination</label>
                                            <input type=\"text\"  placeholder=\"destination\"id=\"voyage_firstbundle_annonce_destination\" required name=\"destination\"  maxlength=\"20\" />
                                        </div>
                                        
                                        <div>
                                            <label for=\"voyage_firstbundle_annonce_image\" class=\"image\">Longitude</label>
                                            <input value=";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "long"), "html", null, true);
        echo " type=\"number\" id=\"voyage_firstbundle_annonce_image\" name=\"long\" required />
                                        </div>
                                        <div>
                                            <label for=\"voyage_firstbundle_annonce_image\" class=\"image\">Latitude </label>
                                            <input value=";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "att"), "html", null, true);
        echo " type=\"number\" id=\"voyage_firstbundle_annonce_image\" name=\"att\" required />
                                        </div>
                                        
                                        <div>
                                            <label for=\"voyage_firstbundle_annonce_depart\"  class=\"required\">Depart</label>
                                            <input value=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "depart"), "html", null, true);
        echo "\" type=\"text\" id=\"voyage_firstbundle_annonce_depart\" placeholder=\"depart\" required name=\"depart\"  maxlength=\"20\" />
                                        </div>
                                        
                                        <div>
                                            <label class=\"required\">Date allée</label>
                                            <input value=\"";
        // line 76
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateDeb"), "d/m/Y"), "html", null, true);
        echo "\" type=\"date\" required id=\"voyage_firstbundle_annonce_dateDeb\" name=\"dateDeb\" >
                                        </div>
                                        
                                        <div>
                                            <label class=\"required\">Date de retour</label>
                                            <input value=\"";
        // line 81
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateFin"), "d/m/Y"), "html", null, true);
        echo "\" type=\"date\" required id=\"voyage_firstbundle_annonce_dateDeb\" name=\"dateFin\">
                                        </div>

                                        <div> 
                                            <label for=\"voyage_firstbundle_annonce_description\" class=\"required\">Description</label>
                                            <textarea cols=\"29\" required rows=\"3\" placeholder=\"description\" id=\"voyage_firstbundle_annonce_description\" name=\"description\"  placeholder=\"description\"/>
                                           ";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description"), "html", null, true);
        echo "
                                        </textarea>
                                        </div>

                                        <div>
                                            <label for=\"voyage_firstbundle_annonce_typeHebergement\" class=\"required\">Type hebergement</label>
                                            <select id=\"voyage_firstbundle_annonce_typeHebergement\" required name=\"typeHebergement\"><option value=\"\" selected=\"selected\">Choisissez le type d'hebergement</option><option value=\"1\">Hotel 5 étoiles</option><option value=\"2\">Hotel 4 étoiles</option><option value=\"3\">Hotel 3 étoiles</option><option value=\"4\">Hotel 2 étoiles</option><option value=\"5\">Hotel 1 étoile</option><option value=\"6\">Auberge</option><option value=\"7\">Maison d&#039;hote</option></select>
                                        </div>

                                        <div>
                                            <label for=\"voyage_firstbundle_annonce_hebergement\">Hebergement</label>
                                            <input value=";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom"), "html", null, true);
        echo " type=\"text\"  placeholder=\"hébergement\" id=\"voyage_firstbundle_annonce_hebergement\" required name=\"hebergement\" maxlength=\"20\" /></div>
                                        <div>
                                            <label for=\"voyage_firstbundle_annonce_transport\" class=\"required\">Transport</label>
                                                <select id=\"voyage_firstbundle_annonce_transport\" required name=\"transport\"><option value=\"\" selected=\"selected\">Choisissez un transport</option><option value=\"1\">Avion</option><option value=\"2\">Bus</option><option value=\"3\">Mini-Bus</option><option value=\"4\">Train</option><option value=\"5\">Voiture</option>
                                                </select>
                                        </div>
                                        <div>
                                            <label for=\"voyage_firstbundle_annonce_prix\">Prix</label>
                                            <input value=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prix"), "html", null, true);
        echo "\" type=\"text\" autofocus required id=\"voyage_firstbundle_annonce_prix\" placeholder=\"prix\" name=\"prix\" maxlength=\"20\" /></div>
                                       

                                        <div>
                                            <label for=\"voyage_firstbundle_annonce_image\" class=\"image\">Image</label>
                                            <input type=\"file\" id=\"voyage_firstbundle_annonce_image\" name=\"image\" required />
                                        </div>

                                        <div>
                                            <label for=\"voyage_firstbundle_annonce_etat\" class=\"required\">Etat</label>
                                            <select id=\"voyage_firstbundle_annonce_etat\" name=\"etat\" readonly=\"readonly\">
                                                <option value=\"1\">Public</option></select>
                                        </div>

                                        <div>
                                            <button type=\"submit\" id=\"voyage_firstbundle_annonce_submit\" name=\"submit\">Modifer</button>
                                        </div>
                                        <input type=\"hidden\" id=\"voyage_firstbundle_annonce__token\" name=\"voyage_firstbundle_annonce[_token]\" value=\"hRDv6neAJq3iQSwa63JR2xTIVdUopiAYminjtGktJR0\" /></div>
  
</form>

                                    </div>
                                
                            </div>

                        </div>
                                                             
                    </div>     
                </div>
            </div>
            <div class=\"span5\">
                <div class=\"row\">
                    <div class=\"span1\"></div>

                    <div class=\"span4\">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 ";
    }

    public function getTemplateName()
    {
        return "VoyageBundle:Annonce:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 106,  151 => 98,  137 => 87,  128 => 81,  120 => 76,  112 => 71,  104 => 66,  97 => 62,  77 => 45,  69 => 40,  31 => 4,  28 => 3,);
    }
}
