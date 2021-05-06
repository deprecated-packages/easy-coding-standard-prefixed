<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper3c4e863e8a34\Symfony\Component\HttpKernel\EventListener;

use _PhpScoper3c4e863e8a34\Symfony\Component\EventDispatcher\EventSubscriberInterface;
use _PhpScoper3c4e863e8a34\Symfony\Component\HttpKernel\Event\RequestEvent;
use _PhpScoper3c4e863e8a34\Symfony\Component\HttpKernel\KernelEvents;
/**
 * Validates Requests.
 *
 * @author Magnus Nordlander <magnus@fervo.se>
 *
 * @final
 */
class ValidateRequestListener implements EventSubscriberInterface
{
    /**
     * Performs the validation.
     */
    public function onKernelRequest(RequestEvent $event)
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
        return [KernelEvents::REQUEST => [['onKernelRequest', 256]]];
    }
}
