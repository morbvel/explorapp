<?php

/* PCBundle:vista:index.html.twig */
class __TwigTemplate_b6ccab70b65ca5d3684d4eafa5b17a58ef1cc540037680de0af7fd205061a670 extends Twig_Template
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
        $__internal_313b66c392efbb78486b0647175646ae6a3b335baef0dcb6bb1a9f6a7781dfa8 = $this->env->getExtension("native_profiler");
        $__internal_313b66c392efbb78486b0647175646ae6a3b335baef0dcb6bb1a9f6a7781dfa8->enter($__internal_313b66c392efbb78486b0647175646ae6a3b335baef0dcb6bb1a9f6a7781dfa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle:vista:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_313b66c392efbb78486b0647175646ae6a3b335baef0dcb6bb1a9f6a7781dfa8->leave($__internal_313b66c392efbb78486b0647175646ae6a3b335baef0dcb6bb1a9f6a7781dfa8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_197edb3d72d3ca16f3f0b00d613296f43349657390ff38f7d86aa4e3673e0215 = $this->env->getExtension("native_profiler");
        $__internal_197edb3d72d3ca16f3f0b00d613296f43349657390ff38f7d86aa4e3673e0215->enter($__internal_197edb3d72d3ca16f3f0b00d613296f43349657390ff38f7d86aa4e3673e0215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "\tP&aacute;gina Principal
";
        
        $__internal_197edb3d72d3ca16f3f0b00d613296f43349657390ff38f7d86aa4e3673e0215->leave($__internal_197edb3d72d3ca16f3f0b00d613296f43349657390ff38f7d86aa4e3673e0215_prof);

    }

    // line 12
    public function block_slider($context, array $blocks = array())
    {
        $__internal_625ffd0ebb583be98f050d74bb6e9e56c6199ef7b705b0e581707696dc9cc431 = $this->env->getExtension("native_profiler");
        $__internal_625ffd0ebb583be98f050d74bb6e9e56c6199ef7b705b0e581707696dc9cc431->enter($__internal_625ffd0ebb583be98f050d74bb6e9e56c6199ef7b705b0e581707696dc9cc431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

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
        
        $__internal_625ffd0ebb583be98f050d74bb6e9e56c6199ef7b705b0e581707696dc9cc431->leave($__internal_625ffd0ebb583be98f050d74bb6e9e56c6199ef7b705b0e581707696dc9cc431_prof);

    }

    // line 34
    public function block_urlDestino($context, array $blocks = array())
    {
        $__internal_a09ac01f6269a2555cf539de3670510e1aea5508969fa79655a3debca791e0b3 = $this->env->getExtension("native_profiler");
        $__internal_a09ac01f6269a2555cf539de3670510e1aea5508969fa79655a3debca791e0b3->enter($__internal_a09ac01f6269a2555cf539de3670510e1aea5508969fa79655a3debca791e0b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino"));

        // line 35
        echo "\t'";
        echo $this->env->getExtension('routing')->getPath("pc_perfilusuario");
        echo "'
";
        
        $__internal_a09ac01f6269a2555cf539de3670510e1aea5508969fa79655a3debca791e0b3->leave($__internal_a09ac01f6269a2555cf539de3670510e1aea5508969fa79655a3debca791e0b3_prof);

    }

    // line 39
    public function block_barraMenu($context, array $blocks = array())
    {
        $__internal_8f73029319880c3bb28ff6947ef60d20328e55f8e23d9a0c3c11e541a47eefbd = $this->env->getExtension("native_profiler");
        $__internal_8f73029319880c3bb28ff6947ef60d20328e55f8e23d9a0c3c11e541a47eefbd->enter($__internal_8f73029319880c3bb28ff6947ef60d20328e55f8e23d9a0c3c11e541a47eefbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barraMenu"));

        // line 40
        echo "\t<div class=\"contenedorMenu\">
\t\t<nav>
\t\t\t<a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("pc_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./img/home_icon.png"), "html", null, true);
        echo "\" class=\"iconoIndex\" style=\"margin-left: 30px; margin-right: 30px;\" /></a>
\t\t\t<a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("mobile_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./img/mobile_icon.png"), "html", null, true);
        echo "\" class=\"iconoIndex\" /></a>
\t\t\t<ul>
\t\t\t\t<li><a href=\"#cuerpo1\" id=\"botonGrande\">Restaurantes</a></li>
\t\t\t\t<li><a href=\"#cuerpo2\" id=\"botonMediano\">Hoteles</a></li>
\t\t\t\t<li><a href=\"#cuerpo3\" id=\"botonPequeño\">Bares</a></li>
\t\t\t</ul>
\t\t\t<input type=\"image\" id=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["idFotoBarraMenu"]) ? $context["idFotoBarraMenu"] : $this->getContext($context, "idFotoBarraMenu")), "html", null, true);
        echo "\" class=\"enlaceAccederIndex\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenPerfil"]) ? $context["rutaImagenPerfil"] : $this->getContext($context, "rutaImagenPerfil"))), "html", null, true);
        echo "\" title=\"Acceder a la zona de usuarios\" />
