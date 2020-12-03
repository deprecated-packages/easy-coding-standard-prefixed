<?php

declare (strict_types=1);
namespace _PhpScoperba5852cc6147\PhpParser\Node\Scalar;

use _PhpScoperba5852cc6147\PhpParser\Node\Scalar;
abstract class MagicConst extends \_PhpScoperba5852cc6147\PhpParser\Node\Scalar
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
