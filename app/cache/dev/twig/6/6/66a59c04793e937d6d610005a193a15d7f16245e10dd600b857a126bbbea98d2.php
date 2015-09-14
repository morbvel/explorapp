<?php

/* PCBundle::platillaMostrarNegocios.html.twig */
class __TwigTemplate_66a59c04793e937d6d610005a193a15d7f16245e10dd600b857a126bbbea98d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'urlDestino' => array($this, 'block_urlDestino'),
            'inputHidden' => array($this, 'block_inputHidden'),
            'cuerpoPagina' => array($this, 'block_cuerpoPagina'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ea991c0adf05d1cf2679bfd87e98d4b22a499265c6e9c2cda20a2c77fc545dc = $this->env->getExtension("native_profiler");
        $__internal_2ea991c0adf05d1cf2679bfd87e98d4b22a499265c6e9c2cda20a2c77fc545dc->enter($__internal_2ea991c0adf05d1cf2679bfd87e98d4b22a499265c6e9c2cda20a2c77fc545dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle::platillaMostrarNegocios.html.twig"));

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
\t\t
\t\t
\t\t
\t\t
\t\t<!--Script para ocultar o mostrar enlaces-->
\t\t<script>
\t\t\t\$(function() {
\t\t\t\tdocument.getElementById(\"enlaceCerrarSesion\").style.display = \"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["visibleCerrarSesion"]) ? $context["visibleCerrarSesion"] : $this->getContext($context, "visibleCerrarSesion")), "html", null, true);
        echo "\";
\t\t\t});
\t\t</script>

\t\t<!--Script para dejar fijo el menu-->
\t\t<script>
\t\t\t\$(window).bind('scroll', function () {
\t\t\t\tvar w = \$(window).width();
\t\t\t\tif( w > 1300 && \$(window).scrollTop() > 80 ){
\t\t\t\t\t\$('.contenedorMenu2').addClass('menuFijo2');
\t\t\t\t}
\t\t\t\telse if ( w < 1300 && \$(window).scrollTop() > 100 ){
\t\t\t\t\t\$('.contenedorMenu2').addClass('menuFijo2');
\t\t\t\t}
\t\t\t\telse{
\t\t\t\t\t\$('.contenedorMenu2').removeClass('menuFijo2');
\t\t\t\t}
\t\t\t});
\t\t</script>
\t\t
\t\t
\t\t<!--Script para la apertura de nuevas paginas o capas-->
\t\t<script>
\t\t\t\$(document).ready(function(){
\t\t\t\t\$('#abrirPopUp').click(function(){
\t\t\t\t\t\$('#popup').fadeIn('slow');
\t\t\t\t\t\$('.popup-overlay').fadeIn('slow');
\t\t\t\t\t\$('.popup-overlay').height(\$(window).height());
\t\t\t\t\treturn false;
\t\t\t\t});
\t\t\t\t
\t\t\t\t\$('#abrirPerfilUsuarios').click(function(){
\t\t\t\t\twindow.open (";
        // line 61
        $this->displayBlock('urlDestino', $context, $blocks);
        echo ", '_self', config='height=100, width=400, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, directories=no, status=no')
\t\t\t\t});
\t\t\t\t
\t\t\t\t\$('#close').click(function(){
\t\t\t\t\t\$('#popupSubirImagenes').fadeOut('slow');
\t\t\t\t\t\$('.popup-overlay').fadeOut('slow');
\t\t\t\t\treturn false;
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t});
\t\t</script>



\t\t<!--Script para la edicion de datos de la oferta-->
\t\t<script>
\t\t\tfunction editarOferta(){
\t\t\t
\t\t\t}
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
        // line 94
        echo $this->env->getExtension('routing')->getPath("pc_autentificar");
        echo "\" method=\"post\" id=\"formLogin\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formLogin"]) ? $context["formLogin"] : $this->getContext($context, "formLogin")), 'enctype');
        echo ">
\t\t\t\t\t";
        // line 95
        $this->displayBlock('inputHidden', $context, $blocks);
        // line 96
        echo "\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formLogin"]) ? $context["formLogin"] : $this->getContext($context, "formLogin")), 'widget');
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
        // line 107
        echo $this->env->getExtension('routing')->getPath("pc_homepage");
        echo "\" ><img id=\"logoEmpresa\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logoCerveza.jpg"), "html", null, true);
        echo "\" /></a>
\t\t\t</div>
\t\t</div>
\t\t

<!-------------------------------------------------------------------------------------------------------------------------------------------------------->
\t\t<!--Barra del Menu-->
\t\t<div class=\"contenedorMenu2\">
\t\t\t<nav>
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"";
        // line 117
        echo $this->env->getExtension('routing')->getPath("pc_restaurantes");
        echo "\" id=\"botonGrande\">Restaurantes</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 118
        echo $this->env->getExtension('routing')->getPath("pc_hoteles");
        echo "\" id=\"botonMediano\">Hoteles</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 119
        echo $this->env->getExtension('routing')->getPath("pc_bares");
        echo "\" id=\"botonPequeño\">Bares</a></li>
