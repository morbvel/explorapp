<?php

namespace explorapp\MobileBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use explorapp\PCBundle\Form\RegistrosForm;
use explorapp\PCBundle\Entity\Usuarios;
use explorapp\PCBundle\Entity\DatosPersonales;
use explorapp\PCBundle\Entity\Negocio;
use explorapp\PCBundle\Entity\Producto;
use explorapp\PCBundle\Entity\Oferta;
use explorapp\PCBundle\Entity\OfertasCliente;

class GuardarDatosController extends Controller
{
    public function nuevoRegistroMobileAction(Request $request){
    	$session = $request->getSession();

		$formRegistro =$this->createForm(new RegistrosForm(),null);
		$formRegistro->handleRequest($request);
		$datos =$formRegistro->getData();

		$request = Request::createFromGlobals();

		//Comprueba con la base de datos
		$em = $this->getDoctrine()->getManager();
		$usuario = $em->getRepository('PCBundle:Usuarios')->findOneby(array('userName'=>$datos['userName']));

		
		if( $usuario ){
			return $this->render( 'PCBundle:vista:usuarioExistente.html.twig' );
		}
		else{
			$datospersonales = $em->getRepository('PCBundle:DatosPersonales')->findOneby(array('idUsuario'=>$session->get('Usuarios_ID')));
			
			if( $datospersonales ){
				if( $datospersonales->getCorreoPersonal() == $datos['correoPersonal'] ){
					return $this->render( 'PCBundle:vista:usuarioExistente.html.twig' );}
			}
			else if( !$datospersonales ){

				$usuario = new Usuarios();
				$usuario->setUserName($datos['userName']);
				$usuario->setUserPass($datos['userPass']);


				$em->persist($usuario);
                		$em->flush();
				

				$session->set('userPass', $datos['userPass']);
				$session->set('userName', $datos['userName']);
				$session->set('Usuarios_Id', $usuario->getId());


				$datospersonales = new DatosPersonales();
				$datospersonales->setNombrePersonal($datos['nombrePersonal']);
				$datospersonales->setApellido1Personal($datos['apellido1Personal']);
				$datospersonales->setApellido2Personal($datos['apellido2Personal']);


				if( $datos['sexoPersonal'] == 'h' )
					$datospersonales->setSexoPersonal('Hombre');
				else if( $datos['sexoPersonal'] == 'm' )
					$datospersonales->setSexoPersonal('Mujer');

				$datospersonales->setFechaNacimientoPersonal(new \DateTime($datos['fechaNacimientoPersonal']->format('d-m-Y')));

				$datospersonales->setDNIPersonal($datos['DNIPersonal']);
				$datospersonales->setTelefonoPersonal($datos['telefonoPersonal']);
				$datospersonales->setCorreoPersonal($datos['correoPersonal']);

				$datospersonales->setUsuarios($usuario);

				$em->persist($datospersonales);
                		$em->flush();


				return $this->redirect($this->generateUrl('mobile_homepage'));
			}
		}
    }



    public function EliminarOfertaAction (Request $request, $descripcionOferta, $idProducto)
	{
		$em = $this->getDoctrine()->getManager();

		$oferta = $em->getRepository('PCBundle:Oferta')->findOneBy(array('descripcionOfertas'=>$descripcionOferta, 'idProducto'=>$idProducto));

		if ( $oferta ){
			$em->remove($oferta);
			$em->flush();

			return $this->redirect($this->generateUrl('mobile_perfilusuario'));
		}
	}



	public function AceptarOfertaAction (Request $request, $descripcionOferta, $idProducto)
	{
		$session = $request->getSession();


		$em = $this->getDoctrine()->getManager();

		$usuario = $em->getRepository('PCBundle:Usuarios')->findOneBy(array('userName'=>$session->get('userName')));
		$oferta = $em->getRepository('PCBundle:Oferta')->findOneBy(array('descripcionOfertas'=>$descripcionOferta, 'idProducto'=>$idProducto));
		
		
		
		if( $usuario && $oferta )
		{
			$ofertasCliente = $em->getRepository('PCBundle:OfertasCliente')->findOneBy(array('usuarios'=>$usuario->getId(), 'ofertas'=>$oferta->getIdOfertas()));

			if ( !$ofertasCliente )
			{
				$ofertasCliente = new OfertasCliente();
			
				$ofertasCliente->setUsuarios($usuario);
				$ofertasCliente->setOfertas($oferta);
			
				$fechaActual = date("d").'/'.date("m").'/'.date("Y");
				$ofertasCliente->setFechaOfertaCliente($fechaActual);		

				$em->persist($ofertasCliente);
		        	$em->flush();

				return $this->redirect($this->generateUrl('mobile_perfilusuario'));
			}
			else{
				return $this->render( 'MobileBundle:vista:index.html.twig' );
			}
		}
		else
			return $this->redirect($this->generateUrl('mobile_perfilusuario'));
	}
}
