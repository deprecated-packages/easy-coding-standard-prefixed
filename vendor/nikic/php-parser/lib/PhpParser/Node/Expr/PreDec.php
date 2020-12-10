<?php

declare (strict_types=1);
namespace _PhpScoper3ba93baeac18\PhpParser\Node\Expr;

use _PhpScoper3ba93baeac18\PhpParser\Node\Expr;
class PreDec extends \_PhpScoper3ba93baeac18\PhpParser\Node\Expr
{
    /** @var Expr Variable */
    public $var;
    /**
     * Constructs a pre decrement node.
     *
     * @param Expr  $var        Variable
     * @param array $attributes Additional attributes
     */
    public function __construct(\_PhpScoper3ba93baeac18\PhpParser\Node\Expr $var, array $attributes = [])
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
