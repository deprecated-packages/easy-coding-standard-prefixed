<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperac4e86be08e5\Symfony\Component\HttpKernel\Event;

use _PhpScoperac4e86be08e5\Symfony\Component\HttpFoundation\Request;
use _PhpScoperac4e86be08e5\Symfony\Component\HttpFoundation\Response;
use _PhpScoperac4e86be08e5\Symfony\Component\HttpKernel\HttpKernelInterface;
/**
 * @deprecated since Symfony 4.3, use TerminateEvent instead
 */
class PostResponseEvent extends \_PhpScoperac4e86be08e5\Symfony\Component\HttpKernel\Event\KernelEvent
{
    private $response;
    public function __construct(\_PhpScoperac4e86be08e5\Symfony\Component\HttpKernel\HttpKernelInterface $kernel, \_PhpScoperac4e86be08e5\Symfony\Component\HttpFoundation\Request $request, \_PhpScoperac4e86be08e5\Symfony\Component\HttpFoundation\Response $response)
    {
        parent::__construct($kernel, $request, \_PhpScoperac4e86be08e5\Symfony\Component\HttpKernel\HttpKernelInterface::MASTER_REQUEST);
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
