<?php

declare (strict_types=1);
namespace _PhpScoperddde3ba4aebc\PHPStan\PhpDocParser\Ast\PhpDoc;

use _PhpScoperddde3ba4aebc\PHPStan\PhpDocParser\Ast\Type\TypeNode;
class ParamTagValueNode implements \_PhpScoperddde3ba4aebc\PHPStan\PhpDocParser\Ast\PhpDoc\PhpDocTagValueNode
{
    /** @var TypeNode */
    public $type;
    /** @var bool */
    public $isVariadic;
    /** @var string */
    public $parameterName;
    /** @var string (may be empty) */
    public $description;
    public function __construct(\_PhpScoperddde3ba4aebc\PHPStan\PhpDocParser\Ast\Type\TypeNode $type, bool $isVariadic, string $parameterName, string $description)
    {
        $this->type = $type;
        $this->isVariadic = $isVariadic;
        $this->parameterName = $parameterName;
        $this->description = $description;
    }
    public function __toString() : string
    {
        $variadic = $this->isVariadic ? '...' : '';
        return \trim("{$this->type} {$variadic}{$this->parameterName} {$this->description}");
    }
}
