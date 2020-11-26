<?php

declare (strict_types=1);
namespace _PhpScoper167729fa1dde\PhpParser\Node\Expr;

use _PhpScoper167729fa1dde\PhpParser\Node\Expr;
class PreInc extends \_PhpScoper167729fa1dde\PhpParser\Node\Expr
{
    /** @var Expr Variable */
    public $var;
    /**
     * Constructs a pre increment node.
     *
     * @param Expr  $var        Variable
     * @param array $attributes Additional attributes
     */
    public function __construct(\_PhpScoper167729fa1dde\PhpParser\Node\Expr $var, array $attributes = [])
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
        return 'Expr_PreInc';
    }
}
