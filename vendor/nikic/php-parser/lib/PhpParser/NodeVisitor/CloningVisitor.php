<?php

declare (strict_types=1);
namespace _PhpScoperfcee700af3df\PhpParser\NodeVisitor;

use _PhpScoperfcee700af3df\PhpParser\Node;
use _PhpScoperfcee700af3df\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoperfcee700af3df\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoperfcee700af3df\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
