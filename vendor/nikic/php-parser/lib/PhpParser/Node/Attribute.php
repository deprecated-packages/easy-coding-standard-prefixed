<?php

declare (strict_types=1);
namespace _PhpScoper745103eaabcd\PhpParser\Node;

use _PhpScoper745103eaabcd\PhpParser\Node;
use _PhpScoper745103eaabcd\PhpParser\NodeAbstract;
class Attribute extends \_PhpScoper745103eaabcd\PhpParser\NodeAbstract
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
    public function __construct(\_PhpScoper745103eaabcd\PhpParser\Node\Name $name, array $args = [], array $attributes = [])
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
