<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperf3d5f0921050\Symfony\Component\DependencyInjection\Compiler;

use _PhpScoperf3d5f0921050\Symfony\Component\DependencyInjection\Alias;
use _PhpScoperf3d5f0921050\Symfony\Component\DependencyInjection\ChildDefinition;
use _PhpScoperf3d5f0921050\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperf3d5f0921050\Symfony\Component\DependencyInjection\Definition;
use _PhpScoperf3d5f0921050\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use _PhpScoperf3d5f0921050\Symfony\Component\DependencyInjection\Exception\ServiceCircularReferenceException;
use _PhpScoperf3d5f0921050\Symfony\Component\DependencyInjection\Reference;
/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ResolveDecoratorStackPass implements \_PhpScoperf3d5f0921050\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    private $tag;
    public function __construct(string $tag = 'container.stack')
    {
        $this->tag = $tag;
    }
    public function process(\_PhpScoperf3d5f0921050\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        $stacks = [];
        foreach ($container->findTaggedServiceIds($this->tag) as $id => $tags) {
            $definition = $container->getDefinition($id);
            if (!$definition instanceof \_PhpScoperf3d5f0921050\Symfony\Component\DependencyInjection\ChildDefinition) {
                throw new \_PhpScoperf3d5f0921050\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException(\sprintf('Invalid service "%s": only definitions with a "parent" can have the "%s" tag.', $id, $this->tag));
            }
            if (!($stack = $definition->getArguments())) {
                throw new \_PhpScoperf3d5f0921050\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException(\sprintf('Invalid service "%s": the stack of decorators is empty.', $id));
            }
            $stacks[$id] = $stack;
        }
        if (!$stacks) {
            return;
        }
        $resolvedDefinitions = [];
        foreach ($container->getDefinitions() as $id => $definition) {
            if (!isset($stacks[$id])) {
                $resolvedDefinitions[$id] = $definition;
                continue;
            }
            foreach (\array_reverse($this->resolveStack($stacks, [$id]), \true) as $k => $v) {
                $resolvedDefinitions[$k] = $v;
            }
            $alias = $container->setAlias($id, $k);
            if ($definition->getChanges()['public'] ?? \false) {
                $alias->setPublic($definition->isPublic());
            }
            if ($definition->isDeprecated()) {
                $alias->setDeprecated(...\array_values($definition->getDeprecation('%alias_id%')));
            }
        }
        $container->setDefinitions($resolvedDefinitions);
    }
    private function resolveStack(array $stacks, array $path) : array
    {
        $definitions = [];
        $id = \end($path);
        $prefix = '.' . $id . '.';
        if (!isset($stacks[$id])) {
            return [$id => new \_PhpScoperf3d5f0921050\Symfony\Component\DependencyInjection\ChildDefinition($id)];
        }
        if (\key($path) !== ($searchKey = \array_search($id, $path))) {
            throw new \_PhpScoperf3d5f0921050\Symfony\Component\DependencyInjection\Exception\ServiceCircularReferenceException($id, \array_slice($path, $searchKey));
        }
        foreach ($stacks[$id] as $k => $definition) {
            if ($definition instanceof \_PhpScoperf3d5f0921050\Symfony\Component\DependencyInjection\ChildDefinition && isset($stacks[$definition->getParent()])) {
                $path[] = $definition->getParent();
                $definition = \unserialize(\serialize($definition));
                // deep clone
            } elseif ($definition instanceof \_PhpScoperf3d5f0921050\Symfony\Component\DependencyInjection\Definition) {
                $definitions[$decoratedId = $prefix . $k] = $definition;
                continue;
            } elseif ($definition instanceof \_PhpScoperf3d5f0921050\Symfony\Component\DependencyInjection\Reference || $definition instanceof \_PhpScoperf3d5f0921050\Symfony\Component\DependencyInjection\Alias) {
                $path[] = (string) $definition;
            } else {
                throw new \_PhpScoperf3d5f0921050\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException(\sprintf('Invalid service "%s": unexpected value of type "%s" found in the stack of decorators.', $id, \get_debug_type($definition)));
            }
            $p = $prefix . $k;
            foreach ($this->resolveStack($stacks, $path) as $k => $v) {
                $definitions[$decoratedId = $p . $k] = $definition instanceof \_PhpScoperf3d5f0921050\Symfony\Component\DependencyInjection\ChildDefinition ? $definition->setParent($k) : new \_PhpScoperf3d5f0921050\Symfony\Component\DependencyInjection\ChildDefinition($k);
                $definition = null;
            }
            \array_pop($path);
        }
        if (1 === \count($path)) {
            foreach ($definitions as $k => $definition) {
                $definition->setPublic(\false)->setTags([])->setDecoratedService($decoratedId);
            }
            $definition->setDecoratedService(null);
        }
        return $definitions;
    }
}