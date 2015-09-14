<?php

/* MobileBundle::plantillaRegistros.html.twig */
class __TwigTemplate_a6fc93c3a4297deb2af8d58b9666b0f6e20344f9ba9c83a4acd54d930fd2b964 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'tituloPagina' => array($this, 'block_tituloPagina'),
            'urlDestino' => array($this, 'block_urlDestino'),
            'nombreFormulario' => array($this, 'block_nombreFormulario'),
            'formulario' => array($this, 'block_formulario'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0fc284dd32f926a99585190f486bb2d7f05e40d1786729d91438c574ec920aa4 = $this->env->getExtension("native_profiler");
        $__internal_0fc284dd32f926a99585190f486bb2d7f05e40d1786729d91438c574ec920aa4->enter($__internal_0fc284dd32f926a99585190f486bb2d7f05e40d1786729d91438c574ec920aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MobileBundle::plantillaRegistros.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>";
        // line 5
        $this->displayBlock('tituloPagina', $context, $blocks);
        echo "</title>

        <link rel=\"stylesheet\" href=\"http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/estilosMobile.css"), "html", null, true);
        echo "\" />
\t<script src=\"http://code.jquery.com/jquery-1.8.2.min.js\"></script>
\t<script src=\"http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js\"></script>
    </head>

    <body>
\t<div data-role=\"page\" id=\"paginaNuevoRegistro\"> 
\t\t<div data-role=\"content\">
\t\t\t<a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("mobile_homepage");
        echo "\" data-transition=\"fade\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logoCerveza.jpg"), "html", null, true);
        echo "\" ></img></a>
\t\t\t<form action=\"";
        // line 17
        $this->displayBlock('urlDestino', $context, $blocks);
        echo "\" method=\"post\" id=\"formu\" ";
        $this->displayBlock('nombreFormulario', $context, $blocks);
        echo ">
\t\t\t\t";
        // line 18
        $this->displayBlock('formulario', $context, $blocks);
        // line 19
        echo "\t\t\t</form>\t\t\t
\t\t\t
\t\t</div>
\t</div>

    </body>
</html>
";
        
        $__internal_0fc284dd32f926a99585190f486bb2d7f05e40d1786729d91438c574ec920aa4->leave($__internal_0fc284dd32f926a99585190f486bb2d7f05e40d1786729d91438c574ec920aa4_prof);

    }

    // line 5
    public function block_tituloPagina($context, array $blocks = array())
    {
        $__internal_07d8f285a2573d5c9ea3a0f72154ee3f7fb5cea9c6391886fb66276beb7c9a8f = $this->env->getExtension("native_profiler");
        $__internal_07d8f285a2573d5c9ea3a0f72154ee3f7fb5cea9c6391886fb66276beb7c9a8f->enter($__internal_07d8f285a2573d5c9ea3a0f72154ee3f7fb5cea9c6391886fb66276beb7c9a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tituloPagina"));

        
        $__internal_07d8f285a2573d5c9ea3a0f72154ee3f7fb5cea9c6391886fb66276beb7c9a8f->leave($__internal_07d8f285a2573d5c9ea3a0f72154ee3f7fb5cea9c6391886fb66276beb7c9a8f_prof);

    }

    // line 17
    public function block_urlDestino($context, array $blocks = array())
    {
        $__internal_052b7ebd820cc7995ffc35c36e9c665d974a4d66d5d70c4fedf09a66d4c7f5dd = $this->env->getExtension("native_profiler");
        $__internal_052b7ebd820cc7995ffc35c36e9c665d974a4d66d5d70c4fedf09a66d4c7f5dd->enter($__internal_052b7ebd820cc7995ffc35c36e9c665d974a4d66d5d70c4fedf09a66d4c7f5dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino"));

        
        $__internal_052b7ebd820cc7995ffc35c36e9c665d974a4d66d5d70c4fedf09a66d4c7f5dd->leave($__internal_052b7ebd820cc7995ffc35c36e9c665d974a4d66d5d70c4fedf09a66d4c7f5dd_prof);

    }

    public function block_nombreFormulario($context, array $blocks = array())
    {
        $__internal_5759d7b7cc0ce6d443ebdcde8a998c5c6aa6e393b9127a45386776e84813136d = $this->env->getExtension("native_profiler");
        $__internal_5759d7b7cc0ce6d443ebdcde8a998c5c6aa6e393b9127a45386776e84813136d->enter($__internal_5759d7b7cc0ce6d443ebdcde8a998c5c6aa6e393b9127a45386776e84813136d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nombreFormulario"));

        
        $__internal_5759d7b7cc0ce6d443ebdcde8a998c5c6aa6e393b9127a45386776e84813136d->leave($__internal_5759d7b7cc0ce6d443ebdcde8a998c5c6aa6e393b9127a45386776e84813136d_prof);

    }

    // line 18
    public function block_formulario($context, array $blocks = array())
    {
        $__internal_ee32844e2f27bc3d871c53848c9f3254bc8ecdd2b29d991e4c9bac600819b692 = $this->env->getExtension("native_profiler");
        $__internal_ee32844e2f27bc3d871c53848c9f3254bc8ecdd2b29d991e4c9bac600819b692->enter($__internal_ee32844e2f27bc3d871c53848c9f3254bc8ecdd2b29d991e4c9bac600819b692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulario"));

        
        $__internal_ee32844e2f27bc3d871c53848c9f3254bc8ecdd2b29d991e4c9bac600819b692->leave($__internal_ee32844e2f27bc3d871c53848c9f3254bc8ecdd2b29d991e4c9bac600819b692_prof);

    }

    public function getTemplateName()
    {
        return "MobileBundle::plantillaRegistros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 18,  88 => 17,  77 => 5,  63 => 19,  61 => 18,  55 => 17,  49 => 16,  38 => 8,  32 => 5,  26 => 1,);
    }
}
