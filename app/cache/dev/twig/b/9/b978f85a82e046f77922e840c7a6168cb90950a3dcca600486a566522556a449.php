<?php

/* PCBundle:vista:index.html.twig */
class __TwigTemplate_b978f85a82e046f77922e840c7a6168cb90950a3dcca600486a566522556a449 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCBundle::plantillaInicial.html.twig", "PCBundle:vista:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'slider' => array($this, 'block_slider'),
            'urlDestino' => array($this, 'block_urlDestino'),
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
        $__internal_92fd86ede15099418b72d47f4a05066fc8f2c14c53848e72deeee4caa19fe73c = $this->env->getExtension("native_profiler");
        $__internal_92fd86ede15099418b72d47f4a05066fc8f2c14c53848e72deeee4caa19fe73c->enter($__internal_92fd86ede15099418b72d47f4a05066fc8f2c14c53848e72deeee4caa19fe73c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle:vista:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92fd86ede15099418b72d47f4a05066fc8f2c14c53848e72deeee4caa19fe73c->leave($__internal_92fd86ede15099418b72d47f4a05066fc8f2c14c53848e72deeee4caa19fe73c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb08029847c219d2bfee807e602dde1de4f3a7ba18ace310d92a37fe0fcafaca = $this->env->getExtension("native_profiler");
        $__internal_fb08029847c219d2bfee807e602dde1de4f3a7ba18ace310d92a37fe0fcafaca->enter($__internal_fb08029847c219d2bfee807e602dde1de4f3a7ba18ace310d92a37fe0fcafaca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "\tP&aacute;gina Principal
";
        
        $__internal_fb08029847c219d2bfee807e602dde1de4f3a7ba18ace310d92a37fe0fcafaca->leave($__internal_fb08029847c219d2bfee807e602dde1de4f3a7ba18ace310d92a37fe0fcafaca_prof);

    }

    // line 12
    public function block_slider($context, array $blocks = array())
    {
        $__internal_45535cf72697a8979721caa89111bcbdedd6796172f2def56bcba2a28f4862a3 = $this->env->getExtension("native_profiler");
        $__internal_45535cf72697a8979721caa89111bcbdedd6796172f2def56bcba2a28f4862a3->enter($__internal_45535cf72697a8979721caa89111bcbdedd6796172f2def56bcba2a28f4862a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 13
        echo "\t<ul class=\"bxslider\">\t
\t\t<li class=\"contenedorSlider\">
\t\t\t<img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/restaurante1.jpg"), "html", null, true);
        echo "\" />
\t\t\t<span>Restaurantes</span>
\t\t\t<a href=\"#cuerpo1\">Ir a sección Restaurantes</a>
\t\t</li>
\t\t<li class=\"contenedorSlider\">
\t\t\t<img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/hotel1.jpg"), "html", null, true);
        echo "\" />
\t\t\t<span>Hoteles</span>
\t\t\t<a href=\"#cuerpo2\">Ir a sección Hoteles</a>
\t\t</li>
\t\t<li class=\"contenedorSlider\">
\t\t\t<img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/bar1.jpg"), "html", null, true);
        echo "\" />
\t\t\t<span>Bares</span>
\t\t\t<a href=\"#cuerpo3\">Ir a sección Bares</a>
\t\t</li>
\t</ul>
";
        
        $__internal_45535cf72697a8979721caa89111bcbdedd6796172f2def56bcba2a28f4862a3->leave($__internal_45535cf72697a8979721caa89111bcbdedd6796172f2def56bcba2a28f4862a3_prof);

    }

    // line 34
    public function block_urlDestino($context, array $blocks = array())
    {
        $__internal_be9787a13eb5e6b2747a7fed8a2d65dabaa7792702efd59071c9395277241a22 = $this->env->getExtension("native_profiler");
        $__internal_be9787a13eb5e6b2747a7fed8a2d65dabaa7792702efd59071c9395277241a22->enter($__internal_be9787a13eb5e6b2747a7fed8a2d65dabaa7792702efd59071c9395277241a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino"));

        // line 35
        echo "\t'";
        echo $this->env->getExtension('routing')->getPath("pc_perfilusuario");
        echo "'
";
        
        $__internal_be9787a13eb5e6b2747a7fed8a2d65dabaa7792702efd59071c9395277241a22->leave($__internal_be9787a13eb5e6b2747a7fed8a2d65dabaa7792702efd59071c9395277241a22_prof);

    }

    // line 39
    public function block_barraMenu($context, array $blocks = array())
    {
        $__internal_a9bbdf82f1de04bc50f9a40522d2c60f296479c6aeb30acbd1a54b01edad0052 = $this->env->getExtension("native_profiler");
        $__internal_a9bbdf82f1de04bc50f9a40522d2c60f296479c6aeb30acbd1a54b01edad0052->enter($__internal_a9bbdf82f1de04bc50f9a40522d2c60f296479c6aeb30acbd1a54b01edad0052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barraMenu"));

        // line 40
        echo "\t<div class=\"contenedorMenu\">
\t\t<nav>
\t\t\t<ul>
\t\t\t\t<li><a href=\"#cuerpo1\" id=\"botonGrande\">Restaurantes</a></li>
\t\t\t\t<li><a href=\"#cuerpo2\" id=\"botonMediano\">Hoteles</a></li>
\t\t\t\t<li><a href=\"#cuerpo3\" id=\"botonPequeño\">Bares</a></li>
\t\t\t</ul>
\t\t\t<input type=\"image\" id=\"";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["idFotoBarraMenu"]) ? $context["idFotoBarraMenu"] : $this->getContext($context, "idFotoBarraMenu")), "html", null, true);
        echo "\" class=\"enlaceAccederIndex\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenPerfil"]) ? $context["rutaImagenPerfil"] : $this->getContext($context, "rutaImagenPerfil"))), "html", null, true);
        echo "\" title=\"Acceder a la zona de usuarios\" />
