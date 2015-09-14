<?php

/* MobileBundle:vista:index.html.twig */
class __TwigTemplate_9093a57efbe682dae4752b492ce94aab1b965d6284ec892cc4fcc908c7c272ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MobileBundle::plantillaInicial.html.twig", "MobileBundle:vista:index.html.twig", 1);
        $this->blocks = array(
            'tituloPagina' => array($this, 'block_tituloPagina'),
            'contenidoInicial' => array($this, 'block_contenidoInicial'),
            'menuCabecera' => array($this, 'block_menuCabecera'),
            'contenidoFooterInicial' => array($this, 'block_contenidoFooterInicial'),
            'menuRestaurantes' => array($this, 'block_menuRestaurantes'),
            'contenidoCuerpo1' => array($this, 'block_contenidoCuerpo1'),
            'contenidoFooter1' => array($this, 'block_contenidoFooter1'),
            'menuHoteles' => array($this, 'block_menuHoteles'),
            'contenidoCuerpo2' => array($this, 'block_contenidoCuerpo2'),
            'contenidoFooter2' => array($this, 'block_contenidoFooter2'),
            'menuBares' => array($this, 'block_menuBares'),
            'contenidoCuerpo3' => array($this, 'block_contenidoCuerpo3'),
            'contenidoFooter3' => array($this, 'block_contenidoFooter3'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MobileBundle::plantillaInicial.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e91edae56c5bfdea2562c17651b4740b07839f8a71f97ceb96aa94c55898055 = $this->env->getExtension("native_profiler");
        $__internal_6e91edae56c5bfdea2562c17651b4740b07839f8a71f97ceb96aa94c55898055->enter($__internal_6e91edae56c5bfdea2562c17651b4740b07839f8a71f97ceb96aa94c55898055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MobileBundle:vista:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e91edae56c5bfdea2562c17651b4740b07839f8a71f97ceb96aa94c55898055->leave($__internal_6e91edae56c5bfdea2562c17651b4740b07839f8a71f97ceb96aa94c55898055_prof);

    }

    // line 3
    public function block_tituloPagina($context, array $blocks = array())
    {
        $__internal_d5b964e6a1b565ec33e7fcaf466daf20ed7e54a013c286c7aaa0a4cd2c7e1785 = $this->env->getExtension("native_profiler");
        $__internal_d5b964e6a1b565ec33e7fcaf466daf20ed7e54a013c286c7aaa0a4cd2c7e1785->enter($__internal_d5b964e6a1b565ec33e7fcaf466daf20ed7e54a013c286c7aaa0a4cd2c7e1785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tituloPagina"));

        // line 4
        echo "\tPágina Principal
";
        
        $__internal_d5b964e6a1b565ec33e7fcaf466daf20ed7e54a013c286c7aaa0a4cd2c7e1785->leave($__internal_d5b964e6a1b565ec33e7fcaf466daf20ed7e54a013c286c7aaa0a4cd2c7e1785_prof);

    }

    // line 9
    public function block_contenidoInicial($context, array $blocks = array())
    {
        $__internal_01410d96ae46809ad5ed319455f1e3baabc823ea1f175069ad8b298fe802ee7c = $this->env->getExtension("native_profiler");
        $__internal_01410d96ae46809ad5ed319455f1e3baabc823ea1f175069ad8b298fe802ee7c->enter($__internal_01410d96ae46809ad5ed319455f1e3baabc823ea1f175069ad8b298fe802ee7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoInicial"));

        // line 10
        echo "\t<ul data-role=\"listview\" data-inset=\"true\" >
\t\t<li>
\t\t\t<a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("mobile_formlogin");
        echo "\">
\t\t\t\t<img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenPerfil"]) ? $context["rutaImagenPerfil"] : $this->getContext($context, "rutaImagenPerfil"))), "html", null, true);
        echo "\" alt=\"Login\" class=\"ui-li-icon\">
\t\t\t\t";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["textoRecuadro"]) ? $context["textoRecuadro"] : $this->getContext($context, "textoRecuadro")), "html", null, true);
        echo "
\t\t\t</a>
\t\t</li>
\t</ul>

\t<p>Explorapp es tu nuevo compañero de ocio en tu ciudad.</p>
\t<p>Empezar a ahorrar y a disfrutar más de tu dinero es tan fácil como hacer unos pocos clicks</p>
\t<p>Date de alta o inicia sesión para descubrir lugares increíbles a precios que nunca imaginaste.</p>
";
        
        $__internal_01410d96ae46809ad5ed319455f1e3baabc823ea1f175069ad8b298fe802ee7c->leave($__internal_01410d96ae46809ad5ed319455f1e3baabc823ea1f175069ad8b298fe802ee7c_prof);

    }

    // line 24
    public function block_menuCabecera($context, array $blocks = array())
    {
        $__internal_992a3a63122cc3aa23eb90e06eb4080639ec055563b0cdff3b12bd4cae16cf35 = $this->env->getExtension("native_profiler");
        $__internal_992a3a63122cc3aa23eb90e06eb4080639ec055563b0cdff3b12bd4cae16cf35->enter($__internal_992a3a63122cc3aa23eb90e06eb4080639ec055563b0cdff3b12bd4cae16cf35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuCabecera"));

        // line 25
        echo "\t<ul data-role=\"listview\" data-inset=\"true\">
\t\t<li>
\t\t\t<a href=\"#restaurantes\">
\t\t\t\t<img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/restauranteMenu.png"), "html", null, true);
        echo "\" alt=\"Restaurantes\" class=\"ui-li-icon\">
\t\t\t\tRestaurantes
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"#hoteles\">
\t\t\t\t<img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/hotelMenu.png"), "html", null, true);
        echo "\" alt=\"Hoteles\" class=\"ui-li-icon\">
\t\t\t\tHoteles
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"#bares\">
\t\t\t\t<img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/barMenu.png"), "html", null, true);
        echo "\" alt=\"Bares\" class=\"ui-li-icon\">
\t\t\t\tBares
\t\t\t</a>
\t\t</li>
\t</ul>

\t
";
        
        $__internal_992a3a63122cc3aa23eb90e06eb4080639ec055563b0cdff3b12bd4cae16cf35->leave($__internal_992a3a63122cc3aa23eb90e06eb4080639ec055563b0cdff3b12bd4cae16cf35_prof);

    }

    // line 52
    public function block_contenidoFooterInicial($context, array $blocks = array())
    {
        $__internal_39b633e5acbd97927c2a981aa05ad17c8d851eeb5002d0d5bb4e585a6c949114 = $this->env->getExtension("native_profiler");
        $__internal_39b633e5acbd97927c2a981aa05ad17c8d851eeb5002d0d5bb4e585a6c949114->enter($__internal_39b633e5acbd97927c2a981aa05ad17c8d851eeb5002d0d5bb4e585a6c949114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoFooterInicial"));

        // line 53
        echo "\t<ul data-role=\"listview\" data-inset=\"true\" style=\"display: ";
        echo twig_escape_filter($this->env, (isset($context["cerrarSesion"]) ? $context["cerrarSesion"] : $this->getContext($context, "cerrarSesion")), "html", null, true);
        echo "\">
\t\t<li><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("mobile_cerrarsesion");
        echo "\" data-transition=\"fade\">Terminar la Sesión</a></li>
\t</ul>
";
        
        $__internal_39b633e5acbd97927c2a981aa05ad17c8d851eeb5002d0d5bb4e585a6c949114->leave($__internal_39b633e5acbd97927c2a981aa05ad17c8d851eeb5002d0d5bb4e585a6c949114_prof);

    }

    // line 60
    public function block_menuRestaurantes($context, array $blocks = array())
    {
        $__internal_a409612487020c96132cd11e04b8cd970b9215b19ab513fd1180127c52e23b27 = $this->env->getExtension("native_profiler");
        $__internal_a409612487020c96132cd11e04b8cd970b9215b19ab513fd1180127c52e23b27->enter($__internal_a409612487020c96132cd11e04b8cd970b9215b19ab513fd1180127c52e23b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuRestaurantes"));

        // line 61
        echo "\t<ul data-role=\"listview\" data-inset=\"true\">
\t\t<li><a href=\"#\" data-transition=\"fade\">Listado de Restaurantes</a></li>
\t\t<li><a href=\"#\">Busqueda de Restaurantes</a></li>
\t</ul>
";
        
        $__internal_a409612487020c96132cd11e04b8cd970b9215b19ab513fd1180127c52e23b27->leave($__internal_a409612487020c96132cd11e04b8cd970b9215b19ab513fd1180127c52e23b27_prof);

    }

    // line 67
    public function block_contenidoCuerpo1($context, array $blocks = array())
    {
        $__internal_391c0a8293640838a099ca16dee6c72c5cb4ced59c3371ca7d47d9148410c863 = $this->env->getExtension("native_profiler");
        $__internal_391c0a8293640838a099ca16dee6c72c5cb4ced59c3371ca7d47d9148410c863->enter($__internal_391c0a8293640838a099ca16dee6c72c5cb4ced59c3371ca7d47d9148410c863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoCuerpo1"));

        // line 68
        echo "\t<ul data-role=\"listview\" data-inset=\"true\" >
\t\t<li>
\t\t\t<a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("mobile_formlogin");
        echo "\">
\t\t\t\t<img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenPerfil"]) ? $context["rutaImagenPerfil"] : $this->getContext($context, "rutaImagenPerfil"))), "html", null, true);
        echo "\" alt=\"Login\" class=\"ui-li-icon\">
\t\t\t\t";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["textoRecuadro"]) ? $context["textoRecuadro"] : $this->getContext($context, "textoRecuadro")), "html", null, true);
        echo "
\t\t\t</a>
\t\t</li>
\t</ul>

\t<p>Hay un restaurante especial para cada uno. Ese en el que te declaraste, aquel al que fuiste con tu hijo por primera vez o donde os juntáis los amigos una vez al año.</p>
\t<p>En Explorapp, te están esperando ofertas y descuentos increíbles de ese y otros muchos restaurantes.</p>

\t<img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/restaurante3.jpg"), "html", null, true);
        echo "\" ></img>
";
        
        $__internal_391c0a8293640838a099ca16dee6c72c5cb4ced59c3371ca7d47d9148410c863->leave($__internal_391c0a8293640838a099ca16dee6c72c5cb4ced59c3371ca7d47d9148410c863_prof);

    }

    // line 83
    public function block_contenidoFooter1($context, array $blocks = array())
    {
        $__internal_a23507d2b35708ec3fbd6dac84f881e6971edfd0cec79150722a2c0a3dd71da4 = $this->env->getExtension("native_profiler");
        $__internal_a23507d2b35708ec3fbd6dac84f881e6971edfd0cec79150722a2c0a3dd71da4->enter($__internal_a23507d2b35708ec3fbd6dac84f881e6971edfd0cec79150722a2c0a3dd71da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoFooter1"));

        // line 84
        echo "\t<ul data-role=\"listview\" data-inset=\"true\" style=\"display: ";
        echo twig_escape_filter($this->env, (isset($context["cerrarSesion"]) ? $context["cerrarSesion"] : $this->getContext($context, "cerrarSesion")), "html", null, true);
        echo "\">
\t\t<li><a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("mobile_cerrarsesion");
        echo "\" data-transition=\"fade\">Terminar la Sesión</a></li>
\t</ul>
";
        
        $__internal_a23507d2b35708ec3fbd6dac84f881e6971edfd0cec79150722a2c0a3dd71da4->leave($__internal_a23507d2b35708ec3fbd6dac84f881e6971edfd0cec79150722a2c0a3dd71da4_prof);

    }

    // line 94
    public function block_menuHoteles($context, array $blocks = array())
    {
        $__internal_0818f83333345d3cf3a90eff092f2b3bb41dcfe8617fab889915dd47e425ff1a = $this->env->getExtension("native_profiler");
        $__internal_0818f83333345d3cf3a90eff092f2b3bb41dcfe8617fab889915dd47e425ff1a->enter($__internal_0818f83333345d3cf3a90eff092f2b3bb41dcfe8617fab889915dd47e425ff1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuHoteles"));

        // line 95
        echo "\t<ul data-role=\"listview\" data-inset=\"true\">
\t\t<li><a href=\"#\" data-transition=\"fade\">Listado de Hoteles</a></li>
\t\t<li><a href=\"#\">Busqueda de Hoteles</a></li>
\t</ul>
";
        
        $__internal_0818f83333345d3cf3a90eff092f2b3bb41dcfe8617fab889915dd47e425ff1a->leave($__internal_0818f83333345d3cf3a90eff092f2b3bb41dcfe8617fab889915dd47e425ff1a_prof);

    }

    // line 101
    public function block_contenidoCuerpo2($context, array $blocks = array())
    {
        $__internal_4c22733f11f32beb72c85d69cef9ab116906797937d4cb73eff7868558970bab = $this->env->getExtension("native_profiler");
        $__internal_4c22733f11f32beb72c85d69cef9ab116906797937d4cb73eff7868558970bab->enter($__internal_4c22733f11f32beb72c85d69cef9ab116906797937d4cb73eff7868558970bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoCuerpo2"));

        // line 102
        echo "\t<ul data-role=\"listview\" data-inset=\"true\" >
\t\t<li>
\t\t\t<a href=\"";
        // line 104
        echo $this->env->getExtension('routing')->getPath("mobile_formlogin");
        echo "\">
\t\t\t\t<img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenPerfil"]) ? $context["rutaImagenPerfil"] : $this->getContext($context, "rutaImagenPerfil"))), "html", null, true);
        echo "\" alt=\"Login\" class=\"ui-li-icon\">
\t\t\t\t";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["textoRecuadro"]) ? $context["textoRecuadro"] : $this->getContext($context, "textoRecuadro")), "html", null, true);
        echo "
\t\t\t</a>
\t\t</li>
\t</ul>

\t<p>Un fin de semana a la playa, una escapada con tu pareja a una casa rural o una noche a la capital. A todos nos gusta desconectar de la rutina, pero sin sudar la gota gorda.</p>
\t<p>Para cualquier plan que se te ocurra, Explorapp cuenta con los mejores alojamientos con unas ofertas que jamás creerías.</p>

\t<img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/hotel4.jpg"), "html", null, true);
        echo "\" ></img>
";
        
        $__internal_4c22733f11f32beb72c85d69cef9ab116906797937d4cb73eff7868558970bab->leave($__internal_4c22733f11f32beb72c85d69cef9ab116906797937d4cb73eff7868558970bab_prof);

    }

    // line 117
    public function block_contenidoFooter2($context, array $blocks = array())
    {
        $__internal_c9234cd1ca68cabbd84c57720669e90d8a4a14d371f8cc5cd3f2679ab03413cc = $this->env->getExtension("native_profiler");
        $__internal_c9234cd1ca68cabbd84c57720669e90d8a4a14d371f8cc5cd3f2679ab03413cc->enter($__internal_c9234cd1ca68cabbd84c57720669e90d8a4a14d371f8cc5cd3f2679ab03413cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoFooter2"));

        // line 118
        echo "\t<ul data-role=\"listview\" data-inset=\"true\" style=\"display: ";
        echo twig_escape_filter($this->env, (isset($context["cerrarSesion"]) ? $context["cerrarSesion"] : $this->getContext($context, "cerrarSesion")), "html", null, true);
        echo "\">
\t\t<li><a href=\"";
        // line 119
        echo $this->env->getExtension('routing')->getPath("mobile_cerrarsesion");
        echo "\" data-transition=\"fade\">Terminar la Sesión</a></li>
\t</ul>
";
        
        $__internal_c9234cd1ca68cabbd84c57720669e90d8a4a14d371f8cc5cd3f2679ab03413cc->leave($__internal_c9234cd1ca68cabbd84c57720669e90d8a4a14d371f8cc5cd3f2679ab03413cc_prof);

    }

    // line 126
    public function block_menuBares($context, array $blocks = array())
    {
        $__internal_6d1cbc00232c2f52a6a34121ad135064ce780b244ce4c48e51cc054ef4eb013f = $this->env->getExtension("native_profiler");
        $__internal_6d1cbc00232c2f52a6a34121ad135064ce780b244ce4c48e51cc054ef4eb013f->enter($__internal_6d1cbc00232c2f52a6a34121ad135064ce780b244ce4c48e51cc054ef4eb013f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuBares"));

        // line 127
        echo "\t<ul data-role=\"listview\" data-inset=\"true\">
\t\t<li><a href=\"#\" data-transition=\"fade\">Listado de Bares</a></li>
\t\t<li><a href=\"#\">Busqueda de Bares</a></li>
\t</ul>
";
        
        $__internal_6d1cbc00232c2f52a6a34121ad135064ce780b244ce4c48e51cc054ef4eb013f->leave($__internal_6d1cbc00232c2f52a6a34121ad135064ce780b244ce4c48e51cc054ef4eb013f_prof);

    }

    // line 133
    public function block_contenidoCuerpo3($context, array $blocks = array())
    {
        $__internal_b416688342aae7248e95e3371a9651277d824d04e491c136be26343e6e38d40c = $this->env->getExtension("native_profiler");
        $__internal_b416688342aae7248e95e3371a9651277d824d04e491c136be26343e6e38d40c->enter($__internal_b416688342aae7248e95e3371a9651277d824d04e491c136be26343e6e38d40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoCuerpo3"));

        // line 134
        echo "\t<ul data-role=\"listview\" data-inset=\"true\" >
\t\t<li>
\t\t\t<a href=\"";
        // line 136
        echo $this->env->getExtension('routing')->getPath("mobile_formlogin");
        echo "\">
\t\t\t\t<img src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenPerfil"]) ? $context["rutaImagenPerfil"] : $this->getContext($context, "rutaImagenPerfil"))), "html", null, true);
        echo "\" alt=\"Login\" class=\"ui-li-icon\">
\t\t\t\t";
        // line 138
        echo twig_escape_filter($this->env, (isset($context["textoRecuadro"]) ? $context["textoRecuadro"] : $this->getContext($context, "textoRecuadro")), "html", null, true);
        echo "
\t\t\t</a>
\t\t</li>
\t</ul>

\t<p>Partidas eternas de dardos, cervezas que no paran de aparecer y la música que te gusta. El encanto de los bares es algo único, y en Explorapp lo sabemos.</p>
\t<p>Por eso, tenemos miles de bares dispuestos a hacerte ahorrar dinero y así disfrutar más de tu experiencia.</p>

\t<img src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/bar3.jpg"), "html", null, true);
        echo "\" ></img>
";
        
        $__internal_b416688342aae7248e95e3371a9651277d824d04e491c136be26343e6e38d40c->leave($__internal_b416688342aae7248e95e3371a9651277d824d04e491c136be26343e6e38d40c_prof);

    }

    // line 149
    public function block_contenidoFooter3($context, array $blocks = array())
    {
        $__internal_dda6e633421c9362198a810bb0d443d943eb82d34d8a865f4896611f37b2543f = $this->env->getExtension("native_profiler");
        $__internal_dda6e633421c9362198a810bb0d443d943eb82d34d8a865f4896611f37b2543f->enter($__internal_dda6e633421c9362198a810bb0d443d943eb82d34d8a865f4896611f37b2543f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoFooter3"));

        // line 150
        echo "\t<ul data-role=\"listview\" data-inset=\"true\" style=\"display: ";
        echo twig_escape_filter($this->env, (isset($context["cerrarSesion"]) ? $context["cerrarSesion"] : $this->getContext($context, "cerrarSesion")), "html", null, true);
        echo "\">
\t\t<li><a href=\"";
        // line 151
        echo $this->env->getExtension('routing')->getPath("mobile_cerrarsesion");
        echo "\" data-transition=\"fade\">Terminar la Sesión</a></li>
\t</ul>
";
        
        $__internal_dda6e633421c9362198a810bb0d443d943eb82d34d8a865f4896611f37b2543f->leave($__internal_dda6e633421c9362198a810bb0d443d943eb82d34d8a865f4896611f37b2543f_prof);

    }

    public function getTemplateName()
    {
        return "MobileBundle:vista:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 151,  372 => 150,  366 => 149,  357 => 146,  346 => 138,  342 => 137,  338 => 136,  334 => 134,  328 => 133,  317 => 127,  311 => 126,  301 => 119,  296 => 118,  290 => 117,  281 => 114,  270 => 106,  266 => 105,  262 => 104,  258 => 102,  252 => 101,  241 => 95,  235 => 94,  225 => 85,  220 => 84,  214 => 83,  205 => 80,  194 => 72,  190 => 71,  186 => 70,  182 => 68,  176 => 67,  165 => 61,  159 => 60,  149 => 54,  144 => 53,  138 => 52,  123 => 40,  114 => 34,  105 => 28,  100 => 25,  94 => 24,  78 => 14,  74 => 13,  70 => 12,  66 => 10,  60 => 9,  52 => 4,  46 => 3,  11 => 1,);
    }
}
