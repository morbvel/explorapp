<?php

/* PCBundle::plantillaPerfilesProductos.html.twig */
class __TwigTemplate_884b49e66e1231990c4d593253d1613e11d27f1af51b322353207312be8869cd extends Twig_Template
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
            'hiddenProductos' => array($this, 'block_hiddenProductos'),
            'tablaDatosProducto' => array($this, 'block_tablaDatosProducto'),
            'urlDestino2' => array($this, 'block_urlDestino2'),
            'urlDestino3' => array($this, 'block_urlDestino3'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d3404d4997d993b62caf57f97c245c6530efaf6dcacbac0e2adf6e2ccce90505 = $this->env->getExtension("native_profiler");
        $__internal_d3404d4997d993b62caf57f97c245c6530efaf6dcacbac0e2adf6e2ccce90505->enter($__internal_d3404d4997d993b62caf57f97c245c6530efaf6dcacbac0e2adf6e2ccce90505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle::plantillaPerfilesProductos.html.twig"));

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

\t\t\t\t\$('#botonEditarPerfilProducto').click(function(){
\t\t\t\t\tdocument.getElementById(\"tablaDatosProductos\").style.display = 'none';
\t\t\t\t\tdocument.getElementById(\"formuEditarPerfilProducto\").style.display = 'inherit';
\t\t\t\t\tdocument.getElementById(\"cancelarCambiosPerfilProducto\").style.display = 'inherit';
\t\t\t\t\tdocument.getElementById(\"aceptarCambiosPerfilProducto\").style.display = 'inherit';
\t\t\t\t\tdocument.getElementById(\"eliminarDatosPerfilProducto\").style.display = 'inherit';
\t\t\t\t\tdocument.getElementById(\"botonEditarPerfilProducto\").style.display = 'none';
\t\t\t\t\tdocument.getElementById(\"spanProductosAdvertencia\").style.display = 'inherit';
\t\t\t\t\treturn false;
\t\t\t\t});\t\t\t\t


\t\t\t\tdocument.getElementById(\"enlaceCerrarSesion\").style.display = \"";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["visibleCerrarSesion"]) ? $context["visibleCerrarSesion"] : $this->getContext($context, "visibleCerrarSesion")), "html", null, true);
        echo "\";
\t\t\t\tdocument.getElementById(\"botonEditarPerfilProducto\").style.display = \"";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["visibleEditarPerfilProducto"]) ? $context["visibleEditarPerfilProducto"] : $this->getContext($context, "visibleEditarPerfilProducto")), "html", null, true);
        echo "\";
\t\t\t\tdocument.getElementById(\"botonNuevaOferta\").style.display = \"";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["visibleEditarPerfilProducto"]) ? $context["visibleEditarPerfilProducto"] : $this->getContext($context, "visibleEditarPerfilProducto")), "html", null, true);
        echo "\";
\t\t\t});
\t\t</script>

\t\t
\t\t<!--JavaScript para mostar la contraseña-->
\t\t<script>

\t\t\tfunction cancelarInput(){
\t\t\t\tdocument.getElementById(\"tablaDatosProductos\").style.display = 'inherit';
\t\t\t\t\tdocument.getElementById(\"formuEditarPerfilProducto\").style.display = 'none';
\t\t\t\t\tdocument.getElementById(\"cancelarCambiosPerfilProducto\").style.display = 'none';
\t\t\t\t\tdocument.getElementById(\"aceptarCambiosPerfilProducto\").style.display = 'none';
\t\t\t\t\tdocument.getElementById(\"eliminarDatosPerfilProducto\").style.display = 'none';
\t\t\t\t\tdocument.getElementById(\"botonEditarPerfilProducto\").style.display = 'inherit';
\t\t\t\t\tdocument.getElementById(\"spanProductosAdvertencia\").style.display = 'none';
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pc_subirimagenproducto", array("isNegocio" => (isset($context["isNegocio"]) ? $context["isNegocio"] : $this->getContext($context, "isNegocio")))), "html", null, true);
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
\t\t
\t\t<!--Barra del Menu-->
\t\t<div class=\"contenedorMenu2\">
\t\t\t<nav>
\t\t\t<a href=\"";
        // line 164
        echo $this->env->getExtension('routing')->getPath("pc_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./img/home_icon.png"), "html", null, true);
        echo "\" class=\"iconoIndex\" style=\"margin-left: 30px; margin-right: 30px;\" /></a>
\t\t\t<a href=\"";
        // line 165
        echo $this->env->getExtension('routing')->getPath("mobile_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./img/mobile_icon.png"), "html", null, true);
        echo "\" class=\"iconoIndex\" /></a>
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"";
        // line 167
        echo $this->env->getExtension('routing')->getPath("pc_restaurantes");
        echo "\" id=\"botonGrande\">Restaurantes</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 168
        echo $this->env->getExtension('routing')->getPath("pc_hoteles");
        echo "\" id=\"botonMediano\">Hoteles</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 169
        echo $this->env->getExtension('routing')->getPath("pc_bares");
        echo "\" id=\"botonPequeño\">Bares</a></li>
\t\t\t\t</ul>
\t\t\t\t<input type=\"image\" id=\"";
        // line 171
        echo twig_escape_filter($this->env, (isset($context["idFotoBarraMenu"]) ? $context["idFotoBarraMenu"] : $this->getContext($context, "idFotoBarraMenu")), "html", null, true);
        echo "\" class=\"enlaceAccederIndex\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenPerfilUsuario"]) ? $context["rutaImagenPerfilUsuario"] : $this->getContext($context, "rutaImagenPerfilUsuario"))), "html", null, true);
        echo "\" title=\"Acceder a la zona de usuarios\" />
\t\t\t\t<a href=\"";
        // line 172
        echo $this->env->getExtension('routing')->getPath("pc_cerrarsesion");
        echo "\" id=\"enlaceCerrarSesion\" >Cerrar Sesi&oacute;n</a>
\t\t\t</nav>
\t\t</div>
\t\t
\t\t
\t\t
\t\t<div id=\"";
        // line 178
        $this->displayBlock('idCuerpoPerfil', $context, $blocks);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, (isset($context["tipoNegocio"]) ? $context["tipoNegocio"] : $this->getContext($context, "tipoNegocio")), "html", null, true);
        echo "\">
\t\t
\t\t\t<input type=\"image\" id=\"imagenPerfil\" class=\"enlaceAcceder\" src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenPerfil"]) ? $context["rutaImagenPerfil"] : $this->getContext($context, "rutaImagenPerfil"))), "html", null, true);
        echo "\"/>
