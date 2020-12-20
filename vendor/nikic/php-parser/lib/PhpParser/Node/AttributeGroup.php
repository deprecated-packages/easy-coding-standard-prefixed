<?php

declare (strict_types=1);
namespace _PhpScoperba24099fc6fd\PhpParser\Node;

use _PhpScoperba24099fc6fd\PhpParser\Node;
use _PhpScoperba24099fc6fd\PhpParser\NodeAbstract;
class AttributeGroup extends \_PhpScoperba24099fc6fd\PhpParser\NodeAbstract
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
