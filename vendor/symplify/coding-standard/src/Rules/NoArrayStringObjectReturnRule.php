<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper3d04c8135695\PhpParser\Node;
use _PhpScoper3d04c8135695\PhpParser\Node\Expr\MethodCall;
use _PhpScoper3d04c8135695\PhpParser\Node\Expr\PropertyFetch;
use _PhpScoper3d04c8135695\PhpParser\Node\Expr\Variable;
use _PhpScoper3d04c8135695\PHPStan\Analyser\Scope;
use _PhpScoper3d04c8135695\PHPStan\Type\ArrayType;
use _PhpScoper3d04c8135695\PHPStan\Type\ObjectType;
use _PhpScoper3d04c8135695\PHPStan\Type\StringType;
use _PhpScoper3d04c8135695\PHPStan\Type\Type;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\NoArrayStringObjectReturnRule\NoArrayStringObjectReturnRuleTest
 */
final class NoArrayStringObjectReturnRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Use another value object over string with value object arrays';
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper3d04c8135695\PhpParser\Node\Expr\MethodCall::class, \_PhpScoper3d04c8135695\PhpParser\Node\Expr\Variable::class, \_PhpScoper3d04c8135695\PhpParser\Node\Expr\PropertyFetch::class];
    }
    /**
     * @param MethodCall|Variable|PropertyFetch $node
     * @return string[]
     */
    public function process(\_PhpScoper3d04c8135695\PhpParser\Node $node, \_PhpScoper3d04c8135695\PHPStan\Analyser\Scope $scope) : array
    {
        if ($node instanceof \_PhpScoper3d04c8135695\PhpParser\Node\Expr\MethodCall) {
            return $this->processMethodCall($node, $scope);
        }
        $variableType = $scope->getType($node);
        if (!$this->isArrayStringToObjetType($variableType)) {
            return [];
        }
        return [self::ERROR_MESSAGE];
    }
    /**
     * @return string[]
     */
    private function processMethodCall(\_PhpScoper3d04c8135695\PhpParser\Node\Expr\MethodCall $methodCall, \_PhpScoper3d04c8135695\PHPStan\Analyser\Scope $scope) : array
    {
        $methodCallReturnType = $scope->getType($methodCall);
        if (!$this->isArrayStringToObjetType($methodCallReturnType)) {
            return [];
        }
        return [self::ERROR_MESSAGE];
    }
    private function isArrayStringToObjetType(\_PhpScoper3d04c8135695\PHPStan\Type\Type $type) : bool
    {
        if (!$type instanceof \_PhpScoper3d04c8135695\PHPStan\Type\ArrayType) {
            return \false;
        }
        if (!$type->getKeyType() instanceof \_PhpScoper3d04c8135695\PHPStan\Type\StringType) {
            return \false;
        }
        return $type->getItemType() instanceof \_PhpScoper3d04c8135695\PHPStan\Type\ObjectType;
    }
}
