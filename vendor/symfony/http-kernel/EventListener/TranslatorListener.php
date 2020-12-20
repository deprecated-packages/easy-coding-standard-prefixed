<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperba24099fc6fd\Symfony\Component\HttpKernel\EventListener;

@\trigger_error(\sprintf('The "%s" class is deprecated since Symfony 4.3 and will be removed in 5.0, use LocaleAwareListener instead.', \_PhpScoperba24099fc6fd\Symfony\Component\HttpKernel\EventListener\TranslatorListener::class), \E_USER_DEPRECATED);
use _PhpScoperba24099fc6fd\Symfony\Component\EventDispatcher\EventSubscriberInterface;
use _PhpScoperba24099fc6fd\Symfony\Component\HttpFoundation\Request;
use _PhpScoperba24099fc6fd\Symfony\Component\HttpFoundation\RequestStack;
use _PhpScoperba24099fc6fd\Symfony\Component\HttpKernel\Event\FinishRequestEvent;
use _PhpScoperba24099fc6fd\Symfony\Component\HttpKernel\Event\GetResponseEvent;
use _PhpScoperba24099fc6fd\Symfony\Component\HttpKernel\KernelEvents;
use _PhpScoperba24099fc6fd\Symfony\Component\Translation\TranslatorInterface;
use _PhpScoperba24099fc6fd\Symfony\Contracts\Translation\LocaleAwareInterface;
/**
 * Synchronizes the locale between the request and the translator.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since Symfony 4.3, use LocaleAwareListener instead
 */
class TranslatorListener implements \_PhpScoperba24099fc6fd\Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    private $translator;
    private $requestStack;
    /**
     * @param LocaleAwareInterface $translator
     */
    public function __construct($translator, \_PhpScoperba24099fc6fd\Symfony\Component\HttpFoundation\RequestStack $requestStack)
    {
        if (!$translator instanceof \_PhpScoperba24099fc6fd\Symfony\Component\Translation\TranslatorInterface && !$translator instanceof \_PhpScoperba24099fc6fd\Symfony\Contracts\Translation\LocaleAwareInterface) {
            throw new \TypeError(\sprintf('Argument 1 passed to %s() must be an instance of %s, %s given.', __METHOD__, \_PhpScoperba24099fc6fd\Symfony\Contracts\Translation\LocaleAwareInterface::class, \is_object($translator) ? \get_class($translator) : \gettype($translator)));
        }
        $this->translator = $translator;
        $this->requestStack = $requestStack;
    }
    public function onKernelRequest(\_PhpScoperba24099fc6fd\Symfony\Component\HttpKernel\Event\GetResponseEvent $event)
    {
        $this->setLocale($event->getRequest());
    }
    public function onKernelFinishRequest(\_PhpScoperba24099fc6fd\Symfony\Component\HttpKernel\Event\FinishRequestEvent $event)
    {
        if (null === ($parentRequest = $this->requestStack->getParentRequest())) {
            return;
        }
        $this->setLocale($parentRequest);
    }
    public static function getSubscribedEvents()
    {
        return [
            // must be registered after the Locale listener
            \_PhpScoperba24099fc6fd\Symfony\Component\HttpKernel\KernelEvents::REQUEST => [['onKernelRequest', 10]],
            \_PhpScoperba24099fc6fd\Symfony\Component\HttpKernel\KernelEvents::FINISH_REQUEST => [['onKernelFinishRequest', 0]],
        ];
    }
    private function setLocale(\_PhpScoperba24099fc6fd\Symfony\Component\HttpFoundation\Request $request)
    {
        try {
            $this->translator->setLocale($request->getLocale());
        } catch (\InvalidArgumentException $e) {
            $this->translator->setLocale($request->getDefaultLocale());
        }
    }
}
