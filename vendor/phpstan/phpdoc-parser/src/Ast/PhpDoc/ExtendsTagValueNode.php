<?php

declare (strict_types=1);
namespace _PhpScoper3e1e0e5bb8ef\PHPStan\PhpDocParser\Ast\PhpDoc;

use _PhpScoper3e1e0e5bb8ef\PHPStan\PhpDocParser\Ast\Type\GenericTypeNode;
class ExtendsTagValueNode implements \_PhpScoper3e1e0e5bb8ef\PHPStan\PhpDocParser\Ast\PhpDoc\PhpDocTagValueNode
{
    /** @var GenericTypeNode */
    public $type;
    /** @var string (may be empty) */
    public $description;
    public function __construct(\_PhpScoper3e1e0e5bb8ef\PHPStan\PhpDocParser\Ast\Type\GenericTypeNode $type, string $description)
    {
        $this->type = $type;
        $this->description = $description;
    }
    public function __toString() : string
    {
        return \trim("{$this->type} {$this->description}");
    }
}
