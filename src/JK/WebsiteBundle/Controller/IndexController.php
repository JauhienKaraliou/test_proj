<?php

namespace JK\WebsiteBundle\Controller;

use JK\CommonBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route(service="ws.index_controller")
 */
class IndexController extends AbstractController
{
    /**
     * @Route("/")
     * @param string $name
     * @return mixed
     */
    public function indexAction($name='Jauhien')
    {
        return $this->templating->renderResponse(
            'JKWebsiteBundle:Default:index.html.twig',
            array('name' => $name));
    }
}
