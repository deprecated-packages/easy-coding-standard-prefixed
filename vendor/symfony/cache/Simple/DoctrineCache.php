<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperad4605bb9267\Symfony\Component\Cache\Simple;

use _PhpScoperad4605bb9267\Doctrine\Common\Cache\CacheProvider;
use _PhpScoperad4605bb9267\Symfony\Component\Cache\Adapter\DoctrineAdapter;
use _PhpScoperad4605bb9267\Symfony\Component\Cache\Traits\DoctrineTrait;
use _PhpScoperad4605bb9267\Symfony\Contracts\Cache\CacheInterface;
@\trigger_error(\sprintf('The "%s" class is deprecated since Symfony 4.3, use "%s" and type-hint for "%s" instead.', \_PhpScoperad4605bb9267\Symfony\Component\Cache\Simple\DoctrineCache::class, \_PhpScoperad4605bb9267\Symfony\Component\Cache\Adapter\DoctrineAdapter::class, \_PhpScoperad4605bb9267\Symfony\Contracts\Cache\CacheInterface::class), \E_USER_DEPRECATED);
/**
 * @deprecated since Symfony 4.3, use DoctrineAdapter and type-hint for CacheInterface instead.
 */
class DoctrineCache extends \_PhpScoperad4605bb9267\Symfony\Component\Cache\Simple\AbstractCache
{
    use DoctrineTrait;
    public function __construct(\_PhpScoperad4605bb9267\Doctrine\Common\Cache\CacheProvider $provider, string $namespace = '', int $defaultLifetime = 0)
    {
        parent::__construct('', $defaultLifetime);
        $this->provider = $provider;
        $provider->setNamespace($namespace);
    }
}
