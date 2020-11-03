<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\MethodCall;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\New_;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\ForbiddenMethodCallOnNewRule\ForbiddenMethodCallOnNewRuleTest
 */
final class ForbiddenMethodCallOnNewRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Method call on new expression is not allowed.';
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\MethodCall::class];
    }
    /**
     * @param MethodCall $node
     * @return string[]
     */
    public function process(\_PhpScoper2b44cb0c30af\PhpParser\Node $node, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : array
    {
        $methodCallVar = $node->var;
        if (!$methodCallVar instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\New_) {
            return [];
        }
        return [self::ERROR_MESSAGE];
    }
}
