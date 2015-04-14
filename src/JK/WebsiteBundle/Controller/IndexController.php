<?php

namespace JK\WebsiteBundle\Controller;

use JK\CommonBundle\Controller\AbstractController;
use JK\WebsiteBundle\Form\ContactType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response as Response;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * @Route(service="jk.website.controller_index")
 */
class IndexController extends AbstractController
{
    /**
     * @Route("/view")
     * @param Request $request
     * @param string $name
     * @return Response
     */
    public function indexAction(Request $request, $name = 'Jauhiennnn')
    {
        $session = $request->getSession();
        $data = $session->get('contactData');
        return $this->render("JKWebsiteBundle:SentData:index.html.twig", $data);
    }

    /**
     * @Route("/contact")
     * @param Request $request
     * @return Response
     */
    public function contactAction(Request $request)
    {
        $form = $this->getFormFactory()->create('jk_website_contact');
        $form->handleRequest($request);

        if ($form->isValid() == true) {
            $data = $form->getData();

            $session = $request->getSession();
            $session->set('contactData', $data);
            $response = new RedirectResponse('view');
            $response->prepare($request);
            return $response->send();
        }

        return $this->render("JKWebsiteBundle:Contact:index.html.twig", ['name' => 'guest',
            'form' => $form->createView()
        ]);
    }
}
