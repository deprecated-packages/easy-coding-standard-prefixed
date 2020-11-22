<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper5ade29b97028\Symfony\Component\Cache\Adapter;

use _PhpScoper5ade29b97028\Psr\Cache\CacheItemInterface;
use _PhpScoper5ade29b97028\Psr\Cache\CacheItemPoolInterface;
use _PhpScoper5ade29b97028\Symfony\Component\Cache\CacheItem;
use _PhpScoper5ade29b97028\Symfony\Component\Cache\Exception\InvalidArgumentException;
use _PhpScoper5ade29b97028\Symfony\Component\Cache\PruneableInterface;
use _PhpScoper5ade29b97028\Symfony\Component\Cache\ResettableInterface;
use _PhpScoper5ade29b97028\Symfony\Component\Cache\Traits\ContractsTrait;
use _PhpScoper5ade29b97028\Symfony\Contracts\Cache\CacheInterface;
use _PhpScoper5ade29b97028\Symfony\Contracts\Service\ResetInterface;
/**
 * Chains several adapters together.
 *
 * Cached items are fetched from the first adapter having them in its data store.
 * They are saved and deleted in all adapters at once.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class ChainAdapter implements \_PhpScoper5ade29b97028\Symfony\Component\Cache\Adapter\AdapterInterface, \_PhpScoper5ade29b97028\Symfony\Contracts\Cache\CacheInterface, \_PhpScoper5ade29b97028\Symfony\Component\Cache\PruneableInterface, \_PhpScoper5ade29b97028\Symfony\Component\Cache\ResettableInterface
{
    use ContractsTrait;
    private $adapters = [];
    private $adapterCount;
    private $syncItem;
    /**
     * @param CacheItemPoolInterface[] $adapters        The ordered list of adapters used to fetch cached items
     * @param int                      $defaultLifetime The default lifetime of items propagated from lower adapters to upper ones
     */
    public function __construct(array $adapters, int $defaultLifetime = 0)
    {
        if (!$adapters) {
            throw new \_PhpScoper5ade29b97028\Symfony\Component\Cache\Exception\InvalidArgumentException('At least one adapter must be specified.');
        }
        foreach ($adapters as $adapter) {
            if (!$adapter instanceof \_PhpScoper5ade29b97028\Psr\Cache\CacheItemPoolInterface) {
                throw new \_PhpScoper5ade29b97028\Symfony\Component\Cache\Exception\InvalidArgumentException(\sprintf('The class "%s" does not implement the "%s" interface.', \get_class($adapter), \_PhpScoper5ade29b97028\Psr\Cache\CacheItemPoolInterface::class));
            }
            if ($adapter instanceof \_PhpScoper5ade29b97028\Symfony\Component\Cache\Adapter\AdapterInterface) {
                $this->adapters[] = $adapter;
            } else {
                $this->adapters[] = new \_PhpScoper5ade29b97028\Symfony\Component\Cache\Adapter\ProxyAdapter($adapter);
            }
        }
        $this->adapterCount = \count($this->adapters);
        $this->syncItem = \Closure::bind(static function ($sourceItem, $item) use($defaultLifetime) {
            $item->value = $sourceItem->value;
            $item->expiry = $sourceItem->expiry;
            $item->isHit = $sourceItem->isHit;
            $item->metadata = $sourceItem->metadata;
            $sourceItem->isTaggable = \false;
            unset($sourceItem->metadata[\_PhpScoper5ade29b97028\Symfony\Component\Cache\CacheItem::METADATA_TAGS]);
            if (0 < $sourceItem->defaultLifetime && $sourceItem->defaultLifetime < $defaultLifetime) {
                $defaultLifetime = $sourceItem->defaultLifetime;
            }
            if (0 < $defaultLifetime && ($item->defaultLifetime <= 0 || $defaultLifetime < $item->defaultLifetime)) {
                $item->defaultLifetime = $defaultLifetime;
            }
            return $item;
        }, null, \_PhpScoper5ade29b97028\Symfony\Component\Cache\CacheItem::class);
    }
    /**
     * {@inheritdoc}
     */
    public function get(string $key, callable $callback, float $beta = null, array &$metadata = null)
    {
        $lastItem = null;
        $i = 0;
        $wrap = function (\_PhpScoper5ade29b97028\Symfony\Component\Cache\CacheItem $item = null) use($key, $callback, $beta, &$wrap, &$i, &$lastItem, &$metadata) {
            $adapter = $this->adapters[$i];
            if (isset($this->adapters[++$i])) {
                $callback = $wrap;
                $beta = \INF === $beta ? \INF : 0;
            }
            if ($adapter instanceof \_PhpScoper5ade29b97028\Symfony\Contracts\Cache\CacheInterface) {
                $value = $adapter->get($key, $callback, $beta, $metadata);
            } else {
                $value = $this->doGet($adapter, $key, $callback, $beta, $metadata);
            }
            if (null !== $item) {
                ($this->syncItem)($lastItem = $lastItem ?? $item, $item);
            }
            return $value;
        };
        return $wrap();
    }
    /**
     * {@inheritdoc}
     */
    public function getItem($key)
    {
        $syncItem = $this->syncItem;
        $misses = [];
        foreach ($this->adapters as $i => $adapter) {
            $item = $adapter->getItem($key);
            if ($item->isHit()) {
                while (0 <= --$i) {
                    $this->adapters[$i]->save($syncItem($item, $misses[$i]));
                }
                return $item;
            }
            $misses[$i] = $item;
        }
        return $item;
    }
    /**
     * {@inheritdoc}
     */
    public function getItems(array $keys = [])
    {
        return $this->generateItems($this->adapters[0]->getItems($keys), 0);
    }
    private function generateItems(iterable $items, int $adapterIndex)
    {
        $missing = [];
        $misses = [];
        $nextAdapterIndex = $adapterIndex + 1;
        $nextAdapter = isset($this->adapters[$nextAdapterIndex]) ? $this->adapters[$nextAdapterIndex] : null;
        foreach ($items as $k => $item) {
            if (!$nextAdapter || $item->isHit()) {
                (yield $k => $item);
            } else {
                $missing[] = $k;
                $misses[$k] = $item;
            }
        }
        if ($missing) {
            $syncItem = $this->syncItem;
            $adapter = $this->adapters[$adapterIndex];
            $items = $this->generateItems($nextAdapter->getItems($missing), $nextAdapterIndex);
            foreach ($items as $k => $item) {
                if ($item->isHit()) {
                    $adapter->save($syncItem($item, $misses[$k]));
                }
                (yield $k => $item);
            }
        }
    }
    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    public function hasItem($key)
    {
        foreach ($this->adapters as $adapter) {
            if ($adapter->hasItem($key)) {
                return \true;
            }
        }
        return \false;
    }
    /**
     * {@inheritdoc}
     *
     * @param string $prefix
     *
     * @return bool
     */
    public function clear()
    {
        $prefix = 0 < \func_num_args() ? (string) \func_get_arg(0) : '';
        $cleared = \true;
        $i = $this->adapterCount;
        while ($i--) {
            if ($this->adapters[$i] instanceof \_PhpScoper5ade29b97028\Symfony\Component\Cache\Adapter\AdapterInterface) {
                $cleared = $this->adapters[$i]->clear($prefix) && $cleared;
            } else {
                $cleared = $this->adapters[$i]->clear() && $cleared;
            }
        }
        return $cleared;
    }
    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    public function deleteItem($key)
    {
        $deleted = \true;
        $i = $this->adapterCount;
        while ($i--) {
            $deleted = $this->adapters[$i]->deleteItem($key) && $deleted;
        }
        return $deleted;
    }
    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    public function deleteItems(array $keys)
    {
        $deleted = \true;
        $i = $this->adapterCount;
        while ($i--) {
            $deleted = $this->adapters[$i]->deleteItems($keys) && $deleted;
        }
        return $deleted;
    }
    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    public function save(\_PhpScoper5ade29b97028\Psr\Cache\CacheItemInterface $item)
    {
        $saved = \true;
        $i = $this->adapterCount;
        while ($i--) {
            $saved = $this->adapters[$i]->save($item) && $saved;
        }
        return $saved;
    }
    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    public function saveDeferred(\_PhpScoper5ade29b97028\Psr\Cache\CacheItemInterface $item)
    {
        $saved = \true;
        $i = $this->adapterCount;
        while ($i--) {
            $saved = $this->adapters[$i]->saveDeferred($item) && $saved;
        }
        return $saved;
    }
    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    public function commit()
    {
        $committed = \true;
        $i = $this->adapterCount;
        while ($i--) {
            $committed = $this->adapters[$i]->commit() && $committed;
        }
        return $committed;
    }
    /**
     * {@inheritdoc}
     */
    public function prune()
    {
        $pruned = \true;
        foreach ($this->adapters as $adapter) {
            if ($adapter instanceof \_PhpScoper5ade29b97028\Symfony\Component\Cache\PruneableInterface) {
                $pruned = $adapter->prune() && $pruned;
            }
        }
        return $pruned;
    }
    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        foreach ($this->adapters as $adapter) {
            if ($adapter instanceof \_PhpScoper5ade29b97028\Symfony\Contracts\Service\ResetInterface) {
                $adapter->reset();
            }
        }
    }
}
