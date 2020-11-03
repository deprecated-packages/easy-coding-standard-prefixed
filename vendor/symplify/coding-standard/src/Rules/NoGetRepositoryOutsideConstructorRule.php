<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\MethodCall;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Identifier;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
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
