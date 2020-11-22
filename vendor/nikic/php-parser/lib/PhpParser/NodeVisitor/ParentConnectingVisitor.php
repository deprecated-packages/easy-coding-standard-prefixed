<?php

declare (strict_types=1);
namespace _PhpScoperf3db63c305b2\PhpParser\NodeVisitor;

use function array_pop;
use function count;
use _PhpScoperf3db63c305b2\PhpParser\Node;
use _PhpScoperf3db63c305b2\PhpParser\NodeVisitorAbstract;
/**
 * Visitor that connects a child node to its parent node.
 *
 * On the child node, the parent node can be accessed through
 * <code>$node->getAttribute('parent')</code>.
 */
final class ParentConnectingVisitor extends \_PhpScoperf3db63c305b2\PhpParser\NodeVisitorAbstract
{
    /**
     * @var Node[]
     */
    private $stack = [];
    public function beforeTraverse(array $nodes)
    {
        $this->stack = [];
    }
    public function enterNode(\_PhpScoperf3db63c305b2\PhpParser\Node $node)
    {
        if (!empty($this->stack)) {
            $node->setAttribute('parent', $this->stack[\count($this->stack) - 1]);
        }
        $this->stack[] = $node;
    }
    public function leaveNode(\_PhpScoperf3db63c305b2\PhpParser\Node $node)
    {
        \array_pop($this->stack);
    }
}
