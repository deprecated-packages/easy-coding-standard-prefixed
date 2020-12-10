<?php

declare (strict_types=1);
namespace _PhpScopera40fc53e636b\PhpParser\Node\Expr;

use _PhpScopera40fc53e636b\PhpParser\Node\Expr;
use _PhpScopera40fc53e636b\PhpParser\Node\Name;
class ConstFetch extends \_PhpScopera40fc53e636b\PhpParser\Node\Expr
{
    /** @var Name Constant name */
    public $name;
    /**
     * Constructs a const fetch node.
     *
     * @param Name  $name       Constant name
     * @param array $attributes Additional attributes
     */
    public function __construct(\_PhpScopera40fc53e636b\PhpParser\Node\Name $name, array $attributes = [])
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
