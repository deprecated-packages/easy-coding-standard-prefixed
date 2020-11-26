<?php

declare (strict_types=1);
namespace _PhpScoper167729fa1dde\PhpParser\Node\Expr;

use _PhpScoper167729fa1dde\PhpParser\Node\Expr;
class Variable extends \_PhpScoper167729fa1dde\PhpParser\Node\Expr
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
