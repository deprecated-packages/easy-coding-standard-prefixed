<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper5465fda93cc7\Symfony\Component\DependencyInjection\Compiler;

use _PhpScoper5465fda93cc7\Symfony\Component\DependencyInjection\ContainerBuilder;
/**
 * Remove private aliases from the container. They were only used to establish
 * dependencies between services, and these dependencies have been resolved in
 * one of the previous passes.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class RemovePrivateAliasesPass implements \_PhpScoper5465fda93cc7\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * Removes private aliases from the ContainerBuilder.
     */
    public function process(\_PhpScoper5465fda93cc7\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        foreach ($container->getAliases() as $id => $alias) {
            if ($alias->isPublic()) {
                continue;
            }
            $container->removeAlias($id);
            $container->log($this, \sprintf('Removed service "%s"; reason: private alias.', $id));
        }
    }
}
