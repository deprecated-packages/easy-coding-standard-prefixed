<?php

declare (strict_types=1);
namespace _PhpScoperfcce67077a55\PhpParser\Node\Scalar;

use _PhpScoperfcce67077a55\PhpParser\Node\Expr;
use _PhpScoperfcce67077a55\PhpParser\Node\Scalar;
class Encapsed extends \_PhpScoperfcce67077a55\PhpParser\Node\Scalar
{
    /** @var Expr[] list of string parts */
    public $parts;
    /**
     * Constructs an encapsed string node.
     *
     * @param Expr[] $parts      Encaps list
     * @param array  $attributes Additional attributes
     */
    public function __construct(array $parts, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->parts = $parts;
    }
    public function getSubNodeNames() : array
    {
        return ['parts'];
    }
    public function getType() : string
    {
        return 'Scalar_Encapsed';
    }
}
