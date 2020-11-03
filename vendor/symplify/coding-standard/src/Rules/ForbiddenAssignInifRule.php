<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\Assign;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\If_;
use _PhpScoper2b44cb0c30af\PhpParser\NodeFinder;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
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
    public function __construct(\_PhpScoper2b44cb0c30af\PhpParser\NodeFinder $nodeFinder)
    {
        $this->nodeFinder = $nodeFinder;
    }
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\If_::class];
    }
    /**
     * @param If_ $node
     * @return string[]
     */
    public function process(\_PhpScoper2b44cb0c30af\PhpParser\Node $node, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : array
    {
        if (!$this->isHaveAssignmentInside($node)) {
            return [];
        }
        return [self::ERROR_MESSAGE];
    }
    private function isHaveAssignmentInside(\_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\If_ $if) : bool
    {
        return (bool) $this->nodeFinder->findFirst($if->cond, function (\_PhpScoper2b44cb0c30af\PhpParser\Node $node) : bool {
            return $node instanceof \_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\Assign;
        });
    }
}
