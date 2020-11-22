<?php

declare (strict_types=1);
namespace _PhpScoper66292c14b658\PhpParser\Node\Scalar;

use _PhpScoper66292c14b658\PhpParser\Node\Scalar;
abstract class MagicConst extends \_PhpScoper66292c14b658\PhpParser\Node\Scalar
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
