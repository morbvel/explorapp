<?php

/* PCBundle::plantillaInicial.html.twig */
class __TwigTemplate_2594ce853232e31ff6ba83855e8bbfc2305f2b95d3b1fdeaf2b18733a00b08db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'urlDestino' => array($this, 'block_urlDestino'),
            'inputHidden' => array($this, 'block_inputHidden'),
            'slider' => array($this, 'block_slider'),
            'barraMenu' => array($this, 'block_barraMenu'),
            'cuerpoPagina' => array($this, 'block_cuerpoPagina'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html>
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<meta name=\"author\" content=\"Miguel Orbañanos\">
\t\t<meta name=\"viewport\" content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
\t\t<link rel=\"shortcut icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\" />
\t\t
\t\t
\t\t<!--Importarmos nuestra hoja de estilos-->
\t\t<link rel=\"stylesheet\" type=\"text/css\" media=\"(max-width: 3500px)\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/estilosEscritorio.css"), "html", null, true);
        echo "\"/>
\t\t<!-- bxSlider CSS file -->
\t\t<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/jquery.bxslider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t\t
\t\t
\t\t
\t\t<!-- Archivo con nuestros métodos Javascript -->
\t\t<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/metodosJavaScript.js"), "html", null, true);
        echo "\" ></script>
\t\t<!--descargamos la versión más reciente de jQuery-->
\t\t<script src=\"http://code.jquery.com/jquery-1.9.1.min.js\"></script>
\t\t<!-- bxSlider Javascript file -->
\t\t<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.bxslider.min.js"), "html", null, true);
        echo "\"></script>
\t\t<!-- ligthbox Javascript file -->
\t\t<script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.lightbox_me.js"), "html", null, true);
        echo "\"></script>
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t<!--Script para llamar al Slider-->
\t\t<script>
\t\t\t\$(function() {
\t\t\t\t\$('.bxslider').bxSlider();
\t\t\t});
\t\t</script>
\t\t
\t\t
\t\t
\t\t<!--Codigo jQuery para animar los enlaces internos-->
\t\t<script>
\t\t\t\$(function(){

\t\t\t\t\$('a[href*=#]').click(function() 
\t\t\t\t{
\t\t\t\t\tif (location.pathname.replace(/^\\//,'') == this.pathname.replace(/^\\//,'') && location.hostname == this.hostname)
\t\t\t\t\t{
\t\t\t\t\t\tvar \$target = \$(this.hash);
\t\t\t\t\t\t\$target = \$target.length && \$target || \$('[name=' + this.hash.slice(1) +']');
\t\t\t\t\t\tif (\$target.length)
\t\t\t\t\t\t{
\t\t\t\t\t\t\tvar targetOffset = \$target.offset().top;
\t\t\t\t\t\t\t\$('html,body').animate({scrollTop: targetOffset}, 1000);
\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t</script>
\t\t
\t\t
\t\t
\t\t<!--Script para dejar fijo el menu-->
\t\t<script>
\t\t\t\$(window).bind('scroll', function () {
\t\t\t\tvar w = \$(window).width();
\t\t\t\t// Pantallas de mas de 1300 pixeles
\t\t\t\tif ( w > 1700 && \$(window).scrollTop() > 1000 )
\t\t\t\t\t\$('.contenedorMenu').addClass('menuFijo');
\t\t\t\telse if( w < 1700 && w > 1400 && \$(window).scrollTop() > 897)
\t\t\t\t\t\$('.contenedorMenu').addClass('menuFijo');
\t\t\t\telse if( w < 1400 && w > 1000 && \$(window).scrollTop() > 760)
\t\t\t\t\t\$('.contenedorMenu').addClass('menuFijo');
\t\t\t\telse if( w < 1300 && \$(window).scrollTop() > 700 )
\t\t\t\t\t\$('.contenedorMenu').addClass('menuFijo');
\t\t\t\telse
\t\t\t\t\t\$('.contenedorMenu').removeClass('menuFijo');
\t\t\t});
\t\t</script>
\t\t
\t\t<!--Script para ocultar o mostrar el enlace de cerrar sesion-->
\t\t<script>
\t\t\t\$(function() {
\t\t\t\tdocument.getElementById(\"enlaceCerrarSesion\").style.display = \"";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["visibleCerrarSesion"]) ? $context["visibleCerrarSesion"] : null), "html", null, true);
        echo "\";
\t\t\t});
\t\t</script>
\t\t
\t\t<!--Script para crear el efecto parallax-->
\t\t<script>
\t\t\t\$(document).ready(function(){
\t\t\t\t\$pantalla = \$(window);
\t\t\t\t\$('.parallax').each(function(){
\t\t\t\t\tvar \$this = \$(this);
\t\t\t\t\t\$pantalla.scroll(function() {
\t\t\t\t\t\tvar y;
\t\t\t\t\t\tif (\$(window).width() > 3500){
\t\t\t\t\t\t\ty = -(\$pantalla.scrollTop() / \$this.data('movimiento')); 
\t\t\t\t\t\t\ty2 = y;
\t\t\t\t\t\t\ty3 = y;
\t\t\t\t\t\t}
\t\t\t\t\t\telse if (\$(window).width() < 3500){
\t\t\t\t\t\t\ty = -((\$pantalla.scrollTop() - 0) / \$this.data('movimiento')); 
\t\t\t\t\t\t\ty2 = -((\$pantalla.scrollTop() - 2000) / \$this.data('movimiento'));
\t\t\t\t\t\t\ty3 = -((\$pantalla.scrollTop() - 2500) / \$this.data('movimiento'));
\t\t\t\t\t\t\tvar altura = '500px';
\t\t\t\t\t\t\t\$this.css({height: altura});
\t\t\t\t\t\t}
\t\t\t\t\t\tvar xy = '50% '+ y + 'px';
\t\t\t\t\t\tvar xy2 = '50% '+ y2 + 'px';
\t\t\t\t\t\tvar xy3 = '50% '+ y3 + 'px';
\t\t\t\t\t\t
\t\t\t\t\t\tdocument.getElementById('relleno1').style.backgroundPosition = xy;
\t\t\t\t\t\tdocument.getElementById('relleno2').style.backgroundPosition = xy2;
\t\t\t\t\t\tdocument.getElementById('relleno3').style.backgroundPosition = xy3;
\t\t\t\t   });
\t\t\t\t});
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
\t\t\t\t
\t\t\t\t\$('#close').click(function(){
\t\t\t\t\t\$('#popup').fadeOut('slow');
\t\t\t\t\t\$('.popup-overlay').fadeOut('slow');
\t\t\t\t\treturn false;
\t\t\t\t});

\t\t\t\t\$('#abrirPerfilUsuarios').click(function(){
\t\t\t\t\twindow.open (";
        // line 139
        $this->displayBlock('urlDestino', $context, $blocks);
        echo ", '_self', config='height=100, width=400, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, directories=no, status=no')
\t\t\t\t});
\t\t\t});
\t\t</script>
\t\t
\t\t<!--FIN DEL HEAD-->
\t</head>
\t
\t
\t<body>
\t\t<!--Capa del PopUp-->
\t\t<div id=\"popup\">
\t\t\t<div class=\"content-popup\">
\t\t\t\t<div class=\"close\"><a href=\"#\" id=\"close\">&nbsp;X&nbsp;</a></div>
\t\t\t\t<h2>Inserte sus datos personales</h2>
\t\t\t\t
\t\t\t\t<form action=\"";
        // line 155
        echo $this->env->getExtension('routing')->getPath("pc_autentificar");
        echo "\" method=\"post\" id=\"formLogin\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formLogin"]) ? $context["formLogin"] : null), 'enctype');
        echo ">
\t\t\t\t\t";
        // line 156
        $this->displayBlock('inputHidden', $context, $blocks);
        // line 157
        echo "\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formLogin"]) ? $context["formLogin"] : null), 'widget');
        echo "
