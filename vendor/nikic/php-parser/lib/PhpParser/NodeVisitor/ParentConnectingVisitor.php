<?php

declare (strict_types=1);
namespace _PhpScoper326af2119eba\PhpParser\NodeVisitor;

use function array_pop;
use function count;
use _PhpScoper326af2119eba\PhpParser\Node;
use _PhpScoper326af2119eba\PhpParser\NodeVisitorAbstract;
/**
 * Visitor that connects a child node to its parent node.
 *
 * On the child node, the parent node can be accessed through
 * <code>$node->getAttribute('parent')</code>.
 */
final class ParentConnectingVisitor extends \_PhpScoper326af2119eba\PhpParser\NodeVisitorAbstract
{
    /**
     * @var Node[]
     */
    private $stack = [];
    public function beforeTraverse(array $nodes)
    {
        $this->stack = [];
    }
    public function enterNode(\_PhpScoper326af2119eba\PhpParser\Node $node)
    {
        if (!empty($this->stack)) {
            $node->setAttribute('parent', $this->stack[\count($this->stack) - 1]);
        }
        $this->stack[] = $node;
    }
    public function leaveNode(\_PhpScoper326af2119eba\PhpParser\Node $node)
    {
        \array_pop($this->stack);
    }
}
