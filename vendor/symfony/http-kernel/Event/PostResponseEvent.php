<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperbc5235eb86f3\Symfony\Component\HttpKernel\Event;

use _PhpScoperbc5235eb86f3\Symfony\Component\HttpFoundation\Request;
use _PhpScoperbc5235eb86f3\Symfony\Component\HttpFoundation\Response;
use _PhpScoperbc5235eb86f3\Symfony\Component\HttpKernel\HttpKernelInterface;
/**
 * @deprecated since Symfony 4.3, use TerminateEvent instead
 */
class PostResponseEvent extends \_PhpScoperbc5235eb86f3\Symfony\Component\HttpKernel\Event\KernelEvent
{
    private $response;
    public function __construct(\_PhpScoperbc5235eb86f3\Symfony\Component\HttpKernel\HttpKernelInterface $kernel, \_PhpScoperbc5235eb86f3\Symfony\Component\HttpFoundation\Request $request, \_PhpScoperbc5235eb86f3\Symfony\Component\HttpFoundation\Response $response)
    {
        parent::__construct($kernel, $request, \_PhpScoperbc5235eb86f3\Symfony\Component\HttpKernel\HttpKernelInterface::MASTER_REQUEST);
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
