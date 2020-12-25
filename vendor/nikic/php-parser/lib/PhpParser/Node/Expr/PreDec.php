<?php

declare (strict_types=1);
namespace _PhpScoper92597f5b42a7\PhpParser\Node\Expr;

use _PhpScoper92597f5b42a7\PhpParser\Node\Expr;
class PreDec extends \_PhpScoper92597f5b42a7\PhpParser\Node\Expr
{
    /** @var Expr Variable */
    public $var;
    /**
     * Constructs a pre decrement node.
     *
     * @param Expr  $var        Variable
     * @param array $attributes Additional attributes
     */
    public function __construct(\_PhpScoper92597f5b42a7\PhpParser\Node\Expr $var, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->var = $var;
    }
    public function getSubNodeNames() : array
    {
        return ['var'];
    }
    public function getType() : string
    {
        return 'Expr_PreDec';
    }
}
