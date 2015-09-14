<?php

namespace explorapp\MobileBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MobileBundle:Default:index.html.twig', array('name' => $name));
    }
}
