<?php

declare (strict_types=1);
namespace _PhpScoper3e1e0e5bb8ef\PhpParser\Node\Expr;

use _PhpScoper3e1e0e5bb8ef\PhpParser\Node\Expr;
use _PhpScoper3e1e0e5bb8ef\PhpParser\Node\Name;
use _PhpScoper3e1e0e5bb8ef\PhpParser\Node\VarLikeIdentifier;
class StaticPropertyFetch extends \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Expr
{
    /** @var Name|Expr Class name */
    public $class;
    /** @var VarLikeIdentifier|Expr Property name */
    public $name;
    /**
     * Constructs a static property fetch node.
     *
     * @param Name|Expr                     $class      Class name
     * @param string|VarLikeIdentifier|Expr $name       Property name
     * @param array                         $attributes Additional attributes
     */
    public function __construct($class, $name, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->class = $class;
        $this->name = \is_string($name) ? new \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\VarLikeIdentifier($name) : $name;
    }
    public function getSubNodeNames() : array
    {
        return ['class', 'name'];
    }
    public function getType() : string
    {
        return 'Expr_StaticPropertyFetch';
    }
}
