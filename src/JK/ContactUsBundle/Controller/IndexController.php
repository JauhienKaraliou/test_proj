<?php

namespace JK\ContactUsBundle\Controller;

use JK\CommonBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response as Response;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route(service="jk.contact_us.controller_index")
 */
class IndexController extends AbstractController
{
    /**
     * @Route("/view2")
     * @param Request $request
     * @param string $name
     * @return Response
     */
    public function viewAction(Request $request, $name = 'guest')
    {
        $form = $this->getFormFactory()->createBuilder()
            ->add('name','text', ['label'=>'Introduce yourself'])
            ->add('email','email', ['label'=>'Your e-mail'])
            ->add('message', 'textarea',['label'=>'Your message'])
            ->add('save','submit',['label'=>'Send a message'])
            ->getForm();

        $form->handleRequest($request); //why could it be needed

        if($form->isValid()==true) {

        }

        return $this->render("JKContactUsBundle:Index:index.html.twig",['name' => $name,
            'form'=>$form->createView()
        ]);
    }
}
