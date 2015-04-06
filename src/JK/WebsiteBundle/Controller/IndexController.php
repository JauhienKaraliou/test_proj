<?php

namespace JK\WebsiteBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use JK\CommonBundle\Controller\AbstractController;

/**
 * @Route(service="jk.website.controller_index")
 */
class IndexController extends AbstractController
{
    /**
     * @Route("/")
     * @Template("JKWebsiteBundle:Default:index.html.twig")
     * @param string $name
     * @return mixed
     */
    public function indexAction($name = 'Jauhien')
    {
        return array('name' => $name);
    }
}
