<?php

/* PCBundle:vista:mostrarPDF.html.twig */
class __TwigTemplate_a75fad31ac74e08dff3f227a0e824671f7353ea3d57dadb41540119f5c6abb32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCBundle::plantillaPDF.html.twig", "PCBundle:vista:mostrarPDF.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'cuerpoOferta' => array($this, 'block_cuerpoOferta'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PCBundle::plantillaPDF.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e7ad63c2b5398b7129befaa7e86fd71a0be7f3f7acfa9f74b7c163c867bfe09c = $this->env->getExtension("native_profiler");
        $__internal_e7ad63c2b5398b7129befaa7e86fd71a0be7f3f7acfa9f74b7c163c867bfe09c->enter($__internal_e7ad63c2b5398b7129befaa7e86fd71a0be7f3f7acfa9f74b7c163c867bfe09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle:vista:mostrarPDF.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7ad63c2b5398b7129befaa7e86fd71a0be7f3f7acfa9f74b7c163c867bfe09c->leave($__internal_e7ad63c2b5398b7129befaa7e86fd71a0be7f3f7acfa9f74b7c163c867bfe09c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6064540e05015cf18a3a50d461cdf8b980ac3d2c046f301c7b40d403daf3de9b = $this->env->getExtension("native_profiler");
        $__internal_6064540e05015cf18a3a50d461cdf8b980ac3d2c046f301c7b40d403daf3de9b->enter($__internal_6064540e05015cf18a3a50d461cdf8b980ac3d2c046f301c7b40d403daf3de9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tReserva de la Oferta
";
        
        $__internal_6064540e05015cf18a3a50d461cdf8b980ac3d2c046f301c7b40d403daf3de9b->leave($__internal_6064540e05015cf18a3a50d461cdf8b980ac3d2c046f301c7b40d403daf3de9b_prof);

    }

    // line 9
    public function block_cuerpoOferta($context, array $blocks = array())
    {
        $__internal_11e2d1e5fee3aff2e7d06851fabe17456d6e7dd25eeefd829b9992a0addfd2b8 = $this->env->getExtension("native_profiler");
        $__internal_11e2d1e5fee3aff2e7d06851fabe17456d6e7dd25eeefd829b9992a0addfd2b8->enter($__internal_11e2d1e5fee3aff2e7d06851fabe17456d6e7dd25eeefd829b9992a0addfd2b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpoOferta"));

        // line 10
        echo "\t<p class=\"textoAgradecimiento\">Desde Explorapp queremos agradecer la confianza depositada en nuestros servicios y esperamos que disfrutes plenamente de la oferta a la que te acabas de suscribir.</p>
\t<p>Esta oferta es válida únicamente entre las fechas ";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "fechaInicialOferta", array()), "d/m/Y"), "html", null, true);
        echo " y ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "fechaFinalOferta", array()), "d/m/Y"), "html", null, true);
        echo " para el producto ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "nombreProducto", array()), "html", null, true);
        echo " del negocio ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["negocio"]) ? $context["negocio"] : $this->getContext($context, "negocio")), "nombreNegocio", array()), "html", null, true);
        echo ", al cual se le aplica la oferta de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "descripcionOfertas", array()), "html", null, true);
        echo ".</p>
\t<p>Además, dada la naturaleza única de las ofertas, esta sólo podrá ser canjeable por ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datospersonales"]) ? $context["datospersonales"] : $this->getContext($context, "datospersonales")), "nombrePersonal", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datospersonales"]) ? $context["datospersonales"] : $this->getContext($context, "datospersonales")), "apellido1Personal", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datospersonales"]) ? $context["datospersonales"] : $this->getContext($context, "datospersonales")), "apellido2Personal", array()), "html", null, true);
        echo ", con DNI ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datospersonales"]) ? $context["datospersonales"] : $this->getContext($context, "datospersonales")), "DNIPersonal", array()), "html", null, true);
        echo ", el cual se suscribió a la oferta anterior el día ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ofertasCliente"]) ? $context["ofertasCliente"] : $this->getContext($context, "ofertasCliente")), "fechaOfertaCliente", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_11e2d1e5fee3aff2e7d06851fabe17456d6e7dd25eeefd829b9992a0addfd2b8->leave($__internal_11e2d1e5fee3aff2e7d06851fabe17456d6e7dd25eeefd829b9992a0addfd2b8_prof);

    }

    public function getTemplateName()
    {
        return "PCBundle:vista:mostrarPDF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 12,  58 => 11,  55 => 10,  49 => 9,  41 => 4,  35 => 3,  11 => 1,);
    }
}
