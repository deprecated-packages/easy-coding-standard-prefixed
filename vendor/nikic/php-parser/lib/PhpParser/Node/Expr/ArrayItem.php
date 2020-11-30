<?php

declare (strict_types=1);
namespace _PhpScopera09818bc50da\PhpParser\Node\Expr;

use _PhpScopera09818bc50da\PhpParser\Node\Expr;
class ArrayItem extends \_PhpScopera09818bc50da\PhpParser\Node\Expr
{
    /** @var null|Expr Key */
    public $key;
    /** @var Expr Value */
    public $value;
    /** @var bool Whether to assign by reference */
    public $byRef;
    /** @var bool Whether to unpack the argument */
    public $unpack;
    /**
     * Constructs an array item node.
     *
     * @param Expr      $value      Value
     * @param null|Expr $key        Key
     * @param bool      $byRef      Whether to assign by reference
     * @param array     $attributes Additional attributes
     */
    public function __construct(\_PhpScopera09818bc50da\PhpParser\Node\Expr $value, \_PhpScopera09818bc50da\PhpParser\Node\Expr $key = null, bool $byRef = \false, array $attributes = [], bool $unpack = \false)
    {
        $this->attributes = $attributes;
        $this->key = $key;
        $this->value = $value;
        $this->byRef = $byRef;
        $this->unpack = $unpack;
    }
    public function getSubNodeNames() : array
    {
        return ['key', 'value', 'byRef', 'unpack'];
    }
    public function getType() : string
    {
        return 'Expr_ArrayItem';
    }
}
