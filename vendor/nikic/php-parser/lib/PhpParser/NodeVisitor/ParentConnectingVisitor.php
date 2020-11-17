<?php

declare (strict_types=1);
namespace _PhpScoperad4b7e2c09d8\PhpParser\NodeVisitor;

use function array_pop;
use function count;
use _PhpScoperad4b7e2c09d8\PhpParser\Node;
use _PhpScoperad4b7e2c09d8\PhpParser\NodeVisitorAbstract;
/**
 * Visitor that connects a child node to its parent node.
 *
 * On the child node, the parent node can be accessed through
 * <code>$node->getAttribute('parent')</code>.
 */
final class ParentConnectingVisitor extends \_PhpScoperad4b7e2c09d8\PhpParser\NodeVisitorAbstract
{
    /**
     * @var Node[]
     */
    private $stack = [];
    public function beforeTraverse(array $nodes)
    {
        $this->stack = [];
    }
    public function enterNode(\_PhpScoperad4b7e2c09d8\PhpParser\Node $node)
    {
        if (!empty($this->stack)) {
            $node->setAttribute('parent', $this->stack[\count($this->stack) - 1]);
        }
        $this->stack[] = $node;
    }
    public function leaveNode(\_PhpScoperad4b7e2c09d8\PhpParser\Node $node)
    {
        \array_pop($this->stack);
    }
}
