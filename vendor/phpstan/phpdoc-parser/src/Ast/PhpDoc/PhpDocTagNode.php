<?php

declare (strict_types=1);
namespace _PhpScopera189153e1f79\PHPStan\PhpDocParser\Ast\PhpDoc;

class PhpDocTagNode implements \_PhpScopera189153e1f79\PHPStan\PhpDocParser\Ast\PhpDoc\PhpDocChildNode
{
    /** @var string */
    public $name;
    /** @var PhpDocTagValueNode */
    public $value;
    public function __construct(string $name, \_PhpScopera189153e1f79\PHPStan\PhpDocParser\Ast\PhpDoc\PhpDocTagValueNode $value)
    {
        $this->name = $name;
        $this->value = $value;
    }
    public function __toString() : string
    {
        return \trim("{$this->name} {$this->value}");
    }
}
