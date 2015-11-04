<?php

/* MobileBundle:vista:nuevoRegistro.html.twig */
class __TwigTemplate_044f748690ef7f0cb449b63e568335b8e8892b6ce4125c45b2aedaf37bba560c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MobileBundle::plantillaRegistros.html.twig", "MobileBundle:vista:nuevoRegistro.html.twig", 1);
        $this->blocks = array(
            'tituloPagina' => array($this, 'block_tituloPagina'),
            'urlDestino' => array($this, 'block_urlDestino'),
            'formulario' => array($this, 'block_formulario'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MobileBundle::plantillaRegistros.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3631c9c7afdd5feedc4fe112a4d2cb3cfc95a7ec623bf49f8407aaf6cad2f586 = $this->env->getExtension("native_profiler");
        $__internal_3631c9c7afdd5feedc4fe112a4d2cb3cfc95a7ec623bf49f8407aaf6cad2f586->enter($__internal_3631c9c7afdd5feedc4fe112a4d2cb3cfc95a7ec623bf49f8407aaf6cad2f586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MobileBundle:vista:nuevoRegistro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3631c9c7afdd5feedc4fe112a4d2cb3cfc95a7ec623bf49f8407aaf6cad2f586->leave($__internal_3631c9c7afdd5feedc4fe112a4d2cb3cfc95a7ec623bf49f8407aaf6cad2f586_prof);

    }

    // line 4
    public function block_tituloPagina($context, array $blocks = array())
    {
        $__internal_949375d3f05ea03b9c760ec125f6ece18f2c1b19f11ff89eb7783b5f37c8633b = $this->env->getExtension("native_profiler");
        $__internal_949375d3f05ea03b9c760ec125f6ece18f2c1b19f11ff89eb7783b5f37c8633b->enter($__internal_949375d3f05ea03b9c760ec125f6ece18f2c1b19f11ff89eb7783b5f37c8633b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tituloPagina"));

        // line 5
        echo "\tNuevo Registro de Usuarios
";
        
        $__internal_949375d3f05ea03b9c760ec125f6ece18f2c1b19f11ff89eb7783b5f37c8633b->leave($__internal_949375d3f05ea03b9c760ec125f6ece18f2c1b19f11ff89eb7783b5f37c8633b_prof);

    }

    // line 8
    public function block_urlDestino($context, array $blocks = array())
    {
        $__internal_01f5d54714cbf33710e3e74c3f063a54d6a96065678b9879d3db8f3093e91b56 = $this->env->getExtension("native_profiler");
        $__internal_01f5d54714cbf33710e3e74c3f063a54d6a96065678b9879d3db8f3093e91b56->enter($__internal_01f5d54714cbf33710e3e74c3f063a54d6a96065678b9879d3db8f3093e91b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino"));

        echo $this->env->getExtension('routing')->getPath("mobile_nuevoregistroguardar");
        
        $__internal_01f5d54714cbf33710e3e74c3f063a54d6a96065678b9879d3db8f3093e91b56->leave($__internal_01f5d54714cbf33710e3e74c3f063a54d6a96065678b9879d3db8f3093e91b56_prof);

    }

    // line 10
    public function block_formulario($context, array $blocks = array())
    {
        $__internal_637a977ccb54fdab661fa3b9b983774a33b17bb52735b9ece40db234c188650c = $this->env->getExtension("native_profiler");
        $__internal_637a977ccb54fdab661fa3b9b983774a33b17bb52735b9ece40db234c188650c->enter($__internal_637a977ccb54fdab661fa3b9b983774a33b17bb52735b9ece40db234c188650c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulario"));

        // line 11
        echo "\t<form action=\"#\" method=\"post\" id=\"formNuevoRegistroUsuarios\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["RegistrosForm"]) ? $context["RegistrosForm"] : $this->getContext($context, "RegistrosForm")), 'enctype');
        echo ">
\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["RegistrosForm"]) ? $context["RegistrosForm"] : $this->getContext($context, "RegistrosForm")), 'widget');
        echo "
\t\t<input type=\"submit\" id=\"aceptarNuevoRegistro\" name=\"nuevoRegistro\" value=\"Aceptar Nuevo Registro\" data-icon=\"check\" data-iconpos=\"right\" data-inline=\"true\"/>
\t</form>
";
        
        $__internal_637a977ccb54fdab661fa3b9b983774a33b17bb52735b9ece40db234c188650c->leave($__internal_637a977ccb54fdab661fa3b9b983774a33b17bb52735b9ece40db234c188650c_prof);

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
        return array (  73 => 12,  68 => 11,  62 => 10,  50 => 8,  42 => 5,  36 => 4,  11 => 1,);
    }
}
