<?php

declare (strict_types=1);
namespace _PhpScoper246d7c16d32f\PHPStan\PhpDocParser\Ast\PhpDoc;

use _PhpScoper246d7c16d32f\PHPStan\PhpDocParser\Ast\Type\TypeNode;
class ReturnTagValueNode implements \_PhpScoper246d7c16d32f\PHPStan\PhpDocParser\Ast\PhpDoc\PhpDocTagValueNode
{
    /** @var TypeNode */
    public $type;
    /** @var string (may be empty) */
    public $description;
    public function __construct(\_PhpScoper246d7c16d32f\PHPStan\PhpDocParser\Ast\Type\TypeNode $type, string $description)
    {
        $this->type = $type;
        $this->description = $description;
    }
    public function __toString() : string
    {
        return \trim("{$this->type} {$this->description}");
    }
}
