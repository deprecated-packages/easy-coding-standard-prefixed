<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperd47a2fa2a77e\Symfony\Component\HttpKernel\Event;

use _PhpScoperd47a2fa2a77e\Symfony\Component\HttpFoundation\Request;
use _PhpScoperd47a2fa2a77e\Symfony\Component\HttpFoundation\Response;
use _PhpScoperd47a2fa2a77e\Symfony\Component\HttpKernel\HttpKernelInterface;
/**
 * Allows to filter a Response object.
 *
 * You can call getResponse() to retrieve the current response. With
 * setResponse() you can set a new response that will be returned to the
 * browser.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
final class ResponseEvent extends \_PhpScoperd47a2fa2a77e\Symfony\Component\HttpKernel\Event\KernelEvent
{
    private $response;
    public function __construct(\_PhpScoperd47a2fa2a77e\Symfony\Component\HttpKernel\HttpKernelInterface $kernel, \_PhpScoperd47a2fa2a77e\Symfony\Component\HttpFoundation\Request $request, int $requestType, \_PhpScoperd47a2fa2a77e\Symfony\Component\HttpFoundation\Response $response)
    {
        parent::__construct($kernel, $request, $requestType);
        $this->setResponse($response);
    }
    public function getResponse() : \_PhpScoperd47a2fa2a77e\Symfony\Component\HttpFoundation\Response
    {
        return $this->response;
    }
    public function setResponse(\_PhpScoperd47a2fa2a77e\Symfony\Component\HttpFoundation\Response $response) : void
    {
        $this->response = $response;
    }
}
