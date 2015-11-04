<?php

/* PCBundle:vista:nuevoRegistroBares.html.twig */
class __TwigTemplate_4ab28120034f0e526b2382237ba831116d6a6ac068ae921966cbf5481ddddb9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCBundle::plantillaRegistros.html.twig", "PCBundle:vista:nuevoRegistroBares.html.twig", 1);
        $this->blocks = array(
            'titleRegistros' => array($this, 'block_titleRegistros'),
            'videoRegistro' => array($this, 'block_videoRegistro'),
            'tituloRegistro' => array($this, 'block_tituloRegistro'),
            'urlDestino' => array($this, 'block_urlDestino'),
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
        $__internal_f83c6db798c6acd799e785f79ea18d9d67dd09d6cc11db7815b167def90f1335 = $this->env->getExtension("native_profiler");
        $__internal_f83c6db798c6acd799e785f79ea18d9d67dd09d6cc11db7815b167def90f1335->enter($__internal_f83c6db798c6acd799e785f79ea18d9d67dd09d6cc11db7815b167def90f1335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle:vista:nuevoRegistroBares.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f83c6db798c6acd799e785f79ea18d9d67dd09d6cc11db7815b167def90f1335->leave($__internal_f83c6db798c6acd799e785f79ea18d9d67dd09d6cc11db7815b167def90f1335_prof);

    }

    // line 4
    public function block_titleRegistros($context, array $blocks = array())
    {
        $__internal_2c122f2e8aae203bbb55f7dd7c755b103725bdb504d2971c94466fe8e326edb5 = $this->env->getExtension("native_profiler");
        $__internal_2c122f2e8aae203bbb55f7dd7c755b103725bdb504d2971c94466fe8e326edb5->enter($__internal_2c122f2e8aae203bbb55f7dd7c755b103725bdb504d2971c94466fe8e326edb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleRegistros"));

        // line 5
        echo "\tNuevo Registro Bares
";
        
        $__internal_2c122f2e8aae203bbb55f7dd7c755b103725bdb504d2971c94466fe8e326edb5->leave($__internal_2c122f2e8aae203bbb55f7dd7c755b103725bdb504d2971c94466fe8e326edb5_prof);

    }

    // line 9
    public function block_videoRegistro($context, array $blocks = array())
    {
        $__internal_2e44b4caf27016fe7b8e64fb1c87de5794a07b0f77e9676095e28f0564d4147f = $this->env->getExtension("native_profiler");
        $__internal_2e44b4caf27016fe7b8e64fb1c87de5794a07b0f77e9676095e28f0564d4147f->enter($__internal_2e44b4caf27016fe7b8e64fb1c87de5794a07b0f77e9676095e28f0564d4147f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "videoRegistro"));

        // line 10
        echo "\t<video id=\"videoFondo\" autoplay loop>
\t\t<source src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("videos/videoNuevoRegistroBares.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\"></source>
\t</video>
";
        
        $__internal_2e44b4caf27016fe7b8e64fb1c87de5794a07b0f77e9676095e28f0564d4147f->leave($__internal_2e44b4caf27016fe7b8e64fb1c87de5794a07b0f77e9676095e28f0564d4147f_prof);

    }

    // line 15
    public function block_tituloRegistro($context, array $blocks = array())
    {
        $__internal_14e58548b309553c70c348ac7e6991fc3bb22885a74644e7198644d096b4d6b2 = $this->env->getExtension("native_profiler");
        $__internal_14e58548b309553c70c348ac7e6991fc3bb22885a74644e7198644d096b4d6b2->enter($__internal_14e58548b309553c70c348ac7e6991fc3bb22885a74644e7198644d096b4d6b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tituloRegistro"));

        // line 16
        echo "\tNuevo Registro Bares
";
        
        $__internal_14e58548b309553c70c348ac7e6991fc3bb22885a74644e7198644d096b4d6b2->leave($__internal_14e58548b309553c70c348ac7e6991fc3bb22885a74644e7198644d096b4d6b2_prof);

    }

    // line 20
    public function block_urlDestino($context, array $blocks = array())
    {
        $__internal_db4d642ccd15e99a18c35fa9570472956c66a487cd54f302bafa57a771e05d11 = $this->env->getExtension("native_profiler");
        $__internal_db4d642ccd15e99a18c35fa9570472956c66a487cd54f302bafa57a771e05d11->enter($__internal_db4d642ccd15e99a18c35fa9570472956c66a487cd54f302bafa57a771e05d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino"));

        // line 21
        echo "\t'";
        echo $this->env->getExtension('routing')->getPath("pc_perfilusuario");
        echo "'
";
        
        $__internal_db4d642ccd15e99a18c35fa9570472956c66a487cd54f302bafa57a771e05d11->leave($__internal_db4d642ccd15e99a18c35fa9570472956c66a487cd54f302bafa57a771e05d11_prof);

    }

    // line 26
    public function block_inputHidden($context, array $blocks = array())
    {
        $__internal_df18a3b285deab588b7f8b9e2842c54123282e8a5a327442fd9ec76c2c0356bf = $this->env->getExtension("native_profiler");
        $__internal_df18a3b285deab588b7f8b9e2842c54123282e8a5a327442fd9ec76c2c0356bf->enter($__internal_df18a3b285deab588b7f8b9e2842c54123282e8a5a327442fd9ec76c2c0356bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inputHidden"));

        // line 27
        echo "\t<input type=\"hidden\" name=\"loginNuevoRegistroBares\" value=\"1000at200j\">\t
";
        
        $__internal_df18a3b285deab588b7f8b9e2842c54123282e8a5a327442fd9ec76c2c0356bf->leave($__internal_df18a3b285deab588b7f8b9e2842c54123282e8a5a327442fd9ec76c2c0356bf_prof);

    }

    // line 31
    public function block_textoAcceder($context, array $blocks = array())
    {
        $__internal_17ace0735982e3b840a9e5f52bbc593bb437915d420b481a36417acff8285a03 = $this->env->getExtension("native_profiler");
        $__internal_17ace0735982e3b840a9e5f52bbc593bb437915d420b481a36417acff8285a03->enter($__internal_17ace0735982e3b840a9e5f52bbc593bb437915d420b481a36417acff8285a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textoAcceder"));

        // line 32
        echo "\t<p id=\"parrafoAccederUsuarios\">Para registrar un nuevo bar, primero debe iniciar sesión o darse de alta como usuario en <a id=\"abrirPopUpEnlace\" href=\"#\">este enlace</a>.</p>
";
        
        $__internal_17ace0735982e3b840a9e5f52bbc593bb437915d420b481a36417acff8285a03->leave($__internal_17ace0735982e3b840a9e5f52bbc593bb437915d420b481a36417acff8285a03_prof);

    }

    // line 35
    public function block_formularioRegistro($context, array $blocks = array())
    {
        $__internal_032a209a9d0b5ee8dd1791eda385e82c54a599cb10353232748a91dd8e42b6a6 = $this->env->getExtension("native_profiler");
        $__internal_032a209a9d0b5ee8dd1791eda385e82c54a599cb10353232748a91dd8e42b6a6->enter($__internal_032a209a9d0b5ee8dd1791eda385e82c54a599cb10353232748a91dd8e42b6a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formularioRegistro"));

        echo "\t\t\t
\t<form action=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("pc_nuevoregistrobares");
        echo "\" method=\"post\" id=\"formNuevoRegistroBares\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formNuevoRegistroBares"]) ? $context["formNuevoRegistroBares"] : $this->getContext($context, "formNuevoRegistroBares")), 'enctype');
        echo ">
\t\t
\t\t";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formNuevoRegistroBares"]) ? $context["formNuevoRegistroBares"] : $this->getContext($context, "formNuevoRegistroBares")), 'widget');
        echo "
\t\t<input type=\"submit\" id=\"aceptarNuevoRegistroBares\" name=\"nuevoRegistroBares\" value=\"Aceptar Nuevo Registro\"/>
\t</form>
";
        
        $__internal_032a209a9d0b5ee8dd1791eda385e82c54a599cb10353232748a91dd8e42b6a6->leave($__internal_032a209a9d0b5ee8dd1791eda385e82c54a599cb10353232748a91dd8e42b6a6_prof);

    }

    public function getTemplateName()
    {
        return "PCBundle:vista:nuevoRegistroBares.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 38,  139 => 36,  131 => 35,  123 => 32,  117 => 31,  109 => 27,  103 => 26,  93 => 21,  87 => 20,  79 => 16,  73 => 15,  63 => 11,  60 => 10,  54 => 9,  46 => 5,  40 => 4,  11 => 1,);
    }
}
