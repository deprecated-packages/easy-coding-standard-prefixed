<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc83f84c90b60\Symfony\Component\Cache\Exception;

use _PhpScoperc83f84c90b60\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScoperc83f84c90b60\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperc83f84c90b60\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperc83f84c90b60\Psr\Cache\InvalidArgumentException, \_PhpScoperc83f84c90b60\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperc83f84c90b60\Psr\Cache\InvalidArgumentException
    {
    }
}
