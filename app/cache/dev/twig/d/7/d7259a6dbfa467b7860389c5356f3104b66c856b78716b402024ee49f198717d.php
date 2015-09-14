<?php

/* PCBundle:vista:perfilNegocio.html.twig */
class __TwigTemplate_d7259a6dbfa467b7860389c5356f3104b66c856b78716b402024ee49f198717d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCBundle::plantillaPerfilesNegocios.html.twig", "PCBundle:vista:perfilNegocio.html.twig", 1);
        $this->blocks = array(
            'titlePerfiles' => array($this, 'block_titlePerfiles'),
            'idCuerpoPerfil' => array($this, 'block_idCuerpoPerfil'),
            'urlDestino' => array($this, 'block_urlDestino'),
            'urlDestino2' => array($this, 'block_urlDestino2'),
            'inputHidden' => array($this, 'block_inputHidden'),
            'hiddenPerfiles' => array($this, 'block_hiddenPerfiles'),
            'tablaDatosPerfil' => array($this, 'block_tablaDatosPerfil'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PCBundle::plantillaPerfilesNegocios.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23730aa4834ad15ebffc082ee23e669f58dccf969c3b27259366730e2afb8f79 = $this->env->getExtension("native_profiler");
        $__internal_23730aa4834ad15ebffc082ee23e669f58dccf969c3b27259366730e2afb8f79->enter($__internal_23730aa4834ad15ebffc082ee23e669f58dccf969c3b27259366730e2afb8f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle:vista:perfilNegocio.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23730aa4834ad15ebffc082ee23e669f58dccf969c3b27259366730e2afb8f79->leave($__internal_23730aa4834ad15ebffc082ee23e669f58dccf969c3b27259366730e2afb8f79_prof);

    }

    // line 3
    public function block_titlePerfiles($context, array $blocks = array())
    {
        $__internal_025db9560f9add73d65ba255f884bb2fc0047b8d001b9a7aa9037dd261ffea3c = $this->env->getExtension("native_profiler");
        $__internal_025db9560f9add73d65ba255f884bb2fc0047b8d001b9a7aa9037dd261ffea3c->enter($__internal_025db9560f9add73d65ba255f884bb2fc0047b8d001b9a7aa9037dd261ffea3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlePerfiles"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["negocio"]) ? $context["negocio"] : $this->getContext($context, "negocio")), "nombreNegocio", array()), "html", null, true);
        echo "
";
        
        $__internal_025db9560f9add73d65ba255f884bb2fc0047b8d001b9a7aa9037dd261ffea3c->leave($__internal_025db9560f9add73d65ba255f884bb2fc0047b8d001b9a7aa9037dd261ffea3c_prof);

    }

    // line 7
    public function block_idCuerpoPerfil($context, array $blocks = array())
    {
        $__internal_18ddb9dc072eaa363aa45c859fe2afc11f9810b7af593edf4f57b0af2f531af6 = $this->env->getExtension("native_profiler");
        $__internal_18ddb9dc072eaa363aa45c859fe2afc11f9810b7af593edf4f57b0af2f531af6->enter($__internal_18ddb9dc072eaa363aa45c859fe2afc11f9810b7af593edf4f57b0af2f531af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "idCuerpoPerfil"));

        // line 8
        echo "cuerpoPerfilNegocio";
        
        $__internal_18ddb9dc072eaa363aa45c859fe2afc11f9810b7af593edf4f57b0af2f531af6->leave($__internal_18ddb9dc072eaa363aa45c859fe2afc11f9810b7af593edf4f57b0af2f531af6_prof);

    }

    // line 10
    public function block_urlDestino($context, array $blocks = array())
    {
        $__internal_206d472144e24770e219f5f4aaeb6fcf9af8f1164996a699adb6a260761348be = $this->env->getExtension("native_profiler");
        $__internal_206d472144e24770e219f5f4aaeb6fcf9af8f1164996a699adb6a260761348be->enter($__internal_206d472144e24770e219f5f4aaeb6fcf9af8f1164996a699adb6a260761348be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino"));

        // line 11
        echo "\t'";
        echo $this->env->getExtension('routing')->getPath("pc_perfilusuario");
        echo "'
";
        
        $__internal_206d472144e24770e219f5f4aaeb6fcf9af8f1164996a699adb6a260761348be->leave($__internal_206d472144e24770e219f5f4aaeb6fcf9af8f1164996a699adb6a260761348be_prof);

    }

    // line 14
    public function block_urlDestino2($context, array $blocks = array())
    {
        $__internal_ed6de42588eadd3bb4af47d6749bcd3e5a675e192bde711940b0f523d21812b4 = $this->env->getExtension("native_profiler");
        $__internal_ed6de42588eadd3bb4af47d6749bcd3e5a675e192bde711940b0f523d21812b4->enter($__internal_ed6de42588eadd3bb4af47d6749bcd3e5a675e192bde711940b0f523d21812b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino2"));

        // line 15
        echo "\t'";
        echo $this->env->getExtension('routing')->getPath("pc_nuevoregistroproductos");
        echo "'
";
        
        $__internal_ed6de42588eadd3bb4af47d6749bcd3e5a675e192bde711940b0f523d21812b4->leave($__internal_ed6de42588eadd3bb4af47d6749bcd3e5a675e192bde711940b0f523d21812b4_prof);

    }

    // line 19
    public function block_inputHidden($context, array $blocks = array())
    {
        $__internal_dd44880c711dfffa7d6c1983176282fbb2e56d3b17e1faf3d20ea296e27747db = $this->env->getExtension("native_profiler");
        $__internal_dd44880c711dfffa7d6c1983176282fbb2e56d3b17e1faf3d20ea296e27747db->enter($__internal_dd44880c711dfffa7d6c1983176282fbb2e56d3b17e1faf3d20ea296e27747db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inputHidden"));

        // line 20
        echo "\t<input type=\"hidden\" name=\"codigoLoginPerfilNegocio\" value=\"1000at200j\">
";
        
        $__internal_dd44880c711dfffa7d6c1983176282fbb2e56d3b17e1faf3d20ea296e27747db->leave($__internal_dd44880c711dfffa7d6c1983176282fbb2e56d3b17e1faf3d20ea296e27747db_prof);

    }

    // line 24
    public function block_hiddenPerfiles($context, array $blocks = array())
    {
        $__internal_323c883ffdeb4ee42694539fd65fbac825a9ae1c6b7fee55f1241b8fcc2f48c7 = $this->env->getExtension("native_profiler");
        $__internal_323c883ffdeb4ee42694539fd65fbac825a9ae1c6b7fee55f1241b8fcc2f48c7->enter($__internal_323c883ffdeb4ee42694539fd65fbac825a9ae1c6b7fee55f1241b8fcc2f48c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hiddenPerfiles"));

        // line 25
        echo "\t<input type=\"hidden\" name=\"codigoPerfilNegocio\" value=\"1000at200j\">
";
        
        $__internal_323c883ffdeb4ee42694539fd65fbac825a9ae1c6b7fee55f1241b8fcc2f48c7->leave($__internal_323c883ffdeb4ee42694539fd65fbac825a9ae1c6b7fee55f1241b8fcc2f48c7_prof);

    }

    // line 30
    public function block_tablaDatosPerfil($context, array $blocks = array())
    {
        $__internal_8dc5a0bc4fa321857500f9c4155115f96d2f88197b09afbccf15562bc52a77d3 = $this->env->getExtension("native_profiler");
        $__internal_8dc5a0bc4fa321857500f9c4155115f96d2f88197b09afbccf15562bc52a77d3->enter($__internal_8dc5a0bc4fa321857500f9c4155115f96d2f88197b09afbccf15562bc52a77d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tablaDatosPerfil"));

        // line 31
        echo "
\t<table id=\"tablaDatosNegocios\">
\t\t<tr>
\t\t\t<td>Nombre: </td>
\t\t\t<td><span class=\"textoDatoNegocio\" id=\"spanNombreNegocio\" >";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["negocio"]) ? $context["negocio"] : $this->getContext($context, "negocio")), "nombreNegocio", array()), "html", null, true);
        echo "</span></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Dirección: </td>
\t\t\t<td><span class=\"textoDatoNegocio\" id=\"spanDireccionNegocio\">";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["negocio"]) ? $context["negocio"] : $this->getContext($context, "negocio")), "direccionNegocio", array()), "html", null, true);
        echo "</span></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Ciudad: </td>
