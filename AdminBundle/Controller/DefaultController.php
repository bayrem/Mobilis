<?php

namespace Mobilis\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MobilisAdminBundle:Default:index.html.twig', array('name' => $name));
    }
}
