<?php

namespace JK\WebsiteBundle\Controller;

use JK\CommonBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route(service="jk.website.controller_index")
 */
class IndexController extends AbstractController
{
    /**
     * @Route("/")
     * @param string $name
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction($name = 'Jauhiennnn')
    {
        return $this->getTemplate()->renderResponse("JKWebsiteBundle:Index:index.html.twig",['name' => $name]);
    }
}
