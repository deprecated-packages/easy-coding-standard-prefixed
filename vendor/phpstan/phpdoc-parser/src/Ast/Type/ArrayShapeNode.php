<?php

declare (strict_types=1);
namespace _PhpScopera34ae19e8d40\PHPStan\PhpDocParser\Ast\Type;

class ArrayShapeNode implements \_PhpScopera34ae19e8d40\PHPStan\PhpDocParser\Ast\Type\TypeNode
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
