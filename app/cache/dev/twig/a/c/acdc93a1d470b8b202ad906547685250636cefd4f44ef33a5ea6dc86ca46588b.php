<?php

/* PCBundle::plantillaPerfiles.html.twig */
class __TwigTemplate_acdc93a1d470b8b202ad906547685250636cefd4f44ef33a5ea6dc86ca46588b extends Twig_Template
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
        $__internal_0fb8c5620314325d77b9335bd0b9d74d9b9decc57343bdc1de86d7d79d3bc11f = $this->env->getExtension("native_profiler");
        $__internal_0fb8c5620314325d77b9335bd0b9d74d9b9decc57343bdc1de86d7d79d3bc11f->enter($__internal_0fb8c5620314325d77b9335bd0b9d74d9b9decc57343bdc1de86d7d79d3bc11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle::plantillaPerfiles.html.twig"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "userPass", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pc_subirimagen", array("isNegocio" => (isset($context["isNegocio"]) ? $context["isNegocio"] : $this->getContext($context, "isNegocio")))), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t<table id=\"tablaCambiarFoto\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<output id=\"list\"></output>
\t\t\t\t\t\t\t\t<img src=\"";
        // line 116
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
        // line 156
        echo $this->env->getExtension('routing')->getPath("pc_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./img/home_icon.png"), "html", null, true);
        echo "\" class=\"iconoIndex\" style=\"margin-left: 30px; margin-right: 30px;\" /></a>
\t\t\t<a href=\"";
        // line 157
        echo $this->env->getExtension('routing')->getPath("mobile_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./img/mobile_icon.png"), "html", null, true);
        echo "\" class=\"iconoIndex\" /></a>
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"";
        // line 159
        echo $this->env->getExtension('routing')->getPath("pc_restaurantes");
        echo "\" id=\"botonGrande\">Restaurantes</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 160
        echo $this->env->getExtension('routing')->getPath("pc_hoteles");
        echo "\" id=\"botonMediano\">Hoteles</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 161
        echo $this->env->getExtension('routing')->getPath("pc_bares");
        echo "\" id=\"botonPequeño\">Bares</a></li>
\t\t\t\t</ul>
\t\t\t\t<input type=\"image\" id=\"";
        // line 163
        echo twig_escape_filter($this->env, (isset($context["idFotoBarraMenu"]) ? $context["idFotoBarraMenu"] : $this->getContext($context, "idFotoBarraMenu")), "html", null, true);
        echo "\" class=\"enlaceAccederIndex\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenPerfilUsuario"]) ? $context["rutaImagenPerfilUsuario"] : $this->getContext($context, "rutaImagenPerfilUsuario"))), "html", null, true);
        echo "\" title=\"Acceder a la zona de usuarios\" />
\t\t\t\t<a href=\"";
        // line 164
        echo $this->env->getExtension('routing')->getPath("pc_cerrarsesion");
        echo "\" id=\"enlaceCerrarSesion\" >Cerrar Sesi&oacute;n</a>
\t\t\t</nav>
\t\t</div>
\t\t
\t\t
\t\t
\t\t<div id=\"";
        // line 170
        $this->displayBlock('idCuerpoPerfil', $context, $blocks);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, (isset($context["tipoNegocio"]) ? $context["tipoNegocio"] : $this->getContext($context, "tipoNegocio")), "html", null, true);
        echo "\">
\t\t
\t\t\t<input type=\"image\" id=\"imagenPerfil\" class=\"enlaceAcceder\" src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenPerfil"]) ? $context["rutaImagenPerfil"] : $this->getContext($context, "rutaImagenPerfil"))), "html", null, true);
        echo "\"/>
\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t<form action=\"";
        // line 175
        echo $this->env->getExtension('routing')->getPath("pc_editarperfilusuario");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formEditarDatosPersonales"]) ? $context["formEditarDatosPersonales"] : $this->getContext($context, "formEditarDatosPersonales")), 'enctype');
        echo ">
\t\t\t\t";
        // line 176
        $this->displayBlock('hiddenPerfiles', $context, $blocks);
        // line 177
        echo "\t\t\t\t
\t\t\t\t";
        // line 178
        $this->displayBlock('tablaDatosPerfil', $context, $blocks);
        // line 179
        echo "\t
