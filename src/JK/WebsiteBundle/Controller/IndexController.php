<?php

namespace JK\WebsiteBundle\Controller;

use JK\CommonBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response as Response;

/**
 * @Route(service="jk.website.controller_index")
 */
class IndexController extends AbstractController
{
    /**
     * @Route("/")
     * @param string $name
     * @return Response
     */
    public function indexAction($name = 'Jauhiennnn')
    {
        return $this->render("JKWebsiteBundle:Index:index.html.twig",['name' => $name]);
    }
}
