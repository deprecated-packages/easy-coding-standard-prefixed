<?php

declare (strict_types=1);
namespace _PhpScoperb26833cc184d\PhpParser\Node\Stmt;

use _PhpScoperb26833cc184d\PhpParser\Node;
class Do_ extends \_PhpScoperb26833cc184d\PhpParser\Node\Stmt
{
    /** @var Node\Stmt[] Statements */
    public $stmts;
    /** @var Node\Expr Condition */
    public $cond;
    /**
     * Constructs a do while node.
     *
     * @param Node\Expr   $cond       Condition
     * @param Node\Stmt[] $stmts      Statements
     * @param array       $attributes Additional attributes
     */
    public function __construct(\_PhpScoperb26833cc184d\PhpParser\Node\Expr $cond, array $stmts = [], array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->cond = $cond;
        $this->stmts = $stmts;
    }
    public function getSubNodeNames() : array
    {
        return ['stmts', 'cond'];
    }
    public function getType() : string
    {
        return 'Stmt_Do';
    }
}
