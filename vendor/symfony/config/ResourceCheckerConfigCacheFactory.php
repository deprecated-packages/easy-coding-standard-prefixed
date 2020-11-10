<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopere5e7dca8c031\Symfony\Component\Config;

/**
 * A ConfigCacheFactory implementation that validates the
 * cache with an arbitrary set of ResourceCheckers.
 *
 * @author Matthias Pigulla <mp@webfactory.de>
 */
class ResourceCheckerConfigCacheFactory implements \_PhpScopere5e7dca8c031\Symfony\Component\Config\ConfigCacheFactoryInterface
{
    private $resourceCheckers = [];
    /**
     * @param iterable|ResourceCheckerInterface[] $resourceCheckers
     */
    public function __construct(iterable $resourceCheckers = [])
    {
        $this->resourceCheckers = $resourceCheckers;
    }
    /**
     * {@inheritdoc}
     */
    public function cache($file, $callback)
    {
        if (!\is_callable($callback)) {
            throw new \InvalidArgumentException(\sprintf('Invalid type for callback argument. Expected callable, but got "%s".', \gettype($callback)));
        }
        $cache = new \_PhpScopere5e7dca8c031\Symfony\Component\Config\ResourceCheckerConfigCache($file, $this->resourceCheckers);
        if (!$cache->isFresh()) {
            $callback($cache);
        }
        return $cache;
    }
}
