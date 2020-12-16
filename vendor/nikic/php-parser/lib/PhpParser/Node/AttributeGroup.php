<?php

declare (strict_types=1);
namespace _PhpScoperd35c27cd4b09\PhpParser\Node;

use _PhpScoperd35c27cd4b09\PhpParser\Node;
use _PhpScoperd35c27cd4b09\PhpParser\NodeAbstract;
class AttributeGroup extends \_PhpScoperd35c27cd4b09\PhpParser\NodeAbstract
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
