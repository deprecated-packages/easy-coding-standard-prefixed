<?php

declare (strict_types=1);
namespace _PhpScoperb2e2c0c42e71\PhpParser\Node\Expr;

use _PhpScoperb2e2c0c42e71\PhpParser\Node\Expr;
class Variable extends \_PhpScoperb2e2c0c42e71\PhpParser\Node\Expr
{
    /** @var string|Expr Name */
    public $name;
    /**
     * Constructs a variable node.
     *
     * @param string|Expr $name       Name
     * @param array                      $attributes Additional attributes
     */
    public function __construct($name, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->name = $name;
    }
    public function getSubNodeNames() : array
    {
        return ['name'];
    }
    public function getType() : string
    {
        return 'Expr_Variable';
    }
}
