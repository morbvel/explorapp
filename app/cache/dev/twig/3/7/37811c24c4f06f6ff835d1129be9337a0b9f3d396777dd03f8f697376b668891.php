<?php

/* PCBundle:vista:perfilUsuario.html.twig */
class __TwigTemplate_37811c24c4f06f6ff835d1129be9337a0b9f3d396777dd03f8f697376b668891 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCBundle::plantillaPerfiles.html.twig", "PCBundle:vista:perfilUsuario.html.twig", 1);
        $this->blocks = array(
            'titlePerfiles' => array($this, 'block_titlePerfiles'),
            'idCuerpoPerfil' => array($this, 'block_idCuerpoPerfil'),
            'urlDestino' => array($this, 'block_urlDestino'),
            'hiddenPerfiles' => array($this, 'block_hiddenPerfiles'),
            'tablaDatosPerfil' => array($this, 'block_tablaDatosPerfil'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PCBundle::plantillaPerfiles.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49a95faf9d61bfa4d5086e3f08b77877a2b6db77ffeb3fd73277ab1097e3a029 = $this->env->getExtension("native_profiler");
        $__internal_49a95faf9d61bfa4d5086e3f08b77877a2b6db77ffeb3fd73277ab1097e3a029->enter($__internal_49a95faf9d61bfa4d5086e3f08b77877a2b6db77ffeb3fd73277ab1097e3a029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle:vista:perfilUsuario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49a95faf9d61bfa4d5086e3f08b77877a2b6db77ffeb3fd73277ab1097e3a029->leave($__internal_49a95faf9d61bfa4d5086e3f08b77877a2b6db77ffeb3fd73277ab1097e3a029_prof);

    }

    // line 4
    public function block_titlePerfiles($context, array $blocks = array())
    {
        $__internal_c60828f1f1ad4b1aec0705d97d64c9943c6ce756824e64c07c507a3acc584e7e = $this->env->getExtension("native_profiler");
        $__internal_c60828f1f1ad4b1aec0705d97d64c9943c6ce756824e64c07c507a3acc584e7e->enter($__internal_c60828f1f1ad4b1aec0705d97d64c9943c6ce756824e64c07c507a3acc584e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlePerfiles"));

        // line 5
        echo "\tPerfil de Usuario
";
        
        $__internal_c60828f1f1ad4b1aec0705d97d64c9943c6ce756824e64c07c507a3acc584e7e->leave($__internal_c60828f1f1ad4b1aec0705d97d64c9943c6ce756824e64c07c507a3acc584e7e_prof);

    }

    // line 9
    public function block_idCuerpoPerfil($context, array $blocks = array())
    {
        $__internal_709e82e15d6b0139f74e93819575915bb2410dac9264526a834ef658ece10515 = $this->env->getExtension("native_profiler");
        $__internal_709e82e15d6b0139f74e93819575915bb2410dac9264526a834ef658ece10515->enter($__internal_709e82e15d6b0139f74e93819575915bb2410dac9264526a834ef658ece10515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "idCuerpoPerfil"));

        // line 10
        echo "cuerpoPerfilUsuario";
        
        $__internal_709e82e15d6b0139f74e93819575915bb2410dac9264526a834ef658ece10515->leave($__internal_709e82e15d6b0139f74e93819575915bb2410dac9264526a834ef658ece10515_prof);

    }

    // line 13
    public function block_urlDestino($context, array $blocks = array())
    {
        $__internal_222af50f60795bd73151272b0d13c93fea1bc4c7ddffbc54607375e993db5ca7 = $this->env->getExtension("native_profiler");
        $__internal_222af50f60795bd73151272b0d13c93fea1bc4c7ddffbc54607375e993db5ca7->enter($__internal_222af50f60795bd73151272b0d13c93fea1bc4c7ddffbc54607375e993db5ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino"));

        // line 14
        echo "'";
        echo $this->env->getExtension('routing')->getPath("pc_perfilusuario");
        echo "'";
        
        $__internal_222af50f60795bd73151272b0d13c93fea1bc4c7ddffbc54607375e993db5ca7->leave($__internal_222af50f60795bd73151272b0d13c93fea1bc4c7ddffbc54607375e993db5ca7_prof);

    }

    // line 20
    public function block_hiddenPerfiles($context, array $blocks = array())
    {
        $__internal_c3f12be0f2db0c968bce645db0844bfe194bf45b0cc1badde365ae015d695bf7 = $this->env->getExtension("native_profiler");
        $__internal_c3f12be0f2db0c968bce645db0844bfe194bf45b0cc1badde365ae015d695bf7->enter($__internal_c3f12be0f2db0c968bce645db0844bfe194bf45b0cc1badde365ae015d695bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hiddenPerfiles"));

        // line 21
        echo "\t<input type=\"hidden\" name=\"codigoPerfilUsuario\" value=\"1000at200j\">
";
        
        $__internal_c3f12be0f2db0c968bce645db0844bfe194bf45b0cc1badde365ae015d695bf7->leave($__internal_c3f12be0f2db0c968bce645db0844bfe194bf45b0cc1badde365ae015d695bf7_prof);

    }

    // line 25
    public function block_tablaDatosPerfil($context, array $blocks = array())
    {
        $__internal_4685a233251d9d1a750bbfaf9861402aad73aca31c57b1537069a700eefc6a7b = $this->env->getExtension("native_profiler");
        $__internal_4685a233251d9d1a750bbfaf9861402aad73aca31c57b1537069a700eefc6a7b->enter($__internal_4685a233251d9d1a750bbfaf9861402aad73aca31c57b1537069a700eefc6a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tablaDatosPerfil"));

        // line 26
        echo "
\t<table id=\"tablaDatosPersonales\">
\t\t<tr>
\t\t\t<td>Nombre: </td>
\t\t\t<td><span class=\"textoDatoPersonal\" id=\"spanNombre\" >";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datospersonales"]) ? $context["datospersonales"] : $this->getContext($context, "datospersonales")), "nombrePersonal", array()), "html", null, true);
        echo "</span></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Apellidos: </td>
\t\t\t<td><span class=\"textoDatoPersonal\" id=\"spanApellido\">";
        // line 34
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["datospersonales"]) ? $context["datospersonales"] : $this->getContext($context, "datospersonales")), "apellido1Personal", array()) . "  ") . $this->getAttribute((isset($context["datospersonales"]) ? $context["datospersonales"] : $this->getContext($context, "datospersonales")), "apellido2Personal", array())), "html", null, true);
        echo "</span></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Sexo: </td>
