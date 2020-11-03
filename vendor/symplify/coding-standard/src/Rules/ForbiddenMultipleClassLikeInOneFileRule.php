<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper8de082cbb8c7\PhpParser\Node;
use _PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\ClassLike;
use _PhpScoper8de082cbb8c7\PhpParser\NodeFinder;
use _PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope;
use _PhpScoper8de082cbb8c7\PHPStan\Node\FileNode;
/**
 * @see \Symplify\CodingStandard\Tests\Rules\ForbiddenMultipleClassLikeInOneFileRule\ForbiddenMultipleClassLikeInOneFileRuleTest
 */
final class ForbiddenMultipleClassLikeInOneFileRule extends \Symplify\CodingStandard\Rules\AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Multiple class/interface/trait is not allowed in a file.';
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
        return [\_PhpScoper8de082cbb8c7\PHPStan\Node\FileNode::class];
    }
    /**
     * @param FileNode $node
     * @return string[]
     */
    public function process(\_PhpScoper8de082cbb8c7\PhpParser\Node $node, \_PhpScoper8de082cbb8c7\PHPStan\Analyser\Scope $scope) : array
    {
        /** @var ClassLike[] $classLikes */
        $classLikes = $this->nodeFinder->findInstanceOf($node->getNodes(), \_PhpScoper8de082cbb8c7\PhpParser\Node\Stmt\ClassLike::class);
        $findclassLikes = [];
        foreach ($classLikes as $classLike) {
            if ($classLike->name === null) {
                continue;
            }
            $findclassLikes[] = $classLike;
        }
        if (\count($findclassLikes) <= 1) {
            return [];
        }
        return [self::ERROR_MESSAGE];
    }
}
