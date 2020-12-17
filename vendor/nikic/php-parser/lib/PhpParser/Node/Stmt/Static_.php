<?php

declare (strict_types=1);
namespace _PhpScopercf909b66eba8\PhpParser\Node\Stmt;

use _PhpScopercf909b66eba8\PhpParser\Node\Stmt;
class Static_ extends \_PhpScopercf909b66eba8\PhpParser\Node\Stmt
{
    /** @var StaticVar[] Variable definitions */
    public $vars;
    /**
     * Constructs a static variables list node.
     *
     * @param StaticVar[] $vars       Variable definitions
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
        return 'Stmt_Static';
    }
}
