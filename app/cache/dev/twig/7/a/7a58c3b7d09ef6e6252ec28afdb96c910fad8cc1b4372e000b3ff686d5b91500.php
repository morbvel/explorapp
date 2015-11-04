<?php

/* MobileBundle::plantillaPerfiles.html.twig */
class __TwigTemplate_7a58c3b7d09ef6e6252ec28afdb96c910fad8cc1b4372e000b3ff686d5b91500 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'tituloPagina' => array($this, 'block_tituloPagina'),
            'contenidoPerfil' => array($this, 'block_contenidoPerfil'),
            'contenidoFooterPerfil' => array($this, 'block_contenidoFooterPerfil'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15ad12d011dba99bea5d3baf67fea77f55127acbbbcaf905ddb268e632132d23 = $this->env->getExtension("native_profiler");
        $__internal_15ad12d011dba99bea5d3baf67fea77f55127acbbbcaf905ddb268e632132d23->enter($__internal_15ad12d011dba99bea5d3baf67fea77f55127acbbbcaf905ddb268e632132d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MobileBundle::plantillaPerfiles.html.twig"));

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
\t<div data-role=\"page\" id=\"paginaPerfil\"> 
\t\t<div data-role=\"content\">
\t\t\t<a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("mobile_homepage");
        echo "\" data-transition=\"fade\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logoCerveza.jpg"), "html", null, true);
        echo "\" ></img></a>

\t\t\t";
        // line 19
        $this->displayBlock('contenidoPerfil', $context, $blocks);
        echo "\t
\t\t</div>

\t\t<div data-role=\"footer\">\t
\t\t\t";
        // line 23
        $this->displayBlock('contenidoFooterPerfil', $context, $blocks);
        // line 24
        echo "\t\t</div>
\t</div> 

    </body>
</html>";
        
        $__internal_15ad12d011dba99bea5d3baf67fea77f55127acbbbcaf905ddb268e632132d23->leave($__internal_15ad12d011dba99bea5d3baf67fea77f55127acbbbcaf905ddb268e632132d23_prof);

    }

    // line 5
    public function block_tituloPagina($context, array $blocks = array())
    {
        $__internal_30afdbdbdcad218f113c520391d75d467eb49e8b36261719f61d77cbc3311b1e = $this->env->getExtension("native_profiler");
        $__internal_30afdbdbdcad218f113c520391d75d467eb49e8b36261719f61d77cbc3311b1e->enter($__internal_30afdbdbdcad218f113c520391d75d467eb49e8b36261719f61d77cbc3311b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tituloPagina"));

        
        $__internal_30afdbdbdcad218f113c520391d75d467eb49e8b36261719f61d77cbc3311b1e->leave($__internal_30afdbdbdcad218f113c520391d75d467eb49e8b36261719f61d77cbc3311b1e_prof);

    }

    // line 19
    public function block_contenidoPerfil($context, array $blocks = array())
    {
        $__internal_e7b2437852a8b44af4127cd50a4187baf8184610ae6dab6318f189902ced5fac = $this->env->getExtension("native_profiler");
        $__internal_e7b2437852a8b44af4127cd50a4187baf8184610ae6dab6318f189902ced5fac->enter($__internal_e7b2437852a8b44af4127cd50a4187baf8184610ae6dab6318f189902ced5fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoPerfil"));

        
        $__internal_e7b2437852a8b44af4127cd50a4187baf8184610ae6dab6318f189902ced5fac->leave($__internal_e7b2437852a8b44af4127cd50a4187baf8184610ae6dab6318f189902ced5fac_prof);

    }

    // line 23
    public function block_contenidoFooterPerfil($context, array $blocks = array())
    {
        $__internal_300ca866331016ba901fb4fb4853394d54f51076691565385820eb362916d1c4 = $this->env->getExtension("native_profiler");
        $__internal_300ca866331016ba901fb4fb4853394d54f51076691565385820eb362916d1c4->enter($__internal_300ca866331016ba901fb4fb4853394d54f51076691565385820eb362916d1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoFooterPerfil"));

        
        $__internal_300ca866331016ba901fb4fb4853394d54f51076691565385820eb362916d1c4->leave($__internal_300ca866331016ba901fb4fb4853394d54f51076691565385820eb362916d1c4_prof);

    }

    public function getTemplateName()
    {
        return "MobileBundle::plantillaPerfiles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 23,  87 => 19,  76 => 5,  65 => 24,  63 => 23,  56 => 19,  49 => 17,  37 => 8,  31 => 5,  25 => 1,);
    }
}
