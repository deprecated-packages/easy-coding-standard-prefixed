<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\ClassConstFetch;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Name;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\PreferredClassConstantOverVariableConstantRule\PreferredClassConstantOverVariableConstantRuleTest
 */
final class PreferredClassConstantOverVariableConstantRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Use SomeClass::CONSTANT over dynamic expression::CONSTANT';
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\ClassConstFetch::class];
    }
    /**
     * @param ClassConstFetch $node
     * @return string[]
     */
    public function process(\_PhpScoper2b44cb0c30af\PhpParser\Node $node, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : array
    {
        if ($node->class instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Name) {
            return [];
        }
        return [self::ERROR_MESSAGE];
    }
}
