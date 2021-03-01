<?php

declare (strict_types=1);
namespace _PhpScoperc4ea0f0bd23f\PhpParser\Node\Stmt;

use _PhpScoperc4ea0f0bd23f\PhpParser\Node\Name;
use _PhpScoperc4ea0f0bd23f\PhpParser\Node\Stmt;
class GroupUse extends \_PhpScoperc4ea0f0bd23f\PhpParser\Node\Stmt
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
    public function __construct(\_PhpScoperc4ea0f0bd23f\PhpParser\Node\Name $prefix, array $uses, int $type = \_PhpScoperc4ea0f0bd23f\PhpParser\Node\Stmt\Use_::TYPE_NORMAL, array $attributes = [])
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
