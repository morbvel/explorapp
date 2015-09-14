<?php

/* PCBundle:vista:nuevoRegistroProductos.html.twig */
class __TwigTemplate_e244e7313f716cc32e03a3069028921c3bc9dd4b8b940a23b3b1df153070054a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCBundle::plantillaRegistros.html.twig", "PCBundle:vista:nuevoRegistroProductos.html.twig", 1);
        $this->blocks = array(
            'titleRegistros' => array($this, 'block_titleRegistros'),
            'videoRegistro' => array($this, 'block_videoRegistro'),
            'tituloRegistro' => array($this, 'block_tituloRegistro'),
            'urlDestino' => array($this, 'block_urlDestino'),
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
        $__internal_a8f968afcd328cdfbf7e9fcaafe4c3b451e8e7a3c3f664595a2621525f35467c = $this->env->getExtension("native_profiler");
        $__internal_a8f968afcd328cdfbf7e9fcaafe4c3b451e8e7a3c3f664595a2621525f35467c->enter($__internal_a8f968afcd328cdfbf7e9fcaafe4c3b451e8e7a3c3f664595a2621525f35467c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle:vista:nuevoRegistroProductos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8f968afcd328cdfbf7e9fcaafe4c3b451e8e7a3c3f664595a2621525f35467c->leave($__internal_a8f968afcd328cdfbf7e9fcaafe4c3b451e8e7a3c3f664595a2621525f35467c_prof);

    }

    // line 4
    public function block_titleRegistros($context, array $blocks = array())
    {
        $__internal_4bf1394c8168a1af80d58a77230d76e07d2e176f35c6f1c06cdb2362ca33b094 = $this->env->getExtension("native_profiler");
        $__internal_4bf1394c8168a1af80d58a77230d76e07d2e176f35c6f1c06cdb2362ca33b094->enter($__internal_4bf1394c8168a1af80d58a77230d76e07d2e176f35c6f1c06cdb2362ca33b094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleRegistros"));

        // line 5
        echo "\tNuevo Registro Restaurantes
";
        
        $__internal_4bf1394c8168a1af80d58a77230d76e07d2e176f35c6f1c06cdb2362ca33b094->leave($__internal_4bf1394c8168a1af80d58a77230d76e07d2e176f35c6f1c06cdb2362ca33b094_prof);

    }

    // line 9
    public function block_videoRegistro($context, array $blocks = array())
    {
        $__internal_0833376eeae2048234158040697599d92d594119339d50638dbd8b6ce9b460d7 = $this->env->getExtension("native_profiler");
        $__internal_0833376eeae2048234158040697599d92d594119339d50638dbd8b6ce9b460d7->enter($__internal_0833376eeae2048234158040697599d92d594119339d50638dbd8b6ce9b460d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "videoRegistro"));

        // line 10
        echo "\t<video id=\"videoFondo\" autoplay loop>
\t\t<source src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("videos/videoNuevoRegistroProductos.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\"></source>
\t</video>
";
        
        $__internal_0833376eeae2048234158040697599d92d594119339d50638dbd8b6ce9b460d7->leave($__internal_0833376eeae2048234158040697599d92d594119339d50638dbd8b6ce9b460d7_prof);

    }

    // line 15
    public function block_tituloRegistro($context, array $blocks = array())
    {
        $__internal_6e127f926318e8ef231a7d18f0f94d7a25da5bf69cf391976d86f3f6dc0cf263 = $this->env->getExtension("native_profiler");
        $__internal_6e127f926318e8ef231a7d18f0f94d7a25da5bf69cf391976d86f3f6dc0cf263->enter($__internal_6e127f926318e8ef231a7d18f0f94d7a25da5bf69cf391976d86f3f6dc0cf263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tituloRegistro"));

        // line 16
        echo "\tNuevo Registro Productos
";
        
        $__internal_6e127f926318e8ef231a7d18f0f94d7a25da5bf69cf391976d86f3f6dc0cf263->leave($__internal_6e127f926318e8ef231a7d18f0f94d7a25da5bf69cf391976d86f3f6dc0cf263_prof);

    }

    // line 20
    public function block_urlDestino($context, array $blocks = array())
    {
        $__internal_126e2d0d86126b60afef3393fb63932a372b77766c7617a2b8997caf8334d686 = $this->env->getExtension("native_profiler");
        $__internal_126e2d0d86126b60afef3393fb63932a372b77766c7617a2b8997caf8334d686->enter($__internal_126e2d0d86126b60afef3393fb63932a372b77766c7617a2b8997caf8334d686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino"));

        // line 21
        echo "\t'";
        echo $this->env->getExtension('routing')->getPath("pc_perfilusuario");
        echo "'
";
        
        $__internal_126e2d0d86126b60afef3393fb63932a372b77766c7617a2b8997caf8334d686->leave($__internal_126e2d0d86126b60afef3393fb63932a372b77766c7617a2b8997caf8334d686_prof);

    }

    // line 25
    public function block_inputHidden($context, array $blocks = array())
    {
        $__internal_81d26bdce525b2ff5ca629565ffae0b6154bf83f15537ccd6eb26548376ec1a9 = $this->env->getExtension("native_profiler");
        $__internal_81d26bdce525b2ff5ca629565ffae0b6154bf83f15537ccd6eb26548376ec1a9->enter($__internal_81d26bdce525b2ff5ca629565ffae0b6154bf83f15537ccd6eb26548376ec1a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inputHidden"));

        // line 26
        echo "\t<input type=\"hidden\" name=\"loginNuevoRegistroProductos\" value=\"1000at200j\">\t
";
        
        $__internal_81d26bdce525b2ff5ca629565ffae0b6154bf83f15537ccd6eb26548376ec1a9->leave($__internal_81d26bdce525b2ff5ca629565ffae0b6154bf83f15537ccd6eb26548376ec1a9_prof);

    }

    // line 30
    public function block_textoAcceder($context, array $blocks = array())
    {
        $__internal_b55233e90beaf390aeeed22c37f61d78750aa6502b7d6a251f550ddaf6fbc8c0 = $this->env->getExtension("native_profiler");
        $__internal_b55233e90beaf390aeeed22c37f61d78750aa6502b7d6a251f550ddaf6fbc8c0->enter($__internal_b55233e90beaf390aeeed22c37f61d78750aa6502b7d6a251f550ddaf6fbc8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textoAcceder"));

        // line 31
        echo "\t<p id=\"parrafoAccederUsuarios\">Para registrar un nuevo producto, primero debe iniciar sesión o darse de alta como usuario en <a id=\"abrirPopUpEnlace\" href=\"#\">este enlace</a>.</p>
";
        
        $__internal_b55233e90beaf390aeeed22c37f61d78750aa6502b7d6a251f550ddaf6fbc8c0->leave($__internal_b55233e90beaf390aeeed22c37f61d78750aa6502b7d6a251f550ddaf6fbc8c0_prof);

    }

    // line 34
    public function block_formularioRegistro($context, array $blocks = array())
    {
        $__internal_8a57d1944f6d45bbc21806449e55fecd2d54e0a2649e984d79193fa41874e219 = $this->env->getExtension("native_profiler");
        $__internal_8a57d1944f6d45bbc21806449e55fecd2d54e0a2649e984d79193fa41874e219->enter($__internal_8a57d1944f6d45bbc21806449e55fecd2d54e0a2649e984d79193fa41874e219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formularioRegistro"));

        echo "\t\t\t
\t<form action=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("pc_guardarregistroproductos");
        echo "\" method=\"post\" id=\"formNuevoRegistroProductos\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formNuevoRegistroProductos"]) ? $context["formNuevoRegistroProductos"] : $this->getContext($context, "formNuevoRegistroProductos")), 'enctype');
        echo ">
\t\t
\t\t";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formNuevoRegistroProductos"]) ? $context["formNuevoRegistroProductos"] : $this->getContext($context, "formNuevoRegistroProductos")), 'widget');
        echo "
\t\t<input type=\"submit\" id=\"aceptarNuevoRegistroProductos\" name=\"nuevoRegistroProductos\" value=\"Aceptar Nuevo Registro\"/>
\t</form>
";
        
        $__internal_8a57d1944f6d45bbc21806449e55fecd2d54e0a2649e984d79193fa41874e219->leave($__internal_8a57d1944f6d45bbc21806449e55fecd2d54e0a2649e984d79193fa41874e219_prof);

    }

    public function getTemplateName()
    {
        return "PCBundle:vista:nuevoRegistroProductos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 37,  139 => 35,  131 => 34,  123 => 31,  117 => 30,  109 => 26,  103 => 25,  93 => 21,  87 => 20,  79 => 16,  73 => 15,  63 => 11,  60 => 10,  54 => 9,  46 => 5,  40 => 4,  11 => 1,);
    }
}
