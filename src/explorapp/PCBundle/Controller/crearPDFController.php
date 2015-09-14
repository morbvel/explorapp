<?php

namespace explorapp\PCBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use explorapp\PCBundle\Entity\Usuarios;
use explorapp\PCBundle\Entity\DatosPersonales;
use explorapp\PCBundle\Entity\Negocio;
use explorapp\PCBundle\Entity\Producto;
use explorapp\PCBundle\Entity\Oferta;
use explorapp\PCBundle\Entity\OfertasCliente;

header('Content-Type: text/html; charset=UTF-8');


class crearPDFController extends Controller
{
	public function crearPDFAction(Request $request, $idOferta, $idUsuario)
	{
		$em = $this->getDoctrine()->getManager();
		
		$usuario = $em->getRepository('PCBundle:Usuarios')->findOneby(array('userName'=>$idUsuario));
		$ofertasCliente = $em->getRepository('PCBundle:OfertasCliente')->findOneBy(array('usuarios'=>$usuario->getId(), 'ofertas'=>$idOferta));

		$datosPersonales = $em->getRepository('PCBundle:DatosPersonales')->findOneBy(array('idUsuario'=>$usuario->getId()));

		$oferta = $em->getRepository('PCBundle:Oferta')->findOneBy(array('idOfertas'=>$idOferta));
		$producto = $em->getRepository('PCBundle:Producto')->findOneBy(array('idProductos'=>$oferta->getIdProducto()));
		$negocio = $em->getRepository('PCBundle:Negocio')->findOneBy(array('idNegocio'=>$producto->getIdNegocio()));

		$usuarioDuenio = $em->getRepository('PCBundle:Usuarios')->findOneBy(array('id'=>$negocio->getIdUsuario()));
		$rutaImagenNegocio = "DirectoriosUsuarios/".$usuarioDuenio->getUserName()."/Negocios/".$negocio->getNombreNegocio().".jpg";


		return $this->render( 'PCBundle:vista:mostrarPDF.html.twig', array( 'datospersonales'=>$datosPersonales, 'rutaImagenNegocio'=>$rutaImagenNegocio, 'oferta'=>$oferta, 'producto'=>$producto, 'negocio'=>$negocio, 'ofertasCliente'=>$ofertasCliente ));
	}
}

?>
