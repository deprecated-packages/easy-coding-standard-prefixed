<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopera09818bc50da\Symfony\Component\Cache\Simple;

use _PhpScopera09818bc50da\Symfony\Component\Cache\Traits\ApcuTrait;
@\trigger_error(\sprintf('The "%s" class is deprecated since Symfony 4.3, use "%s" and type-hint for "%s" instead.', \_PhpScopera09818bc50da\Symfony\Component\Cache\Simple\ApcuCache::class, \_PhpScopera09818bc50da\Symfony\Component\Cache\Simple\ApcuAdapter::class, \_PhpScopera09818bc50da\Symfony\Component\Cache\Simple\CacheInterface::class), \E_USER_DEPRECATED);
/**
 * @deprecated since Symfony 4.3, use ApcuAdapter and type-hint for CacheInterface instead.
 */
class ApcuCache extends \_PhpScopera09818bc50da\Symfony\Component\Cache\Simple\AbstractCache
{
    use ApcuTrait;
    public function __construct(string $namespace = '', int $defaultLifetime = 0, string $version = null)
    {
        $this->init($namespace, $defaultLifetime, $version);
    }
}
