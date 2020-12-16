<?php

declare (strict_types=1);
namespace _PhpScoperb6a8e65b492c\PHPStan\PhpDocParser\Ast\PhpDoc;

use _PhpScoperb6a8e65b492c\PHPStan\PhpDocParser\Ast\Type\TypeNode;
class VarTagValueNode implements \_PhpScoperb6a8e65b492c\PHPStan\PhpDocParser\Ast\PhpDoc\PhpDocTagValueNode
{
    /** @var TypeNode */
    public $type;
    /** @var string (may be empty) */
    public $variableName;
    /** @var string (may be empty) */
    public $description;
    public function __construct(\_PhpScoperb6a8e65b492c\PHPStan\PhpDocParser\Ast\Type\TypeNode $type, string $variableName, string $description)
    {
        $this->type = $type;
        $this->variableName = $variableName;
        $this->description = $description;
    }
    public function __toString() : string
    {
        return \trim("{$this->type} " . \trim("{$this->variableName} {$this->description}"));
    }
}
