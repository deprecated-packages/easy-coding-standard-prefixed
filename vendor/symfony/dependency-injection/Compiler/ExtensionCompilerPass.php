<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper992f4af8b9e0\Symfony\Component\DependencyInjection\Compiler;

use _PhpScoper992f4af8b9e0\Symfony\Component\DependencyInjection\ContainerBuilder;
/**
 * A pass to automatically process extensions if they implement
 * CompilerPassInterface.
 *
 * @author Wouter J <wouter@wouterj.nl>
 */
class ExtensionCompilerPass implements \_PhpScoper992f4af8b9e0\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(\_PhpScoper992f4af8b9e0\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        foreach ($container->getExtensions() as $extension) {
            if (!$extension instanceof \_PhpScoper992f4af8b9e0\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface) {
                continue;
            }
            $extension->process($container);
        }
    }
}
