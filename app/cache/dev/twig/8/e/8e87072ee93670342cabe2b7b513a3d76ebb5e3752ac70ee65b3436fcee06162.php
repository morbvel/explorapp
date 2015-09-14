<?php

/* PCBundle::plantillaPerfilesNegocios.html.twig */
class __TwigTemplate_8e87072ee93670342cabe2b7b513a3d76ebb5e3752ac70ee65b3436fcee06162 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titlePerfiles' => array($this, 'block_titlePerfiles'),
            'urlDestino' => array($this, 'block_urlDestino'),
            'inputHidden' => array($this, 'block_inputHidden'),
            'idCuerpoPerfil' => array($this, 'block_idCuerpoPerfil'),
            'hiddenPerfiles' => array($this, 'block_hiddenPerfiles'),
            'tablaDatosPerfil' => array($this, 'block_tablaDatosPerfil'),
            'urlDestino2' => array($this, 'block_urlDestino2'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ffbeaa522cbae80719acb81e5d8b712356e7fe84f87aaa34bfa22c24fcb63852 = $this->env->getExtension("native_profiler");
        $__internal_ffbeaa522cbae80719acb81e5d8b712356e7fe84f87aaa34bfa22c24fcb63852->enter($__internal_ffbeaa522cbae80719acb81e5d8b712356e7fe84f87aaa34bfa22c24fcb63852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle::plantillaPerfilesNegocios.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<title>";
        // line 5
        $this->displayBlock('titlePerfiles', $context, $blocks);
        echo "</title>
\t\t<meta name=\"author\" content=\"Miguel Orbañanos\">
\t\t<link rel=\"shortcut icon\" href=\"./img/favicon.ico\" />
\t\t
\t\t<!--Importarmos nuestra hoja de estilos-->
\t\t<link rel=\"stylesheet\" type=\"text/css\" media=\"(max-width: 3500px)\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/estilosEscritorio.css"), "html", null, true);
        echo "\"/>
\t\t<link rel=\"stylesheet\" type=\"text/css\" media=\"(max-width: 1030px)\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/estilosTablets1.css"), "html", null, true);
        echo "\"/>
\t\t<link rel=\"stylesheet\" type=\"text/css\" media=\"(max-width: 770px)\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/estilosTablets2.css"), "html", null, true);
        echo "\"/>
\t\t
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html;charset=UTF-8\">
\t\t
\t\t<!-- Archivo con nuestros métodos Javascript -->
\t\t<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/metodosJavaScript.js"), "html", null, true);
        echo "\"></script>
\t\t<!--descargamos la versión más reciente de jQuery-->
\t\t<script src=\"http://code.jquery.com/jquery-1.9.1.min.js\"></script>
\t\t
\t\t
\t\t
\t\t
\t\t
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

\t\t\t\t\$('#abrirPerfilUsuarios').click(function(){
\t\t\t\t\twindow.open (";
        // line 54
        $this->displayBlock('urlDestino', $context, $blocks);
        echo ", '_self', config='height=100, width=400, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, directories=no, status=no')
\t\t\t\t});
\t\t\t\t
\t\t\t\t//Abrir PopUp de subir imagenes
\t\t\t\t\$('#imagenPerfil').click(function(){
\t\t\t\t\t\$('#popupSubirImagenes').fadeIn('slow');
\t\t\t\t\t\$('.popup-overlay').fadeIn('slow');
\t\t\t\t\t\$('.popup-overlay').height(\$(window).height());
\t\t\t\t\treturn false;
\t\t\t\t});
\t\t\t\t
\t\t\t\t\$('#close').click(function(){
\t\t\t\t\t\$('#popupSubirImagenes').fadeOut('slow');
\t\t\t\t\t\$('.popup-overlay').fadeOut('slow');
\t\t\t\t\treturn false;
\t\t\t\t});


\t\t\t\t\$('#closeLogin').click(function(){
\t\t\t\t\t\$('#popup').fadeOut('slow');
\t\t\t\t\t\$('.popup-overlay').fadeOut('slow');
\t\t\t\t\treturn false;
\t\t\t\t});
\t\t\t\t

\t\t\t\t\$('#botonEditarPerfilNegocio').click(function(){
\t\t\t\t\tdocument.getElementById(\"tablaDatosNegocios\").style.display = 'none';
\t\t\t\t\tdocument.getElementById(\"formuEditarPerfilNegocio\").style.display = 'inherit';
\t\t\t\t\tdocument.getElementById(\"cancelarCambiosPerfilNegocio\").style.display = 'inherit';
\t\t\t\t\tdocument.getElementById(\"aceptarCambiosPerfilNegocio\").style.display = 'inherit';
\t\t\t\t\tdocument.getElementById(\"eliminarDatosPerfilNegocio\").style.display = 'inherit';
\t\t\t\t\tdocument.getElementById(\"botonEditarPerfilNegocio\").style.display = 'none';
\t\t\t\t\tdocument.getElementById(\"spanNegociosAdvertencia\").style.display = 'inherit';
\t\t\t\t\treturn false;
\t\t\t\t});\t\t\t\t


\t\t\t\tdocument.getElementById(\"enlaceCerrarSesion\").style.display = \"";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["visibleCerrarSesion"]) ? $context["visibleCerrarSesion"] : $this->getContext($context, "visibleCerrarSesion")), "html", null, true);
        echo "\";
\t\t\t\tdocument.getElementById(\"botonEditarPerfilNegocio\").style.display = \"";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["visibleEditarPerfilNegocio"]) ? $context["visibleEditarPerfilNegocio"] : $this->getContext($context, "visibleEditarPerfilNegocio")), "html", null, true);
        echo "\";
\t\t\t\tdocument.getElementById(\"botonNuevoProductoOferta\").style.display = \"";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["visibleEditarPerfilNegocio"]) ? $context["visibleEditarPerfilNegocio"] : $this->getContext($context, "visibleEditarPerfilNegocio")), "html", null, true);
        echo "\";
\t\t\t});
\t\t</script>

