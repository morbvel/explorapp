<?php

/* PCBundle::plantillaPerfilesNegocios.html.twig */
class __TwigTemplate_4b91f8d1e85589171047ebc63b923a0546d273e2721876c8a200b6a04aac5bb9 extends Twig_Template
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
        $__internal_b0ac68939d777345d5ee2d2d4cafa6366d3c303657da3991991c2d41a5990c79 = $this->env->getExtension("native_profiler");
        $__internal_b0ac68939d777345d5ee2d2d4cafa6366d3c303657da3991991c2d41a5990c79->enter($__internal_b0ac68939d777345d5ee2d2d4cafa6366d3c303657da3991991c2d41a5990c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle::plantillaPerfilesNegocios.html.twig"));

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

\t\t\t\t\$('#abrirPerfilUsuarios').click(function(){
\t\t\t\t\twindow.open (";
        // line 53
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
        // line 90
        echo twig_escape_filter($this->env, (isset($context["visibleCerrarSesion"]) ? $context["visibleCerrarSesion"] : $this->getContext($context, "visibleCerrarSesion")), "html", null, true);
        echo "\";
\t\t\t\tdocument.getElementById(\"botonEditarPerfilNegocio\").style.display = \"";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["visibleEditarPerfilNegocio"]) ? $context["visibleEditarPerfilNegocio"] : $this->getContext($context, "visibleEditarPerfilNegocio")), "html", null, true);
        echo "\";
\t\t\t\tdocument.getElementById(\"botonNuevoProductoOferta\").style.display = \"";
        // line 92
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
        // line 123
        echo $this->env->getExtension('routing')->getPath("pc_autentificar");
        echo "\" method=\"post\" id=\"formLogin\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formLogin"]) ? $context["formLogin"] : $this->getContext($context, "formLogin")), 'enctype');
        echo ">
\t\t\t\t\t";
        // line 124
        $this->displayBlock('inputHidden', $context, $blocks);
        // line 125
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
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pc_subirimagen", array("isNegocio" => (isset($context["isNegocio"]) ? $context["isNegocio"] : $this->getContext($context, "isNegocio")))), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t<table id=\"tablaCambiarFoto\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<output id=\"list\"></output>
\t\t\t\t\t\t\t\t<img src=\"";
        // line 146
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
\t\t
\t\t<!--Barra del Menu-->
\t\t<div class=\"contenedorMenu2\">
\t\t\t<nav>
\t\t\t<a href=\"";
        // line 186
        echo $this->env->getExtension('routing')->getPath("pc_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./img/home_icon.png"), "html", null, true);
        echo "\" class=\"iconoIndex\" style=\"margin-left: 30px; margin-right: 30px;\" /></a>
\t\t\t<a href=\"";
        // line 187
        echo $this->env->getExtension('routing')->getPath("mobile_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./img/mobile_icon.png"), "html", null, true);
        echo "\" class=\"iconoIndex\" /></a>
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"";
        // line 189
        echo $this->env->getExtension('routing')->getPath("pc_restaurantes");
        echo "\" id=\"botonGrande\">Restaurantes</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 190
        echo $this->env->getExtension('routing')->getPath("pc_hoteles");
        echo "\" id=\"botonMediano\">Hoteles</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 191
        echo $this->env->getExtension('routing')->getPath("pc_bares");
        echo "\" id=\"botonPequeño\">Bares</a></li>
\t\t\t\t</ul>
\t\t\t\t<input type=\"image\" id=\"";
        // line 193
        echo twig_escape_filter($this->env, (isset($context["idFotoBarraMenu"]) ? $context["idFotoBarraMenu"] : $this->getContext($context, "idFotoBarraMenu")), "html", null, true);
        echo "\" class=\"enlaceAccederIndex\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenPerfilUsuario"]) ? $context["rutaImagenPerfilUsuario"] : $this->getContext($context, "rutaImagenPerfilUsuario"))), "html", null, true);
        echo "\" title=\"Acceder a la zona de usuarios\" />
\t\t\t\t<a href=\"";
        // line 194
        echo $this->env->getExtension('routing')->getPath("pc_cerrarsesion");
        echo "\" id=\"enlaceCerrarSesion\" >Cerrar Sesi&oacute;n</a>
