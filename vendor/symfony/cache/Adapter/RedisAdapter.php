<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperfd70a7e8e84f\Symfony\Component\Cache\Adapter;

use _PhpScoperfd70a7e8e84f\Symfony\Component\Cache\Marshaller\MarshallerInterface;
use _PhpScoperfd70a7e8e84f\Symfony\Component\Cache\Traits\RedisTrait;
class RedisAdapter extends \_PhpScoperfd70a7e8e84f\Symfony\Component\Cache\Adapter\AbstractAdapter
{
    use RedisTrait;
    /**
     * @param \Redis|\RedisArray|\RedisCluster|\Predis\ClientInterface $redisClient     The redis client
     * @param string                                                   $namespace       The default namespace
     * @param int                                                      $defaultLifetime The default lifetime
     */
    public function __construct($redisClient, string $namespace = '', int $defaultLifetime = 0, \_PhpScoperfd70a7e8e84f\Symfony\Component\Cache\Marshaller\MarshallerInterface $marshaller = null)
    {
        $this->init($redisClient, $namespace, $defaultLifetime, $marshaller);
    }
}
