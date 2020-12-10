<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper8dd2e1c340b1\Symfony\Component\Config\Definition\Builder;

use _PhpScoper8dd2e1c340b1\Symfony\Component\Config\Definition\FloatNode;
/**
 * This class provides a fluent interface for defining a float node.
 *
 * @author Jeanmonod David <david.jeanmonod@gmail.com>
 */
class FloatNodeDefinition extends \_PhpScoper8dd2e1c340b1\Symfony\Component\Config\Definition\Builder\NumericNodeDefinition
{
    /**
     * Instantiates a Node.
     *
     * @return FloatNode The node
     */
    protected function instantiateNode()
    {
        return new \_PhpScoper8dd2e1c340b1\Symfony\Component\Config\Definition\FloatNode($this->name, $this->parent, $this->min, $this->max, $this->pathSeparator);
    }
}
