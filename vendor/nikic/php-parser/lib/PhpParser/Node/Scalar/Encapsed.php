<?php

declare (strict_types=1);
namespace _PhpScoper967c4b7e296e\PhpParser\Node\Scalar;

use _PhpScoper967c4b7e296e\PhpParser\Node\Expr;
use _PhpScoper967c4b7e296e\PhpParser\Node\Scalar;
class Encapsed extends \_PhpScoper967c4b7e296e\PhpParser\Node\Scalar
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