\t\t\t\t";
        // line 180
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formEditarDatosPersonales"]) ? $context["formEditarDatosPersonales"] : $this->getContext($context, "formEditarDatosPersonales")), 'widget');
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
        
        $__internal_0fb8c5620314325d77b9335bd0b9d74d9b9decc57343bdc1de86d7d79d3bc11f->leave($__internal_0fb8c5620314325d77b9335bd0b9d74d9b9decc57343bdc1de86d7d79d3bc11f_prof);

    }

    // line 5
    public function block_titlePerfiles($context, array $blocks = array())
    {
        $__internal_83dcb2b3b492644fcfa15ced6bfd5503156deac9d4b267dc7a1c66926053ea56 = $this->env->getExtension("native_profiler");
        $__internal_83dcb2b3b492644fcfa15ced6bfd5503156deac9d4b267dc7a1c66926053ea56->enter($__internal_83dcb2b3b492644fcfa15ced6bfd5503156deac9d4b267dc7a1c66926053ea56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlePerfiles"));

        
        $__internal_83dcb2b3b492644fcfa15ced6bfd5503156deac9d4b267dc7a1c66926053ea56->leave($__internal_83dcb2b3b492644fcfa15ced6bfd5503156deac9d4b267dc7a1c66926053ea56_prof);

    }

    // line 47
    public function block_urlDestino($context, array $blocks = array())
    {
        $__internal_9b1566230590dc7416b0c6aacf847f82c1dc281d4fae0123a7e52ae8e58b7d6c = $this->env->getExtension("native_profiler");
        $__internal_9b1566230590dc7416b0c6aacf847f82c1dc281d4fae0123a7e52ae8e58b7d6c->enter($__internal_9b1566230590dc7416b0c6aacf847f82c1dc281d4fae0123a7e52ae8e58b7d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino"));

        
        $__internal_9b1566230590dc7416b0c6aacf847f82c1dc281d4fae0123a7e52ae8e58b7d6c->leave($__internal_9b1566230590dc7416b0c6aacf847f82c1dc281d4fae0123a7e52ae8e58b7d6c_prof);

    }

    // line 170
    public function block_idCuerpoPerfil($context, array $blocks = array())
    {
        $__internal_e6cefd588ed76b1cc4f81001bcf6b4e12491d39a699e75395eace87a8368c4f0 = $this->env->getExtension("native_profiler");
        $__internal_e6cefd588ed76b1cc4f81001bcf6b4e12491d39a699e75395eace87a8368c4f0->enter($__internal_e6cefd588ed76b1cc4f81001bcf6b4e12491d39a699e75395eace87a8368c4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "idCuerpoPerfil"));

        
        $__internal_e6cefd588ed76b1cc4f81001bcf6b4e12491d39a699e75395eace87a8368c4f0->leave($__internal_e6cefd588ed76b1cc4f81001bcf6b4e12491d39a699e75395eace87a8368c4f0_prof);

    }

    // line 176
    public function block_hiddenPerfiles($context, array $blocks = array())
    {
        $__internal_55967190cc1639cc6e6f42dbee8e1db08338ce0ddc4dbac2118bcb6975f2178f = $this->env->getExtension("native_profiler");
        $__internal_55967190cc1639cc6e6f42dbee8e1db08338ce0ddc4dbac2118bcb6975f2178f->enter($__internal_55967190cc1639cc6e6f42dbee8e1db08338ce0ddc4dbac2118bcb6975f2178f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hiddenPerfiles"));

        
        $__internal_55967190cc1639cc6e6f42dbee8e1db08338ce0ddc4dbac2118bcb6975f2178f->leave($__internal_55967190cc1639cc6e6f42dbee8e1db08338ce0ddc4dbac2118bcb6975f2178f_prof);

    }

    // line 178
    public function block_tablaDatosPerfil($context, array $blocks = array())
    {
        $__internal_f940d349aa4cb2316fdc9a23ed9241870c1188a732027797455c720da44aefb1 = $this->env->getExtension("native_profiler");
        $__internal_f940d349aa4cb2316fdc9a23ed9241870c1188a732027797455c720da44aefb1->enter($__internal_f940d349aa4cb2316fdc9a23ed9241870c1188a732027797455c720da44aefb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tablaDatosPerfil"));

        
        $__internal_f940d349aa4cb2316fdc9a23ed9241870c1188a732027797455c720da44aefb1->leave($__internal_f940d349aa4cb2316fdc9a23ed9241870c1188a732027797455c720da44aefb1_prof);

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
        return array (  388 => 178,  377 => 176,  366 => 170,  355 => 47,  344 => 5,  281 => 180,  278 => 179,  276 => 178,  273 => 177,  271 => 176,  265 => 175,  259 => 172,  252 => 170,  243 => 164,  237 => 163,  232 => 161,  228 => 160,  224 => 159,  217 => 157,  211 => 156,  168 => 116,  160 => 111,  128 => 82,  90 => 47,  57 => 17,  49 => 12,  45 => 11,  41 => 10,  33 => 5,  27 => 1,);
    }
}
