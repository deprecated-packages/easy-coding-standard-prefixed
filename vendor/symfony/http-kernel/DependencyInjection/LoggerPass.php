<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperb0c6500a504c\Symfony\Component\HttpKernel\DependencyInjection;

use _PhpScoperb0c6500a504c\Psr\Log\LoggerInterface;
use _PhpScoperb0c6500a504c\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoperb0c6500a504c\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperb0c6500a504c\Symfony\Component\HttpKernel\Log\Logger;
/**
 * Registers the default logger if necessary.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class LoggerPass implements \_PhpScoperb0c6500a504c\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(\_PhpScoperb0c6500a504c\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        $container->setAlias(\_PhpScoperb0c6500a504c\Psr\Log\LoggerInterface::class, 'logger')->setPublic(\false);
        if ($container->has('logger')) {
            return;
        }
        $container->register('logger', \_PhpScoperb0c6500a504c\Symfony\Component\HttpKernel\Log\Logger::class)->setPublic(\false);
    }
}
