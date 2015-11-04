<?php

/* PCBundle:vista:nuevoRegistroOfertas.html.twig */
class __TwigTemplate_3cdd4575364b16212ca574b1539430ecf6fba77bb2a49a9ccce21e41cde011a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCBundle::plantillaRegistros.html.twig", "PCBundle:vista:nuevoRegistroOfertas.html.twig", 1);
        $this->blocks = array(
            'titleRegistros' => array($this, 'block_titleRegistros'),
            'videoRegistro' => array($this, 'block_videoRegistro'),
            'tituloRegistro' => array($this, 'block_tituloRegistro'),
            'urlDestino' => array($this, 'block_urlDestino'),
            'urlDestino2' => array($this, 'block_urlDestino2'),
            'inputHidden' => array($this, 'block_inputHidden'),
            'textoAcceder' => array($this, 'block_textoAcceder'),
            'formularioRegistro' => array($this, 'block_formularioRegistro'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PCBundle::plantillaRegistros.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2daad984f3482aa9104f510a2a1fac20be0511dda6ebc7e9966ace684f00dd70 = $this->env->getExtension("native_profiler");
        $__internal_2daad984f3482aa9104f510a2a1fac20be0511dda6ebc7e9966ace684f00dd70->enter($__internal_2daad984f3482aa9104f510a2a1fac20be0511dda6ebc7e9966ace684f00dd70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle:vista:nuevoRegistroOfertas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2daad984f3482aa9104f510a2a1fac20be0511dda6ebc7e9966ace684f00dd70->leave($__internal_2daad984f3482aa9104f510a2a1fac20be0511dda6ebc7e9966ace684f00dd70_prof);

    }

    // line 4
    public function block_titleRegistros($context, array $blocks = array())
    {
        $__internal_fbb626d390b38c0bf10052b0cc796cf21ed5df4375daa2e03cc4a2907a259b66 = $this->env->getExtension("native_profiler");
        $__internal_fbb626d390b38c0bf10052b0cc796cf21ed5df4375daa2e03cc4a2907a259b66->enter($__internal_fbb626d390b38c0bf10052b0cc796cf21ed5df4375daa2e03cc4a2907a259b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleRegistros"));

        // line 5
        echo "\tNuevo Registro Oferta
";
        
        $__internal_fbb626d390b38c0bf10052b0cc796cf21ed5df4375daa2e03cc4a2907a259b66->leave($__internal_fbb626d390b38c0bf10052b0cc796cf21ed5df4375daa2e03cc4a2907a259b66_prof);

    }

    // line 9
    public function block_videoRegistro($context, array $blocks = array())
    {
        $__internal_b99e08c1f4b8682828bc9550059c462aa9205fae30ee31855c4c479344d83a6f = $this->env->getExtension("native_profiler");
        $__internal_b99e08c1f4b8682828bc9550059c462aa9205fae30ee31855c4c479344d83a6f->enter($__internal_b99e08c1f4b8682828bc9550059c462aa9205fae30ee31855c4c479344d83a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "videoRegistro"));

        // line 10
        echo "\t<video id=\"videoFondo\" autoplay loop>
\t\t<source src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("videos/videoNuevoRegistroOfertas.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\"></source>
\t</video>
";
        
        $__internal_b99e08c1f4b8682828bc9550059c462aa9205fae30ee31855c4c479344d83a6f->leave($__internal_b99e08c1f4b8682828bc9550059c462aa9205fae30ee31855c4c479344d83a6f_prof);

    }

    // line 15
    public function block_tituloRegistro($context, array $blocks = array())
    {
        $__internal_e9981b27c55fdb3128777aa0d510c7acb2c2d7ebb5cf9c5222c0a65992f1881a = $this->env->getExtension("native_profiler");
        $__internal_e9981b27c55fdb3128777aa0d510c7acb2c2d7ebb5cf9c5222c0a65992f1881a->enter($__internal_e9981b27c55fdb3128777aa0d510c7acb2c2d7ebb5cf9c5222c0a65992f1881a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tituloRegistro"));

        // line 16
        echo "\tNuevo Registro Oferta
";
        
        $__internal_e9981b27c55fdb3128777aa0d510c7acb2c2d7ebb5cf9c5222c0a65992f1881a->leave($__internal_e9981b27c55fdb3128777aa0d510c7acb2c2d7ebb5cf9c5222c0a65992f1881a_prof);

    }

    // line 20
    public function block_urlDestino($context, array $blocks = array())
    {
        $__internal_011fc6bc354d09cab6a7fa5e5dcfc10f29ab7f37ae06d3652b4cae1d0b8b236b = $this->env->getExtension("native_profiler");
        $__internal_011fc6bc354d09cab6a7fa5e5dcfc10f29ab7f37ae06d3652b4cae1d0b8b236b->enter($__internal_011fc6bc354d09cab6a7fa5e5dcfc10f29ab7f37ae06d3652b4cae1d0b8b236b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino"));

        // line 21
        echo "\t'";
        echo $this->env->getExtension('routing')->getPath("pc_perfilusuario");
        echo "'
";
        
        $__internal_011fc6bc354d09cab6a7fa5e5dcfc10f29ab7f37ae06d3652b4cae1d0b8b236b->leave($__internal_011fc6bc354d09cab6a7fa5e5dcfc10f29ab7f37ae06d3652b4cae1d0b8b236b_prof);

    }

    // line 24
    public function block_urlDestino2($context, array $blocks = array())
    {
        $__internal_174a6e4176839f5090fa37baa5a2105754f2b0f147834ade873ce68bea1a4381 = $this->env->getExtension("native_profiler");
        $__internal_174a6e4176839f5090fa37baa5a2105754f2b0f147834ade873ce68bea1a4381->enter($__internal_174a6e4176839f5090fa37baa5a2105754f2b0f147834ade873ce68bea1a4381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino2"));

        // line 25
        echo "\t'";
        echo $this->env->getExtension('routing')->getPath("pc_nuevoregistroofertas");
        echo "'
";
        
        $__internal_174a6e4176839f5090fa37baa5a2105754f2b0f147834ade873ce68bea1a4381->leave($__internal_174a6e4176839f5090fa37baa5a2105754f2b0f147834ade873ce68bea1a4381_prof);

    }

    // line 29
    public function block_inputHidden($context, array $blocks = array())
    {
        $__internal_f6a8b0df435b897d54f8c51dc68c03202428d28ab67b5e759aa2bfe294c7f581 = $this->env->getExtension("native_profiler");
        $__internal_f6a8b0df435b897d54f8c51dc68c03202428d28ab67b5e759aa2bfe294c7f581->enter($__internal_f6a8b0df435b897d54f8c51dc68c03202428d28ab67b5e759aa2bfe294c7f581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inputHidden"));

        // line 30
        echo "\t<input type=\"hidden\" name=\"loginNuevoRegistroOfertas\" value=\"1000at200j\">\t
";
        
        $__internal_f6a8b0df435b897d54f8c51dc68c03202428d28ab67b5e759aa2bfe294c7f581->leave($__internal_f6a8b0df435b897d54f8c51dc68c03202428d28ab67b5e759aa2bfe294c7f581_prof);

    }

    // line 34
    public function block_textoAcceder($context, array $blocks = array())
    {
        $__internal_aed4c7cb9ed2c4e75396d5f38a1a63c7b065a59b9f2b7161d30c84ccd304dc79 = $this->env->getExtension("native_profiler");
        $__internal_aed4c7cb9ed2c4e75396d5f38a1a63c7b065a59b9f2b7161d30c84ccd304dc79->enter($__internal_aed4c7cb9ed2c4e75396d5f38a1a63c7b065a59b9f2b7161d30c84ccd304dc79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textoAcceder"));

        // line 35
        echo "\t<p id=\"parrafoAccederUsuarios\">Para registrar una nueva oferta, primero debe iniciar sesión o darse de alta como usuario en <a id=\"abrirPopUpEnlace\" href=\"#\">este enlace</a>.</p>
";
        
        $__internal_aed4c7cb9ed2c4e75396d5f38a1a63c7b065a59b9f2b7161d30c84ccd304dc79->leave($__internal_aed4c7cb9ed2c4e75396d5f38a1a63c7b065a59b9f2b7161d30c84ccd304dc79_prof);

    }

    // line 38
    public function block_formularioRegistro($context, array $blocks = array())
    {
        $__internal_4f743da4b6c0113f08d7e934973c715512cbde46c0f23a33205215008bcceb70 = $this->env->getExtension("native_profiler");
        $__internal_4f743da4b6c0113f08d7e934973c715512cbde46c0f23a33205215008bcceb70->enter($__internal_4f743da4b6c0113f08d7e934973c715512cbde46c0f23a33205215008bcceb70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formularioRegistro"));

        echo "\t\t\t
\t<form action=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("pc_guardarregistroofertas");
        echo "\" method=\"post\" id=\"formNuevoRegistroOfertas\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formNuevoRegistroOfertas"]) ? $context["formNuevoRegistroOfertas"] : $this->getContext($context, "formNuevoRegistroOfertas")), 'enctype');
        echo ">
\t\t
\t\t";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formNuevoRegistroOfertas"]) ? $context["formNuevoRegistroOfertas"] : $this->getContext($context, "formNuevoRegistroOfertas")), 'widget');
        echo "
\t\t<input type=\"submit\" id=\"aceptarNuevoRegistroOfertas\" name=\"nuevoRegistroOfertas\" value=\"Aceptar Nuevo Registro\"/>
\t</form>
";
        
        $__internal_4f743da4b6c0113f08d7e934973c715512cbde46c0f23a33205215008bcceb70->leave($__internal_4f743da4b6c0113f08d7e934973c715512cbde46c0f23a33205215008bcceb70_prof);

    }

    public function getTemplateName()
    {
        return "PCBundle:vista:nuevoRegistroOfertas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 41,  156 => 39,  148 => 38,  140 => 35,  134 => 34,  126 => 30,  120 => 29,  110 => 25,  104 => 24,  94 => 21,  88 => 20,  80 => 16,  74 => 15,  64 => 11,  61 => 10,  55 => 9,  47 => 5,  41 => 4,  11 => 1,);
    }
}
