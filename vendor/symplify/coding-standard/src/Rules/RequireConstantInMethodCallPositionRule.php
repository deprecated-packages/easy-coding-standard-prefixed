<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper8de082cbb8c7\PhpParser\Node;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Arg;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\MethodCall;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\Variable;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Identifier;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Name;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Name\FullyQualified;
use _PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope;
use Symplify\CodingStandard\PHPStan\Types\ContainsTypeAnalyser;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\RequireConstantInMethodCallPositionRule\RequireConstantInMethodCallPositionRuleTest
 */
final class RequireConstantInMethodCallPositionRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Parameter argument on position %d must use %s constant';
    /**
     * @var ContainsTypeAnalyser
     */
    private $containsTypeAnalyser;
    /**
     * @var array<class-string, mixed[]>
     */
    private $requiredLocalConstantInMethodCall = [];
    /**
     * @var array<class-string, mixed[]>
     */
    private $requiredExternalConstantInMethodCall = [];
    /**
     * @param array<class-string, mixed[]> $requiredLocalConstantInMethodCall
     * @param array<class-string, mixed[]> $requiredExternalConstantInMethodCall
     */
    public function __construct(array $requiredLocalConstantInMethodCall = [], array $requiredExternalConstantInMethodCall = [], \Symplify\CodingStandard\PHPStan\Types\ContainsTypeAnalyser $containsTypeAnalyser)
    {
        $this->requiredLocalConstantInMethodCall = $requiredLocalConstantInMethodCall;
        $this->requiredExternalConstantInMethodCall = $requiredExternalConstantInMethodCall;
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
        $errorMessagesLocal = $this->getErrorMessages($node, $scope, \true, $this->requiredLocalConstantInMethodCall, 'local');
        $errorMessagesExternal = $this->getErrorMessages($node, $scope, \false, $this->requiredExternalConstantInMethodCall, 'external');
        return \array_merge($errorMessagesLocal, $errorMessagesExternal);
    }
    /**
     * @return string[]
     */
    private function getErrorMessages(\_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\MethodCall $methodCall, \_PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope $scope, bool $isLocalConstant, array $config, string $messageVar) : array
    {
        /** @var Identifier $name */
        $name = $methodCall->name;
        $methodName = (string) $name;
        $errorMessages = [];
        /** @var class-string $type */
        foreach ($config as $type => $positionsByMethods) {
            $positions = $this->matchPositions($methodCall, $scope, $type, $positionsByMethods, $methodName);
            if ($positions === null) {
                continue;
            }
            foreach ($methodCall->args as $key => $arg) {
                if ($this->shouldSkipArg($key, $positions, $arg, $isLocalConstant)) {
                    continue;
                }
                $errorMessages[] = \sprintf(self::ERROR_MESSAGE, $key, $messageVar);
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
    private function shouldSkipArg(int $key, array $positions, \_PhpScoper8de082cbb8c7\PhpParser\Node\Arg $arg, bool $isLocalConstant) : bool
    {
        if (!\in_array($key, $positions, \true)) {
            return \true;
        }
        if ($arg->value instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\Variable) {
            return \true;
        }
        if (!$arg->value instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\ClassConstFetch) {
            return \false;
        }
        return $isLocalConstant ? $arg->value->class instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Name : $arg->value->class instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Name\FullyQualified;
    }
}
