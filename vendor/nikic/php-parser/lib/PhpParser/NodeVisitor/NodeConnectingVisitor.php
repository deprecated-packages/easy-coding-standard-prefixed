<?php

declare (strict_types=1);
namespace _PhpScoperedc2e0c967db\PhpParser\NodeVisitor;

use _PhpScoperedc2e0c967db\PhpParser\Node;
use _PhpScoperedc2e0c967db\PhpParser\NodeVisitorAbstract;
/**
 * Visitor that connects a child node to its parent node
 * as well as its sibling nodes.
 *
 * On the child node, the parent node can be accessed through
 * <code>$node->getAttribute('parent')</code>, the previous
 * node can be accessed through <code>$node->getAttribute('previous')</code>,
 * and the next node can be accessed through <code>$node->getAttribute('next')</code>.
 */
final class NodeConnectingVisitor extends \_PhpScoperedc2e0c967db\PhpParser\NodeVisitorAbstract
{
    /**
     * @var Node[]
     */
    private $stack = [];
    /**
     * @var ?Node
     */
    private $previous;
    public function beforeTraverse(array $nodes)
    {
        $this->stack = [];
        $this->previous = null;
    }
    public function enterNode(\_PhpScoperedc2e0c967db\PhpParser\Node $node)
    {
        if (!empty($this->stack)) {
            $node->setAttribute('parent', $this->stack[\count($this->stack) - 1]);
        }
        if ($this->previous !== null && $this->previous->getAttribute('parent') === $node->getAttribute('parent')) {
            $node->setAttribute('previous', $this->previous);
            $this->previous->setAttribute('next', $node);
        }
        $this->stack[] = $node;
    }
    public function leaveNode(\_PhpScoperedc2e0c967db\PhpParser\Node $node)
    {
        $this->previous = $node;
        \array_pop($this->stack);
    }
}
