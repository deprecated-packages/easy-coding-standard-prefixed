<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper18bd934c069f\Symfony\Component\Cache\Traits;

use _PhpScoper18bd934c069f\Symfony\Component\Cache\PruneableInterface;
use _PhpScoper18bd934c069f\Symfony\Contracts\Service\ResetInterface;
/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
trait ProxyTrait
{
    private $pool;
    /**
     * {@inheritdoc}
     */
    public function prune()
    {
        return $this->pool instanceof \_PhpScoper18bd934c069f\Symfony\Component\Cache\PruneableInterface && $this->pool->prune();
    }
    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        if ($this->pool instanceof \_PhpScoper18bd934c069f\Symfony\Contracts\Service\ResetInterface) {
            $this->pool->reset();
        }
    }
}
