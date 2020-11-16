<?php

declare (strict_types=1);
namespace _PhpScoperad4605bb9267\PhpParser\Node\Expr;

use _PhpScoperad4605bb9267\PhpParser\Node;
use _PhpScoperad4605bb9267\PhpParser\Node\Expr;
use _PhpScoperad4605bb9267\PhpParser\Node\FunctionLike;
class ArrowFunction extends \_PhpScoperad4605bb9267\PhpParser\Node\Expr implements \_PhpScoperad4605bb9267\PhpParser\Node\FunctionLike
{
    /** @var bool */
    public $static;
    /** @var bool */
    public $byRef;
    /** @var Node\Param[] */
    public $params = [];
    /** @var null|Node\Identifier|Node\Name|Node\NullableType|Node\UnionType */
    public $returnType;
    /** @var Expr */
    public $expr;
    /**
     * @param array $subNodes   Array of the following optional subnodes:
     *                          'static'     => false   : Whether the closure is static
     *                          'byRef'      => false   : Whether to return by reference
     *                          'params'     => array() : Parameters
     *                          'returnType' => null    : Return type
     *                          'expr'       => Expr    : Expression body
     * @param array $attributes Additional attributes
     */
    public function __construct(array $subNodes = [], array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->static = $subNodes['static'] ?? \false;
        $this->byRef = $subNodes['byRef'] ?? \false;
        $this->params = $subNodes['params'] ?? [];
        $returnType = $subNodes['returnType'] ?? null;
        $this->returnType = \is_string($returnType) ? new \_PhpScoperad4605bb9267\PhpParser\Node\Identifier($returnType) : $returnType;
        $this->expr = $subNodes['expr'] ?? null;
    }
    public function getSubNodeNames() : array
    {
        return ['static', 'byRef', 'params', 'returnType', 'expr'];
    }
    public function returnsByRef() : bool
    {
        return $this->byRef;
    }
    public function getParams() : array
    {
        return $this->params;
    }
    public function getReturnType()
    {
        return $this->returnType;
    }
    /**
     * @return Node\Stmt\Return_[]
     */
    public function getStmts() : array
    {
        return [new \_PhpScoperad4605bb9267\PhpParser\Node\Stmt\Return_($this->expr)];
    }
    public function getType() : string
    {
        return 'Expr_ArrowFunction';
    }
}
