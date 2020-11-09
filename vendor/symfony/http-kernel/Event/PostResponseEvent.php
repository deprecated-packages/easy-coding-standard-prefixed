<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperf5f75c22067b\Symfony\Component\HttpKernel\Event;

use _PhpScoperf5f75c22067b\Symfony\Component\HttpFoundation\Request;
use _PhpScoperf5f75c22067b\Symfony\Component\HttpFoundation\Response;
use _PhpScoperf5f75c22067b\Symfony\Component\HttpKernel\HttpKernelInterface;
/**
 * @deprecated since Symfony 4.3, use TerminateEvent instead
 */
class PostResponseEvent extends \_PhpScoperf5f75c22067b\Symfony\Component\HttpKernel\Event\KernelEvent
{
    private $response;
    public function __construct(\_PhpScoperf5f75c22067b\Symfony\Component\HttpKernel\HttpKernelInterface $kernel, \_PhpScoperf5f75c22067b\Symfony\Component\HttpFoundation\Request $request, \_PhpScoperf5f75c22067b\Symfony\Component\HttpFoundation\Response $response)
    {
        parent::__construct($kernel, $request, \_PhpScoperf5f75c22067b\Symfony\Component\HttpKernel\HttpKernelInterface::MASTER_REQUEST);
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
