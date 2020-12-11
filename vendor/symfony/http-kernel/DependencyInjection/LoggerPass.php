<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopera061b8a47e36\Symfony\Component\HttpKernel\DependencyInjection;

use _PhpScopera061b8a47e36\Psr\Log\LoggerInterface;
use _PhpScopera061b8a47e36\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScopera061b8a47e36\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopera061b8a47e36\Symfony\Component\HttpKernel\Log\Logger;
/**
 * Registers the default logger if necessary.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class LoggerPass implements \_PhpScopera061b8a47e36\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(\_PhpScopera061b8a47e36\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        $container->setAlias(\_PhpScopera061b8a47e36\Psr\Log\LoggerInterface::class, 'logger')->setPublic(\false);
        if ($container->has('logger')) {
            return;
        }
        $container->register('logger', \_PhpScopera061b8a47e36\Symfony\Component\HttpKernel\Log\Logger::class)->setPublic(\false);
    }
}
