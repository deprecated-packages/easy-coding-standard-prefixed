<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper4972b76c81a2\Symfony\Component\Cache\Traits;

use _PhpScoper4972b76c81a2\Symfony\Component\Cache\PruneableInterface;
use _PhpScoper4972b76c81a2\Symfony\Contracts\Service\ResetInterface;
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
        return $this->pool instanceof \_PhpScoper4972b76c81a2\Symfony\Component\Cache\PruneableInterface && $this->pool->prune();
    }
    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        if ($this->pool instanceof \_PhpScoper4972b76c81a2\Symfony\Contracts\Service\ResetInterface) {
            $this->pool->reset();
        }
    }
}
