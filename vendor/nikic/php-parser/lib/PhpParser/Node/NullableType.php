<?php

declare (strict_types=1);
namespace _PhpScoperd9fcac9e904f\PhpParser\Node;

use _PhpScoperd9fcac9e904f\PhpParser\NodeAbstract;
class NullableType extends \_PhpScoperd9fcac9e904f\PhpParser\NodeAbstract
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
        $this->type = \is_string($type) ? new \_PhpScoperd9fcac9e904f\PhpParser\Node\Identifier($type) : $type;
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
