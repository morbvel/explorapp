<?php

/* PCBundle:vista:mostrarBares.html.twig */
class __TwigTemplate_6045dc35ca440b896a24c662b20099cea7feee217431a8abe4354c1c22262154 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCBundle::platillaMostrarNegocios.html.twig", "PCBundle:vista:mostrarBares.html.twig", 1);
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
        $__internal_da30f2b65887d7cb284c49eb8267881e1a1d1436afaa706f20e1e9f402d43319 = $this->env->getExtension("native_profiler");
        $__internal_da30f2b65887d7cb284c49eb8267881e1a1d1436afaa706f20e1e9f402d43319->enter($__internal_da30f2b65887d7cb284c49eb8267881e1a1d1436afaa706f20e1e9f402d43319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle:vista:mostrarBares.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da30f2b65887d7cb284c49eb8267881e1a1d1436afaa706f20e1e9f402d43319->leave($__internal_da30f2b65887d7cb284c49eb8267881e1a1d1436afaa706f20e1e9f402d43319_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a1bf7879efa34e25b212e60e82de2a6f93ac13558089df0d02f83368a2a265c = $this->env->getExtension("native_profiler");
        $__internal_6a1bf7879efa34e25b212e60e82de2a6f93ac13558089df0d02f83368a2a265c->enter($__internal_6a1bf7879efa34e25b212e60e82de2a6f93ac13558089df0d02f83368a2a265c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tBares
";
        
        $__internal_6a1bf7879efa34e25b212e60e82de2a6f93ac13558089df0d02f83368a2a265c->leave($__internal_6a1bf7879efa34e25b212e60e82de2a6f93ac13558089df0d02f83368a2a265c_prof);

    }

    // line 7
    public function block_urlDestino($context, array $blocks = array())
    {
        $__internal_dba5af8122408f852886d94b43744735137fb5cc79642b7b855ada03a88efcfe = $this->env->getExtension("native_profiler");
        $__internal_dba5af8122408f852886d94b43744735137fb5cc79642b7b855ada03a88efcfe->enter($__internal_dba5af8122408f852886d94b43744735137fb5cc79642b7b855ada03a88efcfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino"));

        // line 8
        echo "\t'";
        echo $this->env->getExtension('routing')->getPath("pc_perfilusuario");
        echo "'
";
        
        $__internal_dba5af8122408f852886d94b43744735137fb5cc79642b7b855ada03a88efcfe->leave($__internal_dba5af8122408f852886d94b43744735137fb5cc79642b7b855ada03a88efcfe_prof);

    }

    // line 11
    public function block_inputHidden($context, array $blocks = array())
    {
        $__internal_20506be683b12af9a6895c4aec7689079abc14ead59729231bf817afc7d5a23c = $this->env->getExtension("native_profiler");
        $__internal_20506be683b12af9a6895c4aec7689079abc14ead59729231bf817afc7d5a23c->enter($__internal_20506be683b12af9a6895c4aec7689079abc14ead59729231bf817afc7d5a23c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inputHidden"));

        // line 12
        echo "\t<input type=\"hidden\" name=\"loginMostrarBares\" value=\"1000at200j\">\t
";
        
        $__internal_20506be683b12af9a6895c4aec7689079abc14ead59729231bf817afc7d5a23c->leave($__internal_20506be683b12af9a6895c4aec7689079abc14ead59729231bf817afc7d5a23c_prof);

    }

    // line 16
    public function block_barraMenu($context, array $blocks = array())
    {
        $__internal_8c95bfb5bdb222fd777b0c4c7819ae6a422c753158d8de8545469adbfe3dbcd0 = $this->env->getExtension("native_profiler");
        $__internal_8c95bfb5bdb222fd777b0c4c7819ae6a422c753158d8de8545469adbfe3dbcd0->enter($__internal_8c95bfb5bdb222fd777b0c4c7819ae6a422c753158d8de8545469adbfe3dbcd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barraMenu"));

        // line 17
        echo "\t<div class=\"contenedorMenu\">
\t\t<nav id=\"navBares\">
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
        
        $__internal_8c95bfb5bdb222fd777b0c4c7819ae6a422c753158d8de8545469adbfe3dbcd0->leave($__internal_8c95bfb5bdb222fd777b0c4c7819ae6a422c753158d8de8545469adbfe3dbcd0_prof);

    }

    // line 33
    public function block_cuerpoPagina($context, array $blocks = array())
    {
        $__internal_46d9c557aad7431a86e5ed6ba94e63b04185689233485aa9f4b0cd7b9cbaf984 = $this->env->getExtension("native_profiler");
        $__internal_46d9c557aad7431a86e5ed6ba94e63b04185689233485aa9f4b0cd7b9cbaf984->enter($__internal_46d9c557aad7431a86e5ed6ba94e63b04185689233485aa9f4b0cd7b9cbaf984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpoPagina"));

        // line 34
        echo "\t<div class=\"";
        echo twig_escape_filter($this->env, (isset($context["tipoNegocio"]) ? $context["tipoNegocio"] : $this->getContext($context, "tipoNegocio")), "html", null, true);
        echo "\">
\t\t<table id=\"tablaBares\" class=\"tablaNegocios\">
\t\t    <thead>
\t\t\t<tr>
\t\t\t\t<th></th>
\t\t\t    \t<th>Nombre Bar</th>
\t\t\t\t<th>Ciudad Bar</th>
\t\t\t    \t<th>Direccion Bar</th>
\t\t\t\t<th></th>
\t\t\t</tr>
\t\t    </thead>
\t\t    <tbody>
\t\t\t";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listadoBares"]) ? $context["listadoBares"] : $this->getContext($context, "listadoBares")));
        foreach ($context['_seq'] as $context["_key"] => $context["bar"]) {
            // line 47
            echo "\t\t\t\t<tr>
\t\t\t\t\t";
            // line 48
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : $this->getContext($context, "usuarios")));
            foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                // line 49
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute($context["usuario"], "Id", array()) == $this->getAttribute($context["bar"], "idUsuario", array()))) {
                    // line 50
                    echo "\t\t\t\t\t\t\t";
                    $context["rutaImagen"] = (((("DirectoriosUsuarios/" . $this->getAttribute($context["usuario"], "userName", array())) . "/Negocios/") . $this->getAttribute($context["bar"], "nombreNegocio", array())) . ".jpg");
                    // line 51
                    echo "\t\t\t\t\t\t\t<td><input type=\"image\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagen"]) ? $context["rutaImagen"] : $this->getContext($context, "rutaImagen"))), "html", null, true);
                    echo "\" class=\"imagenListadoNegocios\" onclick=\"location.href='";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pc_perfilnegocio", array("nombreNegocio" => $this->getAttribute($context["bar"], "nombreNegocio", array()), "idUsuario" => $this->getAttribute($context["bar"], "idUsuario", array()))), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["bar"], "nombreNegocio", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["bar"], "ciudadNegocio", array()), "html", null, true);
            echo "</td>
\t\t\t\t    <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["bar"], "direccionNegocio", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td><input type=\"button\" class=\"botonIrPerfilNegocio\" value=\"Ir a su perfil\" onclick=\"location.href='";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pc_perfilnegocio", array("nombreNegocio" => $this->getAttribute($context["bar"], "nombreNegocio", array()), "idUsuario" => $this->getAttribute($context["bar"], "idUsuario", array()))), "html", null, true);
            echo "';\"/></td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "\t\t    </tbody>
\t\t</table>
\t</div>
";
        
        $__internal_46d9c557aad7431a86e5ed6ba94e63b04185689233485aa9f4b0cd7b9cbaf984->leave($__internal_46d9c557aad7431a86e5ed6ba94e63b04185689233485aa9f4b0cd7b9cbaf984_prof);

    }

    public function getTemplateName()
    {
        return "PCBundle:vista:mostrarBares.html.twig";
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
