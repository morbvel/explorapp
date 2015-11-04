<?php

/* MobileBundle:vista:mostrarOfertas.html.twig */
class __TwigTemplate_f6aff9a9a810881eea482157cc05dc125a21cd83b2602b812806294e5d3a37b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MobileBundle::plantillaMostrar.html.twig", "MobileBundle:vista:mostrarOfertas.html.twig", 1);
        $this->blocks = array(
            'tituloPagina' => array($this, 'block_tituloPagina'),
            'contenidoInicial' => array($this, 'block_contenidoInicial'),
            'contenidoFooterMostrar' => array($this, 'block_contenidoFooterMostrar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MobileBundle::plantillaMostrar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ae7f2b8a856d8b4638a980618e7ad463aaef661ad8b53f236ee9541666b733b = $this->env->getExtension("native_profiler");
        $__internal_5ae7f2b8a856d8b4638a980618e7ad463aaef661ad8b53f236ee9541666b733b->enter($__internal_5ae7f2b8a856d8b4638a980618e7ad463aaef661ad8b53f236ee9541666b733b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MobileBundle:vista:mostrarOfertas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ae7f2b8a856d8b4638a980618e7ad463aaef661ad8b53f236ee9541666b733b->leave($__internal_5ae7f2b8a856d8b4638a980618e7ad463aaef661ad8b53f236ee9541666b733b_prof);

    }

    // line 3
    public function block_tituloPagina($context, array $blocks = array())
    {
        $__internal_d81a8302132f6a90f1cf8453daa1f1bb54110b661593126a17ace6e8bfca8b08 = $this->env->getExtension("native_profiler");
        $__internal_d81a8302132f6a90f1cf8453daa1f1bb54110b661593126a17ace6e8bfca8b08->enter($__internal_d81a8302132f6a90f1cf8453daa1f1bb54110b661593126a17ace6e8bfca8b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tituloPagina"));

        // line 4
        echo "\tMostrar Ofertas
";
        
        $__internal_d81a8302132f6a90f1cf8453daa1f1bb54110b661593126a17ace6e8bfca8b08->leave($__internal_d81a8302132f6a90f1cf8453daa1f1bb54110b661593126a17ace6e8bfca8b08_prof);

    }

    // line 7
    public function block_contenidoInicial($context, array $blocks = array())
    {
        $__internal_a70c7a38662b207e5dea55d41229cc2eb8b2e327a18dee00fcdbb694cf2f719c = $this->env->getExtension("native_profiler");
        $__internal_a70c7a38662b207e5dea55d41229cc2eb8b2e327a18dee00fcdbb694cf2f719c->enter($__internal_a70c7a38662b207e5dea55d41229cc2eb8b2e327a18dee00fcdbb694cf2f719c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoInicial"));

        // line 8
        echo "\t<ul data-role=\"listview\" data-inset=\"true\" >
\t\t<li>
\t\t\t<a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("mobile_formlogin");
        echo "\" id=\"abrirNuevoRegistro\">
\t\t\t\t<img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenPerfil"]) ? $context["rutaImagenPerfil"] : $this->getContext($context, "rutaImagenPerfil"))), "html", null, true);
        echo "\" alt=\"Login\" class=\"ui-li-icon\" i>
\t\t\t\t";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["textoRecuadro"]) ? $context["textoRecuadro"] : $this->getContext($context, "textoRecuadro")), "html", null, true);
        echo "
\t\t\t</a>
\t\t\t<a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("mobile_perfilusuario");
        echo "\" id=\"abrirPerfilUsuario\">
\t\t\t\t<img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenPerfil"]) ? $context["rutaImagenPerfil"] : $this->getContext($context, "rutaImagenPerfil"))), "html", null, true);
        echo "\" alt=\"Perfil de Usuario\" class=\"ui-li-icon\" i>
\t\t\t\t";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["textoRecuadro"]) ? $context["textoRecuadro"] : $this->getContext($context, "textoRecuadro")), "html", null, true);
        echo "
\t\t\t</a>
\t\t</li>
\t</ul>


\t<div id=\"contenidoMostrarOfertas\" class=\"contenidoMostrarNegocios\">
\t\t<table class=\"tablaNegocios\">
\t\t\t<thead>
\t\t\t\t<tr colspan=\"4\">
\t\t\t\t   \t<th class=\"columnaFechaOferta\">Inicio</th>
\t\t\t\t\t<th class=\"columnaFechaOferta\">Fin</th>
\t\t\t\t\t<th class=\"columnaFechaOferta\">Descripción</th>
\t\t\t\t</tr>
\t\t    </thead>
\t\t    <tbody>
\t\t    \t";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listadoOfertas"]) ? $context["listadoOfertas"] : $this->getContext($context, "listadoOfertas")));
        foreach ($context['_seq'] as $context["_key"] => $context["oferta"]) {
            // line 33
            echo "\t\t\t\t\t<tr colspan=\"4\">
\t\t\t\t\t    <td class=\"columnaFechaOferta\">";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["oferta"], "fechaInicialOferta", array()), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"columnaFechaOferta\">";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["oferta"], "fechaFinalOferta", array()), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["oferta"], "descripcionOfertas", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td style=\"width: 15%;\"><a class=\"eliminarOferta\" style=\"display: ";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["visibleEditarOferta"]) ? $context["visibleEditarOferta"] : $this->getContext($context, "visibleEditarOferta")), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mobile_eliminaroferta", array("descripcionOferta" => $this->getAttribute($context["oferta"], "descripcionOfertas", array()), "idProducto" => $this->getAttribute($context["oferta"], "idProducto", array()))), "html", null, true);
            echo "\">X<a/></td>
