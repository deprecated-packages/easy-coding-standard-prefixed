<?php

declare (strict_types=1);
namespace _PhpScoper065e4ba46e6d\PhpParser\Node\Expr;

use _PhpScoper065e4ba46e6d\PhpParser\Node\Expr;
class ShellExec extends \_PhpScoper065e4ba46e6d\PhpParser\Node\Expr
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
