<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperd8b0b9452568\Symfony\Component\HttpKernel\DataCollector;

use _PhpScoperd8b0b9452568\Symfony\Component\HttpFoundation\Request;
use _PhpScoperd8b0b9452568\Symfony\Component\HttpFoundation\Response;
use _PhpScoperd8b0b9452568\Symfony\Contracts\Service\ResetInterface;
/**
 * DataCollectorInterface.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface DataCollectorInterface extends \_PhpScoperd8b0b9452568\Symfony\Contracts\Service\ResetInterface
{
    /**
     * Collects data for the given Request and Response.
     */
    public function collect(\_PhpScoperd8b0b9452568\Symfony\Component\HttpFoundation\Request $request, \_PhpScoperd8b0b9452568\Symfony\Component\HttpFoundation\Response $response, \Throwable $exception = null);
    /**
     * Returns the name of the collector.
     *
     * @return string The collector name
     */
    public function getName();
}
