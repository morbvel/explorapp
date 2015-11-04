<?php

namespace explorapp\MobileBundle\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use explorapp\PCBundle\Entity\Usuarios;
use explorapp\PCBundle\Entity\DatosPersonales;
use explorapp\PCBundle\Entity\Negocio;
use explorapp\PCBundle\Entity\OfertasCliente;

class BuscarDatosController extends Controller
{
	public function BuscarDatosUsuarioAction(Request $request){
		$session = $request->getSession();
		
		$em = $this->getDoctrine()->getManager();
		$usuario = $em->getRepository('PCBundle:Usuarios')->findOneby(array('userName'=>$session->get('userName')));		
		
		if( $usuario ){

			$datospersonales = $em->getRepository('PCBundle:DatosPersonales')->findOneby(array('idUsuario'=>$usuario->getId()));

			$negocios = $em->getRepository('PCBundle:Negocio')->findBy(array('idUsuario'=>$usuario->getId()));			
			
			$ofertasCliente = $em->getRepository('PCBundle:OfertasCliente')->findBy(array('usuarios'=>$usuario->getId()));
				
			

			if( file_exists("/Users/Miguel/Sites/explorapp/web/DirectoriosUsuarios/".$session->get('userName')."/FotoPerfil.jpg") ){
				$rutaImagenPerfilUsuario = "DirectoriosUsuarios/".$session->get('userName')."/FotoPerfil.jpg";
				//$rutaImagenPerfil = "DirectoriosUsuarios/".$session->get('userName')."/FotoPerfil.jpg";
			}
			else{
				$rutaImagenPerfilUsuario = "img/login.png";
				//$rutaImagenPerfil = "img/botonAccederPerfil.gif";
			}	

			$cerrarSesion = 'inherit';
			return $this->render( 'MobileBundle:vista:perfilUsuario.html.twig', array( 'rutaImagenPerfilUsuario'=>$rutaImagenPerfilUsuario, 'usuario'=>$usuario, 'datospersonales'=>$datospersonales, 'negocios'=>$negocios, 'ofertasCliente'=>$ofertasCliente, 'cerrarSesion'=>$cerrarSesion ));

		}
		else{
			return $this->redirect($this->generateUrl('mobile_homepage'));
		}
	}



	public function MostrarRestaurantesAction(Request $request){
		$session = $request->getSession();

		if( $session->get('Usuarios_Id') != null && $session->get('userName') != null ){
			

			if( file_exists("/Users/Miguel/Sites/explorapp/web/DirectoriosUsuarios/".$session->get('userName')."/FotoPerfil.jpg") ){
				$rutaImagenPerfil = "DirectoriosUsuarios/".$session->get('userName')."/FotoPerfil.jpg";
			}
			else{
				$rutaImagenPerfil = "img/botonAccederPerfil.gif";
			}

			$textoRecuadro = 'Ir a tu Perfil';
			$visibleCerrarSesion = 'inherit';	

		}
		else{

			$rutaImagenPerfil = "img/login.png";
			$textoRecuadro = 'Acceder al Sistema';
			$visibleCerrarSesion = 'none';
		}

		//Comprueba con la base de datos para obtener los datos de los restaurantes
		$em = $this->getDoctrine()->getManager();
		$listadoRestaurantes = $em->getRepository('PCBundle:Negocio')->findBy(array('tipoNegocio'=>'Restaurante'), array('ciudadNegocio' => 'ASC'));

		$usuarios = $em->getRepository('PCBundle:Usuarios')->findAll();

		return $this->render( 'MobileBundle:vista:mostrarRestaurantes.html.twig', array( 'visibleCerrarSesion'=>$visibleCerrarSesion, 'listadoRestaurantes'=>$listadoRestaurantes, 'usuarios'=>$usuarios, 'textoRecuadro'=>$textoRecuadro, 'rutaImagenPerfil'=>$rutaImagenPerfil ) );
	
	}




