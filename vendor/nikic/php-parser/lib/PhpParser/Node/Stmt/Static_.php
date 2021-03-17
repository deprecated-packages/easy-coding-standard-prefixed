<?php

declare (strict_types=1);
namespace _PhpScoper842c7347e6be\PhpParser\Node\Stmt;

use _PhpScoper842c7347e6be\PhpParser\Node\Stmt;
class Static_ extends \_PhpScoper842c7347e6be\PhpParser\Node\Stmt
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
