<?php

/* MobileBundle:Default:pruebasListas.html.twig */
class __TwigTemplate_0149acd67a3cf59652f129ea8a7178ad328dd17a439c7dec0ad388952be2bf82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de9a5191702c1130e61e39f4159cc7e51497e633a740ea9ddef2b28c5cd9dc79 = $this->env->getExtension("native_profiler");
        $__internal_de9a5191702c1130e61e39f4159cc7e51497e633a740ea9ddef2b28c5cd9dc79->enter($__internal_de9a5191702c1130e61e39f4159cc7e51497e633a740ea9ddef2b28c5cd9dc79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MobileBundle:Default:pruebasListas.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>T&iacute;tulo de la p&aacute;gina</title>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css\">
    </head>
    <body>
        <div data-role=\"page\" id=\"inicio\">
            <div data-role=\"header\">
                <h1>T&iacute;tulo</h1>
            </div>
            <div data-role=\"content\">
                <p>Contenido de la p&aacute;gina.</p>
            </div>
\t\t
\t\t<ul data-role=\"listview\" data-inset=\"true\">
\t\t    <li><a href=\"#tecnologias\" data-transition=\"fade\">Enlace uno. Cambiar de Pagina</a></li>
\t\t    <li><a href=\"#\">Enlace dos</a></li>
\t\t    <li><a href=\"#\">Enlace tres</a></li>
\t\t</ul>

            <div data-role=\"footer\">
                <p>Pie de la p&aacute;gina</p>
            </div>
        </div>
        <div data-role=\"page\" id=\"tecnologias\">
            <div data-role=\"header\">
                <h1>T&iacute;tulo dos</h1>
            </div>
            <div data-role=\"content\">
                <p>Contenido de la p&aacute;gina dos</p>
            </div>
            <div data-role=\"footer\">
                <p>Pie de la p&aacute;gina dos</p>
            </div>
        </div>
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js\"></script>
        <script src=\"http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js\"></script>
    </body>
</html>
";
        
        $__internal_de9a5191702c1130e61e39f4159cc7e51497e633a740ea9ddef2b28c5cd9dc79->leave($__internal_de9a5191702c1130e61e39f4159cc7e51497e633a740ea9ddef2b28c5cd9dc79_prof);

    }

    public function getTemplateName()
    {
        return "MobileBundle:Default:pruebasListas.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
