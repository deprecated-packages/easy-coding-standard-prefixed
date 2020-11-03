<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper8de082cbb8c7\PhpParser\Node;
use _PhpScoper8de082cbb8c7\PhpParser\Node\NullableType;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\ClassMethod;
use _PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope;
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
        return [\_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\ClassMethod::class];
    }
    /**
     * @param ClassMethod $node
     * @return string[]
     */
    public function process(\_PhpScoper8de082cbb8c7\PhpParser\Node $node, \_PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope $scope) : array
    {
        $errorMessages = [];
        foreach ($node->params as $param) {
            if ($param->type === null) {
                continue;
            }
            if (!$param->type instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\NullableType) {
                continue;
            }
            $paramName = (string) $param->var->name;
            $errorMessages[] = \sprintf(self::ERROR_MESSAGE, $paramName);
        }
        return $errorMessages;
    }
}
