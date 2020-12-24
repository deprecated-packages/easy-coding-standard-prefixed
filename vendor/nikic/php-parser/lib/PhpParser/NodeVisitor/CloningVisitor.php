<?php

declare (strict_types=1);
namespace _PhpScopera37d6fb0b1ab\PhpParser\NodeVisitor;

use _PhpScopera37d6fb0b1ab\PhpParser\Node;
use _PhpScopera37d6fb0b1ab\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScopera37d6fb0b1ab\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScopera37d6fb0b1ab\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
