<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper5f6e904600e7\Symfony\Component\Cache\Adapter;

use _PhpScoper5f6e904600e7\Psr\Cache\CacheItemPoolInterface;
use _PhpScoper5f6e904600e7\Symfony\Component\Cache\CacheItem;
// Help opcache.preload discover always-needed symbols
\class_exists(\_PhpScoper5f6e904600e7\Symfony\Component\Cache\CacheItem::class);
/**
 * Interface for adapters managing instances of Symfony's CacheItem.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
interface AdapterInterface extends \_PhpScoper5f6e904600e7\Psr\Cache\CacheItemPoolInterface
{
    /**
     * {@inheritdoc}
     *
     * @return CacheItem
     */
    public function getItem($key);
    /**
     * {@inheritdoc}
     *
     * @return \Traversable|CacheItem[]
     */
    public function getItems(array $keys = []);
    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    public function clear(string $prefix = '');
}
