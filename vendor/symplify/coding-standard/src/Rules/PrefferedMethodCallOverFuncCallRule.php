<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper3d04c8135695\PhpParser\Node;
use _PhpScoper3d04c8135695\PhpParser\Node\Expr\FuncCall;
use _PhpScoper3d04c8135695\PHPStan\Analyser\Scope;
use Symplify\CodingStandard\PhpParser\NodeNameResolver;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\PrefferedMethodCallOverFuncCallRule\PrefferedMethodCallOverFuncCallRuleTest
 */
final class PrefferedMethodCallOverFuncCallRule extends \Symplify\CodingStandard\Rules\AbstractPrefferedCallOverFuncRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Use "%s->%s()" method call over "%s()" func call';
    /**
     * @var array<string, string[]>
     */
    private $funcCallToPrefferedMethodCalls = [];
    /**
     * @param array<string, string[]> $funcCallToPrefferedMethodCalls
     */
    public function __construct(\Symplify\CodingStandard\PhpParser\NodeNameResolver $nodeNameResolver, array $funcCallToPrefferedMethodCalls = [])
    {
        parent::__construct($nodeNameResolver);
        $this->funcCallToPrefferedMethodCalls = $funcCallToPrefferedMethodCalls;
    }
    /**
     * @param FuncCall $node
     * @return string[]
     */
    public function process(\_PhpScoper3d04c8135695\PhpParser\Node $node, \_PhpScoper3d04c8135695\PHPStan\Analyser\Scope $scope) : array
    {
        foreach ($this->funcCallToPrefferedMethodCalls as $functionName => $methodCall) {
            if (!$this->isFuncCallToCallMatch($node, $scope, $functionName, $methodCall)) {
                continue;
            }
            $errorMessage = \sprintf(self::ERROR_MESSAGE, $methodCall[0], $methodCall[1], $functionName);
            return [$errorMessage];
        }
        return [];
    }
}
