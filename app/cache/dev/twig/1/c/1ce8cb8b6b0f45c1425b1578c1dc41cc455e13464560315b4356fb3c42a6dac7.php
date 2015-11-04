<?php

/* PCBundle::plantillaRegistros.html.twig */
class __TwigTemplate_1ce8cb8b6b0f45c1425b1578c1dc41cc455e13464560315b4356fb3c42a6dac7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titleRegistros' => array($this, 'block_titleRegistros'),
            'urlDestino' => array($this, 'block_urlDestino'),
            'inputHidden' => array($this, 'block_inputHidden'),
            'videoRegistro' => array($this, 'block_videoRegistro'),
            'textoAcceder' => array($this, 'block_textoAcceder'),
            'tituloRegistro' => array($this, 'block_tituloRegistro'),
            'formularioRegistro' => array($this, 'block_formularioRegistro'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_574596c2847bfd994e08450786b27ba185af0dde2196a37da2e4e61f9b308a65 = $this->env->getExtension("native_profiler");
        $__internal_574596c2847bfd994e08450786b27ba185af0dde2196a37da2e4e61f9b308a65->enter($__internal_574596c2847bfd994e08450786b27ba185af0dde2196a37da2e4e61f9b308a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle::plantillaRegistros.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<title>";
        // line 5
        $this->displayBlock('titleRegistros', $context, $blocks);
        echo "</title>
\t\t<meta name=\"author\" content=\"Miguel Orbañanos\">
\t\t<link rel=\"shortcut icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\" />
\t\t
\t\t<!--Importarmos nuestra hoja de estilos-->
\t\t<link rel=\"stylesheet\" type=\"text/css\" media=\"(max-width: 3500px)\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/estilosEscritorio.css"), "html", null, true);
        echo "\"/>
\t\t
\t\t<!-- Archivo con nuestros métodos Javascript -->
\t\t<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/metodosJavaScript.js"), "html", null, true);
        echo "\"></script>
