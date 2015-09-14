<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // pc_perfilusuario
        if ($pathinfo === '/perfil-usuario') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_pc_perfilusuario;
            }

            return array (  '_controller' => 'explorapp\\PCBundle\\Controller\\buscardatosController::buscardatosperfilusuarioAction',  '_route' => 'pc_perfilusuario',);
        }
        not_pc_perfilusuario:

        // pc_subirimagen
        if ($pathinfo === '/subir-imagen') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_pc_subirimagen;
            }

            return array (  '_controller' => 'explorapp\\PCBundle\\Controller\\guardardatosController::subirfotosAction',  '_route' => 'pc_subirimagen',);
        }
        not_pc_subirimagen:

        // pc_restaurantes
        if ($pathinfo === '/restaurantes') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_pc_restaurantes;
            }

            return array (  '_controller' => 'explorapp\\PCBundle\\Controller\\genericoController::genericoAction',  '_route' => 'pc_restaurantes',);
        }
        not_pc_restaurantes:

        // pc_hoteles
        if ($pathinfo === '/hoteles') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_pc_hoteles;
            }

            return array (  '_controller' => 'explorapp\\PCBundle\\Controller\\genericoController::genericoAction',  '_route' => 'pc_hoteles',);
        }
        not_pc_hoteles:

        // pc_bares
        if ($pathinfo === '/bares') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_pc_bares;
            }

            return array (  '_controller' => 'explorapp\\PCBundle\\Controller\\genericoController::genericoAction',  '_route' => 'pc_bares',);
        }
        not_pc_bares:

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

            if (0 === strpos($pathinfo, '/nuevo-registro-')) {
                // pc_nuevoregistrorestaurantes
                if ($pathinfo === '/nuevo-registro-restaurantes') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_pc_nuevoregistrorestaurantes;
                    }

                    return array (  '_controller' => 'explorapp\\PCBundle\\Controller\\genericoController::genericoAction',  '_route' => 'pc_nuevoregistrorestaurantes',);
                }
                not_pc_nuevoregistrorestaurantes:

                // pc_nuevoregistrohoteles
                if ($pathinfo === '/nuevo-registro-hoteles') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_pc_nuevoregistrohoteles;
                    }

                    return array (  '_controller' => 'explorapp\\PCBundle\\Controller\\genericoController::genericoAction',  '_route' => 'pc_nuevoregistrohoteles',);
                }
                not_pc_nuevoregistrohoteles:

                // pc_nuevoregistrobares
                if ($pathinfo === '/nuevo-registro-bares') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_pc_nuevoregistrobares;
                    }

                    return array (  '_controller' => 'explorapp\\PCBundle\\Controller\\genericoController::genericoAction',  '_route' => 'pc_nuevoregistrobares',);
                }
                not_pc_nuevoregistrobares:

            }

        }

        // pc_cerrarsesion
        if ($pathinfo === '/cerrar-sesion') {
            return array (  '_controller' => 'explorapp\\PCBundle\\Controller\\cerrarsesionController::cerrarsesionAction',  '_route' => 'pc_cerrarsesion',);
        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
