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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "\tRestaurantes
";
    }

    // line 8
    public function block_slider($context, array $blocks = array())
    {
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
    }

    // line 29
    public function block_urlDestino($context, array $blocks = array())
    {
        // line 30
        echo "\t'";
        echo $this->env->getExtension('routing')->getPath("pc_perfilusuario");
        echo "'
";
    }

    // line 34
    public function block_barraMenu($context, array $blocks = array())
    {
        // line 35
        echo "\t<div class=\"contenedorMenu\">
\t\t<nav id=\"navRestaurantes\">
\t\t\t<ul>
\t\t\t\t<li><a href=\"#cuerpo1\" class=\"botonMenuSeccionRestaurantes\">Restaurantes Asociados</a></li>
\t\t\t\t<li><a href=\"#cuerpo2\" class=\"botonMenuSeccionRestaurantes\">¿Algo Especial?</a></li>
\t\t\t\t<li><a href=\"#cuerpo3\" class=\"botonMenuSeccionRestaurantes\">Darse de Alta</a></li>
\t\t\t</ul>
\t\t\t<input type=\"image\" id=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["idFotoBarraMenu"]) ? $context["idFotoBarraMenu"] : null), "html", null, true);
        echo "\" class=\"enlaceAcceder\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenPerfil"]) ? $context["rutaImagenPerfil"] : null)), "html", null, true);
        echo "\" title=\"Acceder a la zona de usuarios\" />
\t\t\t<a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("pc_cerrarsesion");
        echo "\" id=\"enlaceCerrarSesion\" >Cerrar Sesi&oacute;n</a>
\t\t</nav>
\t</div>
";
    }

    // line 50
    public function block_inputHidden($context, array $blocks = array())
    {
        // line 51
        echo "\t<input type=\"hidden\" name=\"loginRestaurantes\" value=\"1000at200j\">\t
";
    }

    // line 56
    public function block_cuerpoPagina($context, array $blocks = array())
    {
        // line 57
        echo "\t<div id=\"relleno1\" class=\"pagina imagenRellenoRestaurantes1 parallax\" data-movimiento=\"10\">
\t</div>
\t\t
\t<div id=\"cuerpo1\">
\t<h1>Restaurantes Asociados</h1>
\t<table class=\"tablaCuerpos\">
\t\t<tr>
\t\t\t<td>En esta sección podrás encontrar todo tipo de restaurante en los que empezar a disfrutar de los descuentos más increíbles que conseguirás gracias a Explorapp.</td>
\t\t\t<td><a class=\"botonSecciones\" href=\"";
        // line 65
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
\t\t<h1>¿Algo Especial?</h1>
\t\t<table class=\"tablaCuerpos\">
\t\t\t<tr>
\t\t\t\t<td>Déjanos sorprenderte con algo increíble. Seleccionaremos de entre nuestros asociados, un restaurante al azar que os emocionará a ti y a tu paladar.</td>
\t\t\t\t<td><a class=\"botonSecciones\" href=\"#\">Ir a ¿Algo Especial?</a></td>
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
        // line 91
        echo $this->env->getExtension('routing')->getPath("pc_nuevoregistrorestaurantes");
        echo "\">Ir a Darse de Alta</a></td>
\t\t\t</tr>
\t\t</table>
\t</div>
";
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
        return array (  160 => 91,  131 => 65,  121 => 57,  118 => 56,  113 => 51,  110 => 50,  102 => 43,  96 => 42,  87 => 35,  84 => 34,  77 => 30,  74 => 29,  64 => 21,  56 => 16,  48 => 11,  44 => 9,  41 => 8,  36 => 4,  33 => 3,  11 => 1,);
    }
}
