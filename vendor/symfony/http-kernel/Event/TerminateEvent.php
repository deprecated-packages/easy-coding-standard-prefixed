<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopercd2fc5ef50ef\Symfony\Component\HttpKernel\Event;

use _PhpScopercd2fc5ef50ef\Symfony\Component\HttpFoundation\Request;
use _PhpScopercd2fc5ef50ef\Symfony\Component\HttpFoundation\Response;
use _PhpScopercd2fc5ef50ef\Symfony\Component\HttpKernel\HttpKernelInterface;
/**
 * Allows to execute logic after a response was sent.
 *
 * Since it's only triggered on master requests, the `getRequestType()` method
 * will always return the value of `HttpKernelInterface::MASTER_REQUEST`.
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
final class TerminateEvent extends \_PhpScopercd2fc5ef50ef\Symfony\Component\HttpKernel\Event\KernelEvent
{
    private $response;
    public function __construct(\_PhpScopercd2fc5ef50ef\Symfony\Component\HttpKernel\HttpKernelInterface $kernel, \_PhpScopercd2fc5ef50ef\Symfony\Component\HttpFoundation\Request $request, \_PhpScopercd2fc5ef50ef\Symfony\Component\HttpFoundation\Response $response)
    {
        parent::__construct($kernel, $request, \_PhpScopercd2fc5ef50ef\Symfony\Component\HttpKernel\HttpKernelInterface::MASTER_REQUEST);
        $this->response = $response;
    }
    public function getResponse() : \_PhpScopercd2fc5ef50ef\Symfony\Component\HttpFoundation\Response
    {
        return $this->response;
    }
}
