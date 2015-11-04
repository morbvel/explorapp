<?php

namespace explorapp\MobileBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class cerrarSesionController extends Controller
{
	public function cerrarSesionAction(Request $request)
	{
		//Se crea la sesion
        	$session = $request->getSession();
		//Se destruyen los datos
		$session->clear();

		return $this->redirect($this->generateUrl('mobile_homepage'));
	}
}
