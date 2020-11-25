<?php

declare (strict_types=1);
namespace _PhpScoperdc8fbcd7c69d\PHPStan\PhpDocParser\Ast\Type;

class ArrayShapeNode implements \_PhpScoperdc8fbcd7c69d\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var ArrayShapeItemNode[] */
    public $items;
    public function __construct(array $items)
    {
        $this->items = $items;
    }
    public function __toString() : string
    {
        return 'array{' . \implode(', ', $this->items) . '}';
    }
}
