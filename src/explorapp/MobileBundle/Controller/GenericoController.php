<?php

namespace explorapp\MobileBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use explorapp\PCBundle\Form\RegistrosForm;
use explorapp\PCBundle\Form\UsuariosForm;

class GenericoController extends Controller
{
    public function genericoAction(Request $request)
    {
	//Se crea la sesion que recoge los datos del usuario
        $session = $request->getSession();


	//Para cambiar el id segun si se esta logueado o no
	if ( $session->get('Usuarios_Id') != null && $session->get('userName') != null ){
		if( file_exists("/Users/Miguel/Sites/explorapp/web/DirectoriosUsuarios/".$session->get('userName')."/FotoPerfil.jpg") ){
			$rutaImagenPerfil = "DirectoriosUsuarios/".$session->get('userName')."/FotoPerfil.jpg";
		}
		else{
			$rutaImagenPerfil = "img/login.png";
		}

		$cerrarSesion = 'inherit';
		$textoRecuadro = 'Ir a tu Perfil';
		$idImagenPerfil = 'abrirPerfilUsuario';
	}	
	else{
		$rutaImagenPerfil = "img/login.png";
		$cerrarSesion = 'none';
		$textoRecuadro = 'Acceder al Sistema';
		$idImagenPerfil = 'abrirNuevoRegistro';
	}


	$RegistrosForm = $this->createForm(new RegistrosForm(), null);
	$UsuariosForm = $this->createForm(new UsuariosForm(), null);


	//Codigo para saber de que ruta venimos y así devolverle a la misma (si quieres ir a restaurantes, te lleva a restaurantes, no a index)
	$request = $this->container->get('request');
	$routeName = $request->get('_route');


	if ( $routeName == 'mobile_homepage' )
        	return $this->render('MobileBundle:vista:index.html.twig', array( 'rutaImagenPerfil'=>$rutaImagenPerfil, 'textoRecuadro'=>$textoRecuadro, 'cerrarSesion'=>$cerrarSesion, 'idImagenPerfil' => $idImagenPerfil ));
	else if ( $routeName == 'mobile_formlogin' )
		return $this->render('MobileBundle:vista:autentificacion.html.twig', array( 'UsuariosForm'=>$UsuariosForm->createView() ));
	else if ( $routeName == 'mobile_nuevoregistro' )
		return $this->render('MobileBundle:vista:nuevoRegistro.html.twig', array( 'RegistrosForm'=>$RegistrosForm->createView() ));
    else if ( $routeName == 'mobile_perfilusuario' )
		return $this->render('MobileBundle:vista:perfilUsuario.html.twig', array('rutaImagenPerfil'=>$rutaImagenPerfil) );
    }
}
