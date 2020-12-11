<?php

declare (strict_types=1);
namespace _PhpScoperb26833cc184d\PhpParser\Node\Expr;

use _PhpScoperb26833cc184d\PhpParser\Node\Expr;
use _PhpScoperb26833cc184d\PhpParser\Node\Name;
class ConstFetch extends \_PhpScoperb26833cc184d\PhpParser\Node\Expr
{
    /** @var Name Constant name */
    public $name;
    /**
     * Constructs a const fetch node.
     *
     * @param Name  $name       Constant name
     * @param array $attributes Additional attributes
     */
    public function __construct(\_PhpScoperb26833cc184d\PhpParser\Node\Name $name, array $attributes = [])
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
