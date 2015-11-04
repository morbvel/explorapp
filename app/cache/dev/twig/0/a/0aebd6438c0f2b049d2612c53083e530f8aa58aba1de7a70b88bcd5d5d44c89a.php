<?php

/* PCBundle:vista:bares.html.twig */
class __TwigTemplate_0aebd6438c0f2b049d2612c53083e530f8aa58aba1de7a70b88bcd5d5d44c89a extends Twig_Template
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
        $__internal_206edc132898f623043fff87b0a4496f6c06e89ed64f0c3a2f50c110a6e918a3 = $this->env->getExtension("native_profiler");
        $__internal_206edc132898f623043fff87b0a4496f6c06e89ed64f0c3a2f50c110a6e918a3->enter($__internal_206edc132898f623043fff87b0a4496f6c06e89ed64f0c3a2f50c110a6e918a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle:vista:bares.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_206edc132898f623043fff87b0a4496f6c06e89ed64f0c3a2f50c110a6e918a3->leave($__internal_206edc132898f623043fff87b0a4496f6c06e89ed64f0c3a2f50c110a6e918a3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e82536806ef94a9b5b139a5dd17f3f08d8b9aae746ea35c23e965e7d4b89041 = $this->env->getExtension("native_profiler");
        $__internal_2e82536806ef94a9b5b139a5dd17f3f08d8b9aae746ea35c23e965e7d4b89041->enter($__internal_2e82536806ef94a9b5b139a5dd17f3f08d8b9aae746ea35c23e965e7d4b89041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tBares
";
        
        $__internal_2e82536806ef94a9b5b139a5dd17f3f08d8b9aae746ea35c23e965e7d4b89041->leave($__internal_2e82536806ef94a9b5b139a5dd17f3f08d8b9aae746ea35c23e965e7d4b89041_prof);

    }

    // line 8
    public function block_slider($context, array $blocks = array())
    {
        $__internal_053e16fd5149d8d4a408f07a6f21c788c8982457a8e0a7db32ecfe5c5b4681fa = $this->env->getExtension("native_profiler");
        $__internal_053e16fd5149d8d4a408f07a6f21c788c8982457a8e0a7db32ecfe5c5b4681fa->enter($__internal_053e16fd5149d8d4a408f07a6f21c788c8982457a8e0a7db32ecfe5c5b4681fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 9
        echo "\t<ul class=\"bxslider\">\t
\t\t<li class=\"contenedorSlider\">
\t\t\t<img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/bar2.jpg"), "html", null, true);
        echo "\" />
\t\t\t<span>Bares Asociados</span>
\t\t\t<a href=\"#cuerpo1\">Bares Asociados</a>
\t\t</li>
\t\t<li class=\"contenedorSlider\">
\t\t\t<img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/bar3.jpg"), "html", null, true);
        echo "\" />
\t\t\t<span>Búsqueda de bares</span>
\t\t\t<a href=\"#cuerpo2\">Ir a Búsqueda de bares</a>
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
        
        $__internal_053e16fd5149d8d4a408f07a6f21c788c8982457a8e0a7db32ecfe5c5b4681fa->leave($__internal_053e16fd5149d8d4a408f07a6f21c788c8982457a8e0a7db32ecfe5c5b4681fa_prof);

    }

    // line 29
    public function block_urlDestino($context, array $blocks = array())
    {
        $__internal_60d2592b5dcd153ed1f6943a32b51cb79cc66e71b3844a9539167e2e8412f2e7 = $this->env->getExtension("native_profiler");
        $__internal_60d2592b5dcd153ed1f6943a32b51cb79cc66e71b3844a9539167e2e8412f2e7->enter($__internal_60d2592b5dcd153ed1f6943a32b51cb79cc66e71b3844a9539167e2e8412f2e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino"));

        // line 30
        echo "\t'";
        echo $this->env->getExtension('routing')->getPath("pc_perfilusuario");
        echo "'
";
        
        $__internal_60d2592b5dcd153ed1f6943a32b51cb79cc66e71b3844a9539167e2e8412f2e7->leave($__internal_60d2592b5dcd153ed1f6943a32b51cb79cc66e71b3844a9539167e2e8412f2e7_prof);

    }

    // line 33
    public function block_urlBusqueda($context, array $blocks = array())
    {
        $__internal_7432f260303287fd56ff1bae5f5e3921a450db956f3b0b36c0345256a642a2c3 = $this->env->getExtension("native_profiler");
        $__internal_7432f260303287fd56ff1bae5f5e3921a450db956f3b0b36c0345256a642a2c3->enter($__internal_7432f260303287fd56ff1bae5f5e3921a450db956f3b0b36c0345256a642a2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlBusqueda"));

        // line 34
        echo "\t";
        echo $this->env->getExtension('routing')->getPath("pc_buscarbares");
        echo "
";
        
        $__internal_7432f260303287fd56ff1bae5f5e3921a450db956f3b0b36c0345256a642a2c3->leave($__internal_7432f260303287fd56ff1bae5f5e3921a450db956f3b0b36c0345256a642a2c3_prof);

    }

    // line 39
    public function block_barraMenu($context, array $blocks = array())
    {
        $__internal_7a238109e67aae23f0b4a13f232555fefaed5f01c5394e42d482fbd28134beeb = $this->env->getExtension("native_profiler");
        $__internal_7a238109e67aae23f0b4a13f232555fefaed5f01c5394e42d482fbd28134beeb->enter($__internal_7a238109e67aae23f0b4a13f232555fefaed5f01c5394e42d482fbd28134beeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barraMenu"));

        // line 40
        echo "\t<div class=\"contenedorMenu\">
\t\t<nav id=\"navBares\">
\t\t\t<a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("pc_homepage");
        echo "\"><img src=\"./img/home_icon.png\" class=\"iconoIndex izquierdaIcono\" /></a>
\t\t\t<a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("mobile_homepage");
        echo "\"><img src=\"./img/mobile_icon.png\" class=\"iconoIndex\" /></a>
\t\t\t<ul>
\t\t\t\t<li><a href=\"#cuerpo1\" class=\"botonMenuSeccionRestaurantes\">Bares Asociados</a></li>
\t\t\t\t<li><a href=\"#cuerpo2\" class=\"botonMenuSeccionRestaurantes\">Búsqueda de Bares</a></li>
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
        
        $__internal_7a238109e67aae23f0b4a13f232555fefaed5f01c5394e42d482fbd28134beeb->leave($__internal_7a238109e67aae23f0b4a13f232555fefaed5f01c5394e42d482fbd28134beeb_prof);

    }

    // line 56
    public function block_inputHidden($context, array $blocks = array())
    {
        $__internal_8062402190d3a725695242a5bdf016e3bf20be3ff7c0458ab307ccc4afb0830a = $this->env->getExtension("native_profiler");
        $__internal_8062402190d3a725695242a5bdf016e3bf20be3ff7c0458ab307ccc4afb0830a->enter($__internal_8062402190d3a725695242a5bdf016e3bf20be3ff7c0458ab307ccc4afb0830a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inputHidden"));

        // line 57
        echo "\t<input type=\"hidden\" name=\"loginBares\" value=\"1000at200j\">\t
";
        
        $__internal_8062402190d3a725695242a5bdf016e3bf20be3ff7c0458ab307ccc4afb0830a->leave($__internal_8062402190d3a725695242a5bdf016e3bf20be3ff7c0458ab307ccc4afb0830a_prof);

    }

    // line 61
    public function block_cuerpoPagina($context, array $blocks = array())
    {
        $__internal_1835c2b47977fb1b54f9adab6d7d2e4bd0622aa92990ec22708cf8776c0c5d24 = $this->env->getExtension("native_profiler");
        $__internal_1835c2b47977fb1b54f9adab6d7d2e4bd0622aa92990ec22708cf8776c0c5d24->enter($__internal_1835c2b47977fb1b54f9adab6d7d2e4bd0622aa92990ec22708cf8776c0c5d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpoPagina"));

        // line 62
        echo "\t<div id=\"relleno1\" class=\"pagina imagenRellenoBares1 parallax\" data-movimiento=\"10\">
\t</div>
\t\t
\t<div id=\"cuerpo1\">
\t<h1>Bares Asociados</h1>
\t<table class=\"tablaCuerpos\">
\t\t<tr>
\t\t\t<td>Tienes toda la tarde por delante y amigos esperándote. Entra aquí y descubre cuáles son los bares que más destacan cerca de ti.</td>
\t\t\t<td><a class=\"botonSecciones\" href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("pc_mostrarbares");
        echo "\">Ir a Bares Asociados</a></td>
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
        // line 96
        echo $this->env->getExtension('routing')->getPath("pc_nuevoregistrobares");
        echo "\">Ir a Darse de Alta</a></td>
\t\t\t</tr>
\t\t</table>
\t</div>
";
        
        $__internal_1835c2b47977fb1b54f9adab6d7d2e4bd0622aa92990ec22708cf8776c0c5d24->leave($__internal_1835c2b47977fb1b54f9adab6d7d2e4bd0622aa92990ec22708cf8776c0c5d24_prof);

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
        return array (  224 => 96,  195 => 70,  185 => 62,  179 => 61,  171 => 57,  165 => 56,  154 => 50,  148 => 49,  139 => 43,  135 => 42,  131 => 40,  125 => 39,  115 => 34,  109 => 33,  99 => 30,  93 => 29,  80 => 21,  72 => 16,  64 => 11,  60 => 9,  54 => 8,  46 => 4,  40 => 3,  11 => 1,);
    }
}
