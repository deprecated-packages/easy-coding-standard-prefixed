<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperbc5235eb86f3\Symfony\Component\Cache\Adapter;

use _PhpScoperbc5235eb86f3\Symfony\Component\Cache\Marshaller\DefaultMarshaller;
use _PhpScoperbc5235eb86f3\Symfony\Component\Cache\Marshaller\MarshallerInterface;
use _PhpScoperbc5235eb86f3\Symfony\Component\Cache\PruneableInterface;
use _PhpScoperbc5235eb86f3\Symfony\Component\Cache\Traits\FilesystemTrait;
class FilesystemAdapter extends \_PhpScoperbc5235eb86f3\Symfony\Component\Cache\Adapter\AbstractAdapter implements \_PhpScoperbc5235eb86f3\Symfony\Component\Cache\PruneableInterface
{
    use FilesystemTrait;
    public function __construct(string $namespace = '', int $defaultLifetime = 0, string $directory = null, \_PhpScoperbc5235eb86f3\Symfony\Component\Cache\Marshaller\MarshallerInterface $marshaller = null)
    {
        $this->marshaller = $marshaller ?? new \_PhpScoperbc5235eb86f3\Symfony\Component\Cache\Marshaller\DefaultMarshaller();
        parent::__construct('', $defaultLifetime);
        $this->init($namespace, $directory);
    }
}
