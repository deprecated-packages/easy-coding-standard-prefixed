<?php

declare (strict_types=1);
namespace _PhpScoper63567e560066\PhpParser\Node\Expr;

use _PhpScoper63567e560066\PhpParser\Node\Expr;
abstract class Cast extends \_PhpScoper63567e560066\PhpParser\Node\Expr
{
    /** @var Expr Expression */
    public $expr;
    /**
     * Constructs a cast node.
     *
     * @param Expr  $expr       Expression
     * @param array $attributes Additional attributes
     */
    public function __construct(\_PhpScoper63567e560066\PhpParser\Node\Expr $expr, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->expr = $expr;
    }
    public function getSubNodeNames() : array
    {
        return ['expr'];
    }
}
