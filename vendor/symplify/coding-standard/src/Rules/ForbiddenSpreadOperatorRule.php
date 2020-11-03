<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Arg;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\ClassMethod;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Function_;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\ForbiddenSpreadOperatorRule\ForbiddenSpreadOperatorRuleTest
 */
final class ForbiddenSpreadOperatorRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Spread operator is not allowed.';
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper2b44cb0c30af\PhpParser\Node\Arg::class, \_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\ClassMethod::class, \_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Function_::class];
    }
    /**
     * @param Arg|ClassMethod|Function_ $node
     * @return string[]
     */
    public function process(\_PhpScoper2b44cb0c30af\PhpParser\Node $node, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : array
    {
        if ($node instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Arg && $node->unpack) {
            return [self::ERROR_MESSAGE];
        }
        if (($node instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\ClassMethod || $node instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Function_) && $this->hasVariadicParam($node)) {
            return [self::ERROR_MESSAGE];
        }
        return [];
    }
    /**
     * @param ClassMethod|Function_ $node
     */
    private function hasVariadicParam(\_PhpScoper2b44cb0c30af\PhpParser\Node $node) : bool
    {
        $params = $node->params;
        foreach ($params as $param) {
            if ($param->variadic) {
                return \true;
            }
        }
        return \false;
    }
}
