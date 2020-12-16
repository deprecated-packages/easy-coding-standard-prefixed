<?php

declare (strict_types=1);
namespace _PhpScoperb6a8e65b492c\PHPStan\PhpDocParser\Ast\PhpDoc;

class GenericTagValueNode implements \_PhpScoperb6a8e65b492c\PHPStan\PhpDocParser\Ast\PhpDoc\PhpDocTagValueNode
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
