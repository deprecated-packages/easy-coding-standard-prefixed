<?php

declare (strict_types=1);
namespace _PhpScopera09818bc50da\PhpParser\Node\Stmt;

use _PhpScopera09818bc50da\PhpParser\Node\Name;
use _PhpScopera09818bc50da\PhpParser\Node\Stmt;
class GroupUse extends \_PhpScopera09818bc50da\PhpParser\Node\Stmt
{
    /** @var int Type of group use */
    public $type;
    /** @var Name Prefix for uses */
    public $prefix;
    /** @var UseUse[] Uses */
    public $uses;
    /**
     * Constructs a group use node.
     *
     * @param Name     $prefix     Prefix for uses
     * @param UseUse[] $uses       Uses
     * @param int      $type       Type of group use
     * @param array    $attributes Additional attributes
     */
    public function __construct(\_PhpScopera09818bc50da\PhpParser\Node\Name $prefix, array $uses, int $type = \_PhpScopera09818bc50da\PhpParser\Node\Stmt\Use_::TYPE_NORMAL, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->type = $type;
        $this->prefix = $prefix;
        $this->uses = $uses;
    }
    public function getSubNodeNames() : array
    {
        return ['type', 'prefix', 'uses'];
    }
    public function getType() : string
    {
        return 'Stmt_GroupUse';
    }
}
