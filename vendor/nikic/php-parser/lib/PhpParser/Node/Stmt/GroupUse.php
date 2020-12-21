<?php

declare (strict_types=1);
namespace _PhpScoperfcf15c26e033\PhpParser\Node\Stmt;

use _PhpScoperfcf15c26e033\PhpParser\Node\Name;
use _PhpScoperfcf15c26e033\PhpParser\Node\Stmt;
class GroupUse extends \_PhpScoperfcf15c26e033\PhpParser\Node\Stmt
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
    public function __construct(\_PhpScoperfcf15c26e033\PhpParser\Node\Name $prefix, array $uses, int $type = \_PhpScoperfcf15c26e033\PhpParser\Node\Stmt\Use_::TYPE_NORMAL, array $attributes = [])
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
