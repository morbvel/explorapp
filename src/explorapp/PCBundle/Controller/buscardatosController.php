<?php

namespace explorapp\PCBundle\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use explorapp\PCBundle\Form\UsuariosForm;
use explorapp\PCBundle\Form\PerfilUsuarioForm;
use explorapp\PCBundle\Form\PerfilNegocioForm;
use explorapp\PCBundle\Form\PerfilProductoForm;
use explorapp\PCBundle\Entity\Usuarios;
use explorapp\PCBundle\Entity\DatosPersonales;
use explorapp\PCBundle\Entity\Negocio;
use explorapp\PCBundle\Entity\OfertasCliente;
use explorapp\PCBundle\Form\BusquedaForm;


class buscardatosController extends Controller
{

	public function buscardatosperfilusuarioAction(Request $request){

		$session = $request->getSession();
		
		//Comprueba con la base de datos para obtener los datos de perfil de usuario
		$em = $this->getDoctrine()->getManager();
		$usuario = $em->getRepository('PCBundle:Usuarios')->findOneby(array('userName'=>$session->get('userName')));

		if( $usuario ){

			$datospersonales = $em->getRepository('PCBundle:DatosPersonales')->findOneby(array('idUsuario'=>$usuario->getId()));

			$negocios = $em->getRepository('PCBundle:Negocio')->findBy(array('idUsuario'=>$usuario->getId()));			
			
			$ofertasCliente = $em->getRepository('PCBundle:OfertasCliente')->findBy(array('usuarios'=>$usuario->getId()));
				

			$idFotoBarraMenu = "abrirPerfilUsuarios";
			

			if( file_exists("/home/uemc/Proyectos/explorapp/web/DirectoriosUsuarios/".$session->get('userName')."/FotoPerfil.jpg") ){
				$rutaImagenPerfilUsuario = "DirectoriosUsuarios/".$session->get('userName')."/FotoPerfil.jpg";
				$rutaImagenPerfil = "DirectoriosUsuarios/".$session->get('userName')."/FotoPerfil.jpg";
			}
			else{
				$rutaImagenPerfilUsuario = "img/botonAccederPerfil.gif";
				$rutaImagenPerfil = "img/botonAccederPerfil.gif";
			}	


			$formEditarDatosPersonales =$this->createForm(new PerfilUsuarioForm(),null);


			return $this->render( 'PCBundle:vista:perfilUsuario.html.twig', array( 'rutaImagenPerfilUsuario'=>$rutaImagenPerfilUsuario, 'rutaImagenPerfil'=>$rutaImagenPerfil, 'idFotoBarraMenu'=>$idFotoBarraMenu, 'usuario'=>$usuario, 'datospersonales'=>$datospersonales, 'negocios'=>$negocios, 'ofertasCliente'=>$ofertasCliente, 'isNegocio'=>'false', 'tipoNegocio'=>'' , 'formEditarDatosPersonales' => $formEditarDatosPersonales->createView() ));

		}

	}




