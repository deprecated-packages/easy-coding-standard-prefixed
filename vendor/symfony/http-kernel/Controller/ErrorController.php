<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperedc2e0c967db\Symfony\Component\HttpKernel\Controller;

use _PhpScoperedc2e0c967db\Symfony\Component\ErrorHandler\ErrorRenderer\ErrorRendererInterface;
use _PhpScoperedc2e0c967db\Symfony\Component\HttpFoundation\Request;
use _PhpScoperedc2e0c967db\Symfony\Component\HttpFoundation\Response;
use _PhpScoperedc2e0c967db\Symfony\Component\HttpKernel\Exception\HttpException;
use _PhpScoperedc2e0c967db\Symfony\Component\HttpKernel\HttpKernelInterface;
/**
 * Renders error or exception pages from a given FlattenException.
 *
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 * @author Matthias Pigulla <mp@webfactory.de>
 */
class ErrorController
{
    private $kernel;
    private $controller;
    private $errorRenderer;
    public function __construct(\_PhpScoperedc2e0c967db\Symfony\Component\HttpKernel\HttpKernelInterface $kernel, $controller, \_PhpScoperedc2e0c967db\Symfony\Component\ErrorHandler\ErrorRenderer\ErrorRendererInterface $errorRenderer)
    {
        $this->kernel = $kernel;
        $this->controller = $controller;
        $this->errorRenderer = $errorRenderer;
    }
    public function __invoke(\Throwable $exception) : \_PhpScoperedc2e0c967db\Symfony\Component\HttpFoundation\Response
    {
        $exception = $this->errorRenderer->render($exception);
        return new \_PhpScoperedc2e0c967db\Symfony\Component\HttpFoundation\Response($exception->getAsString(), $exception->getStatusCode(), $exception->getHeaders());
    }
    public function preview(\_PhpScoperedc2e0c967db\Symfony\Component\HttpFoundation\Request $request, int $code) : \_PhpScoperedc2e0c967db\Symfony\Component\HttpFoundation\Response
    {
        /*
         * This Request mimics the parameters set by
         * \Symfony\Component\HttpKernel\EventListener\ErrorListener::duplicateRequest, with
         * the additional "showException" flag.
         */
        $subRequest = $request->duplicate(null, null, ['_controller' => $this->controller, 'exception' => new \_PhpScoperedc2e0c967db\Symfony\Component\HttpKernel\Exception\HttpException($code, 'This is a sample exception.'), 'logger' => null, 'showException' => \false]);
        return $this->kernel->handle($subRequest, \_PhpScoperedc2e0c967db\Symfony\Component\HttpKernel\HttpKernelInterface::SUB_REQUEST);
    }
}
