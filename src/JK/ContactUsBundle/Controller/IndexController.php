<?php

namespace JK\ContactUsBundle\Controller;

use JK\CommonBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response as Response;

/**
 * @Route(service="jk.contact_us.controller_index")
 */
class IndexController extends AbstractController
{
    /**
     * @Route("/contact")
     * @param string $name
     * @return Response
     */
    public function indexAction($name = 'Jauhiennnn')
    {
        return $this->render("JKContactUsBundle:Index:index.html.twig",['name' => $name]);
    }
}
