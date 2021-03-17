<?php

declare (strict_types=1);
namespace _PhpScoper842c7347e6be\PhpParser\NodeVisitor;

use function array_pop;
use function count;
use _PhpScoper842c7347e6be\PhpParser\Node;
use _PhpScoper842c7347e6be\PhpParser\NodeVisitorAbstract;
/**
 * Visitor that connects a child node to its parent node.
 *
 * On the child node, the parent node can be accessed through
 * <code>$node->getAttribute('parent')</code>.
 */
final class ParentConnectingVisitor extends \_PhpScoper842c7347e6be\PhpParser\NodeVisitorAbstract
{
    /**
     * @var Node[]
     */
    private $stack = [];
    public function beforeTraverse(array $nodes)
    {
        $this->stack = [];
    }
    public function enterNode(\_PhpScoper842c7347e6be\PhpParser\Node $node)
    {
        if (!empty($this->stack)) {
            $node->setAttribute('parent', $this->stack[\count($this->stack) - 1]);
        }
        $this->stack[] = $node;
    }
    public function leaveNode(\_PhpScoper842c7347e6be\PhpParser\Node $node)
    {
        \array_pop($this->stack);
    }
}
