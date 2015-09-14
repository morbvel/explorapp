<?php

/* PCBundle:vista:hoteles.html.twig */
class __TwigTemplate_9b45bdd9e1437bcd38b89c2df241a51e7cf20d9e4988bce1d51db20c6c454b9f extends Twig_Template
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
        $__internal_68a68a5bcf41fac5d25577cc772f95651d6d2c1e7ca7def44e3eaeee1aae8dc0 = $this->env->getExtension("native_profiler");
        $__internal_68a68a5bcf41fac5d25577cc772f95651d6d2c1e7ca7def44e3eaeee1aae8dc0->enter($__internal_68a68a5bcf41fac5d25577cc772f95651d6d2c1e7ca7def44e3eaeee1aae8dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle:vista:hoteles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68a68a5bcf41fac5d25577cc772f95651d6d2c1e7ca7def44e3eaeee1aae8dc0->leave($__internal_68a68a5bcf41fac5d25577cc772f95651d6d2c1e7ca7def44e3eaeee1aae8dc0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_709458c6e1fcf0dd7835b26e6024a396fcceecab875c3c516e7387d151ab1771 = $this->env->getExtension("native_profiler");
        $__internal_709458c6e1fcf0dd7835b26e6024a396fcceecab875c3c516e7387d151ab1771->enter($__internal_709458c6e1fcf0dd7835b26e6024a396fcceecab875c3c516e7387d151ab1771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tHoteles
";
        
        $__internal_709458c6e1fcf0dd7835b26e6024a396fcceecab875c3c516e7387d151ab1771->leave($__internal_709458c6e1fcf0dd7835b26e6024a396fcceecab875c3c516e7387d151ab1771_prof);

    }

    // line 8
    public function block_slider($context, array $blocks = array())
    {
        $__internal_32f5b7244f42fb0dc3ebe4312f63091a6e7a32c63d3b5e679cecf21962af6467 = $this->env->getExtension("native_profiler");
        $__internal_32f5b7244f42fb0dc3ebe4312f63091a6e7a32c63d3b5e679cecf21962af6467->enter($__internal_32f5b7244f42fb0dc3ebe4312f63091a6e7a32c63d3b5e679cecf21962af6467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

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
        
        $__internal_32f5b7244f42fb0dc3ebe4312f63091a6e7a32c63d3b5e679cecf21962af6467->leave($__internal_32f5b7244f42fb0dc3ebe4312f63091a6e7a32c63d3b5e679cecf21962af6467_prof);

    }

    // line 29
    public function block_urlDestino($context, array $blocks = array())
    {
        $__internal_b04286a879e47f53e70d94a000d2c114834227c53ce1791387ae4ec3b0ae62e1 = $this->env->getExtension("native_profiler");
        $__internal_b04286a879e47f53e70d94a000d2c114834227c53ce1791387ae4ec3b0ae62e1->enter($__internal_b04286a879e47f53e70d94a000d2c114834227c53ce1791387ae4ec3b0ae62e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino"));

        // line 30
        echo "\t'";
        echo $this->env->getExtension('routing')->getPath("pc_perfilusuario");
        echo "'
";
        
        $__internal_b04286a879e47f53e70d94a000d2c114834227c53ce1791387ae4ec3b0ae62e1->leave($__internal_b04286a879e47f53e70d94a000d2c114834227c53ce1791387ae4ec3b0ae62e1_prof);

    }

    // line 33
    public function block_urlBusqueda($context, array $blocks = array())
    {
        $__internal_72c21ebcca44c02e13c93ba6d79ed7231e68ad243b2bb4f4585b85c4415de0c6 = $this->env->getExtension("native_profiler");
        $__internal_72c21ebcca44c02e13c93ba6d79ed7231e68ad243b2bb4f4585b85c4415de0c6->enter($__internal_72c21ebcca44c02e13c93ba6d79ed7231e68ad243b2bb4f4585b85c4415de0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlBusqueda"));

        // line 34
        echo "\t";
        echo $this->env->getExtension('routing')->getPath("pc_buscarhoteles");
        echo "
";
        
        $__internal_72c21ebcca44c02e13c93ba6d79ed7231e68ad243b2bb4f4585b85c4415de0c6->leave($__internal_72c21ebcca44c02e13c93ba6d79ed7231e68ad243b2bb4f4585b85c4415de0c6_prof);

    }

    // line 38
    public function block_barraMenu($context, array $blocks = array())
    {
        $__internal_889d636276459fc6a36e9afb650caabb4b6db5fa5dbce75191179e2e4ecd64ba = $this->env->getExtension("native_profiler");
        $__internal_889d636276459fc6a36e9afb650caabb4b6db5fa5dbce75191179e2e4ecd64ba->enter($__internal_889d636276459fc6a36e9afb650caabb4b6db5fa5dbce75191179e2e4ecd64ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barraMenu"));

        // line 39
        echo "\t<div class=\"contenedorMenu\">
\t\t<nav id=\"navHoteles\">
\t\t\t<ul>
\t\t\t\t<li><a href=\"#cuerpo1\" class=\"botonMenuSeccionHoteles\">Hoteles en Promoción</a></li>
\t\t\t\t<li><a href=\"#cuerpo2\" class=\"botonMenuSeccionHoteles\">Búsqueda de Hotel</a></li>
\t\t\t\t<li><a href=\"#cuerpo3\" class=\"botonMenuSeccionHoteles\">Darse de Alta</a></li>
\t\t\t</ul>
\t\t\t<input type=\"image\" id=\"";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["idFotoBarraMenu"]) ? $context["idFotoBarraMenu"] : $this->getContext($context, "idFotoBarraMenu")), "html", null, true);
        echo "\" class=\"enlaceAcceder\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenPerfil"]) ? $context["rutaImagenPerfil"] : $this->getContext($context, "rutaImagenPerfil"))), "html", null, true);
        echo "\" title=\"Acceder a la zona de usuarios\" />
