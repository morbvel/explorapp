<?php

/* PCBundle:vista:falloLogin.html.twig */
class __TwigTemplate_8774b047e1c74099193ce9bbd8d0543542bd5177c851d209a9cce5df1c6e52e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCBundle::plantillaErrorLogin.html.twig", "PCBundle:vista:falloLogin.html.twig", 1);
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
        $__internal_b0aad8bd1d6b5815d85d8cb2d5b3cff8e58787fa9414b48a0e4f6bd59d257d34 = $this->env->getExtension("native_profiler");
        $__internal_b0aad8bd1d6b5815d85d8cb2d5b3cff8e58787fa9414b48a0e4f6bd59d257d34->enter($__internal_b0aad8bd1d6b5815d85d8cb2d5b3cff8e58787fa9414b48a0e4f6bd59d257d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle:vista:falloLogin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0aad8bd1d6b5815d85d8cb2d5b3cff8e58787fa9414b48a0e4f6bd59d257d34->leave($__internal_b0aad8bd1d6b5815d85d8cb2d5b3cff8e58787fa9414b48a0e4f6bd59d257d34_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a246aedea67711b7b27d889350232564534aa245425961e914648ae56703c47b = $this->env->getExtension("native_profiler");
        $__internal_a246aedea67711b7b27d889350232564534aa245425961e914648ae56703c47b->enter($__internal_a246aedea67711b7b27d889350232564534aa245425961e914648ae56703c47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tUsuario Existente
";
        
        $__internal_a246aedea67711b7b27d889350232564534aa245425961e914648ae56703c47b->leave($__internal_a246aedea67711b7b27d889350232564534aa245425961e914648ae56703c47b_prof);

    }

    // line 8
    public function block_textoFallo($context, array $blocks = array())
    {
        $__internal_8b3276520b950f82956c26471b827c54e59f96b3e01e85a0f9b0f95ea1c47823 = $this->env->getExtension("native_profiler");
        $__internal_8b3276520b950f82956c26471b827c54e59f96b3e01e85a0f9b0f95ea1c47823->enter($__internal_8b3276520b950f82956c26471b827c54e59f96b3e01e85a0f9b0f95ea1c47823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textoFallo"));

        // line 9
        echo "\tParece que no exite ningún usuario con esos datos.<br/><br/>Prueba a introducir tu usuario y contraseña otra vez.
";
        
        $__internal_8b3276520b950f82956c26471b827c54e59f96b3e01e85a0f9b0f95ea1c47823->leave($__internal_8b3276520b950f82956c26471b827c54e59f96b3e01e85a0f9b0f95ea1c47823_prof);

    }

    public function getTemplateName()
    {
        return "PCBundle:vista:falloLogin.html.twig";
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
