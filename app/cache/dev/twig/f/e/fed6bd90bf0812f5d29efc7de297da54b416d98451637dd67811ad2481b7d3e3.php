<?php

/* PCBundle:vista:nuevoRegistro.html.twig */
class __TwigTemplate_fed6bd90bf0812f5d29efc7de297da54b416d98451637dd67811ad2481b7d3e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCBundle::plantillaRegistros.html.twig", "PCBundle:vista:nuevoRegistro.html.twig", 1);
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
        $__internal_d778a8bb2255314c40d63cbf2f8f6d6ba3346edc1b0e628f81c146514acd0249 = $this->env->getExtension("native_profiler");
        $__internal_d778a8bb2255314c40d63cbf2f8f6d6ba3346edc1b0e628f81c146514acd0249->enter($__internal_d778a8bb2255314c40d63cbf2f8f6d6ba3346edc1b0e628f81c146514acd0249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle:vista:nuevoRegistro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d778a8bb2255314c40d63cbf2f8f6d6ba3346edc1b0e628f81c146514acd0249->leave($__internal_d778a8bb2255314c40d63cbf2f8f6d6ba3346edc1b0e628f81c146514acd0249_prof);

    }

    // line 4
    public function block_titleRegistros($context, array $blocks = array())
    {
        $__internal_2bf5cd03a9f992a30d7914119d8f75b4a7e5f04605c4d96090a716b804b750a2 = $this->env->getExtension("native_profiler");
        $__internal_2bf5cd03a9f992a30d7914119d8f75b4a7e5f04605c4d96090a716b804b750a2->enter($__internal_2bf5cd03a9f992a30d7914119d8f75b4a7e5f04605c4d96090a716b804b750a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleRegistros"));

        // line 5
        echo "\tNuevo Registro
";
        
        $__internal_2bf5cd03a9f992a30d7914119d8f75b4a7e5f04605c4d96090a716b804b750a2->leave($__internal_2bf5cd03a9f992a30d7914119d8f75b4a7e5f04605c4d96090a716b804b750a2_prof);

    }

    // line 9
    public function block_videoRegistro($context, array $blocks = array())
    {
        $__internal_cf90369e5634738b02d8dd1bd1e4c73d048499b5234e116084e1b1efe7057dba = $this->env->getExtension("native_profiler");
        $__internal_cf90369e5634738b02d8dd1bd1e4c73d048499b5234e116084e1b1efe7057dba->enter($__internal_cf90369e5634738b02d8dd1bd1e4c73d048499b5234e116084e1b1efe7057dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "videoRegistro"));

        // line 10
        echo "\t<video id=\"videoFondo\" autoplay loop>
\t\t<source src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("videos/videoPaginaNuevoRegistro.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\"></source>
\t</video>
";
        
        $__internal_cf90369e5634738b02d8dd1bd1e4c73d048499b5234e116084e1b1efe7057dba->leave($__internal_cf90369e5634738b02d8dd1bd1e4c73d048499b5234e116084e1b1efe7057dba_prof);

    }

    // line 15
    public function block_tituloRegistro($context, array $blocks = array())
    {
        $__internal_338018712447605c34a0621630dff00d66628c47661ae0a91df738dbc9be5860 = $this->env->getExtension("native_profiler");
        $__internal_338018712447605c34a0621630dff00d66628c47661ae0a91df738dbc9be5860->enter($__internal_338018712447605c34a0621630dff00d66628c47661ae0a91df738dbc9be5860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tituloRegistro"));

        // line 16
        echo "\tNuevo Registro Usuarios
";
        
        $__internal_338018712447605c34a0621630dff00d66628c47661ae0a91df738dbc9be5860->leave($__internal_338018712447605c34a0621630dff00d66628c47661ae0a91df738dbc9be5860_prof);

    }

    // line 19
    public function block_urlDestino($context, array $blocks = array())
    {
        $__internal_22964d3524810e61383172b0ec7669787e52ae94ab107b6f8896f59b9d49edbb = $this->env->getExtension("native_profiler");
        $__internal_22964d3524810e61383172b0ec7669787e52ae94ab107b6f8896f59b9d49edbb->enter($__internal_22964d3524810e61383172b0ec7669787e52ae94ab107b6f8896f59b9d49edbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino"));

        // line 20
        echo "\t'";
        echo $this->env->getExtension('routing')->getPath("pc_perfilusuario");
        echo "'
";
        
        $__internal_22964d3524810e61383172b0ec7669787e52ae94ab107b6f8896f59b9d49edbb->leave($__internal_22964d3524810e61383172b0ec7669787e52ae94ab107b6f8896f59b9d49edbb_prof);

    }

    // line 24
    public function block_inputHidden($context, array $blocks = array())
    {
        $__internal_8840cd9069249eb9f748fea102f000c14485ab4d0b5c34d3cd0d18d1f168e014 = $this->env->getExtension("native_profiler");
        $__internal_8840cd9069249eb9f748fea102f000c14485ab4d0b5c34d3cd0d18d1f168e014->enter($__internal_8840cd9069249eb9f748fea102f000c14485ab4d0b5c34d3cd0d18d1f168e014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inputHidden"));

        // line 25
        echo "\t<input type=\"hidden\" name=\"loginNuevoRegistro\" value=\"1000at200j\">\t
";
        
        $__internal_8840cd9069249eb9f748fea102f000c14485ab4d0b5c34d3cd0d18d1f168e014->leave($__internal_8840cd9069249eb9f748fea102f000c14485ab4d0b5c34d3cd0d18d1f168e014_prof);

    }

    // line 29
    public function block_textoAcceder($context, array $blocks = array())
    {
        $__internal_1ae19a61dcf7e077ef0935725acb6eacb7cc1f13db8f09c516eb37908a0ffb7f = $this->env->getExtension("native_profiler");
        $__internal_1ae19a61dcf7e077ef0935725acb6eacb7cc1f13db8f09c516eb37908a0ffb7f->enter($__internal_1ae19a61dcf7e077ef0935725acb6eacb7cc1f13db8f09c516eb37908a0ffb7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textoAcceder"));

        // line 30
        echo "\t<p id=\"parrafoAccederUsuarios\" style=\"display: none\">Para registrar un nuevo bar, primero debe iniciar sesión o darse de alta como usuario en <a id=\"abrirPopUpEnlace\" href=\"#\">este enlace</a>.</p>
";
        
        $__internal_1ae19a61dcf7e077ef0935725acb6eacb7cc1f13db8f09c516eb37908a0ffb7f->leave($__internal_1ae19a61dcf7e077ef0935725acb6eacb7cc1f13db8f09c516eb37908a0ffb7f_prof);

    }

    // line 34
    public function block_formularioRegistro($context, array $blocks = array())
    {
        $__internal_135cf917d928d7f3efc2c48e8117f72aa2ea774279e62465b30a6ec728ea343e = $this->env->getExtension("native_profiler");
        $__internal_135cf917d928d7f3efc2c48e8117f72aa2ea774279e62465b30a6ec728ea343e->enter($__internal_135cf917d928d7f3efc2c48e8117f72aa2ea774279e62465b30a6ec728ea343e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formularioRegistro"));

        echo "\t\t\t
\t<form action=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("pc_nuevoregistroguardar");
        echo "\" method=\"post\" id=\"formNuevoRegistroUsuarios\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formNuevoRegistroUsuarios"]) ? $context["formNuevoRegistroUsuarios"] : $this->getContext($context, "formNuevoRegistroUsuarios")), 'enctype');
        echo ">
\t\t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formNuevoRegistroUsuarios"]) ? $context["formNuevoRegistroUsuarios"] : $this->getContext($context, "formNuevoRegistroUsuarios")), 'widget');
        echo "
\t\t<input type=\"submit\" id=\"aceptarNuevoRegistro\" name=\"nuevoRegistro\" value=\"Aceptar Nuevo Registro\"/>
\t</form>
";
        
        $__internal_135cf917d928d7f3efc2c48e8117f72aa2ea774279e62465b30a6ec728ea343e->leave($__internal_135cf917d928d7f3efc2c48e8117f72aa2ea774279e62465b30a6ec728ea343e_prof);

    }

    public function getTemplateName()
    {
        return "PCBundle:vista:nuevoRegistro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 36,  139 => 35,  131 => 34,  123 => 30,  117 => 29,  109 => 25,  103 => 24,  93 => 20,  87 => 19,  79 => 16,  73 => 15,  63 => 11,  60 => 10,  54 => 9,  46 => 5,  40 => 4,  11 => 1,);
    }
}
