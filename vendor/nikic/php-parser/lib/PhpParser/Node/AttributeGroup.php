<?php

declare (strict_types=1);
namespace _PhpScoper5384d7276e1f\PhpParser\Node;

use _PhpScoper5384d7276e1f\PhpParser\Node;
use _PhpScoper5384d7276e1f\PhpParser\NodeAbstract;
class AttributeGroup extends \_PhpScoper5384d7276e1f\PhpParser\NodeAbstract
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
