<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperaa402dd1b1f1\Symfony\Component\Cache\Adapter;

use _PhpScoperaa402dd1b1f1\Symfony\Component\Cache\Exception\CacheException;
use _PhpScoperaa402dd1b1f1\Symfony\Component\Cache\PruneableInterface;
use _PhpScoperaa402dd1b1f1\Symfony\Component\Cache\Traits\PhpFilesTrait;
class PhpFilesAdapter extends \_PhpScoperaa402dd1b1f1\Symfony\Component\Cache\Adapter\AbstractAdapter implements \_PhpScoperaa402dd1b1f1\Symfony\Component\Cache\PruneableInterface
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
