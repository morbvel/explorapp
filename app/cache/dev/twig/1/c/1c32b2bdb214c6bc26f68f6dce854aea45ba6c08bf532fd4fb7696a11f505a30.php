<?php

/* PCBundle::plantillaRegistros.html.twig */
class __TwigTemplate_1c32b2bdb214c6bc26f68f6dce854aea45ba6c08bf532fd4fb7696a11f505a30 extends Twig_Template
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
        $__internal_67ec8930a4397292f7506da87b217e3367c560c6c7c85b66d5569a76fff04d17 = $this->env->getExtension("native_profiler");
        $__internal_67ec8930a4397292f7506da87b217e3367c560c6c7c85b66d5569a76fff04d17->enter($__internal_67ec8930a4397292f7506da87b217e3367c560c6c7c85b66d5569a76fff04d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle::plantillaRegistros.html.twig"));

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
\t\t\t\t// Pantallas de mas de 1300 pixeles
\t\t\t\tif ( w > 1400 && \$(window).scrollTop() > 90 )
\t\t\t\t\t\$('.contenedorMenu2').addClass('menuFijo2');
\t\t\t\telse if( w < 1400 && w > 1000 && \$(window).scrollTop() > 90)
\t\t\t\t\t\$('.contenedorMenu2').addClass('menuFijo2');
\t\t\t\telse if( w < 1300 && \$(window).scrollTop() > 90 )
\t\t\t\t\t\$('.contenedorMenu2').addClass('menuFijo2');
\t\t\t\telse
\t\t\t\t\t\$('.contenedorMenu2').removeClass('menuFijo2');
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
\t
\t\t<div id=\"barraInicial\">
\t\t\t<div id=\"contenedorInicial\">
\t\t\t\t<a href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("pc_homepage");
        echo "\" ><img id=\"logoEmpresa\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logoCerveza.jpg"), "html", null, true);
        echo "\" /></a>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<!--Barra del Menu-->
\t\t<div class=\"contenedorMenu2\">
\t\t\t<nav>
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"";
        // line 103
        echo $this->env->getExtension('routing')->getPath("pc_restaurantes");
        echo "\" id=\"botonGrande\">Restaurantes</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 104
        echo $this->env->getExtension('routing')->getPath("pc_hoteles");
        echo "\" id=\"botonMediano\">Hoteles</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 105
        echo $this->env->getExtension('routing')->getPath("pc_bares");
        echo "\" id=\"botonPequeño\">Bares</a></li>
\t\t\t\t</ul>
\t\t\t\t<input type=\"image\" id=\"";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["idFotoBarraMenu"]) ? $context["idFotoBarraMenu"] : $this->getContext($context, "idFotoBarraMenu")), "html", null, true);
        echo "\" class=\"enlaceAccederIndex\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenPerfil"]) ? $context["rutaImagenPerfil"] : $this->getContext($context, "rutaImagenPerfil"))), "html", null, true);
        echo "\" title=\"Acceder a la zona de usuarios\" />
\t\t\t\t<a href=\"";
        // line 108
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
        // line 116
        $this->displayBlock('videoRegistro', $context, $blocks);
        // line 118
        echo "\t\t\t
\t\t\t<!--Texto para añadir (si necesario) la autentificación del usuario-->
\t\t\t";
        // line 120
        $this->displayBlock('textoAcceder', $context, $blocks);
        // line 121
        echo "\t\t\t
\t\t\t<h2>";
        // line 122
        $this->displayBlock('tituloRegistro', $context, $blocks);
        echo "</h2>
\t\t\t<!--En este bloque se añade el formulario adecuado a cada registro-->
\t\t\t";
        // line 124
        $this->displayBlock('formularioRegistro', $context, $blocks);
        // line 125
        echo "\t\t</div>
