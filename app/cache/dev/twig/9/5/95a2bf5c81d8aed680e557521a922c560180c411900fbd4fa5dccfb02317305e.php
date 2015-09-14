<?php

/* PCBundle:vista:bares.html.twig */
class __TwigTemplate_95a2bf5c81d8aed680e557521a922c560180c411900fbd4fa5dccfb02317305e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCBundle::plantillaInicial.html.twig", "PCBundle:vista:bares.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'slider' => array($this, 'block_slider'),
            'urlDestino' => array($this, 'block_urlDestino'),
            'urlBusqueda' => array($this, 'block_urlBusqueda'),
            'barraMenu' => array($this, 'block_barraMenu'),
            'inputHidden' => array($this, 'block_inputHidden'),
            'cuerpoPagina' => array($this, 'block_cuerpoPagina'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PCBundle::plantillaInicial.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b775a576c3f6e7857c551357ad7750043be52e527fa5a2a375b5168f6cfcc69 = $this->env->getExtension("native_profiler");
        $__internal_4b775a576c3f6e7857c551357ad7750043be52e527fa5a2a375b5168f6cfcc69->enter($__internal_4b775a576c3f6e7857c551357ad7750043be52e527fa5a2a375b5168f6cfcc69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle:vista:bares.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b775a576c3f6e7857c551357ad7750043be52e527fa5a2a375b5168f6cfcc69->leave($__internal_4b775a576c3f6e7857c551357ad7750043be52e527fa5a2a375b5168f6cfcc69_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8a6e166849cd0ea219dbf4f2bf9cd9e0532ceb2b2bcd669c6378a14f08a0f80 = $this->env->getExtension("native_profiler");
        $__internal_a8a6e166849cd0ea219dbf4f2bf9cd9e0532ceb2b2bcd669c6378a14f08a0f80->enter($__internal_a8a6e166849cd0ea219dbf4f2bf9cd9e0532ceb2b2bcd669c6378a14f08a0f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tBares
";
        
        $__internal_a8a6e166849cd0ea219dbf4f2bf9cd9e0532ceb2b2bcd669c6378a14f08a0f80->leave($__internal_a8a6e166849cd0ea219dbf4f2bf9cd9e0532ceb2b2bcd669c6378a14f08a0f80_prof);

    }

    // line 8
    public function block_slider($context, array $blocks = array())
    {
        $__internal_7113fd8b4e4a5f5101f6e429532cf62905f1ed2129040b17e618dd4f9b05181e = $this->env->getExtension("native_profiler");
        $__internal_7113fd8b4e4a5f5101f6e429532cf62905f1ed2129040b17e618dd4f9b05181e->enter($__internal_7113fd8b4e4a5f5101f6e429532cf62905f1ed2129040b17e618dd4f9b05181e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 9
        echo "\t<ul class=\"bxslider\">\t
\t\t<li class=\"contenedorSlider\">
\t\t\t<img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/bar2.jpg"), "html", null, true);
        echo "\" />
\t\t\t<span>Bares Cercanos a Ti</span>
\t\t\t<a href=\"#cuerpo1\">Ir a sección Bares Cercanos a Ti</a>
\t\t</li>
\t\t<li class=\"contenedorSlider\">
\t\t\t<img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/bar3.jpg"), "html", null, true);
        echo "\" />
\t\t\t<span>Vida Nocturna</span>
\t\t\t<a href=\"#cuerpo2\">Ir a sección Vida Nocturna</a>
\t\t</li>
\t\t<li class=\"contenedorSlider\">
\t\t\t<img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/bar4.jpg"), "html", null, true);
        echo "\" />
\t\t\t<span>Darse de Alta</span>
\t\t\t<a href=\"#cuerpo3\">Ir a Darse de Alta</a>
\t\t</li>
\t</ul>
";
        
        $__internal_7113fd8b4e4a5f5101f6e429532cf62905f1ed2129040b17e618dd4f9b05181e->leave($__internal_7113fd8b4e4a5f5101f6e429532cf62905f1ed2129040b17e618dd4f9b05181e_prof);

    }

    // line 29
    public function block_urlDestino($context, array $blocks = array())
    {
        $__internal_33ce40ad84d0b692c214ca35c6822ca2ecd6e3d264d0c2dea030e9105766d26c = $this->env->getExtension("native_profiler");
        $__internal_33ce40ad84d0b692c214ca35c6822ca2ecd6e3d264d0c2dea030e9105766d26c->enter($__internal_33ce40ad84d0b692c214ca35c6822ca2ecd6e3d264d0c2dea030e9105766d26c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino"));

        // line 30
        echo "\t'";
        echo $this->env->getExtension('routing')->getPath("pc_perfilusuario");
        echo "'
";
        
        $__internal_33ce40ad84d0b692c214ca35c6822ca2ecd6e3d264d0c2dea030e9105766d26c->leave($__internal_33ce40ad84d0b692c214ca35c6822ca2ecd6e3d264d0c2dea030e9105766d26c_prof);

    }

    // line 33
    public function block_urlBusqueda($context, array $blocks = array())
    {
        $__internal_9e8e2b8e576b7ae54517277653b48441ea4c8f4bcbb967b3232c592421e1fbf8 = $this->env->getExtension("native_profiler");
        $__internal_9e8e2b8e576b7ae54517277653b48441ea4c8f4bcbb967b3232c592421e1fbf8->enter($__internal_9e8e2b8e576b7ae54517277653b48441ea4c8f4bcbb967b3232c592421e1fbf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlBusqueda"));

        // line 34
        echo "\t";
        echo $this->env->getExtension('routing')->getPath("pc_buscarbares");
        echo "
";
        
        $__internal_9e8e2b8e576b7ae54517277653b48441ea4c8f4bcbb967b3232c592421e1fbf8->leave($__internal_9e8e2b8e576b7ae54517277653b48441ea4c8f4bcbb967b3232c592421e1fbf8_prof);

    }

    // line 39
    public function block_barraMenu($context, array $blocks = array())
    {
        $__internal_4e27d19da7c55f88161599c1e8ce23af0789ddf1618bdb0edb68bde5fb2c5504 = $this->env->getExtension("native_profiler");
        $__internal_4e27d19da7c55f88161599c1e8ce23af0789ddf1618bdb0edb68bde5fb2c5504->enter($__internal_4e27d19da7c55f88161599c1e8ce23af0789ddf1618bdb0edb68bde5fb2c5504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barraMenu"));

        // line 40
        echo "\t<div class=\"contenedorMenu\">
\t\t<nav id=\"navBares\">
\t\t\t<ul>
\t\t\t\t<li><a href=\"#cuerpo1\" class=\"botonMenuSeccionRestaurantes\">Bares Cercanos a Ti</a></li>
\t\t\t\t<li><a href=\"#cuerpo2\" class=\"botonMenuSeccionRestaurantes\">Búsqueda de Bares</a></li>
\t\t\t\t<li><a href=\"#cuerpo3\" class=\"botonMenuSeccionRestaurantes\">Darse de Alta</a></li>
\t\t\t</ul>
\t\t\t<input type=\"image\" id=\"";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["idFotoBarraMenu"]) ? $context["idFotoBarraMenu"] : $this->getContext($context, "idFotoBarraMenu")), "html", null, true);
        echo "\" class=\"enlaceAcceder\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenPerfil"]) ? $context["rutaImagenPerfil"] : $this->getContext($context, "rutaImagenPerfil"))), "html", null, true);
        echo "\" title=\"Acceder a la zona de usuarios\" />
