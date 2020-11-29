<?php

declare (strict_types=1);
namespace _PhpScoper28ab463fc3ba\PhpParser\Node;

use _PhpScoper28ab463fc3ba\PhpParser\Node;
use _PhpScoper28ab463fc3ba\PhpParser\NodeAbstract;
class Attribute extends \_PhpScoper28ab463fc3ba\PhpParser\NodeAbstract
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
    public function __construct(\_PhpScoper28ab463fc3ba\PhpParser\Node\Name $name, array $args = [], array $attributes = [])
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