\t\t\t<td><span class=\"textoDatoNegocio\" id=\"spanCiudadNegocio\">";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["negocio"]) ? $context["negocio"] : $this->getContext($context, "negocio")), "ciudadNegocio", array()), "html", null, true);
        echo "</span></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Teléfono: </td>
\t\t\t<td><span class=\"textoDatoNegocio\" id=\"spanSexo\">";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["negocio"]) ? $context["negocio"] : $this->getContext($context, "negocio")), "telefonoNegocio", array()), "html", null, true);
        echo "</span></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Correo: </td>
\t\t\t<td><span class=\"textoDatoNegocio\" id=\"spanCorreoNegocio\">";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["negocio"]) ? $context["negocio"] : $this->getContext($context, "negocio")), "correoNegocio", array()), "html", null, true);
        echo "</span></td>
\t\t</tr>


\t\t";
        // line 55
        if ((twig_length_filter($this->env, (isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos"))) > 0)) {
            // line 56
            echo "\t\t\t<tr>
\t\t\t\t<td colspan=\"2\" class=\"barraSeparacion\">-----------</td>
\t\t\t</tr>
\t\t\t";
            // line 59
            $context["contador"] = 0;
            // line 60
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
            foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
                // line 61
                echo "\t\t\t\t
\t\t\t\t<tr>\t
\t\t\t\t\t<td></td>
\t\t\t\t\t<td><span id=\"";
                // line 64
                echo twig_escape_filter($this->env, sprintf("productos%d", (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador"))), "html", null, true);
                echo "\" class=\"textoDatoPersonal textoNegocio\" title=\"Click para acceder a la página del producto\" onclick=\"location.href='";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pc_perfilproducto", array("nombreProducto" => $this->getAttribute($context["producto"], "nombreProducto", array()), "idNegocio" => $this->getAttribute($context["producto"], "idNegocio", array()))), "html", null, true);
                echo "';\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "nombreProducto", array()), "html", null, true);
                echo "</span></td>
\t\t\t\t</tr>
\t\t\t\t";
                // line 66
                $context["contador"] = ((isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")) + 1);
                // line 67
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "\t\t";
        }
        // line 69
        echo "\t\t\t\t\t
\t</table>

";
        
        $__internal_8dc5a0bc4fa321857500f9c4155115f96d2f88197b09afbccf15562bc52a77d3->leave($__internal_8dc5a0bc4fa321857500f9c4155115f96d2f88197b09afbccf15562bc52a77d3_prof);

    }

    public function getTemplateName()
    {
        return "PCBundle:vista:perfilNegocio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 69,  212 => 68,  206 => 67,  204 => 66,  195 => 64,  190 => 61,  185 => 60,  183 => 59,  178 => 56,  176 => 55,  169 => 51,  162 => 47,  155 => 43,  148 => 39,  141 => 35,  135 => 31,  129 => 30,  121 => 25,  115 => 24,  107 => 20,  101 => 19,  91 => 15,  85 => 14,  75 => 11,  69 => 10,  62 => 8,  56 => 7,  46 => 4,  40 => 3,  11 => 1,);
    }
}
