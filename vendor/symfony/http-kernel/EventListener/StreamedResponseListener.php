<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopercae9e6ab5cea\Symfony\Component\HttpKernel\EventListener;

use _PhpScopercae9e6ab5cea\Symfony\Component\EventDispatcher\EventSubscriberInterface;
use _PhpScopercae9e6ab5cea\Symfony\Component\HttpFoundation\StreamedResponse;
use _PhpScopercae9e6ab5cea\Symfony\Component\HttpKernel\Event\ResponseEvent;
use _PhpScopercae9e6ab5cea\Symfony\Component\HttpKernel\KernelEvents;
/**
 * StreamedResponseListener is responsible for sending the Response
 * to the client.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class StreamedResponseListener implements EventSubscriberInterface
{
    /**
     * Filters the Response.
     */
    public function onKernelResponse(ResponseEvent $event)
    {
        if (!$event->isMasterRequest()) {
            return;
        }
        $response = $event->getResponse();
        if ($response instanceof StreamedResponse) {
            $response->send();
        }
    }
    public static function getSubscribedEvents() : array
    {
        return [KernelEvents::RESPONSE => ['onKernelResponse', -1024]];
    }
}
