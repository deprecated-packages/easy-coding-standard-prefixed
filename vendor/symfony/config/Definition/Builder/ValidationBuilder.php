<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperfaaf57618f34\Symfony\Component\Config\Definition\Builder;

/**
 * This class builds validation conditions.
 *
 * @author Christophe Coevoet <stof@notk.org>
 */
class ValidationBuilder
{
    protected $node;
    public $rules = [];
    public function __construct(\_PhpScoperfaaf57618f34\Symfony\Component\Config\Definition\Builder\NodeDefinition $node)
    {
        $this->node = $node;
    }
    /**
     * Registers a closure to run as normalization or an expression builder to build it if null is provided.
     *
     * @return ExprBuilder|$this
     */
    public function rule(\Closure $closure = null)
    {
        if (null !== $closure) {
            $this->rules[] = $closure;
            return $this;
        }
        return $this->rules[] = new \_PhpScoperfaaf57618f34\Symfony\Component\Config\Definition\Builder\ExprBuilder($this->node);
    }
}
