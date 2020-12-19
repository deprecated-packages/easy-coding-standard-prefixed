<?php

declare (strict_types=1);
namespace _PhpScoper13160cf3462c\PhpParser\Node\Stmt;

use _PhpScoper13160cf3462c\PhpParser\Node;
class Trait_ extends \_PhpScoper13160cf3462c\PhpParser\Node\Stmt\ClassLike
{
    /**
     * Constructs a trait node.
     *
     * @param string|Node\Identifier $name Name
     * @param array  $subNodes   Array of the following optional subnodes:
     *                           'stmts'      => array(): Statements
     *                           'attrGroups' => array(): PHP attribute groups
     * @param array  $attributes Additional attributes
     */
    public function __construct($name, array $subNodes = [], array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->name = \is_string($name) ? new \_PhpScoper13160cf3462c\PhpParser\Node\Identifier($name) : $name;
        $this->stmts = $subNodes['stmts'] ?? [];
        $this->attrGroups = $subNodes['attrGroups'] ?? [];
    }
    public function getSubNodeNames() : array
    {
        return ['attrGroups', 'name', 'stmts'];
    }
    public function getType() : string
    {
        return 'Stmt_Trait';
    }
}
