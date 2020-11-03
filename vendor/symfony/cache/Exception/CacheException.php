<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper5928e324b45e\Symfony\Component\Cache\Exception;

use _PhpScoper5928e324b45e\Psr\Cache\CacheException as Psr6CacheInterface;
use _PhpScoper5928e324b45e\Psr\SimpleCache\CacheException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoper5928e324b45e\Psr\SimpleCache\CacheException::class)) {
    class CacheException extends \Exception implements \_PhpScoper5928e324b45e\Psr\Cache\CacheException, \_PhpScoper5928e324b45e\Psr\SimpleCache\CacheException
    {
    }
} else {
    class CacheException extends \Exception implements \_PhpScoper5928e324b45e\Psr\Cache\CacheException
    {
    }
}
