<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper32abeec2fe5a\Symfony\Component\HttpKernel\Event;

use _PhpScoper32abeec2fe5a\Symfony\Component\HttpFoundation\Request;
use _PhpScoper32abeec2fe5a\Symfony\Component\HttpFoundation\Response;
use _PhpScoper32abeec2fe5a\Symfony\Component\HttpKernel\HttpKernelInterface;
/**
 * Allows to execute logic after a response was sent.
 *
 * Since it's only triggered on master requests, the `getRequestType()` method
 * will always return the value of `HttpKernelInterface::MASTER_REQUEST`.
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
final class TerminateEvent extends \_PhpScoper32abeec2fe5a\Symfony\Component\HttpKernel\Event\KernelEvent
{
    private $response;
    public function __construct(HttpKernelInterface $kernel, Request $request, Response $response)
    {
        parent::__construct($kernel, $request, HttpKernelInterface::MASTER_REQUEST);
        $this->response = $response;
    }
    public function getResponse() : Response
    {
        return $this->response;
    }
}
