<?php

declare (strict_types=1);
namespace _PhpScoperedc2e0c967db\PhpParser\Node\Stmt;

use _PhpScoperedc2e0c967db\PhpParser\Node;
class Trait_ extends \_PhpScoperedc2e0c967db\PhpParser\Node\Stmt\ClassLike
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
        $this->name = \is_string($name) ? new \_PhpScoperedc2e0c967db\PhpParser\Node\Identifier($name) : $name;
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
