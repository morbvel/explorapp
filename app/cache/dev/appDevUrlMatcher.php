<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/mobile')) {
            // mobile_homepage
            if (rtrim($pathinfo, '/') === '/mobile') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'mobile_homepage');
                }

                return array (  '_controller' => 'explorapp\\MobileBundle\\Controller\\GenericoController::genericoAction',  '_route' => 'mobile_homepage',);
            }

            if (0 === strpos($pathinfo, '/mobile/login')) {
                // mobile_formlogin
                if ($pathinfo === '/mobile/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mobile_formlogin;
                    }

                    return array (  '_controller' => 'explorapp\\MobileBundle\\Controller\\GenericoController::genericoAction',  '_route' => 'mobile_formlogin',);
                }
                not_mobile_formlogin:

                // mobile_autentificar
                if ($pathinfo === '/mobile/login') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mobile_autentificar;
                    }

                    return array (  '_controller' => 'explorapp\\MobileBundle\\Controller\\AutentificarController::AutentificarAction',  '_route' => 'mobile_autentificar',);
                }
                not_mobile_autentificar:

            }

            if (0 === strpos($pathinfo, '/mobile/nuevo-registro')) {
                // mobile_nuevoregistro
                if ($pathinfo === '/mobile/nuevo-registro') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mobile_nuevoregistro;
                    }

                    return array (  '_controller' => 'explorapp\\MobileBundle\\Controller\\GenericoController::genericoAction',  '_route' => 'mobile_nuevoregistro',);
                }
                not_mobile_nuevoregistro:

                // mobile_nuevoregistroguardar
                if ($pathinfo === '/mobile/nuevo-registro') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mobile_nuevoregistroguardar;
                    }

                    return array (  '_controller' => 'explorapp\\MobileBundle\\Controller\\GuardarDatosController::nuevoRegistroMobileAction',  '_route' => 'mobile_nuevoregistroguardar',);
                }
                not_mobile_nuevoregistroguardar:

            }

            if (0 === strpos($pathinfo, '/mobile/perfil-')) {
                // mobile_perfilusuario
                if ($pathinfo === '/mobile/perfil-usuario') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mobile_perfilusuario;
                    }

                    return array (  '_controller' => 'explorapp\\MobileBundle\\Controller\\BuscarDatosController::BuscarDatosUsuarioAction',  '_route' => 'mobile_perfilusuario',);
                }
                not_mobile_perfilusuario:

                // mobile_perfilnegocio
                if (0 === strpos($pathinfo, '/mobile/perfil-negocio') && preg_match('#^/mobile/perfil\\-negocio/(?P<idNegocio>[^/]++)/(?P<idUsuario>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mobile_perfilnegocio;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mobile_perfilnegocio')), array (  '_controller' => 'explorapp\\MobileBundle\\Controller\\BuscarDatosController::BuscarDatosNegocioAction',));
                }
                not_mobile_perfilnegocio:

                // mobile_perfilproducto
                if (0 === strpos($pathinfo, '/mobile/perfil-producto') && preg_match('#^/mobile/perfil\\-producto/(?P<nombreProducto>[^/]++)/(?P<idNegocio>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mobile_perfilproducto;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mobile_perfilproducto')), array (  '_controller' => 'explorapp\\MobileBundle\\Controller\\BuscarDatosController::BuscarDatosProductoAction',));
                }
                not_mobile_perfilproducto:

            }

            if (0 === strpos($pathinfo, '/mobile/mostrar-')) {
                // mobile_mostrarrestaurantes
                if ($pathinfo === '/mobile/mostrar-restaurantes') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mobile_mostrarrestaurantes;
                    }

                    return array (  '_controller' => 'explorapp\\MobileBundle\\Controller\\BuscarDatosController::MostrarRestaurantesAction',  '_route' => 'mobile_mostrarrestaurantes',);
                }
                not_mobile_mostrarrestaurantes:

                // mobile_mostrarbares
                if ($pathinfo === '/mobile/mostrar-bares') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mobile_mostrarbares;
                    }

                    return array (  '_controller' => 'explorapp\\MobileBundle\\Controller\\BuscarDatosController::MostrarBaresAction',  '_route' => 'mobile_mostrarbares',);
                }
                not_mobile_mostrarbares:

                // mobile_mostrarhoteles
                if ($pathinfo === '/mobile/mostrar-hoteles') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mobile_mostrarhoteles;
                    }

                    return array (  '_controller' => 'explorapp\\MobileBundle\\Controller\\BuscarDatosController::MostrarHotelesAction',  '_route' => 'mobile_mostrarhoteles',);
                }
                not_mobile_mostrarhoteles:

                // mobile_mostrarofertas
                if (0 === strpos($pathinfo, '/mobile/mostrar-ofertas') && preg_match('#^/mobile/mostrar\\-ofertas/(?P<nombreProducto>[^/]++)/(?P<idNegocio>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mobile_mostrarofertas;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mobile_mostrarofertas')), array (  '_controller' => 'explorapp\\MobileBundle\\Controller\\BuscarDatosController::MostrarOfertasAction',));
                }
                not_mobile_mostrarofertas:

            }

            // mobile_eliminaroferta
            if (0 === strpos($pathinfo, '/mobile/eliminar-oferta') && preg_match('#^/mobile/eliminar\\-oferta/(?P<descripcionOferta>[^/]++)/(?P<idProducto>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_mobile_eliminaroferta;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mobile_eliminaroferta')), array (  '_controller' => 'explorapp\\MobileBundle\\Controller\\GuardarDatosController::EliminarOfertaAction',));
            }
            not_mobile_eliminaroferta:

            // mobile_aceptaroferta
            if (0 === strpos($pathinfo, '/mobile/aceptar-oferta') && preg_match('#^/mobile/aceptar\\-oferta/(?P<descripcionOferta>[^/]++)/(?P<idProducto>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_mobile_aceptaroferta;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mobile_aceptaroferta')), array (  '_controller' => 'explorapp\\MobileBundle\\Controller\\GuardarDatosController::AceptarOfertaAction',));
            }
            not_mobile_aceptaroferta:

            // mobile_cerrarsesion
            if ($pathinfo === '/mobile/cerrar-sesion') {
                return array (  '_controller' => 'explorapp\\MobileBundle\\Controller\\cerrarSesionController::cerrarSesionAction',  '_route' => 'mobile_cerrarsesion',);
            }

        }

        // pc_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_pc_homepage;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'pc_homepage');
            }

            return array (  '_controller' => 'explorapp\\PCBundle\\Controller\\genericoController::genericoAction',  '_route' => 'pc_homepage',);
        }
        not_pc_homepage:

        // pc_autentificar
        if ($pathinfo === '/') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_pc_autentificar;
            }

            return array (  '_controller' => 'explorapp\\PCBundle\\Controller\\autentificarController::autentificarAction',  '_route' => 'pc_autentificar',);
        }
        not_pc_autentificar:

        if (0 === strpos($pathinfo, '/perfil-usuario')) {
            // pc_perfilusuario
            if ($pathinfo === '/perfil-usuario') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_pc_perfilusuario;
                }

                return array (  '_controller' => 'explorapp\\PCBundle\\Controller\\buscardatosController::buscardatosperfilusuarioAction',  '_route' => 'pc_perfilusuario',);
            }
            not_pc_perfilusuario:

            // pc_editarperfilusuario
            if ($pathinfo === '/perfil-usuario') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_pc_editarperfilusuario;
                }

                return array (  '_controller' => 'explorapp\\PCBundle\\Controller\\guardardatosController::editarDatosPersonalesAction',  '_route' => 'pc_editarperfilusuario',);
            }
            not_pc_editarperfilusuario:

        }

        if (0 === strpos($pathinfo, '/subir-imagen')) {
            // pc_subirimagen
            if (preg_match('#^/subir\\-imagen/(?P<isNegocio>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_pc_subirimagen;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pc_subirimagen')), array (  '_controller' => 'explorapp\\PCBundle\\Controller\\guardardatosController::subirfotosAction',));
            }
            not_pc_subirimagen:

            // pc_subirimagenproducto
            if ($pathinfo === '/subir-imagen/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_pc_subirimagenproducto;
                }

                return array (  '_controller' => 'explorapp\\PCBundle\\Controller\\guardardatosController::subirFotosProductosAction',  '_route' => 'pc_subirimagenproducto',);
            }
            not_pc_subirimagenproducto:

        }

        if (0 === strpos($pathinfo, '/restaurantes')) {
            // pc_restaurantes
            if ($pathinfo === '/restaurantes') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_pc_restaurantes;
                }

                return array (  '_controller' => 'explorapp\\PCBundle\\Controller\\genericoController::genericoAction',  '_route' => 'pc_restaurantes',);
            }
            not_pc_restaurantes:

            // pc_buscarrestaurantes
            if ($pathinfo === '/restaurantes/mostrar') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_pc_buscarrestaurantes;
                }

                return array (  '_controller' => 'explorapp\\PCBundle\\Controller\\buscardatosController::buscarRestauranteAction',  '_route' => 'pc_buscarrestaurantes',);
            }
            not_pc_buscarrestaurantes:

        }

        if (0 === strpos($pathinfo, '/hoteles')) {
            // pc_hoteles
            if ($pathinfo === '/hoteles') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_pc_hoteles;
                }

                return array (  '_controller' => 'explorapp\\PCBundle\\Controller\\genericoController::genericoAction',  '_route' => 'pc_hoteles',);
            }
            not_pc_hoteles:

            // pc_buscarhoteles
            if ($pathinfo === '/hoteles/mostrar') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_pc_buscarhoteles;
                }

                return array (  '_controller' => 'explorapp\\PCBundle\\Controller\\buscardatosController::buscarHotelAction',  '_route' => 'pc_buscarhoteles',);
            }
            not_pc_buscarhoteles:

        }

        if (0 === strpos($pathinfo, '/bares')) {
            // pc_bares
            if ($pathinfo === '/bares') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_pc_bares;
                }

                return array (  '_controller' => 'explorapp\\PCBundle\\Controller\\genericoController::genericoAction',  '_route' => 'pc_bares',);
            }
            not_pc_bares:

            // pc_buscarbares
            if ($pathinfo === '/bares/mostrar') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_pc_buscarbares;
                }

                return array (  '_controller' => 'explorapp\\PCBundle\\Controller\\buscardatosController::buscarBarAction',  '_route' => 'pc_buscarbares',);
            }
            not_pc_buscarbares:

        }

        if (0 === strpos($pathinfo, '/nuevo-registro')) {
            // pc_nuevoregistro
            if ($pathinfo === '/nuevo-registro') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_pc_nuevoregistro;
                }

                return array (  '_controller' => 'explorapp\\PCBundle\\Controller\\genericoController::genericoAction',  '_route' => 'pc_nuevoregistro',);
            }
            not_pc_nuevoregistro:

            // pc_nuevoregistroguardar
            if ($pathinfo === '/nuevo-registro') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_pc_nuevoregistroguardar;
                }

                return array (  '_controller' => 'explorapp\\PCBundle\\Controller\\guardardatosController::nuevoRegistroAction',  '_route' => 'pc_nuevoregistroguardar',);
            }
            not_pc_nuevoregistroguardar:

        }

        if (0 === strpos($pathinfo, '/restaurantes/nuevo-registro')) {
            // pc_nuevoregistrorestaurantes
            if ($pathinfo === '/restaurantes/nuevo-registro') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_pc_nuevoregistrorestaurantes;
                }

                return array (  '_controller' => 'explorapp\\PCBundle\\Controller\\genericoController::genericoAction',  '_route' => 'pc_nuevoregistrorestaurantes',);
            }
            not_pc_nuevoregistrorestaurantes:

            // pc_guardardatosrestaurantes
            if ($pathinfo === '/restaurantes/nuevo-registro') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_pc_guardardatosrestaurantes;
                }

                return array (  '_controller' => 'explorapp\\PCBundle\\Controller\\guardardatosController::nuevoRegistroRestaurantesAction',  '_route' => 'pc_guardardatosrestaurantes',);
            }
            not_pc_guardardatosrestaurantes:

        }

        if (0 === strpos($pathinfo, '/hoteles/nuevo-registro')) {
            // pc_nuevoregistrohoteles
            if ($pathinfo === '/hoteles/nuevo-registro') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_pc_nuevoregistrohoteles;
                }

                return array (  '_controller' => 'explorapp\\PCBundle\\Controller\\genericoController::genericoAction',  '_route' => 'pc_nuevoregistrohoteles',);
            }
            not_pc_nuevoregistrohoteles:

            // pc_guardardatoshoteles
            if ($pathinfo === '/hoteles/nuevo-registro') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_pc_guardardatoshoteles;
                }

                return array (  '_controller' => 'explorapp\\PCBundle\\Controller\\guardardatosController::nuevoRegistroHotelesAction',  '_route' => 'pc_guardardatoshoteles',);
            }
            not_pc_guardardatoshoteles:

        }

        if (0 === strpos($pathinfo, '/bares/nuevo-registro')) {
            // pc_nuevoregistrobares
            if ($pathinfo === '/bares/nuevo-registro') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_pc_nuevoregistrobares;
                }

                return array (  '_controller' => 'explorapp\\PCBundle\\Controller\\genericoController::genericoAction',  '_route' => 'pc_nuevoregistrobares',);
            }
            not_pc_nuevoregistrobares:

            // pc_guardardatosbares
            if ($pathinfo === '/bares/nuevo-registro') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_pc_guardardatosbares;
                }

                return array (  '_controller' => 'explorapp\\PCBundle\\Controller\\guardardatosController::nuevoRegistroBaresAction',  '_route' => 'pc_guardardatosbares',);
            }
            not_pc_guardardatosbares:

        }

        if (0 === strpos($pathinfo, '/perfil-')) {
            if (0 === strpos($pathinfo, '/perfil-negocio')) {
                // pc_perfilnegocio
                if (preg_match('#^/perfil\\-negocio/(?P<idNegocio>[^/]++)/(?P<idUsuario>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pc_perfilnegocio')), array (  '_controller' => 'explorapp\\PCBundle\\Controller\\buscardatosController::buscarDatosNegocioAction',));
                }

                // pc_editarperfilnegocio
                if ($pathinfo === '/perfil-negocio') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_pc_editarperfilnegocio;
                    }

                    return array (  '_controller' => 'explorapp\\PCBundle\\Controller\\guardardatosController::editarDatosNegociosAction',  '_route' => 'pc_editarperfilnegocio',);
                }
                not_pc_editarperfilnegocio:

            }

            // pc_editarperfilproducto
            if ($pathinfo === '/perfil-producto') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_pc_editarperfilproducto;
                }

                return array (  '_controller' => 'explorapp\\PCBundle\\Controller\\guardardatosController::editarDatosProductosAction',  '_route' => 'pc_editarperfilproducto',);
            }
            not_pc_editarperfilproducto:

        }

        // pc_mostrarrestaurantes
        if ($pathinfo === '/restaurantes/mostrar') {
            return array (  '_controller' => 'explorapp\\PCBundle\\Controller\\buscardatosController::buscarRestaurantesAction',  '_route' => 'pc_mostrarrestaurantes',);
        }

        // pc_mostrarhoteles
        if ($pathinfo === '/hoteles/mostrar') {
            return array (  '_controller' => 'explorapp\\PCBundle\\Controller\\buscardatosController::buscarHotelesAction',  '_route' => 'pc_mostrarhoteles',);
        }

        // pc_mostrarbares
        if ($pathinfo === '/bares/mostrar') {
            return array (  '_controller' => 'explorapp\\PCBundle\\Controller\\buscardatosController::buscarBaresAction',  '_route' => 'pc_mostrarbares',);
        }

        // pc_mostrarofertas
        if (preg_match('#^/(?P<nombreProducto>[^/]++)/(?P<idNegocio>[^/]++)/mostrar$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pc_mostrarofertas')), array (  '_controller' => 'explorapp\\PCBundle\\Controller\\buscardatosController::buscarOfertasAction',));
        }

        if (0 === strpos($pathinfo, '/nuevo-registro-productos')) {
            // pc_nuevoregistroproductos
            if ($pathinfo === '/nuevo-registro-productos') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_pc_nuevoregistroproductos;
                }

                return array (  '_controller' => 'explorapp\\PCBundle\\Controller\\genericoController::genericoAction',  '_route' => 'pc_nuevoregistroproductos',);
            }
            not_pc_nuevoregistroproductos:

            // pc_guardarregistroproductos
            if ($pathinfo === '/nuevo-registro-productos') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_pc_guardarregistroproductos;
                }

                return array (  '_controller' => 'explorapp\\PCBundle\\Controller\\guardardatosController::nuevoRegistroProductosAction',  '_route' => 'pc_guardarregistroproductos',);
            }
            not_pc_guardarregistroproductos:

        }

        // pc_perfilproducto
        if (0 === strpos($pathinfo, '/perfil-producto') && preg_match('#^/perfil\\-producto/(?P<nombreProducto>[^/]++)/(?P<idNegocio>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pc_perfilproducto')), array (  '_controller' => 'explorapp\\PCBundle\\Controller\\buscardatosController::buscarDatosProductoAction',));
        }

        if (0 === strpos($pathinfo, '/nuevo-registro-ofertas')) {
            // pc_nuevoregistroofertas
            if ($pathinfo === '/nuevo-registro-ofertas') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_pc_nuevoregistroofertas;
                }

                return array (  '_controller' => 'explorapp\\PCBundle\\Controller\\genericoController::genericoAction',  '_route' => 'pc_nuevoregistroofertas',);
            }
            not_pc_nuevoregistroofertas:

            // pc_guardarregistroofertas
            if ($pathinfo === '/nuevo-registro-ofertas') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_pc_guardarregistroofertas;
                }

                return array (  '_controller' => 'explorapp\\PCBundle\\Controller\\guardardatosController::nuevoRegistroOfertaAction',  '_route' => 'pc_guardarregistroofertas',);
            }
            not_pc_guardarregistroofertas:

        }

        // pc_eliminaroferta
        if (0 === strpos($pathinfo, '/eliminar-oferta') && preg_match('#^/eliminar\\-oferta/(?P<descripcionOfertas>[^/]++)/(?P<idProducto>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pc_eliminaroferta')), array (  '_controller' => 'explorapp\\PCBundle\\Controller\\guardardatosController::eliminarOfertaAction',));
        }

        // pc_apuntarseoferta
        if (0 === strpos($pathinfo, '/apuntarse-oferta') && preg_match('#^/apuntarse\\-oferta/(?P<descripcionOfertas>[^/]++)/(?P<idProducto>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pc_apuntarseoferta')), array (  '_controller' => 'explorapp\\PCBundle\\Controller\\guardardatosController::apuntarseOfertaAction',));
        }

        // pc_crearpdf
        if (0 === strpos($pathinfo, '/mostrar-oferta') && preg_match('#^/mostrar\\-oferta/(?P<idOferta>[^/]++)/(?P<idUsuario>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pc_crearpdf')), array (  '_controller' => 'explorapp\\PCBundle\\Controller\\crearPDFController::crearPDFAction',));
        }

        // pc_cerrarsesion
        if ($pathinfo === '/cerrar-sesion') {
            return array (  '_controller' => 'explorapp\\PCBundle\\Controller\\cerrarsesionController::cerrarsesionAction',  '_route' => 'pc_cerrarsesion',);
        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'AppBundle:Welcome:index',  '_route' => '_welcome',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
