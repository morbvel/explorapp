<?php

/* PCBundle:vista:mostrarOfertas.html.twig */
class __TwigTemplate_1fad35602ef118902393e313b483186a78d9164e2b29d63ea1773d133d2e68e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCBundle::platillaMostrarNegocios.html.twig", "PCBundle:vista:mostrarOfertas.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'urlDestino' => array($this, 'block_urlDestino'),
            'inputHidden' => array($this, 'block_inputHidden'),
            'barraMenu' => array($this, 'block_barraMenu'),
            'cuerpoPagina' => array($this, 'block_cuerpoPagina'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PCBundle::platillaMostrarNegocios.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6127b33bcdd5c797a3976e7208d7ed08f2d5767016a7c5593cfc95f8561e07a0 = $this->env->getExtension("native_profiler");
        $__internal_6127b33bcdd5c797a3976e7208d7ed08f2d5767016a7c5593cfc95f8561e07a0->enter($__internal_6127b33bcdd5c797a3976e7208d7ed08f2d5767016a7c5593cfc95f8561e07a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle:vista:mostrarOfertas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6127b33bcdd5c797a3976e7208d7ed08f2d5767016a7c5593cfc95f8561e07a0->leave($__internal_6127b33bcdd5c797a3976e7208d7ed08f2d5767016a7c5593cfc95f8561e07a0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e29e93c108309f709f5f816b544aca93c8a4d3a664d8fc8acfe3c0acd20aeba = $this->env->getExtension("native_profiler");
        $__internal_6e29e93c108309f709f5f816b544aca93c8a4d3a664d8fc8acfe3c0acd20aeba->enter($__internal_6e29e93c108309f709f5f816b544aca93c8a4d3a664d8fc8acfe3c0acd20aeba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tOfertas
";
        
        $__internal_6e29e93c108309f709f5f816b544aca93c8a4d3a664d8fc8acfe3c0acd20aeba->leave($__internal_6e29e93c108309f709f5f816b544aca93c8a4d3a664d8fc8acfe3c0acd20aeba_prof);

    }

    // line 7
    public function block_urlDestino($context, array $blocks = array())
    {
        $__internal_157c83024f24d975f7ce67be0d2f64e0ebd8a63d4812e4efc2c037513dcfaaf7 = $this->env->getExtension("native_profiler");
        $__internal_157c83024f24d975f7ce67be0d2f64e0ebd8a63d4812e4efc2c037513dcfaaf7->enter($__internal_157c83024f24d975f7ce67be0d2f64e0ebd8a63d4812e4efc2c037513dcfaaf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino"));

        // line 8
        echo "\t'";
        echo $this->env->getExtension('routing')->getPath("pc_perfilusuario");
        echo "'
";
        
        $__internal_157c83024f24d975f7ce67be0d2f64e0ebd8a63d4812e4efc2c037513dcfaaf7->leave($__internal_157c83024f24d975f7ce67be0d2f64e0ebd8a63d4812e4efc2c037513dcfaaf7_prof);

    }

    // line 11
    public function block_inputHidden($context, array $blocks = array())
    {
        $__internal_3609949fd258190cc1d23250a2f8b9a752f53f7a64d76539adcd21b91407c7ef = $this->env->getExtension("native_profiler");
        $__internal_3609949fd258190cc1d23250a2f8b9a752f53f7a64d76539adcd21b91407c7ef->enter($__internal_3609949fd258190cc1d23250a2f8b9a752f53f7a64d76539adcd21b91407c7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inputHidden"));

        // line 12
        echo "\t<input type=\"hidden\" name=\"loginMostrarOfertas\" value=\"1000at200j\">\t
";
        
        $__internal_3609949fd258190cc1d23250a2f8b9a752f53f7a64d76539adcd21b91407c7ef->leave($__internal_3609949fd258190cc1d23250a2f8b9a752f53f7a64d76539adcd21b91407c7ef_prof);

    }

    // line 16
    public function block_barraMenu($context, array $blocks = array())
    {
        $__internal_583e6ae8c3539ab44157d397bec5365bc425eefbe9baf2a72b3dcff00b4761bf = $this->env->getExtension("native_profiler");
        $__internal_583e6ae8c3539ab44157d397bec5365bc425eefbe9baf2a72b3dcff00b4761bf->enter($__internal_583e6ae8c3539ab44157d397bec5365bc425eefbe9baf2a72b3dcff00b4761bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barraMenu"));

        // line 17
        echo "\t<div class=\"contenedorMenu\">
\t\t<nav id=\"navRestaurantes\">
\t\t\t<ul>
\t\t\t\t<li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("pc_restaurantes");
        echo "\" id=\"botonGrande\">Restaurantes</a></li>
\t\t\t\t<li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("pc_hoteles");
        echo "\" id=\"botonMediano\">Hoteles</a></li>
\t\t\t\t<li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("pc_bares");
        echo "\" id=\"botonPequeño\">Bares</a></li>
\t\t\t</ul>
\t\t\t<input type=\"image\" id=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["idFotoBarraMenu"]) ? $context["idFotoBarraMenu"] : $this->getContext($context, "idFotoBarraMenu")), "html", null, true);
        echo "\" class=\"enlaceAcceder\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenPerfil"]) ? $context["rutaImagenPerfil"] : $this->getContext($context, "rutaImagenPerfil"))), "html", null, true);
        echo "\" title=\"Acceder a la zona de usuarios\" />
\t\t\t<a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("pc_cerrarsesion");
        echo "\" id=\"enlaceCerrarSesion\" >Cerrar Sesi&oacute;n</a>
\t\t</nav>
\t</div>
";
        
        $__internal_583e6ae8c3539ab44157d397bec5365bc425eefbe9baf2a72b3dcff00b4761bf->leave($__internal_583e6ae8c3539ab44157d397bec5365bc425eefbe9baf2a72b3dcff00b4761bf_prof);

    }

    // line 33
    public function block_cuerpoPagina($context, array $blocks = array())
    {
        $__internal_22523d2840b4c0a064d7ad43644905f93978cbf313d0987a5dfbfff829a404e6 = $this->env->getExtension("native_profiler");
        $__internal_22523d2840b4c0a064d7ad43644905f93978cbf313d0987a5dfbfff829a404e6->enter($__internal_22523d2840b4c0a064d7ad43644905f93978cbf313d0987a5dfbfff829a404e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpoPagina"));

        // line 34
        echo "\t<div class=\"";
        echo twig_escape_filter($this->env, (isset($context["tipoNegocio"]) ? $context["tipoNegocio"] : $this->getContext($context, "tipoNegocio")), "html", null, true);
        echo "\">
\t\t<table id=\"tablaOfertas\" class=\"tablaNegocios\">
\t\t    <thead>
\t\t\t<tr>
\t\t\t    \t<th>Fecha de Inicio</th>
\t\t\t\t<th>Fecha de Fin</th>
\t\t\t    \t<th>Rango de Edades</th>
\t\t\t\t<th>Descripción de la Oferta</th>
\t\t\t\t<th></th>
\t\t\t</tr>
\t\t    </thead>
\t\t    <tbody>
\t\t\t";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listadoOfertas"]) ? $context["listadoOfertas"] : $this->getContext($context, "listadoOfertas")));
        foreach ($context['_seq'] as $context["_key"] => $context["oferta"]) {
            // line 47
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["oferta"], "fechaInicialOferta", array()), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["oferta"], "fechaFinalOferta", array()), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["oferta"], "edadPublicoOfertas", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["oferta"], "descripcionOfertas", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td><input type=\"button\" class=\"botonApuntarOferta\" value=\"Eliminar la Oferta\" style=\"display: ";
            // line 52
            echo twig_escape_filter($this->env, (isset($context["visibleEditarOferta"]) ? $context["visibleEditarOferta"] : $this->getContext($context, "visibleEditarOferta")), "html", null, true);
            echo "\" onclick=\"location.href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pc_eliminaroferta", array("descripcionOfertas" => $this->getAttribute($context["oferta"], "descripcionOfertas", array()), "idProducto" => $this->getAttribute($context["oferta"], "idProducto", array()))), "html", null, true);
            echo "';\" /></td>
