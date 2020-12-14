<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperc64a4ac1af35\Symfony\Component\Config\Definition\Builder;

/**
 * An interface that can be implemented by nodes which build other nodes.
 *
 * @author Roland Franssen <franssen.roland@gmail.com>
 */
interface BuilderAwareInterface
{
    /**
     * Sets a custom children builder.
     */
    public function setBuilder(\_PhpScoperc64a4ac1af35\Symfony\Component\Config\Definition\Builder\NodeBuilder $builder);
}
