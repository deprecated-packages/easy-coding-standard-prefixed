<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc5bee3a837bb\Symfony\Component\HttpKernel\Event;

use _PhpScoperc5bee3a837bb\Symfony\Component\HttpFoundation\Request;
use _PhpScoperc5bee3a837bb\Symfony\Component\HttpFoundation\Response;
use _PhpScoperc5bee3a837bb\Symfony\Component\HttpKernel\HttpKernelInterface;
/**
 * @deprecated since Symfony 4.3, use TerminateEvent instead
 */
class PostResponseEvent extends \_PhpScoperc5bee3a837bb\Symfony\Component\HttpKernel\Event\KernelEvent
{
    private $response;
    public function __construct(\_PhpScoperc5bee3a837bb\Symfony\Component\HttpKernel\HttpKernelInterface $kernel, \_PhpScoperc5bee3a837bb\Symfony\Component\HttpFoundation\Request $request, \_PhpScoperc5bee3a837bb\Symfony\Component\HttpFoundation\Response $response)
    {
        parent::__construct($kernel, $request, \_PhpScoperc5bee3a837bb\Symfony\Component\HttpKernel\HttpKernelInterface::MASTER_REQUEST);
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
