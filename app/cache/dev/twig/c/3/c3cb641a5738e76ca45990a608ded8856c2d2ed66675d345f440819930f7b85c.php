<?php

/* MobileBundle::plantillaRegistros.html.twig */
class __TwigTemplate_c3cb641a5738e76ca45990a608ded8856c2d2ed66675d345f440819930f7b85c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'tituloPagina' => array($this, 'block_tituloPagina'),
            'urlDestino' => array($this, 'block_urlDestino'),
            'nombreFormulario' => array($this, 'block_nombreFormulario'),
            'formulario' => array($this, 'block_formulario'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91a957a2aa730463631ec5be6bccfdb854be820d350f6cda94c5c71bb236f1e2 = $this->env->getExtension("native_profiler");
        $__internal_91a957a2aa730463631ec5be6bccfdb854be820d350f6cda94c5c71bb236f1e2->enter($__internal_91a957a2aa730463631ec5be6bccfdb854be820d350f6cda94c5c71bb236f1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MobileBundle::plantillaRegistros.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>";
        // line 5
        $this->displayBlock('tituloPagina', $context, $blocks);
        echo "</title>

        <link rel=\"stylesheet\" href=\"http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/estilosMobile.css"), "html", null, true);
        echo "\" />
\t<script src=\"http://code.jquery.com/jquery-1.8.2.min.js\"></script>
\t<script src=\"http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js\"></script>
    </head>

    <body>
\t<div data-role=\"page\" id=\"paginaNuevoRegistro\"> 
\t\t<div data-role=\"content\">
\t\t\t<a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("mobile_homepage");
        echo "\" data-transition=\"fade\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logoCerveza.jpg"), "html", null, true);
        echo "\" ></img></a>
\t\t\t<form action=\"";
        // line 17
        $this->displayBlock('urlDestino', $context, $blocks);
        echo "\" method=\"post\" id=\"formu\" ";
        $this->displayBlock('nombreFormulario', $context, $blocks);
        echo ">
\t\t\t\t";
        // line 18
        $this->displayBlock('formulario', $context, $blocks);
        // line 19
        echo "\t\t\t</form>\t\t\t
\t\t\t
\t\t</div>
\t</div>

    </body>
</html>
";
        
        $__internal_91a957a2aa730463631ec5be6bccfdb854be820d350f6cda94c5c71bb236f1e2->leave($__internal_91a957a2aa730463631ec5be6bccfdb854be820d350f6cda94c5c71bb236f1e2_prof);

    }

    // line 5
    public function block_tituloPagina($context, array $blocks = array())
    {
        $__internal_63dc47cb55a3b7c9a6e55de912397a7a887c55eb6d2d2115b38920dfe6ea1975 = $this->env->getExtension("native_profiler");
        $__internal_63dc47cb55a3b7c9a6e55de912397a7a887c55eb6d2d2115b38920dfe6ea1975->enter($__internal_63dc47cb55a3b7c9a6e55de912397a7a887c55eb6d2d2115b38920dfe6ea1975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tituloPagina"));

        
        $__internal_63dc47cb55a3b7c9a6e55de912397a7a887c55eb6d2d2115b38920dfe6ea1975->leave($__internal_63dc47cb55a3b7c9a6e55de912397a7a887c55eb6d2d2115b38920dfe6ea1975_prof);

    }

    // line 17
    public function block_urlDestino($context, array $blocks = array())
    {
        $__internal_d006a8a97d6cb5b43460fb1d341ad756e9cbacca210c3a25d4aabb635aa94d96 = $this->env->getExtension("native_profiler");
        $__internal_d006a8a97d6cb5b43460fb1d341ad756e9cbacca210c3a25d4aabb635aa94d96->enter($__internal_d006a8a97d6cb5b43460fb1d341ad756e9cbacca210c3a25d4aabb635aa94d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino"));

        
        $__internal_d006a8a97d6cb5b43460fb1d341ad756e9cbacca210c3a25d4aabb635aa94d96->leave($__internal_d006a8a97d6cb5b43460fb1d341ad756e9cbacca210c3a25d4aabb635aa94d96_prof);

    }

    public function block_nombreFormulario($context, array $blocks = array())
    {
        $__internal_da1f82fbae66c9bdbacacc14a7c22289d7cbc02d38148b51d429dfb1d5761a3c = $this->env->getExtension("native_profiler");
        $__internal_da1f82fbae66c9bdbacacc14a7c22289d7cbc02d38148b51d429dfb1d5761a3c->enter($__internal_da1f82fbae66c9bdbacacc14a7c22289d7cbc02d38148b51d429dfb1d5761a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nombreFormulario"));

        
        $__internal_da1f82fbae66c9bdbacacc14a7c22289d7cbc02d38148b51d429dfb1d5761a3c->leave($__internal_da1f82fbae66c9bdbacacc14a7c22289d7cbc02d38148b51d429dfb1d5761a3c_prof);

    }

    // line 18
    public function block_formulario($context, array $blocks = array())
    {
        $__internal_61a0c25ae0fc7454bc799ddd4ae4c7ed25979ea9abe565691dab476e2957ab79 = $this->env->getExtension("native_profiler");
        $__internal_61a0c25ae0fc7454bc799ddd4ae4c7ed25979ea9abe565691dab476e2957ab79->enter($__internal_61a0c25ae0fc7454bc799ddd4ae4c7ed25979ea9abe565691dab476e2957ab79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulario"));

        
        $__internal_61a0c25ae0fc7454bc799ddd4ae4c7ed25979ea9abe565691dab476e2957ab79->leave($__internal_61a0c25ae0fc7454bc799ddd4ae4c7ed25979ea9abe565691dab476e2957ab79_prof);

    }

    public function getTemplateName()
    {
        return "MobileBundle::plantillaRegistros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 18,  88 => 17,  77 => 5,  63 => 19,  61 => 18,  55 => 17,  49 => 16,  38 => 8,  32 => 5,  26 => 1,);
    }
}
