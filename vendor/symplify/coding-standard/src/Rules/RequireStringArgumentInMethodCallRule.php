<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper8de082cbb8c7\PhpParser\Node;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Arg;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\MethodCall;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Identifier;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Scalar\String_;
use _PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope;
use _PhpScoper8de082cbb8c7\PHPStan\Rules\Rule;
use _PhpScoper8de082cbb8c7\PHPStan\Type\TypeWithClassName;
use _PhpScoper8de082cbb8c7\Rector\Core\Exception\ShouldNotHappenException;
use Symplify\CodingStandard\PhpParser\NodeNameResolver;
/**
 * Useful for prefixed phar bulid, to keep original references to class un-prefixed
 *
 * Basically inversion of this rule:
 * @see https://github.com/symplify/symplify/tree/master/packages/coding-standard#defined-method-argument-should-be-always-constant-value
 *
 * @see \Symplify\CodingStandard\Tests\Rules\RequireStringArgumentInMethodCallRule\RequireStringArgumentInMethodCallRuleTest
 */
final class RequireStringArgumentInMethodCallRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Method call "%s()" argument on position %d cannot use "::class" reference, use explicit string instead';
    /**
     * @var array<string, array<string, array<int>>>
     */
    private $stringArgByMethodByType = [];
    /**
     * @var NodeNameResolver
     */
    private $nodeNameResolver;
    /**
     * @param array<string, array<string, array<int>>> $stringArgByMethodByType
     */
    public function __construct(\Symplify\CodingStandard\PhpParser\NodeNameResolver $nodeNameResolver, array $stringArgByMethodByType = [])
    {
        $this->stringArgByMethodByType = $stringArgByMethodByType;
        $this->nodeNameResolver = $nodeNameResolver;
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
        // unknown method name
        if (!$node->name instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Identifier) {
            return [];
        }
        $errorMessages = [];
        $methodName = (string) $node->name;
        foreach ($this->stringArgByMethodByType as $type => $positionsByMethods) {
            $positions = $this->matchPositions($node, $scope, $type, $positionsByMethods, $methodName);
            if ($positions === null) {
                continue;
            }
            foreach ($node->args as $key => $arg) {
                if ($this->shouldSkipArg($key, $positions, $arg)) {
                    continue;
                }
                $errorMessages[] = \sprintf(self::ERROR_MESSAGE, $methodName, $key);
            }
        }
        return $errorMessages;
    }
    /**
     * @param array<string, array<int>> $positionsByMethods
     */
    private function matchPositions(\_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\MethodCall $methodCall, \_PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope $scope, string $desiredType, array $positionsByMethods, string $methodName) : ?array
    {
        if (!$this->isNodeVarType($methodCall, $scope, $desiredType)) {
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
        if ($arg->value instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Scalar\String_) {
            return \true;
        }
        /** @var ClassConstFetch $classConstFetch */
        $classConstFetch = $arg->value;
        return !$this->nodeNameResolver->isName($classConstFetch->name, 'class');
    }
    private function isNodeVarType(\_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\MethodCall $methodCall, \_PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope $scope, string $desiredType) : bool
    {
        if (\trait_exists($desiredType)) {
            $message = \sprintf('Do not use trait "%s" as type to match, it breaks the matching. Use specific class that is in this trait', $desiredType);
            throw new \_PhpScoper8de082cbb8c7\Rector\Core\Exception\ShouldNotHappenException($message);
        }
        $methodVarType = $scope->getType($methodCall->var);
        if (!$methodVarType instanceof \_PhpScoper8de082cbb8c7\PHPStan\Type\TypeWithClassName) {
            return \false;
        }
        return \is_a($methodVarType->getClassName(), $desiredType, \true);
    }
}
