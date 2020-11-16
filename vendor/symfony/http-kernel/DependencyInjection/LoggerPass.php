<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperedc2e0c967db\Symfony\Component\HttpKernel\DependencyInjection;

use _PhpScoperedc2e0c967db\Psr\Log\LoggerInterface;
use _PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperedc2e0c967db\Symfony\Component\HttpKernel\Log\Logger;
/**
 * Registers the default logger if necessary.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class LoggerPass implements \_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(\_PhpScoperedc2e0c967db\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        $container->setAlias(\_PhpScoperedc2e0c967db\Psr\Log\LoggerInterface::class, 'logger')->setPublic(\false);
        if ($container->has('logger')) {
            return;
        }
        $container->register('logger', \_PhpScoperedc2e0c967db\Symfony\Component\HttpKernel\Log\Logger::class)->setPublic(\false);
    }
}
