<?php

declare (strict_types=1);
namespace _PhpScoperaad82bb90a86\PhpParser\Node;

use _PhpScoperaad82bb90a86\PhpParser\NodeAbstract;
class NullableType extends \_PhpScoperaad82bb90a86\PhpParser\NodeAbstract
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
        $this->type = \is_string($type) ? new \_PhpScoperaad82bb90a86\PhpParser\Node\Identifier($type) : $type;
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
