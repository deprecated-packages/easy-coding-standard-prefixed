<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper91c59a2f52e1\Symfony\Component\Cache\DependencyInjection;

use _PhpScoper91c59a2f52e1\Symfony\Component\Cache\PruneableInterface;
use _PhpScoper91c59a2f52e1\Symfony\Component\DependencyInjection\Argument\IteratorArgument;
use _PhpScoper91c59a2f52e1\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use _PhpScoper91c59a2f52e1\Symfony\Component\DependencyInjection\ContainerBuilder;
use _PhpScoper91c59a2f52e1\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use _PhpScoper91c59a2f52e1\Symfony\Component\DependencyInjection\Reference;
/**
 * @author Rob Frawley 2nd <rmf@src.run>
 */
class CachePoolPrunerPass implements CompilerPassInterface
{
    private $cacheCommandServiceId;
    private $cachePoolTag;
    public function __construct(string $cacheCommandServiceId = 'console.command.cache_pool_prune', string $cachePoolTag = 'cache.pool')
    {
        $this->cacheCommandServiceId = $cacheCommandServiceId;
        $this->cachePoolTag = $cachePoolTag;
    }
    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder $container)
    {
        if (!$container->hasDefinition($this->cacheCommandServiceId)) {
            return;
        }
        $services = [];
        foreach ($container->findTaggedServiceIds($this->cachePoolTag) as $id => $tags) {
            $class = $container->getParameterBag()->resolveValue($container->getDefinition($id)->getClass());
            if (!($reflection = $container->getReflectionClass($class))) {
                throw new InvalidArgumentException(\sprintf('Class "%s" used for service "%s" cannot be found.', $class, $id));
            }
            if ($reflection->implementsInterface(PruneableInterface::class)) {
                $services[$id] = new Reference($id);
            }
        }
        $container->getDefinition($this->cacheCommandServiceId)->replaceArgument(0, new IteratorArgument($services));
    }
}
