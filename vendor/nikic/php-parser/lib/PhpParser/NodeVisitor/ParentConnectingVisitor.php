<?php

declare (strict_types=1);
namespace _PhpScoperc75fd40d7a6e\PhpParser\NodeVisitor;

use function array_pop;
use function count;
use _PhpScoperc75fd40d7a6e\PhpParser\Node;
use _PhpScoperc75fd40d7a6e\PhpParser\NodeVisitorAbstract;
/**
 * Visitor that connects a child node to its parent node.
 *
 * On the child node, the parent node can be accessed through
 * <code>$node->getAttribute('parent')</code>.
 */
final class ParentConnectingVisitor extends \_PhpScoperc75fd40d7a6e\PhpParser\NodeVisitorAbstract
{
    /**
     * @var Node[]
     */
    private $stack = [];
    public function beforeTraverse(array $nodes)
    {
        $this->stack = [];
    }
    public function enterNode(\_PhpScoperc75fd40d7a6e\PhpParser\Node $node)
    {
        if (!empty($this->stack)) {
            $node->setAttribute('parent', $this->stack[\count($this->stack) - 1]);
        }
        $this->stack[] = $node;
    }
    public function leaveNode(\_PhpScoperc75fd40d7a6e\PhpParser\Node $node)
    {
        \array_pop($this->stack);
    }
}
