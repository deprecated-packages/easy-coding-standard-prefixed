<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper6db4fde00cda\Symfony\Component\HttpKernel\EventListener;

use _PhpScoper6db4fde00cda\Symfony\Component\EventDispatcher\EventSubscriberInterface;
use _PhpScoper6db4fde00cda\Symfony\Component\HttpFoundation\StreamedResponse;
use _PhpScoper6db4fde00cda\Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use _PhpScoper6db4fde00cda\Symfony\Component\HttpKernel\KernelEvents;
/**
 * StreamedResponseListener is responsible for sending the Response
 * to the client.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final since Symfony 4.3
 */
class StreamedResponseListener implements \_PhpScoper6db4fde00cda\Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    /**
     * Filters the Response.
     */
    public function onKernelResponse(\_PhpScoper6db4fde00cda\Symfony\Component\HttpKernel\Event\FilterResponseEvent $event)
    {
        if (!$event->isMasterRequest()) {
            return;
        }
        $response = $event->getResponse();
        if ($response instanceof \_PhpScoper6db4fde00cda\Symfony\Component\HttpFoundation\StreamedResponse) {
            $response->send();
        }
    }
    public static function getSubscribedEvents()
    {
        return [\_PhpScoper6db4fde00cda\Symfony\Component\HttpKernel\KernelEvents::RESPONSE => ['onKernelResponse', -1024]];
    }
}
