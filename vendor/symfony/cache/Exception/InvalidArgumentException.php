<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperd4c5032f0671\Symfony\Component\Cache\Exception;

use _PhpScoperd4c5032f0671\Psr\Cache\InvalidArgumentException as Psr6CacheInterface;
use _PhpScoperd4c5032f0671\Psr\SimpleCache\InvalidArgumentException as SimpleCacheInterface;
if (\interface_exists(\_PhpScoperd4c5032f0671\Psr\SimpleCache\InvalidArgumentException::class)) {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperd4c5032f0671\Psr\Cache\InvalidArgumentException, \_PhpScoperd4c5032f0671\Psr\SimpleCache\InvalidArgumentException
    {
    }
} else {
    class InvalidArgumentException extends \InvalidArgumentException implements \_PhpScoperd4c5032f0671\Psr\Cache\InvalidArgumentException
    {
    }
}
