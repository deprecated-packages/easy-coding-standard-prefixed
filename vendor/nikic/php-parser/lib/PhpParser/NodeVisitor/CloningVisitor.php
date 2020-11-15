<?php

declare (strict_types=1);
namespace _PhpScopercb576ca159b5\PhpParser\NodeVisitor;

use _PhpScopercb576ca159b5\PhpParser\Node;
use _PhpScopercb576ca159b5\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScopercb576ca159b5\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScopercb576ca159b5\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
