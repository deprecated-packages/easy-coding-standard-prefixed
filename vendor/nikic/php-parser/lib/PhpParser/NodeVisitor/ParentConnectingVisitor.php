<?php

declare (strict_types=1);
namespace _PhpScoperd675aaf00c76\PhpParser\NodeVisitor;

use function array_pop;
use function count;
use _PhpScoperd675aaf00c76\PhpParser\Node;
use _PhpScoperd675aaf00c76\PhpParser\NodeVisitorAbstract;
/**
 * Visitor that connects a child node to its parent node.
 *
 * On the child node, the parent node can be accessed through
 * <code>$node->getAttribute('parent')</code>.
 */
final class ParentConnectingVisitor extends \_PhpScoperd675aaf00c76\PhpParser\NodeVisitorAbstract
{
    /**
     * @var Node[]
     */
    private $stack = [];
    public function beforeTraverse(array $nodes)
    {
        $this->stack = [];
    }
    public function enterNode(\_PhpScoperd675aaf00c76\PhpParser\Node $node)
    {
        if (!empty($this->stack)) {
            $node->setAttribute('parent', $this->stack[\count($this->stack) - 1]);
        }
        $this->stack[] = $node;
    }
    public function leaveNode(\_PhpScoperd675aaf00c76\PhpParser\Node $node)
    {
        \array_pop($this->stack);
    }
}
