<?php

declare (strict_types=1);
namespace _PhpScoper807f8e74693b\PhpParser\Node\Stmt;

use _PhpScoper807f8e74693b\PhpParser\Node;
class Else_ extends \_PhpScoper807f8e74693b\PhpParser\Node\Stmt
{
    /** @var Node\Stmt[] Statements */
    public $stmts;
    /**
     * Constructs an else node.
     *
     * @param Node\Stmt[] $stmts      Statements
     * @param array       $attributes Additional attributes
     */
    public function __construct(array $stmts = [], array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->stmts = $stmts;
    }
    public function getSubNodeNames() : array
    {
        return ['stmts'];
    }
    public function getType() : string
    {
        return 'Stmt_Else';
    }
}
