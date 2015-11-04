<?php

/* PCBundle:vista:usuarioExistente.html.twig */
class __TwigTemplate_1200c73c2910dc2d6eb10f7df3838be53afa6193c8ce7dcb0fbbde5e35a09e07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCBundle::plantillaErrorLogin.html.twig", "PCBundle:vista:usuarioExistente.html.twig", 1);
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
        $__internal_769b73719dfed5c9af107c44bb5845bc5990116f222f9414b4e04204bf5afed0 = $this->env->getExtension("native_profiler");
        $__internal_769b73719dfed5c9af107c44bb5845bc5990116f222f9414b4e04204bf5afed0->enter($__internal_769b73719dfed5c9af107c44bb5845bc5990116f222f9414b4e04204bf5afed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle:vista:usuarioExistente.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_769b73719dfed5c9af107c44bb5845bc5990116f222f9414b4e04204bf5afed0->leave($__internal_769b73719dfed5c9af107c44bb5845bc5990116f222f9414b4e04204bf5afed0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e10096c6e21f156c886c57fdc2d12fec6b63ef416bebe1bf915cb42b933e43f = $this->env->getExtension("native_profiler");
        $__internal_4e10096c6e21f156c886c57fdc2d12fec6b63ef416bebe1bf915cb42b933e43f->enter($__internal_4e10096c6e21f156c886c57fdc2d12fec6b63ef416bebe1bf915cb42b933e43f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tUsuario Existente
";
        
        $__internal_4e10096c6e21f156c886c57fdc2d12fec6b63ef416bebe1bf915cb42b933e43f->leave($__internal_4e10096c6e21f156c886c57fdc2d12fec6b63ef416bebe1bf915cb42b933e43f_prof);

    }

    // line 8
    public function block_textoFallo($context, array $blocks = array())
    {
        $__internal_2c3d28d9c3f34e67a4fb84d844c73fee5c2cb9d96424668114ad05a3279175d7 = $this->env->getExtension("native_profiler");
        $__internal_2c3d28d9c3f34e67a4fb84d844c73fee5c2cb9d96424668114ad05a3279175d7->enter($__internal_2c3d28d9c3f34e67a4fb84d844c73fee5c2cb9d96424668114ad05a3279175d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textoFallo"));

        // line 9
        echo "\tAlguien se te ha adelantado con ese nombre de usuario.<br/><br/>Prueba a introducir otro nuevo.
";
        
        $__internal_2c3d28d9c3f34e67a4fb84d844c73fee5c2cb9d96424668114ad05a3279175d7->leave($__internal_2c3d28d9c3f34e67a4fb84d844c73fee5c2cb9d96424668114ad05a3279175d7_prof);

    }

    public function getTemplateName()
    {
        return "PCBundle:vista:usuarioExistente.html.twig";
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
