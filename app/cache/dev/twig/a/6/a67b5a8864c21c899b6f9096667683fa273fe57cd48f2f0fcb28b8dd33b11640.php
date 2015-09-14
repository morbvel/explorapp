<?php

/* PCBundle::plantillaErrorLogin.html.twig */
class __TwigTemplate_a67b5a8864c21c899b6f9096667683fa273fe57cd48f2f0fcb28b8dd33b11640 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'textoFallo' => array($this, 'block_textoFallo'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5426cb605153de1a88ceef3a1f2e1ee270a244e6a85a4d6d56fa1248f5918d35 = $this->env->getExtension("native_profiler");
        $__internal_5426cb605153de1a88ceef3a1f2e1ee270a244e6a85a4d6d56fa1248f5918d35->enter($__internal_5426cb605153de1a88ceef3a1f2e1ee270a244e6a85a4d6d56fa1248f5918d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle::plantillaErrorLogin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<meta name=\"author\" content=\"Miguel Orbañanos\">
\t\t<meta http-equiv=\"refresh\" content=\"3;URL=";
        // line 7
        echo $this->env->getExtension('routing')->getPath("pc_homepage");
        echo "\">
\t\t<link rel=\"shortcut icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/img/favicon.ico"), "html", null, true);
        echo "\" />
\t\t
\t\t<!--Importarmos nuestra hoja de estilos-->
\t\t<link rel=\"stylesheet\" type=\"text/css\" media=\"(max-width: 3500px)\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/estilosEscritorio.css"), "html", null, true);
        echo "\"/>
\t\t
\t</head>
\t<body class=\"cuerpoFalloLogin\">
\t\t<div class=\"cuadroFalloLogin\">
\t\t\t<p>";
        // line 16
        $this->displayBlock('textoFallo', $context, $blocks);
        echo "</p>
\t\t\t<p></p>
\t\t</div>
\t</body>
</html>
";
        
        $__internal_5426cb605153de1a88ceef3a1f2e1ee270a244e6a85a4d6d56fa1248f5918d35->leave($__internal_5426cb605153de1a88ceef3a1f2e1ee270a244e6a85a4d6d56fa1248f5918d35_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cbdb0f854d62167a75198052b993302f8f5bd6c372e8b3f089e5e3c06a05e5e6 = $this->env->getExtension("native_profiler");
        $__internal_cbdb0f854d62167a75198052b993302f8f5bd6c372e8b3f089e5e3c06a05e5e6->enter($__internal_cbdb0f854d62167a75198052b993302f8f5bd6c372e8b3f089e5e3c06a05e5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_cbdb0f854d62167a75198052b993302f8f5bd6c372e8b3f089e5e3c06a05e5e6->leave($__internal_cbdb0f854d62167a75198052b993302f8f5bd6c372e8b3f089e5e3c06a05e5e6_prof);

    }

    // line 16
    public function block_textoFallo($context, array $blocks = array())
    {
        $__internal_eb2d9874685a0b163206ef545da71d701d5a7fbde2c2ff66666603ff0ce2d39c = $this->env->getExtension("native_profiler");
        $__internal_eb2d9874685a0b163206ef545da71d701d5a7fbde2c2ff66666603ff0ce2d39c->enter($__internal_eb2d9874685a0b163206ef545da71d701d5a7fbde2c2ff66666603ff0ce2d39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textoFallo"));

        
        $__internal_eb2d9874685a0b163206ef545da71d701d5a7fbde2c2ff66666603ff0ce2d39c->leave($__internal_eb2d9874685a0b163206ef545da71d701d5a7fbde2c2ff66666603ff0ce2d39c_prof);

    }

    public function getTemplateName()
    {
        return "PCBundle::plantillaErrorLogin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 16,  66 => 5,  53 => 16,  45 => 11,  39 => 8,  35 => 7,  30 => 5,  24 => 1,);
    }
}
