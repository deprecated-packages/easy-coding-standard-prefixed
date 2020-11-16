<?php

declare (strict_types=1);
namespace _PhpScoperedc2e0c967db\PHPStan\PhpDocParser\Ast\PhpDoc;

use _PhpScoperedc2e0c967db\PHPStan\PhpDocParser\Ast\Type\TypeNode;
class ThrowsTagValueNode implements \_PhpScoperedc2e0c967db\PHPStan\PhpDocParser\Ast\PhpDoc\PhpDocTagValueNode
{
    /** @var TypeNode */
    public $type;
    /** @var string (may be empty) */
    public $description;
    public function __construct(\_PhpScoperedc2e0c967db\PHPStan\PhpDocParser\Ast\Type\TypeNode $type, string $description)
    {
        $this->type = $type;
        $this->description = $description;
    }
    public function __toString() : string
    {
        return \trim("{$this->type} {$this->description}");
    }
}
