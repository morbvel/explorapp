<?php

/* PCBundle:vista:perfilProducto.html.twig */
class __TwigTemplate_ec68cdae592c2e82316b41435ebe772d5bbfd95fee3ac2c52c0a221b6a81ff5b extends Twig_Template
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
        $__internal_0a6a9244c64421d5d2b1540778255afc78b7d68da1a22f09f811fb7708322174 = $this->env->getExtension("native_profiler");
        $__internal_0a6a9244c64421d5d2b1540778255afc78b7d68da1a22f09f811fb7708322174->enter($__internal_0a6a9244c64421d5d2b1540778255afc78b7d68da1a22f09f811fb7708322174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle:vista:perfilProducto.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a6a9244c64421d5d2b1540778255afc78b7d68da1a22f09f811fb7708322174->leave($__internal_0a6a9244c64421d5d2b1540778255afc78b7d68da1a22f09f811fb7708322174_prof);

    }

    // line 3
    public function block_titlePerfiles($context, array $blocks = array())
    {
        $__internal_75e5d6e19f643f9068904e0ea31a78c013148096cfbf47636129ec89aa186597 = $this->env->getExtension("native_profiler");
        $__internal_75e5d6e19f643f9068904e0ea31a78c013148096cfbf47636129ec89aa186597->enter($__internal_75e5d6e19f643f9068904e0ea31a78c013148096cfbf47636129ec89aa186597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titlePerfiles"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "nombreProducto", array()), "html", null, true);
        echo "
";
        
        $__internal_75e5d6e19f643f9068904e0ea31a78c013148096cfbf47636129ec89aa186597->leave($__internal_75e5d6e19f643f9068904e0ea31a78c013148096cfbf47636129ec89aa186597_prof);

    }

    // line 7
    public function block_idCuerpoPerfil($context, array $blocks = array())
    {
        $__internal_088c3f390b8806d936dc7e5840ff7a47ce1cdb08261f176cc51bbdcad24e089b = $this->env->getExtension("native_profiler");
        $__internal_088c3f390b8806d936dc7e5840ff7a47ce1cdb08261f176cc51bbdcad24e089b->enter($__internal_088c3f390b8806d936dc7e5840ff7a47ce1cdb08261f176cc51bbdcad24e089b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "idCuerpoPerfil"));

        // line 8
        echo "cuerpoPerfilProducto";
        
        $__internal_088c3f390b8806d936dc7e5840ff7a47ce1cdb08261f176cc51bbdcad24e089b->leave($__internal_088c3f390b8806d936dc7e5840ff7a47ce1cdb08261f176cc51bbdcad24e089b_prof);

    }

    // line 10
    public function block_urlDestino($context, array $blocks = array())
    {
        $__internal_b6b681ba132c7c16e55543a6dced5200bf8f1d8f5b78a4a792e39ae52cf9ef53 = $this->env->getExtension("native_profiler");
        $__internal_b6b681ba132c7c16e55543a6dced5200bf8f1d8f5b78a4a792e39ae52cf9ef53->enter($__internal_b6b681ba132c7c16e55543a6dced5200bf8f1d8f5b78a4a792e39ae52cf9ef53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino"));

        // line 11
        echo "\t'";
        echo $this->env->getExtension('routing')->getPath("pc_perfilusuario");
        echo "'
";
        
        $__internal_b6b681ba132c7c16e55543a6dced5200bf8f1d8f5b78a4a792e39ae52cf9ef53->leave($__internal_b6b681ba132c7c16e55543a6dced5200bf8f1d8f5b78a4a792e39ae52cf9ef53_prof);

    }

    // line 14
    public function block_urlDestino2($context, array $blocks = array())
    {
        $__internal_177537dcbd76421c0d04aa23a6a4bb847e7523d550464feb9bd840a1066e4a7f = $this->env->getExtension("native_profiler");
        $__internal_177537dcbd76421c0d04aa23a6a4bb847e7523d550464feb9bd840a1066e4a7f->enter($__internal_177537dcbd76421c0d04aa23a6a4bb847e7523d550464feb9bd840a1066e4a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino2"));

        // line 15
        echo "\t'";
        echo $this->env->getExtension('routing')->getPath("pc_nuevoregistroofertas");
        echo "'
";
        
        $__internal_177537dcbd76421c0d04aa23a6a4bb847e7523d550464feb9bd840a1066e4a7f->leave($__internal_177537dcbd76421c0d04aa23a6a4bb847e7523d550464feb9bd840a1066e4a7f_prof);

    }

    // line 19
    public function block_urlDestino3($context, array $blocks = array())
    {
        $__internal_97ad8a021adc63bc801a1920b732a7cffa199cbb6eb690156b69baf854ef248d = $this->env->getExtension("native_profiler");
        $__internal_97ad8a021adc63bc801a1920b732a7cffa199cbb6eb690156b69baf854ef248d->enter($__internal_97ad8a021adc63bc801a1920b732a7cffa199cbb6eb690156b69baf854ef248d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino3"));

        // line 20
        echo "\t'";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pc_mostrarofertas", array("nombreProducto" => $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "nombreProducto", array()), "idNegocio" => $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "idNegocio", array()))), "html", null, true);
        echo "'
";
        
        $__internal_97ad8a021adc63bc801a1920b732a7cffa199cbb6eb690156b69baf854ef248d->leave($__internal_97ad8a021adc63bc801a1920b732a7cffa199cbb6eb690156b69baf854ef248d_prof);

    }

    // line 24
    public function block_inputHidden($context, array $blocks = array())
    {
        $__internal_b5f0e4d16a4ff8ea3eab54913356be9e8a78d77688753261693a755bb02b3a0b = $this->env->getExtension("native_profiler");
        $__internal_b5f0e4d16a4ff8ea3eab54913356be9e8a78d77688753261693a755bb02b3a0b->enter($__internal_b5f0e4d16a4ff8ea3eab54913356be9e8a78d77688753261693a755bb02b3a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inputHidden"));

        // line 25
        echo "\t<input type=\"hidden\" name=\"codigoLoginPerfilProducto\" value=\"1000at200j\">
";
        
        $__internal_b5f0e4d16a4ff8ea3eab54913356be9e8a78d77688753261693a755bb02b3a0b->leave($__internal_b5f0e4d16a4ff8ea3eab54913356be9e8a78d77688753261693a755bb02b3a0b_prof);

    }

    // line 29
    public function block_hiddenPerfiles($context, array $blocks = array())
    {
        $__internal_3ab13e7b8201ee76f22bf484d78ec5f116856ab72d26ccf280901fef4469287c = $this->env->getExtension("native_profiler");
        $__internal_3ab13e7b8201ee76f22bf484d78ec5f116856ab72d26ccf280901fef4469287c->enter($__internal_3ab13e7b8201ee76f22bf484d78ec5f116856ab72d26ccf280901fef4469287c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hiddenPerfiles"));

        // line 30
        echo "\t<input type=\"hidden\" name=\"codigoPerfilNegocio\" value=\"1000at200j\">
";
        
        $__internal_3ab13e7b8201ee76f22bf484d78ec5f116856ab72d26ccf280901fef4469287c->leave($__internal_3ab13e7b8201ee76f22bf484d78ec5f116856ab72d26ccf280901fef4469287c_prof);

    }

    // line 35
    public function block_tablaDatosProducto($context, array $blocks = array())
    {
        $__internal_0b403d4d7b3f520159f4486712e30d810b09f1b96da0b31f0a146fb4871ea88e = $this->env->getExtension("native_profiler");
        $__internal_0b403d4d7b3f520159f4486712e30d810b09f1b96da0b31f0a146fb4871ea88e->enter($__internal_0b403d4d7b3f520159f4486712e30d810b09f1b96da0b31f0a146fb4871ea88e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tablaDatosProducto"));

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
        
        $__internal_0b403d4d7b3f520159f4486712e30d810b09f1b96da0b31f0a146fb4871ea88e->leave($__internal_0b403d4d7b3f520159f4486712e30d810b09f1b96da0b31f0a146fb4871ea88e_prof);

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
