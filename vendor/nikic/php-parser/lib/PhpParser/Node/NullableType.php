<?php

declare (strict_types=1);
namespace _PhpScopera37d6fb0b1ab\PhpParser\Node;

use _PhpScopera37d6fb0b1ab\PhpParser\NodeAbstract;
class NullableType extends \_PhpScopera37d6fb0b1ab\PhpParser\NodeAbstract
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
        $this->type = \is_string($type) ? new \_PhpScopera37d6fb0b1ab\PhpParser\Node\Identifier($type) : $type;
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
