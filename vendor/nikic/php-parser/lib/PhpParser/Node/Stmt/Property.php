<?php

declare (strict_types=1);
namespace _PhpScoperedc2e0c967db\PhpParser\Node\Stmt;

use _PhpScoperedc2e0c967db\PhpParser\Node;
use _PhpScoperedc2e0c967db\PhpParser\Node\Identifier;
use _PhpScoperedc2e0c967db\PhpParser\Node\Name;
use _PhpScoperedc2e0c967db\PhpParser\Node\NullableType;
use _PhpScoperedc2e0c967db\PhpParser\Node\UnionType;
class Property extends \_PhpScoperedc2e0c967db\PhpParser\Node\Stmt
{
    /** @var int Modifiers */
    public $flags;
    /** @var PropertyProperty[] Properties */
    public $props;
    /** @var null|Identifier|Name|NullableType|UnionType Type declaration */
    public $type;
    /**
     * Constructs a class property list node.
     *
     * @param int                                                $flags      Modifiers
     * @param PropertyProperty[]                                 $props      Properties
     * @param array                                              $attributes Additional attributes
     * @param null|string|Identifier|Name|NullableType|UnionType $type       Type declaration
     */
    public function __construct(int $flags, array $props, array $attributes = [], $type = null)
    {
        $this->attributes = $attributes;
        $this->flags = $flags;
        $this->props = $props;
        $this->type = \is_string($type) ? new \_PhpScoperedc2e0c967db\PhpParser\Node\Identifier($type) : $type;
    }
    public function getSubNodeNames() : array
    {
        return ['flags', 'type', 'props'];
    }
    /**
     * Whether the property is explicitly or implicitly public.
     *
     * @return bool
     */
    public function isPublic() : bool
    {
        return ($this->flags & \_PhpScoperedc2e0c967db\PhpParser\Node\Stmt\Class_::MODIFIER_PUBLIC) !== 0 || ($this->flags & \_PhpScoperedc2e0c967db\PhpParser\Node\Stmt\Class_::VISIBILITY_MODIFIER_MASK) === 0;
    }
    /**
     * Whether the property is protected.
     *
     * @return bool
     */
    public function isProtected() : bool
    {
        return (bool) ($this->flags & \_PhpScoperedc2e0c967db\PhpParser\Node\Stmt\Class_::MODIFIER_PROTECTED);
    }
    /**
     * Whether the property is private.
     *
     * @return bool
     */
    public function isPrivate() : bool
    {
        return (bool) ($this->flags & \_PhpScoperedc2e0c967db\PhpParser\Node\Stmt\Class_::MODIFIER_PRIVATE);
    }
    /**
     * Whether the property is static.
     *
     * @return bool
     */
    public function isStatic() : bool
    {
        return (bool) ($this->flags & \_PhpScoperedc2e0c967db\PhpParser\Node\Stmt\Class_::MODIFIER_STATIC);
    }
    public function getType() : string
    {
        return 'Stmt_Property';
    }
}
