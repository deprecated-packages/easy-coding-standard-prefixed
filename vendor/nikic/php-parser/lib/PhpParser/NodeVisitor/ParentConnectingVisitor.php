<?php

declare (strict_types=1);
namespace _PhpScopera37d6fb0b1ab\PhpParser\NodeVisitor;

use function array_pop;
use function count;
use _PhpScopera37d6fb0b1ab\PhpParser\Node;
use _PhpScopera37d6fb0b1ab\PhpParser\NodeVisitorAbstract;
/**
 * Visitor that connects a child node to its parent node.
 *
 * On the child node, the parent node can be accessed through
 * <code>$node->getAttribute('parent')</code>.
 */
final class ParentConnectingVisitor extends \_PhpScopera37d6fb0b1ab\PhpParser\NodeVisitorAbstract
{
    /**
     * @var Node[]
     */
    private $stack = [];
    public function beforeTraverse(array $nodes)
    {
        $this->stack = [];
    }
    public function enterNode(\_PhpScopera37d6fb0b1ab\PhpParser\Node $node)
    {
        if (!empty($this->stack)) {
            $node->setAttribute('parent', $this->stack[\count($this->stack) - 1]);
        }
        $this->stack[] = $node;
    }
    public function leaveNode(\_PhpScopera37d6fb0b1ab\PhpParser\Node $node)
    {
        \array_pop($this->stack);
    }
}
