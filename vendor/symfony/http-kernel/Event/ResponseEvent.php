<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperf53473b45c36\Symfony\Component\HttpKernel\Event;

use _PhpScoperf53473b45c36\Symfony\Component\HttpFoundation\Request;
use _PhpScoperf53473b45c36\Symfony\Component\HttpFoundation\Response;
use _PhpScoperf53473b45c36\Symfony\Component\HttpKernel\HttpKernelInterface;
/**
 * Allows to filter a Response object.
 *
 * You can call getResponse() to retrieve the current response. With
 * setResponse() you can set a new response that will be returned to the
 * browser.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
final class ResponseEvent extends \_PhpScoperf53473b45c36\Symfony\Component\HttpKernel\Event\KernelEvent
{
    private $response;
    public function __construct(\_PhpScoperf53473b45c36\Symfony\Component\HttpKernel\HttpKernelInterface $kernel, \_PhpScoperf53473b45c36\Symfony\Component\HttpFoundation\Request $request, int $requestType, \_PhpScoperf53473b45c36\Symfony\Component\HttpFoundation\Response $response)
    {
        parent::__construct($kernel, $request, $requestType);
        $this->setResponse($response);
    }
    public function getResponse() : \_PhpScoperf53473b45c36\Symfony\Component\HttpFoundation\Response
    {
        return $this->response;
    }
    public function setResponse(\_PhpScoperf53473b45c36\Symfony\Component\HttpFoundation\Response $response) : void
    {
        $this->response = $response;
    }
}
