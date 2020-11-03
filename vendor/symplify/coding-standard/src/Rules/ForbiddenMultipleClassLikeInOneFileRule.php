<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\Rules;

use _PhpScoper2b44cb0c30af\PhpParser\Node;
use _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\ClassLike;
use _PhpScoper2b44cb0c30af\PhpParser\NodeFinder;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
use _PhpScoper2b44cb0c30af\PHPStan\Node\FileNode;
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
    public function __construct(\_PhpScoper2b44cb0c30af\PhpParser\NodeFinder $nodeFinder)
    {
        $this->nodeFinder = $nodeFinder;
    }
    /**
     * @return string[]
     */
    public function getNodeTypes() : array
    {
        return [\_PhpScoper2b44cb0c30af\PHPStan\Node\FileNode::class];
    }
    /**
     * @param FileNode $node
     * @return string[]
     */
    public function process(\_PhpScoper2b44cb0c30af\PhpParser\Node $node, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope) : array
    {
        /** @var ClassLike[] $classLikes */
        $classLikes = $this->nodeFinder->findInstanceOf($node->getNodes(), \_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt\ClassLike::class);
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
