<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopere205696a9dd6\Symfony\Component\Cache\Adapter;

use _PhpScopere205696a9dd6\Symfony\Component\Cache\Marshaller\DefaultMarshaller;
use _PhpScopere205696a9dd6\Symfony\Component\Cache\Marshaller\MarshallerInterface;
use _PhpScopere205696a9dd6\Symfony\Component\Cache\PruneableInterface;
use _PhpScopere205696a9dd6\Symfony\Component\Cache\Traits\FilesystemTrait;
class FilesystemAdapter extends \_PhpScopere205696a9dd6\Symfony\Component\Cache\Adapter\AbstractAdapter implements \_PhpScopere205696a9dd6\Symfony\Component\Cache\PruneableInterface
{
    use FilesystemTrait;
    public function __construct(string $namespace = '', int $defaultLifetime = 0, string $directory = null, \_PhpScopere205696a9dd6\Symfony\Component\Cache\Marshaller\MarshallerInterface $marshaller = null)
    {
        $this->marshaller = $marshaller ?? new \_PhpScopere205696a9dd6\Symfony\Component\Cache\Marshaller\DefaultMarshaller();
        parent::__construct('', $defaultLifetime);
        $this->init($namespace, $directory);
    }
}
