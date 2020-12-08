<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperf3f1be0d8a30\Symfony\Component\Cache\Simple;

use _PhpScoperf3f1be0d8a30\Psr\SimpleCache\CacheInterface as Psr16CacheInterface;
use _PhpScoperf3f1be0d8a30\Symfony\Component\Cache\Adapter\NullAdapter;
use _PhpScoperf3f1be0d8a30\Symfony\Contracts\Cache\CacheInterface;
@\trigger_error(\sprintf('The "%s" class is deprecated since Symfony 4.3, use "%s" and type-hint for "%s" instead.', \_PhpScoperf3f1be0d8a30\Symfony\Component\Cache\Simple\NullCache::class, \_PhpScoperf3f1be0d8a30\Symfony\Component\Cache\Adapter\NullAdapter::class, \_PhpScoperf3f1be0d8a30\Symfony\Contracts\Cache\CacheInterface::class), \E_USER_DEPRECATED);
/**
 * @deprecated since Symfony 4.3, use NullAdapter and type-hint for CacheInterface instead.
 */
class NullCache implements \_PhpScoperf3f1be0d8a30\Psr\SimpleCache\CacheInterface
{
    /**
     * {@inheritdoc}
     */
    public function get($key, $default = null)
    {
        return $default;
    }
    /**
     * {@inheritdoc}
     *
     * @return iterable
     */
    public function getMultiple($keys, $default = null)
    {
        foreach ($keys as $key) {
            (yield $key => $default);
        }
    }
    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    public function has($key)
    {
        return \false;
    }
    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    public function clear()
    {
        return \true;
    }
    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    public function delete($key)
    {
        return \true;
    }
    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    public function deleteMultiple($keys)
    {
        return \true;
    }
    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    public function set($key, $value, $ttl = null)
    {
        return \false;
    }
    /**
     * {@inheritdoc}
     *
     * @return bool
     */
    public function setMultiple($values, $ttl = null)
    {
        return \false;
    }
}
