<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper3d04c8135695\PhpParser\Node;
use _PhpScoper3d04c8135695\PhpParser\Node\Expr\Assign;
use _PhpScoper3d04c8135695\PhpParser\Node\Expr\Include_;
use _PhpScoper3d04c8135695\PhpParser\Node\Stmt\Return_;
use _PhpScoper3d04c8135695\PHPStan\Analyser\Scope;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\ForbiddenReturnValueOfIncludeOnceRule\ForbiddenReturnValueOfIncludeOnceRuleTest
 */
final class ForbiddenReturnValueOfIncludeOnceRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Cannot return include_once/require_once';
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper3d04c8135695\PhpParser\Node::class];
    }
    /**
     * @return string[]
     */
    public function process(\_PhpScoper3d04c8135695\PhpParser\Node $node, \_PhpScoper3d04c8135695\PHPStan\Analyser\Scope $scope) : array
    {
        if (!$node instanceof \_PhpScoper3d04c8135695\PhpParser\Node\Expr\Assign && !$node instanceof \_PhpScoper3d04c8135695\PhpParser\Node\Stmt\Return_) {
            return [];
        }
        if (!$this->isIncludeOnceOrRequireOnce($node)) {
            return [];
        }
        return [self::ERROR_MESSAGE];
    }
    /**
     * @param Assign|Return_ $node
     */
    private function isIncludeOnceOrRequireOnce(\_PhpScoper3d04c8135695\PhpParser\Node $node) : bool
    {
        if (!$node->expr instanceof \_PhpScoper3d04c8135695\PhpParser\Node\Expr\Include_) {
            return \false;
        }
        return \in_array($node->expr->type, [\_PhpScoper3d04c8135695\PhpParser\Node\Expr\Include_::TYPE_REQUIRE_ONCE, \_PhpScoper3d04c8135695\PhpParser\Node\Expr\Include_::TYPE_REQUIRE_ONCE], \true);
    }
}
