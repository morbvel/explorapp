<?php

/* PCBundle::plantillaPerfiles.html.twig */
class __TwigTemplate_4e0023ea110af8247c674227996a9e1dc18cef5416070692aba2e97141674d6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titlePerfiles' => array($this, 'block_titlePerfiles'),
            'urlDestino' => array($this, 'block_urlDestino'),
            'idCuerpoPerfil' => array($this, 'block_idCuerpoPerfil'),
            'hiddenPerfiles' => array($this, 'block_hiddenPerfiles'),
            'tablaDatosPerfil' => array($this, 'block_tablaDatosPerfil'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
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
\t\t\t\t
\t\t\t\t\$('#abrirPerfilUsuarios').click(function(){
\t\t\t\t\twindow.open (";
        // line 47
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

\t\t\t\t\$('#botonEditarPerfilUsuario').click(function(){
\t\t\t\t\tdocument.getElementById(\"tablaDatosPersonales\").style.display = 'none';
\t\t\t\t\tdocument.getElementById(\"formuEditarPerfilUsuario\").style.display = 'inherit';
\t\t\t\t\tdocument.getElementById(\"cancelarCambiosPerfilUsuario\").style.display = 'inherit';
\t\t\t\t\tdocument.getElementById(\"aceptarCambiosPerfilUsuario\").style.display = 'inherit';
\t\t\t\t\tdocument.getElementById(\"eliminarDatosPerfilUsuario\").style.display = 'inherit';
\t\t\t\t\tdocument.getElementById(\"botonEditarPerfilUsuario\").style.display = 'none';
\t\t\t\t\treturn false;
\t\t\t\t});
\t\t\t\t
\t\t\t\t
\t\t\t});
\t\t</script>
\t\t
\t\t
\t\t<!--JavaScript para mostar la contraseña-->
\t\t<script>
\t\t\tfunction showPass(){
\t\t\t\talert('Su contraseña es ";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "userPass", array()), "html", null, true);
        echo "');
\t\t\t}

\t\t\tfunction cancelarInput(){
\t\t\t\tdocument.getElementById(\"tablaDatosPersonales\").style.display = 'inherit';
\t\t\t\tdocument.getElementById(\"formuEditarPerfilUsuario\").style.display = 'none';
\t\t\t\tdocument.getElementById(\"cancelarCambiosPerfilUsuario\").style.display = 'none';
\t\t\t\tdocument.getElementById(\"aceptarCambiosPerfilUsuario\").style.display = 'none';
\t\t\t\tdocument.getElementById(\"eliminarDatosPerfilUsuario\").style.display = 'none';
\t\t\t\tdocument.getElementById(\"botonEditarPerfilUsuario\").style.display = 'inherit';
\t\t\t}\t
\t\t</script>

\t\t
\t\t
\t\t
\t\t
\t</head>
\t<body>
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
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pc_subirimagen", array("isNegocio" => (isset($context["isNegocio"]) ? $context["isNegocio"] : null))), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t<table id=\"tablaCambiarFoto\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<output id=\"list\"></output>
\t\t\t\t\t\t\t\t<img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenPerfil"]) ? $context["rutaImagenPerfil"] : null)), "html", null, true);
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
        // line 155
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
        // line 163
        echo $this->env->getExtension('routing')->getPath("pc_restaurantes");
        echo "\" id=\"botonGrande\">Restaurantes</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 164
        echo $this->env->getExtension('routing')->getPath("pc_hoteles");
        echo "\" id=\"botonMediano\">Hoteles</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 165
        echo $this->env->getExtension('routing')->getPath("pc_bares");
        echo "\" id=\"botonPequeño\">Bares</a></li>
\t\t\t\t</ul>
\t\t\t\t<input type=\"image\" id=\"";
        // line 167
        echo twig_escape_filter($this->env, (isset($context["idFotoBarraMenu"]) ? $context["idFotoBarraMenu"] : null), "html", null, true);
        echo "\" class=\"enlaceAccederIndex\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenPerfilUsuario"]) ? $context["rutaImagenPerfilUsuario"] : null)), "html", null, true);
        echo "\" title=\"Acceder a la zona de usuarios\" />
\t\t\t\t<a href=\"";
        // line 168
        echo $this->env->getExtension('routing')->getPath("pc_cerrarsesion");
        echo "\" id=\"enlaceCerrarSesion\" >Cerrar Sesi&oacute;n</a>
\t\t\t</nav>
\t\t</div>
\t\t
\t\t
\t\t
\t\t<div id=\"";
        // line 174
        $this->displayBlock('idCuerpoPerfil', $context, $blocks);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, (isset($context["tipoNegocio"]) ? $context["tipoNegocio"] : null), "html", null, true);
        echo "\">
\t\t
\t\t\t<input type=\"image\" id=\"imagenPerfil\" class=\"enlaceAcceder\" src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenPerfil"]) ? $context["rutaImagenPerfil"] : null)), "html", null, true);
        echo "\"/>
\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t<form action=\"";
        // line 179
        echo $this->env->getExtension('routing')->getPath("pc_editarperfilusuario");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formEditarDatosPersonales"]) ? $context["formEditarDatosPersonales"] : null), 'enctype');
        echo ">
\t\t\t\t";
        // line 180
        $this->displayBlock('hiddenPerfiles', $context, $blocks);
        // line 181
        echo "\t\t\t\t
\t\t\t\t";
        // line 182
        $this->displayBlock('tablaDatosPerfil', $context, $blocks);
        // line 183
        echo "\t
\t\t\t\t";
        // line 184
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formEditarDatosPersonales"]) ? $context["formEditarDatosPersonales"] : null), 'widget');
        echo "
\t\t\t\t
\t\t\t\t
\t\t\t\t<input type=\"button\" value=\"Editar Perfil\" id=\"botonEditarPerfilUsuario\" name=\"botonEditarPerfilUsuario\"/>
\t\t\t\t<input type=\"submit\" value=\"Aceptar Cambios\" id=\"aceptarCambiosPerfilUsuario\" name=\"aceptarCambiosPerfilUsuario\"/>
\t\t\t\t<input type=\"button\" value=\"Cancelar Cambios\" id=\"cancelarCambiosPerfilUsuario\" name=\"cancelarCambiosPerfilUsuario\" onclick=\"cancelarInput()\"/>
\t\t\t\t<input type=\"submit\" value=\"Darse de Baja\" id=\"eliminarDatosPerfilUsuario\" name=\"eliminarDatosPerfilUsuario\"/>
\t\t\t\t
\t\t\t
\t\t\t</form>
\t\t\t
\t\t\t
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
    }

    // line 5
    public function block_titlePerfiles($context, array $blocks = array())
    {
    }

    // line 47
    public function block_urlDestino($context, array $blocks = array())
    {
    }

    // line 174
    public function block_idCuerpoPerfil($context, array $blocks = array())
    {
    }

    // line 180
    public function block_hiddenPerfiles($context, array $blocks = array())
    {
    }

    // line 182
    public function block_tablaDatosPerfil($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "PCBundle::plantillaPerfiles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 182,  352 => 180,  347 => 174,  342 => 47,  337 => 5,  277 => 184,  274 => 183,  272 => 182,  269 => 181,  267 => 180,  261 => 179,  255 => 176,  248 => 174,  239 => 168,  233 => 167,  228 => 165,  224 => 164,  220 => 163,  207 => 155,  165 => 116,  157 => 111,  125 => 82,  87 => 47,  54 => 17,  46 => 12,  42 => 11,  38 => 10,  30 => 5,  24 => 1,);
    }
}
