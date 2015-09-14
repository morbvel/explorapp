<?php

/* PCBundle:vista:perfilProducto.html.twig */
class __TwigTemplate_cec14ec0aab475f9528e4c22521677563518986df95155061c71a8adfe01c464 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCBundle::plantillaPerfilesProductos.html.twig", "PCBundle:vista:perfilProducto.html.twig", 1);
        $this->blocks = array(
            'titlePerfiles' => array($this, 'block_titlePerfiles'),
            'idCuerpoPerfil' => array($this, 'block_idCuerpoPerfil'),
            'urlDestino' => array($this, 'block_urlDestino'),
            'urlDestino2' => array($this, 'block_urlDestino2'),
            'urlDestino3' => array($this, 'block_urlDestino3'),
            'inputHidden' => array($this, 'block_inputHidden'),
            'hiddenPerfiles' => array($this, 'block_hiddenPerfiles'),
            'tablaDatosProducto' => array($this, 'block_tablaDatosProducto'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PCBundle::plantillaPerfilesProductos.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a70356ce71207c97c292a5b82bb59cfae1540d9cfc845a72d17a30f4e059aac = $this->env->getExtension("native_profiler");
        $__internal_7a70356ce71207c97c292a5b82bb59cfae1540d9cfc845a72d17a30f4e059aac->enter($__internal_7a70356ce71207c97c292a5b82bb59cfae1540d9cfc845a72d17a30f4e059aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle:vista:perfilProducto.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a70356ce71207c97c292a5b82bb59cfae1540d9cfc845a72d17a30f4e059aac->leave($__internal_7a70356ce71207c97c292a5b82bb59cfae1540d9cfc845a72d17a30f4e059aac_prof);

    }

    // line 3
    public function block_titlePerfiles($context, array $blocks = array())
    {
        $__internal_93162e3ac62fabe6db64d86bf579f71dfbdd6296cf5f66a60755290db064dcdb = $this->env->getExtension("native_profiler");
        $__internal_93162e3ac62fabe6db64d86bf579f71dfbdd6296cf5f66a60755290db064dcdb->enter($__internal_93162e3ac62fabe6db64d86bf579f71dfbdd6296cf5f66a60755290db064dcdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlePerfiles"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "nombreProducto", array()), "html", null, true);
        echo "
";
        
        $__internal_93162e3ac62fabe6db64d86bf579f71dfbdd6296cf5f66a60755290db064dcdb->leave($__internal_93162e3ac62fabe6db64d86bf579f71dfbdd6296cf5f66a60755290db064dcdb_prof);

    }

    // line 7
    public function block_idCuerpoPerfil($context, array $blocks = array())
    {
        $__internal_c9c53179c2fc3a8097ad5399cf36720dee72ba95eeec4ec2dc3991b08443bb80 = $this->env->getExtension("native_profiler");
        $__internal_c9c53179c2fc3a8097ad5399cf36720dee72ba95eeec4ec2dc3991b08443bb80->enter($__internal_c9c53179c2fc3a8097ad5399cf36720dee72ba95eeec4ec2dc3991b08443bb80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "idCuerpoPerfil"));

        // line 8
        echo "cuerpoPerfilProducto";
        
        $__internal_c9c53179c2fc3a8097ad5399cf36720dee72ba95eeec4ec2dc3991b08443bb80->leave($__internal_c9c53179c2fc3a8097ad5399cf36720dee72ba95eeec4ec2dc3991b08443bb80_prof);

    }

    // line 10
    public function block_urlDestino($context, array $blocks = array())
    {
        $__internal_0eaf90969abacd0afdfd5f770a10593b511d4d6676aad6264a4eabaa1608c4d3 = $this->env->getExtension("native_profiler");
        $__internal_0eaf90969abacd0afdfd5f770a10593b511d4d6676aad6264a4eabaa1608c4d3->enter($__internal_0eaf90969abacd0afdfd5f770a10593b511d4d6676aad6264a4eabaa1608c4d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino"));

        // line 11
        echo "\t'";
        echo $this->env->getExtension('routing')->getPath("pc_perfilusuario");
        echo "'
";
        
        $__internal_0eaf90969abacd0afdfd5f770a10593b511d4d6676aad6264a4eabaa1608c4d3->leave($__internal_0eaf90969abacd0afdfd5f770a10593b511d4d6676aad6264a4eabaa1608c4d3_prof);

    }

    // line 14
    public function block_urlDestino2($context, array $blocks = array())
    {
        $__internal_7ec79b8ad95605c40008da9cf6de18ada1ad96847be07d430b9e12ac3b7bac72 = $this->env->getExtension("native_profiler");
        $__internal_7ec79b8ad95605c40008da9cf6de18ada1ad96847be07d430b9e12ac3b7bac72->enter($__internal_7ec79b8ad95605c40008da9cf6de18ada1ad96847be07d430b9e12ac3b7bac72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino2"));

        // line 15
        echo "\t'";
        echo $this->env->getExtension('routing')->getPath("pc_nuevoregistroofertas");
        echo "'
";
        
        $__internal_7ec79b8ad95605c40008da9cf6de18ada1ad96847be07d430b9e12ac3b7bac72->leave($__internal_7ec79b8ad95605c40008da9cf6de18ada1ad96847be07d430b9e12ac3b7bac72_prof);

    }

    // line 19
    public function block_urlDestino3($context, array $blocks = array())
    {
        $__internal_abeea5d6c5ba289f3c8f292f16b731f388d4f2eb31c0cb9ef9896d9d24a396fa = $this->env->getExtension("native_profiler");
        $__internal_abeea5d6c5ba289f3c8f292f16b731f388d4f2eb31c0cb9ef9896d9d24a396fa->enter($__internal_abeea5d6c5ba289f3c8f292f16b731f388d4f2eb31c0cb9ef9896d9d24a396fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino3"));

        // line 20
        echo "\t'";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pc_mostrarofertas", array("nombreProducto" => $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "nombreProducto", array()), "idNegocio" => $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "idNegocio", array()))), "html", null, true);
        echo "'
";
        
        $__internal_abeea5d6c5ba289f3c8f292f16b731f388d4f2eb31c0cb9ef9896d9d24a396fa->leave($__internal_abeea5d6c5ba289f3c8f292f16b731f388d4f2eb31c0cb9ef9896d9d24a396fa_prof);

    }

    // line 24
    public function block_inputHidden($context, array $blocks = array())
    {
        $__internal_44e912c39f45166320e091abcdd3dd5dc8a728efb0260b78da465da647095cea = $this->env->getExtension("native_profiler");
        $__internal_44e912c39f45166320e091abcdd3dd5dc8a728efb0260b78da465da647095cea->enter($__internal_44e912c39f45166320e091abcdd3dd5dc8a728efb0260b78da465da647095cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inputHidden"));

        // line 25
        echo "\t<input type=\"hidden\" name=\"codigoLoginPerfilProducto\" value=\"1000at200j\">
";
        
        $__internal_44e912c39f45166320e091abcdd3dd5dc8a728efb0260b78da465da647095cea->leave($__internal_44e912c39f45166320e091abcdd3dd5dc8a728efb0260b78da465da647095cea_prof);

    }

    // line 29
    public function block_hiddenPerfiles($context, array $blocks = array())
    {
        $__internal_6f928a5e31f0ad8c53656ab5cc7f9ca7713313f11f0716044220e5f5939e30b1 = $this->env->getExtension("native_profiler");
        $__internal_6f928a5e31f0ad8c53656ab5cc7f9ca7713313f11f0716044220e5f5939e30b1->enter($__internal_6f928a5e31f0ad8c53656ab5cc7f9ca7713313f11f0716044220e5f5939e30b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hiddenPerfiles"));

        // line 30
        echo "\t<input type=\"hidden\" name=\"codigoPerfilNegocio\" value=\"1000at200j\">
";
        
        $__internal_6f928a5e31f0ad8c53656ab5cc7f9ca7713313f11f0716044220e5f5939e30b1->leave($__internal_6f928a5e31f0ad8c53656ab5cc7f9ca7713313f11f0716044220e5f5939e30b1_prof);

    }

    // line 35
    public function block_tablaDatosProducto($context, array $blocks = array())
    {
        $__internal_2446a5ba88b053bef5f99af0f3fef79e63a656f711d91cde2517f0042a428bfa = $this->env->getExtension("native_profiler");
        $__internal_2446a5ba88b053bef5f99af0f3fef79e63a656f711d91cde2517f0042a428bfa->enter($__internal_2446a5ba88b053bef5f99af0f3fef79e63a656f711d91cde2517f0042a428bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tablaDatosProducto"));

        // line 36
        echo "
\t<table id=\"tablaDatosProductos\">
\t\t<tr>
\t\t\t<td>Nombre: </td>
\t\t\t<td><span class=\"textoDatoProducto\" id=\"spanNombreProducto\" >";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "nombreProducto", array()), "html", null, true);
        echo "</span></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Descripción: </td>
\t\t\t<td><span class=\"textoDatoProducto\" id=\"spanDescripcionProducto\">";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "descripcionProducto", array()), "html", null, true);
        echo "</span></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Precio: </td>
\t\t\t<td><span class=\"textoDatoProducto\" id=\"spanPrecioProducto\">";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "precioProducto", array()), "html", null, true);
        echo "</span></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Alérgenos: </td>
\t\t\t<td><span class=\"textoDatoProducto\" id=\"spanAlergenosProducto\">";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "alergenosProducto", array()), "html", null, true);
        echo "</span></td>
\t\t</tr>
\t\t\t\t\t
\t</table>

";
        
        $__internal_2446a5ba88b053bef5f99af0f3fef79e63a656f711d91cde2517f0042a428bfa->leave($__internal_2446a5ba88b053bef5f99af0f3fef79e63a656f711d91cde2517f0042a428bfa_prof);

    }

    public function getTemplateName()
    {
        return "PCBundle:vista:perfilProducto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 52,  172 => 48,  165 => 44,  158 => 40,  152 => 36,  146 => 35,  138 => 30,  132 => 29,  124 => 25,  118 => 24,  108 => 20,  102 => 19,  92 => 15,  86 => 14,  76 => 11,  70 => 10,  63 => 8,  57 => 7,  47 => 4,  41 => 3,  11 => 1,);
    }
}
