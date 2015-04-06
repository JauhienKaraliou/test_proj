<?php

namespace JK\WebsiteBundle\Controller;

use JK\CommonBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

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
    public function indexAction($name = 'Jauhiennnn')
    {
        return ['name' => $name];
    }
}
