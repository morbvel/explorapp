<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'pc_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'explorapp\\PCBundle\\Controller\\genericoController::genericoAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_autentificar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'explorapp\\PCBundle\\Controller\\autentificarController::autentificarAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_perfilusuario' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'explorapp\\PCBundle\\Controller\\buscardatosController::buscardatosperfilusuarioAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/perfil-usuario',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_editarperfilusuario' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'explorapp\\PCBundle\\Controller\\guardardatosController::editarDatosPersonalesAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/perfil-usuario',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_subirimagen' => array (  0 =>   array (    0 => 'isNegocio',  ),  1 =>   array (    '_controller' => 'explorapp\\PCBundle\\Controller\\guardardatosController::subirfotosAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'isNegocio',    ),    1 =>     array (      0 => 'text',      1 => '/subir-imagen',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_subirimagenproducto' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'explorapp\\PCBundle\\Controller\\guardardatosController::subirFotosProductosAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/subir-imagen/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_restaurantes' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'explorapp\\PCBundle\\Controller\\genericoController::genericoAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/restaurantes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_hoteles' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'explorapp\\PCBundle\\Controller\\genericoController::genericoAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/hoteles',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_bares' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'explorapp\\PCBundle\\Controller\\genericoController::genericoAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/bares',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_nuevoregistro' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'explorapp\\PCBundle\\Controller\\genericoController::genericoAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nuevo-registro',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_nuevoregistroguardar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'explorapp\\PCBundle\\Controller\\guardardatosController::nuevoRegistroAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nuevo-registro',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_nuevoregistrorestaurantes' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'explorapp\\PCBundle\\Controller\\genericoController::genericoAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/restaurantes/nuevo-registro',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_guardardatosrestaurantes' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'explorapp\\PCBundle\\Controller\\guardardatosController::nuevoRegistroRestaurantesAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/restaurantes/nuevo-registro',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_nuevoregistrohoteles' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'explorapp\\PCBundle\\Controller\\genericoController::genericoAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/hoteles/nuevo-registro',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_guardardatoshoteles' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'explorapp\\PCBundle\\Controller\\guardardatosController::nuevoRegistroHotelesAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/hoteles/nuevo-registro',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_nuevoregistrobares' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'explorapp\\PCBundle\\Controller\\genericoController::genericoAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/bares/nuevo-registro',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_guardardatosbares' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'explorapp\\PCBundle\\Controller\\guardardatosController::nuevoRegistroBaresAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/bares/nuevo-registro',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_perfilnegocio' => array (  0 =>   array (    0 => 'nombreNegocio',    1 => 'idUsuario',  ),  1 =>   array (    '_controller' => 'explorapp\\PCBundle\\Controller\\buscardatosController::buscarDatosNegocioAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idUsuario',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'nombreNegocio',    ),    2 =>     array (      0 => 'text',      1 => '/perfil-negocio',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_editarperfilnegocio' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'explorapp\\PCBundle\\Controller\\guardardatosController::editarDatosNegociosAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/perfil-negocio',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_editarperfilproducto' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'explorapp\\PCBundle\\Controller\\guardardatosController::editarDatosProductosAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/perfil-producto',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_mostrarrestaurantes' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'explorapp\\PCBundle\\Controller\\buscardatosController::buscarRestaurantesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/restaurantes/mostrar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_mostrarhoteles' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'explorapp\\PCBundle\\Controller\\buscardatosController::buscarHotelesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/hoteles/mostrar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_mostrarbares' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'explorapp\\PCBundle\\Controller\\buscardatosController::buscarBaresAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/bares/mostrar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_mostrarofertas' => array (  0 =>   array (    0 => 'nombreProducto',    1 => 'idNegocio',  ),  1 =>   array (    '_controller' => 'explorapp\\PCBundle\\Controller\\buscardatosController::buscarOfertasAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/mostrar',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idNegocio',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'nombreProducto',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_nuevoregistroproductos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'explorapp\\PCBundle\\Controller\\genericoController::genericoAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nuevo-registro-productos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_guardarregistroproductos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'explorapp\\PCBundle\\Controller\\guardardatosController::nuevoRegistroProductosAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nuevo-registro-productos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_perfilproducto' => array (  0 =>   array (    0 => 'nombreProducto',    1 => 'idNegocio',  ),  1 =>   array (    '_controller' => 'explorapp\\PCBundle\\Controller\\buscardatosController::buscarDatosProductoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idNegocio',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'nombreProducto',    ),    2 =>     array (      0 => 'text',      1 => '/perfil-producto',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_nuevoregistroofertas' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'explorapp\\PCBundle\\Controller\\genericoController::genericoAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nuevo-registro-ofertas',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_guardarregistroofertas' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'explorapp\\PCBundle\\Controller\\guardardatosController::nuevoRegistroOfertaAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nuevo-registro-ofertas',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pc_cerrarsesion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'explorapp\\PCBundle\\Controller\\cerrarsesionController::cerrarsesionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cerrar-sesion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/app/example',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
