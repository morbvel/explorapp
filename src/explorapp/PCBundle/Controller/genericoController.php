<?php

namespace explorapp\PCBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use explorapp\PCBundle\Form\UsuariosForm;
use explorapp\PCBundle\Form\RegistrosForm;
use explorapp\PCBundle\Form\RegistroRestaurantesForm;
use explorapp\PCBundle\Form\RegistroHotelesForm;
use explorapp\PCBundle\Form\RegistroBaresForm;
use explorapp\PCBundle\Form\RegistroProductosForm;
use explorapp\PCBundle\Form\RegistroOfertasForm;
use explorapp\PCBundle\Form\BusquedaForm;

class genericoController extends Controller
{
    public function genericoAction(Request $request)
    {
	//Se crea la sesion que recoge los datos del usuario
        $session = $request->getSession();


	//Para cambiar el id segun si se esta logueado o no
	if ( $session->get('Usuarios_Id') != null && $session->get('userName') != null ){
		

		$visibleCerrarSesion = 'inherit';
		$visibleParrafoAcceder = 'none';
				
		$idFotoBarraMenu = "abrirPerfilUsuarios";
		
		if( file_exists("/Users/Miguel/Sites/explorapp/web/DirectoriosUsuarios/".$session->get('userName')."/FotoPerfil.jpg") ){
			$rutaImagenPerfil = "DirectoriosUsuarios/".$session->get('userName')."/FotoPerfil.jpg";
		}
		else{
			$rutaImagenPerfil = "img/botonAccederPerfil.gif";
		}	
	}	
	else{
		$idFotoBarraMenu = "abrirPopUp";

		$rutaImagenPerfil = "img/botonAcceder.gif";

		$visibleCerrarSesion = 'none';
		$visibleParrafoAcceder = 'inherit';
	}

	
	$formLogin = $this->createForm(new UsuariosForm(), null);
	$formNuevoRegistroUsuarios = $this->createForm(new RegistrosForm(), null);
	$formNuevoRegistroRestaurantes = $this->createForm(new RegistroRestaurantesForm(), null);
	$formNuevoRegistroHoteles = $this->createForm(new RegistroHotelesForm(), null);
	$formNuevoRegistroBares = $this->createForm(new RegistroBaresForm(), null);
	$formNuevoRegistroProductos = $this->createForm(new RegistroProductosForm(), null);
	$formNuevoRegistroOfertas = $this->createForm(new RegistroOfertasForm(), null);
	$formBusqueda = $this->createForm(new BusquedaForm(), null);



	//Codigo para saber de que ruta venimos y así devolverle a la misma (si quieres ir a restaurantes, te lleva a restaurantes, no a index)
	$request = $this->container->get('request');
	$routeName = $request->get('_route');

	if ( $routeName == 'pc_homepage' )
        	return $this->render( 'PCBundle:vista:index.html.twig', array('idFotoBarraMenu'=>$idFotoBarraMenu, 'rutaImagenPerfil'=> $rutaImagenPerfil, 'visibleCerrarSesion'=>$visibleCerrarSesion, 'formLogin' => $formLogin->createView(), 'formBusqueda'=>$formBusqueda->createView()) );
	else if( $routeName == 'pc_restaurantes' )
		return $this->render( 'PCBundle:vista:restaurantes.html.twig', array('idFotoBarraMenu'=>$idFotoBarraMenu, 'rutaImagenPerfil'=> $rutaImagenPerfil, 'visibleCerrarSesion'=>$visibleCerrarSesion, 'formLogin' => $formLogin->createView(), 'formBusqueda'=>$formBusqueda->createView()) );
	else if( $routeName == 'pc_nuevoregistro' )
		return $this->render( 'PCBundle:vista:nuevoRegistro.html.twig', array('idFotoBarraMenu'=>$idFotoBarraMenu, 'rutaImagenPerfil'=> $rutaImagenPerfil, 'visibleCerrarSesion'=>$visibleCerrarSesion, 'formLogin' => $formLogin->createView(), 'formNuevoRegistroUsuarios' => $formNuevoRegistroUsuarios->createView(), 'visibleParrafoAcceder' => 'none' ) );
	else if( $routeName == 'pc_nuevoregistrorestaurantes' )
		return $this->render( 'PCBundle:vista:nuevoRegistroRestaurantes.html.twig', array('idFotoBarraMenu'=>$idFotoBarraMenu, 'rutaImagenPerfil'=> $rutaImagenPerfil, 'visibleCerrarSesion'=>$visibleCerrarSesion, 'formLogin' => $formLogin->createView(), 'formNuevoRegistroRestaurantes' => $formNuevoRegistroRestaurantes->createView(), 'visibleParrafoAcceder' => $visibleParrafoAcceder) );
	else if( $routeName == 'pc_nuevoregistrohoteles' )
		return $this->render( 'PCBundle:vista:nuevoRegistroHoteles.html.twig', array('idFotoBarraMenu'=>$idFotoBarraMenu, 'rutaImagenPerfil'=> $rutaImagenPerfil, 'visibleCerrarSesion'=>$visibleCerrarSesion, 'formLogin' => $formLogin->createView(), 'formNuevoRegistroHoteles' => $formNuevoRegistroHoteles->createView(), 'visibleParrafoAcceder' => $visibleParrafoAcceder) );
	else if( $routeName == 'pc_nuevoregistrobares' )
		return $this->render( 'PCBundle:vista:nuevoRegistroBares.html.twig', array('idFotoBarraMenu'=>$idFotoBarraMenu, 'rutaImagenPerfil'=> $rutaImagenPerfil, 'visibleCerrarSesion'=>$visibleCerrarSesion, 'formLogin' => $formLogin->createView(), 'formNuevoRegistroBares' => $formNuevoRegistroBares->createView(), 'visibleParrafoAcceder' => $visibleParrafoAcceder) );
	else if( $routeName == 'pc_bares' )
		return $this->render( 'PCBundle:vista:bares.html.twig', array('idFotoBarraMenu'=>$idFotoBarraMenu, 'rutaImagenPerfil'=> $rutaImagenPerfil, 'visibleCerrarSesion'=>$visibleCerrarSesion, 'formLogin' => $formLogin->createView(), 'formBusqueda'=>$formBusqueda->createView() ) );
	else if( $routeName == 'pc_hoteles' )
		return $this->render( 'PCBundle:vista:hoteles.html.twig', array('idFotoBarraMenu'=>$idFotoBarraMenu, 'rutaImagenPerfil'=> $rutaImagenPerfil, 'visibleCerrarSesion'=>$visibleCerrarSesion, 'formLogin' => $formLogin->createView(), 'formBusqueda'=>$formBusqueda->createView()) );
	else if( $routeName == 'pc_mostrarrestaurantes' )
		return $this->render( 'PCBundle:vista:mostrarRestaurantes.html.twig', array('idFotoBarraMenu'=>$idFotoBarraMenu, 'rutaImagenPerfil'=> $rutaImagenPerfil, 'visibleCerrarSesion'=>$visibleCerrarSesion, 'formLogin' => $formLogin->createView()) );
	else if( $routeName == 'pc_nuevoregistroproductos' )
		return $this->render( 'PCBundle:vista:nuevoRegistroProductos.html.twig', array('idFotoBarraMenu'=>$idFotoBarraMenu, 'rutaImagenPerfil'=> $rutaImagenPerfil, 'visibleCerrarSesion'=>$visibleCerrarSesion, 'formLogin' => $formLogin->createView(), 'visibleParrafoAcceder' => $visibleParrafoAcceder, 'formNuevoRegistroProductos'=>$formNuevoRegistroProductos->createView()) );
	else if( $routeName == 'pc_nuevoregistroofertas' )
		return $this->render( 'PCBundle:vista:nuevoRegistroOfertas.html.twig', array('idFotoBarraMenu'=>$idFotoBarraMenu, 'rutaImagenPerfil'=> $rutaImagenPerfil, 'visibleCerrarSesion'=>$visibleCerrarSesion, 'formLogin' => $formLogin->createView(), 'visibleParrafoAcceder' => $visibleParrafoAcceder, 'formNuevoRegistroOfertas'=>$formNuevoRegistroOfertas->createView()) );
	

    }
}
