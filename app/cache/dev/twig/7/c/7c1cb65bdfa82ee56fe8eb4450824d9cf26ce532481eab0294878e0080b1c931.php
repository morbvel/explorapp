<?php

/* MobileBundle:Default:nuevoRegistro.html.twig */
class __TwigTemplate_7c1cb65bdfa82ee56fe8eb4450824d9cf26ce532481eab0294878e0080b1c931 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MobileBundle::plantillaRegistros.html.twig", "MobileBundle:Default:nuevoRegistro.html.twig", 1);
        $this->blocks = array(
            'tituloPagina' => array($this, 'block_tituloPagina'),
            'formulario' => array($this, 'block_formulario'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MobileBundle::plantillaRegistros.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a6f06963c78fb709406e817de20a84dc474c55cf3a6c5cac5fd1a431ceed432 = $this->env->getExtension("native_profiler");
        $__internal_6a6f06963c78fb709406e817de20a84dc474c55cf3a6c5cac5fd1a431ceed432->enter($__internal_6a6f06963c78fb709406e817de20a84dc474c55cf3a6c5cac5fd1a431ceed432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MobileBundle:Default:nuevoRegistro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a6f06963c78fb709406e817de20a84dc474c55cf3a6c5cac5fd1a431ceed432->leave($__internal_6a6f06963c78fb709406e817de20a84dc474c55cf3a6c5cac5fd1a431ceed432_prof);

    }

    // line 4
    public function block_tituloPagina($context, array $blocks = array())
    {
        $__internal_0bad34feae5bae0a9bfb6f7eb77430e22d4f93fbf90e57406a8353c01250bbb1 = $this->env->getExtension("native_profiler");
        $__internal_0bad34feae5bae0a9bfb6f7eb77430e22d4f93fbf90e57406a8353c01250bbb1->enter($__internal_0bad34feae5bae0a9bfb6f7eb77430e22d4f93fbf90e57406a8353c01250bbb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tituloPagina"));

        // line 5
        echo "\tNuevo Registro de Usuarios
";
        
        $__internal_0bad34feae5bae0a9bfb6f7eb77430e22d4f93fbf90e57406a8353c01250bbb1->leave($__internal_0bad34feae5bae0a9bfb6f7eb77430e22d4f93fbf90e57406a8353c01250bbb1_prof);

    }

    // line 8
    public function block_formulario($context, array $blocks = array())
    {
        $__internal_f69f89166c7b0c7293f6c4b382ba88da9f0c96fbf6f76fbe6ba7f15a5b59459c = $this->env->getExtension("native_profiler");
        $__internal_f69f89166c7b0c7293f6c4b382ba88da9f0c96fbf6f76fbe6ba7f15a5b59459c->enter($__internal_f69f89166c7b0c7293f6c4b382ba88da9f0c96fbf6f76fbe6ba7f15a5b59459c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulario"));

        // line 9
        echo "\t<form action=\"#\" method=\"post\" id=\"formNuevoRegistroUsuarios\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["RegistrosForm"]) ? $context["RegistrosForm"] : $this->getContext($context, "RegistrosForm")), 'enctype');
        echo ">
\t\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["RegistrosForm"]) ? $context["RegistrosForm"] : $this->getContext($context, "RegistrosForm")), 'widget');
        echo "
\t\t<input type=\"submit\" id=\"aceptarNuevoRegistro\" name=\"nuevoRegistro\" value=\"Aceptar Nuevo Registro\" data-icon=\"check\" data-iconpos=\"right\" data-inline=\"true\"/>
\t</form>
";
        
        $__internal_f69f89166c7b0c7293f6c4b382ba88da9f0c96fbf6f76fbe6ba7f15a5b59459c->leave($__internal_f69f89166c7b0c7293f6c4b382ba88da9f0c96fbf6f76fbe6ba7f15a5b59459c_prof);

    }

    public function getTemplateName()
    {
        return "MobileBundle:Default:nuevoRegistro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  55 => 9,  49 => 8,  41 => 5,  35 => 4,  11 => 1,);
    }
}
