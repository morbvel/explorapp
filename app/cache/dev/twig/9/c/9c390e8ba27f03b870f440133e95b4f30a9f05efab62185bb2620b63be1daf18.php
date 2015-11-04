<?php

/* PCBundle:vista:nuevoRegistroHoteles.html.twig */
class __TwigTemplate_9c390e8ba27f03b870f440133e95b4f30a9f05efab62185bb2620b63be1daf18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCBundle::plantillaRegistros.html.twig", "PCBundle:vista:nuevoRegistroHoteles.html.twig", 1);
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
        $__internal_c3f9fd2491c4c443ad58badff0c3cb0cdd4003d316a28cfde6428744a4a0f46f = $this->env->getExtension("native_profiler");
        $__internal_c3f9fd2491c4c443ad58badff0c3cb0cdd4003d316a28cfde6428744a4a0f46f->enter($__internal_c3f9fd2491c4c443ad58badff0c3cb0cdd4003d316a28cfde6428744a4a0f46f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle:vista:nuevoRegistroHoteles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3f9fd2491c4c443ad58badff0c3cb0cdd4003d316a28cfde6428744a4a0f46f->leave($__internal_c3f9fd2491c4c443ad58badff0c3cb0cdd4003d316a28cfde6428744a4a0f46f_prof);

    }

    // line 4
    public function block_titleRegistros($context, array $blocks = array())
    {
        $__internal_34285a6ef4ad4e6db8e5f312be3de3a381a6a7bf7a90770a06934eee7e5f64d0 = $this->env->getExtension("native_profiler");
        $__internal_34285a6ef4ad4e6db8e5f312be3de3a381a6a7bf7a90770a06934eee7e5f64d0->enter($__internal_34285a6ef4ad4e6db8e5f312be3de3a381a6a7bf7a90770a06934eee7e5f64d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleRegistros"));

        // line 5
        echo "\tNuevo Registro Hoteles
";
        
        $__internal_34285a6ef4ad4e6db8e5f312be3de3a381a6a7bf7a90770a06934eee7e5f64d0->leave($__internal_34285a6ef4ad4e6db8e5f312be3de3a381a6a7bf7a90770a06934eee7e5f64d0_prof);

    }

    // line 9
    public function block_videoRegistro($context, array $blocks = array())
    {
        $__internal_402e13f82f5f1f5973ced7e89cac9320e735c44a57987ba99fec1d8d92d68cef = $this->env->getExtension("native_profiler");
        $__internal_402e13f82f5f1f5973ced7e89cac9320e735c44a57987ba99fec1d8d92d68cef->enter($__internal_402e13f82f5f1f5973ced7e89cac9320e735c44a57987ba99fec1d8d92d68cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "videoRegistro"));

        // line 10
        echo "\t<video id=\"videoFondo\" autoplay loop>
\t\t<source src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("videos/videoNuevoRegistroHoteles.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\"></source>
\t</video>
";
        
        $__internal_402e13f82f5f1f5973ced7e89cac9320e735c44a57987ba99fec1d8d92d68cef->leave($__internal_402e13f82f5f1f5973ced7e89cac9320e735c44a57987ba99fec1d8d92d68cef_prof);

    }

    // line 15
    public function block_tituloRegistro($context, array $blocks = array())
    {
        $__internal_692b98c326750d7d6a7faed1df0712566d19908c0afcb5e55af7c4f90a08b5b7 = $this->env->getExtension("native_profiler");
        $__internal_692b98c326750d7d6a7faed1df0712566d19908c0afcb5e55af7c4f90a08b5b7->enter($__internal_692b98c326750d7d6a7faed1df0712566d19908c0afcb5e55af7c4f90a08b5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tituloRegistro"));

        // line 16
        echo "\tNuevo Registro Hoteles
";
        
        $__internal_692b98c326750d7d6a7faed1df0712566d19908c0afcb5e55af7c4f90a08b5b7->leave($__internal_692b98c326750d7d6a7faed1df0712566d19908c0afcb5e55af7c4f90a08b5b7_prof);

    }

    // line 20
    public function block_urlDestino($context, array $blocks = array())
    {
        $__internal_e83e59c977a5fa521151083a79b1627070aefd78600ee7f52688f056daad7ff3 = $this->env->getExtension("native_profiler");
        $__internal_e83e59c977a5fa521151083a79b1627070aefd78600ee7f52688f056daad7ff3->enter($__internal_e83e59c977a5fa521151083a79b1627070aefd78600ee7f52688f056daad7ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino"));

        // line 21
        echo "\t'";
        echo $this->env->getExtension('routing')->getPath("pc_perfilusuario");
        echo "'
";
        
        $__internal_e83e59c977a5fa521151083a79b1627070aefd78600ee7f52688f056daad7ff3->leave($__internal_e83e59c977a5fa521151083a79b1627070aefd78600ee7f52688f056daad7ff3_prof);

    }

    // line 25
    public function block_inputHidden($context, array $blocks = array())
    {
        $__internal_8bccb0cca8fade71ef410aa96551852da44b79cfb592540666d911fdb4df84c2 = $this->env->getExtension("native_profiler");
        $__internal_8bccb0cca8fade71ef410aa96551852da44b79cfb592540666d911fdb4df84c2->enter($__internal_8bccb0cca8fade71ef410aa96551852da44b79cfb592540666d911fdb4df84c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inputHidden"));

        // line 26
        echo "\t<input type=\"hidden\" name=\"loginNuevoRegistroHoteles\" value=\"1000at200j\">\t
";
        
        $__internal_8bccb0cca8fade71ef410aa96551852da44b79cfb592540666d911fdb4df84c2->leave($__internal_8bccb0cca8fade71ef410aa96551852da44b79cfb592540666d911fdb4df84c2_prof);

    }

    // line 30
    public function block_textoAcceder($context, array $blocks = array())
    {
        $__internal_eedc8cd7d48effea4cf5a706e71d75028ddc52e79ed7ce7ebc8e4757a03b0ca7 = $this->env->getExtension("native_profiler");
        $__internal_eedc8cd7d48effea4cf5a706e71d75028ddc52e79ed7ce7ebc8e4757a03b0ca7->enter($__internal_eedc8cd7d48effea4cf5a706e71d75028ddc52e79ed7ce7ebc8e4757a03b0ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textoAcceder"));

        // line 31
        echo "\t<p id=\"parrafoAccederUsuarios\">Para registrar un nuevo hotel, primero debe iniciar sesión o darse de alta como usuario en <a id=\"abrirPopUpEnlace\" href=\"#\">este enlace</a>.</p>
";
        
        $__internal_eedc8cd7d48effea4cf5a706e71d75028ddc52e79ed7ce7ebc8e4757a03b0ca7->leave($__internal_eedc8cd7d48effea4cf5a706e71d75028ddc52e79ed7ce7ebc8e4757a03b0ca7_prof);

    }

    // line 34
    public function block_formularioRegistro($context, array $blocks = array())
    {
        $__internal_f81a8060a3149764e34de3eccb90d23539d271cf9fde069b99e531cfb9791a94 = $this->env->getExtension("native_profiler");
        $__internal_f81a8060a3149764e34de3eccb90d23539d271cf9fde069b99e531cfb9791a94->enter($__internal_f81a8060a3149764e34de3eccb90d23539d271cf9fde069b99e531cfb9791a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formularioRegistro"));

        echo "\t\t\t
\t<form action=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("pc_nuevoregistrohoteles");
        echo "\" method=\"post\" id=\"formNuevoRegistroHoteles\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formNuevoRegistroHoteles"]) ? $context["formNuevoRegistroHoteles"] : $this->getContext($context, "formNuevoRegistroHoteles")), 'enctype');
        echo ">
\t\t
\t\t";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formNuevoRegistroHoteles"]) ? $context["formNuevoRegistroHoteles"] : $this->getContext($context, "formNuevoRegistroHoteles")), 'widget');
        echo "
\t\t<input type=\"submit\" id=\"aceptarNuevoRegistroHoteles\" name=\"nuevoRegistroHoteles\" value=\"Aceptar Nuevo Registro\"/>
\t</form>
";
        
        $__internal_f81a8060a3149764e34de3eccb90d23539d271cf9fde069b99e531cfb9791a94->leave($__internal_f81a8060a3149764e34de3eccb90d23539d271cf9fde069b99e531cfb9791a94_prof);

    }

    public function getTemplateName()
    {
        return "PCBundle:vista:nuevoRegistroHoteles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 37,  139 => 35,  131 => 34,  123 => 31,  117 => 30,  109 => 26,  103 => 25,  93 => 21,  87 => 20,  79 => 16,  73 => 15,  63 => 11,  60 => 10,  54 => 9,  46 => 5,  40 => 4,  11 => 1,);
    }
}
