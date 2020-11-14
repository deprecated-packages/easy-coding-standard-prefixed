<?php

declare (strict_types=1);
namespace _PhpScoperddde3ba4aebc\PhpParser\Node;

use _PhpScoperddde3ba4aebc\PhpParser\NodeAbstract;
class NullableType extends \_PhpScoperddde3ba4aebc\PhpParser\NodeAbstract
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
        $this->type = \is_string($type) ? new \_PhpScoperddde3ba4aebc\PhpParser\Node\Identifier($type) : $type;
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
