<?php

declare (strict_types=1);
namespace _PhpScoper6a0a7eb6e565\PHPStan\PhpDocParser\Ast\ConstExpr;

class ConstExprArrayItemNode implements \_PhpScoper6a0a7eb6e565\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode
{
    /** @var ConstExprNode|null */
    public $key;
    /** @var ConstExprNode */
    public $value;
    public function __construct(?\_PhpScoper6a0a7eb6e565\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode $key, \_PhpScoper6a0a7eb6e565\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode $value)
    {
        $this->key = $key;
        $this->value = $value;
    }
    public function __toString() : string
    {
        if ($this->key !== null) {
            return "{$this->key} => {$this->value}";
        }
        return "{$this->value}";
    }
}
