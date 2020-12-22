<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper68a3a2539032\Symfony\Component\HttpKernel\EventListener;

use _PhpScoper68a3a2539032\Symfony\Component\EventDispatcher\EventSubscriberInterface;
use _PhpScoper68a3a2539032\Symfony\Component\HttpKernel\Event\GetResponseEvent;
use _PhpScoper68a3a2539032\Symfony\Component\HttpKernel\KernelEvents;
/**
 * Adds configured formats to each request.
 *
 * @author Gildas Quemener <gildas.quemener@gmail.com>
 *
 * @final since Symfony 4.3
 */
class AddRequestFormatsListener implements \_PhpScoper68a3a2539032\Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    protected $formats;
    public function __construct(array $formats)
    {
        $this->formats = $formats;
    }
    /**
     * Adds request formats.
     */
    public function onKernelRequest(\_PhpScoper68a3a2539032\Symfony\Component\HttpKernel\Event\GetResponseEvent $event)
    {
        $request = $event->getRequest();
        foreach ($this->formats as $format => $mimeTypes) {
            $request->setFormat($format, $mimeTypes);
        }
    }
    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [\_PhpScoper68a3a2539032\Symfony\Component\HttpKernel\KernelEvents::REQUEST => ['onKernelRequest', 100]];
    }
}
