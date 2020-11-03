<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper3d04c8135695\PhpParser\Node;
use _PhpScoper3d04c8135695\PhpParser\Node\Expr\StaticCall;
use _PhpScoper3d04c8135695\PhpParser\Node\Identifier;
use _PhpScoper3d04c8135695\PhpParser\Node\Name;
use _PhpScoper3d04c8135695\PhpParser\Node\Stmt\Class_;
use _PhpScoper3d04c8135695\PhpParser\Node\Stmt\ClassMethod;
use _PhpScoper3d04c8135695\PHPStan\Analyser\Scope;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\RequireThisOnParentMethodCallRule\RequireThisOnParentMethodCallRuleTest
 */
final class RequireThisOnParentMethodCallRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Use $this-> on parent method call unless in the same named method';
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper3d04c8135695\PhpParser\Node\Expr\StaticCall::class];
    }
    /**
     * @param StaticCall $node
     * @return string[]
     */
    public function process(\_PhpScoper3d04c8135695\PhpParser\Node $node, \_PhpScoper3d04c8135695\PHPStan\Analyser\Scope $scope) : array
    {
        if (!$node->class instanceof \_PhpScoper3d04c8135695\PhpParser\Node\Name) {
            return [];
        }
        $isParentCall = $node->class->parts[0] === 'parent';
        if (!$isParentCall) {
            return [];
        }
        $classMethod = $this->resolveCurrentClassMethod($node);
        if ($classMethod === null) {
            return [];
        }
        /** @var Identifier $classMethodIdentifier */
        $classMethodIdentifier = $classMethod->name;
        /** @var Identifier $staticCallIdentifier */
        $staticCallIdentifier = $node->name;
        if ((string) $classMethodIdentifier === (string) $staticCallIdentifier) {
            return [];
        }
        if ($this->isMethodNameExistsInCurrentClass($classMethod, (string) $staticCallIdentifier)) {
            return [];
        }
        return [self::ERROR_MESSAGE];
    }
    private function isMethodNameExistsInCurrentClass(\_PhpScoper3d04c8135695\PhpParser\Node\Stmt\ClassMethod $classMethod, string $methodName) : bool
    {
        $class = $this->resolveCurrentClass($classMethod);
        return $class instanceof \_PhpScoper3d04c8135695\PhpParser\Node\Stmt\Class_ && $class->getMethod($methodName) instanceof \_PhpScoper3d04c8135695\PhpParser\Node\Stmt\ClassMethod;
    }
}