\t\t\t<a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("pc_cerrarsesion");
        echo "\" id=\"enlaceCerrarSesion\" >Cerrar Sesi&oacute;n</a>
\t\t</nav>
\t</div>
";
        
        $__internal_a9bbdf82f1de04bc50f9a40522d2c60f296479c6aeb30acbd1a54b01edad0052->leave($__internal_a9bbdf82f1de04bc50f9a40522d2c60f296479c6aeb30acbd1a54b01edad0052_prof);

    }

    // line 55
    public function block_inputHidden($context, array $blocks = array())
    {
        $__internal_bf141a898cf8e15b8ae39a724678d92f99c5045671a14716c8cb9cbfb7acb769 = $this->env->getExtension("native_profiler");
        $__internal_bf141a898cf8e15b8ae39a724678d92f99c5045671a14716c8cb9cbfb7acb769->enter($__internal_bf141a898cf8e15b8ae39a724678d92f99c5045671a14716c8cb9cbfb7acb769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inputHidden"));

        // line 56
        echo "\t<input type=\"hidden\" name=\"loginIndex\" value=\"1000at200j\">\t
";
        
        $__internal_bf141a898cf8e15b8ae39a724678d92f99c5045671a14716c8cb9cbfb7acb769->leave($__internal_bf141a898cf8e15b8ae39a724678d92f99c5045671a14716c8cb9cbfb7acb769_prof);

    }

    // line 61
    public function block_cuerpoPagina($context, array $blocks = array())
    {
        $__internal_44e918455f90e65b32f38991c3da22651a86142ddc50060bb1daac83b7ff1771 = $this->env->getExtension("native_profiler");
        $__internal_44e918455f90e65b32f38991c3da22651a86142ddc50060bb1daac83b7ff1771->enter($__internal_44e918455f90e65b32f38991c3da22651a86142ddc50060bb1daac83b7ff1771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpoPagina"));

        // line 62
        echo "\t<div id=\"relleno1\" class=\"pagina imagenRelleno1 parallax\" data-movimiento=\"10\">
\t</div>
\t\t
\t<div id=\"cuerpo1\">
\t<h1>Restaurantes</h1>
\t<table class=\"tablaCuerpos\">
\t\t<tr>
\t\t\t<td>En ExplorApp!, contamos con los mejores restaurantes que se ajustan a tus gustos y necesidades de cada momento. Entra y compruébalo.</td>
\t\t\t<td><a class=\"botonSecciones\" href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("pc_restaurantes");
        echo "\">Ir a Restaurantes</a></td>
\t\t</tr>
\t</table>
\t</div>
\t\t
\t<div id=\"relleno2\" class=\"pagina imagenRelleno2 parallax\" data-movimiento=\"10\">
\t</div>
\t\t
\t<div id=\"cuerpo2\">
\t\t<h1>Hoteles</h1>
\t\t<table class=\"tablaCuerpos\">
\t\t\t<tr>
\t\t\t\t<td>Un viaje, una escapada o un pequeño gran lujo. Estos placeres son posibles al mejor precio gracias a ExplorApp!.</td>
\t\t\t\t<td><a class=\"botonSecciones\" href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("pc_hoteles");
        echo "\">Ir a Hoteles</a></td>
\t\t\t</tr>
\t\t</table>
\t</div>
\t\t
\t<div id=\"relleno3\" class=\"pagina imagenRelleno3 parallax\" data-movimiento=\"10\">
\t</div>
\t\t
\t<div id=\"cuerpo3\">
\t\t<h1>Bares</h1>
\t\t<table class=\"tablaCuerpos\">
\t\t\t<tr>
\t\t\t\t<td>¿Un libro con café caliente o una cerveza de barril con tus amigos? Da igual cómo, cuándo y con quién sea el plan, mientras sea con los enormes descuentos de Explorapp!</td>
\t\t\t\t<td><a class=\"botonSecciones\" href=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("pc_bares");
        echo "\">Ir a Bares</a></td>
\t\t\t</tr>
\t\t</table>
\t</div>
";
        
        $__internal_44e918455f90e65b32f38991c3da22651a86142ddc50060bb1daac83b7ff1771->leave($__internal_44e918455f90e65b32f38991c3da22651a86142ddc50060bb1daac83b7ff1771_prof);

    }

    public function getTemplateName()
    {
        return "PCBundle:vista:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 96,  186 => 83,  170 => 70,  160 => 62,  154 => 61,  146 => 56,  140 => 55,  129 => 48,  123 => 47,  114 => 40,  108 => 39,  98 => 35,  92 => 34,  79 => 25,  71 => 20,  63 => 15,  59 => 13,  53 => 12,  45 => 6,  39 => 5,  11 => 1,);
    }
}
