<?php

declare (strict_types=1);
namespace _PhpScoperd35c27cd4b09\PhpParser\Node\Stmt;

use _PhpScoperd35c27cd4b09\PhpParser\Node;
class Return_ extends \_PhpScoperd35c27cd4b09\PhpParser\Node\Stmt
{
    /** @var null|Node\Expr Expression */
    public $expr;
    /**
     * Constructs a return node.
     *
     * @param null|Node\Expr $expr       Expression
     * @param array          $attributes Additional attributes
     */
    public function __construct(\_PhpScoperd35c27cd4b09\PhpParser\Node\Expr $expr = null, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->expr = $expr;
    }
    public function getSubNodeNames() : array
    {
        return ['expr'];
    }
    public function getType() : string
    {
        return 'Stmt_Return';
    }
}
