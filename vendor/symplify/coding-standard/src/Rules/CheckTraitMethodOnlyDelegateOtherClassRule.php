<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\Instanceof_;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\MethodCall;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\PropertyFetch;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\ClassMethod;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Trait_;
use _PhpScoper2b44cb0c30af\PhpParser\NodeFinder;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\CheckTraitMethodOnlyDelegateOtherClassRule\CheckTraitMethodOnlyDelegateOtherClassRuleTest
 */
final class CheckTraitMethodOnlyDelegateOtherClassRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Trait method "%s()" should not contain any logic, but only delegate to other class call';
    /**
     * @var NodeFinder
     */
    private $nodeFinder;
    public function __construct(\_PhpScoper2b44cb0c30af\PhpParser\NodeFinder $nodeFinder)
    {
        $this->nodeFinder = $nodeFinder;
    }
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Trait_::class];
    }
    /**
     * @param Trait_ $node
     * @return string[]
     */
    public function process(\_PhpScoper2b44cb0c30af\PhpParser\Node $node, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : array
    {
        /** @var ClassMethod[] $classMethods */
        $classMethods = $this->nodeFinder->findInstanceOf($node, \_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\ClassMethod::class);
        foreach ($classMethods as $classMethod) {
            $classMethodName = $classMethod->name->toString();
            if ($this->hasMethodCallFromThis($classMethod)) {
                return [\sprintf(self::ERROR_MESSAGE, $classMethodName)];
            }
            if ($this->hasInstanceOfExpression($classMethod)) {
                return [\sprintf(self::ERROR_MESSAGE, $classMethodName)];
            }
        }
        return [];
    }
    private function hasMethodCallFromThis(\_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\ClassMethod $classMethod) : bool
    {
        /** @var MethodCall[] $methodCalls */
        $methodCalls = $this->nodeFinder->findInstanceOf($classMethod, \_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\MethodCall::class);
        foreach ($methodCalls as $methodCall) {
            $methodCallVar = $methodCall->var;
            if (!$methodCallVar instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\PropertyFetch) {
                return \true;
            }
        }
        return \false;
    }
    private function hasInstanceOfExpression(\_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\ClassMethod $classMethod) : bool
    {
        return (bool) $this->nodeFinder->findFirst($classMethod, function (\_PhpScoper2b44cb0c30af\PhpParser\Node $node) : bool {
            return $node instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\Instanceof_;
        });
    }
}
