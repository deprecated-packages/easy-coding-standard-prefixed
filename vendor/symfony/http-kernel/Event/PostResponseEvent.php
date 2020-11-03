<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopercf327c47dfc5\Symfony\Component\HttpKernel\Event;

use _PhpScopercf327c47dfc5\Symfony\Component\HttpFoundation\Request;
use _PhpScopercf327c47dfc5\Symfony\Component\HttpFoundation\Response;
use _PhpScopercf327c47dfc5\Symfony\Component\HttpKernel\HttpKernelInterface;
/**
 * @deprecated since Symfony 4.3, use TerminateEvent instead
 */
class PostResponseEvent extends \_PhpScopercf327c47dfc5\Symfony\Component\HttpKernel\Event\KernelEvent
{
    private $response;
    public function __construct(\_PhpScopercf327c47dfc5\Symfony\Component\HttpKernel\HttpKernelInterface $kernel, \_PhpScopercf327c47dfc5\Symfony\Component\HttpFoundation\Request $request, \_PhpScopercf327c47dfc5\Symfony\Component\HttpFoundation\Response $response)
    {
        parent::__construct($kernel, $request, \_PhpScopercf327c47dfc5\Symfony\Component\HttpKernel\HttpKernelInterface::MASTER_REQUEST);
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