\t\t\t<a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("pc_cerrarsesion");
        echo "\" id=\"enlaceCerrarSesion\" >Cerrar Sesi&oacute;n</a>
\t\t</nav>
\t</div>
";
        
        $__internal_4e27d19da7c55f88161599c1e8ce23af0789ddf1618bdb0edb68bde5fb2c5504->leave($__internal_4e27d19da7c55f88161599c1e8ce23af0789ddf1618bdb0edb68bde5fb2c5504_prof);

    }

    // line 54
    public function block_inputHidden($context, array $blocks = array())
    {
        $__internal_8bb467d3ca303468f411bf0f071646c6919a30c0ff36e45590500384cec53573 = $this->env->getExtension("native_profiler");
        $__internal_8bb467d3ca303468f411bf0f071646c6919a30c0ff36e45590500384cec53573->enter($__internal_8bb467d3ca303468f411bf0f071646c6919a30c0ff36e45590500384cec53573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inputHidden"));

        // line 55
        echo "\t<input type=\"hidden\" name=\"loginBares\" value=\"1000at200j\">\t
";
        
        $__internal_8bb467d3ca303468f411bf0f071646c6919a30c0ff36e45590500384cec53573->leave($__internal_8bb467d3ca303468f411bf0f071646c6919a30c0ff36e45590500384cec53573_prof);

    }

    // line 59
    public function block_cuerpoPagina($context, array $blocks = array())
    {
        $__internal_546668b0541c399f545d713b92c5667303fa951f416107e111d9db6060c39720 = $this->env->getExtension("native_profiler");
        $__internal_546668b0541c399f545d713b92c5667303fa951f416107e111d9db6060c39720->enter($__internal_546668b0541c399f545d713b92c5667303fa951f416107e111d9db6060c39720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpoPagina"));

        // line 60
        echo "\t<div id=\"relleno1\" class=\"pagina imagenRellenoBares1 parallax\" data-movimiento=\"10\">
\t</div>
\t\t
\t<div id=\"cuerpo1\">
\t<h1>Bares Cercanos a Ti</h1>
\t<table class=\"tablaCuerpos\">
\t\t<tr>
\t\t\t<td>Tienes toda la tarde por delante y amigos esperándote. Entra aquí y descubre cuáles son los bares que más destacan cerca de ti.</td>
\t\t\t<td><a class=\"botonSecciones\" href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("pc_mostrarbares");
        echo "\">Ir a Bares Cercanos a Ti</a></td>
\t\t</tr>
\t</table>
\t</div>
\t\t
\t<div id=\"relleno2\" class=\"pagina imagenRellenoBares2 parallax\" data-movimiento=\"10\">
\t</div>
\t\t
\t<div id=\"cuerpo2\">
\t\t<h1>Búsqueda de Bares</h1>
\t\t<table class=\"tablaCuerpos\">
\t\t\t<tr>
\t\t\t\t<td>¿Ya conoces ese bar ideal en el que tomar un café o una copa con tus amigos? Simplemente introduce el nombre o la ciudad del mismo y Explorapp se encargará de lo demñas</td>
\t\t\t\t<td><a class=\"botonSecciones\" id=\"abrirPopUpBusqueda\" href=\"#\">Ir a Búsqueda de Bares</a></td>
\t\t\t</tr>
\t\t</table>
\t</div>
\t\t
\t<div id=\"relleno3\" class=\"pagina imagenRellenoBares3 parallax\" data-movimiento=\"10\">
\t</div>
\t\t
\t<div id=\"cuerpo3\">
\t\t<h1>Darse de Alta</h1>
\t\t<table class=\"tablaCuerpos\">
\t\t\t<tr>
\t\t\t\t<td>Pasar a formar parte de la gran familia ExplorApp es un gran paso tanto para ti como para tu restaurante. ¡Bienvenido al mundo de los descuentos!</td>
\t\t\t\t<td><a class=\"botonSecciones\" href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("pc_nuevoregistrobares");
        echo "\">Ir a Darse de Alta</a></td>
\t\t\t</tr>
\t\t</table>
\t</div>
";
        
        $__internal_546668b0541c399f545d713b92c5667303fa951f416107e111d9db6060c39720->leave($__internal_546668b0541c399f545d713b92c5667303fa951f416107e111d9db6060c39720_prof);

    }

    public function getTemplateName()
    {
        return "PCBundle:vista:bares.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 94,  187 => 68,  177 => 60,  171 => 59,  163 => 55,  157 => 54,  146 => 48,  140 => 47,  131 => 40,  125 => 39,  115 => 34,  109 => 33,  99 => 30,  93 => 29,  80 => 21,  72 => 16,  64 => 11,  60 => 9,  54 => 8,  46 => 4,  40 => 3,  11 => 1,);
    }
}
