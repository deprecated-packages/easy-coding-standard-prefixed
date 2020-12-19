<?php

declare (strict_types=1);
namespace _PhpScopera6f918786d5c\PhpParser\NodeVisitor;

use _PhpScopera6f918786d5c\PhpParser\Node;
use _PhpScopera6f918786d5c\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScopera6f918786d5c\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScopera6f918786d5c\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
