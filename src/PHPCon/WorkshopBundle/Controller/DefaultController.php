<?php

namespace PHPCon\WorkshopBundle\Controller;

use PHPCon\WorkshopBundle\Form\WorkshopType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $form = $this->createForm(new WorkshopType());
        return $this->render(
            'PHPConWorkshopBundle:Default:index.html.twig',
            [
                'form' => $form->createView()
            ]
        );
    }
}
