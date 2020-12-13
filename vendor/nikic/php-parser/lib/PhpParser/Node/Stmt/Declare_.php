<?php

declare (strict_types=1);
namespace _PhpScoper8db4616aa69d\PhpParser\Node\Stmt;

use _PhpScoper8db4616aa69d\PhpParser\Node;
class Declare_ extends \_PhpScoper8db4616aa69d\PhpParser\Node\Stmt
{
    /** @var DeclareDeclare[] List of declares */
    public $declares;
    /** @var Node\Stmt[]|null Statements */
    public $stmts;
    /**
     * Constructs a declare node.
     *
     * @param DeclareDeclare[] $declares   List of declares
     * @param Node\Stmt[]|null $stmts      Statements
     * @param array            $attributes Additional attributes
     */
    public function __construct(array $declares, array $stmts = null, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->declares = $declares;
        $this->stmts = $stmts;
    }
    public function getSubNodeNames() : array
    {
        return ['declares', 'stmts'];
    }
    public function getType() : string
    {
        return 'Stmt_Declare';
    }
}
