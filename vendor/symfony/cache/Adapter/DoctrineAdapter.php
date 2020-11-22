<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper6db4fde00cda\Symfony\Component\Cache\Adapter;

use _PhpScoper6db4fde00cda\Doctrine\Common\Cache\CacheProvider;
use _PhpScoper6db4fde00cda\Symfony\Component\Cache\Traits\DoctrineTrait;
class DoctrineAdapter extends \_PhpScoper6db4fde00cda\Symfony\Component\Cache\Adapter\AbstractAdapter
{
    use DoctrineTrait;
    public function __construct(\_PhpScoper6db4fde00cda\Doctrine\Common\Cache\CacheProvider $provider, string $namespace = '', int $defaultLifetime = 0)
    {
        parent::__construct('', $defaultLifetime);
        $this->provider = $provider;
        $provider->setNamespace($namespace);
    }
}
