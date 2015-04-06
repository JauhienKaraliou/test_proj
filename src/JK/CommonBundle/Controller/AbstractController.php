<?php

namespace JK\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

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
     * @return mixed
     */
    public function getTemplate()
    {
        return $this->templating;
    }


}
