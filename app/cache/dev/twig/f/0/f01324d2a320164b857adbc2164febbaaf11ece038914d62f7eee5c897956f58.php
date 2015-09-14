<?php

/* MobileBundle::plantillaInicial.html.twig */
class __TwigTemplate_f01324d2a320164b857adbc2164febbaaf11ece038914d62f7eee5c897956f58 extends Twig_Template
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
        $__internal_8f7e9c1808780c3a6d62a5bdd746c5854532b2b99e3145b54ede1412c890bc5c = $this->env->getExtension("native_profiler");
        $__internal_8f7e9c1808780c3a6d62a5bdd746c5854532b2b99e3145b54ede1412c890bc5c->enter($__internal_8f7e9c1808780c3a6d62a5bdd746c5854532b2b99e3145b54ede1412c890bc5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MobileBundle::plantillaInicial.html.twig"));

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
\t<div data-role=\"page\" id=\"paginaInicial\"> 
\t\t<div data-role=\"content\">
\t\t\t<a href=\"#paginaInicial\" data-transition=\"fade\"><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logoCerveza.jpg"), "html", null, true);
        echo "\" ></img></a>
\t\t\t";
        // line 17
        $this->displayBlock('contenidoInicial', $context, $blocks);
        // line 18
        echo "\t\t\t";
        $this->displayBlock('menuCabecera', $context, $blocks);
        // line 19
        echo "\t\t</div>

\t\t<div data-role=\"footer\">\t
\t\t\t";
        // line 22
        $this->displayBlock('contenidoFooterInicial', $context, $blocks);
        // line 23
        echo "\t\t</div>
\t</div>

\t<div data-role=\"page\" id=\"restaurantes\"> 

\t\t<div data-role=\"content\">\t
\t\t\t<a href=\"#paginaInicial\" data-transition=\"fade\"><img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logoCerveza.jpg"), "html", null, true);
        echo "\" ></img></a>
\t\t\t";
        // line 30
        $this->displayBlock('contenidoCuerpo1', $context, $blocks);
        // line 31
        echo "\t\t\t";
        $this->displayBlock('menuRestaurantes', $context, $blocks);
        // line 32
        echo "\t\t</div>

\t\t<div data-role=\"footer\">\t
\t\t\t";
        // line 35
        $this->displayBlock('contenidoFooter1', $context, $blocks);
        // line 36
        echo "\t\t</div>

\t</div>

\t<div data-role=\"page\" id=\"hoteles\"> 

\t\t<div data-role=\"content\">\t
\t\t\t<a href=\"#paginaInicial\" data-transition=\"fade\"><img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logoCerveza.jpg"), "html", null, true);
        echo "\" ></img></a>
\t\t\t";
        // line 44
        $this->displayBlock('contenidoCuerpo2', $context, $blocks);
        // line 45
        echo "\t\t\t";
        $this->displayBlock('menuHoteles', $context, $blocks);
        // line 46
        echo "\t\t</div>

\t\t<div data-role=\"footer\">\t
\t\t\t";
        // line 49
        $this->displayBlock('contenidoFooter2', $context, $blocks);
        // line 50
        echo "\t\t</div>

\t</div>

\t<div data-role=\"page\" id=\"bares\"> 

\t\t<div data-role=\"content\">\t
\t\t\t<a href=\"#paginaInicial\" data-transition=\"fade\"><img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logoCerveza.jpg"), "html", null, true);
        echo "\" ></img></a>
\t\t\t";
        // line 58
        $this->displayBlock('contenidoCuerpo3', $context, $blocks);
        // line 59
        echo "\t\t\t";
        $this->displayBlock('menuBares', $context, $blocks);
        // line 60
        echo "\t\t</div>

\t\t<div data-role=\"footer\">\t
\t\t\t";
        // line 63
        $this->displayBlock('contenidoFooter3', $context, $blocks);
        // line 64
        echo "\t\t</div>

\t</div>

    </body>
