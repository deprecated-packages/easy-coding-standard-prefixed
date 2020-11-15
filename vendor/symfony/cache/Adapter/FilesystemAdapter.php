<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScopercb576ca159b5\Symfony\Component\Cache\Adapter;

use _PhpScopercb576ca159b5\Symfony\Component\Cache\Marshaller\DefaultMarshaller;
use _PhpScopercb576ca159b5\Symfony\Component\Cache\Marshaller\MarshallerInterface;
use _PhpScopercb576ca159b5\Symfony\Component\Cache\PruneableInterface;
use _PhpScopercb576ca159b5\Symfony\Component\Cache\Traits\FilesystemTrait;
class FilesystemAdapter extends \_PhpScopercb576ca159b5\Symfony\Component\Cache\Adapter\AbstractAdapter implements \_PhpScopercb576ca159b5\Symfony\Component\Cache\PruneableInterface
{
    use FilesystemTrait;
    public function __construct(string $namespace = '', int $defaultLifetime = 0, string $directory = null, \_PhpScopercb576ca159b5\Symfony\Component\Cache\Marshaller\MarshallerInterface $marshaller = null)
    {
        $this->marshaller = $marshaller ?? new \_PhpScopercb576ca159b5\Symfony\Component\Cache\Marshaller\DefaultMarshaller();
        parent::__construct('', $defaultLifetime);
        $this->init($namespace, $directory);
    }
}
