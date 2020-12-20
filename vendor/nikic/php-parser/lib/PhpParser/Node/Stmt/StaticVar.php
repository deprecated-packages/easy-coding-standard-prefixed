<?php

declare (strict_types=1);
namespace _PhpScoperab9510cd5d97\PhpParser\Node\Stmt;

use _PhpScoperab9510cd5d97\PhpParser\Node;
use _PhpScoperab9510cd5d97\PhpParser\Node\Expr;
class StaticVar extends \_PhpScoperab9510cd5d97\PhpParser\Node\Stmt
{
    /** @var Expr\Variable Variable */
    public $var;
    /** @var null|Node\Expr Default value */
    public $default;
    /**
     * Constructs a static variable node.
     *
     * @param Expr\Variable  $var         Name
     * @param null|Node\Expr $default    Default value
     * @param array          $attributes Additional attributes
     */
    public function __construct(\_PhpScoperab9510cd5d97\PhpParser\Node\Expr\Variable $var, \_PhpScoperab9510cd5d97\PhpParser\Node\Expr $default = null, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->var = $var;
        $this->default = $default;
    }
    public function getSubNodeNames() : array
    {
        return ['var', 'default'];
    }
    public function getType() : string
    {
        return 'Stmt_StaticVar';
    }
}
