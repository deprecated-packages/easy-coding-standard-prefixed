<?php

declare (strict_types=1);
namespace _PhpScoper578a67c80b2b\PhpParser\Node\Expr;

use _PhpScoper578a67c80b2b\PhpParser\Node\Expr;
use _PhpScoper578a67c80b2b\PhpParser\Node\Name;
class ConstFetch extends \_PhpScoper578a67c80b2b\PhpParser\Node\Expr
{
    /** @var Name Constant name */
    public $name;
    /**
     * Constructs a const fetch node.
     *
     * @param Name  $name       Constant name
     * @param array $attributes Additional attributes
     */
    public function __construct(\_PhpScoper578a67c80b2b\PhpParser\Node\Name $name, array $attributes = [])
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
