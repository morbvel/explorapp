<?php

/* MobileBundle:vista:nuevoRegistro.html.twig */
class __TwigTemplate_7ba8e6cca02c7ce850d17f962f182d5fd3e989c2021a08632a000a89510b1210 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MobileBundle::plantillaRegistros.html.twig", "MobileBundle:vista:nuevoRegistro.html.twig", 1);
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
        $__internal_e04cdd7784e0792b40cfbca0cdfc75af693d1745319d4af54ce2c12fdbf19990 = $this->env->getExtension("native_profiler");
        $__internal_e04cdd7784e0792b40cfbca0cdfc75af693d1745319d4af54ce2c12fdbf19990->enter($__internal_e04cdd7784e0792b40cfbca0cdfc75af693d1745319d4af54ce2c12fdbf19990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MobileBundle:vista:nuevoRegistro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e04cdd7784e0792b40cfbca0cdfc75af693d1745319d4af54ce2c12fdbf19990->leave($__internal_e04cdd7784e0792b40cfbca0cdfc75af693d1745319d4af54ce2c12fdbf19990_prof);

    }

    // line 4
    public function block_tituloPagina($context, array $blocks = array())
    {
        $__internal_3f75f3bbc6f903bdffdb5e6be441ab12dd710a41a1ff6a9e468f2f604ac9d30a = $this->env->getExtension("native_profiler");
        $__internal_3f75f3bbc6f903bdffdb5e6be441ab12dd710a41a1ff6a9e468f2f604ac9d30a->enter($__internal_3f75f3bbc6f903bdffdb5e6be441ab12dd710a41a1ff6a9e468f2f604ac9d30a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tituloPagina"));

        // line 5
        echo "\tNuevo Registro de Usuarios
";
        
        $__internal_3f75f3bbc6f903bdffdb5e6be441ab12dd710a41a1ff6a9e468f2f604ac9d30a->leave($__internal_3f75f3bbc6f903bdffdb5e6be441ab12dd710a41a1ff6a9e468f2f604ac9d30a_prof);

    }

    // line 8
    public function block_formulario($context, array $blocks = array())
    {
        $__internal_f91b07d1736c933dde3106b7283888f5ae1021465702f16f23ab99374b82731f = $this->env->getExtension("native_profiler");
        $__internal_f91b07d1736c933dde3106b7283888f5ae1021465702f16f23ab99374b82731f->enter($__internal_f91b07d1736c933dde3106b7283888f5ae1021465702f16f23ab99374b82731f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulario"));

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
        
        $__internal_f91b07d1736c933dde3106b7283888f5ae1021465702f16f23ab99374b82731f->leave($__internal_f91b07d1736c933dde3106b7283888f5ae1021465702f16f23ab99374b82731f_prof);

    }

    public function getTemplateName()
    {
        return "MobileBundle:vista:nuevoRegistro.html.twig";
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
