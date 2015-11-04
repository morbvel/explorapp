<?php

/* PCBundle::plantillaInicial.html.twig */
class __TwigTemplate_e7d9055cb8044402a3d278c1038712db6dddad66e148f3535a484afe8462f9ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'urlDestino' => array($this, 'block_urlDestino'),
            'inputHidden' => array($this, 'block_inputHidden'),
            'urlBusqueda' => array($this, 'block_urlBusqueda'),
            'slider' => array($this, 'block_slider'),
            'barraMenu' => array($this, 'block_barraMenu'),
            'cuerpoPagina' => array($this, 'block_cuerpoPagina'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba4c7ad04ec0618ae13c13a678d0fb1f9de5f02fb519db74f60a74650fe4dc38 = $this->env->getExtension("native_profiler");
        $__internal_ba4c7ad04ec0618ae13c13a678d0fb1f9de5f02fb519db74f60a74650fe4dc38->enter($__internal_ba4c7ad04ec0618ae13c13a678d0fb1f9de5f02fb519db74f60a74650fe4dc38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle::plantillaInicial.html.twig"));

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
        echo twig_escape_filter($this->env, (isset($context["visibleCerrarSesion"]) ? $context["visibleCerrarSesion"] : $this->getContext($context, "visibleCerrarSesion")), "html", null, true);
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

\t\t\t\t\$('#abrirPopUpBusqueda').click(function(){
\t\t\t\t\t\$('#popup2').fadeIn('slow');
\t\t\t\t\t\$('.popup-overlay').fadeIn('slow');
\t\t\t\t\t\$('.popup-overlay').height(\$(window).height());
\t\t\t\t\treturn false;
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t\t\$('#close').click(function(){
\t\t\t\t\t\$('#popup').fadeOut('slow');
\t\t\t\t\t
\t\t\t\t\t\$('.popup-overlay').fadeOut('slow');
\t\t\t\t\treturn false;
\t\t\t\t});

\t\t\t\t\$('#close2').click(function(){
\t\t\t\t\t\$('#popup2').fadeOut('slow');
\t\t\t\t\t\$('.popup-overlay').fadeOut('slow');
\t\t\t\t\treturn false;
\t\t\t\t});

\t\t\t\t\$('#abrirPerfilUsuarios').click(function(){
\t\t\t\t\twindow.open (";
        // line 153
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
        // line 169
        echo $this->env->getExtension('routing')->getPath("pc_autentificar");
        echo "\" method=\"post\" id=\"formLogin\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formLogin"]) ? $context["formLogin"] : $this->getContext($context, "formLogin")), 'enctype');
        echo ">
\t\t\t\t\t";
        // line 170
        $this->displayBlock('inputHidden', $context, $blocks);
        // line 171
        echo "\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formLogin"]) ? $context["formLogin"] : $this->getContext($context, "formLogin")), 'widget');
        echo "
\t\t\t\t\t<input type=\"submit\" id=\"enviarLogin\" name=\"enviarlogin\" value=\"Aceptar\"/>
\t\t\t\t\t<input type=\"submit\" id=\"nuevoRegistro\" name=\"nuevoRegistro\" value=\"Nuevo Registro\"/>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>

\t\t<!--PopUp de Búsqueda de Negocios-->
\t\t<div id=\"popup2\">
\t\t\t<div class=\"content-popup\">
\t\t\t\t<div class=\"close\"><a href=\"#\" id=\"close2\">&nbsp;X&nbsp;</a></div>
\t\t\t\t<h2>Introduzca el nombre o ciudad del Negocio</h2>
\t\t\t\t
\t\t\t\t<form action=\"";
        // line 184
        $this->displayBlock('urlBusqueda', $context, $blocks);
        echo "\" method=\"post\" id=\"formBusqueda\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formBusqueda"]) ? $context["formBusqueda"] : $this->getContext($context, "formBusqueda")), 'enctype');
        echo ">
\t\t\t\t\t";
        // line 185
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formBusqueda"]) ? $context["formBusqueda"] : $this->getContext($context, "formBusqueda")), 'widget');
        echo "
\t\t\t\t\t<input type=\"submit\" id=\"enviarBusqueda\" name=\"enviarBusqueda\" value=\"Buscar\"/>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t\t

<!-------------------------------------------------------------------------------------------------------------------------------------------------------->
\t\t<!--Plantillas para el slider-->
\t\t<div id=\"top\" style=\"height: 0px; width: 100%;\">
\t\t</div>
\t\t";
        // line 196
        $this->displayBlock('slider', $context, $blocks);
        // line 197
        echo "<!-------------------------------------------------------------------------------------------------------------------------------------------------------->\t\t



<!-------------------------------------------------------------------------------------------------------------------------------------------------------->
\t\t<!--Barra del Menu-->
\t\t";
        // line 203
        $this->displayBlock('barraMenu', $context, $blocks);
        // line 204
        echo "<!-------------------------------------------------------------------------------------------------------------------------------------------------------->\t\t
\t\t
\t\t
\t\t
\t\t<!--Cuerpo de la Pagina-->
\t\t";
        // line 209
        $this->displayBlock('cuerpoPagina', $context, $blocks);
        // line 211
        echo "\t\t
