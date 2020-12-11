<?php

declare (strict_types=1);
namespace _PhpScoperb26833cc184d\PhpParser\Node\Expr;

use _PhpScoperb26833cc184d\PhpParser\Node\Expr;
abstract class Cast extends \_PhpScoperb26833cc184d\PhpParser\Node\Expr
{
    /** @var Expr Expression */
    public $expr;
    /**
     * Constructs a cast node.
     *
     * @param Expr  $expr       Expression
     * @param array $attributes Additional attributes
     */
    public function __construct(\_PhpScoperb26833cc184d\PhpParser\Node\Expr $expr, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->expr = $expr;
    }
    public function getSubNodeNames() : array
    {
        return ['expr'];
    }
}
