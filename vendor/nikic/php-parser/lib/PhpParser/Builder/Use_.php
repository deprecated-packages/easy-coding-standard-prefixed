<?php

declare (strict_types=1);
namespace _PhpScoper9d73a84b09ad\PhpParser\Builder;

use _PhpScoper9d73a84b09ad\PhpParser\Builder;
use _PhpScoper9d73a84b09ad\PhpParser\BuilderHelpers;
use _PhpScoper9d73a84b09ad\PhpParser\Node;
use _PhpScoper9d73a84b09ad\PhpParser\Node\Stmt;
class Use_ implements \_PhpScoper9d73a84b09ad\PhpParser\Builder
{
    protected $name;
    protected $type;
    protected $alias = null;
    /**
     * Creates a name use (alias) builder.
     *
     * @param Node\Name|string $name Name of the entity (namespace, class, function, constant) to alias
     * @param int              $type One of the Stmt\Use_::TYPE_* constants
     */
    public function __construct($name, int $type)
    {
        $this->name = \_PhpScoper9d73a84b09ad\PhpParser\BuilderHelpers::normalizeName($name);
        $this->type = $type;
    }
    /**
     * Sets alias for used name.
     *
     * @param string $alias Alias to use (last component of full name by default)
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function as(string $alias)
    {
        $this->alias = $alias;
        return $this;
    }
    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : \_PhpScoper9d73a84b09ad\PhpParser\Node
    {
        return new \_PhpScoper9d73a84b09ad\PhpParser\Node\Stmt\Use_([new \_PhpScoper9d73a84b09ad\PhpParser\Node\Stmt\UseUse($this->name, $this->alias)], $this->type);
    }
}
