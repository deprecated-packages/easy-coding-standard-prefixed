<?php

declare (strict_types=1);
namespace _PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\PhpDoc;

use _PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\Type\TypeNode;
class TemplateTagValueNode implements \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\PhpDoc\PhpDocTagValueNode
{
    /** @var string */
    public $name;
    /** @var TypeNode|null */
    public $bound;
    /** @var string (may be empty) */
    public $description;
    public function __construct(string $name, ?\_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\Type\TypeNode $bound, string $description)
    {
        $this->name = $name;
        $this->bound = $bound;
        $this->description = $description;
    }
    public function __toString() : string
    {
        $bound = $this->bound !== null ? " of {$this->bound}" : '';
        return \trim("{$this->name}{$bound} {$this->description}");
    }
}
