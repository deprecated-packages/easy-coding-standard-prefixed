<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperb383f16e851e\Symfony\Contracts\Cache;

use _PhpScoperb383f16e851e\Psr\Cache\CacheItemInterface;
/**
 * Computes and returns the cached value of an item.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
interface CallbackInterface
{
    /**
     * @param CacheItemInterface|ItemInterface $item  The item to compute the value for
     * @param bool                             &$save Should be set to false when the value should not be saved in the pool
     *
     * @return mixed The computed value for the passed item
     */
    public function __invoke(\_PhpScoperb383f16e851e\Psr\Cache\CacheItemInterface $item, bool &$save);
}