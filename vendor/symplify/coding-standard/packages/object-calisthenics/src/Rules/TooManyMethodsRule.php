<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\ObjectCalisthenics\Rules;

use _PhpScoper8de082cbb8c7\PhpParser\Node;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Class_;
use _PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope;
use Symplify\CodingStandard\Rules\AbstractSymplifyRule;
/**
 * @see \Symplify\CodingStandard\ObjectCalisthenics\Tests\Rules\TooManyMethodsRule\TooManyMethodsRuleTest
 */
final class TooManyMethodsRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Method has too many methods %d. Try narrowing it down under %d';
    /**
     * @var int
     */
    private $maxMethodCount;
    public function __construct(int $maxMethodCount)
    {
        $this->maxMethodCount = $maxMethodCount;
    }
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\Class_::class];
    }
    /**
     * @param Class_ $node
     * @return string[]
     */
    public function process(\_PhpScoper8de082cbb8c7\PhpParser\Node $node, \_PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope $scope) : array
    {
        $currentMethodCount = \count($node->getMethods());
        if ($currentMethodCount < $this->maxMethodCount) {
            return [];
        }
        $errorMessage = \sprintf(self::ERROR_MESSAGE, $currentMethodCount, $this->maxMethodCount);
        return [$errorMessage];
    }
}