</html>
";
        
        $__internal_8f7e9c1808780c3a6d62a5bdd746c5854532b2b99e3145b54ede1412c890bc5c->leave($__internal_8f7e9c1808780c3a6d62a5bdd746c5854532b2b99e3145b54ede1412c890bc5c_prof);

    }

    // line 5
    public function block_tituloPagina($context, array $blocks = array())
    {
        $__internal_7e7bcf337c41a324e366ec3b37935b232865fa5504f4dd53a6d37c7c39f4a463 = $this->env->getExtension("native_profiler");
        $__internal_7e7bcf337c41a324e366ec3b37935b232865fa5504f4dd53a6d37c7c39f4a463->enter($__internal_7e7bcf337c41a324e366ec3b37935b232865fa5504f4dd53a6d37c7c39f4a463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tituloPagina"));

        
        $__internal_7e7bcf337c41a324e366ec3b37935b232865fa5504f4dd53a6d37c7c39f4a463->leave($__internal_7e7bcf337c41a324e366ec3b37935b232865fa5504f4dd53a6d37c7c39f4a463_prof);

    }

    // line 17
    public function block_contenidoInicial($context, array $blocks = array())
    {
        $__internal_c9b45e01ecf612ec6f592ad983566f260a37f2c9f45e487459887ef8cf1501f0 = $this->env->getExtension("native_profiler");
        $__internal_c9b45e01ecf612ec6f592ad983566f260a37f2c9f45e487459887ef8cf1501f0->enter($__internal_c9b45e01ecf612ec6f592ad983566f260a37f2c9f45e487459887ef8cf1501f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoInicial"));

        
        $__internal_c9b45e01ecf612ec6f592ad983566f260a37f2c9f45e487459887ef8cf1501f0->leave($__internal_c9b45e01ecf612ec6f592ad983566f260a37f2c9f45e487459887ef8cf1501f0_prof);

    }

    // line 18
    public function block_menuCabecera($context, array $blocks = array())
    {
        $__internal_4d15850382714625945319c1f76d465f052bd2471bb1781eb9cfcde1e29fed0c = $this->env->getExtension("native_profiler");
        $__internal_4d15850382714625945319c1f76d465f052bd2471bb1781eb9cfcde1e29fed0c->enter($__internal_4d15850382714625945319c1f76d465f052bd2471bb1781eb9cfcde1e29fed0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuCabecera"));

        
        $__internal_4d15850382714625945319c1f76d465f052bd2471bb1781eb9cfcde1e29fed0c->leave($__internal_4d15850382714625945319c1f76d465f052bd2471bb1781eb9cfcde1e29fed0c_prof);

    }

    // line 22
    public function block_contenidoFooterInicial($context, array $blocks = array())
    {
        $__internal_b1c7b1f25e7b83512f062a755d293e0557010fbcfba4a136d09ca5c6fe52c371 = $this->env->getExtension("native_profiler");
        $__internal_b1c7b1f25e7b83512f062a755d293e0557010fbcfba4a136d09ca5c6fe52c371->enter($__internal_b1c7b1f25e7b83512f062a755d293e0557010fbcfba4a136d09ca5c6fe52c371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoFooterInicial"));

        
        $__internal_b1c7b1f25e7b83512f062a755d293e0557010fbcfba4a136d09ca5c6fe52c371->leave($__internal_b1c7b1f25e7b83512f062a755d293e0557010fbcfba4a136d09ca5c6fe52c371_prof);

    }

    // line 30
    public function block_contenidoCuerpo1($context, array $blocks = array())
    {
        $__internal_daf47701bd1949be71f370edf227727c2abe3e163fae668f7e742506363c70e4 = $this->env->getExtension("native_profiler");
        $__internal_daf47701bd1949be71f370edf227727c2abe3e163fae668f7e742506363c70e4->enter($__internal_daf47701bd1949be71f370edf227727c2abe3e163fae668f7e742506363c70e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoCuerpo1"));

        
        $__internal_daf47701bd1949be71f370edf227727c2abe3e163fae668f7e742506363c70e4->leave($__internal_daf47701bd1949be71f370edf227727c2abe3e163fae668f7e742506363c70e4_prof);

    }

    // line 31
    public function block_menuRestaurantes($context, array $blocks = array())
    {
        $__internal_1236e2f70cddcb4485d90979ec5d99afa33708ab9a321b90760944e3b1f3584e = $this->env->getExtension("native_profiler");
        $__internal_1236e2f70cddcb4485d90979ec5d99afa33708ab9a321b90760944e3b1f3584e->enter($__internal_1236e2f70cddcb4485d90979ec5d99afa33708ab9a321b90760944e3b1f3584e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuRestaurantes"));

        
        $__internal_1236e2f70cddcb4485d90979ec5d99afa33708ab9a321b90760944e3b1f3584e->leave($__internal_1236e2f70cddcb4485d90979ec5d99afa33708ab9a321b90760944e3b1f3584e_prof);

    }

    // line 35
    public function block_contenidoFooter1($context, array $blocks = array())
    {
        $__internal_c678332e510a40d5a6681bff61ae17995b01d91070285c72dc7220da40b10483 = $this->env->getExtension("native_profiler");
        $__internal_c678332e510a40d5a6681bff61ae17995b01d91070285c72dc7220da40b10483->enter($__internal_c678332e510a40d5a6681bff61ae17995b01d91070285c72dc7220da40b10483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoFooter1"));

        
        $__internal_c678332e510a40d5a6681bff61ae17995b01d91070285c72dc7220da40b10483->leave($__internal_c678332e510a40d5a6681bff61ae17995b01d91070285c72dc7220da40b10483_prof);

    }

    // line 44
    public function block_contenidoCuerpo2($context, array $blocks = array())
    {
        $__internal_d6f8925c0baca1164be9b7400433f09ef72b874a47a711dcafb06aa580d966db = $this->env->getExtension("native_profiler");
        $__internal_d6f8925c0baca1164be9b7400433f09ef72b874a47a711dcafb06aa580d966db->enter($__internal_d6f8925c0baca1164be9b7400433f09ef72b874a47a711dcafb06aa580d966db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoCuerpo2"));

        
        $__internal_d6f8925c0baca1164be9b7400433f09ef72b874a47a711dcafb06aa580d966db->leave($__internal_d6f8925c0baca1164be9b7400433f09ef72b874a47a711dcafb06aa580d966db_prof);

    }

    // line 45
    public function block_menuHoteles($context, array $blocks = array())
    {
        $__internal_b394cfc3c5d9198ea41877d56739c414a3fcd8d938a522ed77b51e53057c51ce = $this->env->getExtension("native_profiler");
        $__internal_b394cfc3c5d9198ea41877d56739c414a3fcd8d938a522ed77b51e53057c51ce->enter($__internal_b394cfc3c5d9198ea41877d56739c414a3fcd8d938a522ed77b51e53057c51ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuHoteles"));

        
        $__internal_b394cfc3c5d9198ea41877d56739c414a3fcd8d938a522ed77b51e53057c51ce->leave($__internal_b394cfc3c5d9198ea41877d56739c414a3fcd8d938a522ed77b51e53057c51ce_prof);

    }

    // line 49
    public function block_contenidoFooter2($context, array $blocks = array())
    {
        $__internal_ba2fe0f3289c455df8a8822a82793f1a0d77fed8b1a4b8d3edd145d0e8538686 = $this->env->getExtension("native_profiler");
        $__internal_ba2fe0f3289c455df8a8822a82793f1a0d77fed8b1a4b8d3edd145d0e8538686->enter($__internal_ba2fe0f3289c455df8a8822a82793f1a0d77fed8b1a4b8d3edd145d0e8538686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoFooter2"));

        
        $__internal_ba2fe0f3289c455df8a8822a82793f1a0d77fed8b1a4b8d3edd145d0e8538686->leave($__internal_ba2fe0f3289c455df8a8822a82793f1a0d77fed8b1a4b8d3edd145d0e8538686_prof);

    }

    // line 58
    public function block_contenidoCuerpo3($context, array $blocks = array())
    {
        $__internal_622970e9ca7090a737b34487ab1dc433e5d0f36bbe90fccf720b781f16e77ef9 = $this->env->getExtension("native_profiler");
        $__internal_622970e9ca7090a737b34487ab1dc433e5d0f36bbe90fccf720b781f16e77ef9->enter($__internal_622970e9ca7090a737b34487ab1dc433e5d0f36bbe90fccf720b781f16e77ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoCuerpo3"));

        
        $__internal_622970e9ca7090a737b34487ab1dc433e5d0f36bbe90fccf720b781f16e77ef9->leave($__internal_622970e9ca7090a737b34487ab1dc433e5d0f36bbe90fccf720b781f16e77ef9_prof);

    }

    // line 59
    public function block_menuBares($context, array $blocks = array())
    {
        $__internal_b2fd7d583acea67057ab8b4b069c02fd938bcf3c1717986befeacd2dcad6c8b2 = $this->env->getExtension("native_profiler");
        $__internal_b2fd7d583acea67057ab8b4b069c02fd938bcf3c1717986befeacd2dcad6c8b2->enter($__internal_b2fd7d583acea67057ab8b4b069c02fd938bcf3c1717986befeacd2dcad6c8b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuBares"));

        
        $__internal_b2fd7d583acea67057ab8b4b069c02fd938bcf3c1717986befeacd2dcad6c8b2->leave($__internal_b2fd7d583acea67057ab8b4b069c02fd938bcf3c1717986befeacd2dcad6c8b2_prof);

    }

    // line 63
    public function block_contenidoFooter3($context, array $blocks = array())
    {
        $__internal_e097a983466c45d03413078a2ea2163eec3b4cfc832097f025a186d83ade11ce = $this->env->getExtension("native_profiler");
        $__internal_e097a983466c45d03413078a2ea2163eec3b4cfc832097f025a186d83ade11ce->enter($__internal_e097a983466c45d03413078a2ea2163eec3b4cfc832097f025a186d83ade11ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoFooter3"));

        
        $__internal_e097a983466c45d03413078a2ea2163eec3b4cfc832097f025a186d83ade11ce->leave($__internal_e097a983466c45d03413078a2ea2163eec3b4cfc832097f025a186d83ade11ce_prof);

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
        return array (  293 => 63,  282 => 59,  271 => 58,  260 => 49,  249 => 45,  238 => 44,  227 => 35,  216 => 31,  205 => 30,  194 => 22,  183 => 18,  172 => 17,  161 => 5,  148 => 64,  146 => 63,  141 => 60,  138 => 59,  136 => 58,  132 => 57,  123 => 50,  121 => 49,  116 => 46,  113 => 45,  111 => 44,  107 => 43,  98 => 36,  96 => 35,  91 => 32,  88 => 31,  86 => 30,  82 => 29,  74 => 23,  72 => 22,  67 => 19,  64 => 18,  62 => 17,  58 => 16,  47 => 8,  41 => 5,  35 => 1,);
    }
}
