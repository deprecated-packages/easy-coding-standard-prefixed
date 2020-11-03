<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper3d04c8135695\PhpParser\Node;
use _PhpScoper3d04c8135695\PhpParser\Node\Expr;
use _PhpScoper3d04c8135695\PhpParser\Node\Expr\MethodCall;
use _PhpScoper3d04c8135695\PhpParser\Node\Identifier;
use _PhpScoper3d04c8135695\PhpParser\Node\Stmt\Class_;
use _PhpScoper3d04c8135695\PhpParser\Node\Stmt\ClassLike;
use _PhpScoper3d04c8135695\PHPStan\Analyser\Scope;
use _PhpScoper3d04c8135695\PHPStan\Node\ClassMethodsNode;
use _PhpScoper3d04c8135695\Symfony\Component\Console\Style\SymfonyStyle;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\CheckUnneededSymfonyStyleUsageRule\CheckUnneededSymfonyStyleUsageRuleTest
 */
final class CheckUnneededSymfonyStyleUsageRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'SymfonyStyle usage is unneeded for only newline, write, and/or writeln, use PHP_EOL and concatenation instead';
    /**
     * @var string[]
     */
    private const SIMPLE_CONSOLE_OUTPUT_METHODS = ['newline', 'write', 'writeln'];
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper3d04c8135695\PHPStan\Node\ClassMethodsNode::class];
    }
    /**
     * @param ClassMethodsNode $node
     * @return string[]
     */
    public function process(\_PhpScoper3d04c8135695\PhpParser\Node $node, \_PhpScoper3d04c8135695\PHPStan\Analyser\Scope $scope) : array
    {
        /** @var ClassLike $classLike */
        $classLike = $node->getClass();
        if ($this->hasParentClassSymfonyStyle($classLike)) {
            return [];
        }
        $methodCalls = $node->getMethodCalls();
        foreach ($methodCalls as $methodCall) {
            /** @var MethodCall $methodCallNode */
            $methodCallNode = $methodCall->getNode();
            if (!$methodCallNode->var instanceof \_PhpScoper3d04c8135695\PhpParser\Node\Expr) {
                return [];
            }
            $callerType = $methodCall->getScope()->getType($methodCallNode->var);
            if (!\method_exists($callerType, 'getClassName')) {
                return [];
            }
            if (!\is_a($callerType->getClassName(), \_PhpScoper3d04c8135695\Symfony\Component\Console\Style\SymfonyStyle::class, \true)) {
                return [];
            }
            /** @var Identifier $methodCallIdentifier */
            $methodCallIdentifier = $methodCallNode->name;
            $methodName = (string) $methodCallIdentifier->name;
            if (!\in_array($methodName, self::SIMPLE_CONSOLE_OUTPUT_METHODS, \true)) {
                return [];
            }
        }
        if ($methodCalls === []) {
            return [];
        }
        return [self::ERROR_MESSAGE];
    }
    private function hasParentClassSymfonyStyle(\_PhpScoper3d04c8135695\PhpParser\Node\Stmt\ClassLike $classLike) : bool
    {
        if (!$classLike instanceof \_PhpScoper3d04c8135695\PhpParser\Node\Stmt\Class_) {
            return \false;
        }
        if ($classLike->extends === null) {
            return \false;
        }
        $parentClass = $classLike->extends->toString();
        return \is_a($parentClass, \_PhpScoper3d04c8135695\Symfony\Component\Console\Style\SymfonyStyle::class, \true);
    }
}
