<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperedc2e0c967db\Symfony\Component\Cache\Simple;

use _PhpScoperedc2e0c967db\Symfony\Component\Cache\Adapter\RedisAdapter;
use _PhpScoperedc2e0c967db\Symfony\Component\Cache\Marshaller\MarshallerInterface;
use _PhpScoperedc2e0c967db\Symfony\Component\Cache\Traits\RedisTrait;
use _PhpScoperedc2e0c967db\Symfony\Contracts\Cache\CacheInterface;
@\trigger_error(\sprintf('The "%s" class is deprecated since Symfony 4.3, use "%s" and type-hint for "%s" instead.', \_PhpScoperedc2e0c967db\Symfony\Component\Cache\Simple\RedisCache::class, \_PhpScoperedc2e0c967db\Symfony\Component\Cache\Adapter\RedisAdapter::class, \_PhpScoperedc2e0c967db\Symfony\Contracts\Cache\CacheInterface::class), \E_USER_DEPRECATED);
/**
 * @deprecated since Symfony 4.3, use RedisAdapter and type-hint for CacheInterface instead.
 */
class RedisCache extends \_PhpScoperedc2e0c967db\Symfony\Component\Cache\Simple\AbstractCache
{
    use RedisTrait;
    /**
     * @param \Redis|\RedisArray|\RedisCluster|\Predis\ClientInterface $redisClient
     */
    public function __construct($redisClient, string $namespace = '', int $defaultLifetime = 0, \_PhpScoperedc2e0c967db\Symfony\Component\Cache\Marshaller\MarshallerInterface $marshaller = null)
    {
        $this->init($redisClient, $namespace, $defaultLifetime, $marshaller);
    }
}
