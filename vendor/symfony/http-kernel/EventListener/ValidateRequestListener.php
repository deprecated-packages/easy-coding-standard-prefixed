<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperdc8fbcd7c69d\Symfony\Component\HttpKernel\EventListener;

use _PhpScoperdc8fbcd7c69d\Symfony\Component\EventDispatcher\EventSubscriberInterface;
use _PhpScoperdc8fbcd7c69d\Symfony\Component\HttpKernel\Event\GetResponseEvent;
use _PhpScoperdc8fbcd7c69d\Symfony\Component\HttpKernel\KernelEvents;
/**
 * Validates Requests.
 *
 * @author Magnus Nordlander <magnus@fervo.se>
 *
 * @final since Symfony 4.3
 */
class ValidateRequestListener implements \_PhpScoperdc8fbcd7c69d\Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    /**
     * Performs the validation.
     */
    public function onKernelRequest(\_PhpScoperdc8fbcd7c69d\Symfony\Component\HttpKernel\Event\GetResponseEvent $event)
    {
        if (!$event->isMasterRequest()) {
            return;
        }
        $request = $event->getRequest();
        if ($request::getTrustedProxies()) {
            $request->getClientIps();
        }
        $request->getHost();
    }
    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [\_PhpScoperdc8fbcd7c69d\Symfony\Component\HttpKernel\KernelEvents::REQUEST => [['onKernelRequest', 256]]];
    }
}
