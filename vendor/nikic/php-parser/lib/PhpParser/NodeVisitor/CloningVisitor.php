<?php

declare (strict_types=1);
namespace _PhpScopercae980ebf12d\PhpParser\NodeVisitor;

use _PhpScopercae980ebf12d\PhpParser\Node;
use _PhpScopercae980ebf12d\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScopercae980ebf12d\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScopercae980ebf12d\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
