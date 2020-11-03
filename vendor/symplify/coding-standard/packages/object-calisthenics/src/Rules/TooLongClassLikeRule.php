<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\ObjectCalisthenics\Rules;

use _PhpScoper3d04c8135695\PhpParser\Node;
use _PhpScoper3d04c8135695\PhpParser\Node\Stmt\Class_;
use _PhpScoper3d04c8135695\PhpParser\Node\Stmt\ClassLike;
use _PhpScoper3d04c8135695\PhpParser\Node\Stmt\Interface_;
use _PhpScoper3d04c8135695\PHPStan\Analyser\Scope;
use Symplify\CodingStandard\Rules\AbstractSymplifyRule;
/**
 * @see \Symplify\CodingStandard\ObjectCalisthenics\Tests\Rules\TooLongClassLikeRule\TooLongClassLikeRuleTest
 */
final class TooLongClassLikeRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = '%s has %d lines, it is too long. Shorted it under %d lines';
    /**
     * @var int
     */
    private $maxClassLikeLength;
    public function __construct(int $maxClassLikeLength)
    {
        $this->maxClassLikeLength = $maxClassLikeLength;
    }
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper3d04c8135695\PhpParser\Node\Stmt\ClassLike::class];
    }
    /**
     * @param ClassLike $node
     * @return string[]
     */
    public function process(\_PhpScoper3d04c8135695\PhpParser\Node $node, \_PhpScoper3d04c8135695\PHPStan\Analyser\Scope $scope) : array
    {
        $currentClassLenght = $this->getNodeLength($node);
        if ($currentClassLenght <= $this->maxClassLikeLength) {
            return [];
        }
        $classLikeType = $this->resolveClassLikeType($node);
        $errorMessage = \sprintf(self::ERROR_MESSAGE, $classLikeType, $currentClassLenght, $this->maxClassLikeLength);
        return [$errorMessage];
    }
    private function resolveClassLikeType(\_PhpScoper3d04c8135695\PhpParser\Node\Stmt\ClassLike $classLike) : string
    {
        if ($classLike instanceof \_PhpScoper3d04c8135695\PhpParser\Node\Stmt\Class_) {
            return 'Class';
        }
        if ($classLike instanceof \_PhpScoper3d04c8135695\PhpParser\Node\Stmt\Interface_) {
            return 'Interface';
        }
        return 'Trait';
    }
    private function getNodeLength(\_PhpScoper3d04c8135695\PhpParser\Node $node) : int
    {
        return $node->getEndLine() - $node->getStartLine();
    }
}
