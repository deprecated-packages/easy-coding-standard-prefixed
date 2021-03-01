<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc4ea0f0bd23f\Symfony\Component\HttpKernel\EventListener;

use _PhpScoperc4ea0f0bd23f\Symfony\Component\EventDispatcher\EventSubscriberInterface;
use _PhpScoperc4ea0f0bd23f\Symfony\Component\HttpKernel\Event\RequestEvent;
use _PhpScoperc4ea0f0bd23f\Symfony\Component\HttpKernel\KernelEvents;
/**
 * Validates Requests.
 *
 * @author Magnus Nordlander <magnus@fervo.se>
 *
 * @final
 */
class ValidateRequestListener implements \_PhpScoperc4ea0f0bd23f\Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    /**
     * Performs the validation.
     */
    public function onKernelRequest(\_PhpScoperc4ea0f0bd23f\Symfony\Component\HttpKernel\Event\RequestEvent $event)
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
    public static function getSubscribedEvents() : array
    {
        return [\_PhpScoperc4ea0f0bd23f\Symfony\Component\HttpKernel\KernelEvents::REQUEST => [['onKernelRequest', 256]]];
    }
}
