<?php

declare (strict_types=1);
namespace _PhpScoperfacc742d2745\PhpParser\Node\Expr;

use _PhpScoperfacc742d2745\PhpParser\Node\Expr;
class ShellExec extends \_PhpScoperfacc742d2745\PhpParser\Node\Expr
{
    /** @var array Encapsed string array */
    public $parts;
    /**
     * Constructs a shell exec (backtick) node.
     *
     * @param array $parts      Encapsed string array
     * @param array $attributes Additional attributes
     */
    public function __construct(array $parts, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->parts = $parts;
    }
    public function getSubNodeNames() : array
    {
        return ['parts'];
    }
    public function getType() : string
    {
        return 'Expr_ShellExec';
    }
}
