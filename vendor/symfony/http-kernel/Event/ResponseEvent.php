<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperb5b1090524db\Symfony\Component\HttpKernel\Event;

use _PhpScoperb5b1090524db\Symfony\Component\HttpFoundation\Request;
use _PhpScoperb5b1090524db\Symfony\Component\HttpFoundation\Response;
use _PhpScoperb5b1090524db\Symfony\Component\HttpKernel\HttpKernelInterface;
/**
 * Allows to filter a Response object.
 *
 * You can call getResponse() to retrieve the current response. With
 * setResponse() you can set a new response that will be returned to the
 * browser.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
final class ResponseEvent extends \_PhpScoperb5b1090524db\Symfony\Component\HttpKernel\Event\KernelEvent
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
