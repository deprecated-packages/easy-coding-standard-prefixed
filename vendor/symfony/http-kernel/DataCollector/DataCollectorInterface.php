<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc753ccca5a0c\Symfony\Component\HttpKernel\DataCollector;

use _PhpScoperc753ccca5a0c\Symfony\Component\HttpFoundation\Request;
use _PhpScoperc753ccca5a0c\Symfony\Component\HttpFoundation\Response;
use _PhpScoperc753ccca5a0c\Symfony\Contracts\Service\ResetInterface;
/**
 * DataCollectorInterface.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface DataCollectorInterface extends \_PhpScoperc753ccca5a0c\Symfony\Contracts\Service\ResetInterface
{
    /**
     * Collects data for the given Request and Response.
     *
     * @param \Throwable|null $exception
     */
    public function collect(\_PhpScoperc753ccca5a0c\Symfony\Component\HttpFoundation\Request $request, \_PhpScoperc753ccca5a0c\Symfony\Component\HttpFoundation\Response $response);
    /**
     * Returns the name of the collector.
     *
     * @return string The collector name
     */
    public function getName();
}
