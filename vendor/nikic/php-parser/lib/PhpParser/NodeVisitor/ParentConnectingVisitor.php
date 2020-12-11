<?php

declare (strict_types=1);
namespace _PhpScoperc7c7dddc9238\PhpParser\NodeVisitor;

use function array_pop;
use function count;
use _PhpScoperc7c7dddc9238\PhpParser\Node;
use _PhpScoperc7c7dddc9238\PhpParser\NodeVisitorAbstract;
/**
 * Visitor that connects a child node to its parent node.
 *
 * On the child node, the parent node can be accessed through
 * <code>$node->getAttribute('parent')</code>.
 */
final class ParentConnectingVisitor extends \_PhpScoperc7c7dddc9238\PhpParser\NodeVisitorAbstract
{
    /**
     * @var Node[]
     */
    private $stack = [];
    public function beforeTraverse(array $nodes)
    {
        $this->stack = [];
    }
    public function enterNode(\_PhpScoperc7c7dddc9238\PhpParser\Node $node)
    {
        if (!empty($this->stack)) {
            $node->setAttribute('parent', $this->stack[\count($this->stack) - 1]);
        }
        $this->stack[] = $node;
    }
    public function leaveNode(\_PhpScoperc7c7dddc9238\PhpParser\Node $node)
    {
        \array_pop($this->stack);
    }
}
