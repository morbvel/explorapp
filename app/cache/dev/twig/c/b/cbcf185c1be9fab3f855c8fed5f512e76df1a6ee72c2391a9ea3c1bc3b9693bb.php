<?php

/* MobileBundle:vista:vacio.html.twig */
class __TwigTemplate_cbcf185c1be9fab3f855c8fed5f512e76df1a6ee72c2391a9ea3c1bc3b9693bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MobileBundle::vacio.html.twig", "MobileBundle:vista:vacio.html.twig", 1);
        $this->blocks = array(
            'tituloPagina' => array($this, 'block_tituloPagina'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MobileBundle::vacio.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75434c216bc4ad961144969aeeab36041b93e284b6f7a5f58190cfcac294acd2 = $this->env->getExtension("native_profiler");
        $__internal_75434c216bc4ad961144969aeeab36041b93e284b6f7a5f58190cfcac294acd2->enter($__internal_75434c216bc4ad961144969aeeab36041b93e284b6f7a5f58190cfcac294acd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MobileBundle:vista:vacio.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75434c216bc4ad961144969aeeab36041b93e284b6f7a5f58190cfcac294acd2->leave($__internal_75434c216bc4ad961144969aeeab36041b93e284b6f7a5f58190cfcac294acd2_prof);

    }

    // line 3
    public function block_tituloPagina($context, array $blocks = array())
    {
        $__internal_2768702d8df92263b758b67296454f4e898003df544a32f2c77e335d029c16ea = $this->env->getExtension("native_profiler");
        $__internal_2768702d8df92263b758b67296454f4e898003df544a32f2c77e335d029c16ea->enter($__internal_2768702d8df92263b758b67296454f4e898003df544a32f2c77e335d029c16ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tituloPagina"));

        // line 4
        echo "\tVacio
";
        
        $__internal_2768702d8df92263b758b67296454f4e898003df544a32f2c77e335d029c16ea->leave($__internal_2768702d8df92263b758b67296454f4e898003df544a32f2c77e335d029c16ea_prof);

    }

    public function getTemplateName()
    {
        return "MobileBundle:vista:vacio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
