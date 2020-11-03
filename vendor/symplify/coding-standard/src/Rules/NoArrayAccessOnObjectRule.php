<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\ArrayDimFetch;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
use _PhpScoper2b44cb0c30af\PHPStan\Type\TypeWithClassName;
use SplFixedArray;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\NoArrayAccessOnObjectRule\NoArrayAccessOnObjectRuleTest
 */
final class NoArrayAccessOnObjectRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Use explicit methods, over array acccess on object';
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\ArrayDimFetch::class];
    }
    /**
     * @param ArrayDimFetch $node
     * @return string[]
     */
    public function process(\_PhpScoper2b44cb0c30af\PhpParser\Node $node, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : array
    {
        $varStaticType = $scope->getType($node->var);
        if (!$varStaticType instanceof \_PhpScoper2b44cb0c30af\PHPStan\Type\TypeWithClassName) {
            return [];
        }
        if (\is_a($varStaticType->getClassName(), \SplFixedArray::class, \true)) {
            return [];
        }
        return [self::ERROR_MESSAGE];
    }
}
