<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper065e4ba46e6d\Symfony\Component\DependencyInjection\Compiler;

use _PhpScoper065e4ba46e6d\Symfony\Component\DependencyInjection\ContainerBuilder;
/**
 * Interface that must be implemented by compilation passes.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
interface CompilerPassInterface
{
    /**
     * You can modify the container here before it is dumped to PHP code.
     */
    public function process(\_PhpScoper065e4ba46e6d\Symfony\Component\DependencyInjection\ContainerBuilder $container);
}
