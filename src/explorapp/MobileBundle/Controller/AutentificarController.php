<?php

namespace explorapp\MobileBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use explorapp\PCBundle\Entity\Usuarios;
use explorapp\PCBundle\Form\UsuariosForm;


class AutentificarController extends Controller
{
	public function AutentificarAction(Request $request)
	{
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

				return $this->redirect($this->generateUrl('mobile_homepage'));
						

			}
			else
				return $this->render( 'PCBundle:vista:falloLogin.html.twig' );
		
		}
		else{
			return $this->redirect($this->generateUrl('mobile_nuevoregistro'));
		}
	}
}
