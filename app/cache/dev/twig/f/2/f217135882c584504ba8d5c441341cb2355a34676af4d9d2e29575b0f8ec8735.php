<?php

/* PCBundle:vista:nuevoRegistroBares.html.twig */
class __TwigTemplate_f217135882c584504ba8d5c441341cb2355a34676af4d9d2e29575b0f8ec8735 extends Twig_Template
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
        $__internal_e984e33497bcd1d403bb327f0906574002b138c6d4911aa832dadbf35f1bf245 = $this->env->getExtension("native_profiler");
        $__internal_e984e33497bcd1d403bb327f0906574002b138c6d4911aa832dadbf35f1bf245->enter($__internal_e984e33497bcd1d403bb327f0906574002b138c6d4911aa832dadbf35f1bf245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle:vista:nuevoRegistroBares.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e984e33497bcd1d403bb327f0906574002b138c6d4911aa832dadbf35f1bf245->leave($__internal_e984e33497bcd1d403bb327f0906574002b138c6d4911aa832dadbf35f1bf245_prof);

    }

    // line 4
    public function block_titleRegistros($context, array $blocks = array())
    {
        $__internal_a96f2e281e6148adcbcbba1004825a34e37e7220ce118dc06b109b196d651ee9 = $this->env->getExtension("native_profiler");
        $__internal_a96f2e281e6148adcbcbba1004825a34e37e7220ce118dc06b109b196d651ee9->enter($__internal_a96f2e281e6148adcbcbba1004825a34e37e7220ce118dc06b109b196d651ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleRegistros"));

        // line 5
        echo "\tNuevo Registro Bares
";
        
        $__internal_a96f2e281e6148adcbcbba1004825a34e37e7220ce118dc06b109b196d651ee9->leave($__internal_a96f2e281e6148adcbcbba1004825a34e37e7220ce118dc06b109b196d651ee9_prof);

    }

    // line 9
    public function block_videoRegistro($context, array $blocks = array())
    {
        $__internal_743f619f917ab07d5b7c0bb61066cca4a8e1e281a0b8c719c0311ec8cdc6c9cd = $this->env->getExtension("native_profiler");
        $__internal_743f619f917ab07d5b7c0bb61066cca4a8e1e281a0b8c719c0311ec8cdc6c9cd->enter($__internal_743f619f917ab07d5b7c0bb61066cca4a8e1e281a0b8c719c0311ec8cdc6c9cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "videoRegistro"));

        // line 10
        echo "\t<video id=\"videoFondo\" autoplay loop>
\t\t<source src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("videos/videoNuevoRegistroBares.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\"></source>
\t</video>
";
        
        $__internal_743f619f917ab07d5b7c0bb61066cca4a8e1e281a0b8c719c0311ec8cdc6c9cd->leave($__internal_743f619f917ab07d5b7c0bb61066cca4a8e1e281a0b8c719c0311ec8cdc6c9cd_prof);

    }

    // line 15
    public function block_tituloRegistro($context, array $blocks = array())
    {
        $__internal_5a422975c3b2ec0d9865479d43a433c49c7cbda0eb820aa566ec0c2341e343c7 = $this->env->getExtension("native_profiler");
        $__internal_5a422975c3b2ec0d9865479d43a433c49c7cbda0eb820aa566ec0c2341e343c7->enter($__internal_5a422975c3b2ec0d9865479d43a433c49c7cbda0eb820aa566ec0c2341e343c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tituloRegistro"));

        // line 16
        echo "\tNuevo Registro Bares
";
        
        $__internal_5a422975c3b2ec0d9865479d43a433c49c7cbda0eb820aa566ec0c2341e343c7->leave($__internal_5a422975c3b2ec0d9865479d43a433c49c7cbda0eb820aa566ec0c2341e343c7_prof);

    }

    // line 20
    public function block_urlDestino($context, array $blocks = array())
    {
        $__internal_87024c65276d70aab2bc47f99596355d891544b7c6326aad7259b1dc5522a0e5 = $this->env->getExtension("native_profiler");
        $__internal_87024c65276d70aab2bc47f99596355d891544b7c6326aad7259b1dc5522a0e5->enter($__internal_87024c65276d70aab2bc47f99596355d891544b7c6326aad7259b1dc5522a0e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino"));

        // line 21
        echo "\t'";
        echo $this->env->getExtension('routing')->getPath("pc_perfilusuario");
        echo "'
";
        
        $__internal_87024c65276d70aab2bc47f99596355d891544b7c6326aad7259b1dc5522a0e5->leave($__internal_87024c65276d70aab2bc47f99596355d891544b7c6326aad7259b1dc5522a0e5_prof);

    }

    // line 26
    public function block_inputHidden($context, array $blocks = array())
    {
        $__internal_dd40dbb1d8fcb6f3d188ccd123dab4f8ab719d6c18159aca7871ff16c77f9568 = $this->env->getExtension("native_profiler");
        $__internal_dd40dbb1d8fcb6f3d188ccd123dab4f8ab719d6c18159aca7871ff16c77f9568->enter($__internal_dd40dbb1d8fcb6f3d188ccd123dab4f8ab719d6c18159aca7871ff16c77f9568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inputHidden"));

        // line 27
        echo "\t<input type=\"hidden\" name=\"loginNuevoRegistroBares\" value=\"1000at200j\">\t
";
        
        $__internal_dd40dbb1d8fcb6f3d188ccd123dab4f8ab719d6c18159aca7871ff16c77f9568->leave($__internal_dd40dbb1d8fcb6f3d188ccd123dab4f8ab719d6c18159aca7871ff16c77f9568_prof);

    }

    // line 31
    public function block_textoAcceder($context, array $blocks = array())
    {
        $__internal_6a06252c6b8293a5043fc0c7c8e94b368a917e085e209dcb84524375862730b4 = $this->env->getExtension("native_profiler");
        $__internal_6a06252c6b8293a5043fc0c7c8e94b368a917e085e209dcb84524375862730b4->enter($__internal_6a06252c6b8293a5043fc0c7c8e94b368a917e085e209dcb84524375862730b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textoAcceder"));

        // line 32
        echo "\t<p id=\"parrafoAccederUsuarios\">Para registrar un nuevo bar, primero debe iniciar sesión o darse de alta como usuario en <a id=\"abrirPopUpEnlace\" href=\"#\">este enlace</a>.</p>
";
        
        $__internal_6a06252c6b8293a5043fc0c7c8e94b368a917e085e209dcb84524375862730b4->leave($__internal_6a06252c6b8293a5043fc0c7c8e94b368a917e085e209dcb84524375862730b4_prof);

    }

    // line 35
    public function block_formularioRegistro($context, array $blocks = array())
    {
        $__internal_0c63b2bfa742fb012bf530c71a681606cd171bc400af38df6d3999ca75e10dc8 = $this->env->getExtension("native_profiler");
        $__internal_0c63b2bfa742fb012bf530c71a681606cd171bc400af38df6d3999ca75e10dc8->enter($__internal_0c63b2bfa742fb012bf530c71a681606cd171bc400af38df6d3999ca75e10dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formularioRegistro"));

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
        
        $__internal_0c63b2bfa742fb012bf530c71a681606cd171bc400af38df6d3999ca75e10dc8->leave($__internal_0c63b2bfa742fb012bf530c71a681606cd171bc400af38df6d3999ca75e10dc8_prof);

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
