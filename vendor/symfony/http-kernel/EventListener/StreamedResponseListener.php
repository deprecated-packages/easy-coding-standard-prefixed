<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperad4b7e2c09d8\Symfony\Component\HttpKernel\EventListener;

use _PhpScoperad4b7e2c09d8\Symfony\Component\EventDispatcher\EventSubscriberInterface;
use _PhpScoperad4b7e2c09d8\Symfony\Component\HttpFoundation\StreamedResponse;
use _PhpScoperad4b7e2c09d8\Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use _PhpScoperad4b7e2c09d8\Symfony\Component\HttpKernel\KernelEvents;
/**
 * StreamedResponseListener is responsible for sending the Response
 * to the client.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final since Symfony 4.3
 */
class StreamedResponseListener implements \_PhpScoperad4b7e2c09d8\Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    /**
     * Filters the Response.
     */
    public function onKernelResponse(\_PhpScoperad4b7e2c09d8\Symfony\Component\HttpKernel\Event\FilterResponseEvent $event)
    {
        if (!$event->isMasterRequest()) {
            return;
        }
        $response = $event->getResponse();
        if ($response instanceof \_PhpScoperad4b7e2c09d8\Symfony\Component\HttpFoundation\StreamedResponse) {
            $response->send();
        }
    }
    public static function getSubscribedEvents()
    {
        return [\_PhpScoperad4b7e2c09d8\Symfony\Component\HttpKernel\KernelEvents::RESPONSE => ['onKernelResponse', -1024]];
    }
}
