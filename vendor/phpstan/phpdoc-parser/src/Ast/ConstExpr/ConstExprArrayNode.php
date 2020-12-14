<?php

declare (strict_types=1);
namespace _PhpScoperc64a4ac1af35\PHPStan\PhpDocParser\Ast\ConstExpr;

class ConstExprArrayNode implements \_PhpScoperc64a4ac1af35\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode
{
    /** @var ConstExprArrayItemNode[] */
    public $items;
    /**
     * @param ConstExprArrayItemNode[] $items
     */
    public function __construct(array $items)
    {
        $this->items = $items;
    }
    public function __toString() : string
    {
        return '[' . \implode(', ', $this->items) . ']';
    }
}
