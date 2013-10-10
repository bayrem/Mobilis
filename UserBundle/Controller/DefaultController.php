<?php

namespace Mobilis\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MobilisUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
