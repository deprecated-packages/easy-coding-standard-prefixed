<?php

declare (strict_types=1);
namespace _PhpScoperaac5f7c652e4\PhpParser\NodeVisitor;

use function array_pop;
use function count;
use _PhpScoperaac5f7c652e4\PhpParser\Node;
use _PhpScoperaac5f7c652e4\PhpParser\NodeVisitorAbstract;
/**
 * Visitor that connects a child node to its parent node.
 *
 * On the child node, the parent node can be accessed through
 * <code>$node->getAttribute('parent')</code>.
 */
final class ParentConnectingVisitor extends \_PhpScoperaac5f7c652e4\PhpParser\NodeVisitorAbstract
{
    /**
     * @var Node[]
     */
    private $stack = [];
    public function beforeTraverse(array $nodes)
    {
        $this->stack = [];
    }
    public function enterNode(\_PhpScoperaac5f7c652e4\PhpParser\Node $node)
    {
        if (!empty($this->stack)) {
            $node->setAttribute('parent', $this->stack[\count($this->stack) - 1]);
        }
        $this->stack[] = $node;
    }
    public function leaveNode(\_PhpScoperaac5f7c652e4\PhpParser\Node $node)
    {
        \array_pop($this->stack);
    }
}
