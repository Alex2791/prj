<?php

namespace Application\ApplicationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ApplicationApplicationBundle:Default:index.html.twig', array('name' => $name));
    }
}
