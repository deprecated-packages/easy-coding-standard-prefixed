<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperfb0714773dc5\Symfony\Component\DependencyInjection\Compiler;

use _PhpScoperfb0714773dc5\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperfb0714773dc5\Symfony\Component\DependencyInjection\Exception\ServiceCircularReferenceException;
use _PhpScoperfb0714773dc5\Symfony\Component\DependencyInjection\Reference;
/**
 * Replaces all references to aliases with references to the actual service.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ResolveReferencesToAliasesPass extends \_PhpScoperfb0714773dc5\Symfony\Component\DependencyInjection\Compiler\AbstractRecursivePass
{
    /**
     * {@inheritdoc}
     */
    public function process(\_PhpScoperfb0714773dc5\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        parent::process($container);
        foreach ($container->getAliases() as $id => $alias) {
            $aliasId = (string) $alias;
            $this->currentId = $id;
            if ($aliasId !== ($defId = $this->getDefinitionId($aliasId, $container))) {
                $container->setAlias($id, $defId)->setPublic($alias->isPublic());
            }
        }
    }
    /**
     * {@inheritdoc}
     */
    protected function processValue($value, bool $isRoot = \false)
    {
        if (!$value instanceof \_PhpScoperfb0714773dc5\Symfony\Component\DependencyInjection\Reference) {
            return parent::processValue($value, $isRoot);
        }
        $defId = $this->getDefinitionId($id = (string) $value, $this->container);
        return $defId !== $id ? new \_PhpScoperfb0714773dc5\Symfony\Component\DependencyInjection\Reference($defId, $value->getInvalidBehavior()) : $value;
    }
    private function getDefinitionId(string $id, \_PhpScoperfb0714773dc5\Symfony\Component\DependencyInjection\ContainerBuilder $container) : string
    {
        if (!$container->hasAlias($id)) {
            return $id;
        }
        $alias = $container->getAlias($id);
        if ($alias->isDeprecated()) {
            $referencingDefinition = $container->hasDefinition($this->currentId) ? $container->getDefinition($this->currentId) : $container->getAlias($this->currentId);
            if (!$referencingDefinition->isDeprecated()) {
                $deprecation = $alias->getDeprecation($id);
                trigger_deprecation($deprecation['package'], $deprecation['version'], \rtrim($deprecation['message'], '. ') . '. It is being referenced by the "%s" ' . ($container->hasDefinition($this->currentId) ? 'service.' : 'alias.'), $this->currentId);
            }
        }
        $seen = [];
        do {
            if (isset($seen[$id])) {
                throw new \_PhpScoperfb0714773dc5\Symfony\Component\DependencyInjection\Exception\ServiceCircularReferenceException($id, \array_merge(\array_keys($seen), [$id]));
            }
            $seen[$id] = \true;
            $id = (string) $container->getAlias($id);
        } while ($container->hasAlias($id));
        return $id;
    }
}
