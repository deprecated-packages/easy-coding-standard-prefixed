<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperf5c57eca8aae\Symfony\Component\Cache\Adapter;

use _PhpScoperf5c57eca8aae\Psr\Cache\InvalidArgumentException;
/**
 * Interface for invalidating cached items using tags.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
interface TagAwareAdapterInterface extends \_PhpScoperf5c57eca8aae\Symfony\Component\Cache\Adapter\AdapterInterface
{
    /**
     * Invalidates cached items using tags.
     *
     * @param string[] $tags An array of tags to invalidate
     *
     * @return bool True on success
     *
     * @throws InvalidArgumentException When $tags is not valid
     */
    public function invalidateTags(array $tags);
}