\t\t
\t\t<!--JavaScript para mostar la contraseña-->
\t\t<script>

\t\t\tfunction cancelarInput(){
\t\t\t\tdocument.getElementById(\"tablaDatosNegocios\").style.display = 'inherit';
\t\t\t\t\tdocument.getElementById(\"formuEditarPerfilNegocio\").style.display = 'none';
\t\t\t\t\tdocument.getElementById(\"cancelarCambiosPerfilNegocio\").style.display = 'none';
\t\t\t\t\tdocument.getElementById(\"aceptarCambiosPerfilNegocio\").style.display = 'none';
\t\t\t\t\tdocument.getElementById(\"eliminarDatosPerfilNegocio\").style.display = 'none';
\t\t\t\t\tdocument.getElementById(\"botonEditarPerfilNegocio\").style.display = 'inherit';
\t\t\t\t\tdocument.getElementById(\"spanNegociosAdvertencia\").style.display = 'none';
\t\t\t\t\treturn false;
\t\t\t}\t
\t\t</script>
\t\t
\t\t
\t\t
\t</head>
\t<body>

\t\t<!--Capa del PopUp-->
\t\t<div id=\"popup\">
\t\t\t<div class=\"content-popup\">
\t\t\t\t<div class=\"close\"><a href=\"#\" id=\"closeLogin\">&nbsp;X&nbsp;</a></div>
\t\t\t\t<h2>Inserte sus datos personales</h2>
\t\t\t\t
\t\t\t\t<form action=\"";
        // line 124
        echo $this->env->getExtension('routing')->getPath("pc_autentificar");
        echo "\" method=\"post\" id=\"formLogin\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formLogin"]) ? $context["formLogin"] : $this->getContext($context, "formLogin")), 'enctype');
        echo ">
\t\t\t\t\t";
        // line 125
        $this->displayBlock('inputHidden', $context, $blocks);
        // line 126
        echo "\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formLogin"]) ? $context["formLogin"] : $this->getContext($context, "formLogin")), 'widget');
        echo "
