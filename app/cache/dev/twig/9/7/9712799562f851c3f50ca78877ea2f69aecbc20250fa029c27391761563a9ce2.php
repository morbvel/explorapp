<?php

/* MobileBundle:vista:autentificacion.html.twig */
class __TwigTemplate_9712799562f851c3f50ca78877ea2f69aecbc20250fa029c27391761563a9ce2 extends Twig_Template
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
        $__internal_0032acb3b9f2c4cc5e95b215f202e3d59351eed0cf5644dd5994ab2f29246864 = $this->env->getExtension("native_profiler");
        $__internal_0032acb3b9f2c4cc5e95b215f202e3d59351eed0cf5644dd5994ab2f29246864->enter($__internal_0032acb3b9f2c4cc5e95b215f202e3d59351eed0cf5644dd5994ab2f29246864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MobileBundle:vista:autentificacion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0032acb3b9f2c4cc5e95b215f202e3d59351eed0cf5644dd5994ab2f29246864->leave($__internal_0032acb3b9f2c4cc5e95b215f202e3d59351eed0cf5644dd5994ab2f29246864_prof);

    }

    // line 4
    public function block_tituloPagina($context, array $blocks = array())
    {
        $__internal_83f090a33f1b34e6ae2622be944e23d2a35adb1ac5b5da3026e873397dc0023d = $this->env->getExtension("native_profiler");
        $__internal_83f090a33f1b34e6ae2622be944e23d2a35adb1ac5b5da3026e873397dc0023d->enter($__internal_83f090a33f1b34e6ae2622be944e23d2a35adb1ac5b5da3026e873397dc0023d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tituloPagina"));

        // line 5
        echo "\tAcceso al sistema
";
        
        $__internal_83f090a33f1b34e6ae2622be944e23d2a35adb1ac5b5da3026e873397dc0023d->leave($__internal_83f090a33f1b34e6ae2622be944e23d2a35adb1ac5b5da3026e873397dc0023d_prof);

    }

    // line 8
    public function block_urlDestino($context, array $blocks = array())
    {
        $__internal_b3dc3bffe03132d597abc415393a1078b0d21d070d3df9e3558cde2f22c0ec52 = $this->env->getExtension("native_profiler");
        $__internal_b3dc3bffe03132d597abc415393a1078b0d21d070d3df9e3558cde2f22c0ec52->enter($__internal_b3dc3bffe03132d597abc415393a1078b0d21d070d3df9e3558cde2f22c0ec52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino"));

        // line 9
        echo $this->env->getExtension('routing')->getPath("mobile_autentificar");
        echo "
";
        
        $__internal_b3dc3bffe03132d597abc415393a1078b0d21d070d3df9e3558cde2f22c0ec52->leave($__internal_b3dc3bffe03132d597abc415393a1078b0d21d070d3df9e3558cde2f22c0ec52_prof);

    }

    // line 12
    public function block_nombreFormulario($context, array $blocks = array())
    {
        $__internal_aa9c3f62dbfa1d26f8d4c33aa201c7e0f7fd44dc018924fab1d7a07a4db35ee1 = $this->env->getExtension("native_profiler");
        $__internal_aa9c3f62dbfa1d26f8d4c33aa201c7e0f7fd44dc018924fab1d7a07a4db35ee1->enter($__internal_aa9c3f62dbfa1d26f8d4c33aa201c7e0f7fd44dc018924fab1d7a07a4db35ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nombreFormulario"));

        // line 13
        echo "\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["UsuariosForm"]) ? $context["UsuariosForm"] : $this->getContext($context, "UsuariosForm")), 'enctype');
        echo "
";
        
        $__internal_aa9c3f62dbfa1d26f8d4c33aa201c7e0f7fd44dc018924fab1d7a07a4db35ee1->leave($__internal_aa9c3f62dbfa1d26f8d4c33aa201c7e0f7fd44dc018924fab1d7a07a4db35ee1_prof);

    }

    // line 16
    public function block_formulario($context, array $blocks = array())
    {
        $__internal_cf09ed6ba35667cd14db0075667b7c8e318ef87e801162e4343b428420f6c5d0 = $this->env->getExtension("native_profiler");
        $__internal_cf09ed6ba35667cd14db0075667b7c8e318ef87e801162e4343b428420f6c5d0->enter($__internal_cf09ed6ba35667cd14db0075667b7c8e318ef87e801162e4343b428420f6c5d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulario"));

        // line 17
        echo "\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["UsuariosForm"]) ? $context["UsuariosForm"] : $this->getContext($context, "UsuariosForm")), 'widget');
        echo "
\t<input type=\"submit\" id=\"enviarLogin\" name=\"enviarlogin\" value=\"Aceptar\" data-icon=\"check\" data-iconpos=\"right\" data-inline=\"true\"/>
\t<input type=\"submit\" id=\"nuevoRegistro\" name=\"nuevoRegistro\" value=\"Nuevo Registro\" data-icon=\"check\" data-iconpos=\"right\" data-inline=\"true\"/>
";
        
        $__internal_cf09ed6ba35667cd14db0075667b7c8e318ef87e801162e4343b428420f6c5d0->leave($__internal_cf09ed6ba35667cd14db0075667b7c8e318ef87e801162e4343b428420f6c5d0_prof);

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
        return array (  88 => 17,  82 => 16,  72 => 13,  66 => 12,  57 => 9,  51 => 8,  43 => 5,  37 => 4,  11 => 1,);
    }
}
