<?php

declare (strict_types=1);
namespace _PhpScoperaad82bb90a86\PhpParser\Node\Stmt;

use _PhpScoperaad82bb90a86\PhpParser\Node;
class Return_ extends \_PhpScoperaad82bb90a86\PhpParser\Node\Stmt
{
    /** @var null|Node\Expr Expression */
    public $expr;
    /**
     * Constructs a return node.
     *
     * @param null|Node\Expr $expr       Expression
     * @param array          $attributes Additional attributes
     */
    public function __construct(\_PhpScoperaad82bb90a86\PhpParser\Node\Expr $expr = null, array $attributes = [])
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
