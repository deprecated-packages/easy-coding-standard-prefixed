<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper14cb6de5473d\Symfony\Component\HttpKernel\DependencyInjection;

use _PhpScoper14cb6de5473d\Psr\Log\LoggerInterface;
use _PhpScoper14cb6de5473d\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoper14cb6de5473d\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper14cb6de5473d\Symfony\Component\HttpKernel\Log\Logger;
/**
 * Registers the default logger if necessary.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class LoggerPass implements \_PhpScoper14cb6de5473d\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(\_PhpScoper14cb6de5473d\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        $container->setAlias(\_PhpScoper14cb6de5473d\Psr\Log\LoggerInterface::class, 'logger')->setPublic(\false);
        if ($container->has('logger')) {
            return;
        }
        $container->register('logger', \_PhpScoper14cb6de5473d\Symfony\Component\HttpKernel\Log\Logger::class)->setPublic(\false);
    }
}
