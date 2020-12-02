<?php

declare (strict_types=1);
namespace _PhpScoperc95ae4bf942a\PhpParser\Node\Stmt;

use _PhpScoperc95ae4bf942a\PhpParser\Node;
/**
 * Represents statements of type "expr;"
 */
class Expression extends \_PhpScoperc95ae4bf942a\PhpParser\Node\Stmt
{
    /** @var Node\Expr Expression */
    public $expr;
    /**
     * Constructs an expression statement.
     *
     * @param Node\Expr $expr       Expression
     * @param array     $attributes Additional attributes
     */
    public function __construct(\_PhpScoperc95ae4bf942a\PhpParser\Node\Expr $expr, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->expr = $expr;
    }
    public function getSubNodeNames() : array
    {
        return ['expr'];
    }
    public function getType() : string
    {
        return 'Stmt_Expression';
    }
}
