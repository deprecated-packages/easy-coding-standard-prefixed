<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper8de082cbb8c7\PhpParser\Node;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\MethodCall;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Identifier;
use _PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope;
use Symplify\CodingStandard\ValueObject\MethodName;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\NoGetRepositoryOutsideConstructorRule\NoGetRepositoryOutsideConstructorRuleTest
 */
final class NoGetRepositoryOutsideConstructorRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Do not use "$entityManager->getRepository()" outside of the constructor of repository service or setUp() method in test case';
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
        $methodCallName = (string) $node->name;
        if ($methodCallName !== 'getRepository') {
            return [];
        }
        $functionReflection = $scope->getFunction();
        if ($functionReflection === null) {
            return [];
        }
        if (\in_array($functionReflection->getName(), [\Symplify\CodingStandard\ValueObject\MethodName::CONSTRUCTOR, 'setUp'], \true)) {
            return [];
        }
        return [self::ERROR_MESSAGE];
    }
}
