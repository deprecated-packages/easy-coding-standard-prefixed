<?php

declare (strict_types=1);
namespace _PhpScopera061b8a47e36\PhpParser\NodeVisitor;

use function array_pop;
use function count;
use _PhpScopera061b8a47e36\PhpParser\Node;
use _PhpScopera061b8a47e36\PhpParser\NodeVisitorAbstract;
/**
 * Visitor that connects a child node to its parent node.
 *
 * On the child node, the parent node can be accessed through
 * <code>$node->getAttribute('parent')</code>.
 */
final class ParentConnectingVisitor extends \_PhpScopera061b8a47e36\PhpParser\NodeVisitorAbstract
{
    /**
     * @var Node[]
     */
    private $stack = [];
    public function beforeTraverse(array $nodes)
    {
        $this->stack = [];
    }
    public function enterNode(\_PhpScopera061b8a47e36\PhpParser\Node $node)
    {
        if (!empty($this->stack)) {
            $node->setAttribute('parent', $this->stack[\count($this->stack) - 1]);
        }
        $this->stack[] = $node;
    }
    public function leaveNode(\_PhpScopera061b8a47e36\PhpParser\Node $node)
    {
        \array_pop($this->stack);
    }
}