\t\t\t\t\t<input type=\"submit\" id=\"enviarLogin\" name=\"enviarlogin\" value=\"Aceptar\"/>
\t\t\t\t\t<input type=\"submit\" id=\"nuevoRegistro\" name=\"nuevoRegistro\" value=\"Nuevo Registro\"/>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t
\t\t<!--Capa del PopUp de subir imagenes-->
\t\t<div id=\"popupSubirImagenes\">
\t\t\t<div class=\"content-popup\">
\t\t\t\t<div class=\"close\"><a href=\"#\" id=\"close\">&nbsp;X&nbsp;</a></div>
\t\t\t\t
\t\t\t\t<header class=\"contenidoSubirImagenes\">
\t\t\t\t\t<h2>Cambiar la imagen de perfil de usuario</h2>
\t\t\t\t</header>
\t\t\t\t
\t\t\t\t<form name=\"formularioFicheros\" id=\"formularioFicheros\" action=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pc_subirimagen", array("isNegocio" => (isset($context["isNegocio"]) ? $context["isNegocio"] : $this->getContext($context, "isNegocio")))), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t<table id=\"tablaCambiarFoto\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<output id=\"list\"></output>
\t\t\t\t\t\t\t\t<img src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenPerfil"]) ? $context["rutaImagenPerfil"] : $this->getContext($context, "rutaImagenPerfil"))), "html", null, true);
        echo "\" name=\"imagen\" id=\"previsualizarImagenPerfil\">
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td><input type=\"file\" name=\"files\" id=\"files\" ></td>
\t\t\t\t\t\t\t<td><input type=\"submit\" value=\"Subir Fichero\"></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</form>
\t\t\t\t
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t
\t
\t\t<!--Capa del PopUp de aceptar eliminar perfil-->
\t\t<div id=\"popupEliminarPerfil\">
\t\t\t<div class=\"content-popup\">
\t\t\t\t<div class=\"close\"><a href=\"#\" id=\"closeCapaPerfil\">&nbsp;X&nbsp;</a></div>
\t\t\t\t
\t\t\t\t<form action=\"eliminarPerfil.php\" method=\"POST\">
\t\t\t\t\t<input type=\"hidden\" name=\"codigoEliminarPerfil\" value=\"1000at200j\">
\t\t\t\t\t
\t\t\t\t\t<table id=\"tablaPopupEliminarPerfil\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"2\" ><h2>Esperamos haber sido de gran utilidad tanto para ti como para tu bolsillo. ¡Hasta pronto!</h2></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td><input type=\"submit\" id=\"aceptarEliminarPerfil\" value=\"Darse de baja\"></input></td>
\t\t\t\t\t\t\t<td><input type=\"button\" id=\"cancelarEliminarPerfil\" value=\"Cancelar\"></input></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</form>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t
\t\t<div id=\"barraInicial\">
\t\t\t<div id=\"contenedorInicial\">
\t\t\t\t<a href=\"";
        // line 186
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
        // line 194
        echo $this->env->getExtension('routing')->getPath("pc_restaurantes");
        echo "\" id=\"botonGrande\">Restaurantes</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 195
        echo $this->env->getExtension('routing')->getPath("pc_hoteles");
        echo "\" id=\"botonMediano\">Hoteles</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 196
        echo $this->env->getExtension('routing')->getPath("pc_bares");
        echo "\" id=\"botonPequeño\">Bares</a></li>
\t\t\t\t</ul>
\t\t\t\t<input type=\"image\" id=\"";
        // line 198
        echo twig_escape_filter($this->env, (isset($context["idFotoBarraMenu"]) ? $context["idFotoBarraMenu"] : $this->getContext($context, "idFotoBarraMenu")), "html", null, true);
        echo "\" class=\"enlaceAccederIndex\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenPerfilUsuario"]) ? $context["rutaImagenPerfilUsuario"] : $this->getContext($context, "rutaImagenPerfilUsuario"))), "html", null, true);
        echo "\" title=\"Acceder a la zona de usuarios\" />
\t\t\t\t<a href=\"";
        // line 199
        echo $this->env->getExtension('routing')->getPath("pc_cerrarsesion");
        echo "\" id=\"enlaceCerrarSesion\" >Cerrar Sesi&oacute;n</a>
\t\t\t</nav>
\t\t</div>
\t\t
\t\t
\t\t
\t\t<div id=\"";
        // line 205
        $this->displayBlock('idCuerpoPerfil', $context, $blocks);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, (isset($context["tipoNegocio"]) ? $context["tipoNegocio"] : $this->getContext($context, "tipoNegocio")), "html", null, true);
        echo "\">
\t\t
\t\t\t<input type=\"image\" id=\"imagenPerfil\" class=\"enlaceAcceder\" src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenPerfil"]) ? $context["rutaImagenPerfil"] : $this->getContext($context, "rutaImagenPerfil"))), "html", null, true);
        echo "\"/>
\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t<form action=\"";
        // line 210
        echo $this->env->getExtension('routing')->getPath("pc_editarperfilnegocio");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formEditarDatosNegocio"]) ? $context["formEditarDatosNegocio"] : $this->getContext($context, "formEditarDatosNegocio")), 'enctype');
        echo ">
\t\t\t\t";
        // line 211
        $this->displayBlock('hiddenPerfiles', $context, $blocks);
        // line 212
        echo "\t\t\t\t
\t\t\t\t";
        // line 213
        $this->displayBlock('tablaDatosPerfil', $context, $blocks);
        // line 214
        echo "\t\t\t\t

\t\t\t\t";
        // line 216
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formEditarDatosNegocio"]) ? $context["formEditarDatosNegocio"] : $this->getContext($context, "formEditarDatosNegocio")), 'widget');
        echo "

