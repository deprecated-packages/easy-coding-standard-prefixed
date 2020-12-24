<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopera37d6fb0b1ab\Symfony\Component\Cache\Adapter;

use _PhpScopera37d6fb0b1ab\Symfony\Component\Cache\Marshaller\DefaultMarshaller;
use _PhpScopera37d6fb0b1ab\Symfony\Component\Cache\Marshaller\MarshallerInterface;
use _PhpScopera37d6fb0b1ab\Symfony\Component\Cache\PruneableInterface;
use _PhpScopera37d6fb0b1ab\Symfony\Component\Cache\Traits\FilesystemTrait;
class FilesystemAdapter extends \_PhpScopera37d6fb0b1ab\Symfony\Component\Cache\Adapter\AbstractAdapter implements \_PhpScopera37d6fb0b1ab\Symfony\Component\Cache\PruneableInterface
{
    use FilesystemTrait;
    public function __construct(string $namespace = '', int $defaultLifetime = 0, string $directory = null, \_PhpScopera37d6fb0b1ab\Symfony\Component\Cache\Marshaller\MarshallerInterface $marshaller = null)
    {
        $this->marshaller = $marshaller ?? new \_PhpScopera37d6fb0b1ab\Symfony\Component\Cache\Marshaller\DefaultMarshaller();
        parent::__construct('', $defaultLifetime);
        $this->init($namespace, $directory);
    }
}
