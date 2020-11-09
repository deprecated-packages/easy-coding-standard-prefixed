<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperf5f75c22067b\Symfony\Component\Cache\DependencyInjection;

use _PhpScoperf5f75c22067b\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface;
use _PhpScoperf5f75c22067b\Symfony\Component\Cache\Adapter\TraceableAdapter;
use _PhpScoperf5f75c22067b\Symfony\Component\Cache\Adapter\TraceableTagAwareAdapter;
use _PhpScoperf5f75c22067b\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoperf5f75c22067b\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoperf5f75c22067b\Symfony\Component\DependencyInjection\Definition;
use _PhpScoperf5f75c22067b\Symfony\Component\DependencyInjection\Reference;
/**
 * Inject a data collector to all the cache services to be able to get detailed statistics.
 *
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 */
class CacheCollectorPass implements \_PhpScoperf5f75c22067b\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
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
    public function process(\_PhpScoperf5f75c22067b\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        if (!$container->hasDefinition($this->dataCollectorCacheId)) {
            return;
        }
        $collectorDefinition = $container->getDefinition($this->dataCollectorCacheId);
        foreach ($container->findTaggedServiceIds($this->cachePoolTag) as $id => $attributes) {
            $definition = $container->getDefinition($id);
            if ($definition->isAbstract()) {
                continue;
            }
            $recorder = new \_PhpScoperf5f75c22067b\Symfony\Component\DependencyInjection\Definition(\is_subclass_of($definition->getClass(), \_PhpScoperf5f75c22067b\Symfony\Component\Cache\Adapter\TagAwareAdapterInterface::class) ? \_PhpScoperf5f75c22067b\Symfony\Component\Cache\Adapter\TraceableTagAwareAdapter::class : \_PhpScoperf5f75c22067b\Symfony\Component\Cache\Adapter\TraceableAdapter::class);
            $recorder->setTags($definition->getTags());
            $recorder->setPublic($definition->isPublic());
            $recorder->setArguments([new \_PhpScoperf5f75c22067b\Symfony\Component\DependencyInjection\Reference($innerId = $id . $this->cachePoolRecorderInnerSuffix)]);
            $definition->setTags([]);
            $definition->setPublic(\false);
            $container->setDefinition($innerId, $definition);
            $container->setDefinition($id, $recorder);
            // Tell the collector to add the new instance
            $collectorDefinition->addMethodCall('addInstance', [$id, new \_PhpScoperf5f75c22067b\Symfony\Component\DependencyInjection\Reference($id)]);
            $collectorDefinition->setPublic(\false);
        }
    }
}