\t\t\t</nav>
\t\t</div>
\t\t
\t\t
\t\t
\t\t<div id=\"";
        // line 200
        $this->displayBlock('idCuerpoPerfil', $context, $blocks);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, (isset($context["tipoNegocio"]) ? $context["tipoNegocio"] : $this->getContext($context, "tipoNegocio")), "html", null, true);
        echo "\">
\t\t
\t\t\t<input type=\"image\" id=\"imagenPerfil\" class=\"enlaceAcceder\" src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenPerfil"]) ? $context["rutaImagenPerfil"] : $this->getContext($context, "rutaImagenPerfil"))), "html", null, true);
        echo "\"/>
\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t<form action=\"";
        // line 205
        echo $this->env->getExtension('routing')->getPath("pc_editarperfilnegocio");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formEditarDatosNegocio"]) ? $context["formEditarDatosNegocio"] : $this->getContext($context, "formEditarDatosNegocio")), 'enctype');
        echo ">
\t\t\t\t";
        // line 206
        $this->displayBlock('hiddenPerfiles', $context, $blocks);
        // line 207
        echo "\t\t\t\t
\t\t\t\t";
        // line 208
        $this->displayBlock('tablaDatosPerfil', $context, $blocks);
        // line 209
        echo "\t\t\t\t

\t\t\t\t";
        // line 211
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formEditarDatosNegocio"]) ? $context["formEditarDatosNegocio"] : $this->getContext($context, "formEditarDatosNegocio")), 'widget');
        echo "

