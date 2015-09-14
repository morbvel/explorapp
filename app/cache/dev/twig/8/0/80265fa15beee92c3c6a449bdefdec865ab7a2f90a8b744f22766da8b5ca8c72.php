<?php

/* PCBundle:vista:FalloOfertaExistente.html.twig */
class __TwigTemplate_80265fa15beee92c3c6a449bdefdec865ab7a2f90a8b744f22766da8b5ca8c72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCBundle::plantillaErrorLogin.html.twig", "PCBundle:vista:FalloOfertaExistente.html.twig", 1);
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
        $__internal_41a727cdbbef316cb44ce6039a874f3e1709dd3b85af54c908bb603d7c06a395 = $this->env->getExtension("native_profiler");
        $__internal_41a727cdbbef316cb44ce6039a874f3e1709dd3b85af54c908bb603d7c06a395->enter($__internal_41a727cdbbef316cb44ce6039a874f3e1709dd3b85af54c908bb603d7c06a395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle:vista:FalloOfertaExistente.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41a727cdbbef316cb44ce6039a874f3e1709dd3b85af54c908bb603d7c06a395->leave($__internal_41a727cdbbef316cb44ce6039a874f3e1709dd3b85af54c908bb603d7c06a395_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae3c498d99b9e8651af808e630883fa56c5e76137a80a5eeb3e765ee1f9deb39 = $this->env->getExtension("native_profiler");
        $__internal_ae3c498d99b9e8651af808e630883fa56c5e76137a80a5eeb3e765ee1f9deb39->enter($__internal_ae3c498d99b9e8651af808e630883fa56c5e76137a80a5eeb3e765ee1f9deb39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tOferta Ya Escogida
";
        
        $__internal_ae3c498d99b9e8651af808e630883fa56c5e76137a80a5eeb3e765ee1f9deb39->leave($__internal_ae3c498d99b9e8651af808e630883fa56c5e76137a80a5eeb3e765ee1f9deb39_prof);

    }

    // line 8
    public function block_textoFallo($context, array $blocks = array())
    {
        $__internal_73e998e05109af1054d1761f78f316978d2f6a999d37b28213aede101bb834e2 = $this->env->getExtension("native_profiler");
        $__internal_73e998e05109af1054d1761f78f316978d2f6a999d37b28213aede101bb834e2->enter($__internal_73e998e05109af1054d1761f78f316978d2f6a999d37b28213aede101bb834e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textoFallo"));

        // line 9
        echo "\tYa te has apuntado a esta oferta.<br/><br/>Todavía tienes muchas más disponibles que probar y descubrir.
";
        
        $__internal_73e998e05109af1054d1761f78f316978d2f6a999d37b28213aede101bb834e2->leave($__internal_73e998e05109af1054d1761f78f316978d2f6a999d37b28213aede101bb834e2_prof);

    }

    public function getTemplateName()
    {
        return "PCBundle:vista:FalloOfertaExistente.html.twig";
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
