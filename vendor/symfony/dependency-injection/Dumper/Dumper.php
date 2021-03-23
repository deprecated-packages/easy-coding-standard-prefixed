<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc7096eb2567d\Symfony\Component\DependencyInjection\Dumper;

use _PhpScoperc7096eb2567d\Symfony\Component\DependencyInjection\ContainerBuilder;
/**
 * Dumper is the abstract class for all built-in dumpers.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class Dumper implements \_PhpScoperc7096eb2567d\Symfony\Component\DependencyInjection\Dumper\DumperInterface
{
    protected $container;
    public function __construct(\_PhpScoperc7096eb2567d\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        $this->container = $container;
    }
}
