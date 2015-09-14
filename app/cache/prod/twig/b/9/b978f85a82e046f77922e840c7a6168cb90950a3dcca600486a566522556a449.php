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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "\tP&aacute;gina Principal
";
    }

    // line 12
    public function block_slider($context, array $blocks = array())
    {
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
    }

    // line 34
    public function block_urlDestino($context, array $blocks = array())
    {
        // line 35
        echo "\t'";
        echo $this->env->getExtension('routing')->getPath("pc_perfilusuario");
        echo "'
";
    }

    // line 39
    public function block_barraMenu($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, (isset($context["idFotoBarraMenu"]) ? $context["idFotoBarraMenu"] : null), "html", null, true);
        echo "\" class=\"enlaceAccederIndex\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenPerfil"]) ? $context["rutaImagenPerfil"] : null)), "html", null, true);
        echo "\" title=\"Acceder a la zona de usuarios\" />
\t\t\t<a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("pc_cerrarsesion");
        echo "\" id=\"enlaceCerrarSesion\" >Cerrar Sesi&oacute;n</a>
\t\t</nav>
\t</div>
";
    }

    // line 55
    public function block_inputHidden($context, array $blocks = array())
    {
        // line 56
        echo "\t<input type=\"hidden\" name=\"loginIndex\" value=\"1000at200j\">\t
";
    }

    // line 61
    public function block_cuerpoPagina($context, array $blocks = array())
    {
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
        return array (  163 => 96,  147 => 83,  131 => 70,  121 => 62,  118 => 61,  113 => 56,  110 => 55,  102 => 48,  96 => 47,  87 => 40,  84 => 39,  77 => 35,  74 => 34,  64 => 25,  56 => 20,  48 => 15,  44 => 13,  41 => 12,  36 => 6,  33 => 5,  11 => 1,);
    }
}
