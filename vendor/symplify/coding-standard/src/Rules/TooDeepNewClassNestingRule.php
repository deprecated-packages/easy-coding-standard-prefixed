<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr\New_;
use _PhpScoper2b44cb0c30af\PhpParser\NodeFinder;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\TooDeepNewClassNestingRule\TooDeepNewClassNestingRuleTest
 */
final class TooDeepNewClassNestingRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'new <class> is limited to %d "new <class>(new <class>))" nesting to each other. You have %d nesting.';
    /**
     * @var NodeFinder
     */
    private $nodeFinder;
    /**
     * @var int
     */
    private $maxNewClassNesting;
    public function __construct(\_PhpScoper2b44cb0c30af\PhpParser\NodeFinder $nodeFinder, int $maxNewClassNesting = 3)
    {
        $this->nodeFinder = $nodeFinder;
        $this->maxNewClassNesting = $maxNewClassNesting;
    }
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\New_::class];
    }
    /**
     * @param New_ $node
     * @return string[]
     */
    public function process(\_PhpScoper2b44cb0c30af\PhpParser\Node $node, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : array
    {
        $countNew = \count($this->nodeFinder->findInstanceOf($node, \_PhpScoper2b44cb0c30af\PhpParser\Node\Expr\New_::class));
        if ($this->maxNewClassNesting >= $countNew) {
            return [];
        }
        return [\sprintf(self::ERROR_MESSAGE, $this->maxNewClassNesting, $countNew)];
    }
}
