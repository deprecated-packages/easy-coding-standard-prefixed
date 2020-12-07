<?php

declare (strict_types=1);
namespace _PhpScoperfa521053d812\PhpParser\Node\Stmt;

use _PhpScoperfa521053d812\PhpParser\Node;
use _PhpScoperfa521053d812\PhpParser\Node\Identifier;
class UseUse extends \_PhpScoperfa521053d812\PhpParser\Node\Stmt
{
    /** @var int One of the Stmt\Use_::TYPE_* constants. Will only differ from TYPE_UNKNOWN for mixed group uses */
    public $type;
    /** @var Node\Name Namespace, class, function or constant to alias */
    public $name;
    /** @var Identifier|null Alias */
    public $alias;
    /**
     * Constructs an alias (use) node.
     *
     * @param Node\Name              $name       Namespace/Class to alias
     * @param null|string|Identifier $alias      Alias
     * @param int                    $type       Type of the use element (for mixed group use only)
     * @param array                  $attributes Additional attributes
     */
    public function __construct(\_PhpScoperfa521053d812\PhpParser\Node\Name $name, $alias = null, int $type = \_PhpScoperfa521053d812\PhpParser\Node\Stmt\Use_::TYPE_UNKNOWN, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->type = $type;
        $this->name = $name;
        $this->alias = \is_string($alias) ? new \_PhpScoperfa521053d812\PhpParser\Node\Identifier($alias) : $alias;
    }
    public function getSubNodeNames() : array
    {
        return ['type', 'name', 'alias'];
    }
    /**
     * Get alias. If not explicitly given this is the last component of the used name.
     *
     * @return Identifier
     */
    public function getAlias() : \_PhpScoperfa521053d812\PhpParser\Node\Identifier
    {
        if (null !== $this->alias) {
            return $this->alias;
        }
        return new \_PhpScoperfa521053d812\PhpParser\Node\Identifier($this->name->getLast());
    }
    public function getType() : string
    {
        return 'Stmt_UseUse';
    }
}
