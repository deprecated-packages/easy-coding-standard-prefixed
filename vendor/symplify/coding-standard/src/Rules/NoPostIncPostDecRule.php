<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\PostDec;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\PostInc;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\NoPostIncPostDecRule\NoPostIncPostDecRuleTest
 */
final class NoPostIncPostDecRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Post operation are forbidden, as they make 2 values at the same line. Use pre instead';
    /**
     * @return class-string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\PostInc::class, \_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\PostDec::class];
    }
    /**
     * @param PostDec|PostInc $node
     * @return string[]
     */
    public function process(\_PhpScoper2b44cb0c30af\PhpParser\Node $node, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : array
    {
        return [self::ERROR_MESSAGE];
    }
}
