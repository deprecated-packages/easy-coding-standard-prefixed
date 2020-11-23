<?php

declare (strict_types=1);
namespace _PhpScoperd4c5032f0671\PhpParser\Node\Stmt;

use _PhpScoperd4c5032f0671\PhpParser\Node;
class Else_ extends \_PhpScoperd4c5032f0671\PhpParser\Node\Stmt
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
