<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperda2604e33acb\Symfony\Component\HttpKernel\DependencyInjection;

use _PhpScoperda2604e33acb\Psr\Log\LoggerInterface;
use _PhpScoperda2604e33acb\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoperda2604e33acb\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperda2604e33acb\Symfony\Component\HttpKernel\Log\Logger;
/**
 * Registers the default logger if necessary.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class LoggerPass implements \_PhpScoperda2604e33acb\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(\_PhpScoperda2604e33acb\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        $container->setAlias(\_PhpScoperda2604e33acb\Psr\Log\LoggerInterface::class, 'logger')->setPublic(\false);
        if ($container->has('logger')) {
            return;
        }
        $container->register('logger', \_PhpScoperda2604e33acb\Symfony\Component\HttpKernel\Log\Logger::class)->setPublic(\false);
    }
}
