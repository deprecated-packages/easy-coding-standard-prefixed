<?php

declare (strict_types=1);
namespace _PhpScoper2b44cb0c30af\PHPStan\PhpDocParser\Ast\PhpDoc;

class GenericTagValueNode implements \_PhpScoper2b44cb0c30af\PHPStan\PhpDocParser\Ast\PhpDoc\PhpDocTagValueNode
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
