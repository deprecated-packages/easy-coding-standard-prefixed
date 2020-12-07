<?php

declare (strict_types=1);
namespace _PhpScoperda2604e33acb\PhpParser\Node\Scalar;

use _PhpScoperda2604e33acb\PhpParser\Node\Scalar;
class EncapsedStringPart extends \_PhpScoperda2604e33acb\PhpParser\Node\Scalar
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