\t\t\t\t</ul>
\t\t\t\t<input type=\"image\" id=\"";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["idFotoBarraMenu"]) ? $context["idFotoBarraMenu"] : $this->getContext($context, "idFotoBarraMenu")), "html", null, true);
        echo "\" class=\"enlaceAccederIndex\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenPerfil"]) ? $context["rutaImagenPerfil"] : $this->getContext($context, "rutaImagenPerfil"))), "html", null, true);
        echo "\" title=\"Acceder a la zona de usuarios\" />
\t\t\t\t<a href=\"";
        // line 122
        echo $this->env->getExtension('routing')->getPath("pc_cerrarsesion");
        echo "\" id=\"enlaceCerrarSesion\" >Cerrar Sesi&oacute;n</a>
\t\t\t</nav>
\t\t</div>
<!-------------------------------------------------------------------------------------------------------------------------------------------------------->\t\t
\t\t
\t\t
\t\t
\t\t<!--Cuerpo de la Pagina-->
\t\t";
        // line 130
        $this->displayBlock('cuerpoPagina', $context, $blocks);
        // line 132
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
        
        $__internal_2ea991c0adf05d1cf2679bfd87e98d4b22a499265c6e9c2cda20a2c77fc545dc->leave($__internal_2ea991c0adf05d1cf2679bfd87e98d4b22a499265c6e9c2cda20a2c77fc545dc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c50e3947dc6dc25e35dc63d77b4ddf3710647d81e58316743597f26a83a84901 = $this->env->getExtension("native_profiler");
        $__internal_c50e3947dc6dc25e35dc63d77b4ddf3710647d81e58316743597f26a83a84901->enter($__internal_c50e3947dc6dc25e35dc63d77b4ddf3710647d81e58316743597f26a83a84901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c50e3947dc6dc25e35dc63d77b4ddf3710647d81e58316743597f26a83a84901->leave($__internal_c50e3947dc6dc25e35dc63d77b4ddf3710647d81e58316743597f26a83a84901_prof);

    }

    // line 61
    public function block_urlDestino($context, array $blocks = array())
    {
        $__internal_9eda02cc76e412376fdfe1bf683908af491e69b2a3b8a80d23f750f113ccab0f = $this->env->getExtension("native_profiler");
        $__internal_9eda02cc76e412376fdfe1bf683908af491e69b2a3b8a80d23f750f113ccab0f->enter($__internal_9eda02cc76e412376fdfe1bf683908af491e69b2a3b8a80d23f750f113ccab0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino"));

        
        $__internal_9eda02cc76e412376fdfe1bf683908af491e69b2a3b8a80d23f750f113ccab0f->leave($__internal_9eda02cc76e412376fdfe1bf683908af491e69b2a3b8a80d23f750f113ccab0f_prof);

    }

    // line 95
    public function block_inputHidden($context, array $blocks = array())
    {
        $__internal_c32312ca76270bc62b4e4acf03c34ca5e0ced09e7faf3a538c2cced121cb89b5 = $this->env->getExtension("native_profiler");
        $__internal_c32312ca76270bc62b4e4acf03c34ca5e0ced09e7faf3a538c2cced121cb89b5->enter($__internal_c32312ca76270bc62b4e4acf03c34ca5e0ced09e7faf3a538c2cced121cb89b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inputHidden"));

        
        $__internal_c32312ca76270bc62b4e4acf03c34ca5e0ced09e7faf3a538c2cced121cb89b5->leave($__internal_c32312ca76270bc62b4e4acf03c34ca5e0ced09e7faf3a538c2cced121cb89b5_prof);

    }

    // line 130
    public function block_cuerpoPagina($context, array $blocks = array())
    {
        $__internal_d2d036eb09cbfdb3719963153f35c369cabbf59a2a57b8a33a2ec63f3a5f898b = $this->env->getExtension("native_profiler");
        $__internal_d2d036eb09cbfdb3719963153f35c369cabbf59a2a57b8a33a2ec63f3a5f898b->enter($__internal_d2d036eb09cbfdb3719963153f35c369cabbf59a2a57b8a33a2ec63f3a5f898b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpoPagina"));

        // line 131
        echo "\t\t";
        
        $__internal_d2d036eb09cbfdb3719963153f35c369cabbf59a2a57b8a33a2ec63f3a5f898b->leave($__internal_d2d036eb09cbfdb3719963153f35c369cabbf59a2a57b8a33a2ec63f3a5f898b_prof);

    }

    public function getTemplateName()
    {
        return "PCBundle::platillaMostrarNegocios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 131,  269 => 130,  258 => 95,  247 => 61,  236 => 5,  212 => 132,  210 => 130,  199 => 122,  193 => 121,  188 => 119,  184 => 118,  180 => 117,  165 => 107,  150 => 96,  148 => 95,  142 => 94,  106 => 61,  71 => 29,  58 => 19,  50 => 14,  45 => 12,  38 => 8,  32 => 5,  26 => 1,);
    }
}
