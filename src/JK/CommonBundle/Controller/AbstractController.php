<?php

namespace JK\CommonBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Symfony\Component\HttpFoundation\Response as Response;

/**
 * Class AbstractController
 * @package JK\CommonBundle\Controller
 * @Route(service="jk.common.controller_abstract")
 */
class AbstractController
{
    /**
     * @var EngineInterface
     */
    private $templating;

    /**
     * @param EngineInterface $templating
     */
    public function setTemplate(EngineInterface $templating)
    {
        $this->templating = $templating;
    }

    /**
     * @return EngineInterface
     */
    public function getTemplate()
    {
        return $this->templating;
    }

    /**
     * @param $view
     * @param array $parameters
     * @param Response $response
     * @return Response
     */
    public function render($view, array $parameters = array(), Response $response = null)
    {
        return $this->getTemplate()->renderResponse($view, $parameters, $response);
    }
}
