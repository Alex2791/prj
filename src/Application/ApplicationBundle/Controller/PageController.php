<?php

namespace Application\ApplicationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {

        return $this->render('ApplicationApplicationBundle:Page:index.html.twig');
    }
}
