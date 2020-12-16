<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc75fd40d7a6e\Symfony\Component\DependencyInjection\Compiler;

use _PhpScoperc75fd40d7a6e\Symfony\Component\DependencyInjection\ContainerBuilder;
/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ResolvePrivatesPass implements \_PhpScoperc75fd40d7a6e\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(\_PhpScoperc75fd40d7a6e\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        foreach ($container->getDefinitions() as $id => $definition) {
            if ($definition->isPrivate()) {
                $definition->setPublic(\false);
                $definition->setPrivate(\true);
            }
        }
        foreach ($container->getAliases() as $id => $alias) {
            if ($alias->isPrivate()) {
                $alias->setPublic(\false);
                $alias->setPrivate(\true);
            }
        }
    }
}
