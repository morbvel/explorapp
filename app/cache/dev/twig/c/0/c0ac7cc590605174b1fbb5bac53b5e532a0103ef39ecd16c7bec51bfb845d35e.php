<?php

/* PCBundle:vista:mostrarPDF.html.twig */
class __TwigTemplate_c0ac7cc590605174b1fbb5bac53b5e532a0103ef39ecd16c7bec51bfb845d35e extends Twig_Template
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
        $__internal_2d08d3c57d3199ec691b36a1b93ccd3f7053f0d3ffc9bbc210eb06640e1e5dc3 = $this->env->getExtension("native_profiler");
        $__internal_2d08d3c57d3199ec691b36a1b93ccd3f7053f0d3ffc9bbc210eb06640e1e5dc3->enter($__internal_2d08d3c57d3199ec691b36a1b93ccd3f7053f0d3ffc9bbc210eb06640e1e5dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle:vista:mostrarPDF.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d08d3c57d3199ec691b36a1b93ccd3f7053f0d3ffc9bbc210eb06640e1e5dc3->leave($__internal_2d08d3c57d3199ec691b36a1b93ccd3f7053f0d3ffc9bbc210eb06640e1e5dc3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f396a7927ebb7d14418cd1900c18cd4fa2687bbcd1ea3c1fda1fd87de5f4979e = $this->env->getExtension("native_profiler");
        $__internal_f396a7927ebb7d14418cd1900c18cd4fa2687bbcd1ea3c1fda1fd87de5f4979e->enter($__internal_f396a7927ebb7d14418cd1900c18cd4fa2687bbcd1ea3c1fda1fd87de5f4979e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tReserva de la Oferta
";
        
        $__internal_f396a7927ebb7d14418cd1900c18cd4fa2687bbcd1ea3c1fda1fd87de5f4979e->leave($__internal_f396a7927ebb7d14418cd1900c18cd4fa2687bbcd1ea3c1fda1fd87de5f4979e_prof);

    }

    // line 9
    public function block_cuerpoOferta($context, array $blocks = array())
    {
        $__internal_7ada95def4427f8990b9b96ff97640eb2defed2662f78567e650d08aace39134 = $this->env->getExtension("native_profiler");
        $__internal_7ada95def4427f8990b9b96ff97640eb2defed2662f78567e650d08aace39134->enter($__internal_7ada95def4427f8990b9b96ff97640eb2defed2662f78567e650d08aace39134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpoOferta"));

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
        
        $__internal_7ada95def4427f8990b9b96ff97640eb2defed2662f78567e650d08aace39134->leave($__internal_7ada95def4427f8990b9b96ff97640eb2defed2662f78567e650d08aace39134_prof);

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
