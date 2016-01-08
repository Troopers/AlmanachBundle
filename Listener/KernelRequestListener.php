<?php

namespace AppVentus\AlmanachBundle\Listener;

use Symfony\Component\HttpKernel\Event\GetResponseEvent;

/**
 * KernelRequestListener will do some things like adding config as globals.
 *
 * @author Sullivan MAXWELLD <sullivan@appventus.com>
 */
class KernelRequestListener
{
    protected $twig;

    public function __construct(\Twig_Environment $twig, $almanach)
    {
        $this->twig = $twig;
        $this->almanach = $almanach;
    }

    public function onKernelRequest(GetResponseEvent $event)
    {
        $this->twig->addGlobal('almanach', $this->almanach);
    }
}
