<?php

/* PCBundle::plantillaErrorLogin.html.twig */
class __TwigTemplate_24bd0bf2d2e98216426b23da8bebc826ba1e8c38be9d2ce9d22c37e0d54c5dbc extends Twig_Template
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
        $__internal_c011bae0815cb249188de7537e7429fd2185581f14cb50e4ddd1428114155651 = $this->env->getExtension("native_profiler");
        $__internal_c011bae0815cb249188de7537e7429fd2185581f14cb50e4ddd1428114155651->enter($__internal_c011bae0815cb249188de7537e7429fd2185581f14cb50e4ddd1428114155651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle::plantillaErrorLogin.html.twig"));

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
        
        $__internal_c011bae0815cb249188de7537e7429fd2185581f14cb50e4ddd1428114155651->leave($__internal_c011bae0815cb249188de7537e7429fd2185581f14cb50e4ddd1428114155651_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0cf7f8f39635a13e4eb8f8fb5c3569cd68fde1fa6b23deb40f1fe14c1897ab76 = $this->env->getExtension("native_profiler");
        $__internal_0cf7f8f39635a13e4eb8f8fb5c3569cd68fde1fa6b23deb40f1fe14c1897ab76->enter($__internal_0cf7f8f39635a13e4eb8f8fb5c3569cd68fde1fa6b23deb40f1fe14c1897ab76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0cf7f8f39635a13e4eb8f8fb5c3569cd68fde1fa6b23deb40f1fe14c1897ab76->leave($__internal_0cf7f8f39635a13e4eb8f8fb5c3569cd68fde1fa6b23deb40f1fe14c1897ab76_prof);

    }

    // line 16
    public function block_textoFallo($context, array $blocks = array())
    {
        $__internal_777a4a3b52e43f8f39eef573624c0fbb917b03b6b8a97fe94ea3a87616c2d6cb = $this->env->getExtension("native_profiler");
        $__internal_777a4a3b52e43f8f39eef573624c0fbb917b03b6b8a97fe94ea3a87616c2d6cb->enter($__internal_777a4a3b52e43f8f39eef573624c0fbb917b03b6b8a97fe94ea3a87616c2d6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textoFallo"));

        
        $__internal_777a4a3b52e43f8f39eef573624c0fbb917b03b6b8a97fe94ea3a87616c2d6cb->leave($__internal_777a4a3b52e43f8f39eef573624c0fbb917b03b6b8a97fe94ea3a87616c2d6cb_prof);

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
