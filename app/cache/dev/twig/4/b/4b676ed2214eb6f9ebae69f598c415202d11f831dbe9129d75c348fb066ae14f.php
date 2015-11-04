<?php

/* MobileBundle:vista:mostrarRestaurantes.html.twig */
class __TwigTemplate_4b676ed2214eb6f9ebae69f598c415202d11f831dbe9129d75c348fb066ae14f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MobileBundle::plantillaMostrar.html.twig", "MobileBundle:vista:mostrarRestaurantes.html.twig", 1);
        $this->blocks = array(
            'tituloPagina' => array($this, 'block_tituloPagina'),
            'contenidoInicial' => array($this, 'block_contenidoInicial'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MobileBundle::plantillaMostrar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ed3b5558a8f74c0ac783450eddd8abf056968d9efb156d801dd74f36cd82cfd = $this->env->getExtension("native_profiler");
        $__internal_2ed3b5558a8f74c0ac783450eddd8abf056968d9efb156d801dd74f36cd82cfd->enter($__internal_2ed3b5558a8f74c0ac783450eddd8abf056968d9efb156d801dd74f36cd82cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MobileBundle:vista:mostrarRestaurantes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ed3b5558a8f74c0ac783450eddd8abf056968d9efb156d801dd74f36cd82cfd->leave($__internal_2ed3b5558a8f74c0ac783450eddd8abf056968d9efb156d801dd74f36cd82cfd_prof);

    }

    // line 3
    public function block_tituloPagina($context, array $blocks = array())
    {
        $__internal_862b734153093298b83b9cbd907701b8cb1a638afa7c454e05018836b4655261 = $this->env->getExtension("native_profiler");
        $__internal_862b734153093298b83b9cbd907701b8cb1a638afa7c454e05018836b4655261->enter($__internal_862b734153093298b83b9cbd907701b8cb1a638afa7c454e05018836b4655261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tituloPagina"));

        // line 4
        echo "\tMostrar Restaurantes
";
        
        $__internal_862b734153093298b83b9cbd907701b8cb1a638afa7c454e05018836b4655261->leave($__internal_862b734153093298b83b9cbd907701b8cb1a638afa7c454e05018836b4655261_prof);

    }

    // line 7
    public function block_contenidoInicial($context, array $blocks = array())
    {
        $__internal_89f25774760a839a8537d46d35250b8218ec8a18f89878082f02ee525e235a6d = $this->env->getExtension("native_profiler");
        $__internal_89f25774760a839a8537d46d35250b8218ec8a18f89878082f02ee525e235a6d->enter($__internal_89f25774760a839a8537d46d35250b8218ec8a18f89878082f02ee525e235a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoInicial"));

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


\t<div id=\"contenidoMostrarRestaurantes\" class=\"contenidoMostrarNegocios\">
\t\t<table class=\"tablaNegocios\">
\t\t\t<thead>
\t\t\t\t<tr colspan=\"3\">
\t\t\t\t   \t<th>Nombre</th>
\t\t\t\t\t<th>Ciudad</th>
\t\t\t\t\t<th></th>
\t\t\t\t</tr>
\t\t    </thead>
\t\t    <tbody>
\t\t    \t";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listadoRestaurantes"]) ? $context["listadoRestaurantes"] : $this->getContext($context, "listadoRestaurantes")));
        foreach ($context['_seq'] as $context["_key"] => $context["restaurante"]) {
            // line 33
            echo "\t\t\t\t\t<tr colspan=\"3\">
\t\t\t\t\t    <td >";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["restaurante"], "nombreNegocio", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td >";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["restaurante"], "ciudadNegocio", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t";
            // line 36
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : $this->getContext($context, "usuarios")));
            foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                // line 37
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["usuario"], "Id", array()) == $this->getAttribute($context["restaurante"], "idUsuario", array()))) {
                    // line 38
                    echo "\t\t\t\t\t\t\t\t";
                    $context["rutaImagen"] = (((("DirectoriosUsuarios/" . $this->getAttribute($context["usuario"], "userName", array())) . "/Negocios/") . $this->getAttribute($context["restaurante"], "nombreNegocio", array())) . ".jpg");
                    // line 39
                    echo "\t\t\t\t\t\t\t\t<td class=\"tdImagenNegocio\"><input type=\"image\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagen"]) ? $context["rutaImagen"] : $this->getContext($context, "rutaImagen"))), "html", null, true);
                    echo "\" class=\"fotoNegocio2\" onclick=\"location.href='";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mobile_perfilnegocio", array("idNegocio" => $this->getAttribute($context["restaurante"], "idNegocio", array()), "idUsuario" => $this->getAttribute($context["restaurante"], "idUsuario", array()))), "html", null, true);
                    echo "';\" /></td>
\t\t\t\t\t\t\t";
                }
                // line 41
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['restaurante'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t    </tbody>

\t\t</table>
";
        
        $__internal_89f25774760a839a8537d46d35250b8218ec8a18f89878082f02ee525e235a6d->leave($__internal_89f25774760a839a8537d46d35250b8218ec8a18f89878082f02ee525e235a6d_prof);

    }

    public function getTemplateName()
    {
        return "MobileBundle:vista:mostrarRestaurantes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 44,  138 => 42,  132 => 41,  124 => 39,  121 => 38,  118 => 37,  114 => 36,  110 => 35,  106 => 34,  103 => 33,  99 => 32,  80 => 16,  76 => 15,  72 => 14,  67 => 12,  63 => 11,  59 => 10,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
