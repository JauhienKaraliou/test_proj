<?php

namespace JK\WebsiteBundle\Controller;

use JK\CommonBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends AbstractController
{
    private $templating;

    public function __construct( EngineInterface $templating)
    {
        $this->templating = $templating;
    }
    public function indexAction($name='Jauhien')
    {
        return $this->templating->renderResponse(
            'JKWebsiteBundle:Default:index.html.twig',
            array('name' => $name));
        //return $this->render('JKWebsiteBundle:Default:index.html.twig', array('name' => $name));
    }
}