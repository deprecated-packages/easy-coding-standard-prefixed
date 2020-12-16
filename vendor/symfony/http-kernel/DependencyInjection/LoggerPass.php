<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc75fd40d7a6e\Symfony\Component\HttpKernel\DependencyInjection;

use _PhpScoperc75fd40d7a6e\Psr\Log\LoggerInterface;
use _PhpScoperc75fd40d7a6e\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoperc75fd40d7a6e\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperc75fd40d7a6e\Symfony\Component\HttpKernel\Log\Logger;
/**
 * Registers the default logger if necessary.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class LoggerPass implements \_PhpScoperc75fd40d7a6e\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(\_PhpScoperc75fd40d7a6e\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        $container->setAlias(\_PhpScoperc75fd40d7a6e\Psr\Log\LoggerInterface::class, 'logger')->setPublic(\false);
        if ($container->has('logger')) {
            return;
        }
        $container->register('logger', \_PhpScoperc75fd40d7a6e\Symfony\Component\HttpKernel\Log\Logger::class)->setPublic(\false);
    }
}
