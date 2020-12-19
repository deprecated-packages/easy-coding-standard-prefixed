<?php

declare (strict_types=1);
namespace _PhpScopera8f555a7493c\PhpParser\NodeVisitor;

use function array_pop;
use function count;
use _PhpScopera8f555a7493c\PhpParser\Node;
use _PhpScopera8f555a7493c\PhpParser\NodeVisitorAbstract;
/**
 * Visitor that connects a child node to its parent node.
 *
 * On the child node, the parent node can be accessed through
 * <code>$node->getAttribute('parent')</code>.
 */
final class ParentConnectingVisitor extends \_PhpScopera8f555a7493c\PhpParser\NodeVisitorAbstract
{
    /**
     * @var Node[]
     */
    private $stack = [];
    public function beforeTraverse(array $nodes)
    {
        $this->stack = [];
    }
    public function enterNode(\_PhpScopera8f555a7493c\PhpParser\Node $node)
    {
        if (!empty($this->stack)) {
            $node->setAttribute('parent', $this->stack[\count($this->stack) - 1]);
        }
        $this->stack[] = $node;
    }
    public function leaveNode(\_PhpScopera8f555a7493c\PhpParser\Node $node)
    {
        \array_pop($this->stack);
    }
}