\t\t\t<td><span class=\"textoDatoPersonal\" id=\"spanSexo\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datospersonales"]) ? $context["datospersonales"] : $this->getContext($context, "datospersonales")), "sexoPersonal", array()), "html", null, true);
        echo "</span></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Fecha de Nacimiento: </td>
\t\t\t<td><span class=\"textoDatoPersonal\" id=\"spanFechaNacimiento\">";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["datospersonales"]) ? $context["datospersonales"] : $this->getContext($context, "datospersonales")), "fechaNacimientoPersonal", array()), "d/m/Y"), "html", null, true);
        echo "</span></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>DNI: </td>
\t\t\t<td><span class=\"textoDatoPersonal\" id=\"spanDNI\">";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datospersonales"]) ? $context["datospersonales"] : $this->getContext($context, "datospersonales")), "DNIPersonal", array()), "html", null, true);
        echo "</span></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Tel&eacute;fono: </td>
\t\t\t<td><span class=\"textoDatoPersonal\" id=\"spanTelefono\">";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datospersonales"]) ? $context["datospersonales"] : $this->getContext($context, "datospersonales")), "telefonoPersonal", array()), "html", null, true);
        echo "</span></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td colspan=\"2\" class=\"barraSeparacion\">-----------</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Correo Electr&oacute;nico: </td>
\t\t\t<td><span class=\"textoDatoPersonal colorOscuro\">";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datospersonales"]) ? $context["datospersonales"] : $this->getContext($context, "datospersonales")), "correoPersonal", array()), "html", null, true);
        echo "</span></td></tr>
