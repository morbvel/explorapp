<?php

/* MobileBundle:vista:mostrarBares.html.twig */
class __TwigTemplate_058a9c11478d012e37e9039351c280b931589c384741e52a0063790ca7748d8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MobileBundle::plantillaMostrar.html.twig", "MobileBundle:vista:mostrarBares.html.twig", 1);
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
        $__internal_8e79822d28dd5930356c79bc49b7152b3a12f906ddf0dc364af1380850ac09de = $this->env->getExtension("native_profiler");
        $__internal_8e79822d28dd5930356c79bc49b7152b3a12f906ddf0dc364af1380850ac09de->enter($__internal_8e79822d28dd5930356c79bc49b7152b3a12f906ddf0dc364af1380850ac09de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MobileBundle:vista:mostrarBares.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e79822d28dd5930356c79bc49b7152b3a12f906ddf0dc364af1380850ac09de->leave($__internal_8e79822d28dd5930356c79bc49b7152b3a12f906ddf0dc364af1380850ac09de_prof);

    }

    // line 3
    public function block_tituloPagina($context, array $blocks = array())
    {
        $__internal_d049494f3db15358ac1ced8a99fa1054eb6869de04acf77e0eb4649499d4a741 = $this->env->getExtension("native_profiler");
        $__internal_d049494f3db15358ac1ced8a99fa1054eb6869de04acf77e0eb4649499d4a741->enter($__internal_d049494f3db15358ac1ced8a99fa1054eb6869de04acf77e0eb4649499d4a741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tituloPagina"));

        // line 4
        echo "\tMostrar Bares
";
        
        $__internal_d049494f3db15358ac1ced8a99fa1054eb6869de04acf77e0eb4649499d4a741->leave($__internal_d049494f3db15358ac1ced8a99fa1054eb6869de04acf77e0eb4649499d4a741_prof);

    }

    // line 7
    public function block_contenidoInicial($context, array $blocks = array())
    {
        $__internal_e2998f80d87bbc2552d593ee45c754779ea7d970a28b3ec1ea33740edcb4c9c6 = $this->env->getExtension("native_profiler");
        $__internal_e2998f80d87bbc2552d593ee45c754779ea7d970a28b3ec1ea33740edcb4c9c6->enter($__internal_e2998f80d87bbc2552d593ee45c754779ea7d970a28b3ec1ea33740edcb4c9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoInicial"));

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


\t<div id=\"contenidoMostrarBares\" class=\"contenidoMostrarNegocios\">
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
        $context['_seq'] = twig_ensure_traversable((isset($context["listadoBares"]) ? $context["listadoBares"] : $this->getContext($context, "listadoBares")));
        foreach ($context['_seq'] as $context["_key"] => $context["bar"]) {
            // line 33
            echo "\t\t\t\t\t<tr colspan=\"3\">
\t\t\t\t\t    <td >";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["bar"], "nombreNegocio", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td >";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["bar"], "ciudadNegocio", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t";
            // line 36
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : $this->getContext($context, "usuarios")));
            foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                // line 37
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["usuario"], "Id", array()) == $this->getAttribute($context["bar"], "idUsuario", array()))) {
                    // line 38
                    echo "\t\t\t\t\t\t\t\t";
                    $context["rutaImagen"] = (((("DirectoriosUsuarios/" . $this->getAttribute($context["usuario"], "userName", array())) . "/Negocios/") . $this->getAttribute($context["bar"], "nombreNegocio", array())) . ".jpg");
                    // line 39
                    echo "\t\t\t\t\t\t\t\t<td class=\"tdImagenNegocio\"><input type=\"image\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagen"]) ? $context["rutaImagen"] : $this->getContext($context, "rutaImagen"))), "html", null, true);
                    echo "\" class=\"fotoNegocio2\" onclick=\"location.href='";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mobile_perfilnegocio", array("idNegocio" => $this->getAttribute($context["bar"], "idNegocio", array()), "idUsuario" => $this->getAttribute($context["bar"], "idUsuario", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t    </tbody>

\t\t</table>
";
        
        $__internal_e2998f80d87bbc2552d593ee45c754779ea7d970a28b3ec1ea33740edcb4c9c6->leave($__internal_e2998f80d87bbc2552d593ee45c754779ea7d970a28b3ec1ea33740edcb4c9c6_prof);

    }

    public function getTemplateName()
    {
        return "MobileBundle:vista:mostrarBares.html.twig";
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