\t\t\t<a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("pc_cerrarsesion");
        echo "\" id=\"enlaceCerrarSesion\" >Cerrar Sesi&oacute;n</a>
\t\t</nav>
\t</div>
";
        
        $__internal_889d636276459fc6a36e9afb650caabb4b6db5fa5dbce75191179e2e4ecd64ba->leave($__internal_889d636276459fc6a36e9afb650caabb4b6db5fa5dbce75191179e2e4ecd64ba_prof);

    }

    // line 53
    public function block_inputHidden($context, array $blocks = array())
    {
        $__internal_52514c241e2d223ef882d07ead4a48c01204922769cc5047af8aab3b4a06fdea = $this->env->getExtension("native_profiler");
        $__internal_52514c241e2d223ef882d07ead4a48c01204922769cc5047af8aab3b4a06fdea->enter($__internal_52514c241e2d223ef882d07ead4a48c01204922769cc5047af8aab3b4a06fdea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inputHidden"));

        // line 54
        echo "\t<input type=\"hidden\" name=\"loginHoteles\" value=\"1000at200j\">\t
";
        
        $__internal_52514c241e2d223ef882d07ead4a48c01204922769cc5047af8aab3b4a06fdea->leave($__internal_52514c241e2d223ef882d07ead4a48c01204922769cc5047af8aab3b4a06fdea_prof);

    }

    // line 58
    public function block_cuerpoPagina($context, array $blocks = array())
    {
        $__internal_ce8139058207639acec615dda1319ad6cbdad718dcdbb6d536ab9c3c7d0b8eee = $this->env->getExtension("native_profiler");
        $__internal_ce8139058207639acec615dda1319ad6cbdad718dcdbb6d536ab9c3c7d0b8eee->enter($__internal_ce8139058207639acec615dda1319ad6cbdad718dcdbb6d536ab9c3c7d0b8eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpoPagina"));

        // line 59
        echo "\t<div id=\"relleno1\" class=\"pagina imagenRellenoHoteles1 parallax\" data-movimiento=\"10\">
\t</div>
\t\t
\t<div id=\"cuerpo1\">
\t<h1>Hoteles en Promocion</h1>
\t<table class=\"tablaCuerpos\">
\t\t<tr>
\t\t\t<td>¿Una noche de trabajo o una semana en Budapest? Seguro que con nosotros encuentras ese hotel irrepetible a un precio insuperable.</td>
\t\t\t<td><a class=\"botonSecciones\" href=\"";
        // line 67
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
        // line 93
        echo $this->env->getExtension('routing')->getPath("pc_nuevoregistrohoteles");
        echo "\">Ir a Darse de Alta</a></td>
\t\t\t</tr>
\t\t</table>
\t</div>
";
        
        $__internal_ce8139058207639acec615dda1319ad6cbdad718dcdbb6d536ab9c3c7d0b8eee->leave($__internal_ce8139058207639acec615dda1319ad6cbdad718dcdbb6d536ab9c3c7d0b8eee_prof);

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
        return array (  216 => 93,  187 => 67,  177 => 59,  171 => 58,  163 => 54,  157 => 53,  146 => 47,  140 => 46,  131 => 39,  125 => 38,  115 => 34,  109 => 33,  99 => 30,  93 => 29,  80 => 21,  72 => 16,  64 => 11,  60 => 9,  54 => 8,  46 => 4,  40 => 3,  11 => 1,);
    }
}