\t\t<tr>
\t\t\t<td>Contraseña: </td>
\t\t\t<td><span id=\"contrasena\" class=\"textoDatoPersonal colorOscuro contrasena\" title=\"Haga click para mostrar la contraseña\" onclick=\"showPass()\" >*************</span></td>
\t\t</tr>
\t\t
\t\t";
        // line 63
        if ((twig_length_filter($this->env, (isset($context["negocios"]) ? $context["negocios"] : $this->getContext($context, "negocios"))) > 0)) {
            // line 64
            echo "\t\t\t<tr>
\t\t\t\t<td colspan=\"2\" class=\"barraSeparacion\">-----------</td>
\t\t\t</tr>
\t\t\t";
            // line 67
            $context["contador"] = 0;
            // line 68
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["negocios"]) ? $context["negocios"] : $this->getContext($context, "negocios")));
            foreach ($context['_seq'] as $context["_key"] => $context["negocio"]) {
                // line 69
                echo "\t\t\t\t
\t\t\t\t<tr>\t
\t\t\t\t\t<td></td>
\t\t\t\t\t<td><span id=\"";
                // line 72
                echo twig_escape_filter($this->env, sprintf("negocio%d", (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador"))), "html", null, true);
                echo "\" class=\"textoDatoPersonal textoNegocio\" title=\"Click para acceder a la página del negocio\" onclick=\"location.href='";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pc_perfilnegocio", array("idNegocio" => $this->getAttribute($context["negocio"], "idNegocio", array()), "idUsuario" => $this->getAttribute($context["negocio"], "idUsuario", array()))), "html", null, true);
                echo "';\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["negocio"], "nombreNegocio", array()), "html", null, true);
                echo "</span></td>
\t\t\t\t</tr>
\t\t\t\t";
                // line 74
                $context["contador"] = ((isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")) + 1);
                // line 75
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['negocio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "\t\t";
        }
        // line 77
        echo "


\t\t";
        // line 80
        if ((twig_length_filter($this->env, (isset($context["ofertasCliente"]) ? $context["ofertasCliente"] : $this->getContext($context, "ofertasCliente"))) > 0)) {
            // line 81
            echo "\t\t\t<tr>
\t\t\t\t<td colspan=\"2\" class=\"barraSeparacion\">-----------</td>
\t\t\t</tr>
\t\t\t";
            // line 84
            $context["contador"] = 0;
            // line 85
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ofertasCliente"]) ? $context["ofertasCliente"] : $this->getContext($context, "ofertasCliente")));
            foreach ($context['_seq'] as $context["_key"] => $context["ofertaCliente"]) {
                // line 86
                echo "\t\t\t\t
\t\t\t\t<tr>\t
\t\t\t\t\t<td></td>
\t\t\t\t\t<td><span id=\"";
                // line 89
                echo twig_escape_filter($this->env, sprintf("ofertaCliente%d", (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador"))), "html", null, true);
                echo "\" class=\"textoDatoPersonal textoNegocio\" style=\"margin-right: 100px;\" title=\"Click para ver el PDF de la oferta\" onclick=\"location.href='";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pc_crearpdf", array("idOferta" => $this->getAttribute($this->getAttribute($context["ofertaCliente"], "getOfertas", array(), "method"), "idOfertas", array()), "idUsuario" => $this->getAttribute($this->getAttribute($context["ofertaCliente"], "getUsuarios", array(), "method"), "userName", array()))), "html", null, true);
                echo "';\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ofertaCliente"], "getOfertas", array(), "method"), "descripcionOfertas", array()), "html", null, true);
                echo "</span></td>
\t\t\t\t</tr>
\t\t\t\t";
                // line 91
                $context["contador"] = ((isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")) + 1);
                // line 92
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ofertaCliente'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "\t\t";
        }
        echo "\t\t
\t\t\t\t\t
</table>

";
        
        $__internal_4685a233251d9d1a750bbfaf9861402aad73aca31c57b1537069a700eefc6a7b->leave($__internal_4685a233251d9d1a750bbfaf9861402aad73aca31c57b1537069a700eefc6a7b_prof);

    }

    public function getTemplateName()
    {
        return "PCBundle:vista:perfilUsuario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 93,  234 => 92,  232 => 91,  223 => 89,  218 => 86,  213 => 85,  211 => 84,  206 => 81,  204 => 80,  199 => 77,  196 => 76,  190 => 75,  188 => 74,  179 => 72,  174 => 69,  169 => 68,  167 => 67,  162 => 64,  160 => 63,  151 => 57,  141 => 50,  134 => 46,  127 => 42,  120 => 38,  113 => 34,  106 => 30,  100 => 26,  94 => 25,  86 => 21,  80 => 20,  71 => 14,  65 => 13,  58 => 10,  52 => 9,  44 => 5,  38 => 4,  11 => 1,);
    }
}
