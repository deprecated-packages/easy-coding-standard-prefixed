<?php

declare (strict_types=1);
namespace _PhpScoperb458b528613f\PhpParser\NodeVisitor;

use function array_pop;
use function count;
use _PhpScoperb458b528613f\PhpParser\Node;
use _PhpScoperb458b528613f\PhpParser\NodeVisitorAbstract;
/**
 * Visitor that connects a child node to its parent node.
 *
 * On the child node, the parent node can be accessed through
 * <code>$node->getAttribute('parent')</code>.
 */
final class ParentConnectingVisitor extends \_PhpScoperb458b528613f\PhpParser\NodeVisitorAbstract
{
    /**
     * @var Node[]
     */
    private $stack = [];
    public function beforeTraverse(array $nodes)
    {
        $this->stack = [];
    }
    public function enterNode(\_PhpScoperb458b528613f\PhpParser\Node $node)
    {
        if (!empty($this->stack)) {
            $node->setAttribute('parent', $this->stack[\count($this->stack) - 1]);
        }
        $this->stack[] = $node;
    }
    public function leaveNode(\_PhpScoperb458b528613f\PhpParser\Node $node)
    {
        \array_pop($this->stack);
    }
}
