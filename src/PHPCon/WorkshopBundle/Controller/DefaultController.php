<?php

namespace PHPCon\WorkshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PHPConWorkshopBundle:Default:index.html.twig', array('name' => $name));
    }
}
