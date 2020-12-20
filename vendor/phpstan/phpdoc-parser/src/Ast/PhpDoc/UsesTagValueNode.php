<?php

declare (strict_types=1);
namespace _PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\PhpDoc;

use _PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\Type\GenericTypeNode;
class UsesTagValueNode implements \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\PhpDoc\PhpDocTagValueNode
{
    /** @var GenericTypeNode */
    public $type;
    /** @var string (may be empty) */
    public $description;
    public function __construct(\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\Type\GenericTypeNode $type, string $description)
    {
        $this->type = $type;
        $this->description = $description;
    }
    public function __toString() : string
    {
        return \trim("{$this->type} {$this->description}");
    }
}
