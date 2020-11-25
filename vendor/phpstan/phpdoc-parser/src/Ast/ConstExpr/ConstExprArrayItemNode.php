<?php

declare (strict_types=1);
namespace _PhpScoperaac5f7c652e4\PHPStan\PhpDocParser\Ast\ConstExpr;

class ConstExprArrayItemNode implements \_PhpScoperaac5f7c652e4\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode
{
    /** @var ConstExprNode|null */
    public $key;
    /** @var ConstExprNode */
    public $value;
    public function __construct(?\_PhpScoperaac5f7c652e4\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode $key, \_PhpScoperaac5f7c652e4\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode $value)
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
