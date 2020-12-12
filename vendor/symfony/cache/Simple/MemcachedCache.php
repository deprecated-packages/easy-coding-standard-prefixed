<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper11a6395266c4\Symfony\Component\Cache\Simple;

use _PhpScoper11a6395266c4\Symfony\Component\Cache\Adapter\MemcachedAdapter;
use _PhpScoper11a6395266c4\Symfony\Component\Cache\Marshaller\MarshallerInterface;
use _PhpScoper11a6395266c4\Symfony\Component\Cache\Traits\MemcachedTrait;
use _PhpScoper11a6395266c4\Symfony\Contracts\Cache\CacheInterface;
@\trigger_error(\sprintf('The "%s" class is deprecated since Symfony 4.3, use "%s" and type-hint for "%s" instead.', \_PhpScoper11a6395266c4\Symfony\Component\Cache\Simple\MemcachedCache::class, \_PhpScoper11a6395266c4\Symfony\Component\Cache\Adapter\MemcachedAdapter::class, \_PhpScoper11a6395266c4\Symfony\Contracts\Cache\CacheInterface::class), \E_USER_DEPRECATED);
/**
 * @deprecated since Symfony 4.3, use MemcachedAdapter and type-hint for CacheInterface instead.
 */
class MemcachedCache extends \_PhpScoper11a6395266c4\Symfony\Component\Cache\Simple\AbstractCache
{
    use MemcachedTrait;
    protected $maxIdLength = 250;
    public function __construct(\Memcached $client, string $namespace = '', int $defaultLifetime = 0, \_PhpScoper11a6395266c4\Symfony\Component\Cache\Marshaller\MarshallerInterface $marshaller = null)
    {
        $this->init($client, $namespace, $defaultLifetime, $marshaller);
    }
}
