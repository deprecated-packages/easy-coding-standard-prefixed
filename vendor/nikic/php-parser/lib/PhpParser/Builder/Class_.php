<?php

declare (strict_types=1);
namespace _PhpScoper229e8121cf9f\PhpParser\Builder;

use _PhpScoper229e8121cf9f\PhpParser;
use _PhpScoper229e8121cf9f\PhpParser\BuilderHelpers;
use _PhpScoper229e8121cf9f\PhpParser\Node\Name;
use _PhpScoper229e8121cf9f\PhpParser\Node\Stmt;
class Class_ extends \_PhpScoper229e8121cf9f\PhpParser\Builder\Declaration
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
        $this->extends = \_PhpScoper229e8121cf9f\PhpParser\BuilderHelpers::normalizeName($class);
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
            $this->implements[] = \_PhpScoper229e8121cf9f\PhpParser\BuilderHelpers::normalizeName($interface);
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
        $this->flags = \_PhpScoper229e8121cf9f\PhpParser\BuilderHelpers::addModifier($this->flags, \_PhpScoper229e8121cf9f\PhpParser\Node\Stmt\Class_::MODIFIER_ABSTRACT);
        return $this;
    }
    /**
     * Makes the class final.
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function makeFinal()
    {
        $this->flags = \_PhpScoper229e8121cf9f\PhpParser\BuilderHelpers::addModifier($this->flags, \_PhpScoper229e8121cf9f\PhpParser\Node\Stmt\Class_::MODIFIER_FINAL);
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
        $stmt = \_PhpScoper229e8121cf9f\PhpParser\BuilderHelpers::normalizeNode($stmt);
        $targets = [\_PhpScoper229e8121cf9f\PhpParser\Node\Stmt\TraitUse::class => &$this->uses, \_PhpScoper229e8121cf9f\PhpParser\Node\Stmt\ClassConst::class => &$this->constants, \_PhpScoper229e8121cf9f\PhpParser\Node\Stmt\Property::class => &$this->properties, \_PhpScoper229e8121cf9f\PhpParser\Node\Stmt\ClassMethod::class => &$this->methods];
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
    public function getNode() : \_PhpScoper229e8121cf9f\PhpParser\Node
    {
        return new \_PhpScoper229e8121cf9f\PhpParser\Node\Stmt\Class_($this->name, ['flags' => $this->flags, 'extends' => $this->extends, 'implements' => $this->implements, 'stmts' => \array_merge($this->uses, $this->constants, $this->properties, $this->methods)], $this->attributes);
    }
}
