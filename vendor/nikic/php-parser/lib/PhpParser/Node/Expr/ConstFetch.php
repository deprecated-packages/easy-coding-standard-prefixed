<?php

declare (strict_types=1);
namespace _PhpScoperecb978830f1e\PhpParser\Node\Expr;

use _PhpScoperecb978830f1e\PhpParser\Node\Expr;
use _PhpScoperecb978830f1e\PhpParser\Node\Name;
class ConstFetch extends \_PhpScoperecb978830f1e\PhpParser\Node\Expr
{
    /** @var Name Constant name */
    public $name;
    /**
     * Constructs a const fetch node.
     *
     * @param Name  $name       Constant name
     * @param array $attributes Additional attributes
     */
    public function __construct(\_PhpScoperecb978830f1e\PhpParser\Node\Name $name, array $attributes = [])
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