\t\t\t<a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("pc_cerrarsesion");
        echo "\" id=\"enlaceCerrarSesion\" >Cerrar Sesi&oacute;n</a>
\t\t</nav>
\t</div>
";
        
        $__internal_8f73029319880c3bb28ff6947ef60d20328e55f8e23d9a0c3c11e541a47eefbd->leave($__internal_8f73029319880c3bb28ff6947ef60d20328e55f8e23d9a0c3c11e541a47eefbd_prof);

    }

    // line 57
    public function block_inputHidden($context, array $blocks = array())
    {
        $__internal_402b5de1b6c4a5001d245517f0b68a0d4f44f919c83126fcf294beca5b632715 = $this->env->getExtension("native_profiler");
        $__internal_402b5de1b6c4a5001d245517f0b68a0d4f44f919c83126fcf294beca5b632715->enter($__internal_402b5de1b6c4a5001d245517f0b68a0d4f44f919c83126fcf294beca5b632715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inputHidden"));

        // line 58
        echo "\t<input type=\"hidden\" name=\"loginIndex\" value=\"1000at200j\">\t
";
        
        $__internal_402b5de1b6c4a5001d245517f0b68a0d4f44f919c83126fcf294beca5b632715->leave($__internal_402b5de1b6c4a5001d245517f0b68a0d4f44f919c83126fcf294beca5b632715_prof);

    }

    // line 63
    public function block_cuerpoPagina($context, array $blocks = array())
    {
        $__internal_e812d3cfd067cfc232986b62c0312536168d6344d9a9c5cee9ee008dad6123e0 = $this->env->getExtension("native_profiler");
        $__internal_e812d3cfd067cfc232986b62c0312536168d6344d9a9c5cee9ee008dad6123e0->enter($__internal_e812d3cfd067cfc232986b62c0312536168d6344d9a9c5cee9ee008dad6123e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpoPagina"));

        // line 64
        echo "\t<div id=\"relleno1\" class=\"pagina imagenRelleno1 parallax\" data-movimiento=\"10\">
\t</div>
\t\t
\t<div id=\"cuerpo1\">
\t<h1>Restaurantes</h1>
\t<table class=\"tablaCuerpos\">
\t\t<tr>
\t\t\t<td>En ExplorApp!, contamos con los mejores restaurantes que se ajustan a tus gustos y necesidades de cada momento. Entra y compruébalo.</td>
\t\t\t<td><a class=\"botonSecciones\" href=\"";
        // line 72
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
        // line 85
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
        // line 98
        echo $this->env->getExtension('routing')->getPath("pc_bares");
        echo "\">Ir a Bares</a></td>
\t\t\t</tr>
\t\t</table>
\t</div>
";
        
        $__internal_e812d3cfd067cfc232986b62c0312536168d6344d9a9c5cee9ee008dad6123e0->leave($__internal_e812d3cfd067cfc232986b62c0312536168d6344d9a9c5cee9ee008dad6123e0_prof);

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
        return array (  214 => 98,  198 => 85,  182 => 72,  172 => 64,  166 => 63,  158 => 58,  152 => 57,  141 => 50,  135 => 49,  124 => 43,  118 => 42,  114 => 40,  108 => 39,  98 => 35,  92 => 34,  79 => 25,  71 => 20,  63 => 15,  59 => 13,  53 => 12,  45 => 6,  39 => 5,  11 => 1,);
    }
}
