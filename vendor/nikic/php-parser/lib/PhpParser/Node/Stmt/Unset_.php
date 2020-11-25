<?php

declare (strict_types=1);
namespace _PhpScoperd301db66c80c\PhpParser\Node\Stmt;

use _PhpScoperd301db66c80c\PhpParser\Node;
class Unset_ extends \_PhpScoperd301db66c80c\PhpParser\Node\Stmt
{
    /** @var Node\Expr[] Variables to unset */
    public $vars;
    /**
     * Constructs an unset node.
     *
     * @param Node\Expr[] $vars       Variables to unset
     * @param array       $attributes Additional attributes
     */
    public function __construct(array $vars, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->vars = $vars;
    }
    public function getSubNodeNames() : array
    {
        return ['vars'];
    }
    public function getType() : string
    {
        return 'Stmt_Unset';
    }
}
