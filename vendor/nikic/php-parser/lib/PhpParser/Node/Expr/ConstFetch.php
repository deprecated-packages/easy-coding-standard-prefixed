<?php

declare (strict_types=1);
namespace _PhpScoperfacc742d2745\PhpParser\Node\Expr;

use _PhpScoperfacc742d2745\PhpParser\Node\Expr;
use _PhpScoperfacc742d2745\PhpParser\Node\Name;
class ConstFetch extends \_PhpScoperfacc742d2745\PhpParser\Node\Expr
{
    /** @var Name Constant name */
    public $name;
    /**
     * Constructs a const fetch node.
     *
     * @param Name  $name       Constant name
     * @param array $attributes Additional attributes
     */
    public function __construct(\_PhpScoperfacc742d2745\PhpParser\Node\Name $name, array $attributes = [])
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
        return 'Expr_ConstFetch';
    }
}
