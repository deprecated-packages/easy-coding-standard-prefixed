<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper8de082cbb8c7\PhpParser\Node;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\MethodCall;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\PropertyFetch;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\ElseIf_;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\If_;
use _PhpScoper8de082cbb8c7\PhpParser\NodeFinder;
use _PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope;
use _PhpScoper8de082cbb8c7\PHPStan\Type\BooleanType;
use _PhpScoper8de082cbb8c7\PHPStan\Type\ObjectType;
use _PhpScoper8de082cbb8c7\PHPStan\Type\ThisType;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\ForbiddenMethodCallInIfRule\ForbiddenMethodCallInIfRuleTest
 */
final class ForbiddenMethodCallInIfRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Method call in if or elseif is not allowed.';
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
        return [\_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\If_::class, \_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\ElseIf_::class];
    }
    /**
     * @param If_|ElseIf_ $node
     * @return string[]
     */
    public function process(\_PhpScoper8de082cbb8c7\PhpParser\Node $node, \_PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope $scope) : array
    {
        /** @var MethodCall[] $calls */
        $calls = $this->nodeFinder->findInstanceOf($node->cond, \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\MethodCall::class);
        $isHasArgs = $this->isHasArgs($calls, $scope);
        if (!$isHasArgs) {
            return [];
        }
        return [self::ERROR_MESSAGE];
    }
    /**
     * @param MethodCall[] $calls
     */
    private function isHasArgs(array $calls, \_PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope $scope) : bool
    {
        foreach ($calls as $call) {
            if ($call->args === []) {
                continue;
            }
            /** @var ObjectType $type */
            $type = $scope->getType($call->var);
            if ($call->var instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\PropertyFetch) {
                /** @var ObjectType|ThisType $type */
                $type = $scope->getType($call->var);
            }
            if ($type instanceof \_PhpScoper8de082cbb8c7\PHPStan\Type\ThisType) {
                continue;
            }
            $callType = $scope->getType($call);
            if ($callType instanceof \_PhpScoper8de082cbb8c7\PHPStan\Type\BooleanType) {
                continue;
            }
            return \true;
        }
        return \false;
    }
}
