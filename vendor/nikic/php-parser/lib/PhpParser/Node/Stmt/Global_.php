<?php

declare (strict_types=1);
namespace _PhpScoper57272265e1c9\PhpParser\Node\Stmt;

use _PhpScoper57272265e1c9\PhpParser\Node;
class Global_ extends \_PhpScoper57272265e1c9\PhpParser\Node\Stmt
{
    /** @var Node\Expr[] Variables */
    public $vars;
    /**
     * Constructs a global variables list node.
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
        return 'Stmt_Global';
    }
}
