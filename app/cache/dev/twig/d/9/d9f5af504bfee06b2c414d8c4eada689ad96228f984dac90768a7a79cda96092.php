<?php

/* PCBundle:vista:nuevoRegistroRestaurantes.html.twig */
class __TwigTemplate_d9f5af504bfee06b2c414d8c4eada689ad96228f984dac90768a7a79cda96092 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCBundle::plantillaRegistros.html.twig", "PCBundle:vista:nuevoRegistroRestaurantes.html.twig", 1);
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
        $__internal_1724d3d0cf0dd1102242c32ad2aac389b2be30f4923647221070ca196b205f9e = $this->env->getExtension("native_profiler");
        $__internal_1724d3d0cf0dd1102242c32ad2aac389b2be30f4923647221070ca196b205f9e->enter($__internal_1724d3d0cf0dd1102242c32ad2aac389b2be30f4923647221070ca196b205f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle:vista:nuevoRegistroRestaurantes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1724d3d0cf0dd1102242c32ad2aac389b2be30f4923647221070ca196b205f9e->leave($__internal_1724d3d0cf0dd1102242c32ad2aac389b2be30f4923647221070ca196b205f9e_prof);

    }

    // line 4
    public function block_titleRegistros($context, array $blocks = array())
    {
        $__internal_7657ecdbf5f74ae7af633a966c6ac94c533868646b8c54ee82d72b38d421aadd = $this->env->getExtension("native_profiler");
        $__internal_7657ecdbf5f74ae7af633a966c6ac94c533868646b8c54ee82d72b38d421aadd->enter($__internal_7657ecdbf5f74ae7af633a966c6ac94c533868646b8c54ee82d72b38d421aadd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleRegistros"));

        // line 5
        echo "\tNuevo Registro Restaurantes
";
        
        $__internal_7657ecdbf5f74ae7af633a966c6ac94c533868646b8c54ee82d72b38d421aadd->leave($__internal_7657ecdbf5f74ae7af633a966c6ac94c533868646b8c54ee82d72b38d421aadd_prof);

    }

    // line 9
    public function block_videoRegistro($context, array $blocks = array())
    {
        $__internal_5a07b658f2b016456508c0e1d956e86e88d6de55aebfa3438b24f7e3b9f844bc = $this->env->getExtension("native_profiler");
        $__internal_5a07b658f2b016456508c0e1d956e86e88d6de55aebfa3438b24f7e3b9f844bc->enter($__internal_5a07b658f2b016456508c0e1d956e86e88d6de55aebfa3438b24f7e3b9f844bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "videoRegistro"));

        // line 10
        echo "\t<video id=\"videoFondo\" autoplay loop>
\t\t<source src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("videos/videoNuevoRegistroRestaurantes.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\"></source>
\t</video>
";
        
        $__internal_5a07b658f2b016456508c0e1d956e86e88d6de55aebfa3438b24f7e3b9f844bc->leave($__internal_5a07b658f2b016456508c0e1d956e86e88d6de55aebfa3438b24f7e3b9f844bc_prof);

    }

    // line 15
    public function block_tituloRegistro($context, array $blocks = array())
    {
        $__internal_89e576471e2c00e5abeeb6a05818abc419d0edde2286335e7aa75bdd879baa98 = $this->env->getExtension("native_profiler");
        $__internal_89e576471e2c00e5abeeb6a05818abc419d0edde2286335e7aa75bdd879baa98->enter($__internal_89e576471e2c00e5abeeb6a05818abc419d0edde2286335e7aa75bdd879baa98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tituloRegistro"));

        // line 16
        echo "\tNuevo Registro Restaurantes
";
        
        $__internal_89e576471e2c00e5abeeb6a05818abc419d0edde2286335e7aa75bdd879baa98->leave($__internal_89e576471e2c00e5abeeb6a05818abc419d0edde2286335e7aa75bdd879baa98_prof);

    }

    // line 20
    public function block_urlDestino($context, array $blocks = array())
    {
        $__internal_3ca44a5b9df0161b1660c12f4966adf02521bcdefa0fd8653318b33305386f9d = $this->env->getExtension("native_profiler");
        $__internal_3ca44a5b9df0161b1660c12f4966adf02521bcdefa0fd8653318b33305386f9d->enter($__internal_3ca44a5b9df0161b1660c12f4966adf02521bcdefa0fd8653318b33305386f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino"));

        // line 21
        echo "\t'";
        echo $this->env->getExtension('routing')->getPath("pc_perfilusuario");
        echo "'
";
        
        $__internal_3ca44a5b9df0161b1660c12f4966adf02521bcdefa0fd8653318b33305386f9d->leave($__internal_3ca44a5b9df0161b1660c12f4966adf02521bcdefa0fd8653318b33305386f9d_prof);

    }

    // line 24
    public function block_urlDestino2($context, array $blocks = array())
    {
        $__internal_940130bdf44c2bcce07a813aa455f99a6a1a350432cdd3d3fa4c4a30310ce30f = $this->env->getExtension("native_profiler");
        $__internal_940130bdf44c2bcce07a813aa455f99a6a1a350432cdd3d3fa4c4a30310ce30f->enter($__internal_940130bdf44c2bcce07a813aa455f99a6a1a350432cdd3d3fa4c4a30310ce30f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino2"));

        // line 25
        echo "\t'";
        echo $this->env->getExtension('routing')->getPath("pc_nuevoregistroproductos");
        echo "'
";
        
        $__internal_940130bdf44c2bcce07a813aa455f99a6a1a350432cdd3d3fa4c4a30310ce30f->leave($__internal_940130bdf44c2bcce07a813aa455f99a6a1a350432cdd3d3fa4c4a30310ce30f_prof);

    }

    // line 29
    public function block_inputHidden($context, array $blocks = array())
    {
        $__internal_40df00768876ab0076d0b483dde4197134c5c94352e8b3d61ea7dec2e4e0b1ad = $this->env->getExtension("native_profiler");
        $__internal_40df00768876ab0076d0b483dde4197134c5c94352e8b3d61ea7dec2e4e0b1ad->enter($__internal_40df00768876ab0076d0b483dde4197134c5c94352e8b3d61ea7dec2e4e0b1ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inputHidden"));

        // line 30
        echo "\t<input type=\"hidden\" name=\"loginNuevoRegistroRestaurantes\" value=\"1000at200j\">\t
";
        
        $__internal_40df00768876ab0076d0b483dde4197134c5c94352e8b3d61ea7dec2e4e0b1ad->leave($__internal_40df00768876ab0076d0b483dde4197134c5c94352e8b3d61ea7dec2e4e0b1ad_prof);

    }

    // line 34
    public function block_textoAcceder($context, array $blocks = array())
    {
        $__internal_5c4271ade8813e290dbbfd442199ca1ac3d9812208c2b06cc94e76f6832c08e1 = $this->env->getExtension("native_profiler");
        $__internal_5c4271ade8813e290dbbfd442199ca1ac3d9812208c2b06cc94e76f6832c08e1->enter($__internal_5c4271ade8813e290dbbfd442199ca1ac3d9812208c2b06cc94e76f6832c08e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textoAcceder"));

        // line 35
        echo "\t<p id=\"parrafoAccederUsuarios\">Para registrar un nuevo restaurante, primero debe iniciar sesión o darse de alta como usuario en <a id=\"abrirPopUpEnlace\" href=\"#\">este enlace</a>.</p>
";
        
        $__internal_5c4271ade8813e290dbbfd442199ca1ac3d9812208c2b06cc94e76f6832c08e1->leave($__internal_5c4271ade8813e290dbbfd442199ca1ac3d9812208c2b06cc94e76f6832c08e1_prof);

    }

    // line 38
    public function block_formularioRegistro($context, array $blocks = array())
    {
        $__internal_d7bffbc5de63fd9500b45a277260153393d73a83a4ec72498201c8e444adafc9 = $this->env->getExtension("native_profiler");
        $__internal_d7bffbc5de63fd9500b45a277260153393d73a83a4ec72498201c8e444adafc9->enter($__internal_d7bffbc5de63fd9500b45a277260153393d73a83a4ec72498201c8e444adafc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formularioRegistro"));

        echo "\t\t\t
\t<form action=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("pc_nuevoregistrorestaurantes");
        echo "\" method=\"post\" id=\"formNuevoRegistroRestaurantes\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formNuevoRegistroRestaurantes"]) ? $context["formNuevoRegistroRestaurantes"] : $this->getContext($context, "formNuevoRegistroRestaurantes")), 'enctype');
        echo ">
\t\t
\t\t";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formNuevoRegistroRestaurantes"]) ? $context["formNuevoRegistroRestaurantes"] : $this->getContext($context, "formNuevoRegistroRestaurantes")), 'widget');
        echo "
\t\t<input type=\"submit\" id=\"aceptarNuevoRegistroRestaurantes\" name=\"nuevoRegistroRestaurantes\" value=\"Aceptar Nuevo Registro\"/>
\t</form>
";
        
        $__internal_d7bffbc5de63fd9500b45a277260153393d73a83a4ec72498201c8e444adafc9->leave($__internal_d7bffbc5de63fd9500b45a277260153393d73a83a4ec72498201c8e444adafc9_prof);

    }

    public function getTemplateName()
    {
        return "PCBundle:vista:nuevoRegistroRestaurantes.html.twig";
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
