<?php

declare (strict_types=1);
namespace _PhpScoperb6ccec8ab642\PhpParser\Node\Stmt;

use _PhpScoperb6ccec8ab642\PhpParser\Node;
class Global_ extends \_PhpScoperb6ccec8ab642\PhpParser\Node\Stmt
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
