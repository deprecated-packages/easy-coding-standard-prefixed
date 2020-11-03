<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\ObjectCalisthenics\Rules;

use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Class_;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
use Symplify\CodingStandard\Rules\AbstractSymplifyRule;
/**
 * @see \Symplify\CodingStandard\ObjectCalisthenics\Tests\Rules\TooManyPropertiesRule\TooManyPropertiesRuleTest
 */
final class TooManyPropertiesRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Class has too many properties %d. Try narrowing it down under %d';
    /**
     * @var int
     */
    private $maxPropertyCount;
    public function __construct(int $maxPropertyCount)
    {
        $this->maxPropertyCount = $maxPropertyCount;
    }
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\Class_::class];
    }
    /**
     * @param Class_ $node
     * @return string[]
     */
    public function process(\_PhpScoper2b44cb0c30af\PhpParser\Node $node, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : array
    {
        $currentPropertyCount = \count($node->getProperties());
        if ($currentPropertyCount < $this->maxPropertyCount) {
            return [];
        }
        $errorMessage = \sprintf(self::ERROR_MESSAGE, $currentPropertyCount, $this->maxPropertyCount);
        return [$errorMessage];
    }
}
