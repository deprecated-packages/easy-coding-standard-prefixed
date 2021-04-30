<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopera658fe86acec\Symfony\Component\HttpKernel\Event;

use _PhpScopera658fe86acec\Symfony\Component\HttpFoundation\Request;
use _PhpScopera658fe86acec\Symfony\Component\HttpFoundation\Response;
use _PhpScopera658fe86acec\Symfony\Component\HttpKernel\HttpKernelInterface;
/**
 * Allows to filter a Response object.
 *
 * You can call getResponse() to retrieve the current response. With
 * setResponse() you can set a new response that will be returned to the
 * browser.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
final class ResponseEvent extends \_PhpScopera658fe86acec\Symfony\Component\HttpKernel\Event\KernelEvent
{
    private $response;
    public function __construct(HttpKernelInterface $kernel, Request $request, int $requestType, Response $response)
    {
        parent::__construct($kernel, $request, $requestType);
        $this->setResponse($response);
    }
    public function getResponse() : Response
    {
        return $this->response;
    }
    public function setResponse(Response $response) : void
    {
        $this->response = $response;
    }
}
