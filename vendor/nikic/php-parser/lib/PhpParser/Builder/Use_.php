<?php

declare (strict_types=1);
namespace _PhpScoper224ae0b86670\PhpParser\Builder;

use _PhpScoper224ae0b86670\PhpParser\Builder;
use _PhpScoper224ae0b86670\PhpParser\BuilderHelpers;
use _PhpScoper224ae0b86670\PhpParser\Node;
use _PhpScoper224ae0b86670\PhpParser\Node\Stmt;
class Use_ implements \_PhpScoper224ae0b86670\PhpParser\Builder
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
        $this->name = \_PhpScoper224ae0b86670\PhpParser\BuilderHelpers::normalizeName($name);
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
    public function getNode() : \_PhpScoper224ae0b86670\PhpParser\Node
    {
        return new \_PhpScoper224ae0b86670\PhpParser\Node\Stmt\Use_([new \_PhpScoper224ae0b86670\PhpParser\Node\Stmt\UseUse($this->name, $this->alias)], $this->type);
    }
}
