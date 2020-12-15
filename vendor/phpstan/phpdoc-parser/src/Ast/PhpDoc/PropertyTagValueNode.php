<?php

declare (strict_types=1);
namespace _PhpScoperdeea1786e972\PHPStan\PhpDocParser\Ast\PhpDoc;

use _PhpScoperdeea1786e972\PHPStan\PhpDocParser\Ast\Type\TypeNode;
class PropertyTagValueNode implements \_PhpScoperdeea1786e972\PHPStan\PhpDocParser\Ast\PhpDoc\PhpDocTagValueNode
{
    /** @var TypeNode */
    public $type;
    /** @var string */
    public $propertyName;
    /** @var string (may be empty) */
    public $description;
    public function __construct(\_PhpScoperdeea1786e972\PHPStan\PhpDocParser\Ast\Type\TypeNode $type, string $propertyName, string $description)
    {
        $this->type = $type;
        $this->propertyName = $propertyName;
        $this->description = $description;
    }
    public function __toString() : string
    {
        return \trim("{$this->type} {$this->propertyName} {$this->description}");
    }
}
