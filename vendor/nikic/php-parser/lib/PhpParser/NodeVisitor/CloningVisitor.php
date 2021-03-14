<?php

declare (strict_types=1);
namespace _PhpScopere050faf861e6\PhpParser\NodeVisitor;

use _PhpScopere050faf861e6\PhpParser\Node;
use _PhpScopere050faf861e6\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScopere050faf861e6\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScopere050faf861e6\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
