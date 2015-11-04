<?php

/* PCBundle:vista:hoteles.html.twig */
class __TwigTemplate_16d6d414ffeea1d2b4bcf66f9b1659f6a0c30aeb3daa61f2fbd78d5b158d5516 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCBundle::plantillaInicial.html.twig", "PCBundle:vista:hoteles.html.twig", 1);
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
        $__internal_ac624acd383c201310ba18f0d7d8f64348bb258c9b49667acbfb490854d1c8ad = $this->env->getExtension("native_profiler");
        $__internal_ac624acd383c201310ba18f0d7d8f64348bb258c9b49667acbfb490854d1c8ad->enter($__internal_ac624acd383c201310ba18f0d7d8f64348bb258c9b49667acbfb490854d1c8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle:vista:hoteles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac624acd383c201310ba18f0d7d8f64348bb258c9b49667acbfb490854d1c8ad->leave($__internal_ac624acd383c201310ba18f0d7d8f64348bb258c9b49667acbfb490854d1c8ad_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_418f3b8bd99688d3abc6fb2d9e6a5efef9e5a942eccf04edbcdbf8201c72e533 = $this->env->getExtension("native_profiler");
        $__internal_418f3b8bd99688d3abc6fb2d9e6a5efef9e5a942eccf04edbcdbf8201c72e533->enter($__internal_418f3b8bd99688d3abc6fb2d9e6a5efef9e5a942eccf04edbcdbf8201c72e533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tHoteles
";
        
        $__internal_418f3b8bd99688d3abc6fb2d9e6a5efef9e5a942eccf04edbcdbf8201c72e533->leave($__internal_418f3b8bd99688d3abc6fb2d9e6a5efef9e5a942eccf04edbcdbf8201c72e533_prof);

    }

    // line 8
    public function block_slider($context, array $blocks = array())
    {
        $__internal_542a165e16f98d2944246684ee6e7e46ca7a724a14bff5bf72a6c8a2a3253000 = $this->env->getExtension("native_profiler");
        $__internal_542a165e16f98d2944246684ee6e7e46ca7a724a14bff5bf72a6c8a2a3253000->enter($__internal_542a165e16f98d2944246684ee6e7e46ca7a724a14bff5bf72a6c8a2a3253000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 9
        echo "\t<ul class=\"bxslider\">\t
\t\t<li class=\"contenedorSlider\">
\t\t\t<img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/hotel2.jpg"), "html", null, true);
        echo "\" />
\t\t\t<span>Hoteles en Promoción</span>
\t\t\t<a href=\"#cuerpo1\">Ir a sección Hoteles en Promoción</a>
\t\t</li>
\t\t<li class=\"contenedorSlider\">
\t\t\t<img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/hotel3.jpg"), "html", null, true);
        echo "\" />
\t\t\t<span>Alojamientos Únicos</span>
\t\t\t<a href=\"#cuerpo2\">Ir a sección Alojamientos Únicos</a>
\t\t</li>
\t\t<li class=\"contenedorSlider\">
\t\t\t<img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/hotel4.jpg"), "html", null, true);
        echo "\" />
\t\t\t<span>Darse de Alta</span>
\t\t\t<a href=\"#cuerpo3\">Ir a Darse de Alta</a>
\t\t</li>
\t</ul>
";
        
        $__internal_542a165e16f98d2944246684ee6e7e46ca7a724a14bff5bf72a6c8a2a3253000->leave($__internal_542a165e16f98d2944246684ee6e7e46ca7a724a14bff5bf72a6c8a2a3253000_prof);

    }

    // line 29
    public function block_urlDestino($context, array $blocks = array())
    {
        $__internal_b27bfa597fbd5fc23e82a3532f1114be480980b39af170c36fd42cf1fe382d1d = $this->env->getExtension("native_profiler");
        $__internal_b27bfa597fbd5fc23e82a3532f1114be480980b39af170c36fd42cf1fe382d1d->enter($__internal_b27bfa597fbd5fc23e82a3532f1114be480980b39af170c36fd42cf1fe382d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino"));

        // line 30
        echo "\t'";
        echo $this->env->getExtension('routing')->getPath("pc_perfilusuario");
        echo "'
";
        
        $__internal_b27bfa597fbd5fc23e82a3532f1114be480980b39af170c36fd42cf1fe382d1d->leave($__internal_b27bfa597fbd5fc23e82a3532f1114be480980b39af170c36fd42cf1fe382d1d_prof);

    }

    // line 33
    public function block_urlBusqueda($context, array $blocks = array())
    {
        $__internal_82fcfffa256fef0e2ea65fbf21c39fb6a0cf82409d4906c8fa6b15bd5eb58040 = $this->env->getExtension("native_profiler");
        $__internal_82fcfffa256fef0e2ea65fbf21c39fb6a0cf82409d4906c8fa6b15bd5eb58040->enter($__internal_82fcfffa256fef0e2ea65fbf21c39fb6a0cf82409d4906c8fa6b15bd5eb58040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlBusqueda"));

        // line 34
        echo "\t";
        echo $this->env->getExtension('routing')->getPath("pc_buscarhoteles");
        echo "
";
        
        $__internal_82fcfffa256fef0e2ea65fbf21c39fb6a0cf82409d4906c8fa6b15bd5eb58040->leave($__internal_82fcfffa256fef0e2ea65fbf21c39fb6a0cf82409d4906c8fa6b15bd5eb58040_prof);

    }

    // line 38
    public function block_barraMenu($context, array $blocks = array())
    {
        $__internal_07807fef56680ca042282e786e9533c0c4c802c57c9cfbc98bd62fa97b832dd6 = $this->env->getExtension("native_profiler");
        $__internal_07807fef56680ca042282e786e9533c0c4c802c57c9cfbc98bd62fa97b832dd6->enter($__internal_07807fef56680ca042282e786e9533c0c4c802c57c9cfbc98bd62fa97b832dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barraMenu"));

        // line 39
        echo "\t<div class=\"contenedorMenu\">
\t\t<nav id=\"navHoteles\">
\t\t\t<ul>
\t\t\t<a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("pc_homepage");
        echo "\"><img src=\"./img/home_icon.png\" class=\"iconoIndex izquierdaIcono\" /></a>
\t\t\t<a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("mobile_homepage");
        echo "\"><img src=\"./img/mobile_icon.png\" class=\"iconoIndex\" /></a>
\t\t\t\t<li><a href=\"#cuerpo1\" class=\"botonMenuSeccionHoteles\">Hoteles en Promoción</a></li>
\t\t\t\t<li><a href=\"#cuerpo2\" class=\"botonMenuSeccionHoteles\">Búsqueda de Hotel</a></li>
\t\t\t\t<li><a href=\"#cuerpo3\" class=\"botonMenuSeccionHoteles\">Darse de Alta</a></li>
\t\t\t</ul>
\t\t\t<input type=\"image\" id=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["idFotoBarraMenu"]) ? $context["idFotoBarraMenu"] : $this->getContext($context, "idFotoBarraMenu")), "html", null, true);
        echo "\" class=\"enlaceAcceder\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenPerfil"]) ? $context["rutaImagenPerfil"] : $this->getContext($context, "rutaImagenPerfil"))), "html", null, true);
        echo "\" title=\"Acceder a la zona de usuarios\" />
\t\t\t<a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("pc_cerrarsesion");
        echo "\" id=\"enlaceCerrarSesion\" >Cerrar Sesi&oacute;n</a>
\t\t</nav>
\t</div>
";
        
        $__internal_07807fef56680ca042282e786e9533c0c4c802c57c9cfbc98bd62fa97b832dd6->leave($__internal_07807fef56680ca042282e786e9533c0c4c802c57c9cfbc98bd62fa97b832dd6_prof);

    }

    // line 55
    public function block_inputHidden($context, array $blocks = array())
    {
        $__internal_0b70db9b9d7a834ecd1745467593306bb1bcd14a1a14c5191feebf3d58b7a9e4 = $this->env->getExtension("native_profiler");
        $__internal_0b70db9b9d7a834ecd1745467593306bb1bcd14a1a14c5191feebf3d58b7a9e4->enter($__internal_0b70db9b9d7a834ecd1745467593306bb1bcd14a1a14c5191feebf3d58b7a9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inputHidden"));

        // line 56
        echo "\t<input type=\"hidden\" name=\"loginHoteles\" value=\"1000at200j\">\t
";
        
        $__internal_0b70db9b9d7a834ecd1745467593306bb1bcd14a1a14c5191feebf3d58b7a9e4->leave($__internal_0b70db9b9d7a834ecd1745467593306bb1bcd14a1a14c5191feebf3d58b7a9e4_prof);

    }

    // line 60
    public function block_cuerpoPagina($context, array $blocks = array())
    {
        $__internal_5ccdd13e28d5d19ac79cd42c173e17cb455f0be0c6fa60147b0d2fb320682c3a = $this->env->getExtension("native_profiler");
        $__internal_5ccdd13e28d5d19ac79cd42c173e17cb455f0be0c6fa60147b0d2fb320682c3a->enter($__internal_5ccdd13e28d5d19ac79cd42c173e17cb455f0be0c6fa60147b0d2fb320682c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpoPagina"));

        // line 61
        echo "\t<div id=\"relleno1\" class=\"pagina imagenRellenoHoteles1 parallax\" data-movimiento=\"10\">
\t</div>
\t\t
\t<div id=\"cuerpo1\">
\t<h1>Hoteles en Promocion</h1>
\t<table class=\"tablaCuerpos\">
\t\t<tr>
\t\t\t<td>¿Una noche de trabajo o una semana en Budapest? Seguro que con nosotros encuentras ese hotel irrepetible a un precio insuperable.</td>
\t\t\t<td><a class=\"botonSecciones\" href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("pc_mostrarhoteles");
        echo "\">Ir a Hoteles en Promoción</a></td>
\t\t</tr>
\t</table>
\t</div>
\t\t
\t<div id=\"relleno2\" class=\"pagina imagenRellenoHoteles2 parallax\" data-movimiento=\"10\">
\t</div>
\t\t
\t<div id=\"cuerpo2\">
\t\t<h1>Búsqueda de Hoteles</h1>
\t\t<table class=\"tablaCuerpos\">
\t\t\t<tr>
\t\t\t\t<td>Hay un hotel que siempre tendrás en la memoria. Búscale con nosotros y vuelve a enamorate de las vacaciones al mejor precio.</td>
\t\t\t\t<td><a class=\"botonSecciones\" id=\"abrirPopUpBusqueda\" href=\"#\">Búsqueda de Hotel</a></td>
\t\t\t</tr>
\t\t</table>
\t</div>
\t\t
\t<div id=\"relleno3\" class=\"pagina imagenRellenoHoteles3 parallax\" data-movimiento=\"10\">
\t</div>
\t\t
\t<div id=\"cuerpo3\">
\t\t<h1>Darse de Alta</h1>
\t\t<table class=\"tablaCuerpos\">
\t\t\t<tr>
\t\t\t\t<td>Pasar a formar parte de la gran familia ExplorApp es un gran paso tanto para ti como para tu restaurante. ¡Bienvenido al mundo de los descuentos!</td>
\t\t\t\t<td><a class=\"botonSecciones\" href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("pc_nuevoregistrohoteles");
        echo "\">Ir a Darse de Alta</a></td>
\t\t\t</tr>
\t\t</table>
\t</div>
";
        
        $__internal_5ccdd13e28d5d19ac79cd42c173e17cb455f0be0c6fa60147b0d2fb320682c3a->leave($__internal_5ccdd13e28d5d19ac79cd42c173e17cb455f0be0c6fa60147b0d2fb320682c3a_prof);

    }

    public function getTemplateName()
    {
        return "PCBundle:vista:hoteles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 95,  195 => 69,  185 => 61,  179 => 60,  171 => 56,  165 => 55,  154 => 49,  148 => 48,  140 => 43,  136 => 42,  131 => 39,  125 => 38,  115 => 34,  109 => 33,  99 => 30,  93 => 29,  80 => 21,  72 => 16,  64 => 11,  60 => 9,  54 => 8,  46 => 4,  40 => 3,  11 => 1,);
    }
}
