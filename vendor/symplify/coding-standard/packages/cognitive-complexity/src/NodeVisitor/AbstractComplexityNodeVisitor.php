<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\CognitiveComplexity\NodeVisitor;

use _PhpScoper3d04c8135695\PhpParser\Node;
use _PhpScoper3d04c8135695\PhpParser\Node\Expr\BinaryOp\BooleanAnd;
use _PhpScoper3d04c8135695\PhpParser\Node\Expr\Ternary;
use _PhpScoper3d04c8135695\PhpParser\Node\Stmt\Break_;
use _PhpScoper3d04c8135695\PhpParser\Node\Stmt\Catch_;
use _PhpScoper3d04c8135695\PhpParser\Node\Stmt\Continue_;
use _PhpScoper3d04c8135695\PhpParser\Node\Stmt\Do_;
use _PhpScoper3d04c8135695\PhpParser\Node\Stmt\Else_;
use _PhpScoper3d04c8135695\PhpParser\Node\Stmt\ElseIf_;
use _PhpScoper3d04c8135695\PhpParser\Node\Stmt\For_;
use _PhpScoper3d04c8135695\PhpParser\Node\Stmt\Foreach_;
use _PhpScoper3d04c8135695\PhpParser\Node\Stmt\Goto_;
use _PhpScoper3d04c8135695\PhpParser\Node\Stmt\If_;
use _PhpScoper3d04c8135695\PhpParser\Node\Stmt\Switch_;
use _PhpScoper3d04c8135695\PhpParser\Node\Stmt\While_;
use _PhpScoper3d04c8135695\PhpParser\NodeVisitorAbstract;
abstract class AbstractComplexityNodeVisitor extends \_PhpScoper3d04c8135695\PhpParser\NodeVisitorAbstract
{
    /**
     * B1. Increments
     * @var string[]
     */
    private const BREAKING_NODE_TYPES = [\_PhpScoper3d04c8135695\PhpParser\Node\Stmt\Continue_::class, \_PhpScoper3d04c8135695\PhpParser\Node\Stmt\Goto_::class, \_PhpScoper3d04c8135695\PhpParser\Node\Stmt\Break_::class];
    /**
     * B1. Increments
     * @var class-string[]
     */
    private const INCREASING_NODE_TYPES = [
        \_PhpScoper3d04c8135695\PhpParser\Node\Stmt\If_::class,
        \_PhpScoper3d04c8135695\PhpParser\Node\Stmt\Else_::class,
        \_PhpScoper3d04c8135695\PhpParser\Node\Stmt\ElseIf_::class,
        \_PhpScoper3d04c8135695\PhpParser\Node\Stmt\Switch_::class,
        \_PhpScoper3d04c8135695\PhpParser\Node\Stmt\For_::class,
        \_PhpScoper3d04c8135695\PhpParser\Node\Stmt\Foreach_::class,
        \_PhpScoper3d04c8135695\PhpParser\Node\Stmt\While_::class,
        \_PhpScoper3d04c8135695\PhpParser\Node\Stmt\Do_::class,
        \_PhpScoper3d04c8135695\PhpParser\Node\Stmt\Catch_::class,
        // &&
        \_PhpScoper3d04c8135695\PhpParser\Node\Expr\BinaryOp\BooleanAnd::class,
        \_PhpScoper3d04c8135695\PhpParser\Node\Expr\Ternary::class,
    ];
    /**
     * @param class-string[] $nodeTypes
     */
    protected function isNodeOfTypes(\_PhpScoper3d04c8135695\PhpParser\Node $node, array $nodeTypes) : bool
    {
        foreach ($nodeTypes as $nodeType) {
            if (\is_a($node, $nodeType, \true)) {
                return \true;
            }
        }
        return \false;
    }
    protected function isIncrementingNode(\_PhpScoper3d04c8135695\PhpParser\Node $node) : bool
    {
        // B1. ternary operator
        if ($this->isNodeOfTypes($node, self::INCREASING_NODE_TYPES)) {
            return \true;
        }
        // B1. goto LABEL, break LABEL, continue LABEL
        if ($node instanceof \_PhpScoper3d04c8135695\PhpParser\Node\Expr\Ternary) {
            return \true;
        }
        return $this->isBreakingNode($node);
    }
    protected function isBreakingNode(\_PhpScoper3d04c8135695\PhpParser\Node $node) : bool
    {
        // B1. goto LABEL, break LABEL, continue LABEL
        if ($this->isNodeOfTypes($node, self::BREAKING_NODE_TYPES)) {
            // skip empty breaks
            /** @var Goto_|Break_|Continue_ $node */
            if ($node instanceof \_PhpScoper3d04c8135695\PhpParser\Node\Stmt\Goto_ && $node->name !== null) {
                return \true;
            }
            if (($node instanceof \_PhpScoper3d04c8135695\PhpParser\Node\Stmt\Break_ || $node instanceof \_PhpScoper3d04c8135695\PhpParser\Node\Stmt\Continue_) && $node->num !== null) {
                return \true;
            }
        }
        return \false;
    }
}
