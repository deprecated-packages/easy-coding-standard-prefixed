<?php

declare (strict_types=1);
namespace _PhpScoperd9fcac9e904f\PhpParser\Node\Scalar;

use _PhpScoperd9fcac9e904f\PhpParser\Node\Scalar;
class EncapsedStringPart extends \_PhpScoperd9fcac9e904f\PhpParser\Node\Scalar
{
    /** @var string String value */
    public $value;
    /**
     * Constructs a node representing a string part of an encapsed string.
     *
     * @param string $value      String value
     * @param array  $attributes Additional attributes
     */
    public function __construct(string $value, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->value = $value;
    }
    public function getSubNodeNames() : array
    {
        return ['value'];
    }
    public function getType() : string
    {
        return 'Scalar_EncapsedStringPart';
    }
}
