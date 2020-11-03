<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper8de082cbb8c7\PhpParser\Node;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\Assign;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\If_;
use _PhpScoper8de082cbb8c7\PhpParser\NodeFinder;
use _PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\ForbiddenAssignInifRule\ForbiddenAssignInifRuleTest
 */
final class ForbiddenAssignInifRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Assignment inside if is not allowed. Use before if instead.';
    /**
     * @var NodeFinder
     */
    private $nodeFinder;
    public function __construct(\_PhpScoper8de082cbb8c7\PhpParser\NodeFinder $nodeFinder)
    {
        $this->nodeFinder = $nodeFinder;
    }
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\If_::class];
    }
    /**
     * @param If_ $node
     * @return string[]
     */
    public function process(\_PhpScoper8de082cbb8c7\PhpParser\Node $node, \_PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope $scope) : array
    {
        if (!$this->isHaveAssignmentInside($node)) {
            return [];
        }
        return [self::ERROR_MESSAGE];
    }
    private function isHaveAssignmentInside(\_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\If_ $if) : bool
    {
        return (bool) $this->nodeFinder->findFirst($if->cond, function (\_PhpScoper8de082cbb8c7\PhpParser\Node $node) : bool {
            return $node instanceof \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\Assign;
        });
    }
}
