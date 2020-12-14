<?php

declare (strict_types=1);
namespace _PhpScoper6224e3b16fcc\PhpParser\NodeVisitor;

use function array_pop;
use function count;
use _PhpScoper6224e3b16fcc\PhpParser\Node;
use _PhpScoper6224e3b16fcc\PhpParser\NodeVisitorAbstract;
/**
 * Visitor that connects a child node to its parent node.
 *
 * On the child node, the parent node can be accessed through
 * <code>$node->getAttribute('parent')</code>.
 */
final class ParentConnectingVisitor extends \_PhpScoper6224e3b16fcc\PhpParser\NodeVisitorAbstract
{
    /**
     * @var Node[]
     */
    private $stack = [];
    public function beforeTraverse(array $nodes)
    {
        $this->stack = [];
    }
    public function enterNode(\_PhpScoper6224e3b16fcc\PhpParser\Node $node)
    {
        if (!empty($this->stack)) {
            $node->setAttribute('parent', $this->stack[\count($this->stack) - 1]);
        }
        $this->stack[] = $node;
    }
    public function leaveNode(\_PhpScoper6224e3b16fcc\PhpParser\Node $node)
    {
        \array_pop($this->stack);
    }
}
