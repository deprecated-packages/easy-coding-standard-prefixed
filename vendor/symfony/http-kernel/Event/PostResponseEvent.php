<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper5465fda93cc7\Symfony\Component\HttpKernel\Event;

use _PhpScoper5465fda93cc7\Symfony\Component\HttpFoundation\Request;
use _PhpScoper5465fda93cc7\Symfony\Component\HttpFoundation\Response;
use _PhpScoper5465fda93cc7\Symfony\Component\HttpKernel\HttpKernelInterface;
/**
 * @deprecated since Symfony 4.3, use TerminateEvent instead
 */
class PostResponseEvent extends \_PhpScoper5465fda93cc7\Symfony\Component\HttpKernel\Event\KernelEvent
{
    private $response;
    public function __construct(\_PhpScoper5465fda93cc7\Symfony\Component\HttpKernel\HttpKernelInterface $kernel, \_PhpScoper5465fda93cc7\Symfony\Component\HttpFoundation\Request $request, \_PhpScoper5465fda93cc7\Symfony\Component\HttpFoundation\Response $response)
    {
        parent::__construct($kernel, $request, \_PhpScoper5465fda93cc7\Symfony\Component\HttpKernel\HttpKernelInterface::MASTER_REQUEST);
        $this->response = $response;
    }
    /**
     * Returns the response for which this event was thrown.
     *
     * @return Response
     */
    public function getResponse()
    {
        return $this->response;
    }
}
