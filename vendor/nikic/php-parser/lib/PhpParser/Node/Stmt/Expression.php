<?php

declare (strict_types=1);
namespace _PhpScoperb26833cc184d\PhpParser\Node\Stmt;

use _PhpScoperb26833cc184d\PhpParser\Node;
/**
 * Represents statements of type "expr;"
 */
class Expression extends \_PhpScoperb26833cc184d\PhpParser\Node\Stmt
{
    /** @var Node\Expr Expression */
    public $expr;
    /**
     * Constructs an expression statement.
     *
     * @param Node\Expr $expr       Expression
     * @param array     $attributes Additional attributes
     */
    public function __construct(\_PhpScoperb26833cc184d\PhpParser\Node\Expr $expr, array $attributes = [])
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
