<?php

/* MobileBundle:vista:perfilNegocio.html.twig */
class __TwigTemplate_8be6956d16aac30c8e247b10faa98f3c3156c88d3374612b270d61f0c7e2ffae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MobileBundle::plantillaPerfiles.html.twig", "MobileBundle:vista:perfilNegocio.html.twig", 1);
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
        $__internal_f276ea19766d9b04d54418c23d7986e352ba8656a527ad0b6d917183075181ca = $this->env->getExtension("native_profiler");
        $__internal_f276ea19766d9b04d54418c23d7986e352ba8656a527ad0b6d917183075181ca->enter($__internal_f276ea19766d9b04d54418c23d7986e352ba8656a527ad0b6d917183075181ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MobileBundle:vista:perfilNegocio.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f276ea19766d9b04d54418c23d7986e352ba8656a527ad0b6d917183075181ca->leave($__internal_f276ea19766d9b04d54418c23d7986e352ba8656a527ad0b6d917183075181ca_prof);

    }

    // line 3
    public function block_tituloPagina($context, array $blocks = array())
    {
        $__internal_7fde7521c364dac7d3dd61daa17a5dd98ae6c1da2a4ba942ef55b30218fb8991 = $this->env->getExtension("native_profiler");
        $__internal_7fde7521c364dac7d3dd61daa17a5dd98ae6c1da2a4ba942ef55b30218fb8991->enter($__internal_7fde7521c364dac7d3dd61daa17a5dd98ae6c1da2a4ba942ef55b30218fb8991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tituloPagina"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["negocio"]) ? $context["negocio"] : $this->getContext($context, "negocio")), "nombreNegocio", array()), "html", null, true);
        echo "
";
        
        $__internal_7fde7521c364dac7d3dd61daa17a5dd98ae6c1da2a4ba942ef55b30218fb8991->leave($__internal_7fde7521c364dac7d3dd61daa17a5dd98ae6c1da2a4ba942ef55b30218fb8991_prof);

    }

    // line 8
    public function block_contenidoPerfil($context, array $blocks = array())
    {
        $__internal_a3b9103c20392f6be0382d3a5fce4136dbbd6090f56730796e7568b49887159f = $this->env->getExtension("native_profiler");
        $__internal_a3b9103c20392f6be0382d3a5fce4136dbbd6090f56730796e7568b49887159f->enter($__internal_a3b9103c20392f6be0382d3a5fce4136dbbd6090f56730796e7568b49887159f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoPerfil"));

        // line 9
        echo "
\t<div id=\"contenidoPerfilUsuario\" class=\"contenidoPerfiles\">

\t\t<table class=\"tablaPerfiles\">
\t\t\t<tr colspan=\"2\">
\t\t\t\t<td>
\t\t\t\t\t<img src='";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenPerfil"]) ? $context["rutaImagenPerfil"] : $this->getContext($context, "rutaImagenPerfil"))), "html", null, true);
        echo "' class=\"imagenPerfil\"></img>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"tdPerfiles\">Nombre: </td>
\t\t\t\t<td class=\"tdDatos\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["negocio"]) ? $context["negocio"] : $this->getContext($context, "negocio")), "nombreNegocio", array()), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"tdPerfiles\">Dirección: </td>
\t\t\t\t<td class=\"tdDatos\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["negocio"]) ? $context["negocio"] : $this->getContext($context, "negocio")), "direccionNegocio", array()), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"tdPerfiles\">Ciudad: </td>
\t\t\t\t<td class=\"tdDatos\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["negocio"]) ? $context["negocio"] : $this->getContext($context, "negocio")), "ciudadNegocio", array()), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"tdPerfiles\">Teléfono: </td>
\t\t\t\t<td class=\"tdDatos\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["negocio"]) ? $context["negocio"] : $this->getContext($context, "negocio")), "telefonoNegocio", array()), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"tdPerfiles\">Correo: </td>
\t\t\t\t<td class=\"tdDatos\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["negocio"]) ? $context["negocio"] : $this->getContext($context, "negocio")), "correoNegocio", array()), "html", null, true);
        echo "</td>
\t\t\t</tr>

\t\t\t";
        // line 39
        if ((twig_length_filter($this->env, (isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos"))) > 0)) {
            // line 40
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\" class=\"tdPerfiles barraSeparacion\">---------------------</td>
\t\t\t\t</tr>
\t\t\t\t";
            // line 43
            $context["contador"] = 0;
            // line 44
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
            foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
                // line 45
                echo "\t\t\t\t\t
\t\t\t\t\t<tr>\t
\t\t\t\t\t\t<td class=\"tdPerfiles\" colspan=\"2\" ><span id=\"";
                // line 47
                echo twig_escape_filter($this->env, sprintf("producto%d", (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador"))), "html", null, true);
                echo "\" title=\"Click para acceder a la página del producto\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "nombreProducto", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t<input type=\"image\" class=\"fotoNegocio\" style=\"width: 30%; height: auto; float: right; border-radius: 100px; margin-top: -20px;\" src=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((((("DirectoriosUsuarios/" . $this->getAttribute((isset($context["usuarioDuenio"]) ? $context["usuarioDuenio"] : $this->getContext($context, "usuarioDuenio")), "userName", array())) . "/Negocios/") . $this->getAttribute($context["producto"], "nombreProducto", array())) . ".jpg")), "html", null, true);
                echo "\" onclick=\"location.href='";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mobile_perfilproducto", array("nombreProducto" => $this->getAttribute($context["producto"], "nombreProducto", array()), "idNegocio" => $this->getAttribute((isset($context["negocio"]) ? $context["negocio"] : $this->getContext($context, "negocio")), "idNegocio", array()))), "html", null, true);
                echo "';\"/>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t
\t\t\t\t\t</tr>
\t\t\t\t\t";
                // line 52
                $context["contador"] = ((isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")) + 1);
                // line 53
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "\t\t\t";
        }
        // line 55
        echo "
\t\t</table>

\t</div>

";
        
        $__internal_a3b9103c20392f6be0382d3a5fce4136dbbd6090f56730796e7568b49887159f->leave($__internal_a3b9103c20392f6be0382d3a5fce4136dbbd6090f56730796e7568b49887159f_prof);

    }

    // line 63
    public function block_contenidoFooterPerfil($context, array $blocks = array())
    {
        $__internal_6ebb47c0d31dd7d10e46fc1e7a8d56933cea673e35c6000c9b2aa0d8a4d7e400 = $this->env->getExtension("native_profiler");
        $__internal_6ebb47c0d31dd7d10e46fc1e7a8d56933cea673e35c6000c9b2aa0d8a4d7e400->enter($__internal_6ebb47c0d31dd7d10e46fc1e7a8d56933cea673e35c6000c9b2aa0d8a4d7e400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoFooterPerfil"));

        // line 64
        echo "\t<ul data-role=\"listview\" data-inset=\"true\" style=\"display: ";
        echo twig_escape_filter($this->env, (isset($context["cerrarSesion"]) ? $context["cerrarSesion"] : $this->getContext($context, "cerrarSesion")), "html", null, true);
        echo "\">
\t\t<li><a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("mobile_cerrarsesion");
        echo "\" data-transition=\"fade\">Terminar la Sesión</a></li>
\t</ul>
";
        
        $__internal_6ebb47c0d31dd7d10e46fc1e7a8d56933cea673e35c6000c9b2aa0d8a4d7e400->leave($__internal_6ebb47c0d31dd7d10e46fc1e7a8d56933cea673e35c6000c9b2aa0d8a4d7e400_prof);

    }

    public function getTemplateName()
    {
        return "MobileBundle:vista:perfilNegocio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 65,  170 => 64,  164 => 63,  152 => 55,  149 => 54,  143 => 53,  141 => 52,  132 => 48,  126 => 47,  122 => 45,  117 => 44,  115 => 43,  110 => 40,  108 => 39,  102 => 36,  95 => 32,  88 => 28,  81 => 24,  74 => 20,  66 => 15,  58 => 9,  52 => 8,  42 => 4,  36 => 3,  11 => 1,);
    }
}
