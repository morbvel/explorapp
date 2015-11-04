<?php

/* MobileBundle:vista:perfilProducto.html.twig */
class __TwigTemplate_ea5594ce0e3f301b0a11886742c10392b6812664e2caac798cd8055117a9c9a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MobileBundle::plantillaPerfiles.html.twig", "MobileBundle:vista:perfilProducto.html.twig", 1);
        $this->blocks = array(
            'tituloPagina' => array($this, 'block_tituloPagina'),
            'contenidoPerfil' => array($this, 'block_contenidoPerfil'),
            'contenidoFooterPerfil' => array($this, 'block_contenidoFooterPerfil'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MobileBundle::plantillaPerfiles.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77101676f9ae21f13bcc08e2c6d2f40122dd74fd897172f467a169e00a063552 = $this->env->getExtension("native_profiler");
        $__internal_77101676f9ae21f13bcc08e2c6d2f40122dd74fd897172f467a169e00a063552->enter($__internal_77101676f9ae21f13bcc08e2c6d2f40122dd74fd897172f467a169e00a063552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MobileBundle:vista:perfilProducto.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77101676f9ae21f13bcc08e2c6d2f40122dd74fd897172f467a169e00a063552->leave($__internal_77101676f9ae21f13bcc08e2c6d2f40122dd74fd897172f467a169e00a063552_prof);

    }

    // line 3
    public function block_tituloPagina($context, array $blocks = array())
    {
        $__internal_50a7e78808746be63c2e284a6caf44983121af4154c2cc38ff374925b083c331 = $this->env->getExtension("native_profiler");
        $__internal_50a7e78808746be63c2e284a6caf44983121af4154c2cc38ff374925b083c331->enter($__internal_50a7e78808746be63c2e284a6caf44983121af4154c2cc38ff374925b083c331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tituloPagina"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "nombreProducto", array()), "html", null, true);
        echo "
";
        
        $__internal_50a7e78808746be63c2e284a6caf44983121af4154c2cc38ff374925b083c331->leave($__internal_50a7e78808746be63c2e284a6caf44983121af4154c2cc38ff374925b083c331_prof);

    }

    // line 9
    public function block_contenidoPerfil($context, array $blocks = array())
    {
        $__internal_befb88b809f6febead256456002172b290354bcbfba65db961b6d390bf82422b = $this->env->getExtension("native_profiler");
        $__internal_befb88b809f6febead256456002172b290354bcbfba65db961b6d390bf82422b->enter($__internal_befb88b809f6febead256456002172b290354bcbfba65db961b6d390bf82422b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoPerfil"));

        // line 10
        echo "
\t<div id=\"contenidoPerfilUsuario\" class=\"contenidoPerfiles\">
\t\t<table class=\"tablaPerfiles\">
\t\t\t<tr colspan=\"2\">
\t\t\t\t<td>
\t\t\t\t\t<img src='";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenPerfil"]) ? $context["rutaImagenPerfil"] : $this->getContext($context, "rutaImagenPerfil"))), "html", null, true);
        echo "' class=\"imagenPerfil\"></img>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"tdPerfiles\">Nombre: </td>
\t\t\t\t<td class=\"tdDatos\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "nombreProducto", array()), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"tdPerfiles\">Descripción: </td>
\t\t\t\t<td class=\"tdDatos\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "descripcionProducto", array()), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"tdPerfiles\">Precio: </td>
\t\t\t\t<td class=\"tdDatos\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "precioProducto", array()), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"tdPerfiles\">Alérgenos: </td>
\t\t\t\t<td class=\"tdDatos\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "alergenosProducto", array()), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t</table>

\t\t<ul data-role=\"listview\" data-inset=\"true\" >
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mobile_mostrarofertas", array("nombreProducto" => $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "nombreProducto", array()), "idNegocio" => $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "idNegocio", array()))), "html", null, true);
        echo "\">Mostrar Ofertas</a>
\t\t\t</li>
\t\t</ul>
\t</div>

";
        
        $__internal_befb88b809f6febead256456002172b290354bcbfba65db961b6d390bf82422b->leave($__internal_befb88b809f6febead256456002172b290354bcbfba65db961b6d390bf82422b_prof);

    }

    // line 48
    public function block_contenidoFooterPerfil($context, array $blocks = array())
    {
        $__internal_d789879e2096b3cc7b6aa0080b6544bda80f7bf4d1dd75a97a160e7f5bbfdb48 = $this->env->getExtension("native_profiler");
        $__internal_d789879e2096b3cc7b6aa0080b6544bda80f7bf4d1dd75a97a160e7f5bbfdb48->enter($__internal_d789879e2096b3cc7b6aa0080b6544bda80f7bf4d1dd75a97a160e7f5bbfdb48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoFooterPerfil"));

        // line 49
        echo "\t<ul data-role=\"listview\" data-inset=\"true\" style=\"display: ";
        echo twig_escape_filter($this->env, (isset($context["cerrarSesion"]) ? $context["cerrarSesion"] : $this->getContext($context, "cerrarSesion")), "html", null, true);
        echo "\">
\t\t<li><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("mobile_cerrarsesion");
        echo "\" data-transition=\"fade\">Terminar la Sesión</a></li>
\t</ul>
";
        
        $__internal_d789879e2096b3cc7b6aa0080b6544bda80f7bf4d1dd75a97a160e7f5bbfdb48->leave($__internal_d789879e2096b3cc7b6aa0080b6544bda80f7bf4d1dd75a97a160e7f5bbfdb48_prof);

    }

    public function getTemplateName()
    {
        return "MobileBundle:vista:perfilProducto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 50,  122 => 49,  116 => 48,  103 => 38,  94 => 32,  87 => 28,  80 => 24,  73 => 20,  65 => 15,  58 => 10,  52 => 9,  42 => 4,  36 => 3,  11 => 1,);
    }
}