\t\t<a href=\"#top\" class=\"boton-top\">▲</a>
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
        
        $__internal_ba4c7ad04ec0618ae13c13a678d0fb1f9de5f02fb519db74f60a74650fe4dc38->leave($__internal_ba4c7ad04ec0618ae13c13a678d0fb1f9de5f02fb519db74f60a74650fe4dc38_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b900a5e38791ffc774d511620676ccbae106c3211f8104d8b4c0f768f6ca080 = $this->env->getExtension("native_profiler");
        $__internal_8b900a5e38791ffc774d511620676ccbae106c3211f8104d8b4c0f768f6ca080->enter($__internal_8b900a5e38791ffc774d511620676ccbae106c3211f8104d8b4c0f768f6ca080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_8b900a5e38791ffc774d511620676ccbae106c3211f8104d8b4c0f768f6ca080->leave($__internal_8b900a5e38791ffc774d511620676ccbae106c3211f8104d8b4c0f768f6ca080_prof);

    }

    // line 153
    public function block_urlDestino($context, array $blocks = array())
    {
        $__internal_f0124404bc510cb459b59ae475cfa054b4991d2b8544210d55483020876d459c = $this->env->getExtension("native_profiler");
        $__internal_f0124404bc510cb459b59ae475cfa054b4991d2b8544210d55483020876d459c->enter($__internal_f0124404bc510cb459b59ae475cfa054b4991d2b8544210d55483020876d459c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino"));

        
        $__internal_f0124404bc510cb459b59ae475cfa054b4991d2b8544210d55483020876d459c->leave($__internal_f0124404bc510cb459b59ae475cfa054b4991d2b8544210d55483020876d459c_prof);

    }

    // line 170
    public function block_inputHidden($context, array $blocks = array())
    {
        $__internal_2dee57fdda0fbc6c8422ddfefe4f7fd0bb59a1ada96dc365abed3ecd76bd45be = $this->env->getExtension("native_profiler");
        $__internal_2dee57fdda0fbc6c8422ddfefe4f7fd0bb59a1ada96dc365abed3ecd76bd45be->enter($__internal_2dee57fdda0fbc6c8422ddfefe4f7fd0bb59a1ada96dc365abed3ecd76bd45be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inputHidden"));

        
        $__internal_2dee57fdda0fbc6c8422ddfefe4f7fd0bb59a1ada96dc365abed3ecd76bd45be->leave($__internal_2dee57fdda0fbc6c8422ddfefe4f7fd0bb59a1ada96dc365abed3ecd76bd45be_prof);

    }

    // line 184
    public function block_urlBusqueda($context, array $blocks = array())
    {
        $__internal_8add8127d63de905e543da89c0b0944472bb3ed72fffcbb2883f585f02fc3f3f = $this->env->getExtension("native_profiler");
        $__internal_8add8127d63de905e543da89c0b0944472bb3ed72fffcbb2883f585f02fc3f3f->enter($__internal_8add8127d63de905e543da89c0b0944472bb3ed72fffcbb2883f585f02fc3f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlBusqueda"));

        
        $__internal_8add8127d63de905e543da89c0b0944472bb3ed72fffcbb2883f585f02fc3f3f->leave($__internal_8add8127d63de905e543da89c0b0944472bb3ed72fffcbb2883f585f02fc3f3f_prof);

    }

    // line 196
    public function block_slider($context, array $blocks = array())
    {
        $__internal_80cded7e7a06c9c4bd9ce54a483ec59fdb3e36e606efb26342261f0c8357745d = $this->env->getExtension("native_profiler");
        $__internal_80cded7e7a06c9c4bd9ce54a483ec59fdb3e36e606efb26342261f0c8357745d->enter($__internal_80cded7e7a06c9c4bd9ce54a483ec59fdb3e36e606efb26342261f0c8357745d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        
        $__internal_80cded7e7a06c9c4bd9ce54a483ec59fdb3e36e606efb26342261f0c8357745d->leave($__internal_80cded7e7a06c9c4bd9ce54a483ec59fdb3e36e606efb26342261f0c8357745d_prof);

    }

    // line 203
    public function block_barraMenu($context, array $blocks = array())
    {
        $__internal_8a9a993720d5030a863f80614827f5ff6db76c5ec7b3547519be3a176977afd4 = $this->env->getExtension("native_profiler");
        $__internal_8a9a993720d5030a863f80614827f5ff6db76c5ec7b3547519be3a176977afd4->enter($__internal_8a9a993720d5030a863f80614827f5ff6db76c5ec7b3547519be3a176977afd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barraMenu"));

        
        $__internal_8a9a993720d5030a863f80614827f5ff6db76c5ec7b3547519be3a176977afd4->leave($__internal_8a9a993720d5030a863f80614827f5ff6db76c5ec7b3547519be3a176977afd4_prof);

    }

    // line 209
    public function block_cuerpoPagina($context, array $blocks = array())
    {
        $__internal_eac04c6f3a713e2329701004cad2a91828663475399c98fde4050afb417bce2f = $this->env->getExtension("native_profiler");
        $__internal_eac04c6f3a713e2329701004cad2a91828663475399c98fde4050afb417bce2f->enter($__internal_eac04c6f3a713e2329701004cad2a91828663475399c98fde4050afb417bce2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpoPagina"));

        // line 210
        echo "\t\t";
        
        $__internal_eac04c6f3a713e2329701004cad2a91828663475399c98fde4050afb417bce2f->leave($__internal_eac04c6f3a713e2329701004cad2a91828663475399c98fde4050afb417bce2f_prof);

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
        return array (  388 => 210,  382 => 209,  371 => 203,  360 => 196,  349 => 184,  338 => 170,  327 => 153,  316 => 5,  292 => 211,  290 => 209,  283 => 204,  281 => 203,  273 => 197,  271 => 196,  257 => 185,  251 => 184,  234 => 171,  232 => 170,  226 => 169,  207 => 153,  135 => 84,  73 => 25,  68 => 23,  61 => 19,  53 => 14,  48 => 12,  41 => 8,  35 => 5,  29 => 1,);
    }
}
