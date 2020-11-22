<?php

declare (strict_types=1);
namespace _PhpScoper6db4fde00cda\PhpParser\Node;

use _PhpScoper6db4fde00cda\PhpParser\NodeAbstract;
class NullableType extends \_PhpScoper6db4fde00cda\PhpParser\NodeAbstract
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
        $this->type = \is_string($type) ? new \_PhpScoper6db4fde00cda\PhpParser\Node\Identifier($type) : $type;
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
