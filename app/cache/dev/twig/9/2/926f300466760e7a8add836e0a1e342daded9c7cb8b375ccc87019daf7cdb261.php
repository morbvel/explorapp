<?php

/* MobileBundle:vista:index.html.twig */
class __TwigTemplate_926f300466760e7a8add836e0a1e342daded9c7cb8b375ccc87019daf7cdb261 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MobileBundle::plantillaInicial.html.twig", "MobileBundle:vista:index.html.twig", 1);
        $this->blocks = array(
            'tituloPagina' => array($this, 'block_tituloPagina'),
            'urlDestino' => array($this, 'block_urlDestino'),
            'urlDestino2' => array($this, 'block_urlDestino2'),
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
        $__internal_283510ab4d3fec547abde9f53051c65cf51cbcef7b290820ba42a647d7bc7ff1 = $this->env->getExtension("native_profiler");
        $__internal_283510ab4d3fec547abde9f53051c65cf51cbcef7b290820ba42a647d7bc7ff1->enter($__internal_283510ab4d3fec547abde9f53051c65cf51cbcef7b290820ba42a647d7bc7ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MobileBundle:vista:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_283510ab4d3fec547abde9f53051c65cf51cbcef7b290820ba42a647d7bc7ff1->leave($__internal_283510ab4d3fec547abde9f53051c65cf51cbcef7b290820ba42a647d7bc7ff1_prof);

    }

    // line 3
    public function block_tituloPagina($context, array $blocks = array())
    {
        $__internal_479a27ecf7080a5e0fd4d3479dfce4d9c354cae4c3ca9ccf7b78c5e8bf20fcf7 = $this->env->getExtension("native_profiler");
        $__internal_479a27ecf7080a5e0fd4d3479dfce4d9c354cae4c3ca9ccf7b78c5e8bf20fcf7->enter($__internal_479a27ecf7080a5e0fd4d3479dfce4d9c354cae4c3ca9ccf7b78c5e8bf20fcf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tituloPagina"));

        // line 4
        echo "\tPágina Principal
";
        
        $__internal_479a27ecf7080a5e0fd4d3479dfce4d9c354cae4c3ca9ccf7b78c5e8bf20fcf7->leave($__internal_479a27ecf7080a5e0fd4d3479dfce4d9c354cae4c3ca9ccf7b78c5e8bf20fcf7_prof);

    }

    // line 7
    public function block_urlDestino($context, array $blocks = array())
    {
        $__internal_edf5b469b65bf709a6ec882de54913b8b0c6b8d2db1847578694646124664bf3 = $this->env->getExtension("native_profiler");
        $__internal_edf5b469b65bf709a6ec882de54913b8b0c6b8d2db1847578694646124664bf3->enter($__internal_edf5b469b65bf709a6ec882de54913b8b0c6b8d2db1847578694646124664bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino"));

        echo $this->env->getExtension('routing')->getPath("mobile_nuevoregistro");
        
        $__internal_edf5b469b65bf709a6ec882de54913b8b0c6b8d2db1847578694646124664bf3->leave($__internal_edf5b469b65bf709a6ec882de54913b8b0c6b8d2db1847578694646124664bf3_prof);

    }

    // line 8
    public function block_urlDestino2($context, array $blocks = array())
    {
        $__internal_8fb59eacf9b009eaca675780d82807cae5f18afed1adddcbf93a1d583a175e8b = $this->env->getExtension("native_profiler");
        $__internal_8fb59eacf9b009eaca675780d82807cae5f18afed1adddcbf93a1d583a175e8b->enter($__internal_8fb59eacf9b009eaca675780d82807cae5f18afed1adddcbf93a1d583a175e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "urlDestino2"));

        echo $this->env->getExtension('routing')->getPath("mobile_perfilusuario");
        
        $__internal_8fb59eacf9b009eaca675780d82807cae5f18afed1adddcbf93a1d583a175e8b->leave($__internal_8fb59eacf9b009eaca675780d82807cae5f18afed1adddcbf93a1d583a175e8b_prof);

    }

    // line 11
    public function block_contenidoInicial($context, array $blocks = array())
    {
        $__internal_c2902161b0ab51753a7e104b5ebeac6618a984458672d38b54eba7d755f88bd6 = $this->env->getExtension("native_profiler");
        $__internal_c2902161b0ab51753a7e104b5ebeac6618a984458672d38b54eba7d755f88bd6->enter($__internal_c2902161b0ab51753a7e104b5ebeac6618a984458672d38b54eba7d755f88bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoInicial"));

        // line 12
        echo "\t<ul data-role=\"listview\" data-inset=\"true\" >
\t\t<li>
\t\t\t<a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("mobile_formlogin");
        echo "\" id=\"abrirNuevoRegistro\">
\t\t\t\t<img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenPerfil"]) ? $context["rutaImagenPerfil"] : $this->getContext($context, "rutaImagenPerfil"))), "html", null, true);
        echo "\" alt=\"Login\" class=\"ui-li-icon\" i>
\t\t\t\t";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["textoRecuadro"]) ? $context["textoRecuadro"] : $this->getContext($context, "textoRecuadro")), "html", null, true);
        echo "
\t\t\t</a>
\t\t\t<a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("mobile_perfilusuario");
        echo "\" id=\"abrirPerfilUsuario\">
\t\t\t\t<img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenPerfil"]) ? $context["rutaImagenPerfil"] : $this->getContext($context, "rutaImagenPerfil"))), "html", null, true);
        echo "\" alt=\"Perfil de Usuario\" class=\"ui-li-icon\" i>
\t\t\t\t";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["textoRecuadro"]) ? $context["textoRecuadro"] : $this->getContext($context, "textoRecuadro")), "html", null, true);
        echo "
\t\t\t</a>
\t\t</li>
\t</ul>

\t<p>Explorapp es tu nuevo compañero de ocio en tu ciudad.</p>
\t<p>Empezar a ahorrar y a disfrutar más de tu dinero es tan fácil como hacer unos pocos clicks</p>
\t<p>Date de alta o inicia sesión para descubrir lugares increíbles a precios que nunca imaginaste.</p>
";
        
        $__internal_c2902161b0ab51753a7e104b5ebeac6618a984458672d38b54eba7d755f88bd6->leave($__internal_c2902161b0ab51753a7e104b5ebeac6618a984458672d38b54eba7d755f88bd6_prof);

    }

    // line 30
    public function block_menuCabecera($context, array $blocks = array())
    {
        $__internal_67eb36584a620a8f23435db7b0c8478f5940fbb0c4488e8800687847f8ce1d12 = $this->env->getExtension("native_profiler");
        $__internal_67eb36584a620a8f23435db7b0c8478f5940fbb0c4488e8800687847f8ce1d12->enter($__internal_67eb36584a620a8f23435db7b0c8478f5940fbb0c4488e8800687847f8ce1d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuCabecera"));

        // line 31
        echo "\t<ul data-role=\"listview\" data-inset=\"true\">
\t\t<li>
\t\t\t<a href=\"#restaurantes\">
\t\t\t\t<img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/restauranteMenu.png"), "html", null, true);
        echo "\" alt=\"Restaurantes\" class=\"ui-li-icon\">
\t\t\t\tRestaurantes
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"#hoteles\">
\t\t\t\t<img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/hotelMenu.png"), "html", null, true);
        echo "\" alt=\"Hoteles\" class=\"ui-li-icon\">
\t\t\t\tHoteles
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"#bares\">
\t\t\t\t<img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/barMenu.png"), "html", null, true);
        echo "\" alt=\"Bares\" class=\"ui-li-icon\">
\t\t\t\tBares
\t\t\t</a>
\t\t</li>
\t</ul>

\t
";
        
        $__internal_67eb36584a620a8f23435db7b0c8478f5940fbb0c4488e8800687847f8ce1d12->leave($__internal_67eb36584a620a8f23435db7b0c8478f5940fbb0c4488e8800687847f8ce1d12_prof);

    }

    // line 58
    public function block_contenidoFooterInicial($context, array $blocks = array())
    {
        $__internal_50be47c31d5ad7e3dfb73d81ef7793735cf051089e9af45eae2705922ecb95f2 = $this->env->getExtension("native_profiler");
        $__internal_50be47c31d5ad7e3dfb73d81ef7793735cf051089e9af45eae2705922ecb95f2->enter($__internal_50be47c31d5ad7e3dfb73d81ef7793735cf051089e9af45eae2705922ecb95f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoFooterInicial"));

        // line 59
        echo "\t<ul data-role=\"listview\" data-inset=\"true\" style=\"display: ";
        echo twig_escape_filter($this->env, (isset($context["cerrarSesion"]) ? $context["cerrarSesion"] : $this->getContext($context, "cerrarSesion")), "html", null, true);
        echo "\">
\t\t<li><a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("mobile_cerrarsesion");
        echo "\" data-transition=\"fade\">Terminar la Sesión</a></li>
\t</ul>
";
        
        $__internal_50be47c31d5ad7e3dfb73d81ef7793735cf051089e9af45eae2705922ecb95f2->leave($__internal_50be47c31d5ad7e3dfb73d81ef7793735cf051089e9af45eae2705922ecb95f2_prof);

    }

    // line 66
    public function block_menuRestaurantes($context, array $blocks = array())
    {
        $__internal_0d7ae6b6d0e6e7581d25d81335f4838611a5e17b8c4ec909a5ba0cb9c5f99ee2 = $this->env->getExtension("native_profiler");
        $__internal_0d7ae6b6d0e6e7581d25d81335f4838611a5e17b8c4ec909a5ba0cb9c5f99ee2->enter($__internal_0d7ae6b6d0e6e7581d25d81335f4838611a5e17b8c4ec909a5ba0cb9c5f99ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuRestaurantes"));

        // line 67
        echo "\t<ul data-role=\"listview\" data-inset=\"true\">
\t\t<li><a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("mobile_mostrarrestaurantes");
        echo "\" data-transition=\"fade\">Listado de Restaurantes</a></li>
\t</ul>
";
        
        $__internal_0d7ae6b6d0e6e7581d25d81335f4838611a5e17b8c4ec909a5ba0cb9c5f99ee2->leave($__internal_0d7ae6b6d0e6e7581d25d81335f4838611a5e17b8c4ec909a5ba0cb9c5f99ee2_prof);

    }

    // line 72
    public function block_contenidoCuerpo1($context, array $blocks = array())
    {
        $__internal_1d18e728348c09a9b585341ec74dadd3883b698bd5c88c6bc32a532268e84680 = $this->env->getExtension("native_profiler");
        $__internal_1d18e728348c09a9b585341ec74dadd3883b698bd5c88c6bc32a532268e84680->enter($__internal_1d18e728348c09a9b585341ec74dadd3883b698bd5c88c6bc32a532268e84680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoCuerpo1"));

        // line 73
        echo "\t<ul data-role=\"listview\" data-inset=\"true\" >
\t\t<li>
\t\t\t<a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("mobile_formlogin");
        echo "\">
\t\t\t\t<img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenPerfil"]) ? $context["rutaImagenPerfil"] : $this->getContext($context, "rutaImagenPerfil"))), "html", null, true);
        echo "\" alt=\"Login\" class=\"ui-li-icon\">
\t\t\t\t";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["textoRecuadro"]) ? $context["textoRecuadro"] : $this->getContext($context, "textoRecuadro")), "html", null, true);
        echo "
\t\t\t</a>

\t\t\t<a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("mobile_perfilusuario");
        echo "\" id=\"abrirPerfilUsuario\">
\t\t\t\t<img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenPerfil"]) ? $context["rutaImagenPerfil"] : $this->getContext($context, "rutaImagenPerfil"))), "html", null, true);
        echo "\" alt=\"Perfil de Usuario\" class=\"ui-li-icon\" i>
\t\t\t\t";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["textoRecuadro"]) ? $context["textoRecuadro"] : $this->getContext($context, "textoRecuadro")), "html", null, true);
        echo "
\t\t\t</a>
\t\t</li>
\t</ul>

\t<p>Hay un restaurante especial para cada uno. Ese en el que te declaraste, aquel al que fuiste con tu hijo por primera vez o donde os juntáis los amigos una vez al año.</p>
\t<p>En Explorapp, te están esperando ofertas y descuentos increíbles de ese y otros muchos restaurantes.</p>

\t<img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/restaurante3.jpg"), "html", null, true);
        echo "\" ></img>
";
        
        $__internal_1d18e728348c09a9b585341ec74dadd3883b698bd5c88c6bc32a532268e84680->leave($__internal_1d18e728348c09a9b585341ec74dadd3883b698bd5c88c6bc32a532268e84680_prof);

    }

    // line 93
    public function block_contenidoFooter1($context, array $blocks = array())
    {
        $__internal_d87b50f9ae877cf5297dc8a8fd6e3a7b8d791b6997dac25724813ee4adc0d471 = $this->env->getExtension("native_profiler");
        $__internal_d87b50f9ae877cf5297dc8a8fd6e3a7b8d791b6997dac25724813ee4adc0d471->enter($__internal_d87b50f9ae877cf5297dc8a8fd6e3a7b8d791b6997dac25724813ee4adc0d471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoFooter1"));

        // line 94
        echo "\t<ul data-role=\"listview\" data-inset=\"true\" style=\"display: ";
        echo twig_escape_filter($this->env, (isset($context["cerrarSesion"]) ? $context["cerrarSesion"] : $this->getContext($context, "cerrarSesion")), "html", null, true);
        echo "\">
\t\t<li><a href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("mobile_cerrarsesion");
        echo "\" data-transition=\"fade\">Terminar la Sesión</a></li>
\t</ul>
";
        
        $__internal_d87b50f9ae877cf5297dc8a8fd6e3a7b8d791b6997dac25724813ee4adc0d471->leave($__internal_d87b50f9ae877cf5297dc8a8fd6e3a7b8d791b6997dac25724813ee4adc0d471_prof);

    }

    // line 104
    public function block_menuHoteles($context, array $blocks = array())
    {
        $__internal_3f40eaf912a1c0b50769c13e561b01cc51315a033a52082b516c5233bb78ffb2 = $this->env->getExtension("native_profiler");
        $__internal_3f40eaf912a1c0b50769c13e561b01cc51315a033a52082b516c5233bb78ffb2->enter($__internal_3f40eaf912a1c0b50769c13e561b01cc51315a033a52082b516c5233bb78ffb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuHoteles"));

        // line 105
        echo "\t<ul data-role=\"listview\" data-inset=\"true\">
\t\t<li><a href=\"";
        // line 106
        echo $this->env->getExtension('routing')->getPath("mobile_mostrarhoteles");
        echo "\" data-transition=\"fade\">Listado de Hoteles</a></li>
\t</ul>
";
        
        $__internal_3f40eaf912a1c0b50769c13e561b01cc51315a033a52082b516c5233bb78ffb2->leave($__internal_3f40eaf912a1c0b50769c13e561b01cc51315a033a52082b516c5233bb78ffb2_prof);

    }

    // line 110
    public function block_contenidoCuerpo2($context, array $blocks = array())
    {
        $__internal_5ba1c5acd1bc9d0a2162a1eea822881dd337f0e58975d7b3a1ddc32e4393e590 = $this->env->getExtension("native_profiler");
        $__internal_5ba1c5acd1bc9d0a2162a1eea822881dd337f0e58975d7b3a1ddc32e4393e590->enter($__internal_5ba1c5acd1bc9d0a2162a1eea822881dd337f0e58975d7b3a1ddc32e4393e590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoCuerpo2"));

        // line 111
        echo "\t<ul data-role=\"listview\" data-inset=\"true\" >
\t\t<li>
\t\t\t<a href=\"";
        // line 113
        echo $this->env->getExtension('routing')->getPath("mobile_formlogin");
        echo "\">
\t\t\t\t<img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenPerfil"]) ? $context["rutaImagenPerfil"] : $this->getContext($context, "rutaImagenPerfil"))), "html", null, true);
        echo "\" alt=\"Login\" class=\"ui-li-icon\">
\t\t\t\t";
        // line 115
        echo twig_escape_filter($this->env, (isset($context["textoRecuadro"]) ? $context["textoRecuadro"] : $this->getContext($context, "textoRecuadro")), "html", null, true);
        echo "
\t\t\t</a>

\t\t\t<a href=\"";
        // line 118
        echo $this->env->getExtension('routing')->getPath("mobile_perfilusuario");
        echo "\" id=\"abrirPerfilUsuario\">
\t\t\t\t<img src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenPerfil"]) ? $context["rutaImagenPerfil"] : $this->getContext($context, "rutaImagenPerfil"))), "html", null, true);
        echo "\" alt=\"Perfil de Usuario\" class=\"ui-li-icon\" i>
\t\t\t\t";
        // line 120
        echo twig_escape_filter($this->env, (isset($context["textoRecuadro"]) ? $context["textoRecuadro"] : $this->getContext($context, "textoRecuadro")), "html", null, true);
        echo "
\t\t\t</a>
\t\t</li>
\t</ul>

\t<p>Un fin de semana a la playa, una escapada con tu pareja a una casa rural o una noche a la capital. A todos nos gusta desconectar de la rutina, pero sin sudar la gota gorda.</p>
\t<p>Para cualquier plan que se te ocurra, Explorapp cuenta con los mejores alojamientos con unas ofertas que jamás creerías.</p>

\t<img src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/hotel4.jpg"), "html", null, true);
        echo "\" ></img>
";
        
        $__internal_5ba1c5acd1bc9d0a2162a1eea822881dd337f0e58975d7b3a1ddc32e4393e590->leave($__internal_5ba1c5acd1bc9d0a2162a1eea822881dd337f0e58975d7b3a1ddc32e4393e590_prof);

    }

    // line 131
    public function block_contenidoFooter2($context, array $blocks = array())
    {
        $__internal_38e144e08f727a86583680b90c9170705e69559707143d03a96e146b07d3f22b = $this->env->getExtension("native_profiler");
        $__internal_38e144e08f727a86583680b90c9170705e69559707143d03a96e146b07d3f22b->enter($__internal_38e144e08f727a86583680b90c9170705e69559707143d03a96e146b07d3f22b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoFooter2"));

        // line 132
        echo "\t<ul data-role=\"listview\" data-inset=\"true\" style=\"display: ";
        echo twig_escape_filter($this->env, (isset($context["cerrarSesion"]) ? $context["cerrarSesion"] : $this->getContext($context, "cerrarSesion")), "html", null, true);
        echo "\">
\t\t<li><a href=\"";
        // line 133
        echo $this->env->getExtension('routing')->getPath("mobile_cerrarsesion");
        echo "\" data-transition=\"fade\">Terminar la Sesión</a></li>
\t</ul>
";
        
        $__internal_38e144e08f727a86583680b90c9170705e69559707143d03a96e146b07d3f22b->leave($__internal_38e144e08f727a86583680b90c9170705e69559707143d03a96e146b07d3f22b_prof);

    }

    // line 140
    public function block_menuBares($context, array $blocks = array())
    {
        $__internal_19d4d1e77db3699343cfc3b8ca999982deb53bea1b284336396b930f270f8c5d = $this->env->getExtension("native_profiler");
        $__internal_19d4d1e77db3699343cfc3b8ca999982deb53bea1b284336396b930f270f8c5d->enter($__internal_19d4d1e77db3699343cfc3b8ca999982deb53bea1b284336396b930f270f8c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuBares"));

        // line 141
        echo "\t<ul data-role=\"listview\" data-inset=\"true\">
\t\t<li><a href=\"";
        // line 142
        echo $this->env->getExtension('routing')->getPath("mobile_mostrarbares");
        echo "\" data-transition=\"fade\">Listado de Bares</a></li>
\t</ul>
";
        
        $__internal_19d4d1e77db3699343cfc3b8ca999982deb53bea1b284336396b930f270f8c5d->leave($__internal_19d4d1e77db3699343cfc3b8ca999982deb53bea1b284336396b930f270f8c5d_prof);

    }

    // line 146
    public function block_contenidoCuerpo3($context, array $blocks = array())
    {
        $__internal_59fd4c1b2c220d7d32b4c406467d690a6235c90cad590f38370491564f5cc23f = $this->env->getExtension("native_profiler");
        $__internal_59fd4c1b2c220d7d32b4c406467d690a6235c90cad590f38370491564f5cc23f->enter($__internal_59fd4c1b2c220d7d32b4c406467d690a6235c90cad590f38370491564f5cc23f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoCuerpo3"));

        // line 147
        echo "\t<ul data-role=\"listview\" data-inset=\"true\" >
\t\t<li>
\t\t\t<a href=\"";
        // line 149
        echo $this->env->getExtension('routing')->getPath("mobile_formlogin");
        echo "\">
\t\t\t\t<img src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenPerfil"]) ? $context["rutaImagenPerfil"] : $this->getContext($context, "rutaImagenPerfil"))), "html", null, true);
        echo "\" alt=\"Login\" class=\"ui-li-icon\">
\t\t\t\t";
        // line 151
        echo twig_escape_filter($this->env, (isset($context["textoRecuadro"]) ? $context["textoRecuadro"] : $this->getContext($context, "textoRecuadro")), "html", null, true);
        echo "
\t\t\t</a>

\t\t\t<a href=\"";
        // line 154
        echo $this->env->getExtension('routing')->getPath("mobile_perfilusuario");
        echo "\" id=\"abrirPerfilUsuario\">
\t\t\t\t<img src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenPerfil"]) ? $context["rutaImagenPerfil"] : $this->getContext($context, "rutaImagenPerfil"))), "html", null, true);
        echo "\" alt=\"Perfil de Usuario\" class=\"ui-li-icon\" i>
\t\t\t\t";
        // line 156
        echo twig_escape_filter($this->env, (isset($context["textoRecuadro"]) ? $context["textoRecuadro"] : $this->getContext($context, "textoRecuadro")), "html", null, true);
        echo "
\t\t\t</a>
\t\t</li>
\t</ul>

\t<p>Partidas eternas de dardos, cervezas que no paran de aparecer y la música que te gusta. El encanto de los bares es algo único, y en Explorapp lo sabemos.</p>
\t<p>Por eso, tenemos miles de bares dispuestos a hacerte ahorrar dinero y así disfrutar más de tu experiencia.</p>

\t<img src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/bar3.jpg"), "html", null, true);
        echo "\" ></img>
";
        
        $__internal_59fd4c1b2c220d7d32b4c406467d690a6235c90cad590f38370491564f5cc23f->leave($__internal_59fd4c1b2c220d7d32b4c406467d690a6235c90cad590f38370491564f5cc23f_prof);

    }

    // line 167
    public function block_contenidoFooter3($context, array $blocks = array())
    {
        $__internal_003201a21f4ed0baa53b3491e33ae83e0081fd8642f46acbd0fdb0d2cd556f7b = $this->env->getExtension("native_profiler");
        $__internal_003201a21f4ed0baa53b3491e33ae83e0081fd8642f46acbd0fdb0d2cd556f7b->enter($__internal_003201a21f4ed0baa53b3491e33ae83e0081fd8642f46acbd0fdb0d2cd556f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoFooter3"));

        // line 168
        echo "\t<ul data-role=\"listview\" data-inset=\"true\" style=\"display: ";
        echo twig_escape_filter($this->env, (isset($context["cerrarSesion"]) ? $context["cerrarSesion"] : $this->getContext($context, "cerrarSesion")), "html", null, true);
        echo "\">
\t\t<li><a href=\"";
        // line 169
        echo $this->env->getExtension('routing')->getPath("mobile_cerrarsesion");
        echo "\" data-transition=\"fade\">Terminar la Sesión</a></li>
\t</ul>
";
        
        $__internal_003201a21f4ed0baa53b3491e33ae83e0081fd8642f46acbd0fdb0d2cd556f7b->leave($__internal_003201a21f4ed0baa53b3491e33ae83e0081fd8642f46acbd0fdb0d2cd556f7b_prof);

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
        return array (  464 => 169,  459 => 168,  453 => 167,  444 => 164,  433 => 156,  429 => 155,  425 => 154,  419 => 151,  415 => 150,  411 => 149,  407 => 147,  401 => 146,  391 => 142,  388 => 141,  382 => 140,  372 => 133,  367 => 132,  361 => 131,  352 => 128,  341 => 120,  337 => 119,  333 => 118,  327 => 115,  323 => 114,  319 => 113,  315 => 111,  309 => 110,  299 => 106,  296 => 105,  290 => 104,  280 => 95,  275 => 94,  269 => 93,  260 => 90,  249 => 82,  245 => 81,  241 => 80,  235 => 77,  231 => 76,  227 => 75,  223 => 73,  217 => 72,  207 => 68,  204 => 67,  198 => 66,  188 => 60,  183 => 59,  177 => 58,  162 => 46,  153 => 40,  144 => 34,  139 => 31,  133 => 30,  117 => 20,  113 => 19,  109 => 18,  104 => 16,  100 => 15,  96 => 14,  92 => 12,  86 => 11,  74 => 8,  62 => 7,  54 => 4,  48 => 3,  11 => 1,);
    }
}
