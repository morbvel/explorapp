<?php

/* MobileBundle:Default:autentificacion.html.twig */
class __TwigTemplate_da9558a73a67a7e54bf76a93bb410fc0a0c20bdc76a0d42528df798b47b70b91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MobileBundle::plantillaRegistros.html.twig", "MobileBundle:Default:autentificacion.html.twig", 1);
        $this->blocks = array(
            'tituloPagina' => array($this, 'block_tituloPagina'),
            'urlDestino' => array($this, 'block_urlDestino'),
            'nombreFormulario' => array($this, 'block_nombreFormulario'),
            'formulario' => array($this, 'block_formulario'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MobileBundle::plantillaRegistros.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_444ff1aff736aab793547ce13fe3d86feb572256df15fb7711321c1a464d0d51 = $this->env->getExtension("native_profiler");
        $__internal_444ff1aff736aab793547ce13fe3d86feb572256df15fb7711321c1a464d0d51->enter($__internal_444ff1aff736aab793547ce13fe3d86feb572256df15fb7711321c1a464d0d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MobileBundle:Default:autentificacion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_444ff1aff736aab793547ce13fe3d86feb572256df15fb7711321c1a464d0d51->leave($__internal_444ff1aff736aab793547ce13fe3d86feb572256df15fb7711321c1a464d0d51_prof);

    }

    // line 4
    public function block_tituloPagina($context, array $blocks = array())
    {
        $__internal_4b0788a0062552658ad0f318ea051f746b0f86400d4d280fe3cd308651682058 = $this->env->getExtension("native_profiler");
        $__internal_4b0788a0062552658ad0f318ea051f746b0f86400d4d280fe3cd308651682058->enter($__internal_4b0788a0062552658ad0f318ea051f746b0f86400d4d280fe3cd308651682058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tituloPagina"));

        // line 5
        echo "\tAcceso al sistema
";
        
        $__internal_4b0788a0062552658ad0f318ea051f746b0f86400d4d280fe3cd308651682058->leave($__internal_4b0788a0062552658ad0f318ea051f746b0f86400d4d280fe3cd308651682058_prof);

    }

    // line 8
    public function block_urlDestino($context, array $blocks = array())
    {
        $__internal_fc6663e77bd492c14b35c2341463bb75c7804413831ca3292d6a7f7e9c963e0c = $this->env->getExtension("native_profiler");
        $__internal_fc6663e77bd492c14b35c2341463bb75c7804413831ca3292d6a7f7e9c963e0c->enter($__internal_fc6663e77bd492c14b35c2341463bb75c7804413831ca3292d6a7f7e9c963e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino"));

        // line 9
        echo "\t";
        echo $this->env->getExtension('routing')->getPath("mobile_autentificar");
        echo "
";
        
        $__internal_fc6663e77bd492c14b35c2341463bb75c7804413831ca3292d6a7f7e9c963e0c->leave($__internal_fc6663e77bd492c14b35c2341463bb75c7804413831ca3292d6a7f7e9c963e0c_prof);

    }

    // line 12
    public function block_nombreFormulario($context, array $blocks = array())
    {
        $__internal_3a6573bce72cf7dfc4a16dda60553ab83c3eb2300c79c55ad7d9bf38a7d4d709 = $this->env->getExtension("native_profiler");
        $__internal_3a6573bce72cf7dfc4a16dda60553ab83c3eb2300c79c55ad7d9bf38a7d4d709->enter($__internal_3a6573bce72cf7dfc4a16dda60553ab83c3eb2300c79c55ad7d9bf38a7d4d709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nombreFormulario"));

        // line 13
        echo "\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["UsuariosForm"]) ? $context["UsuariosForm"] : $this->getContext($context, "UsuariosForm")), 'enctype');
        echo "
";
        
        $__internal_3a6573bce72cf7dfc4a16dda60553ab83c3eb2300c79c55ad7d9bf38a7d4d709->leave($__internal_3a6573bce72cf7dfc4a16dda60553ab83c3eb2300c79c55ad7d9bf38a7d4d709_prof);

    }

    // line 16
    public function block_formulario($context, array $blocks = array())
    {
        $__internal_2fdd1245317b8e823c83aab8db4ec96080f2689091cccedac2d73e58d6171ced = $this->env->getExtension("native_profiler");
        $__internal_2fdd1245317b8e823c83aab8db4ec96080f2689091cccedac2d73e58d6171ced->enter($__internal_2fdd1245317b8e823c83aab8db4ec96080f2689091cccedac2d73e58d6171ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulario"));

        // line 17
        echo "\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["UsuariosForm"]) ? $context["UsuariosForm"] : $this->getContext($context, "UsuariosForm")), 'widget');
        echo "
\t<input type=\"submit\" id=\"enviarLogin\" name=\"enviarlogin\" value=\"Aceptar\" data-icon=\"check\" data-iconpos=\"right\" data-inline=\"true\"/>
\t<input type=\"button\" id=\"nuevoRegistro\" name=\"nuevoRegistro\" value=\"Nuevo Registro\" data-icon=\"check\" data-iconpos=\"right\" data-inline=\"true\"/>
";
        
        $__internal_2fdd1245317b8e823c83aab8db4ec96080f2689091cccedac2d73e58d6171ced->leave($__internal_2fdd1245317b8e823c83aab8db4ec96080f2689091cccedac2d73e58d6171ced_prof);

    }

    public function getTemplateName()
    {
        return "MobileBundle:Default:autentificacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 17,  83 => 16,  73 => 13,  67 => 12,  57 => 9,  51 => 8,  43 => 5,  37 => 4,  11 => 1,);
    }
}
