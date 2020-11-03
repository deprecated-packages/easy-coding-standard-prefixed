<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Arg;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\MethodCall;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\Variable;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Identifier;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
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
        return [\_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\MethodCall::class];
    }
    /**
     * @param MethodCall $node
     * @return string[]
     */
    public function process(\_PhpScoper2b44cb0c30af\PhpParser\Node $node, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : array
    {
        if (!$node->name instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Identifier) {
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
    private function matchPositions(\_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\MethodCall $methodCall, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope, string $desiredType, array $positionsByMethods, string $methodName)
    {
        if (!$this->containsTypeAnalyser->containsExprTypes($methodCall->var, $scope, [$desiredType])) {
            return null;
        }
        return $positionsByMethods[$methodName] ?? null;
    }
    /**
     * @param int[] $positions
     */
    private function shouldSkipArg(int $key, array $positions, \_PhpScoper2b44cb0c30af\PhpParser\Node\Arg $arg) : bool
    {
        if (!\in_array($key, $positions, \true)) {
            return \true;
        }
        if ($arg->value instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\Variable) {
            return \true;
        }
        return $arg->value instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\ClassConstFetch;
    }
}
