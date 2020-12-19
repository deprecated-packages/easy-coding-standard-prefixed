<?php

declare (strict_types=1);
namespace _PhpScoperfb2c402b972b\PhpParser\NodeVisitor;

use function array_pop;
use function count;
use _PhpScoperfb2c402b972b\PhpParser\Node;
use _PhpScoperfb2c402b972b\PhpParser\NodeVisitorAbstract;
/**
 * Visitor that connects a child node to its parent node.
 *
 * On the child node, the parent node can be accessed through
 * <code>$node->getAttribute('parent')</code>.
 */
final class ParentConnectingVisitor extends \_PhpScoperfb2c402b972b\PhpParser\NodeVisitorAbstract
{
    /**
     * @var Node[]
     */
    private $stack = [];
    public function beforeTraverse(array $nodes)
    {
        $this->stack = [];
    }
    public function enterNode(\_PhpScoperfb2c402b972b\PhpParser\Node $node)
    {
        if (!empty($this->stack)) {
            $node->setAttribute('parent', $this->stack[\count($this->stack) - 1]);
        }
        $this->stack[] = $node;
    }
    public function leaveNode(\_PhpScoperfb2c402b972b\PhpParser\Node $node)
    {
        \array_pop($this->stack);
    }
}
