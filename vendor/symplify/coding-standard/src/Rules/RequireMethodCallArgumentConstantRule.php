<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper8de082cbb8c7\PhpParser\Node;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Arg;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\MethodCall;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\Variable;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Identifier;
use _PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope;
use Symplify\CodingStandard\PHPStan\Types\ContainsTypeAnalyser;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\RequireMethodCallArgumentConstantRule\RequireMethodCallArgumentConstantRuleTest
 */
final class RequireMethodCallArgumentConstantRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Method call argument on position %d must use constant over value';
    /**
     * @var array<class-string, mixed[]>
     */
    private $constantArgByMethodByType = [];
    /**
     * @var ContainsTypeAnalyser
     */
    private $containsTypeAnalyser;
    /**
     * @param array<class-string, mixed[]> $constantArgByMethodByType
     */
    public function __construct(\Symplify\CodingStandard\PHPStan\Types\ContainsTypeAnalyser $containsTypeAnalyser, array $constantArgByMethodByType = [])
    {
        $this->constantArgByMethodByType = $constantArgByMethodByType;
        $this->containsTypeAnalyser = $containsTypeAnalyser;
    }
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\MethodCall::class];
    }
    /**
     * @param MethodCall $node
     * @return string[]
     */
    public function process(\_PhpScoper8de082cbb8c7\PhpParser\Node $node, \_PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope $scope) : array
    {
        if (!$node->name instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Identifier) {
            return [];
        }
        $errorMessages = [];
        $methodName = (string) $node->name;
        foreach ($this->constantArgByMethodByType as $type => $positionsByMethods) {
            $positions = $this->matchPositions($node, $scope, $type, $positionsByMethods, $methodName);
            if ($positions === null) {
                continue;
            }
            foreach ($node->args as $key => $arg) {
                if ($this->shouldSkipArg($key, $positions, $arg)) {
                    continue;
                }
                $errorMessages[] = \sprintf(self::ERROR_MESSAGE, $key);
            }
        }
        return $errorMessages;
    }
    /**
     * @param class-string $desiredType
     * @return mixed|null
     */
    private function matchPositions(\_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\MethodCall $methodCall, \_PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope $scope, string $desiredType, array $positionsByMethods, string $methodName)
    {
        if (!$this->containsTypeAnalyser->containsExprTypes($methodCall->var, $scope, [$desiredType])) {
            return null;
        }
        return $positionsByMethods[$methodName] ?? null;
    }
    /**
     * @param int[] $positions
     */
    private function shouldSkipArg(int $key, array $positions, \_PhpScoper8de082cbb8c7\PhpParser\Node\Arg $arg) : bool
    {
        if (!\in_array($key, $positions, \true)) {
            return \true;
        }
        if ($arg->value instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\Variable) {
            return \true;
        }
        return $arg->value instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\ClassConstFetch;
    }
}
