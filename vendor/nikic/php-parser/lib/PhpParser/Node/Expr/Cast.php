<?php

declare (strict_types=1);
namespace _PhpScoperf053e888b664\PhpParser\Node\Expr;

use _PhpScoperf053e888b664\PhpParser\Node\Expr;
abstract class Cast extends \_PhpScoperf053e888b664\PhpParser\Node\Expr
{
    /** @var Expr Expression */
    public $expr;
    /**
     * Constructs a cast node.
     *
     * @param Expr  $expr       Expression
     * @param array $attributes Additional attributes
     */
    public function __construct(\_PhpScoperf053e888b664\PhpParser\Node\Expr $expr, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->expr = $expr;
    }
    public function getSubNodeNames() : array
    {
        return ['expr'];
    }
}
