<?php

/* PCBundle:vista:nuevoRegistro.html.twig */
class __TwigTemplate_69758f4faba378fcbc1312460995b297e7e895afc6bcdbd43f0e3a8b0262d58a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCBundle::plantillaRegistros.html.twig", "PCBundle:vista:nuevoRegistro.html.twig", 1);
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
        $__internal_2d6e8dab8029c66b33a06c651451d648cebda2e8bcbbb56628f8f370f921ab3f = $this->env->getExtension("native_profiler");
        $__internal_2d6e8dab8029c66b33a06c651451d648cebda2e8bcbbb56628f8f370f921ab3f->enter($__internal_2d6e8dab8029c66b33a06c651451d648cebda2e8bcbbb56628f8f370f921ab3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCBundle:vista:nuevoRegistro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d6e8dab8029c66b33a06c651451d648cebda2e8bcbbb56628f8f370f921ab3f->leave($__internal_2d6e8dab8029c66b33a06c651451d648cebda2e8bcbbb56628f8f370f921ab3f_prof);

    }

    // line 4
    public function block_titleRegistros($context, array $blocks = array())
    {
        $__internal_ba4f91463f0c5f85f49dfc7fa2143b7e7f04603d0c9fb28e6e3583513bc951ea = $this->env->getExtension("native_profiler");
        $__internal_ba4f91463f0c5f85f49dfc7fa2143b7e7f04603d0c9fb28e6e3583513bc951ea->enter($__internal_ba4f91463f0c5f85f49dfc7fa2143b7e7f04603d0c9fb28e6e3583513bc951ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleRegistros"));

        // line 5
        echo "\tNuevo Registro
";
        
        $__internal_ba4f91463f0c5f85f49dfc7fa2143b7e7f04603d0c9fb28e6e3583513bc951ea->leave($__internal_ba4f91463f0c5f85f49dfc7fa2143b7e7f04603d0c9fb28e6e3583513bc951ea_prof);

    }

    // line 9
    public function block_videoRegistro($context, array $blocks = array())
    {
        $__internal_abaafe15ee23f8ea522eadeb435cea0b6848da9caf9e309408ff74499fe08e04 = $this->env->getExtension("native_profiler");
        $__internal_abaafe15ee23f8ea522eadeb435cea0b6848da9caf9e309408ff74499fe08e04->enter($__internal_abaafe15ee23f8ea522eadeb435cea0b6848da9caf9e309408ff74499fe08e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "videoRegistro"));

        // line 10
        echo "\t<video id=\"videoFondo\" autoplay loop>
\t\t<source src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("videos/videoPaginaNuevoRegistro.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\"></source>
\t</video>
";
        
        $__internal_abaafe15ee23f8ea522eadeb435cea0b6848da9caf9e309408ff74499fe08e04->leave($__internal_abaafe15ee23f8ea522eadeb435cea0b6848da9caf9e309408ff74499fe08e04_prof);

    }

    // line 15
    public function block_tituloRegistro($context, array $blocks = array())
    {
        $__internal_d1342cede67cdcf3dba67385a7af9e64659ecddfb614e51a775dae37dc9727cc = $this->env->getExtension("native_profiler");
        $__internal_d1342cede67cdcf3dba67385a7af9e64659ecddfb614e51a775dae37dc9727cc->enter($__internal_d1342cede67cdcf3dba67385a7af9e64659ecddfb614e51a775dae37dc9727cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tituloRegistro"));

        // line 16
        echo "\tNuevo Registro Usuarios
";
        
        $__internal_d1342cede67cdcf3dba67385a7af9e64659ecddfb614e51a775dae37dc9727cc->leave($__internal_d1342cede67cdcf3dba67385a7af9e64659ecddfb614e51a775dae37dc9727cc_prof);

    }

    // line 19
    public function block_urlDestino($context, array $blocks = array())
    {
        $__internal_210c205b4a6fde12a8943c57051f4a7fdd02bc767b49ca4901dc7bfc287b2c77 = $this->env->getExtension("native_profiler");
        $__internal_210c205b4a6fde12a8943c57051f4a7fdd02bc767b49ca4901dc7bfc287b2c77->enter($__internal_210c205b4a6fde12a8943c57051f4a7fdd02bc767b49ca4901dc7bfc287b2c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino"));

        // line 20
        echo "\t'";
        echo $this->env->getExtension('routing')->getPath("pc_perfilusuario");
        echo "'
";
        
        $__internal_210c205b4a6fde12a8943c57051f4a7fdd02bc767b49ca4901dc7bfc287b2c77->leave($__internal_210c205b4a6fde12a8943c57051f4a7fdd02bc767b49ca4901dc7bfc287b2c77_prof);

    }

    // line 24
    public function block_inputHidden($context, array $blocks = array())
    {
        $__internal_cf3b2549b9653fd7a50b4c7d7146dbc1032039b3dc450efbed4a31777cf672c9 = $this->env->getExtension("native_profiler");
        $__internal_cf3b2549b9653fd7a50b4c7d7146dbc1032039b3dc450efbed4a31777cf672c9->enter($__internal_cf3b2549b9653fd7a50b4c7d7146dbc1032039b3dc450efbed4a31777cf672c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inputHidden"));

        // line 25
        echo "\t<input type=\"hidden\" name=\"loginNuevoRegistro\" value=\"1000at200j\">\t
";
        
        $__internal_cf3b2549b9653fd7a50b4c7d7146dbc1032039b3dc450efbed4a31777cf672c9->leave($__internal_cf3b2549b9653fd7a50b4c7d7146dbc1032039b3dc450efbed4a31777cf672c9_prof);

    }

    // line 29
    public function block_textoAcceder($context, array $blocks = array())
    {
        $__internal_9e73b83691c030e5f4ea1be947de7b73410c7eb7b72680ee1473c9e3ffc45778 = $this->env->getExtension("native_profiler");
        $__internal_9e73b83691c030e5f4ea1be947de7b73410c7eb7b72680ee1473c9e3ffc45778->enter($__internal_9e73b83691c030e5f4ea1be947de7b73410c7eb7b72680ee1473c9e3ffc45778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textoAcceder"));

        // line 30
        echo "\t<p id=\"parrafoAccederUsuarios\" style=\"display: none\">Para registrar un nuevo bar, primero debe iniciar sesión o darse de alta como usuario en <a id=\"abrirPopUpEnlace\" href=\"#\">este enlace</a>.</p>
";
        
        $__internal_9e73b83691c030e5f4ea1be947de7b73410c7eb7b72680ee1473c9e3ffc45778->leave($__internal_9e73b83691c030e5f4ea1be947de7b73410c7eb7b72680ee1473c9e3ffc45778_prof);

    }

    // line 34
    public function block_formularioRegistro($context, array $blocks = array())
    {
        $__internal_27f136df99744e57a4ec5001467b4087dbe91c9695b91d4ad00a76ee0388f621 = $this->env->getExtension("native_profiler");
        $__internal_27f136df99744e57a4ec5001467b4087dbe91c9695b91d4ad00a76ee0388f621->enter($__internal_27f136df99744e57a4ec5001467b4087dbe91c9695b91d4ad00a76ee0388f621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formularioRegistro"));

        echo "\t\t\t
\t<form action=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("pc_nuevoregistroguardar");
        echo "\" method=\"post\" id=\"formNuevoRegistroUsuarios\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formNuevoRegistroUsuarios"]) ? $context["formNuevoRegistroUsuarios"] : $this->getContext($context, "formNuevoRegistroUsuarios")), 'enctype');
        echo ">
\t\t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formNuevoRegistroUsuarios"]) ? $context["formNuevoRegistroUsuarios"] : $this->getContext($context, "formNuevoRegistroUsuarios")), 'widget');
        echo "
\t\t<input type=\"submit\" id=\"aceptarNuevoRegistro\" name=\"nuevoRegistro\" value=\"Aceptar Nuevo Registro\"/>
\t</form>
";
        
        $__internal_27f136df99744e57a4ec5001467b4087dbe91c9695b91d4ad00a76ee0388f621->leave($__internal_27f136df99744e57a4ec5001467b4087dbe91c9695b91d4ad00a76ee0388f621_prof);

    }

    public function getTemplateName()
    {
        return "PCBundle:vista:nuevoRegistro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 36,  139 => 35,  131 => 34,  123 => 30,  117 => 29,  109 => 25,  103 => 24,  93 => 20,  87 => 19,  79 => 16,  73 => 15,  63 => 11,  60 => 10,  54 => 9,  46 => 5,  40 => 4,  11 => 1,);
    }
}
