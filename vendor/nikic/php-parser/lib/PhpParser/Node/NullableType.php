<?php

declare (strict_types=1);
namespace _PhpScoperc64a4ac1af35\PhpParser\Node;

use _PhpScoperc64a4ac1af35\PhpParser\NodeAbstract;
class NullableType extends \_PhpScoperc64a4ac1af35\PhpParser\NodeAbstract
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
        $this->type = \is_string($type) ? new \_PhpScoperc64a4ac1af35\PhpParser\Node\Identifier($type) : $type;
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
