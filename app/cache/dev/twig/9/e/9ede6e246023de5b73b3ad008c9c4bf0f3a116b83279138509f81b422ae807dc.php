<?php

/* PCBundle:vista:perfilNegocio.html.twig */
class __TwigTemplate_9ede6e246023de5b73b3ad008c9c4bf0f3a116b83279138509f81b422ae807dc extends Twig_Template
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
        $__internal_b51e9b0eeb8fde1ae5f9584e02dc64182b30b14f2e636f21e7b1f5d73148d011 = $this->env->getExtension("native_profiler");
        $__internal_b51e9b0eeb8fde1ae5f9584e02dc64182b30b14f2e636f21e7b1f5d73148d011->enter($__internal_b51e9b0eeb8fde1ae5f9584e02dc64182b30b14f2e636f21e7b1f5d73148d011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle:vista:perfilNegocio.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b51e9b0eeb8fde1ae5f9584e02dc64182b30b14f2e636f21e7b1f5d73148d011->leave($__internal_b51e9b0eeb8fde1ae5f9584e02dc64182b30b14f2e636f21e7b1f5d73148d011_prof);

    }

    // line 3
    public function block_titlePerfiles($context, array $blocks = array())
    {
        $__internal_6a70ce7f05ce8b2220dd808680dd97da32dffe3814315b24b2b18d36ee9b8f2e = $this->env->getExtension("native_profiler");
        $__internal_6a70ce7f05ce8b2220dd808680dd97da32dffe3814315b24b2b18d36ee9b8f2e->enter($__internal_6a70ce7f05ce8b2220dd808680dd97da32dffe3814315b24b2b18d36ee9b8f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlePerfiles"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["negocio"]) ? $context["negocio"] : $this->getContext($context, "negocio")), "nombreNegocio", array()), "html", null, true);
        echo "
";
        
        $__internal_6a70ce7f05ce8b2220dd808680dd97da32dffe3814315b24b2b18d36ee9b8f2e->leave($__internal_6a70ce7f05ce8b2220dd808680dd97da32dffe3814315b24b2b18d36ee9b8f2e_prof);

    }

    // line 7
    public function block_idCuerpoPerfil($context, array $blocks = array())
    {
        $__internal_d266373e687464d0f3373c4c9f5c9893e102075af9094333bbaf1f2cab199144 = $this->env->getExtension("native_profiler");
        $__internal_d266373e687464d0f3373c4c9f5c9893e102075af9094333bbaf1f2cab199144->enter($__internal_d266373e687464d0f3373c4c9f5c9893e102075af9094333bbaf1f2cab199144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "idCuerpoPerfil"));

        // line 8
        echo "cuerpoPerfilNegocio";
        
        $__internal_d266373e687464d0f3373c4c9f5c9893e102075af9094333bbaf1f2cab199144->leave($__internal_d266373e687464d0f3373c4c9f5c9893e102075af9094333bbaf1f2cab199144_prof);

    }

    // line 10
    public function block_urlDestino($context, array $blocks = array())
    {
        $__internal_68033a84a6e04f2db3bee26fce4923dee6108853c0c4082f49a0ccb23cff2fbd = $this->env->getExtension("native_profiler");
        $__internal_68033a84a6e04f2db3bee26fce4923dee6108853c0c4082f49a0ccb23cff2fbd->enter($__internal_68033a84a6e04f2db3bee26fce4923dee6108853c0c4082f49a0ccb23cff2fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino"));

        // line 11
        echo "\t'";
        echo $this->env->getExtension('routing')->getPath("pc_perfilusuario");
        echo "'
";
        
        $__internal_68033a84a6e04f2db3bee26fce4923dee6108853c0c4082f49a0ccb23cff2fbd->leave($__internal_68033a84a6e04f2db3bee26fce4923dee6108853c0c4082f49a0ccb23cff2fbd_prof);

    }

    // line 14
    public function block_urlDestino2($context, array $blocks = array())
    {
        $__internal_73b64e8937aea3482b430822801ee1da29d248d3e7c8eba720065758674db06a = $this->env->getExtension("native_profiler");
        $__internal_73b64e8937aea3482b430822801ee1da29d248d3e7c8eba720065758674db06a->enter($__internal_73b64e8937aea3482b430822801ee1da29d248d3e7c8eba720065758674db06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino2"));

        // line 15
        echo "\t'";
        echo $this->env->getExtension('routing')->getPath("pc_nuevoregistroproductos");
        echo "'
";
        
        $__internal_73b64e8937aea3482b430822801ee1da29d248d3e7c8eba720065758674db06a->leave($__internal_73b64e8937aea3482b430822801ee1da29d248d3e7c8eba720065758674db06a_prof);

    }

    // line 19
    public function block_inputHidden($context, array $blocks = array())
    {
        $__internal_da366703d1243917725dbdae726f30c4ea0a239c36a280087eeb72de24453467 = $this->env->getExtension("native_profiler");
        $__internal_da366703d1243917725dbdae726f30c4ea0a239c36a280087eeb72de24453467->enter($__internal_da366703d1243917725dbdae726f30c4ea0a239c36a280087eeb72de24453467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inputHidden"));

        // line 20
        echo "\t<input type=\"hidden\" name=\"codigoLoginPerfilNegocio\" value=\"1000at200j\">
";
        
        $__internal_da366703d1243917725dbdae726f30c4ea0a239c36a280087eeb72de24453467->leave($__internal_da366703d1243917725dbdae726f30c4ea0a239c36a280087eeb72de24453467_prof);

    }

    // line 24
    public function block_hiddenPerfiles($context, array $blocks = array())
    {
        $__internal_da11ec73e27bdee35a742c2fdb6500d79d19b495416607a82c98be472acb360f = $this->env->getExtension("native_profiler");
        $__internal_da11ec73e27bdee35a742c2fdb6500d79d19b495416607a82c98be472acb360f->enter($__internal_da11ec73e27bdee35a742c2fdb6500d79d19b495416607a82c98be472acb360f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hiddenPerfiles"));

        // line 25
        echo "\t<input type=\"hidden\" name=\"codigoPerfilNegocio\" value=\"1000at200j\">
";
        
        $__internal_da11ec73e27bdee35a742c2fdb6500d79d19b495416607a82c98be472acb360f->leave($__internal_da11ec73e27bdee35a742c2fdb6500d79d19b495416607a82c98be472acb360f_prof);

    }

    // line 30
    public function block_tablaDatosPerfil($context, array $blocks = array())
    {
        $__internal_510528231afb54e17e7872fe1af610d3add99720745d587cef604632a233691e = $this->env->getExtension("native_profiler");
        $__internal_510528231afb54e17e7872fe1af610d3add99720745d587cef604632a233691e->enter($__internal_510528231afb54e17e7872fe1af610d3add99720745d587cef604632a233691e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tablaDatosPerfil"));

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
\t\t\t<td><span class=\"textoDatoNegocio\" id=\"spanCorreoNegocio\"><a href=\"mailto:";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["negocio"]) ? $context["negocio"] : $this->getContext($context, "negocio")), "correoNegocio", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["negocio"]) ? $context["negocio"] : $this->getContext($context, "negocio")), "correoNegocio", array()), "html", null, true);
        echo "</a></span></td>
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
        
        $__internal_510528231afb54e17e7872fe1af610d3add99720745d587cef604632a233691e->leave($__internal_510528231afb54e17e7872fe1af610d3add99720745d587cef604632a233691e_prof);

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
        return array (  217 => 69,  214 => 68,  208 => 67,  206 => 66,  197 => 64,  192 => 61,  187 => 60,  185 => 59,  180 => 56,  178 => 55,  169 => 51,  162 => 47,  155 => 43,  148 => 39,  141 => 35,  135 => 31,  129 => 30,  121 => 25,  115 => 24,  107 => 20,  101 => 19,  91 => 15,  85 => 14,  75 => 11,  69 => 10,  62 => 8,  56 => 7,  46 => 4,  40 => 3,  11 => 1,);
    }
}
