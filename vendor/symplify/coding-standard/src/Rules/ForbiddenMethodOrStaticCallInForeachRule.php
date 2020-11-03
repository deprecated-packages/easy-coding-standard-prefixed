<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper8de082cbb8c7\PhpParser\Node;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\MethodCall;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\StaticCall;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Foreach_;
use _PhpScoper8de082cbb8c7\PhpParser\NodeFinder;
use _PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\ForbiddenMethodOrStaticCallInForeachRule\ForbiddenMethodOrStaticCallInForeachRuleTest
 */
final class ForbiddenMethodOrStaticCallInForeachRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Method or Static call in foreach is not allowed.';
    /**
     * @var NodeFinder
     */
    private $nodeFinder;
    public function __construct(\_PhpScoper8de082cbb8c7\PhpParser\NodeFinder $nodeFinder)
    {
        $this->nodeFinder = $nodeFinder;
    }
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Foreach_::class];
    }
    /**
     * @param Foreach_ $node
     * @return string[]
     */
    public function process(\_PhpScoper8de082cbb8c7\PhpParser\Node $node, \_PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope $scope) : array
    {
        $expressionClasses = [\_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\MethodCall::class, \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\StaticCall::class];
        foreach ($expressionClasses as $expressionClass) {
            /** @var MethodCall[]|StaticCall[] $calls */
            $calls = $this->nodeFinder->findInstanceOf($node->expr, $expressionClass);
            $isHasArgs = $this->isHasArgs($calls);
            if (!$isHasArgs) {
                continue;
            }
            return [self::ERROR_MESSAGE];
        }
        return [];
    }
    /**
     * @param MethodCall[]|StaticCall[] $calls
     */
    private function isHasArgs(array $calls) : bool
    {
        foreach ($calls as $call) {
            if ($call->args !== []) {
                return \true;
            }
        }
        return \false;
    }
}
