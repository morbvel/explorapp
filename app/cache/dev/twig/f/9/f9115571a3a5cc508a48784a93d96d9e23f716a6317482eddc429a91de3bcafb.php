<?php

/* PCBundle:vista:mostrarOfertas.html.twig */
class __TwigTemplate_f9115571a3a5cc508a48784a93d96d9e23f716a6317482eddc429a91de3bcafb extends Twig_Template
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
        $__internal_bdb4f3197bf4247f5b22d7a5581b70bf581bdabffffd82c1e7409da7c1c0e126 = $this->env->getExtension("native_profiler");
        $__internal_bdb4f3197bf4247f5b22d7a5581b70bf581bdabffffd82c1e7409da7c1c0e126->enter($__internal_bdb4f3197bf4247f5b22d7a5581b70bf581bdabffffd82c1e7409da7c1c0e126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle:vista:mostrarOfertas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdb4f3197bf4247f5b22d7a5581b70bf581bdabffffd82c1e7409da7c1c0e126->leave($__internal_bdb4f3197bf4247f5b22d7a5581b70bf581bdabffffd82c1e7409da7c1c0e126_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ddb88995b49c3877fe486b444b7e96a325d387311a1a0d9ebaea630aa4f549d7 = $this->env->getExtension("native_profiler");
        $__internal_ddb88995b49c3877fe486b444b7e96a325d387311a1a0d9ebaea630aa4f549d7->enter($__internal_ddb88995b49c3877fe486b444b7e96a325d387311a1a0d9ebaea630aa4f549d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tOfertas
";
        
        $__internal_ddb88995b49c3877fe486b444b7e96a325d387311a1a0d9ebaea630aa4f549d7->leave($__internal_ddb88995b49c3877fe486b444b7e96a325d387311a1a0d9ebaea630aa4f549d7_prof);

    }

    // line 7
    public function block_urlDestino($context, array $blocks = array())
    {
        $__internal_574e9aa84f56e2fe3f5691e7e4b907a4f62ddbfed61fb7192075fd6f49c95cf1 = $this->env->getExtension("native_profiler");
        $__internal_574e9aa84f56e2fe3f5691e7e4b907a4f62ddbfed61fb7192075fd6f49c95cf1->enter($__internal_574e9aa84f56e2fe3f5691e7e4b907a4f62ddbfed61fb7192075fd6f49c95cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino"));

        // line 8
        echo "\t'";
        echo $this->env->getExtension('routing')->getPath("pc_perfilusuario");
        echo "'
";
        
        $__internal_574e9aa84f56e2fe3f5691e7e4b907a4f62ddbfed61fb7192075fd6f49c95cf1->leave($__internal_574e9aa84f56e2fe3f5691e7e4b907a4f62ddbfed61fb7192075fd6f49c95cf1_prof);

    }

    // line 11
    public function block_inputHidden($context, array $blocks = array())
    {
        $__internal_09309d2b6fcb4d64d191d016ebbfdb937b1c4a20e79dc92c4045dd4f539763d9 = $this->env->getExtension("native_profiler");
        $__internal_09309d2b6fcb4d64d191d016ebbfdb937b1c4a20e79dc92c4045dd4f539763d9->enter($__internal_09309d2b6fcb4d64d191d016ebbfdb937b1c4a20e79dc92c4045dd4f539763d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inputHidden"));

        // line 12
        echo "\t<input type=\"hidden\" name=\"loginMostrarOfertas\" value=\"1000at200j\">\t
";
        
        $__internal_09309d2b6fcb4d64d191d016ebbfdb937b1c4a20e79dc92c4045dd4f539763d9->leave($__internal_09309d2b6fcb4d64d191d016ebbfdb937b1c4a20e79dc92c4045dd4f539763d9_prof);

    }

    // line 16
    public function block_barraMenu($context, array $blocks = array())
    {
        $__internal_fe2d4db40d88adc2f6e937aed7e80aa44fb7ec760dfd0a51adbb43ab5f4cdc4d = $this->env->getExtension("native_profiler");
        $__internal_fe2d4db40d88adc2f6e937aed7e80aa44fb7ec760dfd0a51adbb43ab5f4cdc4d->enter($__internal_fe2d4db40d88adc2f6e937aed7e80aa44fb7ec760dfd0a51adbb43ab5f4cdc4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barraMenu"));

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
        
        $__internal_fe2d4db40d88adc2f6e937aed7e80aa44fb7ec760dfd0a51adbb43ab5f4cdc4d->leave($__internal_fe2d4db40d88adc2f6e937aed7e80aa44fb7ec760dfd0a51adbb43ab5f4cdc4d_prof);

    }

    // line 33
    public function block_cuerpoPagina($context, array $blocks = array())
    {
        $__internal_6cf4c91af0a144b828874495fbe6d7bb9073b1c4b1043d99203805c0e15d5feb = $this->env->getExtension("native_profiler");
        $__internal_6cf4c91af0a144b828874495fbe6d7bb9073b1c4b1043d99203805c0e15d5feb->enter($__internal_6cf4c91af0a144b828874495fbe6d7bb9073b1c4b1043d99203805c0e15d5feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpoPagina"));

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
        
        $__internal_6cf4c91af0a144b828874495fbe6d7bb9073b1c4b1043d99203805c0e15d5feb->leave($__internal_6cf4c91af0a144b828874495fbe6d7bb9073b1c4b1043d99203805c0e15d5feb_prof);

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
