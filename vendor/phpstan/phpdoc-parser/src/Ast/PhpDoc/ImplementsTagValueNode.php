<?php

declare (strict_types=1);
namespace _PhpScoperca8ca183ac38\PHPStan\PhpDocParser\Ast\PhpDoc;

use _PhpScoperca8ca183ac38\PHPStan\PhpDocParser\Ast\Type\GenericTypeNode;
class ImplementsTagValueNode implements \_PhpScoperca8ca183ac38\PHPStan\PhpDocParser\Ast\PhpDoc\PhpDocTagValueNode
{
    /** @var GenericTypeNode */
    public $type;
    /** @var string (may be empty) */
    public $description;
    public function __construct(\_PhpScoperca8ca183ac38\PHPStan\PhpDocParser\Ast\Type\GenericTypeNode $type, string $description)
    {
        $this->type = $type;
        $this->description = $description;
    }
    public function __toString() : string
    {
        return \trim("{$this->type} {$this->description}");
    }
}