\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t<form action=\"";
        // line 183
        echo $this->env->getExtension('routing')->getPath("pc_editarperfilproducto");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formEditarDatosProducto"]) ? $context["formEditarDatosProducto"] : $this->getContext($context, "formEditarDatosProducto")), 'enctype');
        echo ">
\t\t\t\t";
        // line 184
        $this->displayBlock('hiddenProductos', $context, $blocks);
        // line 185
        echo "\t\t\t\t
\t\t\t\t";
        // line 186
        $this->displayBlock('tablaDatosProducto', $context, $blocks);
        // line 187
        echo "\t\t\t\t

\t\t\t\t";
        // line 189
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formEditarDatosProducto"]) ? $context["formEditarDatosProducto"] : $this->getContext($context, "formEditarDatosProducto")), 'widget');
        echo "

\t\t\t\t<input type=\"button\" value=\"Editar Perfil\" id=\"botonEditarPerfilProducto\" name=\"botonEditarPerfilProducto\" />
\t\t\t\t<input type=\"submit\" value=\"Aceptar Cambios\" id=\"aceptarCambiosPerfilProducto\" name=\"aceptarCambiosPerfilProducto\" />
\t\t\t\t<input type=\"button\" value=\"Cancelar Cambios\" id=\"cancelarCambiosPerfilProducto\" name=\"cancelarCambiosPerfilProducto\" onclick=\"cancelarInput()\" />
\t\t\t\t<input type=\"submit\" value=\"Darse de Baja\" id=\"eliminarDatosPerfilProducto\" name=\"eliminarDatosPerfilProducto\" />
\t\t\t\t<input type=\"button\" value=\"Añadir Nueva Oferta\" id=\"botonNuevaOferta\" name=\"botonNuevaOferta\" onclick=\"window.open (";
        // line 195
        $this->displayBlock('urlDestino2', $context, $blocks);
        echo ", '_self', config='height=100, width=400, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, directories=no, status=no')\" />

