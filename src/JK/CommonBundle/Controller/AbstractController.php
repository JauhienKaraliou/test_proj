<?php

namespace JK\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;

class AbstractController
{
    protected $templating;

    /**
     * @param EngineInterface $templating
     */
    public function __construct(EngineInterface $templating)
    {
        $this->templating = $templating;
    }
}
