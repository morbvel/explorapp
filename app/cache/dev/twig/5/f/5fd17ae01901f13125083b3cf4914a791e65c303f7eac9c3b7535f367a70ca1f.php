<?php

/* PCBundle::plantillaPDF.html.twig */
class __TwigTemplate_5fd17ae01901f13125083b3cf4914a791e65c303f7eac9c3b7535f367a70ca1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'cuerpoOferta' => array($this, 'block_cuerpoOferta'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77f264521be8824c6a66a052c6898717a4774e187ac5086497a13ee3359d5499 = $this->env->getExtension("native_profiler");
        $__internal_77f264521be8824c6a66a052c6898717a4774e187ac5086497a13ee3359d5499->enter($__internal_77f264521be8824c6a66a052c6898717a4774e187ac5086497a13ee3359d5499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle::plantillaPDF.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<meta name=\"author\" content=\"Miguel Orbañanos\">
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
\t\t<link rel=\"stylesheet\" type=\"text/css\" media=\"(max-width: 700px)\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/estilosMobile.css"), "html", null, true);
        echo "\"/>

\t</head>

\t<body id=\"cuerpoPDF\">
\t\t<div class=\"contenedorPDF\">
\t\t\t<img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenNegocio"]) ? $context["rutaImagenNegocio"] : $this->getContext($context, "rutaImagenNegocio"))), "html", null, true);
        echo "\" id=\"fotoNegocio\"></img>
\t\t\t<img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logoCerveza.jpg"), "html", null, true);
        echo "\" id=\"logoExplorapp\"></img>

\t\t\t";
        // line 21
        $this->displayBlock('cuerpoOferta', $context, $blocks);
        // line 22
        echo "\t\t</div>
\t</body>

</html>
";
        
        $__internal_77f264521be8824c6a66a052c6898717a4774e187ac5086497a13ee3359d5499->leave($__internal_77f264521be8824c6a66a052c6898717a4774e187ac5086497a13ee3359d5499_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_ecde933ac2ae309d0f90b5aea6a206bab42629f2de860c4c473f8bfee4a27d9c = $this->env->getExtension("native_profiler");
        $__internal_ecde933ac2ae309d0f90b5aea6a206bab42629f2de860c4c473f8bfee4a27d9c->enter($__internal_ecde933ac2ae309d0f90b5aea6a206bab42629f2de860c4c473f8bfee4a27d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ecde933ac2ae309d0f90b5aea6a206bab42629f2de860c4c473f8bfee4a27d9c->leave($__internal_ecde933ac2ae309d0f90b5aea6a206bab42629f2de860c4c473f8bfee4a27d9c_prof);

    }

    // line 21
    public function block_cuerpoOferta($context, array $blocks = array())
    {
        $__internal_5fc18dbbbfcdf2dfcf2f1be6118b52fc18eb31c6cc70620ebf97de1ee0a99a20 = $this->env->getExtension("native_profiler");
        $__internal_5fc18dbbbfcdf2dfcf2f1be6118b52fc18eb31c6cc70620ebf97de1ee0a99a20->enter($__internal_5fc18dbbbfcdf2dfcf2f1be6118b52fc18eb31c6cc70620ebf97de1ee0a99a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpoOferta"));

        
        $__internal_5fc18dbbbfcdf2dfcf2f1be6118b52fc18eb31c6cc70620ebf97de1ee0a99a20->leave($__internal_5fc18dbbbfcdf2dfcf2f1be6118b52fc18eb31c6cc70620ebf97de1ee0a99a20_prof);

    }

    public function getTemplateName()
    {
        return "PCBundle::plantillaPDF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 21,  77 => 6,  66 => 22,  64 => 21,  59 => 19,  55 => 18,  46 => 12,  42 => 11,  36 => 8,  31 => 6,  24 => 1,);
    }
}
