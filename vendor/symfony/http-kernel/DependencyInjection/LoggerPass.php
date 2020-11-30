<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopera09818bc50da\Symfony\Component\HttpKernel\DependencyInjection;

use _PhpScopera09818bc50da\Psr\Log\LoggerInterface;
use _PhpScopera09818bc50da\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScopera09818bc50da\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopera09818bc50da\Symfony\Component\HttpKernel\Log\Logger;
/**
 * Registers the default logger if necessary.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class LoggerPass implements \_PhpScopera09818bc50da\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(\_PhpScopera09818bc50da\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        $container->setAlias(\_PhpScopera09818bc50da\Psr\Log\LoggerInterface::class, 'logger')->setPublic(\false);
        if ($container->has('logger')) {
            return;
        }
        $container->register('logger', \_PhpScopera09818bc50da\Symfony\Component\HttpKernel\Log\Logger::class)->setPublic(\false);
    }
}