\t\t\t\t<input type=\"button\" value=\"Editar Perfil\" id=\"botonEditarPerfilNegocio\" name=\"botonEditarPerfilNegocio\" />
\t\t\t\t<input type=\"submit\" value=\"Aceptar Cambios\" id=\"aceptarCambiosPerfilNegocio\" name=\"aceptarCambiosPerfilNegocio\" />
\t\t\t\t<input type=\"button\" value=\"Cancelar Cambios\" id=\"cancelarCambiosPerfilNegocio\" name=\"cancelarCambiosPerfilNegocio\" onclick=\"cancelarInput()\" />
\t\t\t\t<input type=\"submit\" value=\"Darse de Baja\" id=\"eliminarDatosPerfilNegocio\" name=\"eliminarDatosPerfilNegocio\" />
\t\t\t\t<input type=\"button\" value=\"Añadir Nuevo Producto\" id=\"botonNuevoProductoOferta\" name=\"botonNuevoProductoOferta\" onclick=\"window.open (";
        // line 217
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
        
        $__internal_b0ac68939d777345d5ee2d2d4cafa6366d3c303657da3991991c2d41a5990c79->leave($__internal_b0ac68939d777345d5ee2d2d4cafa6366d3c303657da3991991c2d41a5990c79_prof);

    }

    // line 5
    public function block_titlePerfiles($context, array $blocks = array())
    {
        $__internal_0f12e99e36c3f51f425ce506b95774bb01e177c303badec77648c99c86a01697 = $this->env->getExtension("native_profiler");
        $__internal_0f12e99e36c3f51f425ce506b95774bb01e177c303badec77648c99c86a01697->enter($__internal_0f12e99e36c3f51f425ce506b95774bb01e177c303badec77648c99c86a01697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlePerfiles"));

        
        $__internal_0f12e99e36c3f51f425ce506b95774bb01e177c303badec77648c99c86a01697->leave($__internal_0f12e99e36c3f51f425ce506b95774bb01e177c303badec77648c99c86a01697_prof);

    }

    // line 53
    public function block_urlDestino($context, array $blocks = array())
    {
        $__internal_3962b6363719ebbd8898f969b3966c3f293b73aabb6195a4251855b8a4fe17e5 = $this->env->getExtension("native_profiler");
        $__internal_3962b6363719ebbd8898f969b3966c3f293b73aabb6195a4251855b8a4fe17e5->enter($__internal_3962b6363719ebbd8898f969b3966c3f293b73aabb6195a4251855b8a4fe17e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino"));

        
        $__internal_3962b6363719ebbd8898f969b3966c3f293b73aabb6195a4251855b8a4fe17e5->leave($__internal_3962b6363719ebbd8898f969b3966c3f293b73aabb6195a4251855b8a4fe17e5_prof);

    }

    // line 124
    public function block_inputHidden($context, array $blocks = array())
    {
        $__internal_7a1c6a85ca1c1b5f4a1b284b3b50380bbc8fb9cc1dd483dab8b31169435acaf6 = $this->env->getExtension("native_profiler");
        $__internal_7a1c6a85ca1c1b5f4a1b284b3b50380bbc8fb9cc1dd483dab8b31169435acaf6->enter($__internal_7a1c6a85ca1c1b5f4a1b284b3b50380bbc8fb9cc1dd483dab8b31169435acaf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inputHidden"));

        
        $__internal_7a1c6a85ca1c1b5f4a1b284b3b50380bbc8fb9cc1dd483dab8b31169435acaf6->leave($__internal_7a1c6a85ca1c1b5f4a1b284b3b50380bbc8fb9cc1dd483dab8b31169435acaf6_prof);

    }

    // line 200
    public function block_idCuerpoPerfil($context, array $blocks = array())
    {
        $__internal_d3645eee20351f77f09349d588a49e00cf2e80575c8af53eff8a9b205ff2994e = $this->env->getExtension("native_profiler");
        $__internal_d3645eee20351f77f09349d588a49e00cf2e80575c8af53eff8a9b205ff2994e->enter($__internal_d3645eee20351f77f09349d588a49e00cf2e80575c8af53eff8a9b205ff2994e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "idCuerpoPerfil"));

        
        $__internal_d3645eee20351f77f09349d588a49e00cf2e80575c8af53eff8a9b205ff2994e->leave($__internal_d3645eee20351f77f09349d588a49e00cf2e80575c8af53eff8a9b205ff2994e_prof);

    }

    // line 206
    public function block_hiddenPerfiles($context, array $blocks = array())
    {
        $__internal_3bdab473b23ef2a1920c5836bc36c1712a49e791d575978bcc697a7d655fc0c3 = $this->env->getExtension("native_profiler");
        $__internal_3bdab473b23ef2a1920c5836bc36c1712a49e791d575978bcc697a7d655fc0c3->enter($__internal_3bdab473b23ef2a1920c5836bc36c1712a49e791d575978bcc697a7d655fc0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hiddenPerfiles"));

        
        $__internal_3bdab473b23ef2a1920c5836bc36c1712a49e791d575978bcc697a7d655fc0c3->leave($__internal_3bdab473b23ef2a1920c5836bc36c1712a49e791d575978bcc697a7d655fc0c3_prof);

    }

    // line 208
    public function block_tablaDatosPerfil($context, array $blocks = array())
    {
        $__internal_412e30dcd84540eaafcd338b3b2681be4f28efa06c2c143825658f36a8184a58 = $this->env->getExtension("native_profiler");
        $__internal_412e30dcd84540eaafcd338b3b2681be4f28efa06c2c143825658f36a8184a58->enter($__internal_412e30dcd84540eaafcd338b3b2681be4f28efa06c2c143825658f36a8184a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tablaDatosPerfil"));

        
        $__internal_412e30dcd84540eaafcd338b3b2681be4f28efa06c2c143825658f36a8184a58->leave($__internal_412e30dcd84540eaafcd338b3b2681be4f28efa06c2c143825658f36a8184a58_prof);

    }

    // line 217
    public function block_urlDestino2($context, array $blocks = array())
    {
        $__internal_eb5141a56d1bfdfac6dfc459049af9f398779a399f1d6da966b2b03918bbb74d = $this->env->getExtension("native_profiler");
        $__internal_eb5141a56d1bfdfac6dfc459049af9f398779a399f1d6da966b2b03918bbb74d->enter($__internal_eb5141a56d1bfdfac6dfc459049af9f398779a399f1d6da966b2b03918bbb74d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino2"));

        
        $__internal_eb5141a56d1bfdfac6dfc459049af9f398779a399f1d6da966b2b03918bbb74d->leave($__internal_eb5141a56d1bfdfac6dfc459049af9f398779a399f1d6da966b2b03918bbb74d_prof);

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
        return array (  463 => 217,  452 => 208,  441 => 206,  430 => 200,  419 => 124,  408 => 53,  397 => 5,  339 => 217,  330 => 211,  326 => 209,  324 => 208,  321 => 207,  319 => 206,  313 => 205,  307 => 202,  300 => 200,  291 => 194,  285 => 193,  280 => 191,  276 => 190,  272 => 189,  265 => 187,  259 => 186,  216 => 146,  208 => 141,  188 => 125,  186 => 124,  180 => 123,  146 => 92,  142 => 91,  138 => 90,  98 => 53,  59 => 17,  51 => 12,  47 => 11,  43 => 10,  35 => 5,  29 => 1,);
    }
}
