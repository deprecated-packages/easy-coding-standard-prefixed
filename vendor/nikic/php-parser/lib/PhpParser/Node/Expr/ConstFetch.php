<?php

declare (strict_types=1);
namespace _PhpScoperc4b135661b3a\PhpParser\Node\Expr;

use _PhpScoperc4b135661b3a\PhpParser\Node\Expr;
use _PhpScoperc4b135661b3a\PhpParser\Node\Name;
class ConstFetch extends \_PhpScoperc4b135661b3a\PhpParser\Node\Expr
{
    /** @var Name Constant name */
    public $name;
    /**
     * Constructs a const fetch node.
     *
     * @param Name  $name       Constant name
     * @param array $attributes Additional attributes
     */
    public function __construct(\_PhpScoperc4b135661b3a\PhpParser\Node\Name $name, array $attributes = [])
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
