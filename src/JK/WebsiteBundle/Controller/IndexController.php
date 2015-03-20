<?php

namespace JK\WebsiteBundle\Controller;

use JK\CommonBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends AbstractController
{
    public function indexAction($name)
    {
        return $this->render('JKWebsiteBundle:Default:index.html.twig', array('name' => $name));
    }
}