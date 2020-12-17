<?php

declare (strict_types=1);
namespace _PhpScopercf909b66eba8\PhpParser\NodeVisitor;

use _PhpScopercf909b66eba8\PhpParser\Node;
use _PhpScopercf909b66eba8\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScopercf909b66eba8\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScopercf909b66eba8\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
