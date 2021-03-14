<?php

declare (strict_types=1);
namespace _PhpScoperfb0714773dc5\PhpParser\NodeVisitor;

use _PhpScoperfb0714773dc5\PhpParser\Node;
use _PhpScoperfb0714773dc5\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoperfb0714773dc5\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoperfb0714773dc5\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
