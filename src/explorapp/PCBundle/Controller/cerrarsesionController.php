<?php

namespace explorapp\PCBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class cerrarsesionController extends Controller{
	
	public function cerrarsesionAction(Request $request){
	
		//Se crea la sesion
        	$session = $request->getSession();
		//Se destruyen los datos
		$session->clear();

		return $this->redirect($this->generateUrl('pc_homepage'));
	
	}

}
