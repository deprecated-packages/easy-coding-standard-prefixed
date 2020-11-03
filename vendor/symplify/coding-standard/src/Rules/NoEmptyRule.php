<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\Empty_;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
/**
 * @deprecated Use
 * @see NoParticularNodeRule with configuration instead
 *
 * @see \Symplify\CodingStandard\Tests\Rules\NoEmptyRule\NoEmptyRuleTest
 */
final class NoEmptyRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Use strict comparison instead of empty';
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\Empty_::class];
    }
    /**
     * @param Empty_ $node
     * @return string[]
     */
    public function process(\_PhpScoper2b44cb0c30af\PhpParser\Node $node, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : array
    {
        return [self::ERROR_MESSAGE];
    }
}
