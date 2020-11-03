<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\NullableType;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\ClassMethod;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\NoNullableParameterRule\NoNullableParameterRuleTest
 */
final class NoNullableParameterRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Parameter "%s" cannot be nullable';
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\ClassMethod::class];
    }
    /**
     * @param ClassMethod $node
     * @return string[]
     */
    public function process(\_PhpScoper2b44cb0c30af\PhpParser\Node $node, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : array
    {
        $errorMessages = [];
        foreach ($node->params as $param) {
            if ($param->type === null) {
                continue;
            }
            if (!$param->type instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\NullableType) {
                continue;
            }
            $paramName = (string) $param->var->name;
            $errorMessages[] = \sprintf(self::ERROR_MESSAGE, $paramName);
        }
        return $errorMessages;
    }
}
