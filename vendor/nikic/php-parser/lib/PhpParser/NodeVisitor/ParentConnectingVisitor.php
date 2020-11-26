<?php

declare (strict_types=1);
namespace _PhpScoper4a718ec9156e\PhpParser\NodeVisitor;

use function array_pop;
use function count;
use _PhpScoper4a718ec9156e\PhpParser\Node;
use _PhpScoper4a718ec9156e\PhpParser\NodeVisitorAbstract;
/**
 * Visitor that connects a child node to its parent node.
 *
 * On the child node, the parent node can be accessed through
 * <code>$node->getAttribute('parent')</code>.
 */
final class ParentConnectingVisitor extends \_PhpScoper4a718ec9156e\PhpParser\NodeVisitorAbstract
{
    /**
     * @var Node[]
     */
    private $stack = [];
    public function beforeTraverse(array $nodes)
    {
        $this->stack = [];
    }
    public function enterNode(\_PhpScoper4a718ec9156e\PhpParser\Node $node)
    {
        if (!empty($this->stack)) {
            $node->setAttribute('parent', $this->stack[\count($this->stack) - 1]);
        }
        $this->stack[] = $node;
    }
    public function leaveNode(\_PhpScoper4a718ec9156e\PhpParser\Node $node)
    {
        \array_pop($this->stack);
    }
}