\t\t<!--descargamos la versión más reciente de jQuery-->
\t\t<script src=\"http://code.jquery.com/jquery-1.9.1.min.js\"></script>
\t\t
\t\t
\t\t<!--Script para dejar fijo el menu-->
\t\t<script>
\t\t\t\$(window).bind('scroll', function () {
\t\t\t\tvar w = \$(window).width();
\t\t\t\tif( w > 1300 && \$(window).scrollTop() > 0 ){
\t\t\t\t\t\$('.contenedorMenu2').addClass('menuFijo2');
\t\t\t\t}
\t\t\t\telse if ( w < 1300 && \$(window).scrollTop() > 0 ){
\t\t\t\t\t\$('.contenedorMenu2').addClass('menuFijo2');
\t\t\t\t}
\t\t\t\telse{
\t\t\t\t\t\$('.contenedorMenu2').removeClass('menuFijo2');
\t\t\t\t}
\t\t\t});
\t\t</script>
\t\t
\t\t
\t\t
\t\t<!--Script para ocultar o mostrar enlaces-->
\t\t<script>
\t\t\t\$(function() {
\t\t\t\tdocument.getElementById(\"enlaceCerrarSesion\").style.display = \"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["visibleCerrarSesion"]) ? $context["visibleCerrarSesion"] : $this->getContext($context, "visibleCerrarSesion")), "html", null, true);
        echo "\";
\t\t\t\tdocument.getElementById(\"parrafoAccederUsuarios\").style.display = \"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["visibleParrafoAcceder"]) ? $context["visibleParrafoAcceder"] : $this->getContext($context, "visibleParrafoAcceder")), "html", null, true);
        echo "\";
\t\t\t});
\t\t</script>
\t\t
\t\t
\t\t<!--Script para la creacion del PopUp o de la apertura de la pagina de usuario-->
\t\t<script>
\t\t\t\$(document).ready(function(){
\t\t\t\t\$('#abrirPopUp').click(function(){
\t\t\t\t\t\$('#popup').fadeIn('slow');
\t\t\t\t\t\$('.popup-overlay').fadeIn('slow');
\t\t\t\t\t\$('.popup-overlay').height(\$(window).height());
\t\t\t\t\treturn false;
\t\t\t\t});
\t\t\t\t
\t\t\t\t\$('#parrafoAccederUsuarios').click(function(){
\t\t\t\t\t\$('#popup').fadeIn('slow');
\t\t\t\t\t\$('.popup-overlay').fadeIn('slow');
\t\t\t\t\t\$('.popup-overlay').height(\$(window).height());
\t\t\t\t\treturn false;
\t\t\t\t});

\t\t\t\t\$('#close').click(function(){
\t\t\t\t\t\$('#popup').fadeOut('slow');
\t\t\t\t\t\$('.popup-overlay').fadeOut('slow');
\t\t\t\t\treturn false;
\t\t\t\t});

\t\t\t\t\$('#abrirPerfilUsuarios').click(function(){
\t\t\t\t\twindow.open (";
        // line 69
        $this->displayBlock('urlDestino', $context, $blocks);
        echo ", '_self', config='height=100, width=400, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, directories=no, status=no')
\t\t\t\t});

\t\t\t});
\t\t</script>
\t\t
\t</head>
\t
\t<body onload=\"bgadj();\">
\t\t<!--Capa del PopUp-->
\t\t<div id=\"popup\">
\t\t\t<div class=\"content-popup\">
\t\t\t\t<div class=\"close\"><a href=\"#\" id=\"close\">&nbsp;X&nbsp;</a></div>
\t\t\t\t<h2>Inserte sus datos personales</h2>
\t\t\t\t
\t\t\t\t<form action=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("pc_autentificar");
        echo "\" method=\"post\" id=\"formLogin\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formLogin"]) ? $context["formLogin"] : $this->getContext($context, "formLogin")), 'enctype');
        echo ">
\t\t\t\t\t";
        // line 85
        $this->displayBlock('inputHidden', $context, $blocks);
        // line 86
        echo "\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formLogin"]) ? $context["formLogin"] : $this->getContext($context, "formLogin")), 'widget');
        echo "
\t\t\t\t\t<input type=\"submit\" id=\"enviarLogin\" name=\"enviarlogin\" value=\"Aceptar\"/>
\t\t\t\t\t<input type=\"submit\" id=\"nuevoRegistro\" name=\"nuevoRegistro\" value=\"Nuevo Registro\"/>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<!--Barra del Menu-->
\t\t<div class=\"contenedorMenu2\">
\t\t\t<nav>
\t\t\t<a href=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("pc_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./img/home_icon.png"), "html", null, true);
        echo "\" class=\"iconoIndex\" style=\"margin-left: 30px; margin-right: 30px;\" /></a>
\t\t\t<a href=\"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("mobile_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./img/mobile_icon.png"), "html", null, true);
        echo "\" class=\"iconoIndex\" /></a>
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("pc_restaurantes");
        echo "\" id=\"botonGrande\">Restaurantes</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 100
        echo $this->env->getExtension('routing')->getPath("pc_hoteles");
        echo "\" id=\"botonMediano\">Hoteles</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 101
        echo $this->env->getExtension('routing')->getPath("pc_bares");
        echo "\" id=\"botonPequeño\">Bares</a></li>
\t\t\t\t</ul>
\t\t\t\t<input type=\"image\" id=\"";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["idFotoBarraMenu"]) ? $context["idFotoBarraMenu"] : $this->getContext($context, "idFotoBarraMenu")), "html", null, true);
        echo "\" class=\"enlaceAccederIndex\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenPerfil"]) ? $context["rutaImagenPerfil"] : $this->getContext($context, "rutaImagenPerfil"))), "html", null, true);
        echo "\" title=\"Acceder a la zona de usuarios\" />
