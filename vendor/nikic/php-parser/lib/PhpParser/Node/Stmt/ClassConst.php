<?php

declare (strict_types=1);
namespace _PhpScoperad4605bb9267\PhpParser\Node\Stmt;

use _PhpScoperad4605bb9267\PhpParser\Node;
class ClassConst extends \_PhpScoperad4605bb9267\PhpParser\Node\Stmt
{
    /** @var int Modifiers */
    public $flags;
    /** @var Node\Const_[] Constant declarations */
    public $consts;
    /**
     * Constructs a class const list node.
     *
     * @param Node\Const_[] $consts     Constant declarations
     * @param int           $flags      Modifiers
     * @param array         $attributes Additional attributes
     */
    public function __construct(array $consts, int $flags = 0, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->flags = $flags;
        $this->consts = $consts;
    }
    public function getSubNodeNames() : array
    {
        return ['flags', 'consts'];
    }
    /**
     * Whether constant is explicitly or implicitly public.
     *
     * @return bool
     */
    public function isPublic() : bool
    {
        return ($this->flags & \_PhpScoperad4605bb9267\PhpParser\Node\Stmt\Class_::MODIFIER_PUBLIC) !== 0 || ($this->flags & \_PhpScoperad4605bb9267\PhpParser\Node\Stmt\Class_::VISIBILITY_MODIFIER_MASK) === 0;
    }
    /**
     * Whether constant is protected.
     *
     * @return bool
     */
    public function isProtected() : bool
    {
        return (bool) ($this->flags & \_PhpScoperad4605bb9267\PhpParser\Node\Stmt\Class_::MODIFIER_PROTECTED);
    }
    /**
     * Whether constant is private.
     *
     * @return bool
     */
    public function isPrivate() : bool
    {
        return (bool) ($this->flags & \_PhpScoperad4605bb9267\PhpParser\Node\Stmt\Class_::MODIFIER_PRIVATE);
    }
    public function getType() : string
    {
        return 'Stmt_ClassConst';
    }
}
