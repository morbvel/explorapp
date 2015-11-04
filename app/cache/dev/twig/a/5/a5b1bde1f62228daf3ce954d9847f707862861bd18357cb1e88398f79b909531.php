<?php

/* MobileBundle:vista:perfilUsuario.html.twig */
class __TwigTemplate_a5b1bde1f62228daf3ce954d9847f707862861bd18357cb1e88398f79b909531 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MobileBundle::plantillaPerfiles.html.twig", "MobileBundle:vista:perfilUsuario.html.twig", 1);
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
        $__internal_caa1919d06eff12b587b6f1b2c186c94c18a19ee1c3c57926bd194b63f12decf = $this->env->getExtension("native_profiler");
        $__internal_caa1919d06eff12b587b6f1b2c186c94c18a19ee1c3c57926bd194b63f12decf->enter($__internal_caa1919d06eff12b587b6f1b2c186c94c18a19ee1c3c57926bd194b63f12decf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MobileBundle:vista:perfilUsuario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_caa1919d06eff12b587b6f1b2c186c94c18a19ee1c3c57926bd194b63f12decf->leave($__internal_caa1919d06eff12b587b6f1b2c186c94c18a19ee1c3c57926bd194b63f12decf_prof);

    }

    // line 3
    public function block_tituloPagina($context, array $blocks = array())
    {
        $__internal_4a33b6839ec593c9d5c0c1cfaf21da0417dbd989b48c681e386c6f7a7da9a70b = $this->env->getExtension("native_profiler");
        $__internal_4a33b6839ec593c9d5c0c1cfaf21da0417dbd989b48c681e386c6f7a7da9a70b->enter($__internal_4a33b6839ec593c9d5c0c1cfaf21da0417dbd989b48c681e386c6f7a7da9a70b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tituloPagina"));

        // line 4
        echo "\tPerfil de Usuario
";
        
        $__internal_4a33b6839ec593c9d5c0c1cfaf21da0417dbd989b48c681e386c6f7a7da9a70b->leave($__internal_4a33b6839ec593c9d5c0c1cfaf21da0417dbd989b48c681e386c6f7a7da9a70b_prof);

    }

    // line 7
    public function block_contenidoPerfil($context, array $blocks = array())
    {
        $__internal_a04af054d5f8d6a24e57581afc0fa63abf1a72904857972177afbbb8a9b03afb = $this->env->getExtension("native_profiler");
        $__internal_a04af054d5f8d6a24e57581afc0fa63abf1a72904857972177afbbb8a9b03afb->enter($__internal_a04af054d5f8d6a24e57581afc0fa63abf1a72904857972177afbbb8a9b03afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoPerfil"));

        // line 8
        echo "
\t<div id=\"contenidoPerfilUsuario\" class=\"contenidoPerfiles\">
\t\t<table class=\"tablaPerfiles\">
\t\t\t<tr colspan=\"3\">
\t\t\t\t<td>
\t\t\t\t\t<img src='";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenPerfilUsuario"]) ? $context["rutaImagenPerfilUsuario"] : $this->getContext($context, "rutaImagenPerfilUsuario"))), "html", null, true);
        echo "' class=\"imagenPerfil\"></img>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"tdPerfiles\">Nombre: </td>
\t\t\t\t<td class=\"tdDatos\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datospersonales"]) ? $context["datospersonales"] : $this->getContext($context, "datospersonales")), "nombrePersonal", array()), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"tdPerfiles\">Apellidos: </td>
\t\t\t\t<td class=\"tdDatos\">";
        // line 22
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["datospersonales"]) ? $context["datospersonales"] : $this->getContext($context, "datospersonales")), "apellido1Personal", array()) . "  ") . $this->getAttribute((isset($context["datospersonales"]) ? $context["datospersonales"] : $this->getContext($context, "datospersonales")), "apellido2Personal", array())), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"tdPerfiles\">Sexo: </td>
\t\t\t\t<td class=\"tdDatos\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datospersonales"]) ? $context["datospersonales"] : $this->getContext($context, "datospersonales")), "sexoPersonal", array()), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"tdPerfiles\">Nacimiento: </td>
\t\t\t\t<td class=\"tdDatos\">";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["datospersonales"]) ? $context["datospersonales"] : $this->getContext($context, "datospersonales")), "fechaNacimientoPersonal", array()), "d/m/Y"), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"tdPerfiles\">DNI: </td>
\t\t\t\t<td class=\"tdDatos\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datospersonales"]) ? $context["datospersonales"] : $this->getContext($context, "datospersonales")), "DNIPersonal", array()), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"tdPerfiles\">Teléfono: </td>
\t\t\t\t<td class=\"tdDatos\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datospersonales"]) ? $context["datospersonales"] : $this->getContext($context, "datospersonales")), "telefonoPersonal", array()), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"tdPerfiles\">Mail: </td>
\t\t\t\t<td class=\"tdDatos\">";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datospersonales"]) ? $context["datospersonales"] : $this->getContext($context, "datospersonales")), "correoPersonal", array()), "html", null, true);
        echo "</td>
\t\t\t</tr>

