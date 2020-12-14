<?php

declare (strict_types=1);
namespace _PhpScoperc64a4ac1af35\PHPStan\PhpDocParser\Ast\PhpDoc;

use _PhpScoperc64a4ac1af35\PHPStan\PhpDocParser\Ast\Type\GenericTypeNode;
class ImplementsTagValueNode implements \_PhpScoperc64a4ac1af35\PHPStan\PhpDocParser\Ast\PhpDoc\PhpDocTagValueNode
{
    /** @var GenericTypeNode */
    public $type;
    /** @var string (may be empty) */
    public $description;
    public function __construct(\_PhpScoperc64a4ac1af35\PHPStan\PhpDocParser\Ast\Type\GenericTypeNode $type, string $description)
    {
        $this->type = $type;
        $this->description = $description;
    }
    public function __toString() : string
    {
        return \trim("{$this->type} {$this->description}");
    }
}
