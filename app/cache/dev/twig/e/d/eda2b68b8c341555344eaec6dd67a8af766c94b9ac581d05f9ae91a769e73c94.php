<?php

/* MobileBundle::plantillaInicial.html.twig */
class __TwigTemplate_eda2b68b8c341555344eaec6dd67a8af766c94b9ac581d05f9ae91a769e73c94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'tituloPagina' => array($this, 'block_tituloPagina'),
            'contenidoInicial' => array($this, 'block_contenidoInicial'),
            'menuCabecera' => array($this, 'block_menuCabecera'),
            'contenidoFooterInicial' => array($this, 'block_contenidoFooterInicial'),
            'contenidoCuerpo1' => array($this, 'block_contenidoCuerpo1'),
            'menuRestaurantes' => array($this, 'block_menuRestaurantes'),
            'contenidoFooter1' => array($this, 'block_contenidoFooter1'),
            'contenidoCuerpo2' => array($this, 'block_contenidoCuerpo2'),
            'menuHoteles' => array($this, 'block_menuHoteles'),
            'contenidoFooter2' => array($this, 'block_contenidoFooter2'),
            'contenidoCuerpo3' => array($this, 'block_contenidoCuerpo3'),
            'menuBares' => array($this, 'block_menuBares'),
            'contenidoFooter3' => array($this, 'block_contenidoFooter3'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d343ff32c748193e2a5e0491b9452c1f462960f786f0c8abb7ddefc0c778f71d = $this->env->getExtension("native_profiler");
        $__internal_d343ff32c748193e2a5e0491b9452c1f462960f786f0c8abb7ddefc0c778f71d->enter($__internal_d343ff32c748193e2a5e0491b9452c1f462960f786f0c8abb7ddefc0c778f71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MobileBundle::plantillaInicial.html.twig"));

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
\t\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/estilosMobile.css"), "html", null, true);
        echo "\" />
\t\t<script src=\"http://code.jquery.com/jquery-1.8.2.min.js\"></script>
\t\t<script src=\"http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js\"></script>

    </head>

    <body>
\t<div data-role=\"page\" id=\"paginaInicial\"> 
\t\t<div data-role=\"content\">
\t\t\t<a href=\"#paginaInicial\" data-transition=\"fade\"><img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logoCerveza.jpg"), "html", null, true);
        echo "\" ></img></a>
\t\t\t";
        // line 18
        $this->displayBlock('contenidoInicial', $context, $blocks);
        // line 19
        echo "\t\t\t";
        $this->displayBlock('menuCabecera', $context, $blocks);
        // line 20
        echo "\t\t</div>

\t\t<div data-role=\"footer\">\t
\t\t\t";
        // line 23
        $this->displayBlock('contenidoFooterInicial', $context, $blocks);
        // line 24
        echo "\t\t</div>
\t</div>

\t<div data-role=\"page\" id=\"restaurantes\"> 

\t\t<div data-role=\"content\">\t
\t\t\t<a href=\"#paginaInicial\" data-transition=\"fade\"><img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logoCerveza.jpg"), "html", null, true);
        echo "\" ></img></a>
\t\t\t";
        // line 31
        $this->displayBlock('contenidoCuerpo1', $context, $blocks);
        // line 32
        echo "\t\t\t";
        $this->displayBlock('menuRestaurantes', $context, $blocks);
        // line 33
        echo "\t\t</div>

\t\t<div data-role=\"footer\">\t
\t\t\t";
        // line 36
        $this->displayBlock('contenidoFooter1', $context, $blocks);
        // line 37
        echo "\t\t</div>

\t</div>

\t<div data-role=\"page\" id=\"hoteles\"> 

\t\t<div data-role=\"content\">\t
\t\t\t<a href=\"#paginaInicial\" data-transition=\"fade\"><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logoCerveza.jpg"), "html", null, true);
        echo "\" ></img></a>
\t\t\t";
        // line 45
        $this->displayBlock('contenidoCuerpo2', $context, $blocks);
        // line 46
        echo "\t\t\t";
        $this->displayBlock('menuHoteles', $context, $blocks);
        // line 47
        echo "\t\t</div>

