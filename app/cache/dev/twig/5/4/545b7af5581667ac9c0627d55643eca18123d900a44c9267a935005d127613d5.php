<?php

/* PCBundle:vista:nuevoRegistroProductos.html.twig */
class __TwigTemplate_545b7af5581667ac9c0627d55643eca18123d900a44c9267a935005d127613d5 extends Twig_Template
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
        $__internal_7814b44f6d049f6c99658b0e1bdbd646eef2ffac2a489afd790a5669b2331406 = $this->env->getExtension("native_profiler");
        $__internal_7814b44f6d049f6c99658b0e1bdbd646eef2ffac2a489afd790a5669b2331406->enter($__internal_7814b44f6d049f6c99658b0e1bdbd646eef2ffac2a489afd790a5669b2331406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle:vista:nuevoRegistroProductos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7814b44f6d049f6c99658b0e1bdbd646eef2ffac2a489afd790a5669b2331406->leave($__internal_7814b44f6d049f6c99658b0e1bdbd646eef2ffac2a489afd790a5669b2331406_prof);

    }

    // line 4
    public function block_titleRegistros($context, array $blocks = array())
    {
        $__internal_7b80bdfea6bba3ea9e94d74293e9f8e892249a3e03180280e69df0bcdd7acfe4 = $this->env->getExtension("native_profiler");
        $__internal_7b80bdfea6bba3ea9e94d74293e9f8e892249a3e03180280e69df0bcdd7acfe4->enter($__internal_7b80bdfea6bba3ea9e94d74293e9f8e892249a3e03180280e69df0bcdd7acfe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleRegistros"));

        // line 5
        echo "\tNuevo Registro Restaurantes
";
        
        $__internal_7b80bdfea6bba3ea9e94d74293e9f8e892249a3e03180280e69df0bcdd7acfe4->leave($__internal_7b80bdfea6bba3ea9e94d74293e9f8e892249a3e03180280e69df0bcdd7acfe4_prof);

    }

    // line 9
    public function block_videoRegistro($context, array $blocks = array())
    {
        $__internal_80cc136831c305fcfb0bcf6f649c9926efc4c7a82dd44f4917d3579bd8211bd4 = $this->env->getExtension("native_profiler");
        $__internal_80cc136831c305fcfb0bcf6f649c9926efc4c7a82dd44f4917d3579bd8211bd4->enter($__internal_80cc136831c305fcfb0bcf6f649c9926efc4c7a82dd44f4917d3579bd8211bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "videoRegistro"));

        // line 10
        echo "\t<video id=\"videoFondo\" autoplay loop>
\t\t<source src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("videos/videoNuevoRegistroProductos.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\"></source>
\t</video>
";
        
        $__internal_80cc136831c305fcfb0bcf6f649c9926efc4c7a82dd44f4917d3579bd8211bd4->leave($__internal_80cc136831c305fcfb0bcf6f649c9926efc4c7a82dd44f4917d3579bd8211bd4_prof);

    }

    // line 15
    public function block_tituloRegistro($context, array $blocks = array())
    {
        $__internal_82e45ced2391a1e18842077c28e418a2bbb214d038eb63aed2023c38acbcd5b8 = $this->env->getExtension("native_profiler");
        $__internal_82e45ced2391a1e18842077c28e418a2bbb214d038eb63aed2023c38acbcd5b8->enter($__internal_82e45ced2391a1e18842077c28e418a2bbb214d038eb63aed2023c38acbcd5b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tituloRegistro"));

        // line 16
        echo "\tNuevo Registro Productos
";
        
        $__internal_82e45ced2391a1e18842077c28e418a2bbb214d038eb63aed2023c38acbcd5b8->leave($__internal_82e45ced2391a1e18842077c28e418a2bbb214d038eb63aed2023c38acbcd5b8_prof);

    }

    // line 20
    public function block_urlDestino($context, array $blocks = array())
    {
        $__internal_bd7051df451f36a5a7ed9f1e836b023ecb1f6f8b2946b4e1e611329e5da886f4 = $this->env->getExtension("native_profiler");
        $__internal_bd7051df451f36a5a7ed9f1e836b023ecb1f6f8b2946b4e1e611329e5da886f4->enter($__internal_bd7051df451f36a5a7ed9f1e836b023ecb1f6f8b2946b4e1e611329e5da886f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino"));

        // line 21
        echo "\t'";
        echo $this->env->getExtension('routing')->getPath("pc_perfilusuario");
        echo "'
";
        
        $__internal_bd7051df451f36a5a7ed9f1e836b023ecb1f6f8b2946b4e1e611329e5da886f4->leave($__internal_bd7051df451f36a5a7ed9f1e836b023ecb1f6f8b2946b4e1e611329e5da886f4_prof);

    }

    // line 25
    public function block_inputHidden($context, array $blocks = array())
    {
        $__internal_5c636f669ae62a3c474da873b7b280d9a9003052d71030854ccac4dd56e35b08 = $this->env->getExtension("native_profiler");
        $__internal_5c636f669ae62a3c474da873b7b280d9a9003052d71030854ccac4dd56e35b08->enter($__internal_5c636f669ae62a3c474da873b7b280d9a9003052d71030854ccac4dd56e35b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inputHidden"));

        // line 26
        echo "\t<input type=\"hidden\" name=\"loginNuevoRegistroProductos\" value=\"1000at200j\">\t
";
        
        $__internal_5c636f669ae62a3c474da873b7b280d9a9003052d71030854ccac4dd56e35b08->leave($__internal_5c636f669ae62a3c474da873b7b280d9a9003052d71030854ccac4dd56e35b08_prof);

    }

    // line 30
    public function block_textoAcceder($context, array $blocks = array())
    {
        $__internal_3c67ec64a450640943fbf0c7af0eeb7b5091c4a3b98d3dab3e10265ea052dd5c = $this->env->getExtension("native_profiler");
        $__internal_3c67ec64a450640943fbf0c7af0eeb7b5091c4a3b98d3dab3e10265ea052dd5c->enter($__internal_3c67ec64a450640943fbf0c7af0eeb7b5091c4a3b98d3dab3e10265ea052dd5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textoAcceder"));

        // line 31
        echo "\t<p id=\"parrafoAccederUsuarios\">Para registrar un nuevo producto, primero debe iniciar sesión o darse de alta como usuario en <a id=\"abrirPopUpEnlace\" href=\"#\">este enlace</a>.</p>
";
        
        $__internal_3c67ec64a450640943fbf0c7af0eeb7b5091c4a3b98d3dab3e10265ea052dd5c->leave($__internal_3c67ec64a450640943fbf0c7af0eeb7b5091c4a3b98d3dab3e10265ea052dd5c_prof);

    }

    // line 34
    public function block_formularioRegistro($context, array $blocks = array())
    {
        $__internal_b85955e139a0cb30aacf9f6d9c1fa9522bf76e9820eeaa3b8d3d06403183dc56 = $this->env->getExtension("native_profiler");
        $__internal_b85955e139a0cb30aacf9f6d9c1fa9522bf76e9820eeaa3b8d3d06403183dc56->enter($__internal_b85955e139a0cb30aacf9f6d9c1fa9522bf76e9820eeaa3b8d3d06403183dc56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formularioRegistro"));

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
        
        $__internal_b85955e139a0cb30aacf9f6d9c1fa9522bf76e9820eeaa3b8d3d06403183dc56->leave($__internal_b85955e139a0cb30aacf9f6d9c1fa9522bf76e9820eeaa3b8d3d06403183dc56_prof);

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
