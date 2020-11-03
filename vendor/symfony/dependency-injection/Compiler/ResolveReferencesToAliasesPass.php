<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopera238de2e9b5a\Symfony\Component\DependencyInjection\Compiler;

use _PhpScopera238de2e9b5a\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScopera238de2e9b5a\Symfony\Component\DependencyInjection\Exception\ServiceCircularReferenceException;
use _PhpScopera238de2e9b5a\Symfony\Component\DependencyInjection\Reference;
/**
 * Replaces all references to aliases with references to the actual service.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ResolveReferencesToAliasesPass extends \_PhpScopera238de2e9b5a\Symfony\Component\DependencyInjection\Compiler\AbstractRecursivePass
{
    /**
     * {@inheritdoc}
     */
    public function process(\_PhpScopera238de2e9b5a\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        parent::process($container);
        foreach ($container->getAliases() as $id => $alias) {
            $aliasId = (string) $alias;
            $this->currentId = $id;
            if ($aliasId !== ($defId = $this->getDefinitionId($aliasId, $container))) {
                $container->setAlias($id, $defId)->setPublic($alias->isPublic())->setPrivate($alias->isPrivate());
            }
        }
    }
    /**
     * {@inheritdoc}
     */
    protected function processValue($value, $isRoot = \false)
    {
        if (!$value instanceof \_PhpScopera238de2e9b5a\Symfony\Component\DependencyInjection\Reference) {
            return parent::processValue($value, $isRoot);
        }
        $defId = $this->getDefinitionId($id = (string) $value, $this->container);
        return $defId !== $id ? new \_PhpScopera238de2e9b5a\Symfony\Component\DependencyInjection\Reference($defId, $value->getInvalidBehavior()) : $value;
    }
    private function getDefinitionId(string $id, \_PhpScopera238de2e9b5a\Symfony\Component\DependencyInjection\ContainerBuilder $container) : string
    {
        if (!$container->hasAlias($id)) {
            return $id;
        }
        $alias = $container->getAlias($id);
        if ($alias->isDeprecated()) {
            @\trigger_error(\sprintf('%s. It is being referenced by the "%s" %s.', \rtrim($alias->getDeprecationMessage($id), '. '), $this->currentId, $container->hasDefinition($this->currentId) ? 'service' : 'alias'), \E_USER_DEPRECATED);
        }
        $seen = [];
        do {
            if (isset($seen[$id])) {
                throw new \_PhpScopera238de2e9b5a\Symfony\Component\DependencyInjection\Exception\ServiceCircularReferenceException($id, \array_merge(\array_keys($seen), [$id]));
            }
            $seen[$id] = \true;
            $id = (string) $container->getAlias($id);
        } while ($container->hasAlias($id));
        return $id;
    }
}
