<?php

declare (strict_types=1);
namespace _PhpScoper3e8786a75afe\PHPStan\PhpDocParser\Ast\PhpDoc;

use _PhpScoper3e8786a75afe\PHPStan\PhpDocParser\Ast\Type\TypeNode;
class MixinTagValueNode implements \_PhpScoper3e8786a75afe\PHPStan\PhpDocParser\Ast\PhpDoc\PhpDocTagValueNode
{
    /** @var TypeNode */
    public $type;
    /** @var string (may be empty) */
    public $description;
    public function __construct(\_PhpScoper3e8786a75afe\PHPStan\PhpDocParser\Ast\Type\TypeNode $type, string $description)
    {
        $this->type = $type;
        $this->description = $description;
    }
    public function __toString() : string
    {
        return \trim("{$this->type} {$this->description}");
    }
}
