<?php

/* MobileBundle::plantillaMostrar.html.twig */
class __TwigTemplate_2ae8d7aee50d5224471a4c0001bfa85b761b34940e128b04d56a73a0f11f205e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'tituloPagina' => array($this, 'block_tituloPagina'),
            'contenidoInicial' => array($this, 'block_contenidoInicial'),
            'contenidoFooterMostrar' => array($this, 'block_contenidoFooterMostrar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6749d7cab16c787f63f8f4c76273604fdc64aa1d2a3becf1fd0fc80815202461 = $this->env->getExtension("native_profiler");
        $__internal_6749d7cab16c787f63f8f4c76273604fdc64aa1d2a3becf1fd0fc80815202461->enter($__internal_6749d7cab16c787f63f8f4c76273604fdc64aa1d2a3becf1fd0fc80815202461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MobileBundle::plantillaMostrar.html.twig"));

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
\t\t\t
\t\t\t";
        // line 18
        $this->displayBlock('contenidoInicial', $context, $blocks);
        // line 19
        echo "\t\t</div>
\t</div>

\t<div data-role=\"footer\">\t
\t\t";
        // line 23
        $this->displayBlock('contenidoFooterMostrar', $context, $blocks);
        // line 24
        echo "\t</div>
    </body>
</html>
";
        
        $__internal_6749d7cab16c787f63f8f4c76273604fdc64aa1d2a3becf1fd0fc80815202461->leave($__internal_6749d7cab16c787f63f8f4c76273604fdc64aa1d2a3becf1fd0fc80815202461_prof);

    }

    // line 5
    public function block_tituloPagina($context, array $blocks = array())
    {
        $__internal_6ff1c8f4c4d58a9dc04d08c8f7a1af81ef9ef00bdacd6e10d2ca0ce4ef076994 = $this->env->getExtension("native_profiler");
        $__internal_6ff1c8f4c4d58a9dc04d08c8f7a1af81ef9ef00bdacd6e10d2ca0ce4ef076994->enter($__internal_6ff1c8f4c4d58a9dc04d08c8f7a1af81ef9ef00bdacd6e10d2ca0ce4ef076994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tituloPagina"));

        
        $__internal_6ff1c8f4c4d58a9dc04d08c8f7a1af81ef9ef00bdacd6e10d2ca0ce4ef076994->leave($__internal_6ff1c8f4c4d58a9dc04d08c8f7a1af81ef9ef00bdacd6e10d2ca0ce4ef076994_prof);

    }

    // line 18
    public function block_contenidoInicial($context, array $blocks = array())
    {
        $__internal_73b135eb9dfe73cfb5bf2b670943897fc853e803925c88f9f31941bbe6617062 = $this->env->getExtension("native_profiler");
        $__internal_73b135eb9dfe73cfb5bf2b670943897fc853e803925c88f9f31941bbe6617062->enter($__internal_73b135eb9dfe73cfb5bf2b670943897fc853e803925c88f9f31941bbe6617062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoInicial"));

        
        $__internal_73b135eb9dfe73cfb5bf2b670943897fc853e803925c88f9f31941bbe6617062->leave($__internal_73b135eb9dfe73cfb5bf2b670943897fc853e803925c88f9f31941bbe6617062_prof);

    }

    // line 23
    public function block_contenidoFooterMostrar($context, array $blocks = array())
    {
        $__internal_2ff46738ce96190fdd425dad06d0cfb89dbd00e4aee2538da1cdc65569294309 = $this->env->getExtension("native_profiler");
        $__internal_2ff46738ce96190fdd425dad06d0cfb89dbd00e4aee2538da1cdc65569294309->enter($__internal_2ff46738ce96190fdd425dad06d0cfb89dbd00e4aee2538da1cdc65569294309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoFooterMostrar"));

        
        $__internal_2ff46738ce96190fdd425dad06d0cfb89dbd00e4aee2538da1cdc65569294309->leave($__internal_2ff46738ce96190fdd425dad06d0cfb89dbd00e4aee2538da1cdc65569294309_prof);

    }

    public function getTemplateName()
    {
        return "MobileBundle::plantillaMostrar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 23,  86 => 18,  75 => 5,  65 => 24,  63 => 23,  57 => 19,  55 => 18,  48 => 16,  37 => 8,  31 => 5,  25 => 1,);
    }
}
