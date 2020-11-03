<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\ArrayDimFetch;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\Empty_;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\Isset_;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
use _PhpScoper2b44cb0c30af\PHPStan\Type\TypeWithClassName;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\NoIssetOnObjectRule\NoIssetOnObjectRuleTest
 */
final class NoIssetOnObjectRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Use default null value and nullable compare instead of isset on object';
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\Empty_::class, \_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\Isset_::class];
    }
    /**
     * @param Empty_|Isset_ $node
     * @return string[]
     */
    public function process(\_PhpScoper2b44cb0c30af\PhpParser\Node $node, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : array
    {
        if ($node instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\Isset_) {
            return $this->processIsset($node, $scope);
        }
        return $this->processEmpty($node, $scope);
    }
    /**
     * @return string[]
     */
    private function processIsset(\_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\Isset_ $isset, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : array
    {
        foreach ($isset->vars as $var) {
            if ($this->shouldSkipVariable($var, $scope)) {
                continue;
            }
            return [self::ERROR_MESSAGE];
        }
        return [];
    }
    /**
     * @return string[]
     */
    private function processEmpty(\_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\Empty_ $empty, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : array
    {
        $expr = $empty->expr;
        if ($this->shouldSkipVariable($expr, $scope)) {
            return [];
        }
        return [self::ERROR_MESSAGE];
    }
    private function shouldSkipVariable(\_PhpScoper2b44cb0c30af\PhpParser\Node\Expr $expr, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : bool
    {
        if ($expr instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\ArrayDimFetch) {
            return \true;
        }
        $varType = $scope->getType($expr);
        return !$varType instanceof \_PhpScoper2b44cb0c30af\PHPStan\Type\TypeWithClassName;
    }
}
