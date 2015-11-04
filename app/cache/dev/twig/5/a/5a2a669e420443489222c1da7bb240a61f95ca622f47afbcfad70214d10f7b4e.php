<?php

/* MobileBundle:vista:autentificacion.html.twig */
class __TwigTemplate_5a2a669e420443489222c1da7bb240a61f95ca622f47afbcfad70214d10f7b4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MobileBundle::plantillaRegistros.html.twig", "MobileBundle:vista:autentificacion.html.twig", 1);
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
        $__internal_e4ff9715cbf5ae1676a11e16c1ba8d3f99c8fe90e0fdce8f017c5a243fc929a7 = $this->env->getExtension("native_profiler");
        $__internal_e4ff9715cbf5ae1676a11e16c1ba8d3f99c8fe90e0fdce8f017c5a243fc929a7->enter($__internal_e4ff9715cbf5ae1676a11e16c1ba8d3f99c8fe90e0fdce8f017c5a243fc929a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MobileBundle:vista:autentificacion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4ff9715cbf5ae1676a11e16c1ba8d3f99c8fe90e0fdce8f017c5a243fc929a7->leave($__internal_e4ff9715cbf5ae1676a11e16c1ba8d3f99c8fe90e0fdce8f017c5a243fc929a7_prof);

    }

    // line 4
    public function block_tituloPagina($context, array $blocks = array())
    {
        $__internal_682e7c21a2a576b843682c5429112f739651274bacd18e9e1bcf76aed68bfdc4 = $this->env->getExtension("native_profiler");
        $__internal_682e7c21a2a576b843682c5429112f739651274bacd18e9e1bcf76aed68bfdc4->enter($__internal_682e7c21a2a576b843682c5429112f739651274bacd18e9e1bcf76aed68bfdc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tituloPagina"));

        // line 5
        echo "\tAcceso al sistema
";
        
        $__internal_682e7c21a2a576b843682c5429112f739651274bacd18e9e1bcf76aed68bfdc4->leave($__internal_682e7c21a2a576b843682c5429112f739651274bacd18e9e1bcf76aed68bfdc4_prof);

    }

    // line 8
    public function block_urlDestino($context, array $blocks = array())
    {
        $__internal_13f6d2618428f4d2839bb24782779b4d3ffa1d7500414dd4973829d08842fd3d = $this->env->getExtension("native_profiler");
        $__internal_13f6d2618428f4d2839bb24782779b4d3ffa1d7500414dd4973829d08842fd3d->enter($__internal_13f6d2618428f4d2839bb24782779b4d3ffa1d7500414dd4973829d08842fd3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino"));

        echo $this->env->getExtension('routing')->getPath("mobile_autentificar");
        
        $__internal_13f6d2618428f4d2839bb24782779b4d3ffa1d7500414dd4973829d08842fd3d->leave($__internal_13f6d2618428f4d2839bb24782779b4d3ffa1d7500414dd4973829d08842fd3d_prof);

    }

    // line 10
    public function block_nombreFormulario($context, array $blocks = array())
    {
        $__internal_e04cf02a591a51a6a418e800929d5c28da7b84e80938d3c317d5e81edf147792 = $this->env->getExtension("native_profiler");
        $__internal_e04cf02a591a51a6a418e800929d5c28da7b84e80938d3c317d5e81edf147792->enter($__internal_e04cf02a591a51a6a418e800929d5c28da7b84e80938d3c317d5e81edf147792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nombreFormulario"));

        // line 11
        echo "\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["UsuariosForm"]) ? $context["UsuariosForm"] : $this->getContext($context, "UsuariosForm")), 'enctype');
        echo "
";
        
        $__internal_e04cf02a591a51a6a418e800929d5c28da7b84e80938d3c317d5e81edf147792->leave($__internal_e04cf02a591a51a6a418e800929d5c28da7b84e80938d3c317d5e81edf147792_prof);

    }

    // line 14
    public function block_formulario($context, array $blocks = array())
    {
        $__internal_a44ca42380b8c0e16975e4f4e2bca63a4f2616b101a77fa883635a7fb10a9ed9 = $this->env->getExtension("native_profiler");
        $__internal_a44ca42380b8c0e16975e4f4e2bca63a4f2616b101a77fa883635a7fb10a9ed9->enter($__internal_a44ca42380b8c0e16975e4f4e2bca63a4f2616b101a77fa883635a7fb10a9ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulario"));

        // line 15
        echo "\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["UsuariosForm"]) ? $context["UsuariosForm"] : $this->getContext($context, "UsuariosForm")), 'widget');
        echo "
\t<input type=\"submit\" id=\"enviarLogin\" name=\"enviarlogin\" value=\"Aceptar\" data-icon=\"check\" data-iconpos=\"right\" data-inline=\"true\"/>
\t<input type=\"submit\" id=\"nuevoRegistro\" name=\"nuevoRegistro\" value=\"Nuevo Registro\" data-icon=\"check\" data-iconpos=\"right\" data-inline=\"true\"/>
";
        
        $__internal_a44ca42380b8c0e16975e4f4e2bca63a4f2616b101a77fa883635a7fb10a9ed9->leave($__internal_a44ca42380b8c0e16975e4f4e2bca63a4f2616b101a77fa883635a7fb10a9ed9_prof);

    }

    public function getTemplateName()
    {
        return "MobileBundle:vista:autentificacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 15,  79 => 14,  69 => 11,  63 => 10,  51 => 8,  43 => 5,  37 => 4,  11 => 1,);
    }
}
