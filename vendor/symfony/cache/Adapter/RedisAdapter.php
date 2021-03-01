<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc4ea0f0bd23f\Symfony\Component\Cache\Adapter;

use _PhpScoperc4ea0f0bd23f\Symfony\Component\Cache\Marshaller\MarshallerInterface;
use _PhpScoperc4ea0f0bd23f\Symfony\Component\Cache\Traits\RedisTrait;
class RedisAdapter extends \_PhpScoperc4ea0f0bd23f\Symfony\Component\Cache\Adapter\AbstractAdapter
{
    use RedisTrait;
    /**
     * @param \Redis|\RedisArray|\RedisCluster|\Predis\ClientInterface $redisClient     The redis client
     * @param string                                                   $namespace       The default namespace
     * @param int                                                      $defaultLifetime The default lifetime
     */
    public function __construct($redisClient, string $namespace = '', int $defaultLifetime = 0, \_PhpScoperc4ea0f0bd23f\Symfony\Component\Cache\Marshaller\MarshallerInterface $marshaller = null)
    {
        $this->init($redisClient, $namespace, $defaultLifetime, $marshaller);
    }
}
