<?php

/* MobileBundle::vacio.html.twig */
class __TwigTemplate_48031e84cb19102934682073c84b09f20c673c21ef79c41762bfe5fae5421c0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'tituloPagina' => array($this, 'block_tituloPagina'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94b86e19d4db952d424a842a3b47db376018074aeeb20a2be9dca1f7d419f361 = $this->env->getExtension("native_profiler");
        $__internal_94b86e19d4db952d424a842a3b47db376018074aeeb20a2be9dca1f7d419f361->enter($__internal_94b86e19d4db952d424a842a3b47db376018074aeeb20a2be9dca1f7d419f361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MobileBundle::vacio.html.twig"));

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

    </body>
</html>
";
        
        $__internal_94b86e19d4db952d424a842a3b47db376018074aeeb20a2be9dca1f7d419f361->leave($__internal_94b86e19d4db952d424a842a3b47db376018074aeeb20a2be9dca1f7d419f361_prof);

    }

    // line 5
    public function block_tituloPagina($context, array $blocks = array())
    {
        $__internal_b241545724397c36a86d0a6a55e5d3c9cfc171c7144feb1e5cc402854843b14b = $this->env->getExtension("native_profiler");
        $__internal_b241545724397c36a86d0a6a55e5d3c9cfc171c7144feb1e5cc402854843b14b->enter($__internal_b241545724397c36a86d0a6a55e5d3c9cfc171c7144feb1e5cc402854843b14b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tituloPagina"));

        
        $__internal_b241545724397c36a86d0a6a55e5d3c9cfc171c7144feb1e5cc402854843b14b->leave($__internal_b241545724397c36a86d0a6a55e5d3c9cfc171c7144feb1e5cc402854843b14b_prof);

    }

    public function getTemplateName()
    {
        return "MobileBundle::vacio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 5,  35 => 8,  29 => 5,  23 => 1,);
    }
}
