<?php

declare (strict_types=1);
namespace _PhpScoperda2604e33acb\PhpParser\Builder;

use _PhpScoperda2604e33acb\PhpParser;
use _PhpScoperda2604e33acb\PhpParser\BuilderHelpers;
use _PhpScoperda2604e33acb\PhpParser\Node\Name;
use _PhpScoperda2604e33acb\PhpParser\Node\Stmt;
class Interface_ extends \_PhpScoperda2604e33acb\PhpParser\Builder\Declaration
{
    protected $name;
    protected $extends = [];
    protected $constants = [];
    protected $methods = [];
    /**
     * Creates an interface builder.
     *
     * @param string $name Name of the interface
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    /**
     * Extends one or more interfaces.
     *
     * @param Name|string ...$interfaces Names of interfaces to extend
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function extend(...$interfaces)
    {
        foreach ($interfaces as $interface) {
            $this->extends[] = \_PhpScoperda2604e33acb\PhpParser\BuilderHelpers::normalizeName($interface);
        }
        return $this;
    }
    /**
     * Adds a statement.
     *
     * @param Stmt|PhpParser\Builder $stmt The statement to add
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function addStmt($stmt)
    {
        $stmt = \_PhpScoperda2604e33acb\PhpParser\BuilderHelpers::normalizeNode($stmt);
        if ($stmt instanceof \_PhpScoperda2604e33acb\PhpParser\Node\Stmt\ClassConst) {
            $this->constants[] = $stmt;
        } elseif ($stmt instanceof \_PhpScoperda2604e33acb\PhpParser\Node\Stmt\ClassMethod) {
            // we erase all statements in the body of an interface method
            $stmt->stmts = null;
            $this->methods[] = $stmt;
        } else {
            throw new \LogicException(\sprintf('Unexpected node of type "%s"', $stmt->getType()));
        }
        return $this;
    }
    /**
     * Returns the built interface node.
     *
     * @return Stmt\Interface_ The built interface node
     */
    public function getNode() : \_PhpScoperda2604e33acb\PhpParser\Node
    {
        return new \_PhpScoperda2604e33acb\PhpParser\Node\Stmt\Interface_($this->name, ['extends' => $this->extends, 'stmts' => \array_merge($this->constants, $this->methods)], $this->attributes);
    }
}
