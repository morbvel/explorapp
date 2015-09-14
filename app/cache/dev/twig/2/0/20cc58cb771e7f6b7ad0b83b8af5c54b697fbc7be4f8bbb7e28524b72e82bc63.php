<?php

/* PCBundle:vista:restaurantes.html.twig */
class __TwigTemplate_20cc58cb771e7f6b7ad0b83b8af5c54b697fbc7be4f8bbb7e28524b72e82bc63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCBundle::plantillaInicial.html.twig", "PCBundle:vista:restaurantes.html.twig", 1);
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
        $__internal_3d4aec4a748a4946a42e8c25a6532977b4f0e5c31be7ab7b9b7ef567f60c19c7 = $this->env->getExtension("native_profiler");
        $__internal_3d4aec4a748a4946a42e8c25a6532977b4f0e5c31be7ab7b9b7ef567f60c19c7->enter($__internal_3d4aec4a748a4946a42e8c25a6532977b4f0e5c31be7ab7b9b7ef567f60c19c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle:vista:restaurantes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d4aec4a748a4946a42e8c25a6532977b4f0e5c31be7ab7b9b7ef567f60c19c7->leave($__internal_3d4aec4a748a4946a42e8c25a6532977b4f0e5c31be7ab7b9b7ef567f60c19c7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_20323da537acb61b15ccef4c96f96f055c8355f47702321496a1a26eaed4d21b = $this->env->getExtension("native_profiler");
        $__internal_20323da537acb61b15ccef4c96f96f055c8355f47702321496a1a26eaed4d21b->enter($__internal_20323da537acb61b15ccef4c96f96f055c8355f47702321496a1a26eaed4d21b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tRestaurantes
";
        
        $__internal_20323da537acb61b15ccef4c96f96f055c8355f47702321496a1a26eaed4d21b->leave($__internal_20323da537acb61b15ccef4c96f96f055c8355f47702321496a1a26eaed4d21b_prof);

    }

    // line 8
    public function block_slider($context, array $blocks = array())
    {
        $__internal_5530d5dd0801b34423a246298ff961c5070a472645b3c378a3be477e72934cfc = $this->env->getExtension("native_profiler");
        $__internal_5530d5dd0801b34423a246298ff961c5070a472645b3c378a3be477e72934cfc->enter($__internal_5530d5dd0801b34423a246298ff961c5070a472645b3c378a3be477e72934cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 9
        echo "\t<ul class=\"bxslider\">\t
\t\t<li class=\"contenedorSlider\">
\t\t\t<img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/restaurante2.jpg"), "html", null, true);
        echo "\" />
\t\t\t<span>Restaurantes Asociados</span>
\t\t\t<a href=\"#cuerpo1\">Ir a sección Restaurantes Asociados</a>
\t\t</li>
\t\t<li class=\"contenedorSlider\">
\t\t\t<img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/restaurante3.jpg"), "html", null, true);
        echo "\" />
\t\t\t<span>¿Algo Especial?</span>
\t\t\t<a href=\"#cuerpo2\">Ir a ¿Algo Especial?</a>
\t\t</li>
\t\t<li class=\"contenedorSlider\">
\t\t\t<img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/restaurante4.jpg"), "html", null, true);
        echo "\" />
\t\t\t<span>Darse de Alta</span>
\t\t\t<a href=\"#cuerpo3\">Ir a Darse de Alta</a>
\t\t</li>
\t</ul>
";
        
        $__internal_5530d5dd0801b34423a246298ff961c5070a472645b3c378a3be477e72934cfc->leave($__internal_5530d5dd0801b34423a246298ff961c5070a472645b3c378a3be477e72934cfc_prof);

    }

    // line 29
    public function block_urlDestino($context, array $blocks = array())
    {
        $__internal_1a4c83ffd9c36a6cf3fa810e60685fbeea051998e508dda39e609efcd426ed1b = $this->env->getExtension("native_profiler");
        $__internal_1a4c83ffd9c36a6cf3fa810e60685fbeea051998e508dda39e609efcd426ed1b->enter($__internal_1a4c83ffd9c36a6cf3fa810e60685fbeea051998e508dda39e609efcd426ed1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino"));

        // line 30
        echo "\t'";
        echo $this->env->getExtension('routing')->getPath("pc_perfilusuario");
        echo "'
";
        
        $__internal_1a4c83ffd9c36a6cf3fa810e60685fbeea051998e508dda39e609efcd426ed1b->leave($__internal_1a4c83ffd9c36a6cf3fa810e60685fbeea051998e508dda39e609efcd426ed1b_prof);

    }

    // line 34
    public function block_urlBusqueda($context, array $blocks = array())
    {
        $__internal_034c0f2a1dd4fb64b374c62c77cf146c61978a18528a0a7930fbae544797076a = $this->env->getExtension("native_profiler");
        $__internal_034c0f2a1dd4fb64b374c62c77cf146c61978a18528a0a7930fbae544797076a->enter($__internal_034c0f2a1dd4fb64b374c62c77cf146c61978a18528a0a7930fbae544797076a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlBusqueda"));

        // line 35
        echo "\t";
        echo $this->env->getExtension('routing')->getPath("pc_buscarrestaurantes");
        echo "
";
        
        $__internal_034c0f2a1dd4fb64b374c62c77cf146c61978a18528a0a7930fbae544797076a->leave($__internal_034c0f2a1dd4fb64b374c62c77cf146c61978a18528a0a7930fbae544797076a_prof);

    }

    // line 39
    public function block_barraMenu($context, array $blocks = array())
    {
        $__internal_940ac1ce9f3bd843b03bdc10d2230cf7bd6cc6a4eb3792f29cc5d708dc8692be = $this->env->getExtension("native_profiler");
        $__internal_940ac1ce9f3bd843b03bdc10d2230cf7bd6cc6a4eb3792f29cc5d708dc8692be->enter($__internal_940ac1ce9f3bd843b03bdc10d2230cf7bd6cc6a4eb3792f29cc5d708dc8692be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barraMenu"));

        // line 40
        echo "\t<div class=\"contenedorMenu\">
\t\t<nav id=\"navRestaurantes\">
\t\t\t<ul>
\t\t\t\t<li><a href=\"#cuerpo1\" class=\"botonMenuSeccionRestaurantes\">Restaurantes Asociados</a></li>
\t\t\t\t<li><a href=\"#cuerpo2\" class=\"botonMenuSeccionRestaurantes\">Búsqueda de Restaurantes</a></li>
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
        
        $__internal_940ac1ce9f3bd843b03bdc10d2230cf7bd6cc6a4eb3792f29cc5d708dc8692be->leave($__internal_940ac1ce9f3bd843b03bdc10d2230cf7bd6cc6a4eb3792f29cc5d708dc8692be_prof);

    }

    // line 55
    public function block_inputHidden($context, array $blocks = array())
    {
        $__internal_48f39891c6222f0e40ddd1795457cfa0554056cd91dd9af7388e86634940ef4d = $this->env->getExtension("native_profiler");
        $__internal_48f39891c6222f0e40ddd1795457cfa0554056cd91dd9af7388e86634940ef4d->enter($__internal_48f39891c6222f0e40ddd1795457cfa0554056cd91dd9af7388e86634940ef4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inputHidden"));

        // line 56
        echo "\t<input type=\"hidden\" name=\"loginRestaurantes\" value=\"1000at200j\">\t
";
        
        $__internal_48f39891c6222f0e40ddd1795457cfa0554056cd91dd9af7388e86634940ef4d->leave($__internal_48f39891c6222f0e40ddd1795457cfa0554056cd91dd9af7388e86634940ef4d_prof);

    }

    // line 61
    public function block_cuerpoPagina($context, array $blocks = array())
    {
        $__internal_25afad43e1fa6ed197c0ba6241bee3b0396694891ccf2bfcb47cd20a627882cf = $this->env->getExtension("native_profiler");
        $__internal_25afad43e1fa6ed197c0ba6241bee3b0396694891ccf2bfcb47cd20a627882cf->enter($__internal_25afad43e1fa6ed197c0ba6241bee3b0396694891ccf2bfcb47cd20a627882cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpoPagina"));

        // line 62
        echo "\t<div id=\"relleno1\" class=\"pagina imagenRellenoRestaurantes1 parallax\" data-movimiento=\"10\">
\t</div>
\t\t
\t<div id=\"cuerpo1\">
\t<h1>Restaurantes Asociados</h1>
\t<table class=\"tablaCuerpos\">
\t\t<tr>
\t\t\t<td>En esta sección podrás encontrar todo tipo de restaurante en los que empezar a disfrutar de los descuentos más increíbles que conseguirás gracias a Explorapp.</td>
\t\t\t<td><a class=\"botonSecciones\" href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("pc_mostrarrestaurantes");
        echo "\">Ir a Restaurantes Asociados</a></td>
\t\t</tr>
\t</table>
\t</div>
\t\t
\t<div id=\"relleno2\" class=\"pagina imagenRellenoRestaurantes2 parallax\" data-movimiento=\"10\">
\t</div>
\t\t
\t<div id=\"cuerpo2\">
\t\t<h1>Búsqueda de Restaurantes</h1>
\t\t<table class=\"tablaCuerpos\">
\t\t\t<tr>
\t\t\t\t<td>¿Hace cuánto que no sales a cenar con tu familia o amigos? Descubre las ofertas que tenemos para con  tu sitio de toda la vida.</td>
\t\t\t\t<td><a class=\"botonSecciones\" id=\"abrirPopUpBusqueda\" href=\"#\">Búsqueda de Restaurante</a></td>
\t\t\t</tr>
\t\t</table>
\t</div>
\t\t
\t<div id=\"relleno3\" class=\"pagina imagenRellenoRestaurantes3 parallax\" data-movimiento=\"10\">
\t</div>
\t\t
\t<div id=\"cuerpo3\">
\t\t<h1>Darse de Alta</h1>
\t\t<table class=\"tablaCuerpos\">
\t\t\t<tr>
\t\t\t\t<td>Pasar a formar parte de la gran familia ExplorApp es un gran paso tanto para ti como para tu restaurante. ¡Bienvenido al mundo de los descuentos!</td>
\t\t\t\t<td><a class=\"botonSecciones\" href=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("pc_nuevoregistrorestaurantes");
        echo "\">Ir a Darse de Alta</a></td>
\t\t\t</tr>
\t\t</table>
\t</div>
";
        
        $__internal_25afad43e1fa6ed197c0ba6241bee3b0396694891ccf2bfcb47cd20a627882cf->leave($__internal_25afad43e1fa6ed197c0ba6241bee3b0396694891ccf2bfcb47cd20a627882cf_prof);

    }

    public function getTemplateName()
    {
        return "PCBundle:vista:restaurantes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 96,  187 => 70,  177 => 62,  171 => 61,  163 => 56,  157 => 55,  146 => 48,  140 => 47,  131 => 40,  125 => 39,  115 => 35,  109 => 34,  99 => 30,  93 => 29,  80 => 21,  72 => 16,  64 => 11,  60 => 9,  54 => 8,  46 => 4,  40 => 3,  11 => 1,);
    }
}
