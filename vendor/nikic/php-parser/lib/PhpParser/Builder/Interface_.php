<?php

declare (strict_types=1);
namespace _PhpScoperfcf15c26e033\PhpParser\Builder;

use _PhpScoperfcf15c26e033\PhpParser;
use _PhpScoperfcf15c26e033\PhpParser\BuilderHelpers;
use _PhpScoperfcf15c26e033\PhpParser\Node\Name;
use _PhpScoperfcf15c26e033\PhpParser\Node\Stmt;
class Interface_ extends \_PhpScoperfcf15c26e033\PhpParser\Builder\Declaration
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
            $this->extends[] = \_PhpScoperfcf15c26e033\PhpParser\BuilderHelpers::normalizeName($interface);
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
        $stmt = \_PhpScoperfcf15c26e033\PhpParser\BuilderHelpers::normalizeNode($stmt);
        if ($stmt instanceof \_PhpScoperfcf15c26e033\PhpParser\Node\Stmt\ClassConst) {
            $this->constants[] = $stmt;
        } elseif ($stmt instanceof \_PhpScoperfcf15c26e033\PhpParser\Node\Stmt\ClassMethod) {
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
    public function getNode() : \_PhpScoperfcf15c26e033\PhpParser\Node
    {
        return new \_PhpScoperfcf15c26e033\PhpParser\Node\Stmt\Interface_($this->name, ['extends' => $this->extends, 'stmts' => \array_merge($this->constants, $this->methods)], $this->attributes);
    }
}
