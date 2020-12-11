<?php

declare (strict_types=1);
namespace _PhpScopere4fa57261c04\PhpParser\NodeVisitor;

use function array_pop;
use function count;
use _PhpScopere4fa57261c04\PhpParser\Node;
use _PhpScopere4fa57261c04\PhpParser\NodeVisitorAbstract;
/**
 * Visitor that connects a child node to its parent node.
 *
 * On the child node, the parent node can be accessed through
 * <code>$node->getAttribute('parent')</code>.
 */
final class ParentConnectingVisitor extends \_PhpScopere4fa57261c04\PhpParser\NodeVisitorAbstract
{
    /**
     * @var Node[]
     */
    private $stack = [];
    public function beforeTraverse(array $nodes)
    {
        $this->stack = [];
    }
    public function enterNode(\_PhpScopere4fa57261c04\PhpParser\Node $node)
    {
        if (!empty($this->stack)) {
            $node->setAttribute('parent', $this->stack[\count($this->stack) - 1]);
        }
        $this->stack[] = $node;
    }
    public function leaveNode(\_PhpScopere4fa57261c04\PhpParser\Node $node)
    {
        \array_pop($this->stack);
    }
}
