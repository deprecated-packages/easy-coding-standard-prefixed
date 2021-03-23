<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperf523baae4f87\Symfony\Component\HttpKernel\DataCollector;

use _PhpScoperf523baae4f87\Symfony\Component\HttpFoundation\Request;
use _PhpScoperf523baae4f87\Symfony\Component\HttpFoundation\Response;
use _PhpScoperf523baae4f87\Symfony\Contracts\Service\ResetInterface;
/**
 * DataCollectorInterface.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface DataCollectorInterface extends \_PhpScoperf523baae4f87\Symfony\Contracts\Service\ResetInterface
{
    /**
     * Collects data for the given Request and Response.
     */
    public function collect(\_PhpScoperf523baae4f87\Symfony\Component\HttpFoundation\Request $request, \_PhpScoperf523baae4f87\Symfony\Component\HttpFoundation\Response $response, \Throwable $exception = null);
    /**
     * Returns the name of the collector.
     *
     * @return string The collector name
     */
    public function getName();
}
