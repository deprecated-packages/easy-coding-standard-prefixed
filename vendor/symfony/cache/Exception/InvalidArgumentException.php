<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperdaf95aff095b\Symfony\Component\Cache\Exception;

use _PhpScoperdaf95aff095b\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScoperdaf95aff095b\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperdaf95aff095b\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperdaf95aff095b\Psr\Cache\InvalidArgumentException, \_PhpScoperdaf95aff095b\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperdaf95aff095b\Psr\Cache\InvalidArgumentException
    {
    }
}
