<?php

declare (strict_types=1);
namespace _PhpScoperecb978830f1e\PhpParser\Node\Expr;

use _PhpScoperecb978830f1e\PhpParser\Node\Expr;
class Yield_ extends \_PhpScoperecb978830f1e\PhpParser\Node\Expr
{
    /** @var null|Expr Key expression */
    public $key;
    /** @var null|Expr Value expression */
    public $value;
    /**
     * Constructs a yield expression node.
     *
     * @param null|Expr $value      Value expression
     * @param null|Expr $key        Key expression
     * @param array     $attributes Additional attributes
     */
    public function __construct(\_PhpScoperecb978830f1e\PhpParser\Node\Expr $value = null, \_PhpScoperecb978830f1e\PhpParser\Node\Expr $key = null, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->key = $key;
        $this->value = $value;
    }
    public function getSubNodeNames() : array
    {
        return ['key', 'value'];
    }
    public function getType() : string
    {
        return 'Expr_Yield';
    }
}
