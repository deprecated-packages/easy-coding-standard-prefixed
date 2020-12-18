<?php

declare (strict_types=1);
namespace _PhpScoperd8b12759ee0d\PhpParser\NodeVisitor;

use _PhpScoperd8b12759ee0d\PhpParser\Node;
use _PhpScoperd8b12759ee0d\PhpParser\NodeVisitorAbstract;
/**
 * Visitor cloning all nodes and linking to the original nodes using an attribute.
 *
 * This visitor is required to perform format-preserving pretty prints.
 */
class CloningVisitor extends \_PhpScoperd8b12759ee0d\PhpParser\NodeVisitorAbstract
{
    public function enterNode(\_PhpScoperd8b12759ee0d\PhpParser\Node $origNode)
    {
        $node = clone $origNode;
        $node->setAttribute('origNode', $origNode);
        return $node;
    }
}
