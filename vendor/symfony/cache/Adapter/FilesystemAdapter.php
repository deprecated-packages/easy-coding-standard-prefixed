<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperfb0714773dc5\Symfony\Component\Cache\Adapter;

use _PhpScoperfb0714773dc5\Symfony\Component\Cache\Marshaller\DefaultMarshaller;
use _PhpScoperfb0714773dc5\Symfony\Component\Cache\Marshaller\MarshallerInterface;
use _PhpScoperfb0714773dc5\Symfony\Component\Cache\PruneableInterface;
use _PhpScoperfb0714773dc5\Symfony\Component\Cache\Traits\FilesystemTrait;
class FilesystemAdapter extends \_PhpScoperfb0714773dc5\Symfony\Component\Cache\Adapter\AbstractAdapter implements \_PhpScoperfb0714773dc5\Symfony\Component\Cache\PruneableInterface
{
    use FilesystemTrait;
    public function __construct(string $namespace = '', int $defaultLifetime = 0, string $directory = null, \_PhpScoperfb0714773dc5\Symfony\Component\Cache\Marshaller\MarshallerInterface $marshaller = null)
    {
        $this->marshaller = $marshaller ?? new \_PhpScoperfb0714773dc5\Symfony\Component\Cache\Marshaller\DefaultMarshaller();
        parent::__construct('', $defaultLifetime);
        $this->init($namespace, $directory);
    }
}
