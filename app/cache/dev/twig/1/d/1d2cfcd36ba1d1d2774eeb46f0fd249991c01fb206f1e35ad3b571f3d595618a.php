<?php

/* PCBundle:vista:restaurantes.html.twig */
class __TwigTemplate_1d2cfcd36ba1d1d2774eeb46f0fd249991c01fb206f1e35ad3b571f3d595618a extends Twig_Template
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
        $__internal_8d82c78992dc26681dd47ba04c40a4670528b794ee5878787e458e92fea164d1 = $this->env->getExtension("native_profiler");
        $__internal_8d82c78992dc26681dd47ba04c40a4670528b794ee5878787e458e92fea164d1->enter($__internal_8d82c78992dc26681dd47ba04c40a4670528b794ee5878787e458e92fea164d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle:vista:restaurantes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d82c78992dc26681dd47ba04c40a4670528b794ee5878787e458e92fea164d1->leave($__internal_8d82c78992dc26681dd47ba04c40a4670528b794ee5878787e458e92fea164d1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_94990c522bbb7776cb512758f40d30d11348dc6d011d1295ee22be2f4bf988ed = $this->env->getExtension("native_profiler");
        $__internal_94990c522bbb7776cb512758f40d30d11348dc6d011d1295ee22be2f4bf988ed->enter($__internal_94990c522bbb7776cb512758f40d30d11348dc6d011d1295ee22be2f4bf988ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tRestaurantes
";
        
        $__internal_94990c522bbb7776cb512758f40d30d11348dc6d011d1295ee22be2f4bf988ed->leave($__internal_94990c522bbb7776cb512758f40d30d11348dc6d011d1295ee22be2f4bf988ed_prof);

    }

    // line 8
    public function block_slider($context, array $blocks = array())
    {
        $__internal_425316440a5513326990a9ad7d2860049f58e77d88bc1a462862942cf36d9cb1 = $this->env->getExtension("native_profiler");
        $__internal_425316440a5513326990a9ad7d2860049f58e77d88bc1a462862942cf36d9cb1->enter($__internal_425316440a5513326990a9ad7d2860049f58e77d88bc1a462862942cf36d9cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

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
        
        $__internal_425316440a5513326990a9ad7d2860049f58e77d88bc1a462862942cf36d9cb1->leave($__internal_425316440a5513326990a9ad7d2860049f58e77d88bc1a462862942cf36d9cb1_prof);

    }

    // line 29
    public function block_urlDestino($context, array $blocks = array())
    {
        $__internal_a2a8e6ac1c58ca9c663098a127f1b1ae023ffa0eb2b95ce5a32d94a5c1ffce14 = $this->env->getExtension("native_profiler");
        $__internal_a2a8e6ac1c58ca9c663098a127f1b1ae023ffa0eb2b95ce5a32d94a5c1ffce14->enter($__internal_a2a8e6ac1c58ca9c663098a127f1b1ae023ffa0eb2b95ce5a32d94a5c1ffce14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino"));

        // line 30
        echo "\t'";
        echo $this->env->getExtension('routing')->getPath("pc_perfilusuario");
        echo "'
";
        
        $__internal_a2a8e6ac1c58ca9c663098a127f1b1ae023ffa0eb2b95ce5a32d94a5c1ffce14->leave($__internal_a2a8e6ac1c58ca9c663098a127f1b1ae023ffa0eb2b95ce5a32d94a5c1ffce14_prof);

    }

    // line 34
    public function block_urlBusqueda($context, array $blocks = array())
    {
        $__internal_d0637ad694727605f40b6383ed0e66cdb8a11d10e1837eaf049a256dc4739999 = $this->env->getExtension("native_profiler");
        $__internal_d0637ad694727605f40b6383ed0e66cdb8a11d10e1837eaf049a256dc4739999->enter($__internal_d0637ad694727605f40b6383ed0e66cdb8a11d10e1837eaf049a256dc4739999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlBusqueda"));

        // line 35
        echo "\t";
        echo $this->env->getExtension('routing')->getPath("pc_buscarrestaurantes");
        echo "
";
        
        $__internal_d0637ad694727605f40b6383ed0e66cdb8a11d10e1837eaf049a256dc4739999->leave($__internal_d0637ad694727605f40b6383ed0e66cdb8a11d10e1837eaf049a256dc4739999_prof);

    }

    // line 39
    public function block_barraMenu($context, array $blocks = array())
    {
        $__internal_deb56ed7ca3645eea75098b85dbf8fea811b73def8a6f98bcfe2cf6c35a1f712 = $this->env->getExtension("native_profiler");
        $__internal_deb56ed7ca3645eea75098b85dbf8fea811b73def8a6f98bcfe2cf6c35a1f712->enter($__internal_deb56ed7ca3645eea75098b85dbf8fea811b73def8a6f98bcfe2cf6c35a1f712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barraMenu"));

        // line 40
        echo "\t<div class=\"contenedorMenu\">
\t\t<nav id=\"navRestaurantes\">
\t\t\t<a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("pc_homepage");
        echo "\"><img src=\"./img/home_icon.png\" class=\"iconoIndex izquierdaIcono\" /></a>
\t\t\t<a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("mobile_homepage");
        echo "\"><img src=\"./img/mobile_icon.png\" class=\"iconoIndex\" /></a>
\t\t\t<ul>
\t\t\t\t<li><a href=\"#cuerpo1\" class=\"botonMenuSeccionRestaurantes\">Restaurantes Asociados</a></li>
\t\t\t\t<li><a href=\"#cuerpo2\" class=\"botonMenuSeccionRestaurantes\">Búsqueda de Restaurantes</a></li>
\t\t\t\t<li><a href=\"#cuerpo3\" class=\"botonMenuSeccionRestaurantes\">Darse de Alta</a></li>
\t\t\t</ul>
\t\t\t<input type=\"image\" id=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["idFotoBarraMenu"]) ? $context["idFotoBarraMenu"] : $this->getContext($context, "idFotoBarraMenu")), "html", null, true);
        echo "\" class=\"enlaceAcceder\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenPerfil"]) ? $context["rutaImagenPerfil"] : $this->getContext($context, "rutaImagenPerfil"))), "html", null, true);
        echo "\" title=\"Acceder a la zona de usuarios\" />
\t\t\t<a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("pc_cerrarsesion");
        echo "\" id=\"enlaceCerrarSesion\" >Cerrar Sesi&oacute;n</a>
\t\t</nav>
\t</div>
";
        
        $__internal_deb56ed7ca3645eea75098b85dbf8fea811b73def8a6f98bcfe2cf6c35a1f712->leave($__internal_deb56ed7ca3645eea75098b85dbf8fea811b73def8a6f98bcfe2cf6c35a1f712_prof);

    }

    // line 57
    public function block_inputHidden($context, array $blocks = array())
    {
        $__internal_3ab99098bf68d435c09213a5f43e3f3b828a0056b866c72adb0b98a91ccea84b = $this->env->getExtension("native_profiler");
        $__internal_3ab99098bf68d435c09213a5f43e3f3b828a0056b866c72adb0b98a91ccea84b->enter($__internal_3ab99098bf68d435c09213a5f43e3f3b828a0056b866c72adb0b98a91ccea84b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inputHidden"));

        // line 58
        echo "\t<input type=\"hidden\" name=\"loginRestaurantes\" value=\"1000at200j\">\t
";
        
        $__internal_3ab99098bf68d435c09213a5f43e3f3b828a0056b866c72adb0b98a91ccea84b->leave($__internal_3ab99098bf68d435c09213a5f43e3f3b828a0056b866c72adb0b98a91ccea84b_prof);

    }

    // line 63
    public function block_cuerpoPagina($context, array $blocks = array())
    {
        $__internal_2cd8dcbe65e5fe533c7daedb87bd13151af7bc0dba1be032ea457a5707bbc225 = $this->env->getExtension("native_profiler");
        $__internal_2cd8dcbe65e5fe533c7daedb87bd13151af7bc0dba1be032ea457a5707bbc225->enter($__internal_2cd8dcbe65e5fe533c7daedb87bd13151af7bc0dba1be032ea457a5707bbc225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpoPagina"));

        // line 64
        echo "\t<div id=\"relleno1\" class=\"pagina imagenRellenoRestaurantes1 parallax\" data-movimiento=\"10\">
\t</div>
\t\t
\t<div id=\"cuerpo1\">
\t<h1>Restaurantes Asociados</h1>
\t<table class=\"tablaCuerpos\">
\t\t<tr>
\t\t\t<td>En esta sección podrás encontrar todo tipo de restaurante en los que empezar a disfrutar de los descuentos más increíbles que conseguirás gracias a Explorapp.</td>
\t\t\t<td><a class=\"botonSecciones\" href=\"";
        // line 72
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
        // line 98
        echo $this->env->getExtension('routing')->getPath("pc_nuevoregistrorestaurantes");
        echo "\">Ir a Darse de Alta</a></td>
\t\t\t</tr>
\t\t</table>
\t</div>
";
        
        $__internal_2cd8dcbe65e5fe533c7daedb87bd13151af7bc0dba1be032ea457a5707bbc225->leave($__internal_2cd8dcbe65e5fe533c7daedb87bd13151af7bc0dba1be032ea457a5707bbc225_prof);

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
        return array (  224 => 98,  195 => 72,  185 => 64,  179 => 63,  171 => 58,  165 => 57,  154 => 50,  148 => 49,  139 => 43,  135 => 42,  131 => 40,  125 => 39,  115 => 35,  109 => 34,  99 => 30,  93 => 29,  80 => 21,  72 => 16,  64 => 11,  60 => 9,  54 => 8,  46 => 4,  40 => 3,  11 => 1,);
    }
}
