<?php

declare (strict_types=1);
namespace _PhpScoper239b374a39c8\PhpParser\Node\Stmt;

use _PhpScoper239b374a39c8\PhpParser\Node;
class Trait_ extends \_PhpScoper239b374a39c8\PhpParser\Node\Stmt\ClassLike
{
    /**
     * Constructs a trait node.
     *
     * @param string|Node\Identifier $name Name
     * @param array  $subNodes   Array of the following optional subnodes:
     *                           'stmts' => array(): Statements
     * @param array  $attributes Additional attributes
     */
    public function __construct($name, array $subNodes = [], array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->name = \is_string($name) ? new \_PhpScoper239b374a39c8\PhpParser\Node\Identifier($name) : $name;
        $this->stmts = $subNodes['stmts'] ?? [];
    }
    public function getSubNodeNames() : array
    {
        return ['name', 'stmts'];
    }
    public function getType() : string
    {
        return 'Stmt_Trait';
    }
}
