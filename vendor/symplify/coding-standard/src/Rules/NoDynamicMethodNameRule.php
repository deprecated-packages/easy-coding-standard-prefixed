<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use Closure;
use _PhpScoper3d04c8135695\PhpParser\Node;
use _PhpScoper3d04c8135695\PhpParser\Node\Expr;
use _PhpScoper3d04c8135695\PhpParser\Node\Expr\FuncCall;
use _PhpScoper3d04c8135695\PhpParser\Node\Expr\MethodCall;
use _PhpScoper3d04c8135695\PhpParser\Node\Expr\StaticCall;
use _PhpScoper3d04c8135695\PHPStan\Analyser\Scope;
use _PhpScoper3d04c8135695\PHPStan\Type\CallableType;
use _PhpScoper3d04c8135695\PHPStan\Type\NullType;
use _PhpScoper3d04c8135695\PHPStan\Type\ObjectType;
use _PhpScoper3d04c8135695\PHPStan\Type\Type;
use _PhpScoper3d04c8135695\PHPStan\Type\UnionType;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\NoDynamicMethodNameRule\NoDynamicMethodNameRuleTest
 */
final class NoDynamicMethodNameRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Use explicit method names over dynamic';
    /**
     * @param MethodCall|StaticCall|FuncCall $node
     * @return string[]
     */
    public function process(\_PhpScoper3d04c8135695\PhpParser\Node $node, \_PhpScoper3d04c8135695\PHPStan\Analyser\Scope $scope) : array
    {
        if (!$node->name instanceof \_PhpScoper3d04c8135695\PhpParser\Node\Expr) {
            return [];
        }
        if ($this->isClosureOrCallableType($scope, $node->name)) {
            return [];
        }
        return [self::ERROR_MESSAGE];
    }
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper3d04c8135695\PhpParser\Node\Expr\MethodCall::class, \_PhpScoper3d04c8135695\PhpParser\Node\Expr\StaticCall::class, \_PhpScoper3d04c8135695\PhpParser\Node\Expr\FuncCall::class];
    }
    private function isClosureOrCallableType(\_PhpScoper3d04c8135695\PHPStan\Analyser\Scope $scope, \_PhpScoper3d04c8135695\PhpParser\Node\Expr $expr) : bool
    {
        $nameStaticType = $scope->getType($expr);
        $nameStaticType = $this->unwrapNullableType($nameStaticType);
        if ($nameStaticType instanceof \_PhpScoper3d04c8135695\PHPStan\Type\CallableType) {
            return \true;
        }
        if (!$nameStaticType instanceof \_PhpScoper3d04c8135695\PHPStan\Type\ObjectType) {
            return \false;
        }
        return $nameStaticType->getClassName() === \Closure::class;
    }
    private function unwrapNullableType(\_PhpScoper3d04c8135695\PHPStan\Type\Type $type) : \_PhpScoper3d04c8135695\PHPStan\Type\Type
    {
        if (!$type instanceof \_PhpScoper3d04c8135695\PHPStan\Type\UnionType) {
            return $type;
        }
        $unionedTypes = $type->getTypes();
        if (\count($unionedTypes) !== 2) {
            return $type;
        }
        $nullSuperTypeTrinaryLogic = $type->isSuperTypeOf(new \_PhpScoper3d04c8135695\PHPStan\Type\NullType());
        if (!$nullSuperTypeTrinaryLogic->yes()) {
            return $type;
        }
        foreach ($unionedTypes as $unionedType) {
            if ($unionedType instanceof \_PhpScoper3d04c8135695\PHPStan\Type\NullType) {
                continue;
            }
            return $unionedType;
        }
        return $type;
    }
}
