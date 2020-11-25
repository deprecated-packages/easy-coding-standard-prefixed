<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperdc8fbcd7c69d\Symfony\Component\Cache\Simple;

use _PhpScoperdc8fbcd7c69d\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperdc8fbcd7c69d\Symfony\Component\Cache\Marshaller\DefaultMarshaller;
use _PhpScoperdc8fbcd7c69d\Symfony\Component\Cache\Marshaller\MarshallerInterface;
use _PhpScoperdc8fbcd7c69d\Symfony\Component\Cache\PruneableInterface;
use _PhpScoperdc8fbcd7c69d\Symfony\Component\Cache\Traits\FilesystemTrait;
use _PhpScoperdc8fbcd7c69d\Symfony\Contracts\Cache\CacheInterface;
@\trigger_error(\sprintf('The "%s" class is deprecated since Symfony 4.3, use "%s" and type-hint for "%s" instead.', \_PhpScoperdc8fbcd7c69d\Symfony\Component\Cache\Simple\FilesystemCache::class, \_PhpScoperdc8fbcd7c69d\Symfony\Component\Cache\Adapter\FilesystemAdapter::class, \_PhpScoperdc8fbcd7c69d\Symfony\Contracts\Cache\CacheInterface::class), \E_USER_DEPRECATED);
/**
 * @deprecated since Symfony 4.3, use FilesystemAdapter and type-hint for CacheInterface instead.
 */
class FilesystemCache extends \_PhpScoperdc8fbcd7c69d\Symfony\Component\Cache\Simple\AbstractCache implements \_PhpScoperdc8fbcd7c69d\Symfony\Component\Cache\PruneableInterface
{
    use FilesystemTrait;
    public function __construct(string $namespace = '', int $defaultLifetime = 0, string $directory = null, \_PhpScoperdc8fbcd7c69d\Symfony\Component\Cache\Marshaller\MarshallerInterface $marshaller = null)
    {
        $this->marshaller = $marshaller ?? new \_PhpScoperdc8fbcd7c69d\Symfony\Component\Cache\Marshaller\DefaultMarshaller();
        parent::__construct('', $defaultLifetime);
        $this->init($namespace, $directory);
    }
}
