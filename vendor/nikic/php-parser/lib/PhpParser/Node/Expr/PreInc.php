<?php

declare (strict_types=1);
namespace _PhpScoper418afc2f157c\PhpParser\Node\Expr;

use _PhpScoper418afc2f157c\PhpParser\Node\Expr;
class PreInc extends \_PhpScoper418afc2f157c\PhpParser\Node\Expr
{
    /** @var Expr Variable */
    public $var;
    /**
     * Constructs a pre increment node.
     *
     * @param Expr  $var        Variable
     * @param array $attributes Additional attributes
     */
    public function __construct(\_PhpScoper418afc2f157c\PhpParser\Node\Expr $var, array $attributes = [])
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
