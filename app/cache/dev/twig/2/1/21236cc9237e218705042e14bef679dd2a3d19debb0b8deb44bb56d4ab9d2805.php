<?php

/* PCBundle:vista:nuevoRegistroHoteles.html.twig */
class __TwigTemplate_21236cc9237e218705042e14bef679dd2a3d19debb0b8deb44bb56d4ab9d2805 extends Twig_Template
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
        $__internal_befc5096e64bfee832f90c972fbd76a5822da2f0f3fd5d6b0c2874f4143b4c46 = $this->env->getExtension("native_profiler");
        $__internal_befc5096e64bfee832f90c972fbd76a5822da2f0f3fd5d6b0c2874f4143b4c46->enter($__internal_befc5096e64bfee832f90c972fbd76a5822da2f0f3fd5d6b0c2874f4143b4c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle:vista:nuevoRegistroHoteles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_befc5096e64bfee832f90c972fbd76a5822da2f0f3fd5d6b0c2874f4143b4c46->leave($__internal_befc5096e64bfee832f90c972fbd76a5822da2f0f3fd5d6b0c2874f4143b4c46_prof);

    }

    // line 4
    public function block_titleRegistros($context, array $blocks = array())
    {
        $__internal_609d9756d2292adaa4e8b56389051218cdbc823da95300b9e55492bdd24ceed5 = $this->env->getExtension("native_profiler");
        $__internal_609d9756d2292adaa4e8b56389051218cdbc823da95300b9e55492bdd24ceed5->enter($__internal_609d9756d2292adaa4e8b56389051218cdbc823da95300b9e55492bdd24ceed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleRegistros"));

        // line 5
        echo "\tNuevo Registro Hoteles
";
        
        $__internal_609d9756d2292adaa4e8b56389051218cdbc823da95300b9e55492bdd24ceed5->leave($__internal_609d9756d2292adaa4e8b56389051218cdbc823da95300b9e55492bdd24ceed5_prof);

    }

    // line 9
    public function block_videoRegistro($context, array $blocks = array())
    {
        $__internal_41bdda6c1f2f6b81596ed177fbfc45e03b4bb371d5da2fecc1e94b2edbcb91b1 = $this->env->getExtension("native_profiler");
        $__internal_41bdda6c1f2f6b81596ed177fbfc45e03b4bb371d5da2fecc1e94b2edbcb91b1->enter($__internal_41bdda6c1f2f6b81596ed177fbfc45e03b4bb371d5da2fecc1e94b2edbcb91b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "videoRegistro"));

        // line 10
        echo "\t<video id=\"videoFondo\" autoplay loop>
\t\t<source src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("videos/videoNuevoRegistroHoteles.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\"></source>
\t</video>
";
        
        $__internal_41bdda6c1f2f6b81596ed177fbfc45e03b4bb371d5da2fecc1e94b2edbcb91b1->leave($__internal_41bdda6c1f2f6b81596ed177fbfc45e03b4bb371d5da2fecc1e94b2edbcb91b1_prof);

    }

    // line 15
    public function block_tituloRegistro($context, array $blocks = array())
    {
        $__internal_5221d0e74b8e4945e22a007d9644ca488cccbb12585069f9db7a2055a6f278ef = $this->env->getExtension("native_profiler");
        $__internal_5221d0e74b8e4945e22a007d9644ca488cccbb12585069f9db7a2055a6f278ef->enter($__internal_5221d0e74b8e4945e22a007d9644ca488cccbb12585069f9db7a2055a6f278ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tituloRegistro"));

        // line 16
        echo "\tNuevo Registro Hoteles
";
        
        $__internal_5221d0e74b8e4945e22a007d9644ca488cccbb12585069f9db7a2055a6f278ef->leave($__internal_5221d0e74b8e4945e22a007d9644ca488cccbb12585069f9db7a2055a6f278ef_prof);

    }

    // line 20
    public function block_urlDestino($context, array $blocks = array())
    {
        $__internal_2723a35cde9620f0ad1e06510b02ac766d36ba23b09f750833d8267e022f718d = $this->env->getExtension("native_profiler");
        $__internal_2723a35cde9620f0ad1e06510b02ac766d36ba23b09f750833d8267e022f718d->enter($__internal_2723a35cde9620f0ad1e06510b02ac766d36ba23b09f750833d8267e022f718d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino"));

        // line 21
        echo "\t'";
        echo $this->env->getExtension('routing')->getPath("pc_perfilusuario");
        echo "'
";
        
        $__internal_2723a35cde9620f0ad1e06510b02ac766d36ba23b09f750833d8267e022f718d->leave($__internal_2723a35cde9620f0ad1e06510b02ac766d36ba23b09f750833d8267e022f718d_prof);

    }

    // line 25
    public function block_inputHidden($context, array $blocks = array())
    {
        $__internal_73e2cf11ea6b21c65c9a68dc6d5d57b35c918a23d739b292c32e61fb3ffece11 = $this->env->getExtension("native_profiler");
        $__internal_73e2cf11ea6b21c65c9a68dc6d5d57b35c918a23d739b292c32e61fb3ffece11->enter($__internal_73e2cf11ea6b21c65c9a68dc6d5d57b35c918a23d739b292c32e61fb3ffece11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inputHidden"));

        // line 26
        echo "\t<input type=\"hidden\" name=\"loginNuevoRegistroHoteles\" value=\"1000at200j\">\t
";
        
        $__internal_73e2cf11ea6b21c65c9a68dc6d5d57b35c918a23d739b292c32e61fb3ffece11->leave($__internal_73e2cf11ea6b21c65c9a68dc6d5d57b35c918a23d739b292c32e61fb3ffece11_prof);

    }

    // line 30
    public function block_textoAcceder($context, array $blocks = array())
    {
        $__internal_d411eab9196c32299c32d865d8bdf100ba7c1726fe6e2e81e7b1fe80be026989 = $this->env->getExtension("native_profiler");
        $__internal_d411eab9196c32299c32d865d8bdf100ba7c1726fe6e2e81e7b1fe80be026989->enter($__internal_d411eab9196c32299c32d865d8bdf100ba7c1726fe6e2e81e7b1fe80be026989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textoAcceder"));

        // line 31
        echo "\t<p id=\"parrafoAccederUsuarios\">Para registrar un nuevo hotel, primero debe iniciar sesión o darse de alta como usuario en <a id=\"abrirPopUpEnlace\" href=\"#\">este enlace</a>.</p>
";
        
        $__internal_d411eab9196c32299c32d865d8bdf100ba7c1726fe6e2e81e7b1fe80be026989->leave($__internal_d411eab9196c32299c32d865d8bdf100ba7c1726fe6e2e81e7b1fe80be026989_prof);

    }

    // line 34
    public function block_formularioRegistro($context, array $blocks = array())
    {
        $__internal_b21f2dedc8e44c11eb18928679c904872b9e4a603fed70b3b6d0f7da75f9b255 = $this->env->getExtension("native_profiler");
        $__internal_b21f2dedc8e44c11eb18928679c904872b9e4a603fed70b3b6d0f7da75f9b255->enter($__internal_b21f2dedc8e44c11eb18928679c904872b9e4a603fed70b3b6d0f7da75f9b255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formularioRegistro"));

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
        
        $__internal_b21f2dedc8e44c11eb18928679c904872b9e4a603fed70b3b6d0f7da75f9b255->leave($__internal_b21f2dedc8e44c11eb18928679c904872b9e4a603fed70b3b6d0f7da75f9b255_prof);

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
