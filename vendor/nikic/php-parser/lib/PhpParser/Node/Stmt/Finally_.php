<?php

declare (strict_types=1);
namespace _PhpScoper58a0a169dcfb\PhpParser\Node\Stmt;

use _PhpScoper58a0a169dcfb\PhpParser\Node;
class Finally_ extends \_PhpScoper58a0a169dcfb\PhpParser\Node\Stmt
{
    /** @var Node\Stmt[] Statements */
    public $stmts;
    /**
     * Constructs a finally node.
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
        return 'Stmt_Finally';
    }
}
