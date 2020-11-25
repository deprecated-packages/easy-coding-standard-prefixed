<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperaac5f7c652e4\Symfony\Component\Cache\Simple;

use _PhpScoperaac5f7c652e4\Symfony\Component\Cache\Adapter\FilesystemAdapter;
use _PhpScoperaac5f7c652e4\Symfony\Component\Cache\Marshaller\DefaultMarshaller;
use _PhpScoperaac5f7c652e4\Symfony\Component\Cache\Marshaller\MarshallerInterface;
use _PhpScoperaac5f7c652e4\Symfony\Component\Cache\PruneableInterface;
use _PhpScoperaac5f7c652e4\Symfony\Component\Cache\Traits\FilesystemTrait;
use _PhpScoperaac5f7c652e4\Symfony\Contracts\Cache\CacheInterface;
@\trigger_error(\sprintf('The "%s" class is deprecated since Symfony 4.3, use "%s" and type-hint for "%s" instead.', \_PhpScoperaac5f7c652e4\Symfony\Component\Cache\Simple\FilesystemCache::class, \_PhpScoperaac5f7c652e4\Symfony\Component\Cache\Adapter\FilesystemAdapter::class, \_PhpScoperaac5f7c652e4\Symfony\Contracts\Cache\CacheInterface::class), \E_USER_DEPRECATED);
/**
 * @deprecated since Symfony 4.3, use FilesystemAdapter and type-hint for CacheInterface instead.
 */
class FilesystemCache extends \_PhpScoperaac5f7c652e4\Symfony\Component\Cache\Simple\AbstractCache implements \_PhpScoperaac5f7c652e4\Symfony\Component\Cache\PruneableInterface
{
    use FilesystemTrait;
    public function __construct(string $namespace = '', int $defaultLifetime = 0, string $directory = null, \_PhpScoperaac5f7c652e4\Symfony\Component\Cache\Marshaller\MarshallerInterface $marshaller = null)
    {
        $this->marshaller = $marshaller ?? new \_PhpScoperaac5f7c652e4\Symfony\Component\Cache\Marshaller\DefaultMarshaller();
        parent::__construct('', $defaultLifetime);
        $this->init($namespace, $directory);
    }
}
