<?php

declare (strict_types=1);
namespace _PhpScoper04022cd986ec\PhpParser\NodeVisitor;

use function array_pop;
use function count;
use _PhpScoper04022cd986ec\PhpParser\Node;
use _PhpScoper04022cd986ec\PhpParser\NodeVisitorAbstract;
/**
 * Visitor that connects a child node to its parent node.
 *
 * On the child node, the parent node can be accessed through
 * <code>$node->getAttribute('parent')</code>.
 */
final class ParentConnectingVisitor extends \_PhpScoper04022cd986ec\PhpParser\NodeVisitorAbstract
{
    /**
     * @var Node[]
     */
    private $stack = [];
    public function beforeTraverse(array $nodes)
    {
        $this->stack = [];
    }
    public function enterNode(\_PhpScoper04022cd986ec\PhpParser\Node $node)
    {
        if (!empty($this->stack)) {
            $node->setAttribute('parent', $this->stack[\count($this->stack) - 1]);
        }
        $this->stack[] = $node;
    }
    public function leaveNode(\_PhpScoper04022cd986ec\PhpParser\Node $node)
    {
        \array_pop($this->stack);
    }
}