\t\t\t\t\t<input type=\"submit\" id=\"enviarLogin\" name=\"enviarlogin\" value=\"Aceptar\"/>
\t\t\t\t\t<input type=\"submit\" id=\"nuevoRegistro\" name=\"nuevoRegistro\" value=\"Nuevo Registro\"/>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<!--Barra Inicial-->
\t\t<div id=\"barraInicial\">
\t\t\t<div id=\"contenedorInicial\">
\t\t\t\t<a href=\"";
        // line 167
        echo $this->env->getExtension('routing')->getPath("pc_homepage");
        echo "\" ><img id=\"logoEmpresa\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logoCerveza.jpg"), "html", null, true);
        echo "\" /></a>
\t\t\t</div>
\t\t</div>
\t\t

<!-------------------------------------------------------------------------------------------------------------------------------------------------------->
\t\t<!--Plantillas para el slider-->
\t\t";
        // line 174
        $this->displayBlock('slider', $context, $blocks);
        // line 175
        echo "<!-------------------------------------------------------------------------------------------------------------------------------------------------------->\t\t



<!-------------------------------------------------------------------------------------------------------------------------------------------------------->
\t\t<!--Barra del Menu-->
\t\t";
        // line 181
        $this->displayBlock('barraMenu', $context, $blocks);
        // line 182
        echo "<!-------------------------------------------------------------------------------------------------------------------------------------------------------->\t\t
\t\t
\t\t
\t\t
\t\t<!--Cuerpo de la Pagina-->
\t\t";
        // line 187
        $this->displayBlock('cuerpoPagina', $context, $blocks);
        // line 189
        echo "\t\t
\t\t<a href=\"#barraInicial\" class=\"boton-top\">▲</a>
\t\t
\t\t<!--Codigo jQuery para crear el boton 'Hacia arriba'-->
\t\t<script>\t
\t\t\t\$(window).scroll(function(){
\t\t\t\tif (\$(this).scrollTop() > 400) {
\t\t\t\t\t\$('.boton-top').fadeIn();
\t\t\t\t} else {
\t\t\t\t\t\$('.boton-top').fadeOut();
\t\t\t\t}
\t\t\t});
\t\t</script>
\t\t
\t\t<!--FIN DEL BODY-->
\t</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 139
    public function block_urlDestino($context, array $blocks = array())
    {
    }

    // line 156
    public function block_inputHidden($context, array $blocks = array())
    {
    }

    // line 174
    public function block_slider($context, array $blocks = array())
    {
    }

    // line 181
    public function block_barraMenu($context, array $blocks = array())
    {
    }

    // line 187
    public function block_cuerpoPagina($context, array $blocks = array())
    {
        // line 188
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "PCBundle::plantillaInicial.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 188,  309 => 187,  304 => 181,  299 => 174,  294 => 156,  289 => 139,  284 => 5,  263 => 189,  261 => 187,  254 => 182,  252 => 181,  244 => 175,  242 => 174,  230 => 167,  216 => 157,  214 => 156,  208 => 155,  189 => 139,  131 => 84,  69 => 25,  64 => 23,  57 => 19,  49 => 14,  44 => 12,  37 => 8,  31 => 5,  25 => 1,);
    }
}
