<?php

declare (strict_types=1);
namespace _PhpScoper4f985154d5a0\PhpParser\Node\Stmt;

use _PhpScoper4f985154d5a0\PhpParser\Node;
use _PhpScoper4f985154d5a0\PhpParser\Node\Identifier;
use _PhpScoper4f985154d5a0\PhpParser\Node\Name;
use _PhpScoper4f985154d5a0\PhpParser\Node\NullableType;
use _PhpScoper4f985154d5a0\PhpParser\Node\UnionType;
class Property extends \_PhpScoper4f985154d5a0\PhpParser\Node\Stmt
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
        $this->type = \is_string($type) ? new \_PhpScoper4f985154d5a0\PhpParser\Node\Identifier($type) : $type;
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
        return ($this->flags & \_PhpScoper4f985154d5a0\PhpParser\Node\Stmt\Class_::MODIFIER_PUBLIC) !== 0 || ($this->flags & \_PhpScoper4f985154d5a0\PhpParser\Node\Stmt\Class_::VISIBILITY_MODIFIER_MASK) === 0;
    }
    /**
     * Whether the property is protected.
     *
     * @return bool
     */
    public function isProtected() : bool
    {
        return (bool) ($this->flags & \_PhpScoper4f985154d5a0\PhpParser\Node\Stmt\Class_::MODIFIER_PROTECTED);
    }
    /**
     * Whether the property is private.
     *
     * @return bool
     */
    public function isPrivate() : bool
    {
        return (bool) ($this->flags & \_PhpScoper4f985154d5a0\PhpParser\Node\Stmt\Class_::MODIFIER_PRIVATE);
    }
    /**
     * Whether the property is static.
     *
     * @return bool
     */
    public function isStatic() : bool
    {
        return (bool) ($this->flags & \_PhpScoper4f985154d5a0\PhpParser\Node\Stmt\Class_::MODIFIER_STATIC);
    }
    public function getType() : string
    {
        return 'Stmt_Property';
    }
}
