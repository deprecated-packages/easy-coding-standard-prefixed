<?php

declare (strict_types=1);
namespace _PhpScoper246d3630afdd\PhpParser\Builder;

use _PhpScoper246d3630afdd\PhpParser\BuilderHelpers;
use _PhpScoper246d3630afdd\PhpParser\Node;
abstract class FunctionLike extends \_PhpScoper246d3630afdd\PhpParser\Builder\Declaration
{
    protected $returnByRef = \false;
    protected $params = [];
    /** @var string|Node\Name|Node\NullableType|null */
    protected $returnType = null;
    /**
     * Make the function return by reference.
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function makeReturnByRef()
    {
        $this->returnByRef = \true;
        return $this;
    }
    /**
     * Adds a parameter.
     *
     * @param Node\Param|Param $param The parameter to add
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function addParam($param)
    {
        $param = \_PhpScoper246d3630afdd\PhpParser\BuilderHelpers::normalizeNode($param);
        if (!$param instanceof \_PhpScoper246d3630afdd\PhpParser\Node\Param) {
            throw new \LogicException(\sprintf('Expected parameter node, got "%s"', $param->getType()));
        }
        $this->params[] = $param;
        return $this;
    }
    /**
     * Adds multiple parameters.
     *
     * @param array $params The parameters to add
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function addParams(array $params)
    {
        foreach ($params as $param) {
            $this->addParam($param);
        }
        return $this;
    }
    /**
     * Sets the return type for PHP 7.
     *
     * @param string|Node\Name|Node\NullableType $type One of array, callable, string, int, float,
     *                                                 bool, iterable, or a class/interface name.
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function setReturnType($type)
    {
        $this->returnType = \_PhpScoper246d3630afdd\PhpParser\BuilderHelpers::normalizeType($type);
        return $this;
    }
}
