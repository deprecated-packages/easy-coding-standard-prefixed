<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\StaticCall;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Nop;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
use Symplify\CodingStandard\PhpParser\NodeNameResolver;
use Symplify\CodingStandard\PHPStan\ParentClassMethodNodeResolver;
use Throwable;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\NoParentMethodCallOnEmptyStatementInParentMethodRule\NoParentMethodCallOnEmptyStatementInParentMethodRuleTest
 */
final class NoParentMethodCallOnEmptyStatementInParentMethodRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Do not call parent method if parent method is empty';
    /**
     * @var NodeNameResolver
     */
    private $nodeNameResolver;
    /**
     * @var ParentClassMethodNodeResolver
     */
    private $parentClassMethodNodeResolver;
    public function __construct(\Symplify\CodingStandard\PhpParser\NodeNameResolver $nodeNameResolver, \Symplify\CodingStandard\PHPStan\ParentClassMethodNodeResolver $parentClassMethodNodeResolver)
    {
        $this->nodeNameResolver = $nodeNameResolver;
        $this->parentClassMethodNodeResolver = $parentClassMethodNodeResolver;
    }
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\StaticCall::class];
    }
    /**
     * @param StaticCall $node
     * @return string[]
     */
    public function process(\_PhpScoper2b44cb0c30af\PhpParser\Node $node, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : array
    {
        if ($node->class instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Expr) {
            return [];
        }
        $className = $node->class->toString();
        if ($className !== 'parent') {
            return [];
        }
        $classReflection = $scope->getClassReflection();
        if ($classReflection === null) {
            return [];
        }
        // skip exceptions
        if (\is_a($classReflection->getName(), \Throwable::class, \true)) {
            return [];
        }
        $methodName = $this->nodeNameResolver->getName($node->name);
        if ($methodName === null) {
            return [];
        }
        $parentClassMethodStmtCount = $this->resolveParentClassMethodStmtCount($scope, $methodName);
        if ($parentClassMethodStmtCount === 0) {
            return [self::ERROR_MESSAGE];
        }
        return [];
    }
    private function resolveParentClassMethodStmtCount(\_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope, string $methodName) : int
    {
        $parentClassMethodNodes = $this->parentClassMethodNodeResolver->resolveParentClassMethodNodes($scope, $methodName);
        $countStmts = 0;
        foreach ($parentClassMethodNodes as $stmt) {
            // ensure empty statement not counted
            if ($stmt instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Nop) {
                continue;
            }
            ++$countStmts;
        }
        return $countStmts;
    }
}