\t\t\t\t\t<td><input type=\"button\" class=\"botonApuntarOferta\" value=\"Apuntarse a la Oferta\" style=\"display: ";
            // line 53
            echo twig_escape_filter($this->env, (isset($context["visibleApuntarOferta"]) ? $context["visibleApuntarOferta"] : $this->getContext($context, "visibleApuntarOferta")), "html", null, true);
            echo "\" onclick=\"location.href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pc_apuntarseoferta", array("descripcionOfertas" => $this->getAttribute($context["oferta"], "descripcionOfertas", array()), "idProducto" => $this->getAttribute($context["oferta"], "idProducto", array()))), "html", null, true);
            echo "';\" /></td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oferta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t\t    </tbody>
\t\t</table>
\t</div>
";
        
        $__internal_22523d2840b4c0a064d7ad43644905f93978cbf313d0987a5dfbfff829a404e6->leave($__internal_22523d2840b4c0a064d7ad43644905f93978cbf313d0987a5dfbfff829a404e6_prof);

    }

    public function getTemplateName()
    {
        return "PCBundle:vista:mostrarOfertas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 56,  174 => 53,  168 => 52,  164 => 51,  160 => 50,  156 => 49,  152 => 48,  149 => 47,  145 => 46,  129 => 34,  123 => 33,  112 => 25,  106 => 24,  101 => 22,  97 => 21,  93 => 20,  88 => 17,  82 => 16,  74 => 12,  68 => 11,  58 => 8,  52 => 7,  44 => 4,  38 => 3,  11 => 1,);
    }
}
