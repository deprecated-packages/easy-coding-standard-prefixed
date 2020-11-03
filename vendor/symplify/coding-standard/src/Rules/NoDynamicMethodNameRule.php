<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use Closure;
use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\FuncCall;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\MethodCall;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\StaticCall;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
use _PhpScoper2b44cb0c30af\PHPStan\Type\CallableType;
use _PhpScoper2b44cb0c30af\PHPStan\Type\NullType;
use _PhpScoper2b44cb0c30af\PHPStan\Type\ObjectType;
use _PhpScoper2b44cb0c30af\PHPStan\Type\Type;
use _PhpScoper2b44cb0c30af\PHPStan\Type\UnionType;
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
    public function process(\_PhpScoper2b44cb0c30af\PhpParser\Node $node, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : array
    {
        if (!$node->name instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Expr) {
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
        return [\_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\MethodCall::class, \_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\StaticCall::class, \_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\FuncCall::class];
    }
    private function isClosureOrCallableType(\_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope, \_PhpScoper2b44cb0c30af\PhpParser\Node\Expr $expr) : bool
    {
        $nameStaticType = $scope->getType($expr);
        $nameStaticType = $this->unwrapNullableType($nameStaticType);
        if ($nameStaticType instanceof \_PhpScoper2b44cb0c30af\PHPStan\Type\CallableType) {
            return \true;
        }
        if (!$nameStaticType instanceof \_PhpScoper2b44cb0c30af\PHPStan\Type\ObjectType) {
            return \false;
        }
        return $nameStaticType->getClassName() === \Closure::class;
    }
    private function unwrapNullableType(\_PhpScoper2b44cb0c30af\PHPStan\Type\Type $type) : \_PhpScoper2b44cb0c30af\PHPStan\Type\Type
    {
        if (!$type instanceof \_PhpScoper2b44cb0c30af\PHPStan\Type\UnionType) {
            return $type;
        }
        $unionedTypes = $type->getTypes();
        if (\count($unionedTypes) !== 2) {
            return $type;
        }
        $nullSuperTypeTrinaryLogic = $type->isSuperTypeOf(new \_PhpScoper2b44cb0c30af\PHPStan\Type\NullType());
        if (!$nullSuperTypeTrinaryLogic->yes()) {
            return $type;
        }
        foreach ($unionedTypes as $unionedType) {
            if ($unionedType instanceof \_PhpScoper2b44cb0c30af\PHPStan\Type\NullType) {
                continue;
            }
            return $unionedType;
        }
        return $type;
    }
}