	public function MostrarBaresAction(Request $request){
		$session = $request->getSession();

		if( $session->get('Usuarios_Id') != null && $session->get('userName') != null ){
			

			if( file_exists("/Users/Miguel/Sites/explorapp/web/DirectoriosUsuarios/".$session->get('userName')."/FotoPerfil.jpg") ){
				$rutaImagenPerfil = "DirectoriosUsuarios/".$session->get('userName')."/FotoPerfil.jpg";
			}
			else{
				$rutaImagenPerfil = "img/botonAccederPerfil.gif";
			}

			$textoRecuadro = 'Ir a tu Perfil';
			$visibleCerrarSesion = 'inherit';	

		}
		else{

			$rutaImagenPerfil = "img/login.png";
			$textoRecuadro = 'Acceder al Sistema';
			$visibleCerrarSesion = 'none';
		}

		//Comprueba con la base de datos para obtener los datos de los restaurantes
		$em = $this->getDoctrine()->getManager();
		$listadoBares = $em->getRepository('PCBundle:Negocio')->findBy(array('tipoNegocio'=>'Bar'), array('ciudadNegocio' => 'ASC'));

		$usuarios = $em->getRepository('PCBundle:Usuarios')->findAll();

		return $this->render( 'MobileBundle:vista:mostrarBares.html.twig', array( 'visibleCerrarSesion'=>$visibleCerrarSesion, 'listadoBares'=>$listadoBares, 'usuarios'=>$usuarios, 'textoRecuadro'=>$textoRecuadro, 'rutaImagenPerfil'=>$rutaImagenPerfil ) );
	
	}




	public function MostrarHotelesAction(Request $request){
		$session = $request->getSession();

		if( $session->get('Usuarios_Id') != null && $session->get('userName') != null ){
			

			if( file_exists("/Users/Miguel/Sites/explorapp/web/DirectoriosUsuarios/".$session->get('userName')."/FotoPerfil.jpg") ){
				$rutaImagenPerfil = "DirectoriosUsuarios/".$session->get('userName')."/FotoPerfil.jpg";
			}
			else{
				$rutaImagenPerfil = "img/botonAccederPerfil.gif";
			}

			$textoRecuadro = 'Ir a tu Perfil';
			$visibleCerrarSesion = 'inherit';	

		}
		else{

			$rutaImagenPerfil = "img/login.png";
			$textoRecuadro = 'Acceder al Sistema';
			$visibleCerrarSesion = 'none';
		}

		//Comprueba con la base de datos para obtener los datos de los restaurantes
		$em = $this->getDoctrine()->getManager();
		$listadoHoteles = $em->getRepository('PCBundle:Negocio')->findBy(array('tipoNegocio'=>'Hotel'), array('ciudadNegocio' => 'ASC'));

		$usuarios = $em->getRepository('PCBundle:Usuarios')->findAll();

		return $this->render( 'MobileBundle:vista:mostrarHoteles.html.twig', array( 'visibleCerrarSesion'=>$visibleCerrarSesion, 'listadoHoteles'=>$listadoHoteles, 'usuarios'=>$usuarios, 'textoRecuadro'=>$textoRecuadro, 'rutaImagenPerfil'=>$rutaImagenPerfil ) );
	
	}