\t\t<div data-role=\"footer\">\t
\t\t\t";
        // line 50
        $this->displayBlock('contenidoFooter2', $context, $blocks);
        // line 51
        echo "\t\t</div>

\t</div>

\t<div data-role=\"page\" id=\"bares\"> 

\t\t<div data-role=\"content\">\t
\t\t\t<a href=\"#paginaInicial\" data-transition=\"fade\"><img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logoCerveza.jpg"), "html", null, true);
        echo "\" ></img></a>
\t\t\t";
        // line 59
        $this->displayBlock('contenidoCuerpo3', $context, $blocks);
        // line 60
        echo "\t\t\t";
        $this->displayBlock('menuBares', $context, $blocks);
        // line 61
        echo "\t\t</div>

\t\t<div data-role=\"footer\">\t
\t\t\t";
        // line 64
        $this->displayBlock('contenidoFooter3', $context, $blocks);
        // line 65
        echo "\t\t</div>

\t</div>

    </body>
</html>
";
        
        $__internal_d343ff32c748193e2a5e0491b9452c1f462960f786f0c8abb7ddefc0c778f71d->leave($__internal_d343ff32c748193e2a5e0491b9452c1f462960f786f0c8abb7ddefc0c778f71d_prof);

    }

    // line 5
    public function block_tituloPagina($context, array $blocks = array())
    {
        $__internal_b48fd94ff878a3e3cc104b8f80774f309215cb9a66390885e04b8ef8b948b9c2 = $this->env->getExtension("native_profiler");
        $__internal_b48fd94ff878a3e3cc104b8f80774f309215cb9a66390885e04b8ef8b948b9c2->enter($__internal_b48fd94ff878a3e3cc104b8f80774f309215cb9a66390885e04b8ef8b948b9c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tituloPagina"));

        
        $__internal_b48fd94ff878a3e3cc104b8f80774f309215cb9a66390885e04b8ef8b948b9c2->leave($__internal_b48fd94ff878a3e3cc104b8f80774f309215cb9a66390885e04b8ef8b948b9c2_prof);

    }

    // line 18
    public function block_contenidoInicial($context, array $blocks = array())
    {
        $__internal_432530d98e79a8b3b0d12c73a8f32dcf170ee1d4a29cddea84cbc4c00412d1e1 = $this->env->getExtension("native_profiler");
        $__internal_432530d98e79a8b3b0d12c73a8f32dcf170ee1d4a29cddea84cbc4c00412d1e1->enter($__internal_432530d98e79a8b3b0d12c73a8f32dcf170ee1d4a29cddea84cbc4c00412d1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoInicial"));

        
        $__internal_432530d98e79a8b3b0d12c73a8f32dcf170ee1d4a29cddea84cbc4c00412d1e1->leave($__internal_432530d98e79a8b3b0d12c73a8f32dcf170ee1d4a29cddea84cbc4c00412d1e1_prof);

    }

    // line 19
    public function block_menuCabecera($context, array $blocks = array())
    {
        $__internal_db1ebf0fbec07c822cce4716d741445428acebc80ad527ccceb0dca94d2bc8dd = $this->env->getExtension("native_profiler");
        $__internal_db1ebf0fbec07c822cce4716d741445428acebc80ad527ccceb0dca94d2bc8dd->enter($__internal_db1ebf0fbec07c822cce4716d741445428acebc80ad527ccceb0dca94d2bc8dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuCabecera"));

        
        $__internal_db1ebf0fbec07c822cce4716d741445428acebc80ad527ccceb0dca94d2bc8dd->leave($__internal_db1ebf0fbec07c822cce4716d741445428acebc80ad527ccceb0dca94d2bc8dd_prof);

    }

    // line 23
    public function block_contenidoFooterInicial($context, array $blocks = array())
    {
        $__internal_6be2475a2fcccd537d04223f378969d74bf3935ad17484c1794c7e16b8c516d3 = $this->env->getExtension("native_profiler");
        $__internal_6be2475a2fcccd537d04223f378969d74bf3935ad17484c1794c7e16b8c516d3->enter($__internal_6be2475a2fcccd537d04223f378969d74bf3935ad17484c1794c7e16b8c516d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoFooterInicial"));

        
        $__internal_6be2475a2fcccd537d04223f378969d74bf3935ad17484c1794c7e16b8c516d3->leave($__internal_6be2475a2fcccd537d04223f378969d74bf3935ad17484c1794c7e16b8c516d3_prof);

    }

    // line 31
    public function block_contenidoCuerpo1($context, array $blocks = array())
    {
        $__internal_332f9ba624de23183008e875cfcd4dba294adae0d8dc89c14cba05fcb34831da = $this->env->getExtension("native_profiler");
        $__internal_332f9ba624de23183008e875cfcd4dba294adae0d8dc89c14cba05fcb34831da->enter($__internal_332f9ba624de23183008e875cfcd4dba294adae0d8dc89c14cba05fcb34831da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoCuerpo1"));

        
        $__internal_332f9ba624de23183008e875cfcd4dba294adae0d8dc89c14cba05fcb34831da->leave($__internal_332f9ba624de23183008e875cfcd4dba294adae0d8dc89c14cba05fcb34831da_prof);

    }

    // line 32
    public function block_menuRestaurantes($context, array $blocks = array())
    {
        $__internal_210f427388cbd5c2b0ba9d1a6d1f3f90ee839c60ddb788c648f7e74ae7a8c244 = $this->env->getExtension("native_profiler");
        $__internal_210f427388cbd5c2b0ba9d1a6d1f3f90ee839c60ddb788c648f7e74ae7a8c244->enter($__internal_210f427388cbd5c2b0ba9d1a6d1f3f90ee839c60ddb788c648f7e74ae7a8c244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuRestaurantes"));

        
        $__internal_210f427388cbd5c2b0ba9d1a6d1f3f90ee839c60ddb788c648f7e74ae7a8c244->leave($__internal_210f427388cbd5c2b0ba9d1a6d1f3f90ee839c60ddb788c648f7e74ae7a8c244_prof);

    }

    // line 36
    public function block_contenidoFooter1($context, array $blocks = array())
    {
        $__internal_e396c0b8f7adc65f86fa648ceb7b440251e843adfcf4020b0edbc2681d01c034 = $this->env->getExtension("native_profiler");
        $__internal_e396c0b8f7adc65f86fa648ceb7b440251e843adfcf4020b0edbc2681d01c034->enter($__internal_e396c0b8f7adc65f86fa648ceb7b440251e843adfcf4020b0edbc2681d01c034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoFooter1"));

        
        $__internal_e396c0b8f7adc65f86fa648ceb7b440251e843adfcf4020b0edbc2681d01c034->leave($__internal_e396c0b8f7adc65f86fa648ceb7b440251e843adfcf4020b0edbc2681d01c034_prof);

    }

    // line 45
    public function block_contenidoCuerpo2($context, array $blocks = array())
    {
        $__internal_4bb049c2a815e00aa640618a27524faf2e347be1764f2601d3d9eab503d2066b = $this->env->getExtension("native_profiler");
        $__internal_4bb049c2a815e00aa640618a27524faf2e347be1764f2601d3d9eab503d2066b->enter($__internal_4bb049c2a815e00aa640618a27524faf2e347be1764f2601d3d9eab503d2066b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoCuerpo2"));

        
        $__internal_4bb049c2a815e00aa640618a27524faf2e347be1764f2601d3d9eab503d2066b->leave($__internal_4bb049c2a815e00aa640618a27524faf2e347be1764f2601d3d9eab503d2066b_prof);

    }

    // line 46
    public function block_menuHoteles($context, array $blocks = array())
    {
        $__internal_cca8b7d53c64bdcb8f50f6e690ba8df6d238b88388a6a5e5e605035504abc7df = $this->env->getExtension("native_profiler");
        $__internal_cca8b7d53c64bdcb8f50f6e690ba8df6d238b88388a6a5e5e605035504abc7df->enter($__internal_cca8b7d53c64bdcb8f50f6e690ba8df6d238b88388a6a5e5e605035504abc7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuHoteles"));

        
        $__internal_cca8b7d53c64bdcb8f50f6e690ba8df6d238b88388a6a5e5e605035504abc7df->leave($__internal_cca8b7d53c64bdcb8f50f6e690ba8df6d238b88388a6a5e5e605035504abc7df_prof);

    }

    // line 50
    public function block_contenidoFooter2($context, array $blocks = array())
    {
        $__internal_de950fdb87c03ae6b71adf8c3cef690cff4cb009b560f159f4b5c3e7bfff9767 = $this->env->getExtension("native_profiler");
        $__internal_de950fdb87c03ae6b71adf8c3cef690cff4cb009b560f159f4b5c3e7bfff9767->enter($__internal_de950fdb87c03ae6b71adf8c3cef690cff4cb009b560f159f4b5c3e7bfff9767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoFooter2"));

        
        $__internal_de950fdb87c03ae6b71adf8c3cef690cff4cb009b560f159f4b5c3e7bfff9767->leave($__internal_de950fdb87c03ae6b71adf8c3cef690cff4cb009b560f159f4b5c3e7bfff9767_prof);

    }

    // line 59
    public function block_contenidoCuerpo3($context, array $blocks = array())
    {
        $__internal_0e19ffece20e9bba88bf954e982b78e2b4b9dee74fa76e3163694ba4351db53e = $this->env->getExtension("native_profiler");
        $__internal_0e19ffece20e9bba88bf954e982b78e2b4b9dee74fa76e3163694ba4351db53e->enter($__internal_0e19ffece20e9bba88bf954e982b78e2b4b9dee74fa76e3163694ba4351db53e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoCuerpo3"));

        
        $__internal_0e19ffece20e9bba88bf954e982b78e2b4b9dee74fa76e3163694ba4351db53e->leave($__internal_0e19ffece20e9bba88bf954e982b78e2b4b9dee74fa76e3163694ba4351db53e_prof);

    }

    // line 60
    public function block_menuBares($context, array $blocks = array())
    {
        $__internal_73c6f86bc9d5e6f1a93a8eaba1266016bb4a598133755bb7f537241ee81dfa58 = $this->env->getExtension("native_profiler");
        $__internal_73c6f86bc9d5e6f1a93a8eaba1266016bb4a598133755bb7f537241ee81dfa58->enter($__internal_73c6f86bc9d5e6f1a93a8eaba1266016bb4a598133755bb7f537241ee81dfa58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuBares"));

        
        $__internal_73c6f86bc9d5e6f1a93a8eaba1266016bb4a598133755bb7f537241ee81dfa58->leave($__internal_73c6f86bc9d5e6f1a93a8eaba1266016bb4a598133755bb7f537241ee81dfa58_prof);

    }

    // line 64
    public function block_contenidoFooter3($context, array $blocks = array())
    {
        $__internal_38b5cb8eb82d2cda006452194b7b7668d81b7b140426a493a59f6ec83298567c = $this->env->getExtension("native_profiler");
        $__internal_38b5cb8eb82d2cda006452194b7b7668d81b7b140426a493a59f6ec83298567c->enter($__internal_38b5cb8eb82d2cda006452194b7b7668d81b7b140426a493a59f6ec83298567c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoFooter3"));

        
        $__internal_38b5cb8eb82d2cda006452194b7b7668d81b7b140426a493a59f6ec83298567c->leave($__internal_38b5cb8eb82d2cda006452194b7b7668d81b7b140426a493a59f6ec83298567c_prof);

    }

    public function getTemplateName()
    {
        return "MobileBundle::plantillaInicial.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 64,  283 => 60,  272 => 59,  261 => 50,  250 => 46,  239 => 45,  228 => 36,  217 => 32,  206 => 31,  195 => 23,  184 => 19,  173 => 18,  162 => 5,  149 => 65,  147 => 64,  142 => 61,  139 => 60,  137 => 59,  133 => 58,  124 => 51,  122 => 50,  117 => 47,  114 => 46,  112 => 45,  108 => 44,  99 => 37,  97 => 36,  92 => 33,  89 => 32,  87 => 31,  83 => 30,  75 => 24,  73 => 23,  68 => 20,  65 => 19,  63 => 18,  59 => 17,  47 => 8,  41 => 5,  35 => 1,);
    }
}
