<?php

declare (strict_types=1);
namespace _PhpScoper21c6ce8bfe5d\PhpParser\Node\Expr;

use _PhpScoper21c6ce8bfe5d\PhpParser\Node\Expr;
class ShellExec extends \_PhpScoper21c6ce8bfe5d\PhpParser\Node\Expr
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