	public function buscarDatosNegocioAction(Request $request, $idNegocio, $idUsuario){

		//echo $nombreNegocio.'  '.$idUsuario; exit;

		$session = $request->getSession();
		
		//Comprueba con la base de datos para obtener los datos de perfil de usuario
		$em = $this->getDoctrine()->getManager();
		$usuarioConectado = $em->getRepository('PCBundle:Usuarios')->findOneby(array('userName'=>$session->get('userName')));

		//Se obtienen los datos del usuario conectado
		if( $usuarioConectado ){
			$visibleCerrarSesion = 'inherit';
				
			$idFotoBarraMenu = "abrirPerfilUsuarios";

			if( file_exists("/home/uemc/Proyectos/explorapp/web/DirectoriosUsuarios/".$session->get('userName')."/FotoPerfil.jpg") ){
				$rutaImagenPerfilUsuario = "DirectoriosUsuarios/".$session->get('userName')."/FotoPerfil.jpg";
			}
			else{
				$rutaImagenPerfilUsuario = "img/botonAccederPerfil.gif";
			}	
		}
		else{
			$idFotoBarraMenu = "abrirPopUp";

			$rutaImagenPerfilUsuario = "img/botonAcceder.gif";

			$visibleCerrarSesion = 'none';
		}

		//Se obtienen los datos del negocio que se esta buscando
		$negocio = $em->getRepository('PCBundle:Negocio')->findOneBy(array('idNegocio'=>$idNegocio, 'idUsuario'=>$idUsuario));
		//Se obtienen los datos del dueño del negocio
		$usuarioDuenio = $em->getRepository('PCBundle:Usuarios')->findOneBy(array('id'=>$idUsuario));

		if( $negocio ){

			if( file_exists("/home/uemc/Proyectos/explorapp/web/DirectoriosUsuarios/".$usuarioDuenio->getUserName()."/Negocios/".$negocio->getNombreNegocio().".jpg") ){
				$rutaImagenPerfil = "DirectoriosUsuarios/".$usuarioDuenio->getUserName()."/Negocios/".$negocio->getNombreNegocio().".jpg";
			}
			else{
				$rutaImagenPerfil = "img/explorapp.jpg";
			}	
		}

		

		//Se comprueba si el dueño del negocio es el que esta conectado
		
		if( $usuarioDuenio && $usuarioConectado ){
			if( $usuarioDuenio->getId() == $usuarioConectado->getId() )
				$visibleEditarPerfilNegocio = 'inherit';
			else
				$visibleEditarPerfilNegocio = 'none';

		}
		else
			$visibleEditarPerfilNegocio = 'none';

		

		//Se guarda el nombre del negocio y el idUsuario en sesion
		$session->set('nombreNegocio', $negocio->getNombreNegocio());
		$session->set('idDueno', $usuarioDuenio->getId());



		$formLogin = $this->createForm(new UsuariosForm(), null);
		$formEditarDatosNegocio =$this->createForm(new PerfilNegocioForm(),null);



		$productos = $em->getRepository('PCBundle:Producto')->findBy(array('idNegocio'=>$negocio->getIdNegocio()));





		return $this->render( 'PCBundle:vista:perfilNegocio.html.twig', array( 'rutaImagenPerfilUsuario'=>$rutaImagenPerfilUsuario, 'rutaImagenPerfil'=>$rutaImagenPerfil , 'idFotoBarraMenu'=>$idFotoBarraMenu, 'negocio'=>$negocio, 'usuario'=>$usuarioConectado, 'isNegocio'=>'true', 'tipoNegocio'=>$negocio->getTipoNegocio(), 'visibleCerrarSesion'=>$visibleCerrarSesion, 'visibleEditarPerfilNegocio'=>$visibleEditarPerfilNegocio, 'formLogin'=>$formLogin->createView(), 'formEditarDatosNegocio'=>$formEditarDatosNegocio->createView(), 'productos'=>$productos ) );
	}