\t\t\t\t<a href=\"";
        // line 104
        echo $this->env->getExtension('routing')->getPath("pc_cerrarsesion");
        echo "\" id=\"enlaceCerrarSesion\" >Cerrar Sesi&oacute;n</a>
\t\t\t</nav>
\t\t</div>
\t\t
\t\t<!--Capa de los datos a añadir-->
\t\t<div id=\"capaNuevoRegistro\">
\t\t
\t\t\t<!--Capa para añadir el video de fondo-->
\t\t\t";
        // line 112
        $this->displayBlock('videoRegistro', $context, $blocks);
        // line 114
        echo "\t\t\t
\t\t\t<!--Texto para añadir (si necesario) la autentificación del usuario-->
\t\t\t";
        // line 116
        $this->displayBlock('textoAcceder', $context, $blocks);
        // line 117
        echo "\t\t\t
\t\t\t<h2>";
        // line 118
        $this->displayBlock('tituloRegistro', $context, $blocks);
        echo "</h2>
\t\t\t<!--En este bloque se añade el formulario adecuado a cada registro-->
\t\t\t";
        // line 120
        $this->displayBlock('formularioRegistro', $context, $blocks);
        // line 121
        echo "\t\t</div>
\t</body>
</html>
";
        
        $__internal_574596c2847bfd994e08450786b27ba185af0dde2196a37da2e4e61f9b308a65->leave($__internal_574596c2847bfd994e08450786b27ba185af0dde2196a37da2e4e61f9b308a65_prof);

    }

    // line 5
    public function block_titleRegistros($context, array $blocks = array())
    {
        $__internal_f05798e627403644f7843b0d4732e3b403a62f6c2d18a289efa6ec6d51402f2a = $this->env->getExtension("native_profiler");
        $__internal_f05798e627403644f7843b0d4732e3b403a62f6c2d18a289efa6ec6d51402f2a->enter($__internal_f05798e627403644f7843b0d4732e3b403a62f6c2d18a289efa6ec6d51402f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleRegistros"));

        
        $__internal_f05798e627403644f7843b0d4732e3b403a62f6c2d18a289efa6ec6d51402f2a->leave($__internal_f05798e627403644f7843b0d4732e3b403a62f6c2d18a289efa6ec6d51402f2a_prof);

    }

    // line 69
    public function block_urlDestino($context, array $blocks = array())
    {
        $__internal_bb1fcbc765a8f7554ff54fc09b0e02cbf73082ace52ec543ecf382a57a138b07 = $this->env->getExtension("native_profiler");
        $__internal_bb1fcbc765a8f7554ff54fc09b0e02cbf73082ace52ec543ecf382a57a138b07->enter($__internal_bb1fcbc765a8f7554ff54fc09b0e02cbf73082ace52ec543ecf382a57a138b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino"));

        
        $__internal_bb1fcbc765a8f7554ff54fc09b0e02cbf73082ace52ec543ecf382a57a138b07->leave($__internal_bb1fcbc765a8f7554ff54fc09b0e02cbf73082ace52ec543ecf382a57a138b07_prof);

    }

    // line 85
    public function block_inputHidden($context, array $blocks = array())
    {
        $__internal_209fc59b1d986533d4310b15fedf8738b7e0a77c27033e95383e835bf8a6522d = $this->env->getExtension("native_profiler");
        $__internal_209fc59b1d986533d4310b15fedf8738b7e0a77c27033e95383e835bf8a6522d->enter($__internal_209fc59b1d986533d4310b15fedf8738b7e0a77c27033e95383e835bf8a6522d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inputHidden"));

        
        $__internal_209fc59b1d986533d4310b15fedf8738b7e0a77c27033e95383e835bf8a6522d->leave($__internal_209fc59b1d986533d4310b15fedf8738b7e0a77c27033e95383e835bf8a6522d_prof);

    }

    // line 112
    public function block_videoRegistro($context, array $blocks = array())
    {
        $__internal_983d5755011823274480629050d1524936d17f4bfaafe2efa7ce06b3f12e938d = $this->env->getExtension("native_profiler");
        $__internal_983d5755011823274480629050d1524936d17f4bfaafe2efa7ce06b3f12e938d->enter($__internal_983d5755011823274480629050d1524936d17f4bfaafe2efa7ce06b3f12e938d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "videoRegistro"));

        // line 113
        echo "\t\t\t";
        
        $__internal_983d5755011823274480629050d1524936d17f4bfaafe2efa7ce06b3f12e938d->leave($__internal_983d5755011823274480629050d1524936d17f4bfaafe2efa7ce06b3f12e938d_prof);

    }

    // line 116
    public function block_textoAcceder($context, array $blocks = array())
    {
        $__internal_64f4685918abe5a600983acead5cb8e237c57d26a104c9f0fc67835282ab4086 = $this->env->getExtension("native_profiler");
        $__internal_64f4685918abe5a600983acead5cb8e237c57d26a104c9f0fc67835282ab4086->enter($__internal_64f4685918abe5a600983acead5cb8e237c57d26a104c9f0fc67835282ab4086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textoAcceder"));

        
        $__internal_64f4685918abe5a600983acead5cb8e237c57d26a104c9f0fc67835282ab4086->leave($__internal_64f4685918abe5a600983acead5cb8e237c57d26a104c9f0fc67835282ab4086_prof);

    }

    // line 118
    public function block_tituloRegistro($context, array $blocks = array())
    {
        $__internal_b587bdc7b8bbcfa6f453a6eb206bb13d57a924d0195d7b6ae7b7b65e6fb92bb6 = $this->env->getExtension("native_profiler");
        $__internal_b587bdc7b8bbcfa6f453a6eb206bb13d57a924d0195d7b6ae7b7b65e6fb92bb6->enter($__internal_b587bdc7b8bbcfa6f453a6eb206bb13d57a924d0195d7b6ae7b7b65e6fb92bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tituloRegistro"));

        
        $__internal_b587bdc7b8bbcfa6f453a6eb206bb13d57a924d0195d7b6ae7b7b65e6fb92bb6->leave($__internal_b587bdc7b8bbcfa6f453a6eb206bb13d57a924d0195d7b6ae7b7b65e6fb92bb6_prof);

    }

    // line 120
    public function block_formularioRegistro($context, array $blocks = array())
    {
        $__internal_0c4d6d0719efcf8793fa5d42d7ad5ea94f00c27d0527b31b2750fc379724433a = $this->env->getExtension("native_profiler");
        $__internal_0c4d6d0719efcf8793fa5d42d7ad5ea94f00c27d0527b31b2750fc379724433a->enter($__internal_0c4d6d0719efcf8793fa5d42d7ad5ea94f00c27d0527b31b2750fc379724433a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formularioRegistro"));

        
        $__internal_0c4d6d0719efcf8793fa5d42d7ad5ea94f00c27d0527b31b2750fc379724433a->leave($__internal_0c4d6d0719efcf8793fa5d42d7ad5ea94f00c27d0527b31b2750fc379724433a_prof);

    }

    public function getTemplateName()
    {
        return "PCBundle::plantillaRegistros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 120,  285 => 118,  274 => 116,  267 => 113,  261 => 112,  250 => 85,  239 => 69,  228 => 5,  218 => 121,  216 => 120,  211 => 118,  208 => 117,  206 => 116,  202 => 114,  200 => 112,  189 => 104,  183 => 103,  178 => 101,  174 => 100,  170 => 99,  163 => 97,  157 => 96,  143 => 86,  141 => 85,  135 => 84,  117 => 69,  85 => 40,  81 => 39,  52 => 13,  46 => 10,  40 => 7,  35 => 5,  29 => 1,);
    }
}
