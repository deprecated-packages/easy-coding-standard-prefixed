<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper08fb1f8a2f44\Symfony\Component\HttpKernel\EventListener;

use _PhpScoper08fb1f8a2f44\Symfony\Component\EventDispatcher\EventSubscriberInterface;
use _PhpScoper08fb1f8a2f44\Symfony\Component\HttpKernel\Event\ResponseEvent;
use _PhpScoper08fb1f8a2f44\Symfony\Component\HttpKernel\HttpCache\HttpCache;
use _PhpScoper08fb1f8a2f44\Symfony\Component\HttpKernel\HttpCache\SurrogateInterface;
use _PhpScoper08fb1f8a2f44\Symfony\Component\HttpKernel\KernelEvents;
/**
 * SurrogateListener adds a Surrogate-Control HTTP header when the Response needs to be parsed for Surrogates.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class SurrogateListener implements EventSubscriberInterface
{
    private $surrogate;
    public function __construct(SurrogateInterface $surrogate = null)
    {
        $this->surrogate = $surrogate;
    }
    /**
     * Filters the Response.
     */
    public function onKernelResponse(ResponseEvent $event)
    {
        if (!$event->isMasterRequest()) {
            return;
        }
        $kernel = $event->getKernel();
        $surrogate = $this->surrogate;
        if ($kernel instanceof HttpCache) {
            $surrogate = $kernel->getSurrogate();
            if (null !== $this->surrogate && $this->surrogate->getName() !== $surrogate->getName()) {
                $surrogate = $this->surrogate;
            }
        }
        if (null === $surrogate) {
            return;
        }
        $surrogate->addSurrogateControl($event->getResponse());
    }
    public static function getSubscribedEvents() : array
    {
        return [KernelEvents::RESPONSE => 'onKernelResponse'];
    }
}
