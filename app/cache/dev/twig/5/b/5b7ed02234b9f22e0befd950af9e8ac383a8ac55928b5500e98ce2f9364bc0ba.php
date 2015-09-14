<?php

/* MobileBundle:Default:index.html.twig */
class __TwigTemplate_5b7ed02234b9f22e0befd950af9e8ac383a8ac55928b5500e98ce2f9364bc0ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MobileBundle::plantillaInicial.html.twig", "MobileBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'tituloPagina' => array($this, 'block_tituloPagina'),
            'contenidoInicial' => array($this, 'block_contenidoInicial'),
            'menuCabecera' => array($this, 'block_menuCabecera'),
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
        $__internal_5448f9e78253f04b714ad14918cd2404acbe4cc707a7f57efa6e04f2bf9bd7ee = $this->env->getExtension("native_profiler");
        $__internal_5448f9e78253f04b714ad14918cd2404acbe4cc707a7f57efa6e04f2bf9bd7ee->enter($__internal_5448f9e78253f04b714ad14918cd2404acbe4cc707a7f57efa6e04f2bf9bd7ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MobileBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5448f9e78253f04b714ad14918cd2404acbe4cc707a7f57efa6e04f2bf9bd7ee->leave($__internal_5448f9e78253f04b714ad14918cd2404acbe4cc707a7f57efa6e04f2bf9bd7ee_prof);

    }

    // line 3
    public function block_tituloPagina($context, array $blocks = array())
    {
        $__internal_c317677ba09613093ee7678c08300031a6425f74d0897b65ce6b04fc1a2331d7 = $this->env->getExtension("native_profiler");
        $__internal_c317677ba09613093ee7678c08300031a6425f74d0897b65ce6b04fc1a2331d7->enter($__internal_c317677ba09613093ee7678c08300031a6425f74d0897b65ce6b04fc1a2331d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tituloPagina"));

        // line 4
        echo "\tPágina Principal
";
        
        $__internal_c317677ba09613093ee7678c08300031a6425f74d0897b65ce6b04fc1a2331d7->leave($__internal_c317677ba09613093ee7678c08300031a6425f74d0897b65ce6b04fc1a2331d7_prof);

    }

    // line 9
    public function block_contenidoInicial($context, array $blocks = array())
    {
        $__internal_4157613cf9873d2c5c8e23db2d154d8b7ec44752f091ec328876a2c5f4b183ce = $this->env->getExtension("native_profiler");
        $__internal_4157613cf9873d2c5c8e23db2d154d8b7ec44752f091ec328876a2c5f4b183ce->enter($__internal_4157613cf9873d2c5c8e23db2d154d8b7ec44752f091ec328876a2c5f4b183ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoInicial"));

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
        
        $__internal_4157613cf9873d2c5c8e23db2d154d8b7ec44752f091ec328876a2c5f4b183ce->leave($__internal_4157613cf9873d2c5c8e23db2d154d8b7ec44752f091ec328876a2c5f4b183ce_prof);

    }

    // line 24
    public function block_menuCabecera($context, array $blocks = array())
    {
        $__internal_a3004fce9196ff59c35b7c34747e1da25c3ad7363dd07ffa9f63a87aa6e275b9 = $this->env->getExtension("native_profiler");
        $__internal_a3004fce9196ff59c35b7c34747e1da25c3ad7363dd07ffa9f63a87aa6e275b9->enter($__internal_a3004fce9196ff59c35b7c34747e1da25c3ad7363dd07ffa9f63a87aa6e275b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuCabecera"));

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
        
        $__internal_a3004fce9196ff59c35b7c34747e1da25c3ad7363dd07ffa9f63a87aa6e275b9->leave($__internal_a3004fce9196ff59c35b7c34747e1da25c3ad7363dd07ffa9f63a87aa6e275b9_prof);

    }

    // line 52
    public function block_menuRestaurantes($context, array $blocks = array())
    {
        $__internal_051ab102c1eeaedde2842110701da49ba9bbf1ded538b0b7153c7458d6374e4d = $this->env->getExtension("native_profiler");
        $__internal_051ab102c1eeaedde2842110701da49ba9bbf1ded538b0b7153c7458d6374e4d->enter($__internal_051ab102c1eeaedde2842110701da49ba9bbf1ded538b0b7153c7458d6374e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuRestaurantes"));

        // line 53
        echo "\t<ul data-role=\"listview\" data-inset=\"true\">
\t\t<li><a href=\"#\" data-transition=\"fade\">Listado de Restaurantes</a></li>
\t\t<li><a href=\"#\">Busqueda de Restaurantes</a></li>
\t\t<li><a href=\"#\">Darse de Alta</a></li>
\t</ul>
";
        
        $__internal_051ab102c1eeaedde2842110701da49ba9bbf1ded538b0b7153c7458d6374e4d->leave($__internal_051ab102c1eeaedde2842110701da49ba9bbf1ded538b0b7153c7458d6374e4d_prof);

    }

    // line 60
    public function block_contenidoCuerpo1($context, array $blocks = array())
    {
        $__internal_1349b742d90ecaa5aef7b66630d2253bea4e6e79ac6ac92365a42f8fad80200d = $this->env->getExtension("native_profiler");
        $__internal_1349b742d90ecaa5aef7b66630d2253bea4e6e79ac6ac92365a42f8fad80200d->enter($__internal_1349b742d90ecaa5aef7b66630d2253bea4e6e79ac6ac92365a42f8fad80200d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoCuerpo1"));

        // line 61
        echo "\t<ul data-role=\"listview\" data-inset=\"true\" >
\t\t<li>
\t\t\t<a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("mobile_formlogin");
        echo "\">
\t\t\t\t<img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenPerfil"]) ? $context["rutaImagenPerfil"] : $this->getContext($context, "rutaImagenPerfil"))), "html", null, true);
        echo "\" alt=\"Login\" class=\"ui-li-icon\">
\t\t\t\t";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["textoRecuadro"]) ? $context["textoRecuadro"] : $this->getContext($context, "textoRecuadro")), "html", null, true);
        echo "
\t\t\t</a>
\t\t</li>
\t</ul>

\t<p>Hay un restaurante especial para cada uno. Ese en el que te declaraste, aquel al que fuiste con tu hijo por primera vez o donde os juntáis los amigos una vez al año.</p>
\t<p>En Explorapp, te están esperando ofertas y descuentos increíbles de ese y otros muchos restaurantes.</p>

\t<img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/restaurante3.jpg"), "html", null, true);
        echo "\" ></img>
";
        
        $__internal_1349b742d90ecaa5aef7b66630d2253bea4e6e79ac6ac92365a42f8fad80200d->leave($__internal_1349b742d90ecaa5aef7b66630d2253bea4e6e79ac6ac92365a42f8fad80200d_prof);

    }

    // line 76
    public function block_contenidoFooter1($context, array $blocks = array())
    {
        $__internal_89a9df16e053aeef768eba96551e35460ffe14f740a0f9117e09eaf98585921d = $this->env->getExtension("native_profiler");
        $__internal_89a9df16e053aeef768eba96551e35460ffe14f740a0f9117e09eaf98585921d->enter($__internal_89a9df16e053aeef768eba96551e35460ffe14f740a0f9117e09eaf98585921d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoFooter1"));

        // line 77
        echo "\t<ul data-role=\"listview\" data-inset=\"true\">
\t\t<li><a href=\"#paginaInicial\" data-transition=\"fade\">Volver al inicio</a></li>
\t</ul>
";
        
        $__internal_89a9df16e053aeef768eba96551e35460ffe14f740a0f9117e09eaf98585921d->leave($__internal_89a9df16e053aeef768eba96551e35460ffe14f740a0f9117e09eaf98585921d_prof);

    }

    // line 87
    public function block_menuHoteles($context, array $blocks = array())
    {
        $__internal_481383098f4573cd055cdb35ee04ba0604ea837f2f43e059f00279c19a70b14c = $this->env->getExtension("native_profiler");
        $__internal_481383098f4573cd055cdb35ee04ba0604ea837f2f43e059f00279c19a70b14c->enter($__internal_481383098f4573cd055cdb35ee04ba0604ea837f2f43e059f00279c19a70b14c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuHoteles"));

        // line 88
        echo "\t<ul data-role=\"listview\" data-inset=\"true\">
\t\t<li><a href=\"#\" data-transition=\"fade\">Listado de Hoteles</a></li>
\t\t<li><a href=\"#\">Busqueda de Hoteles</a></li>
\t\t<li><a href=\"#\">Darse de Alta</a></li>
\t</ul>
";
        
        $__internal_481383098f4573cd055cdb35ee04ba0604ea837f2f43e059f00279c19a70b14c->leave($__internal_481383098f4573cd055cdb35ee04ba0604ea837f2f43e059f00279c19a70b14c_prof);

    }

    // line 95
    public function block_contenidoCuerpo2($context, array $blocks = array())
    {
        $__internal_9828885a36db8ab48634301c1fc78d83a15134750bcd9c9b39d79c1eb17fb6f3 = $this->env->getExtension("native_profiler");
        $__internal_9828885a36db8ab48634301c1fc78d83a15134750bcd9c9b39d79c1eb17fb6f3->enter($__internal_9828885a36db8ab48634301c1fc78d83a15134750bcd9c9b39d79c1eb17fb6f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoCuerpo2"));

        // line 96
        echo "\t<ul data-role=\"listview\" data-inset=\"true\" >
\t\t<li>
\t\t\t<a href=\"";
        // line 98
        echo $this->env->getExtension('routing')->getPath("mobile_formlogin");
        echo "\">
\t\t\t\t<img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenPerfil"]) ? $context["rutaImagenPerfil"] : $this->getContext($context, "rutaImagenPerfil"))), "html", null, true);
        echo "\" alt=\"Login\" class=\"ui-li-icon\">
\t\t\t\t";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["textoRecuadro"]) ? $context["textoRecuadro"] : $this->getContext($context, "textoRecuadro")), "html", null, true);
        echo "
\t\t\t</a>
\t\t</li>
\t</ul>

\t<p>Un fin de semana a la playa, una escapada con tu pareja a una casa rural o una noche a la capital. A todos nos gusta desconectar de la rutina, pero sin sudar la gota gorda.</p>
\t<p>Para cualquier plan que se te ocurra, Explorapp cuenta con los mejores alojamientos con unas ofertas que jamás creerías.</p>

\t<img src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/hotel4.jpg"), "html", null, true);
        echo "\" ></img>
";
        
        $__internal_9828885a36db8ab48634301c1fc78d83a15134750bcd9c9b39d79c1eb17fb6f3->leave($__internal_9828885a36db8ab48634301c1fc78d83a15134750bcd9c9b39d79c1eb17fb6f3_prof);

    }

    // line 111
    public function block_contenidoFooter2($context, array $blocks = array())
    {
        $__internal_d9478b48b8a86da5d4d18b1302fc9cbd9e3531885bc9f31a02315b7e4aca0f46 = $this->env->getExtension("native_profiler");
        $__internal_d9478b48b8a86da5d4d18b1302fc9cbd9e3531885bc9f31a02315b7e4aca0f46->enter($__internal_d9478b48b8a86da5d4d18b1302fc9cbd9e3531885bc9f31a02315b7e4aca0f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoFooter2"));

        // line 112
        echo "\t<ul data-role=\"listview\" data-inset=\"true\">
\t\t<li><a href=\"#paginaInicial\" data-transition=\"fade\">Volver al inicio</a></li>
\t</ul>
";
        
        $__internal_d9478b48b8a86da5d4d18b1302fc9cbd9e3531885bc9f31a02315b7e4aca0f46->leave($__internal_d9478b48b8a86da5d4d18b1302fc9cbd9e3531885bc9f31a02315b7e4aca0f46_prof);

    }

    // line 120
    public function block_menuBares($context, array $blocks = array())
    {
        $__internal_c27ef4960fd1de1eb6e52639aa87c92fd5eed6a2dcf8ab4184ea835734a42cf1 = $this->env->getExtension("native_profiler");
        $__internal_c27ef4960fd1de1eb6e52639aa87c92fd5eed6a2dcf8ab4184ea835734a42cf1->enter($__internal_c27ef4960fd1de1eb6e52639aa87c92fd5eed6a2dcf8ab4184ea835734a42cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuBares"));

        // line 121
        echo "\t<ul data-role=\"listview\" data-inset=\"true\">
\t\t<li><a href=\"#\" data-transition=\"fade\">Listado de Bares</a></li>
\t\t<li><a href=\"#\">Busqueda de Bares</a></li>
\t\t<li><a href=\"#\">Darse de Alta</a></li>
\t</ul>
";
        
        $__internal_c27ef4960fd1de1eb6e52639aa87c92fd5eed6a2dcf8ab4184ea835734a42cf1->leave($__internal_c27ef4960fd1de1eb6e52639aa87c92fd5eed6a2dcf8ab4184ea835734a42cf1_prof);

    }

    // line 128
    public function block_contenidoCuerpo3($context, array $blocks = array())
    {
        $__internal_7164a74c996c9637cb8a21132d410ae2a663193d1ffccdabd139ec0977a4bc34 = $this->env->getExtension("native_profiler");
        $__internal_7164a74c996c9637cb8a21132d410ae2a663193d1ffccdabd139ec0977a4bc34->enter($__internal_7164a74c996c9637cb8a21132d410ae2a663193d1ffccdabd139ec0977a4bc34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoCuerpo3"));

        // line 129
        echo "\t<ul data-role=\"listview\" data-inset=\"true\" >
\t\t<li>
\t\t\t<a href=\"";
        // line 131
        echo $this->env->getExtension('routing')->getPath("mobile_formlogin");
        echo "\">
\t\t\t\t<img src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["rutaImagenPerfil"]) ? $context["rutaImagenPerfil"] : $this->getContext($context, "rutaImagenPerfil"))), "html", null, true);
        echo "\" alt=\"Login\" class=\"ui-li-icon\">
\t\t\t\t";
        // line 133
        echo twig_escape_filter($this->env, (isset($context["textoRecuadro"]) ? $context["textoRecuadro"] : $this->getContext($context, "textoRecuadro")), "html", null, true);
        echo "
\t\t\t</a>
\t\t</li>
\t</ul>

\t<p>Partidas eternas de dardos, cervezas que no paran de aparecer y la música que te gusta. El encanto de los bares es algo único, y en Explorapp lo sabemos.</p>
\t<p>Por eso, tenemos miles de bares dispuestos a hacerte ahorrar dinero y así disfrutar más de tu experiencia.</p>

\t<img src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/bar3.jpg"), "html", null, true);
        echo "\" ></img>
";
        
        $__internal_7164a74c996c9637cb8a21132d410ae2a663193d1ffccdabd139ec0977a4bc34->leave($__internal_7164a74c996c9637cb8a21132d410ae2a663193d1ffccdabd139ec0977a4bc34_prof);

    }

    // line 144
    public function block_contenidoFooter3($context, array $blocks = array())
    {
        $__internal_2f0df15311cf0d4bf335c3e4a1ba014dff29950357a858240eb3639e327d6556 = $this->env->getExtension("native_profiler");
        $__internal_2f0df15311cf0d4bf335c3e4a1ba014dff29950357a858240eb3639e327d6556->enter($__internal_2f0df15311cf0d4bf335c3e4a1ba014dff29950357a858240eb3639e327d6556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenidoFooter3"));

        // line 145
        echo "\t<ul data-role=\"listview\" data-inset=\"true\">
\t\t<li><a href=\"#paginaInicial\" data-transition=\"fade\">Volver al inicio</a></li>
\t</ul>
";
        
        $__internal_2f0df15311cf0d4bf335c3e4a1ba014dff29950357a858240eb3639e327d6556->leave($__internal_2f0df15311cf0d4bf335c3e4a1ba014dff29950357a858240eb3639e327d6556_prof);

    }

    public function getTemplateName()
    {
        return "MobileBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 145,  337 => 144,  328 => 141,  317 => 133,  313 => 132,  309 => 131,  305 => 129,  299 => 128,  287 => 121,  281 => 120,  271 => 112,  265 => 111,  256 => 108,  245 => 100,  241 => 99,  237 => 98,  233 => 96,  227 => 95,  215 => 88,  209 => 87,  199 => 77,  193 => 76,  184 => 73,  173 => 65,  169 => 64,  165 => 63,  161 => 61,  155 => 60,  143 => 53,  137 => 52,  122 => 40,  113 => 34,  104 => 28,  99 => 25,  93 => 24,  77 => 14,  73 => 13,  69 => 12,  65 => 10,  59 => 9,  51 => 4,  45 => 3,  11 => 1,);
    }
}
