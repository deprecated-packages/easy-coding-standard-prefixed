<?php

declare (strict_types=1);
namespace _PhpScoperdc8fbcd7c69d\PHPStan\PhpDocParser\Ast\PhpDoc;

use _PhpScoperdc8fbcd7c69d\PHPStan\PhpDocParser\Ast\Type\GenericTypeNode;
class ImplementsTagValueNode implements \_PhpScoperdc8fbcd7c69d\PHPStan\PhpDocParser\Ast\PhpDoc\PhpDocTagValueNode
{
    /** @var GenericTypeNode */
    public $type;
    /** @var string (may be empty) */
    public $description;
    public function __construct(\_PhpScoperdc8fbcd7c69d\PHPStan\PhpDocParser\Ast\Type\GenericTypeNode $type, string $description)
    {
        $this->type = $type;
        $this->description = $description;
    }
    public function __toString() : string
    {
        return \trim("{$this->type} {$this->description}");
    }
}
