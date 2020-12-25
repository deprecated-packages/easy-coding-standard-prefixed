<?php

declare (strict_types=1);
namespace _PhpScoper592524ba34f0\PhpParser\Node\Scalar;

use _PhpScoper592524ba34f0\PhpParser\Node\Scalar;
abstract class MagicConst extends \_PhpScoper592524ba34f0\PhpParser\Node\Scalar
{
    /**
     * Constructs a magic constant node.
     *
     * @param array $attributes Additional attributes
     */
    public function __construct(array $attributes = [])
    {
        $this->attributes = $attributes;
    }
    public function getSubNodeNames() : array
    {
        return [];
    }
    /**
     * Get name of magic constant.
     *
     * @return string Name of magic constant
     */
    public abstract function getName() : string;
}
