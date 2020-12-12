<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperdaf95aff095b\Symfony\Component\HttpKernel\Event;

use _PhpScoperdaf95aff095b\Symfony\Component\HttpFoundation\Request;
use _PhpScoperdaf95aff095b\Symfony\Component\HttpFoundation\Response;
use _PhpScoperdaf95aff095b\Symfony\Component\HttpKernel\HttpKernelInterface;
/**
 * @deprecated since Symfony 4.3, use TerminateEvent instead
 */
class PostResponseEvent extends \_PhpScoperdaf95aff095b\Symfony\Component\HttpKernel\Event\KernelEvent
{
    private $response;
    public function __construct(\_PhpScoperdaf95aff095b\Symfony\Component\HttpKernel\HttpKernelInterface $kernel, \_PhpScoperdaf95aff095b\Symfony\Component\HttpFoundation\Request $request, \_PhpScoperdaf95aff095b\Symfony\Component\HttpFoundation\Response $response)
    {
        parent::__construct($kernel, $request, \_PhpScoperdaf95aff095b\Symfony\Component\HttpKernel\HttpKernelInterface::MASTER_REQUEST);
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
