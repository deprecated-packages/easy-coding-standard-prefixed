<?php

declare (strict_types=1);
namespace _PhpScoper239b374a39c8\PHPStan\PhpDocParser\Ast\PhpDoc;

class GenericTagValueNode implements \_PhpScoper239b374a39c8\PHPStan\PhpDocParser\Ast\PhpDoc\PhpDocTagValueNode
{
    /** @var string (may be empty) */
    public $value;
    public function __construct(string $value)
    {
        $this->value = $value;
    }
    public function __toString() : string
    {
        return $this->value;
    }
}
