<?php

declare (strict_types=1);
namespace _PhpScoper1e80a2e03314\PhpParser\NodeVisitor;

use function array_pop;
use function count;
use _PhpScoper1e80a2e03314\PhpParser\Node;
use _PhpScoper1e80a2e03314\PhpParser\NodeVisitorAbstract;
/**
 * Visitor that connects a child node to its parent node.
 *
 * On the child node, the parent node can be accessed through
 * <code>$node->getAttribute('parent')</code>.
 */
final class ParentConnectingVisitor extends \_PhpScoper1e80a2e03314\PhpParser\NodeVisitorAbstract
{
    /**
     * @var Node[]
     */
    private $stack = [];
    public function beforeTraverse(array $nodes)
    {
        $this->stack = [];
    }
    public function enterNode(\_PhpScoper1e80a2e03314\PhpParser\Node $node)
    {
        if (!empty($this->stack)) {
            $node->setAttribute('parent', $this->stack[\count($this->stack) - 1]);
        }
        $this->stack[] = $node;
    }
    public function leaveNode(\_PhpScoper1e80a2e03314\PhpParser\Node $node)
    {
        \array_pop($this->stack);
    }
}
