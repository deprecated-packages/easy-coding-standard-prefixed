<?php

declare (strict_types=1);
namespace _PhpScopera8f555a7493c\PhpParser\NodeVisitor;

use _PhpScopera8f555a7493c\PhpParser\Node;
use _PhpScopera8f555a7493c\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScopera8f555a7493c\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScopera8f555a7493c\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
