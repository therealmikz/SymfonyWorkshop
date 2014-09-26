<?php

namespace PHPCon\WorkshopBundle\Controller;

use PHPCon\WorkshopBundle\Form\WorkshopType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * 
     * @param \PHPCon\WorkshopBundle\Controller\Request $request
     * @return Response
     */
    public function indexAction(Request $request)
    {
        $form = $this->createForm(new WorkshopType());

        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($form->getData());
            $em->flush();
        }

        return $this->render(
            'PHPConWorkshopBundle:Default:index.html.twig',
            [
                'form' => $form->createView()
            ]
        );
    }
}
