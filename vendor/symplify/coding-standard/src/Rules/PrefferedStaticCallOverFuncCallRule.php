<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper8de082cbb8c7\PhpParser\Node;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\FuncCall;
use _PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope;
use Symplify\CodingStandard\PhpParser\NodeNameResolver;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\PrefferedStaticCallOverFuncCallRule\PrefferedStaticCallOverFuncCallRuleTest
 */
final class PrefferedStaticCallOverFuncCallRule extends \Symplify\CodingStandard\Rules\AbstractPrefferedCallOverFuncRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Use "%s::%s()" static call over "%s()" func call';
    /**
     * @var array<string, string[]>
     */
    private $funcCallToPrefferedStaticCalls = [];
    /**
     * @param array<string, string[]> $funcCallToPrefferedStaticCalls
     */
    public function __construct(\Symplify\CodingStandard\PhpParser\NodeNameResolver $nodeNameResolver, array $funcCallToPrefferedStaticCalls = [])
    {
        parent::__construct($nodeNameResolver);
        $this->funcCallToPrefferedStaticCalls = $funcCallToPrefferedStaticCalls;
    }
    /**
     * @param FuncCall $node
     * @return string[]
     */
    public function process(\_PhpScoper8de082cbb8c7\PhpParser\Node $node, \_PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope $scope) : array
    {
        foreach ($this->funcCallToPrefferedStaticCalls as $functionName => $staticCall) {
            if (!$this->isFuncCallToCallMatch($node, $scope, $functionName, $staticCall)) {
                continue;
            }
            $errorMessage = \sprintf(self::ERROR_MESSAGE, $staticCall[0], $staticCall[1], $functionName);
            return [$errorMessage];
        }
        return [];
    }
}
