<?php

declare (strict_types=1);
namespace _PhpScoper49c742f5a4ee\PhpParser\Node\Stmt;

use _PhpScoper49c742f5a4ee\PhpParser\Node;
class Return_ extends \_PhpScoper49c742f5a4ee\PhpParser\Node\Stmt
{
    /** @var null|Node\Expr Expression */
    public $expr;
    /**
     * Constructs a return node.
     *
     * @param null|Node\Expr $expr       Expression
     * @param array          $attributes Additional attributes
     */
    public function __construct(\_PhpScoper49c742f5a4ee\PhpParser\Node\Expr $expr = null, array $attributes = [])
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
