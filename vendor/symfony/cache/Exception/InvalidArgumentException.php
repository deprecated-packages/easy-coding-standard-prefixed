<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper246d3630afdd\Symfony\Component\Cache\Exception;

use _PhpScoper246d3630afdd\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScoper246d3630afdd\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoper246d3630afdd\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoper246d3630afdd\Psr\Cache\InvalidArgumentException, \_PhpScoper246d3630afdd\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoper246d3630afdd\Psr\Cache\InvalidArgumentException
    {
    }
}
