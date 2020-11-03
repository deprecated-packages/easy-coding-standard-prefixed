<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper8de082cbb8c7\PhpParser\Node;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\PropertyFetch;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\StaticPropertyFetch;
use _PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\NoDynamicPropertyFetchNameRule\NoDynamicPropertyFetchNameRuleTest
 */
final class NoDynamicPropertyFetchNameRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Use explicit property fetch names over dynamic';
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\PropertyFetch::class, \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\StaticPropertyFetch::class];
    }
    /**
     * @param PropertyFetch|StaticPropertyFetch $node
     * @return string[]
     */
    public function process(\_PhpScoper8de082cbb8c7\PhpParser\Node $node, \_PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope $scope) : array
    {
        if (!$node->name instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr) {
            return [];
        }
        return [self::ERROR_MESSAGE];
    }
}
