<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopera1a51450b61d\Symfony\Component\Cache\Simple;

use _PhpScopera1a51450b61d\Symfony\Component\Cache\Adapter\PhpFilesAdapter;
use _PhpScopera1a51450b61d\Symfony\Component\Cache\Exception\CacheException;
use _PhpScopera1a51450b61d\Symfony\Component\Cache\PruneableInterface;
use _PhpScopera1a51450b61d\Symfony\Component\Cache\Traits\PhpFilesTrait;
use _PhpScopera1a51450b61d\Symfony\Contracts\Cache\CacheInterface;
@\trigger_error(\sprintf('The "%s" class is deprecated since Symfony 4.3, use "%s" and type-hint for "%s" instead.', \_PhpScopera1a51450b61d\Symfony\Component\Cache\Simple\PhpFilesCache::class, \_PhpScopera1a51450b61d\Symfony\Component\Cache\Adapter\PhpFilesAdapter::class, \_PhpScopera1a51450b61d\Symfony\Contracts\Cache\CacheInterface::class), \E_USER_DEPRECATED);
/**
 * @deprecated since Symfony 4.3, use PhpFilesAdapter and type-hint for CacheInterface instead.
 */
class PhpFilesCache extends \_PhpScopera1a51450b61d\Symfony\Component\Cache\Simple\AbstractCache implements \_PhpScopera1a51450b61d\Symfony\Component\Cache\PruneableInterface
{
    use PhpFilesTrait;
    /**
     * @param $appendOnly Set to `true` to gain extra performance when the items stored in this pool never expire.
     *                    Doing so is encouraged because it fits perfectly OPcache's memory model.
     *
     * @throws CacheException if OPcache is not enabled
     */
    public function __construct(string $namespace = '', int $defaultLifetime = 0, string $directory = null, bool $appendOnly = \false)
    {
        $this->appendOnly = $appendOnly;
        self::$startTime = self::$startTime ?? $_SERVER['REQUEST_TIME'] ?? \time();
        parent::__construct('', $defaultLifetime);
        $this->init($namespace, $directory);
        $this->includeHandler = static function ($type, $msg, $file, $line) {
            throw new \ErrorException($msg, 0, $type, $file, $line);
        };
    }
}
