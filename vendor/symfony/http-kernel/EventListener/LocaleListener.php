<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperda2604e33acb\Symfony\Component\HttpKernel\EventListener;

use _PhpScoperda2604e33acb\Symfony\Component\EventDispatcher\EventSubscriberInterface;
use _PhpScoperda2604e33acb\Symfony\Component\HttpFoundation\Request;
use _PhpScoperda2604e33acb\Symfony\Component\HttpFoundation\RequestStack;
use _PhpScoperda2604e33acb\Symfony\Component\HttpKernel\Event\FinishRequestEvent;
use _PhpScoperda2604e33acb\Symfony\Component\HttpKernel\Event\GetResponseEvent;
use _PhpScoperda2604e33acb\Symfony\Component\HttpKernel\Event\KernelEvent;
use _PhpScoperda2604e33acb\Symfony\Component\HttpKernel\KernelEvents;
use _PhpScoperda2604e33acb\Symfony\Component\Routing\RequestContextAwareInterface;
/**
 * Initializes the locale based on the current request.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final since Symfony 4.3
 */
class LocaleListener implements \_PhpScoperda2604e33acb\Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    private $router;
    private $defaultLocale;
    private $requestStack;
    public function __construct(\_PhpScoperda2604e33acb\Symfony\Component\HttpFoundation\RequestStack $requestStack, string $defaultLocale = 'en', \_PhpScoperda2604e33acb\Symfony\Component\Routing\RequestContextAwareInterface $router = null)
    {
        $this->defaultLocale = $defaultLocale;
        $this->requestStack = $requestStack;
        $this->router = $router;
    }
    public function setDefaultLocale(\_PhpScoperda2604e33acb\Symfony\Component\HttpKernel\Event\KernelEvent $event)
    {
        $event->getRequest()->setDefaultLocale($this->defaultLocale);
    }
    public function onKernelRequest(\_PhpScoperda2604e33acb\Symfony\Component\HttpKernel\Event\GetResponseEvent $event)
    {
        $request = $event->getRequest();
        $this->setLocale($request);
        $this->setRouterContext($request);
    }
    public function onKernelFinishRequest(\_PhpScoperda2604e33acb\Symfony\Component\HttpKernel\Event\FinishRequestEvent $event)
    {
        if (null !== ($parentRequest = $this->requestStack->getParentRequest())) {
            $this->setRouterContext($parentRequest);
        }
    }
    private function setLocale(\_PhpScoperda2604e33acb\Symfony\Component\HttpFoundation\Request $request)
    {
        if ($locale = $request->attributes->get('_locale')) {
            $request->setLocale($locale);
        }
    }
    private function setRouterContext(\_PhpScoperda2604e33acb\Symfony\Component\HttpFoundation\Request $request)
    {
        if (null !== $this->router) {
            $this->router->getContext()->setParameter('_locale', $request->getLocale());
        }
    }
    public static function getSubscribedEvents()
    {
        return [\_PhpScoperda2604e33acb\Symfony\Component\HttpKernel\KernelEvents::REQUEST => [
            ['setDefaultLocale', 100],
            // must be registered after the Router to have access to the _locale
            ['onKernelRequest', 16],
        ], \_PhpScoperda2604e33acb\Symfony\Component\HttpKernel\KernelEvents::FINISH_REQUEST => [['onKernelFinishRequest', 0]]];
    }
}
