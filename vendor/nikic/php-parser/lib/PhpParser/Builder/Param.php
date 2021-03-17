<?php

declare (strict_types=1);
namespace _PhpScoper246d3630afdd\PhpParser\Builder;

use _PhpScoper246d3630afdd\PhpParser;
use _PhpScoper246d3630afdd\PhpParser\BuilderHelpers;
use _PhpScoper246d3630afdd\PhpParser\Node;
class Param implements \_PhpScoper246d3630afdd\PhpParser\Builder
{
    protected $name;
    protected $default = null;
    /** @var Node\Identifier|Node\Name|Node\NullableType|null */
    protected $type = null;
    protected $byRef = \false;
    protected $variadic = \false;
    /**
     * Creates a parameter builder.
     *
     * @param string $name Name of the parameter
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    /**
     * Sets default value for the parameter.
     *
     * @param mixed $value Default value to use
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function setDefault($value)
    {
        $this->default = \_PhpScoper246d3630afdd\PhpParser\BuilderHelpers::normalizeValue($value);
        return $this;
    }
    /**
     * Sets type for the parameter.
     *
     * @param string|Node\Name|Node\NullableType|Node\UnionType $type Parameter type
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function setType($type)
    {
        $this->type = \_PhpScoper246d3630afdd\PhpParser\BuilderHelpers::normalizeType($type);
        if ($this->type == 'void') {
            throw new \LogicException('Parameter type cannot be void');
        }
        return $this;
    }
    /**
     * Sets type for the parameter.
     *
     * @param string|Node\Name|Node\NullableType|Node\UnionType $type Parameter type
     *
     * @return $this The builder instance (for fluid interface)
     *
     * @deprecated Use setType() instead
     */
    public function setTypeHint($type)
    {
        return $this->setType($type);
    }
    /**
     * Make the parameter accept the value by reference.
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function makeByRef()
    {
        $this->byRef = \true;
        return $this;
    }
    /**
     * Make the parameter variadic
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function makeVariadic()
    {
        $this->variadic = \true;
        return $this;
    }
    /**
     * Returns the built parameter node.
     *
     * @return Node\Param The built parameter node
     */
    public function getNode() : \_PhpScoper246d3630afdd\PhpParser\Node
    {
        return new \_PhpScoper246d3630afdd\PhpParser\Node\Param(new \_PhpScoper246d3630afdd\PhpParser\Node\Expr\Variable($this->name), $this->default, $this->type, $this->byRef, $this->variadic);
    }
}
