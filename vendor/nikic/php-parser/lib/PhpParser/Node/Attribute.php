<?php

declare (strict_types=1);
namespace _PhpScoperc4ea0f0bd23f\PhpParser\Node;

use _PhpScoperc4ea0f0bd23f\PhpParser\Node;
use _PhpScoperc4ea0f0bd23f\PhpParser\NodeAbstract;
class Attribute extends \_PhpScoperc4ea0f0bd23f\PhpParser\NodeAbstract
{
    /** @var Name Attribute name */
    public $name;
    /** @var Arg[] Attribute arguments */
    public $args;
    /**
     * @param Node\Name $name       Attribute name
     * @param Arg[]     $args       Attribute arguments
     * @param array     $attributes Additional node attributes
     */
    public function __construct(\_PhpScoperc4ea0f0bd23f\PhpParser\Node\Name $name, array $args = [], array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->name = $name;
        $this->args = $args;
    }
    public function getSubNodeNames() : array
    {
        return ['name', 'args'];
    }
    public function getType() : string
    {
        return 'Attribute';
    }
}
