<?php

namespace explorapp\PCBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use explorapp\PCBundle\Form\UsuariosForm;
use explorapp\PCBundle\Form\RegistrosForm;
use explorapp\PCBundle\Form\PerfilUsuarioForm;
use explorapp\PCBundle\Form\PerfilNegocioForm;
use explorapp\PCBundle\Form\PerfilProductoForm;
use explorapp\PCBundle\Form\RegistroRestaurantesForm;
use explorapp\PCBundle\Form\RegistroHotelesForm;
use explorapp\PCBundle\Form\RegistroBaresForm;
use explorapp\PCBundle\Form\RegistroProductosForm;
use explorapp\PCBundle\Form\RegistroOfertasForm;
use explorapp\PCBundle\Entity\Usuarios;
use explorapp\PCBundle\Entity\DatosPersonales;
use explorapp\PCBundle\Entity\Negocio;
use explorapp\PCBundle\Entity\Producto;
use explorapp\PCBundle\Entity\Oferta;
use explorapp\PCBundle\Entity\OfertasCliente;
use explorapp\PCBundle\Controller\Imagen;


header('Content-Type: text/html; charset=UTF-8'); 

class guardardatosController extends Controller
{

	public function nuevoRegistroAction(Request $request)
	{
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


				return $this->redirect($this->generateUrl('pc_perfilusuario'));
			}
		}

	}








	public function editarDatosPersonalesAction(Request $request)
	{
		$formEditarRegistro =$this->createForm(new PerfilUsuarioForm(),null);
		$formEditarRegistro->handleRequest($request);
		$datos =$formEditarRegistro->getData();
			
		$session = $request->getSession();

		$request = Request::createFromGlobals();

		
		$clickAceptarCambios = $request->request->get('aceptarCambiosPerfilUsuario');
		if( $clickAceptarCambios ){

			//Comprueba con la base de datos
			$em = $this->getDoctrine()->getManager();
			$usuario = $em->getRepository('PCBundle:Usuarios')->findOneby(array('id'=>$session->get('Usuarios_Id')));

		
			if( $usuario ){
				$datospersonales = $em->getRepository('PCBundle:DatosPersonales')->findOneBy(array('idUsuario'=>$usuario->getId()));
			
				if($datos['nombrePersonal']!='')
					$datospersonales->setNombrePersonal($datos['nombrePersonal']);
				if($datos['apellido1Personal']!='')
					$datospersonales->setApellido1Personal($datos['apellido1Personal']);
				if($datos['apellido2Personal']!='')
					$datospersonales->setApellido2Personal($datos['apellido2Personal']);

				if( $datos['sexoPersonal'] == 'h' )
					$datospersonales->setSexoPersonal('Hombre');
				else if( $datos['sexoPersonal'] == 'm' )
					$datospersonales->setSexoPersonal('Mujer');

				if( $datos['fechaNacimientoPersonal']!='' )
					$datospersonales->setFechaNacimientoPersonal(new \DateTime($datos['fechaNacimientoPersonal']->format('d-m-Y')));

				if( $datos['DNIPersonal']!='' )
					$datospersonales->setDNIPersonal($datos['DNIPersonal']);
				if( $datos['telefonoPersonal'] !='')
					$datospersonales->setTelefonoPersonal($datos['telefonoPersonal']);
				if( $datos['correoPersonal']!='' )
					$datospersonales->setCorreoPersonal($datos['correoPersonal']);

				$em->persist($datospersonales);
		        	$em->flush();

				return $this->redirect($this->generateUrl('pc_perfilusuario'));
			}

		}
		//Darse de baja(eliminar datos de MySql y las carpetas)
		else{
			//Comprueba con la base de datos
			$em = $this->getDoctrine()->getManager();
			$usuario = $em->getRepository('PCBundle:Usuarios')->findOneby(array('id'=>$session->get('Usuarios_Id')));

			if( $usuario ){
				
					
				$em->remove($usuario);
				$em->flush();

				return $this->redirect($this->generateUrl('pc_cerrarsesion'));
				
			}
		}

		echo 'No se ha encontrado nada';


	}


	public function nuevoRegistroRestaurantesAction (Request $request)
	{

		$session = $request->getSession();

		//Solo se hace el registro del negocio si se ha registrado el usuario antes
		if( $session->get('Usuarios_Id') != null && $session->get('userName') != null )
		{
			$formRegistroRestaurantes =$this->createForm(new RegistroRestaurantesForm(),null);
			$formRegistroRestaurantes->handleRequest($request);
			$datos =$formRegistroRestaurantes->getData();

			$request = Request::createFromGlobals();

			//Comprueba con la base de datos
			$em = $this->getDoctrine()->getManager();
			$usuario = $em->getRepository('PCBundle:Usuarios')->findOneby(array('id'=>$session->get('Usuarios_Id')));
	
			if( $usuario ){
				//Comprueba los datos con la base de datos que no exista el negocio
				$negocio = $em->getRepository('PCBundle:Negocio')->findOneBy( array('idUsuario'=>$usuario->getId(), 'nombreNegocio'=>$datos['nombreNegocio'], 'ciudadNegocio'=>$datos['ciudadNegocio']) );

				if( $negocio ){
					return $this->render( 'PCBundle:vista:FalloNegocioExistente.html.twig' );}
				
				else{
					$negocio = new Negocio();
					$negocio->setNombreNegocio($datos['nombreNegocio']);
					$negocio->setDireccionNegocio($datos['direccionNegocio']);
					$negocio->setCiudadNegocio($datos['ciudadNegocio']);
					$negocio->setTelefonoNegocio($datos['telefonoNegocio']);
					$negocio->setCorreoNegocio($datos['correoNegocio']);
					$negocio->setTipoNegocio('Restaurante');
					$negocio->setUsuarios($usuario);

					$em->persist($negocio);
                			$em->flush();

					
					return $this->redirect($this->generateUrl('pc_perfilusuario'));
				}
				
			}
		}
		else{
			return $this->redirect($this->generateUrl('pc_guardardatosrestaurantes'));
		}
	}

	




	public function nuevoRegistroHotelesAction (Request $request)
	{

		$session = $request->getSession();

		//Solo se hace el registro del negocio si se ha registrado el usuario antes
		if( $session->get('Usuarios_Id') != null && $session->get('userName') != null )
		{
			$formRegistroHoteles =$this->createForm(new RegistroHotelesForm(),null);
			$formRegistroHoteles->handleRequest($request);
			$datos =$formRegistroHoteles->getData();

			$request = Request::createFromGlobals();

			//Comprueba con la base de datos
			$em = $this->getDoctrine()->getManager();
			$usuario = $em->getRepository('PCBundle:Usuarios')->findOneby(array('id'=>$session->get('Usuarios_Id')));
	
			if( $usuario ){
				//Comprueba los datos con la base de datos que no exista el negocio
				$negocio = $em->getRepository('PCBundle:Negocio')->findOneBy( array('idUsuario'=>$usuario->getId(), 'nombreNegocio'=>$datos['nombreNegocio']) );

				if( $negocio ){
					return $this->render( 'PCBundle:vista:FalloNegocioExistente.html.twig' );}
				
				else{
					$negocio = new Negocio();
					$negocio->setNombreNegocio($datos['nombreNegocio']);
					$negocio->setDireccionNegocio($datos['direccionNegocio']);
					$negocio->setTelefonoNegocio($datos['telefonoNegocio']);
					$negocio->setCiudadNegocio($datos['ciudadNegocio']);
					$negocio->setCorreoNegocio($datos['correoNegocio']);
					$negocio->setTipoNegocio('Hotel');
					$negocio->setUsuarios($usuario);

					$em->persist($negocio);
                			$em->flush();

					
					return $this->redirect($this->generateUrl('pc_perfilusuario'));
				}
				
			}
		}
		else{
			return $this->redirect($this->generateUrl('pc_guardardatoshoteles'));
		}
	}






	public function nuevoRegistroBaresAction (Request $request)
	{

		$session = $request->getSession();

		//Solo se hace el registro del negocio si se ha registrado el usuario antes
		if( $session->get('Usuarios_Id') != null && $session->get('userName') != null )
		{
			$formRegistroBares =$this->createForm(new RegistroBaresForm(),null);
			$formRegistroBares->handleRequest($request);
			$datos =$formRegistroBares->getData();

			$request = Request::createFromGlobals();

			//Comprueba con la base de datos
			$em = $this->getDoctrine()->getManager();
			$usuario = $em->getRepository('PCBundle:Usuarios')->findOneby(array('id'=>$session->get('Usuarios_Id')));
	
			if( $usuario ){
				//Comprueba los datos con la base de datos que no exista el negocio
				$negocio = $em->getRepository('PCBundle:Negocio')->findOneBy( array('idUsuario'=>$usuario->getId(), 'nombreNegocio'=>$datos['nombreNegocio']) );

				if( $negocio ){
					return $this->render( 'PCBundle:vista:FalloNegocioExistente.html.twig' );}
				
				else{
					$negocio = new Negocio();
					$negocio->setNombreNegocio($datos['nombreNegocio']);
					$negocio->setDireccionNegocio($datos['direccionNegocio']);
					$negocio->setTelefonoNegocio($datos['telefonoNegocio']);
					$negocio->setCiudadNegocio($datos['ciudadNegocio']);
					$negocio->setCorreoNegocio($datos['correoNegocio']);
					$negocio->setTipoNegocio('Bar');
					$negocio->setUsuarios($usuario);

					$em->persist($negocio);
                			$em->flush();

					
					return $this->redirect($this->generateUrl('pc_perfilusuario'));
				}
				
			}
		}
		else{
			return $this->redirect($this->generateUrl('pc_guardardatosbares'));
		}
	}







	public function nuevoRegistroProductosAction (Request $request)
	{

		$session = $request->getSession();


		$em = $this->getDoctrine()->getManager();
		$usuarioDuenio = $em->getRepository('PCBundle:Usuarios')->findOneBy( array('id'=>$session->get('idDueno') ));

		$negocio = $em->getRepository('PCBundle:Negocio')->findOneBy( array('nombreNegocio'=>$session->get('nombreNegocio'), 'idUsuario'=>$usuarioDuenio->getId() ));

		if( $negocio ){
			$formRegistroProductos =$this->createForm(new RegistroProductosForm(),null);
			$formRegistroProductos->handleRequest($request);
			$datos =$formRegistroProductos->getData();

			$producto = $em->getRepository('PCBundle:Producto')->findOneBy( array('nombreProducto'=>$datos['nombreProducto'], 'idNegocio'=>$negocio->getId()) );

			if( $producto ){
				$producto->setNombreProducto($datos['nombreProducto']);
				$producto->setDescripcionProducto($datos['descripcionProducto']);
				$producto->setPrecioProducto($datos['precioProducto']);
				$producto->setAlergenosProducto($datos['alergenosProducto']);

				$producto->setNegocio($negocio);

				$em->persist($producto);
                		$em->flush();

				return $this->redirect($this->generateUrl('pc_perfilusuario'));
			}
			else{
				$producto = new Producto();

				$producto->setNombreProducto($datos['nombreProducto']);
				$producto->setDescripcionProducto($datos['descripcionProducto']);
				$producto->setPrecioProducto($datos['precioProducto']);
				$producto->setAlergenosProducto($datos['alergenosProducto']);

				$producto->setNegocio($negocio);

				$em->persist($producto);
                		$em->flush();

				return $this->redirect($this->generateUrl('pc_perfilusuario'));
			}

		}
	}











	public function nuevoRegistroOfertaAction (Request $request)
	{

		$session = $request->getSession();


		$em = $this->getDoctrine()->getManager();
		$usuarioDuenio = $em->getRepository('PCBundle:Usuarios')->findOneBy( array('id'=>$session->get('idDueno') ));

		$negocio = $em->getRepository('PCBundle:Negocio')->findOneBy( array('nombreNegocio'=>$session->get('nombreNegocio'), 'idUsuario'=>$usuarioDuenio->getId() ));

		if( $negocio ){
			$producto = $em->getRepository('PCBundle:Producto')->findOneBy( array('nombreProducto'=>$session->get('nombreProducto'), 'idNegocio'=>$negocio->getId()) );

			if( $producto ){
				$formRegistroOfertas =$this->createForm(new RegistroOfertasForm(),null);
				$formRegistroOfertas->handleRequest($request);
				$datos =$formRegistroOfertas->getData();
				
				$oferta = new Oferta();

				$oferta->setFechaInicialOferta($datos['fechaInicialOfertas']);
				$oferta->setFechaFinalOferta($datos['fechaFinalOfertas']);
				$oferta->setEdadPublicoOfertas($datos['edadPublicoOfertas']);
				$oferta->setDescripcionOfertas($datos['descripcionOfertas']);

				$oferta->setProducto($producto);

				
				$em->persist($oferta);
                		$em->flush();

				return $this->redirect($this->generateUrl('pc_perfilusuario'));
			}

		}
	}











	public function eliminarOfertaAction (Request $request, $descripcionOfertas, $idProducto)
	{
		$em = $this->getDoctrine()->getManager();

		$oferta = $em->getRepository('PCBundle:Oferta')->findOneBy(array('descripcionOfertas'=>$descripcionOfertas, 'idProducto'=>$idProducto));

		if ( $oferta ){
			$em->remove($oferta);
			$em->flush();

			return $this->redirect($this->generateUrl('pc_perfilusuario'));
		}
	}





	




	public function apuntarseOfertaAction (Request $request, $descripcionOfertas, $idProducto)
	{
		$session = $request->getSession();


		$em = $this->getDoctrine()->getManager();

		$usuario = $em->getRepository('PCBundle:Usuarios')->findOneBy(array('userName'=>$session->get('userName')));
		$oferta = $em->getRepository('PCBundle:Oferta')->findOneBy(array('descripcionOfertas'=>$descripcionOfertas, 'idProducto'=>$idProducto));
		
		
		
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

				return $this->redirect($this->generateUrl('pc_perfilusuario'));
			}
			else{
				return $this->render( 'PCBundle:vista:FalloOfertaExistente.html.twig' );
			}
		}
		else
			return $this->redirect($this->generateUrl('pc_perfilusuario'));
		


	}









	
	public function editarDatosNegociosAction(Request $request)
	{
		$formEditarNegocio =$this->createForm(new PerfilNegocioForm(),null);
		$formEditarNegocio->handleRequest($request);
		$datos =$formEditarNegocio->getData();
			
		$session = $request->getSession();

		$request = Request::createFromGlobals();

		
		$clickAceptarCambios = $request->request->get('aceptarCambiosPerfilNegocio');
		if( $clickAceptarCambios ){

			//Comprueba con la base de datos
			$em = $this->getDoctrine()->getManager();
			$usuario = $em->getRepository('PCBundle:Usuarios')->findOneby(array('id'=>$session->get('Usuarios_Id')));

		
			if( $usuario ){
				//echo $session->get('nombreNegocio'); exit;
				$negocio = $em->getRepository('PCBundle:Negocio')->findOneBy(array('nombreNegocio'=>$session->get('nombreNegocio'), 'idUsuario'=>$usuario->getId()));
			
				if($datos['nombreNegocio']!='')
					$negocio->setNombreNegocio($datos['nombreNegocio']);
				if($datos['direccionNegocio']!='')
					$negocio->setDireccionNegocio($datos['direccionNegocio']);
				if($datos['ciudadNegocio']!='')
					$negocio->setCiudadNegocio($datos['ciudadNegocio']);
				if($datos['telefonoNegocio']!='')
					$negocio->setTelefonoNegocio($datos['telefonoNegocio']);
				if($datos['correoNegocio']!='')
					$negocio->setCorreoNegocio($datos['correoNegocio']);

				

				$em->persist($negocio);
		        	$em->flush();

				return $this->redirect($this->generateUrl('pc_perfilusuario'));
			}

		}
		//Darse de baja(eliminar datos de MySql y las carpetas)
		else{
			//Comprueba con la base de datos
			$em = $this->getDoctrine()->getManager();
			$usuario = $em->getRepository('PCBundle:Usuarios')->findOneby(array('id'=>$session->get('Usuarios_Id')));

			if( $usuario ){
				$negocio = $em->getRepository('PCBundle:Negocio')->findOneBy(array('nombreNegocio'=>$session->get('nombreNegocio'), 'idUsuario'=>$usuario->getId()));
							
				$em->remove($negocio);
				$em->flush();

				return $this->redirect($this->generateUrl('pc_perfilusuario'));
				
			}
		}



	}










	public function editarDatosProductosAction(Request $request)
	{
		$formEditarProducto =$this->createForm(new PerfilProductoForm(),null);
		$formEditarProducto->handleRequest($request);
		$datos =$formEditarProducto->getData();
			
		$session = $request->getSession();

		$request = Request::createFromGlobals();

		
		$clickAceptarCambios = $request->request->get('aceptarCambiosPerfilProducto');
		if( $clickAceptarCambios ){

			//Comprueba con la base de datos
			$em = $this->getDoctrine()->getManager();
			$usuario = $em->getRepository('PCBundle:Usuarios')->findOneby(array('id'=>$session->get('Usuarios_Id')));

		
			if( $usuario ){
				//echo $session->get('nombreNegocio'); exit;
				$negocio = $em->getRepository('PCBundle:Negocio')->findOneBy(array('nombreNegocio'=>$session->get('nombreNegocio'), 'idUsuario'=>$usuario->getId()));

				if( $negocio ){
					$producto = $em->getRepository('PCBundle:Producto')->findOneBy(array('nombreProducto'=>$session->get('nombreProducto'), 'idNegocio'=>$negocio->getId()));

					if($datos['nombreProducto']!='')
						$producto->setNombreProducto($datos['nombreProducto']);
					if($datos['descripcionProducto']!='')
						$producto->setDescripcionProducto($datos['descripcionProducto']);
					if($datos['precioProducto']!='')
						$producto->setPrecioProducto($datos['precioProducto']);
					if($datos['alergenosProducto']!='')
						$producto->setAlergenosProducto($datos['alergenosProducto']);

				

					$em->persist($producto);
					$em->flush();

					return $this->redirect($this->generateUrl('pc_perfilusuario'));
				}
			
			}

		}
		//Darse de baja(eliminar datos de MySql y las carpetas)
		else{
			//Comprueba con la base de datos
			$em = $this->getDoctrine()->getManager();
			$usuario = $em->getRepository('PCBundle:Usuarios')->findOneby(array('id'=>$session->get('Usuarios_Id')));

			if( $usuario ){
				$negocio = $em->getRepository('PCBundle:Negocio')->findOneBy(array('nombreNegocio'=>$session->get('nombreNegocio'), 'idUsuario'=>$usuario->getId()));
						
				if( $negocio ){
					$producto = $em->getRepository('PCBundle:Producto')->findOneBy(array('nombreProducto'=>$session->get('nombreProducto'), 'idNegocio'=>$negocio->getId()));

					$em->remove($producto);
					$em->flush();

					return $this->redirect($this->generateUrl('pc_perfilusuario'));
				}	

				
			}
		}



	}


















	public function subirfotosAction(Request $request, $isNegocio)
	{
		if( $isNegocio == 'false' ){
			$session = $request->getSession();

			$rutaSubida = "./DirectoriosUsuarios/".$session->get('userName')."/";
	
			//Si no existe el directorio, se crea
			if( !file_exists($rutaSubida) ){
				mkdir($rutaSubida);
			}

	
			//Comprobación de errores
	
			//rename($_FILES["fichero"]["name"], $rutaSubida."FotoPerfil.jpg");
	

			if ($request->getMethod() == 'POST')
			{

				if(isset($_FILES["files"]) && $_FILES["files"]["error"] == 0){
					if(move_uploaded_file($_FILES["files"]["tmp_name"],$rutaSubida."FotoPerfilOriginal.jpg"))
						echo "";
					else
						echo "Ha ocurrido un error";
				}

			}
		

	
			//Se cambia el tamaño de la imagen para que se vea bien en la pagina
			$datos      = '{    "imgOrigen" : "'.$rutaSubida.'FotoPerfilOriginal.jpg",  
						"imgDestino": "'.$rutaSubida.'FotoPerfil.jpg",  
						"ancho"     : "300",  
						"alto"      : "300",  
						"modo"      : 2,  
						"filas"     : 3,  
						"calidad"   : 95,  
						"columnas"  : 4,  
						"centrado"  : 1,  
						"borrar"    : true  
					     }';  
			$obj_img = new Imagen($datos);  
			$obj_img->procesarImagen();
	
	
			return $this->redirect($this->generateUrl('pc_perfilusuario'));
		}
		else if( $isNegocio == 'true' ){
			$session = $request->getSession();

			$rutaSubida = "./DirectoriosUsuarios/".$session->get('userName')."/Negocios";
	
			//Si no existe el directorio, se crea
			if( !file_exists($rutaSubida) ){
				mkdir($rutaSubida);
			}

	
			//Comprobación de errores
	
	

			if ($request->getMethod() == 'POST')
			{

				if(isset($_FILES["files"]) && $_FILES["files"]["error"] == 0){
					if(move_uploaded_file($_FILES["files"]["tmp_name"],$rutaSubida."FotoPerfilOriginal.jpg"))
						echo "Subido con éxito";
					else
						echo "Ha ocurrido un error";
				}

			}
		

	
			//Se cambia el tamaño de la imagen para que se vea bien en la pagina
			$datos      = '{    "imgOrigen" : "'.$rutaSubida.'FotoPerfilOriginal.jpg",  
						"imgDestino": "'.$rutaSubida.'/'.$session->get('nombreNegocio').'.jpg",  
						"ancho"     : "300",  
						"alto"      : "300",  
						"modo"      : 2,  
						"filas"     : 3,  
						"calidad"   : 95,  
						"columnas"  : 4,  
						"centrado"  : 1,  
						"borrar"    : true  
					     }';  
			$obj_img = new Imagen($datos);  
			$obj_img->procesarImagen();
	
	


			return $this->redirect($this->generateUrl('pc_perfilusuario'));
		}

	}



	public function subirFotosProductosAction(Request $request)
	{
		$session = $request->getSession();

		$rutaSubida = "./DirectoriosUsuarios/".$session->get('userName')."/Negocios/";
	
		//Si no existe el directorio, se crea
		if( !file_exists($rutaSubida) ){
			mkdir($rutaSubida);
		}

	
		//Comprobación de errores
	
		//rename($_FILES["fichero"]["name"], $rutaSubida."FotoPerfil.jpg");
	

		if ($request->getMethod() == 'POST')
		{

			if(isset($_FILES["files"]) && $_FILES["files"]["error"] == 0){
				if(move_uploaded_file($_FILES["files"]["tmp_name"],$rutaSubida.$session->get('nombreProducto')."Original.jpg"))
					echo "";
				else
					echo "Ha ocurrido un error";
			}

		}
		

	
			//Se cambia el tamaño de la imagen para que se vea bien en la pagina
			$datos      = '{    "imgOrigen" : "'.$rutaSubida.$session->get('nombreProducto').'Original.jpg",  
						"imgDestino": "'.$rutaSubida.$session->get('nombreProducto').'.jpg",  
						"ancho"     : "300",  
						"alto"      : "300",  
						"modo"      : 2,  
						"filas"     : 3,  
						"calidad"   : 95,  
						"columnas"  : 4,  
						"centrado"  : 1,  
						"borrar"    : true  
					     }';  
			$obj_img = new Imagen($datos);  
			$obj_img->procesarImagen();
	
	
			return $this->redirect($this->generateUrl('pc_perfilusuario'));
	}


}
