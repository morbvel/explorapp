<?php

namespace explorapp\PCBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PCBundle:Default:index.html.twig', array('name' => $name));
    }
}
