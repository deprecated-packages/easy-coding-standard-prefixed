<?php

declare (strict_types=1);
namespace _PhpScoper224ae0b86670\PhpParser\Node\Expr;

use _PhpScoper224ae0b86670\PhpParser\Node\Expr;
class Isset_ extends \_PhpScoper224ae0b86670\PhpParser\Node\Expr
{
    /** @var Expr[] Variables */
    public $vars;
    /**
     * Constructs an array node.
     *
     * @param Expr[] $vars       Variables
     * @param array  $attributes Additional attributes
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
        return 'Expr_Isset';
    }
}
