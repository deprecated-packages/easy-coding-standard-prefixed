<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc7c7dddc9238\Symfony\Component\HttpKernel\EventListener;

@\trigger_error(\sprintf('The "%s" class is deprecated since Symfony 4.3 and will be removed in 5.0, use LocaleAwareListener instead.', \_PhpScoperc7c7dddc9238\Symfony\Component\HttpKernel\EventListener\TranslatorListener::class), \E_USER_DEPRECATED);
use _PhpScoperc7c7dddc9238\Symfony\Component\EventDispatcher\EventSubscriberInterface;
use _PhpScoperc7c7dddc9238\Symfony\Component\HttpFoundation\Request;
use _PhpScoperc7c7dddc9238\Symfony\Component\HttpFoundation\RequestStack;
use _PhpScoperc7c7dddc9238\Symfony\Component\HttpKernel\Event\FinishRequestEvent;
use _PhpScoperc7c7dddc9238\Symfony\Component\HttpKernel\Event\GetResponseEvent;
use _PhpScoperc7c7dddc9238\Symfony\Component\HttpKernel\KernelEvents;
use _PhpScoperc7c7dddc9238\Symfony\Component\Translation\TranslatorInterface;
use _PhpScoperc7c7dddc9238\Symfony\Contracts\Translation\LocaleAwareInterface;
/**
 * Synchronizes the locale between the request and the translator.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since Symfony 4.3, use LocaleAwareListener instead
 */
class TranslatorListener implements \_PhpScoperc7c7dddc9238\Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    private $translator;
    private $requestStack;
    /**
     * @param LocaleAwareInterface $translator
     */
    public function __construct($translator, \_PhpScoperc7c7dddc9238\Symfony\Component\HttpFoundation\RequestStack $requestStack)
    {
        if (!$translator instanceof \_PhpScoperc7c7dddc9238\Symfony\Component\Translation\TranslatorInterface && !$translator instanceof \_PhpScoperc7c7dddc9238\Symfony\Contracts\Translation\LocaleAwareInterface) {
            throw new \TypeError(\sprintf('Argument 1 passed to %s() must be an instance of %s, %s given.', __METHOD__, \_PhpScoperc7c7dddc9238\Symfony\Contracts\Translation\LocaleAwareInterface::class, \is_object($translator) ? \get_class($translator) : \gettype($translator)));
        }
        $this->translator = $translator;
        $this->requestStack = $requestStack;
    }
    public function onKernelRequest(\_PhpScoperc7c7dddc9238\Symfony\Component\HttpKernel\Event\GetResponseEvent $event)
    {
        $this->setLocale($event->getRequest());
    }
    public function onKernelFinishRequest(\_PhpScoperc7c7dddc9238\Symfony\Component\HttpKernel\Event\FinishRequestEvent $event)
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
            \_PhpScoperc7c7dddc9238\Symfony\Component\HttpKernel\KernelEvents::REQUEST => [['onKernelRequest', 10]],
            \_PhpScoperc7c7dddc9238\Symfony\Component\HttpKernel\KernelEvents::FINISH_REQUEST => [['onKernelFinishRequest', 0]],
        ];
    }
    private function setLocale(\_PhpScoperc7c7dddc9238\Symfony\Component\HttpFoundation\Request $request)
    {
        try {
            $this->translator->setLocale($request->getLocale());
        } catch (\InvalidArgumentException $e) {
            $this->translator->setLocale($request->getDefaultLocale());
        }
    }
}
