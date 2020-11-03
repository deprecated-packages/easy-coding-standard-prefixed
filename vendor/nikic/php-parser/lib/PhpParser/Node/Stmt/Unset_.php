<?php

declare (strict_types=1);
namespace _PhpScoper83a475a0590e\PhpParser\Node\Stmt;

use _PhpScoper83a475a0590e\PhpParser\Node;
class Unset_ extends \_PhpScoper83a475a0590e\PhpParser\Node\Stmt
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
