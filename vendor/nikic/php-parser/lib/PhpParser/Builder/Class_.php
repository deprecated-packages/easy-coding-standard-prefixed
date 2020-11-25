<?php

declare (strict_types=1);
namespace _PhpScoperdc8fbcd7c69d\PhpParser\Builder;

use _PhpScoperdc8fbcd7c69d\PhpParser;
use _PhpScoperdc8fbcd7c69d\PhpParser\BuilderHelpers;
use _PhpScoperdc8fbcd7c69d\PhpParser\Node\Name;
use _PhpScoperdc8fbcd7c69d\PhpParser\Node\Stmt;
class Class_ extends \_PhpScoperdc8fbcd7c69d\PhpParser\Builder\Declaration
{
    protected $name;
    protected $extends = null;
    protected $implements = [];
    protected $flags = 0;
    protected $uses = [];
    protected $constants = [];
    protected $properties = [];
    protected $methods = [];
    /**
     * Creates a class builder.
     *
     * @param string $name Name of the class
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    /**
     * Extends a class.
     *
     * @param Name|string $class Name of class to extend
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function extend($class)
    {
        $this->extends = \_PhpScoperdc8fbcd7c69d\PhpParser\BuilderHelpers::normalizeName($class);
        return $this;
    }
    /**
     * Implements one or more interfaces.
     *
     * @param Name|string ...$interfaces Names of interfaces to implement
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function implement(...$interfaces)
    {
        foreach ($interfaces as $interface) {
            $this->implements[] = \_PhpScoperdc8fbcd7c69d\PhpParser\BuilderHelpers::normalizeName($interface);
        }
        return $this;
    }
    /**
     * Makes the class abstract.
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function makeAbstract()
    {
        $this->flags = \_PhpScoperdc8fbcd7c69d\PhpParser\BuilderHelpers::addModifier($this->flags, \_PhpScoperdc8fbcd7c69d\PhpParser\Node\Stmt\Class_::MODIFIER_ABSTRACT);
        return $this;
    }
    /**
     * Makes the class final.
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function makeFinal()
    {
        $this->flags = \_PhpScoperdc8fbcd7c69d\PhpParser\BuilderHelpers::addModifier($this->flags, \_PhpScoperdc8fbcd7c69d\PhpParser\Node\Stmt\Class_::MODIFIER_FINAL);
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
        $stmt = \_PhpScoperdc8fbcd7c69d\PhpParser\BuilderHelpers::normalizeNode($stmt);
        $targets = [\_PhpScoperdc8fbcd7c69d\PhpParser\Node\Stmt\TraitUse::class => &$this->uses, \_PhpScoperdc8fbcd7c69d\PhpParser\Node\Stmt\ClassConst::class => &$this->constants, \_PhpScoperdc8fbcd7c69d\PhpParser\Node\Stmt\Property::class => &$this->properties, \_PhpScoperdc8fbcd7c69d\PhpParser\Node\Stmt\ClassMethod::class => &$this->methods];
        $class = \get_class($stmt);
        if (!isset($targets[$class])) {
            throw new \LogicException(\sprintf('Unexpected node of type "%s"', $stmt->getType()));
        }
        $targets[$class][] = $stmt;
        return $this;
    }
    /**
     * Returns the built class node.
     *
     * @return Stmt\Class_ The built class node
     */
    public function getNode() : \_PhpScoperdc8fbcd7c69d\PhpParser\Node
    {
        return new \_PhpScoperdc8fbcd7c69d\PhpParser\Node\Stmt\Class_($this->name, ['flags' => $this->flags, 'extends' => $this->extends, 'implements' => $this->implements, 'stmts' => \array_merge($this->uses, $this->constants, $this->properties, $this->methods)], $this->attributes);
    }
}
