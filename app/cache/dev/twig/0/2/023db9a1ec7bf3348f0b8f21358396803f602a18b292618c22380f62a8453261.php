<?php

/* PCBundle:vista:FalloNegocioExistente.html.twig */
class __TwigTemplate_023db9a1ec7bf3348f0b8f21358396803f602a18b292618c22380f62a8453261 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCBundle::plantillaErrorLogin.html.twig", "PCBundle:vista:FalloNegocioExistente.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'textoFallo' => array($this, 'block_textoFallo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PCBundle::plantillaErrorLogin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8548466c4ce8e75e6fc826ed255bc4c2d51004ee5abdf124590621b000fff953 = $this->env->getExtension("native_profiler");
        $__internal_8548466c4ce8e75e6fc826ed255bc4c2d51004ee5abdf124590621b000fff953->enter($__internal_8548466c4ce8e75e6fc826ed255bc4c2d51004ee5abdf124590621b000fff953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle:vista:FalloNegocioExistente.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8548466c4ce8e75e6fc826ed255bc4c2d51004ee5abdf124590621b000fff953->leave($__internal_8548466c4ce8e75e6fc826ed255bc4c2d51004ee5abdf124590621b000fff953_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_396fcc55a39206f71da8f584e8cc6cf10e42eb84c08e0c4ccaf1df8e67dce669 = $this->env->getExtension("native_profiler");
        $__internal_396fcc55a39206f71da8f584e8cc6cf10e42eb84c08e0c4ccaf1df8e67dce669->enter($__internal_396fcc55a39206f71da8f584e8cc6cf10e42eb84c08e0c4ccaf1df8e67dce669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tNegocio Existente
";
        
        $__internal_396fcc55a39206f71da8f584e8cc6cf10e42eb84c08e0c4ccaf1df8e67dce669->leave($__internal_396fcc55a39206f71da8f584e8cc6cf10e42eb84c08e0c4ccaf1df8e67dce669_prof);

    }

    // line 8
    public function block_textoFallo($context, array $blocks = array())
    {
        $__internal_e7b129cd68486f0cac02d32d880195b3e5ff6ebfbfd4e5db1a914f178f44619f = $this->env->getExtension("native_profiler");
        $__internal_e7b129cd68486f0cac02d32d880195b3e5ff6ebfbfd4e5db1a914f178f44619f->enter($__internal_e7b129cd68486f0cac02d32d880195b3e5ff6ebfbfd4e5db1a914f178f44619f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textoFallo"));

        // line 9
        echo "\tYa existe un negocio con esos datos.<br/><br/>Prueba a introducir unos datos nuevos.
";
        
        $__internal_e7b129cd68486f0cac02d32d880195b3e5ff6ebfbfd4e5db1a914f178f44619f->leave($__internal_e7b129cd68486f0cac02d32d880195b3e5ff6ebfbfd4e5db1a914f178f44619f_prof);

    }

    public function getTemplateName()
    {
        return "PCBundle:vista:FalloNegocioExistente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  49 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }
}
