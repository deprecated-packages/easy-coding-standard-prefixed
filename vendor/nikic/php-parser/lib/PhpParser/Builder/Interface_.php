<?php

declare (strict_types=1);
namespace _PhpScoper6db4fde00cda\PhpParser\Builder;

use _PhpScoper6db4fde00cda\PhpParser;
use _PhpScoper6db4fde00cda\PhpParser\BuilderHelpers;
use _PhpScoper6db4fde00cda\PhpParser\Node\Name;
use _PhpScoper6db4fde00cda\PhpParser\Node\Stmt;
class Interface_ extends \_PhpScoper6db4fde00cda\PhpParser\Builder\Declaration
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
            $this->extends[] = \_PhpScoper6db4fde00cda\PhpParser\BuilderHelpers::normalizeName($interface);
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
        $stmt = \_PhpScoper6db4fde00cda\PhpParser\BuilderHelpers::normalizeNode($stmt);
        if ($stmt instanceof \_PhpScoper6db4fde00cda\PhpParser\Node\Stmt\ClassConst) {
            $this->constants[] = $stmt;
        } elseif ($stmt instanceof \_PhpScoper6db4fde00cda\PhpParser\Node\Stmt\ClassMethod) {
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
    public function getNode() : \_PhpScoper6db4fde00cda\PhpParser\Node
    {
        return new \_PhpScoper6db4fde00cda\PhpParser\Node\Stmt\Interface_($this->name, ['extends' => $this->extends, 'stmts' => \array_merge($this->constants, $this->methods)], $this->attributes);
    }
}