	public function buscarDatosProductoAction(Request $request, $nombreProducto, $idNegocio){


		$session = $request->getSession();
		
		//Comprueba con la base de datos para obtener los datos de perfil de usuario
		$em = $this->getDoctrine()->getManager();
		$usuarioConectado = $em->getRepository('PCBundle:Usuarios')->findOneby(array('userName'=>$session->get('userName')));

		//Se obtienen los datos del usuario conectado
		if( $usuarioConectado ){
			$visibleCerrarSesion = 'inherit';
				
			$idFotoBarraMenu = "abrirPerfilUsuarios";

			if( file_exists("/home/uemc/Proyectos/explorapp/web/DirectoriosUsuarios/".$session->get('userName')."/FotoPerfil.jpg") ){
				$rutaImagenPerfilUsuario = "DirectoriosUsuarios/".$session->get('userName')."/FotoPerfil.jpg";
			}
			else{
				$rutaImagenPerfilUsuario = "img/botonAccederPerfil.gif";
			}	
		}
		else{
			$idFotoBarraMenu = "abrirPopUp";

			$rutaImagenPerfilUsuario = "img/botonAcceder.gif";

			$visibleCerrarSesion = 'none';
		}





		//Se obtienen los datos del producto que se esta buscando
		$producto = $em->getRepository('PCBundle:Producto')->findOneBy(array('nombreProducto'=>$nombreProducto, 'idNegocio'=>$idNegocio));
		//Se obtienen los datos del negocio del producto
		$negocio = $em->getRepository('PCBundle:Negocio')->findOneBy(array('idNegocio'=>$idNegocio));


		$usuarioDuenio = $em->getRepository('PCBundle:Usuarios')->findOneBy(array('id'=>$negocio->getIdUsuario()));


		if( $producto ){

			if( file_exists("/home/uemc/Proyectos/explorapp/web/DirectoriosUsuarios/".$usuarioDuenio->getUserName()."/Negocios/".$producto->getNombreProducto().".jpg") ){
				$rutaImagenPerfil = "DirectoriosUsuarios/".$usuarioDuenio->getUserName()."/Negocios/".$producto->getNombreProducto().".jpg";
			}
			else{
				$rutaImagenPerfil = "img/explorapp.jpg";
			}	
		}

		

		//Se comprueba si el dueño del negocio es el que esta conectado
		
		if( $usuarioDuenio && $usuarioConectado ){
			if( $usuarioDuenio->getId() == $usuarioConectado->getId() )
				$visibleEditarPerfilProducto = 'inherit';
			else
				$visibleEditarPerfilProducto = 'none';

		}
		else
			$visibleEditarPerfilProducto = 'none';

		

		//Se guarda el nombre del negocio y el idUsuario en sesion
		$session->set('nombreNegocio', $negocio->getNombreNegocio());
		$session->set('idDueno', $usuarioDuenio->getId());
		$session->set('nombreProducto', $producto->getNombreProducto());



		$formLogin = $this->createForm(new UsuariosForm(), null);
		$formEditarDatosProducto =$this->createForm(new PerfilProductoForm(),null);




		return $this->render( 'PCBundle:vista:perfilProducto.html.twig', array( 'rutaImagenPerfilUsuario'=>$rutaImagenPerfilUsuario, 'rutaImagenPerfil'=>$rutaImagenPerfil , 'idFotoBarraMenu'=>$idFotoBarraMenu, 'producto'=>$producto, 'usuario'=>$usuarioConectado, 'isNegocio'=>'false', 'visibleCerrarSesion'=>$visibleCerrarSesion, 'visibleEditarPerfilProducto'=>$visibleEditarPerfilProducto, 'formLogin'=>$formLogin->createView(), 'tipoNegocio'=>'', 'formEditarDatosProducto'=>$formEditarDatosProducto->createView() ) );
	}











