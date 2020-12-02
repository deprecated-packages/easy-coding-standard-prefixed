<?php

declare (strict_types=1);
namespace _PhpScoper6a0a7eb6e565\PHPStan\PhpDocParser\Ast\PhpDoc;

use _PhpScoper6a0a7eb6e565\PHPStan\PhpDocParser\Ast\Type\TypeNode;
class ThrowsTagValueNode implements \_PhpScoper6a0a7eb6e565\PHPStan\PhpDocParser\Ast\PhpDoc\PhpDocTagValueNode
{
    /** @var TypeNode */
    public $type;
    /** @var string (may be empty) */
    public $description;
    public function __construct(\_PhpScoper6a0a7eb6e565\PHPStan\PhpDocParser\Ast\Type\TypeNode $type, string $description)
    {
        $this->type = $type;
        $this->description = $description;
    }
    public function __toString() : string
    {
        return \trim("{$this->type} {$this->description}");
    }
}
