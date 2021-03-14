<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperfb0714773dc5\Symfony\Component\Cache\DependencyInjection;

use _PhpScoperfb0714773dc5\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperfb0714773dc5\Symfony\Component\Cache\Adapter\TraceableAdapter;
use _PhpScoperfb0714773dc5\Symfony\Component\Cache\Adapter\TraceableTagAwareAdapter;
use _PhpScoperfb0714773dc5\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoperfb0714773dc5\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperfb0714773dc5\Symfony\Component\DependencyInjection\Definition;
use _PhpScoperfb0714773dc5\Symfony\Component\DependencyInjection\Reference;
/**
 * Inject a data collector to all the cache services to be able to get detailed statistics.
 *
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 */
class CacheCollectorPass implements \_PhpScoperfb0714773dc5\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    private $dataCollectorCacheId;
    private $cachePoolTag;
    private $cachePoolRecorderInnerSuffix;
    public function __construct(string $dataCollectorCacheId = 'data_collector.cache', string $cachePoolTag = 'cache.pool', string $cachePoolRecorderInnerSuffix = '.recorder_inner')
    {
        $this->dataCollectorCacheId = $dataCollectorCacheId;
        $this->cachePoolTag = $cachePoolTag;
        $this->cachePoolRecorderInnerSuffix = $cachePoolRecorderInnerSuffix;
    }
    /**
     * {@inheritdoc}
     */
    public function process(\_PhpScoperfb0714773dc5\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        if (!$container->hasDefinition($this->dataCollectorCacheId)) {
            return;
        }
        foreach ($container->findTaggedServiceIds($this->cachePoolTag) as $id => $attributes) {
            $poolName = $attributes[0]['name'] ?? $id;
            $this->addToCollector($id, $poolName, $container);
        }
    }
    private function addToCollector(string $id, string $name, \_PhpScoperfb0714773dc5\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        $definition = $container->getDefinition($id);
        if ($definition->isAbstract()) {
            return;
        }
        $collectorDefinition = $container->getDefinition($this->dataCollectorCacheId);
        $recorder = new \_PhpScoperfb0714773dc5\Symfony\Component\DependencyInjection\Definition(\is_subclass_of($definition->getClass(), \_PhpScoperfb0714773dc5\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class) ? \_PhpScoperfb0714773dc5\Symfony\Component\Cache\Adapter\TraceableTagAwareAdapter::class : \_PhpScoperfb0714773dc5\Symfony\Component\Cache\Adapter\TraceableAdapter::class);
        $recorder->setTags($definition->getTags());
        if (!$definition->isPublic() || !$definition->isPrivate()) {
            $recorder->setPublic($definition->isPublic());
        }
        $recorder->setArguments([new \_PhpScoperfb0714773dc5\Symfony\Component\DependencyInjection\Reference($innerId = $id . $this->cachePoolRecorderInnerSuffix)]);
        $definition->setTags([]);
        $definition->setPublic(\false);
        $container->setDefinition($innerId, $definition);
        $container->setDefinition($id, $recorder);
        // Tell the collector to add the new instance
        $collectorDefinition->addMethodCall('addInstance', [$name, new \_PhpScoperfb0714773dc5\Symfony\Component\DependencyInjection\Reference($id)]);
        $collectorDefinition->setPublic(\false);
    }
}
