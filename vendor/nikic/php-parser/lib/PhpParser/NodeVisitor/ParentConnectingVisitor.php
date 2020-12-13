<?php

declare (strict_types=1);
namespace _PhpScoper4298f97f3cb3\PhpParser\NodeVisitor;

use function array_pop;
use function count;
use _PhpScoper4298f97f3cb3\PhpParser\Node;
use _PhpScoper4298f97f3cb3\PhpParser\NodeVisitorAbstract;
/**
 * Visitor that connects a child node to its parent node.
 *
 * On the child node, the parent node can be accessed through
 * <code>$node->getAttribute('parent')</code>.
 */
final class ParentConnectingVisitor extends \_PhpScoper4298f97f3cb3\PhpParser\NodeVisitorAbstract
{
    /**
     * @var Node[]
     */
    private $stack = [];
    public function beforeTraverse(array $nodes)
    {
        $this->stack = [];
    }
    public function enterNode(\_PhpScoper4298f97f3cb3\PhpParser\Node $node)
    {
        if (!empty($this->stack)) {
            $node->setAttribute('parent', $this->stack[\count($this->stack) - 1]);
        }
        $this->stack[] = $node;
    }
    public function leaveNode(\_PhpScoper4298f97f3cb3\PhpParser\Node $node)
    {
        \array_pop($this->stack);
    }
}
