<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper18bd934c069f\Symfony\Component\Cache\Simple;

use _PhpScoper18bd934c069f\Psr\SimpleCache\CacheInterface as Psr16CacheInterface;
use _PhpScoper18bd934c069f\Symfony\Component\Cache\Adapter\NullAdapter;
use _PhpScoper18bd934c069f\Symfony\Contracts\Cache\CacheInterface;
@\trigger_error(\sprintf('The "%s" class is deprecated since Symfony 4.3, use "%s" and type-hint for "%s" instead.', \_PhpScoper18bd934c069f\Symfony\Component\Cache\Simple\NullCache::class, \_PhpScoper18bd934c069f\Symfony\Component\Cache\Adapter\NullAdapter::class, \_PhpScoper18bd934c069f\Symfony\Contracts\Cache\CacheInterface::class), \E_USER_DEPRECATED);
/**
 * @deprecated since Symfony 4.3, use NullAdapter and type-hint for CacheInterface instead.
 */
class NullCache implements \_PhpScoper18bd934c069f\Psr\SimpleCache\CacheInterface
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
