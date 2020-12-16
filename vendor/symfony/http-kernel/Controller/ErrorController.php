<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperd35c27cd4b09\Symfony\Component\HttpKernel\Controller;

use _PhpScoperd35c27cd4b09\Symfony\Component\ErrorHandler\ErrorRenderer\ErrorRendererInterface;
use _PhpScoperd35c27cd4b09\Symfony\Component\HttpFoundation\Request;
use _PhpScoperd35c27cd4b09\Symfony\Component\HttpFoundation\Response;
use _PhpScoperd35c27cd4b09\Symfony\Component\HttpKernel\Exception\HttpException;
use _PhpScoperd35c27cd4b09\Symfony\Component\HttpKernel\HttpKernelInterface;
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
    public function __construct(\_PhpScoperd35c27cd4b09\Symfony\Component\HttpKernel\HttpKernelInterface $kernel, $controller, \_PhpScoperd35c27cd4b09\Symfony\Component\ErrorHandler\ErrorRenderer\ErrorRendererInterface $errorRenderer)
    {
        $this->kernel = $kernel;
        $this->controller = $controller;
        $this->errorRenderer = $errorRenderer;
    }
    public function __invoke(\Throwable $exception) : \_PhpScoperd35c27cd4b09\Symfony\Component\HttpFoundation\Response
    {
        $exception = $this->errorRenderer->render($exception);
        return new \_PhpScoperd35c27cd4b09\Symfony\Component\HttpFoundation\Response($exception->getAsString(), $exception->getStatusCode(), $exception->getHeaders());
    }
    public function preview(\_PhpScoperd35c27cd4b09\Symfony\Component\HttpFoundation\Request $request, int $code) : \_PhpScoperd35c27cd4b09\Symfony\Component\HttpFoundation\Response
    {
        /*
         * This Request mimics the parameters set by
         * \Symfony\Component\HttpKernel\EventListener\ErrorListener::duplicateRequest, with
         * the additional "showException" flag.
         */
        $subRequest = $request->duplicate(null, null, ['_controller' => $this->controller, 'exception' => new \_PhpScoperd35c27cd4b09\Symfony\Component\HttpKernel\Exception\HttpException($code, 'This is a sample exception.'), 'logger' => null, 'showException' => \false]);
        return $this->kernel->handle($subRequest, \_PhpScoperd35c27cd4b09\Symfony\Component\HttpKernel\HttpKernelInterface::SUB_REQUEST);
    }
}