\t\t\t\t
\t\t\t
\t\t\t</form>
\t\t\t
\t\t\t<span id=\"spanProductosAdvertencia\">Recuerde que, si cambia el nombre del producto, tendrá que volver a subir la imagen de perfil del mismo. </span>\t\t\t\t
\t\t\t

\t\t\t<input type=\"button\" value=\"Mostrar ofertas\" id=\"botonMostrarOfertas\" name=\"botonMostrarOfertas\" onclick=\"window.open (";
        // line 204
        $this->displayBlock('urlDestino3', $context, $blocks);
        echo ", '_self', config='height=100, width=400, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, directories=no, status=no')\" />
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
        
        $__internal_d3404d4997d993b62caf57f97c245c6530efaf6dcacbac0e2adf6e2ccce90505->leave($__internal_d3404d4997d993b62caf57f97c245c6530efaf6dcacbac0e2adf6e2ccce90505_prof);

    }

    // line 5
    public function block_titlePerfiles($context, array $blocks = array())
    {
        $__internal_fd0a217cc49f64ec466a6c70c7f8c6427cfcc6d8086c7873c1a89e21eef4f9eb = $this->env->getExtension("native_profiler");
        $__internal_fd0a217cc49f64ec466a6c70c7f8c6427cfcc6d8086c7873c1a89e21eef4f9eb->enter($__internal_fd0a217cc49f64ec466a6c70c7f8c6427cfcc6d8086c7873c1a89e21eef4f9eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlePerfiles"));

        
        $__internal_fd0a217cc49f64ec466a6c70c7f8c6427cfcc6d8086c7873c1a89e21eef4f9eb->leave($__internal_fd0a217cc49f64ec466a6c70c7f8c6427cfcc6d8086c7873c1a89e21eef4f9eb_prof);

    }

    // line 54
    public function block_urlDestino($context, array $blocks = array())
    {
        $__internal_9506645fb5403a4c4f4411d11620a1e44e20ee536d7ef6b560711e13fd99ed03 = $this->env->getExtension("native_profiler");
        $__internal_9506645fb5403a4c4f4411d11620a1e44e20ee536d7ef6b560711e13fd99ed03->enter($__internal_9506645fb5403a4c4f4411d11620a1e44e20ee536d7ef6b560711e13fd99ed03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino"));

        
        $__internal_9506645fb5403a4c4f4411d11620a1e44e20ee536d7ef6b560711e13fd99ed03->leave($__internal_9506645fb5403a4c4f4411d11620a1e44e20ee536d7ef6b560711e13fd99ed03_prof);

    }

    // line 125
    public function block_inputHidden($context, array $blocks = array())
    {
        $__internal_02d52154ed232357d6f73a18cf5db13aead32df7d9b02b5be0599516d78d9a15 = $this->env->getExtension("native_profiler");
        $__internal_02d52154ed232357d6f73a18cf5db13aead32df7d9b02b5be0599516d78d9a15->enter($__internal_02d52154ed232357d6f73a18cf5db13aead32df7d9b02b5be0599516d78d9a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inputHidden"));

        
        $__internal_02d52154ed232357d6f73a18cf5db13aead32df7d9b02b5be0599516d78d9a15->leave($__internal_02d52154ed232357d6f73a18cf5db13aead32df7d9b02b5be0599516d78d9a15_prof);

    }

    // line 178
    public function block_idCuerpoPerfil($context, array $blocks = array())
    {
        $__internal_b8860d65663cc1c278b9a1953bcd1cddea3e8e308d2d021c051e737ec939e27e = $this->env->getExtension("native_profiler");
        $__internal_b8860d65663cc1c278b9a1953bcd1cddea3e8e308d2d021c051e737ec939e27e->enter($__internal_b8860d65663cc1c278b9a1953bcd1cddea3e8e308d2d021c051e737ec939e27e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "idCuerpoPerfil"));

        
        $__internal_b8860d65663cc1c278b9a1953bcd1cddea3e8e308d2d021c051e737ec939e27e->leave($__internal_b8860d65663cc1c278b9a1953bcd1cddea3e8e308d2d021c051e737ec939e27e_prof);

    }

    // line 184
    public function block_hiddenProductos($context, array $blocks = array())
    {
        $__internal_bd1b8c9ff901ea006250cfa7cf69c7a1bdd2fc3a3e341f3a92653489ad4df75d = $this->env->getExtension("native_profiler");
        $__internal_bd1b8c9ff901ea006250cfa7cf69c7a1bdd2fc3a3e341f3a92653489ad4df75d->enter($__internal_bd1b8c9ff901ea006250cfa7cf69c7a1bdd2fc3a3e341f3a92653489ad4df75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hiddenProductos"));

        
        $__internal_bd1b8c9ff901ea006250cfa7cf69c7a1bdd2fc3a3e341f3a92653489ad4df75d->leave($__internal_bd1b8c9ff901ea006250cfa7cf69c7a1bdd2fc3a3e341f3a92653489ad4df75d_prof);

    }

    // line 186
    public function block_tablaDatosProducto($context, array $blocks = array())
    {
        $__internal_d1d0efdec03f5451e232ec0bc92e21742dd71a83fc9f9a48a8e62fd79387b849 = $this->env->getExtension("native_profiler");
        $__internal_d1d0efdec03f5451e232ec0bc92e21742dd71a83fc9f9a48a8e62fd79387b849->enter($__internal_d1d0efdec03f5451e232ec0bc92e21742dd71a83fc9f9a48a8e62fd79387b849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tablaDatosProducto"));

        
        $__internal_d1d0efdec03f5451e232ec0bc92e21742dd71a83fc9f9a48a8e62fd79387b849->leave($__internal_d1d0efdec03f5451e232ec0bc92e21742dd71a83fc9f9a48a8e62fd79387b849_prof);

    }

    // line 195
    public function block_urlDestino2($context, array $blocks = array())
    {
        $__internal_ad4348b1da1ef15b0c460b5b80944e568df7bfe3323698017d57e195d0b20915 = $this->env->getExtension("native_profiler");
        $__internal_ad4348b1da1ef15b0c460b5b80944e568df7bfe3323698017d57e195d0b20915->enter($__internal_ad4348b1da1ef15b0c460b5b80944e568df7bfe3323698017d57e195d0b20915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino2"));

        
        $__internal_ad4348b1da1ef15b0c460b5b80944e568df7bfe3323698017d57e195d0b20915->leave($__internal_ad4348b1da1ef15b0c460b5b80944e568df7bfe3323698017d57e195d0b20915_prof);

    }

    // line 204
    public function block_urlDestino3($context, array $blocks = array())
    {
        $__internal_f2db3fcbf446f4aa23182140c1c4dbdaffa44fc64771b52b96e30348351d0f1f = $this->env->getExtension("native_profiler");
        $__internal_f2db3fcbf446f4aa23182140c1c4dbdaffa44fc64771b52b96e30348351d0f1f->enter($__internal_f2db3fcbf446f4aa23182140c1c4dbdaffa44fc64771b52b96e30348351d0f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino3"));

        
        $__internal_f2db3fcbf446f4aa23182140c1c4dbdaffa44fc64771b52b96e30348351d0f1f->leave($__internal_f2db3fcbf446f4aa23182140c1c4dbdaffa44fc64771b52b96e30348351d0f1f_prof);

    }

    public function getTemplateName()
    {
        return "PCBundle::plantillaPerfilesProductos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  459 => 204,  448 => 195,  437 => 186,  426 => 184,  415 => 178,  404 => 125,  393 => 54,  382 => 5,  330 => 204,  318 => 195,  309 => 189,  305 => 187,  303 => 186,  300 => 185,  298 => 184,  292 => 183,  286 => 180,  279 => 178,  270 => 172,  264 => 171,  259 => 169,  255 => 168,  251 => 167,  244 => 165,  238 => 164,  218 => 147,  210 => 142,  190 => 126,  188 => 125,  182 => 124,  148 => 93,  144 => 92,  140 => 91,  100 => 54,  60 => 17,  52 => 12,  48 => 11,  44 => 10,  36 => 5,  30 => 1,);
    }
}
