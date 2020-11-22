<?php

declare (strict_types=1);
namespace _PhpScopera88a8b9f064a\PhpParser\NodeVisitor;

use function array_pop;
use function count;
use _PhpScopera88a8b9f064a\PhpParser\Node;
use _PhpScopera88a8b9f064a\PhpParser\NodeVisitorAbstract;
/**
 * Visitor that connects a child node to its parent node.
 *
 * On the child node, the parent node can be accessed through
 * <code>$node->getAttribute('parent')</code>.
 */
final class ParentConnectingVisitor extends \_PhpScopera88a8b9f064a\PhpParser\NodeVisitorAbstract
{
    /**
     * @var Node[]
     */
    private $stack = [];
    public function beforeTraverse(array $nodes)
    {
        $this->stack = [];
    }
    public function enterNode(\_PhpScopera88a8b9f064a\PhpParser\Node $node)
    {
        if (!empty($this->stack)) {
            $node->setAttribute('parent', $this->stack[\count($this->stack) - 1]);
        }
        $this->stack[] = $node;
    }
    public function leaveNode(\_PhpScopera88a8b9f064a\PhpParser\Node $node)
    {
        \array_pop($this->stack);
    }
}