	public function BuscarDatosNegocioAction(Request $request, $idNegocio, $idUsuario){

		//echo $nombreNegocio.'  '.$idUsuario; exit;

		$session = $request->getSession();
		
		//Comprueba con la base de datos para obtener los datos de perfil de usuario
		$em = $this->getDoctrine()->getManager();
		$usuarioConectado = $em->getRepository('PCBundle:Usuarios')->findOneby(array('userName'=>$session->get('userName')));

		//Se obtienen los datos del usuario conectado
		if( $usuarioConectado ){
			$visibleCerrarSesion = 'inherit';
				
			//$idFotoBarraMenu = "abrirPerfilUsuarios";

			/*if( file_exists("/Users/Miguel/Sites/explorapp/web/DirectoriosUsuarios/".$session->get('userName')."/FotoPerfil.jpg") ){
				$rutaImagenPerfilUsuario = "DirectoriosUsuarios/".$session->get('userName')."/FotoPerfil.jpg";
			}
			else{
				$rutaImagenPerfilUsuario = "img/botonAccederPerfil.gif";
			}*/
		}
		else{
			//$idFotoBarraMenu = "abrirPopUp";

			//$rutaImagenPerfilUsuario = "img/botonAcceder.gif";

			$visibleCerrarSesion = 'none';
		}

		//Se obtienen los datos del negocio que se esta buscando
		$negocio = $em->getRepository('PCBundle:Negocio')->findOneBy(array('idNegocio'=>$idNegocio, 'idUsuario'=>$idUsuario));
		//Se obtienen los datos del dueño del negocio
		$usuarioDuenio = $em->getRepository('PCBundle:Usuarios')->findOneBy(array('id'=>$idUsuario));

		if( $negocio ){

			if( file_exists("/Users/Miguel/Sites/explorapp/web/DirectoriosUsuarios/".$usuarioDuenio->getUserName()."/Negocios/".$negocio->getNombreNegocio().".jpg") ){
				$rutaImagenPerfil = "DirectoriosUsuarios/".$usuarioDuenio->getUserName()."/Negocios/".$negocio->getNombreNegocio().".jpg";
			}
			else{
				$rutaImagenPerfil = "img/explorapp.jpg";
			}	
		}

		

		//Se comprueba si el dueño del negocio es el que esta conectado
		
		/*if( $usuarioDuenio && $usuarioConectado ){
			if( $usuarioDuenio->getId() == $usuarioConectado->getId() )
				$visibleEditarPerfilNegocio = 'inherit';
			else
				$visibleEditarPerfilNegocio = 'none';

		}
		else
			$visibleEditarPerfilNegocio = 'none';*/

		

		//Se guarda el nombre del negocio y el idUsuario en sesion
		$session->set('nombreNegocio', $negocio->getNombreNegocio());
		$session->set('idDueno', $usuarioDuenio->getId());



		//$formLogin = $this->createForm(new UsuariosForm(), null);
		//$formEditarDatosNegocio =$this->createForm(new PerfilNegocioForm(),null);



		$productos = $em->getRepository('PCBundle:Producto')->findBy(array('idNegocio'=>$negocio->getIdNegocio()));





		return $this->render( 'MobileBundle:vista:perfilNegocio.html.twig', array( 'usuarioDuenio'=>$usuarioDuenio, 'cerrarSesion'=>$visibleCerrarSesion, 'negocio'=>$negocio, 'usuario'=>$usuarioConectado, 'rutaImagenPerfil'=>$rutaImagenPerfil , 'visibleCerrarSesion'=>$visibleCerrarSesion, 'productos'=>$productos ) );
	}





	public function BuscarDatosProductoAction(Request $request, $nombreProducto, $idNegocio){

		$session = $request->getSession();
		
		//Comprueba con la base de datos para obtener los datos de perfil de usuario
		$em = $this->getDoctrine()->getManager();
		$usuarioConectado = $em->getRepository('PCBundle:Usuarios')->findOneby(array('userName'=>$session->get('userName')));

		//Se obtienen los datos del usuario conectado
		if( $usuarioConectado ){
			$visibleCerrarSesion = 'inherit';
				
			//$idFotoBarraMenu = "abrirPerfilUsuarios";

			/*if( file_exists("/Users/Miguel/Sites/explorapp/web/DirectoriosUsuarios/".$session->get('userName')."/FotoPerfil.jpg") ){
				$rutaImagenPerfilUsuario = "DirectoriosUsuarios/".$session->get('userName')."/FotoPerfil.jpg";
			}
			else{
				$rutaImagenPerfilUsuario = "img/botonAccederPerfil.gif";
			}*/	
		}
		else{
			//$idFotoBarraMenu = "abrirPopUp";

			//$rutaImagenPerfilUsuario = "img/botonAcceder.gif";

			$visibleCerrarSesion = 'none';
		}





		//Se obtienen los datos del producto que se esta buscando
		$producto = $em->getRepository('PCBundle:Producto')->findOneBy(array('nombreProducto'=>$nombreProducto, 'idNegocio'=>$idNegocio));
		//Se obtienen los datos del negocio del producto
		$negocio = $em->getRepository('PCBundle:Negocio')->findOneBy(array('idNegocio'=>$idNegocio));


		$usuarioDuenio = $em->getRepository('PCBundle:Usuarios')->findOneBy(array('id'=>$negocio->getIdUsuario()));


		if( $producto ){

			if( file_exists("/Users/Miguel/Sites/explorapp/web/DirectoriosUsuarios/".$usuarioDuenio->getUserName()."/Negocios/".$producto->getNombreProducto().".jpg") ){
				$rutaImagenPerfil = "DirectoriosUsuarios/".$usuarioDuenio->getUserName()."/Negocios/".$producto->getNombreProducto().".jpg";
			}
			else{
				$rutaImagenPerfil = "img/explorapp.jpg";
			}	
		}

		

		//Se comprueba si el dueño del negocio es el que esta conectado
		
		/*if( $usuarioDuenio && $usuarioConectado ){
			if( $usuarioDuenio->getId() == $usuarioConectado->getId() )
				$visibleEditarPerfilProducto = 'inherit';
			else
				$visibleEditarPerfilProducto = 'none';

		}
		else
			$visibleEditarPerfilProducto = 'none';*/

		

		//Se guarda el nombre del negocio y el idUsuario en sesion
		$session->set('nombreNegocio', $negocio->getNombreNegocio());
		$session->set('idDueno', $usuarioDuenio->getId());
		$session->set('nombreProducto', $producto->getNombreProducto());



		//$formLogin = $this->createForm(new UsuariosForm(), null);
		//$formEditarDatosProducto =$this->createForm(new PerfilProductoForm(),null);




		return $this->render( 'MobileBundle:vista:perfilProducto.html.twig', array( 'rutaImagenPerfil'=>$rutaImagenPerfil , 'producto'=>$producto, 'usuario'=>$usuarioConectado, 'cerrarSesion'=>$visibleCerrarSesion) );
	}




