<?php

namespace explorapp\PCBundle\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use explorapp\PCBundle\Entity\Usuarios;
use explorapp\PCBundle\Form\UsuariosForm;


class autentificarController extends Controller
{

	public function autentificarAction(Request $request){
		//Recoge los Datos
		$formLogin =$this->createForm(new UsuariosForm(),null);
		$formLogin->handleRequest($request);
		$datos =$formLogin->getData();

		$session = $request->getSession();

		//Comprueba si es Login o Nuevo Registro
		//Login
		$request = Request::createFromGlobals();
		$enviarLogin = $request->request->get('enviarlogin');

		if( $enviarLogin ){
		
			//Comprueba con la base de datos
		    	$em = $this->getDoctrine()->getManager();
		    	$usuario = $em->getRepository('PCBundle:Usuarios')->findOneby(array('userName'=>$datos['userName'],'userPass'=>$datos['userPass']));


			if( $usuario ){

				//Se crea la sesion que recoge los datos del usuario

				$session->set('Usuarios_Id', $usuario->getId());
				$session->set('userName', $usuario->getUserName());

				//Codigo para saber de que ruta venimos y así devolverle a la misma (si quieres ir a restaurantes, te lleva a restaurantes, no a index)
				$request = $this->container->get('request');
				$routeName = $request->get('_route');

				if ( $request->request->get('loginIndex') )
					return $this->redirect($this->generateUrl('pc_homepage'));
				else if( $request->request->get('loginRestaurantes') )
					return $this->redirect($this->generateUrl('pc_restaurantes'));
				else if( $request->request->get('loginBares') )
					return $this->redirect($this->generateUrl('pc_bares'));
				else if( $request->request->get('loginHoteles') )
					return $this->redirect($this->generateUrl('pc_hoteles'));
				else if( $request->request->get('loginNuevoRegistro') )
					return $this->redirect($this->generateUrl('pc_homepage'));
				else if( $request->request->get('loginNuevoRegistroRestaurantes') )
					return $this->redirect($this->generateUrl('pc_nuevoregistrorestaurantes'));
				else if( $request->request->get('loginNuevoRegistroHoteles') )
					return $this->redirect($this->generateUrl('pc_nuevoregistrohoteles'));
				else if( $request->request->get('loginNuevoRegistroBares') )
					return $this->redirect($this->generateUrl('pc_nuevoregistrobares'));
				else if( $request->request->get('loginMostrarRestaurantes') )
					return $this->redirect($this->generateUrl('pc_mostrarrestaurantes'));
				else if( $request->request->get('loginMostrarBares') )
					return $this->redirect($this->generateUrl('pc_mostrarbares'));
				else if( $request->request->get('loginMostrarHoteles') )
					return $this->redirect($this->generateUrl('pc_mostrarhoteles'));
				else if( $request->request->get('codigoLoginPerfilNegocio') )
					return $this->redirect($this->generateUrl('pc_perfilusuario'));
				else if( $request->request->get('codigoLoginPerfilProducto') )
					return $this->redirect($this->generateUrl('pc_perfilusuario'));
				else if( $request->request->get('loginMostrarOfertas') )
					return $this->redirect($this->generateUrl('pc_perfilusuario'));
						

			}
			else
				return $this->render( 'PCBundle:vista:falloLogin.html.twig' );
		
		}
		else{
			return $this->redirect($this->generateUrl('pc_nuevoregistro'));
		}
		
	}

}
