<?php

/* PCBundle:vista:mostrarHoteles.html.twig */
class __TwigTemplate_d3a74570a4becd56c418e9009a95abc8926dc66e670a6aed95385384baa38850 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCBundle::platillaMostrarNegocios.html.twig", "PCBundle:vista:mostrarHoteles.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'urlDestino' => array($this, 'block_urlDestino'),
            'inputHidden' => array($this, 'block_inputHidden'),
            'barraMenu' => array($this, 'block_barraMenu'),
            'cuerpoPagina' => array($this, 'block_cuerpoPagina'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PCBundle::platillaMostrarNegocios.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c6aaf5041b2e617f7087d10d8a115550936c9877cc662a9b16f5154ba81622c = $this->env->getExtension("native_profiler");
        $__internal_5c6aaf5041b2e617f7087d10d8a115550936c9877cc662a9b16f5154ba81622c->enter($__internal_5c6aaf5041b2e617f7087d10d8a115550936c9877cc662a9b16f5154ba81622c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle:vista:mostrarHoteles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c6aaf5041b2e617f7087d10d8a115550936c9877cc662a9b16f5154ba81622c->leave($__internal_5c6aaf5041b2e617f7087d10d8a115550936c9877cc662a9b16f5154ba81622c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7a6b9b166e51136f2af01bf9fec06b404d3aa0864c8d2a42229f67f50f7f9ca = $this->env->getExtension("native_profiler");
        $__internal_a7a6b9b166e51136f2af01bf9fec06b404d3aa0864c8d2a42229f67f50f7f9ca->enter($__internal_a7a6b9b166e51136f2af01bf9fec06b404d3aa0864c8d2a42229f67f50f7f9ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tHoteles
";
        
        $__internal_a7a6b9b166e51136f2af01bf9fec06b404d3aa0864c8d2a42229f67f50f7f9ca->leave($__internal_a7a6b9b166e51136f2af01bf9fec06b404d3aa0864c8d2a42229f67f50f7f9ca_prof);

    }

    // line 7
    public function block_urlDestino($context, array $blocks = array())
    {
        $__internal_0c138780c9953f664a3fb7095d7e04f178efbbee6c50bc3be395771e0040422f = $this->env->getExtension("native_profiler");
        $__internal_0c138780c9953f664a3fb7095d7e04f178efbbee6c50bc3be395771e0040422f->enter($__internal_0c138780c9953f664a3fb7095d7e04f178efbbee6c50bc3be395771e0040422f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino"));

        // line 8
        echo "\t'";
        echo $this->env->getExtension('routing')->getPath("pc_perfilusuario");
        echo "'
";
        
        $__internal_0c138780c9953f664a3fb7095d7e04f178efbbee6c50bc3be395771e0040422f->leave($__internal_0c138780c9953f664a3fb7095d7e04f178efbbee6c50bc3be395771e0040422f_prof);

    }

    // line 11
    public function block_inputHidden($context, array $blocks = array())
    {
        $__internal_6351e382fe7830204ece672af57de8aeeaf2da38abe66cddac4e4897be26d80b = $this->env->getExtension("native_profiler");
        $__internal_6351e382fe7830204ece672af57de8aeeaf2da38abe66cddac4e4897be26d80b->enter($__internal_6351e382fe7830204ece672af57de8aeeaf2da38abe66cddac4e4897be26d80b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inputHidden"));

        // line 12
        echo "\t<input type=\"hidden\" name=\"loginMostrarHoteles\" value=\"1000at200j\">\t
";
        
        $__internal_6351e382fe7830204ece672af57de8aeeaf2da38abe66cddac4e4897be26d80b->leave($__internal_6351e382fe7830204ece672af57de8aeeaf2da38abe66cddac4e4897be26d80b_prof);

    }

    // line 16
    public function block_barraMenu($context, array $blocks = array())
    {
        $__internal_9291dea8e67c3846c81954599b29395db700c1b933a404187dccb6025a08e638 = $this->env->getExtension("native_profiler");
        $__internal_9291dea8e67c3846c81954599b29395db700c1b933a404187dccb6025a08e638->enter($__internal_9291dea8e67c3846c81954599b29395db700c1b933a404187dccb6025a08e638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barraMenu"));

        // line 17
        echo "\t<div class=\"contenedorMenu\">
\t\t<nav id=\"navHoteles\">
\t\t\t<ul>
\t\t\t\t<li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("pc_restaurantes");
        echo "\" id=\"botonGrande\">Restaurantes</a></li>
\t\t\t\t<li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("pc_hoteles");
        echo "\" id=\"botonMediano\">Hoteles</a></li>
\t\t\t\t<li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("pc_bares");
        echo "\" id=\"botonPequeño\">Bares</a></li>
\t\t\t</ul>
\t\t\t<input type=\"image\" id=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["idFotoBarraMenu"]) ? $context["idFotoBarraMenu"] : $this->getContext($context, "idFotoBarraMenu")), "html", null, true);
        echo "\" class=\"enlaceAcceder\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenPerfil"]) ? $context["rutaImagenPerfil"] : $this->getContext($context, "rutaImagenPerfil"))), "html", null, true);
        echo "\" title=\"Acceder a la zona de usuarios\" />
\t\t\t<a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("pc_cerrarsesion");
        echo "\" id=\"enlaceCerrarSesion\" >Cerrar Sesi&oacute;n</a>
\t\t</nav>
\t</div>
";
        
        $__internal_9291dea8e67c3846c81954599b29395db700c1b933a404187dccb6025a08e638->leave($__internal_9291dea8e67c3846c81954599b29395db700c1b933a404187dccb6025a08e638_prof);

    }

    // line 33
    public function block_cuerpoPagina($context, array $blocks = array())
    {
        $__internal_f7284459d63cbba0df573017435d30715bee3458353e01bbf5593c5d5f49b609 = $this->env->getExtension("native_profiler");
        $__internal_f7284459d63cbba0df573017435d30715bee3458353e01bbf5593c5d5f49b609->enter($__internal_f7284459d63cbba0df573017435d30715bee3458353e01bbf5593c5d5f49b609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpoPagina"));

        // line 34
        echo "\t<div class=\"";
        echo twig_escape_filter($this->env, (isset($context["tipoNegocio"]) ? $context["tipoNegocio"] : $this->getContext($context, "tipoNegocio")), "html", null, true);
        echo "\">
\t\t<table id=\"tablaHoteles\" class=\"tablaNegocios\">
\t\t    <thead>
\t\t\t<tr>
\t\t\t\t<th></th>
\t\t\t    \t<th>Nombre Hotel</th>
\t\t\t\t<th>Ciudad Hotel</th>
\t\t\t    \t<th>Direccion Hotel</th>
\t\t\t\t<th></th>
\t\t\t</tr>
\t\t    </thead>
\t\t    <tbody>
\t\t\t";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listadoHoteles"]) ? $context["listadoHoteles"] : $this->getContext($context, "listadoHoteles")));
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 47
            echo "\t\t\t\t<tr>
