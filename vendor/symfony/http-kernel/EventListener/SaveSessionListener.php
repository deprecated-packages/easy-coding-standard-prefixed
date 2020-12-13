<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperd3d57724c802\Symfony\Component\HttpKernel\EventListener;

@\trigger_error(\sprintf('The "%s" class is deprecated since Symfony 4.1, use AbstractSessionListener instead.', \_PhpScoperd3d57724c802\Symfony\Component\HttpKernel\EventListener\SaveSessionListener::class), \E_USER_DEPRECATED);
use _PhpScoperd3d57724c802\Symfony\Component\EventDispatcher\EventSubscriberInterface;
use _PhpScoperd3d57724c802\Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use _PhpScoperd3d57724c802\Symfony\Component\HttpKernel\KernelEvents;
/**
 * @author Tobias Schultze <http://tobion.de>
 *
 * @deprecated since Symfony 4.1, use AbstractSessionListener instead
 */
class SaveSessionListener implements \_PhpScoperd3d57724c802\Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    public function onKernelResponse(\_PhpScoperd3d57724c802\Symfony\Component\HttpKernel\Event\FilterResponseEvent $event)
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
            \_PhpScoperd3d57724c802\Symfony\Component\HttpKernel\KernelEvents::RESPONSE => [['onKernelResponse', -1000]],
        ];
    }
}
