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

@\trigger_error(\sprintf('The "%s" class is deprecated since Symfony 4.1, use AbstractSessionListener instead.', \_PhpScoperdc8fbcd7c69d\Symfony\Component\HttpKernel\EventListener\SaveSessionListener::class), \E_USER_DEPRECATED);
use _PhpScoperdc8fbcd7c69d\Symfony\Component\EventDispatcher\EventSubscriberInterface;
use _PhpScoperdc8fbcd7c69d\Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use _PhpScoperdc8fbcd7c69d\Symfony\Component\HttpKernel\KernelEvents;
/**
 * @author Tobias Schultze <http://tobion.de>
 *
 * @deprecated since Symfony 4.1, use AbstractSessionListener instead
 */
class SaveSessionListener implements \_PhpScoperdc8fbcd7c69d\Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    public function onKernelResponse(\_PhpScoperdc8fbcd7c69d\Symfony\Component\HttpKernel\Event\FilterResponseEvent $event)
    {
        if (!$event->isMasterRequest()) {
            return;
        }
        $request = $event->getRequest();
        if ($request->hasSession() && ($session = $request->getSession())->isStarted()) {
            $session->save();
        }
    }
    public static function getSubscribedEvents()
    {
        return [
            // low priority but higher than StreamedResponseListener
            \_PhpScoperdc8fbcd7c69d\Symfony\Component\HttpKernel\KernelEvents::RESPONSE => [['onKernelResponse', -1000]],
        ];
    }
}