\t\t\t\t\t";
            // line 48
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : $this->getContext($context, "usuarios")));
            foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                // line 49
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute($context["usuario"], "Id", array()) == $this->getAttribute($context["hotel"], "idUsuario", array()))) {
                    // line 50
                    echo "\t\t\t\t\t\t\t";
                    $context["rutaImagen"] = (((("DirectoriosUsuarios/" . $this->getAttribute($context["usuario"], "userName", array())) . "/Negocios/") . $this->getAttribute($context["hotel"], "nombreNegocio", array())) . ".jpg");
                    // line 51
                    echo "\t\t\t\t\t\t\t<td><input type=\"image\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagen"]) ? $context["rutaImagen"] : $this->getContext($context, "rutaImagen"))), "html", null, true);
                    echo "\" class=\"imagenListadoNegocios\" onclick=\"location.href='";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pc_perfilnegocio", array("idNegocio" => $this->getAttribute($context["hotel"], "idNegocio", array()), "idUsuario" => $this->getAttribute($context["hotel"], "idUsuario", array()))), "html", null, true);
                    echo "';\"/></td>
\t\t\t\t\t\t";
                }
                // line 53
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "\t\t\t\t    <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["hotel"], "nombreNegocio", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["hotel"], "ciudadNegocio", array()), "html", null, true);
            echo "</td>
\t\t\t\t    <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["hotel"], "direccionNegocio", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td><input type=\"button\" class=\"botonIrPerfilNegocio\" value=\"Ir a su perfil\" onclick=\"location.href='";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pc_perfilnegocio", array("idNegocio" => $this->getAttribute($context["hotel"], "idNegocio", array()), "idUsuario" => $this->getAttribute($context["hotel"], "idUsuario", array()))), "html", null, true);
            echo "';\"/></td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "\t\t    </tbody>
\t\t</table>
\t</div>
";
        
        $__internal_f7284459d63cbba0df573017435d30715bee3458353e01bbf5593c5d5f49b609->leave($__internal_f7284459d63cbba0df573017435d30715bee3458353e01bbf5593c5d5f49b609_prof);

    }

    public function getTemplateName()
    {
        return "PCBundle:vista:mostrarHoteles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 60,  189 => 57,  185 => 56,  181 => 55,  176 => 54,  170 => 53,  162 => 51,  159 => 50,  156 => 49,  152 => 48,  149 => 47,  145 => 46,  129 => 34,  123 => 33,  112 => 25,  106 => 24,  101 => 22,  97 => 21,  93 => 20,  88 => 17,  82 => 16,  74 => 12,  68 => 11,  58 => 8,  52 => 7,  44 => 4,  38 => 3,  11 => 1,);
    }
}