\t\t\t";
        // line 45
        if ((twig_length_filter($this->env, (isset($context["negocios"]) ? $context["negocios"] : $this->getContext($context, "negocios"))) > 0)) {
            // line 46
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\" class=\"tdPerfiles barraSeparacion\">---------------------</td>
\t\t\t\t</tr>
\t\t\t\t";
            // line 49
            $context["contador"] = 0;
            // line 50
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["negocios"]) ? $context["negocios"] : $this->getContext($context, "negocios")));
            foreach ($context['_seq'] as $context["_key"] => $context["negocio"]) {
                // line 51
                echo "\t\t\t\t\t
\t\t\t\t\t<tr>\t
\t\t\t\t\t\t<td class=\"tdPerfiles\" colspan=\"2\" ><span id=\"";
                // line 53
                echo twig_escape_filter($this->env, sprintf("negocio%d", (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador"))), "html", null, true);
                echo "\" title=\"Click para acceder a la página del negocio\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["negocio"], "nombreNegocio", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t<input type=\"image\" class=\"fotoNegocio\" style=\"width: 30%; height: auto; float: right; border-radius: 100px; margin-top: -20px;\" src=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((((("DirectoriosUsuarios/" . $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "userName", array())) . "/Negocios/") . $this->getAttribute($context["negocio"], "nombreNegocio", array())) . ".jpg")), "html", null, true);
                echo "\" onclick=\"location.href='";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mobile_perfilnegocio", array("idNegocio" => $this->getAttribute($context["negocio"], "idNegocio", array()), "idUsuario" => $this->getAttribute($context["negocio"], "idUsuario", array()))), "html", null, true);
                echo "';\"/>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t
\t\t\t\t\t</tr>
\t\t\t\t\t";
                // line 58
                $context["contador"] = ((isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")) + 1);
                // line 59
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['negocio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "\t\t\t";
        }
        // line 61
        echo "
\t\t\t";
        // line 62
        if ((twig_length_filter($this->env, (isset($context["ofertasCliente"]) ? $context["ofertasCliente"] : $this->getContext($context, "ofertasCliente"))) > 0)) {
            // line 63
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\" class=\"tdPerfiles barraSeparacion\">---------------------</td>
\t\t\t\t</tr>
\t\t\t\t";
            // line 66
            $context["contador"] = 0;
            // line 67
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ofertasCliente"]) ? $context["ofertasCliente"] : $this->getContext($context, "ofertasCliente")));
            foreach ($context['_seq'] as $context["_key"] => $context["ofertaCliente"]) {
                // line 68
                echo "\t\t\t\t\t
\t\t\t\t\t<tr>\t
\t\t\t\t\t\t<td class=\"tdPerfiles\" ><span id=\"";
                // line 70
                echo twig_escape_filter($this->env, sprintf("ofertaCliente%d", (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador"))), "html", null, true);
                echo "\" title=\"Click para ver el PDF de la oferta\" onclick=\"location.href='";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pc_crearpdf", array("idOferta" => $this->getAttribute($this->getAttribute($context["ofertaCliente"], "getOfertas", array(), "method"), "idOfertas", array()), "idUsuario" => $this->getAttribute($this->getAttribute($context["ofertaCliente"], "getUsuarios", array(), "method"), "userName", array()))), "html", null, true);
                echo "';\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ofertaCliente"], "getOfertas", array(), "method"), "descripcionOfertas", array()), "html", null, true);
                echo "</span></td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
                // line 72
                $context["contador"] = ((isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")) + 1);
                // line 73
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ofertaCliente'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "\t\t\t";
        }
        // line 75
        echo "
\t\t</table>
\t</div>

";
        
        $__internal_a04af054d5f8d6a24e57581afc0fa63abf1a72904857972177afbbb8a9b03afb->leave($__internal_a04af054d5f8d6a24e57581afc0fa63abf1a72904857972177afbbb8a9b03afb_prof);

    }

    // line 81
    public function block_contenidoFooterPerfil($context, array $blocks = array())
    {
        $__internal_ae388e01f66f0c0274d4f6556e8c8a95c2b73f80b45b469bcf8a55e1467d6dff = $this->env->getExtension("native_profiler");
        $__internal_ae388e01f66f0c0274d4f6556e8c8a95c2b73f80b45b469bcf8a55e1467d6dff->enter($__internal_ae388e01f66f0c0274d4f6556e8c8a95c2b73f80b45b469bcf8a55e1467d6dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoFooterPerfil"));

        // line 82
        echo "\t<ul data-role=\"listview\" data-inset=\"true\" style=\"display: ";
        echo twig_escape_filter($this->env, (isset($context["cerrarSesion"]) ? $context["cerrarSesion"] : $this->getContext($context, "cerrarSesion")), "html", null, true);
        echo "\">
\t\t<li><a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("mobile_cerrarsesion");
        echo "\" data-transition=\"fade\">Terminar la Sesión</a></li>
\t</ul>
";
        
        $__internal_ae388e01f66f0c0274d4f6556e8c8a95c2b73f80b45b469bcf8a55e1467d6dff->leave($__internal_ae388e01f66f0c0274d4f6556e8c8a95c2b73f80b45b469bcf8a55e1467d6dff_prof);

    }

    public function getTemplateName()
    {
        return "MobileBundle:vista:perfilUsuario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 83,  221 => 82,  215 => 81,  204 => 75,  201 => 74,  195 => 73,  193 => 72,  184 => 70,  180 => 68,  175 => 67,  173 => 66,  168 => 63,  166 => 62,  163 => 61,  160 => 60,  154 => 59,  152 => 58,  143 => 54,  137 => 53,  133 => 51,  128 => 50,  126 => 49,  121 => 46,  119 => 45,  113 => 42,  106 => 38,  99 => 34,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  63 => 13,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
