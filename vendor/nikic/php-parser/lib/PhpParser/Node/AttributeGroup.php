<?php

declare (strict_types=1);
namespace _PhpScoper167729fa1dde\PhpParser\Node;

use _PhpScoper167729fa1dde\PhpParser\Node;
use _PhpScoper167729fa1dde\PhpParser\NodeAbstract;
class AttributeGroup extends \_PhpScoper167729fa1dde\PhpParser\NodeAbstract
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
