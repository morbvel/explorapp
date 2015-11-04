<?php

/* PCBundle::platillaMostrarNegocios.html.twig */
class __TwigTemplate_e9e14d4054477a22555828dddedb33f15beb460b053a70c76eadc835e97f2cda extends Twig_Template
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
        $__internal_1c80a1a4ac14d01c5fbf36ab757cfb10efb50287cc4b6c37bd63019aa98d4ca9 = $this->env->getExtension("native_profiler");
        $__internal_1c80a1a4ac14d01c5fbf36ab757cfb10efb50287cc4b6c37bd63019aa98d4ca9->enter($__internal_1c80a1a4ac14d01c5fbf36ab757cfb10efb50287cc4b6c37bd63019aa98d4ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle::platillaMostrarNegocios.html.twig"));

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

<!-------------------------------------------------------------------------------------------------------------------------------------------------------->
\t\t<!--Barra del Menu-->
\t\t<div class=\"contenedorMenu2\">
\t\t\t<nav>
\t\t\t<a href=\"";
        // line 108
        echo $this->env->getExtension('routing')->getPath("pc_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./img/home_icon.png"), "html", null, true);
        echo "\" class=\"iconoIndex\" style=\"margin-left: 30px; margin-right: 30px;\" /></a>
\t\t\t<a href=\"";
        // line 109
        echo $this->env->getExtension('routing')->getPath("mobile_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./img/mobile_icon.png"), "html", null, true);
        echo "\" class=\"iconoIndex\" /></a>
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"";
        // line 111
        echo $this->env->getExtension('routing')->getPath("pc_restaurantes");
        echo "\" id=\"botonGrande\">Restaurantes</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 112
        echo $this->env->getExtension('routing')->getPath("pc_hoteles");
        echo "\" id=\"botonMediano\">Hoteles</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 113
        echo $this->env->getExtension('routing')->getPath("pc_bares");
        echo "\" id=\"botonPequeño\">Bares</a></li>
\t\t\t\t</ul>
\t\t\t\t<input type=\"image\" id=\"";
        // line 115
        echo twig_escape_filter($this->env, (isset($context["idFotoBarraMenu"]) ? $context["idFotoBarraMenu"] : $this->getContext($context, "idFotoBarraMenu")), "html", null, true);
        echo "\" class=\"enlaceAccederIndex\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenPerfil"]) ? $context["rutaImagenPerfil"] : $this->getContext($context, "rutaImagenPerfil"))), "html", null, true);
        echo "\" title=\"Acceder a la zona de usuarios\" />
\t\t\t\t<a href=\"";
        // line 116
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
        // line 124
        $this->displayBlock('cuerpoPagina', $context, $blocks);
        // line 126
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
        
        $__internal_1c80a1a4ac14d01c5fbf36ab757cfb10efb50287cc4b6c37bd63019aa98d4ca9->leave($__internal_1c80a1a4ac14d01c5fbf36ab757cfb10efb50287cc4b6c37bd63019aa98d4ca9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e8ec57237e13ab88eae571aaaab98936d28e8fb2d80ae5f02d007fe1120a410 = $this->env->getExtension("native_profiler");
        $__internal_0e8ec57237e13ab88eae571aaaab98936d28e8fb2d80ae5f02d007fe1120a410->enter($__internal_0e8ec57237e13ab88eae571aaaab98936d28e8fb2d80ae5f02d007fe1120a410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0e8ec57237e13ab88eae571aaaab98936d28e8fb2d80ae5f02d007fe1120a410->leave($__internal_0e8ec57237e13ab88eae571aaaab98936d28e8fb2d80ae5f02d007fe1120a410_prof);

    }

    // line 61
    public function block_urlDestino($context, array $blocks = array())
    {
        $__internal_47f32f028a30404a6b6abf64ba31532bdac90a6199c50a3ea7d11af6474e41ac = $this->env->getExtension("native_profiler");
        $__internal_47f32f028a30404a6b6abf64ba31532bdac90a6199c50a3ea7d11af6474e41ac->enter($__internal_47f32f028a30404a6b6abf64ba31532bdac90a6199c50a3ea7d11af6474e41ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino"));

        
        $__internal_47f32f028a30404a6b6abf64ba31532bdac90a6199c50a3ea7d11af6474e41ac->leave($__internal_47f32f028a30404a6b6abf64ba31532bdac90a6199c50a3ea7d11af6474e41ac_prof);

    }

    // line 95
    public function block_inputHidden($context, array $blocks = array())
    {
        $__internal_dd29e00a8a69d10cb4f9c4c3e8fd8091b84963c619084b09d7094abfff9eb1f5 = $this->env->getExtension("native_profiler");
        $__internal_dd29e00a8a69d10cb4f9c4c3e8fd8091b84963c619084b09d7094abfff9eb1f5->enter($__internal_dd29e00a8a69d10cb4f9c4c3e8fd8091b84963c619084b09d7094abfff9eb1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inputHidden"));

        
        $__internal_dd29e00a8a69d10cb4f9c4c3e8fd8091b84963c619084b09d7094abfff9eb1f5->leave($__internal_dd29e00a8a69d10cb4f9c4c3e8fd8091b84963c619084b09d7094abfff9eb1f5_prof);

    }

    // line 124
    public function block_cuerpoPagina($context, array $blocks = array())
    {
        $__internal_14e3150d041e065af05027a8319199ccf8c8c5597ef0dee2c20e7ce4f3fca03a = $this->env->getExtension("native_profiler");
        $__internal_14e3150d041e065af05027a8319199ccf8c8c5597ef0dee2c20e7ce4f3fca03a->enter($__internal_14e3150d041e065af05027a8319199ccf8c8c5597ef0dee2c20e7ce4f3fca03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpoPagina"));

        // line 125
        echo "\t\t";
        
        $__internal_14e3150d041e065af05027a8319199ccf8c8c5597ef0dee2c20e7ce4f3fca03a->leave($__internal_14e3150d041e065af05027a8319199ccf8c8c5597ef0dee2c20e7ce4f3fca03a_prof);

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
        return array (  274 => 125,  268 => 124,  257 => 95,  246 => 61,  235 => 5,  211 => 126,  209 => 124,  198 => 116,  192 => 115,  187 => 113,  183 => 112,  179 => 111,  172 => 109,  166 => 108,  150 => 96,  148 => 95,  142 => 94,  106 => 61,  71 => 29,  58 => 19,  50 => 14,  45 => 12,  38 => 8,  32 => 5,  26 => 1,);
    }
}
