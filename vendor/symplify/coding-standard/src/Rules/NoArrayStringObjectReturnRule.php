<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\MethodCall;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\PropertyFetch;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\Variable;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
use _PhpScoper2b44cb0c30af\PHPStan\Type\ArrayType;
use _PhpScoper2b44cb0c30af\PHPStan\Type\ObjectType;
use _PhpScoper2b44cb0c30af\PHPStan\Type\StringType;
use _PhpScoper2b44cb0c30af\PHPStan\Type\Type;
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
        return [\_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\MethodCall::class, \_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\Variable::class, \_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\PropertyFetch::class];
    }
    /**
     * @param MethodCall|Variable|PropertyFetch $node
     * @return string[]
     */
    public function process(\_PhpScoper2b44cb0c30af\PhpParser\Node $node, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : array
    {
        if ($node instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\MethodCall) {
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
    private function processMethodCall(\_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\MethodCall $methodCall, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : array
    {
        $methodCallReturnType = $scope->getType($methodCall);
        if (!$this->isArrayStringToObjetType($methodCallReturnType)) {
            return [];
        }
        return [self::ERROR_MESSAGE];
    }
    private function isArrayStringToObjetType(\_PhpScoper2b44cb0c30af\PHPStan\Type\Type $type) : bool
    {
        if (!$type instanceof \_PhpScoper2b44cb0c30af\PHPStan\Type\ArrayType) {
            return \false;
        }
        if (!$type->getKeyType() instanceof \_PhpScoper2b44cb0c30af\PHPStan\Type\StringType) {
            return \false;
        }
        return $type->getItemType() instanceof \_PhpScoper2b44cb0c30af\PHPStan\Type\ObjectType;
    }
}
