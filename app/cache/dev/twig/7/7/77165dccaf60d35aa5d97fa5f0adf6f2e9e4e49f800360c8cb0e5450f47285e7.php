<?php

/* PCBundle::plantillaPDF.html.twig */
class __TwigTemplate_77165dccaf60d35aa5d97fa5f0adf6f2e9e4e49f800360c8cb0e5450f47285e7 extends Twig_Template
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
        $__internal_a43666719dba1ec8652d75eaa9a3a8e59d02379a1cc5aaaa8cc6c6e8be983f15 = $this->env->getExtension("native_profiler");
        $__internal_a43666719dba1ec8652d75eaa9a3a8e59d02379a1cc5aaaa8cc6c6e8be983f15->enter($__internal_a43666719dba1ec8652d75eaa9a3a8e59d02379a1cc5aaaa8cc6c6e8be983f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle::plantillaPDF.html.twig"));

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
\t</head>

\t<body id=\"cuerpoPDF\">
\t\t<div class=\"contenedorPDF\">
\t\t\t<img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenNegocio"]) ? $context["rutaImagenNegocio"] : $this->getContext($context, "rutaImagenNegocio"))), "html", null, true);
        echo "\" id=\"fotoNegocio\"></img>
\t\t\t<img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logoCerveza.jpg"), "html", null, true);
        echo "\" id=\"logoExplorapp\"></img>

\t\t\t";
        // line 19
        $this->displayBlock('cuerpoOferta', $context, $blocks);
        // line 20
        echo "\t\t</div>
\t</body>

</html>
";
        
        $__internal_a43666719dba1ec8652d75eaa9a3a8e59d02379a1cc5aaaa8cc6c6e8be983f15->leave($__internal_a43666719dba1ec8652d75eaa9a3a8e59d02379a1cc5aaaa8cc6c6e8be983f15_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_f9420ab38dffd4f72117692e99fe46a4790c4e79ef3c5da33d15768fd218fa84 = $this->env->getExtension("native_profiler");
        $__internal_f9420ab38dffd4f72117692e99fe46a4790c4e79ef3c5da33d15768fd218fa84->enter($__internal_f9420ab38dffd4f72117692e99fe46a4790c4e79ef3c5da33d15768fd218fa84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f9420ab38dffd4f72117692e99fe46a4790c4e79ef3c5da33d15768fd218fa84->leave($__internal_f9420ab38dffd4f72117692e99fe46a4790c4e79ef3c5da33d15768fd218fa84_prof);

    }

    // line 19
    public function block_cuerpoOferta($context, array $blocks = array())
    {
        $__internal_4380547c5f45e7e59f530b178e0781be622695e5f1b56645848e362bdd91272b = $this->env->getExtension("native_profiler");
        $__internal_4380547c5f45e7e59f530b178e0781be622695e5f1b56645848e362bdd91272b->enter($__internal_4380547c5f45e7e59f530b178e0781be622695e5f1b56645848e362bdd91272b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpoOferta"));

        
        $__internal_4380547c5f45e7e59f530b178e0781be622695e5f1b56645848e362bdd91272b->leave($__internal_4380547c5f45e7e59f530b178e0781be622695e5f1b56645848e362bdd91272b_prof);

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
        return array (  83 => 19,  72 => 6,  61 => 20,  59 => 19,  54 => 17,  50 => 16,  42 => 11,  36 => 8,  31 => 6,  24 => 1,);
    }
}
