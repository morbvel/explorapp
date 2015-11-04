<?php

/* PCBundle:vista:nuevoRegistroRestaurantes.html.twig */
class __TwigTemplate_d366bc2eac3197e304949d7ed8ac280e0f1ec39e024405bf3ea1e9dfed961b23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCBundle::plantillaRegistros.html.twig", "PCBundle:vista:nuevoRegistroRestaurantes.html.twig", 1);
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
        $__internal_7f3848e212bfdacc4179513300332f733e14b924ccb4c3040d8670fed83a43b6 = $this->env->getExtension("native_profiler");
        $__internal_7f3848e212bfdacc4179513300332f733e14b924ccb4c3040d8670fed83a43b6->enter($__internal_7f3848e212bfdacc4179513300332f733e14b924ccb4c3040d8670fed83a43b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle:vista:nuevoRegistroRestaurantes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f3848e212bfdacc4179513300332f733e14b924ccb4c3040d8670fed83a43b6->leave($__internal_7f3848e212bfdacc4179513300332f733e14b924ccb4c3040d8670fed83a43b6_prof);

    }

    // line 4
    public function block_titleRegistros($context, array $blocks = array())
    {
        $__internal_be565f4ade1a9ff29889c2284adb3f3dc56b7060dd5fedebce0badf952562de0 = $this->env->getExtension("native_profiler");
        $__internal_be565f4ade1a9ff29889c2284adb3f3dc56b7060dd5fedebce0badf952562de0->enter($__internal_be565f4ade1a9ff29889c2284adb3f3dc56b7060dd5fedebce0badf952562de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleRegistros"));

        // line 5
        echo "\tNuevo Registro Restaurantes
";
        
        $__internal_be565f4ade1a9ff29889c2284adb3f3dc56b7060dd5fedebce0badf952562de0->leave($__internal_be565f4ade1a9ff29889c2284adb3f3dc56b7060dd5fedebce0badf952562de0_prof);

    }

    // line 9
    public function block_videoRegistro($context, array $blocks = array())
    {
        $__internal_d2060977d2c7a7f5d747991e9e3a31bd54e82e2914281730973573ffbbb75e35 = $this->env->getExtension("native_profiler");
        $__internal_d2060977d2c7a7f5d747991e9e3a31bd54e82e2914281730973573ffbbb75e35->enter($__internal_d2060977d2c7a7f5d747991e9e3a31bd54e82e2914281730973573ffbbb75e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "videoRegistro"));

        // line 10
        echo "\t<video id=\"videoFondo\" autoplay loop>
\t\t<source src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("videos/videoNuevoRegistroRestaurantes.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\"></source>
\t</video>
";
        
        $__internal_d2060977d2c7a7f5d747991e9e3a31bd54e82e2914281730973573ffbbb75e35->leave($__internal_d2060977d2c7a7f5d747991e9e3a31bd54e82e2914281730973573ffbbb75e35_prof);

    }

    // line 15
    public function block_tituloRegistro($context, array $blocks = array())
    {
        $__internal_95708441feca9216e2ade1474b3b625ff60f22de3ce0fedcbbf99e876f09ecaa = $this->env->getExtension("native_profiler");
        $__internal_95708441feca9216e2ade1474b3b625ff60f22de3ce0fedcbbf99e876f09ecaa->enter($__internal_95708441feca9216e2ade1474b3b625ff60f22de3ce0fedcbbf99e876f09ecaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tituloRegistro"));

        // line 16
        echo "\tNuevo Registro Restaurantes
";
        
        $__internal_95708441feca9216e2ade1474b3b625ff60f22de3ce0fedcbbf99e876f09ecaa->leave($__internal_95708441feca9216e2ade1474b3b625ff60f22de3ce0fedcbbf99e876f09ecaa_prof);

    }

    // line 20
    public function block_urlDestino($context, array $blocks = array())
    {
        $__internal_396938b9b147fa6007a6122186716aa053a2c864ff0dcbbce2fa423b6b573cbd = $this->env->getExtension("native_profiler");
        $__internal_396938b9b147fa6007a6122186716aa053a2c864ff0dcbbce2fa423b6b573cbd->enter($__internal_396938b9b147fa6007a6122186716aa053a2c864ff0dcbbce2fa423b6b573cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino"));

        // line 21
        echo "\t'";
        echo $this->env->getExtension('routing')->getPath("pc_perfilusuario");
        echo "'
";
        
        $__internal_396938b9b147fa6007a6122186716aa053a2c864ff0dcbbce2fa423b6b573cbd->leave($__internal_396938b9b147fa6007a6122186716aa053a2c864ff0dcbbce2fa423b6b573cbd_prof);

    }

    // line 24
    public function block_urlDestino2($context, array $blocks = array())
    {
        $__internal_6b94ee96f9152699979a4ee014e56d5aadfbabc3e88b7af746a2ce8688bd31e1 = $this->env->getExtension("native_profiler");
        $__internal_6b94ee96f9152699979a4ee014e56d5aadfbabc3e88b7af746a2ce8688bd31e1->enter($__internal_6b94ee96f9152699979a4ee014e56d5aadfbabc3e88b7af746a2ce8688bd31e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino2"));

        // line 25
        echo "\t'";
        echo $this->env->getExtension('routing')->getPath("pc_nuevoregistroproductos");
        echo "'
";
        
        $__internal_6b94ee96f9152699979a4ee014e56d5aadfbabc3e88b7af746a2ce8688bd31e1->leave($__internal_6b94ee96f9152699979a4ee014e56d5aadfbabc3e88b7af746a2ce8688bd31e1_prof);

    }

    // line 29
    public function block_inputHidden($context, array $blocks = array())
    {
        $__internal_8d103c1c5195efd87233f55d23644824e59e5b54265591a63803b0b6380aac1f = $this->env->getExtension("native_profiler");
        $__internal_8d103c1c5195efd87233f55d23644824e59e5b54265591a63803b0b6380aac1f->enter($__internal_8d103c1c5195efd87233f55d23644824e59e5b54265591a63803b0b6380aac1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inputHidden"));

        // line 30
        echo "\t<input type=\"hidden\" name=\"loginNuevoRegistroRestaurantes\" value=\"1000at200j\">\t
";
        
        $__internal_8d103c1c5195efd87233f55d23644824e59e5b54265591a63803b0b6380aac1f->leave($__internal_8d103c1c5195efd87233f55d23644824e59e5b54265591a63803b0b6380aac1f_prof);

    }

    // line 34
    public function block_textoAcceder($context, array $blocks = array())
    {
        $__internal_2fa16bbfae39431054fab3c09925db30762fcd89736b31abd1961f3def5c2bc1 = $this->env->getExtension("native_profiler");
        $__internal_2fa16bbfae39431054fab3c09925db30762fcd89736b31abd1961f3def5c2bc1->enter($__internal_2fa16bbfae39431054fab3c09925db30762fcd89736b31abd1961f3def5c2bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textoAcceder"));

        // line 35
        echo "\t<p id=\"parrafoAccederUsuarios\">Para registrar un nuevo restaurante, primero debe iniciar sesión o darse de alta como usuario en <a id=\"abrirPopUpEnlace\" href=\"#\">este enlace</a>.</p>
";
        
        $__internal_2fa16bbfae39431054fab3c09925db30762fcd89736b31abd1961f3def5c2bc1->leave($__internal_2fa16bbfae39431054fab3c09925db30762fcd89736b31abd1961f3def5c2bc1_prof);

    }

    // line 38
    public function block_formularioRegistro($context, array $blocks = array())
    {
        $__internal_80da8fecadc7d5ab5e3f28cf5ab439e9b012824bcdf119e1443dfe89abdbd5fe = $this->env->getExtension("native_profiler");
        $__internal_80da8fecadc7d5ab5e3f28cf5ab439e9b012824bcdf119e1443dfe89abdbd5fe->enter($__internal_80da8fecadc7d5ab5e3f28cf5ab439e9b012824bcdf119e1443dfe89abdbd5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formularioRegistro"));

        echo "\t\t\t
\t<form action=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("pc_nuevoregistrorestaurantes");
        echo "\" method=\"post\" id=\"formNuevoRegistroRestaurantes\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formNuevoRegistroRestaurantes"]) ? $context["formNuevoRegistroRestaurantes"] : $this->getContext($context, "formNuevoRegistroRestaurantes")), 'enctype');
        echo ">
\t\t
\t\t";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formNuevoRegistroRestaurantes"]) ? $context["formNuevoRegistroRestaurantes"] : $this->getContext($context, "formNuevoRegistroRestaurantes")), 'widget');
        echo "
\t\t<input type=\"submit\" id=\"aceptarNuevoRegistroRestaurantes\" name=\"nuevoRegistroRestaurantes\" value=\"Aceptar Nuevo Registro\"/>
\t</form>
";
        
        $__internal_80da8fecadc7d5ab5e3f28cf5ab439e9b012824bcdf119e1443dfe89abdbd5fe->leave($__internal_80da8fecadc7d5ab5e3f28cf5ab439e9b012824bcdf119e1443dfe89abdbd5fe_prof);

    }

    public function getTemplateName()
    {
        return "PCBundle:vista:nuevoRegistroRestaurantes.html.twig";
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
