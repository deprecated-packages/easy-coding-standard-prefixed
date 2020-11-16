<?php

declare (strict_types=1);
namespace _PhpScoperedc2e0c967db\PhpParser\NodeVisitor;

use _PhpScoperedc2e0c967db\PhpParser\Node;
use _PhpScoperedc2e0c967db\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoperedc2e0c967db\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoperedc2e0c967db\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
