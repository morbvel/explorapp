<?php

/* PCBundle:vista:nuevoRegistroOfertas.html.twig */
class __TwigTemplate_325de4b7ea8c5afd81ec8fbc7da55eb83e77b0d91d96f525853f46df9f829495 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCBundle::plantillaRegistros.html.twig", "PCBundle:vista:nuevoRegistroOfertas.html.twig", 1);
        $this->blocks = array(
            'titleRegistros' => array($this, 'block_titleRegistros'),
            'videoRegistro' => array($this, 'block_videoRegistro'),
            'tituloRegistro' => array($this, 'block_tituloRegistro'),
            'urlDestino' => array($this, 'block_urlDestino'),
            'urlDestino2' => array($this, 'block_urlDestino2'),
            'inputHidden' => array($this, 'block_inputHidden'),
            'textoAcceder' => array($this, 'block_textoAcceder'),
            'formularioRegistro' => array($this, 'block_formularioRegistro'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PCBundle::plantillaRegistros.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55cb33ee8ac496c912b361ee0fad585e829f37967fb8289c061098607bc6c7ae = $this->env->getExtension("native_profiler");
        $__internal_55cb33ee8ac496c912b361ee0fad585e829f37967fb8289c061098607bc6c7ae->enter($__internal_55cb33ee8ac496c912b361ee0fad585e829f37967fb8289c061098607bc6c7ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle:vista:nuevoRegistroOfertas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55cb33ee8ac496c912b361ee0fad585e829f37967fb8289c061098607bc6c7ae->leave($__internal_55cb33ee8ac496c912b361ee0fad585e829f37967fb8289c061098607bc6c7ae_prof);

    }

    // line 4
    public function block_titleRegistros($context, array $blocks = array())
    {
        $__internal_2535a56b6f7f07a23e2f304046d6d31bf242a7d7adae4b79814278cf6ed276c1 = $this->env->getExtension("native_profiler");
        $__internal_2535a56b6f7f07a23e2f304046d6d31bf242a7d7adae4b79814278cf6ed276c1->enter($__internal_2535a56b6f7f07a23e2f304046d6d31bf242a7d7adae4b79814278cf6ed276c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleRegistros"));

        // line 5
        echo "\tNuevo Registro Oferta
";
        
        $__internal_2535a56b6f7f07a23e2f304046d6d31bf242a7d7adae4b79814278cf6ed276c1->leave($__internal_2535a56b6f7f07a23e2f304046d6d31bf242a7d7adae4b79814278cf6ed276c1_prof);

    }

    // line 9
    public function block_videoRegistro($context, array $blocks = array())
    {
        $__internal_062588184ed9152c780a132a6239c965ba1c852c00c9e7d37bba837f857d643c = $this->env->getExtension("native_profiler");
        $__internal_062588184ed9152c780a132a6239c965ba1c852c00c9e7d37bba837f857d643c->enter($__internal_062588184ed9152c780a132a6239c965ba1c852c00c9e7d37bba837f857d643c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "videoRegistro"));

        // line 10
        echo "\t<video id=\"videoFondo\" autoplay loop>
\t\t<source src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("videos/videoNuevoRegistroOfertas.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\"></source>
\t</video>
";
        
        $__internal_062588184ed9152c780a132a6239c965ba1c852c00c9e7d37bba837f857d643c->leave($__internal_062588184ed9152c780a132a6239c965ba1c852c00c9e7d37bba837f857d643c_prof);

    }

    // line 15
    public function block_tituloRegistro($context, array $blocks = array())
    {
        $__internal_6f342105c39894ed542a5485e33f815ba70f0180871398f690b46d94c6d85de1 = $this->env->getExtension("native_profiler");
        $__internal_6f342105c39894ed542a5485e33f815ba70f0180871398f690b46d94c6d85de1->enter($__internal_6f342105c39894ed542a5485e33f815ba70f0180871398f690b46d94c6d85de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tituloRegistro"));

        // line 16
        echo "\tNuevo Registro Oferta
";
        
        $__internal_6f342105c39894ed542a5485e33f815ba70f0180871398f690b46d94c6d85de1->leave($__internal_6f342105c39894ed542a5485e33f815ba70f0180871398f690b46d94c6d85de1_prof);

    }

    // line 20
    public function block_urlDestino($context, array $blocks = array())
    {
        $__internal_5677c10826b6ae9a29828833393ed3fc9339cd147d945b333ce18282d9a54441 = $this->env->getExtension("native_profiler");
        $__internal_5677c10826b6ae9a29828833393ed3fc9339cd147d945b333ce18282d9a54441->enter($__internal_5677c10826b6ae9a29828833393ed3fc9339cd147d945b333ce18282d9a54441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino"));

        // line 21
        echo "\t'";
        echo $this->env->getExtension('routing')->getPath("pc_perfilusuario");
        echo "'
";
        
        $__internal_5677c10826b6ae9a29828833393ed3fc9339cd147d945b333ce18282d9a54441->leave($__internal_5677c10826b6ae9a29828833393ed3fc9339cd147d945b333ce18282d9a54441_prof);

    }

    // line 24
    public function block_urlDestino2($context, array $blocks = array())
    {
        $__internal_fc576617c658969558c4ebd4faacc69476998e5fa1761491ea6d6284d4de2af4 = $this->env->getExtension("native_profiler");
        $__internal_fc576617c658969558c4ebd4faacc69476998e5fa1761491ea6d6284d4de2af4->enter($__internal_fc576617c658969558c4ebd4faacc69476998e5fa1761491ea6d6284d4de2af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino2"));

        // line 25
        echo "\t'";
        echo $this->env->getExtension('routing')->getPath("pc_nuevoregistroofertas");
        echo "'
";
        
        $__internal_fc576617c658969558c4ebd4faacc69476998e5fa1761491ea6d6284d4de2af4->leave($__internal_fc576617c658969558c4ebd4faacc69476998e5fa1761491ea6d6284d4de2af4_prof);

    }

    // line 29
    public function block_inputHidden($context, array $blocks = array())
    {
        $__internal_4e9ab5321ee61f25d8eb0c56124400080c0439ad8f65ae3efaba8602a6e05d4f = $this->env->getExtension("native_profiler");
        $__internal_4e9ab5321ee61f25d8eb0c56124400080c0439ad8f65ae3efaba8602a6e05d4f->enter($__internal_4e9ab5321ee61f25d8eb0c56124400080c0439ad8f65ae3efaba8602a6e05d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inputHidden"));

        // line 30
        echo "\t<input type=\"hidden\" name=\"loginNuevoRegistroOfertas\" value=\"1000at200j\">\t
";
        
        $__internal_4e9ab5321ee61f25d8eb0c56124400080c0439ad8f65ae3efaba8602a6e05d4f->leave($__internal_4e9ab5321ee61f25d8eb0c56124400080c0439ad8f65ae3efaba8602a6e05d4f_prof);

    }

    // line 34
    public function block_textoAcceder($context, array $blocks = array())
    {
        $__internal_aaf9e26570324947d4ad74fb7996c09acadd1c475ec57c6f2605bc8e0f544904 = $this->env->getExtension("native_profiler");
        $__internal_aaf9e26570324947d4ad74fb7996c09acadd1c475ec57c6f2605bc8e0f544904->enter($__internal_aaf9e26570324947d4ad74fb7996c09acadd1c475ec57c6f2605bc8e0f544904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textoAcceder"));

        // line 35
        echo "\t<p id=\"parrafoAccederUsuarios\">Para registrar una nueva oferta, primero debe iniciar sesión o darse de alta como usuario en <a id=\"abrirPopUpEnlace\" href=\"#\">este enlace</a>.</p>
";
        
        $__internal_aaf9e26570324947d4ad74fb7996c09acadd1c475ec57c6f2605bc8e0f544904->leave($__internal_aaf9e26570324947d4ad74fb7996c09acadd1c475ec57c6f2605bc8e0f544904_prof);

    }

    // line 38
    public function block_formularioRegistro($context, array $blocks = array())
    {
        $__internal_6fb028da23e4cb837069d093fd5010217a01ae3811d6b7b9a4473d4aa30aeb3b = $this->env->getExtension("native_profiler");
        $__internal_6fb028da23e4cb837069d093fd5010217a01ae3811d6b7b9a4473d4aa30aeb3b->enter($__internal_6fb028da23e4cb837069d093fd5010217a01ae3811d6b7b9a4473d4aa30aeb3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formularioRegistro"));

        echo "\t\t\t
\t<form action=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("pc_guardarregistroofertas");
        echo "\" method=\"post\" id=\"formNuevoRegistroOfertas\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formNuevoRegistroOfertas"]) ? $context["formNuevoRegistroOfertas"] : $this->getContext($context, "formNuevoRegistroOfertas")), 'enctype');
        echo ">
\t\t
\t\t";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formNuevoRegistroOfertas"]) ? $context["formNuevoRegistroOfertas"] : $this->getContext($context, "formNuevoRegistroOfertas")), 'widget');
        echo "
\t\t<input type=\"submit\" id=\"aceptarNuevoRegistroOfertas\" name=\"nuevoRegistroOfertas\" value=\"Aceptar Nuevo Registro\"/>
\t</form>
";
        
        $__internal_6fb028da23e4cb837069d093fd5010217a01ae3811d6b7b9a4473d4aa30aeb3b->leave($__internal_6fb028da23e4cb837069d093fd5010217a01ae3811d6b7b9a4473d4aa30aeb3b_prof);

    }

    public function getTemplateName()
    {
        return "PCBundle:vista:nuevoRegistroOfertas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 41,  156 => 39,  148 => 38,  140 => 35,  134 => 34,  126 => 30,  120 => 29,  110 => 25,  104 => 24,  94 => 21,  88 => 20,  80 => 16,  74 => 15,  64 => 11,  61 => 10,  55 => 9,  47 => 5,  41 => 4,  11 => 1,);
    }
}
