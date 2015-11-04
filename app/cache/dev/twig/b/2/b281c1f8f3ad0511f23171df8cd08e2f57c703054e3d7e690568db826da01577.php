<?php

/* MobileBundle:vista:mostrarHoteles.html.twig */
class __TwigTemplate_b281c1f8f3ad0511f23171df8cd08e2f57c703054e3d7e690568db826da01577 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MobileBundle::plantillaMostrar.html.twig", "MobileBundle:vista:mostrarHoteles.html.twig", 1);
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
        $__internal_c2ef925a959dd0b94888e0a5b8178b34fb71bed9bffc6611bf2c5921a33812ac = $this->env->getExtension("native_profiler");
        $__internal_c2ef925a959dd0b94888e0a5b8178b34fb71bed9bffc6611bf2c5921a33812ac->enter($__internal_c2ef925a959dd0b94888e0a5b8178b34fb71bed9bffc6611bf2c5921a33812ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MobileBundle:vista:mostrarHoteles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2ef925a959dd0b94888e0a5b8178b34fb71bed9bffc6611bf2c5921a33812ac->leave($__internal_c2ef925a959dd0b94888e0a5b8178b34fb71bed9bffc6611bf2c5921a33812ac_prof);

    }

    // line 3
    public function block_tituloPagina($context, array $blocks = array())
    {
        $__internal_c20fb6b9657c8f36509b69c60b408f92ca2da32356c2e1654253fddeea333da7 = $this->env->getExtension("native_profiler");
        $__internal_c20fb6b9657c8f36509b69c60b408f92ca2da32356c2e1654253fddeea333da7->enter($__internal_c20fb6b9657c8f36509b69c60b408f92ca2da32356c2e1654253fddeea333da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tituloPagina"));

        // line 4
        echo "\tMostrar Hoteles
";
        
        $__internal_c20fb6b9657c8f36509b69c60b408f92ca2da32356c2e1654253fddeea333da7->leave($__internal_c20fb6b9657c8f36509b69c60b408f92ca2da32356c2e1654253fddeea333da7_prof);

    }

    // line 7
    public function block_contenidoInicial($context, array $blocks = array())
    {
        $__internal_ca124b212fb81e7027d80053ac963d255dfc25360e720c9fb4f594f7c5a4eba7 = $this->env->getExtension("native_profiler");
        $__internal_ca124b212fb81e7027d80053ac963d255dfc25360e720c9fb4f594f7c5a4eba7->enter($__internal_ca124b212fb81e7027d80053ac963d255dfc25360e720c9fb4f594f7c5a4eba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoInicial"));

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


\t<div id=\"contenidoMostrarHoteles\" class=\"contenidoMostrarNegocios\">
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
        $context['_seq'] = twig_ensure_traversable((isset($context["listadoHoteles"]) ? $context["listadoHoteles"] : $this->getContext($context, "listadoHoteles")));
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 33
            echo "\t\t\t\t\t<tr colspan=\"3\">
\t\t\t\t\t    <td >";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["hotel"], "nombreNegocio", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td >";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["hotel"], "ciudadNegocio", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t";
            // line 36
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : $this->getContext($context, "usuarios")));
            foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                // line 37
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["usuario"], "Id", array()) == $this->getAttribute($context["hotel"], "idUsuario", array()))) {
                    // line 38
                    echo "\t\t\t\t\t\t\t\t";
                    $context["rutaImagen"] = (((("DirectoriosUsuarios/" . $this->getAttribute($context["usuario"], "userName", array())) . "/Negocios/") . $this->getAttribute($context["hotel"], "nombreNegocio", array())) . ".jpg");
                    // line 39
                    echo "\t\t\t\t\t\t\t\t<td class=\"tdImagenNegocio\"><input type=\"image\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagen"]) ? $context["rutaImagen"] : $this->getContext($context, "rutaImagen"))), "html", null, true);
                    echo "\" class=\"fotoNegocio2\" onclick=\"location.href='";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mobile_perfilnegocio", array("idNegocio" => $this->getAttribute($context["hotel"], "idNegocio", array()), "idUsuario" => $this->getAttribute($context["hotel"], "idUsuario", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t    </tbody>

\t\t</table>
";
        
        $__internal_ca124b212fb81e7027d80053ac963d255dfc25360e720c9fb4f594f7c5a4eba7->leave($__internal_ca124b212fb81e7027d80053ac963d255dfc25360e720c9fb4f594f7c5a4eba7_prof);

    }

    public function getTemplateName()
    {
        return "MobileBundle:vista:mostrarHoteles.html.twig";
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
