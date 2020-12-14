<?php

declare (strict_types=1);
namespace _PhpScoperc64a4ac1af35\PHPStan\PhpDocParser\Ast\PhpDoc;

class DeprecatedTagValueNode implements \_PhpScoperc64a4ac1af35\PHPStan\PhpDocParser\Ast\PhpDoc\PhpDocTagValueNode
{
    /** @var string (may be empty) */
    public $description;
    public function __construct(string $description)
    {
        $this->description = $description;
    }
    public function __toString() : string
    {
        return \trim($this->description);
    }
}
