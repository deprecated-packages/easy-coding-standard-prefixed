<?php

declare (strict_types=1);
namespace _PhpScoperaba240c3d5f1\PhpParser\Node;

use _PhpScoperaba240c3d5f1\PhpParser\NodeAbstract;
class NullableType extends \_PhpScoperaba240c3d5f1\PhpParser\NodeAbstract
{
    /** @var Identifier|Name Type */
    public $type;
    /**
     * Constructs a nullable type (wrapping another type).
     *
     * @param string|Identifier|Name $type       Type
     * @param array                  $attributes Additional attributes
     */
    public function __construct($type, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->type = \is_string($type) ? new \_PhpScoperaba240c3d5f1\PhpParser\Node\Identifier($type) : $type;
    }
    public function getSubNodeNames() : array
    {
        return ['type'];
    }
    public function getType() : string
    {
        return 'NullableType';
    }
}
