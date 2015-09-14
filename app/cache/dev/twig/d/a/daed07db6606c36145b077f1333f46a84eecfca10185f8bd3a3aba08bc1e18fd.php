<?php

/* PCBundle:vista:usuarioExistente.html.twig */
class __TwigTemplate_daed07db6606c36145b077f1333f46a84eecfca10185f8bd3a3aba08bc1e18fd extends Twig_Template
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
        $__internal_5264096a44cc287126e3562da9c636247021634ea7ecc0018cf13e18908d4e08 = $this->env->getExtension("native_profiler");
        $__internal_5264096a44cc287126e3562da9c636247021634ea7ecc0018cf13e18908d4e08->enter($__internal_5264096a44cc287126e3562da9c636247021634ea7ecc0018cf13e18908d4e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle:vista:usuarioExistente.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5264096a44cc287126e3562da9c636247021634ea7ecc0018cf13e18908d4e08->leave($__internal_5264096a44cc287126e3562da9c636247021634ea7ecc0018cf13e18908d4e08_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4471818a2b5160875861120edd005c7b44f4a40c3c6a267713ca5dc9fc5f7bc0 = $this->env->getExtension("native_profiler");
        $__internal_4471818a2b5160875861120edd005c7b44f4a40c3c6a267713ca5dc9fc5f7bc0->enter($__internal_4471818a2b5160875861120edd005c7b44f4a40c3c6a267713ca5dc9fc5f7bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tUsuario Existente
";
        
        $__internal_4471818a2b5160875861120edd005c7b44f4a40c3c6a267713ca5dc9fc5f7bc0->leave($__internal_4471818a2b5160875861120edd005c7b44f4a40c3c6a267713ca5dc9fc5f7bc0_prof);

    }

    // line 8
    public function block_textoFallo($context, array $blocks = array())
    {
        $__internal_d5cd050beb69d0058d16ae8c218de019980b1cf3975ed4ea07c95bfeab37026f = $this->env->getExtension("native_profiler");
        $__internal_d5cd050beb69d0058d16ae8c218de019980b1cf3975ed4ea07c95bfeab37026f->enter($__internal_d5cd050beb69d0058d16ae8c218de019980b1cf3975ed4ea07c95bfeab37026f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textoFallo"));

        // line 9
        echo "\tAlguien se te ha adelantado con ese nombre de usuario.<br/><br/>Prueba a introducir otro nuevo.
";
        
        $__internal_d5cd050beb69d0058d16ae8c218de019980b1cf3975ed4ea07c95bfeab37026f->leave($__internal_d5cd050beb69d0058d16ae8c218de019980b1cf3975ed4ea07c95bfeab37026f_prof);

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
