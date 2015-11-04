<?php

/* PCBundle:vista:falloLogin.html.twig */
class __TwigTemplate_8ab4cc8cff8a4ef37fc4b4e18d26d5750ff99440f2c83ac594f9641408d7b5ad extends Twig_Template
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
        $__internal_9166920d84a2c7db9387174a4a7a52f2c702e8578255401fce8bd2a59efa49a4 = $this->env->getExtension("native_profiler");
        $__internal_9166920d84a2c7db9387174a4a7a52f2c702e8578255401fce8bd2a59efa49a4->enter($__internal_9166920d84a2c7db9387174a4a7a52f2c702e8578255401fce8bd2a59efa49a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle:vista:falloLogin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9166920d84a2c7db9387174a4a7a52f2c702e8578255401fce8bd2a59efa49a4->leave($__internal_9166920d84a2c7db9387174a4a7a52f2c702e8578255401fce8bd2a59efa49a4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_12859b4d00ce4d114c1b6f9e714812e977712137c6656b40d0517961264ab284 = $this->env->getExtension("native_profiler");
        $__internal_12859b4d00ce4d114c1b6f9e714812e977712137c6656b40d0517961264ab284->enter($__internal_12859b4d00ce4d114c1b6f9e714812e977712137c6656b40d0517961264ab284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tUsuario Existente
";
        
        $__internal_12859b4d00ce4d114c1b6f9e714812e977712137c6656b40d0517961264ab284->leave($__internal_12859b4d00ce4d114c1b6f9e714812e977712137c6656b40d0517961264ab284_prof);

    }

    // line 8
    public function block_textoFallo($context, array $blocks = array())
    {
        $__internal_2dc011c168456f95d8196447aaab126484a32378d95d0aecebc0fd5547509791 = $this->env->getExtension("native_profiler");
        $__internal_2dc011c168456f95d8196447aaab126484a32378d95d0aecebc0fd5547509791->enter($__internal_2dc011c168456f95d8196447aaab126484a32378d95d0aecebc0fd5547509791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textoFallo"));

        // line 9
        echo "\tParece que no exite ningún usuario con esos datos.<br/><br/>Prueba a introducir tu usuario y contraseña otra vez.
";
        
        $__internal_2dc011c168456f95d8196447aaab126484a32378d95d0aecebc0fd5547509791->leave($__internal_2dc011c168456f95d8196447aaab126484a32378d95d0aecebc0fd5547509791_prof);

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
