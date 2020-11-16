<?php

declare (strict_types=1);
namespace _PhpScoper4d05106cc3c0\PHPStan\PhpDocParser\Ast\ConstExpr;

class ConstExprArrayNode implements \_PhpScoper4d05106cc3c0\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode
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
