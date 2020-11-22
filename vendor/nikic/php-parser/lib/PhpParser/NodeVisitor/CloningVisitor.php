<?php

declare (strict_types=1);
namespace _PhpScopera88a8b9f064a\PhpParser\NodeVisitor;

use _PhpScopera88a8b9f064a\PhpParser\Node;
use _PhpScopera88a8b9f064a\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScopera88a8b9f064a\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScopera88a8b9f064a\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