\t</body>
</html>
";
        
        $__internal_67ec8930a4397292f7506da87b217e3367c560c6c7c85b66d5569a76fff04d17->leave($__internal_67ec8930a4397292f7506da87b217e3367c560c6c7c85b66d5569a76fff04d17_prof);

    }

    // line 5
    public function block_titleRegistros($context, array $blocks = array())
    {
        $__internal_ecc700580b1ffbf59aadea4726e229c95c48ce55125cf8a7e095f9899efae95d = $this->env->getExtension("native_profiler");
        $__internal_ecc700580b1ffbf59aadea4726e229c95c48ce55125cf8a7e095f9899efae95d->enter($__internal_ecc700580b1ffbf59aadea4726e229c95c48ce55125cf8a7e095f9899efae95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleRegistros"));

        
        $__internal_ecc700580b1ffbf59aadea4726e229c95c48ce55125cf8a7e095f9899efae95d->leave($__internal_ecc700580b1ffbf59aadea4726e229c95c48ce55125cf8a7e095f9899efae95d_prof);

    }

    // line 69
    public function block_urlDestino($context, array $blocks = array())
    {
        $__internal_20f83b33ab114bffa6f53cf35726f570e7c57ae5c1f989862e04ebb040d5bf6f = $this->env->getExtension("native_profiler");
        $__internal_20f83b33ab114bffa6f53cf35726f570e7c57ae5c1f989862e04ebb040d5bf6f->enter($__internal_20f83b33ab114bffa6f53cf35726f570e7c57ae5c1f989862e04ebb040d5bf6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino"));

        
        $__internal_20f83b33ab114bffa6f53cf35726f570e7c57ae5c1f989862e04ebb040d5bf6f->leave($__internal_20f83b33ab114bffa6f53cf35726f570e7c57ae5c1f989862e04ebb040d5bf6f_prof);

    }

    // line 85
    public function block_inputHidden($context, array $blocks = array())
    {
        $__internal_20216d964705a1322f49b84e254c72011aec27e89ae0126f3ca765452ed0d846 = $this->env->getExtension("native_profiler");
        $__internal_20216d964705a1322f49b84e254c72011aec27e89ae0126f3ca765452ed0d846->enter($__internal_20216d964705a1322f49b84e254c72011aec27e89ae0126f3ca765452ed0d846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inputHidden"));

        
        $__internal_20216d964705a1322f49b84e254c72011aec27e89ae0126f3ca765452ed0d846->leave($__internal_20216d964705a1322f49b84e254c72011aec27e89ae0126f3ca765452ed0d846_prof);

    }

    // line 116
    public function block_videoRegistro($context, array $blocks = array())
    {
        $__internal_f7ef6b40b8266cf612cd6067466b2ec4001801b1859221109dc2c31ed03e1fc7 = $this->env->getExtension("native_profiler");
        $__internal_f7ef6b40b8266cf612cd6067466b2ec4001801b1859221109dc2c31ed03e1fc7->enter($__internal_f7ef6b40b8266cf612cd6067466b2ec4001801b1859221109dc2c31ed03e1fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "videoRegistro"));

        // line 117
        echo "\t\t\t";
        
        $__internal_f7ef6b40b8266cf612cd6067466b2ec4001801b1859221109dc2c31ed03e1fc7->leave($__internal_f7ef6b40b8266cf612cd6067466b2ec4001801b1859221109dc2c31ed03e1fc7_prof);

    }

    // line 120
    public function block_textoAcceder($context, array $blocks = array())
    {
        $__internal_4b80073148f8bbe0fa3c65758e445ca275246e61a4462b0a6b94cf158f9bc2b0 = $this->env->getExtension("native_profiler");
        $__internal_4b80073148f8bbe0fa3c65758e445ca275246e61a4462b0a6b94cf158f9bc2b0->enter($__internal_4b80073148f8bbe0fa3c65758e445ca275246e61a4462b0a6b94cf158f9bc2b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textoAcceder"));

        
        $__internal_4b80073148f8bbe0fa3c65758e445ca275246e61a4462b0a6b94cf158f9bc2b0->leave($__internal_4b80073148f8bbe0fa3c65758e445ca275246e61a4462b0a6b94cf158f9bc2b0_prof);

    }

    // line 122
    public function block_tituloRegistro($context, array $blocks = array())
    {
        $__internal_6c0c66df617449aa00bf816ef4051c956454c769a96916b13a8509cf9c5cc475 = $this->env->getExtension("native_profiler");
        $__internal_6c0c66df617449aa00bf816ef4051c956454c769a96916b13a8509cf9c5cc475->enter($__internal_6c0c66df617449aa00bf816ef4051c956454c769a96916b13a8509cf9c5cc475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tituloRegistro"));

        
        $__internal_6c0c66df617449aa00bf816ef4051c956454c769a96916b13a8509cf9c5cc475->leave($__internal_6c0c66df617449aa00bf816ef4051c956454c769a96916b13a8509cf9c5cc475_prof);

    }

    // line 124
    public function block_formularioRegistro($context, array $blocks = array())
    {
        $__internal_afabd98269b995d65927cc1962337d854e3c2ddc4385c194d01d1277fbfe6d76 = $this->env->getExtension("native_profiler");
        $__internal_afabd98269b995d65927cc1962337d854e3c2ddc4385c194d01d1277fbfe6d76->enter($__internal_afabd98269b995d65927cc1962337d854e3c2ddc4385c194d01d1277fbfe6d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formularioRegistro"));

        
        $__internal_afabd98269b995d65927cc1962337d854e3c2ddc4385c194d01d1277fbfe6d76->leave($__internal_afabd98269b995d65927cc1962337d854e3c2ddc4385c194d01d1277fbfe6d76_prof);

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
        return array (  295 => 124,  284 => 122,  273 => 120,  266 => 117,  260 => 116,  249 => 85,  238 => 69,  227 => 5,  217 => 125,  215 => 124,  210 => 122,  207 => 121,  205 => 120,  201 => 118,  199 => 116,  188 => 108,  182 => 107,  177 => 105,  173 => 104,  169 => 103,  156 => 95,  143 => 86,  141 => 85,  135 => 84,  117 => 69,  85 => 40,  81 => 39,  52 => 13,  46 => 10,  40 => 7,  35 => 5,  29 => 1,);
    }
}
