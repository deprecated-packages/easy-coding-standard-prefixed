<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc5e9eb67638f\Symfony\Component\HttpKernel\EventListener;

use _PhpScoperc5e9eb67638f\Symfony\Component\EventDispatcher\EventSubscriberInterface;
use _PhpScoperc5e9eb67638f\Symfony\Component\HttpFoundation\Request;
use _PhpScoperc5e9eb67638f\Symfony\Component\HttpKernel\Event\RequestEvent;
use _PhpScoperc5e9eb67638f\Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use _PhpScoperc5e9eb67638f\Symfony\Component\HttpKernel\KernelEvents;
use _PhpScoperc5e9eb67638f\Symfony\Component\HttpKernel\UriSigner;
/**
 * Handles content fragments represented by special URIs.
 *
 * All URL paths starting with /_fragment are handled as
 * content fragments by this listener.
 *
 * Throws an AccessDeniedHttpException exception if the request
 * is not signed or if it is not an internal sub-request.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class FragmentListener implements EventSubscriberInterface
{
    private $signer;
    private $fragmentPath;
    /**
     * @param string $fragmentPath The path that triggers this listener
     */
    public function __construct(UriSigner $signer, string $fragmentPath = '/_fragment')
    {
        $this->signer = $signer;
        $this->fragmentPath = $fragmentPath;
    }
    /**
     * Fixes request attributes when the path is '/_fragment'.
     *
     * @throws AccessDeniedHttpException if the request does not come from a trusted IP
     */
    public function onKernelRequest(RequestEvent $event)
    {
        $request = $event->getRequest();
        if ($this->fragmentPath !== \rawurldecode($request->getPathInfo())) {
            return;
        }
        if ($request->attributes->has('_controller')) {
            // Is a sub-request: no need to parse _path but it should still be removed from query parameters as below.
            $request->query->remove('_path');
            return;
        }
        if ($event->isMasterRequest()) {
            $this->validateRequest($request);
        }
        \parse_str($request->query->get('_path', ''), $attributes);
        $request->attributes->add($attributes);
        $request->attributes->set('_route_params', \array_replace($request->attributes->get('_route_params', []), $attributes));
        $request->query->remove('_path');
    }
    protected function validateRequest(Request $request)
    {
        // is the Request safe?
        if (!$request->isMethodSafe()) {
            throw new AccessDeniedHttpException();
        }
        // is the Request signed?
        if ($this->signer->checkRequest($request)) {
            return;
        }
        throw new AccessDeniedHttpException();
    }
    public static function getSubscribedEvents() : array
    {
        return [KernelEvents::REQUEST => [['onKernelRequest', 48]]];
    }
}