	public function MostrarOfertasAction(Request $request, $nombreProducto, $idNegocio){


		$session = $request->getSession();
		
		//Comprueba con la base de datos para obtener los datos de perfil de usuario
		$em = $this->getDoctrine()->getManager();
		$usuarioConectado = $em->getRepository('PCBundle:Usuarios')->findOneby(array('userName'=>$session->get('userName')));


		//Se obtienen los datos del usuario conectado
		if( $usuarioConectado ){				
			//$idFotoBarraMenu = "abrirPerfilUsuarios";

			if( file_exists("/Users/Miguel/Sites/explorapp/web/DirectoriosUsuarios/".$session->get('userName')."/FotoPerfil.jpg") ){
				$rutaImagenPerfil = "DirectoriosUsuarios/".$session->get('userName')."/FotoPerfil.jpg";
			}
			else{
				$rutaImagenPerfil = "img/botonAccederPerfil.gif";
			}

			$textoRecuadro = 'Ir a tu Perfil';
			$visibleCerrarSesion = 'inherit';	
		}
		else{
			$rutaImagenPerfil = "img/login.png";
			$textoRecuadro = 'Acceder al Sistema';
			$visibleCerrarSesion = 'none';
		}



		//Se obtienen los datos del producto que se esta buscando
		$producto = $em->getRepository('PCBundle:Producto')->findOneBy(array('nombreProducto'=>$nombreProducto, 'idNegocio'=>$idNegocio));
		//Se obtienen los datos del negocio del producto
		$negocio = $em->getRepository('PCBundle:Negocio')->findOneBy(array('idNegocio'=>$idNegocio));


		$usuarioDuenio = $em->getRepository('PCBundle:Usuarios')->findOneBy(array('id'=>$negocio->getIdUsuario()));



		//Se guarda el nombre del negocio y el idUsuario en sesion
		$session->set('nombreNegocio', $negocio->getNombreNegocio());
		$session->set('idDueno', $usuarioDuenio->getId());
		$session->set('nombreProducto', $producto->getNombreProducto());


		if ( $usuarioConectado && $usuarioDuenio ){
			if ( $usuarioConectado->getId() == $usuarioDuenio->getId() ){
				$visibleEditarOferta = 'inherit';
				$visibleApuntarOferta = 'none';			
			}
			else{
				$visibleEditarOferta = 'none';
				$visibleApuntarOferta = 'inherit';	
			}
		}
		else{
			$visibleEditarOferta = 'none';
			$visibleApuntarOferta = 'none';	
		}



		//$formLogin = $this->createForm(new UsuariosForm(), null);


		//$tipoNegocio = $negocio->getTipoNegocio();



		$listadoOfertas = $em->getRepository('PCBundle:Oferta')->findBy(array('idProducto'=>$producto->getId()));


		return $this->render( 'MobileBundle:vista:mostrarOfertas.html.twig', array( 'textoRecuadro'=>$textoRecuadro, 'rutaImagenPerfil'=>$rutaImagenPerfil, 'producto'=>$producto, 'usuario'=>$usuarioConectado, 'cerrarSesion'=>$visibleCerrarSesion, 'listadoOfertas'=>$listadoOfertas, 'visibleEditarOferta'=>$visibleEditarOferta, 'visibleApuntarOferta'=>$visibleApuntarOferta ) );
	}



}

?>