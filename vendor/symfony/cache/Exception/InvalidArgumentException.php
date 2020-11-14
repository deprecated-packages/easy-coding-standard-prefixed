<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperecb978830f1e\Symfony\Component\Cache\Exception;

use _PhpScoperecb978830f1e\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScoperecb978830f1e\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperecb978830f1e\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperecb978830f1e\Psr\Cache\InvalidArgumentException, \_PhpScoperecb978830f1e\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperecb978830f1e\Psr\Cache\InvalidArgumentException
    {
    }
}
