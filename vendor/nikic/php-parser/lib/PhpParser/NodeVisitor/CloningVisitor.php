<?php

declare (strict_types=1);
namespace _PhpScopera061b8a47e36\PhpParser\NodeVisitor;

use _PhpScopera061b8a47e36\PhpParser\Node;
use _PhpScopera061b8a47e36\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScopera061b8a47e36\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScopera061b8a47e36\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