	public function buscarOfertasAction(Request $request, $nombreProducto, $idNegocio){


		$session = $request->getSession();
		
		//Comprueba con la base de datos para obtener los datos de perfil de usuario
		$em = $this->getDoctrine()->getManager();
		$usuarioConectado = $em->getRepository('PCBundle:Usuarios')->findOneby(array('userName'=>$session->get('userName')));


		//Se obtienen los datos del usuario conectado
		if( $usuarioConectado ){
			$visibleCerrarSesion = 'inherit';
				
			$idFotoBarraMenu = "abrirPerfilUsuarios";

			if( file_exists("/home/uemc/Proyectos/explorapp/web/DirectoriosUsuarios/".$session->get('userName')."/FotoPerfil.jpg") ){
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



		$formLogin = $this->createForm(new UsuariosForm(), null);


		$tipoNegocio = $negocio->getTipoNegocio();



		$listadoOfertas = $em->getRepository('PCBundle:Oferta')->findBy(array('idProducto'=>$producto->getId()));


		return $this->render( 'PCBundle:vista:mostrarOfertas.html.twig', array( 'rutaImagenPerfil'=>$rutaImagenPerfil , 'idFotoBarraMenu'=>$idFotoBarraMenu, 'producto'=>$producto, 'usuario'=>$usuarioConectado, 'isNegocio'=>'false', 'visibleCerrarSesion'=>$visibleCerrarSesion, 'formLogin'=>$formLogin->createView(), 'tipoNegocio'=>$tipoNegocio, 'listadoOfertas'=>$listadoOfertas, 'visibleEditarOferta'=>$visibleEditarOferta, 'visibleApuntarOferta'=>$visibleApuntarOferta ) );
	}
































	public function buscarRestaurantesAction(Request $request){
		$session = $request->getSession();
		
		

		if( $session->get('Usuarios_Id') != null && $session->get('userName') != null ){

			$idFotoBarraMenu = "abrirPerfilUsuarios";
			

			if( file_exists("/home/uemc/Proyectos/explorapp/web/DirectoriosUsuarios/".$session->get('userName')."/FotoPerfil.jpg") ){
				$rutaImagenPerfilUsuario = "DirectoriosUsuarios/".$session->get('userName')."/FotoPerfil.jpg";
				$rutaImagenPerfil = "DirectoriosUsuarios/".$session->get('userName')."/FotoPerfil.jpg";
			}
			else{
				$rutaImagenPerfilUsuario = "img/botonAccederPerfil.gif";
				$rutaImagenPerfil = "img/botonAccederPerfil.gif";
			}

			$visibleCerrarSesion = 'inherit';	

		}
		else{

			$rutaImagenPerfilUsuario = "img/botonAcceder.gif";

			$idFotoBarraMenu = "abrirPopUp";

			$visibleCerrarSesion = 'none';
		}

		$formLogin = $this->createForm(new UsuariosForm(), null);

		//Comprueba con la base de datos para obtener los datos de los restaurantes
		$em = $this->getDoctrine()->getManager();
		$listadoRestaurantes = $em->getRepository('PCBundle:Negocio')->findBy(array('tipoNegocio'=>'Restaurante'), array('ciudadNegocio' => 'ASC'));

		$usuarios = $em->getRepository('PCBundle:Usuarios')->findAll();

		return $this->render( 'PCBundle:vista:mostrarRestaurantes.html.twig', array( 'idFotoBarraMenu'=>$idFotoBarraMenu, 'rutaImagenPerfil'=> $rutaImagenPerfilUsuario, 'visibleCerrarSesion'=>$visibleCerrarSesion, 'formLogin' => $formLogin->createView(), 'listadoRestaurantes'=>$listadoRestaurantes, 'tipoNegocio'=>'Restaurantes', 'usuarios'=>$usuarios ) );
	}




	public function buscarHotelesAction(Request $request){
		$session = $request->getSession();
		
		

		if( $session->get('Usuarios_Id') != null && $session->get('userName') != null ){

			$idFotoBarraMenu = "abrirPerfilUsuarios";
			

			if( file_exists("/home/uemc/Proyectos/explorapp/web/DirectoriosUsuarios/".$session->get('userName')."/FotoPerfil.jpg") ){
				$rutaImagenPerfilUsuario = "DirectoriosUsuarios/".$session->get('userName')."/FotoPerfil.jpg";
				$rutaImagenPerfil = "DirectoriosUsuarios/".$session->get('userName')."/FotoPerfil.jpg";
			}
			else{
				$rutaImagenPerfilUsuario = "img/botonAccederPerfil.gif";
				$rutaImagenPerfil = "img/botonAccederPerfil.gif";
			}

			$visibleCerrarSesion = 'inherit';	

		}
		else{

			$rutaImagenPerfilUsuario = "img/botonAcceder.gif";

			$idFotoBarraMenu = "abrirPopUp";

			$visibleCerrarSesion = 'none';
		}

		$formLogin = $this->createForm(new UsuariosForm(), null);

		//Comprueba con la base de datos para obtener los datos de los restaurantes
		$em = $this->getDoctrine()->getManager();
		$listadoHoteles = $em->getRepository('PCBundle:Negocio')->findBy(array('tipoNegocio'=>'Hotel'), array('ciudadNegocio' => 'ASC'));


		$usuarios = $em->getRepository('PCBundle:Usuarios')->findAll();

		return $this->render( 'PCBundle:vista:mostrarHoteles.html.twig', array( 'idFotoBarraMenu'=>$idFotoBarraMenu, 'rutaImagenPerfil'=> $rutaImagenPerfilUsuario, 'visibleCerrarSesion'=>$visibleCerrarSesion, 'formLogin' => $formLogin->createView(), 'listadoHoteles'=>$listadoHoteles, 'tipoNegocio'=>'Hoteles', 'usuarios'=>$usuarios ) );
	}



	public function buscarBaresAction(Request $request){
		$session = $request->getSession();
		
		

		if( $session->get('Usuarios_Id') != null && $session->get('userName') != null ){

			$idFotoBarraMenu = "abrirPerfilUsuarios";
			

			if( file_exists("/home/uemc/Proyectos/explorapp/web/DirectoriosUsuarios/".$session->get('userName')."/FotoPerfil.jpg") ){
				$rutaImagenPerfilUsuario = "DirectoriosUsuarios/".$session->get('userName')."/FotoPerfil.jpg";
				$rutaImagenPerfil = "DirectoriosUsuarios/".$session->get('userName')."/FotoPerfil.jpg";
			}
			else{
				$rutaImagenPerfilUsuario = "img/botonAccederPerfil.gif";
				$rutaImagenPerfil = "img/botonAccederPerfil.gif";
			}

			$visibleCerrarSesion = 'inherit';	

		}
		else{

			$rutaImagenPerfilUsuario = "img/botonAcceder.gif";

			$idFotoBarraMenu = "abrirPopUp";

			$visibleCerrarSesion = 'none';
		}

		$formLogin = $this->createForm(new UsuariosForm(), null);

		//Comprueba con la base de datos para obtener los datos de los restaurantes
		$em = $this->getDoctrine()->getManager();
		$listadoBares = $em->getRepository('PCBundle:Negocio')->findBy(array('tipoNegocio'=>'Bar'), array('ciudadNegocio' => 'ASC'));


		$usuarios = $em->getRepository('PCBundle:Usuarios')->findAll();


		return $this->render( 'PCBundle:vista:mostrarBares.html.twig', array( 'idFotoBarraMenu'=>$idFotoBarraMenu, 'rutaImagenPerfil'=> $rutaImagenPerfilUsuario, 'visibleCerrarSesion'=>$visibleCerrarSesion, 'formLogin' => $formLogin->createView(), 'listadoBares'=>$listadoBares, 'tipoNegocio'=>'Bares', 'usuarios'=>$usuarios ) );
	}






	public function buscarBarAction(Request $request){
		$session = $request->getSession();

		$formBusqueda =$this->createForm(new BusquedaForm(),null);
		$formBusqueda->handleRequest($request);
		$datos =$formBusqueda->getData();

		if( $session->get('Usuarios_Id') != null && $session->get('userName') != null ){

			$idFotoBarraMenu = "abrirPerfilUsuarios";
			

			if( file_exists("/home/uemc/Proyectos/explorapp/web/DirectoriosUsuarios/".$session->get('userName')."/FotoPerfil.jpg") ){
				$rutaImagenPerfilUsuario = "DirectoriosUsuarios/".$session->get('userName')."/FotoPerfil.jpg";
				$rutaImagenPerfil = "DirectoriosUsuarios/".$session->get('userName')."/FotoPerfil.jpg";
			}
			else{
				$rutaImagenPerfilUsuario = "img/botonAccederPerfil.gif";
				$rutaImagenPerfil = "img/botonAccederPerfil.gif";
			}

			$visibleCerrarSesion = 'inherit';	

		}
		else{

			$rutaImagenPerfilUsuario = "img/botonAcceder.gif";

			$idFotoBarraMenu = "abrirPopUp";

			$visibleCerrarSesion = 'none';
		}

		$formLogin = $this->createForm(new UsuariosForm(), null);

		//Comprueba con la base de datos para obtener los datos de los bares
		$em = $this->getDoctrine()->getManager();
		$listadoBares = $em->getRepository('PCBundle:Negocio')->findBy(array('tipoNegocio'=>'Bar', 'nombreNegocio'=>$datos['datoNegocio']), array('ciudadNegocio' => 'ASC'));

		if ( !$listadoBares )
		{
			$listadoBares = $em->getRepository('PCBundle:Negocio')->findBy(array('tipoNegocio'=>'Bar', 'ciudadNegocio'=>$datos['datoNegocio']), array('nombreNegocio' => 'ASC'));
		}

		$usuarios = $em->getRepository('PCBundle:Usuarios')->findAll();


		return $this->render( 'PCBundle:vista:mostrarBares.html.twig', array( 'idFotoBarraMenu'=>$idFotoBarraMenu, 'rutaImagenPerfil'=> $rutaImagenPerfilUsuario, 'visibleCerrarSesion'=>$visibleCerrarSesion, 'formLogin' => $formLogin->createView(), 'listadoBares'=>$listadoBares, 'tipoNegocio'=>'Bares', 'usuarios'=>$usuarios ) );
	}



	public function buscarHotelAction(Request $request){
		$session = $request->getSession();

		$formBusqueda =$this->createForm(new BusquedaForm(),null);
		$formBusqueda->handleRequest($request);
		$datos =$formBusqueda->getData();

		if( $session->get('Usuarios_Id') != null && $session->get('userName') != null ){

			$idFotoBarraMenu = "abrirPerfilUsuarios";
			

			if( file_exists("/home/uemc/Proyectos/explorapp/web/DirectoriosUsuarios/".$session->get('userName')."/FotoPerfil.jpg") ){
				$rutaImagenPerfilUsuario = "DirectoriosUsuarios/".$session->get('userName')."/FotoPerfil.jpg";
				$rutaImagenPerfil = "DirectoriosUsuarios/".$session->get('userName')."/FotoPerfil.jpg";
			}
			else{
				$rutaImagenPerfilUsuario = "img/botonAccederPerfil.gif";
				$rutaImagenPerfil = "img/botonAccederPerfil.gif";
			}

			$visibleCerrarSesion = 'inherit';	

		}
		else{

			$rutaImagenPerfilUsuario = "img/botonAcceder.gif";

			$idFotoBarraMenu = "abrirPopUp";

			$visibleCerrarSesion = 'none';
		}

		$formLogin = $this->createForm(new UsuariosForm(), null);

		//Comprueba con la base de datos para obtener los datos de los bares
		$em = $this->getDoctrine()->getManager();
		$listadoHoteles = $em->getRepository('PCBundle:Negocio')->findBy(array('tipoNegocio'=>'Hotel', 'nombreNegocio'=>$datos['datoNegocio']), array('ciudadNegocio' => 'ASC'));

		if ( !$listadoHoteles )
		{
			$listadoHoteles = $em->getRepository('PCBundle:Negocio')->findBy(array('tipoNegocio'=>'Hotel', 'ciudadNegocio'=>$datos['datoNegocio']), array('nombreNegocio' => 'ASC'));
		}

		$usuarios = $em->getRepository('PCBundle:Usuarios')->findAll();


		return $this->render( 'PCBundle:vista:mostrarHoteles.html.twig', array( 'idFotoBarraMenu'=>$idFotoBarraMenu, 'rutaImagenPerfil'=> $rutaImagenPerfilUsuario, 'visibleCerrarSesion'=>$visibleCerrarSesion, 'formLogin' => $formLogin->createView(), 'listadoHoteles'=>$listadoHoteles, 'tipoNegocio'=>'Hoteles', 'usuarios'=>$usuarios ) );
	}




	public function buscarRestauranteAction(Request $request){
		$session = $request->getSession();

		$formBusqueda =$this->createForm(new BusquedaForm(),null);
		$formBusqueda->handleRequest($request);
		$datos =$formBusqueda->getData();

		if( $session->get('Usuarios_Id') != null && $session->get('userName') != null ){

			$idFotoBarraMenu = "abrirPerfilUsuarios";
			

			if( file_exists("/home/uemc/Proyectos/explorapp/web/DirectoriosUsuarios/".$session->get('userName')."/FotoPerfil.jpg") ){
				$rutaImagenPerfilUsuario = "DirectoriosUsuarios/".$session->get('userName')."/FotoPerfil.jpg";
				$rutaImagenPerfil = "DirectoriosUsuarios/".$session->get('userName')."/FotoPerfil.jpg";
			}
			else{
				$rutaImagenPerfilUsuario = "img/botonAccederPerfil.gif";
				$rutaImagenPerfil = "img/botonAccederPerfil.gif";
			}

			$visibleCerrarSesion = 'inherit';	

		}
		else{

			$rutaImagenPerfilUsuario = "img/botonAcceder.gif";

			$idFotoBarraMenu = "abrirPopUp";

			$visibleCerrarSesion = 'none';
		}

		$formLogin = $this->createForm(new UsuariosForm(), null);

		//Comprueba con la base de datos para obtener los datos de los bares
		$em = $this->getDoctrine()->getManager();
		$listadoRestaurantes = $em->getRepository('PCBundle:Negocio')->findBy(array('tipoNegocio'=>'Restaurante', 'nombreNegocio'=>$datos['datoNegocio']), array('ciudadNegocio' => 'ASC'));

		if ( !$listadoRestaurantes )
		{
			$listadoRestaurantes = $em->getRepository('PCBundle:Negocio')->findBy(array('tipoNegocio'=>'Restaurante', 'ciudadNegocio'=>$datos['datoNegocio']), array('nombreNegocio' => 'ASC'));
		}

		$usuarios = $em->getRepository('PCBundle:Usuarios')->findAll();


		return $this->render( 'PCBundle:vista:mostrarRestaurantes.html.twig', array( 'idFotoBarraMenu'=>$idFotoBarraMenu, 'rutaImagenPerfil'=> $rutaImagenPerfilUsuario, 'visibleCerrarSesion'=>$visibleCerrarSesion, 'formLogin' => $formLogin->createView(), 'listadoRestaurantes'=>$listadoRestaurantes, 'tipoNegocio'=>'Restaurantes', 'usuarios'=>$usuarios ) );
	}



}
