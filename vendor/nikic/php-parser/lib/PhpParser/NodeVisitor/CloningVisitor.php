<?php

declare (strict_types=1);
namespace _PhpScopera23ebff5477f\PhpParser\NodeVisitor;

use _PhpScopera23ebff5477f\PhpParser\Node;
use _PhpScopera23ebff5477f\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScopera23ebff5477f\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScopera23ebff5477f\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
