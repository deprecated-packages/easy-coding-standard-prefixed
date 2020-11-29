<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopercae980ebf12d\Symfony\Component\HttpKernel\Event;

use _PhpScopercae980ebf12d\Symfony\Component\HttpFoundation\Request;
use _PhpScopercae980ebf12d\Symfony\Component\HttpFoundation\Response;
use _PhpScopercae980ebf12d\Symfony\Component\HttpKernel\HttpKernelInterface;
/**
 * @deprecated since Symfony 4.3, use TerminateEvent instead
 */
class PostResponseEvent extends \_PhpScopercae980ebf12d\Symfony\Component\HttpKernel\Event\KernelEvent
{
    private $response;
    public function __construct(\_PhpScopercae980ebf12d\Symfony\Component\HttpKernel\HttpKernelInterface $kernel, \_PhpScopercae980ebf12d\Symfony\Component\HttpFoundation\Request $request, \_PhpScopercae980ebf12d\Symfony\Component\HttpFoundation\Response $response)
    {
        parent::__construct($kernel, $request, \_PhpScopercae980ebf12d\Symfony\Component\HttpKernel\HttpKernelInterface::MASTER_REQUEST);
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
