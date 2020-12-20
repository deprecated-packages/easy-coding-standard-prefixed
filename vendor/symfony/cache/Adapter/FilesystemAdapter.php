<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperba24099fc6fd\Symfony\Component\Cache\Adapter;

use _PhpScoperba24099fc6fd\Symfony\Component\Cache\Marshaller\DefaultMarshaller;
use _PhpScoperba24099fc6fd\Symfony\Component\Cache\Marshaller\MarshallerInterface;
use _PhpScoperba24099fc6fd\Symfony\Component\Cache\PruneableInterface;
use _PhpScoperba24099fc6fd\Symfony\Component\Cache\Traits\FilesystemTrait;
class FilesystemAdapter extends \_PhpScoperba24099fc6fd\Symfony\Component\Cache\Adapter\AbstractAdapter implements \_PhpScoperba24099fc6fd\Symfony\Component\Cache\PruneableInterface
{
    use FilesystemTrait;
    public function __construct(string $namespace = '', int $defaultLifetime = 0, string $directory = null, \_PhpScoperba24099fc6fd\Symfony\Component\Cache\Marshaller\MarshallerInterface $marshaller = null)
    {
        $this->marshaller = $marshaller ?? new \_PhpScoperba24099fc6fd\Symfony\Component\Cache\Marshaller\DefaultMarshaller();
        parent::__construct('', $defaultLifetime);
        $this->init($namespace, $directory);
    }
}