\t\t\t\t\t\t<td><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mobile_aceptaroferta", array("descripcionOferta" => $this->getAttribute($context["oferta"], "descripcionOfertas", array()), "idProducto" => $this->getAttribute($context["oferta"], "idProducto", array()))), "html", null, true);
            echo "\" class=\"eliminarOferta\"  style=\"display: ";
            echo twig_escape_filter($this->env, (isset($context["visibleApuntarOferta"]) ? $context["visibleApuntarOferta"] : $this->getContext($context, "visibleApuntarOferta")), "html", null, true);
            echo "\">√</a></td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oferta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "\t\t    </tbody>

\t\t</table>
";
        
        $__internal_a70c7a38662b207e5dea55d41229cc2eb8b2e327a18dee00fcdbb694cf2f719c->leave($__internal_a70c7a38662b207e5dea55d41229cc2eb8b2e327a18dee00fcdbb694cf2f719c_prof);

    }

    // line 46
    public function block_contenidoFooterMostrar($context, array $blocks = array())
    {
        $__internal_d1343b364ceb6170c0a02c729ccca6fa577dcb8559867e88e238c7f2572db963 = $this->env->getExtension("native_profiler");
        $__internal_d1343b364ceb6170c0a02c729ccca6fa577dcb8559867e88e238c7f2572db963->enter($__internal_d1343b364ceb6170c0a02c729ccca6fa577dcb8559867e88e238c7f2572db963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoFooterMostrar"));

        // line 47
        echo "\t<ul data-role=\"listview\" data-inset=\"true\" style=\"display: ";
        echo twig_escape_filter($this->env, (isset($context["cerrarSesion"]) ? $context["cerrarSesion"] : $this->getContext($context, "cerrarSesion")), "html", null, true);
        echo "\">
\t\t<li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("mobile_cerrarsesion");
        echo "\" data-transition=\"fade\">Terminar la Sesión</a></li>
\t</ul>
";
        
        $__internal_d1343b364ceb6170c0a02c729ccca6fa577dcb8559867e88e238c7f2572db963->leave($__internal_d1343b364ceb6170c0a02c729ccca6fa577dcb8559867e88e238c7f2572db963_prof);

    }

    public function getTemplateName()
    {
        return "MobileBundle:vista:mostrarOfertas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 48,  152 => 47,  146 => 46,  136 => 41,  125 => 38,  119 => 37,  115 => 36,  111 => 35,  107 => 34,  104 => 33,  100 => 32,  81 => 16,  77 => 15,  73 => 14,  68 => 12,  64 => 11,  60 => 10,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
