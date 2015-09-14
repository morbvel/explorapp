<?php

/* PCBundle:vista:perfilUsuario.html.twig */
class __TwigTemplate_51e397f61dbfa96ad4d003c592cea024b43a1c87bd420143c0dd11e2e478949d extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_titlePerfiles($context, array $blocks = array())
    {
        // line 5
        echo "\tPerfil de Usuario
";
    }

    // line 9
    public function block_idCuerpoPerfil($context, array $blocks = array())
    {
        // line 10
        echo "cuerpoPerfilUsuario";
    }

    // line 13
    public function block_urlDestino($context, array $blocks = array())
    {
        // line 14
        echo "'";
        echo $this->env->getExtension('routing')->getPath("pc_perfilusuario");
        echo "'";
    }

    // line 20
    public function block_hiddenPerfiles($context, array $blocks = array())
    {
        // line 21
        echo "\t<input type=\"hidden\" name=\"codigoPerfilUsuario\" value=\"1000at200j\">
";
    }

    // line 25
    public function block_tablaDatosPerfil($context, array $blocks = array())
    {
        // line 26
        echo "
\t<table id=\"tablaDatosPersonales\">
\t\t<tr>
\t\t\t<td>Nombre: </td>
\t\t\t<td><span class=\"textoDatoPersonal\" id=\"spanNombre\" >";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datospersonales"]) ? $context["datospersonales"] : null), "nombrePersonal", array()), "html", null, true);
        echo "</span></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Apellidos: </td>
\t\t\t<td><span class=\"textoDatoPersonal\" id=\"spanApellido\">";
        // line 34
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["datospersonales"]) ? $context["datospersonales"] : null), "apellido1Personal", array()) . "  ") . $this->getAttribute((isset($context["datospersonales"]) ? $context["datospersonales"] : null), "apellido2Personal", array())), "html", null, true);
        echo "</span></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Sexo: </td>
\t\t\t<td><span class=\"textoDatoPersonal\" id=\"spanSexo\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datospersonales"]) ? $context["datospersonales"] : null), "sexoPersonal", array()), "html", null, true);
        echo "</span></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Fecha de Nacimiento: </td>
\t\t\t<td><span class=\"textoDatoPersonal\" id=\"spanFechaNacimiento\">";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["datospersonales"]) ? $context["datospersonales"] : null), "fechaNacimientoPersonal", array()), "d/m/Y"), "html", null, true);
        echo "</span></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>DNI: </td>
\t\t\t<td><span class=\"textoDatoPersonal\" id=\"spanDNI\">";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datospersonales"]) ? $context["datospersonales"] : null), "DNIPersonal", array()), "html", null, true);
        echo "</span></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Tel&eacute;fono: </td>
\t\t\t<td><span class=\"textoDatoPersonal\" id=\"spanTelefono\">";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datospersonales"]) ? $context["datospersonales"] : null), "telefonoPersonal", array()), "html", null, true);
        echo "</span></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td colspan=\"2\" class=\"barraSeparacion\">-----------</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Correo Electr&oacute;nico: </td>
\t\t\t<td><span class=\"textoDatoPersonal colorOscuro\">";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datospersonales"]) ? $context["datospersonales"] : null), "correoPersonal", array()), "html", null, true);
        echo "</span></td></tr>
\t\t<tr>
\t\t\t<td>Contraseña: </td>
\t\t\t<td><span id=\"contrasena\" class=\"textoDatoPersonal colorOscuro contrasena\" title=\"Haga click para mostrar la contraseña\" onclick=\"showPass()\" >*************</span></td>
\t\t</tr>
\t\t
\t\t";
        // line 63
        if ((twig_length_filter($this->env, (isset($context["negocios"]) ? $context["negocios"] : null)) > 0)) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["negocios"]) ? $context["negocios"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["negocio"]) {
                // line 69
                echo "\t\t\t\t
\t\t\t\t<tr>\t
\t\t\t\t\t<td></td>
\t\t\t\t\t<td><span id=\"";
                // line 72
                echo twig_escape_filter($this->env, sprintf("negocio%d", (isset($context["contador"]) ? $context["contador"] : null)), "html", null, true);
                echo "\" class=\"textoDatoPersonal textoNegocio\" title=\"Click para acceder a la página del negocio\" onclick=\"location.href='";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pc_perfilnegocio", array("nombreNegocio" => $this->getAttribute($context["negocio"], "nombreNegocio", array()), "idUsuario" => $this->getAttribute($context["negocio"], "idUsuario", array()))), "html", null, true);
                echo "';\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["negocio"], "nombreNegocio", array()), "html", null, true);
                echo "</span></td>
\t\t\t\t</tr>
\t\t\t\t";
                // line 74
                $context["contador"] = ((isset($context["contador"]) ? $context["contador"] : null) + 1);
                // line 75
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['negocio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "\t\t";
        }
        echo "\t\t
\t\t\t\t\t
</table>

";
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
        return array (  163 => 76,  157 => 75,  155 => 74,  146 => 72,  141 => 69,  136 => 68,  134 => 67,  129 => 64,  127 => 63,  118 => 57,  108 => 50,  101 => 46,  94 => 42,  87 => 38,  80 => 34,  73 => 30,  67 => 26,  64 => 25,  59 => 21,  56 => 20,  50 => 14,  47 => 13,  43 => 10,  40 => 9,  35 => 5,  32 => 4,  11 => 1,);
    }
}
