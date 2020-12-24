<?php

declare (strict_types=1);
namespace _PhpScoper629192f0909b\PhpParser\Node;

use _PhpScoper629192f0909b\PhpParser\Node;
use _PhpScoper629192f0909b\PhpParser\NodeAbstract;
class AttributeGroup extends \_PhpScoper629192f0909b\PhpParser\NodeAbstract
{
    /** @var Attribute[] Attributes */
    public $attrs;
    /**
     * @param Attribute[] $attrs PHP attributes
     * @param array $attributes Additional node attributes
     */
    public function __construct(array $attrs, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->attrs = $attrs;
    }
    public function getSubNodeNames() : array
    {
        return ['attrs'];
    }
    public function getType() : string
    {
        return 'AttributeGroup';
    }
}