\t\t\t\t<input type=\"button\" value=\"Editar Perfil\" id=\"botonEditarPerfilNegocio\" name=\"botonEditarPerfilNegocio\" />
\t\t\t\t<input type=\"submit\" value=\"Aceptar Cambios\" id=\"aceptarCambiosPerfilNegocio\" name=\"aceptarCambiosPerfilNegocio\" />
\t\t\t\t<input type=\"button\" value=\"Cancelar Cambios\" id=\"cancelarCambiosPerfilNegocio\" name=\"cancelarCambiosPerfilNegocio\" onclick=\"cancelarInput()\" />
\t\t\t\t<input type=\"submit\" value=\"Darse de Baja\" id=\"eliminarDatosPerfilNegocio\" name=\"eliminarDatosPerfilNegocio\" />
\t\t\t\t<input type=\"button\" value=\"Añadir Nuevo Producto\" id=\"botonNuevoProductoOferta\" name=\"botonNuevoProductoOferta\" onclick=\"window.open (";
        // line 222
        $this->displayBlock('urlDestino2', $context, $blocks);
        echo ", '_self', config='height=100, width=400, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, directories=no, status=no')\" />

\t\t\t\t
\t\t\t
\t\t\t</form>
\t\t\t
\t\t\t<span id=\"spanNegociosAdvertencia\">Recuerde que, si cambia el nombre del negocio, tendrá que volver a subir la imagen de perfil del mismo. </span>\t\t\t\t
\t\t\t
\t\t\t
\t\t</div>
\t\t
\t\t
\t\t
\t\t
\t\t<script>
            function archivo(evt) {
                var files = evt.target.files; // FileList object
             
                // Obtenemos la imagen del campo \"file\".
                for (var i = 0, f; f = files[i]; i++) {
\t\t\t\t\t//Solo admitimos imágenes.
                    if (!f.type.match('image.*')) {
                        continue;
                    }
             
                    var reader = new FileReader();
             
                    reader.onload = (function(theFile) {
                        return function(e) {
\t\t\t\t\t\t\t// Insertamos la imagen
\t\t\t\t\t\t\tdocument.getElementById(\"list\").innerHTML = ['<img src=\"', e.target.result,'\" title=\"', escape(theFile.name), '\"/>'].join('');
\t\t\t\t\t\t\tdocument.getElementById(\"previsualizarImagenPerfil\").style.display = 'none';
\t\t\t\t\t\t};
                    })(f);
             
                    reader.readAsDataURL(f);
                }
            }
             
            document.getElementById('files').addEventListener('change', archivo, false);
\t\t</script>

\t
\t
\t\t
\t\t
\t\t
\t\t
\t</body>
</html>
";
        
        $__internal_ffbeaa522cbae80719acb81e5d8b712356e7fe84f87aaa34bfa22c24fcb63852->leave($__internal_ffbeaa522cbae80719acb81e5d8b712356e7fe84f87aaa34bfa22c24fcb63852_prof);

    }

    // line 5
    public function block_titlePerfiles($context, array $blocks = array())
    {
        $__internal_c99ab1dae8e02a1648657c9d2c33570951ffc8e60ca8b9f9701f2a746aea27f7 = $this->env->getExtension("native_profiler");
        $__internal_c99ab1dae8e02a1648657c9d2c33570951ffc8e60ca8b9f9701f2a746aea27f7->enter($__internal_c99ab1dae8e02a1648657c9d2c33570951ffc8e60ca8b9f9701f2a746aea27f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlePerfiles"));

        
        $__internal_c99ab1dae8e02a1648657c9d2c33570951ffc8e60ca8b9f9701f2a746aea27f7->leave($__internal_c99ab1dae8e02a1648657c9d2c33570951ffc8e60ca8b9f9701f2a746aea27f7_prof);

    }

    // line 54
    public function block_urlDestino($context, array $blocks = array())
    {
        $__internal_c292423893453393b4f6fc5b94deb832f54da3b6189584db335677ca80322566 = $this->env->getExtension("native_profiler");
        $__internal_c292423893453393b4f6fc5b94deb832f54da3b6189584db335677ca80322566->enter($__internal_c292423893453393b4f6fc5b94deb832f54da3b6189584db335677ca80322566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino"));

        
        $__internal_c292423893453393b4f6fc5b94deb832f54da3b6189584db335677ca80322566->leave($__internal_c292423893453393b4f6fc5b94deb832f54da3b6189584db335677ca80322566_prof);

    }

    // line 125
    public function block_inputHidden($context, array $blocks = array())
    {
        $__internal_37c3af4fbe25f7355ac46877c7978569eb66d1709435a39799c88110b7e113a1 = $this->env->getExtension("native_profiler");
        $__internal_37c3af4fbe25f7355ac46877c7978569eb66d1709435a39799c88110b7e113a1->enter($__internal_37c3af4fbe25f7355ac46877c7978569eb66d1709435a39799c88110b7e113a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inputHidden"));

        
        $__internal_37c3af4fbe25f7355ac46877c7978569eb66d1709435a39799c88110b7e113a1->leave($__internal_37c3af4fbe25f7355ac46877c7978569eb66d1709435a39799c88110b7e113a1_prof);

    }

    // line 205
    public function block_idCuerpoPerfil($context, array $blocks = array())
    {
        $__internal_91fb74facf1f324249ee631a352b03adb1620f7a5dcf71097c62de6ad7919666 = $this->env->getExtension("native_profiler");
        $__internal_91fb74facf1f324249ee631a352b03adb1620f7a5dcf71097c62de6ad7919666->enter($__internal_91fb74facf1f324249ee631a352b03adb1620f7a5dcf71097c62de6ad7919666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "idCuerpoPerfil"));

        
        $__internal_91fb74facf1f324249ee631a352b03adb1620f7a5dcf71097c62de6ad7919666->leave($__internal_91fb74facf1f324249ee631a352b03adb1620f7a5dcf71097c62de6ad7919666_prof);

    }

    // line 211
    public function block_hiddenPerfiles($context, array $blocks = array())
    {
        $__internal_75fabf4d18a3dde880abdc87cbbaa483854d6357a5ee872ca28b1796fcf7c000 = $this->env->getExtension("native_profiler");
        $__internal_75fabf4d18a3dde880abdc87cbbaa483854d6357a5ee872ca28b1796fcf7c000->enter($__internal_75fabf4d18a3dde880abdc87cbbaa483854d6357a5ee872ca28b1796fcf7c000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hiddenPerfiles"));

        
        $__internal_75fabf4d18a3dde880abdc87cbbaa483854d6357a5ee872ca28b1796fcf7c000->leave($__internal_75fabf4d18a3dde880abdc87cbbaa483854d6357a5ee872ca28b1796fcf7c000_prof);

    }

    // line 213
    public function block_tablaDatosPerfil($context, array $blocks = array())
    {
        $__internal_3040e2056557127280b8d06bf1ad775bea28f5236cd66bbcfbb0e3d787222c99 = $this->env->getExtension("native_profiler");
        $__internal_3040e2056557127280b8d06bf1ad775bea28f5236cd66bbcfbb0e3d787222c99->enter($__internal_3040e2056557127280b8d06bf1ad775bea28f5236cd66bbcfbb0e3d787222c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tablaDatosPerfil"));

        
        $__internal_3040e2056557127280b8d06bf1ad775bea28f5236cd66bbcfbb0e3d787222c99->leave($__internal_3040e2056557127280b8d06bf1ad775bea28f5236cd66bbcfbb0e3d787222c99_prof);

    }

    // line 222
    public function block_urlDestino2($context, array $blocks = array())
    {
        $__internal_eb3e27f1c2d892d90aa65fd6b15af46714af2ace6f1dd867bce43ff0378aeaa9 = $this->env->getExtension("native_profiler");
        $__internal_eb3e27f1c2d892d90aa65fd6b15af46714af2ace6f1dd867bce43ff0378aeaa9->enter($__internal_eb3e27f1c2d892d90aa65fd6b15af46714af2ace6f1dd867bce43ff0378aeaa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino2"));

        
        $__internal_eb3e27f1c2d892d90aa65fd6b15af46714af2ace6f1dd867bce43ff0378aeaa9->leave($__internal_eb3e27f1c2d892d90aa65fd6b15af46714af2ace6f1dd867bce43ff0378aeaa9_prof);

    }

    public function getTemplateName()
    {
        return "PCBundle::plantillaPerfilesNegocios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  463 => 222,  452 => 213,  441 => 211,  430 => 205,  419 => 125,  408 => 54,  397 => 5,  339 => 222,  330 => 216,  326 => 214,  324 => 213,  321 => 212,  319 => 211,  313 => 210,  307 => 207,  300 => 205,  291 => 199,  285 => 198,  280 => 196,  276 => 195,  272 => 194,  259 => 186,  217 => 147,  209 => 142,  189 => 126,  187 => 125,  181 => 124,  147 => 93,  143 => 92,  139 => 91,  99 => 54,  59 => 17,  51 => 12,  47 => 11,  43 => 10,  35 => 5,  29 => 1,);
    }
}
