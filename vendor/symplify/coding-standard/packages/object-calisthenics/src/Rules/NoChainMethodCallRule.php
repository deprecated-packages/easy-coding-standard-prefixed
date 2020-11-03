<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\ObjectCalisthenics\Rules;

use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\MethodCall;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
use _PhpScoper2b44cb0c30af\PHPStan\Rules;
use Symplify\CodingStandard\Rules\AbstractSymplifyRule;
/**
 * @see https://github.com/object-calisthenics/phpcs-calisthenics-rules#5-use-only-one-object-operator---per-statement
 *
 * @see \Symplify\CodingStandard\ObjectCalisthenics\Tests\Rules\NoChainMethodCallRule\NoChainMethodCallRuleTest
 */
final class NoChainMethodCallRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Do not use chained method calls';
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
        if (!$node->var instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\MethodCall) {
            return [];
        }
        return [self::ERROR_MESSAGE];
    }
}
